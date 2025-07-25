<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Retail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <style>
        body {
            padding-top: 70px;
            background: #f8f9fa;
            overflow: hidden; /* Hilangkan scrollbar utama */
        }
        .scroll-content {
            height: calc(100vh - 70px - 80px); /* 70px navbar, 80px footer (ubah sesuai kebutuhan) */
            margin-top: 1.5rem;
            margin-bottom: 1.5rem;
            overflow-y: auto;
            background: transparent;
        }
        /* Custom scrollbar untuk Chrome, Edge, dan Safari pada konten */
        .scroll-content::-webkit-scrollbar {
            width: 0px;
            background: transparent;
        }
        /* Custom scrollbar untuk Firefox pada konten */
        .scroll-content {
            scrollbar-width: thin;
            scrollbar-color: rgba(52,58,64,0.3) transparent;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init();
</script>

</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">Retail Dashboard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">
                            <i class="bi bi-house-door"></i> Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">
                            <i class="bi bi-info-circle"></i> Tentang
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('creator') ? 'active' : '' }}" href="{{ route('creator') }}">
                            <i class="bi bi-person-badge"></i> Creator
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">
                            <i class="bi bi-envelope"></i> Kontak
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content Section -->
    <div class="container mt-2 scroll-content">
        @yield('content')
    </div>

    <!-- Footer (opsional & bisa diganti) -->
    <footer class="bg-light text-center py-3 mt-5 border-top">
        <small>&copy; {{ date('Y') }} Retail Dashboard | Dibuat oleh Putra Pertama</small>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
