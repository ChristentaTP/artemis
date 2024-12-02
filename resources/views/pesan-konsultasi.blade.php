@extends('layout.layout')

@section('content')
    <header class="header">
        <div class="container">
            <h1>Pesan Konsultasi Psikolog</h1>
            <p>Pilih psikolog dan tentukan jadwal konsultasi Anda.</p>
        </div>
    </header>

    <section class="form-section">
        <div class="container">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('konsultasi.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="psikolog">Pilih Psikolog</label>
                    <select id="psikolog" name="psikolog_id" required>
                        <option value="">Pilih Psikolog</option>
                        @foreach ($psikologs as $psikologDecorator)
                            <option value="{{ $psikologDecorator->getPsikolog()->id }}">
                                {{ $psikologDecorator->getFullNameWithSpecialization() }} - Rating: {{ $psikologDecorator->getRating() }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="jadwal">Jadwal Konsultasi</label>
                    <input type="datetime-local" id="jadwal" name="jadwal" required>
                </div>

                <div class="form-group">
                    <label for="catatan">Catatan Tambahan (Opsional)</label>
                    <textarea id="catatan" name="catatan" rows="4"></textarea>
                </div>

                <button type="submit" class="btn">Pesan Konsultasi</button>
            </form>
        </div>
    </section>
@endsection
