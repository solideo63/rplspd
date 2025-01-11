<?php

namespace App\Http\Controllers;

use Exception;
use Carbon\Carbon;
use App\Models\Pelanggaran;
use Illuminate\Http\Request;
use App\Models\PenindakanHarian;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PenindakanHarianExport;
use App\Http\Requests\StorePenindakanHarianRequest;
use App\Http\Requests\UpdatePenindakanHarianRequest;

class PenindakanHarianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil semua data dari tabel operasi_rutin
        $data = PenindakanHarian::orderBy('created_at', 'desc');

        // Mengirim data ke view
        return view('penindakanharian.laporanharian', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pelanggarans = Pelanggaran::all();

        return view('penindakanharian.catatharian', compact('pelanggarans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required|regex:/^[0-9]{9}$/', // NIM harus 9 digit angka
            'nama_mahasiswa' => 'required|string|max:255',
            'kelas' => 'required|string',
            'pelanggaran' => 'required',
            'tingkat' => 'required|integer',
        ]);

        // Tambahkan nama pencatat dari session login

        $nim = $request->nim;
        $nama = $request->nama_mahasiswa;
        $kelas = $request->kelas;
        $pelanggaran = $request->pelanggaran;
        $tingkat = $request->tingkat;
        $pencatat = Auth::user()->name;

        $data = [];

        // Menggunakan Carbon untuk mendapatkan waktu lokal sesuai zona waktu Asia/Jakarta
        $timestamp = Carbon::now('Asia/Jakarta'); // Menetapkan waktu sesuai dengan zona waktu Jakarta

        if (is_array($pelanggaran)) {
            foreach ($pelanggaran as $kode) {
                $namaPelanggaran = Pelanggaran::where('kodePelanggaran', $kode)->value('namaPelanggaran') ?? 'Unknown'; // Ambil nama pelanggaran
                array_push($data, [
                    'nim' => $nim,
                    'nama_mahasiswa' => $nama,
                    'kelas' => $kelas,
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
                'kelas' => $kelas,
                'tingkat' => $tingkat,
                'pelanggaran' => $namaPelanggaran,
                'nama_pencatat' => $pencatat,
                'created_at' => $timestamp, // Gunakan timestamp sesuai zona waktu lokal
            ]);
        }

        PenindakanHarian::insert($data);
        // Simpan data ke database menggunakan Eloquent
        // $operasiRutin = OperasiRutin::create($data); // Pastikan model OperasiRutin memiliki $fillable yang sesuai

        // Setelah menyimpan data, panggil EmailController untuk mengirim email
        app(EmailController::class)->sendEmail($request); // Pastikan fungsi sendEmail sudah benar

        // Redirect ke halaman view catat.blade.php dengan pesan sukses
        return redirect()->route('catat.harian') // Pastikan Anda sudah mendefinisikan route ini
            ->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $penindakanHarian = PenindakanHarian::find($id);

        if (!$penindakanHarian) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }

        return response()->json([
            'message' => 'Data berhasil ditemukan',
            'data' => $penindakanHarian
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Ambil data operasi rutin yang sesuai dengan ID
        $penindakanHarian = PenindakanHarian::findOrFail($id);

        // Ambil semua data pelanggaran
        $pelanggarans = Pelanggaran::all();

        $selectedPelanggaran = $penindakanHarian->pelanggaran;

        // dd($selectedPelanggaran);
        // Kirim data ke view untuk ditampilkan dalam form
        return view('penindakanharian.editcatatharian', compact('operasiUmum', 'pelanggarans', 'selectedPelanggaran'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validasi input dari form
        $request->validate([
            'nim' => 'required|regex:/^[0-9]{9}$/', // NIM harus 9 digit angka
            'nama_mahasiswa' => 'required|string|max:255',
            'kelas' => 'required|string',
            'pelanggaran' => 'required', // Pelanggaran harus berupa kode pelanggaran tunggal
            'tingkat' => 'required|integer',
        ]);

        $pelanggarans = Pelanggaran::all();

        // Cari data OperasiRutin berdasarkan ID
        $penindakanHarian = PenindakanHarian::find($id);

        if (!$penindakanHarian) {
            return redirect()->route('catatedit.harian', $id)->with('error', 'Data tidak ditemukan');
        }

        // Ambil data dari request
        $nim = $request->nim;
        $nama = $request->nama_mahasiswa;
        $kelas = $request->kelas;
        $kodePelanggaran = $request->pelanggaran; // Kode pelanggaran tunggal
        $tingkat = $request->tingkat;
        $pencatat = Auth::user()->name;

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
        $penindakanHarian->update([
            'nim' => $nim,
            'nama_mahasiswa' => $nama,
            'kelas' => $kelas,
            'tingkat' => $tingkat, // Hanya memperbarui tingkat
            'pelanggaran' => $namaPelanggaran, // Memastikan pelanggaran tetap sesuai dengan kode yang dipilih
            'nama_pencatat' => $pencatat,
            'updated_at' => $timestamp,
        ]);

        app(EmailController::class)->sendEmail($request);

        // Redirect ke halaman edit dengan pesan sukses
        return redirect()->route('laporanharian', $id)->with('success', 'Data berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $penindakanHarian = PenindakanHarian::find($id);

            if (!$penindakanHarian) {
                return response()->json(['message' => 'Data tidak ditemukan'], 404);
            }

            $penindakanHarian->delete();

            return redirect()->route('laporanharian')->with('success', 'Data berhasil dihapus');
        } catch (Exception $e) {
            // Menangani kesalahan jika terjadi exception
            return redirect()->route('laporanharian')->with('error', 'Data gagal dihapus: ' . $e->getMessage());
        }
    }

    public function filter(Request $request)
    {
        // Ambil query builder untuk OperasiRutin
        $query = PenindakanHarian::query();

        // Filter berdasarkan tanggal jika parameter 'tanggal' ada dan tidak kosong
        if ($request->has('tanggal') && $request->tanggal != '') {
            $query->whereDate('created_at', $request->tanggal);
        }

        // Filter berdasarkan tingkat jika parameter 'tingkat' ada dan tidak kosong
        if ($request->has('tingkat') && $request->tingkat != '') {
            $query->where('tingkat', $request->tingkat);
        }

        if ($request->has('nama') && $request->nama != '') {
            $query->where('nama_mahasiswa', 'like', '%' . $request->nama . '%');
        }

        // Ambil data hasil filter
        $data = $query->get();

        // Kirim data ke view
        return view('penindakanharian.laporanharian', compact('data'));
    }

    public function downloadFilteredData(Request $request, $format, \Barryvdh\DomPDF\PDF $pdfInstance)
    {
        $tanggal = $request->input('tanggal');

        // Filter data berdasarkan tanggal
        $data = PenindakanHarian::whereDate('created_at', $tanggal)->get();

        if ($format === 'excel') {
            return Excel::download(new PenindakanHarianExport($data, $tanggal), "laporan_penindakan_harian_{$tanggal}.xlsx");
        } elseif ($format === 'pdf') {
            $pdf = $pdfInstance->loadView('exports.laporanharian_pdf', compact('data', 'tanggal'));
            $pdf->setPaper('A4', 'portrait');
            return $pdf->download("laporan_penindakan_harian_{$tanggal}.pdf");
        } elseif ($format === 'csv') {
            return Excel::download(new PenindakanHarianExport($data, $tanggal), "laporan_penindakan_harian_{$tanggal}.csv", \Maatwebsite\Excel\Excel::CSV);
        } else {
            return redirect()->back()->withErrors('Format tidak valid!');
        }
    }
}
