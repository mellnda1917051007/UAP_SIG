-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Jun 2021 pada 06.46
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rs_umum`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `lingkaran`
--

CREATE TABLE `lingkaran` (
  `id_ling` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `cord` varchar(255) NOT NULL,
  `size` int(128) NOT NULL,
  `op` int(128) NOT NULL,
  `ring` varchar(255) NOT NULL,
  `fill` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rs_umum`
--

CREATE TABLE `rs_umum` (
  `id_rs` int(11) NOT NULL,
  `nama_rs` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rs_umum`
--

INSERT INTO `rs_umum` (`id_rs`, `nama_rs`, `latitude`, `longitude`) VALUES
(1, 'Rumah Sakit Umum Derah Dr H Abdul Moeloek', '-5.402848691533117', '105.25921538382678'),
(2, 'Rumah Sakit Umum Daerah Dr.A. Dadi Tjokrodipo', '-5.435997300920743', '105.25376289731975'),
(3, 'Rumah Sakit Umum Immanuel Way Halim', '-5.385803366710896', '105.28781943964805'),
(4, 'Rumah Sakit Umum Bumi Waras', '-5.425030742072627', '105.25164263964807'),
(5, 'Rumah Sakit Umum Advent Bandar Lampung', '-5.391396037933058', '105.26311613796045'),
(6, 'Rumah Sakit Umum Urip Sumoharjo', '-5.391061887182071', '105.27646342669546'),
(7, 'Rumah Sakit Umum Graha Husada', '-5.41312000026217', '105.26850065869182'),
(8, 'Rumah Sakit Umum Pertamina-Bintang Amin Lampung', '-5.378635274643868', '105.22025444149831');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `lingkaran`
--
ALTER TABLE `lingkaran`
  ADD PRIMARY KEY (`id_ling`);

--
-- Indeks untuk tabel `rs_umum`
--
ALTER TABLE `rs_umum`
  ADD PRIMARY KEY (`id_rs`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `lingkaran`
--
ALTER TABLE `lingkaran`
  MODIFY `id_ling` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `rs_umum`
--
ALTER TABLE `rs_umum`
  MODIFY `id_rs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
