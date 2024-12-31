<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\OperasiUmum;
use App\Models\Pelanggaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OperasiUmumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil semua data dari tabel operasi_rutin
        $data = OperasiUmum::all();

        // Mengirim data ke view
        return view('operasiumum.laporanumum', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pelanggarans = Pelanggaran::all();

        return view('operasiumum.catatumum', compact('pelanggarans'));
    }

    /**
     * Store a newly created resource in storage.
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

        OperasiUmum::insert($data);
        // Simpan data ke database menggunakan Eloquent
        // $operasiRutin = OperasiRutin::create($data); // Pastikan model OperasiRutin memiliki $fillable yang sesuai

        // Setelah menyimpan data, panggil EmailController untuk mengirim email
        app(EmailController::class)->sendEmail($request); // Pastikan fungsi sendEmail sudah benar

        // Redirect ke halaman view catat.blade.php dengan pesan sukses
        return redirect()->route('operasiumum.catatumum') // Pastikan Anda sudah mendefinisikan route ini
            ->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $operasiUmum = OperasiUmum::find($id);

        if (!$operasiUmum) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }

        return response()->json([
            'message' => 'Data berhasil ditemukan',
            'data' => $operasiUmum
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Ambil data operasi rutin yang sesuai dengan ID
        $operasiUmum = OperasiUmum::findOrFail($id);

        // Ambil semua data pelanggaran
        $pelanggarans = Pelanggaran::all();

        $selectedPelanggaran = $operasiUmum->pelanggaran;

        // dd($selectedPelanggaran);
        // Kirim data ke view untuk ditampilkan dalam form
        return view('operasiumum.editcatatumum', compact('operasiUmum', 'pelanggarans', 'tingkat', 'selectedPelanggaran'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OperasiUmum $operasiUmum)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OperasiUmum $operasiUmum)
    {
        //
    }
}
