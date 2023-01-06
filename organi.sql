-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2022 at 11:35 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `organi`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `user_id`, `image`, `title`, `slug`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'img/banner/banner-1.jpg', 'healthy food and drink', 'healthy-food', NULL, '2022-10-25 01:51:16', '2022-10-25 01:51:16'),
(2, 1, 'img/banner/banner-2.jpg', 'low sugar food and drink', 'low-sugar', NULL, '2022-10-25 01:51:16', '2022-10-25 01:51:16');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `imageBlog` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nameBlog` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `user_id`, `imageBlog`, `date`, `comment`, `nameBlog`, `deskripsi`, `slug`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'img/blog/blog-1.jpg', 'May 4,2022', '5', 'Cooking tips make cooking simple', 'Daily Cooking Menu for 1 Month - Everyone can always need food, so almost every day someone will process food. Everyones appetite is not always the same, some prefer processed Indonesian dishes, certain Indonesian dishes, Asian dishes, European dishes, and so on. If so, where do you prefer Grameds to cook from? Wherever a dish comes from, as long as it is made or cooked with the right mix and method, it will taste delicious. Whats more, if cooked wholeheartedly, the taste will be even more delicious. For Grameds who are still confused about the daily menu for a month, dont worry, because this article will discuss a suitable menu to accompany your daily meals for a month. So, check out the review, Grameds.', 'Cooking-tips', NULL, '2022-10-25 01:51:16', '2022-10-25 01:51:16'),
(2, 1, 'img/blog/blog-2.jpg', 'july 16,2022', '7', '6 ways to prepare breakfast for 30', 'Daily Cooking Menu for 1 Month - Everyone can always need food, so almost every day someone will process food. Everyones appetite is not always the same, some prefer processed Indonesian dishes, certain Indonesian dishes, Asian dishes, European dishes, and so on. If so, where do you prefer Grameds to cook from? Wherever a dish comes from, as long as it is made or cooked with the right mix and method, it will taste delicious. Whats more, if cooked wholeheartedly, the taste will be even more delicious. For Grameds who are still confused about the daily menu for a month, dont worry, because this article will discuss a suitable menu to accompany your daily meals for a month. So, check out the review, Grameds.', '6-ways-to', NULL, '2022-10-25 01:51:16', '2022-10-25 01:51:16'),
(3, 1, 'img/blog/blog-3.jpg', 'maret 26,2022', '10', 'Visit the clean farm in the US', 'Daily Cooking Menu for 1 Month - Everyone can always need food, so almost every day someone will process food. Everyones appetite is not always the same, some prefer processed Indonesian dishes, certain Indonesian dishes, Asian dishes, European dishes, and so on. If so, where do you prefer Grameds to cook from? Wherever a dish comes from, as long as it is made or cooked with the right mix and method, it will taste delicious. Whats more, if cooked wholeheartedly, the taste will be even more delicious. For Grameds who are still confused about the daily menu for a month, dont worry, because this article will discuss a suitable menu to accompany your daily meals for a month. So, check out the review, Grameds.', 'Visit-the-clean', NULL, '2022-10-25 01:51:16', '2022-10-25 01:51:16');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `judulCategory` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imageCategory` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `user_id`, `judulCategory`, `slug`, `imageCategory`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'Fruits', 'Fruits', 'img/categories/cat-1.jpg', NULL, '2022-10-25 01:51:16', '2022-10-25 01:51:16'),
(2, 1, 'Fresh Meat', 'Fresh-Meat', 'img/categories/cat-2.jpg', NULL, '2022-10-25 01:51:16', '2022-10-25 01:51:16'),
(3, 1, 'Vegetables', 'Vegetables', 'img/categories/cat-3.jpg', NULL, '2022-10-25 01:51:16', '2022-10-25 01:51:16'),
(4, 1, 'Fastfood', 'Fastfood', 'img/categories/cat-4.jpg', NULL, '2022-10-25 01:51:16', '2022-10-25 01:51:16');

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
-- Table structure for table `jumbotrons`
--

CREATE TABLE `jumbotrons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `imageJumbotron` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `judulJumbotron` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `judulUtama` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `organic` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `action` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jumbotrons`
--

INSERT INTO `jumbotrons` (`id`, `user_id`, `imageJumbotron`, `judulJumbotron`, `slug`, `judulUtama`, `organic`, `deskripsi`, `action`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'img/hero/banner.jpg', 'FRUIT FRESH', 'jumbotron', 'Vegetable', '100% Organic', 'Free Pickup and Delivery Available', 'SHOP NOW', NULL, '2022-10-25 01:51:16', '2022-10-25 01:51:16');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_10_17_064655_create_banners_table', 1),
(6, '2022_10_17_070245_create_categories_table', 1),
(7, '2022_10_17_083341_create_products_table', 1),
(8, '2022_10_17_085751_create_blogs_table', 1),
(9, '2022_10_17_091514_create_promos_table', 1),
(10, '2022_10_17_093121_create_jumbotrons_table', 1),
(11, '2022_10_25_082432_add_is_admin_to_users_table', 1);

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categorie_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `imageProduct` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judulProduct` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `produkBox` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `categorie_id`, `user_id`, `imageProduct`, `slug`, `judulProduct`, `price`, `produkBox`, `deskripsi`, `detail`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'img/featured/feature-1.jpg', 'Raw-Meat', 'Raw Meat', '70.00', 'fresh-meat', 'There are many variations of Lorem Ipsums writing available, but most of them have undergone a change in form', 'There are many variations of Lorem Ipsums writing available, but most of them have undergone a change in form, either because of the humor element or the sentences being scrambled to make it look very unreasonable. If you want to use Lorem Ipsums writing, you have to make sure that there are no embarrassing passages hidden in the middle of the script. All Lorem Ipsum generators on the internet tend to repeat certain parts. Thats why this is the first real generator on the internet. He uses a vocabulary dictionary of 200 Latin words, combined with lots of example sentence structures to produce Lorem Ipsun that seems plausible. Because of that Lorem Ipsun produced will always be free from repetition, elements of humor that are intentionally included, words that do not match their characteristics and so on.', NULL, '2022-10-25 01:51:16', '2022-10-25 01:51:16'),
(2, 1, 1, 'img/featured/feature-2.jpg', 'Banana', 'Banana', '20.00', 'vegetables oranges', 'There are many variations of Lorem Ipsums writing available, but most of them have undergone a change in form', 'There are many variations of Lorem Ipsums writing available, but most of them have undergone a change in form, either because of the humor element or the sentences being scrambled to make it look very unreasonable. If you want to use Lorem Ipsums writing, you have to make sure that there are no embarrassing passages hidden in the middle of the script. All Lorem Ipsum generators on the internet tend to repeat certain parts. Thats why this is the first real generator on the internet. He uses a vocabulary dictionary of 200 Latin words, combined with lots of example sentence structures to produce Lorem Ipsun that seems plausible. Because of that Lorem Ipsun produced will always be free from repetition, elements of humor that are intentionally included, words that do not match their characteristics and so on.', NULL, '2022-10-25 01:51:16', '2022-10-25 01:51:16'),
(3, 1, 1, 'img/featured/feature-3.jpg', 'Guava', 'Guava', '25.00', 'vegetables', 'There are many variations of Lorem Ipsums writing available, but most of them have undergone a change in form', 'There are many variations of Lorem Ipsums writing available, but most of them have undergone a change in form, either because of the humor element or the sentences being scrambled to make it look very unreasonable. If you want to use Lorem Ipsums writing, you have to make sure that there are no embarrassing passages hidden in the middle of the script. All Lorem Ipsum generators on the internet tend to repeat certain parts. Thats why this is the first real generator on the internet. He uses a vocabulary dictionary of 200 Latin words, combined with lots of example sentence structures to produce Lorem Ipsun that seems plausible. Because of that Lorem Ipsun produced will always be free from repetition, elements of humor that are intentionally included, words that do not match their characteristics and so on.', NULL, '2022-10-25 01:51:16', '2022-10-25 01:51:16'),
(4, 1, 1, 'img/featured/feature-4.jpg', 'Watermelon', 'Watermelon', '40.00', 'vegetables', 'There are many variations of Lorem Ipsums writing available, but most of them have undergone a change in form', 'There are many variations of Lorem Ipsums writing available, but most of them have undergone a change in form, either because of the humor element or the sentences being scrambled to make it look very unreasonable. If you want to use Lorem Ipsums writing, you have to make sure that there are no embarrassing passages hidden in the middle of the script. All Lorem Ipsum generators on the internet tend to repeat certain parts. Thats why this is the first real generator on the internet. He uses a vocabulary dictionary of 200 Latin words, combined with lots of example sentence structures to produce Lorem Ipsun that seems plausible. Because of that Lorem Ipsun produced will always be free from repetition, elements of humor that are intentionally included, words that do not match their characteristics and so on.', NULL, '2022-10-25 01:51:16', '2022-10-25 01:51:16'),
(5, 3, 1, 'img/featured/feature-5.jpg', 'Grape', 'Grape', '45.00', 'vegetables', 'There are many variations of Lorem Ipsums writing available, but most of them have undergone a change in form', 'There are many variations of Lorem Ipsums writing available, but most of them have undergone a change in form, either because of the humor element or the sentences being scrambled to make it look very unreasonable. If you want to use Lorem Ipsums writing, you have to make sure that there are no embarrassing passages hidden in the middle of the script. All Lorem Ipsum generators on the internet tend to repeat certain parts. Thats why this is the first real generator on the internet. He uses a vocabulary dictionary of 200 Latin words, combined with lots of example sentence structures to produce Lorem Ipsun that seems plausible. Because of that Lorem Ipsun produced will always be free from repetition, elements of humor that are intentionally included, words that do not match their characteristics and so on.', NULL, '2022-10-25 01:51:16', '2022-10-25 01:51:16'),
(6, 4, 1, 'img/featured/feature-6.jpg', 'hamburger', 'hamburger', '40.00', 'fastfood', 'There are many variations of Lorem Ipsums writing available, but most of them have undergone a change in form', 'There are many variations of Lorem Ipsums writing available, but most of them have undergone a change in form, either because of the humor element or the sentences being scrambled to make it look very unreasonable. If you want to use Lorem Ipsums writing, you have to make sure that there are no embarrassing passages hidden in the middle of the script. All Lorem Ipsum generators on the internet tend to repeat certain parts. Thats why this is the first real generator on the internet. He uses a vocabulary dictionary of 200 Latin words, combined with lots of example sentence structures to produce Lorem Ipsun that seems plausible. Because of that Lorem Ipsun produced will always be free from repetition, elements of humor that are intentionally included, words that do not match their characteristics and so on.', NULL, '2022-10-25 01:51:16', '2022-10-25 01:51:16'),
(7, 3, 1, 'img/featured/feature-7.jpg', 'Mango', 'Mango', '25.00', 'vegetables oranges', 'There are many variations of Lorem Ipsums writing available, but most of them have undergone a change in form', 'There are many variations of Lorem Ipsums writing available, but most of them have undergone a change in form, either because of the humor element or the sentences being scrambled to make it look very unreasonable. If you want to use Lorem Ipsums writing, you have to make sure that there are no embarrassing passages hidden in the middle of the script. All Lorem Ipsum generators on the internet tend to repeat certain parts. Thats why this is the first real generator on the internet. He uses a vocabulary dictionary of 200 Latin words, combined with lots of example sentence structures to produce Lorem Ipsun that seems plausible. Because of that Lorem Ipsun produced will always be free from repetition, elements of humor that are intentionally included, words that do not match their characteristics and so on.', NULL, '2022-10-25 01:51:16', '2022-10-25 01:51:16'),
(8, 3, 1, 'img/featured/feature-8.jpg', 'Apple', 'Apple', '50.00', 'vegetables', 'There are many variations of Lorem Ipsums writing available, but most of them have undergone a change in form', 'There are many variations of Lorem Ipsums writing available, but most of them have undergone a change in form, either because of the humor element or the sentences being scrambled to make it look very unreasonable. If you want to use Lorem Ipsums writing, you have to make sure that there are no embarrassing passages hidden in the middle of the script. All Lorem Ipsum generators on the internet tend to repeat certain parts. Thats why this is the first real generator on the internet. He uses a vocabulary dictionary of 200 Latin words, combined with lots of example sentence structures to produce Lorem Ipsun that seems plausible. Because of that Lorem Ipsun produced will always be free from repetition, elements of humor that are intentionally included, words that do not match their characteristics and so on.', NULL, '2022-10-25 01:51:16', '2022-10-25 01:51:16');

-- --------------------------------------------------------

--
-- Table structure for table `promos`
--

CREATE TABLE `promos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `categorie_id` bigint(20) UNSIGNED NOT NULL,
  `imagePromo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `namePromo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pricePromo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `promos`
--

INSERT INTO `promos` (`id`, `user_id`, `categorie_id`, `imagePromo`, `namePromo`, `pricePromo`, `slug`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'img/latest-product/lp-1.jpg', 'mustard', '20.00', 'mustard', NULL, '2022-10-25 01:51:16', '2022-10-25 01:51:16'),
(2, 1, 1, 'img/latest-product/lp-2.jpg', 'paprika', '30.00', 'paprika', NULL, '2022-10-25 01:51:16', '2022-10-25 01:51:16'),
(3, 1, 2, 'img/latest-product/lp-9.jpg', 'apple', '70.00', 'apple', NULL, '2022-10-25 01:51:16', '2022-10-25 01:51:16'),
(4, 1, 2, 'img/latest-product/lp-4.jpg', 'fresh meat', '50.00', 'fresh-meat', NULL, '2022-10-25 01:51:16', '2022-10-25 01:51:16'),
(5, 1, 3, 'img/latest-product/lp-5.jpg', 'banana', '10.00', 'banana', NULL, '2022-10-25 01:51:16', '2022-10-25 01:51:16'),
(6, 1, 3, 'img/latest-product/lp-6.jpg', 'guava', '15.00', 'guava', NULL, '2022-10-25 01:51:16', '2022-10-25 01:51:16'),
(7, 1, 4, 'img/latest-product/lp-7.jpg', 'watermellon', '55.00', 'watermellon', NULL, '2022-10-25 01:51:16', '2022-10-25 01:51:16'),
(8, 1, 4, 'img/latest-product/lp-8.jpg', 'grape', '100.00', 'grape', NULL, '2022-10-25 01:51:16', '2022-10-25 01:51:16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `slug`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `is_admin`) VALUES
(1, 'alexander-graham', 'alexander', 'alexander graham', 'alexander@gmail.com', NULL, '$2y$10$cvkpqmJjdcTjp/DsgVIHO.9.MBPTvdZXNCXFeDbXy5yIANsYKFTVS', NULL, '2022-10-25 01:51:16', '2022-10-25 01:51:16', 1),
(2, 'felix-andrew', 'felix', 'felix andrew', 'felix@gmail.com', NULL, '$2y$10$XutQ.w.0KfzYzchctXMOAefm/7wr7uQRHrOVhPbQCeuUttpoiN0V6', NULL, '2022-10-25 02:34:29', '2022-10-25 02:34:29', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blogs_slug_unique` (`slug`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_judulcategory_unique` (`judulCategory`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jumbotrons`
--
ALTER TABLE `jumbotrons`
  ADD PRIMARY KEY (`id`);

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
  ADD UNIQUE KEY `products_slug_unique` (`slug`);

--
-- Indexes for table `promos`
--
ALTER TABLE `promos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jumbotrons`
--
ALTER TABLE `jumbotrons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `promos`
--
ALTER TABLE `promos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
