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
            'nama_produk' => 'Sepeda Gunung',
            'harga_produk'=>'10000',
            'stok_produk' => '20',
            'deskripsi_produk' => 'merupakan produk contoh',
            'kategori_id' => 1,
        ]);
            // Tambahkan produk lainnya sesuai kebutuhan
    }
}
