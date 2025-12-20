<?php
if (isset($_POST['submit'])) {
    // 1. Menampung input form
    $kategori  = $_POST['kategori'];
    $nama      = $_POST['nama'];
    $harga     = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];
    $status    = $_POST['status'];

    // 2. Menampung data file gambar
    $filename = $_FILES['gambar']['name'];
    $tmp_name = $_FILES['gambar']['tmp_name'];

    $type1 = explode('.', $filename);
    $type2 = end($type1); // Mengambil ekstensi paling akhir

    $newname = 'produk' . time() . '.' . $type2;
    $tipe_diizinkan = array('jpg', 'jpeg', 'png', 'gif');

    // 3. Validasi Format File
    if (!in_array(strtolower($type2), $tipe_diizinkan)) {
        echo '<script>alert("Format file tidak diizinkan")</script>';
    } else {
        // Proses upload ke folder
        move_uploaded_file($tmp_name, './image/' . $newname);

        /* 4. Query Insert yang disesuaikan dengan gambar database Anda:
           Kolom: idproduk (null), idkategori, namaproduk, harga, deskripsi, gambar, status, tanggal (null)
        */
        $insert = mysqli_query($conn, "INSERT INTO produk VALUES (
            null,
            '" . $kategori . "',
            '" . $nama . "',
            '" . $harga . "',
            '" . $deskripsi . "',
            '" . $newname . "',
            '" . $status . "',
            null
        )");

        if ($insert) {
            echo '<script>alert("Tambah Data Berhasil")</script>';
            echo '<script>window.location="produk.php"</script>';
        } else {
            // Jika gagal, tampilkan error untuk debug
            echo 'Gagal: ' . mysqli_error($conn);
        }
    }
}
?>