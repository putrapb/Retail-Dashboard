@extends('layouts.app')

@section('content')
<!-- Section Intermezzo -->
<section class="py-5" style="background: linear-gradient(to right, #e0f7fa, #fff);">
    <div class="container">
        <div id="intermezzoCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner text-center">
                <div class="carousel-item active">
                    <h2 class="mb-4">📊 Data Lebih Mudah Dimengerti</h2>
                    <p class="lead">Dashboard ini menyajikan visualisasi penjualan yang interaktif dan mudah dibaca oleh semua level pengguna.</p>
                </div>
                <div class="carousel-item">
                    <h2 class="mb-4">⚡ Prediksi Cerdas</h2>
                    <p class="lead">Gunakan fitur prediksi untuk mengantisipasi tren penjualan di masa depan secara akurat dan real-time.</p>
                </div>
                <div class="carousel-item">
                    <h2 class="mb-4">🧠 Insight Otomatis Berbasis AI</h2>
                    <p class="lead">AI akan membantu Anda menemukan pola tersembunyi dan memberikan rekomendasi strategi bisnis terbaik.</p>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#intermezzoCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#intermezzoCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>
</section>

<!-- Section Fitur -->
<div class="container py-5">
    <div class="text-center mb-4">
        <h2>Selamat Datang di Dashboard Retail</h2>
        <p class="text-muted">Kelola dan analisis data penjualan Anda secara efisien</p>
    </div>

    {{-- Baris pertama: 2 card --}}
    <div class="row justify-content-center row-cols-1 row-cols-md-2 g-4" style="gap:2rem 0;">
        <div class="col-md-4 mb-4">
            <a href="{{ route('products') }}" class="text-decoration-none text-dark">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <i class="bi bi-box-seam fs-1"></i>
                        <h5 class="card-title mt-2">Manajemen Produk</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 mb-4">
            <a href="{{ route('visualisasi') }}" class="text-decoration-none text-dark">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <i class="bi bi-bar-chart-line fs-1"></i>
                        <h5 class="card-title mt-2">Visualisasi</h5>
                    </div>
                </div>
            </a>
        </div>
    </div>

    {{-- Baris kedua: 2 card di tengah --}}
    <div class="row justify-content-center row-cols-2 row-cols-md-2 g-4" style="gap:2rem 0;">
        <div class="col-md-4 mb-4">
            <a href="{{ route('forecast') }}" class="text-decoration-none text-dark">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <i class="bi bi-graph-up-arrow fs-1"></i>
                        <h5 class="card-title mt-2">Prediksi Penjualan</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 mb-4">
            <a href="{{ route('ai') }}" class="text-decoration-none text-dark">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <i class="bi bi-cpu fs-1"></i>
                        <h5 class="card-title mt-2">Retail AI Insight</h5>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection
    