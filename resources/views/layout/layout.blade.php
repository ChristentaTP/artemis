<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artemis</title>
    <!-- Link ke file CSS -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>

    <!-- Header -->
    <header class="header">
        <div class="container">
            <nav class="navbar">
                <a href="/" class="logo">Artemis</a>
                <ul class="nav-menu">
                    <li><a href="/">Home</a></li>
                    <li><a href="/psikolog">Psikolog</a></li>
                    <li><a href="/about">Tentang Kami</a></li>
                    <li><a href="/contact">Kontak</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Konten Dinamis -->
    <main class="content">
        @yield('content')
    </main>




    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>© 2024 Artemis. All rights reserved.</p>
            <p>
                <a href="/privacy">Kebijakan Privasi</a>
                <span>|</span>
                <a href="/terms">Syarat & Ketentuan</a>
            </p>
        </div>
    </footer>

</body>
</html>
