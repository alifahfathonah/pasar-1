-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Des 2019 pada 07.26
-- Versi server: 10.3.15-MariaDB
-- Versi PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pasar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_buah`
--

CREATE TABLE `tb_buah` (
  `id` int(20) NOT NULL,
  `nama_buah` varchar(20) NOT NULL,
  `jenis_buah` varchar(20) NOT NULL,
  `stok_buah` int(10) NOT NULL,
  `harga_buah` int(10) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_buah`
--

INSERT INTO `tb_buah` (`id`, `nama_buah`, `jenis_buah`, `stok_buah`, `harga_buah`, `foto`) VALUES
(4, 'Mangga', 'Biji', 12, 12000, 'img/PHOTO.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ser`
--

CREATE TABLE `tb_ser` (
  `id_user` int(11) NOT NULL,
  `name_user` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_ser`
--

INSERT INTO `tb_ser` (`id_user`, `name_user`, `username`, `password`) VALUES
(1, 'Admin Peken', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'Admin Peken', 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_buah`
--
ALTER TABLE `tb_buah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_ser`
--
ALTER TABLE `tb_ser`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_buah`
--
ALTER TABLE `tb_buah`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_ser`
--
ALTER TABLE `tb_ser`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
