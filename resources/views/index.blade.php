<!-- resources/views/profile/show.blade.php -->
@extends('layout.layout')

@section('content')
    <div class="profile-container">
        <h1>Profil Saya</h1>

        <div class="profile-details">
            <p><strong>Nama:</strong> {{ $user->name }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <p><strong>Joined:</strong> {{ $user->created_at->format('d M Y') }}</p>
        </div>

        <a href="{{ route('logout') }}" class="btn-logout">Logout</a>
    </div>
@endsection
