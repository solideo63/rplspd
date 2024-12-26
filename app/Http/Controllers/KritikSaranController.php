<?php

namespace App\Http\Controllers;

use App\Models\KritikSaran;
use Illuminate\Http\Request;

class KritikSaranController extends Controller
{
    function index()
    {
        return view('kritiksaran');
    }

    public function kirimKritikSaran(Request $request)
    {
        // Validasi input
        $request->validate([
            'kritiksaran' => 'required|string|max:5000',
        ]);

        // Simpan ke database
        KritikSaran::create([
            'isi_kritik_saran' => $request->kritiksaran,
        ]);

        // Redirect dengan pesan sukses
        return redirect('/kirim-kritik-saran')->with('success', 'Kritik dan Saran berhasil dikirim!');
    }
}
