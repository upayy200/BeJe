<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('foto')->nullable();
            $table->string('nama');
            $table->integer('stok');
            $table->integer('harga');
            $table->text('deskripsi');
            $table->float('rating')->nullable();

            $table->unsignedBigInteger('seller_id');
            $table->unsignedBigInteger('kategoris_id');

            $table->index('seller_id');

            $table->foreign('seller_id')->references('id')->on('users');

            $table->index('kategoris_id');

            $table->foreign('kategoris_id')->references('id')->on('kategoris');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
