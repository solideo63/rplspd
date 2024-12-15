<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatatController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\OperasiRutinController;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/', function () {
    return view('dashboard', ['title' => 'Dashboard']);
});

Route::post('/dashboard', function () {
    return view('dashboard', ['title' => 'Dashboard']);
});

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

Route::get('/login', function () {
    return view('login');
});

Route::get('/ubah-password', function () {
    return view('ubahpassword');
});

Route::get('/catat-umum', function () {
    return view('catatumum');
});

Route::get('/catat-harian', function () {
    return view('catatharian');
});

/*Route::get('/catat', function () {
    return view('catat');
});*/

Route::get('/catat', [CatatController::class, 'showForm']);

Route::get('/kritik-saran', function () {
    return view('kritiksaran');
});

Route::get('/riwayat', function () {
    return view('riwayat');
});

Route::get('/klaim-pelanggaran', function () {
    return view('klaim-pelanggaran', ['title' => 'Klaim Pelanggaran']);
});

Route::get('/faq', [FaqController::class, 'index']);

Route::post('/send-email', [EmailController::class, 'sendEmail'])->name('send.email');

Route::post('/operasi-rutin', [OperasiRutinController::class, 'store'])->name('operasi-rutin.store');



// Route::get('/laporan-rutin', [OperasiRutinController::class, 'index'])->name('laporan-rutin.index');

Route::get('/laporan-rutin', [OperasiRutinController::class, 'index'])->name('laporanrutin');