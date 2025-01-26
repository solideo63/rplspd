<?php

namespace App\Http\Controllers;

use Exception;
use Carbon\Carbon;
use App\Models\Mahasiswa;
use App\Models\Pelanggaran;
use Termwind\Components\Dd;
use App\Models\OperasiRutin;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\PDF;
use App\Exports\OperasiRutinExport;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class OperasiRutinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Mengambil data dari tabel operasi_rutin dengan join ke tabel mahasiswa
        $data = OperasiRutin::join('mahasiswas', function ($join) {
            $join->on('operasi_rutin.nim', '=', 'mahasiswas.nim')
                ->on('operasi_rutin.tahun_akademik', '=', 'mahasiswas.tahun_akademik');
        })
            ->where('operasi_rutin.status_pelanggaran', '!=', 'Dibatalkan') // Filter status "Dibatalkan"
            ->select(
                'operasi_rutin.created_at as tanggal',
                'operasi_rutin.created_at',
                'operasi_rutin.updated_at',
                'operasi_rutin.nim',
                'mahasiswas.nama',
                'mahasiswas.kelas',
                'operasi_rutin.pelanggaran',
                'operasi_rutin.nama_pencatat',
                'operasi_rutin.status_pelanggaran',
                'operasi_rutin.id'
            )
            ->orderBy('operasi_rutin.created_at', 'desc')
            ->paginate(30);

        // Mengirim data ke view
        return view('operasirutin.laporanrutin', compact('data'));
    }


    public function showForm(Request $request)
    {
        $pelanggarans = Pelanggaran::all();

        // Jika tidak berada di halaman showForm dan session tingkat ada, maka hapus session tingkat
        if (!request()->routeIs('catat')) {
            session()->forget('tingkat');
        }

        // Ambil nilai tingkat dari query string atau session
        $tingkat = $request->query('tingkat') ?? session('tingkat');

        // Jika tingkat ada di query string, simpan di session
        if ($tingkat) {
            session(['tingkat' => $tingkat]);
        }
        return view('operasirutin.catat', compact('pelanggarans', 'tingkat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
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
            $namaPelanggaran = Pelanggaran::where('kodePelanggaran', $pelanggaran)->value('namaPelanggaran') ?? 'Unknown'; // Ambil nama pelanggaran
            array_push($data, [
                'nim' => $mahasiswa->nim,
                'pelanggaran' => $namaPelanggaran,
                'nama_pencatat' => $pencatat,
                'created_at' => now(),
                'tahun_akademik' => $tahunAkademik,
                'status_pelanggaran' => 'Ditambahkan'
            ]);
        }

        OperasiRutin::insert($data);
        app(EmailController::class)->sendEmail($request);

        session()->flash('success', 'Data berhasil ditambahkan.');
        return redirect()->route('catat');
    }

    public function edit($id)
    {
        $operasiRutin = OperasiRutin::select(
            'operasi_rutin.*',
            'mahasiswas.nama',
            'mahasiswas.kelas'
        )
            ->join('mahasiswas', function ($join) {
                $join->on('operasi_rutin.nim', '=', 'mahasiswas.nim')
                    ->on('operasi_rutin.tahun_akademik', '=', 'mahasiswas.tahun_akademik'); // Join berdasarkan NIM dan tahun akademik
            })
            ->where('operasi_rutin.id', $id) // Filter berdasarkan ID operasi_rutin
            ->firstOrFail();

        $pelanggarans = Pelanggaran::all(); // Untuk mengaktifkan suggestion
        $selectedPelanggaran = $operasiRutin->pelanggaran; // Mengambil nilai pelanggaran sebelumnya

        return view('operasirutin.editcatatrutin', compact('operasiRutin', 'pelanggarans', 'selectedPelanggaran'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nim' => 'required|regex:/^[0-9]{9}$/',
            'pelanggaran' => 'required',
        ]);

        $pelanggarans = Pelanggaran::all();

        // Mencari data OperasiRutin berdasarkan ID
        $operasiRutin = OperasiRutin::where('id', $id)->firstOrFail();

        // Cek apakah mahasiswa dengan NIM dan tahun akademik sesuai ada
        $mahasiswa = Mahasiswa::where('nim', $request->nim)
            ->where('tahun_akademik', $operasiRutin->tahun_akademik)
            ->first();

        if (!$mahasiswa) {
            return redirect()->route('catatedit', $id)->with('error', 'Mahasiswa tidak ditemukan atau tidak sesuai dengan tahun akademik');
        }

        $kodePelanggaran = $request->pelanggaran;
        $pencatat = Auth::user()->name;
        $tahunAkademik = $request->input('tahun_akademik', $operasiRutin->tahun_akademik);

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
        $operasiRutin->update([
            'nim' => $mahasiswa->nim,
            'pelanggaran' => $namaPelanggaran, // Update pelanggaran sesuai dengan data yang diterima
            'nama_pencatat' => $pencatat,
            'updated_at' => now(), // Update timestamp
            'tahun_akademik' => $tahunAkademik,
            'status_pelanggaran' => 'Diperbarui'
        ]);

        app(EmailController::class)->sendEmailUpdate($request);
        return redirect()->route('laporanrutin', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            // Cari data berdasarkan ID
            $operasiRutin = OperasiRutin::find($id);

            // Jika data tidak ditemukan, kembalikan respon dengan status 404
            if (!$operasiRutin) {
                return response()->json(['message' => 'Data tidak ditemukan'], 404);
            }

            // Update status menjadi "dibatalkan"
            $operasiRutin->update([
                'status_pelanggaran' => 'Dibatalkan', // Pastikan kolom ini ada di tabel
                'updated_at' => now() // Perbarui waktu terakhir diupdate
            ]);

            return redirect()->route('laporanrutin')->with('success', 'Data berhasil dibatalkan.');
        } catch (Exception $e) {
            return redirect()->route('laporanrutin')->with('error', 'Data gagal dibatalkan: ' . $e->getMessage());
        }
    }

    // public function fetchData()
    // {
    //     $data = OperasiRutin::all();
    //     return response()->json($data);
    // }

    public function downloadFilteredData(Request $request, $format)
    {
        $tanggal = $request->input('tanggal');
        $tingkat = $request->input('tingkat');

        $data = OperasiRutin::join('mahasiswas', function ($join) {
            $join->on('operasi_rutin.nim', '=', 'mahasiswas.nim')
                ->on('operasi_rutin.tahun_akademik', '=', 'mahasiswas.tahun_akademik'); // Syarat NIM dan tahun akademik harus sama
        })
            ->whereDate('operasi_rutin.created_at', $tanggal) // Filter berdasarkan tanggal
            ->whereRaw('LEFT(mahasiswas.kelas, 1) = ?', [$tingkat]) // Filter berdasarkan tingkat dari inisial kelas
            ->where('operasi_rutin.status_pelanggaran', '!=', 'dibatalkan') // Mengabaikan data dengan status dibatalkan
            ->orderBy('operasi_rutin.created_at', 'desc') // Mengurutkan berdasarkan tanggal secara descending
            ->get(['operasi_rutin.*', 'mahasiswas.kelas', 'mahasiswas.nama']); // Memilih kolom yang diperlukan

        if ($format === 'excel') {
            return Excel::download(new OperasiRutinExport($data, $tanggal, $tingkat), "laporan_operasi_rutin_{$tanggal}.xlsx");
        } elseif ($format === 'pdf') {
            $pdf = PDF::loadView('exports.laporanrutin_pdf', compact('data', 'tanggal', 'tingkat'));
            return $pdf->download("laporan_operasi_rutin_{$tanggal}.pdf");
        } elseif ($format === 'csv') {
            return Excel::download(new OperasiRutinExport($data, $tanggal, $tingkat), "laporan_operasi_rutin_{$tanggal}.csv", \Maatwebsite\Excel\Excel::CSV);
        } else {
            return redirect()->back()->withErrors('Format tidak valid!');
        }
    }

    public function filter(Request $request)
    {
        // Ambil query builder untuk OperasiRutin dengan join ke tabel Mahasiswa
        $query = OperasiRutin::join('mahasiswas', function ($join) {
            $join->on('operasi_rutin.nim', '=', 'mahasiswas.nim')
                ->on('operasi_rutin.tahun_akademik', '=', 'mahasiswas.tahun_akademik');
        });

        // Tambahkan filter untuk mengabaikan data dengan status "dibatalkan"
        $query->where('operasi_rutin.status_pelanggaran', '!=', 'dibatalkan');

        // Filter berdasarkan tanggal jika parameter 'tanggal' ada dan tidak kosong
        if ($request->has('tanggal') && $request->tanggal != '') {
            $query->whereDate('operasi_rutin.created_at', $request->tanggal);
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
            'operasi_rutin.created_at as tanggal',
            'operasi_rutin.created_at',
            'operasi_rutin.updated_at',
            'operasi_rutin.nim',
            'mahasiswas.nama',
            'mahasiswas.kelas',
            'operasi_rutin.pelanggaran',
            'operasi_rutin.nama_pencatat',
            'operasi_rutin.id'
        )
            ->orderBy('operasi_rutin.created_at', 'desc')
            ->paginate(30);

        // Kirim data ke view
        return view('operasirutin.laporanrutin', compact('data'));
    }
}
