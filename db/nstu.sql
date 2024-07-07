-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 12, 2022 at 06:43 AM
-- Server version: 5.7.33
-- PHP Version: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nstu`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumnis`
--

CREATE TABLE `alumnis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_id` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `media_id` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alumnis`
--

INSERT INTO `alumnis` (`id`, `name`, `email`, `student_id`, `designation`, `batch_no`, `description`, `image`, `image_path`, `media_id`, `status`, `created_at`, `updated_at`) VALUES
(8, 'Test One', 'testone@gmail.com', '1234560000', 'Student', '1 st Batch (Session: 2009-10)', NULL, NULL, NULL, NULL, 1, '2022-11-12 05:57:03', '2022-11-12 05:57:03'),
(9, 'Test Two', 'test2@gmail.com', '123453214000', 'Student', '1 st Batch (Session: 2009-10)', NULL, NULL, NULL, NULL, 1, '2022-11-12 05:58:19', '2022-11-12 05:58:19'),
(10, 'Test Three', 'test3@gmail.com', '432345000', 'Student', '2 nd Batch (Session: 2010-11)', NULL, NULL, NULL, NULL, 1, '2022-11-12 05:59:04', '2022-11-12 05:59:04'),
(11, 'Test Four', 'test4@gmail.com', '543210000', 'Student', '2 nd Batch (Session: 2010-11)', NULL, NULL, NULL, NULL, 1, '2022-11-12 05:59:32', '2022-11-12 05:59:32');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` text COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `position` int(11) DEFAULT '1000',
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_tags` text COLLATE utf8mb4_unicode_ci,
  `feature_type` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0=image,1=video',
  `feature_video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'File',
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_embade_code` text COLLATE utf8mb4_unicode_ci,
  `media_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `who_can_see` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Public',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `publish_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `feature` tinyint(1) NOT NULL DEFAULT '0',
  `feature_position` int(11) NOT NULL DEFAULT '1000',
  `for` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'product',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `position` int(11) DEFAULT '1000',
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_tags` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `media_id` bigint(20) UNSIGNED DEFAULT NULL,
  `background_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `status`, `feature`, `feature_position`, `for`, `title`, `slug`, `short_description`, `description`, `category_id`, `position`, `featured`, `meta_title`, `meta_description`, `meta_tags`, `image`, `media_id`, `background_color`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 1000, 'news', 'New Category', 'new-category', NULL, NULL, NULL, 1000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-15 06:19:48', '2022-06-15 06:19:48'),
(2, 1, 0, 1000, 'gallery', 'Gallery', 'gallery', NULL, NULL, NULL, 1000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-21 03:51:41', '2022-06-21 03:52:00');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `comment` longtext COLLATE utf8mb4_unicode_ci,
  `comment_id` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

CREATE TABLE `emails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customers` longtext COLLATE utf8mb4_unicode_ci,
  `emails` longtext COLLATE utf8mb4_unicode_ci,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `start_date` timestamp NULL DEFAULT NULL,
  `end_date` timestamp NULL DEFAULT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location_address` text COLLATE utf8mb4_unicode_ci,
  `location_map` text COLLATE utf8mb4_unicode_ci,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_tags` text COLLATE utf8mb4_unicode_ci,
  `feature_type` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0=image,1=video',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `media_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `description`, `start_date`, `end_date`, `position`, `location_address`, `location_map`, `meta_title`, `meta_description`, `meta_tags`, `feature_type`, `image`, `image_path`, `video`, `media_id`, `status`, `featured`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Animi architecto om', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '1997-09-09 10:38:00', '1999-11-24 18:54:00', NULL, 'Adipisci eius quasi', 'Laudantium irure ni', 'Tempora sint quidem', 'Quas ratione consequ', 'Molestiae ab nisi mo', 0, '1655274082.jpg', '2022/06', 'Quam vel facilis ita', 10, 1, 0, NULL, '2022-06-15 06:21:22', '2022-06-15 06:21:22');

-- --------------------------------------------------------

--
-- Table structure for table `event_attributes`
--

CREATE TABLE `event_attributes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `event_id` bigint(20) UNSIGNED DEFAULT NULL,
  `attributes` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event_attributes`
--

INSERT INTO `event_attributes` (`id`, `event_id`, `attributes`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, '[{\"label\":\"Cupidatat rem adipis\",\"attribute_title\":\"Cupidatat rem adipis\",\"attribute_description\":\"Sint non ad tempore\",\"attribute_url\":\"https:\\/\\/www.ryj.co.uk\",\"attribute_position\":\"Ex sit repellendus\"}]', 1, NULL, '2022-06-15 06:21:22', '2022-06-15 06:21:22');

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` int(11) NOT NULL DEFAULT '100',
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallery_items`
--

CREATE TABLE `gallery_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallery_id` bigint(20) UNSIGNED DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_embade_code` text COLLATE utf8mb4_unicode_ci,
  `pdf_file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1=image,2=video,3=embade_code,4=pdf_file',
  `position` int(11) NOT NULL DEFAULT '100',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `home_sections`
--

CREATE TABLE `home_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `section_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `background_color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `col` int(11) NOT NULL DEFAULT '1',
  `row` int(11) NOT NULL DEFAULT '3',
  `section_name_is_show` tinyint(1) NOT NULL DEFAULT '0',
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_name_id` bigint(20) UNSIGNED DEFAULT NULL,
  `section_design_type_id` bigint(20) UNSIGNED DEFAULT NULL,
  `position` int(11) NOT NULL DEFAULT '1000',
  `text_align` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1=left,2=right',
  `is_image_inner_border` tinyint(1) NOT NULL DEFAULT '0',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_path` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `media_id` bigint(20) UNSIGNED DEFAULT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `button_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `raised_amount` double DEFAULT NULL,
  `raised_percentage` double DEFAULT NULL,
  `parallax_option` tinyint(4) DEFAULT NULL COMMENT '1=vote,2=opinion',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_sections`
--

INSERT INTO `home_sections` (`id`, `section_name`, `background_color`, `col`, `row`, `section_name_is_show`, `title`, `sub_title`, `section_name_id`, `section_design_type_id`, `position`, `text_align`, `is_image_inner_border`, `image`, `image_path`, `media_id`, `short_description`, `description`, `button_name`, `button_url`, `raised_amount`, `raised_percentage`, `parallax_option`, `status`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Welcome Text', '#088f7d', 1, 3, 0, 'WELCOME', NULL, NULL, 7, 1000, 1, 0, NULL, NULL, NULL, NULL, '<p>Our Faculty tech a wide portfolio microbiology courses at the undergraduate and graduate levels. We also serve at the as the home department for the Graduate Field of Microbiology. (With over 40 affiliated faculty members) and provide a center of expertise for numerous aspects of microbial biology. Research within our department is focused on prokaryotic molecular biology and environmental microbiology.</p><p>Read More</p>', 'Read More', '#', NULL, NULL, NULL, 1, 1, NULL, NULL, '2022-06-14 13:24:04', '2022-06-14 13:24:04'),
(2, 'Latest News', '#088f7d', 2, 1, 1, '', NULL, NULL, 2, 1000, 1, 0, NULL, NULL, NULL, 'null', 'null', NULL, NULL, NULL, NULL, NULL, 1, 1, 1, NULL, '2022-06-15 06:22:07', '2022-06-15 06:22:28'),
(3, 'Events', '#088f7d', 2, 1, 1, '', NULL, NULL, 3, 1000, 1, 0, NULL, NULL, NULL, 'null', 'null', NULL, NULL, NULL, NULL, NULL, 1, 1, 1, NULL, '2022-06-15 06:22:22', '2022-06-15 06:22:35'),
(4, 'RESEARCH', '#088f7d', 1, 3, 1, '', NULL, NULL, 9, 1000, 1, 0, NULL, NULL, NULL, 'null', 'null', NULL, NULL, NULL, NULL, NULL, 1, 1, 1, NULL, '2022-06-20 04:41:15', '2022-06-20 04:41:28');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `month` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `file_name`, `year`, `month`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '1655202784.jpg', '2022', '06', NULL, '2022-06-14 10:33:05', '2022-06-14 10:33:05'),
(2, '1655202985.jpg', '2022', '06', NULL, '2022-06-14 10:36:26', '2022-06-14 10:36:26'),
(3, '1655203186.jpg', '2022', '06', NULL, '2022-06-14 10:39:47', '2022-06-14 10:39:47'),
(4, '1655205313.jpg', '2022', '06', NULL, '2022-06-14 11:15:14', '2022-06-14 11:15:14'),
(5, '1655205382.jpg', '2022', '06', NULL, '2022-06-14 11:16:23', '2022-06-14 11:16:23'),
(6, '1655205427.jpg', '2022', '06', NULL, '2022-06-14 11:17:07', '2022-06-14 11:17:07'),
(7, '1655207775.jpg', '2022', '06', NULL, '2022-06-14 11:56:16', '2022-06-14 11:56:16'),
(8, '1655208243.jpg', '2022', '06', NULL, '2022-06-14 12:04:03', '2022-06-14 12:04:03'),
(9, '1655274047.png', '2022', '06', NULL, '2022-06-15 06:20:48', '2022-06-15 06:20:48'),
(10, '1655274082.jpg', '2022', '06', NULL, '2022-06-15 06:21:22', '2022-06-15 06:21:22'),
(11, '1655274230.jpg', '2022', '06', NULL, '2022-06-15 06:23:50', '2022-06-15 06:23:50'),
(12, '1655274290.jpg', '2022', '06', NULL, '2022-06-15 06:24:50', '2022-06-15 06:24:50'),
(13, '1655699742.jpg', '2022', '06', NULL, '2022-06-20 04:35:42', '2022-06-20 04:35:42'),
(14, '1655699814.jpg', '2022', '06', NULL, '2022-06-20 04:36:55', '2022-06-20 04:36:55'),
(15, '1655699872.jpg', '2022', '06', NULL, '2022-06-20 04:37:53', '2022-06-20 04:37:53'),
(16, '1655699920.jpg', '2022', '06', NULL, '2022-06-20 04:38:40', '2022-06-20 04:38:40'),
(17, '1655699979.jpg', '2022', '06', NULL, '2022-06-20 04:39:39', '2022-06-20 04:39:39'),
(18, '1655700016.jpg', '2022', '06', NULL, '2022-06-20 04:40:17', '2022-06-20 04:40:17'),
(19, '1655704507.png', '2022', '06', NULL, '2022-06-20 05:55:08', '2022-06-20 05:55:08'),
(20, '1655706196.png', '2022', '06', NULL, '2022-06-20 06:23:16', '2022-06-20 06:23:16'),
(21, '1655804111.png', '2022', '06', NULL, '2022-06-21 09:35:11', '2022-06-21 09:35:11'),
(22, '1655869236.jpg', '2022', '06', NULL, '2022-06-22 03:40:36', '2022-06-22 03:40:36'),
(23, '1655900166.png', '2022', '06', NULL, '2022-06-22 12:16:06', '2022-06-22 12:16:06'),
(24, '1655904960.png', '2022', '06', NULL, '2022-06-22 13:36:00', '2022-06-22 13:36:00'),
(25, '1655904983.png', '2022', '06', NULL, '2022-06-22 13:36:24', '2022-06-22 13:36:24'),
(26, '1655905024.png', '2022', '06', NULL, '2022-06-22 13:37:04', '2022-06-22 13:37:04'),
(27, '1655905045.png', '2022', '06', NULL, '2022-06-22 13:37:26', '2022-06-22 13:37:26'),
(28, '1668081393.jpeg', '2022', '11', NULL, '2022-11-10 11:56:34', '2022-11-10 11:56:34'),
(29, '1668081419.jpeg', '2022', '11', NULL, '2022-11-10 11:57:00', '2022-11-10 11:57:00'),
(30, '1668083203.jpg', '2022', '11', NULL, '2022-11-10 12:26:50', '2022-11-10 12:26:50'),
(31, '1668083259.jpg', '2022', '11', NULL, '2022-11-10 12:27:46', '2022-11-10 12:27:46'),
(32, '1668083287.jpg', '2022', '11', NULL, '2022-11-10 12:28:14', '2022-11-10 12:28:14'),
(33, '1668083329.jpg', '2022', '11', NULL, '2022-11-10 12:28:55', '2022-11-10 12:28:55'),
(34, '1668083363.jpg', '2022', '11', NULL, '2022-11-10 12:29:30', '2022-11-10 12:29:30'),
(35, '1668084089.jpg', '2022', '11', NULL, '2022-11-10 12:41:37', '2022-11-10 12:41:37');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `status`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'Main Menu', NULL, '2022-06-14 10:22:10', '2022-06-14 10:22:10'),
(2, 1, 'USEFUL LINKS', NULL, '2022-06-15 07:13:22', '2022-06-15 07:13:22'),
(3, 1, 'CENTER/CELL', NULL, '2022-06-20 04:20:00', '2022-06-20 04:20:00'),
(4, 1, 'FACILITIES', NULL, '2022-06-20 04:22:45', '2022-06-20 04:22:45');

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `menu_id` bigint(20) UNSIGNED NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `relation_id` bigint(20) UNSIGNED DEFAULT NULL,
  `relation_with` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` int(11) NOT NULL DEFAULT '1000',
  `menu_item_id` bigint(20) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `status`, `menu_id`, `text`, `url`, `relation_id`, `relation_with`, `position`, `menu_item_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 1, 1, 'Services', '#', NULL, NULL, 3, NULL, NULL, '2022-06-14 10:23:20', '2022-11-05 09:15:59'),
(9, 1, 2, 'UGC', '#', NULL, NULL, 1000, NULL, NULL, '2022-06-15 07:13:50', '2022-06-15 07:13:50'),
(10, 1, 2, 'Ministry of Education', '#', NULL, NULL, 1000, NULL, NULL, '2022-06-15 07:14:08', '2022-06-15 07:14:08'),
(11, 1, 2, 'Office of Chancellor', '#', NULL, NULL, 1000, NULL, NULL, '2022-06-15 07:14:24', '2022-06-15 07:14:24'),
(12, 1, 2, 'Office of Prime minister', '#', NULL, NULL, 1000, NULL, NULL, '2022-06-15 07:14:47', '2022-06-15 07:14:47'),
(13, 1, 3, 'Research Cell', '#', NULL, NULL, 0, NULL, NULL, '2022-06-20 04:21:01', '2022-06-20 04:22:25'),
(14, 1, 3, 'Cyber Center', '#', NULL, NULL, 1, NULL, NULL, '2022-06-20 04:21:22', '2022-06-20 04:22:25'),
(15, 1, 3, 'IQAC', '#', NULL, NULL, 2, NULL, NULL, '2022-06-20 04:21:44', '2022-06-20 04:22:25'),
(16, 1, 3, 'ICT Cell', '#', NULL, NULL, 3, NULL, NULL, '2022-06-20 04:22:21', '2022-06-20 04:22:25'),
(17, 1, 4, 'Hall of Residence', '#', NULL, NULL, 0, NULL, NULL, '2022-06-20 04:23:10', '2022-06-20 04:24:08'),
(18, 1, 4, 'Medical Center', '#', NULL, NULL, 1, NULL, NULL, '2022-06-20 04:23:28', '2022-06-20 04:24:08'),
(19, 1, 4, 'Central Library', '#', NULL, NULL, 2, NULL, NULL, '2022-06-20 04:23:48', '2022-06-20 04:24:08'),
(20, 1, 4, 'Auditorium', '#', NULL, NULL, 3, NULL, NULL, '2022-06-20 04:24:04', '2022-06-20 04:24:08'),
(21, 1, 1, NULL, NULL, 1, 'page', 4, NULL, NULL, '2022-06-21 05:29:14', '2022-11-05 09:23:49'),
(22, 1, 1, NULL, NULL, 2, 'page', 0, NULL, NULL, '2022-06-22 03:40:59', '2022-06-22 03:41:08'),
(23, 1, 1, NULL, NULL, 3, 'page', 2, NULL, NULL, '2022-06-22 04:09:33', '2022-11-05 09:15:59'),
(26, 1, 1, NULL, NULL, 6, 'page', 3, 22, NULL, '2022-06-22 09:36:13', '2022-11-05 05:52:49'),
(27, 1, 1, NULL, NULL, 7, 'page', 2, 21, NULL, '2022-06-22 13:30:21', '2022-11-05 09:23:49'),
(28, 1, 1, NULL, NULL, 8, 'page', 5, NULL, NULL, '2022-06-23 09:22:19', '2022-11-05 09:23:49'),
(30, 1, 1, NULL, NULL, 10, 'page', 0, 22, NULL, '2022-11-03 08:57:05', '2022-11-03 08:57:19'),
(31, 1, 1, NULL, NULL, 11, 'page', 1, 22, NULL, '2022-11-03 09:21:16', '2022-11-03 09:21:25'),
(32, 1, 1, NULL, NULL, 12, 'page', 2, 22, NULL, '2022-11-05 05:52:32', '2022-11-05 05:52:49'),
(33, 1, 1, 'Academic', '#', NULL, NULL, 1, NULL, NULL, '2022-11-05 05:54:27', '2022-11-05 05:56:21'),
(34, 1, 1, NULL, NULL, 10, 'page', 0, 33, NULL, '2022-11-05 05:56:00', '2022-11-05 05:56:21'),
(35, 1, 1, NULL, NULL, 14, 'page', 2, 33, NULL, '2022-11-05 05:57:41', '2022-11-05 05:57:57'),
(36, 1, 1, NULL, NULL, 13, 'page', 1, 33, NULL, '2022-11-05 05:57:41', '2022-11-05 05:57:57'),
(37, 1, 1, NULL, NULL, 17, 'page', 2, 23, NULL, '2022-11-05 09:15:23', '2022-11-05 09:15:59'),
(38, 1, 1, NULL, NULL, 16, 'page', 1, 23, NULL, '2022-11-05 09:15:23', '2022-11-05 09:15:59'),
(39, 1, 1, NULL, NULL, 15, 'page', 0, 23, NULL, '2022-11-05 09:15:23', '2022-11-05 09:15:59'),
(40, 1, 1, NULL, NULL, 19, 'page', 1, 2, NULL, '2022-11-05 09:18:37', '2022-11-05 09:21:13'),
(41, 1, 1, NULL, NULL, 18, 'page', 0, 2, NULL, '2022-11-05 09:18:37', '2022-11-05 09:21:13'),
(44, 1, 1, NULL, NULL, 22, 'page', 0, 28, NULL, '2022-11-05 09:27:01', '2022-11-05 09:29:13'),
(45, 1, 1, 'Miscellaneous', '#', NULL, NULL, 6, NULL, NULL, '2022-11-05 09:29:05', '2022-11-05 09:29:13'),
(46, 1, 1, NULL, NULL, 28, 'page', 5, 45, NULL, '2022-11-05 09:31:53', '2022-11-05 09:32:45'),
(47, 1, 1, NULL, NULL, 27, 'page', 4, 45, NULL, '2022-11-05 09:31:53', '2022-11-05 09:32:45'),
(48, 1, 1, NULL, NULL, 26, 'page', 3, 45, NULL, '2022-11-05 09:31:53', '2022-11-05 09:32:45'),
(49, 1, 1, NULL, NULL, 25, 'page', 2, 45, NULL, '2022-11-05 09:31:53', '2022-11-05 09:32:45'),
(50, 1, 1, NULL, NULL, 24, 'page', 1, 45, NULL, '2022-11-05 09:31:53', '2022-11-05 09:32:45'),
(51, 1, 1, NULL, NULL, 23, 'page', 0, 45, NULL, '2022-11-05 09:31:53', '2022-11-05 09:32:45'),
(52, 1, 1, 'Office Staffs', 'people-list/Office Staffs', NULL, NULL, 0, 21, NULL, '2022-11-12 06:40:32', '2022-11-12 06:42:01'),
(53, 1, 1, 'Faculty Members', 'people-list/Faculty Members', NULL, NULL, 1, 21, NULL, '2022-11-12 06:41:22', '2022-11-12 06:42:02');

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
(4, '2021_03_08_110020_create_settings_table', 1),
(5, '2021_03_08_120921_create_media_table', 1),
(6, '2021_03_08_121341_create_categories_table', 1),
(7, '2021_03_09_054506_create_pages_table', 1),
(8, '2021_03_13_120036_create_sliders_table', 1),
(9, '2021_03_14_083335_create_menus_table', 1),
(10, '2021_03_14_083447_create_menu_items_table', 1),
(11, '2021_04_18_044508_create_emails_table', 1),
(12, '2021_12_06_164323_create_home_sections_table', 1),
(13, '2021_12_07_154536_create_section_design_types_table', 1),
(14, '2021_12_07_155509_create_section_names_table', 1),
(15, '2022_02_03_170328_create_tags_table', 1),
(16, '2022_02_03_170403_create_service_types_table', 1),
(17, '2022_02_03_170702_create_service_materials_table', 1),
(18, '2022_02_03_170748_create_user_services_table', 1),
(19, '2022_02_03_173803_create_services_table', 1),
(20, '2022_04_17_123331_create_blogs_table', 1),
(21, '2022_04_17_164553_create_comments_table', 1),
(22, '2022_05_14_151557_create_news_table', 1),
(23, '2022_05_16_115150_create_events_table', 1),
(24, '2022_05_17_121905_create_event_attributes_table', 1),
(25, '2022_05_17_161351_create_research_table', 1),
(26, '2022_05_18_125859_create_people_table', 1),
(27, '2022_05_18_130002_create_people_lists_table', 1),
(28, '2022_05_18_130035_create_people_qualifications_table', 1),
(29, '2022_05_18_130100_create_people_qualification_categories_table', 1),
(30, '2022_05_18_130127_create_people_qualification_values_table', 1),
(31, '2022_05_31_142022_create_widgets_table', 1),
(32, '2021_12_18_131934_create_galleries_table', 2),
(33, '2021_12_18_132034_create_gallery_items_table', 2),
(34, '2022_06_22_161713_create_request_contacts_table', 2),
(35, '2022_06_22_165948_create_alumnis_table', 3),
(36, '2022_06_22_170020_create_notice_boards_table', 3),
(37, '2022_06_25_145103_create_permissions_table', 4),
(38, '2022_06_25_145116_create_roles_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `position` int(11) DEFAULT '1000',
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_tags` text COLLATE utf8mb4_unicode_ci,
  `feature_type` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0=image,1=video',
  `feature_video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'File',
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_embade_code` text COLLATE utf8mb4_unicode_ci,
  `media_id` bigint(20) UNSIGNED DEFAULT NULL,
  `source_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `source_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `publish_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `category_id`, `title`, `sub_title`, `slug`, `description`, `position`, `featured`, `meta_title`, `meta_description`, `meta_tags`, `feature_type`, `feature_video`, `image`, `image_path`, `video_type`, `video`, `video_embade_code`, `media_id`, `source_name`, `source_link`, `status`, `deleted_at`, `publish_date`, `created_at`, `updated_at`) VALUES
(1, 1, 'Quos reprehenderit', 'Ipsum accusamus recu', 'quos-reprehenderit', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 1000, 0, 'Necessitatibus atque', 'Ipsum totam mollitia', 'Autem sequi autem no', 0, NULL, '1668084089.jpg', '2022/11', 'File', NULL, NULL, 35, 'Zorita Campbell', 'https://www.xivabykyh.mobi', 1, NULL, '1998-12-06', '2022-06-15 06:20:48', '2022-11-10 12:41:37');

-- --------------------------------------------------------

--
-- Table structure for table `notice_boards`
--

CREATE TABLE `notice_boards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notice_boards`
--

INSERT INTO `notice_boards` (`id`, `title`, `slug`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Test Notices', 'test-notices', '<p>test notice create</p>', 1, '2022-06-22 13:21:39', '2022-06-22 13:21:48');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `position` int(11) DEFAULT '1000',
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_tags` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `media_id` bigint(20) UNSIGNED DEFAULT NULL,
  `template` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `status`, `title`, `slug`, `short_description`, `description`, `position`, `featured`, `meta_title`, `meta_description`, `meta_tags`, `image`, `media_id`, `template`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'People', 'people', NULL, NULL, 1000, 0, 'People', NULL, NULL, NULL, NULL, 'people.index', NULL, '2022-06-21 05:28:38', '2022-06-21 05:28:38'),
(2, 1, 'About Us', 'about-us', NULL, '<p>Our Faculty tech a wide portfolio microbiology courses at the undergraduate and graduate levels. We also serve at the as the home department for the Graduate Field of Microbiology. (With over 40 affiliated faculty members) and provide a center of expertise for numerous aspects of microbial biology. Research within our department is focused on prokaryotic molecular biology and environmental microbiology.</p>', 1000, 0, NULL, NULL, NULL, '2022/06/1655869236.jpg', 22, NULL, NULL, '2022-06-22 03:40:36', '2022-06-22 03:40:36'),
(3, 1, 'Research', 'research', NULL, NULL, 1000, 0, NULL, NULL, NULL, NULL, NULL, 'research.index', NULL, '2022-06-22 04:09:19', '2022-06-22 04:09:19'),
(4, 1, 'News', 'news', NULL, NULL, 1000, 0, NULL, NULL, NULL, NULL, NULL, 'news.index', NULL, '2022-06-22 07:19:20', '2022-06-22 07:19:20'),
(5, 1, 'Events', 'events', NULL, NULL, 1000, 0, NULL, NULL, NULL, NULL, NULL, 'event.index', NULL, '2022-06-22 08:47:45', '2022-06-22 08:47:45'),
(6, 1, 'Contact Us', 'contact-us', NULL, NULL, 1000, 0, NULL, NULL, NULL, NULL, NULL, 'contactUs', NULL, '2022-06-22 09:35:59', '2022-06-22 09:35:59'),
(7, 1, 'Alumni', 'alumni', NULL, NULL, 1000, 0, NULL, NULL, NULL, NULL, NULL, 'alumni.index', NULL, '2022-06-22 13:30:08', '2022-06-22 13:30:08'),
(8, 1, 'Notice', 'notice', NULL, NULL, 1000, 0, NULL, NULL, NULL, NULL, NULL, 'notice.index', NULL, '2022-06-23 09:21:59', '2022-06-23 09:21:59'),
(9, 1, 'Overview', 'overview', NULL, NULL, 1000, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-03 08:51:32', '2022-11-03 08:46:18', '2022-11-03 08:51:32'),
(10, 1, 'Overview', 'overview', NULL, '<p>Department of Microbiology started its journey in 2009. Since establishment, this department has become one of the best departments in this university. Dynamic environment for academic activity and research, friendly relationship between teacher and students, co-operative and positive attitude among the members of department etc. have made it possible to become one of the top departments in this university.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>The Department of Microbiology has set its goal to become a center for excellence in respect of both academic and research aspects. By providing world class education with research friendly environment, this department has been trying to attaining the goal. As a consequence, undergrad students can acquire complete knowledge of fundamental, advanced and applied microbiology and<br />\r\ngraduates become capable of applying their theoretical knowledge and technical skills in practical field for personal, professional or research perspectives.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Degrees offered by the department are Bachelor of Science (BS) in Microbiology and Masters of Science (MS) in Microbiology. Both <strong>undergraduate</strong> and <strong>post graduate</strong> program provide comprehensive knowledge of theoretical as well as applied or practical microbiology which enable the students to become updated with the global trend in the field microbiology.</p>', 1000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-03 08:56:41', '2022-11-03 09:06:33'),
(11, 1, 'Chair’s Message', 'chair-s-message', NULL, '<p><img alt=\"\" src=\"https://media.licdn.com/dms/image/C4D03AQHwETUbG5O1ag/profile-displayphoto-shrink_800_800/0/1517287990120?e=1672876800&amp;v=beta&amp;t=RDvX83FBG0yedJz0ojMEpW03NWNkW4VH7X5KQ4HprzU\" style=\"height:200px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Dr. Firoz Ahmed</strong><br />\r\n<strong>Professor &amp; Chair</strong></p>\r\n\r\n<p>Welcome to the Department of Microbiology! Within this site, you will learn more about the educational and research opportunities in our department.</p>\r\n\r\n<p><strong>World Class Education</strong><br />\r\nThis department always dedicated to ensure the best possible provision to the students through the effort and dedication of the highly talented and committed faculty members. They are committed to prepare the students as good researchers and future leaders in biological sciences. Our past graduate students have gone on to exceptional careers in research and academia, as well as diverse<br />\r\nfields in home and aboard.</p>\r\n\r\n<p><br />\r\n<strong>Exciting Research opportunities</strong><br />\r\nIn addition to classroom training, we offer our students outstanding research opportunities in different research laboratories equipped with cutting edge research facilities. Moreover, department of Microbiology also arrange seminars and workshops that enable the faculties and students to enhance their skills and to learn about advanced new techniques. With the support of the department authority, the students are running several co-curricular clubs which give the students chance to explore their talents. Various co-curricular events such as indoor games, cultural programs, excursion etc. are also arranged on regular basis to recharge the whole team.</p>\r\n\r\n<p><br />\r\nI hope you find our site informative. Please contact me with your questions and<br />\r\nfeedback. Enjoy the tour!</p>', 1000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-03 09:20:42', '2022-11-05 11:53:06'),
(12, 1, 'News & Events', 'news-events', NULL, '<p><strong>National Mourning Day observed at Microbiology department</strong></p>\r\n\r\n<p><br />\r\nDepartment of Microbiology organized a program on the occasion of National Mourning Day marking the 47 th death anniversary of Bangabandhu Sheikh Mujibur Rahman, the father of the nation on 22 August, 2022 on the university campus. On this occasion, a discussion, presentation of wall magazine, quiz contest and essay writing contest among students was organized by the department. The Vice Chancellor of the university Professor Dr. Md. Didar-ul-Alam was present as chief guest at the program while Professor Dr. Mohammad Abdul Baki and Professor Dr. Newaz Mohammed Bahadur was present as special guests. The program was chaired by the departmental head Professor Dr. Firoz Ahmed.</p>', 1000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-05 05:52:12', '2022-11-05 05:52:12'),
(13, 1, 'Undergraduate', 'undergraduate', NULL, '<p><strong>The department offers ONE undergraduate program: BS in Microbiology Learning Objectives and Outcomes</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Though microbiology is a basic subject it has diverse applied branches. Objective of the undergrad program is to provide broad knowledge of microbiology including both basic areas and applied branches like industrial microbiology, pharmaceutical microbiology etc. So, that student familiar with various aspects of microbiology and become able to determine and prepare for his carrier goal depending on his personal interest. In addition, undergrad program also includes some relevant courses like immunology, biochemistry etc. so, student not only gain access to vast knowledge of microbiology but also to other relevant fields which widen carrier opportunity for students. In addition to theory classes, practical classes and exams for each course are also attended by the students which make them accustomed with basic laboratory techniques in the field of microbiology. Incorporation of apparently irrelevant courses such as biostatistics, computer application etc. makes the student skilled in data handling, processing etc. Moreover, each student is given opportunity to do small research under supervision of faculty member. As a consequence, it is expected that after completion of graduation a student would.</p>\r\n\r\n<ul>\r\n	<li>Have overall basic knowledge about pure microbiology and ideas about relevant subjects&rsquo; area like immunology, biochemistry, human physiology, applied microbiology.</li>\r\n	<li>Be skilled in basic techniques in the field of microbiology, biochemistry etc.</li>\r\n	<li>Have good skill in data collection, processing, statistics, data presentation etc.</li>\r\n	<li>Be conscious of current trend and demand in industrial field related to microbiology.</li>\r\n	<li>Have good concept about the practical application of microbiology in daily life.</li>\r\n	<li>Be able to communicate and share ideas and knowledge in both Bengali and English medium with both professional and common people.</li>\r\n	<li>Have good skill in communication in verbal and written form.</li>\r\n	<li>Be good enough in basic computational skill and have knowledge in information and communication technology.</li>\r\n	<li>Be able to design a small project and do research.</li>\r\n	<li>Be aware of on-going researches in the field of microbiology.</li>\r\n	<li>Be confident to select suitable carrier for him.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Course Curriculum</strong></p>\r\n\r\n<p><a href=\"#\">Download Course Curriculum for undergraduate program in Microbiology</a></p>\r\n\r\n<p><strong>Admission Requirement</strong></p>\r\n\r\n<p>Students are admitted in the undergraduate program in Microbiology according to the University admission rules in accordance with guideline provided by University Grant Commission (UGC).</p>', 1000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-05 05:57:04', '2022-11-05 06:07:36'),
(14, 1, 'Graduate', 'graduate', NULL, '<p><strong>The department offers ONE graduate program: MS in Microbiology Learning Objectives and Outcomes</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>MS program aims at preparing graduates of microbiology competent for both conventional jobs and also for world class researches. This program is more focused in the field of microbiology. In one semester students acquire advanced knowledge in the field of microbiology and learn how to design a research project. Another semester is dedicated mainly for researches where student learn actually how to conduct researches as they have to complete dissertation and submit thesis paper. In addition they also learn how to write critical review on a given topic which makes them skilled in studying vast number literatures, screening essentials one and skimming the information. Moreover, as they have to present their research finding and to attend a seminar presentation, their skills in<br />\r\ncommunicating and sharing information are enhanced during MS program. Beside thesis group students, students of non-thesis group also get opportunity to do research in projects or to do internship in industrial organizations which make them fit for professional field.</p>\r\n\r\n<p>Ultimately, it is expected that after completion of MS a student would &ndash;</p>\r\n\r\n<ul>\r\n	<li>Gain the advanced knowledge in the field of microbiology and relevant areas</li>\r\n	<li>Have clear idea about current prospects of microbiology in industrial fields</li>\r\n	<li>Can explore the opportunities for both research and job and can exploit those</li>\r\n	<li>Be able to design a research project in rational way and to conduct the research successfully</li>\r\n	<li>Be competent candidate for competitive job market</li>\r\n	<li>Be aware of most recent advancements achieved in the field of microbiology</li>\r\n	<li>Have innovative ideas to implement the knowledge of microbiology which has financial impacts</li>\r\n</ul>\r\n\r\n<p><strong>Course Curriculum</strong></p>\r\n\r\n<p><a href=\"#\">Download Course Curriculum for Graduate program in Microbiology</a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Admission Requirement</strong></p>\r\n\r\n<p>Students are admitted in the graduate program in Microbiology according to the<br />\r\n<strong>University admission rules</strong> in accordance with guideline provided by University<br />\r\nGrant Commission (UGC).</p>', 1000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-05 05:57:19', '2022-11-05 08:24:52'),
(15, 1, 'Research Laboratories', 'research-laboratories', NULL, '<p><strong>General Microbiology Lab</strong></p>\r\n\r\n<p>The General Microbiology Laboratory, located in the Department of Microbiology at the NSTU. The lab works in close collaboration with the others biological laboratory of the university as well as others domestic world class laboratories. Our research uses conventional approaches, genomics, molecular biology, epidemiology and clinical studies to addresses a broad range of issues related to invasive bacterial diseases in humans and animals, especially those caused by Staphylococci, E.coli, Salmonella, Klebsiella, Pseudomonas, Bacillus, Enterococci and other antimicrobial-resistant species. Additionally, working closely with environmental and food scientists in the NSTU, we investigate the soil microbiome, food microbiome, bacterial evolution, adaptation, epidemiology and spread of bacterial pathogens of public health significance such as Listeria monocytogenes, Shigella and Salmonella spp. and others gram positive species.</p>\r\n\r\n<p>Our Department-specific expertise covers:</p>\r\n\r\n<ol>\r\n	<li>Microbial genomics and evolution</li>\r\n	<li>Animal models of microbial pathogenesis</li>\r\n	<li>Genomics including genome sequencing, next-generation sequencing</li>\r\n	<li>Drug discovery and computational biology</li>\r\n	<li>Fungal and algal diseases evaluation and genomic study</li>\r\n</ol>\r\n\r\n<p>See the list of <a href=\"#\"><strong>publications</strong></a> from the research of this lab.</p>\r\n\r\n<p><strong>Contact us:</strong><br />\r\nPhone:&nbsp;02334496526<br />\r\nE-mail: microbiology@office.nstu.edu.bd</p>', 1000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-05 09:14:18', '2022-11-05 11:51:20'),
(16, 1, 'Research Projects', 'research-projects', NULL, '<p><strong>Research Projects</strong></p>\r\n\r\n<p><strong>Correlation between blood glucose concentration and HBV pathogenesis</strong><br />\r\nFunding source: Self<br />\r\nDuration: 1year<br />\r\nSupervisor: <strong>Dr. Md. Arifur Rahman, Uditi Paul Bristi</strong></p>\r\n\r\n<p><strong>Development of loop mediated isothermal amplification (LAMP) assay for rapid detection of Bacillus spp. from food and feed samples</strong><br />\r\nFunding source: Self<br />\r\nDuration: 1year<br />\r\nSupervisor: <strong>Israt Islam, Dr. Md. Arifur Rahman</strong></p>\r\n\r\n<p><strong>Determination of uncultured marine microbial resources of Bay of Bengal by a combination of highly diluted-to-extinction cultivation methods</strong><br />\r\nFunding source: Self<br />\r\nDuration: 1year<br />\r\nSupervisor:<strong> Dr. Md. Arifur Rahman, Dr. Firoz Ahmed</strong></p>', 1000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-05 09:14:36', '2022-11-05 11:46:26'),
(17, 1, 'Publications', 'publications', NULL, '<p><strong>Publications</strong></p>\r\n\r\n<p><strong><a href=\"#\">2022</a></strong><br />\r\nIslam M.A., Haque M.A., Rahman M.A., Hossen F., Reza M., Barua A., Marzan A.A., Das T.,Baral K., He C., Ahmed F., Bhattacharya P. and Jakariya M.(2022) A Review on Measures to Rejuvenate Immune System: Natural Mode of Protection Against Coronavirus Infection. Front. Immunol. 13:837290. doi: 10.3389/fimmu.2022.837290. <a href=\"#\">(Link)</a></p>\r\n\r\n<p><br />\r\nHoque, M. N., Talukder, A. K., Saha, O., Hasan, M. M., Sultana, M., Rahman, A. A., &amp; Das, Z.C. (2022). Antibiogram and virulence profiling reveals multidrug resistant Staphylococcus aureus as the predominant aetiology of subclinical mastitis in riverine buffaloes. Veterinary Medicine and Science. <a href=\"#\">(Link)</a></p>\r\n\r\n<p><br />\r\nSayeed, M.A.; Ferdous, J.; Saha, O.; Islam, S.; Choudhury, S.D.; Abedin, J.; Hassan, M.M.;Islam, A. Transmission Dynamics and Genomic Epidemiology of Emerging Variants of SARS-CoV-2 in Bangladesh. Trop. Med. Infect. Dis. 2022, 7, 197. <a href=\"#\">(Link)</a></p>\r\n\r\n<p><br />\r\nIslam A, Sayeed MA, Kalam MA, Fedous J, Shano S, Abedin J, Islam S, Choudhury SD, Saha O, Hassan MM. Transmission Pathways and Genomic Epidemiology of Emerging Variants of SARS-CoV-2 in the Environment. COVID. 2022; 2(7):916-939. <a href=\"#\">(Link)</a></p>\r\n\r\n<p><br />\r\nMahfuz, A. M. U. B., Khan, M. A., Sajib, E. H., Deb, A., Mahmud, S., Hasan, M., ...&amp; Rahaman, M. M. (2022). Designing potential siRNA molecules for silencing the gene of the nucleocapsid protein of Nipah virus: A computational investigation. Infection, Genetics and Evolution, 105310. <a href=\"#\">(Link)</a></p>\r\n\r\n<p><br />\r\nDevnath, P., Wajed, S., Das, R. C., Kar, S., Islam, I., &amp; Al Masud, H. A. (2022). The pathogenesis of Nipah virus: A review.&nbsp;Microbial Pathogenesis, 105693. <a href=\"#\">(Link)</a></p>\r\n\r\n<p><br />\r\nBaten, N., Wajed, S., Talukder, A., Masum, M., Ullah, H., &amp; Rahman, M. (2022). Coinfection of fungi with SARS-CoV-2 is a detrimental health risk for COVID-19 patients.&nbsp;Beni-Suef University Journal of Basic and Applied Sciences,&nbsp;11(1), 1-11. <a href=\"#\">(Link)</a></p>\r\n\r\n<p><br />\r\nRahman, M., Masum, M., Ullah, H., Wajed, S., &amp; Talukder, A. (2022). A comprehensive review on COVID-19 vaccines: development, effectiveness, adverse effects, distribution and challenges.&nbsp;Virusdisease, 1-22. <a href=\"#\">(Link)</a></p>\r\n\r\n<p><br />\r\nYeasmin, S., Banu, T. A., Goswami, B., Sarkar, M. M. H., Jahan, I., Habib, A., &amp; Akter, S. (2022). In vitro Regeneration of Strawberry Plant from Leaf Explants via Callus Induction. Plant Tissue Culture and Biotechnology, 32(1), 67-75. <a href=\"#\">(Link)</a></p>\r\n\r\n<p><br />\r\nBanik, A., Sinha, S., Ahmed, S. R., Chowdhury, M. M. H., Mukta, S., Ahmed, N., &amp; Rani, N. A.(2022). Immunoinformatics approach for designing a universal multiepitope vaccine against Chandipura Virus. Microbial Pathogenesis, 162, 105358. <a href=\"#\">(Link)</a></p>\r\n\r\n<p>Chowdhury, M. F. F., Islam, A., Palit, P. K., Mozibullah, M., Sohel, M., Khatun, M. M., ... &amp; Nath, S. K. (2022). RLLB/Alb ratio: a promising noninvasive diagnostic marker in assessing esophageal varices in cirrhotic patients. Journal of Clinical Laboratory Analysis, 36(8), e24589.<a href=\"#\">(Link)</a></p>\r\n\r\n<p><br />\r\nAmin, S., Aktar, S., Rahman, M. M., &amp; Chowdhury, M. M. H. (2022). NLRP3 inflammasome activation in COVID-19: an interlink between risk factors and disease severity. Microbes and Infection, 24(1), 104913. <a href=\"#\">(Link)</a></p>\r\n\r\n<p><strong><a href=\"#\">2021</a></strong><br />\r\nRahman, M. A.,*&nbsp;&amp; Islam M.S. (2021). Early approval of COVID-19 vaccine: Pros and cons. Hum. Vaccines Immunother. 17 (12). doi:10.1080/21645515.2021.1944742. <a href=\"#\">(Link)</a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Rahman, M. A., Ueda, K., and Honda, T*. (2020) A traditional Chinese medicine, maoto, suppresses hepatitis B virus production. Front. Cell. Infect. Microbiol. 10, 894. doi:10.3389/FCIMB.2020.581345. <a href=\"#\">(Link)</a></p>\r\n\r\n<p><br />\r\nRafi, J. H., Jafar, T., Pathan, M. T., Reza, R., Islam, S., Sourna, I. J., ...&amp; Ahammad, F. (2021). High expression of bone morphogenetic protein 1 (BMP1) is associated with a poor survival rate in human gastric cancer, a dataset approaches.&nbsp;Genomics,&nbsp;113(1), 1141-1154. <a href=\"#\">(Link)</a></p>\r\n\r\n<p><br />\r\nHossain, I., Bhowmik, S., Uddin, M. S., Devnath, P., Akter, A., Eti, L. N., ...&amp; Islam, M. T. (2021). Prevalence of urinary tract infections, associated risk factors, and antibiotic resistance pattern of uropathogens in young women at Noakhali, Bangladesh.&nbsp;Asian Journal of Medical and Biological Research,&nbsp;7(2), 202-213. <a href=\"#\">(Link)</a></p>\r\n\r\n<p><br />\r\nTalukder, A., Rahman, M., Chowdhury, M. M. H., Mobashshera, T. A., &amp; Islam, N. N. (2021). Plasmid profiling of multiple antibiotic-resistant Pseudomonas aeruginosa isolated from soil of the industrial area in Chittagong, Bangladesh. Beni-Suef University Journal of Basic and Applied Sciences, 10(1), 1-7. <a href=\"#\">(Link)</a></p>\r\n\r\n<p><br />\r\nAhmed, S. R., Banik, A., Anni, S. M., &amp; Chowdhury, M. M. H. (2021). Inhibitory potential of plant-derived metabolites against Zika virus: a computational-aided approach. Phytomedicine Plus, 1(4), 100129. <a href=\"#\">(Link)</a></p>\r\n\r\n<p><br />\r\nRahman, M. M., Talukder, A., Chowdhury, M. M. H., Talukder, R., &amp; Akter, R. (2021). Coronaviruses in wild birds&ndash;A potential and suitable vector for global distribution. Veterinary Medicine and Science, 7(1), 264-272. <a href=\"#\">(Link)</a></p>\r\n\r\n<p><br />\r\nChowdhury, M. M. H., Salazar, C. J. J., &amp;&nbsp; Nurunnabi, M. (2021). Recent advances in bionanomaterials for liver cancer diagnosis and treatment. Biomaterials Science, 9(14), 4821-4842. <a href=\"#\">(Link)</a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ahmed, S. R., Rabbee, M. F., Roy, A., Chowdhury, R., Banik, A., Kubra, K., ... &amp; Baek, K. H. (2021). Therapeutic promises of medicinal plants in Bangladesh and their bioactive compounds against ulcers and inflammatory diseases. Plants, 10(7), 1348. <a href=\"#\">(Link)</a></p>\r\n\r\n<p><strong><a href=\"#\">2020</a></strong><br />\r\nHossain, M. G.*, Mahmud, M. M., Rahman, M. A., Akter, S., Nazir, K. H. M. N. H., Saha, S., et al. (2020). Complete Genome Sequence of a Precore-Defective Hepatitis B Virus Genotype D2 Strain Isolated in Bangladesh. Microbiol. Resour.Announc. 9. doi:10.1128/mra.00083-20.&nbsp;<a href=\"#\">(Link)</a></p>\r\n\r\n<p><br />\r\nRahman, M. A., Hossain G.M., Singha, A. C., Islam M.S., and Islam, M.A.*(2020). A retrospective analysis of influence of environmental/ air temperature and relative humidity on sARs-CoV-2 outbreak. J. Pure Appl. Microbiol. 14, 1705&ndash;1714. doi:10.22207/JPAM.14.3.09. <a href=\"#\">(Link)</a></p>\r\n\r\n<p><br />\r\nIslam, S., Mumtaz, T., &amp; Hossen, F. (2020). Anaerobic digestion of kitchen waste generated from Atomic Energy Research Establishment (AERE) cafeteria for lactic acid production.&nbsp;Asian-Australasian Journal of Bioscience and Biotechnology,&nbsp;5(3), 88-99 <a href=\"#\">(Link)</a></p>\r\n\r\n<p><br />\r\nSamad, A., Jafar, T., &amp;&nbsp; Rafi, J. H. (2020). Identification of angiotensin-converting enzyme 2 (ACE2) protein as the potential biomarker in SARS-CoV-2 infection-related lung cancer using computational analyses.&nbsp;Genomics,&nbsp;112(6), 4912-4923. <a href=\"#\">(Link)</a></p>\r\n\r\n<p><br />\r\nPaul, P., Al Hasan, M. Z., Kumar, A., Chowdhury, M. H., Chowdhury, M. J., Purba, N. H., ... &amp;&nbsp; Rahman, S. M. A. (2020). Prevalence of Staphylococcus aureus, Klebsiella spp., Escherichia coli and Pseudomonas spp. in some common Bangladeshi milk and dairy products. Journal of Ecobiotechnology, 12, 5-9. <a href=\"#\">(Link)</a></p>\r\n\r\n<p><br />\r\nRoy, S., Kumar, A., Islam, M. S., Rabbi, F. A., Paul, P., Mia, M. M., ... &amp;&nbsp; Ray, A. K. (2020). Drug resistance and its future perspectives in cancer treatment. Asian Oncology Research Journal, 26. <a href=\"#\">(Link)</a></p>\r\n\r\n<p><strong><a href=\"#\">2019</a></strong><br />\r\nHonda, T.*, and Rahman, M. A.. (2019) Profiling of LINE-1-related genes inhepatocellular carcinoma. Int. J. Mol. Sci. 20. doi:10.3390/ijms20030645. <a href=\"#\">(Link)</a></p>\r\n\r\n<p>Abir Al Mahmud, Mohammad Hasan Chowdhury, Farhan Ahmed Rabbi, Zahid Al Hasan, ShakhawatHussen, KamrunNaher, Jayed Chowdhury (2019). &amp;quot;Nutrition for Athletes for Enhancement of their Performance&amp;quot; ASAHPERD Journal: 35.&nbsp;<a href=\"#\">(Link)</a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Saha, T. C., Protity, A. T., Zohora, F. T., Shaha, M., Ahmed, I., Barua, E., ...&amp; Salimullah, M.(2019). Microbial Fuel Cell (MFC) Application for Generation of Electricity from DumpingRubbish and Identification of Potential Electrogenic Bacteria.&nbsp;Adv. Ind. Biotechnol,&nbsp;2(10).<a href=\"#\">(Link)</a></p>\r\n\r\n<p><br />\r\nReza, M., Fiza, J., Hossen, F., &amp;&nbsp; Ahmed, F. (2019). Isolation and partial characterization of organophosphate pesticide degrading bacteria from soil sample of Noakhali, Bangladesh. Bangladesh Journal of Microbiology, 36(1), 17-22. <a href=\"#\">(Link)</a></p>\r\n\r\n<p><br />\r\nChowdhury, M. M. H., Kubra, K., Kanwar, R. K., &amp;&nbsp; Kanwar, J. R. (2019). Nanoparticles Advancing Cancer Immunotherapy. In Biomedical Applications of Graphene and 2D Nanomaterials (pp. 283-304). Elsevier. <a href=\"#\">(Link)</a></p>\r\n\r\n<p><strong><a href=\"#\">2018</a></strong><br />\r\nProsun T.A., Rahaman M.S.*, Yousuf R.S., Rahman, M. A. (2018). Drinking water quality assessment from ground water sources in Noakhali. Int. J. Dev. Sustain. 7, 1676&ndash;1687. <a href=\"#\">(Link)</a></p>\r\n\r\n<p><br />\r\nHossain F.E.*, Chakraborty S., Bhowmick N.C., Rahman, M. A. and F. A. (2018). Comparative Analysis of Antibiotic Resistance Pattern of Bacteria Isolated from Fish of Cultured and Natural Ponds: A Study based on Noakhali Region of Bangladesh. Bioresearch Commun. 4, 586&ndash;591. <a href=\"#\">(Link)</a></p>\r\n\r\n<p><br />\r\nHossain, F. E., Chakraborty, S., Bhowmick, N. C., Rahman, M. A., &amp;&nbsp; Ahmed, F. (2018). Comparative analysis of antibiotic resistance pattern of bacteria isolated from fish of cultured and natural ponds: a study based on noakhali region of Bangladesh.&nbsp;Bioresearch Communications-(BRC),&nbsp;4(2), 586-591. <a href=\"#\">(Link)</a></p>\r\n\r\n<p><br />\r\nRahman, M. M., Uddin, M. S., Aktar, S., Ali, M. S., Paul, P., Hasan, M. M., &amp;&nbsp; Rahman, S. M. A. (2018).&nbsp;&nbsp;&nbsp;&nbsp;Prevalence of etiologic agents causing invasive bacterial disease and evaluation of their antibiotic susceptibility pattern. Asian Journal of Medical and Biological Research, 4(4), 330-336. <a href=\"#\">(Link)</a></p>\r\n\r\n<p><br />\r\nDebnath, T., Bhowmik, S., Islam, T., &amp;&nbsp;Chowdhury, M. M. H. (2018). Presence of multidrug-resistant bacteria on mobile phones of healthcare workers accelerates the spread of nosocomial infection and regarded as a threat to public health in Bangladesh. Journal of microscopy and ultrastructure, 6(3), 165. <a href=\"#\">(Link)</a></p>\r\n\r\n<p><br />\r\nIslam, T., Kubra, K., &amp;&nbsp;Chowdhury, M. M. H. (2018). Prevalence of methicillin-resistant Staphylococcus aureus in hospitals in Chittagong, Bangladesh: A threat of nosocomial infection. Journal of microscopy and ultrastructure, 6(4), 188. <a href=\"#\">(Link)</a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Akther, S., Debnath, T., &amp; Chowdhury, M. M. H. (2018). Multidrug resistant E. coli in hospital waste water: a potential concern for public health. Adv. Biotechnol. Microbiol,&nbsp;8(55572910.19080). <a href=\"#\">(Link)</a></p>', 1000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-05 09:14:53', '2022-11-05 11:33:18'),
(18, 1, 'COVID-19 detection', 'covid-19-detection', NULL, '<p><strong>COVID 19 detection</strong></p>\r\n\r\n<p>The NSTU COVID-19 detection lab was first installed in March, 2020. Since then, the lab has been conveyed by the department of Microbiology. This lab provides services to national epidemiological surveillance system through detecting of COVID-19 cases in Noakhali region. This lab also provides diverse molecular techniques to identify the etiologic agent of COVID-19, specifically SARS-CoV-2, hence, it holds all facilities including RT-PCR, negative and positive pressure room, biosafety and PCR cabinet, samples storage facilities (-20&deg;C freezing and refrigeration system), to be considered it as biosafety level-2 laboratory. Since its installment<br />\r\nabout 0.1 million samples have been tested to identify COVID-19 positive cases and on a daily basis, about 400-500 samples have been tested there. The service hour of this lab is between 9am-5pm, which was 24 hours during pandemic peak time.</p>\r\n\r\n<p><strong>Dr. Firoz Ahmed</strong>, Professor and Chairman of this department, is now the focal point of this lab. Besides, a group of enthusiastic people have been working out there and all the members have a proven track record in virology and epidemiological surveillance system, good in maintaining and handling highly infectious particles. This lab in now conducting many researches regarding COVID-19 and so on.</p>\r\n\r\n<p><strong>Contact us:</strong><br />\r\nPhone:&nbsp;02334496526<br />\r\nE-mail: microbiology@office.nstu.edu.bd</p>', 1000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-05 09:17:57', '2022-11-05 11:01:02'),
(19, 1, 'Diagnostic services', 'diagnostic-services', NULL, '<p><strong>Diagnostic Services</strong></p>\r\n\r\n<p>The diagnostic services in the department of Microbiology are available for reliable and timely services for patients mostly from Noakhali and adjacent districts. We strive to deliver a low costing, largely accurate laboratory services for microbiological and molecular tests for the benefit of the patient&amp;#39;s health. Experienced microbiological staff, with top-notch training and degrees, currently manages this facility. Our Mission is to continuously strive for the highest possible standards in the provision of diagnostics services and in our educational and research activities.</p>\r\n\r\n<p>Modern technology in our lab allows us to perform traditional and automated organism identification as well as MIC (Minimum Inhibitory Concentration) sensitivity testing in less than 24 hours. Additionally, it can identify the genotypes of various bacteria, fungi, and viruses that are resistant to certain treatment classes. Such enzymes include ESBL, Penicillinase, Carbapenemase, and others. Additionally, we may quickly examine any epidemics that occur in any region of the nation. Blood culture (aerobic/ anaerobic/ fungal), High Vaginal Swab (HVS), urine, stool, urethral swab, pus, all cavity fluids, and sputum are just a few of the cultures and sensitivity tests that are carried out at our laboratory. We do thorough tests of all bodily fluids, such as CSF, synovial, peritoneal (ascitic), pleural, semen, etc. The results of the physical, biochemical, and microbiological tests are described in the examination report. Here, testing for Adeno/Rota Virus, Gram stain, Reducing Sugars, Viral Antigen, Stool Examination, Stool Occult Blood, and Urine Examination are all carried out. We identify fungi using fungus culture.</p>\r\n\r\n<p><strong>Currently available tests:</strong></p>\r\n\r\n<ul>\r\n	<li>Antibiotic sensitivity test</li>\r\n	<li>Pathogenicity test</li>\r\n	<li>Gram stain</li>\r\n	<li>Stool Occult Blood</li>\r\n	<li>Urine examination and culture and sensitivity</li>\r\n	<li>Stool examination and culture and sensitivity</li>\r\n	<li>Fungal examination and culture and sensitivity</li>\r\n	<li>Body fluids examination including CSF</li>\r\n	<li>Reducing Sugars test</li>\r\n	<li>Adeno/ Rota Virus tests</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Contact us:</strong></p>\r\n\r\n<p>Phone:&nbsp;02334496526<br />\r\nE-mail: microbiology@office.nstu.edu.bd</p>', 1000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-05 09:18:14', '2022-11-05 10:57:44'),
(20, 1, 'Faculty Members', 'faculty-members', NULL, NULL, 1000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-05 09:20:00', '2022-11-05 09:20:00'),
(21, 1, 'Office Staffs', 'office-staffs', NULL, NULL, 1000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-05 09:20:19', '2022-11-05 09:20:19'),
(22, 1, 'Notice Board', 'notice-board', NULL, '<p><strong><a href=\"#\">Prepare a Notice board according to any website where date and download file will be provided.</a></strong></p>\r\n\r\n<p>Add puja vacation as sample from nstu university website.</p>', 1000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-05 09:26:33', '2022-11-05 10:50:50'),
(23, 1, 'Job Opportunities', 'job-opportunities', NULL, '<p><strong>Job opportunities</strong></p>\r\n\r\n<p>The Department of Microbiology occasionally offers different remunerative and non-remunerative positions in different laboratories in the department. Interested students are advised to contact individual faculty member&nbsp;of their interest.</p>\r\n\r\n<p>For more information please contact us.<br />\r\nPhone:&nbsp;02334496526<br />\r\nE-mail: microbiology@office.nstu.edu.bd</p>', 1000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-05 09:29:35', '2022-11-05 10:49:09'),
(24, 1, 'Training Opportunities', 'training-opportunities', NULL, '<p><strong>Training opportunities</strong></p>\r\n\r\n<p>The Department of Microbiology arranges different workshops and hands on training sessions for enthusiastic students and researchers. The trainings are conducted by the experienced faculty members of the department and experts.</p>\r\n\r\n<p>Following training are conducted on regular basis in the department of Microbiology.</p>\r\n\r\n<ul>\r\n	<li>Covid-19 detection through RT PCR technique.</li>\r\n	<li>Basic Biostatistics.</li>\r\n	<li>Different programming languages for biologists.</li>\r\n	<li>Laboratory Biosafety.</li>\r\n</ul>\r\n\r\n<p>Interested students are requested to keep an eye on the <span class=\"marker\">notice board</span> for next training session.</p>\r\n\r\n<p>For more information, please contact us.<br />\r\nPhone:&nbsp;02334496526<br />\r\nE-mail: microbiology@office.nstu.edu.bd</p>', 1000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-05 09:29:51', '2022-11-05 10:47:18'),
(25, 1, 'Clubs', 'clubs', NULL, '<p><strong>Biofilm</strong></p>\r\n\r\n<p>Biofilm is a club of Microbiology department involving microbiology related learning activities outside of the classes. The club established in 2022.</p>\r\n\r\n<p>For more information, please contact us.<br />\r\nPhone:&nbsp;02334496526<br />\r\nE-mail: microbiology@office.nstu.edu.bd</p>\r\n\r\n<p><strong>MBDCNSTU</strong></p>\r\n\r\n<p>MBDCNSTU is Microbiology Blood Donation Club of NSTU. This is a voluntary blood donation club established to help the students, teachers and stuffs during the urgency of blood. The list of active members with respective blood groups can be found <a href=\"#\">here</a>.</p>\r\n\r\n<p>For more information, please contact us.<br />\r\nPhone:&nbsp;02334496526<br />\r\nE-mail: microbiology@office.nstu.edu.bd</p>', 1000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-05 09:30:04', '2022-11-05 10:30:32'),
(26, 1, 'Online Learning Resources', 'online-learning-resources', NULL, '<p><strong>Society</strong></p>\r\n\r\n<p>American Society for Microbiology (ASM): <a href=\"https://asm.org/\">https://asm.org/</a></p>\r\n\r\n<p>Federation of European Microbiological Societies (FEMS): <a href=\"https://fems-microbiology.org/\">https://fems-microbiology.org/</a></p>\r\n\r\n<p>Bangladesh society of Microbiologists (BSM): <a href=\"https://www.bsm.org.bd/\">https://www.bsm.org.bd/</a></p>\r\n\r\n<p><strong>Research Articles</strong></p>\r\n\r\n<p>PMC (Pubmed):<a href=\"https://www.ncbi.nlm.nih.gov/pmc/journals/\"> https://www.ncbi.nlm.nih.gov/pmc/journals/</a></p>\r\n\r\n<p><strong>Courses</strong></p>\r\n\r\n<p>Coursera: <a href=\"https://www.coursera.org/\">https://www.coursera.org/</a></p>\r\n\r\n<p>Udemy: <a href=\"https://www.udemy.com/\">https://www.udemy.com/</a></p>\r\n\r\n<p>Khan Academy: <a href=\"https://www.khanacademy.org/\">https://www.khanacademy.org/</a></p>\r\n\r\n<p><strong>Video Contents</strong></p>\r\n\r\n<p><strong>MBG NSTU:</strong></p>\r\n\r\n<p>American Society for Microbiology (ASM): <a href=\"https://www.youtube.com/c/AmericanSocietyforMicrobiology\">https://www.youtube.com/c/AmericanSocietyforMicrobiology</a></p>', 1000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-05 09:30:17', '2022-11-05 10:24:15'),
(27, 1, 'Forms/Download', 'forms-download', NULL, '<p><a href=\"#\"><strong>Application for transcript</strong></a></p>\r\n\r\n<p><strong><a href=\"#\">Application for recommendation</a></strong></p>\r\n\r\n<p><a href=\"#\"><strong>Application for Leave</strong></a></p>', 1000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-05 09:30:31', '2022-11-05 10:12:23'),
(28, 1, 'Useful Links', 'useful-links', NULL, '<p><strong>For Research Opportunity/Scholarship/Higher Study/Job vacancy:</strong></p>\r\n\r\n<p>National Institute of Biotechnology (NIB): <a href=\"http://www.nib.gov.bd/\">http://www.nib.gov.bd/</a></p>\r\n\r\n<p>Bangladesh Council of Scientific and Industrial Research (BCSIR): <a href=\"http://www.bcsir.gov.bd/\">http://www.bcsir.gov.bd/</a></p>\r\n\r\n<p>Bangladesh Atomic Energy Commission (BAEC): <a href=\"http://www.baec.gov.bd/\">http://www.baec.gov.bd/</a></p>\r\n\r\n<p>University Grant Commission (UGC): <a href=\"http://www.ugc.gov.bd/\">http://www.ugc.gov.bd/</a></p>\r\n\r\n<p>Ministry of Science and Technology (MOST): <a href=\"https://most.gov.bd/\">https://most.gov.bd/</a></p>\r\n\r\n<p>Prime Minister&amp;#39;s Education Assistance Trust: <a href=\"http://www.pmeat.gov.bd/\">http://www.pmeat.gov.bd/</a></p>\r\n\r\n<p>Bangabandhu Science and Technology Fellowship Trust: <a href=\"http://www.bstft.gov.bd/\">http://www.bstft.gov.bd/</a></p>', 1000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-05 09:30:57', '2022-11-05 10:04:31');

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
-- Table structure for table `people`
--

CREATE TABLE `people` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`id`, `type`, `position`, `status`, `created_at`, `updated_at`) VALUES
(1, 'People', 1, 1, '2022-06-20 05:48:47', '2022-06-20 05:48:47'),
(2, 'Faculty Members', 2, 1, '2022-06-20 05:49:07', '2022-11-12 02:31:16'),
(3, 'Office Staffs', 3, 1, '2022-06-20 05:49:22', '2022-11-12 02:31:51');

-- --------------------------------------------------------

--
-- Table structure for table `people_lists`
--

CREATE TABLE `people_lists` (
  `id` int(10) UNSIGNED NOT NULL,
  `people_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bio` longtext COLLATE utf8mb4_unicode_ci,
  `research_interest` text COLLATE utf8mb4_unicode_ci,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `media_id` bigint(20) UNSIGNED DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `people_lists`
--

INSERT INTO `people_lists` (`id`, `people_id`, `name`, `slug`, `designation`, `department`, `bio`, `research_interest`, `email`, `phone`, `website_link`, `image`, `image_path`, `media_id`, `address`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Dr. Firoz Ahmed', 'dr-firoz-ahmed-PATgG', 'Chairman', 'Microbiology', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio inventore rerum, molestias temporibus neque aut ratione fugit, amet tempora esse quo. Aliquid soluta id eaque, suscipit corrupti aliquam! Ducimus, architecto esse atque fuga a amet. Sint, tenetur eum? Aliquam aut ipsam laudantium cumque cupiditate molestias nam alias enim fugit dolor! Veritatis placeat commodi a eligendi magnam! Recusandae repellat esse voluptatem odio repudiandae molestias nulla amet ab quidem nemo, impedit suscipit magnam cumque voluptatibus, reiciendis consectetur tempora? Nemo quaerat libero porro enim et repudiandae, amet quis quidem nesciunt quam voluptate eum illum a. Architecto, ullam? Ipsum reprehenderit iure possimus unde voluptates.</p>', 'Microbiology', 'Example@nstu.com', '+1 (186) 554-1114', 'https://www.vurodod.org.au', '1655804111.png', '2022/06', 21, 'Department Of Microbiology\r\nNoakhali Science and Technology University\r\nEmail: Example@nstu.com', 0, '2022-06-20 05:55:08', '2022-11-11 18:02:44'),
(2, 2, 'Obayed Haque', 'obayed-haque-qi2Bs', 'Professor', 'Microbiology', '<p>Our Faculty tech a wide portfolio microbiology courses at the undergraduate and graduate levels. We also serve at the as the home department for the Graduate Field of Microbiology. (With over 40 affiliated faculty members) and provide a center of expertise for numerous aspects of microbial biology. Research within our department is focused on prokaryotic molecular biology and environmental microbiology.</p>', NULL, 'obayed@gmail.com', '(607) 254-4778', 'https://micro.cornell.edu/people/esther-angert/', '1655706196.png', '2022/06', 20, 'Mirpur, Dhaka', 0, '2022-06-20 06:23:16', '2022-06-21 10:00:47'),
(3, 2, 'Dr. Firoz Ahmed', 'dr-firoz-ahmed-OAY3d', 'firoz@nstu.edu.bd', NULL, NULL, NULL, 'Professor', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-11-12 02:37:59', '2022-11-12 02:37:59'),
(4, 2, 'Md. Ruhul Amin', 'md-ruhul-amin-stmFT', 'Assistant Professor', NULL, NULL, NULL, 'ruhulmicro13@nstu.edu.bd', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-11-12 02:40:35', '2022-11-12 02:40:35'),
(5, 2, 'Dr. Md. Arifur Rahman', 'dr-md-arifur-rahman-LyXn6', 'Associate Professor', NULL, NULL, 'Understanding the mechanism of viral infection, Controlling viral infection by antiviral therapeutics.', 'arifur@nstu.edu.bd', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-11-12 02:41:59', '2022-11-12 02:41:59'),
(6, 2, 'Dr. Md. Mehadi Hasan Chowdhury', 'dr-md-mehadi-hasan-chowdhury-JA85f', 'Assistant Professor', NULL, NULL, NULL, 'md.mehadihassanchy@yahoo.com', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-11-12 02:43:20', '2022-11-12 02:43:20'),
(7, 2, 'Foysal Hossen', 'foysal-hossen-MBjeD', 'Assistant Professor', NULL, NULL, NULL, 'foysal@nstu.edu.bd', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-11-12 02:44:22', '2022-11-12 02:44:22'),
(8, 2, 'Dr. Khandokar Fahmida Sultana', 'dr-khandokar-fahmida-sultana-cnHTe', 'Assistant Professor', NULL, NULL, 'Research Interest: Clinical microbiology,\r\nantibiotic resistance, biofilm and clinical\r\ndermatophyte resistance.', 'fahmida.kfs@nstu.edu.bd', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-11-12 02:45:12', '2022-11-12 02:45:57'),
(9, 2, 'Dr. Abanti Barua', 'dr-abanti-barua-k3Lrn', 'Associate Professor', NULL, NULL, 'Molecular Ecology and evolution, Eukaryotic microbiology, Algal Genetics, Phytoplankton diversity etc.', 'abantika2005@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-11-12 02:47:13', '2022-11-12 02:47:13'),
(10, 2, 'Dr. Md. Toslim Mahmud', 'dr-md-toslim-mahmud-HoA2a', 'Assistant Professor', NULL, NULL, NULL, 'toslim@nstu.edu.bd', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-11-12 02:48:12', '2022-11-12 02:52:02'),
(11, 2, 'Dr. Mir Salma Akter', 'dr-mir-salma-akter-rnann', 'Lecturer', NULL, NULL, NULL, 'salma.mir@nstu.edu.bd', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-11-12 02:49:09', '2022-11-12 02:49:09'),
(12, 2, 'Arafat Rahman', 'arafat-rahman-HNoml', 'Lecturer', NULL, NULL, NULL, 'arafat@nstu.edu.bd', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-11-12 02:50:08', '2022-11-12 02:50:08'),
(13, 2, 'Sanjoy Kumar Mukharjee', 'sanjoy-kumar-mukharjee-wmwHD', 'Assistant Professor', NULL, NULL, 'Antimicrobial resistance, Zoonotic diseases.', 'sanjoy@nstu.edu.bd', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-11-12 02:50:59', '2022-11-12 02:52:23'),
(14, 2, 'Farzana Ehetasum Hossain', 'farzana-ehetasum-hossain-tqKIZ', 'Assistant Professor', NULL, NULL, NULL, 'farzana@nstu.edu.bd', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-11-12 02:53:18', '2022-11-12 02:53:18'),
(15, 2, 'Md. Mijanur Rahman', 'md-mijanur-rahman-6mDmt', 'Assistant Professor', NULL, NULL, 'Microbiology, Cancer, Vaccine.', 'mijanur@nstu.edu.bd', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-11-12 02:54:10', '2022-11-12 02:54:41'),
(16, 2, 'Md. Sadikur Rahman Shuvo', 'md-sadikur-rahman-shuvo-6QtGk', 'Assistant Professor', NULL, NULL, 'Medicinal plant, Bioinformatics, Molecular dynamics.', 'sadik@nstu.edu.bd', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-11-12 02:55:54', '2022-11-12 02:55:54'),
(17, 2, 'Mahin Reza', 'mahin-reza-RaBWV', 'Assistant Professor', NULL, NULL, 'Genomics, Biotechnology, Bioinformatics.', 'mahin@nstu.edu.bd', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-11-12 02:57:30', '2022-11-12 02:57:30'),
(18, 2, 'Salma Akter', 'salma-akter-WMv3F', 'Lecturer', NULL, NULL, NULL, 'salma.mbg@nstu.edu.bd', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-11-12 02:58:34', '2022-11-12 02:58:34'),
(19, 2, 'Popy Devnath', 'popy-devnath-FMWxw', 'Assistant Professor', NULL, NULL, NULL, 'popydn.mbg@nstu.edu.bd', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-11-12 02:59:43', '2022-11-12 02:59:43'),
(20, 2, 'Sutapa Bhowmik', 'sutapa-bhowmik-tFv4a', 'Lecturer', NULL, NULL, 'Virology, Bacterial pathogenesis, Immunology etc.', 'sbhowmik.mbg@nstu.edu.bd', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-11-12 03:00:46', '2022-11-12 03:00:46'),
(21, 2, 'Mohammad Sharif Uddin', 'mohammad-sharif-uddin-I1QYG', 'Lecturer', NULL, NULL, 'Immunology, Virology, Infectious diseases.', 'sharif.mbg@nstu.edu.bd', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-11-12 03:01:41', '2022-11-12 03:01:41'),
(22, 2, 'Imam Hossain Sifat', 'imam-hossain-sifat-kqcdJ', 'Lecturer', NULL, NULL, NULL, 'ihossain.mbg@nstu.edu.bd', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-11-12 03:02:37', '2022-11-12 03:02:37'),
(23, 2, 'Dr. Otun Saha', 'dr-otun-saha-OAT56', 'Lecturer', NULL, NULL, NULL, 'otun.saha@nstu.edu.bd', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-11-12 03:03:29', '2022-11-12 03:03:29'),
(24, 2, 'Israt Islam', 'israt-islam-ooUsJ', 'Lecturer', NULL, NULL, NULL, 'israt.mbg@nstu.edu.bd', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-11-12 03:04:16', '2022-11-12 03:04:16'),
(25, 2, 'Nikkon Sarker', 'nikkon-sarker-d7jII', 'Lecturer', NULL, NULL, NULL, 'nikkon@nstu.edu.bd', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-11-12 03:05:03', '2022-11-12 03:05:03'),
(26, 2, 'Sumita Rani Saha', 'sumita-rani-saha-DWDEq', 'Lecturer', NULL, NULL, NULL, 'sumita.mbg@nstu.edu.bd', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-11-12 03:06:06', '2022-11-12 03:06:06'),
(27, 2, 'Sultana Rajia', 'sultana-rajia-yyUR8', 'Lecturer', NULL, NULL, NULL, 'rajia.mbg@nstu.edu.bd', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-11-12 03:06:52', '2022-11-12 03:06:52'),
(28, 2, 'Uditi Paul Bristi', 'uditi-paul-bristi-ibgXx', 'Lecturer', NULL, NULL, NULL, 'uditi.mbg@nstu.edu.bd', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-11-12 03:07:52', '2022-11-12 03:07:52');

-- --------------------------------------------------------

--
-- Table structure for table `people_qualifications`
--

CREATE TABLE `people_qualifications` (
  `id` int(10) UNSIGNED NOT NULL,
  `people_list_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `people_qualifications`
--

INSERT INTO `people_qualifications` (`id`, `people_list_id`, `title`, `position`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Education', 1, 1, '2022-06-20 05:55:53', '2022-06-20 05:55:53'),
(2, 1, 'Exprience', 2, 1, '2022-06-20 05:56:14', '2022-06-20 05:56:14'),
(3, 1, 'Research Activities', 3, 1, '2022-06-20 05:56:32', '2022-06-20 05:56:32'),
(4, 1, 'Membership', 4, 1, '2022-06-20 05:56:50', '2022-06-20 05:56:50'),
(5, 1, 'Publication', 5, 1, '2022-06-20 05:57:08', '2022-06-20 05:57:08'),
(6, 1, 'Award', 6, 1, '2022-06-20 05:57:26', '2022-06-20 05:57:26'),
(7, 1, 'Contact', 7, 1, '2022-06-20 05:57:44', '2022-06-20 05:57:44'),
(8, 2, 'Education', 1, 1, '2022-06-20 08:53:00', '2022-06-21 04:27:23'),
(9, 2, 'Exprience', 2, 1, '2022-06-20 08:53:22', '2022-06-20 08:53:22'),
(10, 2, 'Research Activities', 3, 1, '2022-06-20 08:53:38', '2022-06-20 08:53:38'),
(11, 2, 'Membership', 4, 1, '2022-06-20 08:53:52', '2022-06-20 08:53:52'),
(12, 2, 'Publication', 5, 1, '2022-06-20 08:54:08', '2022-06-20 08:54:08'),
(13, 2, 'Award', 6, 1, '2022-06-20 08:54:46', '2022-06-20 08:54:46'),
(14, 2, 'Contact', 7, 1, '2022-06-20 08:55:05', '2022-06-20 08:55:05');

-- --------------------------------------------------------

--
-- Table structure for table `people_qualification_categories`
--

CREATE TABLE `people_qualification_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `people_qualification_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `people_qualification_categories`
--

INSERT INTO `people_qualification_categories` (`id`, `people_qualification_id`, `title`, `position`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Dgree Name', 1, 1, '2022-06-20 05:58:13', '2022-06-20 05:58:13'),
(2, 1, 'Group/Major Subject', 2, 1, '2022-06-20 05:58:55', '2022-06-20 05:58:55'),
(3, 1, 'Board/Institute', 3, 1, '2022-06-20 05:59:23', '2022-06-20 05:59:23'),
(4, 1, 'Country', 4, 1, '2022-06-20 05:59:50', '2022-06-20 06:07:58'),
(5, 1, 'Passing Year', 5, 1, '2022-06-20 06:00:23', '2022-06-20 06:00:23'),
(6, 8, 'Dgree Name', 1, 1, '2022-06-20 08:56:34', '2022-06-21 04:52:19'),
(7, 8, 'Group/Major Subject', 2, 1, '2022-06-20 08:57:00', '2022-06-20 08:57:00'),
(8, 8, 'Board/Institute', 3, 1, '2022-06-20 08:57:31', '2022-06-20 08:57:31'),
(9, 8, 'Country', 4, 1, '2022-06-20 08:57:59', '2022-06-20 08:57:59'),
(10, 8, 'Passing Year', 5, 1, '2022-06-20 08:58:22', '2022-06-20 08:58:22'),
(11, 2, 'Designation', 6, 1, '2022-06-23 07:34:52', '2022-06-23 07:35:38'),
(12, 2, 'Position', 7, 1, '2022-06-23 07:35:24', '2022-06-23 07:35:24'),
(13, 2, 'Location', 8, 1, '2022-06-23 07:35:54', '2022-06-23 07:35:54');

-- --------------------------------------------------------

--
-- Table structure for table `people_qualification_values`
--

CREATE TABLE `people_qualification_values` (
  `id` int(10) UNSIGNED NOT NULL,
  `people_qualification_id` bigint(20) NOT NULL,
  `people_qualification_category_id` bigint(20) UNSIGNED NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `people_qualification_values`
--

INSERT INTO `people_qualification_values` (`id`, `people_qualification_id`, `people_qualification_category_id`, `value`, `position`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'ph.D.', 1, 1, '2022-06-20 06:01:02', '2022-06-20 06:01:02'),
(2, 1, 1, 'Masters', 2, 1, '2022-06-20 06:01:25', '2022-06-20 06:01:25'),
(3, 1, 1, 'Bachelor', 3, 1, '2022-06-20 06:01:50', '2022-06-20 06:01:50'),
(4, 1, 2, 'Bacteriology', 4, 1, '2022-06-20 06:04:15', '2022-06-20 06:04:15'),
(5, 1, 2, 'Microbiology', 5, 1, '2022-06-20 06:04:42', '2022-06-20 06:04:42'),
(6, 1, 2, 'Biochemistry', 6, 1, '2022-06-20 06:05:09', '2022-06-20 06:05:09'),
(7, 1, 3, 'Department of Bacteriology, Hirosaki University', 7, 1, '2022-06-20 06:05:48', '2022-06-20 06:05:48'),
(8, 1, 3, 'Department of Microbiology, University of comilla', 8, 1, '2022-06-20 06:06:45', '2022-06-21 05:19:19'),
(9, 1, 3, 'Department of Microbiology, University of Dhaka', 9, 1, '2022-06-20 06:08:41', '2022-06-20 06:08:41'),
(10, 1, 4, 'Japan', 10, 1, '2022-06-20 06:09:10', '2022-06-20 06:09:10'),
(11, 1, 4, 'Bangladesh', 11, 1, '2022-06-20 06:09:59', '2022-06-20 06:09:59'),
(12, 1, 4, 'Bangladesh', 12, 1, '2022-06-20 06:10:15', '2022-06-20 06:10:15'),
(13, 1, 5, '1989', 13, 1, '2022-06-20 06:11:07', '2022-06-20 06:11:07'),
(14, 1, 5, '1981', 14, 1, '2022-06-20 06:11:31', '2022-06-20 06:11:31'),
(15, 1, 5, '1980', 15, 1, '2022-06-20 06:11:56', '2022-06-20 06:11:56'),
(23, 2, 11, 'Software Engineer', 16, 1, '2022-06-23 07:36:25', '2022-06-23 07:36:25'),
(24, 2, 12, 'Sr. Developer', 17, 1, '2022-06-23 07:36:55', '2022-06-23 07:36:55'),
(25, 2, 13, 'Dhaka, Mirpur', 18, 1, '2022-06-23 07:37:15', '2022-06-23 07:37:15'),
(26, 8, 6, 'ph.D.', 1, 1, '2022-06-23 08:48:21', '2022-06-23 08:48:21'),
(27, 8, 7, 'Bacteriology', 2, 1, '2022-06-23 08:48:57', '2022-06-23 08:48:57'),
(28, 8, 8, 'University of Dhaka', 3, 1, '2022-06-23 08:49:27', '2022-06-23 08:49:27'),
(29, 8, 9, 'Bangladesh', 4, 1, '2022-06-23 08:49:48', '2022-06-23 08:49:48'),
(30, 8, 10, '1993', 5, 1, '2022-06-23 08:50:12', '2022-06-23 08:50:12');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `permission` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `role_id`, `permission`, `created_at`, `updated_at`) VALUES
(3, 1, '{\"news\":{\"add\":\"1\",\"edit\":\"1\",\"view\":\"1\",\"delete\":\"1\",\"list\":\"1\"},\"events\":{\"add\":\"1\",\"edit\":\"1\",\"view\":\"1\",\"delete\":\"1\",\"list\":\"1\"},\"research\":{\"add\":\"1\",\"edit\":\"1\",\"view\":\"1\",\"delete\":\"1\",\"list\":\"1\"},\"people\":{\"add\":\"1\",\"edit\":\"1\",\"view\":\"1\",\"delete\":\"1\",\"list\":\"1\"},\"alumni\":{\"add\":\"1\",\"edit\":\"1\",\"view\":\"1\",\"delete\":\"1\",\"list\":\"1\"},\"notice-board\":{\"add\":\"1\",\"edit\":\"1\",\"view\":\"1\",\"delete\":\"1\",\"list\":\"1\"},\"galleries\":{\"add\":\"1\",\"edit\":\"1\",\"view\":\"1\",\"delete\":\"1\",\"list\":\"1\"},\"pages\":{\"add\":\"1\",\"edit\":\"1\",\"view\":\"1\",\"delete\":\"1\",\"list\":\"1\"},\"menus\":{\"add\":\"1\",\"edit\":\"1\",\"view\":\"1\",\"delete\":\"1\",\"list\":\"1\"},\"settings\":{\"add\":\"1\",\"edit\":\"1\",\"view\":\"1\",\"delete\":\"1\",\"list\":\"1\"},\"request-contact\":{\"add\":\"1\",\"edit\":\"1\",\"view\":\"1\",\"delete\":\"1\",\"list\":\"1\"},\"role\":{\"add\":\"1\",\"edit\":\"1\",\"view\":\"1\",\"delete\":\"1\",\"list\":\"1\"},\"permissions\":{\"add\":\"1\",\"edit\":\"1\",\"view\":\"1\",\"delete\":\"1\",\"list\":\"1\"},\"admins\":{\"add\":\"1\",\"edit\":\"1\",\"view\":\"1\",\"delete\":\"1\",\"list\":\"1\"}}', '2022-06-25 13:40:26', '2022-06-26 05:14:32'),
(4, 4, '{\"alumni\":{\"list\":\"1\"}}', '2022-06-26 05:44:28', '2022-06-26 05:44:28');

-- --------------------------------------------------------

--
-- Table structure for table `request_contacts`
--

CREATE TABLE `request_contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_quote` tinyint(4) NOT NULL DEFAULT '0',
  `is_replay` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `request_contacts`
--

INSERT INTO `request_contacts` (`id`, `subject`, `name`, `email`, `phone`, `message`, `is_quote`, `is_replay`, `created_at`, `updated_at`) VALUES
(1, 'ribezaw@mailinator.com', 'Alan', 'merulyw@mailinator.com', '+1 (248) 518-5229', 'Distinctio Quam ess', 0, 0, '2022-06-22 10:24:02', '2022-06-22 10:24:02');

-- --------------------------------------------------------

--
-- Table structure for table `research`
--

CREATE TABLE `research` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `media_id` int(11) DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pdf_file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `research`
--

INSERT INTO `research` (`id`, `title`, `sub_title`, `slug`, `description`, `image`, `image_path`, `media_id`, `video`, `pdf_file`, `status`, `created_at`, `updated_at`) VALUES
(1, 'BASIC MICROBIOLOGY', 'Research of the Laboratory of Microbiology', 'basic-microbiology', '<p>Research of the Laboratory of Microbiology</p>', '1668083203.jpg', '2022/11', 30, NULL, '/uploads/research/pdf/1655881196_1wds (4).pdf', 1, '2022-06-20 04:35:42', '2022-11-10 12:26:50'),
(2, 'DIAGNOSTIC LAB', 'Research of the Laboratory of Diagnostic', 'diagnostic-lab', '<p>Research of the Laboratory of Diagnostic</p>', '1668083259.jpg', '2022/11', 31, NULL, NULL, 1, '2022-06-20 04:36:55', '2022-11-10 12:27:46'),
(3, 'VIROLOGY LAB', 'Research of the Laboratory of Virology', 'virology-lab', '<p>Research of the Laboratory of Virology</p>', '1668083287.jpg', '2022/11', 32, NULL, NULL, 1, '2022-06-20 04:37:53', '2022-11-10 12:28:14'),
(4, 'MYCOLOGY LAB', 'Research of the Laboratory of Mycology', 'mycology-lab', '<p>Research of the Laboratory of Mycology</p>', '1668083329.jpg', '2022/11', 33, NULL, NULL, 1, '2022-06-20 04:38:40', '2022-11-10 12:28:55'),
(5, 'ALGAL RESEARCH LAB', 'Research of the Laboratory of AlGal', 'algal-research-lab', '<p>Research of the Laboratory of AlGal</p>', '1668083363.jpg', '2022/11', 34, NULL, NULL, 1, '2022-06-20 04:40:17', '2022-11-10 12:29:30');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, '2022-06-25 11:18:12'),
(2, 'Faculty', NULL, NULL),
(3, 'Editor', NULL, NULL),
(4, 'Alumni', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `section_design_types`
--

CREATE TABLE `section_design_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `section_design_types`
--

INSERT INTO `section_design_types` (`id`, `name`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Text Image Card', 1, NULL, NULL),
(2, 'News', 1, NULL, NULL),
(3, 'Events', 1, NULL, NULL),
(4, 'Half Parallax', 1, NULL, NULL),
(5, 'Full Parallax', 1, NULL, NULL),
(6, 'Services', 1, NULL, NULL),
(7, 'Welcome Text', 1, NULL, NULL),
(8, 'Ratings', 1, NULL, NULL),
(9, 'Research', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `section_names`
--

CREATE TABLE `section_names` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_align` tinyint(4) NOT NULL DEFAULT '1' COMMENT '0=left,1=center,2=right',
  `position` int(10) UNSIGNED NOT NULL DEFAULT '1000',
  `section_design_type_id` bigint(20) UNSIGNED DEFAULT NULL,
  `background_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `col` int(10) UNSIGNED NOT NULL DEFAULT '4',
  `row` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `title_is_show` tinyint(1) NOT NULL DEFAULT '1',
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_type_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_video` tinyint(1) NOT NULL DEFAULT '0',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `date` timestamp NULL DEFAULT NULL,
  `amount` double NOT NULL DEFAULT '0',
  `discount_amount` double NOT NULL DEFAULT '0',
  `is_free` tinyint(1) NOT NULL DEFAULT '0',
  `tags` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `expire_date` date DEFAULT NULL,
  `is_limit` tinyint(1) NOT NULL DEFAULT '0',
  `limit` double DEFAULT NULL,
  `position` int(11) NOT NULL DEFAULT '1000',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service_materials`
--

CREATE TABLE `service_materials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_video` tinyint(1) NOT NULL DEFAULT '0',
  `video` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` int(11) NOT NULL DEFAULT '1000',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service_types`
--

CREATE TABLE `service_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `position` int(11) NOT NULL DEFAULT '1000',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `group`, `name`, `value`, `created_at`, `updated_at`) VALUES
(1, 'general', 'title', 'NOAKHALI SCIENCE AND TECHNOLOGY UNIVERSITY', NULL, NULL),
(2, 'general', 'slogan', 'DEPARTMENT OF MICROBIOLOGY', NULL, NULL),
(3, 'general', 'mobile_number', '02334496526', NULL, NULL),
(4, 'general', 'email', 'microbiology@office.nstu.edu.bd', NULL, NULL),
(5, 'general', 'tel', NULL, NULL, NULL),
(6, 'general', 'copyright', 'all right reserved', NULL, NULL),
(7, 'general', 'city', 'Noakhali', NULL, NULL),
(8, 'general', 'state', 'Noakhali', NULL, NULL),
(9, 'general', 'country', 'Bangladesh', NULL, NULL),
(10, 'general', 'zip', '3814', NULL, NULL),
(11, 'general', 'street', '4th Floor, Academic Building 1', NULL, NULL),
(12, 'general', 'tax', NULL, NULL, NULL),
(13, 'general', 'tax_type', NULL, NULL, NULL),
(14, 'general', 'currency_name', NULL, NULL, NULL),
(15, 'general', 'currency_symbol', NULL, NULL, NULL),
(16, 'general', 'meta_description', NULL, NULL, NULL),
(17, 'general', 'keywords', NULL, NULL, NULL),
(18, 'home_banner', 'title_text_1', NULL, NULL, NULL),
(19, 'home_banner', 'title_text_2', NULL, NULL, NULL),
(20, 'home_banner', 'short_description', NULL, NULL, NULL),
(21, 'home_banner', 'button_text', NULL, NULL, NULL),
(22, 'home_banner', 'button_url', NULL, NULL, NULL),
(23, 'social', 'facebook', 'https://www.facebook.com/profile.php?id=100063622355561&_rdc=1&_rdr', NULL, NULL),
(24, 'social', 'twitter', NULL, NULL, NULL),
(25, 'social', 'youtube', 'https://www.youtube.com', NULL, NULL),
(26, 'social', 'instagram', NULL, NULL, NULL),
(27, 'social', 'linkedin', NULL, NULL, NULL),
(28, 'general', 'logo', 'logo.png', NULL, NULL),
(29, 'general', 'favicon', 'favicon.png', NULL, NULL),
(30, 'general', 'og_image', 'og_image.png', NULL, NULL),
(31, 'media', 'small_width', '400', NULL, NULL),
(32, 'media', 'small_height', '400', NULL, NULL),
(33, 'media', 'medium_width', '400', NULL, NULL),
(34, 'media', 'medium_height', '500', NULL, NULL),
(35, 'media', 'large_width', '1280', NULL, NULL),
(36, 'media', 'large_height', '720', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `position` int(11) NOT NULL DEFAULT '1000',
  `text_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_1_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_1_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_2_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_2_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `slider_type` tinyint(4) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `media_id` bigint(20) UNSIGNED DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `status`, `position`, `text_1`, `text_2`, `text_3`, `button_1_text`, `button_1_url`, `button_2_text`, `button_2_url`, `short_description`, `description`, `slider_type`, `image`, `image_path`, `media_id`, `video`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1000, 'Laboriosam esse in', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, '2022-06-14 10:58:14', '2022-06-14 10:58:02', '2022-06-14 10:58:14'),
(2, 1, 1000, 'Qui quod magna quisq', NULL, NULL, 'Vero sunt animi odi', NULL, NULL, NULL, NULL, 'Tempora aliqua Aspe', 1, '1668081393.jpeg', '2022/11', 28, NULL, NULL, '2022-06-14 11:56:16', '2022-11-10 11:56:34'),
(3, 1, 1000, 'Elit nisi molestiae', NULL, NULL, 'Quae non nemo omnis', NULL, NULL, NULL, NULL, 'Molestiae aut dolore', 1, '1668081419.jpeg', '2022/11', 29, NULL, NULL, '2022-06-14 12:04:03', '2022-11-10 11:57:00');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` int(11) NOT NULL DEFAULT '1000',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` bigint(55) DEFAULT NULL,
  `status` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` timestamp NULL DEFAULT NULL,
  `profile_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `type`, `role_id`, `status`, `first_name`, `last_name`, `email`, `mobile_number`, `dob`, `profile_image`, `address`, `password`, `bio`, `remember_token`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'admin', 1, 'approved', 'Test', 'Admin', 'sw@2050.com\r\n', '017618716176', NULL, 'Null', 'Null', '$2y$10$H7u7q27U8im5uNbxglGQfOdwepXgt6vOCr8ReP1zuYBcmAQRHB0C6', NULL, NULL, NULL, NULL, NULL),
(3, 'admin', 2, 'pending', 'Faculti', 'Test', 'faculti@gmail.com', '01671961393', NULL, '1656137072.png', 'Dhaka, Bangladesh', '$2y$10$VckTQOVhNQ5QTLYagqFMhedVnMLk30X0MYG1NkWHv8mazncJhYPKy', NULL, NULL, NULL, '2022-06-25 06:04:32', '2022-06-25 06:04:32'),
(4, 'admin', 3, 'pending', 'Amir', 'Butler', 'dolexoti@mailinator.com', '487', NULL, '1656139788.jpg', 'Odio qui eu eos adi', '$2y$10$Xmv.1vaOdzPgboUPNtznx.ZzdXfO2n9FpuX.0bNofkK8lDFaCGr2i', NULL, NULL, NULL, '2022-06-25 06:49:48', '2022-06-25 06:49:48'),
(5, 'alumni', 4, 'approved', 'Kibo', 'Dominguez', 'xisaxyvi@mailinator.com', '56', NULL, '1656140542.jpg', 'Commodo nemo reicien', '$2y$10$ui0HbvTySIqHYHuZRjysH.x7QMjpzapA0OCVT5EPvA1dNAs3u8RWC', NULL, NULL, NULL, '2022-06-25 07:02:22', '2022-06-25 07:02:22'),
(6, 'admin', 4, 'pending', 'Kato', 'Nieves', 'byfejese@mailinator.com', '82', NULL, '1656140751.jpg', 'Aut quo qui irure qu', '$2y$10$tUM9SutkB6WD9v0b.NTprurdfJ3VU2x2lMFLbCmpYsvJIbST1dBw6', NULL, NULL, NULL, '2022-06-25 07:05:51', '2022-06-25 07:05:51'),
(7, 'alumni', 4, 'pending', 'Cadman', 'Schmidt', 'cumucizesy@mailinator.com', '766', NULL, '1656141116.jpg', 'Quia velit qui labo', '$2y$10$HSojagdElv2u/sYGPjs2.e0O5fpX7gyQbZQwxP/kE1SPFIK38awWO', NULL, NULL, NULL, '2022-06-25 07:11:56', '2022-06-25 07:11:56'),
(8, 'alumni', 4, 'approved', 'Lani', 'Buckner', 'hello@gmail.com', '253', NULL, '1656141176.jpg', 'Dolores fuga Impedi', '$2y$10$zZICFLzs8ez/RMdWc8WijufqMQPTYvL0RKWB.Bg3X0U9c563TWAJC', NULL, NULL, NULL, '2022-06-25 07:12:56', '2022-06-25 07:12:56'),
(9, 'admin', 1, 'approved', 'Admin', 'Three', 'alumni3@gmail.com', '01678512932', NULL, '1656144748.jpg', 'Dhaka, Bangladesh', '$2y$10$H7u7q27U8im5uNbxglGQfOdwepXgt6vOCr8ReP1zuYBcmAQRHB0C6', NULL, NULL, NULL, '2022-06-25 08:12:28', '2022-06-25 08:12:28');

-- --------------------------------------------------------

--
-- Table structure for table `user_services`
--

CREATE TABLE `user_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `service_start` date DEFAULT NULL,
  `service_expire` date DEFAULT NULL,
  `payment_status` tinyint(1) NOT NULL DEFAULT '0',
  `amount` double NOT NULL DEFAULT '0',
  `transaction_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `widgets`
--

CREATE TABLE `widgets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `placement` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` bigint(20) NOT NULL DEFAULT '1000',
  `text` longtext COLLATE utf8mb4_unicode_ci,
  `menu_id` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `widgets`
--

INSERT INTO `widgets` (`id`, `status`, `placement`, `title`, `type`, `position`, `text`, `menu_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'Footer', 'USEFUL LINKS', 'Menu', 1, NULL, 2, NULL, '2022-06-15 07:15:31', '2022-06-15 07:15:31'),
(2, 1, 'Footer', 'CENTER/CELL', 'Menu', 2, NULL, 3, NULL, '2022-06-20 04:24:57', '2022-06-20 04:24:57'),
(3, 1, 'Footer', 'FACILITIES', 'Menu', 3, NULL, 4, NULL, '2022-06-20 04:25:29', '2022-06-20 04:25:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumnis`
--
ALTER TABLE `alumnis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_user_id_foreign` (`user_id`);

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
-- Indexes for table `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_attributes`
--
ALTER TABLE `event_attributes`
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
-- Indexes for table `gallery_items`
--
ALTER TABLE `gallery_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_sections`
--
ALTER TABLE `home_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice_boards`
--
ALTER TABLE `notice_boards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `people_lists`
--
ALTER TABLE `people_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `people_qualifications`
--
ALTER TABLE `people_qualifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `people_qualification_categories`
--
ALTER TABLE `people_qualification_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `people_qualification_values`
--
ALTER TABLE `people_qualification_values`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_contacts`
--
ALTER TABLE `request_contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `research`
--
ALTER TABLE `research`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_design_types`
--
ALTER TABLE `section_design_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_names`
--
ALTER TABLE `section_names`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `services_service_type_id_foreign` (`service_type_id`);

--
-- Indexes for table `service_materials`
--
ALTER TABLE `service_materials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_types`
--
ALTER TABLE `service_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_services`
--
ALTER TABLE `user_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `widgets`
--
ALTER TABLE `widgets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `widgets_menu_id_foreign` (`menu_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alumnis`
--
ALTER TABLE `alumnis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emails`
--
ALTER TABLE `emails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `event_attributes`
--
ALTER TABLE `event_attributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery_items`
--
ALTER TABLE `gallery_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_sections`
--
ALTER TABLE `home_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notice_boards`
--
ALTER TABLE `notice_boards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `people`
--
ALTER TABLE `people`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `people_lists`
--
ALTER TABLE `people_lists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `people_qualifications`
--
ALTER TABLE `people_qualifications`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `people_qualification_categories`
--
ALTER TABLE `people_qualification_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `people_qualification_values`
--
ALTER TABLE `people_qualification_values`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `request_contacts`
--
ALTER TABLE `request_contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `research`
--
ALTER TABLE `research`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `section_design_types`
--
ALTER TABLE `section_design_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `section_names`
--
ALTER TABLE `section_names`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_materials`
--
ALTER TABLE `service_materials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_types`
--
ALTER TABLE `service_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_services`
--
ALTER TABLE `user_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `widgets`
--
ALTER TABLE `widgets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_service_type_id_foreign` FOREIGN KEY (`service_type_id`) REFERENCES `service_types` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `widgets`
--
ALTER TABLE `widgets`
  ADD CONSTRAINT `widgets_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
