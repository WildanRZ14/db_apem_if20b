-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Jun 2022 pada 19.44
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_apem_if20b`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `medis`
--

CREATE TABLE `medis` (
  `id` int(11) UNSIGNED NOT NULL,
  `image` varchar(100) NOT NULL,
  `nama_pelapor` varchar(100) NOT NULL,
  `telpon_pelapor` text NOT NULL,
  `lokasi_kejadian` text NOT NULL,
  `tanggal_kejadian` varchar(100) NOT NULL,
  `isi_laporan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `medis`
--

INSERT INTO `medis` (`id`, `image`, `nama_pelapor`, `telpon_pelapor`, `lokasi_kejadian`, `tanggal_kejadian`, `isi_laporan`) VALUES
(1, 'gambar', 'zidan pratama', '192753621', 'semampir', 'juni', 'sakit'),
(2, 'afifrohman', 'afifrohman@gmail.com', '085712978303', 'purbadana', 'juni', 'sakit perut');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(5, '2022-06-19-180030', 'App\\Database\\Migrations\\DBMedis', 'default', 'App', 1655665481, 2),
(7, '2022-06-19-192233', 'App\\Database\\Migrations\\DBPemadam', 'default', 'App', 1655667628, 4),
(8, '2022-06-19-192240', 'App\\Database\\Migrations\\DBPolice', 'default', 'App', 1655667628, 4),
(9, '2022-06-19-190704', 'App\\Database\\Migrations\\DBSar', 'default', 'App', 1656179445, 5),
(15, '2022-06-18-064905', 'App\\Database\\Migrations\\DBUsers', 'default', 'App', 1656426974, 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemadam`
--

CREATE TABLE `pemadam` (
  `id` int(11) UNSIGNED NOT NULL,
  `image` varchar(100) NOT NULL,
  `nama_pelapor` varchar(100) NOT NULL,
  `telpon_pelapor` text NOT NULL,
  `lokasi_kejadian` text NOT NULL,
  `tanggal_kejadian` varchar(100) NOT NULL,
  `isi_laporan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pemadam`
--

INSERT INTO `pemadam` (`id`, `image`, `nama_pelapor`, `telpon_pelapor`, `lokasi_kejadian`, `tanggal_kejadian`, `isi_laporan`) VALUES
(3, '', 'afif', '085712978303', 'sumbang', '28 Juni 2022', 'terjadi kebakaran'),
(4, '', 'afif', '085712978303', 'sumbang', '28 Juni 2022', 'terjadi kebakaran');

-- --------------------------------------------------------

--
-- Struktur dari tabel `police`
--

CREATE TABLE `police` (
  `id` int(11) UNSIGNED NOT NULL,
  `image` varchar(100) NOT NULL,
  `nama_pelapor` varchar(100) NOT NULL,
  `telpon_pelapor` text NOT NULL,
  `lokasi_kejadian` text NOT NULL,
  `tanggal_kejadian` varchar(100) NOT NULL,
  `isi_laporan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `police`
--

INSERT INTO `police` (`id`, `image`, `nama_pelapor`, `telpon_pelapor`, `lokasi_kejadian`, `tanggal_kejadian`, `isi_laporan`) VALUES
(1, 'gambar', 'zidan pratama', '192753621', 'semampir', 'juni', 'sakit');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sar`
--

CREATE TABLE `sar` (
  `id` int(11) UNSIGNED NOT NULL,
  `nama_pelapor` varchar(100) NOT NULL,
  `telpon_pelapor` text NOT NULL,
  `lokasi_kejadian` text NOT NULL,
  `tanggal_kejadian` varchar(100) NOT NULL,
  `isi_laporan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `sar`
--

INSERT INTO `sar` (`id`, `nama_pelapor`, `telpon_pelapor`, `lokasi_kejadian`, `tanggal_kejadian`, `isi_laporan`) VALUES
(6, 'Afif Rohman', '085712978303', 'Purbadana RT 01 RW 02', '28 Juni 2022', 'Banjir'),
(7, 'afffsfs', 'adaf', 'fsaf', 'asfasf', 'asfasf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mode` varchar(100) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `mode`) VALUES
(1, 'wildan', 'razzaqpratama@gmail.com', 'rahasia', 'admin'),
(2, 'afifr', 'afifrohman228@gmail.com', 'afifrohman1', 'sar'),
(3, 'syifana', 'syifanamuflih@gmail.com', 'syifana1', 'pemadam'),
(4, 'fitrotul', 'fitrotulkhasanah@gmail.com', 'fitrotul', 'medis'),
(5, 'kinanthi', 'kinanthiputri@gmail.com', 'kinanthi', 'polisi'),
(6, 'farah', 'farahardelia@gmail.com', 'farah1', 'user'),
(7, 'afifrohman', 'afifrohman228@gmail.com', 'afif123', 'user'),
(8, 'ipang1', 'afifrohman228@gmail.com', 'afif123', 'admin'),
(10, 'dzaky', 'dzaky12', 'dzaky1', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `medis`
--
ALTER TABLE `medis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pemadam`
--
ALTER TABLE `pemadam`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `police`
--
ALTER TABLE `police`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sar`
--
ALTER TABLE `sar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `medis`
--
ALTER TABLE `medis`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `pemadam`
--
ALTER TABLE `pemadam`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `police`
--
ALTER TABLE `police`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `sar`
--
ALTER TABLE `sar`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
