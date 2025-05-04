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
            $table->string('name');  // Nama produk
            $table->text('description');  // Deskripsi produk
            $table->decimal('price', 10, 2);  // Harga produk
            $table->string('image')->nullable();  // Gambar produk (akan disimpan path)
            $table->string('sku')->unique();  // Kode produk (misal untuk inventaris)
            $table->enum('status', ['available', 'out_of_stock', 'discontinued'])->default('available');  // Status produk
            $table->timestamps();  // Tanggal pembuatan dan pembaruan
            $table->string('category_id');  // Kategori produk
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
