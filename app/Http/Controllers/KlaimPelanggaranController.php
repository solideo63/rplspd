<?php

namespace App\Http\Controllers;

use Exception;
use Carbon\Carbon;
use App\Models\Pelanggaran;
use Illuminate\Http\Request;
use App\Models\KlaimPelanggaran;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StorePenindakanHarianRequest;
use App\Http\Requests\UpdatePenindakanHarianRequest;
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

        return view('klaim-pelanggaran', compact('data'));
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

        KlaimPelanggaran::insert($data);
        // Simpan data ke database menggunakan Eloquent
        // $operasiRutin = OperasiRutin::create($data); // Pastikan model OperasiRutin memiliki $fillable yang sesuai

        // Setelah menyimpan data, panggil EmailController untuk mengirim email
        app(EmailController::class)->sendEmail($request); // Pastikan fungsi sendEmail sudah benar

        // Redirect ke halaman view catat.blade.php dengan pesan sukses
        return redirect()->route('catat.harian') // Pastikan Anda sudah mendefinisikan route ini
            ->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $klaimPelanggaran = KlaimPelanggaran::find($id);

        if (!$klaimPelanggaran) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }

        return response()->json([
            'message' => 'Data berhasil ditemukan',
            'data' => $klaimPelanggaran
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $klaimPelanggaran = KlaimPelanggaran::find($id);

            if (!$klaimPelanggaran) {
                return response()->json(['message' => 'Data tidak ditemukan'], 404);
            }

            $klaimPelanggaran->delete();

            return redirect()->route('klaim-pelanggaran');
        } catch (Exception $e) {
            // Menangani kesalahan jika terjadi exception
            return redirect()->route('laporanharian')->with('error', 'Data gagal dihapus: ' . $e->getMessage());
        }
    }

    public function filter(Request $request)
    {
        // Ambil query builder untuk OperasiRutin
        $query = PenindakanHarian::query();

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

        // Ambil data hasil filter
        $data = $query->orderBy('created_at', 'desc')->paginate(30);

        // Kirim data ke view
        return view('klaim-pelanggaran', compact('data'));
    }
}
