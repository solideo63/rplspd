<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class EnsureUserIsAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
         // Cek apakah user belum login
        if (!Auth::check()) {
            // Cek apakah route yang diakses adalah / atau /login
            if (!$request->is('/') && !$request->is('login')) {
                // Arahkan ke halaman login
                return redirect('/');
            }
        }

        return $next($request);
    }
}
