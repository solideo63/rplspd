<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $request->validate([
            'nim' => 'required|regex:/^[0-9]{9}$/', // Validasi NIM harus 9 digit angka
            'nama_mahasiswa' => 'required|string|max:255',
            'pelanggaran' => 'required|string|max:255',
        ]);

        $email = $request->nim . '@stis.ac.id';

        $data = [
            'nim' => $request->nim,
            'nama_mahasiswa' => $request->nama_mahasiswa,
            'pelanggaran' => $request->pelanggaran,
        ];

        try {
            Mail::send('emails.pelanggaran', $data, function ($message) use ($email) {
                $message->to($email)->subject('Pencatatan Pelanggaran');
            });

            return back()->with('success', 'Email berhasil dikirim ke ' . $email);
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal mengirim email: ' . $e->getMessage());
        }
    }
}
