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
            <a class="navbar-brand" href="/">
                <img alt="Beje Logo" src="{{ asset('icon/logo.jpg') }}" width="50" height="18" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            @if (Auth::check() && Auth::user()->role == 'seller')
                {{--  --}}
            @else
                <div class="collapse navbar-collapse" id="navbarNav">
                    <!-- Centered Navigation -->
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item"><a class="nav-link" href="/">Beranda</a></li>
                        <li class="nav-item"><a class="nav-link"
                                href="{{ route('shop.list', ['kategoris' => 1]) }}">Furniture</a></li>
                        <li class="nav-item"><a class="nav-link"
                                href="{{ route('shop.list', ['kategoris' => 2]) }}">Fashion</a></li>
                        <li class="nav-item"><a class="nav-link"
                                href="{{ route('shop.list', ['kategoris' => 3]) }}">Elektronik</a></li>
                        <li class="nav-item"><a class="nav-link"
                                href="{{ route('shop.list', ['kategoris' => 4]) }}">Kecantikan</a></li>
                        <li class="nav-item"><a class="nav-link"
                                href="{{ route('shop.list', ['kategoris' => 5]) }}">Mainan</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Dukungan</a></li>
                    </ul>

                    @if (isset($showNavbarSearch) && $showNavbarSearch)
                        <!-- Search Bar -->
                        <form class="d-flex ms-auto" action="{{ route('search') }}" method="GET">
                            <input class="form-control me-2" type="search" name="query" placeholder="Search"
                                aria-label="Search" required>
                            <button class="btn btn-outline-success" type="submit"><i
                                    class="fas fa-search"></i></button>
                        </form>
                    @endif
                </div>
            @endif
            @guest
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ 'login' }}">Login</a></li>
                        </ul>
                    </li>
                </ul>
            @endguest
            @auth
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ 'profile' }}">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="{{ 'cart' }}">Keranjang</a></li>
                        </ul>
                    </li>
                </ul>
            @endauth
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-+0n0g0g0g0g0g0g0g0g0g0g0g0g0g0g0g0g0g0g0g0g0g0g0g0g0g0g0g0g0g0" crossorigin="anonymous"></script>

</body>

</html>
