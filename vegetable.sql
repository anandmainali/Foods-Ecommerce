-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 23, 2018 at 05:44 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vegetable`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Vegetables', 'vegetables', '2018-06-02 21:42:20', '2018-06-02 21:42:20'),
(2, 'Fruits', 'fruits', '2018-06-02 21:42:38', '2018-06-02 21:42:38'),
(3, 'Meats', 'meats', '2018-06-02 21:42:50', '2018-06-02 21:42:50'),
(4, 'Dried Foods', 'dried-foods', '2018-06-02 21:43:01', '2018-06-02 21:43:12'),
(5, 'Juice', 'juice', '2018-06-02 21:43:23', '2018-06-02 21:43:23');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `happycustomer`
--

CREATE TABLE `happycustomer` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `happy_customers`
--

CREATE TABLE `happy_customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `happy_customers`
--

INSERT INTO `happy_customers` (`id`, `name`, `post`, `photo`, `about`, `created_at`, `updated_at`) VALUES
(1, 'Sita Tamang', 'Developer', '1528276564comment1.png', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita quis consequuntur commodi! Maxime facere eos rerum, quasi asperiores architecto, a blanditiis animi odio, quos et magni exercitationem nihil, ullam minus.<br></p>', '2018-06-03 09:50:01', '2018-06-06 03:32:18'),
(2, 'Uraj Mainali', 'Student', '1528040411test2.png', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita quis consequuntur commodi! Maxime facere eos rerum, quasi asperiores architecto, a blanditiis animi odio, quos et magni exercitationem nihil, ullam minus.<br></p>', '2018-06-03 09:55:11', '2018-06-03 09:55:11'),
(3, 'Pemba Tshering Tamang', 'Student', '1528276588comment2.png', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam quo est earum quibusdam temporibus adipisci ipsam sit, eius pariatur quaerat vitae fuga, doloremque reiciendis, culpa soluta iure laudantium facere laboriosam.<br></p>', '2018-06-06 03:31:28', '2018-06-06 03:31:28');

-- --------------------------------------------------------

--
-- Table structure for table `infos`
--

CREATE TABLE `infos` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` text COLLATE utf8mb4_unicode_ci,
  `about` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `infos`
--

INSERT INTO `infos` (`id`, `name`, `address`, `phone`, `email`, `logo`, `about`, `created_at`, `updated_at`) VALUES
(1, 'ORGANIC FOOD & FRUITS', 'Maharajgunj, Kathmandu', '9811111111', 'info@organicfoodandfruits.com', '1528019599logo.png', '<span style=\"color: rgb(34, 34, 34); font-family: Consolas, \"Lucida Console\", \"Courier New\", monospace; font-size: 12px; white-space: pre-wrap;\">Organically grown foods have more nutrients (vitamins, minerals, enzymes, and micronutrients) than commercially grown foods because the soil is managed and nourished with sustainable practices by responsible standards, rather than commercially grown foods.</span>', '2018-06-02 21:16:08', '2018-06-06 03:12:52');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(8, '2018_03_16_160235_create_happyCustomer_table', 1),
(12, '2014_10_12_000000_create_users_table', 2),
(13, '2014_10_12_100000_create_password_resets_table', 2),
(14, '2018_01_16_055118_create_infos_table', 2),
(15, '2018_01_16_085128_create_sliders_table', 2),
(16, '2018_01_16_094058_create_team_members_table', 2),
(17, '2018_01_16_094439_create_comments_table', 2),
(18, '2018_01_25_162826_create_sessions_table', 2),
(19, '2018_06_01_091025_create_categories_table', 2),
(20, '2018_06_02_031230_create_subcategories_table', 2),
(21, '2018_06_02_041412_create_products_table', 2),
(22, '2018_06_03_025646_create_happy_customers_table', 2),
(23, '2018_06_04_160918_create_wishlists_table', 3),
(24, '2018_06_05_024800_create_orders_table', 4),
(25, '2018_06_05_112108_create_order_products_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci,
  `total` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `phone`, `address`, `note`, `total`, `shipping_status`, `created_at`, `updated_at`) VALUES
(35, 4, '9845784371', 'Samakhusi, Kathmandu', 'dsfdfdsaf sfadsfasdfsd', '2,511.00', 1, '2018-06-05 08:53:26', '2018-06-05 21:48:35'),
(36, 3, '9845784371', 'Samakhusi, Kathmandu', 'fadf fdsfdsfsdf', '680.00', 0, '2018-06-05 21:56:50', '2018-06-05 21:56:50'),
(37, 5, '9845784371', 'Samakhusi, Kathmandu', 'fsdfs sfsfsfsaf', '200.00', 0, '2018-06-06 04:40:31', '2018-06-06 04:40:31'),
(38, 1, '9819256350', 'Maharajgunj, Kathmandu, chandol', 'jljljffdsf', '1,515.00', 1, '2018-11-22 02:36:54', '2018-11-22 02:43:43');

-- --------------------------------------------------------

--
-- Table structure for table `order_products`
--

CREATE TABLE `order_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `quantity` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_products`
--

INSERT INTO `order_products` (`id`, `order_id`, `product_id`, `quantity`, `created_at`, `updated_at`) VALUES
(6, 35, 5, 3, '2018-06-05 08:53:26', '2018-06-05 08:53:26'),
(7, 35, 2, 1, '2018-06-05 08:53:26', '2018-06-05 08:53:26'),
(8, 36, 2, 3, '2018-06-05 21:56:50', '2018-06-05 21:56:50'),
(9, 36, 4, 2, '2018-06-05 21:56:50', '2018-06-05 21:56:50'),
(10, 36, 3, 1, '2018-06-05 21:56:50', '2018-06-05 21:56:50'),
(11, 37, 10, 1, '2018-06-06 04:40:31', '2018-06-06 04:40:31'),
(12, 37, 5, 1, '2018-06-06 04:40:31', '2018-06-06 04:40:31'),
(13, 38, 16, 3, '2018-11-22 02:36:54', '2018-11-22 02:36:54'),
(14, 38, 10, 1, '2018-11-22 02:36:54', '2018-11-22 02:36:54');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `subcategory_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` int(10) UNSIGNED DEFAULT NULL,
  `oldprice` int(10) UNSIGNED DEFAULT NULL,
  `newprice` int(10) UNSIGNED NOT NULL,
  `unit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured` tinyint(1) NOT NULL DEFAULT '1',
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `subcategory_id`, `name`, `slug`, `discount`, `oldprice`, `newprice`, `unit`, `featured`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 'Organic Onion', 'organic-onion', NULL, 60, 80, 'Kg', 0, '15280416843.png', '<p>fsdfsdfsdfs fsdfsdf</p>', '2018-06-02 21:50:54', '2018-06-06 03:44:16'),
(2, 1, NULL, 'Tomato', 'tomato', NULL, NULL, 45, NULL, 1, '15280417131.png', '<p>fsdfdsdf</p>', '2018-06-02 21:51:49', '2018-06-06 03:45:07'),
(3, 1, NULL, 'Broccoli', 'broccoli', NULL, NULL, 100, NULL, 0, '15280417232.png', '<p>fsadfsdf</p>', '2018-06-02 21:52:04', '2018-06-06 03:46:20'),
(4, 1, NULL, 'Potato', 'potato', NULL, NULL, 50, NULL, 0, '15280417344.png', '<p>dsfsadfs</p>', '2018-06-02 21:52:25', '2018-06-06 03:46:10'),
(5, 1, NULL, 'Radish', 'radish', NULL, NULL, 80, NULL, 0, '15280417465.png', '<p>fasdfsd</p>', '2018-06-02 21:52:40', '2018-06-06 03:46:41'),
(6, 1, NULL, 'Brinjal', 'brinjal', NULL, NULL, 60, NULL, 0, '15282775668.png', '<p><font color=\"rgba(0, 0, 0, 0.870588235294118)\" face=\"arial, sans-serif-light, sans-serif\"><span style=\"font-size: 30px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas dolore praesentium iure fugit, eveniet officia? Accusantium excepturi earum, harum ipsum iusto repellendus expedita officiis iure, aspernatur sit voluptas, veritatis delectus.</span></font><br></p>', '2018-06-06 03:47:46', '2018-06-06 03:47:46'),
(7, 1, NULL, 'Garlic', 'garlic', NULL, NULL, 200, NULL, 1, '15282776126.png', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas dolore praesentium iure fugit, eveniet officia? Accusantium excepturi earum, harum ipsum iusto repellendus expedita officiis iure, aspernatur sit voluptas, veritatis delectus.<br></p>', '2018-06-06 03:48:32', '2018-06-06 03:48:32'),
(8, 1, NULL, 'Cauliflower', 'cauliflower', NULL, NULL, 30, NULL, 1, '15282776417.png', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas dolore praesentium iure fugit, eveniet officia? Accusantium excepturi earum, harum ipsum iusto repellendus expedita officiis iure, aspernatur sit voluptas, veritatis delectus.<br></p>', '2018-06-06 03:49:01', '2018-06-06 03:49:01'),
(10, 2, NULL, 'Banana', 'banana', NULL, NULL, 120, NULL, 1, '1528277922banana_yellow.png', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas dolore praesentium iure fugit, eveniet officia? Accusantium excepturi earum, harum ipsum iusto repellendus expedita officiis iure, aspernatur sit voluptas, veritatis delectus.<br></p>', '2018-06-06 03:53:42', '2018-06-06 03:53:42'),
(11, 1, NULL, 'Watermelon', 'watermelon', NULL, NULL, 200, 'pcs', 0, '152827797119114722_1400446016741891_1643894358_n.png', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas dolore praesentium iure fugit, eveniet officia? Accusantium excepturi earum, harum ipsum iusto repellendus expedita officiis iure, aspernatur sit voluptas, veritatis delectus.<br></p>', '2018-06-06 03:54:31', '2018-06-06 03:54:31'),
(12, 2, NULL, 'Apple', 'apple', NULL, NULL, 440, NULL, 1, '1528278019apple-usa.png', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas dolore praesentium iure fugit, eveniet officia? Accusantium excepturi earum, harum ipsum iusto repellendus expedita officiis iure, aspernatur sit voluptas, veritatis delectus.<br></p>', '2018-06-06 03:55:19', '2018-06-06 03:55:19'),
(13, 2, NULL, 'Pineapple', 'pineapple', NULL, NULL, 200, 'pcs', 1, '1528278060pineapple.png', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas dolore praesentium iure fugit, eveniet officia? Accusantium excepturi earum, harum ipsum iusto repellendus expedita officiis iure, aspernatur sit voluptas, veritatis delectus.<br></p>', '2018-06-06 03:56:00', '2018-06-06 03:56:00'),
(14, 3, NULL, 'Pork Mince', 'pork-mince', NULL, NULL, 310, '500 gms', 1, '1528278204pork_mince_500_gms.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas dolore praesentium iure fugit, eveniet officia? Accusantium excepturi earum, harum ipsum iusto repellendus expedita officiis iure, aspernatur sit voluptas, veritatis delectus.<br></p>', '2018-06-06 03:58:24', '2018-06-06 03:58:24'),
(15, 3, NULL, 'Fresh chicken', 'fresh-chicken', NULL, NULL, 320, NULL, 1, '1528278273fresh_chicken_with_cutting.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas dolore praesentium iure fugit, eveniet officia? Accusantium excepturi earum, harum ipsum iusto repellendus expedita officiis iure, aspernatur sit voluptas, veritatis delectus.<br></p>', '2018-06-06 03:59:33', '2018-06-06 03:59:33'),
(16, 3, NULL, 'Ostrich Meat', 'ostrich-meat', NULL, NULL, 465, NULL, 1, '1528278336ostrichbone.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas dolore praesentium iure fugit, eveniet officia? Accusantium excepturi earum, harum ipsum iusto repellendus expedita officiis iure, aspernatur sit voluptas, veritatis delectus.<br></p>', '2018-06-06 04:00:36', '2018-06-06 04:00:36');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('c9GLq5YXAoTNgr5ruEyVtskJOIJrmAQAyuAg4c2D', 1, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoicWxMa1FjTFFkMkJtclJEenoyWXVWSEtTcU9BZE9JeU82a3RybEJTNSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NDoiY2FydCI7YTowOnt9czozOiJ1cmwiO2E6MDp7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1542877113);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, '1528038983slider.png', '2018-06-03 09:31:23', '2018-06-03 09:31:23'),
(4, '1528276287slider2.png', '2018-06-06 03:26:27', '2018-06-06 03:26:27'),
(6, '1528276465slider.png', '2018-06-06 03:29:25', '2018-06-06 03:29:25'),
(7, '1528276478slider.png', '2018-06-06 03:29:38', '2018-06-06 03:29:38');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `category_id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 1, 'fsadfsdfs', 'fsadfsdfs', '2018-06-02 21:48:47', '2018-06-02 21:48:47'),
(2, 2, 'fdsfs', 'fdsfs', '2018-06-02 21:48:55', '2018-06-02 21:48:55'),
(3, 3, 'dsfdfs', 'dsfdfs', '2018-06-02 21:49:01', '2018-06-02 21:49:01'),
(4, 4, 'sfsdf', 'sfsdf', '2018-06-02 21:49:10', '2018-06-02 21:49:10'),
(5, 5, 'sdfsdfa', 'sdfsdfa', '2018-06-02 21:49:17', '2018-06-02 21:49:17');

-- --------------------------------------------------------

--
-- Table structure for table `team_members`
--

CREATE TABLE `team_members` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `team_members`
--

INSERT INTO `team_members` (`id`, `name`, `post`, `photo`, `about`, `created_at`, `updated_at`) VALUES
(1, 'Uraj Mainali', 'Student', '1528043933IMG_0855 (2).JPG', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam quo est earum quibusdam temporibus adipisci ipsam sit, eius pariatur quaerat vitae fuga, doloremque reiciendis, culpa soluta iure laudantium facere laboriosam.', '2018-06-03 10:53:53', '2018-06-06 03:17:00'),
(3, 'Bishnu Chaudhary', 'Student', '1528275883ch.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam quo est earum quibusdam temporibus adipisci ipsam sit, eius pariatur quaerat vitae fuga, doloremque reiciendis, culpa soluta iure laudantium facere laboriosam.<br></p>', '2018-06-06 03:19:43', '2018-06-06 03:19:43'),
(4, 'Moona Mustaq', 'Student', '1528275901moo.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam quo est earum quibusdam temporibus adipisci ipsam sit, eius pariatur quaerat vitae fuga, doloremque reiciendis, culpa soluta iure laudantium facere laboriosam.<br></p>', '2018-06-06 03:20:01', '2018-06-06 03:20:01'),
(5, 'Pemba Tshering Tamang', 'Student', '1528275920ts.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam quo est earum quibusdam temporibus adipisci ipsam sit, eius pariatur quaerat vitae fuga, doloremque reiciendis, culpa soluta iure laudantium facere laboriosam.<br></p>', '2018-06-06 03:20:20', '2018-06-06 03:20:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `uname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `utype` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uname`, `email`, `password`, `utype`, `image`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'uraj', 'urajmainali5@gmail.com', '$2y$12$5pJ7ey72dZ8Al36OjpYOsuWESPZjfkKd3G9RuzgAiil8qTF/ej8f2', 'admin', '', 1, 'nyGmMmY1zFvh5WKhnLhqqDl4KOOBX9k93rxQbgvoT8b0PELNxT8EAxPohlCO', NULL, NULL),
(3, 'anandmainali5', 'admin@gmail.com', '$2y$10$6ZsTYh4WENjb6WVu6FYH7eU2PfcMqSbBSskn0mbVZY9Pfp3MlK1Ue', 'user', NULL, 0, 'BDd3HHP1bsmmhhN9ncNpwEV5gY5b0ouklIhBkvkn5vCNSKz8pPbGXRa4kmkg', '2018-06-04 04:28:59', '2018-06-04 04:28:59'),
(4, 'Anand Kumar Mainali', 'anandmainali5@gmail.com', '$2y$10$DiARt4B2iZT1so138juyb.r/E3T2sXfRKbEpjQsFsz27H1NT2hco.', 'user', NULL, 0, 'tqzOG8Saje6s5jObKIH3r2K4hAncPZ7wu3BY7s5EzjsuyxTU60u2TUprrAov', '2018-06-05 08:50:32', '2018-06-05 08:50:32'),
(5, 'Pemba Tshering', 'tamangtshering5@gmail.com', '$2y$10$7v/aOKinY2xM5WTHUi4kwu7G4IPgIZzwXdvng9dgbXcQwpKIrsC16', 'user', NULL, 0, NULL, '2018-06-06 04:25:48', '2018-06-06 04:25:48');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `user_id`, `product_id`, `created_at`, `updated_at`) VALUES
(5, 1, 4, '2018-06-04 11:03:11', '2018-06-04 11:03:11'),
(6, 1, 3, '2018-06-04 11:03:15', '2018-06-04 11:03:15'),
(9, 3, 2, '2018-06-04 20:55:12', '2018-06-04 20:55:12'),
(10, 3, 3, '2018-06-04 20:55:16', '2018-06-04 20:55:16'),
(11, 1, 1, '2018-06-04 20:58:57', '2018-06-04 20:58:57'),
(13, 4, 5, '2018-06-05 08:54:11', '2018-06-05 08:54:11'),
(14, 4, 5, '2018-06-05 08:56:09', '2018-06-05 08:56:09'),
(15, 4, 3, '2018-06-05 08:56:14', '2018-06-05 08:56:14'),
(16, 5, 3, '2018-06-06 04:35:01', '2018-06-06 04:35:01'),
(17, 1, 1, '2018-11-22 02:35:54', '2018-11-22 02:35:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `happycustomer`
--
ALTER TABLE `happycustomer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `happy_customers`
--
ALTER TABLE `happy_customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `infos`
--
ALTER TABLE `infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_products`
--
ALTER TABLE `order_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_products_order_id_foreign` (`order_id`),
  ADD KEY `order_products_product_id_foreign` (`product_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_subcategory_id_foreign` (`subcategory_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD UNIQUE KEY `sessions_id_unique` (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subcategories_category_id_foreign` (`category_id`);

--
-- Indexes for table `team_members`
--
ALTER TABLE `team_members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wishlists_user_id_foreign` (`user_id`),
  ADD KEY `wishlists_product_id_foreign` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `happycustomer`
--
ALTER TABLE `happycustomer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `happy_customers`
--
ALTER TABLE `happy_customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `infos`
--
ALTER TABLE `infos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `order_products`
--
ALTER TABLE `order_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `team_members`
--
ALTER TABLE `team_members`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_products`
--
ALTER TABLE `order_products`
  ADD CONSTRAINT `order_products_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_products_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_subcategory_id_foreign` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD CONSTRAINT `subcategories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD CONSTRAINT `wishlists_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `wishlists_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
