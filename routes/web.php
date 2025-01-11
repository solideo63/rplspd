<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CatatController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\TokenController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PeraturanController;
use App\Http\Controllers\KritikSaranController;
use App\Http\Controllers\OperasiUmumController;
use App\Http\Controllers\PelanggaranController;
use App\Http\Controllers\OperasiRutinController;
use App\Http\Controllers\UbahPasswordController;
use App\Http\Controllers\KlaimPelanggaranController;
use App\Http\Controllers\PenindakanHarianController;

Route::get('/login', [SesiController::class, 'index'])->name('login');


Route::middleware(['guest'])->group(function () {
    Route::get('/login', [SesiController::class, 'index'])->name('login');
    Route::post('/login', [SesiController::class, 'login']);
});
Route::get('/home', function () {
    return redirect('/admin');
});
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index']);
    Route::get('/logout', [SesiController::class, 'logout']);
    // Ubah Password
    Route::get('/ubah-password', [UbahPasswordController::class, 'index']);
    Route::post('/ubah-password', [UbahPasswordController::class, 'ubahPassword']);
    // Kritik Saran
    // Buat Token
    Route::get('/buat-token', [TokenController::class, 'index']);
    Route::get('/generate-token', [TokenController::class, 'generateToken']);
    // Mas Ukin Token
    Route::get('/enter-token', [TokenController::class, 'showEnterTokenForm'])->name('enter-token');
    Route::post('/enter-token', [TokenController::class, 'processToken']);
    Route::get('/restricted-page', [TokenController::class, 'showRestrictedPage'])->name('restricted-page');
    Route::get('/klaim-pelanggaran', function () {
        return view('klaim-pelanggaran', ['title' => 'Klaim Pelanggaran']);
    })->name('klaim-pelanggaran');

    // Route manage FAQ admin
    Route::get('/admin-faq', [FaqController::class, 'admin_tampil'])->name('admin.tampil.faq');
    Route::get('/admin-faq/tambah', [FaqController::class, 'admin_tambah'])->name('admin.tambah.faq');
    Route::post('/admin-faq/submit', [FaqController::class, 'admin_submit'])->name('admin.submit.faq');
    Route::get('/admin-faq/edit/{id}', [FaqController::class, 'admin_edit'])->name('admin.edit.faq');
    Route::post('/admin-faq/update/{id}', [FaqController::class, 'admin_update'])->name('admin.update.faq');
    Route::post('/admin-faq/delete/{id}', [FaqController::class, 'admin_delete'])->name('admin.delete.faq');


    // Route manage peraturan admin
    Route::get('/admin-peraturan', [PeraturanController::class, 'admin_tampil'])->name('admin.tampil.peraturan');
    Route::get('/admin-peraturan/tambah', [PeraturanController::class, 'admin_tambah'])->name('admin.tambah.peraturan');
    Route::post('/admin-peraturan/submit', [PeraturanController::class, 'admin_submit'])->name('admin.submit.peraturan');
    Route::get('/admin-peraturan/edit/{id}', [PeraturanController::class, 'admin_edit'])->name('admin.edit.peraturan');
    Route::post('/admin-peraturan/update/{id}', [PeraturanController::class, 'admin_update'])->name('admin.update.peraturan');
    Route::post('/admin-peraturan/delete/{id}', [PeraturanController::class, 'admin_delete'])->name('admin.delete.peraturan');
});

Route::get('/filter-by-date-ajax', [CatatController::class, 'filterByDateAjax'])->name('filter.date.ajax');

Route::get('/', function () {
    return view('landingpage');
});

Route::get('/kirim-kritik-saran', [KritikSaranController::class, 'index'])->name('kritiksaran');
Route::post('/kirim-kritik-saran/submit', [KritikSaranController::class, 'submit'])->name('kritiksaran.submit');
Route::get('/kritik-saran', [KritikSaranController::class, 'view'])->name('lihatkritiksaran');

Route::get('/riwayat', function () {
    return view('riwayat');
});

Route::get('/faq', [FaqController::class, 'index']);

Route::post('/send-email', [EmailController::class, 'sendEmail'])->name('send.email');

//Route Tampil Pelanggaran
Route::get('pelanggaran', [PelanggaranController::class, 'index'])->name('pelanggaran.index');
Route::get('pelanggaran/edit', [PelanggaranController::class, 'munculedit'])->name('pelanggaran.edit');

//Route Operasi Rutin
Route::get('/catat-rutin', function () {
    return view('operasirutin.catatrutinpilih');
});
Route::get('/catat', [OperasiRutinController::class, 'showForm'])->name('catat');
Route::post('/operasi-rutin', [OperasiRutinController::class, 'store'])->name('operasi-rutin.store');
Route::delete('/delete-rutin/{id}', [OperasiRutinController::class, 'destroy'])->name('deleteRoute');
Route::get('catat-rutin/{id}/edit', [OperasiRutinController::class, 'edit'])->name('catatedit');
Route::put('operasi-rutin/{id}/update', [OperasiRutinController::class, 'update'])->name('operasi-rutin.update');
Route::get('/laporan-rutin', [OperasiRutinController::class, 'index'])->name('laporanrutin');
Route::get('/laporan-rutin/data', [OperasiRutinController::class, 'fetchData'])->name('operasi-rutin.data');
Route::get('/laporan-rutin/filter', [OperasiRutinController::class, 'filter'])->name('operasi-rutin.filter');
Route::get('/laporan-rutin/download/{format}', [OperasiRutinController::class, 'downloadFilteredData'])->name('operasi-rutin.download');

//Route Operasi Umum
Route::get('/catat-umum', [OperasiUmumController::class, 'create'])->name('catat.umum');
Route::post('/operasi-umum', [OperasiUmumController::class, 'store'])->name('operasi-umum.store');
Route::delete('/delete-umum/{id}', [OperasiUmumController::class, 'destroy'])->name('delete.umum');
Route::get('catat-umum/{id}/edit', [OperasiUmumController::class, 'edit'])->name('catatedit.umum');
Route::put('operasi-umum/{id}/update', [OperasiUmumController::class, 'update'])->name('operasi-umum.update');
Route::get('/laporan-umum', [OperasiUmumController::class, 'index'])->name('laporanumum');
Route::get('/laporan-umum/filter', [OperasiUmumController::class, 'filter'])->name('operasi-umum.filter');
Route::get('/laporan-umum/download/{format}', [OperasiUmumController::class, 'downloadFilteredData'])->name('operasi-umum.download');

//Route Penindakan Harian
Route::get('/catat-harian', [PenindakanHarianController::class, 'create'])->name('catat.harian');
Route::post('/penindakan-harian', [PenindakanHarianController::class, 'store'])->name('penindakan-harian.store');
Route::get('/laporan-harian', [PenindakanHarianController::class, 'index'])->name('laporanharian');
Route::get('/laporan-harian/filter', [PenindakanHarianController::class, 'filter'])->name('penindakan-harian.filter');
Route::get('/laporan-harian/download/{format}', [PenindakanHarianController::class, 'downloadFilteredData'])->name('penindakan-harian.download');

// Route Klaim Pelanggaran
Route::get('/klaim-pelanggaran', [KlaimPelanggaranController::class, 'index'])->name('klaim-pelanggaran');
Route::delete('/delete-harian/{id}', [KlaimPelanggaranController::class, 'destroy'])->name('delete.harian');





Route::get('/peraturan', [PeraturanController::class, 'tampil'])->name('tampil.peraturan');

Route::get('/landing', function () {
    return view('landingpage');
});

Route::get('/dashboard/data', [DashboardController::class, 'StatDesk']);
