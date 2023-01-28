-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 28 Jan 2023 pada 02.16
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `invent`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_aturan`
--

CREATE TABLE `tb_aturan` (
  `id_aturan` int(255) NOT NULL,
  `n_dok` varchar(50) NOT NULL,
  `tahun` varchar(10) NOT NULL,
  `tentang` varchar(50) NOT NULL,
  `subag` varchar(30) NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_aturan`
--

INSERT INTO `tb_aturan` (`id_aturan`, `n_dok`, `tahun`, `tentang`, `subag`, `file`) VALUES
(9, 'tio', '2025', 'hukuman hhh', 'Manajemen', 'Manajemen_tio.pdf'),
(10, 'pentol', '2023', 'jajanan bocah', 'Manajemen', 'Manajemen_pentol.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dok`
--

CREATE TABLE `tb_dok` (
  `id_dok` int(255) NOT NULL,
  `n_dok` varchar(50) NOT NULL,
  `tahun` date NOT NULL,
  `nomor` varchar(30) NOT NULL,
  `subag` varchar(20) NOT NULL,
  `file` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_dok`
--

INSERT INTO `tb_dok` (`id_dok`, `n_dok`, `tahun`, `nomor`, `subag`, `file`) VALUES
(3, 'tio', '2022-12-09', '123', 'Manajemen', 'Manajemen_tio.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_izin`
--

CREATE TABLE `tb_izin` (
  `id_izin` int(255) NOT NULL,
  `n_ijin` varchar(50) NOT NULL,
  `tgl_masuk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_izin`
--

INSERT INTO `tb_izin` (`id_izin`, `n_ijin`, `tgl_masuk`) VALUES
(1, 'aa', '2022-12-01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ruang`
--

CREATE TABLE `tb_ruang` (
  `id_ruang` int(25) NOT NULL,
  `n_ruang` varchar(25) NOT NULL,
  `kode` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(255) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `n_user` varchar(50) NOT NULL,
  `role` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL,
  `subag` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `user`, `pass`, `n_user`, `role`, `status`, `subag`) VALUES
(2, 'tio', '1', 'Tioramdani, S.Kom', 'pegawai', 'enable', 'kepeg'),
(3, 'feri', '1', 'dr. Feri Sulistya, MMR', 'manage', 'enable', 'Manajemen'),
(4, 'tidak', '1', 'tida tahu, S.Kep, Ns', 'pegawai', 'enable', 'Pelayanan'),
(5, 'ram', '1', 'ramdani', 'izin', 'enable', 'izin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_aturan`
--
ALTER TABLE `tb_aturan`
  ADD PRIMARY KEY (`id_aturan`);

--
-- Indeks untuk tabel `tb_dok`
--
ALTER TABLE `tb_dok`
  ADD PRIMARY KEY (`id_dok`);

--
-- Indeks untuk tabel `tb_izin`
--
ALTER TABLE `tb_izin`
  ADD PRIMARY KEY (`id_izin`);

--
-- Indeks untuk tabel `tb_ruang`
--
ALTER TABLE `tb_ruang`
  ADD PRIMARY KEY (`id_ruang`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_aturan`
--
ALTER TABLE `tb_aturan`
  MODIFY `id_aturan` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_dok`
--
ALTER TABLE `tb_dok`
  MODIFY `id_dok` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_izin`
--
ALTER TABLE `tb_izin`
  MODIFY `id_izin` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_ruang`
--
ALTER TABLE `tb_ruang`
  MODIFY `id_ruang` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
