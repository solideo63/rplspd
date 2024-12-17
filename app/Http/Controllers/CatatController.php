<?php

namespace App\Http\Controllers;

use App\Models\OperasiRutin;
use Illuminate\Http\Request;

class CatatController extends Controller
{
    public function showForm(Request $request)
    {
        $tingkat = $request->query('tingkat'); // Ambil nilai dari query string
        return view('catat', compact('tingkat'));
    }

    public function filterByDateAjax(Request $request)
{
    // Ambil input tanggal dari request
    $date = $request->input('date');

    // Query data berdasarkan tanggal
    $data = OperasiRutin::whereDate('tanggal', $date)->get();

    // Return hasil dalam format JSON
    return response()->json($data);
}

}
