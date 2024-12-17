<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function index()
    {
        // echo "<h1>Selamat datang, " . Auth::user()->name . "!<h1>";
        // echo "<h3>Role Anda: " . Auth::user()->role . "<h3>";
        // echo "<a href='/logout'>Log Out</a>";
        return view('dashboard', ['title' => 'Dashboard']);
    }
}
