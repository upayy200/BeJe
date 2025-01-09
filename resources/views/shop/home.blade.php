@extends('layout.app')

@section('title', 'Home')

@section('content')

    <style>
        .carousel-item img {
            max-height: 90vh;
            object-fit: cover;
        }

        .carousel-caption {
            position: absolute;
            bottom: 30%;
            left: 50%;
            transform: translateX(-50%);
            text-align: center;
            color: #fff;
            padding: 20px;
            border-radius: 10px;
            width: 80%;
        }

        .carousel-caption h5 {
            font-size: 3rem;
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .carousel-caption p {
            font-size: 1.2rem;
            font-family: 'Roboto', sans-serif;
            margin-bottom: 20px;
        }

        .carousel-caption .btn {
            padding: 10px 20px;
            font-size: 1rem;
            border-radius: 10px;
            background-color: #00e381;
            border: none;
            color: white;
            transition: all 0.3s ease;
        }

        .carousel-caption .btn:hover {
            background-color: #016635;
            transform: scale(1.05);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .carousel-item {
            transition: opacity 0.8s ease-in-out, transform 0.8s ease-in-out;
            opacity: 0;
            transform: scale(0.95);
        }

        .carousel-item.active {
            opacity: 1;
            transform: scale(1);
        }

        .carousel-control-prev-icon:hover,
        .carousel-control-next-icon:hover {
            background-color: rgba(0, 0, 0, 0.2);
        }

        .category-title {
            font-size: 24px;
            font-weight: bold;
            margin: 30px 0 15px;
            text-align: center;
            color: #0071e3;
        }

        .divider {
            height: 2px;
            background-color: #e0e0e0;
            margin: 40px 0;
        }

        .cta-banner {
            background-image: url('https://images.unsplash.com/photo-1595246140625-573b715d11dc?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
            background-size: cover;
            background-position: center;
            max-width: 1400px;
            margin: 0 auto;
            color: white;
            position: relative;
            overflow: hidden;
            opacity: 0;
            transform: translateY(50px);
            transition: all 0.6s ease-in-out;
        }

        .cta-banner::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 0;
        }

        .cta-banner h4,
        .cta-banner p,
        .cta-banner a {
            position: relative;
            z-index: 1;
        }

        .cta-banner h4 {
            font-size: 2rem;
            font-family: 'Poppins', sans-serif;
        }

        .cta-banner p {
            font-size: 1.2rem;
            margin-bottom: 1rem;
            font-family: 'Roboto', sans-serif;
        }

        .cta-banner .btn {
            transition: all 0.3s ease;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .cta-banner .btn:hover {
            transform: scale(1.05);
            background-color: #016635;
        }

        #cta-banner.show {
            opacity: 1;
            transform: translateY(0);
        }

        .product-item {
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 10px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            background-color: #fff;
            height: 100%;
            position: relative;
        }

        .product-item img {
            width: 500px;
            height: 500px;
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

        .content {
            padding-top: 80px;
            font-family: 'Poppins';
        }

        .quick-review-button {
            display: none;
            position: absolute;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            background-color: #201D17;
            color: white;
            border: none;
            border-radius: 3px;
            padding: 5px 10px;
            cursor: pointer;
        }

        .quick-review-popup {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            display: none;
            z-index: 1000;
            max-width: 450px;
            width: 100%;
            transition: all 0.3s ease;
        }

        .quick-review-popup img {
            max-width: 100%;
            height: 450px;
            object-fit: cover;
            border-radius: 7px;
        }

        .quick-review-popup h5 {
            font-family: 'Poppins', sans-serif;
            margin: 10px 0;
        }

        .quick-review-popup p {
            margin: 5px 0;
        }

        .quick-review-popup .close-popup {
            position: absolute;
            top: 15px;
            right: 15px;
            cursor: pointer;
            font-size: 2rem;
            color: white;
            border-radius: 4px;
            background-color: black;
        }

        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            /* Dark background with transparency */
            display: none;
            z-index: 500;
        }
    </style>

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
                    <a href="{{ 'list' }}" class="btn btn-primary">Lihat Produk</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1599398875076-5715de130a9b?q=80&w=1804&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    class="d-block w-100" alt="Slide 2">
                <div class="carousel-caption">
                    <h5>Teknologi Terkini</h5>
                    <p>Upgrade gaya hidup Anda dengan teknologi terbaru.</p>
                    <a href="{{ 'list' }}" class="btn btn-primary">Lihat Produk</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1654064756910-974764816931?q=80&w=1790&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    class="d-block w-100" alt="Slide 3">
                <div class="carousel-caption">
                    <h5>Kategori Lengkap</h5>
                    <p>Dapatkan semua yang Anda butuhkan dalam satu tempat.</p>
                    <a href="{{ 'list' }}" class="btn btn-primary">Lihat Produk</a>
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

    <div class="divider"></div>

    <div id="cta-banner" class="cta-banner p-4 my-4 rounded">
        <h4 class="fw-bold">Nikmati Gratis Ongkir Sekarang!</h4>
        <p class="mb-3">Untuk setiap pembelian minimal <strong>Rp 100.000</strong>. Jangan sampai terlewatkan!</p>
        <a href="#" class="btn btn-success btn-lg"> Lihat Penawaran</a>
    </div>

    <div class="content container">
        <h2 class="text-left">Temukan Produk Terbaru Kami</h2>
        <div class="row">
            @foreach ($products as $product)
                <div class="col-6 col-md-4 col-lg-3 mb-4 d-flex">
                    <div class="product-item flex-fill" data-name="{{ $product->nama }}"
                        data-price="Rp {{ number_format($product->harga, 0, ',', '.') }}"
                        data-description="{{ $product->deskripsi }}">
                        <img src="{{ isset($product->foto) ? Storage::url($product->foto) : asset('img/sayuran.png') }}"
                            class="img-fluid">
                        <h5 class="product-name text-center mt-2">{{ $product->nama }}</h5>
                        <p class="product-price text-center">Rp {{ number_format($product->harga, 0, ',', '.') }}</p>
                        <p class="product-price text-center">Stok: {{ number_format($product->stok, 0, ',', '.') }}</p>
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
            @endforeach
        </div>
    </div>

    <div class="quick-review-popup" id="quickReviewPopup">
        <span class="close-popup">&times;</span>
        <img src="" alt="Product Image" class="popup-image">
        <h5 class="popup-name"></h5>
        <p class="popup-price"></p>
        <p class="popup-description"></p>
        @if (Auth::check() && Auth::user()->role == 'buyer')
            <button class="btn btn-success btn-sm">Add To Cart</button>
        @endif
    </div>
    <div class="overlay" id="overlay"></div>

    <script>
        const ctaBanner = document.getElementById("cta-banner");
        const showAt = 100; // Jarak scroll sebelum CTA muncul (dalam px)

        window.addEventListener("scroll", () => {
            ctaBanner.classList.toggle("show", window.scrollY > showAt);
        });

        // Quick Review Button functionality
        document.addEventListener("DOMContentLoaded", () => {
            const productItems = document.querySelectorAll('.product-item');
            const quickReviewPopup = document.getElementById('quickReviewPopup');
            const overlay = document.getElementById('overlay');
            const closePopup = quickReviewPopup?.querySelector('.close-popup');
            const popupImage = quickReviewPopup?.querySelector('.popup-image');
            const popupName = quickReviewPopup?.querySelector('.popup-name');
            const popupPrice = quickReviewPopup?.querySelector('.popup-price');
            const popupDescription = quickReviewPopup?.querySelector('.popup-description');

            console.log('QuickReviewPopup:', quickReviewPopup);
            console.log('Overlay:', overlay);

            productItems.forEach(item => {
                const button = item.querySelector('.quick-review-button');
                const name = item.getAttribute('data-name');
                const price = item.getAttribute('data-price');
                const description = item.getAttribute('data-description');
                const imageSrc = item.querySelector('img').src;

                console.log('Product Item:', item);
                console.log('Quick Review Button:', button);

                if (button) {
                    item.addEventListener('mouseenter', () => {
                        button.style.display = 'block';
                    });

                    item.addEventListener('mouseleave', () => {
                        button.style.display = 'none';
                    });

                    button.addEventListener('click', () => {
                        if (quickReviewPopup && overlay) {
                            popupImage.src = imageSrc;
                            popupName.textContent = name;
                            popupPrice.textContent = price;
                            popupDescription.textContent = description;
                            quickReviewPopup.style.display = 'block';
                            overlay.style.display = 'block';
                        }
                    });
                } else {
                    console.warn('Button not found for product:', item);
                }
            });

            if (closePopup) {
                closePopup.addEventListener('click', () => {
                    quickReviewPopup.style.display = 'none';
                    overlay.style.display = 'none';
                });
            }

            window.addEventListener('click', (event) => {
                if (event.target === quickReviewPopup || event.target === overlay) {
                    quickReviewPopup.style.display = 'none';
                    overlay.style.display = 'none';
                }
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

@endsection
