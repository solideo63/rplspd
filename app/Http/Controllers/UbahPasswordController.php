<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UbahPasswordController extends Controller
{
    function index()
    {
        return view('ubahpassword');
    }

    function ubahPassword(request $request)
    {
        $request->validate(
            [
                'password' => 'required',
                'newpassword' => 'required',
                'cnewpassword' => 'required|same:newpassword'
            ],
            [
                'password.required' => 'Field Password Lama wajib diisi!',
                'newpassword.required' => 'Field Password Baru wajib diisi!',
                'cnewpassword.required' => 'Field Konfirmasi Password Baru wajib diisi!',
                'cnewpassword.same' => 'Konfirmasi Password Baru harus sama dengan Password Baru!'
            ]
        );

        $user = Auth::user();
        if (Hash::check($request->password, $user->password)) {
            $user->password = Hash::make($request->newpassword);
            $user->save();
            return redirect('/logout')->with('success', 'Password berhasil diubah!');
        } else {
            return back()->withErrors(['password' => 'Password lama salah!'])->withInput();
        }
    }
}
