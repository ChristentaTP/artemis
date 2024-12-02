<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});

Route::get('/layanan', function () {
    return view('layanan');
})->name('layanan');

// routes/web.php
Route::get('/pesan-proyek', 'App\Http\Controllers\ProyekController@showForm')->name('pesan-proyek');
Route::post('/pesan-proyek', 'App\Http\Controllers\ProyekController@store')->name('proyek.store');



