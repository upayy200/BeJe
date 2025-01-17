<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('carts', function (Blueprint $table) {
            $table->string('name')->after('quantity'); // Nama produk
            $table->decimal('price', 10, 2)->after('name'); // Harga produk
            $table->string('image')->after('price'); // Gambar produk
        });
    }

    public function down()
    {
        Schema::table('carts', function (Blueprint $table) {
            $table->dropColumn(['name', 'price', 'image']);
        });
    }
};
