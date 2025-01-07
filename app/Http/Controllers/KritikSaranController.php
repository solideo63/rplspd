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

    public function submit(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255', // Nama harus diisi, berupa teks, dan maksimal 255 karakter
            'kritiksaran' => 'required|string|max:1000', // Kritik dan saran harus diisi, berupa teks, dan maksimal 1000 karakter
        ]);

        $krisar = new KritikSaran();
        $krisar->nama = $request->nama; // Simpan nama pengirim
        $krisar->kritiksaran = $request->kritiksaran; // Simpan isi kritik dan saran
        $krisar->save();

        return redirect()->route('kritiksaran')->with('success', 'Kritik dan Saran berhasil dikirim!');
        // Validasi input

    }

    public function view()
    {
        $kritiksaran = KritikSaran::all();

        return view('viewkritiksaran', compact('kritiksaran'));
    }
}
