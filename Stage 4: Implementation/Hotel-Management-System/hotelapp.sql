-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 19, 2025 at 09:31 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotelapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `audits`
--

CREATE TABLE `audits` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `action` varchar(20) DEFAULT NULL,
  `table_name` varchar(100) DEFAULT NULL,
  `record_id` int(11) DEFAULT NULL,
  `ip_address` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `billings`
--

CREATE TABLE `billings` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `reservation_id` int(11) DEFAULT NULL,
  `payment_method_id` int(11) DEFAULT NULL,
  `amount` varchar(50) DEFAULT NULL,
  `discount` varchar(20) DEFAULT NULL,
  `total_amount` varchar(20) DEFAULT NULL,
  `payment_status` varchar(20) DEFAULT NULL,
  `bill_date` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `room_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'waiting',
  `start_date` varchar(255) DEFAULT NULL,
  `end_date` varchar(255) DEFAULT NULL,
  `TransactionType` varchar(255) DEFAULT NULL,
  `TransID` varchar(255) DEFAULT NULL,
  `TransTime` varchar(255) DEFAULT NULL,
  `TransAmount` decimal(10,2) DEFAULT NULL,
  `BusinessShortCode` varchar(255) DEFAULT NULL,
  `BillRefNumber` varchar(255) DEFAULT NULL,
  `InvoiceNumber` varchar(255) DEFAULT NULL,
  `OrgAccountBalance` decimal(10,2) DEFAULT NULL,
  `ThirdPartyTransID` varchar(255) DEFAULT NULL,
  `MSISDN` varchar(255) DEFAULT NULL,
  `FirstName` varchar(255) DEFAULT NULL,
  `MiddleName` varchar(255) DEFAULT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` int(11) NOT NULL,
  `category` varchar(100) DEFAULT NULL,
  `amount` varchar(100) DEFAULT NULL,
  `payment_method_id` int(11) DEFAULT NULL,
  `description` varchar(600) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hotel` varchar(255) DEFAULT NULL,
  `days_in_waiting_list` varchar(255) DEFAULT NULL,
  `agent_involved` varchar(255) DEFAULT NULL,
  `reserved_is_assigned` varchar(255) DEFAULT NULL,
  `has_special_requests` varchar(255) DEFAULT NULL,
  `customer_type` varchar(255) DEFAULT NULL,
  `deposit_type` varchar(255) DEFAULT NULL,
  `is_repeated_guest` varchar(255) DEFAULT NULL,
  `distribution_channel` varchar(255) DEFAULT NULL,
  `market_segment` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `guest_id` int(11) DEFAULT NULL,
  `comments` varchar(600) DEFAULT NULL,
  `rating` varchar(20) DEFAULT NULL,
  `submitted_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `guests`
--

CREATE TABLE `guests` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `id_proof` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `housekeepings`
--

CREATE TABLE `housekeepings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `room_id` int(11) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `assigned_staff_id` bigint(20) UNSIGNED DEFAULT NULL,
  `cleaning_date` datetime DEFAULT NULL,
  `completion_time` datetime DEFAULT NULL,
  `supplies_used` text DEFAULT NULL,
  `inspection_status` varchar(20) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inventories`
--

CREATE TABLE `inventories` (
  `id` int(11) NOT NULL,
  `item_name` varchar(100) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `quantity` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` int(11) NOT NULL,
  `bill_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `amount` varchar(20) DEFAULT NULL,
  `due_date` date DEFAULT NULL,
  `payment_status` varchar(20) DEFAULT NULL,
  `invoice_date` date DEFAULT curdate(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `price` varchar(20) DEFAULT NULL,
  `description` varchar(600) DEFAULT NULL,
  `availability_status` varchar(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loggeds`
--

CREATE TABLE `loggeds` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `login_time` datetime DEFAULT NULL,
  `logout_time` datetime DEFAULT NULL,
  `ip_address` varchar(100) DEFAULT NULL,
  `device_info` varchar(100) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `maintenances`
--

CREATE TABLE `maintenances` (
  `id` int(11) NOT NULL,
  `item` varchar(20) DEFAULT NULL,
  `issue_description` varchar(600) DEFAULT NULL,
  `reported_by` varchar(100) DEFAULT NULL,
  `assigned_to` varchar(100) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `repair_cost` varchar(100) DEFAULT NULL,
  `date_reported` date DEFAULT NULL,
  `completion_date` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `methods`
--

CREATE TABLE `methods` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `provider` varchar(100) DEFAULT NULL,
  `transaction_fee` varchar(100) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_10_18_155428_create_sessions_table', 1),
(7, '2023_10_20_142754_create_features_table', 1),
(8, '2023_10_20_152123_add_agent_involved_to_features', 1),
(20, '2014_10_12_000000_create_users_table', 1),
(21, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(22, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(23, '2019_08_19_000000_create_failed_jobs_table', 1),
(24, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(25, '2024_12_12_204805_create_sessions_table', 1),
(26, '2024_12_13_125608_create_rooms_table', 1),
(27, '2025_01_20_135248_create_bookings_table', 1),
(28, '2025_01_20_181315_add_status_field_to_bookings', 1),
(29, '2025_01_21_101618_create_galleries_table', 1),
(30, '2025_01_21_131405_create_contacts_table', 1),
(31, '2025_01_21_171118_create_notifications_table', 1),
(32, '2025_01_22_162953_create_transactions_table', 1),
(33, '2025_02_13_143630_create_housekeeping_table', 2),
(34, '2014_10_12_100000_create_password_resets_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 2),
(6, 'App\\Models\\User', 1),
(7, 'App\\Models\\User', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) NOT NULL,
  `type` varchar(255) NOT NULL,
  `notifiable_type` varchar(255) NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `occupations`
--

CREATE TABLE `occupations` (
  `id` int(11) NOT NULL,
  `room_type` varchar(50) DEFAULT NULL,
  `max_occupancy` varchar(20) DEFAULT NULL,
  `price_per_night` varchar(20) DEFAULT NULL,
  `extra_guest_charge` varchar(20) DEFAULT NULL,
  `check_in_time` datetime DEFAULT NULL,
  `check_out_time` datetime DEFAULT NULL,
  `allowed_smoking` varchar(50) DEFAULT NULL,
  `pet_friendly` varchar(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `guest_id` int(11) DEFAULT NULL,
  `order_details` int(11) DEFAULT NULL,
  `amount` varchar(20) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `booking_id` int(11) DEFAULT NULL,
  `guest_id` int(11) DEFAULT NULL,
  `amount` varchar(50) DEFAULT NULL,
  `payment_method` varchar(100) DEFAULT NULL,
  `payment_status` varchar(100) DEFAULT NULL,
  `transaction_date` date DEFAULT curdate(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'createrole-list', 'web', '2024-11-08 23:31:32', '2024-11-08 23:31:32'),
(2, 'viewrole-create', 'web', '2024-11-08 23:31:32', '2024-11-08 23:31:32'),
(3, 'updaterole-edit', 'web', '2024-11-08 23:31:32', '2024-11-08 23:31:32'),
(4, 'deleterole-delete', 'web', '2024-11-08 23:31:32', '2024-11-08 23:31:32'),
(5, 'createcategory-list', 'web', '2024-11-08 23:31:32', '2024-11-08 23:31:32'),
(6, 'viewcategory-create', 'web', '2024-11-08 23:31:32', '2024-11-08 23:31:32'),
(7, 'updatecategory-edit', 'web', '2024-11-08 23:31:32', '2024-11-08 23:31:32'),
(8, 'deletecategory-delete', 'web', '2024-11-08 23:31:32', '2024-11-08 23:31:32'),
(9, 'createpermission-list', 'web', '2024-11-08 23:31:32', '2024-11-08 23:31:32'),
(10, 'viewpermission-create', 'web', '2024-11-08 23:31:32', '2024-11-08 23:31:32'),
(11, 'updatepermission-edit', 'web', '2024-11-08 23:31:32', '2024-11-08 23:31:32'),
(12, 'deletepermission-delete', 'web', '2024-11-08 23:31:32', '2024-11-08 23:31:32'),
(13, 'casecategory-list', 'web', '2024-11-08 23:31:32', '2024-11-08 23:31:32'),
(14, 'casecategory-create', 'web', '2024-11-08 23:31:33', '2024-11-08 23:31:33'),
(15, 'casecategory-edit', 'web', '2024-11-08 23:31:33', '2024-11-08 23:31:33'),
(16, 'casecategory-delete', 'web', '2024-11-08 23:31:33', '2024-11-08 23:31:33'),
(17, 'casefile-list', 'web', '2024-11-08 23:31:33', '2024-11-08 23:31:33'),
(18, 'casefile-create', 'web', '2024-11-08 23:31:33', '2024-11-08 23:31:33'),
(19, 'casefile-edit', 'web', '2024-11-08 23:31:33', '2024-11-08 23:31:33'),
(20, 'casefile-delete', 'web', '2024-11-08 23:31:33', '2024-11-08 23:31:33'),
(21, 'casefolder-list', 'web', '2024-11-08 23:31:33', '2024-11-08 23:31:33'),
(22, 'casefolder-create', 'web', '2024-11-08 23:31:33', '2024-11-08 23:31:33'),
(23, 'casefolder-edit', 'web', '2024-11-08 23:31:33', '2024-11-08 23:31:33'),
(24, 'casefolder-delete', 'web', '2024-11-08 23:31:33', '2024-11-08 23:31:33'),
(25, 'document-list', 'web', '2024-11-08 23:31:33', '2024-11-08 23:31:33'),
(26, 'document-create', 'web', '2024-11-08 23:31:33', '2024-11-08 23:31:33'),
(27, 'document-edit', 'web', '2024-11-08 23:31:33', '2024-11-08 23:31:33'),
(28, 'document-delete', 'web', '2024-11-08 23:31:33', '2024-11-08 23:31:33'),
(29, 'documentpagecount-list', 'web', '2024-11-08 23:31:33', '2024-11-08 23:31:33'),
(30, 'documentpagecount-create', 'web', '2024-11-08 23:31:33', '2024-11-08 23:31:33'),
(31, 'documentpagecount-edit', 'web', '2024-11-08 23:31:33', '2024-11-08 23:31:33'),
(32, 'documentpagecount-delete', 'web', '2024-11-08 23:31:33', '2024-11-08 23:31:33'),
(33, 'documenttype-list', 'web', '2024-11-08 23:31:33', '2024-11-08 23:31:33'),
(34, 'documenttype-create', 'web', '2024-11-08 23:31:34', '2024-11-08 23:31:34'),
(35, 'documenttype-edit', 'web', '2024-11-08 23:31:34', '2024-11-08 23:31:34'),
(36, 'documenttype-delete', 'web', '2024-11-08 23:31:34', '2024-11-08 23:31:34'),
(37, 'field-list', 'web', '2024-11-08 23:31:34', '2024-11-08 23:31:34'),
(38, 'field-create', 'web', '2024-11-08 23:31:34', '2024-11-08 23:31:34'),
(39, 'field-edit', 'web', '2024-11-08 23:31:34', '2024-11-08 23:31:34'),
(40, 'field-delete', 'web', '2024-11-08 23:31:34', '2024-11-08 23:31:34'),
(41, 'fieldcategory-list', 'web', '2024-11-08 23:31:34', '2024-11-08 23:31:34'),
(42, 'fieldcategory-create', 'web', '2024-11-08 23:31:34', '2024-11-08 23:31:34'),
(43, 'fieldcategory-edit', 'web', '2024-11-08 23:31:34', '2024-11-08 23:31:34'),
(44, 'fieldcategory-delete', 'web', '2024-11-08 23:31:34', '2024-11-08 23:31:34'),
(45, 'fileretention-list', 'web', '2024-11-08 23:31:34', '2024-11-08 23:31:34'),
(46, 'fileretention-create', 'web', '2024-11-08 23:31:34', '2024-11-08 23:31:34'),
(47, 'fileretention-edit', 'web', '2024-11-08 23:31:34', '2024-11-08 23:31:34'),
(48, 'fileretention-delete', 'web', '2024-11-08 23:31:34', '2024-11-08 23:31:34'),
(49, 'fileretentiondate-list', 'web', '2024-11-08 23:31:34', '2024-11-08 23:31:34'),
(50, 'fieldcategorydate-create', 'web', '2024-11-08 23:31:35', '2024-11-08 23:31:35'),
(51, 'fileretentiondate-edit', 'web', '2024-11-08 23:31:35', '2024-11-08 23:31:35'),
(52, 'fileretentiondate-delete', 'web', '2024-11-08 23:31:35', '2024-11-08 23:31:35'),
(53, 'form-list', 'web', '2024-11-08 23:31:35', '2024-11-08 23:31:35'),
(54, 'form-create', 'web', '2024-11-08 23:31:35', '2024-11-08 23:31:35'),
(55, 'form-edit', 'web', '2024-11-08 23:31:35', '2024-11-08 23:31:35'),
(56, 'form-delete', 'web', '2024-11-08 23:31:35', '2024-11-08 23:31:35'),
(57, 'log-list', 'web', '2024-11-08 23:31:35', '2024-11-08 23:31:35'),
(58, 'log-create', 'web', '2024-11-08 23:31:35', '2024-11-08 23:31:35'),
(59, 'log-edit', 'web', '2024-11-08 23:31:35', '2024-11-08 23:31:35'),
(60, 'log-delete', 'web', '2024-11-08 23:31:35', '2024-11-08 23:31:35'),
(61, 'metadatadefinition-list', 'web', '2024-11-08 23:31:35', '2024-11-08 23:31:35'),
(62, 'metadatadefinition-create', 'web', '2024-11-08 23:31:35', '2024-11-08 23:31:35'),
(63, 'metadatadefinition-edit', 'web', '2024-11-08 23:31:35', '2024-11-08 23:31:35'),
(64, 'metadatadefinition-delete', 'web', '2024-11-08 23:31:35', '2024-11-08 23:31:35'),
(65, 'metadatavalue-list', 'web', '2024-11-08 23:31:35', '2024-11-08 23:31:35'),
(66, 'metadatavalue-create', 'web', '2024-11-08 23:31:35', '2024-11-08 23:31:35'),
(67, 'metadatavalue-edit', 'web', '2024-11-08 23:31:35', '2024-11-08 23:31:35'),
(68, 'metadatavalue-delete', 'web', '2024-11-08 23:31:35', '2024-11-08 23:31:35'),
(69, 'permission-list', 'web', '2024-11-08 23:31:35', '2024-11-08 23:31:35'),
(70, 'permission-create', 'web', '2024-11-08 23:31:35', '2024-11-08 23:31:35'),
(71, 'permission-edit', 'web', '2024-11-08 23:31:35', '2024-11-08 23:31:35'),
(72, 'permission-delete', 'web', '2024-11-08 23:31:35', '2024-11-08 23:31:35'),
(73, 'role-list', 'web', '2024-11-08 23:31:36', '2024-11-08 23:31:36'),
(74, 'role-create', 'web', '2024-11-08 23:31:36', '2024-11-08 23:31:36'),
(75, 'role-edit', 'web', '2024-11-08 23:31:36', '2024-11-08 23:31:36'),
(76, 'role-delete', 'web', '2024-11-08 23:31:36', '2024-11-08 23:31:36'),
(77, 'user-list', 'web', '2024-11-08 23:31:36', '2024-11-08 23:31:36'),
(78, 'user-create', 'web', '2024-11-08 23:31:36', '2024-11-08 23:31:36'),
(79, 'user-edit', 'web', '2024-11-08 23:31:36', '2024-11-08 23:31:36'),
(80, 'user-delete', 'web', '2024-11-08 23:31:36', '2024-11-08 23:31:36'),
(81, 'workflow-list', 'web', '2024-11-08 23:31:36', '2024-11-08 23:31:36'),
(82, 'workflow-create', 'web', '2024-11-08 23:31:36', '2024-11-08 23:31:36'),
(83, 'workflow-edit', 'web', '2024-11-08 23:31:36', '2024-11-08 23:31:36'),
(84, 'workflow-delete', 'web', '2024-11-08 23:31:36', '2024-11-08 23:31:36'),
(85, 'workflowrule-list', 'web', '2024-11-08 23:31:36', '2024-11-08 23:31:36'),
(86, 'workflowrule-create', 'web', '2024-11-08 23:31:36', '2024-11-08 23:31:36'),
(87, 'workflowrule-edit', 'web', '2024-11-08 23:31:36', '2024-11-08 23:31:36'),
(88, 'workflowrule-delete', 'web', '2024-11-08 23:31:36', '2024-11-08 23:31:36'),
(89, 'workflowstep-list', 'web', '2024-11-08 23:31:36', '2024-11-08 23:31:36'),
(90, 'workflowstep-create', 'web', '2024-11-08 23:31:36', '2024-11-08 23:31:36'),
(91, 'workflowstep-edit', 'web', '2024-11-08 23:31:36', '2024-11-08 23:31:36'),
(92, 'workflowstep-delete', 'web', '2024-11-08 23:31:36', '2024-11-08 23:31:36'),
(93, 'documentrequirement-list', 'web', '2024-11-08 23:31:37', '2024-11-08 23:31:37'),
(94, 'documentrequirement-create', 'web', '2024-11-08 23:31:37', '2024-11-08 23:31:37'),
(95, 'documentrequirement-edit', 'web', '2024-11-08 23:31:37', '2024-11-08 23:31:37'),
(96, 'documentrequirement-delete', 'web', '2024-11-08 23:31:37', '2024-11-08 23:31:37'),
(97, 'documentsignature-list', 'web', '2024-11-08 23:31:37', '2024-11-08 23:31:37'),
(98, 'documentsignature-create', 'web', '2024-11-08 23:31:37', '2024-11-08 23:31:37'),
(99, 'documentsignature-edit', 'web', '2024-11-08 23:31:37', '2024-11-08 23:31:37'),
(100, 'documentsignature-delete', 'web', '2024-11-08 23:31:37', '2024-11-08 23:31:37'),
(101, 'duplicatedocument-list', 'web', '2024-11-08 23:31:37', '2024-11-08 23:31:37'),
(102, 'duplicatedocument-create', 'web', '2024-11-08 23:31:37', '2024-11-08 23:31:37'),
(103, 'duplicatedocument-edit', 'web', '2024-11-08 23:31:37', '2024-11-08 23:31:37'),
(104, 'duplicatedocument-delete', 'web', '2024-11-08 23:31:37', '2024-11-08 23:31:37'),
(105, 'file-list', 'web', '2024-11-08 23:31:37', '2024-11-08 23:31:37'),
(106, 'file-create', 'web', '2024-11-08 23:31:37', '2024-11-08 23:31:37'),
(107, 'file-edit', 'web', '2024-11-08 23:31:37', '2024-11-08 23:31:37'),
(108, 'file-delete', 'web', '2024-11-08 23:31:37', '2024-11-08 23:31:37'),
(109, 'filestore-list', 'web', '2024-11-08 23:31:37', '2024-11-08 23:31:37'),
(110, 'filestore-create', 'web', '2024-11-08 23:31:37', '2024-11-08 23:31:37'),
(111, 'filestore-edit', 'web', '2024-11-08 23:31:37', '2024-11-08 23:31:37'),
(112, 'filestore-delete', 'web', '2024-11-08 23:31:37', '2024-11-08 23:31:37'),
(113, 'license-list', 'web', '2024-11-08 23:31:37', '2024-11-08 23:31:37'),
(114, 'license-create', 'web', '2024-11-08 23:31:37', '2024-11-08 23:31:37'),
(115, 'license-edit', 'web', '2024-11-08 23:31:37', '2024-11-08 23:31:37'),
(116, 'license-delete', 'web', '2024-11-08 23:31:38', '2024-11-08 23:31:38'),
(117, 'licensesession-list', 'web', '2024-11-08 23:31:38', '2024-11-08 23:31:38'),
(118, 'licensesession-create', 'web', '2024-11-08 23:31:38', '2024-11-08 23:31:38'),
(119, 'licensesession-edit', 'web', '2024-11-08 23:31:38', '2024-11-08 23:31:38'),
(120, 'licensesession-delete', 'web', '2024-11-08 23:31:38', '2024-11-08 23:31:38'),
(121, 'mfacode-list', 'web', '2024-11-08 23:31:38', '2024-11-08 23:31:38'),
(122, 'mfacode-create', 'web', '2024-11-08 23:31:38', '2024-11-08 23:31:38'),
(123, 'mfacode-edit', 'web', '2024-11-08 23:31:38', '2024-11-08 23:31:38'),
(124, 'mfacode-delete', 'web', '2024-11-08 23:31:38', '2024-11-08 23:31:38'),
(125, 'smsconfiguration-list', 'web', '2024-11-08 23:31:38', '2024-11-08 23:31:38'),
(126, 'smsconfiguration-create', 'web', '2024-11-08 23:31:38', '2024-11-08 23:31:38'),
(127, 'smsconfiguration-edit', 'web', '2024-11-08 23:31:38', '2024-11-08 23:31:38'),
(128, 'smsconfiguration-delete', 'web', '2024-11-08 23:31:38', '2024-11-08 23:31:38'),
(129, 'smtpconfiguration-list', 'web', '2024-11-08 23:31:38', '2024-11-08 23:31:38'),
(130, 'smtpconfiguration-create', 'web', '2024-11-08 23:31:39', '2024-11-08 23:31:39'),
(131, 'smtpconfiguration-edit', 'web', '2024-11-08 23:31:39', '2024-11-08 23:31:39'),
(132, 'smtpconfiguration-delete', 'web', '2024-11-08 23:31:39', '2024-11-08 23:31:39'),
(133, 'userkey-list', 'web', '2024-11-08 23:31:39', '2024-11-08 23:31:39'),
(134, 'userkey-create', 'web', '2024-11-08 23:31:39', '2024-11-08 23:31:39'),
(135, 'userkey-edit', 'web', '2024-11-08 23:31:39', '2024-11-08 23:31:39'),
(136, 'userkey-delete', 'web', '2024-11-08 23:31:39', '2024-11-08 23:31:39'),
(137, 'workflowdocument-list', 'web', '2024-11-08 23:31:39', '2024-11-08 23:31:39'),
(138, 'workflowdocument-create', 'web', '2024-11-08 23:31:39', '2024-11-08 23:31:39'),
(139, 'workflowdocument-edit', 'web', '2024-11-08 23:31:39', '2024-11-08 23:31:39'),
(140, 'workflowdocument-delete', 'web', '2024-11-08 23:31:39', '2024-11-08 23:31:39'),
(141, 'workflowinstance-list', 'web', '2024-11-08 23:31:39', '2024-11-08 23:31:39'),
(142, 'workflowinstance-create', 'web', '2024-11-08 23:31:39', '2024-11-08 23:31:39'),
(143, 'workflowinstance-edit', 'web', '2024-11-08 23:31:39', '2024-11-08 23:31:39'),
(144, 'workflowinstance-delete', 'web', '2024-11-08 23:31:39', '2024-11-08 23:31:39'),
(145, 'workflowstepaction-list', 'web', '2024-11-08 23:31:39', '2024-11-08 23:31:39'),
(146, 'workflowstepaction-create', 'web', '2024-11-08 23:31:39', '2024-11-08 23:31:39'),
(147, 'workflowstepaction-edit', 'web', '2024-11-08 23:31:39', '2024-11-08 23:31:39'),
(148, 'workflowstepaction-delete', 'web', '2024-11-08 23:31:39', '2024-11-08 23:31:39'),
(149, 'workflowstepcomment-list', 'web', '2024-11-08 23:31:40', '2024-11-08 23:31:40'),
(150, 'workflowstepcomment-create', 'web', '2024-11-08 23:31:40', '2024-11-08 23:31:40'),
(151, 'workflowstepcomment-edit', 'web', '2024-11-08 23:31:40', '2024-11-08 23:31:40'),
(152, 'workflowstepcomment-delete', 'web', '2024-11-08 23:31:40', '2024-11-08 23:31:40'),
(153, 'workflowsteprequirement-list', 'web', '2024-11-08 23:31:40', '2024-11-08 23:31:40'),
(154, 'workflowsteprequirement-create', 'web', '2024-11-08 23:31:40', '2024-11-08 23:31:40'),
(155, 'workflowsteprequirement-edit', 'web', '2024-11-08 23:31:40', '2024-11-08 23:31:40'),
(156, 'workflowsteprequirement-delete', 'web', '2024-11-08 23:31:40', '2024-11-08 23:31:40');

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
-- Table structure for table `predictions`
--

CREATE TABLE `predictions` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(11) NOT NULL,
  `report_type` varchar(100) DEFAULT NULL,
  `generated_by` varchar(100) DEFAULT NULL,
  `report_data` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'super-admin', 'web', '2024-11-12 02:05:03', '2024-11-12 02:05:03'),
(3, 'admin', 'web', '2024-11-12 02:05:20', '2024-11-12 02:05:20'),
(4, 'financial accountant', 'web', '2024-11-12 02:05:25', '2024-11-12 02:05:25'),
(6, 'Intern', 'web', '2024-12-04 10:55:09', '2024-12-04 10:56:32'),
(7, 'head of department', 'web', '2024-12-10 15:46:24', '2024-12-10 15:46:24');

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
(1, 7),
(2, 1),
(2, 3),
(2, 7),
(3, 1),
(3, 3),
(4, 1),
(4, 3),
(5, 1),
(6, 1),
(6, 3),
(7, 1),
(7, 3),
(8, 1),
(8, 3),
(9, 1),
(10, 1),
(10, 3),
(11, 1),
(11, 3),
(12, 1),
(13, 1),
(13, 3),
(14, 1),
(14, 3),
(15, 1),
(16, 1),
(16, 3),
(17, 1),
(17, 3),
(18, 1),
(18, 3),
(19, 1),
(19, 3),
(20, 1),
(20, 3),
(21, 1),
(22, 1),
(22, 3),
(23, 1),
(23, 3),
(24, 1),
(24, 3),
(25, 1),
(25, 3),
(26, 1),
(26, 3),
(27, 1),
(28, 1),
(28, 3),
(29, 1),
(29, 3),
(30, 1),
(30, 3),
(31, 1),
(31, 3),
(32, 1),
(32, 3),
(33, 1),
(33, 3),
(34, 1),
(34, 3),
(35, 1),
(35, 3),
(36, 1),
(36, 3),
(37, 1),
(37, 3),
(38, 1),
(38, 3),
(39, 1),
(39, 3),
(40, 1),
(40, 3),
(41, 1),
(41, 3),
(42, 1),
(42, 3),
(43, 1),
(43, 3),
(44, 1),
(44, 3),
(45, 1),
(45, 3),
(46, 1),
(46, 3),
(47, 1),
(47, 3),
(48, 1),
(48, 3),
(49, 1),
(49, 3),
(50, 1),
(50, 3),
(51, 1),
(51, 3),
(52, 1),
(52, 3),
(53, 1),
(53, 3),
(54, 1),
(54, 3),
(55, 1),
(55, 3),
(56, 1),
(56, 3),
(57, 1),
(57, 3),
(58, 1),
(58, 3),
(59, 1),
(59, 3),
(60, 1),
(60, 3),
(61, 1),
(61, 3),
(62, 1),
(62, 3),
(63, 1),
(63, 3),
(64, 1),
(64, 3),
(65, 1),
(65, 3),
(66, 1),
(66, 3),
(67, 1),
(67, 3),
(68, 1),
(68, 3),
(69, 1),
(69, 3),
(70, 1),
(70, 3),
(71, 1),
(71, 3),
(72, 1),
(72, 3),
(73, 1),
(73, 3),
(74, 1),
(74, 3),
(75, 1),
(75, 3),
(76, 1),
(76, 3),
(77, 1),
(77, 3),
(78, 1),
(78, 3),
(79, 1),
(79, 3),
(80, 1),
(80, 3),
(81, 1),
(81, 3),
(82, 1),
(82, 3),
(83, 1),
(83, 3),
(84, 1),
(84, 3),
(85, 1),
(85, 3),
(86, 1),
(86, 3),
(86, 6),
(87, 1),
(87, 3),
(88, 1),
(88, 3),
(89, 1),
(89, 3),
(90, 1),
(90, 3),
(91, 1),
(91, 3),
(92, 1),
(92, 3),
(93, 1),
(93, 3),
(94, 1),
(94, 3),
(95, 1),
(95, 3),
(95, 6),
(96, 1),
(96, 3),
(97, 1),
(97, 3),
(98, 1),
(98, 3),
(98, 6),
(99, 1),
(99, 3),
(100, 1),
(100, 3),
(101, 1),
(101, 3),
(101, 6),
(102, 1),
(102, 3),
(103, 1),
(103, 3),
(104, 1),
(104, 3),
(105, 1),
(105, 3),
(106, 1),
(106, 3),
(107, 1),
(107, 3),
(108, 1),
(108, 3),
(109, 1),
(109, 3),
(110, 1),
(110, 3),
(110, 6),
(111, 1),
(111, 3),
(112, 1),
(112, 3),
(113, 1),
(113, 3),
(113, 6),
(114, 1),
(114, 3),
(115, 1),
(115, 3),
(116, 1),
(116, 3),
(117, 1),
(117, 3),
(118, 1),
(118, 3),
(119, 1),
(119, 3),
(119, 6),
(120, 1),
(120, 3),
(121, 1),
(121, 3),
(122, 1),
(122, 3),
(123, 1),
(123, 3),
(124, 1),
(124, 3),
(125, 1),
(125, 3),
(126, 1),
(126, 3),
(127, 1),
(127, 3),
(128, 1),
(128, 3),
(129, 1),
(129, 3),
(129, 6),
(130, 1),
(130, 3),
(131, 1),
(131, 3),
(132, 1),
(132, 3),
(133, 1),
(133, 3),
(134, 1),
(134, 3),
(135, 1),
(135, 3),
(136, 1),
(136, 3),
(137, 1),
(137, 3),
(138, 1),
(138, 3),
(139, 1),
(139, 3),
(140, 1),
(140, 3),
(141, 1),
(141, 3),
(142, 1),
(142, 3),
(143, 1),
(143, 3),
(144, 1),
(144, 3),
(145, 1),
(145, 3),
(146, 1),
(146, 3),
(147, 1),
(147, 3),
(148, 1),
(148, 3),
(149, 1),
(149, 3),
(150, 1),
(150, 3),
(151, 1),
(151, 3),
(152, 1),
(152, 3),
(153, 1),
(153, 3),
(154, 1),
(154, 3),
(155, 1),
(155, 3),
(156, 1),
(156, 3);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `room_title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `wifi` varchar(255) NOT NULL DEFAULT 'yes',
  `room_type` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `room_title`, `image`, `description`, `amount`, `wifi`, `room_type`, `created_at`, `updated_at`) VALUES
(1, 'Solo', '1739461956.jpg', 'A single person', '10000', 'yes', 'regular', '2025-02-13 12:52:36', '2025-02-13 12:52:36');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
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
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('NWiXpEfGfQ2Nk6Nckw6h2QVu3pwLuQgcOveeramp', 1, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiVVhGbWxRaUd2Q3JnRGZnMG9uUXN0VmFXN1pvQUpEeUdXSkdoUVhiViI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJElWOHRIaW8xaVpJdGZGeFdFZk5odE9WUVdFOG1kYThDN213Z3c1YnBtUnl1bFJEdTlkTU9PIjt9', 1734033214),
('psX4ZlSaNUNuRug4DK8JoZ5STy7WXcDBPEFAgC0P', 1, '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:135.0) Gecko/20100101 Firefox/135.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiRG1MTWwyZEQ1Y3FEeUZDRTdSdVdmcm94dkx1dkNDN2ZYbGlnT3VScSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC92aWV3X2hvdXNla2VlcGluZyI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1739463984);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `salary` varchar(50) DEFAULT NULL,
  `shift` varchar(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stations`
--

CREATE TABLE `stations` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `manager_id` int(11) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `contact_person` varchar(100) DEFAULT NULL,
  `phone_number` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tables`
--

CREATE TABLE `tables` (
  `id` int(11) NOT NULL,
  `table_number` int(11) DEFAULT NULL,
  `capacity` varchar(20) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `daily_rate` varchar(255) DEFAULT NULL,
  `total_stay_cost` varchar(255) DEFAULT NULL,
  `number_of_nights` varchar(255) DEFAULT NULL,
  `is_deposit_made` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `usertype` varchar(255) DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`, `usertype`) VALUES
(1, 'Muchiri Kinyua', 'muchiri.kinyua6564@gmail.com', NULL, '$2y$10$IV8tHio1iZItfFxWEfNhtOVQWE8mda8C7mwgw5bpmRyulRDu9dMOO', NULL, NULL, NULL, NULL, NULL, NULL, '2024-12-12 16:53:34', '2024-12-12 16:53:34', 'user'),
(2, 'admin', 'admin@gmail.com', NULL, '$2y$12$gKCsMJM6i/ZOiaeL9qRdTObzN4z.a5Lz.q3QweEM1ybR8bHjy3RI2', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-17 22:50:07', '2025-02-19 04:25:07', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `audits`
--
ALTER TABLE `audits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `billings`
--
ALTER TABLE `billings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_bookings_rooms` (`room_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_feedbacks_guests` (`guest_id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guests`
--
ALTER TABLE `guests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `housekeepings`
--
ALTER TABLE `housekeepings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `housekeeping_room_id_foreign` (`room_id`),
  ADD KEY `housekeeping_assigned_staff_id_foreign` (`assigned_staff_id`);

--
-- Indexes for table `inventories`
--
ALTER TABLE `inventories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loggeds`
--
ALTER TABLE `loggeds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maintenances`
--
ALTER TABLE `maintenances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `methods`
--
ALTER TABLE `methods`
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
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `occupations`
--
ALTER TABLE `occupations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_orders_guests` (`guest_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_payments_bookings` (`booking_id`),
  ADD KEY `fk_payments_guests` (`guest_id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `predictions`
--
ALTER TABLE `predictions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stations`
--
ALTER TABLE `stations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tables`
--
ALTER TABLE `tables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `audits`
--
ALTER TABLE `audits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `billings`
--
ALTER TABLE `billings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guests`
--
ALTER TABLE `guests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `housekeepings`
--
ALTER TABLE `housekeepings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inventories`
--
ALTER TABLE `inventories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loggeds`
--
ALTER TABLE `loggeds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `maintenances`
--
ALTER TABLE `maintenances`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `methods`
--
ALTER TABLE `methods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `occupations`
--
ALTER TABLE `occupations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `predictions`
--
ALTER TABLE `predictions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stations`
--
ALTER TABLE `stations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tables`
--
ALTER TABLE `tables`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `fk_bookings_rooms` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `fk_feedbacks_guests` FOREIGN KEY (`guest_id`) REFERENCES `guests` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `housekeepings`
--
ALTER TABLE `housekeepings`
  ADD CONSTRAINT `fk_housekeepings_rooms` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `housekeeping_assigned_staff_id_foreign` FOREIGN KEY (`assigned_staff_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_orders_guests` FOREIGN KEY (`guest_id`) REFERENCES `guests` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `fk_payments_bookings` FOREIGN KEY (`booking_id`) REFERENCES `bookings` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_payments_guests` FOREIGN KEY (`guest_id`) REFERENCES `guests` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
