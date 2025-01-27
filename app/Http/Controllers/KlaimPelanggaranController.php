<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PenindakanHarian;

class KlaimPelanggaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = PenindakanHarian::join('mahasiswas', function ($join) {
            $join->on('penindakan_harian.nim', '=', 'mahasiswas.nim')
                ->on('penindakan_harian.tahun_akademik', '=', 'mahasiswas.tahun_akademik');
        })
            ->join('pelanggarans', 'penindakan_harian.pelanggaran', '=', 'pelanggarans.kodePelanggaran') // Join ke tabel pelanggarans
            ->where('penindakan_harian.status_pelanggaran', '!=', 'Dibatalkan') // Filter status "Dibatalkan"
            ->select(
                'penindakan_harian.created_at as tanggal',
                'penindakan_harian.created_at',
                'penindakan_harian.updated_at',
                'penindakan_harian.nim',
                'mahasiswas.nama',
                'mahasiswas.kelas',
                'pelanggarans.namaPelanggaran as pelanggaran', // Mengambil namaPelanggaran dari tabel pelanggarans
                'penindakan_harian.nama_pencatat',
                'penindakan_harian.status_pelanggaran',
                'penindakan_harian.id'
            )
            ->orderBy('penindakan_harian.created_at', 'desc')
            ->paginate(30);

        return view('klaim-pelanggaran', compact('data'));
    }

    public function filter(Request $request)
    {
        $query = PenindakanHarian::join('mahasiswas', function ($join) {
            $join->on('penindakan_harian.nim', '=', 'mahasiswas.nim')
                ->on('penindakan_harian.tahun_akademik', '=', 'mahasiswas.tahun_akademik');
        })
            ->join('pelanggarans', 'penindakan_harian.pelanggaran', '=', 'pelanggarans.kodePelanggaran') // Join ke tabel pelanggarans
            ->where('penindakan_harian.status_pelanggaran', '!=', 'Dibatalkan'); // Filter status "Dibatalkan"

        // Filter berdasarkan tanggal jika parameter 'tanggal' ada dan tidak kosong
        if ($request->filled('tanggal')) {
            $query->whereDate('penindakan_harian.created_at', $request->tanggal);
        }

        // Filter berdasarkan tingkat (mengambil inisial kelas)
        if ($request->filled('tingkat')) {
            $query->whereRaw('LEFT(mahasiswas.kelas, 1) = ?', [$request->tingkat]);
        }

        // Filter berdasarkan nama mahasiswa
        if ($request->filled('nama')) {
            $query->where('mahasiswas.nama', 'like', '%' . $request->nama . '%');
        }

        // Ambil data berdasarkan filter
        $data = $query->select(
            'penindakan_harian.created_at as tanggal',
            'penindakan_harian.created_at',
            'penindakan_harian.updated_at',
            'penindakan_harian.nim',
            'mahasiswas.nama',
            'mahasiswas.kelas',
            'pelanggarans.namaPelanggaran as pelanggaran', // Mengambil namaPelanggaran dari tabel pelanggarans
            'penindakan_harian.nama_pencatat',
            'penindakan_harian.status_pelanggaran',
            'penindakan_harian.id'
        )
            ->orderBy('penindakan_harian.created_at', 'desc')
            ->paginate(30);

        // Kirim data ke view
        return view('klaim-pelanggaran', compact('data'));
    }
}
