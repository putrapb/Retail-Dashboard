<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function creator()
    {
        return view('pages.creator');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function products()
    {
        $data_toko = [
            'nama_toko' => 'Toko Madura Sejahtera',
            'alamat_toko' => 'Jl. Contoh Alamat No. 123',
            'telepon_toko' => '08123456789',
        ];
        return view('pages.products', $data_toko);

    }
    public function addproducts()
    {
        return view('pages.tambahproducts');
    }

    public function upload()
    {
        return view('pages.upload');
    }

    public function visualisasi()
    {
        return view('pages.visualisasi');
    }

    public function forecast()
    {
        return view('pages.forecast');
    }

    public function ai()
    {
        return view('pages.ai');
    }
}
