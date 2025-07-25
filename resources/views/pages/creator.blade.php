@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="row align-items-center">
        <!-- Foto -->
        <div class="col-md-4 text-center mb-4 mb-md-0">
            <img src="{{ asset('img/profil.png') }}" style="max-width:200px; height:auto;" class="rounded-circle shadow" alt="Foto Pembuat">
        </div>

        <!-- Info Creator -->
        <div class="col-md-8">
            <h2 class="fw-bold">Putra Pertama Budianto</h2>
            <h5 class="text-muted">Mahasiswa Sains Informasi - Universitas Pembangunan Nasional "Veteran" Jakarta</h5>
            <p class="mt-3">
                Saya membangun dashboard ini sebagai bagian dari pengembangan sistem informasi retail berbasis Laravel. Fokus saya pada integrasi visualisasi data, prediksi penjualan, dan AI insight untuk mendukung pengambilan keputusan bisnis secara real-time.
            </p>

            <p>
                Proyek ini dibuat dengan:
                <ul>
                    <li>Laravel 11 & Blade Templating</li>
                    <li>Bootstrap 5.3 & Bootstrap Icons</li>
                    <li>Chart.js & Plotly.js (untuk visualisasi)</li>
                    <li>AI Insight (Model integrasi ke depan)</li>
                </ul>
            </p>

            <div class="mt-3">
                <a href="https://github.com/putrapb" target="_blank" class="btn btn-outline-dark me-2">
                    <i class="bi bi-github"></i> GitHub
                </a>
                <a href="mailto:putrapb281@gmail.com" class="btn btn-outline-primary">
                    <i class="bi bi-envelope"></i> Email
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
