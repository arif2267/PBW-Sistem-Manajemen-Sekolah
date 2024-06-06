-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Jun 2024 pada 09.43
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_registration`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_05_21_160759_create_students_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('qxTvNKzLybDYAR2mRDozX60CJl5lR76YL3qHiWV1', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiYXJqMTI0THdPOUpicHNlS0xCcnpoc3EzRmRuRnlsZzA4ODV6aTVQaCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXRhc2lzd2EvMTMvZWRpdCI7fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1717623509);

-- --------------------------------------------------------

--
-- Struktur dari tabel `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `whatsapp` varchar(255) NOT NULL,
  `formulir_pendaftaran` varchar(255) NOT NULL,
  `fotocopy_nisn` varchar(255) NOT NULL,
  `fotocopy_kk` varchar(255) NOT NULL,
  `fotocopy_akte_kelahiran` varchar(255) NOT NULL,
  `fotocopy_ktp_ortu` varchar(255) NOT NULL,
  `pas_foto` varchar(255) NOT NULL,
  `fotocopy_ijazah` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `whatsapp`, `formulir_pendaftaran`, `fotocopy_nisn`, `fotocopy_kk`, `fotocopy_akte_kelahiran`, `fotocopy_ktp_ortu`, `pas_foto`, `fotocopy_ijazah`, `created_at`, `updated_at`) VALUES
(9, 'ihsan adfa', 'ihsanadfa@gmai.com', '0812345556712', 'documents/5uuLCDzIZ0p2UA21GKFPIwjDDwrCg8HPyYxjX4fv.png', 'documents/Vq6ZSudOSkg2XT7YtGoxmDQ8jXPZIdixEbNqM1xZ.png', 'documents/YkF8Kdr4Ow8wXheF4XpVVGLoGSXBKFZTEKM0NKk8.png', 'documents/ffPyX4lAZjXbQYFY8jDI23DdNA2hkbG0owBT7PEe.png', 'documents/fJos6qI5aTNM7aKTwNhJOnAbEMHDRK4pBc2QTeqI.png', 'documents/uFkPSJVBd4aY2ctVT6Ho2aedE1BvpPFgQiDhK3ro.png', 'documents/iYgM6dXakDT8yIClNp9XeXcB88pCZ47P1O7sah4J.png', '2024-05-29 08:22:35', '2024-06-05 10:15:12'),
(10, 'M. Arif Fadillah', 'mauzir19@gmail.com', '081345238876', 'documents/E3YH7XcMKVmen8tw1huVMeOcpyL3MvGQnZ1cJp2Z.pdf', 'documents/x9u1RvQ31IgPfYN6ntRr6wzVbBBzJyZQNs1m0e9q.pdf', 'documents/ffC0jRqPdMw3MTKThrn07rN92jtTYzgn1siGAuFH.pdf', 'documents/CpouFQlg7clavA3ETieYoleBiFSa72xAnqdelvi1.pdf', 'documents/3RnuvnxQ4X9rVbjUNszpTTf8k2X6GRs1FxxE7DMQ.png', 'documents/ieuAZWjWWIKE0AUHHVkfyUGHD0zU3yb3HSxo426T.pdf', 'documents/6KXR7IwfmA51pT5vYfEcE3nMdVxY5vAFTJrdjm5X.pdf', '2024-06-05 13:56:05', '2024-06-05 13:56:32'),
(12, 'nouval', 'isfakurniawan@gmail.com', '081345238876', 'documents/Gp1pklBV0ykG2ZhC6nO0zowgjVlybSeFEKgRv6Nn.jpg', 'documents/PlztdiDdCvRfCaUZTeLhRNVuyYuX2MbZO5xeNkfg.jpg', 'documents/MBWSqkolqtYZrSvGq6S2lAbD3BnRbDfxxL8NzZ0U.pdf', 'documents/jiNlc5peCTUJw4HytqETnVuumFUKxkygKIttqbIR.jpg', 'documents/zyxzAH6N3MJepLnhXpSoo6OYtp93zihRBL0uFhDn.png', 'documents/yLc1xry9tu2O2q1y0SWxYff4u0Fjzww68dr87Sqs.pdf', 'documents/YjHjl38nCU9vgS1X3UQiUZEeR3H1DqdTkyPMDb2I.jpg', '2024-06-05 14:13:58', '2024-06-05 14:16:16'),
(13, 'Muhammad Auzir', 'arifmuhammad10@gmail.com', '081345238876', 'documents/mdd7WBWvrOzt1XQrABSpVByL3FbjRXuohSp9DyEj.png', 'documents/U1QgXEYf7SnLqB4ORW7YacJR1nz8LaAzQWnLXgjd.jpg', 'documents/BwljZZTIaG279XZ7FQKvzGGUoIBO7Ca0CB8oYo2J.docx', 'documents/QBZ1KyqKmZxpLAc8AUxBaE5iJwPTQMfbG2tx882Q.docx', 'documents/zo8r8WkIZvymH8BTRgBjEN8YuX3RG12Y0E0jrg06.pdf', 'documents/nUyDxSHe22BJP4hld4SPugzBZnPZUCbzjs7uXU9E.pdf', 'documents/dsGj5TDI7Lz46ssDLUFIubjZeArMgKKxZ0cuxP0X.jpg', '2024-06-05 14:22:14', '2024-06-05 14:22:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'nouval', 'm.nouvalrifqi2004@gmail.com', NULL, '$2y$12$KsRM5qp5duAcfn3DatZbbOjKuQ1BU35EMTNXi3WbQ9ogY9YcUq1Gy', NULL, '2024-06-05 12:25:51', '2024-06-05 12:25:51');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `students_email_unique` (`email`);

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
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
