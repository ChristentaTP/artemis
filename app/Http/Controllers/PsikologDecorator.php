<?php

namespace App\Decorators;

use App\Models\Psikolog;

class PsikologDecorator
{
    protected $psikolog;

    public function __construct(Psikolog $psikolog)
    {
        $this->psikolog = $psikolog;
    }

    // Mendapatkan nama lengkap dengan spesialisasi
    public function getFullNameWithSpecialization()
    {
        return $this->psikolog->name . ' - ' . $this->psikolog->specialization;
    }

    // Mendapatkan rating psikolog
    public function getRating()
    {
        return $this->psikolog->rating ?? 'Rating tidak tersedia';
    }

    // Getter untuk objek psikolog
    public function getPsikolog()
    {
        return $this->psikolog;
    }
}
