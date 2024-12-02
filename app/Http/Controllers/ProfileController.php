<?php

// app/Http/Controllers/ProfileController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show()
    {
        // Ambil data pengguna yang sedang login
        $user = Auth::user();

        // Tampilkan halaman profil dengan data pengguna
        return view('profile.show', compact('user'));
    }
}
