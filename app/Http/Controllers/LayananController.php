<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    // Menampilkan halaman detail layanan
    public function show($id)
    {
        // Ambil data layanan berdasarkan ID
        $layanan = Layanan::findOrFail($id);

        // Kembalikan ke tampilan show dengan membawa data layanan
        return view('layanan.layanan', compact('layanan'));
    }
}
