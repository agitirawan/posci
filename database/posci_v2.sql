-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2022 at 08:54 PM
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
-- Database: `posci_v2`
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
(4, 'Paket', '2022-06-30 17:00:00'),
(9, 'Makanan', '2022-06-30 17:00:00'),
(10, 'Minuman', '2022-06-30 17:00:00');

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
(6, 4, 'Paket B', '25000000', '1', 'PaketB.jpg', 'dijual', 7200),
(7, 4, 'Paket C', '2200000', '1', 'PaketC.jpg', 'dijual', 0),
(8, 9, 'gule', '25000', '1', 'gule.jpg', 'dijual', 600),
(12, 9, 'sate ayam', '17000', '1', 'sateayam1.jpg', 'dijual', 900),
(13, 9, 'sate kambing', '22000', '1', 'satekambing2.jpg', 'dijual', 1200),
(14, 10, 'kopi', '3000', '1', 'kopi2.jpg', 'dijual', 300),
(15, 9, 'nasi', '3000', '1', 'nasi2.jpg', 'dijual', 300),
(16, 4, 'Paket A', '3000000', '1', 'PaketA1.jpg', 'dijual', 4500),
(17, 10, 'teh', '3000', '1', 'teh1.jpg', 'dijual', 300),
(18, 10, 'es teh', '3000', '1', 'esteh.jpg', 'dijual', 300),
(19, 9, 'Nasi + Gule', '15000', '1', 'nasigule.jpg', 'dijual', 470),
(20, 10, 'Es jeruk', '3000', '1', 'esjeruk.jpg', 'dijual', 300),
(21, 10, 'Jeruk Anget', '3000', '1', 'jerukanget.jpg', 'dijual', 300),
(22, 9, 'Sate Kambing Tanpa L', '29000', '1', 'tg.jpg', 'dijual', 1200);

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
(1, 0, 'cash', 0, '2022-07-18 01:26:28');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `nama` varchar(75) DEFAULT NULL,
  `jenis_pesanan` varchar(13) NOT NULL,
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

INSERT INTO `transaksi` (`id_transaksi`, `nama`, `jenis_pesanan`, `id_user`, `telpon`, `type`, `status`, `tanggal`, `tanggal_selesai`) VALUES
(1, 'joko', '', '4', '', 'dine_in', 'selesai', '2022-07-07 02:20:57', '2022-07-07 04:20:57'),
(2, 'joko', '', '4', '', 'take_away', 'selesai', '2022-07-07 19:29:56', '2022-07-07 21:29:56'),
(3, 'joko', '', '4', '', 'dine_in', 'selesai', '2022-07-15 04:19:46', '2022-07-15 06:19:46'),
(4, 'joko', '', '4', '', 'take_away', 'proses', '2022-07-07 02:19:22', NULL),
(5, 'joko', '', '4', '', 'take_away', 'proses', '2022-07-07 02:20:24', NULL),
(6, 'joko', '', '4', '', 'take_away', 'proses', '2022-07-07 02:21:34', NULL),
(7, 'gitaarsa', '', '8', '', 'take_away', 'proses', '2022-07-10 08:21:12', NULL),
(8, 'gitaarsa', 'online', '8', '', 'take_away', 'selesai', '2022-07-13 18:13:58', '2022-07-13 20:13:58'),
(9, 'hanan', 'offline', '6', '', 'dine_in', 'selesai', '2022-07-17 18:27:51', '2022-07-17 20:27:51');

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
(1, 1, '13', '1'),
(2, 1, '15', '2'),
(3, 2, '12', '1'),
(4, 2, '8', '1'),
(5, 2, '18', '1'),
(6, 3, '16', '1'),
(7, 4, '17', '1'),
(8, 5, '7', '3'),
(9, 6, '13', '2'),
(10, 7, '13', '3'),
(11, 8, '12', '1'),
(12, 8, '15', '1'),
(13, 8, '20', '1'),
(14, 9, '16', '2'),
(15, 9, '15', '1'),
(16, 9, '8', '2'),
(17, 9, '12', '1');

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
(4, 'joko1@gmail.com', '606874ce3fa06bdbad3785467ac4da23', 'user', '081329419687', 'jombang', 'joko', '2022-06-12 15:36:26'),
(5, 'dina1@gmail.com', 'e274648aed611371cf5c30a30bbe1d65', 'admin', '081329419687', 'kepuh', 'dina', '2022-06-13 03:16:50'),
(6, 'han@gmail.com', '2b52514f3741f3379fee3eef9674a203', 'kasir', '081329419687', 'keph', 'han', '2022-07-06 21:08:10'),
(8, 'gitaarsa@gmail.com', 'a413c15a216d6268492a6972651f48d6', 'user', '081329419687', 'segaran', 'gitaarsa', '2022-07-10 08:19:15'),
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
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  MODIFY `id_transaksi_detail` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
