<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LayananController extends Controller
{
    public function __construct()
    {
        // Middleware untuk memastikan hanya pengguna yang terautentikasi yang bisa mengakses
        $this->middleware('auth');
    }
        // Menampilkan daftar layanan
        public function index()
        {

        // Ambil semua data layanan
        $layanan = Layanan::all();

        // Kembalikan ke tampilan layanan
        return view('layanan.layanan', compact('layanan'));
    }

    // Menampilkan halaman detail layanan
    public function show($id)
    {
        // Ambil data layanan berdasarkan ID
        $layanan = Layanan::findOrFail($id);

        // Kembalikan ke tampilan show dengan membawa data layanan
        return view('layanan.layanan', compact('layanan'));
    }
     // Menampilkan halaman profil pengguna
     public function profile()
     {
         $user = Auth::user(); // Mengambil informasi pengguna yang sedang login
         return view('profile.index', compact('user'));
     }
}
