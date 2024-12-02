<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Fitur;  // Import Fitur model
use App\Models\Testimoni;  // Import Testimoni model

class Layanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_layanan', 'deskripsi', 'detail_pengerjaan', 'harga', 'durasi_pengerjaan', 'image', 'status',
    ];

    // Relasi (Contoh: Fitur dan Testimoni)
    public function fitur()
    {
        return $this->hasMany(Fitur::class);
    }

    public function testimoni()
    {
        return $this->hasMany(Testimoni::class);
    }

    public function isAvailable()
    {
        return $this->status === 'Tersedia';
    }

    public function getHarga()
    {
        return 'Rp ' . number_format($this->harga, 0, ',', '.');
    }
}
