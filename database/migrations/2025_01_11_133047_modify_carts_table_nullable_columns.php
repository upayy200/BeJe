<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('carts', function (Blueprint $table) {
            $table->string('name')->nullable()->change();
            $table->decimal('price', 10, 2)->nullable()->change();
            $table->string('image')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('carts', function (Blueprint $table) {
            $table->string('name')->nullable(false)->change();
            $table->decimal('price', 10, 2)->nullable(false)->change();
            $table->string('image')->nullable(false)->change();
        });
    }
};
