-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jun 2022 pada 06.19
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asetsarana`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kebutuhan_data`
--

CREATE TABLE `kebutuhan_data` (
  `Nomor` int(6) NOT NULL,
  `user` int(11) NOT NULL,
  `Jenis_Aset` varchar(255) DEFAULT NULL,
  `Merk` varchar(255) DEFAULT NULL,
  `Type` varchar(255) DEFAULT NULL,
  `Spesifikasi_Teknis` varchar(255) DEFAULT NULL,
  `MAC_Address` varchar(255) DEFAULT NULL,
  `Tahun_Perolehan` int(4) DEFAULT NULL,
  `Status` enum('Terpasang','Sediaan') DEFAULT NULL,
  `Lokasi_Aset` varchar(255) DEFAULT NULL,
  `Tanggal_Pemasangan` date DEFAULT NULL,
  `Alokasi_IPv4` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kebutuhan_data`
--

INSERT INTO `kebutuhan_data` (`Nomor`, `user`, `Jenis_Aset`, `Merk`, `Type`, `Spesifikasi_Teknis`, `MAC_Address`, `Tahun_Perolehan`, `Status`, `Lokasi_Aset`, `Tanggal_Pemasangan`, `Alokasi_IPv4`) VALUES
(73, 15, 'Komputer', '00', '00', '00', '00', 2010, 'Sediaan', '00', '2020-04-22', '00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `Username` varchar(225) NOT NULL,
  `Password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `Username`, `Password`) VALUES
(15, 'admin', '$2y$10$dbhKgalnp.4HTzR3qm/2buFtjm/nXf/Z0Im8u4ln.Jqc45ByT8nme');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kebutuhan_data`
--
ALTER TABLE `kebutuhan_data`
  ADD PRIMARY KEY (`Nomor`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kebutuhan_data`
--
ALTER TABLE `kebutuhan_data`
  MODIFY `Nomor` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
