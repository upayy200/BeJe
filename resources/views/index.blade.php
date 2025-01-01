<!-- resources/views/home.blade.php -->
@extends('layout.app')

@section('title', 'Home')

@section('content')
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://images.unsplash.com/photo-1483181957632-8bda974cbc91?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    class="d-block w-100" alt="Slide 1">
                <div class="carousel-caption">
                    <h5>Promosi Terbaik</h5>
                    <p>Temukan produk terbaik dengan diskon besar!</p>
                    <a href="#" class="btn btn-primary">Lihat Produk</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1599398875076-5715de130a9b?q=80&w=1804&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    class="d-block w-100" alt="Slide 2">
                <div class="carousel-caption">
                    <h5>Teknologi Terkini</h5>
                    <p>Upgrade gaya hidup Anda dengan teknologi terbaru.</p>
                    <a href="#" class="btn btn-primary">Lihat Produk</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1654064756910-974764816931?q=80&w=1790&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    class="d-block w-100" alt="Slide 3">
                <div class="carousel-caption">
                    <h5>Kategori Lengkap</h5>
                    <p>Dapatkan semua yang Anda butuhkan dalam satu tempat.</p>
                    <a href="#" class="btn btn-primary">Lihat Produk</a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="divider"></div> <!-- Visual barrier -->

    <div id="cta-banner" class="cta-banner p-4 my-4 rounded">
        <h4 class="fw-bold">Nikmati Gratis Ongkir Sekarang!</h4>
        <p class="mb-3">Untuk setiap pembelian minimal <strong>Rp 100.000</strong>. Jangan sampai terlewatkan!</p>
        <a href="#" class="btn btn-success btn-lg"> Lihat Penawaran</a>
    </div>

    <div class="content container">
        <h2 class="text-left">Temukan Produk Unggulan Kami</h2>
        <div class="row">
            <div class="col-6 col-md-4 col-lg-3 mb-4 d-flex">
                <div class="product-item flex-fill" data-name="ErgoChair Flex" data-price="Rp 200.000"
                    data-description="Kursi ergonomis dengan desain modern yang nyaman digunakan untuk berbagai aktivitas, dilengkapi dengan bahan kokoh dan bantalan empuk. Cocok untuk rumah, kantor, atau ruang santai.">
                    <img src="https://images.unsplash.com/photo-1598300056393-4aac492f4344?q=80&w=2034&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="Produk 1" class="img-fluid">
                    <h5 class="product-name text-center mt-2">ErgoChair Flex</h5>
                    <p class="product-price text-center">Rp 200.000</p>
                    <div class="product-rating text-center">
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star-half-alt text-warning"></i>
                        <i class="far fa-star text-warning"></i>
                    </div>
                    <button class="quick-review-button">Quick Review Product</button>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3 mb-4 d-flex">
                <div class="product-item flex-fill" data-name="GlamStiletto Elegance" data-price="Rp 350.000"
                    data-description="Sepatu high heels elegan dengan desain yang stylish, dibuat dari bahan berkualitas untuk kenyamanan dan kepercayaan diri maksimal saat menghadiri acara formal maupun pesta.">
                    <img src="https://images.unsplash.com/photo-1543163521-1bf539c55dd2?q=80&w=1780&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="Produk 2" class="img-fluid">
                    <h5 class="product-name text-center mt-2">GlamStiletto Elegance</h5>
                    <p class="product-price text-center">Rp 350.000</p>
                    <div class="product-rating text-center">
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="far fa-star text-warning"></i>
                        <i class="far fa-star text-warning"></i>
                    </div>
                    <button class="quick-review-button">Quick Review Product</button>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3 mb-4 d-flex">
                <div class="product-item flex-fill" data-name="InstaSnap Retro 300" data-price="Rp 3.500.000"
                    data-description="Kamera polaroid instan yang praktis dengan fitur pencetakan langsung. Ideal untuk mengabadikan momen spesial dengan hasil foto bernuansa retro yang unik.">
                    <img src="https://images.unsplash.com/photo-1526170375885-4d8ecf77b99f?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="Produk 3" class="img-fluid">
                    <h5 class="product-name text-center mt-2">InstaSnap Retro 300</h5>
                    <p class="product-price text-center">Rp 3.500.000</p>
                    <div class="product-rating text-center">
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="far fa-star text-warning"></i>
                        <i class="far fa-star text-warning"></i>
                    </div>
                    <button class="quick-review-button">Quick Review Product</button>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3 mb-4 d-flex">
                <div class="product-item flex-fill" data-name="LuxeFoam Sesderma" data-price="Rp 100.000"
                    data-description="Sabun cair berbentuk busa lembut dengan aroma segar, diformulasikan untuk membersihkan kulit secara efektif sekaligus menjaga kelembapan alaminya. Cocok untuk pemakaian sehari-hari.">
                    <img src="https://images.unsplash.com/photo-1686831889330-b059693080dd?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="Produk 4" class="img-fluid">
                    <h5 class="product-name text-center mt-2">LuxeFoam Sesderma</h5>
                    <p class="product-price text-center">Rp 100.000</p>
                    <button class="quick-review-button">Quick Review Product</button>
                    <div class="product-rating text-center">
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star-half-alt text-warning"></i>
                        <i class="far fa-star text-warning"></i>
                    </div>
                </div>
            </div>
            <!-- Add more product items as needed -->
        </div>
    </div>

    <div class="quick-review-popup" id="quickReviewPopup">
        <span class="close-popup">&times;</span>
        <img src="" alt="Product Image" class="popup-image">
        <h5 class="popup-name"></h5>
        <p class="popup-price"></p>
        <p class="popup-description"></p>
        <button class="btn btn-success btn-sm">Add To Cart</button>
    </div>
    <div class="overlay" id="overlay"></div>

@endsection
