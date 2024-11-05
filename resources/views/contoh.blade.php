<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Penjualan</title>
    <link rel="stylesheet" href="{{ asset('/css/styles.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Dashboard Penjualan</h2>
        <ul>
            <li><a href="{{ url('contoh') }}">Home</a></li>
            <li><a href="{{ url('produk') }}">Produk</a></li>
            <li><a href="#">Penjualan</a></li>
            <li><a href="#">Laporan</a></li>
            <li><a href="#">Pengaturan</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        {{-- Header --}}
        <header>
            <h1>Daftar Produk</h1>
            <p>Temukan produk terbaik untuk kebutuhan Anda</p>
        </header>

        <div class="product-grid">
            {{-- Product card 1 --}}
            <div class="product-card">
                <img src="https://via.placeholder.com/200" alt="Produk 1">
                <h3>Produk 1</h3>
                <p class="price">Rp 100,000</p>
                <p class="description">Deskripsi singkat produk 1.</p>
                <div class="button-group">
                    <button class="add-to-cart"> + </button>
                    <button class="cancel-to-cart"> - </button>
                </div>
            </div>

            {{-- Product card 2 --}}
            <div class="product-card">
                <img src="https://via.placeholder.com/200" alt="Produk 2">
                <h3>Produk 2</h3>
                <p class="price">Rp 200,000</p>
                <p class="description">Deskripsi singkat produk 2.</p>
                <div class="button-group">
                    <button class="add-to-cart"> + </button>
                    <button class="cancel-to-cart"> - </button>
                </div>
            </div>

            {{-- Product card 3 --}}
            <div class="product-card">
                <img src="https://via.placeholder.com/200" alt="Produk 3">
                <h3>Produk 3</h3>
                <p class="price">Rp 300,000</p>
                <p class="description">Deskripsi singkat produk 3.</p>
                <div class="button-group">
                    <button class="add-to-cart"> + </button>
                    <button class="cancel-to-cart"> - </button>
                </div>
            </div>

            {{-- Product card 4 --}}
            <div class="product-card">
                <img src="https://via.placeholder.com/200" alt="Produk 4">
                <h3>Produk 4</h3>
                <p class="price">Rp 400,000</p>
                <p class="description">Deskripsi singkat produk 4.</p>
                <div class="button-group">
                    <button class="add-to-cart"> + </button>
                    <button class="cancel-to-cart"> - </button>
                </div>
            </div>
        </div>
    </div>

    {{-- Footer --}}
    <footer>
        <p>&copy; 2024 Aplikasi Penjualan. All rights reserved.</p>
    </footer>

</body>
</html>
