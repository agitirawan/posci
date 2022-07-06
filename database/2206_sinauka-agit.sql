-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2022 at 10:14 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2206_sinauka-agit`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama` varchar(75) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama`, `create_at`) VALUES
(13, 'Makanan', '2022-06-30 17:00:00'),
(14, 'Minuman', '2022-06-30 17:00:00'),
(15, 'Paket', '2022-06-30 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nam_menu` varchar(20) NOT NULL,
  `harga` varchar(75) NOT NULL,
  `jumlah` varchar(75) NOT NULL,
  `gambar` varchar(75) NOT NULL,
  `status` enum('dijual','disimpan') NOT NULL,
  `penyelesaian` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `id_kategori`, `nam_menu`, `harga`, `jumlah`, `gambar`, `status`, `penyelesaian`) VALUES
(10, 0, 'Es Jeruk', '', '', '', '', 300),
(11, 0, 'Es Teh', '', '', '', '', 60),
(12, 0, 'Nasi', '', '', '', '', 120),
(13, 0, 'Sate', '', '', '', '', 600),
(14, 0, 'Soto', '', '', '', '', 180);

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(20) NOT NULL,
  `id_transaksi` int(75) NOT NULL,
  `type` enum('cash','debit') NOT NULL,
  `nominal` int(75) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_transaksi`, `type`, `nominal`, `tanggal`) VALUES
(1, 11, 'debit', 45000, '2022-06-19 11:31:36'),
(11, 11, '', 12000, '2022-07-09 00:00:00'),
(12, 12, '', 120000, '2022-06-03 00:00:00'),
(13, 12, 'debit', 2000000, '2022-06-22 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `nama` varchar(75) DEFAULT NULL,
  `id_user` varchar(75) NOT NULL,
  `telpon` varchar(13) NOT NULL,
  `type` enum('dine_in','take_away') NOT NULL,
  `status` enum('proses','selesai','batal') NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tanggal_selesai` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `nama`, `id_user`, `telpon`, `type`, `status`, `tanggal`, `tanggal_selesai`) VALUES
(14, 'Agit', '1', '', '', 'batal', '2022-07-06 20:07:43', '2022-07-06 22:07:43'),
(15, 'Qorinda', '2', '', '', 'proses', '2022-07-06 20:07:01', '2022-07-06 22:06:24'),
(16, 'Ella', '3', '', '', 'batal', '2022-07-06 20:06:17', '2022-07-06 22:06:17'),
(17, 'Devi', '4', '', '', 'selesai', '2022-07-06 20:05:17', '2022-07-06 22:05:17');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_detail`
--

CREATE TABLE `transaksi_detail` (
  `id_transaksi_detail` int(20) NOT NULL,
  `id_transaksi` int(20) NOT NULL,
  `id_menu` varchar(75) NOT NULL,
  `jumlah` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi_detail`
--

INSERT INTO `transaksi_detail` (`id_transaksi_detail`, `id_transaksi`, `id_menu`, `jumlah`) VALUES
(4, 14, '10', '1'),
(5, 14, '14', '1'),
(6, 14, '12', '1'),
(7, 15, '11', '1'),
(8, 15, '13', '1'),
(9, 16, '11', '1'),
(10, 16, '12', '1'),
(11, 16, '13', '1'),
(12, 17, '12', '1'),
(13, 17, '13', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(75) NOT NULL,
  `pw` varchar(75) NOT NULL,
  `level` enum('admin','kasir','user') NOT NULL,
  `telepon` varchar(13) NOT NULL,
  `alamat` varchar(75) NOT NULL,
  `nama` varchar(75) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `email`, `pw`, `level`, `telepon`, `alamat`, `nama`, `create_at`) VALUES
(3, 'arsa@gmail.com', 'e274648aed611371cf5c30a30bbe1d65', 'kasir', '081329419687', 'jowar', 'arsa', '2022-06-12 13:32:36'),
(4, 'joko1@gmail.com', '606874ce3fa06bdbad3785467ac4da23', 'user', '081329419687', 'jombang', 'joko', '2022-06-12 15:36:26'),
(5, 'dina1@gmail.com', 'e274648aed611371cf5c30a30bbe1d65', 'admin', '081329419687', 'kepuh', 'dina', '2022-06-13 03:16:50'),
(11, 'jakatingkir@gmail.com', 'f8f1b6a8cc16852fac9308cd27e8042e', 'user', '081329419687', 'panjen', 'jaka', '2022-06-19 04:42:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  ADD PRIMARY KEY (`id_transaksi_detail`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  MODIFY `id_transaksi_detail` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
