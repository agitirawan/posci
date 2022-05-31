-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Bulan Mei 2022 pada 07.35
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.23

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
-- Struktur dari tabel `laporan_masuk`
--

CREATE TABLE `laporan_masuk` (
  `id` int(50) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_makanan_dan_minuman` varchar(50) NOT NULL,
  `jumlah_uang` int(50) NOT NULL,
  `jumlah_bayar` int(50) NOT NULL,
  `jumlah _total` int(60) NOT NULL,
  `pelanggan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu_saji`
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
-- Struktur dari tabel `paket`
--

CREATE TABLE `paket` (
  `id` int(50) NOT NULL,
  `ukuran` varchar(20) NOT NULL,
  `keterangan` text NOT NULL,
  `harga` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `nama`, `jenis_kelamin`, `alamat`, `telepon`) VALUES
(12, 'dinadina', 'Wanita', 'jaalan', 8482343),
(13, 'tacik', 'Pria', 'segaran', 12345);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan_masuk`
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
-- Dumping data untuk tabel `pesanan_masuk`
--

INSERT INTO `pesanan_masuk` (`id`, `nama`, `alamat`, `tgl_pesanan`, `jumlah`, `telepon`, `detail_makanan`, `status`) VALUES
(0, 'Axel Smith', 'segaran', '2022-04-06', 4, '081329419687', 'sate ayam', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
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
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id`, `tangggal`, `qty`, `total_bayar`, `jumlah_tunai`, `pelanggan`) VALUES
(3, '2022-04-14', 2, '10000000', '10000', 'uwu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(32) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `notelp` int(50) NOT NULL,
  `level` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `email`, `notelp`, `level`) VALUES
(1, 'agit', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'agit@gmail.com', 85694022, 'admin'),
(2, 'Lorem', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'user@gmail.com', 866666666, 'user'),
(4, 'coba', 'coba', 'c3ec0f7b054e729c5a716c8125839829', 'dinarisky04@gmail.com', 0, 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `laporan_masuk`
--
ALTER TABLE `laporan_masuk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `menu_saji`
--
ALTER TABLE `menu_saji`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesanan_masuk`
--
ALTER TABLE `pesanan_masuk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
