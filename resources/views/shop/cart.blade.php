<?php 

use App\Models\Cart;

?>
@extends('layout.app')

@section('title', 'Keranjang')

@section('content')
    <style>
        body {
            background-color: #eef2f3;
        }

        .cart-page {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            padding: 20px;
            max-width: 1200px;
            margin: auto;
        }

        .cart-container {
            flex: 2;
            background-color: #ffffff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .info-container {
            flex: 1;
            background-color: #f1f1f1;
            border-radius: 10px;
            padding: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            max-width: 300px;
            /* Atur lebar maksimum sesuai kebutuhan */
        }

        .info-container h4 {
            font-size: 1.3rem;
            /* Ukuran font judul */
            margin-bottom: 10px;
            /* Jarak bawah judul */
        }

        .info-container p {
            font-size: 0.875rem;
            /* Ukuran font isi teks */
            margin-bottom: 15px;
            /* Jarak bawah paragraf */
        }

        .cart-header {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
            font-size: 1.5rem;
            font-weight: bold;
        }

        .cart-item {
            display: flex;
            align-items: center;
            background: #ffffff;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 15px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }

        .cart-item:hover {
            transform: scale(1.02);
        }

        .cart-item img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 8px;
            margin-right: 15px;
            border: 1px solid #ddd;
        }

        .cart-item .item-info {
            flex-grow: 1;
        }

        .cart-item .item-info h5 {
            margin: 0;
            font-size: 1.2rem;
            color: #333;
        }

        .cart-item .item-info p {
            margin: 5px 0;
            color: #888;
            font-size: 0.9rem;
        }

        .cart-item .item-actions {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .cart-item .item-actions input {
            width: 50px;
            text-align: center;
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 5px;
        }

        .cart-item .item-actions button {
            border: none;
            padding: 5px 10px;
            border-radius: 4px;
            background: #e74c3c;
            color: #fff;
            font-size: 0.9rem;
            cursor: pointer;
            transition: background 0.3s;
        }

        .cart-item .item-actions button:hover {
            background: #c0392b;
        }

        .total-price {
            text-align: right;
            font-size: 1.2rem;
            margin-top: 20px;
            color: #333;
        }

        .checkout-btn {
            text-align: right;
            margin-top: 10px;
        }

        .checkout-btn button {
            background-color: #27ae60;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.3s;
        }

        .checkout-btn button:hover {
            background-color: #219150;
        }

        @media (max-width: 768px) {
            .cart-page {
                flex-direction: column;
            }

            .cart-container,
            .info-container {
                width: 100%;
            }

            .cart-header {
                font-size: 1.2rem;
            }

            .cart-item {
                flex-direction: column;
                align-items: flex-start;
            }

            .cart-item img {
                margin-bottom: 10px;
            }

            .cart-item .item-actions {
                width: 100%;
                justify-content: space-between;
            }
        }
    </style>

    <div class="cart-page">
        <!-- Informasi Pengiriman dan Kebijakan Pengembalian -->
        <div class="info-container">
            <h4><i class="fas fa-truck" style="margin-right: 8px;"></i><strong>Informasi Pengiriman</strong></h4>
            <p>Pengiriman dilakukan melalui layanan ekspedisi terpercaya. Estimasi waktu pengiriman adalah 3-5 hari kerja
                untuk wilayah Jabodetabek dan 5-10 hari kerja untuk wilayah lainnya. Gratis ongkir untuk pembelian di atas
                Rp 100.000.</p>

            <hr style="border: 1px solid #ddd; margin: 20px 0;"> <!-- Pembatas -->

            <h4><i class="fas fa-undo" style="margin-right: 8px;"></i><strong>Syarat Pengembalian</strong></h4>
            <p>Pengembalian produk dapat dilakukan dalam waktu 3 hari setelah barang diterima, dengan syarat barang dalam
                kondisi baik dan belum digunakan. Silakan hubungi layanan pelanggan kami untuk informasi lebih lanjut
                terkait proses pengembalian.</p>
        </div>

        <!-- Keranjang Belanja -->
        <div class="cart-container">
            <h1 class="cart-header">
                <i class="fas fa-shopping-cart" style="margin-right: 8px;"></i>
                Keranjang Belanja
            </h1>

            <!-- Daftar Produk -->
            <div id="cart-items">
                @php
                    // $products = [
                    //     [
                    //         'name' => 'ErgoChair Flex',
                    //         'price' => 200000,
                    //         'description' =>
                    //             'Kursi ergonomis dengan desain modern yang nyaman digunakan untuk berbagai aktivitas.',
                    //         'image' => asset('product/7.jpg'),
                    //     ],
                    //     [
                    //         'name' => 'GlamStiletto Elegance',
                    //         'price' => 350000,
                    //         'description' => 'Sepatu high heels elegan dengan desain yang stylish.',
                    //         'image' => asset('product/3.jpg'),
                    //     ],
                    //     [
                    //         'name' => 'InstaSnap Retro 300',
                    //         'price' => 3500000,
                    //         'description' => 'Kamera polaroid instan yang praktis dengan fitur pencetakan langsung.',
                    //         'image' => asset('product/4.jpg'),
                    //     ],
                    //     [
                    //         'name' => 'LuxeFoam Sesderma',
                    //         'price' => 100000,
                    //         'description' => 'Sabun cair berbentuk busa lembut dengan aroma segar.',
                    //         'image' => asset('product/1.1.jpg'),
                    //     ],
                    // ];
                    $products = Cart::where('user_id', Auth::id())
        ->with('product') // Pastikan ada relasi dengan model `Product`
        ->get();

                @endphp

                @foreach ($products as $product)
                    <div class="cart-item">
                        <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}">
                        <div class="item-info">
                            <h5>{{ $product['name'] }}</h5>
                            <p>Rp {{ number_format($product['price'], 0, ',', '.') }}</p>
                        </div>
                        <div class="item-actions">
                            <input type="number" value="1" min="1">
                            <button onclick="hapus('{{ $product['id'] }}')">Hapus</button>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Total Harga -->
            <div class="total-price">
                <strong>Total: Rp 0</strong>
            </div>

            <!-- Tombol Checkout -->
            <div class="checkout-btn">
                <button>Lanjutkan ke Checkout</button>
            </div>
        </div>
    </div>

    <script>
        function updateTotalPrice() {
            let total = 0;
            document.querySelectorAll('.cart-item').forEach(item => {
                const priceText = item.querySelector('.item-info p').innerText.replace('Rp ', '').replace(/\./g,
                '');
                const quantity = item.querySelector('input').value;
                total += parseInt(priceText) * quantity;
            });
            document.querySelector('.total-price strong').innerText = 'Total: Rp ' + total.toString().replace(
                /\B(?=(\d{3})+(?!\d))/g, ".");
        }

        document.querySelectorAll('.cart-item input').forEach(input => {
            input.addEventListener('input', () => {
                updateTotalPrice();
            });
        });

        document.querySelectorAll('.cart-item .item-actions button').forEach(button => {
            button.addEventListener('click', (e) => {
                const item = e.target.closest('.cart-item');
                item.remove();
                updateTotalPrice();
            });
        });

        function hapus(id)
        {
            fetch('{{ route('cart.delete') }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({
                id: id
            })
        })
        .then(response => response.json())
        .then(data => {
            alert(data.message);            
        })
        .catch(error => {
            console.error('Error:', error);
        });
        }

        // Inisialisasi total harga saat halaman dimuat
        updateTotalPrice();
    </script>
@endsection
