-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Feb 2023 pada 18.09
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kanigara_adventure`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cabang`
--

CREATE TABLE `cabang` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `lokasi` text NOT NULL,
  `nomor_hp` varchar(20) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `cabang`
--

INSERT INTO `cabang` (`id`, `nama`, `lokasi`, `nomor_hp`, `created_at`, `updated_at`) VALUES
(1, 'Jogja Adventure', 'Yogyakarta', '0891513123123', '2023-02-05 22:37:17', '2023-02-05 22:37:17'),
(2, 'Banjar Adventure', 'Banjarmasin', '', '2023-02-05 23:29:00', '2023-02-05 23:29:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `foto_produk`
--

CREATE TABLE `foto_produk` (
  `id` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `url_gambar` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `katalog`
--

CREATE TABLE `katalog` (
  `id` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `id_cabang` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `katalog`
--

INSERT INTO `katalog` (`id`, `id_produk`, `id_cabang`, `jumlah`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 7, '2023-02-05 22:47:04', '2023-02-05 22:47:04'),
(2, 3, 1, 3, '2023-02-05 22:49:28', '2023-02-05 22:49:28'),
(3, 4, 1, 5, '2023-02-05 22:49:41', '2023-02-05 22:49:41'),
(4, 5, 1, 5, '2023-02-05 22:49:46', '2023-02-05 22:49:46'),
(5, 6, 1, 3, '2023-02-05 22:49:51', '2023-02-05 22:49:51'),
(6, 7, 1, 12, '2023-02-05 22:49:57', '2023-02-05 22:49:57'),
(7, 8, 1, 2, '2023-02-05 22:50:03', '2023-02-05 22:50:03'),
(8, 9, 1, 3, '2023-02-05 22:50:10', '2023-02-05 22:50:10'),
(9, 2, 2, 4, '2023-02-05 23:29:12', '2023-02-05 23:29:12'),
(10, 4, 2, 5, '2023-02-05 23:29:19', '2023-02-05 23:29:19'),
(11, 9, 2, 3, '2023-02-05 23:29:26', '2023-02-05 23:29:26'),
(12, 8, 2, 2, '2023-02-05 23:29:31', '2023-02-05 23:29:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `kode_produk` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `merk` varchar(20) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `kode_produk`, `nama`, `harga`, `foto`, `detail`, `merk`, `created_at`, `updated_at`) VALUES
(1, 'weUGpIo', 'Helm', 9600, 'wp2153377-doraemon-hd-wallpapers3.jpg', 'Bagaimana caranya', 'Doraemon', '2023-02-04 09:40:09', '2023-02-04 09:40:09'),
(2, 'dUgXbKf', 'Carrier 35L', 25000, 'carrier_35l.png', 'Tas Carrier dengan kapasitas 35 Liter', '-', '2023-02-05 22:33:50', '2023-02-05 22:33:50'),
(3, 'I3TGFBN', 'Egg Holder', 5000, 'egg_holder.png', 'Egg Holder', '-', '2023-02-05 22:34:14', '2023-02-05 22:34:14'),
(4, 'U4JoEkL', 'Hammock Blue 1', 25000, 'hammock_blue1.png', 'Hammock Blue 1', '-', '2023-02-05 22:34:40', '2023-02-05 22:34:40'),
(5, '6MvLG7h', 'Hammock Blue 2', 25000, 'hammock_blue2.png', 'Hammock Blue 1', '-', '2023-02-05 22:35:00', '2023-02-05 22:35:00'),
(6, 'iar89nC', 'Sleeping Bag', 30000, 'sleeping_bag.png', 'Sleeping Bag', '-', '2023-02-05 22:35:27', '2023-02-05 22:35:27'),
(7, 'xJqkumz', 'Tracking Pole', 15000, 'tracking_pole.png', 'Tracking Pole', '-', '2023-02-05 22:35:49', '2023-02-05 22:35:49'),
(8, 'm3fBAgS', 'Carrier 70L', 30000, 'carrier_70l.jpg', 'Carrier 70L', '-', '2023-02-05 22:36:12', '2023-02-05 22:36:12'),
(9, 'HG2bmqx', 'Tenda 4 Orang', 50000, 'tenda_4_orang.jpg', 'Tenda 4 Orang', '-', '2023-02-05 22:36:31', '2023-02-05 22:36:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_user`
--

CREATE TABLE `role_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sewa_keluar`
--

CREATE TABLE `sewa_keluar` (
  `id` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `NIP_penyewa` varchar(20) NOT NULL,
  `nama_penyewa` varchar(60) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sewa_masuk`
--

CREATE TABLE `sewa_masuk` (
  `id` int(11) NOT NULL,
  `id_sewa_keluar` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cabang`
--
ALTER TABLE `cabang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `foto_produk`
--
ALTER TABLE `foto_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `katalog`
--
ALTER TABLE `katalog`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sewa_keluar`
--
ALTER TABLE `sewa_keluar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sewa_masuk`
--
ALTER TABLE `sewa_masuk`
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
-- AUTO_INCREMENT untuk tabel `cabang`
--
ALTER TABLE `cabang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `foto_produk`
--
ALTER TABLE `foto_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `katalog`
--
ALTER TABLE `katalog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `sewa_keluar`
--
ALTER TABLE `sewa_keluar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `sewa_masuk`
--
ALTER TABLE `sewa_masuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
