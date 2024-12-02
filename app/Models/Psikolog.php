<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Psikolog extends Model
{
    use HasFactory;

    // Jika tabel database menggunakan nama lain, tambahkan properti ini:
    // protected $table = 'nama_tabel';

    // Tentukan kolom yang dapat diisi (mass-assignable)
    protected $fillable = [
        'name',
        'specialization',
        'rating',
        'email',
        'phone',
    ];
}
