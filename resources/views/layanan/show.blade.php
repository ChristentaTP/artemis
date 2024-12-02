@extends('layout.layout')

@section('content')
    <section class="service-detail">
        <div class="container">
            <h2>Detail Layanan: {{ $layanan->nama_layanan }}</h2>
            <div class="service-info">
                <div class="service-img">
                    <img src="{{ asset('images/'.$layanan->image) }}" alt="{{ $layanan->nama_layanan }}">
                </div>
                <div class="service-description">
                    <h3>Detail Jasa</h3>
                    <p>{{ $layanan->deskripsi }}</p>

                    <h3>Detail Pengerjaan</h3>
                    <p>{{ $layanan->detail_pengerjaan }}</p>

                    <h3>Harga</h3>
                    <p>{{ $layanan->getHarga() }}</p>

                    <h3>Durasi Pengerjaan</h3>
                    <p>{{ $layanan->durasi_pengerjaan }} Hari</p>

                    <h3>Fitur yang Termasuk</h3>
                    <ul>
                        @foreach($layanan->fitur as $fitur)
                            <li>{{ $fitur->nama_fitur }}</li>
                        @endforeach
                    </ul>

                    <h3>Testimoni Klien</h3>
                    <div class="testimonials">
                        @foreach($layanan->testimoni as $testimoni)
                            <div class="testimonial">
                                <p>"{{ $testimoni->konten }}"</p>
                                <span>- {{ $testimoni->nama_klien }}</span>
                            </div>
                        @endforeach
                    </div>

                    <h3>Keuntungan Layanan</h3>
                    <ul>
                        <li>Pelayanan profesional dan tepat waktu.</li>
                        <li>Solusi teknologi sesuai kebutuhan bisnis Anda.</li>
                        <li>Tim ahli yang berpengalaman di bidangnya.</li>
                        <li>Harga yang kompetitif dan transparan.</li>
                    </ul>

                    <div class="service-status">
                        <span class="status {{ $layanan->isAvailable() ? 'available' : 'busy' }}">
                            {{ $layanan->isAvailable() ? 'Tersedia' : 'Penuh' }}
                        </span>
                    </div>

                    <a href="{{ route('pesan-proyek') }}" class="btn {{ $layanan->isAvailable() ? '' : 'disabled' }}">
                        {{ $layanan->isAvailable() ? 'Pesan Sekarang' : 'Pesanan Ditutup' }}
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
