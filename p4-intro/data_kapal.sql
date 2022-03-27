-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Mar 2022 pada 19.15
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kapal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kapal`
--

CREATE TABLE `data_kapal` (
  `id_kapal` int(100) NOT NULL,
  `nama_kapal` varchar(100) NOT NULL,
  `GT` varchar(100) NOT NULL,
  `nama_pemilik` varchar(100) NOT NULL,
  `kondisi` varchar(100) NOT NULL DEFAULT 'aktif'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_kapal`
--

INSERT INTO `data_kapal` (`id_kapal`, `nama_kapal`, `GT`, `nama_pemilik`, `kondisi`) VALUES
(1, 'Sangkuriang', '200', 'Rahmat', 'aktif'),
(2, 'Utomo', '198', 'Ramlan', 'aktif'),
(3, 'Pusat Dramaga', '70', 'Randy', 'aktif');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_kapal`
--
ALTER TABLE `data_kapal`
  ADD PRIMARY KEY (`id_kapal`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_kapal`
--
ALTER TABLE `data_kapal`
  MODIFY `id_kapal` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
