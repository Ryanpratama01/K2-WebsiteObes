<!-- resources/views/layouts/main.blade.php -->
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Application')</title>
    @stack('styles') <!-- Untuk menambahkan CSS tambahan -->
</head>

<body>
    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-teal">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('assets/web_user/images/LogoObes.png') }}" alt="Logo" class="logo-img">
                </a>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('kalkulator') ? 'active' : '' }}" href="/kalkulator">Kalkulator</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('rekomendasi') ? 'active' : '' }}" href="/rekomendasi">Rekomendasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('history') ? 'active' : '' }}" href="/history">History</a>
                    </li>

                </ul>
                <span class="navbar-text">User <i class="bi bi-person-circle"></i></span>
            </div>
        </nav>
    </header>

    <main>
        @yield('content') <!-- Tempat konten utama akan ditampilkan -->
    </main>

    @stack('scripts') <!-- Untuk menambahkan JS tambahan -->
</body>

</html>