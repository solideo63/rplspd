<?php

namespace App\Http\Controllers;

use Exception;
use Carbon\Carbon;
use App\Models\Mahasiswa;
use App\Models\Pelanggaran;
use Illuminate\Http\Request;
use App\Models\PenindakanHarian;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PenindakanHarianExport;
use App\Http\Requests\StorePenindakanHarianRequest;
use App\Http\Requests\UpdatePenindakanHarianRequest;

class PenindakanHarianController extends Controller
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
            ->where('penindakan_harian.status_pelanggaran', '!=', 'Dibatalkan') // Filter status "Dibatalkan"
            ->select(
                'penindakan_harian.created_at as tanggal',
                'penindakan_harian.created_at',
                'penindakan_harian.updated_at',
                'penindakan_harian.nim',
                'mahasiswas.nama',
                'mahasiswas.kelas',
                'penindakan_harian.pelanggaran',
                'penindakan_harian.nama_pencatat',
                'penindakan_harian.status_pelanggaran',
                'penindakan_harian.id'
            )
            ->orderBy('penindakan_harian.created_at', 'desc')
            ->paginate(30);

        return view('penindakanharian.laporanharian', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pelanggarans = Pelanggaran::all();

        return view('penindakanharian.catatharian', compact('pelanggarans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required|regex:/^[0-9]{9}$/', // NIM harus 9 digit angka
            'pelanggaran' => 'required',
        ]);

        $mahasiswa = Mahasiswa::where('nim', $request->nim)
            ->where('tahun_akademik', $request->tahun_akademik)
            ->first();

        if (!$mahasiswa) {
            return response()->json(['message' => 'Mahasiswa tidak ditemukan'], 404);
        }

        $pelanggaran = $request->pelanggaran;
        $pencatat = Auth::user()->name;
        $tahunAkademik = $request->input('tahun_akademik');

        $data = [];

        if (is_array($pelanggaran)) {
            foreach ($pelanggaran as $kode) {
                $namaPelanggaran = Pelanggaran::where('kodePelanggaran', $kode)->value('namaPelanggaran') ?? 'Unknown'; // Ambil nama pelanggaran
                array_push($data, [
                    'nim' => $mahasiswa->nim,
                    'pelanggaran' => $namaPelanggaran,
                    'nama_pencatat' => $pencatat,
                    'created_at' => now(),
                    'tahun_akademik' => $tahunAkademik,
                    'status_pelanggaran' => 'Ditambahkan'
                ]);
            }
        } else {
            $namaPelanggaran = Pelanggaran::where('kodePelanggaran', $pelanggaran)->value('namaPelanggaran') ?? 'Unknown';
            array_push($data, [
                'nim' => $mahasiswa->nim,
                'pelanggaran' => $namaPelanggaran,
                'nama_pencatat' => $pencatat,
                'created_at' => now(),
                'tahun_akademik' => $tahunAkademik,
                'status_pelanggaran' => 'Ditambahkan'
            ]);
        }

        PenindakanHarian::insert($data);
        app(EmailController::class)->sendEmail($request);

        session()->flash('success', 'Data berhasil ditambahkan');
        return redirect()->route('catat.harian');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $penindakanHarian = PenindakanHarian::find($id);

        if (!$penindakanHarian) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }

        return response()->json([
            'message' => 'Data berhasil ditemukan',
            'data' => $penindakanHarian
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $penindakanHarian = PenindakanHarian::select(
            'penindakan_harian.*',
            'mahasiswas.nama',
            'mahasiswas.kelas'
        )
            ->join('mahasiswas', function ($join) {
                $join->on('penindakan_harian.nim', '=', 'mahasiswas.nim')
                    ->on('penindakan_harian.tahun_akademik', '=', 'mahasiswas.tahun_akademik'); // Join berdasarkan NIM dan tahun akademik
            })
            ->where('penindakan_harian.id', $id) // Filter berdasarkan ID operasi_rutin
            ->firstOrFail();

        $pelanggarans = Pelanggaran::all();
        $selectedPelanggaran = $penindakanHarian->pelanggaran;
        return view('penindakanharian.editcatatharian', compact('operasiUmum', 'pelanggarans', 'selectedPelanggaran'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nim' => 'required|regex:/^[0-9]{9}$/',
            'pelanggaran' => 'required',
        ]);

        $pelanggarans = Pelanggaran::all();

        // Mencari data OperasiRutin berdasarkan ID
        $penindakanHarian = PenindakanHarian::where('id', $id)->firstOrFail();

        // Cek apakah mahasiswa dengan NIM dan tahun akademik sesuai ada
        $mahasiswa = Mahasiswa::where('nim', $request->nim)
            ->where('tahun_akademik', $penindakanHarian->tahun_akademik)
            ->first();

        if (!$mahasiswa) {
            return redirect()->route('catatedit', $id)->with('error', 'Mahasiswa tidak ditemukan atau tidak sesuai dengan tahun akademik');
        }

        $kodePelanggaran = $request->pelanggaran;
        $pencatat = Auth::user()->name;
        $tahunAkademik = $request->input('tahun_akademik', $penindakanHarian->tahun_akademik);

        $namaPelanggaran = null;

        // Cek apakah $kodePelanggaran adalah namaPelanggaran
        $existingPelanggaran = $pelanggarans->firstWhere('namaPelanggaran', $kodePelanggaran);

        if ($existingPelanggaran) {
            // Jika ditemukan sebagai nama pelanggaran
            $namaPelanggaran = $kodePelanggaran; // Pelanggaran yang dikirim adalah namaPelanggaran
        } else {
            // Jika tidak ditemukan, berarti pelanggaran adalah kodePelanggaran
            $namaPelanggaran = Pelanggaran::where('kodePelanggaran', $kodePelanggaran)->value('namaPelanggaran') ?? 'Unknown';
        }

        // Update data di database
        $penindakanHarian->update([
            'nim' => $mahasiswa->nim,
            'pelanggaran' => $namaPelanggaran, // Update pelanggaran sesuai dengan data yang diterima
            'nama_pencatat' => $pencatat,
            'updated_at' => now(), // Update timestamp
            'tahun_akademik' => $tahunAkademik,
            'status_pelanggaran' => 'Diperbarui'
        ]);

        app(EmailController::class)->sendEmail($request);

        // Redirect ke halaman edit dengan pesan sukses
        return redirect()->route('laporanharian', $id)->with('success', 'Data berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $penindakanHarian = PenindakanHarian::find($id);

            // Jika data tidak ditemukan, kembalikan respon dengan status 404
            if (!$penindakanHarian) {
                return response()->json(['message' => 'Data tidak ditemukan'], 404);
            }

            // Update status menjadi "dibatalkan"
            $penindakanHarian->update([
                'status_pelanggaran' => 'Dibatalkan', // Pastikan kolom ini ada di tabel
                'updated_at' => now() // Perbarui waktu terakhir diupdate
            ]);

            return redirect()->route('laporanharian')->with('success', 'Data berhasil dihapus');
        } catch (Exception $e) {
            return redirect()->route('laporanharian')->with('error', 'Data gagal dihapus: ' . $e->getMessage());
        }
    }

    public function filter(Request $request)
    {
        // Ambil query builder untuk OperasiRutin dengan join ke tabel Mahasiswa
        $query = PenindakanHarian::join('mahasiswas', function ($join) {
            $join->on('penindakan_harian.nim', '=', 'mahasiswas.nim')
                ->on('penindakan_harian.tahun_akademik', '=', 'mahasiswas.tahun_akademik');
        });

        // Tambahkan filter untuk mengabaikan data dengan status "dibatalkan"
        $query->where('penindakan_harian.status_pelanggaran', '!=', 'dibatalkan');

        // Filter berdasarkan tanggal jika parameter 'tanggal' ada dan tidak kosong
        if ($request->has('tanggal') && $request->tanggal != '') {
            $query->whereDate('penindakan_harian.created_at', $request->tanggal);
        }

        // Filter berdasarkan tingkat (mengambil inisial kelas)
        if ($request->has('tingkat') && $request->tingkat != '') {
            $query->whereRaw('LEFT(mahasiswas.kelas, 1) = ?', [$request->tingkat]);
        }

        // Filter berdasarkan nama mahasiswa
        if ($request->has('nama') && $request->nama != '') {
            $query->where('mahasiswas.nama', 'like', '%' . $request->nama . '%');
        }

        $data = $query->select(
            'penindakan_harian.created_at as tanggal',
            'penindakan_harian.created_at',
            'penindakan_harian.updated_at',
            'penindakan_harian.nim',
            'mahasiswas.nama',
            'mahasiswas.kelas',
            'penindakan_harian.pelanggaran',
            'penindakan_harian.nama_pencatat',
            'penindakan_harian.id'
        )
            ->orderBy('penindakan_harian.created_at', 'desc')
            ->paginate(30);

        // Kirim data ke view
        return view('penindakanharian.laporanharian', compact('data'));
    }

    public function downloadFilteredData(Request $request, $format, \Barryvdh\DomPDF\PDF $pdfInstance)
    {
        $tanggal = $request->input('tanggal');

        $data = PenindakanHarian::join('mahasiswas', function ($join) {
            $join->on('penindakan_harian.nim', '=', 'mahasiswas.nim')
                ->on('penindakan_harian.tahun_akademik', '=', 'mahasiswas.tahun_akademik'); // Syarat NIM dan tahun akademik harus sama
        })
            ->whereDate('penindakan_harian.created_at', $tanggal) // Filter berdasarkan tanggal
            ->where('penindakan_harian.status_pelanggaran', '!=', 'dibatalkan') // Mengabaikan data dengan status dibatalkan
            ->orderBy('penindakan_harian.created_at', 'desc') // Mengurutkan berdasarkan tanggal secara descending
            ->get(['penindakan_harian.*', 'mahasiswas.kelas', 'mahasiswas.nama']); // Memilih kolom yang diperlukan

        if ($format === 'excel') {
            return Excel::download(new PenindakanHarianExport($data, $tanggal), "laporan_penindakan_harian_{$tanggal}.xlsx");
        } elseif ($format === 'pdf') {
            $pdf = $pdfInstance->loadView('exports.laporanharian_pdf', compact('data', 'tanggal'));
            $pdf->setPaper('A4', 'portrait');
            return $pdf->download("laporan_penindakan_harian_{$tanggal}.pdf");
        } elseif ($format === 'csv') {
            return Excel::download(new PenindakanHarianExport($data, $tanggal), "laporan_penindakan_harian_{$tanggal}.csv", \Maatwebsite\Excel\Excel::CSV);
        } else {
            return redirect()->back()->withErrors('Format tidak valid!');
        }
    }
}
