@extends('layout.app')

@section('title', 'Halaman Seller')

@section('content')
    <div>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </div>

    <div class="sb-nav-fixed sb-sidenav-toggled">
        {{-- <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="">BJ</a>
            <!-- Sidebar Toggle-->
            <button hidden class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                    class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form hidden class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div hidden class="input-group">
                    <input hidden class="form-control" type="text" placeholder="Search for..." aria-label="Search for..."
                        aria-describedby="btnNavbarSearch" />
                    <button hidden class="btn btn-primary" id="btnNavbarSearch" type="button"><i
                            class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">{{ auth()->user()->name }}</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li>
                            <a class="dropdown-item" href="javascript:void(0);"
                                onclick="document.getElementById('logout-form').submit();">Logout</a>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                    </ul>
                </li>
            </ul>
        </nav> --}}
        <div id="layoutSidenav">
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">

                        <div class="card mb-4">
                            <div class="card-header d-flex justify-content-between">
                                <div>
                                    <i class="fas fa-table me-1"></i>
                                    Daftar Produk
                                </div>
                                {{-- <h1 class="mt-4">Hai {{ auth()->user()->name }}</h1> --}}
                                <ol class="breadcrumb mb-4">
                                    <li class="breadcrumb-item active">Hai {{ auth()->user()->name }}</li>
                                </ol>
                                <!-- Add 'data-bs-toggle' and 'data-bs-target' for modal popup -->
                                <button class="btn btn-sm btn-primary ml-auto" data-bs-toggle="modal"
                                    data-bs-target="#tambahProdukModal">Tambah Produk</button>
                            </div>

                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Foto</th>
                                            <th>Nama</th>
                                            <th>Stok</th>
                                            <th>Harga</th>
                                            <th>Deskripsi</th>
                                            <th>Kategori</th>
                                            <th>Rating</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Foto</th>
                                            <th>Nama</th>
                                            <th>Stok</th>
                                            <th>Harga</th>
                                            <th>Deskripsi</th>
                                            <th>Kategori</th>
                                            <th>Rating</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($products as $k)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    @empty($k->foto)
                                                        <img src="{{ isset($k->foto) ? Storage::url($k->foto) : asset('img/mesinwaktu.jpeg') }}"
                                                            alt="project-image" class="rounded"
                                                            style="width: 100%; max-width: 100px; height: auto;">
                                                    @else
                                                        <img src="{{ isset($k->foto) ? Storage::url($k->foto) : asset('img/mesinwaktu.jpeg') }}"
                                                            alt="project-image" class="rounded"
                                                            style="width: 100%; max-width: 100px; height: auto;">
                                                    @endempty
                                                </td>
                                                <td>{{ $k->nama }}</td>
                                                <td>{{ $k->stok }}</td>
                                                <td>{{ $k->harga }}</td>
                                                <td>{{ $k->deskripsi }}</td>
                                                <td>{{ $k->kategori->nama }}</td>
                                                <td>{{ $k->rating }}</td>
                                                {{-- <td>
                                                <a href="" class="btn btn-sm btn-warning">Edit</a>
                                                <button type="button" class="btn btn-danger btn-sm"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal{{ $k->id }}">
                                                    Hapus
                                                </button>
                                            </td> --}}
                                                <td>
                                                    <a href="#" class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                                        data-bs-target="#editProdukModal{{ $k->id }}">Edit</a>
                                                    <button type="button" class="btn btn-danger btn-sm"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#deleteProdukModal{{ $k->id }}">
                                                        Hapus
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>

        <!-- Modal Popup for Adding Product -->
        <div class="modal fade" id="tambahProdukModal" tabindex="-1" aria-labelledby="tambahProdukModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="tambahProdukModalLabel">Tambah Produk</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Product Form -->
                        <form action="{{ route('seller.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col">
                                <!-- Hidden input to auto-assign the logged-in seller ID -->
                                <input type="hidden" name="seller_id" value="{{ auth()->user()->id }}">
                            </div>

                            <div class="row">
                                <!-- Product Name -->
                                <div class="col-md-6 mb-3">
                                    <label for="nama" class="form-label">Nama Produk</label>
                                    <input type="text" class="form-control" id="nama" name="nama" required />
                                </div>

                                <!-- Product Image -->
                                <div class="col-md-6 mb-3">
                                    <label for="foto" class="form-label">Foto Produk</label>
                                    <input type="file" class="form-control" id="foto" name="foto"
                                        accept="image/*" />
                                </div>
                            </div>

                            <div class="row">
                                <!-- Product Stock -->
                                <div class="col-md-6 mb-3">
                                    <label for="stok" class="form-label">Stok Produk</label>
                                    <input type="number" class="form-control" id="stok" name="stok" required />
                                </div>

                                <!-- Product Price -->
                                <div class="col-md-6 mb-3">
                                    <label for="harga" class="form-label">Harga Produk</label>
                                    <input type="number" class="form-control" id="harga" name="harga" required />
                                </div>
                            </div>

                            <!-- Product Description -->
                            <div class="mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi Produk</label>
                                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required></textarea>
                            </div>

                            <div class="row">
                                <!-- Product Category -->
                                <div class="col-md-6 mb-3">
                                    <label for="kategoris" class="form-label">Kategori Produk</label>
                                    <select class="form-control" id="kategoris" name="kategoris_id" required>
                                        <option value="">Pilih Kategori</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-primary">Simpan Produk</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <h1><br></h1>
        </div>

        <!-- Modal Popup for Editing Product -->
        @foreach ($products as $k)
            <div class="modal fade" id="editProdukModal{{ $k->id }}" tabindex="-1"
                aria-labelledby="editProdukModalLabel{{ $k->id }}" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editProdukModalLabel{{ $k->id }}">Edit Produk</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!-- Product Form for Editing -->
                            <form action="{{ route('seller.update', $k->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="col">
                                    <input type="hidden" name="seller_id" value="{{ auth()->user()->id }}">
                                </div>

                                <div class="row">
                                    <!-- Product Name -->
                                    <div class="col-md-6 mb-3">
                                        <label for="nama" class="form-label">Nama Produk</label>
                                        <input type="text" class="form-control" id="nama" name="nama"
                                            value="{{ $k->nama }}" required />
                                    </div>

                                    <!-- Product Image -->
                                    <div class="col-md-6 mb-3">
                                        <label for="foto" class="form-label">Foto Produk</label>
                                        <input type="file" class="form-control" id="foto" name="foto"
                                            accept="image/*" />
                                        <!-- Display the current image -->
                                        @if ($k->foto)
                                            <img src="{{ url('image/' . $k->foto) }}" alt="product-image"
                                                class="rounded mt-2" style="width: 100px; height: auto;">
                                        @else
                                            <img src="{{ url('image/nophoto.jpg') }}" alt="product-image"
                                                class="rounded mt-2" style="width: 100px; height: auto;">
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Product Stock -->
                                    <div class="col-md-6 mb-3">
                                        <label for="stok" class="form-label">Stok Produk</label>
                                        <input type="number" class="form-control" id="stok" name="stok"
                                            value="{{ $k->stok }}" required />
                                    </div>

                                    <!-- Product Price -->
                                    <div class="col-md-6 mb-3">
                                        <label for="harga" class="form-label">Harga Produk</label>
                                        <input type="number" class="form-control" id="harga" name="harga"
                                            value="{{ $k->harga }}" required />
                                    </div>
                                </div>

                                <!-- Product Description -->
                                <div class="mb-3">
                                    <label for="deskripsi" class="form-label">Deskripsi Produk</label>
                                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required>{{ $k->deskripsi }}</textarea>
                                </div>

                                <div class="row">
                                    <!-- Product Category -->
                                    <div class="col-md-6 mb-3">
                                        <label for="kategoris" class="form-label">Kategori Produk</label>
                                        <select class="form-control" id="kategoris" name="kategoris_id" required>
                                            <option value="">Pilih Kategori</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}"
                                                    {{ $k->kategoris_id == $category->id ? 'selected' : '' }}>
                                                    {{ $category->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <button type="submit" class="btn btn-primary">Update Produk</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        <!-- Modal Popup for Deleting Product -->
        @foreach ($products as $k)
            <div class="modal fade" id="deleteProdukModal{{ $k->id }}" tabindex="-1"
                aria-labelledby="deleteProdukModalLabel{{ $k->id }}" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteProdukModalLabel{{ $k->id }}">Hapus Produk</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Apakah Anda yakin ingin menghapus produk <strong>{{ $k->nama }}</strong>?</p>
                        </div>
                        <div class="modal-footer">
                            <form action="{{ route('seller.destroy', $k->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
        </script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
            crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </div>
@endsection
