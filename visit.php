<?php
include "koneksi.php";

if (isset($_GET['toko'])) {
    $toko = mysqli_real_escape_string($conn, $_GET['toko']);
    
    // 1. Tambah hitungan di database
    mysqli_query($conn, "UPDATE statistik_toko SET jumlah_kunjungan = jumlah_kunjungan + 1 WHERE nama_toko = '$toko'");
    
    // 2. Arahkan ke sub-folder toko tersebut
    header("Location: /$toko/"); 
    exit();
}
?>