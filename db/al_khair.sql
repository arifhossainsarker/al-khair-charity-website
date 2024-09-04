-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 04, 2024 at 10:29 PM
-- Server version: 8.0.30
-- PHP Version: 8.2.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `al_khair`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `position` int DEFAULT '1000',
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `meta_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `meta_tags` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `feature_type` tinyint NOT NULL DEFAULT '0' COMMENT '0=image,1=video',
  `feature_video` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'File',
  `video` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_embade_code` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `media_id` bigint UNSIGNED DEFAULT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `category_id` bigint UNSIGNED DEFAULT NULL,
  `who_can_see` varchar(55) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Public',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `publish_date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `feature` tinyint(1) NOT NULL DEFAULT '0',
  `feature_position` int NOT NULL DEFAULT '1000',
  `for` varchar(55) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'product',
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `category_id` bigint UNSIGNED DEFAULT NULL,
  `position` int DEFAULT '1000',
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `meta_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `meta_tags` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `media_id` bigint UNSIGNED DEFAULT NULL,
  `background_color` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `status`, `feature`, `feature_position`, `for`, `title`, `slug`, `short_description`, `description`, `category_id`, `position`, `featured`, `meta_title`, `meta_description`, `meta_tags`, `image`, `media_id`, `background_color`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 1000, 'news', 'Donation', 'donation', NULL, NULL, NULL, 1000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-15 06:19:48', '2024-06-23 23:28:00'),
(2, 1, 0, 1000, 'gallery', 'Gallery', 'gallery', NULL, NULL, NULL, 1000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-21 03:51:41', '2022-06-21 03:52:00'),
(3, 1, 0, 1000, 'news', 'Education', 'education', NULL, NULL, NULL, 1000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-23 23:28:31', '2024-06-23 23:28:31'),
(4, 1, 0, 1000, 'donation', 'Feed The needy', 'feed-the-needy', '<p>Last year with your support, we distributed thousands of food packs and millions of meals across the world. This year, the need has increased and together we will do even more than ever before. We are distributing food packs in over 36 countries, we will be providing cooked meals in Palestine, Yemen and Lebanon through our kitchens. We have also shipped containers full of dates that we will distribute in Africa, the Middle East and the Turkey/Syria border.</p>', '<p>The Messenger of Allah swt said: &ldquo;whoever feeds a fasting person will have a reward like that of the fasting person, without any reduction in his reward&rdquo; (Al-Tirmidhi).</p>\r\n\r\n<p>Last year with your support, we distributed thousands of food packs and millions of meals across the world. This year, the need has increased and together we will do even more than ever before. We are distributing food packs in over 36 countries, we will be providing cooked meals in Palestine, Yemen and Lebanon through our kitchens. We have also shipped containers full of dates that we will distribute in Africa, the Middle East and the Turkey/Syria border.</p>\r\n\r\n<p>We can make all the arrangements in the world but without your donations we can&rsquo;t help all the people we want to reach. There is no better time than to donate food items than in Ramadhan. By donating, you can rest assured that when it is time to do your iftar you will have helped families across the world who will be doing iftar with the food you have donated. We call this the &ldquo;tablecloth of imaan&rdquo; and your reward for doing this great act lies with the Almighty Allah swt.</p>\r\n\r\n<h2><strong>Iftar with the World</strong></h2>\r\n\r\n<p>And they give (their own) food, in deep love of Allah, to the needy, the orphan and prisoner (out of sacrifice, despite their own desire and need for it),(And say:) &lsquo;We are feeding you only to please Allah. We do not seek any recompense from you nor (wish for) any thanks.{Surah Al- Insan Chapter 76: Verse 8-9}</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>In Islam, feeding people carries great virtues as can be seen from Qur&rsquo;an and Hadith, feeding people is among the best aspects of Islam.</p>\r\n\r\n<p>(further countries may be added depending upon need and our ability to deliver)</p>\r\n\r\n<h2>How can you help?</h2>\r\n\r\n<p>Donate food packs and feed an entire family for the month of Ramadhan.</p>\r\n\r\n<p>Donate your Fidyah and Kaffara to us so that we can provide meals to millions of needy people across the world.</p>\r\n\r\n<p>Pay for iftar meals and make sure that when you are sitting to eat this Ramadhan you are safe in the knowledge of knowing that you are feeding people who are in desperate need.</p>\r\n\r\n<p>&lsquo;Abdullah ibn &lsquo;Amr reported that the Messenger of Allah, may Allah bless him and grant him peace, said, &ldquo;Worship the All-Merciful and feed people.</p>', NULL, 1000, 0, NULL, NULL, NULL, '2024/08/1724617980.jpg', 44, NULL, NULL, '2024-08-02 02:27:31', '2024-08-26 01:33:00'),
(5, 1, 0, 1000, 'donation', 'Fidya / Fitrana', 'fidya-fitrana', '<p>Fidyah is only paid by one who cannot fast in Ramadhan, cannot make up for the missed fast/s at any other time after Ramadhan and is not expected to ever regain the ability to make up for the missed fast/s in their life.</p>', '<p>Fidyah is only paid by one who cannot fast in Ramadhan, cannot make up for the missed fast/s at any other time after Ramadhan and is not expected to ever regain the ability to make up for the missed fast/s in their life.</p>\r\n\r\n<p>All three conditions must be fulfilled. Otherwise, one does not pay Fidya but has to qadha of the missed fast/s.</p>\r\n\r\n<h2>Kaffarah</h2>\r\n\r\n<p>Kaffara for a fast that was deliberately broken in the month of Ramadhan (by eating, drinking or having sexual intercourse) is that one must fast for two lunar months / 60 days consecutively, along with the qadha of the fast/s one had broken.</p>\r\n\r\n<p>If one cannot fast and is not expected to ever regain the ability to keep the above-mentioned fasts in their life, then they must pay Kaffarah (and Fidyah/s for the broken fast/s).</p>', NULL, 1000, 0, NULL, NULL, NULL, '2024/08/1724617853.jpg', 43, NULL, NULL, '2024-08-12 01:46:36', '2024-08-26 01:30:55'),
(6, 1, 0, 1000, 'donation', 'Gaza Emergency Appeal', 'gaza-emergency-appeal', '<p>The toll of the conflict in Gaza, and the West Bank since October 7th has been devastating, with more than 30,000 lives lost, including children, and over 100,000 people injured. The true victims are the civilians, facing immeasurable grief, a lack of water and starvation. Thousands have fled their homes, desperately seeking safety, as the suffering reaches intolerable levels and the world cries out for an end to the massacre.</p>', '<p>The toll of the conflict in Gaza, and the West Bank since October 7th has been devastating, with more than 30,000 lives lost, including children, and over 100,000 people injured. The true victims are the civilians, facing immeasurable grief, a lack of water and starvation. Thousands have fled their homes, desperately seeking safety, as the suffering reaches intolerable levels and the world cries out for an end to the massacre.</p>\r\n\r\n<p>The dedicated teams of Al Khair Foundation are on the front lines, working tirelessly day and night, risking and sacrificing their lives to provide assistance. Despite extreme conditions of death, danger, and destruction, they relentlessly strive to reach and comfort those engulfed in this horror. Your support is the lifeline that makes their humanitarian efforts possible.</p>\r\n\r\n<p>Since the onset of the conflict, our warehouse in Egypt has been tirelessly coordinating aid efforts. It&#39;s a hub of activity, organising and loading relief onto cargo trucks bound for the journey to Rafah and, ultimately, crossing the border into Gaza. To date, we have dispatched over 225 aid trucks into Gaza, making a significant impact in alleviating the humanitarian crisis.</p>\r\n\r\n<p>Al-Khair Foundation delivers aid in Gaza and our humanitarian aid work is deeply rooted in the region. We are actively engaged in aiding numerous victims, necessitating an urgent expansion of our humanitarian and medical response. With over a decade of impactful work in the West Bank and Gaza Strip, we have established ourselves as a vital component of the humanitarian network.</p>\r\n\r\n<p>The Foundation&#39;s commitment to Gaza extends to building a hospital. In a region grappling with daily healthcare challenges, our efforts focus on saving lives, alleviating suffering, and offering relief. Additionally, our Desalination plant combats water scarcity exacerbated by the current war, providing clean drinking water through advanced technology that purifies seawater.</p>\r\n\r\n<p>In the face of bombings, our food kitchens in Gaza serve as a beacon of both necessity and compassion. Beyond nourishing meals, these kitchens restore dignity and offer solace to those grappling with displacement, destruction, and food insecurity. Remarkably, we are devoted to caring for 6,500 orphans during this conflict, providing crucial support, guidance, and a safe haven. This initiative shows our unwavering commitment to the well-being of the most vulnerable, offering a lifeline of hope and safety in the midst of profound regional hardships.</p>', NULL, 1000, 0, NULL, NULL, NULL, '2024/08/1724617779.jpeg', 42, NULL, NULL, '2024-08-12 02:05:11', '2024-08-26 01:29:41'),
(7, 1, 0, 1000, 'donation', 'Welcome to our Zakat Hub', 'welcome-to-our-zakat-hub', '<p>Welcome to our Zakat Hub, where your questions find comprehensive answers. We understand that clarity is essential when it comes to fulfilling your Zakat obligations, and our team is here to guide you every step</p>', '<p><strong>Zakat &ndash; &ldquo;that which purifies&rdquo;</strong></p>\r\n\r\n<p>&ldquo;True piety is this: to believe in God, and the last day&hellip;&hellip;to perform the prayer and to pay the zakat.&rdquo; (Quran 2:177)</p>\r\n\r\n<p>Welcome to our Zakat Hub, where your questions find comprehensive answers. We understand that clarity is essential when it comes to fulfilling your Zakat obligations, and our team is here to guide you every step<br />\r\nof the way. Curious about calculating Zakat or its eligibility criteria? Wondering about the impact of your contributions? Look no further. At Alkhair Foundation, we prioritize transparency and responsiveness. Our team are dedicated to providing you with clear, concise information, ensuring that you feel confident and informed in your Zakat journey. Beyond just collecting Zakat, we aim to cultivate a deeper understanding of its profound impact on those in need. Explore our Zakat FAQs and let us assist you in making a meaningful difference through your charitable contributions.</p>\r\n\r\n<p>At Alkhair Foundation, we believe in the profound impact of Zakat &ndash; a charitable obligation in Islam &ndash; and the potential it holds to uplift communities and create lasting change. Join us in the journey of giving that transcends mere charity, as we explore the significance of Zakat and why choosing Alkhair Foundation as your charity partner can make a<br />\r\ndifference that echoes far beyond.</p>\r\n\r\n<p><strong>Why Alkhair Foundation</strong><br />\r\nAlkhair Foundation is more than a charitable organization; it is a catalyst for positive change. With a global reach and a track record of impactful projects, we strive to break the cycle of poverty and empower individuals to build a brighter future. By choosing Alkhair Foundation as the recipient of your Zakat, you are investing in sustainable solutions that address education, healthcare, livelihoods, and disaster relief.</p>\r\n\r\n<p><strong>Join Us in Transforming Lives</strong><br />\r\nAlkhair Foundation invites you to be a part of a movement that goes beyond charity &ndash; a movement that seeks to transform lives and communities. Your Zakat is a powerful tool for positive change, and with Alkhair Foundation, you can be confident that your contribution will make a lasting impact. Together, let&#39;s build a world where everyone has the opportunity to thrive and lead a dignified life. Give your Zakat to Alkhair Foundation and<br />\r\nbecome a partner in creating a brighter future for all.</p>', NULL, 1000, 0, NULL, NULL, NULL, '2024/08/1724618365.png', 45, NULL, NULL, '2024-08-26 01:39:26', '2024-08-26 01:39:26'),
(8, 1, 1, 1000, 'donation', 'Sadaqah', 'sadaqah', '<p>Al-Khair Foundation is a leading faith-based UK charity which provides emergency relief and developmental support in some of the world&rsquo;s most impoverished areas. With an aid delivery footprint spanning 74 countries, we have alleviated the suffering of over 50 million beneficiaries in one way or another.</p>', '<p>Al-Khair Foundation is a leading faith-based UK charity which provides emergency relief and developmental support in some of the world&rsquo;s most impoverished areas. With an aid delivery footprint spanning 74 countries, we have alleviated the suffering of over 50 million beneficiaries in one way or another.</p>', NULL, 1000, 0, NULL, NULL, NULL, '2024/08/1724618463.jpg', 46, NULL, NULL, '2024-08-26 01:41:03', '2024-08-26 01:41:03'),
(9, 1, 1, 1000, 'donation', 'Zakat', 'zakat', '<p>Al-Khair Foundation is a leading faith-based UK charity which provides emergency relief and developmental support in some of the world&rsquo;s most impoverished areas. With an aid delivery footprint spanning 74 countries, we have alleviated the suffering of over 50 million beneficiaries in one way or another.</p>', '<p>Al-Khair Foundation is a leading faith-based UK charity which provides emergency relief and developmental support in some of the world&rsquo;s most impoverished areas. With an aid delivery footprint spanning 74 countries, we have alleviated the suffering of over 50 million beneficiaries in one way or another.</p>', NULL, 1000, 0, NULL, NULL, NULL, '2024/08/1724618551.jpg', 47, NULL, NULL, '2024-08-26 01:42:31', '2024-08-26 01:42:31'),
(10, 1, 1, 1000, 'donation', 'bangladesh floods', 'bangladesh-floods', '<p>Al-Khair Foundation is a leading faith-based UK charity which provides emergency relief and developmental support in some of the world&rsquo;s most impoverished areas. With an aid delivery footprint spanning 74 countries, we have alleviated the suffering of over 50 million beneficiaries in one way or another.</p>', '<p>Al-Khair Foundation is a leading faith-based UK charity which provides emergency relief and developmental support in some of the world&rsquo;s most impoverished areas. With an aid delivery footprint spanning 74 countries, we have alleviated the suffering of over 50 million beneficiaries in one way or another.</p>', NULL, 1000, 0, NULL, NULL, NULL, '2024/08/1724618649.jpg', 48, NULL, NULL, '2024-08-26 01:44:10', '2024-08-26 01:44:10'),
(11, 1, 1, 1000, 'donation', 'Food Pack', 'food-pack', '<p>Al-Khair Foundation is a leading faith-based UK charity which provides emergency relief and developmental support in some of the world&rsquo;s most impoverished areas. With an aid delivery footprint spanning 74 countries, we have alleviated the suffering of over 50 million beneficiaries in one way or another.</p>', '<p>Al-Khair Foundation is a leading faith-based UK charity which provides emergency relief and developmental support in some of the world&rsquo;s most impoverished areas. With an aid delivery footprint spanning 74 countries, we have alleviated the suffering of over 50 million beneficiaries in one way or another.</p>', NULL, 1000, 0, NULL, NULL, NULL, '2024/08/1724618715.jpg', 49, NULL, NULL, '2024-08-26 01:45:16', '2024-08-26 01:45:16'),
(12, 1, 0, 1000, 'gallery', 'Galary 2', 'galary-2', NULL, NULL, NULL, 1000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-08-28 03:42:49', '2024-08-28 03:42:49'),
(13, 1, 0, 1000, 'gallery', 'galary 3', 'galary-3', NULL, NULL, NULL, 1000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-08-28 03:42:56', '2024-08-28 03:42:56');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint UNSIGNED NOT NULL,
  `blog_id` bigint UNSIGNED DEFAULT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `comment` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `comment_id` bigint UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint UNSIGNED DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` decimal(8,2) NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donations`
--

INSERT INTO `donations` (`id`, `name`, `category_id`, `email`, `phone`, `address`, `description`, `amount`, `payment_method`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Arif', 4, 'arif@gmail.com', '07440723138', 'London, UK', '<p>This is for test donation</p>', 50.00, '1', 1, '2024-08-03 02:47:49', '2024-08-03 02:49:27');

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

CREATE TABLE `emails` (
  `id` bigint UNSIGNED NOT NULL,
  `customers` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `emails` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `subject` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `start_date` timestamp NULL DEFAULT NULL,
  `end_date` timestamp NULL DEFAULT NULL,
  `position` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location_address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `location_map` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `meta_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `meta_tags` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `feature_type` tinyint NOT NULL DEFAULT '0' COMMENT '0=image,1=video',
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `media_id` bigint UNSIGNED DEFAULT NULL,
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
(1, 'Animi architecto om', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '1997-09-09 10:38:00', '1999-11-24 18:54:00', NULL, 'Adipisci eius quasi', 'Laudantium irure ni', 'Tempora sint quidem', 'Quas ratione consequ', 'Molestiae ab nisi mo', 0, '1655274082.jpg', '2022/06', 'Quam vel facilis ita', 10, 1, 0, '2024-08-29 02:41:46', '2022-06-15 06:21:22', '2024-08-29 02:41:46'),
(2, 'Test Event', '<p>Test Event</p>', '2024-08-02 10:06:00', '2024-08-04 10:06:00', NULL, 'London', NULL, NULL, NULL, NULL, 0, '1722593226.jpg', '2024/08', NULL, 36, 0, 0, '2024-08-29 02:41:52', '2024-08-02 15:07:11', '2024-08-29 02:41:52'),
(3, 'Event Test', '<p>Event Test</p>', '2024-08-28 21:09:00', '2024-08-29 21:10:00', NULL, 'London', 'London', 'Event Test', 'Event', 'event', 0, '1724879488.jpg', '2024/08', NULL, 54, 1, 0, '2024-08-29 02:42:12', '2024-08-29 02:11:29', '2024-08-29 02:42:12'),
(4, 'Event Test 1', '<p>Event Test</p>', '2024-08-28 21:29:00', '2024-08-29 21:29:00', NULL, 'London', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.7625147223393!2d-0.06806242387181102!3d51.517572809960726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761ccb77652f61%3A0x39fd220ae3d54406!2sEast%20London%20Mosque!5e0!3m2!1sen!2suk!4v1724880040823!5m2!1sen!2suk', NULL, NULL, NULL, 0, '1724880612.jpg', '2024/08', NULL, 55, 1, 0, '2024-08-29 02:42:17', '2024-08-29 02:30:12', '2024-08-29 02:42:17'),
(5, 'Event Test 2', '<p>Event Test</p>', '2024-08-28 21:29:00', '2024-08-29 21:29:00', NULL, 'London', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.7625147223393!2d-0.06806242387181102!3d51.517572809960726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761ccb77652f61%3A0x39fd220ae3d54406!2sEast%20London%20Mosque!5e0!3m2!1sen!2suk!4v1724880040823!5m2!1sen!2suk', NULL, NULL, NULL, 0, '1724880648.jpg', '2024/08', NULL, 56, 1, 0, '2024-08-29 02:53:16', '2024-08-29 02:30:49', '2024-08-29 02:53:16'),
(6, 'Bangladesh Flood and Climate Resilience Initiative', '<p>Bangladesh, a low-lying deltaic country crisscrossed by numerous rivers, is one of the most flood-prone nations in the world. As climate change accelerates, the frequency and severity of floods in Bangladesh have increased, resulting in devastating impacts on communities, infrastructure, and livelihoods. The rising waters not only threaten human lives but also exacerbate poverty, food insecurity, and displacement, particularly in rural areas. This event seeks to address the urgent need for comprehensive strategies to mitigate the impacts of floods and promote climate resilience in Bangladesh.</p>\r\n\r\n<h3>Objectives:</h3>\r\n\r\n<ol>\r\n	<li>\r\n	<p><strong>Raise Awareness:</strong> Highlight the impact of floods on Bangladeshi communities, focusing on the challenges and opportunities in disaster risk management.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Share Knowledge:</strong> Present the latest research, innovations, and best practices in flood management and climate resilience.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Build Partnerships:</strong> Foster collaboration between government agencies, NGOs, academic institutions, and the private sector to develop sustainable solutions.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Empower Communities:</strong> Explore ways to empower local communities through education, capacity building, and resource allocation for better flood preparedness.</p>\r\n	</li>\r\n</ol>\r\n\r\n<h3>Agenda:</h3>\r\n\r\n<p><strong>Session 1: Inaugural Session</strong></p>\r\n\r\n<ul>\r\n	<li><strong>Welcome Address:</strong> [Name, Designation]</li>\r\n	<li><strong>Keynote Speech:</strong> <em>&quot;Climate Change and Flooding in Bangladesh: An Urgent Call to Action&quot;</em> by [Keynote Speaker Name, Title]</li>\r\n	<li><strong>Special Guest Address:</strong> [VIP/Guest Speaker Name, Designation]</li>\r\n</ul>\r\n\r\n<p><strong>Session 2: Understanding the Flood Crisis</strong></p>\r\n\r\n<ul>\r\n	<li><strong>Presentation 1:</strong> <em>&quot;Historical Perspective of Flooding in Bangladesh&quot;</em> by [Presenter Name, Title]</li>\r\n	<li><strong>Presentation 2:</strong> <em>&quot;The Science of Flood Prediction and Monitoring&quot;</em> by [Presenter Name, Title]</li>\r\n	<li><strong>Q&amp;A Session:</strong> Moderated by [Moderator Name, Title]</li>\r\n</ul>\r\n\r\n<p><strong>Session 3: Building Resilience</strong></p>\r\n\r\n<ul>\r\n	<li><strong>Panel Discussion:</strong> <em>&quot;Innovative Solutions for Flood Management and Climate Adaptation&quot;</em> featuring experts from [Organization Names]</li>\r\n	<li><strong>Case Study Presentation:</strong> <em>&quot;Community-Led Initiatives in Flood-Prone Areas&quot;</em> by [Presenter Name, Title]</li>\r\n	<li><strong>Interactive Workshop:</strong> <em>&quot;Designing Local Flood Resilience Plans&quot;</em> led by [Facilitator Name, Title]</li>\r\n</ul>\r\n\r\n<p><strong>Session 4: Strategic Partnerships and Funding</strong></p>\r\n\r\n<ul>\r\n	<li><strong>Roundtable Discussion:</strong> <em>&quot;Financing Climate Resilience: Opportunities and Challenges&quot;</em> with representatives from [Banks, NGOs, Government Agencies]</li>\r\n	<li><strong>Networking Session:</strong> Meet and connect with stakeholders across various sectors.</li>\r\n</ul>\r\n\r\n<p><strong>Closing Session</strong></p>\r\n\r\n<ul>\r\n	<li><strong>Summary of Key Takeaways:</strong> [Name, Designation]</li>\r\n	<li><strong>Closing Remarks:</strong> [Organizer/Host Name, Designation]</li>\r\n	<li><strong>Vote of Thanks:</strong> [Name, Designation]</li>\r\n</ul>\r\n\r\n<h3>Participants:</h3>\r\n\r\n<p>This event is open to policymakers, environmental scientists, disaster management professionals, civil society organizations, community leaders, development partners, media representatives, and other stakeholders committed to addressing the flood crisis in Bangladesh.</p>\r\n\r\n<h3>Registration:</h3>\r\n\r\n<p>Interested participants are required to register in advance [Insert Registration Link/Details]. Early registration is encouraged due to limited capacity.</p>\r\n\r\n<h3>Contact Information:</h3>\r\n\r\n<p>For more information, please contact:</p>\r\n\r\n<ul>\r\n	<li><strong>Event Coordinator:</strong> [Name, Email, Phone]</li>\r\n	<li><strong>Website:</strong> [Insert Website]</li>\r\n	<li><strong>Social Media:</strong> Follow us on [Social Media Handles] for updates.</li>\r\n</ul>', '2024-08-30 09:00:00', '2024-08-30 16:00:00', NULL, 'London', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.7625147223393!2d-0.06806242387181102!3d51.517572809960726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761ccb77652f61%3A0x39fd220ae3d54406!2sEast%20London%20Mosque!5e0!3m2!1sen!2suk!4v1724880040823!5m2!1sen!2suk', NULL, NULL, NULL, 0, '1724882095.jpg', '2024/08', NULL, 57, 1, 0, NULL, '2024-08-29 02:54:55', '2024-08-29 02:54:55');

-- --------------------------------------------------------

--
-- Table structure for table `event_attributes`
--

CREATE TABLE `event_attributes` (
  `id` bigint UNSIGNED NOT NULL,
  `event_id` bigint UNSIGNED DEFAULT NULL,
  `attributes` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `status` tinyint NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event_attributes`
--

INSERT INTO `event_attributes` (`id`, `event_id`, `attributes`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, '[{\"label\":\"Cupidatat rem adipis\",\"attribute_title\":\"Cupidatat rem adipis\",\"attribute_description\":\"Sint non ad tempore\",\"attribute_url\":\"https:\\/\\/www.ryj.co.uk\",\"attribute_position\":\"Ex sit repellendus\"}]', 1, NULL, '2022-06-15 06:21:22', '2022-06-15 06:21:22'),
(2, 2, '[{\"label\":\"test Event\",\"attribute_title\":\"test Event\",\"attribute_description\":\"Test Event\",\"attribute_url\":null,\"attribute_position\":null}]', 1, NULL, '2024-08-02 15:07:11', '2024-08-02 15:07:11'),
(3, 3, '[{\"label\":\"Event\",\"attribute_title\":\"Event\",\"attribute_description\":\"Event\",\"attribute_url\":\"https:\\/\\/al-khair.org\",\"attribute_position\":\"1\"}]', 1, NULL, '2024-08-29 02:11:29', '2024-08-29 02:11:29');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` int NOT NULL DEFAULT '100',
  `category_id` bigint UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `status`, `name`, `position`, `category_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'Gallary', 1, 12, NULL, '2024-07-11 02:59:56', '2024-08-28 03:43:48');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_items`
--

CREATE TABLE `gallery_items` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallery_id` bigint UNSIGNED DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_embade_code` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `pdf_file` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` tinyint NOT NULL DEFAULT '1' COMMENT '1=image,2=video,3=embade_code,4=pdf_file',
  `position` int NOT NULL DEFAULT '100',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery_items`
--

INSERT INTO `gallery_items` (`id`, `title`, `gallery_id`, `description`, `image`, `video`, `video_embade_code`, `pdf_file`, `type`, `position`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, NULL, '1720648847.png', NULL, NULL, NULL, 1, 100, '2024-07-11 03:01:05', '2024-07-11 03:00:48', '2024-07-11 03:01:05'),
(2, NULL, 1, NULL, '1720648847.png', NULL, NULL, NULL, 1, 1, '2024-08-28 03:40:55', '2024-07-11 03:00:49', '2024-08-28 03:40:55'),
(3, NULL, 1, NULL, '1720648876.png', NULL, NULL, NULL, 1, 0, '2024-08-28 03:40:59', '2024-07-11 03:01:16', '2024-08-28 03:40:59'),
(4, NULL, 1, NULL, '1724798496.jpg', NULL, NULL, NULL, 1, 100, NULL, '2024-08-28 03:41:37', '2024-08-28 03:41:37'),
(5, NULL, 1, NULL, '1724798496.jpg', NULL, NULL, NULL, 1, 100, '2024-08-28 03:42:30', '2024-08-28 03:41:38', '2024-08-28 03:42:30'),
(6, NULL, 1, NULL, '1724798498.jpg', NULL, NULL, NULL, 1, 100, '2024-08-28 03:42:26', '2024-08-28 03:41:38', '2024-08-28 03:42:26'),
(7, NULL, 1, NULL, '1724798623.jpg', NULL, NULL, NULL, 1, 100, NULL, '2024-08-28 03:43:44', '2024-08-28 03:43:44'),
(8, NULL, 1, NULL, '1724799539.jpeg', NULL, NULL, NULL, 1, 100, NULL, '2024-08-28 03:59:00', '2024-08-28 03:59:00'),
(9, NULL, 1, NULL, '1724799539.jpg', NULL, NULL, NULL, 1, 100, NULL, '2024-08-28 03:59:00', '2024-08-28 03:59:00'),
(10, NULL, 1, NULL, '1724799540.jpg', NULL, NULL, NULL, 1, 100, NULL, '2024-08-28 03:59:01', '2024-08-28 03:59:01'),
(11, NULL, 1, NULL, '1724799541.jpg', NULL, NULL, NULL, 1, 100, NULL, '2024-08-28 03:59:01', '2024-08-28 03:59:01'),
(12, NULL, 1, NULL, '1724799540.png', NULL, NULL, NULL, 1, 100, NULL, '2024-08-28 03:59:02', '2024-08-28 03:59:02'),
(13, NULL, 1, NULL, '1724799541.jpg', NULL, NULL, NULL, 1, 100, NULL, '2024-08-28 03:59:02', '2024-08-28 03:59:02');

-- --------------------------------------------------------

--
-- Table structure for table `home_sections`
--

CREATE TABLE `home_sections` (
  `id` bigint UNSIGNED NOT NULL,
  `section_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `background_color` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `col` int NOT NULL DEFAULT '1',
  `row` int NOT NULL DEFAULT '3',
  `section_name_is_show` tinyint(1) NOT NULL DEFAULT '0',
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_name_id` bigint UNSIGNED DEFAULT NULL,
  `section_design_type_id` bigint UNSIGNED DEFAULT NULL,
  `position` int NOT NULL DEFAULT '1000',
  `text_align` tinyint NOT NULL DEFAULT '1' COMMENT '1=left,2=right',
  `is_image_inner_border` tinyint(1) NOT NULL DEFAULT '0',
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_path` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `media_id` bigint UNSIGNED DEFAULT NULL,
  `short_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `button_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_url` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `raised_amount` double DEFAULT NULL,
  `raised_percentage` double DEFAULT NULL,
  `parallax_option` tinyint DEFAULT NULL COMMENT '1=vote,2=opinion',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_by` int UNSIGNED DEFAULT NULL,
  `updated_by` int UNSIGNED DEFAULT NULL,
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
  `id` bigint UNSIGNED NOT NULL,
  `file_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `month` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
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
(35, '1668084089.jpg', '2022', '11', NULL, '2022-11-10 12:41:37', '2022-11-10 12:41:37'),
(36, '1722593226.jpg', '2024', '08', NULL, '2024-08-02 15:07:11', '2024-08-02 15:07:11'),
(37, '1723410310.jpg', '2024', '08', NULL, '2024-08-12 02:05:11', '2024-08-12 02:05:11'),
(38, '1723411120.png', '2024', '08', NULL, '2024-08-12 02:18:41', '2024-08-12 02:18:41'),
(39, '1723411153.jpg', '2024', '08', NULL, '2024-08-12 02:19:13', '2024-08-12 02:19:13'),
(40, '1723755016.jpg', '2024', '08', NULL, '2024-08-16 01:50:17', '2024-08-16 01:50:17'),
(41, '1723755050.jpg', '2024', '08', NULL, '2024-08-16 01:50:51', '2024-08-16 01:50:51'),
(42, '1724617779.jpeg', '2024', '08', NULL, '2024-08-26 01:29:41', '2024-08-26 01:29:41'),
(43, '1724617853.jpg', '2024', '08', NULL, '2024-08-26 01:30:55', '2024-08-26 01:30:55'),
(44, '1724617980.jpg', '2024', '08', NULL, '2024-08-26 01:33:00', '2024-08-26 01:33:00'),
(45, '1724618365.png', '2024', '08', NULL, '2024-08-26 01:39:26', '2024-08-26 01:39:26'),
(46, '1724618463.jpg', '2024', '08', NULL, '2024-08-26 01:41:03', '2024-08-26 01:41:03'),
(47, '1724618551.jpg', '2024', '08', NULL, '2024-08-26 01:42:31', '2024-08-26 01:42:31'),
(48, '1724618649.jpg', '2024', '08', NULL, '2024-08-26 01:44:10', '2024-08-26 01:44:10'),
(49, '1724618715.jpg', '2024', '08', NULL, '2024-08-26 01:45:16', '2024-08-26 01:45:16'),
(50, '1724619176.jpg', '2024', '08', NULL, '2024-08-26 01:52:58', '2024-08-26 01:52:58'),
(51, '1724619328.jpg', '2024', '08', NULL, '2024-08-26 01:55:30', '2024-08-26 01:55:30'),
(52, '1724619537.jpg', '2024', '08', NULL, '2024-08-26 01:58:57', '2024-08-26 01:58:57'),
(53, '1724619716.jpeg', '2024', '08', NULL, '2024-08-26 02:01:56', '2024-08-26 02:01:56'),
(54, '1724879488.jpg', '2024', '08', NULL, '2024-08-29 02:11:29', '2024-08-29 02:11:29'),
(55, '1724880612.jpg', '2024', '08', NULL, '2024-08-29 02:30:12', '2024-08-29 02:30:12'),
(56, '1724880648.jpg', '2024', '08', NULL, '2024-08-29 02:30:49', '2024-08-29 02:30:49'),
(57, '1724882095.jpg', '2024', '08', NULL, '2024-08-29 02:54:55', '2024-08-29 02:54:55');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `status`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'Main Menu', NULL, '2022-06-14 10:22:10', '2022-06-14 10:22:10'),
(2, 1, 'Our Projects', NULL, '2022-06-15 07:13:22', '2022-06-15 07:13:22'),
(3, 1, 'How To Help', NULL, '2022-06-20 04:20:00', '2022-06-20 04:20:00'),
(4, 1, 'WhoWe Are', NULL, '2022-06-20 04:22:45', '2022-06-20 04:22:45');

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` bigint UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `menu_id` bigint UNSIGNED NOT NULL,
  `text` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `relation_id` bigint UNSIGNED DEFAULT NULL,
  `relation_with` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` int NOT NULL DEFAULT '1000',
  `menu_item_id` bigint DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `status`, `menu_id`, `text`, `url`, `relation_id`, `relation_with`, `position`, `menu_item_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(9, 1, 2, 'Education Programme', 'https://al-khair.test/', NULL, NULL, 0, NULL, NULL, '2022-06-15 07:13:50', '2024-08-26 02:16:25'),
(10, 1, 2, 'Emergency Relief Programme', 'http://al-khair.test/', NULL, NULL, 1, NULL, NULL, '2022-06-15 07:14:08', '2024-08-26 02:16:25'),
(11, 1, 2, 'Health Programme', 'http://al-khair.test/', NULL, NULL, 2, NULL, NULL, '2022-06-15 07:14:24', '2024-08-26 02:16:25'),
(12, 1, 2, 'Livelihood Programme', 'http://al-khair.test/', NULL, NULL, 3, NULL, NULL, '2022-06-15 07:14:47', '2024-08-26 02:16:25'),
(13, 1, 3, 'Shelter Programme', 'http://al-khair.test/', NULL, NULL, 0, NULL, NULL, '2022-06-20 04:21:01', '2024-08-26 02:17:28'),
(14, 1, 3, 'UK Programmes', 'http://al-khair.test/', NULL, NULL, 1, NULL, NULL, '2022-06-20 04:21:22', '2024-08-26 02:18:07'),
(15, 1, 3, 'Vulnerable People', 'http://al-khair.test/', NULL, NULL, 2, NULL, NULL, '2022-06-20 04:21:44', '2024-08-26 02:18:27'),
(16, 1, 3, 'Water Programme', 'http://al-khair.test/', NULL, NULL, 3, NULL, NULL, '2022-06-20 04:22:21', '2024-08-26 02:18:51'),
(26, 1, 1, NULL, NULL, 6, 'page', 3, 22, NULL, '2022-06-22 09:36:13', '2022-11-05 05:52:49'),
(27, 1, 1, NULL, NULL, 7, 'page', 2, 21, NULL, '2022-06-22 13:30:21', '2022-11-05 09:23:49'),
(30, 1, 1, NULL, NULL, 10, 'page', 0, 22, NULL, '2022-11-03 08:57:05', '2022-11-03 08:57:19'),
(31, 1, 1, NULL, NULL, 11, 'page', 1, 22, NULL, '2022-11-03 09:21:16', '2022-11-03 09:21:25'),
(32, 1, 1, NULL, NULL, 12, 'page', 2, 22, NULL, '2022-11-05 05:52:32', '2022-11-05 05:52:49'),
(34, 1, 1, NULL, NULL, 10, 'page', 0, 33, NULL, '2022-11-05 05:56:00', '2022-11-05 05:56:21'),
(35, 1, 1, NULL, NULL, 14, 'page', 2, 33, NULL, '2022-11-05 05:57:41', '2022-11-05 05:57:57'),
(36, 1, 1, NULL, NULL, 13, 'page', 1, 33, NULL, '2022-11-05 05:57:41', '2022-11-05 05:57:57'),
(37, 1, 1, NULL, NULL, 17, 'page', 2, 23, NULL, '2022-11-05 09:15:23', '2022-11-05 09:15:59'),
(38, 1, 1, NULL, NULL, 16, 'page', 1, 23, NULL, '2022-11-05 09:15:23', '2022-11-05 09:15:59'),
(39, 1, 1, NULL, NULL, 15, 'page', 0, 23, NULL, '2022-11-05 09:15:23', '2022-11-05 09:15:59'),
(40, 1, 1, NULL, NULL, 19, 'page', 1, 2, NULL, '2022-11-05 09:18:37', '2022-11-05 09:21:13'),
(41, 1, 1, NULL, NULL, 18, 'page', 0, 2, NULL, '2022-11-05 09:18:37', '2022-11-05 09:21:13'),
(44, 1, 1, NULL, NULL, 22, 'page', 0, 28, NULL, '2022-11-05 09:27:01', '2022-11-05 09:29:13'),
(46, 1, 1, NULL, NULL, 28, 'page', 5, 45, NULL, '2022-11-05 09:31:53', '2022-11-05 09:32:45'),
(47, 1, 1, NULL, NULL, 27, 'page', 4, 45, NULL, '2022-11-05 09:31:53', '2022-11-05 09:32:45'),
(48, 1, 1, NULL, NULL, 26, 'page', 3, 45, NULL, '2022-11-05 09:31:53', '2022-11-05 09:32:45'),
(49, 1, 1, NULL, NULL, 25, 'page', 2, 45, NULL, '2022-11-05 09:31:53', '2022-11-05 09:32:45'),
(50, 1, 1, NULL, NULL, 24, 'page', 1, 45, NULL, '2022-11-05 09:31:53', '2022-11-05 09:32:45'),
(51, 1, 1, NULL, NULL, 23, 'page', 0, 45, NULL, '2022-11-05 09:31:53', '2022-11-05 09:32:45'),
(52, 1, 1, 'Office Staffs', 'people-list/Office Staffs', NULL, NULL, 0, 21, NULL, '2022-11-12 06:40:32', '2022-11-12 06:42:01'),
(53, 1, 1, 'Faculty Members', 'people-list/Faculty Members', NULL, NULL, 1, 21, NULL, '2022-11-12 06:41:22', '2022-11-12 06:42:02'),
(54, 1, 1, NULL, NULL, 2, 'page', 0, NULL, NULL, '2024-08-18 22:36:25', '2024-08-18 22:36:39'),
(55, 1, 1, NULL, NULL, 4, 'page', 1, NULL, NULL, '2024-08-18 22:36:30', '2024-08-18 22:36:39'),
(56, 1, 1, NULL, NULL, 5, 'page', 2, NULL, NULL, '2024-08-18 22:36:34', '2024-08-18 22:36:39'),
(57, 1, 1, NULL, NULL, 6, 'page', 4, NULL, NULL, '2024-08-18 22:36:37', '2024-08-28 03:37:17'),
(58, 1, 2, 'Seasonal Religious Programme', 'http://al-khair.test/', NULL, NULL, 4, NULL, NULL, '2024-08-26 02:16:18', '2024-08-26 02:16:25'),
(59, 1, 4, NULL, NULL, 31, 'page', 0, NULL, NULL, '2024-08-26 02:19:35', '2024-08-26 02:19:37'),
(60, 1, 4, NULL, NULL, 30, 'page', 1, NULL, NULL, '2024-08-26 02:19:35', '2024-08-26 02:19:37'),
(61, 1, 4, NULL, NULL, 6, 'page', 2, NULL, NULL, '2024-08-26 02:19:35', '2024-08-26 02:19:37'),
(62, 1, 4, NULL, NULL, 2, 'page', 3, NULL, NULL, '2024-08-26 02:19:35', '2024-08-26 02:19:37'),
(63, 1, 1, NULL, NULL, 32, 'page', 3, NULL, NULL, '2024-08-28 03:37:07', '2024-08-28 03:37:17');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
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
(38, '2022_06_25_145116_create_roles_table', 4),
(39, '2022_06_22_165948_create_donors_table', 5),
(41, '2022_05_18_130002_create_volunteer_table', 7),
(42, '2022_05_18_130002_create_volunteers_table', 8),
(43, '2022_06_22_165948_create_donations_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint UNSIGNED NOT NULL,
  `category_id` bigint UNSIGNED DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `position` int DEFAULT '1000',
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `meta_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `meta_tags` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `feature_type` tinyint NOT NULL DEFAULT '0' COMMENT '0=image,1=video',
  `feature_video` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'File',
  `video` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_embade_code` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `media_id` bigint UNSIGNED DEFAULT NULL,
  `source_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `source_link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `publish_date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `category_id`, `title`, `sub_title`, `slug`, `description`, `position`, `featured`, `meta_title`, `meta_description`, `meta_tags`, `feature_type`, `feature_video`, `image`, `image_path`, `video_type`, `video`, `video_embade_code`, `media_id`, `source_name`, `source_link`, `status`, `deleted_at`, `publish_date`, `created_at`, `updated_at`) VALUES
(1, 3, 'Summer Skydiving Challenge, 2023', NULL, 'summer-skydiving-challenge-2023', '<p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 24px; font-family: &quot;Baloo 2&quot;, cursive; font-size: 16px; color: rgb(68, 85, 110); letter-spacing: 0.32px;\">Team AKF Braces Up!!! to Skydive to raise funds for supporting vulnerable humanity in<br>desperate need…<br>Uplifting Human Potential sits at the Heart of everything we do at Al-Khair Foundation.<br>Our Challenges Team prides in fusing adventure and humanitarian causes to do our bit<br>for those in Greatest Need of basic necessities of life vital for their mere survival.<br><span style=\"font-weight: 700;\">JOIN US..</span><br>Embrace the thrill, let the ‘Adrenaline Rush’ Conquer the skies whilst tandem-diving<br>with a professional British Parachute Association(BPA) instructor from a breath taking<br>height of 11-15k feet. An experience you can cherish for a lifetime. Hel us Fundraise<br>vitally needed funds for a noble cause in support of our GREATEST NEED APPEAL<br>https://alkhair.org/d/greatest-need/</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 24px; font-family: &quot;Baloo 2&quot;, cursive; font-size: 16px; color: rgb(68, 85, 110); letter-spacing: 0.32px;\"><span style=\"font-weight: 700;\">Event Dates and Venues<br>a. 29 April 2023 – Sibson Airfield, Wansford Road, Wansford, Peterborough,<br>UK. PE8 6NE<br>b. 6 May 2023 – Skydive Langar, Langar Airfield, Hardy Road, Langar,<br>Nottingham NG13 9HY.<br>c. 13 May 2023 – Black Knights Parachute Centre, Hillam Lane, Cockerham,<br>Lancashire, LA2 0DY.</span><br>Note. Lady Skydive instructors available ONLY at Skydive Langar, Nottingham NG13 9HY.<br><span style=\"font-weight: 700;\">Registration</span><br>To register your place for this challenge go online at www.alkhair.org and purchase<br>your registration ticket by filling the details asked.<br>Registration Fee of £50 (Non Refundable) is payable for ensuring a space on this<br>challenge.<br>HURRY… Limited spaces are, offered on ‘First Come, First Serve’ basis.<br><span style=\"font-weight: 700;\">Fundraising</span><br>Minimum Sponsorship target £425.00 to support (Al-Khair’s Greatest Need Appeal) and<br>bring hope and life to a humanity in despair.<br><span style=\"font-weight: 700;\">Setting up your fundraising page</span><br>Please read carefully and follow the steps below.<br>As soon as your registration is confirmed, you must immediately create your fundraising<br>at https://www.justgiving.com/alkhair<br>Select Alkhair Foundation as the Charity you are supporting and fundraising for.<br>Manually enter ‘AKF Skydiving Challenge 2023’ as the event you are participating.<br>Enter your fundraising Target amount and share it with your friends and supporters</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 24px; font-family: &quot;Baloo 2&quot;, cursive; font-size: 16px; color: rgb(68, 85, 110); letter-spacing: 0.32px;\">You must share you justgiving.com fundraising link with us at<br>challenges@alkhair.org<br>We will expect you to have fundraised atleast 80% of your fundraising Pledge TWO<br>weeks before Date of Event.<br>Any questions or additional information you may require about this challenge goto<br>www.alkhair.org, email.&nbsp;challenges@alkhair.org&nbsp;or call 03000999786.<br>Who can participate…<br>UK citizens of any gender. The minimum age to participate is 16. There is no upper age<br>limit.<br>Detailed instructions and any necessary requirements related to the event will be sent<br>over by the respective skydiving club when registration is completed.<br>Frequently Asked Question (FAQs)<br><span style=\"font-weight: 700;\">Disclaimer</span><br>Alkhair Foundation, UK is only facilitating this event &nbsp;and all participation is purely on voluntarily<br>basis. Under NO circumstances, Alkhair Foundation will &nbsp;be responsiliable for; or , bear liability<br>&nbsp;towards personal safety and well being &nbsp;resulting from any occurrence/accident to any<br>&nbsp;participant/party during the activities involving third party providers and associated services. All<br>participants are responsible to acquire relevant insurances if they deem appropriate.</p>', 1000, 0, 'Necessitatibus atque', 'Ipsum totam mollitia', 'Autem sequi autem no', 0, NULL, '1724619328.jpg', '2024/08', 'File', NULL, NULL, 51, 'Zorita Campbell', 'https://www.xivabykyh.mobi', 1, NULL, '2024-10-08', '2022-06-15 06:20:48', '2024-08-26 01:55:30'),
(2, 3, 'Winter Ben Nevis Weekend Challenge', NULL, 'winter-ben-nevis-weekend-challenge', '<p>Al-Khair Foundation &ndash; Winter Ben Nevis Challenge 2023 is a quest synonymic with Alkhair Foundation&rsquo;s &lsquo;Winter Appeal&rsquo;.TeamAKF ventures animated efforts to stand-up and show solidarity and support towards vulnerable humanity at risk of perishing against winter hazards and hardship. The objective of the expedition is clear and simple!! &lsquo;To raise Funds to provide essentially needed assistance in order to keep those at risk &ndash; Warm, Sheltered, Fed and healthy against the challenging Winter Season.<br />\r\nJoin us, on this incredible challenge (17-19 March 2023) and conquer UK&rsquo;s Highest Peak in winter snow. Winters could never be so Rewarding! Full of adventure, a Lifetime Experience and a New Skill of trudging &lsquo;The Ben&rsquo; wrapped in snow, Use of professional guidance and gear. ALL OF THIS FOR A GREAT CAUSE&hellip;<br />\r\n<strong>THE CHALLENGE<br />\r\n&bull; Summit Ben Nevis (1344m), the UK&rsquo;s highest mountain, in winter!<br />\r\n&bull; Learn key winter walking skills including the use of crampons &amp; ice axes<br />\r\n&bull; Two nights&rsquo; accommodation in beautiful Glen Nevis<br />\r\n&bull; Incredible winter challenge<br />\r\n&bull; View the Scottish Highlands covered in snow!</strong></p>\r\n\r\n<p>Challenge yourself to reach the summit of the UK&rsquo;s highest mountain, Ben Nevis, in winter! This incredible winter challenge is set over an entire weekend. On the first day of the challenge, you will be taught all the skills you will need in order to complete the challenge. From kicking steps in the snow, to using crampons and ice axes, our instructors will help you develop key skills for tackling the hills in winter. And there is no need to worry about buying expensive kit as it will be provided for this challenge.<br />\r\nAfter learning these skills you will then attempt to reach the summit of the UK&rsquo;s highest mountain.</p>\r\n\r\n<p><strong>Registration.</strong><br />\r\nTo be a part of this challenge, goto www.alkhair.org and sign up to register by filling out the online form and paying &pound;50 non-refundable registration fee. Be mindful to click the up/down arrows to ensure the number of tickets you are registering. For example, if you are registering as an individual only click for 1 registration ticket. If you are registering a group of participants click the appropriate number of registration tickets before confirming for payment. Pay the proportionate amount @&pound;50 per individual participant being registered.<br />\r\nNote. There are limited spaces on this challenge and will be allocated&nbsp;<strong>&lsquo;First Come First Serve&rsquo;</strong>&nbsp;basis. Itinerary and detailed instructions about the challenge will be sent by email on completion of registration respectively.<br />\r\n<strong>Fundraising Pledge &ndash; Options</strong><br />\r\nGoto www.alkhair.org and click the Winter Ben Nevis banner. Please read carefully before you choose any of the following options.<br />\r\n<strong>Option-I: Self Funder</strong><br />\r\na. Pay &pound;50 Registration Fee(Non-Refundable) and &pound;300 lump sum to ensure confirmed space on the challenge.<br />\r\nb. Raise as much as possible for Alkhair Foundation ,Winter Appeal, by setting up a fundraising page on www.justgiving.com/alkhair. Share the link to your fundraising page with us by emailing&nbsp;challenges@alkhair.org<br />\r\n<strong>Option -II: Minimum Sponsorship</strong><br />\r\na. Pay &pound;50 Registration Fee(Non-Refundable) to ensure a space on the challenge.<br />\r\nb. Raise a minimum sponsorship target of &pound;500 for Al-Khair Foundation Winter Appeal, by setting up a fundraising page on www.justgiving.com/alkhair Share the link to your fundraising page with us by email on&nbsp;challenges@alkhair.org<br />\r\n<strong>c. By registering for this option, you agree and pledge to fundraise minimum &pound;500 before or by 17 March 2023 to ensure your space on the Winter Ben Nevis Challenge 2023.</strong><br />\r\nd. Note. Fundraising pledge of &pound;500 is the minimum limit in this option, any funds raised beyond &pound;500 will be gratefully accepted to support the cause.<br />\r\n<strong>Participation.</strong>&nbsp;UK citizens of any gender.<br />\r\n<strong>Age Limit.</strong>&nbsp;18 and above, in case any participant has any age related medical condition or any underlying symptoms he/she will be required to furnish a FITNESS certificate duly endorsed by their GP atleast 2 weeks in advance.<br />\r\n<strong>Insurances.</strong>&nbsp;All participants will be covered under West Coast Mountain Guides insurance ONLY during the training and actual ascent.<br />\r\n<strong>Queries and Doubts</strong>. In case of any queries or doubts about the above options and ways to register, please email your queries to&nbsp;challenges@alkhair.org&nbsp;and we will ensure to respond within 24 hours. You can also call Alkhair Foundation Customer service desk 24/7 at 03000999786.<br />\r\n<strong>LOOK FORWARD TO SEEING YOU AT BEN NEVIS&hellip; GOOD LUCK!!</strong></p>', 1000, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 'File', NULL, NULL, NULL, NULL, NULL, 1, '2024-08-26 01:53:56', '2024-06-23', '2024-06-23 23:30:59', '2024-08-26 01:53:56'),
(3, 3, 'Winter Ben Nevis Weekend Challenge', NULL, 'winter-ben-nevis-weekend-challenge', '<p>Al-Khair Foundation &ndash; Winter Ben Nevis Challenge 2023 is a quest synonymic with Alkhair Foundation&rsquo;s &lsquo;Winter Appeal&rsquo;.TeamAKF ventures animated efforts to stand-up and show solidarity and support towards vulnerable humanity at risk of perishing against winter hazards and hardship. The objective of the expedition is clear and simple!! &lsquo;To raise Funds to provide essentially needed assistance in order to keep those at risk &ndash; Warm, Sheltered, Fed and healthy against the challenging Winter Season.<br />\r\nJoin us, on this incredible challenge (17-19 March 2023) and conquer UK&rsquo;s Highest Peak in winter snow. Winters could never be so Rewarding! Full of adventure, a Lifetime Experience and a New Skill of trudging &lsquo;The Ben&rsquo; wrapped in snow, Use of professional guidance and gear. ALL OF THIS FOR A GREAT CAUSE&hellip;<br />\r\n<strong>THE CHALLENGE<br />\r\n&bull; Summit Ben Nevis (1344m), the UK&rsquo;s highest mountain, in winter!<br />\r\n&bull; Learn key winter walking skills including the use of crampons &amp; ice axes<br />\r\n&bull; Two nights&rsquo; accommodation in beautiful Glen Nevis<br />\r\n&bull; Incredible winter challenge<br />\r\n&bull; View the Scottish Highlands covered in snow!</strong></p>\r\n\r\n<p>Challenge yourself to reach the summit of the UK&rsquo;s highest mountain, Ben Nevis, in winter! This incredible winter challenge is set over an entire weekend. On the first day of the challenge, you will be taught all the skills you will need in order to complete the challenge. From kicking steps in the snow, to using crampons and ice axes, our instructors will help you develop key skills for tackling the hills in winter. And there is no need to worry about buying expensive kit as it will be provided for this challenge.<br />\r\nAfter learning these skills you will then attempt to reach the summit of the UK&rsquo;s highest mountain.</p>\r\n\r\n<p><strong>Registration.</strong><br />\r\nTo be a part of this challenge, goto www.alkhair.org and sign up to register by filling out the online form and paying &pound;50 non-refundable registration fee. Be mindful to click the up/down arrows to ensure the number of tickets you are registering. For example, if you are registering as an individual only click for 1 registration ticket. If you are registering a group of participants click the appropriate number of registration tickets before confirming for payment. Pay the proportionate amount @&pound;50 per individual participant being registered.<br />\r\nNote. There are limited spaces on this challenge and will be allocated&nbsp;<strong>&lsquo;First Come First Serve&rsquo;</strong>&nbsp;basis. Itinerary and detailed instructions about the challenge will be sent by email on completion of registration respectively.<br />\r\n<strong>Fundraising Pledge &ndash; Options</strong><br />\r\nGoto www.alkhair.org and click the Winter Ben Nevis banner. Please read carefully before you choose any of the following options.<br />\r\n<strong>Option-I: Self Funder</strong><br />\r\na. Pay &pound;50 Registration Fee(Non-Refundable) and &pound;300 lump sum to ensure confirmed space on the challenge.<br />\r\nb. Raise as much as possible for Alkhair Foundation ,Winter Appeal, by setting up a fundraising page on www.justgiving.com/alkhair. Share the link to your fundraising page with us by emailing&nbsp;challenges@alkhair.org<br />\r\n<strong>Option -II: Minimum Sponsorship</strong><br />\r\na. Pay &pound;50 Registration Fee(Non-Refundable) to ensure a space on the challenge.<br />\r\nb. Raise a minimum sponsorship target of &pound;500 for Al-Khair Foundation Winter Appeal, by setting up a fundraising page on www.justgiving.com/alkhair Share the link to your fundraising page with us by email on&nbsp;challenges@alkhair.org<br />\r\n<strong>c. By registering for this option, you agree and pledge to fundraise minimum &pound;500 before or by 17 March 2023 to ensure your space on the Winter Ben Nevis Challenge 2023.</strong><br />\r\nd. Note. Fundraising pledge of &pound;500 is the minimum limit in this option, any funds raised beyond &pound;500 will be gratefully accepted to support the cause.<br />\r\n<strong>Participation.</strong>&nbsp;UK citizens of any gender.<br />\r\n<strong>Age Limit.</strong>&nbsp;18 and above, in case any participant has any age related medical condition or any underlying symptoms he/she will be required to furnish a FITNESS certificate duly endorsed by their GP atleast 2 weeks in advance.<br />\r\n<strong>Insurances.</strong>&nbsp;All participants will be covered under West Coast Mountain Guides insurance ONLY during the training and actual ascent.<br />\r\n<strong>Queries and Doubts</strong>. In case of any queries or doubts about the above options and ways to register, please email your queries to&nbsp;challenges@alkhair.org&nbsp;and we will ensure to respond within 24 hours. You can also call Alkhair Foundation Customer service desk 24/7 at 03000999786.<br />\r\n<strong>LOOK FORWARD TO SEEING YOU AT BEN NEVIS&hellip; GOOD LUCK!!</strong></p>', 1000, 0, 'donation', 'donation', 'donation', 0, NULL, '1724619176.jpg', '2024/08', 'File', NULL, NULL, 50, 'donation', NULL, 1, NULL, '2024-08-25', '2024-08-26 01:52:58', '2024-08-26 01:52:58'),
(4, 3, 'Al Quran Conference', NULL, 'al-quran-conference', '<p><img alt=\"AL QURAN conference\" src=\"https://alkhair.org/wp-content/uploads/2024/01/AL-QURAN-_FB-Banner-copy.jpg\" /></p>\r\n\r\n<h3>Registration</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Al-Khair Foundation and&nbsp;IQRA TVs</h3>\r\n\r\n<p>present</p>\r\n\r\n<h3>Al-Qur&#39;an Conference</h3>\r\n\r\n<p>with</p>\r\n\r\n<h3>Shaikh Qari Bashir Ahmad Siddiq</h3>\r\n\r\n<p>Senior Teacher at Masjid Nabawi, SAW</p>\r\n\r\n<p>To Mark The Launch of 21th Anniversary of Al-Khair</p>\r\n\r\n<p>AT</p>\r\n\r\n<h3>The Royal Regency<br />\r\n501 High Street North, Manor Park, E12 6TH</h3>\r\n\r\n<p>21 Jan 2024, 3:00pm - 8:00pm</p>\r\n\r\n<hr />', 1000, 0, 'donation', NULL, NULL, 0, NULL, '1724619537.jpg', '2024/08', 'File', NULL, NULL, 52, 'donation', NULL, 1, NULL, '2024-08-25', '2024-08-26 01:58:57', '2024-08-26 02:00:36'),
(5, 3, 'Iftar With Imam Qasim', NULL, 'iftar-with-imam-qasim', '<p>Most blessed moment of this blessed month is the Iftar time and we wish you to share this moment with Imam Qasim.</p>\r\n\r\n<p>We are organising Iftar dinner with Imam Qasim for a small select number of our valued members and supporters.</p>\r\n\r\n<p>We look forward to you and your family joining us at one of the dates below</p>', 1000, 0, 'donation', NULL, NULL, 0, NULL, '1724619716.jpeg', '2024/08', 'File', NULL, NULL, 53, 'donation', NULL, 1, NULL, '2024-08-25', '2024-08-26 02:01:56', '2024-08-26 02:01:56');

-- --------------------------------------------------------

--
-- Table structure for table `notice_boards`
--

CREATE TABLE `notice_boards` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `id` bigint UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `position` int DEFAULT '1000',
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `meta_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `meta_tags` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `media_id` bigint UNSIGNED DEFAULT NULL,
  `template` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `status`, `title`, `slug`, `short_description`, `description`, `position`, `featured`, `meta_title`, `meta_description`, `meta_tags`, `image`, `media_id`, `template`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'People', 'people', NULL, NULL, 1000, 0, 'People', NULL, NULL, NULL, NULL, 'people.index', '2024-08-18 22:32:25', '2022-06-21 05:28:38', '2024-08-18 22:32:25'),
(2, 1, 'About Us', 'about-us', NULL, '<p>Al-Khair Foundation is a leading Muslim faith-based UK charity providing emergency relief and developmental support in some of the world&rsquo;s most impoverished areas. Established in 2003, Al-Khair Foundation was born from a dream which Imam Qasim Rashid Ahmad had to create a holistic Islamic school. Initially operating out of a small residential living room, the Al-Khair School had just 5 students. As the Foundation grew, it remained close to its roots of education; schools were established in rural communities of Pakistan to provide quality education to orphans and underprivileged children, and this ultimately inspired the creation of our ongoing Orphans and Widows programme. A significant milestone in Al-Khair&rsquo;s journey was in 2005, when we expanded into emergency relief work. We were amongst the first on the ground providing food, water, shelter and medication in the immediate aftermath of the Kashmir and Haiti earthquakes. Our work in Haiti even attracted the attention of the United Nations, who then partnered with Al-Khair Foundation to strengthen the collective relief effort in the country.<br />\r\n<br />\r\nA few years later, Imam Qasim established IQRA TV with the objective of providing religious and educational content to Muslims and non-Muslims alike. This ended up being an incredible asset to Al-Khair Foundation; the ease of access to a free-to-air channel enabled us to greatly increase our exposure and thereby attract more support.<br />\r\n<br />\r\nOver the years, Al-Khair Foundation has steadily grown into what it is today &ndash; one of the youngest yet most successful Muslim charities in the UK. From distributing food parcels and hand-operated water pump to teaching farming techniques and implementing solar powered water wells, our aid delivery has advanced tremendously. On top of our continued emergency relief activities, we now focus on designing projects that equip communities with the right skills and education to lift themselves out of poverty. This, in turn, ensures that our beneficiaries are able to sustain their own livelihoods in a dignified manner, and without dependence on aid.<br />\r\n<br />\r\nAt Al-Khair Foundation we are proud of our track record &ndash; to date, we have touched the lives of over 50 million people from varying backgrounds. As such a multifaceted organisation, we have had a unique history and look forward to what the future will bring.<br />\r\n<br />\r\n<strong>Timeline</strong><br />\r\n<br />\r\n<strong>2003</strong><br />\r\n&lsquo;Al-Khair Educational &amp; Cultural Centres&rsquo; was established by Imam Qasim Rashid Ahmad. Its objectives were to fulfil the spiritual and cultural needs of Muslims in the UK by organising seminars, educational workshops, and conferences to facilitate a better understanding of Islam.<br />\r\n<br />\r\n<strong>2004</strong><br />\r\nThe name of our organisation was changed to &lsquo;Al-Khair Foundation&rsquo;. This name was chosen to better reflect the foundation&rsquo;s chief focus as a charity.<br />\r\n<br />\r\n<strong>2005</strong><br />\r\nThis year was a turning point in Al-Khair Foundation&rsquo;s history. We launched our Emergency Relief programme by providing aid in the aftermath of the Kashmir and Haiti earthquakes. Our work in Haiti even attracted the attention of the United Nations, who then partnered with us to strengthen the collective relief effort in the country<br />\r\n<br />\r\n<strong>2007</strong><br />\r\nAl-Khair Foundation established its first shelter project in Kashmir.<br />\r\n<br />\r\n<strong>2009</strong><br />\r\nIQRA TV was established by Imam Qasim Rashid Ahmad in 2009 with the objective of providing religious and educational content to Muslims and non-Muslims alike. The channel also showcases the humanitarian work of Al-Khair Foundation in delivering emergency and development aid around the world. As a free-to-air channel available on Sky TV, IQRA reaches virtually all households in the UK. It is also available worldwide via Freeview.<br />\r\n<br />\r\n<strong>2010</strong><br />\r\nIn 2010, Al-Khair Foundation set a precedent by being the only Muslim charity to supply aid to Chile in the aftermath of an 8.8 magnitude earthquake. One of our core principles has always been to provide relief to needy people around the world, irrespective of politics or religion.<br />\r\n<br />\r\n<strong>2011</strong><br />\r\nAl-Khair Foundation was awarded the &ldquo;Most Successful Fundraiser of the Year 2011&rdquo; by the national charity fundraising platform Just Giving.<br />\r\n<br />\r\n<strong>2012</strong><br />\r\nAl-Khair Foundation created its first official partnership - a memorandum of understanding (MoU) with the Malaysian Red Crescent.<br />\r\n<br />\r\n<strong>2014</strong><br />\r\nThe most notable milestone for Al-Khair Foundation this year was initiating our 3-year Global Strategic Plan, through which we planned to better integrate our thematic areas, maximise the impact of our projects, and expand our strategic partnerships.<br />\r\n<br />\r\n<strong>2015</strong><br />\r\nThis year saw an increase in incoming resources, such that the Foundation&rsquo;s total income reached &pound;22 million. In July, Al-Khair Foundation signed a MoU with UNRWA to provide education for besieged children in the Gaza Strip. We also partnered with Amirah Foundation to establish the &ldquo;Protecting our Pearls&rsquo; Mosque Engagement and Imam Training Programme&rdquo;, which addressed the issues of domestic violence, honour-based violence, forced marriage, FGM (Female Genital Mutilation) and sexual violence and exploitation.<br />\r\n<br />\r\n<strong>2016</strong><br />\r\nIn the financial year 2015-2016, Al-Khair Foundation responded to severe disasters, including those arising from the conflict in Syria, the Ebola crisis in Sierra Leone, and the European Refugee Crisis. Despite a decrease in incoming resources, we increased our expenditure on rehabilitation, emergency relief, protection and care, and Qurbani/Ramadan/food projects.<br />\r\n<br />\r\n<strong>2017</strong><br />\r\nAl-Khair Foundation was recognised by Charity Financials in their 2017 Annual Report for showing a steady growth in financial income.<br />\r\n<br />\r\n<strong>2019</strong><br />\r\nAl-Khair Foundation sponsored and attended the annual Scottish International Development Alliance Conference in Glasgow. In doing so, we had the opportunity to share practice with delegates from across Scotland&rsquo;s vibrant international development community, all whilst successfully spreading awareness of our own charitable activities.</p>', 1000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-22 03:40:36', '2024-08-18 22:40:51'),
(3, 1, 'Research', 'research', NULL, NULL, 1000, 0, NULL, NULL, NULL, NULL, NULL, 'research.index', '2024-08-18 22:34:17', '2022-06-22 04:09:19', '2024-08-18 22:34:17'),
(4, 1, 'News', 'news', NULL, NULL, 1000, 0, NULL, NULL, NULL, NULL, NULL, 'news.index', NULL, '2022-06-22 07:19:20', '2022-06-22 07:19:20'),
(5, 1, 'Events', 'events', NULL, NULL, 1000, 0, NULL, NULL, NULL, NULL, NULL, 'event.index', NULL, '2022-06-22 08:47:45', '2022-06-22 08:47:45'),
(6, 1, 'Contact Us', 'contact-us', NULL, NULL, 1000, 0, NULL, NULL, NULL, NULL, NULL, 'contactUs', NULL, '2022-06-22 09:35:59', '2022-06-22 09:35:59'),
(7, 1, 'Alumni', 'alumni', NULL, NULL, 1000, 0, NULL, NULL, NULL, NULL, NULL, 'alumni.index', '2024-08-18 22:34:10', '2022-06-22 13:30:08', '2024-08-18 22:34:10'),
(8, 1, 'Notice', 'notice', NULL, NULL, 1000, 0, NULL, NULL, NULL, NULL, NULL, 'notice.index', '2024-08-18 22:34:04', '2022-06-23 09:21:59', '2024-08-18 22:34:04'),
(9, 1, 'Overview', 'overview', NULL, NULL, 1000, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-03 08:51:32', '2022-11-03 08:46:18', '2022-11-03 08:51:32'),
(10, 1, 'Overview', 'overview', NULL, '<p>Department of Microbiology started its journey in 2009. Since establishment, this department has become one of the best departments in this university. Dynamic environment for academic activity and research, friendly relationship between teacher and students, co-operative and positive attitude among the members of department etc. have made it possible to become one of the top departments in this university.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>The Department of Microbiology has set its goal to become a center for excellence in respect of both academic and research aspects. By providing world class education with research friendly environment, this department has been trying to attaining the goal. As a consequence, undergrad students can acquire complete knowledge of fundamental, advanced and applied microbiology and<br />\r\ngraduates become capable of applying their theoretical knowledge and technical skills in practical field for personal, professional or research perspectives.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Degrees offered by the department are Bachelor of Science (BS) in Microbiology and Masters of Science (MS) in Microbiology. Both <strong>undergraduate</strong> and <strong>post graduate</strong> program provide comprehensive knowledge of theoretical as well as applied or practical microbiology which enable the students to become updated with the global trend in the field microbiology.</p>', 1000, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2024-08-18 22:34:00', '2022-11-03 08:56:41', '2024-08-18 22:34:00'),
(11, 1, 'Chair’s Message', 'chair-s-message', NULL, '<p><img alt=\"\" src=\"https://media.licdn.com/dms/image/C4D03AQHwETUbG5O1ag/profile-displayphoto-shrink_800_800/0/1517287990120?e=1672876800&amp;v=beta&amp;t=RDvX83FBG0yedJz0ojMEpW03NWNkW4VH7X5KQ4HprzU\" style=\"height:200px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Dr. Firoz Ahmed</strong><br />\r\n<strong>Professor &amp; Chair</strong></p>\r\n\r\n<p>Welcome to the Department of Microbiology! Within this site, you will learn more about the educational and research opportunities in our department.</p>\r\n\r\n<p><strong>World Class Education</strong><br />\r\nThis department always dedicated to ensure the best possible provision to the students through the effort and dedication of the highly talented and committed faculty members. They are committed to prepare the students as good researchers and future leaders in biological sciences. Our past graduate students have gone on to exceptional careers in research and academia, as well as diverse<br />\r\nfields in home and aboard.</p>\r\n\r\n<p><br />\r\n<strong>Exciting Research opportunities</strong><br />\r\nIn addition to classroom training, we offer our students outstanding research opportunities in different research laboratories equipped with cutting edge research facilities. Moreover, department of Microbiology also arrange seminars and workshops that enable the faculties and students to enhance their skills and to learn about advanced new techniques. With the support of the department authority, the students are running several co-curricular clubs which give the students chance to explore their talents. Various co-curricular events such as indoor games, cultural programs, excursion etc. are also arranged on regular basis to recharge the whole team.</p>\r\n\r\n<p><br />\r\nI hope you find our site informative. Please contact me with your questions and<br />\r\nfeedback. Enjoy the tour!</p>', 1000, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2024-08-18 22:33:57', '2022-11-03 09:20:42', '2024-08-18 22:33:57'),
(12, 1, 'News & Events', 'news-events', NULL, '<p><strong>National Mourning Day observed at Microbiology department</strong></p>\r\n\r\n<p><br />\r\nDepartment of Microbiology organized a program on the occasion of National Mourning Day marking the 47 th death anniversary of Bangabandhu Sheikh Mujibur Rahman, the father of the nation on 22 August, 2022 on the university campus. On this occasion, a discussion, presentation of wall magazine, quiz contest and essay writing contest among students was organized by the department. The Vice Chancellor of the university Professor Dr. Md. Didar-ul-Alam was present as chief guest at the program while Professor Dr. Mohammad Abdul Baki and Professor Dr. Newaz Mohammed Bahadur was present as special guests. The program was chaired by the departmental head Professor Dr. Firoz Ahmed.</p>', 1000, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2024-08-18 22:33:53', '2022-11-05 05:52:12', '2024-08-18 22:33:53'),
(13, 1, 'Undergraduate', 'undergraduate', NULL, '<p><strong>The department offers ONE undergraduate program: BS in Microbiology Learning Objectives and Outcomes</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Though microbiology is a basic subject it has diverse applied branches. Objective of the undergrad program is to provide broad knowledge of microbiology including both basic areas and applied branches like industrial microbiology, pharmaceutical microbiology etc. So, that student familiar with various aspects of microbiology and become able to determine and prepare for his carrier goal depending on his personal interest. In addition, undergrad program also includes some relevant courses like immunology, biochemistry etc. so, student not only gain access to vast knowledge of microbiology but also to other relevant fields which widen carrier opportunity for students. In addition to theory classes, practical classes and exams for each course are also attended by the students which make them accustomed with basic laboratory techniques in the field of microbiology. Incorporation of apparently irrelevant courses such as biostatistics, computer application etc. makes the student skilled in data handling, processing etc. Moreover, each student is given opportunity to do small research under supervision of faculty member. As a consequence, it is expected that after completion of graduation a student would.</p>\r\n\r\n<ul>\r\n	<li>Have overall basic knowledge about pure microbiology and ideas about relevant subjects&rsquo; area like immunology, biochemistry, human physiology, applied microbiology.</li>\r\n	<li>Be skilled in basic techniques in the field of microbiology, biochemistry etc.</li>\r\n	<li>Have good skill in data collection, processing, statistics, data presentation etc.</li>\r\n	<li>Be conscious of current trend and demand in industrial field related to microbiology.</li>\r\n	<li>Have good concept about the practical application of microbiology in daily life.</li>\r\n	<li>Be able to communicate and share ideas and knowledge in both Bengali and English medium with both professional and common people.</li>\r\n	<li>Have good skill in communication in verbal and written form.</li>\r\n	<li>Be good enough in basic computational skill and have knowledge in information and communication technology.</li>\r\n	<li>Be able to design a small project and do research.</li>\r\n	<li>Be aware of on-going researches in the field of microbiology.</li>\r\n	<li>Be confident to select suitable carrier for him.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Course Curriculum</strong></p>\r\n\r\n<p><a href=\"#\">Download Course Curriculum for undergraduate program in Microbiology</a></p>\r\n\r\n<p><strong>Admission Requirement</strong></p>\r\n\r\n<p>Students are admitted in the undergraduate program in Microbiology according to the University admission rules in accordance with guideline provided by University Grant Commission (UGC).</p>', 1000, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2024-08-18 22:33:49', '2022-11-05 05:57:04', '2024-08-18 22:33:49'),
(14, 1, 'Graduate', 'graduate', NULL, '<p><strong>The department offers ONE graduate program: MS in Microbiology Learning Objectives and Outcomes</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>MS program aims at preparing graduates of microbiology competent for both conventional jobs and also for world class researches. This program is more focused in the field of microbiology. In one semester students acquire advanced knowledge in the field of microbiology and learn how to design a research project. Another semester is dedicated mainly for researches where student learn actually how to conduct researches as they have to complete dissertation and submit thesis paper. In addition they also learn how to write critical review on a given topic which makes them skilled in studying vast number literatures, screening essentials one and skimming the information. Moreover, as they have to present their research finding and to attend a seminar presentation, their skills in<br />\r\ncommunicating and sharing information are enhanced during MS program. Beside thesis group students, students of non-thesis group also get opportunity to do research in projects or to do internship in industrial organizations which make them fit for professional field.</p>\r\n\r\n<p>Ultimately, it is expected that after completion of MS a student would &ndash;</p>\r\n\r\n<ul>\r\n	<li>Gain the advanced knowledge in the field of microbiology and relevant areas</li>\r\n	<li>Have clear idea about current prospects of microbiology in industrial fields</li>\r\n	<li>Can explore the opportunities for both research and job and can exploit those</li>\r\n	<li>Be able to design a research project in rational way and to conduct the research successfully</li>\r\n	<li>Be competent candidate for competitive job market</li>\r\n	<li>Be aware of most recent advancements achieved in the field of microbiology</li>\r\n	<li>Have innovative ideas to implement the knowledge of microbiology which has financial impacts</li>\r\n</ul>\r\n\r\n<p><strong>Course Curriculum</strong></p>\r\n\r\n<p><a href=\"#\">Download Course Curriculum for Graduate program in Microbiology</a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Admission Requirement</strong></p>\r\n\r\n<p>Students are admitted in the graduate program in Microbiology according to the<br />\r\n<strong>University admission rules</strong> in accordance with guideline provided by University<br />\r\nGrant Commission (UGC).</p>', 1000, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2024-08-18 22:33:46', '2022-11-05 05:57:19', '2024-08-18 22:33:46'),
(15, 1, 'Research Laboratories', 'research-laboratories', NULL, '<p><strong>General Microbiology Lab</strong></p>\r\n\r\n<p>The General Microbiology Laboratory, located in the Department of Microbiology at the NSTU. The lab works in close collaboration with the others biological laboratory of the university as well as others domestic world class laboratories. Our research uses conventional approaches, genomics, molecular biology, epidemiology and clinical studies to addresses a broad range of issues related to invasive bacterial diseases in humans and animals, especially those caused by Staphylococci, E.coli, Salmonella, Klebsiella, Pseudomonas, Bacillus, Enterococci and other antimicrobial-resistant species. Additionally, working closely with environmental and food scientists in the NSTU, we investigate the soil microbiome, food microbiome, bacterial evolution, adaptation, epidemiology and spread of bacterial pathogens of public health significance such as Listeria monocytogenes, Shigella and Salmonella spp. and others gram positive species.</p>\r\n\r\n<p>Our Department-specific expertise covers:</p>\r\n\r\n<ol>\r\n	<li>Microbial genomics and evolution</li>\r\n	<li>Animal models of microbial pathogenesis</li>\r\n	<li>Genomics including genome sequencing, next-generation sequencing</li>\r\n	<li>Drug discovery and computational biology</li>\r\n	<li>Fungal and algal diseases evaluation and genomic study</li>\r\n</ol>\r\n\r\n<p>See the list of <a href=\"#\"><strong>publications</strong></a> from the research of this lab.</p>\r\n\r\n<p><strong>Contact us:</strong><br />\r\nPhone:&nbsp;02334496526<br />\r\nE-mail: microbiology@office.nstu.edu.bd</p>', 1000, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2024-08-18 22:33:42', '2022-11-05 09:14:18', '2024-08-18 22:33:42'),
(16, 1, 'Research Projects', 'research-projects', NULL, '<p><strong>Research Projects</strong></p>\r\n\r\n<p><strong>Correlation between blood glucose concentration and HBV pathogenesis</strong><br />\r\nFunding source: Self<br />\r\nDuration: 1year<br />\r\nSupervisor: <strong>Dr. Md. Arifur Rahman, Uditi Paul Bristi</strong></p>\r\n\r\n<p><strong>Development of loop mediated isothermal amplification (LAMP) assay for rapid detection of Bacillus spp. from food and feed samples</strong><br />\r\nFunding source: Self<br />\r\nDuration: 1year<br />\r\nSupervisor: <strong>Israt Islam, Dr. Md. Arifur Rahman</strong></p>\r\n\r\n<p><strong>Determination of uncultured marine microbial resources of Bay of Bengal by a combination of highly diluted-to-extinction cultivation methods</strong><br />\r\nFunding source: Self<br />\r\nDuration: 1year<br />\r\nSupervisor:<strong> Dr. Md. Arifur Rahman, Dr. Firoz Ahmed</strong></p>', 1000, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2024-08-18 22:33:38', '2022-11-05 09:14:36', '2024-08-18 22:33:38'),
(17, 1, 'Publications', 'publications', NULL, '<p><strong>Publications</strong></p>\r\n\r\n<p><strong><a href=\"#\">2022</a></strong><br />\r\nIslam M.A., Haque M.A., Rahman M.A., Hossen F., Reza M., Barua A., Marzan A.A., Das T.,Baral K., He C., Ahmed F., Bhattacharya P. and Jakariya M.(2022) A Review on Measures to Rejuvenate Immune System: Natural Mode of Protection Against Coronavirus Infection. Front. Immunol. 13:837290. doi: 10.3389/fimmu.2022.837290. <a href=\"#\">(Link)</a></p>\r\n\r\n<p><br />\r\nHoque, M. N., Talukder, A. K., Saha, O., Hasan, M. M., Sultana, M., Rahman, A. A., &amp; Das, Z.C. (2022). Antibiogram and virulence profiling reveals multidrug resistant Staphylococcus aureus as the predominant aetiology of subclinical mastitis in riverine buffaloes. Veterinary Medicine and Science. <a href=\"#\">(Link)</a></p>\r\n\r\n<p><br />\r\nSayeed, M.A.; Ferdous, J.; Saha, O.; Islam, S.; Choudhury, S.D.; Abedin, J.; Hassan, M.M.;Islam, A. Transmission Dynamics and Genomic Epidemiology of Emerging Variants of SARS-CoV-2 in Bangladesh. Trop. Med. Infect. Dis. 2022, 7, 197. <a href=\"#\">(Link)</a></p>\r\n\r\n<p><br />\r\nIslam A, Sayeed MA, Kalam MA, Fedous J, Shano S, Abedin J, Islam S, Choudhury SD, Saha O, Hassan MM. Transmission Pathways and Genomic Epidemiology of Emerging Variants of SARS-CoV-2 in the Environment. COVID. 2022; 2(7):916-939. <a href=\"#\">(Link)</a></p>\r\n\r\n<p><br />\r\nMahfuz, A. M. U. B., Khan, M. A., Sajib, E. H., Deb, A., Mahmud, S., Hasan, M., ...&amp; Rahaman, M. M. (2022). Designing potential siRNA molecules for silencing the gene of the nucleocapsid protein of Nipah virus: A computational investigation. Infection, Genetics and Evolution, 105310. <a href=\"#\">(Link)</a></p>\r\n\r\n<p><br />\r\nDevnath, P., Wajed, S., Das, R. C., Kar, S., Islam, I., &amp; Al Masud, H. A. (2022). The pathogenesis of Nipah virus: A review.&nbsp;Microbial Pathogenesis, 105693. <a href=\"#\">(Link)</a></p>\r\n\r\n<p><br />\r\nBaten, N., Wajed, S., Talukder, A., Masum, M., Ullah, H., &amp; Rahman, M. (2022). Coinfection of fungi with SARS-CoV-2 is a detrimental health risk for COVID-19 patients.&nbsp;Beni-Suef University Journal of Basic and Applied Sciences,&nbsp;11(1), 1-11. <a href=\"#\">(Link)</a></p>\r\n\r\n<p><br />\r\nRahman, M., Masum, M., Ullah, H., Wajed, S., &amp; Talukder, A. (2022). A comprehensive review on COVID-19 vaccines: development, effectiveness, adverse effects, distribution and challenges.&nbsp;Virusdisease, 1-22. <a href=\"#\">(Link)</a></p>\r\n\r\n<p><br />\r\nYeasmin, S., Banu, T. A., Goswami, B., Sarkar, M. M. H., Jahan, I., Habib, A., &amp; Akter, S. (2022). In vitro Regeneration of Strawberry Plant from Leaf Explants via Callus Induction. Plant Tissue Culture and Biotechnology, 32(1), 67-75. <a href=\"#\">(Link)</a></p>\r\n\r\n<p><br />\r\nBanik, A., Sinha, S., Ahmed, S. R., Chowdhury, M. M. H., Mukta, S., Ahmed, N., &amp; Rani, N. A.(2022). Immunoinformatics approach for designing a universal multiepitope vaccine against Chandipura Virus. Microbial Pathogenesis, 162, 105358. <a href=\"#\">(Link)</a></p>\r\n\r\n<p>Chowdhury, M. F. F., Islam, A., Palit, P. K., Mozibullah, M., Sohel, M., Khatun, M. M., ... &amp; Nath, S. K. (2022). RLLB/Alb ratio: a promising noninvasive diagnostic marker in assessing esophageal varices in cirrhotic patients. Journal of Clinical Laboratory Analysis, 36(8), e24589.<a href=\"#\">(Link)</a></p>\r\n\r\n<p><br />\r\nAmin, S., Aktar, S., Rahman, M. M., &amp; Chowdhury, M. M. H. (2022). NLRP3 inflammasome activation in COVID-19: an interlink between risk factors and disease severity. Microbes and Infection, 24(1), 104913. <a href=\"#\">(Link)</a></p>\r\n\r\n<p><strong><a href=\"#\">2021</a></strong><br />\r\nRahman, M. A.,*&nbsp;&amp; Islam M.S. (2021). Early approval of COVID-19 vaccine: Pros and cons. Hum. Vaccines Immunother. 17 (12). doi:10.1080/21645515.2021.1944742. <a href=\"#\">(Link)</a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Rahman, M. A., Ueda, K., and Honda, T*. (2020) A traditional Chinese medicine, maoto, suppresses hepatitis B virus production. Front. Cell. Infect. Microbiol. 10, 894. doi:10.3389/FCIMB.2020.581345. <a href=\"#\">(Link)</a></p>\r\n\r\n<p><br />\r\nRafi, J. H., Jafar, T., Pathan, M. T., Reza, R., Islam, S., Sourna, I. J., ...&amp; Ahammad, F. (2021). High expression of bone morphogenetic protein 1 (BMP1) is associated with a poor survival rate in human gastric cancer, a dataset approaches.&nbsp;Genomics,&nbsp;113(1), 1141-1154. <a href=\"#\">(Link)</a></p>\r\n\r\n<p><br />\r\nHossain, I., Bhowmik, S., Uddin, M. S., Devnath, P., Akter, A., Eti, L. N., ...&amp; Islam, M. T. (2021). Prevalence of urinary tract infections, associated risk factors, and antibiotic resistance pattern of uropathogens in young women at Noakhali, Bangladesh.&nbsp;Asian Journal of Medical and Biological Research,&nbsp;7(2), 202-213. <a href=\"#\">(Link)</a></p>\r\n\r\n<p><br />\r\nTalukder, A., Rahman, M., Chowdhury, M. M. H., Mobashshera, T. A., &amp; Islam, N. N. (2021). Plasmid profiling of multiple antibiotic-resistant Pseudomonas aeruginosa isolated from soil of the industrial area in Chittagong, Bangladesh. Beni-Suef University Journal of Basic and Applied Sciences, 10(1), 1-7. <a href=\"#\">(Link)</a></p>\r\n\r\n<p><br />\r\nAhmed, S. R., Banik, A., Anni, S. M., &amp; Chowdhury, M. M. H. (2021). Inhibitory potential of plant-derived metabolites against Zika virus: a computational-aided approach. Phytomedicine Plus, 1(4), 100129. <a href=\"#\">(Link)</a></p>\r\n\r\n<p><br />\r\nRahman, M. M., Talukder, A., Chowdhury, M. M. H., Talukder, R., &amp; Akter, R. (2021). Coronaviruses in wild birds&ndash;A potential and suitable vector for global distribution. Veterinary Medicine and Science, 7(1), 264-272. <a href=\"#\">(Link)</a></p>\r\n\r\n<p><br />\r\nChowdhury, M. M. H., Salazar, C. J. J., &amp;&nbsp; Nurunnabi, M. (2021). Recent advances in bionanomaterials for liver cancer diagnosis and treatment. Biomaterials Science, 9(14), 4821-4842. <a href=\"#\">(Link)</a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ahmed, S. R., Rabbee, M. F., Roy, A., Chowdhury, R., Banik, A., Kubra, K., ... &amp; Baek, K. H. (2021). Therapeutic promises of medicinal plants in Bangladesh and their bioactive compounds against ulcers and inflammatory diseases. Plants, 10(7), 1348. <a href=\"#\">(Link)</a></p>\r\n\r\n<p><strong><a href=\"#\">2020</a></strong><br />\r\nHossain, M. G.*, Mahmud, M. M., Rahman, M. A., Akter, S., Nazir, K. H. M. N. H., Saha, S., et al. (2020). Complete Genome Sequence of a Precore-Defective Hepatitis B Virus Genotype D2 Strain Isolated in Bangladesh. Microbiol. Resour.Announc. 9. doi:10.1128/mra.00083-20.&nbsp;<a href=\"#\">(Link)</a></p>\r\n\r\n<p><br />\r\nRahman, M. A., Hossain G.M., Singha, A. C., Islam M.S., and Islam, M.A.*(2020). A retrospective analysis of influence of environmental/ air temperature and relative humidity on sARs-CoV-2 outbreak. J. Pure Appl. Microbiol. 14, 1705&ndash;1714. doi:10.22207/JPAM.14.3.09. <a href=\"#\">(Link)</a></p>\r\n\r\n<p><br />\r\nIslam, S., Mumtaz, T., &amp; Hossen, F. (2020). Anaerobic digestion of kitchen waste generated from Atomic Energy Research Establishment (AERE) cafeteria for lactic acid production.&nbsp;Asian-Australasian Journal of Bioscience and Biotechnology,&nbsp;5(3), 88-99 <a href=\"#\">(Link)</a></p>\r\n\r\n<p><br />\r\nSamad, A., Jafar, T., &amp;&nbsp; Rafi, J. H. (2020). Identification of angiotensin-converting enzyme 2 (ACE2) protein as the potential biomarker in SARS-CoV-2 infection-related lung cancer using computational analyses.&nbsp;Genomics,&nbsp;112(6), 4912-4923. <a href=\"#\">(Link)</a></p>\r\n\r\n<p><br />\r\nPaul, P., Al Hasan, M. Z., Kumar, A., Chowdhury, M. H., Chowdhury, M. J., Purba, N. H., ... &amp;&nbsp; Rahman, S. M. A. (2020). Prevalence of Staphylococcus aureus, Klebsiella spp., Escherichia coli and Pseudomonas spp. in some common Bangladeshi milk and dairy products. Journal of Ecobiotechnology, 12, 5-9. <a href=\"#\">(Link)</a></p>\r\n\r\n<p><br />\r\nRoy, S., Kumar, A., Islam, M. S., Rabbi, F. A., Paul, P., Mia, M. M., ... &amp;&nbsp; Ray, A. K. (2020). Drug resistance and its future perspectives in cancer treatment. Asian Oncology Research Journal, 26. <a href=\"#\">(Link)</a></p>\r\n\r\n<p><strong><a href=\"#\">2019</a></strong><br />\r\nHonda, T.*, and Rahman, M. A.. (2019) Profiling of LINE-1-related genes inhepatocellular carcinoma. Int. J. Mol. Sci. 20. doi:10.3390/ijms20030645. <a href=\"#\">(Link)</a></p>\r\n\r\n<p>Abir Al Mahmud, Mohammad Hasan Chowdhury, Farhan Ahmed Rabbi, Zahid Al Hasan, ShakhawatHussen, KamrunNaher, Jayed Chowdhury (2019). &amp;quot;Nutrition for Athletes for Enhancement of their Performance&amp;quot; ASAHPERD Journal: 35.&nbsp;<a href=\"#\">(Link)</a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Saha, T. C., Protity, A. T., Zohora, F. T., Shaha, M., Ahmed, I., Barua, E., ...&amp; Salimullah, M.(2019). Microbial Fuel Cell (MFC) Application for Generation of Electricity from DumpingRubbish and Identification of Potential Electrogenic Bacteria.&nbsp;Adv. Ind. Biotechnol,&nbsp;2(10).<a href=\"#\">(Link)</a></p>\r\n\r\n<p><br />\r\nReza, M., Fiza, J., Hossen, F., &amp;&nbsp; Ahmed, F. (2019). Isolation and partial characterization of organophosphate pesticide degrading bacteria from soil sample of Noakhali, Bangladesh. Bangladesh Journal of Microbiology, 36(1), 17-22. <a href=\"#\">(Link)</a></p>\r\n\r\n<p><br />\r\nChowdhury, M. M. H., Kubra, K., Kanwar, R. K., &amp;&nbsp; Kanwar, J. R. (2019). Nanoparticles Advancing Cancer Immunotherapy. In Biomedical Applications of Graphene and 2D Nanomaterials (pp. 283-304). Elsevier. <a href=\"#\">(Link)</a></p>\r\n\r\n<p><strong><a href=\"#\">2018</a></strong><br />\r\nProsun T.A., Rahaman M.S.*, Yousuf R.S., Rahman, M. A. (2018). Drinking water quality assessment from ground water sources in Noakhali. Int. J. Dev. Sustain. 7, 1676&ndash;1687. <a href=\"#\">(Link)</a></p>\r\n\r\n<p><br />\r\nHossain F.E.*, Chakraborty S., Bhowmick N.C., Rahman, M. A. and F. A. (2018). Comparative Analysis of Antibiotic Resistance Pattern of Bacteria Isolated from Fish of Cultured and Natural Ponds: A Study based on Noakhali Region of Bangladesh. Bioresearch Commun. 4, 586&ndash;591. <a href=\"#\">(Link)</a></p>\r\n\r\n<p><br />\r\nHossain, F. E., Chakraborty, S., Bhowmick, N. C., Rahman, M. A., &amp;&nbsp; Ahmed, F. (2018). Comparative analysis of antibiotic resistance pattern of bacteria isolated from fish of cultured and natural ponds: a study based on noakhali region of Bangladesh.&nbsp;Bioresearch Communications-(BRC),&nbsp;4(2), 586-591. <a href=\"#\">(Link)</a></p>\r\n\r\n<p><br />\r\nRahman, M. M., Uddin, M. S., Aktar, S., Ali, M. S., Paul, P., Hasan, M. M., &amp;&nbsp; Rahman, S. M. A. (2018).&nbsp;&nbsp;&nbsp;&nbsp;Prevalence of etiologic agents causing invasive bacterial disease and evaluation of their antibiotic susceptibility pattern. Asian Journal of Medical and Biological Research, 4(4), 330-336. <a href=\"#\">(Link)</a></p>\r\n\r\n<p><br />\r\nDebnath, T., Bhowmik, S., Islam, T., &amp;&nbsp;Chowdhury, M. M. H. (2018). Presence of multidrug-resistant bacteria on mobile phones of healthcare workers accelerates the spread of nosocomial infection and regarded as a threat to public health in Bangladesh. Journal of microscopy and ultrastructure, 6(3), 165. <a href=\"#\">(Link)</a></p>\r\n\r\n<p><br />\r\nIslam, T., Kubra, K., &amp;&nbsp;Chowdhury, M. M. H. (2018). Prevalence of methicillin-resistant Staphylococcus aureus in hospitals in Chittagong, Bangladesh: A threat of nosocomial infection. Journal of microscopy and ultrastructure, 6(4), 188. <a href=\"#\">(Link)</a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Akther, S., Debnath, T., &amp; Chowdhury, M. M. H. (2018). Multidrug resistant E. coli in hospital waste water: a potential concern for public health. Adv. Biotechnol. Microbiol,&nbsp;8(55572910.19080). <a href=\"#\">(Link)</a></p>', 1000, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2024-08-18 22:33:34', '2022-11-05 09:14:53', '2024-08-18 22:33:34'),
(18, 1, 'COVID-19 detection', 'covid-19-detection', NULL, '<p><strong>COVID 19 detection</strong></p>\r\n\r\n<p>The NSTU COVID-19 detection lab was first installed in March, 2020. Since then, the lab has been conveyed by the department of Microbiology. This lab provides services to national epidemiological surveillance system through detecting of COVID-19 cases in Noakhali region. This lab also provides diverse molecular techniques to identify the etiologic agent of COVID-19, specifically SARS-CoV-2, hence, it holds all facilities including RT-PCR, negative and positive pressure room, biosafety and PCR cabinet, samples storage facilities (-20&deg;C freezing and refrigeration system), to be considered it as biosafety level-2 laboratory. Since its installment<br />\r\nabout 0.1 million samples have been tested to identify COVID-19 positive cases and on a daily basis, about 400-500 samples have been tested there. The service hour of this lab is between 9am-5pm, which was 24 hours during pandemic peak time.</p>\r\n\r\n<p><strong>Dr. Firoz Ahmed</strong>, Professor and Chairman of this department, is now the focal point of this lab. Besides, a group of enthusiastic people have been working out there and all the members have a proven track record in virology and epidemiological surveillance system, good in maintaining and handling highly infectious particles. This lab in now conducting many researches regarding COVID-19 and so on.</p>\r\n\r\n<p><strong>Contact us:</strong><br />\r\nPhone:&nbsp;02334496526<br />\r\nE-mail: microbiology@office.nstu.edu.bd</p>', 1000, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2024-08-18 22:33:30', '2022-11-05 09:17:57', '2024-08-18 22:33:30'),
(19, 1, 'Diagnostic services', 'diagnostic-services', NULL, '<p><strong>Diagnostic Services</strong></p>\r\n\r\n<p>The diagnostic services in the department of Microbiology are available for reliable and timely services for patients mostly from Noakhali and adjacent districts. We strive to deliver a low costing, largely accurate laboratory services for microbiological and molecular tests for the benefit of the patient&amp;#39;s health. Experienced microbiological staff, with top-notch training and degrees, currently manages this facility. Our Mission is to continuously strive for the highest possible standards in the provision of diagnostics services and in our educational and research activities.</p>\r\n\r\n<p>Modern technology in our lab allows us to perform traditional and automated organism identification as well as MIC (Minimum Inhibitory Concentration) sensitivity testing in less than 24 hours. Additionally, it can identify the genotypes of various bacteria, fungi, and viruses that are resistant to certain treatment classes. Such enzymes include ESBL, Penicillinase, Carbapenemase, and others. Additionally, we may quickly examine any epidemics that occur in any region of the nation. Blood culture (aerobic/ anaerobic/ fungal), High Vaginal Swab (HVS), urine, stool, urethral swab, pus, all cavity fluids, and sputum are just a few of the cultures and sensitivity tests that are carried out at our laboratory. We do thorough tests of all bodily fluids, such as CSF, synovial, peritoneal (ascitic), pleural, semen, etc. The results of the physical, biochemical, and microbiological tests are described in the examination report. Here, testing for Adeno/Rota Virus, Gram stain, Reducing Sugars, Viral Antigen, Stool Examination, Stool Occult Blood, and Urine Examination are all carried out. We identify fungi using fungus culture.</p>\r\n\r\n<p><strong>Currently available tests:</strong></p>\r\n\r\n<ul>\r\n	<li>Antibiotic sensitivity test</li>\r\n	<li>Pathogenicity test</li>\r\n	<li>Gram stain</li>\r\n	<li>Stool Occult Blood</li>\r\n	<li>Urine examination and culture and sensitivity</li>\r\n	<li>Stool examination and culture and sensitivity</li>\r\n	<li>Fungal examination and culture and sensitivity</li>\r\n	<li>Body fluids examination including CSF</li>\r\n	<li>Reducing Sugars test</li>\r\n	<li>Adeno/ Rota Virus tests</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Contact us:</strong></p>\r\n\r\n<p>Phone:&nbsp;02334496526<br />\r\nE-mail: microbiology@office.nstu.edu.bd</p>', 1000, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2024-08-18 22:33:26', '2022-11-05 09:18:14', '2024-08-18 22:33:26'),
(20, 1, 'Faculty Members', 'faculty-members', NULL, NULL, 1000, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2024-08-18 22:33:23', '2022-11-05 09:20:00', '2024-08-18 22:33:23'),
(21, 1, 'Office Staffs', 'office-staffs', NULL, NULL, 1000, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2024-08-18 22:33:18', '2022-11-05 09:20:19', '2024-08-18 22:33:18'),
(22, 1, 'Notice Board', 'notice-board', NULL, '<p><strong><a href=\"#\">Prepare a Notice board according to any website where date and download file will be provided.</a></strong></p>\r\n\r\n<p>Add puja vacation as sample from nstu university website.</p>', 1000, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2024-08-18 22:33:14', '2022-11-05 09:26:33', '2024-08-18 22:33:14'),
(23, 1, 'Job Opportunities', 'job-opportunities', NULL, '<p><strong>Job opportunities</strong></p>\r\n\r\n<p>The Department of Microbiology occasionally offers different remunerative and non-remunerative positions in different laboratories in the department. Interested students are advised to contact individual faculty member&nbsp;of their interest.</p>\r\n\r\n<p>For more information please contact us.<br />\r\nPhone:&nbsp;02334496526<br />\r\nE-mail: microbiology@office.nstu.edu.bd</p>', 1000, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2024-08-18 22:33:10', '2022-11-05 09:29:35', '2024-08-18 22:33:10'),
(24, 1, 'Training Opportunities', 'training-opportunities', NULL, '<p><strong>Training opportunities</strong></p>\r\n\r\n<p>The Department of Microbiology arranges different workshops and hands on training sessions for enthusiastic students and researchers. The trainings are conducted by the experienced faculty members of the department and experts.</p>\r\n\r\n<p>Following training are conducted on regular basis in the department of Microbiology.</p>\r\n\r\n<ul>\r\n	<li>Covid-19 detection through RT PCR technique.</li>\r\n	<li>Basic Biostatistics.</li>\r\n	<li>Different programming languages for biologists.</li>\r\n	<li>Laboratory Biosafety.</li>\r\n</ul>\r\n\r\n<p>Interested students are requested to keep an eye on the <span class=\"marker\">notice board</span> for next training session.</p>\r\n\r\n<p>For more information, please contact us.<br />\r\nPhone:&nbsp;02334496526<br />\r\nE-mail: microbiology@office.nstu.edu.bd</p>', 1000, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2024-08-18 22:33:06', '2022-11-05 09:29:51', '2024-08-18 22:33:06'),
(25, 1, 'Clubs', 'clubs', NULL, '<p><strong>Biofilm</strong></p>\r\n\r\n<p>Biofilm is a club of Microbiology department involving microbiology related learning activities outside of the classes. The club established in 2022.</p>\r\n\r\n<p>For more information, please contact us.<br />\r\nPhone:&nbsp;02334496526<br />\r\nE-mail: microbiology@office.nstu.edu.bd</p>\r\n\r\n<p><strong>MBDCNSTU</strong></p>\r\n\r\n<p>MBDCNSTU is Microbiology Blood Donation Club of NSTU. This is a voluntary blood donation club established to help the students, teachers and stuffs during the urgency of blood. The list of active members with respective blood groups can be found <a href=\"#\">here</a>.</p>\r\n\r\n<p>For more information, please contact us.<br />\r\nPhone:&nbsp;02334496526<br />\r\nE-mail: microbiology@office.nstu.edu.bd</p>', 1000, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2024-08-18 22:33:01', '2022-11-05 09:30:04', '2024-08-18 22:33:01'),
(26, 1, 'Online Learning Resources', 'online-learning-resources', NULL, '<p><strong>Society</strong></p>\r\n\r\n<p>American Society for Microbiology (ASM): <a href=\"https://asm.org/\">https://asm.org/</a></p>\r\n\r\n<p>Federation of European Microbiological Societies (FEMS): <a href=\"https://fems-microbiology.org/\">https://fems-microbiology.org/</a></p>\r\n\r\n<p>Bangladesh society of Microbiologists (BSM): <a href=\"https://www.bsm.org.bd/\">https://www.bsm.org.bd/</a></p>\r\n\r\n<p><strong>Research Articles</strong></p>\r\n\r\n<p>PMC (Pubmed):<a href=\"https://www.ncbi.nlm.nih.gov/pmc/journals/\"> https://www.ncbi.nlm.nih.gov/pmc/journals/</a></p>\r\n\r\n<p><strong>Courses</strong></p>\r\n\r\n<p>Coursera: <a href=\"https://www.coursera.org/\">https://www.coursera.org/</a></p>\r\n\r\n<p>Udemy: <a href=\"https://www.udemy.com/\">https://www.udemy.com/</a></p>\r\n\r\n<p>Khan Academy: <a href=\"https://www.khanacademy.org/\">https://www.khanacademy.org/</a></p>\r\n\r\n<p><strong>Video Contents</strong></p>\r\n\r\n<p><strong>MBG NSTU:</strong></p>\r\n\r\n<p>American Society for Microbiology (ASM): <a href=\"https://www.youtube.com/c/AmericanSocietyforMicrobiology\">https://www.youtube.com/c/AmericanSocietyforMicrobiology</a></p>', 1000, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2024-08-18 22:32:57', '2022-11-05 09:30:17', '2024-08-18 22:32:57'),
(27, 1, 'Forms/Download', 'forms-download', NULL, '<p><a href=\"#\"><strong>Application for transcript</strong></a></p>\r\n\r\n<p><strong><a href=\"#\">Application for recommendation</a></strong></p>\r\n\r\n<p><a href=\"#\"><strong>Application for Leave</strong></a></p>', 1000, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2024-08-18 22:32:53', '2022-11-05 09:30:31', '2024-08-18 22:32:53'),
(28, 1, 'Useful Links', 'useful-links', NULL, '<p><strong>For Research Opportunity/Scholarship/Higher Study/Job vacancy:</strong></p>\r\n\r\n<p>National Institute of Biotechnology (NIB): <a href=\"http://www.nib.gov.bd/\">http://www.nib.gov.bd/</a></p>\r\n\r\n<p>Bangladesh Council of Scientific and Industrial Research (BCSIR): <a href=\"http://www.bcsir.gov.bd/\">http://www.bcsir.gov.bd/</a></p>\r\n\r\n<p>Bangladesh Atomic Energy Commission (BAEC): <a href=\"http://www.baec.gov.bd/\">http://www.baec.gov.bd/</a></p>\r\n\r\n<p>University Grant Commission (UGC): <a href=\"http://www.ugc.gov.bd/\">http://www.ugc.gov.bd/</a></p>\r\n\r\n<p>Ministry of Science and Technology (MOST): <a href=\"https://most.gov.bd/\">https://most.gov.bd/</a></p>\r\n\r\n<p>Prime Minister&amp;#39;s Education Assistance Trust: <a href=\"http://www.pmeat.gov.bd/\">http://www.pmeat.gov.bd/</a></p>\r\n\r\n<p>Bangabandhu Science and Technology Fellowship Trust: <a href=\"http://www.bstft.gov.bd/\">http://www.bstft.gov.bd/</a></p>', 1000, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2024-08-18 22:32:48', '2022-11-05 09:30:57', '2024-08-18 22:32:48'),
(29, 1, 'Who We Are', 'who-we-are', NULL, '<h2>How WeStarted</h2>\r\n\r\n<p>Al-Khair Foundation (AKF) began with a school. In the Islamic tradition, which advocates that charity starts at home, we wanted to give back to our UK community first. And education was the best thing we knew to give.</p>\r\n\r\n<h2>How WeGrew</h2>\r\n\r\n<p>Today, Al-Khair Foundation (AKF) is a UK-based Muslim charity, and although we&rsquo;ve been engaged in charitable work from the outset, education was initially our key priority. After our UK schools proved to be a success, AKF started building schools overseas. Our focus was educating orphans and children from underprivileged communities. This led to our work with widows and vulnerable women, and then to the establishment of the AKF shelters. Eventually we launched our water aid and livelihood projects, as well as the Al-Khair Foundation medical aid programmes. 2005 became a turning point for us, when AKF rose to the challenge of providing emergency aid during the Kashmir Earthquake of that year. This was our first venture into the area of Overseas Disaster Relief. That October, and in the winter months which followed, AKF distributed food, shelter kits and medicine to survivors of the quake. Since then, AKF has undertaken emergency aid missions all over the world. Our support of the Haiti earthquake survivors was recognised by the United Nations in 2010. While during the Japan earthquake of 2011, we were the only UK Muslim charity working with survivors on the ground.</p>\r\n\r\n<h2>What WeBelieve</h2>\r\n\r\n<blockquote>\r\n<p>The Prophet (saw) said, &ldquo;Do not wish to be like anyone except in two cases. (The first is) A person, whom Allah has given wealth and he spends it righteously; (the second is) the one whom Allah has given wisdom and he acts according to it and teaches it to others. (Sahih Bukharic &ndash; Narrated &lsquo;Abdullah bin Mas&rsquo;ud)</p>\r\n</blockquote>\r\n\r\n<p>At Al-Khair Foundation (AKF), we believe in balance without compromise. We believe in accountability and mindful giving. We believe that charity and education go hand in hand. And here&rsquo;s how this translates in our work:</p>\r\n\r\n<ul>\r\n	<li><a href=\"https://alkhair.org/about-us/#tabs1-tab1\">Sustainable Development &amp; Aid</a></li>\r\n	<li><a href=\"https://alkhair.org/about-us/#tabs1-tab2\">Awareness Raising</a></li>\r\n	<li><a href=\"https://alkhair.org/about-us/#tabs1-tab3\">Working with Partners</a></li>\r\n	<li><a href=\"https://alkhair.org/about-us/#tabs1-tab4\">Advocacy</a></li>\r\n</ul>\r\n\r\n<p>AKF believes that all human life is equal. Every community has a right to benefit from the world&rsquo;s natural resources. Every person has the right to lead a self-sufficient, dignified life. Where people have been affected or uprooted by disasters and conflict, we provide relief to help them through the crisis. But AKF also believes in helping people help themselves. That&rsquo;s why we run sustainable development programmes, which range from livelihood projects to long-term water aid solutions.</p>', 1000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-08-18 22:42:15', '2024-08-18 22:42:15'),
(30, 1, 'Our Mission', 'our-mission', NULL, '<p>At Al-Khair Foundation, our supporters are integral to our success. Your ongoing generosity enables us to directly aid thousands of people around the world, every single day.<br />\r\n<br />\r\nWe want to thank you for putting your faith in us, and assure you that this is what you can expect as an Al-Khair supporter:<br />\r\n&bull; We spend your donation how we say we will<br />\r\n<br />\r\nFor every &pound;1 you give:<br />\r\n- X will go directly into the charitable project you choose. Alternatively, you can let us decide where your money will make the most impact at the time of donation.<br />\r\n- Y will ensure that Al-Khair Foundation is running efficiently and sustainably. This includes fundraising, publicity, events, administration and governance activities.<br />\r\n<br />\r\n&bull;&nbsp;<strong>We are open, honest and clear</strong><br />\r\n<br />\r\n- We are clear about who we are and what we do<br />\r\n- We accurately share the stories and experiences of the people we aid, and are honest about the challenges we face as well<br />\r\n- We provide information about our finances and charitable expenditure so that you can see the difference we&rsquo;re making together<br />\r\n- We welcome any and all questions relating to our activities, and will always respond with clarity and professionalism<br />\r\n<br />\r\n&bull;&nbsp;<strong>We are accountable and committed to high standards</strong><br />\r\n<br />\r\n- We are registered with the Fundraising Regulator and therefore comply with its Code of Fundraising Practice<br />\r\n- We monitor all fundraisers, volunteers and third parties working with us to ensure they also comply with the Code of Fundraising Practice<br />\r\n- We comply with the law including those that apply to data protection, health and safety and the environment<br />\r\n<br />\r\n&bull;&nbsp;<strong>We are respectful</strong><br />\r\n<br />\r\n- We keep your personal information safe, and will never sell or share them to third party organisations<br />\r\n- We respect your communication preferences and keep our records up to date<br />\r\n- We value your skills and voice, and offer opportunities to use your time to support us in a variety of ways<br />\r\n- We have a complaints procedure, a copy of which is available upon request</p>', 1000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-08-18 22:45:10', '2024-08-18 22:45:10');
INSERT INTO `pages` (`id`, `status`, `title`, `slug`, `short_description`, `description`, `position`, `featured`, `meta_title`, `meta_description`, `meta_tags`, `image`, `media_id`, `template`, `deleted_at`, `created_at`, `updated_at`) VALUES
(31, 1, 'Who we are', 'who-we-are-2', NULL, '<p>In 2005, Al-Khair Foundation was amongst the first on the ground in Haiti to provide food, water, shelter and medication in the aftermath of a large scale earthquake. Since then, we have greatly expanded our operations. From Chile to Afghanistan to the Philippines, Al-Khair Foundation provides emergency and developmental support to needy people around the world, irrespective of race, creed or political affiliation. Our aid delivery footprint spans 74 countries, and we have touched the lives of over 50 million beneficiaries.<br />\r\n<br />\r\n<strong>List of Countries We Have Ever Worked In</strong></p>\r\n\r\n<ul>\r\n	<li>Afghanistan</li>\r\n	<li>Albania</li>\r\n	<li>Angola</li>\r\n	<li>Australia</li>\r\n	<li>Austria</li>\r\n	<li>Bangladesh</li>\r\n	<li>Benin</li>\r\n	<li>Bosnia and Herzegovina</li>\r\n	<li>Bulgaria</li>\r\n	<li>Central African Republic</li>\r\n	<li>Chad</li>\r\n	<li>Chile</li>\r\n	<li>Ecuador</li>\r\n	<li>Eritrea</li>\r\n	<li>Ethiopia</li>\r\n	<li>The Gambia</li>\r\n	<li>Ghana</li>\r\n	<li>Greece</li>\r\n	<li>Haiti</li>\r\n	<li>Hungary</li>\r\n	<li>India</li>\r\n	<li>Indonesia</li>\r\n	<li>Iraq</li>\r\n	<li>Jamaica</li>\r\n	<li>Jordan</li>\r\n	<li>Kenya</li>\r\n	<li>Kosovo</li>\r\n	<li>Lebanon</li>\r\n	<li>Malawi</li>\r\n	<li>Malaysia</li>\r\n	<li>Mali</li>\r\n	<li>Mauritania</li>\r\n	<li>Mexico</li>\r\n	<li>Mozambique</li>\r\n	<li>Myanmar</li>\r\n	<li>Namibia</li>\r\n	<li>Nepal</li>\r\n	<li>Niger</li>\r\n	<li>Nigeria</li>\r\n	<li>North Macedonia</li>\r\n	<li>Oman</li>\r\n	<li>Pakistan</li>\r\n	<li>Palestine</li>\r\n	<li>Philippines</li>\r\n	<li>Rwanda</li>\r\n	<li>Senegal</li>\r\n	<li>Sierra Leone</li>\r\n	<li>Somalia</li>\r\n	<li>Somaliland</li>\r\n	<li>South Africa</li>\r\n	<li>South Sudan</li>\r\n	<li>Sri Lanka</li>\r\n	<li>Suriname</li>\r\n	<li>Syria</li>\r\n	<li>Tanzania</li>\r\n	<li>Togo</li>\r\n	<li>Tunisia</li>\r\n	<li>Uganda</li>\r\n	<li>United Kingdom</li>\r\n	<li>United States of America</li>\r\n	<li>Venezuela</li>\r\n	<li>Yemen</li>\r\n	<li>Zimbabwe</li>\r\n</ul>', 1000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-08-18 22:47:00', '2024-08-18 22:47:00'),
(32, 1, 'Gallary', 'gallary', NULL, NULL, 1000, 0, NULL, NULL, NULL, NULL, NULL, 'gallery.galleries', NULL, '2024-08-28 03:36:50', '2024-08-28 03:36:50');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL,
  `permission` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `role_id`, `permission`, `created_at`, `updated_at`) VALUES
(3, 1, '{\"news\":{\"add\":\"1\",\"edit\":\"1\",\"view\":\"1\",\"delete\":\"1\",\"list\":\"1\"},\"events\":{\"add\":\"1\",\"edit\":\"1\",\"view\":\"1\",\"delete\":\"1\",\"list\":\"1\"},\"research\":{\"add\":\"1\",\"edit\":\"1\",\"view\":\"1\",\"delete\":\"1\",\"list\":\"1\"},\"volunteer\":{\"add\":\"1\",\"edit\":\"1\",\"view\":\"1\",\"delete\":\"1\",\"list\":\"1\"},\"donation\":{\"add\":\"1\",\"edit\":\"1\",\"view\":\"1\",\"delete\":\"1\",\"list\":\"1\"},\"notice-board\":{\"add\":\"1\",\"edit\":\"1\",\"view\":\"1\",\"delete\":\"1\",\"list\":\"1\"},\"galleries\":{\"add\":\"1\",\"edit\":\"1\",\"view\":\"1\",\"delete\":\"1\",\"list\":\"1\"},\"pages\":{\"add\":\"1\",\"edit\":\"1\",\"view\":\"1\",\"delete\":\"1\",\"list\":\"1\"},\"menus\":{\"add\":\"1\",\"edit\":\"1\",\"view\":\"1\",\"delete\":\"1\",\"list\":\"1\"},\"settings\":{\"add\":\"1\",\"edit\":\"1\",\"view\":\"1\",\"delete\":\"1\",\"list\":\"1\"},\"request-contact\":{\"add\":\"1\",\"edit\":\"1\",\"view\":\"1\",\"delete\":\"1\",\"list\":\"1\"},\"role\":{\"add\":\"1\",\"edit\":\"1\",\"view\":\"1\",\"delete\":\"1\",\"list\":\"1\"},\"permissions\":{\"add\":\"1\",\"edit\":\"1\",\"view\":\"1\",\"delete\":\"1\",\"list\":\"1\"},\"admins\":{\"add\":\"1\",\"edit\":\"1\",\"view\":\"1\",\"delete\":\"1\",\"list\":\"1\"}}', '2022-06-25 13:40:26', '2024-07-28 21:23:29');

-- --------------------------------------------------------

--
-- Table structure for table `request_contacts`
--

CREATE TABLE `request_contacts` (
  `id` int UNSIGNED NOT NULL,
  `subject` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_quote` tinyint NOT NULL DEFAULT '0',
  `is_replay` tinyint NOT NULL DEFAULT '0',
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
  `id` int UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `media_id` int DEFAULT NULL,
  `video` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pdf_file` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, '2022-06-25 11:18:12'),
(2, 'IT Adminstirot', NULL, '2024-08-02 15:04:09'),
(3, 'Manager', NULL, '2024-08-02 15:04:30'),
(4, 'Alumni', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `section_design_types`
--

CREATE TABLE `section_design_types` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_align` tinyint NOT NULL DEFAULT '1' COMMENT '0=left,1=center,2=right',
  `position` int UNSIGNED NOT NULL DEFAULT '1000',
  `section_design_type_id` bigint UNSIGNED DEFAULT NULL,
  `background_color` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `col` int UNSIGNED NOT NULL DEFAULT '4',
  `row` int UNSIGNED NOT NULL DEFAULT '1',
  `title_is_show` tinyint(1) NOT NULL DEFAULT '1',
  `created_by` int UNSIGNED DEFAULT NULL,
  `updated_by` int UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint UNSIGNED NOT NULL,
  `service_type_id` bigint UNSIGNED NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_video` tinyint(1) NOT NULL DEFAULT '0',
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `date` timestamp NULL DEFAULT NULL,
  `amount` double NOT NULL DEFAULT '0',
  `discount_amount` double NOT NULL DEFAULT '0',
  `is_free` tinyint(1) NOT NULL DEFAULT '0',
  `tags` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `expire_date` date DEFAULT NULL,
  `is_limit` tinyint(1) NOT NULL DEFAULT '0',
  `limit` double DEFAULT NULL,
  `position` int NOT NULL DEFAULT '1000',
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
  `id` bigint UNSIGNED NOT NULL,
  `service_id` bigint UNSIGNED DEFAULT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_video` tinyint(1) NOT NULL DEFAULT '0',
  `video` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doc` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` int NOT NULL DEFAULT '1000',
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
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `position` int NOT NULL DEFAULT '1000',
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
  `id` bigint UNSIGNED NOT NULL,
  `group` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `group`, `name`, `value`, `created_at`, `updated_at`) VALUES
(1, 'general', 'title', 'Al Khair', NULL, NULL),
(2, 'general', 'slogan', 'Make Difference', NULL, NULL),
(3, 'general', 'mobile_number', '02334496526', NULL, NULL),
(4, 'general', 'email', 'info@al-khair.co.uk', NULL, NULL),
(5, 'general', 'tel', '02334496526', NULL, NULL),
(6, 'general', 'copyright', 'all right reserved', NULL, NULL),
(7, 'general', 'city', 'London', NULL, NULL),
(8, 'general', 'state', 'London', NULL, NULL),
(9, 'general', 'country', 'UK', NULL, NULL),
(10, 'general', 'zip', 'E1 1EJ', NULL, NULL),
(11, 'general', 'street', 'East London Mosque', NULL, NULL),
(12, 'general', 'tax', NULL, NULL, NULL),
(13, 'general', 'tax_type', NULL, NULL, NULL),
(14, 'general', 'currency_name', NULL, NULL, NULL),
(15, 'general', 'currency_symbol', NULL, NULL, NULL),
(16, 'general', 'meta_description', 'Al Khair', NULL, NULL),
(17, 'general', 'keywords', 'Al Khair', NULL, NULL),
(18, 'home_banner', 'title_text_1', NULL, NULL, NULL),
(19, 'home_banner', 'title_text_2', NULL, NULL, NULL),
(20, 'home_banner', 'short_description', NULL, NULL, NULL),
(21, 'home_banner', 'button_text', NULL, NULL, NULL),
(22, 'home_banner', 'button_url', NULL, NULL, NULL),
(23, 'social', 'facebook', NULL, NULL, NULL),
(24, 'social', 'twitter', NULL, NULL, NULL),
(25, 'social', 'youtube', NULL, NULL, NULL),
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
  `id` bigint UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `position` int NOT NULL DEFAULT '1000',
  `text_1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_1_text` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_1_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_2_text` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_2_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `slider_type` tinyint DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `media_id` bigint UNSIGNED DEFAULT NULL,
  `video` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `status`, `position`, `text_1`, `text_2`, `text_3`, `button_1_text`, `button_1_url`, `button_2_text`, `button_2_url`, `short_description`, `description`, `slider_type`, `image`, `image_path`, `media_id`, `video`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1000, 'Laboriosam esse in', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, '2022-06-14 10:58:14', '2022-06-14 10:58:02', '2022-06-14 10:58:14'),
(2, 1, 1000, 'Water', NULL, NULL, 'Donation', NULL, NULL, NULL, NULL, 'Tempora aliqua Aspe', 1, '1723755016.jpg', '2024/08', 40, NULL, NULL, '2022-06-14 11:56:16', '2024-08-16 01:50:17'),
(3, 1, 1000, 'Donation', NULL, NULL, 'Donation', NULL, NULL, NULL, NULL, 'Molestiae aut dolore', 1, '1723755050.jpg', '2024/08', 41, NULL, NULL, '2022-06-14 12:04:03', '2024-08-16 01:50:51');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` int NOT NULL DEFAULT '1000',
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
  `id` bigint UNSIGNED NOT NULL,
  `type` varchar(55) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` bigint DEFAULT NULL,
  `status` varchar(55) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `first_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` timestamp NULL DEFAULT NULL,
  `profile_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `bio` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `type`, `role_id`, `status`, `first_name`, `last_name`, `email`, `mobile_number`, `dob`, `profile_image`, `address`, `password`, `bio`, `remember_token`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'admin', 1, 'approved', 'Test', 'Admin', 'sw@2050.com\r\n', '017618716176', NULL, 'Null', 'Null', '5f4dcc3b5aa765d61d8327deb882cf99', NULL, NULL, NULL, NULL, NULL),
(3, 'admin', 2, 'pending', 'Faculti', 'Test', 'faculti@gmail.com', '01671961393', NULL, '1656137072.png', 'Dhaka, Bangladesh', '$2y$10$VckTQOVhNQ5QTLYagqFMhedVnMLk30X0MYG1NkWHv8mazncJhYPKy', NULL, NULL, NULL, '2022-06-25 06:04:32', '2022-06-25 06:04:32'),
(4, 'admin', 3, 'pending', 'Amir', 'Butler', 'dolexoti@mailinator.com', '487', NULL, '1656139788.jpg', 'Odio qui eu eos adi', '$2y$10$Xmv.1vaOdzPgboUPNtznx.ZzdXfO2n9FpuX.0bNofkK8lDFaCGr2i', NULL, NULL, NULL, '2022-06-25 06:49:48', '2022-06-25 06:49:48'),
(5, 'alumni', 4, 'approved', 'Kibo', 'Dominguez', 'xisaxyvi@mailinator.com', '56', NULL, '1656140542.jpg', 'Commodo nemo reicien', '$2y$10$ui0HbvTySIqHYHuZRjysH.x7QMjpzapA0OCVT5EPvA1dNAs3u8RWC', NULL, NULL, NULL, '2022-06-25 07:02:22', '2022-06-25 07:02:22'),
(6, 'admin', 4, 'pending', 'Kato', 'Nieves', 'byfejese@mailinator.com', '82', NULL, '1656140751.jpg', 'Aut quo qui irure qu', '$2y$10$tUM9SutkB6WD9v0b.NTprurdfJ3VU2x2lMFLbCmpYsvJIbST1dBw6', NULL, NULL, NULL, '2022-06-25 07:05:51', '2022-06-25 07:05:51'),
(7, 'alumni', 4, 'pending', 'Cadman', 'Schmidt', 'cumucizesy@mailinator.com', '766', NULL, '1656141116.jpg', 'Quia velit qui labo', '$2y$10$HSojagdElv2u/sYGPjs2.e0O5fpX7gyQbZQwxP/kE1SPFIK38awWO', NULL, NULL, NULL, '2022-06-25 07:11:56', '2022-06-25 07:11:56'),
(8, 'alumni', 4, 'approved', 'Lani', 'Buckner', 'hello@gmail.com', '253', NULL, '1656141176.jpg', 'Dolores fuga Impedi', '$2y$10$zZICFLzs8ez/RMdWc8WijufqMQPTYvL0RKWB.Bg3X0U9c563TWAJC', NULL, NULL, NULL, '2022-06-25 07:12:56', '2022-06-25 07:12:56'),
(9, 'admin', 1, 'approved', 'Admin', 'Three', 'alumni3@gmail.com', '01678512932', NULL, '1656144748.jpg', 'Dhaka, Bangladesh', '$2y$10$H7u7q27U8im5uNbxglGQfOdwepXgt6vOCr8ReP1zuYBcmAQRHB0C6', NULL, NULL, NULL, '2022-06-25 08:12:28', '2022-06-25 08:12:28'),
(10, 'admin', 1, 'approve', 'Arif', 'Hossain', 'admin@gmail.com', '01671961393', NULL, NULL, NULL, '$2y$10$iyc88PtuSCGZzndaJeHVb.o.Q1TePDf7yp5veKrhVC9HSU1BzIjyy', NULL, NULL, NULL, '2024-06-23 22:02:14', '2024-06-23 22:02:14');

-- --------------------------------------------------------

--
-- Table structure for table `user_services`
--

CREATE TABLE `user_services` (
  `id` bigint UNSIGNED NOT NULL,
  `service_id` bigint UNSIGNED DEFAULT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `service_start` date DEFAULT NULL,
  `service_expire` date DEFAULT NULL,
  `payment_status` tinyint(1) NOT NULL DEFAULT '0',
  `amount` double NOT NULL DEFAULT '0',
  `transaction_no` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `volunteers`
--

CREATE TABLE `volunteers` (
  `id` int UNSIGNED NOT NULL,
  `name_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `street_address` text COLLATE utf8mb4_unicode_ci,
  `address_line_2` text COLLATE utf8mb4_unicode_ci,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disability` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disability_desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ethnicity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volunteered_exp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `occupation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volunteering_area_int` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_relation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emg_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emg_relation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emg_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emg_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `criminal_bg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `volunteers`
--

INSERT INTO `volunteers` (`id`, `name_title`, `first_name`, `last_name`, `email`, `phone`, `dob`, `address`, `street_address`, `address_line_2`, `city`, `state`, `zip_code`, `country`, `gender`, `disability`, `disability_desc`, `ethnicity`, `volunteered_exp`, `occupation`, `volunteering_area_int`, `ref_name`, `ref_relation`, `ref_email`, `ref_mobile`, `emg_name`, `emg_relation`, `emg_email`, `emg_phone`, `criminal_bg`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Mr', 'Arif', 'Hossain', 'arif@gmail.com', '01671971393', '2008-06-10', 'London', 'London', 'London', 'London', 'London', 'E1 0DF', 'UK', 'Male', 'Yes', NULL, NULL, 'Yes', 'Business', 'Facilitating Sport Events', 'Jondoe', NULL, NULL, NULL, 'Jhondoe', NULL, NULL, NULL, NULL, 1, '2024-07-23 02:13:37', '2024-07-23 02:13:37'),
(3, 'Mr', 'Arif', 'Hossain', 'arif@gmail.com', '07440723138', '1998-01-01', 'London', NULL, 'London', 'London', 'London', 'N18 2BQ', 'UK', 'Male', 'No', NULL, NULL, 'Yes', 'Healthcare', 'Fundraising Activities', 'Shorif', 'Brother', 's@gmail.com', '07440723138', 'Sarker', 'Friends', 'sarker@gmail.com', NULL, NULL, 1, '2024-08-27 03:23:12', '2024-08-27 03:23:12'),
(4, 'Mr', 'Arif', 'Sarker', 'arifhossain393@gmail.com', '07440723138', '1993-10-27', 'London', NULL, 'London', 'London', 'London', 'E1 0DF', 'UK', 'Male', 'No', NULL, NULL, 'Yes', 'Student (University)', 'School & Education and Professional Skills', 'Adil', 'Friends', 'adil@gmail.com', '07440723417', 'Rahman', 'Brother', 'ra@gmail.com', NULL, NULL, 1, '2024-08-30 15:40:49', '2024-08-30 15:40:49');

-- --------------------------------------------------------

--
-- Table structure for table `widgets`
--

CREATE TABLE `widgets` (
  `id` bigint UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `placement` varchar(55) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(55) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` bigint NOT NULL DEFAULT '1000',
  `text` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `menu_id` bigint UNSIGNED DEFAULT NULL,
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
-- Indexes for table `donations`
--
ALTER TABLE `donations`
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
-- Indexes for table `volunteers`
--
ALTER TABLE `volunteers`
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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `emails`
--
ALTER TABLE `emails`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `event_attributes`
--
ALTER TABLE `event_attributes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery_items`
--
ALTER TABLE `gallery_items`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `home_sections`
--
ALTER TABLE `home_sections`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `notice_boards`
--
ALTER TABLE `notice_boards`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `request_contacts`
--
ALTER TABLE `request_contacts`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `research`
--
ALTER TABLE `research`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `section_design_types`
--
ALTER TABLE `section_design_types`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `section_names`
--
ALTER TABLE `section_names`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_materials`
--
ALTER TABLE `service_materials`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_types`
--
ALTER TABLE `service_types`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_services`
--
ALTER TABLE `user_services`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `volunteers`
--
ALTER TABLE `volunteers`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `widgets`
--
ALTER TABLE `widgets`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
