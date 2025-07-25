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
        // Membuat tabel 'produks' dengan kolom yang sesuai
        Schema::create('tabelproduk', function (Blueprint $table) {
            $table->id();
            $table->string('nama_produk');
            $table->decimal('harga_produk', 10, 2);
            $table->integer('stok_produk');
            $table->text('deskripsi_produk')->nullable();
            $table->string('gambar_produk')->nullable();
            $table->integer('kategori_id')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};
