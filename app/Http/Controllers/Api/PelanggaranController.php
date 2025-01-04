<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\OperasiRutin;
use App\Models\OperasiUmum;
use Illuminate\Http\Request;

class PelanggaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = OperasiRutin::orderBy('nim', 'asc')->get();
        return response()->json([
            'status' => true,
            'message' => 'Data Ditemukan',
            'data' => $data,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dataOperasiRutin = new OperasiRutin;
        $dataOperasiRutin->nim = $request->nim;
        $dataOperasiRutin->nama_mahasiswa = $request->nama_mahasiswa;
        $dataOperasiRutin->pelanggaran = $request->pelanggaran;
        $dataOperasiRutin->nama_pencatat = $request->nama_pencatat;

        $post = $dataOperasiRutin->save();

        return response()->json([
            'status' => true,
            'message' => 'Sukses memasukkan data',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = OperasiRutin::find($id);
        if ($data) {
            return response()->json([
                'status' => true,
                'message' => 'Data Ditemukan',
                'data' => $data,
            ], 200);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Data Tidak Ditemukan',
            ]);
        }
    }

    public function indexumum()
    {
        $data = OperasiUmum::orderBy('nim', 'asc')->get();
        return response()->json([
            'status' => true,
            'message' => 'Data Ditemukan',
            'data' => $data,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeumum(Request $request)
    {
        $dataOperasiUmum = new OperasiUmum;
        $dataOperasiUmum->nim = $request->nim;
        $dataOperasiUmum->nama_mahasiswa = $request->nama_mahasiswa;
        $dataOperasiUmum->pelanggaran = $request->pelanggaran;
        $dataOperasiUmum->nama_pencatat = $request->nama_pencatat;

        $post = $dataOperasiUmum->save();

        return response()->json([
            'status' => true,
            'message' => 'Sukses memasukkan data',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function showumum(string $id)
    {
        $data = OperasiUmum::find($id);
        if ($data) {
            return response()->json([
                'status' => true,
                'message' => 'Data Ditemukan',
                'data' => $data,
            ], 200);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Data Tidak Ditemukan',
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
