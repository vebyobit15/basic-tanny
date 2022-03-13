-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2022 at 12:02 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `basic`
--

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('pattarapontan@gmail.com', '$2y$10$781JgLuc44wZ2TLejycYXeyJX7NB18Qo1cmbc4rjx52aKpoh.5xu.', '2021-11-12 00:36:42');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_cartype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_carbrand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_carcolor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_carnumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_telnumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_image`, `service_cartype`, `service_carbrand`, `service_carcolor`, `service_carnumber`, `customer_number`, `customer_name`, `customer_telnumber`, `service_price`, `created_at`, `updated_at`) VALUES
(33, 'image/services/1725082697829393.jpg', '1', 'HONDA', 'แดง-ดำ', '1ตด8888', '1147895632551', 'ประหยัด จันดารา', '0906457892', '120', '2022-02-17 23:51:02', NULL),
(34, 'image/services/1725083080172243.jpeg', '1', 'TOYOTA', 'ขาว-ดำ', 'บ-4487', '3365978451001', 'วิซิตี้ อรุ่มเจ๊าะ', '0812541368', '120', '2022-02-17 23:57:07', NULL),
(35, 'image/services/1725083281659970.jfif', '1', 'LAMBORGHINI', 'แดง-ดำ', '1พง1111', '9104578585661', 'ณรงค์ ฤทธ์', '0994563201', '300', '2022-02-18 00:00:19', NULL),
(36, 'image/services/1725083447670854.jfif', '2', 'KAWASAKI', 'เขียว-ดำ', '1ดด7777', '9104574139861', 'น้องภู ใครอ่ะ', '0941257892', '50', '2022-02-18 00:02:57', NULL),
(37, 'image/services/1725083606432741.jpg', '2', 'HONDA', 'แดง-ดำ', '1นห5555', '9107896521356', 'วชิราวุทธ พระนอน', '0887469852', '52', '2022-02-18 00:05:29', NULL),
(38, 'image/services/1725083759251031.jfif', '2', 'HONDA', 'ส้ม-ขาว', '7ยบ7777', '9174589630258', 'ประยุทธ จันทร์สถิตย์', '0986321456', '3000', '2022-02-18 00:07:54', NULL),
(39, 'image/services/1725083942005518.jpg', '3', 'RICHTER', 'แดง-ดำ', '0', '1456320256789', 'ประมูล จันทร์นวง', '0906532147', '30', '2022-02-18 00:10:49', NULL),
(40, 'image/services/1725084135224835.png', '3', 'TESLA', 'ขาว-ดำ', '0', '1012365897412', 'อีลอน มัสทรี', '0612356987', '35', '2022-02-18 00:13:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('2l7DGOl2AGNyJQc6fg5zpI0TBWmPMrIlwDA5dxHQ', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiZk1yNlB1Tk1YWlkwTXc0dDZnUnRvc2VqcGVDWGI2RTBIeWNNMDYxTSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkdVg4YnlhMUZLaXhZVnhaM25jbDJYZTNBenFMdmV5U005MGpxWVlQZ2wvbmNVZGUyUFRmTjIiO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJHVYOGJ5YTFGS2l4WVZ4WjNuY2wyWGUzQXpxTHZleVNNOTBqcVlZUGdsL25jVWRlMlBUZk4yIjt9', 1646099617),
('oSDrtpbUtp3YYFyAgxNc5KWH5omgVM62zqcMVty1', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiVFVHYk5EbzdydTJiUFcxVW1GNFdHck1ZejhmbFZWdDdzR2hnQU44YiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkZzJvMUFSckZEc3lCa2prWjMzMko4LlZQZWNMVEhKYmhzTjlpdHBBQzNEU0U3bXYvTnZZVEsiO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJGcybzFBUnJGRHN5Qmtqa1ozMzJKOC5WUGVjTFRISmJoc045aXRwQUMzRFNFN212L052WVRLIjt9', 1645173824),
('qq6AV62ohXthvxDUaBJW83xDrpeOsjDxD612XGsu', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.80 Safari/537.36 Edg/98.0.1108.50', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiazdRTE9IRmdFZTJpOUVUQjh2d21oT2hsMG45NXhRU3dGQmJWeThnTiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1646099461);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Tannys', 'pattarapontan@gmail.com', NULL, '$2y$10$uX8bya1FKixYVxZ3ncl2Xe3AzqLveySM90jqYYPgl/ncUde2PTfN2', NULL, NULL, 'tpZrJ7sJNl4LwLyQPXuEpP7QCMwfnpS8X7TwMZvwLJ1c5H3IT5uphGqJlYei', NULL, NULL, '2021-11-09 18:08:07', '2022-02-17 23:52:03'),
(2, 'Tannysss', 'pattarapon_tanohno@hotmail.com', NULL, '$2y$10$uX8bya1FKixYVxZ3ncl2Xe3AzqLveySM90jqYYPgl/ncUde2PTfN2', NULL, NULL, NULL, NULL, NULL, '2021-11-09 18:09:11', '2021-11-09 18:09:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
