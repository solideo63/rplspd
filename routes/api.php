<?php

use App\Http\Controllers\Api\PelanggaranController;
use illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/laporan-rutin', [PelanggaranController::class, 'index']);

Route::get('/laporan-rutin/{id}', [PelanggaranController::class, 'show']);

Route::post('/laporan-rutin', [PelanggaranController::class, 'store']);

Route::get('/test', function () {
    return response()->json(['message' => 'API is working']);
});
