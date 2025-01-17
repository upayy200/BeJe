@extends('layout.app')

@section('title', 'Detail Produk')

@section('content')

    <style>
        body {
            padding-top: 20px;
            background-color: #e0e0e0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 15px;
            background-color: #fff;
        }

        .breadcrumb {
            margin: 20px 0;
            font-size: 14px;
            color: #666;
            padding: 10px;
            background-color: #f8f9fa;
            border-radius: 5px;
            display: flex;
            align-items: center;
        }

        .breadcrumb a {
            color: #007bff;
            text-decoration: none;
            margin-right: 5px;
        }

        .breadcrumb a:hover {
            text-decoration: underline;
        }

        .breadcrumb span {
            color: #333;
            font-weight: bold;
        }

        .breadcrumb::after {
            content: '>';
            margin: 0 5px;
            color: #666;
        }

        .breadcrumb a:last-child {
            color: #333;
            pointer-events: none;
            /* Disable link for the last item */
        }

        .product-page {
            display: flex;
            justify-content: space-between;
            margin: 20px;
        }

        .product-details {
            width: 65%;
        }

        .product-info {
            margin-top: 20px;
        }

        .product-info h1 {
            font-size: 28px;
            font-weight: 700;
            margin: 10px 0;
        }

        .rating {
            display: flex;
            align-items: center;
            margin: 10px 0;
        }

        .rating i {
            color: #f5c518;
            margin-right: 5px;
        }

        .price {
            font-size: 24px;
            font-weight: 700;
            margin: 20px 0;
        }

        .description {
            margin: 20px 0;
            font-size: 16px;
            color: #666;
            text-align: justify;
        }

        .order-details {
            background-color: #f9f9f9;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 30%;
            height: 89vh;
        }

        .quantity {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .quantity-btn {
            padding: 10px;
            border: 1px solid #007bff;
            background-color: #fff;
            color: #007bff;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .quantity-btn:hover {
            background-color: #007bff;
            color: #fff;
        }

        .quantity-input {
            width: 50px;
            text-align: center;
            border: 1px solid #ccc;
            margin: 0 10px;
            border-radius: 5px;
        }

        .summary p {
            display: flex;
            justify-content: space-between;
            margin: 10px 0;
            color: #666;
        }

        .total {
            font-size: 24px;
            font-weight: 700;
            color: #333;
        }

        .notes {
            margin-bottom: 20px;
        }

        .notes-textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .actions {
            display: flex;
            justify-content: space-between;
        }

        .actions button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .actions .buy-now {
            background-color: #007bff;
            color: #fff;
        }

        .actions .buy-now:hover {
            background-color: #0056b3;
        }

        .actions .add-to-cart {
            background-color: #28a745;
            color: #fff;
        }

        .actions .add-to-cart:hover {
            background-color: #218838;
        }

        @media (max -width: 768px) {
            .product-page {
                flex-direction: column;
            }

            .product-details,
            .order-details {
                width: 100%;
            }
        }
    </style>

    <div class="container">
        <!-- Breadcrumb -->
        <div class="breadcrumb">
            <a href="/">Home</a>
            <a href="/list">List Produk</a>
            <span>{{ $products->nama }}</span>
        </div>

        <!-- Product Details Section -->
        <div class="product-page">
            <div class="product-details">
                <!-- Product Image Slider -->
                <div class="product-slider">
                    <div class="slider-container">
                        <div class="slide">
                            <img
                                src="{{ isset($products->foto) ? asset($products->foto) : asset('img/sayuran.png') }}">
                        </div>
                    </div>
                </div>

                <!-- Product Information -->
                <div class="product-info">
                    <h1>{{ $products->nama }}</h1>
                    <div class="rating">
                        @for ($i = 0; $i < 5; $i++)
                            <i class="fas fa-star{{ $i == 4 ? '-half-alt' : '' }}"></i>
                        @endfor
                    </div>
                    <div class="price">Rp {{ number_format($products->harga, 0, ',', '.') }}</div>
                    <div class="description">{{ $products->deskripsi }}</div>
                </div>
            </div>

            <!-- Order Details Section -->
            <div class="order-details">
                <h2><strong>Order Summary</strong></h2>
                <div class="quantity">
                    <button class="quantity-btn" onclick="changeQuantity(-1)">-</button>
                    <input type="number" id="quantity" value="1" min="1" onchange="validateQuantity()"
                        class="quantity-input">
                    <button class="quantity-btn" onclick="changeQuantity(1)">+</button>
                </div>
                <div class="summary">
                    <p>Subtotal: <span>Rp {{ number_format($products->harga, 0, ',', '.') }}</span></p>
                    <p>Ongkir: <span>Rp 5.000</span></p>
                    <p class="total">Total: <span>Rp {{ number_format($products->harga + 5000, 0, ',', '.') }}</span></p>
                </div>
                <div class="notes">
                    <label for="notes">Notes:</label>
                    <textarea id="notes" rows="3" class="notes-textarea"></textarea>
                </div>
                <div class="actions">
                    @guest
                        <button class="buy-now">Buy Now</button>
                    @endguest
                    @if (Auth::check() && Auth::user()->role == 'buyer')
                        <button class="add-to-cart" id="add_to_cart" >Add to Cart</button>
                    @endif

                </div>
            </div>
        </div>
    </div>

    <style>
        .product-slider {
            position: relative;
            max-width: 100%;
            overflow: hidden;
        }

        .slider-container {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .slide {
            min-width: 100%;
            box-sizing: border-box;
        }

        .slide img {
            width: 100%;
            display: block;
            border-radius: 10px;
            /* Sudut bulat */
        }

        .thumbnail {
            width: 60px;
            /* Ukuran thumbnail */
            margin: 5px;
            cursor: pointer;
            opacity: 0.6;
            /* Opacity default untuk thumbnail */
            transition: opacity 0.3s;
        }

        .thumbnail.active {
            opacity: 1;
            /* Opacity penuh untuk thumbnail yang aktif */
        }

        .prev,
        .next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
        }

        .prev {
            left: 10px;
        }

        .next {
            right: 10px;
        }
    </style>

    <script>
        let currentSlide = 0;

        function moveSlide(direction) {
            const slides = document.querySelectorAll('.slide');
            const sliderContainer = document.querySelector('.slider-container');
            const totalSlides = slides.length;

            currentSlide = (currentSlide + direction + totalSlides) % totalSlides;
            sliderContainer.style.transform = `translateX(-${currentSlide * 100}%)`;
            updateThumbnails();
        }

        function setSlide(index) {
            currentSlide = index;
            const slides = document.querySelectorAll('.slide');
            const sliderContainer = document.querySelector('.slider-container');
            sliderContainer.style.transform = `translateX(-${currentSlide * 100}%)`;
            updateThumbnails();
        }

        function updateThumbnails() {
            const thumbnails = document.querySelectorAll('.thumbnail');
            thumbnails.forEach((thumbnail, index) => {
                thumbnail.classList.remove('active');
                if (index === currentSlide) {
                    thumbnail.classList.add('active');
                }
            });
        }

        function changeQuantity(amount) {
            const quantityInput = document.getElementById('quantity');
            let currentQuantity = parseInt(quantityInput.value);
            currentQuantity += amount;
            if (currentQuantity < 1) currentQuantity = 1;
            quantityInput.value = currentQuantity;
            validateQuantity();
        }

        function validateQuantity() {
            const quantityInput = document.getElementById('quantity');
            if (quantityInput.value < 1) {
                quantityInput.value = 1;
            }
        }

        document.querySelector('.add-to-cart').addEventListener('click', function () {
    
        const productId = {{ $products->id }};
        const quantity = document.getElementById('quantity').value;


        fetch('{{ route('cart.add') }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({
                product_id: productId,
                quantity: quantity,
                name: '{{ $products->nama }}',
                price: {{ $products->harga }},
                image: '{{ $products->foto }}'
            })
        })
        .then(response => response.json())
    .then(data => {
        alert(data.message);
        console.log(data.data);
        // Redirect ke halaman cart setelah berhasil
        if (data.success) {
            window.location.href = '{{ route('shop.cart') }}';
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
    });

    </script>
@endsection
