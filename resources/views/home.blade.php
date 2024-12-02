@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="hero bg-primary text-white text-center py-5">
    <div class="container">
        <h1 class="display-4">Selamat Datang di Artemis</h1>
        <p class="lead">Solusi IT terbaik untuk masa depan Anda.</p>
        <a href="{{ route('layanan') }}" class="btn btn-light btn-lg">Lihat Layanan Kami</a>
    </div>
</section>

<!-- Fitur Utama -->
<section class="features py-5">
    <div class="container">
        <h2 class="text-center mb-5">Fitur Utama Kami</h2>
        <div class="row">
            <!-- Feature 1 -->
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="https://via.placeholder.com/400x250" class="card-img-top" alt="Layanan 1">
                    <div class="card-body">
                        <h5 class="card-title">Layanan 1</h5>
                        <p class="card-text">Deskripsi singkat tentang layanan pertama yang menarik.</p>
                    </div>
                </div>
            </div>
            <!-- Feature 2 -->
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="https://via.placeholder.com/400x250" class="card-img-top" alt="Layanan 2">
                    <div class="card-body">
                        <h5 class="card-title">Layanan 2</h5>
                        <p class="card-text">Deskripsi singkat tentang layanan kedua yang inovatif.</p>
                    </div>
                </div>
            </div>
            <!-- Feature 3 -->
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="https://via.placeholder.com/400x250" class="card-img-top" alt="Layanan 3">
                    <div class="card-body">
                        <h5 class="card-title">Layanan 3</h5>
                        <p class="card-text">Deskripsi singkat tentang layanan ketiga yang bermanfaat.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="cta bg-dark text-white py-5">
    <div class="container text-center">
        <h2 class="display-4">Bergabunglah Dengan Kami</h2>
        <p class="lead">Buat proyek Anda sekarang juga dan nikmati kemudahan dalam menggunakan layanan kami.</p>
        <a href="{{ route('pesan-proyek') }}" class="btn btn-light btn-lg">Pesan Proyek</a>
    </div>
</section>

@endsection
