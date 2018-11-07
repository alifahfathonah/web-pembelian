-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Nov 2018 pada 17.05
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_8020160039`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barangs`
--

CREATE TABLE `barangs` (
  `id` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga_jual` int(10) NOT NULL,
  `stok` int(10) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barangs`
--

INSERT INTO `barangs` (`id`, `nama`, `harga_jual`, `stok`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Printer Canon', 700000, 10, 'C:\\xampp\\tmp\\phpFCF7.tmp', '2018-10-30 00:00:00', '2018-11-01 05:39:35'),
(2, 'Monitor', 950000, 10, 'C:\\xampp\\tmp\\phpA1C0.tmp', '2018-10-31 03:03:10', '2018-10-31 14:06:22'),
(4, 'Speaker', 300000, 15, 'public/gambar/YNcUMLYt7t5g7fXFHAlLIQr9KSCH06ILrG6bic6N.jpeg', '2018-11-01 05:38:50', '2018-11-01 05:38:50'),
(5, 'Mouse', 75000, 20, 'public/gambar/p0VyiQ4ZTApN1I5Uua3lFpaPv6JRmI2OJVbwMLEG.jpeg', '2018-11-01 06:02:35', '2018-11-01 06:02:35'),
(6, 'Printer Brother', 1800000, 10, 'public/gambar/i2gw4nQjuB0CQhC620qLZGPGVrNYQgNVAuaEo2l5.jpeg', '2018-11-07 15:28:33', '2018-11-07 15:28:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggans`
--

CREATE TABLE `pelanggans` (
  `id` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` longtext NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelanggans`
--

INSERT INTO `pelanggans` (`id`, `nama`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Budi', 'Aceh', '2018-10-30 00:00:00', '2018-10-30 14:38:35'),
(5, 'Nuri', 'Jelutung', '2018-10-30 13:39:42', '2018-10-30 13:39:42'),
(6, 'Raka', 'Jakarta', '2018-10-30 13:40:04', '2018-10-30 13:40:04'),
(8, 'Reza', 'Tangerang', '2018-10-30 13:40:34', '2018-10-30 14:32:57'),
(9, 'Ilham', 'Jambi', '2018-10-30 14:37:07', '2018-10-30 14:37:07'),
(10, 'Udin', 'Sumedang', '2018-11-06 15:53:24', '2018-11-06 15:53:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelians`
--

CREATE TABLE `pembelians` (
  `id` int(10) NOT NULL,
  `barang_id` int(10) NOT NULL,
  `nama_pemasok` varchar(255) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `harga` int(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembelians`
--

INSERT INTO `pembelians` (`id`, `barang_id`, `nama_pemasok`, `jumlah`, `harga`, `created_at`, `updated_at`) VALUES
(1, 1, 'CV. Suka Maju', 10, 600000, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(2, 2, 'CV. Biro Kasih', 20, 900000, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(3, 3, 'CV. Indah Komputer', 15, 500000, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(4, 4, 'CV. Jaya Park', 30, 350000, '2014-10-29 00:00:00', '2014-10-29 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ilham Saputra', 'ilham22saputra@gmail.com', '$2y$10$qjanb31CESqP34FEPCFsq.yRoCUyb56UKbPn58Phb6Qbgjs8lsPOu', 'XLyOQxLneaV7up9zRuCLjr8uOx7AmT1fg0WDg9D3S1QawanJEp8ayBwsksQk', '2018-10-16 18:33:14', '2018-10-16 18:33:14');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barangs`
--
ALTER TABLE `barangs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pelanggans`
--
ALTER TABLE `pelanggans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pembelians`
--
ALTER TABLE `pembelians`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barangs`
--
ALTER TABLE `barangs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pelanggans`
--
ALTER TABLE `pelanggans`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `pembelians`
--
ALTER TABLE `pembelians`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
