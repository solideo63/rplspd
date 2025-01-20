<?php

namespace App\Http\Controllers;

use App\Models\Pelanggaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $request->validate([
            'nim' => 'required|regex:/^[0-9]{9}$/', // Validasi NIM harus 9 digit angka
            'nama_mahasiswa' => 'required|string|max:255',
            'kelas' => 'required|string',
            'pelanggaran' => 'required',
        ]);

        $email = $request->nim . '@stis.ac.id';
        $nim = $request->nim;
        $name = $request->nama_mahasiswa;
        $kelas = $request->kelas;
        $pelanggaran = $request->pelanggaran; // Bisa berupa array atau nilai tunggal

        // Ubah kode pelanggaran menjadi nama pelanggaran
        if (is_array($pelanggaran)) {
            $namaPelanggaran = Pelanggaran::whereIn('kodePelanggaran', $pelanggaran)->pluck('namaPelanggaran')->toArray();
        } else {
            $namaPelanggaran = Pelanggaran::where('kodePelanggaran', $pelanggaran)->pluck('namaPelanggaran')->toArray();
        }

        // Data untuk email
        $data = [
            'nim' => $nim,
            'nama_mahasiswa' => $name,
            'kelas' => $kelas,
            'pelanggarans' => $namaPelanggaran,
        ];

        try {
            Mail::send('emails.pelanggaran', $data, function ($message) use ($email) {
                $message->to($email)->subject('!! PENCATATAN PELANGGARAN !!');
            });
            // return back()->with('success', 'Email berhasil dikirim ke ' . $email);
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal mengirim email: ' . $e->getMessage());
        }
    }

    public function sendEmailUpdate(Request $request)
    {
        $request->validate([
            'nim' => 'required|regex:/^[0-9]{9}$/', // Validasi NIM harus 9 digit angka
            'nama_mahasiswa' => 'required|string|max:255',
            'kelas' => 'required|string',
            'pelanggaran' => 'required', // Pastikan pelanggaran diisi
        ]);

        $email = $request->nim . '@stis.ac.id'; // Alamat email berdasarkan NIM
        $nim = $request->nim;
        $name = $request->nama_mahasiswa;
        $kelas = $request->kelas;
        $pelanggaran = $request->pelanggaran; // Bisa berupa array atau nilai tunggal

        // Ubah kode pelanggaran menjadi nama pelanggaran
        if (is_array($pelanggaran)) {
            $namaPelanggaran = Pelanggaran::whereIn('kodePelanggaran', $pelanggaran)->pluck('namaPelanggaran')->toArray();
        } else {
            $namaPelanggaran = Pelanggaran::where('kodePelanggaran', $pelanggaran)->pluck('namaPelanggaran')->toArray();
        }

        // Data untuk email
        $data = [
            'nim' => $nim,
            'nama_mahasiswa' => $name,
            'kelas' => $kelas,
            'pelanggarans' => $namaPelanggaran,
        ];

        try {
            Mail::send('emails.update', $data, function ($message) use ($email) {
                $message->to($email)->subject('Perbaikan Data Pelanggaran');
            });

            // return back()->with('success', 'Email pemberitahuan perbaikan berhasil dikirim ke ' . $email);
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal mengirim email: ' . $e->getMessage());
        }
    }
}
