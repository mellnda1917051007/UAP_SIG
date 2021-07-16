-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jul 2021 pada 13.54
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
-- Database: `gis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kecamatan`
--

CREATE TABLE `kecamatan` (
  `idK` int(11) NOT NULL,
  `namaK` varchar(255) NOT NULL,
  `geojson` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kecamatan`
--

INSERT INTO `kecamatan` (`idK`, `namaK`, `geojson`) VALUES
(1, 'BUMIWARAS', NULL),
(2, 'ENGGAL', NULL),
(3, 'KEDAMAIAN', NULL),
(4, 'KEDATON', NULL),
(5, 'KEMILING', NULL),
(6, 'LABUHANRATU', NULL),
(7, 'LANGKAPURA', NULL),
(8, 'PANJANG', NULL),
(9, 'RAJABASA', NULL),
(10, 'SUKABUMI', NULL),
(11, 'SUKARAME', NULL),
(12, 'TANJUNGKARANG BARAT', NULL),
(13, 'TANJUNGKARANG PUSAT', NULL),
(14, 'TANJUNGKARANG TIMUR', NULL),
(15, 'TANJUNGSENANG', NULL),
(16, 'TELUKBETUNG BARAT', NULL),
(17, 'TELUNGBETUNG TIMUR', NULL),
(18, 'TELUKBETUNG SELATAN', NULL),
(19, 'TELUKBETUNG UTARA', NULL),
(20, 'WAYHALIM', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rumah_sakit`
--

CREATE TABLE `rumah_sakit` (
  `idRS` int(11) NOT NULL,
  `kategoriRS` varchar(70) NOT NULL,
  `kecamatanRS` varchar(100) NOT NULL,
  `keteranganRS` text NOT NULL,
  `latitudeRS` varchar(100) NOT NULL,
  `longitudeRS` varchar(100) NOT NULL,
  `lokasiRS` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rumah_sakit`
--

INSERT INTO `rumah_sakit` (`idRS`, `kategoriRS`, `kecamatanRS`, `keteranganRS`, `latitudeRS`, `longitudeRS`, `lokasiRS`) VALUES
(1, 'rsia', 'Enggal', 'Rumah Sakit Ibu dan Anak Anugerah Medika', '-5.417667', '105.2586857', 'Jl. Tulang Bawang No.21-23, Enggal, Engal, Kota Bandar Lampung, Lampung 35213'),
(2, 'rsia', 'Teluk Betung Selatan', 'Rumah Sakit Ibu dan Anak Restu Bunda', '-5.4476368', '105.2539997', 'Jl. Kh. Hasyim Ashari No.73, Gedong Pakuon, Kec. Telukbetung Selatan, Kota Bandar Lampung, Lampung 3'),
(3, 'rsia', 'Enggal', 'Rumah Sakit Ibu dan Anak Mutiara Putri', '-5.4229323', '105.260269', 'Jalan Hos Cokroaminoto No.96 Tanjung Karang Enggal, Enggal, Engal, Kota Bandar Lampung, Lampung 3521'),
(4, 'rsia', 'Way Halim', 'Rumah Sakit Ibu dan Anak Puri Betik Hati', '-5.3941389', '105.2638773', 'Jl. Pajajaran No.109, Jagabaya II, Way Halim, Kota Bandar Lampung, Lampung 35132'),
(5, 'rsia', 'Teluk Betung Utara', 'Rumah Sakit Ibu dan Anak Santa Anna', '-5.4424726', '105.2653213', 'Jl. Sultan Hasanudin No.27, Gn. MAS, Kec. Tlk. Betung Utara, Kota Bandar Lampung, Lampung 35221'),
(6, 'rsia', 'Langkapura', 'Rumah Sakit Ibu dan Anak Sinta', '-5.3923727', '105.2242693', 'Jl. Imam Bonjol No.512, Langkapura, Kec. Kemiling, Kota Bandar Lampung, Lampung 35118'),
(7, 'rsia', 'Enggal', 'Rumah Sakit Ibu dan Anak Bunda Asy Syifa', '-5.4299838', '105.2689436', 'Jalan Dokter Susilo No.54, Pahoman, Engal, Kota Bandar Lampung, Lampung 35212'),
(8, 'rsia', 'Kedaton', 'Rumah Sakit Ibu dan Anak Belleza Kedaton Bandar Lampung', '-5.3806833', '105.2562621', 'Jl. Sultan H., Labuhan Ratu, Kec. Kedaton, Kota Bandar Lampung, Lampung 35132'),
(9, 'rsia', 'Teluk Betung Utara', 'Rumah Sakit Bersalin Kosasih', '-5.4711579', '105.320622', 'Jl. Salim Batubara No.80, Kupang Teba, Kec. Tlk. Betung Utara, Kota Bandar Lampung, Lampung 35212'),
(10, 'rsmata', 'Enggal', 'Rumah Sakit Khusus Mata Permana Sari', '-5.4218931', '105.2607589', 'Jalan bougenville 1 Rawa Laut,enggal, Enggal, Engal, Kota Bandar Lampung, Lampung 35213'),
(11, 'rsmata', 'Way Halim', 'Rumah Sakit Mata Lampung Eye Center (LEC)', '-5.3829289', '105.2757438', 'Jl. Sultan Agung No.15, Kedaton, Way Halim, Kota Bandar Lampung, Lampung 35132'),
(12, 'rsumum', 'Tanjung Karang Pusat', 'Rumah Sakit Umum Derah Dr H Abdul Moeloek', '-5.402848691533117', '105.25921538382678', 'Jl. Dr. Rivai No.6, Penengahan, Kec. Tj. Karang Pusat, Kota Bandar Lampung, Lampung 35112'),
(13, 'rsumum', 'Teluk Betung Utara', 'Rumah Sakit Umum Daerah Dr.A. Dadi Tjokrodipo', '-5.435997300920743', '105.25376289731975', 'Jl. Basuki Rahmat No.73, Sumur Putri, Kec. Tlk. Betung Utara, Kota Bandar Lampung, Lampung 35211'),
(14, 'rsumum', 'Sukarame', 'Rumah Sakit Umum Immanuel Way Halim', '-5.385803366710896', '105.28781943964805', 'Jl. Soekarno Hatta No.1, Way Dadi, Kec. Sukarame, Kota Bandar Lampung, Lampung 35133'),
(15, 'rsumum', 'Bumi Waras', 'Rumah Sakit Umum Bumi Waras', '-5.425030742072627', '105.25164263964807', 'Jl. Wolter Monginsidi No.235, Pengajaran, Bumi Waras, Kota Bandar Lampung, Lampung 35121'),
(16, 'rsumum', 'Kedaton', 'Rumah Sakit Umum Advent Bandar Lampung', '-5.391396037933058', '105.26311613796045', 'Jl. Teuku Umar No..48, Sidodadi, Kec. Kedaton, Kota Bandar Lampung, Lampung 35148'),
(17, 'rsumum', 'Way Halim', 'Rumah Sakit Umum Urip Sumoharjo', '-5.391061887182071', '105.27646342669546', 'Jl. Urip Sumoharjo No.200, Gn. Sulah, Way Halim, Kota Bandar Lampung, Lampung 35132'),
(18, 'rsumum', 'Kedamaian', 'Rumah Sakit Umum Graha Husada', '-5.41312000026217', '105.26850065869182', 'Jalan Gajah Mada No. 6 GH, Tj. Agung Raya, Kedamaian, Kota Bandar Lampung, Lampung 35128'),
(19, 'rsumum', 'Kemiling', 'Rumah Sakit Umum Pertamina Bintang Amin Lampung', '-5.378635274643868', '105.22025444149831', 'Jl. Pramuka No.27, Kemiling Permai, Kec. Kemiling, Kota Bandar Lampung, Lampung 35151'),
(20, 'rsumum', 'Tanjung Karang Pusat', 'Rumah Sakit Umum DKT Lampung', '-5.4015242', '105.2562127', 'Jl. Dr. Rivai No.7, Penengahan, Kec. Tj. Karang Pusat, Kota Bandar Lampung, Lampung 35121'),
(21, 'rsumum', 'Rajabasa', 'Rumah Sakit Umum Bhayangkara Polda Lampung', '-5.3743377', '105.2220461', 'Jl. Pramuka No.88, Rajabasa, Kec. Rajabasa, Kota B.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `idUsers` int(11) NOT NULL,
  `namaLengkap` varchar(150) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `status` enum('admin','users') NOT NULL,
  `md4` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`idUsers`, `namaLengkap`, `username`, `password`, `status`, `md4`) VALUES
(1, 'Administrator', 'admin', '$2y$10$U73DK4qGu7HDmu6iPv9kB.Ai9EC.mdsJ82XymCKXF/Cwkp4KZ5iEe', 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`idK`);

--
-- Indeks untuk tabel `rumah_sakit`
--
ALTER TABLE `rumah_sakit`
  ADD PRIMARY KEY (`idRS`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUsers`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `idK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `rumah_sakit`
--
ALTER TABLE `rumah_sakit`
  MODIFY `idRS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `idUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
