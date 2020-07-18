-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jul 2020 pada 15.03
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `latihan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'lusianandrianto', '2016142055');

-- --------------------------------------------------------

--
-- Struktur dari tabel `coba`
--

CREATE TABLE `coba` (
  `ass` int(22) NOT NULL,
  `affff` int(44) NOT NULL,
  `fgt` int(22) NOT NULL,
  `yhf` int(22) NOT NULL,
  `iki` int(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_data`
--

CREATE TABLE `tb_data` (
  `no_id` int(11) NOT NULL,
  `jumlah_dirawat` int(4) NOT NULL,
  `jumlah_positif` int(4) NOT NULL,
  `jumlah_meninggal` varchar(4) NOT NULL,
  `id_kategori` int(3) NOT NULL,
  `jumlah_sembuh` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_data`
--

INSERT INTO `tb_data` (`no_id`, `jumlah_dirawat`, `jumlah_positif`, `jumlah_meninggal`, `id_kategori`, `jumlah_sembuh`) VALUES
(3, 88, 22, '32', 1, 44),
(7, 32, 90, '8', 4, 2),
(8, 1769, 2902, '257', 5, 206),
(9, 45, 1233, '78', 2, 54);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(3) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Banten'),
(2, 'DKI Jakarta'),
(3, 'Jawa Barat'),
(4, 'Jawa Tengah'),
(5, 'Jawa Timur');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_produk`
--

CREATE TABLE `tb_produk` (
  `no_id` int(11) NOT NULL,
  `jumlah_dirawat` int(4) NOT NULL,
  `jumlah_positif` int(4) NOT NULL,
  `jumlah_meninggal` varchar(4) NOT NULL,
  `id_kategori` int(3) NOT NULL,
  `jumlah_sembuh` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_produk`
--

INSERT INTO `tb_produk` (`no_id`, `jumlah_dirawat`, `jumlah_positif`, `jumlah_meninggal`, `id_kategori`, `jumlah_sembuh`) VALUES
(3, 88, 22, '32', 1, 44),
(7, 32, 90, '8', 4, 2),
(8, 1769, 2902, '257', 5, 206),
(9, 45, 1233, '78', 2, 54);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_data`
--
ALTER TABLE `tb_data`
  ADD PRIMARY KEY (`no_id`);

--
-- Indeks untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`no_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_data`
--
ALTER TABLE `tb_data`
  MODIFY `no_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `no_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
