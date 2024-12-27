<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OperasiRutin;
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
            'pelanggaran' => 'required|string|max:255',
        ]);

        // Tambahkan nama pencatat dari session login
        $data = $request->only(['nim', 'nama_mahasiswa', 'pelanggaran']); // Ambil data request
        $data['nama_pencatat'] = Auth::user()->name; // Tambahkan nama pencatat dari session login

        // Simpan data ke database menggunakan Eloquent
        $operasiRutin = OperasiRutin::create($data); // Pastikan model OperasiRutin memiliki $fillable yang sesuai

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
        $operasiRutin = OperasiRutin::find($id);

        if (!$operasiRutin) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }

        $operasiRutin->delete();

        return response()->json(['message' => 'Data berhasil dihapus']);
    }
}
