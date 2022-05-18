-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2022 at 05:43 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `posci`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftarmenu`
--

CREATE TABLE `daftarmenu` (
  `id` int(50) NOT NULL,
  `tanggal` date NOT NULL,
  `no_meja` int(50) NOT NULL,
  `no_order` int(50) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `jenis_makanan` varchar(60) NOT NULL,
  `qty` int(50) NOT NULL,
  `jumlah_bayar` varchar(50) NOT NULL,
  `pemabayaran` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `menu_saji`
--

CREATE TABLE `menu_saji` (
  `id` int(100) NOT NULL,
  `nama_makanan` varchar(50) NOT NULL,
  `nama_minuman` varchar(50) NOT NULL,
  `gambar` varchar(80) NOT NULL,
  `harga` int(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `nama`, `jenis_kelamin`, `alamat`, `telepon`) VALUES
(12, 'dinadina', 'Wanita', 'jaalan', 8482343),
(13, 'tacik', 'Pria', 'segaran', 12345);

-- --------------------------------------------------------

--
-- Table structure for table `pesanan_masuk`
--

CREATE TABLE `pesanan_masuk` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `tgl_pesanan` date NOT NULL,
  `jumlah` int(150) NOT NULL,
  `telepon` varchar(60) NOT NULL,
  `detail_makanan` varchar(80) NOT NULL,
  `status` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesanan_masuk`
--

INSERT INTO `pesanan_masuk` (`id`, `nama`, `alamat`, `tgl_pesanan`, `jumlah`, `telepon`, `detail_makanan`, `status`) VALUES
(0, 'Axel Smith', 'segaran', '2022-04-06', 4, '081329419687', 'sate ayam', '');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(50) NOT NULL,
  `tangggal` date NOT NULL,
  `qty` int(100) NOT NULL,
  `total_bayar` varchar(150) NOT NULL,
  `jumlah_tunai` varchar(150) NOT NULL,
  `pelanggan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `tangggal`, `qty`, `total_bayar`, `jumlah_tunai`, `pelanggan`) VALUES
(3, '2022-04-14', 2, '10000000', '10000', 'uwu');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(32) NOT NULL,
  `fullname` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `last_login` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftarmenu`
--
ALTER TABLE `daftarmenu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_saji`
--
ALTER TABLE `menu_saji`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan_masuk`
--
ALTER TABLE `pesanan_masuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
