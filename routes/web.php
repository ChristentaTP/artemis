<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});

Route::get('/psikolog', function () {
    return view('psikolog');
})->name('psikolog');

// routes/web.php
Route::get('/pesan-konsultasi', 'App\Http\Controllers\KonsultasiController@showForm')->name('pesan-konsultasi');
Route::post('/pesan-konsultasi', 'App\Http\Controllers\KonsultasiController@store')->name('konsultasi.store');


