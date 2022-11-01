-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 30, 2022 at 12:05 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-commerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `desc`, `created_at`, `updated_at`) VALUES
(1, 'A', 'Guitar', NULL, NULL),
(2, 'B', 'Piano', NULL, NULL),
(3, 'C', 'Violin', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

DROP TABLE IF EXISTS `inventory`;
CREATE TABLE IF NOT EXISTS `inventory` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `quantity` int(11) NOT NULL,
  `unit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=304 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `quantity`, `unit`, `created_at`, `updated_at`) VALUES
(101, 10, 'Gitar Yamaha\r\n', NULL, NULL),
(102, 10, 'Gitar Yamaha\r\n', NULL, NULL),
(201, 10, 'Piano Roland\r\n', NULL, NULL),
(202, 10, 'Piano Roland\r\n', NULL, NULL),
(301, 10, 'Violin Scott\r\n', NULL, NULL),
(302, 10, 'Violin Cremona\r\n', NULL, NULL),
(303, 10, 'Violin Cremona\r\n', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_10_25_105608_create_category_table', 1),
(6, '2022_10_26_042821_create_payment', 1),
(7, '2022_10_26_045938_create_inventory', 1),
(8, '2022_10_26_050215_create_product', 1),
(9, '2022_10_26_051212_create_shopping_cart', 1),
(10, '2022_10_26_051642_create_order_details', 1),
(11, '2022_10_26_051843_create_order_items', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

DROP TABLE IF EXISTS `order_details`;
CREATE TABLE IF NOT EXISTS `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `total` int(11) NOT NULL,
  `payment_id` bigint(20) UNSIGNED NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `order_details_user_id_foreign` (`user_id`),
  KEY `order_details_payment_id_foreign` (`payment_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

DROP TABLE IF EXISTS `order_items`;
CREATE TABLE IF NOT EXISTS `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `order_items_order_id_foreign` (`order_id`),
  KEY `order_items_product_id_foreign` (`product_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `provider`, `created_at`, `updated_at`) VALUES
(1, 'Visa', NULL, NULL),
(2, 'Ovo', NULL, NULL),
(3, 'Gopay', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(9999) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sku` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `inventory_id` bigint(20) UNSIGNED NOT NULL,
  `price` int(11) NOT NULL,
  `image_path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `product_category_id_foreign` (`category_id`),
  KEY `product_inventory_id_foreign` (`inventory_id`)
) ENGINE=MyISAM AUTO_INCREMENT=314 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `desc`, `sku`, `category_id`, `inventory_id`, `price`, `image_path`, `created_at`, `updated_at`) VALUES
(111, 'Yamaha FS400C Natural Satin Gitar Akustik - Smokey Black\r\n', 'FS400C menawarkan kualitas dan suara seperti semua alat musik akustik Yamaha yang modern dan elegan. Bentuk bodi concert dengan cutaway memastikan playability yang nyaman.\r\n', '101', 1, 101, 1400000, '', NULL, NULL),
(112, 'Gitar Akustik Elektrik EQ YAMAHA APX600\r\n', 'The archetypal APX, the 600 series combines the outstanding comfort and perfect on-stage tone of the APX500 with\r\n- Thin Body and Cutaway For Excellent Playability\r\n- 634mm Scale Length for Enhanced Comfort\r\n- Narrower String Spacing Makes Stretching for Chords Easier\r\n- New Bracing Pattern For More Powerful Bass Response\r\n- Stage-focused Pickup Sound to Cut Through a Mix\r\n- Inlaid Soundhole Rosette\r\n', '102\r\n', 1, 102, 2599000, '', NULL, NULL),
(211, 'Roland GO:PIANO88 Digital Piano (GO-88P)\r\n', 'GO:PIANO88 juga dilengkapi Bluetooth® speaker berkualitas tinggi yang terhubung ke ponsel cerdas Anda untuk membuat solusi pembelajaran yang sederhana dan ringkas. Setelah terhubung, Anda dapat mulai menjelajahi konten online gratis yang membuat belajar lebih cepat dan lebih menyenangkan - termasuk pelajaran piano online, karaoke, dan video tutorial untuk lagu-lagu favorit Anda - atau cukup streaming playlist Anda dan jamming. Temukan ruang, ambil ponsel cerdas Anda, dan mulai perjalanan musik Anda dengan GO:PIANO88.', '201', 2, 202, 7040000, '', NULL, NULL),
(212, 'Roland RP701 Digital Piano (White)\r\n', 'RP701 juga dirancang agar sangat intuitif untuk digunakan sehingga pemain yang lebih muda pun dapat langsung bergabung. Ikon yang mudah dibaca dan panel depan yang rapi memastikan bahwa fokusnya adalah bermain dan bersenang-senang, bukan membaca manual pemiliknya. Dan dengan konektivitas Bluetooth bawaan untuk streaming musik dari ponsel cerdas Anda dan mengakses dunia aplikasi, selalu ada sesuatu yang baru untuk dicoba dan membuat semua orang termotivasi. Penuhi ruangan dengan musik melalui speaker onboard yang bertenaga, pertajam keterampilan Anda secara pribadi dengan Headphones 3D Ambience yang imersif, atau cukup hargai tampilan tradisional piano kelas atas yang menghadirkan nada kecanggihan ke rumah Anda.', '202\r\n', 2, 202, 15800000, '', NULL, NULL),
(311, 'Scott Cao 150 - Violin/Biola 4/4\r\n', 'Salah satu tipe violin dari produsen violin terkemuka, Scott Cao. Violin ini cocok untuk advanced student yang sedang beralih dari violin pemula ke violin yang lebih bagus.\r\nTerbuat dari material solid wood pilihan dengan kualitas pengerjaan yang sangat baik.\r\n', '301', 3, 301, 4675000, '', NULL, NULL),
(312, 'Cremona Cervini Biola Klasik / Classic Violin (4/4) HV-100\r\n', 'Spesifikasi :\r\nBack & Sides: Maple\r\nBow: AB-100\r\nBridge: Aged Maple\r\nCase: Standard Lightweight Semi-shaped Foam\r\nChinrest: Dyed Hardwood / Standard\r\nFingerboard: Dyed Hardwood\r\nFinish: Traditional Red\r\nNeck and Finish: Solid Maple\r\nNumber of Back Pcs: One-piece\r\nNut & Saddle: Dyed Hardwood\r\nPeg: Dyed Hardwood / Standard\r\nPurfling: Painted\r\nSizes: 4/4-1/4\r\nTailpiece: Composite / Four Built-in Finetuners\r\nTop: Spruce', '302', 3, 302, 1400000, '', NULL, NULL),
(313, 'Cremona Cervini Biola Klasik / Classic Violin (1/4) HV-100', '@ INCLUDE :\r\n* Case\r\n* Rosin\r\n* Bow\r\n', '303', 3, 303, 1360000, '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shopping_cart`
--

DROP TABLE IF EXISTS `shopping_cart`;
CREATE TABLE IF NOT EXISTS `shopping_cart` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `shopping_cart_user_id_foreign` (`user_id`),
  KEY `shopping_cart_product_id_foreign` (`product_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
