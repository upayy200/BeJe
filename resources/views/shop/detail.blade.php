@extends('layout.app')

@section('title', 'Home')

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
        pointer-events: none; /* Disable link for the last item */
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
        .product-details, .order-details {
            width: 100%;
        }
    }
</style>

@php
$products = [
    [
        'name' => 'LuxeFoam Sesderma',
        'price' => 100000,
        'description' => 'Luxe Foam Sesderma adalah sabun cair berbentuk busa lembut yang dirancang untuk memberikan pengalaman pembersihan yang menyenangkan. Dengan aroma segar yang menyegarkan, produk ini cocok untuk digunakan sehari-hari, baik saat mandi maupun mencuci tangan. Diformulasikan dengan bahan-bahan berkualitas, LuxeFoam Sesderma efektif menghilangkan kotoran dan minyak tanpa membuat kulit terasa kering. Tekstur busanya yang lembut membuatnya nyaman digunakan, bahkan untuk kulit sensitif sekalipun. Dengan penggunaan rutin, sabun ini dapat membantu menjaga kelembapan kulit dan memberikan sensasi segar yang tahan lama. Jadikan LuxeFoam Sesderma sebagai pilihan tepat untuk perawatan kulit Anda. Dapatkan sekarang dan nikmati kebersihan serta kesegaran yang ditawarkannya!',
        'images' => [
            asset('product/1.1.jpg'),
            asset('product/1.2.jpg'),
            asset('product/1.3.jpg'),
            asset('product/1.4.jpg'),
        ],
    ],
];
$product = $products[0]; // Mengambil produk pertama dari array
@endphp

<div class="container">
    <div class="breadcrumb">
        <a href="/">Home</a>
        <a href="/list">List Produk</a>
        <span>{{ $product['name'] }}</span>
    </div>
    <div class="product-page">
        <div class="product-details">
            <!-- Slider untuk gambar produk -->
            <div class="product-slider">
                <div class="slider-container">
                    @foreach ($product['images'] as $image)
                        <div class="slide">
                            <img src="{{ $image }}" alt="Product Image">
                        </div>
                    @endforeach
                </div>
                <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
                <button class="next" onclick="moveSlide(1)">&#10095;</button>
            </div>

            <div class="thumbnail-container">
                @foreach ($product['images'] as $index => $image)
                    <img src="{{ $image }}" alt="Thumbnail" class="thumbnail" onclick="setSlide({{ $index }})">
                @endforeach
            </div>

            <!-- Informasi produk -->
            <div class="product-info">
                <h1>{{ $product['name'] }}</h1>
                <div class="rating">
                    @for ($i = 0; $i < 5; $i++)
                        <i class="fas fa-star{{ $i == 4 ? '-half-alt' : '' }}"></i>
                    @endfor
                </div>
                <div class="price">Rp {{ number_format($product['price'], 0, ',', '.') }}</div>
                <div class="description">{{ $product['description'] }}</div>
            </div>
        </div>
        <div class="order-details">
            <h2><strong>Order Summary</strong></h2>
            <div class="quantity">
                <button class="quantity-btn" onclick="changeQuantity(-1)">-</button>
                <input type="number" id="quantity" value="1" min="1" onchange="validateQuantity()" class="quantity-input">
                <button class="quantity-btn" onclick="changeQuantity(1)">+</button>
            </div>
            <div class="summary">
                <p>Subtotal: <span>Rp {{ number_format($product['price'], 0, ',', '.') }}</span></p>
                <p>Shipping: <span>Rp 5.000</span></p>
                <p class="total">Total: <span>Rp {{ number_format($product['price'] + 5000, 0, ',', '.') }}</span></p>
            </div>
            <div class="notes">
                <label for="notes">Notes:</label>
                <textarea id="notes" rows="3" class="notes-textarea"></textarea>
            </div>
            <div class="actions">
                <button class="buy-now">Buy Now</button>
                <button class="add-to-cart">Add to Cart</button>
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
        border-radius: 10px; /* Sudut bulat */
    }

    .thumbnail {
        width: 60px; /* Ukuran thumbnail */
        margin: 5px;
        cursor: pointer;
        opacity: 0.6; /* Opacity default untuk thumbnail */
        transition: opacity 0.3s;
    }

    .thumbnail.active {
        opacity: 1; /* Opacity penuh untuk thumbnail yang aktif */
    }

    .prev, .next {
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
</script>
@endsection