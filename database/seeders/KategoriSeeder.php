<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $furniture = [
            'nama' => 'furniture',
        ];

        Kategori::create($furniture);

        $fashion = [
            'nama' => 'fashion',
        ];

        Kategori::create($fashion);

        $elektronik = [
            'nama' => 'elektronik',
        ];

        Kategori::create($elektronik);

        $kecantikan = [
            'nama' => 'kecantikan',
        ];

        Kategori::create($kecantikan);

        $mainan = [
            'nama' => 'mainan',
        ];

        Kategori::create($mainan);
    }
}
