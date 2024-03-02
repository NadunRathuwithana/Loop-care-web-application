-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2024 at 04:36 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loop_care_web_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `first_name`, `last_name`, `email`, `role`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Nadun', 'Rathuwithana', 'nadunios98@gmail.com', 'Admin', 0, '2024-02-29 20:08:49', '2024-03-01 03:58:06'),
(4, 'Nadun', 'Rathuwithana', 'admin@loopcare.com', 'Admin', 1, '2024-02-29 21:57:50', '2024-02-29 22:09:18'),
(5, 'Super', 'Admin', 'superadmin@loopcare.lk', 'Admin', 1, '2024-02-29 22:15:07', '2024-03-01 03:58:14');

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `questionId` varchar(255) DEFAULT NULL,
  `answer` varchar(255) DEFAULT NULL,
  `answerType` varchar(255) DEFAULT NULL,
  `isActive` tinyint(1) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `answer_logs`
--

CREATE TABLE `answer_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customerId` varchar(255) DEFAULT NULL,
  `questionId` varchar(255) DEFAULT NULL,
  `answerId` varchar(255) DEFAULT NULL,
  `isActive` tinyint(1) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE `customer_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fName` varchar(255) DEFAULT NULL,
  `lName` varchar(255) DEFAULT NULL,
  `contactNo` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `height` varchar(255) DEFAULT NULL,
  `weight` varchar(255) DEFAULT NULL,
  `isActive` tinyint(1) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userId` varchar(255) DEFAULT NULL,
  `doctorFName` varchar(255) DEFAULT NULL,
  `doctorLName` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `sex` varchar(255) DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `workHospital` varchar(255) DEFAULT NULL,
  `workExperience` varchar(255) DEFAULT NULL,
  `docRegNo` varchar(255) DEFAULT NULL,
  `medicalLicense` varchar(255) DEFAULT NULL,
  `isActive` tinyint(1) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `userId`, `doctorFName`, `doctorLName`, `email`, `sex`, `district`, `workHospital`, `workExperience`, `docRegNo`, `medicalLicense`, `isActive`, `created_at`, `updated_at`) VALUES
(1, '65df740cafbae', 'doca', '1', 'doca@doc.com', 'male', 'Colombo', 'kn', '12', '234567865432', '65df740c975d5-1 (2).png', 1, '2024-02-28 17:57:32', '2024-02-28 17:57:32');

-- --------------------------------------------------------

--
-- Table structure for table `doc_specialities`
--

CREATE TABLE `doc_specialities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doctorId` varchar(255) DEFAULT NULL,
  `specialties` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doc_specialities`
--

INSERT INTO `doc_specialities` (`id`, `doctorId`, `specialties`, `created_at`, `updated_at`) VALUES
(1, '65df740cafbae', 'Orthopedic', '2024-02-28 17:57:32', '2024-02-28 17:57:32'),
(2, '65df740cafbae', 'Physical Medicine and\r\n                                                                Rehabilitation (PM&R)', '2024-02-28 17:57:32', '2024-02-28 17:57:32'),
(3, '65df740cafbae', 'Physical Therapist\r\n                                                                (PT)', '2024-02-28 17:57:32', '2024-02-28 17:57:32'),
(4, '65df740cafbae', 'Chiropractor', '2024-02-28 17:57:32', '2024-02-28 17:57:32');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `goals`
--

CREATE TABLE `goals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `goal_name` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `goal_time` varchar(255) DEFAULT NULL,
  `goal_calories` varchar(255) DEFAULT NULL,
  `goal_difficulty` varchar(255) DEFAULT NULL,
  `goal_image` varchar(255) DEFAULT NULL,
  `short_description` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `goal_ages`
--

CREATE TABLE `goal_ages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `goal_id` int(11) DEFAULT NULL,
  `effective_age` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `goal_management`
--

CREATE TABLE `goal_management` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `goal_restrictions`
--

CREATE TABLE `goal_restrictions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `goal_id` int(11) DEFAULT NULL,
  `restrict` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ingredients`
--

CREATE TABLE `ingredients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meal_id` int(11) DEFAULT NULL,
  `ingredient` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ingredients`
--

INSERT INTO `ingredients` (`id`, `meal_id`, `ingredient`, `created_at`, `updated_at`) VALUES
(1, 22, 'Tempora atque maiores magni dolore laborum nisi.', '2024-03-01 11:28:38', '2024-03-01 11:28:38'),
(2, 23, 'Veniam sint sapiente maiores voluptas corporis.', '2024-03-01 11:29:43', '2024-03-01 11:29:43'),
(3, 23, 'Deleniti laudantium impedit aliquid.', '2024-03-01 11:29:43', '2024-03-01 11:29:43'),
(4, 23, 'Tempore dicta vitae.', '2024-03-01 11:29:43', '2024-03-01 11:29:43'),
(5, 23, 'Qui aspernatur cumque repellat rerum omnis explicabo quasi nobis eum.', '2024-03-01 11:29:43', '2024-03-01 11:29:43'),
(6, 23, 'asdasdasd', '2024-03-01 11:29:43', '2024-03-01 11:29:43'),
(7, 24, 'Sunt aspernatur dicta omnis consectetur quo odio eum.', '2024-03-01 11:57:18', '2024-03-01 11:57:18'),
(8, 25, 'Sunt aspernatur dicta omnis consectetur quo odio eum.', '2024-03-01 11:57:58', '2024-03-01 11:57:58'),
(9, 26, 'Sunt aspernatur dicta omnis consectetur quo odio eum.', '2024-03-01 11:58:01', '2024-03-01 11:58:01'),
(10, 27, 'Sunt aspernatur dicta omnis consectetur quo odio eum.', '2024-03-01 11:58:38', '2024-03-01 11:58:38'),
(11, 28, 'Sunt aspernatur dicta omnis consectetur quo odio eum.', '2024-03-01 11:59:30', '2024-03-01 11:59:30'),
(12, 29, 'Sunt aspernatur dicta omnis consectetur quo odio eum.', '2024-03-01 11:59:55', '2024-03-01 11:59:55'),
(13, 30, 'Sunt aspernatur dicta omnis consectetur quo odio eum.', '2024-03-01 12:00:41', '2024-03-01 12:00:41'),
(14, 31, 'Voluptatibus ut quo temporibus nam inventore doloribus.', '2024-03-01 12:01:14', '2024-03-01 12:01:14'),
(15, 32, 'Facilis accusantium quos aspernatur eos provident.', '2024-03-01 12:02:48', '2024-03-01 12:02:48'),
(16, 33, 'Qui quos mollitia amet.', '2024-03-01 12:11:56', '2024-03-01 12:11:56'),
(17, 34, 'Facilis nostrum at.', '2024-03-01 12:13:57', '2024-03-01 12:13:57'),
(18, 35, 'Veritatis laborum voluptate perferendis quam illo ipsa recusandae voluptatem cum.', '2024-03-01 12:14:48', '2024-03-01 12:14:48'),
(19, 36, 'Ipsa quo praesentium fuga provident non.', '2024-03-01 12:49:36', '2024-03-01 12:49:36'),
(20, 37, 'Est eveniet assumenda corrupti porro distinctio velit laborum cupiditate.', '2024-03-01 12:50:59', '2024-03-01 12:50:59'),
(21, 38, 'Accusamus voluptatem fuga ullam ad id minima at voluptate.', '2024-03-01 12:51:36', '2024-03-01 12:51:36'),
(22, 39, 'Accusamus voluptatem fuga ullam ad id minima at voluptate.', '2024-03-01 12:52:27', '2024-03-01 12:52:27'),
(23, 40, 'Accusamus voluptatem fuga ullam ad id minima at voluptate.', '2024-03-01 12:53:30', '2024-03-01 12:53:30'),
(24, 41, 'Totam nam beatae incidunt reiciendis rem culpa.', '2024-03-01 12:54:27', '2024-03-01 12:54:27'),
(25, 42, 'Totam nam beatae incidunt reiciendis rem culpa.', '2024-03-01 12:56:26', '2024-03-01 12:56:26'),
(26, 43, 'Molestiae adipisci quia alias.', '2024-03-01 12:56:43', '2024-03-01 12:56:43'),
(27, 44, 'Molestiae adipisci quia alias.', '2024-03-01 12:57:11', '2024-03-01 12:57:11'),
(28, 45, 'Molestiae adipisci quia alias.', '2024-03-01 12:58:09', '2024-03-01 12:58:09');

-- --------------------------------------------------------

--
-- Table structure for table `meals`
--

CREATE TABLE `meals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `meal_time` varchar(255) NOT NULL,
  `cover_image` varchar(255) DEFAULT NULL,
  `effective_age` varchar(255) DEFAULT NULL,
  `restricted_diseases` text DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `ingredients` text DEFAULT NULL,
  `serving_size` varchar(255) DEFAULT NULL,
  `total_calories` varchar(255) DEFAULT NULL,
  `total_fat` varchar(255) DEFAULT NULL,
  `total_sugar` varchar(255) DEFAULT NULL,
  `total_protein` varchar(255) DEFAULT NULL,
  `total_carbohydrate` varchar(255) DEFAULT NULL,
  `making_instructions` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `meal_ages`
--

CREATE TABLE `meal_ages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meal_id` int(11) DEFAULT NULL,
  `effective_age` varchar(50) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `meal_ages`
--

INSERT INTO `meal_ages` (`id`, `meal_id`, `effective_age`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 30, '21-30', NULL, '2024-03-01 12:00:41', '2024-03-01 12:00:41'),
(2, 31, '21-30', NULL, '2024-03-01 12:01:14', '2024-03-01 12:01:14'),
(3, 31, '31-40', NULL, '2024-03-01 12:01:14', '2024-03-01 12:01:14'),
(4, 31, '41-50', NULL, '2024-03-01 12:01:14', '2024-03-01 12:01:14'),
(5, 31, '61-70', NULL, '2024-03-01 12:01:14', '2024-03-01 12:01:14'),
(6, 31, '70+', NULL, '2024-03-01 12:01:14', '2024-03-01 12:01:14'),
(7, 32, '21-30', NULL, '2024-03-01 12:02:48', '2024-03-01 12:02:48'),
(8, 32, '31-40', NULL, '2024-03-01 12:02:48', '2024-03-01 12:02:48'),
(9, 32, '41-50', NULL, '2024-03-01 12:02:48', '2024-03-01 12:02:48'),
(10, 33, NULL, NULL, '2024-03-01 12:11:56', '2024-03-01 12:11:56'),
(11, 33, NULL, NULL, '2024-03-01 12:11:56', '2024-03-01 12:11:56'),
(12, 33, NULL, NULL, '2024-03-01 12:11:56', '2024-03-01 12:11:56'),
(13, 34, NULL, NULL, '2024-03-01 12:13:57', '2024-03-01 12:13:57'),
(14, 34, '31-40', NULL, '2024-03-01 12:13:57', '2024-03-01 12:13:57'),
(15, 34, '41-50', NULL, '2024-03-01 12:13:57', '2024-03-01 12:13:57'),
(16, 34, '61-70', NULL, '2024-03-01 12:13:57', '2024-03-01 12:13:57'),
(17, 34, '70+', NULL, '2024-03-01 12:13:57', '2024-03-01 12:13:57'),
(18, 35, '41-50', NULL, '2024-03-01 12:14:48', '2024-03-01 12:14:48'),
(19, 35, '51-60', NULL, '2024-03-01 12:14:48', '2024-03-01 12:14:48'),
(20, 35, '61-70', NULL, '2024-03-01 12:14:48', '2024-03-01 12:14:48'),
(21, 36, '61-70', NULL, '2024-03-01 12:49:36', '2024-03-01 12:49:36'),
(22, 37, NULL, NULL, '2024-03-01 12:50:59', '2024-03-01 12:50:59'),
(23, 37, '21-30', NULL, '2024-03-01 12:50:59', '2024-03-01 12:50:59'),
(24, 37, '31-40', NULL, '2024-03-01 12:50:59', '2024-03-01 12:50:59'),
(25, 37, '41-50', NULL, '2024-03-01 12:50:59', '2024-03-01 12:50:59'),
(26, 37, '61-70', NULL, '2024-03-01 12:50:59', '2024-03-01 12:50:59'),
(27, 37, '70+', NULL, '2024-03-01 12:50:59', '2024-03-01 12:50:59'),
(28, 38, '21-30', NULL, '2024-03-01 12:51:36', '2024-03-01 12:51:36'),
(29, 38, '41-50', NULL, '2024-03-01 12:51:36', '2024-03-01 12:51:36'),
(30, 39, '21-30', NULL, '2024-03-01 12:52:27', '2024-03-01 12:52:27'),
(31, 39, '41-50', NULL, '2024-03-01 12:52:27', '2024-03-01 12:52:27'),
(32, 40, '21-30', NULL, '2024-03-01 12:53:30', '2024-03-01 12:53:30'),
(33, 40, '41-50', NULL, '2024-03-01 12:53:30', '2024-03-01 12:53:30'),
(34, 41, '21-30', NULL, '2024-03-01 12:54:27', '2024-03-01 12:54:27'),
(35, 41, '31-40', NULL, '2024-03-01 12:54:27', '2024-03-01 12:54:27'),
(36, 41, '41-50', NULL, '2024-03-01 12:54:27', '2024-03-01 12:54:27'),
(37, 41, '51-60', NULL, '2024-03-01 12:54:27', '2024-03-01 12:54:27'),
(38, 41, '61-70', NULL, '2024-03-01 12:54:27', '2024-03-01 12:54:27'),
(39, 42, '21-30', NULL, '2024-03-01 12:56:26', '2024-03-01 12:56:26'),
(40, 42, '31-40', NULL, '2024-03-01 12:56:26', '2024-03-01 12:56:26'),
(41, 42, '41-50', NULL, '2024-03-01 12:56:26', '2024-03-01 12:56:26'),
(42, 42, '51-60', NULL, '2024-03-01 12:56:26', '2024-03-01 12:56:26'),
(43, 42, '61-70', NULL, '2024-03-01 12:56:26', '2024-03-01 12:56:26'),
(44, 43, NULL, NULL, '2024-03-01 12:56:43', '2024-03-01 12:56:43'),
(45, 43, '31-40', NULL, '2024-03-01 12:56:43', '2024-03-01 12:56:43'),
(46, 43, '51-60', NULL, '2024-03-01 12:56:43', '2024-03-01 12:56:43'),
(47, 44, NULL, NULL, '2024-03-01 12:57:11', '2024-03-01 12:57:11'),
(48, 44, '31-40', NULL, '2024-03-01 12:57:11', '2024-03-01 12:57:11'),
(49, 44, '51-60', NULL, '2024-03-01 12:57:11', '2024-03-01 12:57:11'),
(50, 45, NULL, NULL, '2024-03-01 12:58:09', '2024-03-01 12:58:09'),
(51, 45, '31-40', NULL, '2024-03-01 12:58:09', '2024-03-01 12:58:09'),
(52, 45, '51-60', NULL, '2024-03-01 12:58:09', '2024-03-01 12:58:09');

-- --------------------------------------------------------

--
-- Table structure for table `meal_management`
--

CREATE TABLE `meal_management` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meal_name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `meal_time` varchar(255) NOT NULL,
  `meal_image` varchar(255) DEFAULT NULL,
  `short_description` varchar(255) NOT NULL,
  `serving_size` varchar(255) NOT NULL,
  `calories` varchar(255) NOT NULL,
  `fat` varchar(255) NOT NULL,
  `sugar` varchar(255) NOT NULL,
  `protein` varchar(255) NOT NULL,
  `carbohydrate` varchar(255) NOT NULL,
  `instructions` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `meal_management`
--

INSERT INTO `meal_management` (`id`, `meal_name`, `category`, `meal_time`, `meal_image`, `short_description`, `serving_size`, `calories`, `fat`, `sugar`, `protein`, `carbohydrate`, `instructions`, `is_active`, `created_at`, `updated_at`) VALUES
(2, 'Manley Keebler', 'Weight Gain', 'Snack', 'WhatsApp Image 2024-02-29 at 21.37.30_486855e3.jpg', 'Labore nesciunt necessitatibus.', 'Kentucky', 'Libero commodi animi laboriosam perferendis neque reiciendis.', 'null', 'Vel autem fuga corporis ipsam quos magnam velit sunt dolor.', 'Vero culpa harum quis repellendus velit tempora commodi mollitia rerum.', 'Nebraska', 'Temporibus inventore harum dignissimos blanditiis odio dicta dolorem voluptatem error.', 1, '2024-03-01 08:17:30', '2024-03-01 08:17:30'),
(3, 'Manley Keebler', 'Weight Gain', 'Snack', 'WhatsApp Image 2024-02-29 at 21.37.30_486855e3.jpg', 'Labore nesciunt necessitatibus.', 'Kentucky', 'Libero commodi animi laboriosam perferendis neque reiciendis.', 'null', 'Vel autem fuga corporis ipsam quos magnam velit sunt dolor.', 'Vero culpa harum quis repellendus velit tempora commodi mollitia rerum.', 'Nebraska', 'Temporibus inventore harum dignissimos blanditiis odio dicta dolorem voluptatem error.', 1, '2024-03-01 08:17:41', '2024-03-01 08:17:41'),
(4, '6652 Heller Ports', 'Weight Loss', 'Snack', 'WhatsApp Image 2024-02-29 at 21.37.30_486855e3.jpg', 'Illo sit iste.', 'Nevada', 'Nihil illo quis.', 'null', 'Dolor placeat unde sunt quidem explicabo aut reiciendis provident fugit.', 'Architecto consequuntur eos earum corrupti.', 'South Dakota', 'Distinctio eos eaque cum autem.', 1, '2024-03-01 10:19:59', '2024-03-01 10:19:59'),
(5, '500 Wilford Valley', 'Weight Loss', 'Dinner', 'WhatsApp Image 2024-02-29 at 21.37.30_486855e3.jpg', 'Quasi quo possimus.', 'Utah', 'Quidem id quas dolore ipsam tempora aliquid velit.', 'null', 'Velit voluptas quisquam natus ipsum amet placeat harum ducimus ullam.', 'Explicabo ratione ducimus quod quisquam distinctio repellendus nesciunt quo nemo.', 'Illinois', 'Non sint quas voluptate praesentium dolores reprehenderit.', 1, '2024-03-01 10:22:40', '2024-03-01 10:22:40'),
(6, '6333 Ashtyn Camp', 'Weight Gain', 'Snack', 'WhatsApp Image 2024-02-29 at 21.37.30_486855e3.jpg', 'Tenetur expedita in perferendis ipsam.', 'Kansas', 'Sequi sapiente at neque esse sequi tempore nihil veritatis accusamus.', 'null', 'Libero sed numquam voluptatibus aliquid culpa impedit a voluptatum vel.', 'Corrupti ex quis similique iste consequuntur itaque perspiciatis.', 'Iowa', 'Ipsa magnam officia fuga ducimus esse temporibus molestias.', 1, '2024-03-01 10:58:32', '2024-03-01 10:58:32'),
(7, '10715 Wilfredo Glens', 'Weight Loss', 'Lunch', 'WhatsApp Image 2024-02-29 at 21.37.30_486855e3.jpg', 'Et saepe quis quas ut molestiae ad soluta quis vitae.', 'Tennessee', 'At voluptate ipsum laudantium.', 'null', 'Est eligendi esse ratione vitae asperiores aut impedit.', 'Dignissimos porro eaque accusantium dolorem commodi asperiores totam.', 'Alaska', 'Fuga totam sed tempore quidem nostrum labore sapiente esse.', 1, '2024-03-01 11:07:49', '2024-03-01 11:07:49'),
(8, '17247 Hirthe Key', 'Weight Loss', 'Lunch', 'WhatsApp Image 2024-02-29 at 21.37.30_486855e3.jpg', 'Dolores voluptatum necessitatibus.', 'Illinois', 'Ex nihil assumenda esse ducimus quaerat non accusamus.', 'null', 'Delectus molestiae dignissimos nulla distinctio delectus rem deleniti aliquid.', 'Consectetur magni explicabo.', 'Iowa', 'Magnam voluptas facilis sit dignissimos.', 1, '2024-03-01 11:08:13', '2024-03-01 11:08:13'),
(9, '377 Marks Park', 'Weight Gain', 'Dinner', 'WhatsApp Image 2024-02-29 at 21.37.30_486855e3.jpg', 'Ducimus illum debitis quisquam laudantium ut tenetur eveniet recusandae possimus.', 'Alabama', 'Tempore dolore adipisci eum nobis accusantium atque modi adipisci.', 'null', 'Id quisquam hic quia facere assumenda.', 'Exercitationem tempora impedit cum excepturi porro est ab cumque fuga.', 'Washington', 'Sed aut laboriosam non libero magnam iure voluptatem officiis labore.', 1, '2024-03-01 11:10:25', '2024-03-01 11:10:25'),
(10, '59859 Donavon Common', 'Weight Loss', 'Lunch', 'WhatsApp Image 2024-02-29 at 21.37.30_486855e3.jpg', 'Soluta sint doloribus aperiam ratione doloremque officia ipsa ab dolor.', 'Nebraska', 'Hic in praesentium amet fuga assumenda vel harum ipsum expedita.', 'null', 'Et error similique optio praesentium sed nisi debitis veritatis cum.', 'Rerum qui enim ipsam pariatur impedit molestias dignissimos in.', 'Maryland', 'Similique accusamus occaecati natus architecto possimus harum quasi corporis velit.', 1, '2024-03-01 11:13:06', '2024-03-01 11:13:06'),
(11, '58474 Hegmann Mountain', 'Weight Loss', 'Snack', 'WhatsApp Image 2024-02-29 at 21.37.30_486855e3.jpg', 'Iste quod natus aliquid esse unde voluptatem eligendi.', 'Ohio', 'Alias enim officiis facilis.', 'null', 'Dolorem culpa sunt labore sint.', 'Adipisci sed ea veniam distinctio.', 'Minnesota', 'Vel modi itaque temporibus quam aliquid vero.', 1, '2024-03-01 11:17:27', '2024-03-01 11:17:27'),
(12, '8015 Schuppe Burg', 'Weight Gain', 'Dinner', 'WhatsApp Image 2024-02-29 at 21.37.30_486855e3.jpg', 'Eius nulla magni perferendis quam magnam deleniti nobis.', 'North Dakota', 'Quisquam enim in quaerat deleniti.', 'null', 'Voluptatum neque explicabo reprehenderit veniam ab sapiente.', 'Mollitia at provident tenetur.', 'North Dakota', 'Eum aliquid tempore sequi saepe.', 1, '2024-03-01 11:19:40', '2024-03-01 11:19:40'),
(13, '2123 Cortez Wells', 'Weight Loss', 'Lunch', 'WhatsApp Image 2024-02-29 at 21.37.30_486855e3.jpg', 'Dolorum officiis cum iusto quo fugit.', 'Nebraska', 'Quod numquam quidem voluptas ipsa nihil reprehenderit.', 'null', 'Beatae qui cumque.', 'Necessitatibus quia assumenda et officia voluptates quos dolorum deserunt numquam.', 'Maryland', 'Iure similique non voluptatem similique.', 1, '2024-03-01 11:20:24', '2024-03-01 11:20:24'),
(14, '2123 Cortez Wells', 'Weight Loss', 'Lunch', 'WhatsApp Image 2024-02-29 at 21.37.30_486855e3.jpg', 'Dolorum officiis cum iusto quo fugit.', 'Nebraska', 'Quod numquam quidem voluptas ipsa nihil reprehenderit.', 'null', 'Beatae qui cumque.', 'Necessitatibus quia assumenda et officia voluptates quos dolorum deserunt numquam.', 'Maryland', 'Iure similique non voluptatem similique.', 1, '2024-03-01 11:20:49', '2024-03-01 11:20:49'),
(15, '2123 Cortez Wells', 'Weight Loss', 'Lunch', 'WhatsApp Image 2024-02-29 at 21.37.30_486855e3.jpg', 'Dolorum officiis cum iusto quo fugit.', 'Nebraska', 'Quod numquam quidem voluptas ipsa nihil reprehenderit.', 'null', 'Beatae qui cumque.', 'Necessitatibus quia assumenda et officia voluptates quos dolorum deserunt numquam.', 'Maryland', 'Iure similique non voluptatem similique.', 1, '2024-03-01 11:21:01', '2024-03-01 11:21:01'),
(16, '2123 Cortez Wells', 'Weight Loss', 'Lunch', 'WhatsApp Image 2024-02-29 at 21.37.30_486855e3.jpg', 'Dolorum officiis cum iusto quo fugit.', 'Nebraska', 'Quod numquam quidem voluptas ipsa nihil reprehenderit.', 'null', 'Beatae qui cumque.', 'Necessitatibus quia assumenda et officia voluptates quos dolorum deserunt numquam.', 'Maryland', 'Iure similique non voluptatem similique.', 1, '2024-03-01 11:21:35', '2024-03-01 11:21:35'),
(17, '2123 Cortez Wells', 'Weight Loss', 'Lunch', 'WhatsApp Image 2024-02-29 at 21.37.30_486855e3.jpg', 'Dolorum officiis cum iusto quo fugit.', 'Nebraska', 'Quod numquam quidem voluptas ipsa nihil reprehenderit.', 'null', 'Beatae qui cumque.', 'Necessitatibus quia assumenda et officia voluptates quos dolorum deserunt numquam.', 'Maryland', 'Iure similique non voluptatem similique.', 1, '2024-03-01 11:21:46', '2024-03-01 11:21:46'),
(18, '2123 Cortez Wells', 'Weight Loss', 'Lunch', 'WhatsApp Image 2024-02-29 at 21.37.30_486855e3.jpg', 'Dolorum officiis cum iusto quo fugit.', 'Nebraska', 'Quod numquam quidem voluptas ipsa nihil reprehenderit.', 'null', 'Beatae qui cumque.', 'Necessitatibus quia assumenda et officia voluptates quos dolorum deserunt numquam.', 'Maryland', 'Iure similique non voluptatem similique.', 1, '2024-03-01 11:26:04', '2024-03-01 11:26:04'),
(19, '2123 Cortez Wells', 'Weight Loss', 'Lunch', 'WhatsApp Image 2024-02-29 at 21.37.30_486855e3.jpg', 'Dolorum officiis cum iusto quo fugit.', 'Nebraska', 'Quod numquam quidem voluptas ipsa nihil reprehenderit.', 'null', 'Beatae qui cumque.', 'Necessitatibus quia assumenda et officia voluptates quos dolorum deserunt numquam.', 'Maryland', 'Iure similique non voluptatem similique.', 1, '2024-03-01 11:26:59', '2024-03-01 11:26:59'),
(20, '2123 Cortez Wells', 'Weight Loss', 'Lunch', 'WhatsApp Image 2024-02-29 at 21.37.30_486855e3.jpg', 'Dolorum officiis cum iusto quo fugit.', 'Nebraska', 'Quod numquam quidem voluptas ipsa nihil reprehenderit.', 'null', 'Beatae qui cumque.', 'Necessitatibus quia assumenda et officia voluptates quos dolorum deserunt numquam.', 'Maryland', 'Iure similique non voluptatem similique.', 1, '2024-03-01 11:27:13', '2024-03-01 11:27:13'),
(21, '2123 Cortez Wells', 'Weight Loss', 'Lunch', 'WhatsApp Image 2024-02-29 at 21.37.30_486855e3.jpg', 'Dolorum officiis cum iusto quo fugit.', 'Nebraska', 'Quod numquam quidem voluptas ipsa nihil reprehenderit.', 'null', 'Beatae qui cumque.', 'Necessitatibus quia assumenda et officia voluptates quos dolorum deserunt numquam.', 'Maryland', 'Iure similique non voluptatem similique.', 1, '2024-03-01 11:27:25', '2024-03-01 11:27:25'),
(22, '2123 Cortez Wells', 'Weight Loss', 'Lunch', 'WhatsApp Image 2024-02-29 at 21.37.30_486855e3.jpg', 'Dolorum officiis cum iusto quo fugit.', 'Nebraska', 'Quod numquam quidem voluptas ipsa nihil reprehenderit.', 'null', 'Beatae qui cumque.', 'Necessitatibus quia assumenda et officia voluptates quos dolorum deserunt numquam.', 'Maryland', 'Iure similique non voluptatem similique.', 1, '2024-03-01 11:28:38', '2024-03-01 11:28:38'),
(23, '19538 Brakus Unions', 'Weight Loss', 'Lunch', 'Visa_Inc._logo.svg.png', 'Autem quo aspernatur nam doloremque ipsum placeat.', 'Florida', 'Aut voluptatibus iste voluptatibus eligendi quisquam unde.', 'null', 'Odit ipsa cum consequuntur maiores consequuntur ab perferendis harum incidunt.', 'Optio amet ratione quos pariatur modi minima nihil.', 'Oklahoma', 'Velit repellat iure sunt.', 1, '2024-03-01 11:29:43', '2024-03-01 11:29:43'),
(24, '7460 Claudie Underpass', 'Weight Loss', 'Snack', 'WhatsApp Image 2024-02-29 at 21.37.30_486855e3.jpg', 'Consequatur placeat necessitatibus blanditiis.', 'Idaho', 'Distinctio quae ullam saepe illum molestiae fugit aliquid.', 'null', 'Ipsum doloremque optio voluptas nam.', 'Commodi quis ullam.', 'New Mexico', 'Recusandae corporis sed nulla consequuntur voluptatem ab ratione tempora occaecati.', 1, '2024-03-01 11:57:18', '2024-03-01 11:57:18'),
(25, '7460 Claudie Underpass', 'Weight Loss', 'Snack', 'WhatsApp Image 2024-02-29 at 21.37.30_486855e3.jpg', 'Consequatur placeat necessitatibus blanditiis.', 'Idaho', 'Distinctio quae ullam saepe illum molestiae fugit aliquid.', 'null', 'Ipsum doloremque optio voluptas nam.', 'Commodi quis ullam.', 'New Mexico', 'Recusandae corporis sed nulla consequuntur voluptatem ab ratione tempora occaecati.', 1, '2024-03-01 11:57:58', '2024-03-01 11:57:58'),
(26, '7460 Claudie Underpass', 'Weight Loss', 'Snack', 'WhatsApp Image 2024-02-29 at 21.37.30_486855e3.jpg', 'Consequatur placeat necessitatibus blanditiis.', 'Idaho', 'Distinctio quae ullam saepe illum molestiae fugit aliquid.', 'null', 'Ipsum doloremque optio voluptas nam.', 'Commodi quis ullam.', 'New Mexico', 'Recusandae corporis sed nulla consequuntur voluptatem ab ratione tempora occaecati.', 1, '2024-03-01 11:58:01', '2024-03-01 11:58:01'),
(27, '7460 Claudie Underpass', 'Weight Loss', 'Snack', 'WhatsApp Image 2024-02-29 at 21.37.30_486855e3.jpg', 'Consequatur placeat necessitatibus blanditiis.', 'Idaho', 'Distinctio quae ullam saepe illum molestiae fugit aliquid.', 'null', 'Ipsum doloremque optio voluptas nam.', 'Commodi quis ullam.', 'New Mexico', 'Recusandae corporis sed nulla consequuntur voluptatem ab ratione tempora occaecati.', 1, '2024-03-01 11:58:38', '2024-03-01 11:58:38'),
(28, '7460 Claudie Underpass', 'Weight Loss', 'Snack', 'WhatsApp Image 2024-02-29 at 21.37.30_486855e3.jpg', 'Consequatur placeat necessitatibus blanditiis.', 'Idaho', 'Distinctio quae ullam saepe illum molestiae fugit aliquid.', 'null', 'Ipsum doloremque optio voluptas nam.', 'Commodi quis ullam.', 'New Mexico', 'Recusandae corporis sed nulla consequuntur voluptatem ab ratione tempora occaecati.', 1, '2024-03-01 11:59:30', '2024-03-01 11:59:30'),
(29, '7460 Claudie Underpass', 'Weight Loss', 'Snack', 'WhatsApp Image 2024-02-29 at 21.37.30_486855e3.jpg', 'Consequatur placeat necessitatibus blanditiis.', 'Idaho', 'Distinctio quae ullam saepe illum molestiae fugit aliquid.', 'null', 'Ipsum doloremque optio voluptas nam.', 'Commodi quis ullam.', 'New Mexico', 'Recusandae corporis sed nulla consequuntur voluptatem ab ratione tempora occaecati.', 1, '2024-03-01 11:59:55', '2024-03-01 11:59:55'),
(30, '7460 Claudie Underpass', 'Weight Loss', 'Snack', 'WhatsApp Image 2024-02-29 at 21.37.30_486855e3.jpg', 'Consequatur placeat necessitatibus blanditiis.', 'Idaho', 'Distinctio quae ullam saepe illum molestiae fugit aliquid.', 'null', 'Ipsum doloremque optio voluptas nam.', 'Commodi quis ullam.', 'New Mexico', 'Recusandae corporis sed nulla consequuntur voluptatem ab ratione tempora occaecati.', 1, '2024-03-01 12:00:41', '2024-03-01 12:00:41'),
(31, '47301 Katarina River', 'Weight Loss', 'Lunch', 'WhatsApp Image 2024-02-29 at 21.37.30_486855e3.jpg', 'Excepturi dolore unde.', 'Michigan', 'Modi ipsam tempora nostrum nisi provident.', 'null', 'Nemo dolore rem.', 'Modi libero ex.', 'Washington', 'Voluptatum architecto porro voluptatum eaque voluptates laboriosam delectus.', 1, '2024-03-01 12:01:14', '2024-03-01 12:01:14'),
(32, '7024 Trent Parkways', 'Weight Loss', 'Lunch', 'WhatsApp Image 2024-02-29 at 21.37.30_486855e3.jpg', 'Sunt libero magni fugiat provident dolorem.', 'Wyoming', 'Quia ipsam nostrum dignissimos.', 'null', 'Aliquid earum quo minima.', 'Id deleniti iure dicta delectus corrupti.', 'Alaska', 'Dolore sit sint.', 1, '2024-03-01 12:02:48', '2024-03-01 12:02:48'),
(33, '6990 Hartmann Pine', 'Weight Gain', 'Lunch', 'WhatsApp Image 2024-02-29 at 21.37.30_486855e3.jpg', 'Iste quasi id sed vel.', 'West Virginia', 'Eaque sit animi blanditiis occaecati possimus dignissimos quas omnis labore.', 'null', 'Ex tempore rem accusamus architecto laborum exercitationem odit excepturi.', 'Voluptates nam ab nihil.', 'Montana', 'Sit aliquam modi rerum deserunt.', 1, '2024-03-01 12:11:56', '2024-03-01 12:11:56'),
(34, '677 Rutherford Corner', 'Weight Loss', 'Dinner', 'Visa_Inc._logo.svg.png', 'Dolores labore voluptates hic deleniti aspernatur.', 'Texas', 'Placeat ab voluptate cumque id nam debitis totam quidem at.', 'null', 'Adipisci asperiores id molestiae numquam quasi autem maxime quam doloribus.', 'Aut et quasi modi sunt voluptatem eligendi.', 'Arkansas', 'Molestiae dolor quo nulla ea dignissimos debitis quo magnam.', 1, '2024-03-01 12:13:57', '2024-03-01 12:13:57'),
(35, '554 Kole Haven', 'Weight Loss', 'Lunch', 'WhatsApp Image 2024-02-29 at 21.37.30_486855e3.jpg', 'Sequi sapiente vitae magni ea ipsam numquam mollitia.', 'South Dakota', 'Nam debitis ducimus pariatur omnis sint.', 'null', 'Sapiente iusto explicabo facilis eligendi necessitatibus sequi.', 'Aspernatur sapiente ullam.', 'West Virginia', 'Delectus nesciunt perferendis illum fugiat rerum.', 1, '2024-03-01 12:14:48', '2024-03-01 12:14:48'),
(36, '175 Zemlak Way', 'Weight Loss', 'Snack', NULL, 'Quo voluptatum beatae quia iste similique aspernatur laudantium.', 'Wyoming', 'Natus placeat non.', 'null', 'Maiores temporibus labore.', 'Nesciunt modi voluptas saepe minima magni molestias dolorum ducimus dolores.', 'Rhode Island', 'Exercitationem quasi reiciendis sunt alias neque cumque dolorem tenetur id.', 1, '2024-03-01 12:49:36', '2024-03-01 12:49:36'),
(37, '904 Elda Cove', 'Weight Loss', 'Snack', NULL, 'Odio optio quam magni.', 'Minnesota', 'Ut eligendi numquam eius dolor maiores laudantium perferendis facilis.', 'null', 'Incidunt saepe dignissimos.', 'Laudantium consequatur voluptates porro cumque soluta pariatur.', 'California', 'Delectus explicabo laboriosam numquam nemo sunt consequuntur nulla.', 1, '2024-03-01 12:50:59', '2024-03-01 12:50:59'),
(38, '6759 Santina Forges', 'Normal', 'Breakfast', NULL, 'Aspernatur id tempora quis earum reprehenderit.', 'Idaho', 'Vero labore distinctio aut debitis provident.', 'null', 'Cumque illo aperiam sint maiores distinctio dignissimos quam.', 'Dolor labore odit dolores ipsam deserunt pariatur corrupti.', 'Kentucky', 'Consequuntur excepturi ea aperiam cupiditate aperiam quos error.', 1, '2024-03-01 12:51:36', '2024-03-01 12:51:36'),
(39, '6759 Santina Forges', 'Normal', 'Breakfast', NULL, 'Aspernatur id tempora quis earum reprehenderit.', 'Idaho', 'Vero labore distinctio aut debitis provident.', 'null', 'Cumque illo aperiam sint maiores distinctio dignissimos quam.', 'Dolor labore odit dolores ipsam deserunt pariatur corrupti.', 'Kentucky', 'Consequuntur excepturi ea aperiam cupiditate aperiam quos error.', 1, '2024-03-01 12:52:27', '2024-03-01 12:52:27'),
(40, '6759 Santina Forges', 'Normal', 'Breakfast', NULL, 'Aspernatur id tempora quis earum reprehenderit.', 'Idaho', 'Vero labore distinctio aut debitis provident.', 'null', 'Cumque illo aperiam sint maiores distinctio dignissimos quam.', 'Dolor labore odit dolores ipsam deserunt pariatur corrupti.', 'Kentucky', 'Consequuntur excepturi ea aperiam cupiditate aperiam quos error.', 1, '2024-03-01 12:53:30', '2024-03-01 12:53:30'),
(41, '534 Bahringer Plain', 'Weight Loss', 'Snack', NULL, 'Numquam dolore alias officiis saepe quos quod labore provident ipsam.', 'California', 'Nam temporibus facilis.', 'null', 'Beatae non molestias a suscipit quos rerum incidunt odit.', 'Eos expedita rem dolorum laudantium quaerat facere similique.', 'Oregon', 'Facilis possimus quae vel dolores expedita aut id atque voluptate.', 1, '2024-03-01 12:54:27', '2024-03-01 12:54:27'),
(42, '534 Bahringer Plain', 'Weight Loss', 'Snack', NULL, 'Numquam dolore alias officiis saepe quos quod labore provident ipsam.', 'California', 'Nam temporibus facilis.', 'null', 'Beatae non molestias a suscipit quos rerum incidunt odit.', 'Eos expedita rem dolorum laudantium quaerat facere similique.', 'Oregon', 'Facilis possimus quae vel dolores expedita aut id atque voluptate.', 1, '2024-03-01 12:56:26', '2024-03-01 12:56:26'),
(43, '412 Krajcik Curve', 'Weight Gain', 'Snack', NULL, 'Voluptates numquam ratione ipsum suscipit aperiam.', 'Oklahoma', 'Eveniet error quam itaque enim provident natus repellendus assumenda.', 'null', 'Fuga illo iure nisi beatae quibusdam iste.', 'Ducimus eum quae eius ut facilis illum dignissimos dolorem.', 'Nebraska', 'Quasi veritatis quidem pariatur quam.', 1, '2024-03-01 12:56:43', '2024-03-01 12:56:43'),
(44, '412 Krajcik Curve', 'Weight Gain', 'Snack', NULL, 'Voluptates numquam ratione ipsum suscipit aperiam.', 'Oklahoma', 'Eveniet error quam itaque enim provident natus repellendus assumenda.', 'null', 'Fuga illo iure nisi beatae quibusdam iste.', 'Ducimus eum quae eius ut facilis illum dignissimos dolorem.', 'Nebraska', 'Quasi veritatis quidem pariatur quam.', 1, '2024-03-01 12:57:11', '2024-03-01 12:57:11'),
(45, '412 Krajcik Curve', 'Weight Gain', 'Snack', '45.jpg', 'Voluptates numquam ratione ipsum suscipit aperiam.', 'Oklahoma', 'Eveniet error quam itaque enim provident natus repellendus assumenda.', 'null', 'Fuga illo iure nisi beatae quibusdam iste.', 'Ducimus eum quae eius ut facilis illum dignissimos dolorem.', 'Nebraska', 'Quasi veritatis quidem pariatur quam.', 1, '2024-03-01 12:58:09', '2024-03-01 12:58:10');

-- --------------------------------------------------------

--
-- Table structure for table `meal_restrictions`
--

CREATE TABLE `meal_restrictions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meal_id` int(11) DEFAULT NULL,
  `restrict` varchar(255) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `meal_restrictions`
--

INSERT INTO `meal_restrictions` (`id`, `meal_id`, `restrict`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 33, NULL, NULL, '2024-03-01 12:11:56', '2024-03-01 12:11:56'),
(2, 33, NULL, NULL, '2024-03-01 12:11:56', '2024-03-01 12:11:56'),
(3, 33, NULL, NULL, '2024-03-01 12:11:56', '2024-03-01 12:11:56'),
(4, 34, NULL, NULL, '2024-03-01 12:13:57', '2024-03-01 12:13:57'),
(5, 34, NULL, NULL, '2024-03-01 12:13:57', '2024-03-01 12:13:57'),
(6, 34, NULL, NULL, '2024-03-01 12:13:57', '2024-03-01 12:13:57'),
(7, 34, NULL, NULL, '2024-03-01 12:13:57', '2024-03-01 12:13:57'),
(8, 34, NULL, NULL, '2024-03-01 12:13:57', '2024-03-01 12:13:57'),
(9, 35, 'cholesterol', NULL, '2024-03-01 12:14:48', '2024-03-01 12:14:48'),
(10, 35, 'low-sugar', NULL, '2024-03-01 12:14:48', '2024-03-01 12:14:48'),
(11, 35, 'high-sugar', NULL, '2024-03-01 12:14:48', '2024-03-01 12:14:48'),
(12, 35, 'low-pressure', NULL, '2024-03-01 12:14:48', '2024-03-01 12:14:48'),
(13, 35, 'high-pressure', NULL, '2024-03-01 12:14:48', '2024-03-01 12:14:48'),
(14, 36, 'cholesterol', NULL, '2024-03-01 12:49:36', '2024-03-01 12:49:36'),
(15, 36, 'low-sugar', NULL, '2024-03-01 12:49:36', '2024-03-01 12:49:36'),
(16, 36, 'low-pressure', NULL, '2024-03-01 12:49:36', '2024-03-01 12:49:36'),
(17, 36, 'high-pressure', NULL, '2024-03-01 12:49:36', '2024-03-01 12:49:36'),
(18, 37, 'low-pressure', NULL, '2024-03-01 12:50:59', '2024-03-01 12:50:59'),
(19, 37, 'high-pressure', NULL, '2024-03-01 12:50:59', '2024-03-01 12:50:59'),
(20, 41, 'cholesterol', NULL, '2024-03-01 12:54:27', '2024-03-01 12:54:27'),
(21, 41, 'high-sugar', NULL, '2024-03-01 12:54:27', '2024-03-01 12:54:27'),
(22, 42, 'cholesterol', NULL, '2024-03-01 12:56:26', '2024-03-01 12:56:26'),
(23, 42, 'high-sugar', NULL, '2024-03-01 12:56:26', '2024-03-01 12:56:26'),
(24, 43, 'cholesterol', NULL, '2024-03-01 12:56:43', '2024-03-01 12:56:43'),
(25, 43, 'low-sugar', NULL, '2024-03-01 12:56:43', '2024-03-01 12:56:43'),
(26, 43, 'low-pressure', NULL, '2024-03-01 12:56:43', '2024-03-01 12:56:43'),
(27, 43, 'high-pressure', NULL, '2024-03-01 12:56:43', '2024-03-01 12:56:43'),
(28, 44, 'cholesterol', NULL, '2024-03-01 12:57:11', '2024-03-01 12:57:11'),
(29, 44, 'low-sugar', NULL, '2024-03-01 12:57:11', '2024-03-01 12:57:11'),
(30, 44, 'low-pressure', NULL, '2024-03-01 12:57:11', '2024-03-01 12:57:11'),
(31, 44, 'high-pressure', NULL, '2024-03-01 12:57:11', '2024-03-01 12:57:11'),
(32, 45, 'cholesterol', NULL, '2024-03-01 12:58:09', '2024-03-01 12:58:09'),
(33, 45, 'low-sugar', NULL, '2024-03-01 12:58:09', '2024-03-01 12:58:09'),
(34, 45, 'low-pressure', NULL, '2024-03-01 12:58:09', '2024-03-01 12:58:09'),
(35, 45, 'high-pressure', NULL, '2024-03-01 12:58:09', '2024-03-01 12:58:09');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_08_27_184237_create_questions_table', 1),
(6, '2023_08_27_184303_create_answers_table', 1),
(7, '2023_08_27_184341_create_answer_logs_table', 1),
(8, '2023_08_27_184408_create_customer_details_table', 1),
(9, '2024_02_04_122154_create_question_setups_table', 2),
(10, '2024_02_04_122512_create_questions_answers_table', 2),
(11, '2024_02_24_171624_create_goal_management_table', 2),
(12, '2024_02_25_161434_create_meals_table', 2),
(13, '2024_02_26_214312_create_patients_table', 3),
(14, '2024_02_26_214318_create_doctors_table', 3),
(15, '2024_02_26_214327_create_trainers_table', 3),
(16, '2024_02_26_214347_create_patient_pains_table', 3),
(17, '2024_02_26_214412_create_doc_specialities_table', 3),
(18, '2024_02_26_214421_create_trainer_specialities_table', 3),
(21, '2024_02_29_235447_create_admin_users_table', 4),
(23, '2024_03_01_101949_create_meal_management_table', 5),
(24, '2024_03_01_134958_create_ingredients_table', 6),
(25, '2024_03_01_170407_create_meal_ages_table', 7),
(26, '2024_03_01_173600_create_meal_restrictions_table', 8),
(27, '2024_03_02_003134_create_user_question_answers_table', 9),
(28, '2024_03_01_232155_create_goals_table', 10),
(29, '2024_03_02_015423_create_goal_ages_table', 10),
(30, '2024_03_02_015752_create_goal_restrictions_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userId` varchar(255) DEFAULT NULL,
  `patientFName` varchar(255) DEFAULT NULL,
  `patientLName` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `sex` varchar(255) DEFAULT NULL,
  `height` varchar(255) DEFAULT NULL,
  `weight` varchar(255) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `isActive` tinyint(1) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `userId`, `patientFName`, `patientLName`, `email`, `sex`, `height`, `weight`, `dob`, `isActive`, `created_at`, `updated_at`) VALUES
(6, '65df703fb34aa', 'Chameera', 'Mayura', 'chameera@gmail.com', NULL, '5 feet', '51-60 kg', '1990-01-01', 1, '2024-02-28 17:41:19', '2024-02-28 17:41:19'),
(7, '65e20fc451079', 'Chameera', 'Mayura', '222eera@gmail.com', 'male', '5 feet', '51-60 kg', '1990-01-01', 1, '2024-03-01 17:26:28', '2024-03-01 17:26:28'),
(8, '65e21033367a9', 'Chameera', 'Mayura', '1221meera@gmail.com', 'male', '5 feet', '51-60 kg', '1990-01-01', 1, '2024-03-01 17:28:19', '2024-03-01 17:28:19'),
(9, '65e21727da0ef', 'Chameera', 'Mayura', '555era@gmail.com', 'male', '5 feet', '51-60 kg', '1990-01-01', 1, '2024-03-01 17:57:59', '2024-03-01 17:57:59'),
(10, '65e224aa2d616', 'Chameera', 'Mayura', '44444ameera@gmail.com', 'male', '5 feet', '51-60 kg', '1990-01-01', 1, '2024-03-01 18:55:38', '2024-03-01 18:55:38'),
(11, '65e228fce94a6', 'Chameera', 'Mayura', 'qwqqwqw@gmail.com', 'male', '5 feet', '51-60 kg', '1990-01-01', 1, '2024-03-01 19:14:04', '2024-03-01 19:14:04'),
(12, '65e22f1c770e6', 'Chameera', 'Mayura', 'mwewewhameera@gmail.com', 'male', '5 feet', '51-60 kg', '1990-01-01', 1, '2024-03-01 19:40:12', '2024-03-01 19:40:12'),
(13, '65e2441f9cf6f', 'Nadun', 'Rathuwithana', 'nadun@loopcare.lk', 'male', '5 feet', '51-60 kg', '1990-01-01', 1, '2024-03-01 21:09:51', '2024-03-01 21:09:51');

-- --------------------------------------------------------

--
-- Table structure for table `patient_pains`
--

CREATE TABLE `patient_pains` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patientId` varchar(255) DEFAULT NULL,
  `answer` varchar(255) DEFAULT NULL,
  `question` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patient_pains`
--

INSERT INTO `patient_pains` (`id`, `patientId`, `answer`, `question`, `created_at`, `updated_at`) VALUES
(1, '65df703fb34aa', 'Neck Pain', NULL, '2024-02-28 17:41:19', '2024-02-28 17:41:19'),
(2, '65df703fb34aa', 'Knee Pain', NULL, '2024-02-28 17:41:19', '2024-02-28 17:41:19'),
(3, '65df703fb34aa', 'Elbow Pain', NULL, '2024-02-28 17:41:19', '2024-02-28 17:41:19');

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

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 1, 'authToken', '5dc0c99428a2974f3f733dcc50a59b56a06295bc8f722ef0d00a2ced5d9bbbcb', '[\"*\"]', NULL, NULL, '2023-08-27 19:10:21', '2023-08-27 19:10:21');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `questionNo` varchar(255) DEFAULT NULL,
  `questionName` varchar(255) DEFAULT NULL,
  `userType` varchar(255) DEFAULT NULL,
  `isActive` tinyint(1) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `questionNo`, `questionName`, `userType`, `isActive`, `created_at`, `updated_at`) VALUES
(1, '1', 'patient que 1', 'Patient', 1, NULL, NULL),
(2, '2', 'patient que 2333', 'Patient', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `questions_answers`
--

CREATE TABLE `questions_answers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `quetion_id` varchar(255) DEFAULT NULL,
  `answer` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions_answers`
--

INSERT INTO `questions_answers` (`id`, `quetion_id`, `answer`, `is_active`, `created_by`, `updated_by`, `deleted_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '1', 'අයර්ලන්තය', NULL, 7, NULL, NULL, NULL, '2024-02-28 18:22:11', '2024-02-28 18:22:11'),
(2, '1', 'බස්නාහිර පළාතට මායිම් නොවේ', NULL, 7, NULL, NULL, NULL, '2024-02-28 18:22:11', '2024-02-28 18:22:11'),
(3, '1', 'නිල් සහ කහ', NULL, 7, NULL, NULL, NULL, '2024-02-28 18:22:11', '2024-02-28 18:22:11'),
(4, '1', 'Schindler\'s list', NULL, 7, NULL, NULL, NULL, '2024-02-28 18:22:11', '2024-02-28 18:22:11'),
(5, '2', '10 q1 A', NULL, 7, NULL, NULL, NULL, '2024-02-28 18:22:11', '2024-02-28 18:22:11'),
(6, '2', 'ans 1', NULL, 7, NULL, NULL, NULL, '2024-02-28 18:22:11', '2024-02-28 18:22:11'),
(7, '2', 'ans 2', NULL, 7, NULL, NULL, NULL, '2024-02-28 18:22:11', '2024-02-28 18:22:11'),
(8, '2', 'Answer 1', NULL, 14, NULL, NULL, NULL, '2024-03-02 03:21:46', '2024-03-02 03:21:46'),
(9, '2', 'Answer 2', NULL, 14, NULL, NULL, NULL, '2024-03-02 03:21:46', '2024-03-02 03:21:46'),
(10, '2', 'Answer 3', NULL, 14, NULL, NULL, NULL, '2024-03-02 03:21:46', '2024-03-02 03:21:46');

-- --------------------------------------------------------

--
-- Table structure for table `question_setups`
--

CREATE TABLE `question_setups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `effective_role_type` enum('patient','doctor','trainer') DEFAULT NULL,
  `question` varchar(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `question_setups`
--

INSERT INTO `question_setups` (`id`, `effective_role_type`, `question`, `created_by`, `updated_by`, `deleted_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'patient', 'නාසි සිරකඳවුරක සිටින සිරකරුවන් බේරා ගැනීම සඳහා, නාසි සාමාජිකයෙක් ක්‍රියා කිරීම පදනම් කරගත් ඇකඩමි සම්මාන දිනූ චිත්‍රපටය කුමක් ද?', 7, NULL, NULL, NULL, '2024-02-28 18:22:11', '2024-02-28 18:22:11'),
(2, 'doctor', 'Trainer Q1', 14, NULL, NULL, NULL, '2024-03-02 03:21:46', '2024-03-02 03:21:46');

-- --------------------------------------------------------

--
-- Table structure for table `trainers`
--

CREATE TABLE `trainers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userId` varchar(255) DEFAULT NULL,
  `trainerFName` varchar(255) DEFAULT NULL,
  `trainerLName` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `sex` varchar(255) DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `gymUnit` varchar(255) DEFAULT NULL,
  `workExperience` varchar(255) DEFAULT NULL,
  `regNo` varchar(255) DEFAULT NULL,
  `trainingLicense` varchar(255) DEFAULT NULL,
  `isActive` tinyint(1) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trainers`
--

INSERT INTO `trainers` (`id`, `userId`, `trainerFName`, `trainerLName`, `email`, `sex`, `district`, `gymUnit`, `workExperience`, `regNo`, `trainingLicense`, `isActive`, `created_at`, `updated_at`) VALUES
(1, '65df745f16a32', 'train1', 'we', 'train.2@gmail.com', 'male', 'Colombo', 'wewe', '12', '12121212', '65df745f13534-81s+pO7slQL.jpg', 1, '2024-02-28 17:58:55', '2024-02-28 17:58:55');

-- --------------------------------------------------------

--
-- Table structure for table `trainer_specialities`
--

CREATE TABLE `trainer_specialities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `trainerId` varchar(255) DEFAULT NULL,
  `specialties` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trainer_specialities`
--

INSERT INTO `trainer_specialities` (`id`, `trainerId`, `specialties`, `created_at`, `updated_at`) VALUES
(1, '65df745f16a32', 'Nutrition and\r\n                                                                Wellness', '2024-02-28 17:58:55', '2024-02-28 17:58:55'),
(2, '65df745f16a32', 'CrossFit', '2024-02-28 17:58:55', '2024-02-28 17:58:55'),
(3, '65df745f16a32', 'Functional Movement', '2024-02-28 17:58:55', '2024-02-28 17:58:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userId` varchar(255) NOT NULL,
  `fName` varchar(255) NOT NULL,
  `lName` varchar(200) DEFAULT NULL,
  `userType` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user',
  `contact` varchar(255) DEFAULT NULL,
  `isActive` tinyint(1) DEFAULT 1,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `userId`, `fName`, `lName`, `userType`, `email`, `email_verified_at`, `password`, `role`, `contact`, `isActive`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'akz001', 'Admin', NULL, 'Admin', 'admin@loopcare.com', NULL, '$2y$10$h49ycJ1smsvY6NWWjl0Q7e/T5FzrpfpHaGZkDYBcYO.aZ7qXPmqw6', 'Admin', '077777777777', 1, NULL, NULL, NULL),
(2, 'ITVvaiR', 'Chameera Mayura', NULL, 'Admin', 'mayura.chameera@gmail.com', NULL, '$2y$12$8EfjP4yeiGEtwtSWPUwfwe1ovvetUSL9HfxO4FgUkLOSIMoxlKe7m', 'Admin', '0770777619', 1, NULL, '2023-11-13 12:40:52', '2023-12-06 04:36:54'),
(5, '65df703fb34aa', 'Chameera', 'Mayura', 'Patient', 'chameera@gmail.com', NULL, '$2y$10$2Z4iPwFhAV0FrR9nmtE1Lu7XTjctqhnRUNFkqTY6WTuv3RGFcAk/m', 'user', NULL, 1, NULL, '2024-02-28 17:41:19', '2024-02-28 17:41:19'),
(6, '65df740cafbae', 'doca', '1', 'Doctor', 'doca@doc.com', NULL, '$2y$10$YbeTf7RlhLoSfB1X0nDty.XCw7JTH/6lqnFbs0h4/qthj.aIkQd/C', 'user', NULL, 1, NULL, '2024-02-28 17:57:32', '2024-02-28 17:57:32'),
(7, '65df745f16a32', 'train1', 'we', 'Trainer', 'train.2@gmail.com', NULL, '$2y$10$VBEpdP47PtZNNc/EVec4ge4EihyVicUS/h21EWR/A4UeH2DVb/eHi', 'user', NULL, 1, NULL, '2024-02-28 17:58:55', '2024-02-28 17:58:55'),
(8, '65e20fc451079', 'Chameera', 'Mayura', 'Patient', '222eera@gmail.com', NULL, '$2y$10$wyTqmnA5HkT3yMyzx6EwE.hTwXO7BeLHw/uE1zqV4fumn/R48mcfS', 'user', NULL, 1, NULL, '2024-03-01 17:26:28', '2024-03-01 17:26:28'),
(9, '65e21033367a9', 'Chameera', 'Mayura', 'Patient', '1221meera@gmail.com', NULL, '$2y$10$zw89lQkHlhCwVe37za0SfehzYv2/UvwxKkUw1UExudxt6yGM/p5vC', 'user', NULL, 1, NULL, '2024-03-01 17:28:19', '2024-03-01 17:28:19'),
(10, '65e21727da0ef', 'Chameera', 'Mayura', 'Patient', '555era@gmail.com', NULL, '$2y$10$Zorh6CkA3U8RcyKi.tXOyeiYpAtkM7s5LDfQL9olusDTqiDFfs6pa', 'user', NULL, 1, NULL, '2024-03-01 17:57:59', '2024-03-01 17:57:59'),
(11, '65e224aa2d616', 'Chameera', 'Mayura', 'Patient', '44444ameera@gmail.com', NULL, '$2y$10$cabX31O/rFvrK25s4QmWiOHJURNsHi8aVECSuKjQL4.cbO1wB9zTq', 'user', NULL, 1, NULL, '2024-03-01 18:55:38', '2024-03-01 18:55:38'),
(12, '65e228fce94a6', 'Chameera', 'Mayura', 'Patient', 'qwqqwqw@gmail.com', NULL, '$2y$10$g3JPb65kGQGXl3iN5BQFx.NylCSFLREKBcx7xn0A5NtXo.wo.hO5q', 'user', NULL, 1, NULL, '2024-03-01 19:14:05', '2024-03-01 19:14:05'),
(13, '65e22f1c770e6', 'Chameera', 'Mayura', 'Patient', 'mwewewhameera@gmail.com', NULL, '$2y$10$VbRNRpZQrI387EdDrdHXteHN1rNUIubtuXNzGCKpVuP9em4P5YYki', 'user', NULL, 1, NULL, '2024-03-01 19:40:12', '2024-03-01 19:40:12'),
(14, '65e2441f9cf6f', 'Nadun', 'Rathuwithana', 'Patient', 'nadun@loopcare.lk', NULL, '$2y$10$g.TGf2.0JPvSSIBR8BoZGemy4WKXisfPI7XURF9NdcH39cp3pqpQa', 'user', NULL, 1, NULL, '2024-03-01 21:09:51', '2024-03-01 21:09:51');

-- --------------------------------------------------------

--
-- Table structure for table `user_question_answers`
--

CREATE TABLE `user_question_answers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userId` varchar(255) DEFAULT NULL,
  `question` varchar(255) DEFAULT NULL,
  `answer` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_question_answers`
--

INSERT INTO `user_question_answers` (`id`, `userId`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(14, '12', 'patient que 1', 'බස්නාහිර පළාතට මායිම් නොවේ', '2024-03-01 19:37:34', '2024-03-01 19:37:34'),
(15, '12', 'patient que 2333', 'ans 1', '2024-03-01 19:37:36', '2024-03-01 19:37:36'),
(16, '13', 'patient que 1', 'නිල් සහ කහ', '2024-03-01 19:40:17', '2024-03-01 19:40:17'),
(17, '13', 'patient que 2333', 'ans 2', '2024-03-01 19:40:20', '2024-03-01 19:40:20'),
(19, '14', 'patient que 1', 'අයර්ලන්තය', '2024-03-01 21:10:06', '2024-03-01 21:10:06'),
(20, '14', 'patient que 1', 'බස්නාහිර පළාතට මායිම් නොවේ', '2024-03-01 21:10:07', '2024-03-01 21:10:07'),
(21, '14', 'patient que 2333', '10 q1 A', '2024-03-01 21:10:09', '2024-03-01 21:10:09'),
(22, '14', 'patient que 2333', 'ans 1', '2024-03-01 21:10:09', '2024-03-01 21:10:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_users_email_unique` (`email`);

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `answer_logs`
--
ALTER TABLE `answer_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_details`
--
ALTER TABLE `customer_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doc_specialities`
--
ALTER TABLE `doc_specialities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `goals`
--
ALTER TABLE `goals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `goal_ages`
--
ALTER TABLE `goal_ages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `goal_management`
--
ALTER TABLE `goal_management`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `goal_restrictions`
--
ALTER TABLE `goal_restrictions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ingredients`
--
ALTER TABLE `ingredients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meals`
--
ALTER TABLE `meals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meal_ages`
--
ALTER TABLE `meal_ages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meal_management`
--
ALTER TABLE `meal_management`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meal_restrictions`
--
ALTER TABLE `meal_restrictions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_pains`
--
ALTER TABLE `patient_pains`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions_answers`
--
ALTER TABLE `questions_answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question_setups`
--
ALTER TABLE `question_setups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainers`
--
ALTER TABLE `trainers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainer_specialities`
--
ALTER TABLE `trainer_specialities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_question_answers`
--
ALTER TABLE `user_question_answers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `answer_logs`
--
ALTER TABLE `answer_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer_details`
--
ALTER TABLE `customer_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `doc_specialities`
--
ALTER TABLE `doc_specialities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `goals`
--
ALTER TABLE `goals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `goal_ages`
--
ALTER TABLE `goal_ages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `goal_management`
--
ALTER TABLE `goal_management`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `goal_restrictions`
--
ALTER TABLE `goal_restrictions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ingredients`
--
ALTER TABLE `ingredients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `meals`
--
ALTER TABLE `meals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `meal_ages`
--
ALTER TABLE `meal_ages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `meal_management`
--
ALTER TABLE `meal_management`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `meal_restrictions`
--
ALTER TABLE `meal_restrictions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `patient_pains`
--
ALTER TABLE `patient_pains`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `questions_answers`
--
ALTER TABLE `questions_answers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `question_setups`
--
ALTER TABLE `question_setups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `trainers`
--
ALTER TABLE `trainers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `trainer_specialities`
--
ALTER TABLE `trainer_specialities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user_question_answers`
--
ALTER TABLE `user_question_answers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
