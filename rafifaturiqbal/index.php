<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Katalog Produk | Toko Rafi</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
    /* Mengatur agar gambar produk seragam ukurannya */
    .img-katalog {
        width: 100%;
        height: 200px;
        /* Tinggi kotak foto seragam */
        object-fit: cover;
        /* Foto otomatis terpotong rapi */
    }

    .card {
        transition: transform 0.2s;
        border: none;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .card:hover {
        transform: translateY(-5px);
        /* Efek melayang saat kursor di atas produk */
    }

    .harga {
        color: #0d6efd;
        font-weight: bold;
        font-size: 1.1rem;
    }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-primary navbar-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand fw-bold" href="#">Toko Rafi</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link active" href="./">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="produktoko.php">Produk</a></li>
                        <li class="nav-item"><a class="nav-link" href="login.php">Admin Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="section mt-5">
        <div class="container">
            <h3 class="text-center fw-bold mb-4">Makanan & Minuman Terlaris</h3>

            <div class="row">
                <?php
                include 'koneksi.php';
                // Query mengambil produk yang aktif
                $produk = mysqli_query($conn, "SELECT * FROM produk WHERE status = 1 ORDER BY idproduk DESC LIMIT 8");
                if (mysqli_num_rows($produk) > 0) {
                    while ($p = mysqli_fetch_array($produk)) {
                ?>

                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card h-100">
                        <img src="image/<?php echo $p['gambar'] ?>" class="card-img-top img-katalog"
                            alt="<?php echo $p['namaproduk'] ?>">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold text-dark"><?php echo $p['namaproduk'] ?></h5>
                            <p class="card-text text-muted flex-grow-1" style="font-size: 0.9rem;">
                                <?php echo substr(strip_tags($p['deskripsi']), 0, 60) ?>...
                            </p>
                            <p class="harga mb-3">Rp <?php echo number_format($p['harga'], 0, ',', '.') ?></p>
                            <a href="https://wa.me/6282258506007?text=Halo, saya ingin memesan <?php echo $p['namaproduk'] ?>"
                                target="_blank" class="btn btn-primary w-100">
                                <i class="bi bi-whatsapp"></i> Beli Sekarang
                            </a>
                        </div>
                    </div>
                </div>

                <?php  }
                } else { ?>
                <div class="col-12 text-center">
                    <p class="alert alert-warning">Produk belum tersedia.</p>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <footer class="mt-5 bg-primary text-light p-4 text-center">
        <div class="container">
            <small>Copyright &copy; 2025 - <strong>Toko Rafi</strong>. Semua Hak Dilindungi.</small>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>