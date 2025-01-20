<?php

namespace App\Http\Controllers;

use Exception;
use Carbon\Carbon;
use App\Models\OperasiUmum;
use App\Models\Pelanggaran;
use Illuminate\Http\Request;
use App\Exports\OperasiUmumExport;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class OperasiUmumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil data dari tabel dengan pagination
        $data = OperasiUmum::orderBy('created_at', 'desc')
            ->paginate(30);

        // Mengirim data ke view
        return view('operasiumum.laporanumum', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pelanggarans = Pelanggaran::all();

        return view('operasiumum.catatumum', compact('pelanggarans'));
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
        return view('operasiumum.catatumum', compact('pelanggarans', 'tingkat'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required|regex:/^[0-9]{9}$/', // NIM harus 9 digit angka
            'nama_mahasiswa' => 'required|string|max:255',
            'kelas' => 'required|string',
            'pelanggaran' => 'required',
            'tingkat' => 'required|integer',
        ]);

        // Tambahkan nama pencatat dari session login

        $nim = $request->nim;
        $nama = $request->nama_mahasiswa;
        $kelas = $request->kelas;
        $pelanggaran = $request->pelanggaran;
        $tingkat = $request->tingkat;
        $pencatat = Auth::user()->name;

        $data = [];

        // Menggunakan Carbon untuk mendapatkan waktu lokal sesuai zona waktu Asia/Jakarta
        $timestamp = Carbon::now('Asia/Jakarta'); // Menetapkan waktu sesuai dengan zona waktu Jakarta

        if (is_array($pelanggaran)) {
            foreach ($pelanggaran as $kode) {
                $namaPelanggaran = Pelanggaran::where('kodePelanggaran', $kode)->value('namaPelanggaran') ?? 'Unknown'; // Ambil nama pelanggaran
                array_push($data, [
                    'nim' => $nim,
                    'nama_mahasiswa' => $nama,
                    'kelas' => $kelas,
                    'tingkat' => $tingkat,
                    'pelanggaran' => $namaPelanggaran,
                    'nama_pencatat' => $pencatat,
                    'created_at' => $timestamp, // Gunakan timestamp sesuai zona waktu lokal
                ]);
            }
        } else {
            $namaPelanggaran = Pelanggaran::where('kodePelanggaran', $pelanggaran)->value('namaPelanggaran') ?? 'Unknown'; // Ambil nama pelanggaran
            array_push($data, [
                'nim' => $nim,
                'nama_mahasiswa' => $nama,
                'kelas' => $kelas,
                'tingkat' => $tingkat,
                'pelanggaran' => $namaPelanggaran,
                'nama_pencatat' => $pencatat,
                'created_at' => $timestamp, // Gunakan timestamp sesuai zona waktu lokal
            ]);
        }

        OperasiUmum::insert($data);
        // Simpan data ke database menggunakan Eloquent
        // $operasiRutin = OperasiRutin::create($data); // Pastikan model OperasiRutin memiliki $fillable yang sesuai

        // Setelah menyimpan data, panggil EmailController untuk mengirim email
        app(EmailController::class)->sendEmail($request); // Pastikan fungsi sendEmail sudah benar

        // Redirect ke halaman view catat.blade.php dengan pesan sukses
        session()->flash('success', 'Data berhasil ditambahkan');
        return redirect()->route('catat.umum'); // Pastikan Anda sudah mendefinisikan route ini
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $operasiUmum = OperasiUmum::find($id);

        if (!$operasiUmum) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }

        return response()->json([
            'message' => 'Data berhasil ditemukan',
            'data' => $operasiUmum
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Ambil data operasi rutin yang sesuai dengan ID
        $operasiUmum = OperasiUmum::findOrFail($id);

        // Ambil semua data pelanggaran
        $pelanggarans = Pelanggaran::all();

        $selectedPelanggaran = $operasiUmum->pelanggaran;

        // dd($selectedPelanggaran);
        // Kirim data ke view untuk ditampilkan dalam form
        return view('operasiumum.editcatatumum', compact('operasiUmum', 'pelanggarans', 'selectedPelanggaran'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validasi input dari form
        $request->validate([
            'nim' => 'required|regex:/^[0-9]{9}$/', // NIM harus 9 digit angka
            'nama_mahasiswa' => 'required|string|max:255',
            'kelas' => 'required|string',
            'pelanggaran' => 'required', // Pelanggaran harus berupa kode pelanggaran tunggal
            'tingkat' => 'required|integer',
        ]);

        $pelanggarans = Pelanggaran::all();

        // Cari data OperasiRutin berdasarkan ID
        $operasiUmum = OperasiUmum::find($id);

        if (!$operasiUmum) {
            return redirect()->route('catatedit.umum', $id)->with('error', 'Data tidak ditemukan');
        }

        // Ambil data dari request
        $nim = $request->nim;
        $nama = $request->nama_mahasiswa;
        $kelas = $request->kelas;
        $kodePelanggaran = $request->pelanggaran; // Kode pelanggaran tunggal
        $tingkat = $request->tingkat;
        $pencatat = Auth::user()->name;

        // Jika pelanggaran berupa kodePelanggaran
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

        $timestamp = Carbon::now('Asia/Jakarta'); // Menetapkan waktu sesuai dengan zona waktu Jakarta

        // Update data di database
        $operasiUmum->update([
            'nim' => $nim,
            'nama_mahasiswa' => $nama,
            'kelas' => $kelas,
            'tingkat' => $tingkat, // Hanya memperbarui tingkat
            'pelanggaran' => $namaPelanggaran, // Memastikan pelanggaran tetap sesuai dengan kode yang dipilih
            'nama_pencatat' => $pencatat,
            'updated_at' => $timestamp,
        ]);

        app(EmailController::class)->sendEmailUpdate($request);

        // Redirect ke halaman edit dengan pesan sukses
        return redirect()->route('laporanumum', $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $operasiUmum = OperasiUmum::find($id);

            if (!$operasiUmum) {
                return response()->json(['message' => 'Data tidak ditemukan'], 404);
            }

            $operasiUmum->delete();

            return redirect()->route('laporanumum');
        } catch (Exception $e) {
            // Menangani kesalahan jika terjadi exception
            return redirect()->route('laporanumum')->with('error', 'Data gagal dihapus: ' . $e->getMessage());
        }
    }

    public function filter(Request $request)
    {
        // Ambil query builder untuk OperasiRutin
        $query = OperasiUmum::query();

        // Filter berdasarkan tanggal jika parameter 'tanggal' ada dan tidak kosong
        if ($request->has('tanggal') && $request->tanggal != '') {
            $query->whereDate('created_at', $request->tanggal);
        }

        // Filter berdasarkan tingkat jika parameter 'tingkat' ada dan tidak kosong
        if ($request->has('tingkat') && $request->tingkat != '') {
            $query->where('tingkat', $request->tingkat);
        }

        if ($request->has('nama') && $request->nama != '') {
            $query->where('nama_mahasiswa', 'like', '%' . $request->nama . '%');
        }

        // Hasil query dengan pagination
        $data = $query->orderBy('created_at', 'desc')->paginate(30); // 10 item per halaman

        return view('operasiumum.laporanumum', compact('data'));
    }

    public function downloadFilteredData(Request $request, $format, \Barryvdh\DomPDF\PDF $pdfInstance)
    {
        $tanggal = $request->input('tanggal');

        // Filter data berdasarkan tanggal
        $data = OperasiUmum::whereDate('created_at', $tanggal)
            ->orderBy('created_at', 'desc') // Mengurutkan berdasarkan tanggal secara descending
            ->get();

        if ($format === 'excel') {
            return Excel::download(new OperasiUmumExport($data, $tanggal), "laporan_operasi_umum_{$tanggal}.xlsx");
        } elseif ($format === 'pdf') {
            $pdf = $pdfInstance->loadView('exports.laporanumum_pdf', compact('data', 'tanggal'));
            $pdf->setPaper('A4', 'portrait');
            return $pdf->download("laporan_operasi_umum_{$tanggal}.pdf");
        } elseif ($format === 'csv') {
            return Excel::download(new OperasiUmumExport($data, $tanggal), "laporan_operasi_umum_{$tanggal}.csv", \Maatwebsite\Excel\Excel::CSV);
        } else {
            return redirect()->back()->withErrors('Format tidak valid!');
        }
    }
}
