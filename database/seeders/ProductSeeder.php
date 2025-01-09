<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'nama' => 'ErgoChair Flex',
                'harga' => 200000,
                'deskripsi' => 'Kursi ergonomis dengan desain modern yang nyaman digunakan untuk berbagai aktivitas.',
                'foto' => 'product/7.jpg',
                'kategoris_id' => 1, // Furniture
            ],
            [
                'nama' => 'GlamStiletto Elegance',
                'harga' => 350000,
                'deskripsi' => 'Sepatu high heels elegan dengan desain yang stylish.',
                'foto' => 'product/3.jpg',
                'kategoris_id' => 2, // Fashion
            ],
            [
                'nama' => 'InstaSnap Retro 300',
                'harga' => 3500000,
                'deskripsi' => 'Kamera polaroid instan yang praktis dengan fitur pencetakan langsung.',
                'foto' => 'product/4.jpg',
                'kategoris_id' => 3, // Elektronik
            ],
            [
                'nama' => 'LuxeFoam Sesderma',
                'harga' => 100000,
                'deskripsi' => 'Sabun cair berbentuk busa lembut dengan aroma segar.',
                'foto' => 'product/1.1.jpg',
                'kategoris_id' => 4, // Kecantikan
            ],
            [
                'nama' => 'State of Mind Chrono',
                'harga' => 2700000,
                'deskripsi' => 'Jam tangan pria dengan desain futuristik dan elegan.',
                'foto' => 'product/5.jpg',
                'kategoris_id' => 2, // Fashion
            ],
            [
                'nama' => 'Lego ShellShock Warriors',
                'harga' => 40000,
                'deskripsi' => 'Mainan lego TMNT ini dirancang untuk para penggemar sejati.',
                'foto' => 'product/6.jpg',
                'kategoris_id' => 5, // Mainan
            ],
            [
                'nama' => 'Aperture Canon',
                'harga' => 2500000,
                'deskripsi' => 'Lensa Aperture Canon 0.25mm f/0.8 untuk menangkap gambar menakjubkan.',
                'foto' => 'product/2.jpg',
                'kategoris_id' => 3, // Elektronik
            ],
            [
                'nama' => 'Eau de Parfum Zent Colorful',
                'harga' => 60000,
                'deskripsi' => 'Parfum premium dengan aroma maskulin dan sensual.',
                'foto' => 'product/8.jpg',
                'kategoris_id' => 4, // Kecantikan
            ],
        ];

        foreach ($products as $product) {
            DB::table('products')->insert([
                'nama' => $product['nama'],
                'harga' => $product['harga'],
                'deskripsi' => $product['deskripsi'],
                'foto' => $product['foto'],
                'stok' => rand(10, 100), // Random stok
                'rating' => null,
                'seller_id' => 2, // Fixed seller ID
                'kategoris_id' => $product['kategoris_id'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
