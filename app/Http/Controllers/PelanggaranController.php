<?php

namespace App\Http\Controllers;

use App\Models\Pelanggaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PelanggaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // try {
        //     // $query = request->input('q'); // Ambil parameter pencarian
        //     $pelanggaran = Pelanggaran::where('namaPelanggaran', 'LIKE',  '%' . request('q') . '%')
        //         ->select('kodePelanggaran', 'namaPelanggaran')
        //         ->get();

        //     return response()->json($pelanggaran);
        // } catch (\Exception $e) {
        //     // Log error untuk debugging
        //     Log::error($e->getMessage());
        //     return response()->json(['error' => 'Terjadi kesalahan di server'], 500);
        // }
        $perPage = request('per_page', 15);  // Default to 20 items per page if no parameter is provided
        $data = Pelanggaran::where('namaPelanggaran', 'LIKE', '%' . request('q') . '%')
            ->orWhere('kodePelanggaran', 'LIKE', '%' . request('q') . '%')
            ->paginate($perPage);

        return response()->json($data);
    }

    public function munculedit()
    {
        try {
            // $query = request->input('q'); // Ambil parameter pencarian
            $pelanggaran = Pelanggaran::where('namaPelanggaran', 'LIKE',  '%' . request('q') . '%')
                ->select('kodePelanggaran', 'namaPelanggaran')
                ->get();

            return response()->json($pelanggaran);
        } catch (\Exception $e) {
            // Log error untuk debugging
            Log::error($e->getMessage());
            return response()->json(['error' => 'Terjadi kesalahan di server'], 500);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Pelanggaran $pelanggaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pelanggaran $pelanggaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pelanggaran $pelanggaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pelanggaran $pelanggaran)
    {
        //
    }
}
