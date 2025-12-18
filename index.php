<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Toko Sistem Informasi | Hub Kelas</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">

    <style>
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #f4f7f6;
    }

    .navbar {
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .hero-section {
        background: linear-gradient(rgba(13, 110, 253, 0.9), rgba(13, 110, 253, 0.9)), url('https://images.unsplash.com/photo-1522071823991-b9671f9d7f1f?auto=format&fit=crop&w=1350&q=80');
        background-size: cover;
        background-position: center;
        color: white;
        padding: 80px 0;
        margin-bottom: 40px;
    }

    .card-toko {
        border: none;
        border-radius: 20px;
        transition: all 0.3s ease;
        background: white;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .card-toko:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 25px rgba(0, 0, 0, 0.1);
    }

    .owner-badge {
        font-size: 0.75rem;
        background: #f8f9fa;
        color: #6c757d;
        padding: 5px 15px;
        border-radius: 50px;
        display: inline-block;
        margin-bottom: 15px;
        border: 1px solid #dee2e6;
    }

    .btn-visit {
        border-radius: 12px;
        font-weight: 600;
        padding: 10px;
    }

    .icon-box {
        font-size: 2.5rem;
        color: #0d6efd;
        margin-bottom: 10px;
    }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-primary navbar-dark sticky-top">
            <div class="container">
                <a class="navbar-brand fw-bold" href="#"><i class="bi bi-grid-fill me-2"></i>Portal Toko SI</a>
                <div class="ms-auto">
                    <a href="/phpmyadmin/" target="_blank" class="btn btn-light btn-sm fw-bold">
                        <i class="bi bi-database-fill me-1"></i> Database
                    </a>
                </div>
            </div>
        </nav>
    </header>

    <div class="hero-section text-center">
        <div class="container">
            <h1 class="display-5 fw-bold text-uppercase mb-3">Toko Sistem Informasi</h1>
            <p class="lead opacity-75">Kumpulan Project UMKM Digital Mahasiswa Sistem Informasi Universitas Dehasen</p>
        </div>
    </div>

    <div class="container mb-5">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">

            <div class="col">
                <div class="card card-toko h-100 p-4">
                    <div class="text-center">
                        <div class="icon-box"><i class="bi bi-shop"></i></div>
                        <div class="owner-badge">Owner: Alip Maulana</div>
                        <h4 class="fw-bold mb-3">Alip Store</h4>
                        <p class="text-muted small">Menyediakan berbagai kebutuhan fashion mahasiswa kekinian.</p>
                    </div>
                    <div class="mt-4">
                        <a href="/alipmaulana/" class="btn btn-primary btn-visit w-100">
                            Kunjungi Toko <i class="bi bi-arrow-right-short ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card card-toko h-100 p-4">
                    <div class="text-center">
                        <div class="icon-box"><i class="bi bi-bag-heart"></i></div>
                        <div class="owner-badge">Owner: Sopia Marini</div>
                        <h4 class="fw-bold mb-3">Kedai Kito Online</h4>
                        <p class="text-muted small">Pusat jajanan lezat dengan cita rasa autentik khas Bengkulu.</p>
                    </div>
                    <div class="mt-4">
                        <a href="/sopiamarini/" class="btn btn-primary btn-visit w-100">
                            Kunjungi Toko <i class="bi bi-arrow-right-short ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card card-toko h-100 p-4">
                    <div class="text-center">
                        <div class="icon-box"><i class="bi bi-cup-hot"></i></div>
                        <div class="owner-badge">Owner: Dementrius</div>
                        <h4 class="fw-bold mb-3">Kedai Gue</h4>
                        <p class="text-muted small">Tempat nongkrong asik dengan menu kopi pilihan terbaik.</p>
                    </div>
                    <div class="mt-4">
                        <a href="/dementrius/" class="btn btn-primary btn-visit w-100">
                            Kunjungi Toko <i class="bi bi-arrow-right-short ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card card-toko h-100 p-4 border-1 border-dashed opacity-75">
                    <div class="text-center">
                        <div class="icon-box text-muted"><i class="bi bi-plus-circle"></i></div>
                        <div class="owner-badge">Status: Tersedia</div>
                        <h4 class="fw-bold mb-3 text-muted">Toko Teman 1</h4>
                        <p class="text-muted small">Segera daftarkan project toko online Anda di sini.</p>
                    </div>
                    <div class="mt-4">
                        <button class="btn btn-outline-secondary btn-visit w-100" disabled>Coming Soon</button>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <footer class="bg-white py-4 mt-5 border-top">
        <div class="container text-center text-muted">
            <p class="small mb-0">&copy; 2025 Kolektif Kelas Sistem Informasi - Universitas Dehasen</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>