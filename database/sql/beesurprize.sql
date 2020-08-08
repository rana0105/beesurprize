-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2020 at 05:13 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel7`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `detail`, `blog_image`, `created_at`, `updated_at`) VALUES
(1, 'Test Notification', '<p><span style=\"color: #626262; font-family: \'Avenir W01\', sans-serif; font-size: 16px; background-color: #ffffff;\">If the project loads Bootstrap from https://www.bootstrapcdn.com/, use the script provided by the&nbsp;</span><a style=\"box-sizing: inherit; border: 0px; padding: 0px; margin: 0px; background: 50% 50% no-repeat #ffffff; color: #1976d2; font-weight: 600; text-decoration-line: none; font-family: \'Avenir W01\'; font-size: 16px;\" href=\"https://www.bootstrapcdn.com/\">Bootstrap CDN</a><span style=\"color: #626262; font-family: \'Avenir W01\', sans-serif; font-size: 16px; background-color: #ffffff;\">, which includes the&nbsp;</span><code class=\"highlighter-rouge\" style=\"box-sizing: inherit; border: 0px; padding: 0px; margin: 0px; background: 50% 50% no-repeat #ffffff; color: #626262; font-size: 16px;\">integrity</code><span style=\"color: #626262; font-family: \'Avenir W01\', sans-serif; font-size: 16px; background-color: #ffffff;\">&nbsp;and&nbsp;</span><code class=\"highlighter-rouge\" style=\"box-sizing: inherit; border: 0px; padding: 0px; margin: 0px; background: 50% 50% no-repeat #ffffff; color: #626262; font-size: 16px;\">crossorigin</code><span style=\"color: #626262; font-family: \'Avenir W01\', sans-serif; font-size: 16px; background-color: #ffffff;\">&nbsp;attributes.</span></p>', '561594288536.jpeg', '2020-07-09 03:55:37', '2020-07-09 03:55:37'),
(2, 'Server Requirements', '<p style=\"margin: 0px 0px 1em; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, \'Helvetica Neue\', Helvetica, sans-serif; font-size: 15px; vertical-align: baseline; box-sizing: inherit; clear: both; color: #242729; background-color: #ffffff;\">I always get returned \'No file\'.</p>\r\n<p style=\"margin: 0px 0px 1em; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, \'Helvetica Neue\', Helvetica, sans-serif; font-size: 15px; vertical-align: baseline; box-sizing: inherit; clear: both; color: #242729; background-color: #ffffff;\">Any clue? I\'ve even check the php.ini to see if there was a size limitation but it\'s all set to 32M as MAMP\'s pro default settings.</p>', '101594288732.png', '2020-07-09 03:58:52', '2020-07-09 03:58:52');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `top` int(11) NOT NULL DEFAULT 0,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `logo`, `top`, `slug`, `meta_title`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 'Square', '351594557190.png', 0, 'square', 'Food & Beverage', 'Food & Beverage', '2020-07-12 06:33:11', '2020-07-12 10:10:50'),
(2, 'Pran', '801594557597.png', 0, 'pran', 'Food & Beverage', 'Food & Beverage', '2020-07-12 06:39:57', '2020-07-12 10:10:42'),
(3, 'Bata Shoee', '501594568648.jpg', 0, 'bata-shoee', 'Cooking Ingredients', 'Cooking Ingredients', '2020-07-12 09:44:08', '2020-07-12 09:44:08');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(4, '2020_07_06_093312_create_permission_tables', 1),
(5, '2020_07_06_094119_create_blogs_table', 1),
(6, '2020_07_12_102404_create_brands_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 1),
(2, 'App\\User', 2),
(3, 'App\\User', 4),
(4, 'App\\User', 3),
(5, 'App\\User', 5);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin-list', 'web', '2020-07-08 00:41:31', '2020-07-08 00:41:31'),
(2, 'admin-create', 'web', '2020-07-08 00:41:31', '2020-07-08 00:41:31'),
(3, 'admin-edit', 'web', '2020-07-08 00:41:31', '2020-07-08 00:41:31'),
(4, 'admin-delete', 'web', '2020-07-08 00:41:31', '2020-07-08 00:41:31'),
(5, 'manager-list', 'web', '2020-07-08 00:41:31', '2020-07-08 00:41:31'),
(6, 'manager-create', 'web', '2020-07-08 00:41:32', '2020-07-08 00:41:32'),
(7, 'manager-edit', 'web', '2020-07-08 00:41:32', '2020-07-08 00:41:32'),
(8, 'manager-delete', 'web', '2020-07-08 00:41:32', '2020-07-08 00:41:32'),
(9, 'customer-list', 'web', '2020-07-08 00:41:32', '2020-07-08 00:41:32'),
(10, 'customer-create', 'web', '2020-07-08 00:41:32', '2020-07-08 00:41:32'),
(11, 'customer-edit', 'web', '2020-07-08 00:41:32', '2020-07-08 00:41:32'),
(12, 'customer-delete', 'web', '2020-07-08 00:41:32', '2020-07-08 00:41:32'),
(13, 'user-list', 'web', '2020-07-08 00:41:32', '2020-07-08 00:41:32'),
(14, 'user-create', 'web', '2020-07-08 00:41:32', '2020-07-08 00:41:32'),
(15, 'user-edit', 'web', '2020-07-08 00:41:32', '2020-07-08 00:41:32'),
(16, 'user-delete', 'web', '2020-07-08 00:41:32', '2020-07-08 00:41:32'),
(17, 'vendor-list', 'web', '2020-07-08 00:41:33', '2020-07-08 00:41:33'),
(18, 'vendor-create', 'web', '2020-07-08 00:41:33', '2020-07-08 00:41:33'),
(19, 'vendor-edit', 'web', '2020-07-08 00:41:33', '2020-07-08 00:41:33'),
(20, 'vendor-delete', 'web', '2020-07-08 00:41:33', '2020-07-08 00:41:33'),
(21, 'staff-list', 'web', '2020-07-08 00:41:33', '2020-07-08 00:41:33'),
(22, 'staff-create', 'web', '2020-07-08 00:41:33', '2020-07-08 00:41:33'),
(23, 'staff-edit', 'web', '2020-07-08 00:41:33', '2020-07-08 00:41:33'),
(24, 'staff-delete', 'web', '2020-07-08 00:41:33', '2020-07-08 00:41:33'),
(25, 'role-list', 'web', '2020-07-08 00:41:33', '2020-07-08 00:41:33'),
(26, 'role-create', 'web', '2020-07-08 00:41:33', '2020-07-08 00:41:33'),
(27, 'role-edit', 'web', '2020-07-08 00:41:33', '2020-07-08 00:41:33'),
(28, 'role-delete', 'web', '2020-07-08 00:41:34', '2020-07-08 00:41:34'),
(29, 'permission-list', 'web', '2020-07-08 00:41:34', '2020-07-08 00:41:34'),
(30, 'permission-create', 'web', '2020-07-08 00:41:34', '2020-07-08 00:41:34'),
(31, 'permission-edit', 'web', '2020-07-08 00:41:34', '2020-07-08 00:41:34'),
(32, 'permission-delete', 'web', '2020-07-08 00:41:34', '2020-07-08 00:41:34'),
(33, 'dashboard-list', 'web', '2020-07-08 00:41:34', '2020-07-08 00:41:34'),
(34, 'dashboard-create', 'web', '2020-07-08 00:41:34', '2020-07-08 00:41:34'),
(35, 'dashboard-edit', 'web', '2020-07-08 00:41:34', '2020-07-08 00:41:34'),
(36, 'dashboard-delete', 'web', '2020-07-08 00:41:34', '2020-07-08 00:41:34'),
(37, 'product-list', 'web', '2020-07-08 00:41:34', '2020-07-08 00:41:34'),
(38, 'product-create', 'web', '2020-07-08 00:41:34', '2020-07-08 00:41:34'),
(39, 'product-edit', 'web', '2020-07-08 00:41:35', '2020-07-08 00:41:35'),
(40, 'product-delete', 'web', '2020-07-08 00:41:35', '2020-07-08 00:41:35'),
(41, 'order-list', 'web', '2020-07-08 00:41:35', '2020-07-08 00:41:35'),
(42, 'order-create', 'web', '2020-07-08 00:41:35', '2020-07-08 00:41:35'),
(43, 'order-edit', 'web', '2020-07-08 00:41:35', '2020-07-08 00:41:35'),
(44, 'order-delete', 'web', '2020-07-08 00:41:35', '2020-07-08 00:41:35'),
(45, 'blog-list', 'web', '2020-07-08 00:41:35', '2020-07-08 00:41:35'),
(46, 'blog-create', 'web', '2020-07-08 00:41:35', '2020-07-08 00:41:35'),
(47, 'blog-edit', 'web', '2020-07-08 00:41:35', '2020-07-08 00:41:35'),
(48, 'blog-delete', 'web', '2020-07-08 00:41:35', '2020-07-08 00:41:35'),
(49, 'backup-list', 'web', '2020-07-08 00:42:42', '2020-07-08 00:42:42'),
(50, 'backup-create', 'web', '2020-07-08 00:42:42', '2020-07-08 00:42:42'),
(51, 'backup-edit', 'web', '2020-07-08 00:42:42', '2020-07-08 00:42:42'),
(52, 'backup-delete', 'web', '2020-07-08 00:42:42', '2020-07-08 00:42:42'),
(53, 'category-list', 'web', '2020-07-09 00:39:49', '2020-07-09 00:39:49'),
(54, 'category-create', 'web', '2020-07-09 00:39:50', '2020-07-09 00:39:50'),
(55, 'category-edit', 'web', '2020-07-09 00:39:50', '2020-07-09 00:39:50'),
(56, 'category-delete', 'web', '2020-07-09 00:39:50', '2020-07-09 00:39:50'),
(57, 'subcategory-list', 'web', '2020-07-09 01:50:30', '2020-07-09 01:50:30'),
(58, 'subcategory-create', 'web', '2020-07-09 01:50:31', '2020-07-09 01:50:31'),
(59, 'subcategory-edit', 'web', '2020-07-09 01:50:31', '2020-07-09 01:50:31'),
(60, 'subcategory-delete', 'web', '2020-07-09 01:50:31', '2020-07-09 01:50:31'),
(61, 'childcategory-list', 'web', '2020-07-09 01:51:19', '2020-07-09 01:51:19'),
(62, 'childcategory-create', 'web', '2020-07-09 01:51:19', '2020-07-09 01:51:19'),
(63, 'childcategory-edit', 'web', '2020-07-09 01:51:19', '2020-07-09 01:51:19'),
(64, 'childcategory-delete', 'web', '2020-07-09 01:51:19', '2020-07-09 01:51:19'),
(65, 'brand-list', 'web', '2020-07-12 05:55:44', '2020-07-12 05:55:44'),
(66, 'brand-create', 'web', '2020-07-12 05:55:45', '2020-07-12 05:55:45'),
(67, 'brand-edit', 'web', '2020-07-12 05:55:45', '2020-07-12 05:55:45'),
(68, 'brand-delete', 'web', '2020-07-12 05:55:45', '2020-07-12 05:55:45');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'web', '2020-07-08 00:41:42', '2020-07-08 00:41:42'),
(2, 'Admin', 'web', '2020-07-08 00:46:21', '2020-07-08 00:46:21'),
(3, 'Vendor', 'web', '2020-07-08 03:10:07', '2020-07-08 03:10:07'),
(4, 'Customer', 'web', '2020-07-08 23:32:56', '2020-07-08 23:32:56'),
(5, 'Staff', 'web', '2020-07-09 01:32:12', '2020-07-09 01:32:12');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(13, 2),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(17, 2),
(18, 1),
(18, 2),
(19, 1),
(19, 2),
(20, 1),
(20, 2),
(21, 1),
(21, 2),
(21, 3),
(22, 1),
(22, 2),
(22, 3),
(23, 1),
(23, 2),
(23, 3),
(24, 1),
(24, 2),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(37, 2),
(37, 3),
(37, 4),
(37, 5),
(38, 1),
(38, 2),
(38, 3),
(38, 5),
(39, 1),
(39, 2),
(39, 3),
(39, 5),
(40, 1),
(40, 2),
(40, 3),
(41, 1),
(41, 2),
(41, 3),
(41, 4),
(41, 5),
(42, 1),
(42, 2),
(42, 3),
(42, 4),
(42, 5),
(43, 1),
(43, 2),
(43, 3),
(43, 4),
(43, 5),
(44, 1),
(44, 2),
(44, 3),
(44, 4),
(45, 1),
(45, 2),
(45, 3),
(46, 1),
(46, 3),
(47, 1),
(47, 2),
(47, 3),
(48, 1),
(48, 2),
(48, 3),
(49, 1),
(49, 2),
(50, 1),
(50, 2),
(51, 1),
(51, 2),
(52, 1),
(52, 2),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1),
(67, 1),
(68, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_type` enum('Super Admin','Admin','Manager','Account','Vendor','Customer','Staff','Editor','Normal User') COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `phone`, `role_id`, `user_status`, `user_type`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Morshed Khan Rana', 'rana0105', 'admin@gmail.com', '01917919032', '1', 'All', 'Super Admin', NULL, '$2y$10$KsNRlFgIAPiR1VrhUfDcUOIjxxXr3W.R5dB79S1MLIr2IBrS3ww7K', NULL, '2020-07-08 00:41:42', '2020-07-08 00:41:42'),
(2, 'Habibullah Bahari', 'habibullah', 'habibullah@gmail.com', '01765444333', '2', NULL, 'Admin', NULL, '$2y$10$6Zwomy0a23It3mdolPw9suh7wSjRljowlJCcJDEkqaw4rfBNhbdxC', NULL, '2020-07-08 02:20:56', '2020-07-08 02:20:56'),
(3, 'Motaleb Hossain', 'motaleb', 'motaleb@gmail.com', '01765444332', '4', NULL, 'Customer', NULL, '$2y$10$6J7QI3mVsn.Sf2pn70k8Peo5uODD1ObJraFBq54eOqLi0pgqlmK.q', NULL, '2020-07-08 02:40:14', '2020-07-08 23:33:11'),
(4, 'Newaz Bro', 'newaz', 'newaz@gmail.com', '01765444322', '3', NULL, 'Vendor', NULL, '$2y$10$YNOqszb.A8VaPxVXvTmZ0uczOFIfWlNnQdBsO.sT4VrQyuwf67mX2', NULL, '2020-07-08 02:42:00', '2020-07-08 23:05:50'),
(5, 'Nasir vai', 'nasir', 'nasir@gmail.com', '01765444112', '5', NULL, 'Staff', NULL, '$2y$10$55G3.7G8JaYLn4ViiRML7.gL2HT7L6J9gdnDDHY3LFyp9fqzDkwE6', NULL, '2020-07-09 02:06:51', '2020-07-09 02:06:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
