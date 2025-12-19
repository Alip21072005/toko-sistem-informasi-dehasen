-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2025 at 08:27 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbkedai`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idadmin` int(11) NOT NULL,
  `namaadmin` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `telpon` varchar(20) NOT NULL,
  `admin_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idadmin`, `namaadmin`, `username`, `password`, `telpon`, `admin_email`) VALUES
(1, 'admin toko', 'admin', '5f4dcc3b5aa765d61d8327deb882cf99', '082323322', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `idkategori` int(10) NOT NULL,
  `namakategori` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`idkategori`, `namakategori`) VALUES
(1, 'Celana'),
(2, 'Baju');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `idproduk` int(11) NOT NULL,
  `idkategori` int(11) NOT NULL,
  `namaproduk` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`idproduk`, `idkategori`, `namaproduk`, `harga`, `deskripsi`, `gambar`, `status`, `tanggal`) VALUES
(3, 2, 'Hammer Man T-shirt stripe', 80000, '<p>- Bahan 60% katun polyster 40%<br />\r\n- Logo embroidered<br />\r\n- Regular Fit<br />\r\n- Warna Stripe Hitam Putih<br />\r\n<br />\r\n- Standart ukuran ( dalam cm ) :<br />\r\n<br />\r\n- Panjang baju X Lebar dada X Panjang tangan<br />\r\n<br />\r\n- S : 65 x 51 X 21<br />\r\n<br />\r\n- M : 69 X 54 X 22<br />\r\n<br />\r\n- L : 70 X 54 X 23<br />\r\n<br />\r\n- XL : 73 X 55 X 23<br />\r\n<br />\r\n- Petunjuk Perawatan :<br />\r\n<br />\r\n- Cuci dengan air dingin dan warna yang senada<br />\r\n<br />\r\n- Hindari Pemutih pakaian<br />\r\n<br />\r\n- Keringkan terbentang<br />\r\n<br />\r\n- Jangan setrika pada gambar<br />\r\n<br />\r\n- Jangan gunakan mesin pengering</p>\r\n', 'produk1766128279.jpg', 1, '2025-12-19 07:11:19'),
(4, 2, 'Kaos Polos Denim Blue', 80000, '<p>&bull; BAHAN COTTON COMBED 24&rsquo;s REAKTIF PREMIUM 200gsm</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&bull; PANJANG X LEBAR</p>\r\n\r\n<p>M 70 X 56 - RECOMEND BB ( 45 - 55 KG )</p>\r\n\r\n<p>L 72 X 58 - RECOMEND BB ( 56 - 65 KG )</p>\r\n\r\n<p>XL 74 X 60 - RECOMEND BB ( 66 - 75 KG )</p>\r\n\r\n<p>XXL 76 X 62 - RECOMEND BB ( 76 - 95 KG )</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Model SIZE XL = (Tinggi - 175cm) - (BB - 65kg)</p>\r\n', 'produk1766128688.jpg', 1, '2025-12-19 07:18:08'),
(5, 1, 'Celana Jeans Pria Biru Muda', 95000, '<p>Celana Jeans Pria Biru Muda Bioblits Birumuda Langit Panjang Laki Standar Reguler Fit</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>DESKRIPSI PRODUK:</p>\r\n\r\n<p>- Bahan Jeans Berkualitas Premium</p>\r\n\r\n<p>- Jahitan Rapi &amp; Sempurna</p>\r\n\r\n<p>- Size Standart SNI</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Celana jeans pria panjang ini sangat cocok untuk kalian yang beraktifitas tinggi. Jeans pria Standar ini merupakan clana panjang pria yang berbahan dasar denim premium sehingga sangat nyaman digunakan setiap saat. Celana jeans laki laki dari DutaJeans ini sangat halus tebal &amp; anti luntur. Yuk jangan sampai ketinggalan untuk mendapatkan Celana Panjang Pria keren ini dengan harga yang murah dan sangat terjangkau dengan kualitas premium saat ini juga!</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>KETERANGAN UKURAN LINGKAR PINGGANG:</p>\r\n\r\n<p>size 28 = 74 - 75 cm</p>\r\n\r\n<p>size 29 = 76 - 77 cm</p>\r\n\r\n<p>size 30 = 79 - 80 cm</p>\r\n\r\n<p>size 31 = 81 - 82 cm</p>\r\n\r\n<p>size 32 = 83 - 85 cm</p>\r\n\r\n<p>size 33 = 86 - 87 cm</p>\r\n\r\n<p>size 34 = 88 - 89 cm</p>\r\n\r\n<p>size 35 = 90 - 91 cm</p>\r\n\r\n<p>size 36 = 92 - 95 cm</p>\r\n\r\n<p>size 37 = 96 - 97 cm</p>\r\n\r\n<p>size 38 = 98 - 100 cm</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>PANJANG CELANA: -+102cm All Size</p>\r\n\r\n<p>LINGKAR PAHA= Menyesuaikan Pinggang (Chart Size Standart SNI)</p>\r\n', 'produk1766128816.jpg', 1, '2025-12-19 07:20:16'),
(6, 1, 'Celana Cargo Ripstop Reguler', 95000, '<p>Cargo pants</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>-Material: ripstop (olive, Black, Cream)</p>\r\n\r\n<p>-Reguler Fit</p>\r\n\r\n<p>-Zipper Ykk</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>-Available Size: 28 -30-32-34-36-38</p>\r\n', 'produk1766128892.jpg', 1, '2025-12-19 07:21:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`idkategori`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`idproduk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idadmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `idkategori` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `idproduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
