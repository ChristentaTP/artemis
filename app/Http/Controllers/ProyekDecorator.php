<?php

namespace App\Decorators;

use App\Models\Layanan; // Ganti Layanan dengan Layanan

class ProyekDecorator
{
    protected $layanan;

    public function __construct(Layanan $layanan)
    {
        $this->layanan = $layanan;
    }

    // Mendapatkan nama lengkap dengan spesialisasi layanan teknologi
    public function getFullNameWithSpecialization()
    {
        return $this->layanan->nama_layanan . ' - ' . $this->layanan->spesialisasi;
    }

    // Mendapatkan harga layanan
    public function getHarga()
    {
        return 'Rp' . number_format($this->layanan->harga, 0, ',', '.');
    }

    // Getter untuk objek layanan
    public function getLayanan()
    {
        return $this->layanan;
    }
}
