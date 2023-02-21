-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 21 Feb 2023 pada 07.52
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
  `tahun` date NOT NULL,
  `tentang` varchar(50) NOT NULL,
  `subag` varchar(30) NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dok`
--

CREATE TABLE `tb_dok` (
  `id_dok` int(255) NOT NULL,
  `n_dok` varchar(50) NOT NULL,
  `tgl` date NOT NULL,
  `nomor` varchar(30) NOT NULL,
  `tentang` varchar(30) NOT NULL,
  `subag` varchar(20) NOT NULL,
  `file` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_izin`
--

CREATE TABLE `tb_izin` (
  `id_izin` int(255) NOT NULL,
  `nomor` varchar(30) NOT NULL,
  `tahun` varchar(30) NOT NULL,
  `tentang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_peren`
--

CREATE TABLE `tb_peren` (
  `id_peren` int(255) NOT NULL,
  `n_dok` varchar(50) NOT NULL,
  `tahun` date NOT NULL,
  `tentang` varchar(30) NOT NULL,
  `subag` varchar(50) NOT NULL,
  `file` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Struktur dari tabel `tb_thdsk`
--

CREATE TABLE `tb_thdsk` (
  `id_thdsk` int(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `file` varchar(50) NOT NULL
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
-- Indeks untuk tabel `tb_peren`
--
ALTER TABLE `tb_peren`
  ADD PRIMARY KEY (`id_peren`);

--
-- Indeks untuk tabel `tb_ruang`
--
ALTER TABLE `tb_ruang`
  ADD PRIMARY KEY (`id_ruang`);

--
-- Indeks untuk tabel `tb_thdsk`
--
ALTER TABLE `tb_thdsk`
  ADD PRIMARY KEY (`id_thdsk`);

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
  MODIFY `id_aturan` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_dok`
--
ALTER TABLE `tb_dok`
  MODIFY `id_dok` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_izin`
--
ALTER TABLE `tb_izin`
  MODIFY `id_izin` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_peren`
--
ALTER TABLE `tb_peren`
  MODIFY `id_peren` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_ruang`
--
ALTER TABLE `tb_ruang`
  MODIFY `id_ruang` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_thdsk`
--
ALTER TABLE `tb_thdsk`
  MODIFY `id_thdsk` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
