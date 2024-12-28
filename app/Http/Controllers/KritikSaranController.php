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

        $krisar = new KritikSaran();
        $krisar->kritiksaran = $request->kritiksaran;
        $krisar->save();

        return redirect()->route('kritiksaran')->with('success', 'Kritik dan Saran berhasil dikirim!');
        // Validasi input
        
    }

    
}
