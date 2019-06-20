-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 20 Jun 2019 pada 16.26
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
-- Database: `news`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `category`, `created_at`, `updated_at`) VALUES
(2, 'Education', '2019-06-20 07:07:26', '2019-06-20 07:07:26'),
(3, 'Sport', '2019-06-20 07:07:34', '2019-06-20 07:07:34');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_06_18_051315_create_categories_table', 1),
(4, '2019_06_18_051335_create_news_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `author` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `news`
--

INSERT INTO `news` (`id`, `author`, `title`, `description`, `image`, `content`, `status`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Copa America 2019', 'Copa America 2019: Kolombia Negara Pertama yang Lolos ke Perempatfinal', 'https://akcdn.detik.net.id/community/media/visual/2019/06/20/b54d08be-b2d3-4c64-8890-3814586b8ad7_169.jpeg?w=700&q=80', 'ao Paulo - Kolombia berhasil menjadi tim pertama yang melaju ke perempatfinal Copa America 2019. Kepastian ini didapat setelah mereka mengalahkan Qatar 1-0.\r\n\r\nDalam laga yang berlangsung di Estadio Morumbi, Kamis (20/6/2019) pagi WIB, Kolombia tampil dominan dengan 69 persen penguasaan bola. Namun, mereka baru mampu memecah kebuntuan empat menit jelang laga usai.\r\n\r\nGol tunggal Duvan Zapata menjadi penentu kemenangan Kolombia . Pemain Atalanta ini mencatatkan namanya di papan skor melalui gol sundulan kepala memanfaatkan umpan James Rodriguez.\r\n\r\nBaca juga: Argentina vs Paraguay: Messi Selamatkan Albiceleste dari Kekalahan\r\n\r\nKemenangan ini melanjutkan tren apik pasukan Carlos Queiroz di ajang ini. Sebelumnya di laga perdana mereka mampu membungkam Argentina dengan skor 2-0.\r\n\r\nTambahan tiga angka juga membuat El Tricolor menjadi tim pertama yang memastikan tempat di perempatfinal Copa America 2019 dengan status juara Grup B. Poin enam yang dikumpulkan oleh Kolombia dipastikan sudah tak mungkin terkejar oleh tim lain di Grup B.\r\n\r\nBaca juga: Napoli Naksir James Rodriguez\r\n\r\nHal itu terjadi setelah pada laga lain, Paraguay bermain imbang 1-1 dengan Argentina. Situasi tersebut membuat Paraguay, Argentina dan Qatar akan memperebutkan tiket untuk mendampingi Kolombia di laga terakhir Grup B.\r\n\r\nPada babak perempatfinal, James Rodriguez dkk bakal berjumpa dengan runner-up Grup C. Kolombia kini tercatat selalu berhasil lolos ke fase gugur dalam tiga gelaran Copa America terakhir.', 1, 3, '2019-06-20 07:11:24', '2019-06-20 07:13:51'),
(2, 'Admin', 'Atletico Dapatkan Marcos Llorente dari Madrid', 'Madrid - Atletico Madrid mendapatkan Marcos Llorente dari Real Madrid. Menyusul terjalinnya kesepakatan akan biaya transfer gelandang bertahan Spanyol itu.', 'https://akcdn.detik.net.id/community/media/visual/2019/06/20/d91e4dae-4440-4ad5-abe3-ed422321bf16_43.jpeg?w=700&q=80', 'Llorente kini tinggal menjalani tes medis sebelum menuntaskan kepindahannya ke Wanda Metropolitano.\r\n\r\nBaca juga: Skuat Madrid Bengkak Jadi 37 Pemain, 12 Orang Harus Dilego\r\n\r\n\"Kami menyambut seorang pesepakbola hebat dan mengharapkan keberuntungan yang terbaik untuk dia di tantangan yang indah dan baru ini dalam seragam Atletico de Madrid,\" bunyi keterangan di situs resmi Atletico.\r\n\r\nLlorente jadi salah satu dari sejumlah pemain yang berupaya dilepas Madrid di musim panas ini. Madrid seperti diketahui surplus pemain, dengan skuat yang mencapai 37 pemain sementara liga hanya mengizinkan 25 pemain per tim.', 1, 3, '2019-06-20 07:13:40', '2019-06-20 07:14:00');

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
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$SVvvyaUqwctFg9FY8/RyzeGnvk54S.lyfT0lm7NJzN2qHacnDpSWu', NULL, '2019-06-20 04:35:04', '2019-06-20 04:35:04');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_category_id_foreign` (`category_id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
