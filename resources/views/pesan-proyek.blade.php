@extends('layout.layout')

@section('content')
    <header class="header">
        <div class="container">
            <h1>Pesan Layanan Proyek Teknologi</h1>
            <p>Pilih layanan dan tentukan kebutuhan proyek Anda.</p>
        </div>
    </header>

    <section class="form-section">
        <div class="container">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('proyek.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="layanan">Pilih Layanan Teknologi</label>
                    <select id="layanan" name="layanan_id" required>
                        <option value="">Pilih Layanan</option>
                        @foreach ($layanan as $layananItem)
                            <option value="{{ $layananItem->id }}">
                                {{ $layananItem->nama_layanan }} - Spesialisasi: {{ $layananItem->spesialisasi }} - Harga: {{ $layananItem->getHarga() }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="deadline">Deadline Proyek</label>
                    <input type="date" id="deadline" name="deadline" required>
                </div>

                <div class="form-group">
                    <label for="deskripsi">Deskripsi Proyek</label>
                    <textarea id="deskripsi" name="deskripsi" rows="4" placeholder="Jelaskan kebutuhan proyek Anda"></textarea>
                </div>

                <button type="submit" class="btn">Pesan Layanan</button>
            </form>
        </div>
    </section>
@endsection
