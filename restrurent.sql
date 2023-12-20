-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2023 at 08:21 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restrurent`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookingtables`
--

CREATE TABLE `bookingtables` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `people` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookingtables`
--

INSERT INTO `bookingtables` (`id`, `name`, `email`, `phone`, `date`, `time`, `people`, `created_at`, `updated_at`) VALUES
(1, 'sdfds', 'asdf', 456, '2023-12-07', '435', 6554, '2023-12-08 23:08:51', '2023-12-08 23:08:51'),
(6, 'Mujahid', 'n@gmail.com', 456, '2023-12-06', '10pm', 655, '2023-12-09 01:18:33', '2023-12-09 01:18:33'),
(21, 'Mujahid', 'n@gmail.com', 456, '2023-12-12', '11:27', 6554, '2023-12-10 21:27:25', '2023-12-10 21:27:25');

-- --------------------------------------------------------

--
-- Table structure for table `catagories`
--

CREATE TABLE `catagories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `catagories`
--

INSERT INTO `catagories` (`id`, `name`, `image`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Fruits', '2221702277513.jpg', 0, '2023-12-11 00:29:23', '2023-12-11 00:51:53'),
(3, 'Vegetables', '3251702277535.jpg', 0, '2023-12-11 00:29:49', '2023-12-11 00:52:15'),
(4, 'Meat', '1811702277578.jpg', 1, '2023-12-11 00:30:14', '2023-12-11 00:52:58'),
(5, 'Seafood', '3631702277597.jpg', 0, '2023-12-11 00:30:34', '2023-12-11 00:53:17'),
(6, 'Dairy', '5091702277609.jpg', 1, '2023-12-11 00:31:05', '2023-12-11 00:53:29'),
(7, 'Sweets and Desserts', '6541702277645.jpg', 0, '2023-12-11 00:31:33', '2023-12-11 00:54:05'),
(8, 'Grilled and Barbecue', '9331702277658.jpg', 0, '2023-12-11 00:32:45', '2023-12-11 00:54:18'),
(9, 'Eggs and Breakfast Foods', '9851702277675.jpg', 0, '2023-12-11 00:33:25', '2023-12-11 00:54:35'),
(10, 'Pasta and Noodles', '1431702277688.jpg', 0, '2023-12-11 00:34:45', '2023-12-11 00:54:48'),
(11, 'Cured Meats', '2051702277707.jpg', 0, '2023-12-11 00:35:27', '2023-12-11 00:55:07');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_name` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `birthdate` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `customer_name`, `contact`, `address`, `birthdate`, `created_at`, `updated_at`) VALUES
(2, 'Mujahid', '016144', 'Muradpur', '2023-12-11', '2023-12-16 22:28:36', '2023-12-16 22:28:36'),
(3, 'Kaiser', '01521', 'Chakbazar', '2023-12-03', '2023-12-16 22:29:13', '2023-12-16 22:29:13'),
(4, 'Istiak', '019455', '2no gate', '2023-09-25', '2023-12-16 22:29:52', '2023-12-16 22:29:52');

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE `designations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `frontendbookings`
--

CREATE TABLE `frontendbookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `people` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `frontendbookings`
--

INSERT INTO `frontendbookings` (`id`, `name`, `email`, `phone`, `date`, `time`, `people`, `created_at`, `updated_at`) VALUES
(24, 'Mujahid', 'n@gmail.com', 456, '2023-12-06', '12:56', 6554, '2023-12-18 00:54:08', '2023-12-18 00:54:08'),
(25, 'Mujahid', 'n@gmail.com', 456, '2023-12-06', '12:56', 6554, '2023-12-18 00:55:55', '2023-12-18 00:55:55'),
(29, 'Mujahid', 'n@gmail.com', 456, '2023-12-06', '15:05', 6554, '2023-12-18 01:05:15', '2023-12-18 01:05:15'),
(30, 'arabi hamid', 'ashkaiser@gmail.com', 183757557, '2023-12-19', '16:13', 5, '2023-12-20 01:13:44', '2023-12-20 01:13:44'),
(31, 'arabi hamid', 'ashkaiser@gmail.com', 183757557, '2023-12-20', '13:18', 3, '2023-12-20 01:15:07', '2023-12-20 01:15:07'),
(32, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-20 01:16:02', '2023-12-20 01:16:02'),
(33, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-20 01:16:34', '2023-12-20 01:16:34'),
(34, 'arabi hamid', 'ashkaiser@gmail.com', 183757557, '2023-12-15', '13:21', 3, '2023-12-20 01:19:31', '2023-12-20 01:19:31'),
(35, 'arabi hamid', 'ashkaiser@gmail.com', 183757557, '2023-12-21', '13:22', 3, '2023-12-20 01:21:06', '2023-12-20 01:21:06');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item_name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `catagory_id` bigint(20) UNSIGNED NOT NULL,
  `kitchen_id` varchar(255) DEFAULT NULL,
  `cocking_type` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `item_name`, `image`, `catagory_id`, `kitchen_id`, `cocking_type`, `description`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Exotic Fruit Salad', NULL, 2, '1', 'good', 'The best choice', NULL, '2023-12-11 00:58:09', '2023-12-11 00:58:09'),
(4, 'Dragon Fruit Sorbet', NULL, 2, '1', 'good', 'Very nice', NULL, '2023-12-11 00:59:03', '2023-12-11 00:59:03'),
(5, 'Papaya Coconut Smoothie', NULL, 2, '1', 'good', 'Very nice', NULL, '2023-12-11 00:59:58', '2023-12-11 00:59:58'),
(6, 'Mango Tango Salsa', NULL, 2, '1', 'good', 'Very nice', NULL, '2023-12-11 01:00:36', '2023-12-11 01:00:36'),
(7, 'Caprese Salad', NULL, 3, '1', 'good', 'Very nice', NULL, '2023-12-11 01:03:43', '2023-12-11 01:03:43'),
(8, 'Vegetarian Spring Rolls', NULL, 3, '1', 'good', 'Very nice', NULL, '2023-12-11 01:04:29', '2023-12-11 01:04:29'),
(9, 'Cauliflower Steak', NULL, 3, '1', 'good', 'Very nice', NULL, '2023-12-11 01:05:15', '2023-12-11 01:05:15'),
(10, 'Beef Kala Bhuna', '1351702278520.jpg', 4, '1', 'good', 'Very nice', NULL, '2023-12-11 01:08:40', '2023-12-11 01:08:40'),
(11, 'Kacchi beef  Biryani', '9851702278726.jpg', 4, '1', 'good', 'Very nice', NULL, '2023-12-11 01:12:06', '2023-12-11 01:12:06'),
(12, 'Thai, Seafood', '5791702279028.jpg', 5, '1', NULL, NULL, NULL, '2023-12-11 01:14:03', '2023-12-11 01:17:08'),
(13, 'Thai, Seafood', '8301702278972.jpg', 5, '1', 'good', 'Very nice', NULL, '2023-12-11 01:16:12', '2023-12-11 01:16:12'),
(14, 'Pantowa recipi', '1201702279513.jpg', 6, '2', 'good', 'Very nice', NULL, '2023-12-11 01:25:13', '2023-12-11 01:25:13');

-- --------------------------------------------------------

--
-- Table structure for table `item_varients`
--

CREATE TABLE `item_varients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item_id` varchar(255) DEFAULT NULL,
  `varient_name` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `item_varients`
--

INSERT INTO `item_varients` (`id`, `item_id`, `varient_name`, `price`, `created_at`, `updated_at`) VALUES
(4, '8', 'Garden Fresh Rolls', '500', '2023-12-16 22:21:01', '2023-12-16 22:21:01'),
(5, '8', 'Veggie Delight Spring Rolls', '300', '2023-12-16 22:21:42', '2023-12-16 22:21:42'),
(6, '8', 'Vegetable Medley Rolls', '400', '2023-12-16 22:22:19', '2023-12-16 22:22:19'),
(7, '3', 'Tropical Tango Salad', '200', '2023-12-16 22:23:31', '2023-12-16 22:23:31'),
(8, '3', 'Aloha Ambrosia Salad', '600', '2023-12-16 22:23:58', '2023-12-16 22:23:58'),
(9, '3', 'Kiwi Kaleidoscope Salad', '700', '2023-12-16 22:24:28', '2023-12-16 22:24:28'),
(10, '9', 'Roasted Cauli Rods', '700', '2023-12-16 22:25:41', '2023-12-16 22:25:41'),
(11, '9', 'CauliChew Delights', '450', '2023-12-16 22:26:20', '2023-12-16 22:26:20'),
(12, '9', 'CauliCrunch Bites', '350', '2023-12-16 22:26:53', '2023-12-16 22:26:53');

-- --------------------------------------------------------

--
-- Table structure for table `kitchens`
--

CREATE TABLE `kitchens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `kichen_catagories_id` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kitchens`
--

INSERT INTO `kitchens` (`id`, `name`, `kichen_catagories_id`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Savory Spaces', 3, 1, '2023-12-16 22:15:59', '2023-12-16 22:15:59'),
(4, 'Kitchen Harmony', 6, 1, '2023-12-16 22:16:42', '2023-12-16 22:16:42'),
(5, 'The Culinary Haven', 5, 0, '2023-12-16 22:17:37', '2023-12-16 22:17:37');

-- --------------------------------------------------------

--
-- Table structure for table `kitchen_catagories`
--

CREATE TABLE `kitchen_catagories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kitchen_catagories`
--

INSERT INTO `kitchen_catagories` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Family Favorites', 1, '2023-12-16 22:10:02', '2023-12-16 22:10:02'),
(4, 'Simple Sweets', 1, '2023-12-16 22:10:32', '2023-12-16 22:10:32'),
(5, 'Quick Meals', 1, '2023-12-16 22:10:56', '2023-12-16 22:10:56'),
(6, 'Weeknight Dinners', 1, '2023-12-16 22:11:58', '2023-12-16 22:11:58'),
(7, 'Breakfast Bliss Boutique', 1, '2023-12-16 22:12:46', '2023-12-16 22:12:46');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_11_12_035213_create_roles_table', 1),
(3, '2023_11_12_043129_create_permissions_table', 1),
(4, '2023_11_13_035122_create_users_table', 1),
(5, '2023_11_25_043202_create_catagories', 1),
(6, '2023_11_25_044114_create_customers', 1),
(7, '2023_11_25_044741_create_designations', 1),
(8, '2023_11_25_045340_create_employees', 1),
(9, '2023_11_25_050018_create_item_varients', 1),
(10, '2023_11_25_051859_create_items', 1),
(11, '2023_11_25_053044_create_kitchen_catagories', 1),
(12, '2023_11_25_053313_create_kitchens', 1),
(13, '2023_11_25_053641_create_order_details', 1),
(14, '2023_11_25_054051_create_order_payments', 1),
(15, '2023_11_25_054811_create_orders', 1),
(16, '2023_11_25_060110_create__purches_details', 1),
(17, '2023_11_25_060252_create__purches_items', 1),
(18, '2023_11_25_060320_create__purches_payments', 1),
(19, '2023_11_25_060344_create__purcheses', 1),
(20, '2023_11_25_060429_create__row_items', 1),
(21, '2023_11_25_060450_create__stocks', 1),
(22, '2023_11_25_060513_create__suppliers', 1),
(23, '2023_11_25_060532_create__units', 1),
(24, '2023_12_06_071756_create_waiters_table', 2),
(25, '2023_12_07_065342_create_bookingtables_table', 3),
(26, '2023_12_10_053856_create_frontendbookings_table', 4),
(27, '2023_12_12_060242_create_products_table', 5),
(28, '2023_12_19_063716_create_orderlists_table', 6),
(29, '2023_12_19_073942_create_orderlists_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `orderlists`
--

CREATE TABLE `orderlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `table_no` varchar(255) DEFAULT NULL,
  `waiter_id` varchar(255) DEFAULT NULL,
  `bill_type` varchar(255) DEFAULT NULL,
  `item` varchar(255) DEFAULT NULL,
  `quentity` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orderlists`
--

INSERT INTO `orderlists` (`id`, `table_no`, `waiter_id`, `bill_type`, `item`, `quentity`, `created_at`, `updated_at`) VALUES
(1, '1', NULL, 'Din_in', NULL, '35', '2023-12-19 02:15:23', '2023-12-19 02:15:23'),
(2, '1', NULL, 'Din_in', NULL, '3', '2023-12-19 02:17:41', '2023-12-19 02:17:41'),
(3, '1', NULL, 'Din_in', NULL, '35', '2023-12-19 02:21:34', '2023-12-19 02:21:34'),
(4, '1', NULL, 'Din_in', NULL, '35', '2023-12-19 02:23:50', '2023-12-19 02:23:50'),
(5, '1', '5', 'Din_in', '5', '35', '2023-12-19 02:28:54', '2023-12-19 02:28:54'),
(6, '1', '5', NULL, '5', '35', '2023-12-19 02:29:55', '2023-12-19 02:29:55'),
(7, '1', '5', 'Din_in', '3', '35', '2023-12-19 02:33:31', '2023-12-19 02:33:31'),
(8, '1', '5', 'Din_in', '4', '35', '2023-12-19 02:37:23', '2023-12-19 02:37:23');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `sub_amount` varchar(255) DEFAULT NULL,
  `discount` decimal(10,2) DEFAULT NULL,
  `order_date` date NOT NULL,
  `order_status` tinyint(1) DEFAULT NULL,
  `payment` varchar(255) DEFAULT NULL,
  `total_amount` varchar(255) DEFAULT NULL,
  `waiter_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `sub_amount`, `discount`, `order_date`, `order_status`, `payment`, `total_amount`, `waiter_id`, `created_at`, `updated_at`) VALUES
(1, 1, '123', '23.00', '2023-12-06', 1, NULL, '11', 111, '2023-12-05 00:42:21', '2023-12-05 00:42:21'),
(2, 1, '123', '23.00', '2023-12-13', NULL, NULL, '11', 11, '2023-12-05 00:47:39', '2023-12-05 00:47:39'),
(3, 2, '1800', '180.00', '2023-12-20', 1, '1620', '1620', 5, '2023-12-20 01:01:13', '2023-12-20 01:01:13');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `varient_id` int(11) DEFAULT NULL,
  `quaintity` int(11) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `item_id`, `varient_id`, `quaintity`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, 54, '23', '2023-12-05 00:35:02', '2023-12-06 23:18:45'),
(2, 1, 1, NULL, 54, '23', '2023-12-05 01:59:01', '2023-12-05 01:59:01'),
(3, 1, 1, NULL, 54, '23', '2023-12-06 23:13:33', '2023-12-06 23:13:33'),
(4, 3, 3, 7, 2, '200', '2023-12-20 01:01:13', '2023-12-20 01:01:13'),
(5, 3, 9, 10, 2, '700', '2023-12-20 01:01:13', '2023-12-20 01:01:13');

-- --------------------------------------------------------

--
-- Table structure for table `order_payments`
--

CREATE TABLE `order_payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `pay_amount` varchar(255) DEFAULT NULL,
  `pay_type` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_payments`
--

INSERT INTO `order_payments` (`id`, `order_id`, `customer_id`, `pay_amount`, `pay_type`, `created_at`, `updated_at`) VALUES
(4, 1, 2, '5000', 'bkash', '2023-12-16 22:37:30', '2023-12-16 22:37:30'),
(5, 2, 3, '10000', 'Nogod', '2023-12-16 22:39:50', '2023-12-16 22:39:50'),
(6, 2, 4, '30000', 'Cash', '2023-12-16 22:40:14', '2023-12-16 22:40:14');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
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
  `image` varchar(255) DEFAULT NULL,
  `name` text DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `image`, `name`, `price`, `created_at`, `updated_at`) VALUES
(1, '6231702362572.jpg', 'Buffet', '23', '2023-12-12 00:29:32', '2023-12-12 00:29:32');

-- --------------------------------------------------------

--
-- Table structure for table `purcheses`
--

CREATE TABLE `purcheses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `supplier_id` int(11) DEFAULT NULL,
  `su_amount` varchar(255) DEFAULT NULL,
  `vat` varchar(255) DEFAULT NULL,
  `discount` varchar(255) DEFAULT NULL,
  `ddiscount_type` varchar(255) DEFAULT NULL,
  `payment` varchar(255) DEFAULT NULL,
  `total_amount` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `purches_details`
--

CREATE TABLE `purches_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `purches_id` int(11) DEFAULT NULL,
  `row_item_id` int(11) DEFAULT NULL,
  `unit_id` int(11) DEFAULT NULL,
  `quentity` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `purches_details`
--

INSERT INTO `purches_details` (`id`, `purches_id`, `row_item_id`, `unit_id`, `quentity`, `price`, `created_at`, `updated_at`) VALUES
(1, 4, 1, 2, '35', '23', '2023-12-05 22:01:03', '2023-12-06 23:45:22'),
(3, 4, 1, 1, '35', '23', '2023-12-06 00:36:06', '2023-12-06 00:36:06');

-- --------------------------------------------------------

--
-- Table structure for table `purches_items`
--

CREATE TABLE `purches_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item_name` varchar(255) DEFAULT NULL,
  `purches_id` int(11) DEFAULT NULL,
  `supplier_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `purches_items`
--

INSERT INTO `purches_items` (`id`, `item_name`, `purches_id`, `supplier_id`, `created_at`, `updated_at`) VALUES
(2, 'chiken fry', 4, 1, '2023-12-06 22:33:46', '2023-12-06 22:52:34'),
(3, 'chiken fry', 4, 1, '2023-12-06 22:51:17', '2023-12-06 22:51:17');

-- --------------------------------------------------------

--
-- Table structure for table `purches_payments`
--

CREATE TABLE `purches_payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `paytype` varchar(255) DEFAULT NULL,
  `payment` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `purches_payments`
--

INSERT INTO `purches_payments` (`id`, `order_id`, `customer_id`, `paytype`, `payment`, `created_at`, `updated_at`) VALUES
(4, 1, 3, 'Nogod', '345', '2023-12-16 22:41:14', '2023-12-16 22:41:14');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `identity` varchar(30) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `identity`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'superadmin', '2023-12-05 00:21:11', NULL),
(2, 'Admin', 'admin', '2023-12-05 00:21:11', NULL),
(3, 'Sales Manager', 'salesmanager', '2023-12-05 00:21:11', NULL),
(4, 'Sales Man', 'salesman', '2023-12-05 00:21:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `row_items`
--

CREATE TABLE `row_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `row_items`
--

INSERT INTO `row_items` (`id`, `name`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Wet', 'Very nic', NULL, '2023-12-05 01:08:51', '2023-12-05 01:09:08'),
(4, 'Appetizers:', 'Onion Rings, Mozzarella Sticks, Chicken Wings', NULL, '2023-12-16 22:43:36', '2023-12-16 22:43:36'),
(5, 'Soups:', 'Tomato Basil Soup, Clam Chowder', NULL, '2023-12-16 22:46:08', '2023-12-16 22:46:08');

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item_id` int(11) DEFAULT NULL,
  `row_id` int(11) DEFAULT NULL,
  `purches_id` int(11) DEFAULT NULL,
  `kitchen_id` int(11) DEFAULT NULL,
  `unit_id` int(11) DEFAULT NULL,
  `quentity` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`id`, `item_id`, `row_id`, `purches_id`, `kitchen_id`, `unit_id`, `quentity`, `price`, `created_at`, `updated_at`) VALUES
(4, 3, 1, 4, 3, 1, '35', '23', '2023-12-18 23:29:23', '2023-12-18 23:29:23'),
(5, NULL, 1, 4, 3, 2, '35', '23', '2023-12-19 00:09:14', '2023-12-19 00:09:14');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sub_amount` varchar(255) DEFAULT NULL,
  `vat` varchar(255) DEFAULT NULL,
  `discount` varchar(255) DEFAULT NULL,
  `discount_type` varchar(255) DEFAULT NULL,
  `payment` varchar(255) DEFAULT NULL,
  `total` varchar(255) DEFAULT NULL,
  `item_quentity` varchar(255) DEFAULT NULL,
  `order_status` tinyint(1) DEFAULT NULL,
  `order_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `sub_amount`, `vat`, `discount`, `discount_type`, `payment`, `total`, `item_quentity`, `order_status`, `order_date`, `created_at`, `updated_at`) VALUES
(1, '123', '23', '435', '23', '12', '64556', '12', 1, '2023-12-19', '2023-12-05 23:58:58', '2023-12-05 23:58:58'),
(2, '123', '23', '435', '2', '345', '64556', '12', 0, '2023-12-11', '2023-12-06 23:46:17', '2023-12-06 23:46:17');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, '1kg', '2023-12-05 01:13:41', '2023-12-05 01:13:41'),
(2, '10kg', '2023-12-06 22:27:46', '2023-12-06 22:28:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_bn` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contact_no_en` varchar(255) NOT NULL,
  `contact_no_bn` varchar(255) DEFAULT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `password` varchar(255) NOT NULL,
  `language` varchar(255) NOT NULL DEFAULT 'en',
  `image` varchar(255) DEFAULT NULL,
  `full_access` tinyint(1) NOT NULL DEFAULT 0 COMMENT '1=>yes 0=>no',
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=>active 2=>inactive',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name_en`, `name_bn`, `email`, `contact_no_en`, `contact_no_bn`, `role_id`, `password`, `language`, `image`, `full_access`, `status`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Noman', NULL, 's@gmail.com', '1234', NULL, 1, '$2y$12$5BkTVR1TcbTIvtzWCXL3Eu7RrMPvwbsyXCd8l9rsbkfo041tnfhqC', 'en', '2191701159304.jpg', 1, 1, NULL, '2023-12-05 00:22:34', '2023-12-05 00:22:34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `waiters`
--

CREATE TABLE `waiters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `designation_id` int(11) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `present_address` text DEFAULT NULL,
  `permanent_address` text DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `waiters`
--

INSERT INTO `waiters` (`id`, `name`, `designation_id`, `contact`, `present_address`, `permanent_address`, `status`, `created_at`, `updated_at`) VALUES
(5, 'Mujahid', 4543, '345643', 'erter', 'ert', 1, '2023-12-19 02:13:28', '2023-12-19 02:13:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookingtables`
--
ALTER TABLE `bookingtables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catagories`
--
ALTER TABLE `catagories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designations`
--
ALTER TABLE `designations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `frontendbookings`
--
ALTER TABLE `frontendbookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `items_catagory_id_index` (`catagory_id`);

--
-- Indexes for table `item_varients`
--
ALTER TABLE `item_varients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kitchens`
--
ALTER TABLE `kitchens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kitchen_catagories`
--
ALTER TABLE `kitchen_catagories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderlists`
--
ALTER TABLE `orderlists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_payments`
--
ALTER TABLE `order_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_role_id_index` (`role_id`);

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purcheses`
--
ALTER TABLE `purcheses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purches_details`
--
ALTER TABLE `purches_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purches_items`
--
ALTER TABLE `purches_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purches_payments`
--
ALTER TABLE `purches_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`),
  ADD UNIQUE KEY `roles_identity_unique` (`identity`);

--
-- Indexes for table `row_items`
--
ALTER TABLE `row_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_contact_no_en_unique` (`contact_no_en`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_contact_no_bn_unique` (`contact_no_bn`),
  ADD KEY `users_role_id_index` (`role_id`);

--
-- Indexes for table `waiters`
--
ALTER TABLE `waiters`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookingtables`
--
ALTER TABLE `bookingtables`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `catagories`
--
ALTER TABLE `catagories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `frontendbookings`
--
ALTER TABLE `frontendbookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `item_varients`
--
ALTER TABLE `item_varients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `kitchens`
--
ALTER TABLE `kitchens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kitchen_catagories`
--
ALTER TABLE `kitchen_catagories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `orderlists`
--
ALTER TABLE `orderlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order_payments`
--
ALTER TABLE `order_payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `purcheses`
--
ALTER TABLE `purcheses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `purches_details`
--
ALTER TABLE `purches_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `purches_items`
--
ALTER TABLE `purches_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `purches_payments`
--
ALTER TABLE `purches_payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `row_items`
--
ALTER TABLE `row_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `stocks`
--
ALTER TABLE `stocks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `waiters`
--
ALTER TABLE `waiters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_catagory_id_foreign` FOREIGN KEY (`catagory_id`) REFERENCES `catagories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permissions`
--
ALTER TABLE `permissions`
  ADD CONSTRAINT `permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
