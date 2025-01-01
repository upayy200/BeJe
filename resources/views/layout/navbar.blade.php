<!-- resources/views/partials/navbar.blade.php -->
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