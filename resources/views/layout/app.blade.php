<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'BeJe | A Easy Way To Become Hedonism')</title>

    @include('layout.styles')

</head>
<body>

<!-- Bagian Navbar -->
<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img alt="Apple logo" src="https://storage.googleapis.com/a1aa/image/P3m8XWgWc3ZWHdnkjelWw10kSrO9coKfBF4WxesX8bfHEuvOB.jpg" width="24" height="24"/>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item"><a class="nav-link" href="#">Beranda</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Furniture</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Fashion</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Elektronik</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Kecantikan</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Mainan</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Dukungan</a></li>
            </ul>
            <form class="d-flex" action="{{ route('search') }}" method="GET">
                <input class="form-control me-2" type="search" name="query" placeholder="Search" aria-label="Search" required>
                <button class="btn btn-outline-success" type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>
    </div>
</nav>
<!-- End of Navbar -->

    <div class="content">
        @yield('content')
    </div>

<!-- Bagian Footer -->
<footer>
    <p>&copy; 2024 BEJE. Semua Hak Dilindungi.</p>
</footer>
<!-- End of Footer -->

</body>
</html>