@extends('layout.layout')

@section('content')
    <section class="services">
        <div class="container">
            <h2>Jasa Pemesanan Proyek Teknologi</h2>

            <!-- Filter Search -->
            <div class="filter">
                <input type="text" placeholder="Cari layanan proyek..." class="search-bar">
            </div>

            <!-- Project Service Cards -->
            <div class="services-grid">
                <!-- Web Development Card -->
                <div class="service-card">
                    <img src="web-development.jpg" alt="Web Development">
                    <h3>Pengembangan Website</h3>
                    <p>Buat website profesional untuk bisnis, portofolio, atau toko online Anda.</p>
                    <span class="status available">Tersedia</span>
                    <a href="#" class="btn">Pesan Sekarang</a>
                </div>

                <!-- Mobile App Development Card -->
                <div class="service-card">
                    <img src="mobile-app.jpg" alt="Mobile App Development">
                    <h3>Pengembangan Aplikasi Mobile</h3>
                    <p>Solusi aplikasi mobile untuk Android dan iOS sesuai kebutuhan bisnis Anda.</p>
                    <span class="status available">Tersedia</span>
                    <a href="#" class="btn">Pesan Sekarang</a>
                </div>

                <!-- Cloud Integration Card -->
                <div class="service-card">
                    <img src="cloud-services.jpg" alt="Cloud Integration">
                    <h3>Integrasi Cloud</h3>
                    <p>Manfaatkan teknologi cloud untuk meningkatkan efisiensi dan skalabilitas.</p>
                    <span class="status available">Tersedia</span>
                    <a href="#" class="btn">Pesan Sekarang</a>
                </div>

                <!-- AI and Machine Learning Card -->
                <div class="service-card">
                    <img src="ai-ml.jpg" alt="AI and Machine Learning">
                    <h3>Kecerdasan Buatan & Machine Learning</h3>
                    <p>Kembangkan solusi berbasis AI untuk analitik data dan otomatisasi proses.</p>
                    <span class="status available">Tersedia</span>
                    <a href="#" class="btn">Pesan Sekarang</a>
                </div>

                <!-- IT Consultation Card -->
                <div class="service-card">
                    <img src="it-consultation.jpg" alt="IT Consultation">
                    <h3>Konsultasi IT</h3>
                    <p>Dapatkan rekomendasi solusi teknologi terbaik sesuai kebutuhan Anda.</p>
                    <span class="status available">Tersedia</span>
                    <a href="#" class="btn">Pesan Sekarang</a>
                </div>

                <!-- Cybersecurity Card -->
                <div class="service-card">
                    <img src="cybersecurity.jpg" alt="Cybersecurity">
                    <h3>Keamanan Siber</h3>
                    <p>Lindungi data Anda dengan solusi keamanan siber yang terpercaya.</p>
                    <span class="status busy">Penuh</span>
                    <a href="#" class="btn disabled">Pesan Sekarang</a>
                </div>
            </div>
        </div>
    </section>
@endsection
