<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // query builder untuk mengisi data produk
        DB::table('tabelproduk')->insert([
            [
                'nama_produk' => 'Sepeda Gunung',
                'harga_produk'=>'10000',
                'stok_produk' => '20',
                'deskripsi_produk' => 'merupakan produk contoh',
                'kategori_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_produk' => 'Laptop Gaming',
                'harga_produk' => '15000',
                'stok_produk' => '10',
                'deskripsi_produk' => 'Laptop dengan spesifikasi tinggi untuk gaming',
                'kategori_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_produk' => 'Kaos Olahraga',
                'harga_produk' => '2000',
                'stok_produk' => '50',
                'deskripsi_produk' => 'Kaos nyaman untuk berolahraga',
                'kategori_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
            // Tambahkan produk lainnya sesuai kebutuhan
    }
}
