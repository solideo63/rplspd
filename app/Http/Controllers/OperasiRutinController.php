<?php

namespace App\Http\Controllers;

use Exception;
use Carbon\Carbon;
use App\Models\Pelanggaran;
use App\Models\OperasiRutin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OperasiRutinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $operasiRutin = OperasiRutin::all();
    //     return response()->json([
    //         'message' => 'Data berhasil diambil',
    //         'data' => $operasiRutin
    //     ]);
    // }


    public function index()
    {
        // Mengambil semua data dari tabel operasi_rutin
        $data = OperasiRutin::all();

        // Mengirim data ke view
        return view('operasirutin.laporanrutin', compact('data'));
    }

    public function showForm(Request $request)
    {
        $pelanggarans = Pelanggaran::all();

        // Jika tidak berada di halaman showForm dan session tingkat ada, maka hapus session tingkat
        if (!request()->routeIs('catat')) {
            session()->forget('tingkat');
        }

        // Ambil nilai tingkat dari query string atau session
        $tingkat = $request->query('tingkat') ?? session('tingkat');

        // Jika tingkat ada di query string, simpan di session
        if ($tingkat) {
            session(['tingkat' => $tingkat]);
        }
        return view('operasirutin.catat', compact('pelanggarans', 'tingkat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required|regex:/^[0-9]{9}$/', // NIM harus 9 digit angka
            'nama_mahasiswa' => 'required|string|max:255',
            'pelanggaran' => 'required',
            'tingkat' => 'required|integer',
        ]);

        // Tambahkan nama pencatat dari session login

        $nim = $request->nim;
        $nama = $request->nama_mahasiswa;
        $pelanggaran = $request->pelanggaran;
        $tingkat = $request->tingkat;
        $pencatat = Auth::user()->name;
        session(['tingkat' => $tingkat]);
        // $data = $request->only(['nim', 'nama_mahasiswa', 'pelanggaran']); // Ambil data request
        // $data['nama_pencatat'] = Auth::user()->name; // Tambahkan nama pencatat dari session login

        $data = [];

        // Menggunakan Carbon untuk mendapatkan waktu lokal sesuai zona waktu Asia/Jakarta
        $timestamp = Carbon::now('Asia/Jakarta'); // Menetapkan waktu sesuai dengan zona waktu Jakarta

        if (is_array($pelanggaran)) {
            foreach ($pelanggaran as $kode) {
                $namaPelanggaran = Pelanggaran::where('kodePelanggaran', $kode)->value('namaPelanggaran') ?? 'Unknown'; // Ambil nama pelanggaran
                array_push($data, [
                    'nim' => $nim,
                    'nama_mahasiswa' => $nama,
                    'tingkat' => $tingkat,
                    'pelanggaran' => $namaPelanggaran,
                    'nama_pencatat' => $pencatat,
                    'created_at' => $timestamp, // Gunakan timestamp sesuai zona waktu lokal
                ]);
            }
        } else {
            $namaPelanggaran = Pelanggaran::where('kodePelanggaran', $pelanggaran)->value('namaPelanggaran') ?? 'Unknown'; // Ambil nama pelanggaran
            array_push($data, [
                'nim' => $nim,
                'nama_mahasiswa' => $nama,
                'tingkat' => $tingkat,
                'pelanggaran' => $namaPelanggaran,
                'nama_pencatat' => $pencatat,
                'created_at' => $timestamp, // Gunakan timestamp sesuai zona waktu lokal
            ]);
        }

        OperasiRutin::insert($data);
        // Simpan data ke database menggunakan Eloquent
        // $operasiRutin = OperasiRutin::create($data); // Pastikan model OperasiRutin memiliki $fillable yang sesuai

        // Setelah menyimpan data, panggil EmailController untuk mengirim email
        app(EmailController::class)->sendEmail($request); // Pastikan fungsi sendEmail sudah benar

        // Redirect ke halaman view catat.blade.php dengan pesan sukses
        return redirect()->route('catat') // Pastikan Anda sudah mendefinisikan route ini
            ->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $operasiRutin = OperasiRutin::find($id);

        if (!$operasiRutin) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }

        return response()->json([
            'message' => 'Data berhasil ditemukan',
            'data' => $operasiRutin
        ]);
    }

    public function edit($id)
    {
        session()->forget('tingkat');
        // Ambil data operasi rutin yang sesuai dengan ID
        $operasiRutin = OperasiRutin::findOrFail($id);

        // Ambil semua data pelanggaran
        $pelanggarans = Pelanggaran::all();

        // Ambil data tingkat dari session atau defaultkan ke tingkat operasi rutin yang dipilih
        $tingkat = session('tingkat') ?? $operasiRutin->tingkat;

        $selectedPelanggaran = $operasiRutin->pelanggaran;

        // dd($selectedPelanggaran);
        // Kirim data ke view untuk ditampilkan dalam form
        return view('operasirutin.editcatatrutin', compact('operasiRutin', 'pelanggarans', 'tingkat', 'selectedPelanggaran'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        // Validasi input dari form
        $request->validate([
            'nim' => 'required|regex:/^[0-9]{9}$/', // NIM harus 9 digit angka
            'nama_mahasiswa' => 'required|string|max:255',
            'pelanggaran' => 'required', // Pelanggaran harus berupa kode pelanggaran tunggal
            'tingkat' => 'required|integer',
        ]);

        $pelanggarans = Pelanggaran::all();

        // Cari data OperasiRutin berdasarkan ID
        $operasiRutin = OperasiRutin::find($id);

        if (!$operasiRutin) {
            return redirect()->route('catatedit', $id)->with('error', 'Data tidak ditemukan');
        }
        // session()->forget('tingkat');

        // Ambil data dari request
        $nim = $request->nim;
        $nama = $request->nama_mahasiswa;
        $kodePelanggaran = $request->pelanggaran; // Kode pelanggaran tunggal
        $tingkat = $request->tingkat;
        $pencatat = Auth::user()->name;

        session(['tingkat' => $tingkat]);

        // Jika pelanggaran berupa kodePelanggaran
        $namaPelanggaran = null;

        // Cek apakah $kodePelanggaran adalah namaPelanggaran
        $existingPelanggaran = $pelanggarans->firstWhere('namaPelanggaran', $kodePelanggaran);

        if ($existingPelanggaran) {
            // Jika ditemukan sebagai nama pelanggaran
            $namaPelanggaran = $kodePelanggaran; // Pelanggaran yang dikirim adalah namaPelanggaran
        } else {
            // Jika tidak ditemukan, berarti pelanggaran adalah kodePelanggaran
            $namaPelanggaran = Pelanggaran::where('kodePelanggaran', $kodePelanggaran)->value('namaPelanggaran') ?? 'Unknown';
        }

        $timestamp = Carbon::now('Asia/Jakarta'); // Menetapkan waktu sesuai dengan zona waktu Jakarta

        // Update data di database
        $operasiRutin->update([
            'nim' => $nim,
            'nama_mahasiswa' => $nama,
            'tingkat' => $tingkat, // Hanya memperbarui tingkat
            'pelanggaran' => $namaPelanggaran, // Memastikan pelanggaran tetap sesuai dengan kode yang dipilih
            'nama_pencatat' => $pencatat,
            'updated_at' => $timestamp,
        ]);

        app(EmailController::class)->sendEmail($request);
        // dd($operasiRutin->fresh());

        // Redirect ke halaman edit dengan pesan sukses
        return redirect()->route('laporanrutin', $id)->with('success', 'Data berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $operasiRutin = OperasiRutin::find($id);

            if (!$operasiRutin) {
                return response()->json(['message' => 'Data tidak ditemukan'], 404);
            }

            $operasiRutin->delete();

            return redirect()->route('laporanrutin')->with('success', 'Data berhasil dihapus');
        } catch (Exception $e) {
            // Menangani kesalahan jika terjadi exception
            return redirect()->route('laporanrutin')->with('error', 'Data gagal dihapus: ' . $e->getMessage());
        }
    }
}
