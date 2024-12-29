<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatatController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\KritikSaranController;
use App\Http\Controllers\OperasiRutinController;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\UbahPasswordController;
use App\Http\Controllers\PeraturanController;
use App\Http\Controllers\PelanggaranController;

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

});

// Route Ubah Password

// Route::get('/', function () {
//     return view('dashboard', ['title' => 'Dashboard']);
// });

// Route::get('/dashboard', function () {
//     return view('dashboard', ['title' => 'Dashboard']);
// });

Route::get('/', function () {
    return view('landingpage');
});

Route::get('/kirim-kritik-saran', [KritikSaranController::class, 'index'])->name('kritiksaran');
Route::post('/kirim-kritik-saran/submit', [KritikSaranController::class, 'submit'])->name('kritiksaran.submit');

Route::get('/laporan-rutin', function () {
    return view('laporanrutin');
});

Route::get('/laporan-umum', function () {
    return view('laporanumum');
});

Route::get('/laporan-harian', function () {
    return view('laporanharian');
});

Route::get('/catat-rutin', function () {
    return view('catatrutinpilih');
});

// Route::get('/login', function () {
//     return view('login');
// });

// Route::get('/ubah-password', function () {
//     return view('ubahpassword');
// });

Route::get('/catat-umum', function () {
    return view('catatumum');
});

Route::get('/catat-harian', function () {
    return view('catatharian');
});


// Route::get('/kritik-saran', function () {
//     return view('kritiksaran');
// });

Route::get('/riwayat', function () {
    return view('riwayat');
});

Route::get('/klaim-pelanggaran', function () {
    return view('klaim-pelanggaran', ['title' => 'Klaim Pelanggaran']);
});

Route::get('/faq', [FaqController::class, 'index']);

Route::post('/send-email', [EmailController::class, 'sendEmail'])->name('send.email');

Route::get('pelanggaran', [PelanggaranController::class, 'index'])->name('pelanggaran.index');

Route::get('/catat', [OperasiRutinController::class, 'showForm'])->name('catat');

Route::post('/operasi-rutin', [OperasiRutinController::class, 'store'])->name('operasi-rutin.store');

Route::delete('/delete/{id}', [OperasiRutinController::class, 'destroy'])->name('deleteRoute');

Route::get('catat/{id}/edit', [OperasiRutinController::class, 'edit'])->name('catatedit');

Route::put('operasi-rutin/{id}/update', [OperasiRutinController::class, 'update'])->name('operasi-rutin.update');

// Route::get('/laporan-rutin', [OperasiRutinController::class, 'index'])->name('laporan-rutin.index');

Route::get('/laporan-rutin', [OperasiRutinController::class, 'index'])->name('laporanrutin');

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

Route::get('/peraturan', [PeraturanController::class, 'tampil'])->name('tampil.peraturan');

Route::get('/landing', function () {
    return view('landingpage');
});
