@extends('layout.app')

@section('content')
<style>
    .product-item {
        border: 1px solid #ddd;
        border-radius: 10px;
        padding: 10px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        background-color: #fff;
        height: auto;
        max-width: auto;
        margin: 0 auto;
    }

    .product-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 10px;
    }

    .product-item:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    }

    .product-rating i {
        font-size: 1rem;
    }
</style>

<div class="container my-5">
    <h1 class="text-center mb-4 font-weight-bold">Daftar Produk</h1>
    
    <!-- Filter dan Pencarian -->
    <div class="row mb-4">
        <div class="col-md-6 mx-auto">
            <input type="text" id="search" class="form-control" placeholder="Cari produk..." oninput="filterProducts()">
        </div>
    </div>

    <!-- Grid Produk -->
    <div class="row" id="product-list">
        @php
            $products = [
                    [
                        'id' => 7,
                        'name' => 'ErgoChair Flex',
                        'price' => 200000,
                        'description' => 'Kursi ergonomis dengan desain modern yang nyaman digunakan untuk berbagai aktivitas.',
                        'image' => asset('product/7.jpg'),
                        'category' => 'furniture',
                    ],
                    [
                        'id' => 3,
                        'name' => 'GlamStiletto Elegance',
                        'price' => 350000,
                        'description' => 'Sepatu high heels elegan dengan desain yang stylish.',
                        'image' => asset('product/3.jpg'),
                        'category' => 'fashion',
                    ],
                    [
                        'id' => 4,
                        'name' => 'InstaSnap Retro 300',
                        'price' => 3500000,
                        'description' => 'Kamera polaroid instan yang praktis dengan fitur pencetakan langsung.',
                        'image' => asset('product/4.jpg'),
                        'category' => 'elektronik',
                    ],
                    [
                        'id' => 1,
                        'name' => 'LuxeFoam Sesderma',
                        'price' => 100000,
                        'description' => 'Sabun cair berbentuk busa lembut dengan aroma segar.',
                        'image' => asset('product/1.1.jpg'),
                        'category' => 'kecantikan',
                    ],
                    [
                        'id' => 5,
                        'name' => 'State of Mind Chrono',
                        'price' => 2700000,
                        'description' => 'Jam tangan pria dengan desain futuristik dan elegan.',
                        'image' => asset('product/5.jpg'),
                        'category' => 'fashion',
                    ],
                    [
                        'id' => 6,
                        'name' => 'Lego ShellShock Warriors',
                        'price' => 40000,
                        'description' => 'Mainan lego TMNT ini dirancang untuk para penggemar sejati.',
                        'image' => asset('product/6.jpg'),
                        'category' => 'mainan',
                    ],
                    [
                        'id' => 2,
                        'name' => 'Aperture Canon',
                        'price' => 2500000,
                        'description' => 'Lensa Aperture Canon 0.25mm f/0.8 untuk menangkap gambar menakjubkan.',
                        'image' => asset('product/2.jpg'),
                        'category' => 'elektronik',
                    ],
                    [
                        'id' => 8,
                        'name' => 'Eau de Parfum Zent Colorful',
                        'price' => 60000,
                        'description' => 'Parfum premium dengan aroma maskulin dan sensual.',
                        'image' => asset('product/8.jpg'),
                        'category' => 'kecantikan',
                    ],
                ];
            @endphp

        <!-- Filter Kategori -->
        <div class="row mb-4">
            <div class="col-md-6 mx-auto">
                <h5>Pilih Kategori:</h5>
                <div>
                    <label><input type="checkbox" value="furniture" onchange="filterProducts()"> Furniture</label>
                    <label><input type="checkbox" value="fashion" onchange="filterProducts()"> Fashion</label>
                    <label><input type="checkbox" value="mainan" onchange="filterProducts()"> Mainan</label>
                    <label><input type="checkbox" value="kecantikan" onchange="filterProducts()"> Kecantikan</label>
                    <label><input type="checkbox" value="elektronik" onchange="filterProducts()"> Elektronik</label>
                </div>
            </div>
        </div>

        <!-- Loop Produk -->
        @foreach ($products as $product)
            <div class="col-sm-6 col-md-3 mb-4 product-item-wrapper" data-category="{{ $product['category'] }}">
                <div class="product-item">
                    <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}">
                    <h5 class="text-center mt-2">{{ $product['name'] }}</h5>
                    <p class="text-center"><strong>Rp {{ number_format($product['price'], 0, ',', '.') }}</strong></p>
                    <div class="d-flex justify-content-center mt-2">
                        <button class="btn btn-outline-primary me-2" onclick="showModal({{ json_encode($product) }})">
                            <i class="bi bi-eye"></i> Quick Review
                        </button>
                        <a href="" class="btn btn-success">
                            <i class="bi bi-info-circle"></i> Detail
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Paginasi Dummy -->
    <div class="text-center">
        <button class="btn btn-secondary">Sebelumnya</button>
        <button class="btn btn-secondary">Selanjutnya</button>
    </div>
</div>

<!-- Modal Detail Produk -->
<div class="modal fade" id="productModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitle">Detail Produk</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img id="modalImage" src="" alt="" class="img-fluid mb-3" style="border-radius: 10px;">
                <p id="modalDescription"></p>
                <p><strong id="modalPrice"></strong></p>
            </div>
        </div>
    </div>
</div>

<script>
    // Filter Produk
    function filterProducts() {
        const searchValue = document.getElementById('search').value.toLowerCase();
        const products = document.querySelectorAll('.product-item-wrapper');

    // Ambil kategori yang dipilih
    const selectedCategories = Array.from(document.querySelectorAll('input[type="checkbox"]:checked')).map(checkbox => checkbox.value);

    products.forEach(product => {
        const name = product.querySelector('h5').textContent.toLowerCase();
        const category = product.dataset.category; // Ambil kategori dari data atribut

        const matchesSearch = name.includes(searchValue);
        const matchesCategory = selectedCategories.length === 0 || selectedCategories.includes(category);

        if (matchesSearch && matchesCategory) {
            product.style.display = 'block';
        } else {
            product.style.display = 'none';
        }
    });
}

    // Tampilkan Modal
    function showModal(product) {
        document.getElementById('modalTitle').textContent = product.name;
        document.getElementById('modalImage').src = product.image;
        document.getElementById('modalDescription').textContent = product.description;
        document.getElementById('modalPrice').textContent = `Rp ${product.price.toLocaleString('id-ID')}`;
        const modal = new bootstrap.Modal(document.getElementById('productModal'));
        modal.show();
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection