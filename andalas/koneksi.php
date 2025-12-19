<?php
    $host = "localhost";
    $user = "root";
    $pass = "SistemInformasiDehasen123_";
    $db = "andalas";
    $conn = mysqli_connect ($host,$user,$pass,$db);
    //    pesan eror
    if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

?>