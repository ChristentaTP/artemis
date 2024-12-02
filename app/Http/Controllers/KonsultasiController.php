<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Psikolog;
use App\Models\Konsultasi;
use App\Decorators\PsikologDecorator;

class KonsultasiController extends Controller
{
    // Menampilkan halaman formulir pesan konsultasi
    public function showForm()
    {
        // Ambil daftar psikolog dari database dan dekorasi setiap item
        $psikologs = Psikolog::all()->map(function ($psikolog) {
            return new PsikologDecorator($psikolog);
        });

        return view('pesan-konsultasi', compact('psikologs'));
    }

    // Menyimpan data konsultasi
    public function store(Request $request)
    {
        $request->validate([
            'psikolog_id' => 'required|exists:psikologs,id',
            'jadwal' => 'required|date',
            'catatan' => 'nullable|string',
        ]);

        Konsultasi::create([
            'psikolog_id' => $request->psikolog_id,
            'user_id' => auth()->id(), // Asumsikan pengguna sudah login
            'jadwal' => $request->jadwal,
            'catatan' => $request->catatan,
        ]);

        return redirect()->route('pesan-konsultasi')->with('success', 'Konsultasi berhasil dipesan!');
    }
}
