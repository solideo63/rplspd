<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Models\Token;

class TokenController extends Controller
{

    public function index()
    {
        $token = session('token', null);
        return view('buat-token', ['title' => 'Buat Token', 'token' => $token]);
    }


    // public function generateToken()
    // {
    //     $token = strtoupper(Str::random(5));

    //     Token::create([
    //         'token' => $token,
    //         'waktu_kedaluarsa' => Carbon::now()->addDay(),
    //     ]);

    //     return response()->json(['token' => $token], 200);
    // }

    public function generateToken()
    {
        $existingToken = Token::whereDate('created_at', Carbon::today())->first();

        if ($existingToken) {
            return response()->json([
                'status' => 'exists',
                'message' => 'Token sudah dibuat hari ini.',
                'token' => $existingToken->token
            ], 200);
        }

        $token = strtoupper(Str::random(5));

        Token::create([
            'token' => $token,
            'waktu_kedaluarsa' => Carbon::now()->addHours(24)->addHours(7),
        ]);

        return response()->json([
            'status' => 'created',
            'message' => 'Token berhasil dibuat.',
            'token' => $token
        ], 200);
    }

    //     public function generateToken()
    // {
    //     $existingToken = Token::whereDate('created_at', Carbon::today())->first();

    //     if ($existingToken) {
    //         return response()->json(['token' => $existingToken->token], 200);
    //     }
    //     $token = strtoupper(Str::random(5));

    //     Token::create([
    //         'token' => $token,
    //         'waktu_kedaluarsa' => Carbon::now()->addDay(),
    //     ]);

    //     return response()->json(['token' => $token], 200);
    // }

    public function showEnterTokenForm()
    {
        return view('input-token');
    }

    public function processToken(Request $request)
    {
        $request->validate(['token' => 'required|string']);
        $tokenInput = $request->input('token');
        $token = Token::where('token', $tokenInput)
            ->where('waktu_kedaluarsa', '>=', now())
            ->first();
        if ($token) {
            return redirect()->route('klaim-pelanggaran');
        } else {
            return redirect()->route('enter-token')->with('error', 'Token salah atau kedaluarsa');
        }
    }

    public function showRestrictedPage()
    {
        return view('klaim-pelanggaran');
    }
}
