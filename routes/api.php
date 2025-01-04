<?php

use App\Http\Controllers\Api\PelanggaranController;
use illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Operasi Rutin
Route::get('/laporan-rutin', [PelanggaranController::class, 'index']);
Route::get('/laporan-rutin/{id}', [PelanggaranController::class, 'show']);
Route::post('/laporan-rutin', [PelanggaranController::class, 'store']);

// Operasi Umum
Route::get('/laporan-umum', [PelanggaranController::class, 'indexumum']);
Route::get('/laporan-umum/{id}', [PelanggaranController::class, 'showumum']);
Route::post('/laporan-umum', [PelanggaranController::class, 'storeumum']);

Route::get('/test', function () {
    return response()->json(['message' => 'API is working']);
});
