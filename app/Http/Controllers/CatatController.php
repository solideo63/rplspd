<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatatController extends Controller
{
    public function showForm(Request $request)
    {
        $tingkat = $request->query('tingkat'); // Ambil nilai dari query string
        return view('catat', compact('tingkat'));
    }
}
