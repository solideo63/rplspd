<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Daftarkan file routes/api.php
        Route::prefix('api') // Prefix 'api' untuk semua route di api.php
            ->middleware('api') // Middleware default untuk API Laravel
            ->group(base_path('routes/api.php')); // Pastikan path benar
    }
}
