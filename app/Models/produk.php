<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    // Inisialisasi Tabel Produk
    protected $table = 'produk';
    // Inisialisasi Primary Key
    // Jika nama primary key bukan 'id', maka harus didefinisikan
    protected $primaryKey = 'id_produk';
    // Inisialisasi data yang bisa diisi
    protected $fillable = [
        'nama_produk',
        'harga_produk',
        'stok_produk',
        'deskripsi_produk',
        'gambar_produk',
    ];
    // Inisialisasi data yang tidak bisa diisi
    protected $guarded = ['id_produk'];
}   
