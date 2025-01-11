<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
    function index()
    {
        return view('login');
    }

    function login(Request $request)
{
    $request->validate(
        [
            'username' => 'required',
            'password' => 'required'
        ],
        [
            'username.required' => 'Username wajib diisi!',
            'password.required' => 'Password wajib diisi!'
        ]
    );

    $infologin = [
        'username' => $request->username,
        'password' => $request->password
    ];

    if (Auth::attempt($infologin)) {
        // Redirect ke dashboard jika login berhasil
        return redirect('dashboard');
    } else {
        // Redirect kembali ke halaman login dengan pesan kesalahan
        return redirect()
            ->back()
            ->withErrors(['login' => 'Username atau password yang dimasukkan salah!'])
            ->withInput();
    }
}


    function logout()
    {
        Auth::logout();
        return redirect('');
    }
}
