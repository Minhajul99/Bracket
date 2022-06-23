-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2022 at 04:48 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `b1laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `des` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 for active 2 for inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `des`, `tag`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Electronics', 'Electronics Products', 'Electronics', 1, '2022-06-16 10:02:30', '2022-06-16 10:02:30'),
(2, 'Electrical', 'Electrical  Products', 'Electrical', 1, '2022-06-16 10:02:48', '2022-06-16 10:02:48'),
(3, 'Dress up', 'Fashion  Products', 'Dress', 1, '2022-06-16 10:03:14', '2022-06-16 10:03:14'),
(4, 'Vegetables', 'Agricultural Product', 'Vegetable', 1, '2022-06-16 10:04:27', '2022-06-16 10:04:27'),
(5, 'Food', 'Food', 'Food', 1, '2022-06-18 06:11:11', '2022-06-18 06:11:11'),
(6, 'Drinks', 'Drinks', 'Drinks', 1, '2022-06-18 06:11:23', '2022-06-18 06:11:23'),
(7, 'Beauty', 'Beauty', 'Beauty', 1, '2022-06-18 06:12:46', '2022-06-18 06:12:46'),
(8, 'Fruits', 'Fruits', 'Fruits', 1, '2022-06-18 06:15:06', '2022-06-18 06:15:06'),
(9, 'Shoes', 'Shoes', 'Shoes', 1, '2022-06-18 06:15:25', '2022-06-18 06:15:25'),
(10, 'Medicine', 'Medicine', 'Medicine', 1, '2022-06-18 06:15:41', '2022-06-18 06:15:41'),
(11, 'Dry Foods', 'Dry Foods', 'Dry Foods', 1, '2022-06-18 06:16:30', '2022-06-18 06:16:30');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `item_code` int(11) NOT NULL,
  `gallery_pic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `item_code`, `gallery_pic`, `created_at`, `updated_at`) VALUES
(7, 2, '650928051.jpg', '2022-06-16 10:08:47', '2022-06-16 10:08:47'),
(8, 2, '1454844373.jpg', '2022-06-16 10:08:47', '2022-06-16 10:08:47'),
(9, 2, '329823067.jpg', '2022-06-16 10:08:47', '2022-06-16 10:08:47'),
(10, 1, '772079193.png', '2022-06-21 02:39:54', '2022-06-21 02:39:54'),
(11, 1, '740381486.jpg', '2022-06-21 02:39:54', '2022-06-21 02:39:54'),
(12, 1, '1681608917.jpg', '2022-06-21 02:39:54', '2022-06-21 02:39:54'),
(13, 5, '603974587.jpg', '2022-06-21 02:40:40', '2022-06-21 02:40:40'),
(14, 5, '1837463230.jpg', '2022-06-21 02:40:40', '2022-06-21 02:40:40'),
(15, 5, '844577583.jpg', '2022-06-21 02:41:14', '2022-06-21 02:41:14'),
(16, 5, '31063353.jpg', '2022-06-21 02:41:14', '2022-06-21 02:41:14'),
(17, 5, '1255200994.jpeg', '2022-06-21 02:41:14', '2022-06-21 02:41:14'),
(18, 1, '1725360273.jpg', '2022-06-21 02:42:39', '2022-06-21 02:42:39'),
(19, 1, '759894006.jpg', '2022-06-21 02:42:39', '2022-06-21 02:42:39'),
(20, 3, '1074108801.jpg', '2022-06-21 02:43:17', '2022-06-21 02:43:17'),
(21, 3, '536588458.jpg', '2022-06-21 02:43:17', '2022-06-21 02:43:17'),
(22, 4, '1414631778.jpg', '2022-06-21 03:35:46', '2022-06-21 03:35:46'),
(23, 4, '1174581654.jpg', '2022-06-21 03:35:46', '2022-06-21 03:35:46');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(10) UNSIGNED NOT NULL,
  `item_code` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `des` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `buyprice` float DEFAULT NULL,
  `sellprice` float DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `item_code`, `name`, `des`, `pic`, `quantity`, `buyprice`, `sellprice`, `created_at`, `updated_at`) VALUES
(2, 1, 'Galaxy S22 Ultra', 'Galaxy S22 Ultra Best Android', '513047470.jpg', 14, 75000, 98000, '2022-06-16 10:08:13', '2022-06-16 10:08:13'),
(3, 2, 'Sony Smart Tv', 'Sony Smart Tv 4k', '114019541.jpg', 23, 110000, 135000, '2022-06-16 10:08:47', '2022-06-16 10:08:47'),
(4, 1, 'OnePlus 9 Pro', 'OnePlus 9 Pro', '1954373304.png', 13, 55000, 70000, '2022-06-21 02:39:54', '2022-06-21 02:39:54'),
(5, 5, 'ILLEYEN', 'ILLEYEN', '1834585.jpg', 60, 5000, 8000, '2022-06-21 02:40:40', '2022-06-21 02:40:40'),
(6, 5, 'Arong Panjabi', 'Arong Panjabi', '2057541059.jpg', 33, 2500, 4000, '2022-06-21 02:41:14', '2022-06-21 02:41:14'),
(7, 1, 'iphone 13 pro max', 'iphone 13 pro max', '1029001541.jpg', 10, 98000, 105000, '2022-06-21 02:42:39', '2022-06-21 03:38:09'),
(8, 3, 'Click Fan', 'Click Fan', '697809331.jpg', 12, 3000, 3800, '2022-06-21 02:43:17', '2022-06-21 02:43:17'),
(9, 4, 'Super Light', 'Super Light', '1279888090.png', 5, 300, 400, '2022-06-21 03:35:46', '2022-06-21 03:35:46');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(38, '2014_10_12_000000_create_users_table', 1),
(39, '2014_10_12_100000_create_password_resets_table', 1),
(40, '2019_08_19_000000_create_failed_jobs_table', 1),
(41, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(42, '2022_05_17_215028_create_products_table', 1),
(43, '2022_05_19_152756_create_categories_table', 1),
(44, '2022_05_24_151653_create_subcategories_table', 1),
(45, '2022_05_26_151934_create_items_table', 1),
(46, '2022_05_26_152119_create_galleries_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `costprice` int(11) NOT NULL,
  `sellprice` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 from Active 2 for Inative',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` int(10) UNSIGNED NOT NULL,
  `catId` int(11) NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subCatName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `des` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 for active 2 for inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `catId`, `slug`, `subCatName`, `des`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'mobile', 'Mobile', 'Android And IOS', '137560775.png', 1, '2022-06-16 10:05:04', '2022-06-16 10:05:04'),
(2, 1, 'tv', 'TV', 'Smart Tv', '1893535389.jpg', 1, '2022-06-16 10:05:31', '2022-06-16 10:05:31'),
(3, 2, 'fan', 'Fan', 'Cooler Fan', '478340552.jpg', 1, '2022-06-16 10:06:01', '2022-06-16 10:06:01'),
(4, 2, 'light', 'Light', 'LED Light', '891974070.png', 1, '2022-06-16 10:06:29', '2022-06-16 10:06:29'),
(5, 3, 'panjabi', 'Panjabi', 'Panjabi For Men', '2063682840.jpg', 1, '2022-06-16 10:07:06', '2022-06-16 10:07:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `socialId` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `name`, `address`, `phone`, `pic`, `email`, `socialId`, `email_verified_at`, `role`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Md Minhajul Abedin', 'Minhajul Abedin', NULL, NULL, NULL, 'minhajul.us@gmail.com', NULL, NULL, '1', '$2y$10$rL/uTSPWVXUToNSGMl7uBe2b63a4FBB/en0WsZedLf2vnUdTchE.O', NULL, '2022-06-16 10:02:05', '2022-06-16 10:02:05'),
(2, 'Google User', 'Minhajul Abedin', NULL, NULL, NULL, 'mas8596@gmail.com', '113188873168519368670', NULL, '3', 'eyJpdiI6Ik5kekFmTWU3eE16TE1EeDErOFFQMmc9PSIsInZhbHVlIjoiRXZlSDBHZjFqWFZDUHJ4c0hQKzlSWW9ON01tRDFhU3lpZWM1K0RueTFmYz0iLCJtYWMiOiIyNWI3YzdlODEyOGQwNTU3ZTBiMGM5NzMzNmVkMDU1YTFjNzExYjEzNjBkMWJjMWU2ZmI0N2FmOTY3ZDUwMzgwIiwidGFnIjoiIn0=', NULL, '2022-06-20 11:00:54', '2022-06-20 11:00:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `items_id_unique` (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_name_unique` (`name`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_role_unique` (`role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
