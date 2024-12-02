<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan; // Ganti Layanan dengan Layanan
use App\Models\Proyek; // Ganti Konsultasi dengan Proyek
use App\Decorators\ProyekDecorator; // Ganti PsikologDecorator dengan ProyekDecorator

class ProyekController extends Controller
{
    // Menampilkan halaman formulir pesan proyek
    public function showForm()
    {
        // Ambil daftar layanan dari database dan dekorasi setiap item
        $layanan = Layanan::all()->map(function ($layananItem) {
            return new ProyekDecorator($layananItem);
        });

        return view('pesan-proyek', compact('layanan')); // Disesuaikan dengan view 'pesan-proyek'
    }

    // Menyimpan data proyek
    public function store(Request $request)
    {
        $request->validate([
            'layanan_id' => 'required|exists:layanans,id',
            'deadline' => 'required|date',
            'deskripsi' => 'nullable|string',
        ]);

        Proyek::create([
            'layanan_id' => $request->layanan_id,
            'user_id' => auth()->id(), // Asumsikan pengguna sudah login
            'deadline' => $request->deadline,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('proyek.store')->with('success', 'Proyek berhasil dipesan!'); // Disesuaikan dengan nama route
    }
}

