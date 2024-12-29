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
        return view('laporanrutin', compact('data'));
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
        return view('catat', compact('pelanggarans', 'tingkat'));
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

        // Kirim data ke view untuk ditampilkan dalam form
        return view('editcatatrutin', compact('operasiRutin', 'pelanggarans', 'tingkat'));
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
        $operasiRutin = OperasiRutin::find($id);

        if (!$operasiRutin) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }

        $request->validate([
            'nim' => 'nullable|regex:/^[0-9]{9}$/',
            'name' => 'nullable|string|max:255',
            'violation' => 'nullable|string|max:255',
            'nas' => 'nullable',
        ]);

        // Update data hanya pada properti yang diberikan
        $operasiRutin->update($request->only(['nim', 'name', 'violation', 'nas']));

        return response()->json([
            'message' => 'Data berhasil diperbarui',
            'data' => $operasiRutin
        ]);
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
