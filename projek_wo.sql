-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Agu 2022 pada 09.55
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projek_wo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pemesanans`
--

CREATE TABLE `detail_pemesanans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pw` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_nikah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tmpt_nikah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ayah_pp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ibu_pp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_pp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ig_pp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hp_pp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ayah_sambung_pp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ibu_sambung_pp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ayah_pw` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ibu_pw` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_pw` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ig_pw` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hp_pw` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ayah_sambung_pw` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ibu_sambung_pw` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pembaca_quran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pidato_penyerahan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pidato_penerimaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `saksi_pp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `saksi_pw` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pj_mahar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ketua_panitia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jml_rombongan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `make_up` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `busana` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dekorasi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `henna` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tenda` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hiburan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seni` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `catering` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto_pp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_pw` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pembayaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_validasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tambahan` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alasan_batal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `detail_pemesanans`
--

INSERT INTO `detail_pemesanans` (`id`, `user`, `pp`, `pw`, `tgl_nikah`, `tmpt_nikah`, `ayah_pp`, `ibu_pp`, `alamat_pp`, `ig_pp`, `hp_pp`, `ayah_sambung_pp`, `ibu_sambung_pp`, `ayah_pw`, `ibu_pw`, `alamat_pw`, `ig_pw`, `hp_pw`, `ayah_sambung_pw`, `ibu_sambung_pw`, `pembaca_quran`, `pidato_penyerahan`, `pidato_penerimaan`, `saksi_pp`, `saksi_pw`, `pj_mahar`, `ketua_panitia`, `jml_rombongan`, `make_up`, `busana`, `dekorasi`, `foto`, `video`, `henna`, `tenda`, `hiburan`, `seni`, `catering`, `foto_pp`, `foto_pw`, `pembayaran`, `paket`, `gambar`, `tgl_validasi`, `tambahan`, `alasan_batal`, `created_at`, `updated_at`) VALUES
(1, '1', 'Burhan A.Md', 'Indah M.Hum', '2022-08-25', 'Sasana Manggala', 'Bp. Sutejo', 'Ibu. Marni', 'Jl Dakota No 8a cicendo, bandung, jawa barat, indonesia', 'bu_rhn', '08213654271', NULL, NULL, 'Bp. Jutris', 'Ibu. Marinah', 'Jl Merak No 9 ciledug, bandung, jawa utara, indonesia', 'innnda', '087654367612', NULL, NULL, 'awaluddin', 'edward', 'reza', 'ali', 'ari', 'Muzayyin', 'Habib', '100', 'Wardah', 'Robbani', 'arya dekor', 'Jeymi shoot', 'Jeymi shoot', 'arya dekor', 'arya dekor', 'Nella Karisma', 'Nasi bu imas', NULL, 'Kel Rozin, Kel hapis, Kel faisal, Kel Burtu, Kel nanda, Kel ari', 'Kel ibas, kel jayin, kel sana, kel nuri, Kel Kopi, Kel hani', 'ditolak', '2', 'bb.jpg', '2022-08-12 18:53:55', '<p>Minta tolong surprize istri saya</p>', 'Uang kurang', '2022-08-12 11:40:00', '2022-08-12 11:53:55'),
(2, '1', 'Burhan', 'Jannata', '2022-08-21', 'pub', 'hapis', 'hapizoh', 'Dimana', NULL, '08213654271', 'edo', 'emi', 'jayin', 'jayinah', 'Disitu', NULL, '087654367612', NULL, NULL, 'awaluddin', 'edward', 'reza', 'ali', 'ari', 'manusia', 'arya', 'arya', 'arya', 'arya', NULL, NULL, 'arya', 'arya', NULL, NULL, NULL, NULL, 'Kel hapis', 'kel jayin', 'diterima', '3', 'bb.jpg', '2022-08-12 19:03:49', NULL, 'Uang kurang', '2022-08-12 11:58:38', '2022-08-12 12:03:49'),
(3, '3', 'Burhan A.Md', 'Indah M.Hum', '2022-08-24', 'Sasana Manggala', 'Bp. Sutejo', 'Ibu. Marni', 'Jl. Mana saja yang penting happy', NULL, '085243165467', NULL, NULL, 'Bp. Jutris', 'Ibu. Marinah', 'Jl disana senang disini senang dimana-mana senang', 'jayin-prik', '082154321654', NULL, NULL, 'awaluddin', 'edward', 'reza', 'ali', 'ari', 'manusia', 'Habib', '0', 'sxac', NULL, 'arya', 'arya', 'arya', 'arya', 'arya', NULL, NULL, NULL, 'Kel hapis', 'kel jayin', 'diterima', '1', 'cc.jpg', '2022-08-13 07:54:23', NULL, 'kosong', '2022-08-13 00:53:40', '2022-08-13 00:54:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gedungs`
--

CREATE TABLE `gedungs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(43, '2014_10_12_000000_create_users_table', 1),
(44, '2014_10_12_100000_create_password_resets_table', 1),
(45, '2019_08_19_000000_create_failed_jobs_table', 1),
(46, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(47, '2022_07_28_204717_create_gedungs_table', 1),
(48, '2022_08_01_143601_create_pakets_table', 1),
(49, '2022_08_09_225540_create_pemesanans_table', 1),
(50, '2022_08_10_223735_create_detail_pemesanans_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pakets`
--

CREATE TABLE `pakets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_paket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_paket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pakets`
--

INSERT INTO `pakets` (`id`, `nama_paket`, `harga_paket`, `detail`, `created_at`, `updated_at`) VALUES
(1, 'VIP', '5000000', '<ul>\r\n	<li>1 Profesional Wedding Director</li>\r\n	<li>4 Crew Handal My Wedding Organizer</li>\r\n	<li>Konsep Acara</li>\r\n	<li>1 Kali Rapat Pemantapan Koordinasi Keluarga Dan Vendor</li>\r\n	<li>1 Titik Confetti Machine</li>\r\n	<li>2 Fireworks</li>\r\n	<li>1Pemain Saxophone Profesional</li>\r\n	<li>Profesional Mc Akad &amp; Resepsi</li>\r\n	<li>Free Marchandise My Wedding Organize</li>\r\n</ul>', '2022-08-12 11:33:26', '2022-08-12 11:33:26'),
(2, 'VVIP', '7000000', '<ul>\r\n	<li>1 Profesional Wedding Director</li>\r\n	<li>5 Crew Handal My Wedding Organizer</li>\r\n	<li>Pendampingan Konsultasi Selama Persiapan</li>\r\n	<li>Konsep Acara</li>\r\n	<li>1 Kali Rapat Pemantapan Koordinasi Keluarga Dan Vendor</li>\r\n	<li>20 Balon Balon Kualitas Terbaik</li>\r\n	<li>3 Titik Confetti Machine (Bom Kertas)</li>\r\n	<li>2 Fireworks (Kembang Api)</li>\r\n	<li>1 Pemain Saxophone Profesional</li>\r\n	<li>1 Pemain Biola Profesional Profesional Mc Akad &amp; Resepsi</li>\r\n	<li>Free Marchandise My Wedding Organizer</li>\r\n</ul>', '2022-08-12 11:34:28', '2022-08-12 11:34:28'),
(3, 'GLAMOUR', '10000000', '<ul>\r\n	<li>1 Profesional Wedding Director</li>\r\n	<li>1 Stage Manager</li>\r\n	<li>7 Crew Handal My Wedding Organizer</li>\r\n	<li>Konsep Acara</li>\r\n	<li>1 Kali Rapat Pemantapan Koordinasi Keluarga Dan Vendor</li>\r\n	<li>30 Balon Kualitas Terbaik</li>\r\n	<li>4 Titik Confetti Machine (Bom Kertas)</li>\r\n	<li>4 Fireworks (Kembang Api)</li>\r\n	<li>1 Pemain Saxophone</li>\r\n	<li>1 Pemain Biola Profesional</li>\r\n	<li>Profesional Mc Akad &amp; Resepsi</li>\r\n	<li>Free Marchandise My Wedding Organizer</li>\r\n	<li>Free 1 Day Full Honeymoon</li>\r\n</ul>', '2022-08-12 11:35:29', '2022-08-12 11:35:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanans`
--

CREATE TABLE `pemesanans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `role`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'user', 'user', '$2y$10$v6gzDYrVBHlT7NAY5wWt/.wa9YxhnvJF.8VzFS14VX.2hi6C7lkUm', 'user', NULL, NULL, '2022-08-12 11:32:06', '2022-08-12 11:32:06'),
(2, 'Admin', 'admin', '$2y$10$mpVvlXnzjREh9NO/ULrmM.jnPhOBkiaZu/qVC/49MC3wAQ5l8OKK.', 'admin', NULL, NULL, '2022-08-12 11:32:15', '2022-08-12 11:32:15'),
(3, 'User1', 'user1', '$2y$10$HqUS61oDxTPMJgAbyzd1FugABW7Kx0yuJPsFolj8o2E57iep4mXr2', 'user', NULL, NULL, '2022-08-13 00:50:29', '2022-08-13 00:50:29');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detail_pemesanans`
--
ALTER TABLE `detail_pemesanans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `gedungs`
--
ALTER TABLE `gedungs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pakets`
--
ALTER TABLE `pakets`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pemesanans`
--
ALTER TABLE `pemesanans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `detail_pemesanans`
--
ALTER TABLE `detail_pemesanans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `gedungs`
--
ALTER TABLE `gedungs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `pakets`
--
ALTER TABLE `pakets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pemesanans`
--
ALTER TABLE `pemesanans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
