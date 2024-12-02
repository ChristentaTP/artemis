@extends('layout.layout')

@section('content')
    <section class="psychologists">
        <div class="container">
            <h2>Daftar Psikolog</h2>

            <!-- Filter Search -->
            <div class="filter">
                <input type="text" placeholder="Cari psikolog..." class="search-bar">
            </div>

            <!-- Psychologist Cards -->
            <div class="psychologist-grid">
                <div class="psychologist-card">
                    <img src="psychologist1.jpg" alt="Psikolog 1">
                    <h3>Dr. John Doe</h3>
                    <p>Spesialisasi: Anak-anak</p>
                    <span class="status available">Available</span>
                    <a href="jadwal.html" class="btn">Lihat Jadwal</a>
                </div>
                <div class="psychologist-card">
                    <img src="psychologist2.jpg" alt="Psikolog 2">
                    <h3>Dr. Jane Smith</h3>
                    <p>Spesialisasi: Pasangan</p>
                    <span class="status busy">Busy</span>
                    <a href="jadwal.html" class="btn">Lihat Jadwal</a>
                </div>
            </div>
        </div>
    </section>
@endsection
