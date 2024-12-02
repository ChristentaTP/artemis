<?php

use App\Http\Controllers\LayananController;
use App\Http\Controllers\ProyekController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Halaman landing page yang mengarah ke home.blade.php
Route::get('/', function () {
    return view('home');  // Ubah 'index' menjadi 'home'
});

// Menampilkan daftar layanan (menggunakan LayananController)
Route::get('/layanan', [LayananController::class, 'index'])->name('layanan');
Route::get('/profile', [LayananController::class, 'profile'])->name('profile');

// Menampilkan detail layanan (menggunakan LayananController)
Route::get('/layanan/{id}', [LayananController::class, 'show'])->name('layanan.show');

// Halaman home (menggunakan HomeController)
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Proyek
Route::get('/pesan-proyek', [ProyekController::class, 'showForm'])->name('pesan-proyek');
Route::post('/pesan-proyek', [ProyekController::class, 'store'])->name('proyek.store');

// Auth routes (login dan registrasi)
Auth::routes();
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile');
});
