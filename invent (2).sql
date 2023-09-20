-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 20 Sep 2023 pada 09.02
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

--
-- Dumping data untuk tabel `tb_aturan`
--

INSERT INTO `tb_aturan` (`id_aturan`, `n_dok`, `tahun`, `tentang`, `subag`, `file`) VALUES
(12, 'wwww', '2023-09-14', 'erwerwer', 'Manajemen', 'Manajemen_wwww.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dok`
--

CREATE TABLE `tb_dok` (
  `id_dok` int(255) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tahun` date NOT NULL,
  `subag` varchar(30) NOT NULL,
  `jenis_dok` varchar(30) NOT NULL,
  `file` varchar(50) NOT NULL,
  `tgl_upload` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_dok`
--

INSERT INTO `tb_dok` (`id_dok`, `nama`, `tahun`, `subag`, `jenis_dok`, `file`, `tgl_upload`) VALUES
(5, '20-09-2023-angarran', '2023-09-21', 'Kepegawaian', 'perda', '2023-09-20_angarran.pdf', '2023-09-20 06:37:22');

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

--
-- Dumping data untuk tabel `tb_thdsk`
--

INSERT INTO `tb_thdsk` (`id_thdsk`, `nama`, `nik`, `tgl_lahir`, `file`) VALUES
(2, 'Wasis Yanto', '12233', '1978-03-25', '12233_Wasis Yanto.pdf'),
(3, 'Subur', '201301814006', '1983-09-10', '201301814006_Subur.pdf'),
(4, 'Wardoyo', '201301814007', '1984-06-29', '201301814007_Wardoyo.pdf'),
(5, 'Casminah', '201301814012', '1977-05-23', '201301814012_Casminah.pdf'),
(6, 'Widiyantoro', '201301814008', '1983-04-16', '201301814008_Widiyantoro.pdf'),
(7, 'angarran', '12345678', '2023-02-09', '12345678_angarran.pdf');

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
(5, 'ram', '1', 'ramdani', 'izin', 'enable', 'izin'),
(6, 'dilla', '1', 'Aldila s.kom m.kom phd', 'kepeg', 'enable', 'Kepegawaian'),
(7, 'fahmi', '1', 'Fahmi A', 'peren', 'enable', 'Perencanaan'),
(8, 'user1', '1', 'thdsk', 'user', 'enable', 'user'),
(9, 'rest-api', '1', 'apiapi', 'pegawai', 'enable', 'It');

-- --------------------------------------------------------

--
-- Struktur dari tabel `uu`
--

CREATE TABLE `uu` (
  `id_uu` int(255) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tahun` date NOT NULL,
  `subag` varchar(30) NOT NULL,
  `file` varchar(50) NOT NULL,
  `tgl_upload` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `uu`
--

INSERT INTO `uu` (`id_uu`, `nama`, `tahun`, `subag`, `file`, `tgl_upload`) VALUES
(19, '19-09-2023-angarran', '2022-01-04', 'Kepegawaian', 'angarran_2023-09-19.pdf', '2023-09-19 04:40:35'),
(20, 'Sample', '2023-09-04', 'kepeg', 'Sample.pdf', '2023-09-19 04:41:32');

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
-- Indeks untuk tabel `uu`
--
ALTER TABLE `uu`
  ADD PRIMARY KEY (`id_uu`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_aturan`
--
ALTER TABLE `tb_aturan`
  MODIFY `id_aturan` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_dok`
--
ALTER TABLE `tb_dok`
  MODIFY `id_dok` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
-- AUTO_INCREMENT untuk tabel `tb_thdsk`
--
ALTER TABLE `tb_thdsk`
  MODIFY `id_thdsk` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `uu`
--
ALTER TABLE `uu`
  MODIFY `id_uu` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
