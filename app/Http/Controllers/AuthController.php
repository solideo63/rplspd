<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login'); // Ganti dengan path view Anda
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email', // Sesuaikan validasi dengan kebutuhan
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Redirect ke dashboard jika login berhasil
            return redirect()->intended('/dashboard');
        }

        // Jika gagal, kembali ke halaman login dengan error
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->onlyInput('email');
    }
}
