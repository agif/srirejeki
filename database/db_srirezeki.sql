-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2017 at 02:12 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_srirezeki`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`user_id`, `user_name`, `user_email`, `user_pass`) VALUES
(1, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'user', 'user@gmail.com', 'ee11cbb19052e40b07aac0ca060c23ee');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(11) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`p_id`, `ip_add`, `qty`) VALUES
(2976, '::1', 0),
(2983, '::1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(4) NOT NULL,
  `nama_kategori` varchar(15) NOT NULL,
  `gambar_display` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `gambar_display`) VALUES
(57, 'Bantal', ''),
(56, 'Guling', ''),
(58, 'Gorden', ''),
(54, 'Spray', ''),
(53, 'Kasur', ''),
(52, 'Sepatu', ''),
(59, 'Buku', '4.png');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `idbarang` int(4) NOT NULL,
  `namabarang` varchar(20) DEFAULT NULL,
  `id_kategori` int(4) DEFAULT NULL,
  `stok` int(4) DEFAULT NULL,
  `harga` int(8) DEFAULT NULL,
  `gambarbrg` varchar(20) DEFAULT NULL,
  `detail` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`idbarang`, `namabarang`, `id_kategori`, `stok`, `harga`, `gambarbrg`, `detail`) VALUES
(2975, 'Gorden 2222222222', 58, 1, 12000, '[001347].jpg', 'Gorden 2 22222222222 Detail'),
(2976, 'Bantal 1', 57, 4, 40000, '2.jpg', 'Bantal 1 Detail'),
(2977, 'Bantal 2', 57, 3, 30000, '2.png', 'Bantal 2 Detail'),
(2978, 'Bantal 3', 57, 2, 20000, '2.jpg', 'Bantal 3 Detail'),
(2979, 'Spray 1', 54, 2, 20000, '3.jpg', 'Spray 1 Detail'),
(2981, 'Spray 3', 54, 5, 50000, '3.jpg', 'Spray 3 Detail'),
(2982, 'Spray 4', 54, 4, 42000, '3.png', 'Spray 4 Detail'),
(2983, 'contoh 1', 59, 1, 12000, '6.png', 'ini adalah detail dari contoh satu  '),
(2985, 'bola-boli', 56, 1, 5000, '[001108].jpg', 'wertyuioasdfghjkcvbnm'),
(2988, 'Nike Rhose Run 2', 52, 8, 100000, '[000288].jpg', 'Update Sepatu');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `iduser` int(15) NOT NULL,
  `password` varchar(40) DEFAULT NULL,
  `nama` varchar(20) DEFAULT NULL,
  `tgl_lahir` datetime DEFAULT NULL,
  `alamat` varchar(128) DEFAULT NULL,
  `jk` varchar(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `no_tlp` int(15) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`idbarang`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `idbarang` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2991;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
