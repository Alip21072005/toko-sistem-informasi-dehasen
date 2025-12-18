<?php
$host     = "localhost";
$user     = "root";
$pass    = "";
$dbname    = "dbkedai";
$conn     = mysqli_connect($host, $user, $pass, $dbname)
    or die("Gagal terkoneksi ke database");
