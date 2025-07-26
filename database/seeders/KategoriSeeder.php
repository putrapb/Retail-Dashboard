<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // query builder untuk mengisi data produk
        DB::table('tabelkategori')->insert([
    [
        'id' => 1,
        'nama_kategori' => 'Olahraga',
        'deskripsi_kategori' => 'Kategori untuk produk olahraga',
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'id' => 2,
        'nama_kategori' => 'Elektronik',
        'deskripsi_kategori' => 'Kategori untuk produk elektronik',
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'id' => 3,
        'nama_kategori' => 'Pakaian',
        'deskripsi_kategori' => 'Kategori untuk produk pakaian',
        'created_at' => now(),
        'updated_at' => now(),
    ],
]);

    }
}
