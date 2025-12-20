<?php
session_start();
include "koneksi.php";

// Cek status login
if (!isset($_SESSION['status_login']) || $_SESSION['status_login'] != true) {
    echo '<script>window.location="login.php"</script>';
    exit; // Berhentikan eksekusi script setelah redirect
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Produk | Kedai Online</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-primary navbar-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="dashboard.php">Kedai Kito</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="dashboard.php">Dashboard</a></li>
                        <li class="nav-item"><a class="nav-link" href="kategori.php">Data Kategori</a></li>
                        <li class="nav-item"><a class="nav-link active" href="produk.php">Data Produk</a></li>
                        <li class="nav-item"><a class="nav-link" href="keluar.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <h3 class="mb-3">Tambah Produk</h3>
                <div class="card mb-5 shadow-sm">
                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label class="form-label">Kategori</label>
                                <select class="form-select" name="kategori" required>
                                    <option value="">-- Pilih Kategori Produk --</option>
                                    <?php
                                    $kategori = mysqli_query($conn, "SELECT * FROM kategori ORDER BY idkategori DESC");
                                    while ($r = mysqli_fetch_array($kategori)) {
                                        echo '<option value="'.$r['idkategori'].'">'.$r['namakategori'].'</option>';
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Nama Produk</label>
                                <input type="text" name="nama" class="form-control" placeholder="Nama Produk" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Harga (Rp)</label>
                                <input type="number" name="harga" class="form-control" placeholder="Harga Produk"
                                    required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Foto Produk</label>
                                <input type="file" name="gambar" class="form-control" required>
                                <small class="text-muted">Format: jpg, jpeg, png, gif</small>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Deskripsi</label>
                                <textarea name="deskripsi" id="deskripsi" class="form-control"></textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Status</label>
                                <select class="form-select" name="status" required>
                                    <option value="">-- Pilih Status --</option>
                                    <option value="1">Aktif</option>
                                    <option value="0">Tidak Aktif</option>
                                </select>
                            </div>

                            <button type="submit" name="submit" class="btn btn-primary px-4">Simpan Produk</button>
                        </form>

                        <script>
                        CKEDITOR.replace('deskripsi');
                        </script>

                        <?php
                        if (isset($_POST['submit'])) {
                            // Sanitasi input
                            $kategori  = mysqli_real_escape_string($conn, $_POST['kategori']);
                            $nama      = mysqli_real_escape_string($conn, $_POST['nama']);
                            $harga     = mysqli_real_escape_string($conn, $_POST['harga']);
                            $deskripsi = mysqli_real_escape_string($conn, $_POST['deskripsi']);
                            $status    = mysqli_real_escape_string($conn, $_POST['status']);

                            // Pengolahan Gambar
                            $filename = $_FILES['gambar']['name'];
                            $tmp_name = $_FILES['gambar']['tmp_name'];
                            
                            $type2 = pathinfo($filename, PATHINFO_EXTENSION);
                            $newname = 'produk' . time() . '.' . $type2;
                            $tipe_diizinkan = array('jpg', 'jpeg', 'png', 'gif');

                            if (!in_array(strtolower($type2), $tipe_diizinkan)) {
                                echo '<div class="alert alert-danger mt-3">Format file tidak diizinkan!</div>';
                            } else {
                                // Pastikan folder 'image' sudah ada
                                if(!is_dir('./image/')){
                                    mkdir('./image/');
                                }

                                move_uploaded_file($tmp_name, './image/' . $newname);

                                // Query Insert
                                $insert = mysqli_query($conn, "INSERT INTO produk (idkategori, namaproduk, hargaproduk, deskripsiproduk, fotoproduk, statusproduk) VALUES (
                                    '$kategori',
                                    '$nama',
                                    '$harga',
                                    '$deskripsi',
                                    '$newname',
                                    '$status'
                                )");

                                if ($insert) {
                                    echo '<script>alert("Tambah Data Berhasil!"); window.location="produk.php";</script>';
                                } else {
                                    echo '<div class="alert alert-danger mt-3">Gagal: ' . mysqli_error($conn) . '</div>';
                                }
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="mt-5 bg-primary text-light p-3 text-center">
        <small>Copyright &copy; 2025 - Kedai Kito Online</small>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>