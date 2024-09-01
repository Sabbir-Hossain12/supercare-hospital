-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 01, 2024 at 10:48 AM
-- Server version: 8.0.37
-- PHP Version: 8.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `muhibsho_supercarehospitalbd`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '#45AC8B',
  `video` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `image`, `title`, `color`, `video`, `description`, `created_at`, `updated_at`) VALUES
(1, 'public/backend/image/about/1723131442.773.jpg', 'About Us', '#000000', 'https://www.youtube.com/watch?v=-vNKHW1C3B8', '<ul><li>dummy</li><li>adasda</li><li>sadas</li><li>dasd</li><li>asdasdasdasdas</li><li>asdasdas</li><li>asdasd</li></ul>', '2024-08-08 09:37:22', '2024-08-20 04:31:03');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `name`, `email`, `phone`, `department`, `date`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 'sad', 'asd', '531321', 'asd', 'asdasd', 'asdsad', 1, NULL, '2024-08-06 10:30:20'),
(2, 'Sabbir', 'admin@gmail.com', '014641548', 'Arthopodix', 'dasdasd', 'i am in very good condition', 1, NULL, '2024-08-06 10:30:30'),
(3, 'Ulric Fitzgerald', 'wyjuzybeqi@mailinator.com', '+1 (386) 125-5663', 'Department 3', '2024-08-07 00:00:00', 'Praesentium asperior', 1, '2024-08-07 12:08:17', '2024-08-07 12:08:17'),
(4, 'Tyrone Sweet', 'fikiquxyto@mailinator.com', '+1 (167) 747-6624', 'Surgery', '2024-08-08 00:00:00', 'Magnam laborum Aliq', 1, '2024-08-08 10:50:23', '2024-08-08 10:50:23'),
(5, 'Burke Spencer', 'wewefem@mailinator.com', '+1 (619) 152-6928', 'Surgery', '2024-08-08 00:00:00', 'Impedit libero ea a', 1, '2024-08-08 10:51:25', '2024-08-08 10:51:25'),
(6, 'Angelica Freeman', 'qusypory@mailinator.com', '+1 (464) 756-6499', 'Surgery', '2024-08-13 00:00:00', 'Nihil possimus et e', 1, '2024-08-13 01:06:12', '2024-08-13 01:06:12'),
(7, 'Rhea Brennan', 'zoqulubin@mailinator.com', '+1 (128) 868-9107', 'Orthopedic', '2024-08-13 00:00:00', 'Illum ut porro repr', 1, '2024-08-13 01:08:34', '2024-08-13 01:08:34'),
(8, 'Eagan Powers', 'rafic@mailinator.com', '+1 (726) 687-6462', 'Surgery', '2024-08-13 00:00:00', 'Tempora cupiditate t', 1, '2024-08-13 01:50:04', '2024-08-13 01:50:04'),
(9, 'Jayme Hanson', 'kusiluj@mailinator.com', '+1 (766) 726-6823', 'Orthopedic', '2024-08-13 00:00:00', 'Ratione vero qui vol', 1, '2024-08-13 02:08:21', '2024-08-13 02:08:21'),
(10, 'Castor Glenn', 'xaku@mailinator.com', '+1 (632) 725-8602', 'Maryam Frazier', '2024-08-20 00:00:00', 'Rifat is sick', 1, '2024-08-20 05:05:18', '2024-08-27 13:45:34');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `banner_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `appointment_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `learn_more_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int NOT NULL DEFAULT '1' COMMENT '1=active, 0=deActive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `description`, `banner_img`, `appointment_url`, `learn_more_url`, `status`, `created_at`, `updated_at`) VALUES
(3, 'We Provide <span>Medical</span> Services That You Can <span>Trust!</span>', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed nisl pellentesque, faucibus libero eu, gravida quam.', 'public/backend/image/banner/1723047595.9559.jpg', 'https://supercarehospitalbd.com/appointment', '#', 1, '2024-08-07 10:19:55', '2024-08-20 04:25:40'),
(4, 'We Provide <span>Medical</span> Services That You Can <span>Trust!</span>', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed nisl pellentesque, faucibus libero eu, gravida quam.', 'public/backend/image/banner/1723047654.1443.jpg', '#', '#', 1, '2024-08-07 10:20:54', '2024-08-07 10:23:02'),
(5, 'We Provide <span>Medical</span> Services That You Can <span>Trust!</span>', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed nisl pellentesque, faucibus libero eu, gravida quam.', 'public/backend/image/banner/1723047692.3156.jpg', '#', '#', 1, '2024-08-07 10:21:32', '2024-08-07 10:21:32');

-- --------------------------------------------------------

--
-- Table structure for table `basic_infos`
--

CREATE TABLE `basic_infos` (
  `id` bigint UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_logo` text COLLATE utf8mb4_unicode_ci,
  `whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_optional` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_optional` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_optional` text COLLATE utf8mb4_unicode_ci,
  `facebook` text COLLATE utf8mb4_unicode_ci,
  `twitter` text COLLATE utf8mb4_unicode_ci,
  `youtube` text COLLATE utf8mb4_unicode_ci,
  `linkedin` text COLLATE utf8mb4_unicode_ci,
  `instagram` text COLLATE utf8mb4_unicode_ci,
  `pinterest` text COLLATE utf8mb4_unicode_ci,
  `facebook_pixel` text COLLATE utf8mb4_unicode_ci,
  `google_analytics` text COLLATE utf8mb4_unicode_ci,
  `google_map` text COLLATE utf8mb4_unicode_ci,
  `footer_logo` text COLLATE utf8mb4_unicode_ci,
  `footer_text` text COLLATE utf8mb4_unicode_ci,
  `favicon` text COLLATE utf8mb4_unicode_ci,
  `meta_image` text COLLATE utf8mb4_unicode_ci,
  `meta_title` text COLLATE utf8mb4_unicode_ci,
  `meta_keyword` longtext COLLATE utf8mb4_unicode_ci,
  `meta_description` longtext COLLATE utf8mb4_unicode_ci,
  `room_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `room_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `room_icons` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doctor_icons` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doctor_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doctor_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `patient_icons` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `patient_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `patient_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experience_icons` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experience_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experience_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `basic_infos`
--

INSERT INTO `basic_infos` (`id`, `logo`, `mobile_logo`, `whatsapp`, `phone`, `phone_optional`, `email`, `email_optional`, `address`, `address_optional`, `facebook`, `twitter`, `youtube`, `linkedin`, `instagram`, `pinterest`, `facebook_pixel`, `google_analytics`, `google_map`, `footer_logo`, `footer_text`, `favicon`, `meta_image`, `meta_title`, `meta_keyword`, `meta_description`, `room_number`, `room_title`, `room_icons`, `doctor_icons`, `doctor_title`, `doctor_number`, `patient_icons`, `patient_title`, `patient_number`, `experience_icons`, `experience_title`, `experience_number`, `created_at`, `updated_at`) VALUES
(1, 'public/backend/image/basicInfo/1723045504.1087.png', NULL, '+8801310494646', '+8801310494646', '+8801310494646', 'support@supercarehospitalbd.com', 'support@supercarehospitalbd.com', 'Dhaka', 'Dhaka', '#https://www.facebook.com/profile.php?id=61560007019220', '#', '#', '#', '#', '#', 'asdas', 'sada', '#', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '24', 'Cabin & Ward Rooms', 'icofont-home', 'icofont-user-alt-3', 'ICU & NICU Beds', '20', 'icofont-simple-smile', 'Patients Served', '250', 'icofont-table', 'Years of Experience', '1', '2024-08-07 09:45:04', '2024-08-30 11:34:03');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint UNSIGNED NOT NULL,
  `blog_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_short_desc` text COLLATE utf8mb4_unicode_ci,
  `blog_long_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_image` text COLLATE utf8mb4_unicode_ci,
  `blog_author` text COLLATE utf8mb4_unicode_ci,
  `blog_author_img` text COLLATE utf8mb4_unicode_ci,
  `blog_date` date DEFAULT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blog_title`, `blog_short_desc`, `blog_long_desc`, `blog_image`, `blog_author`, `blog_author_img`, `blog_date`, `status`, `created_at`, `updated_at`) VALUES
(4, 'We have annnocuced our new product.', 'Lorem ipsum dolor a sit ameti, consectetur adipisicing elit, sed do eiusmod tempor incididunt sed do incididunt sed.', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis ultricies tortor, nec sollicitudin lorem sagittis vitae. Curabitur rhoncus commodo rutrum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam nec lacus pulvinar, laoreet dolor quis, pellentesque ante. Cras nulla orci, pharetra at dictum consequat, pretium pretium nulla. Suspendisse porttitor nunc a sodales tempor. Mauris sed felis maximus, interdum metus vel, tincidunt diam.</p><p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam nec lacus pulvinar, laoreet dolor quis, pellentesque ante. Cras nulla orci, pharetra at dictum consequat, pretium pretium nulla. Suspendisse porttitor nunc a sodales tempor. Mauris sed felis maximus, interdum metus vel, tincidunt diam. Nam ac risus vitae sem vehicula egestas. Sed velit nulla, viverra non commod</p><p><img src=\"https://wpthemesgrid.com/themes/mediplus/img/blog2.jpg\" alt=\"#\" width=\"557\" height=\"373\"></p><p><img src=\"https://wpthemesgrid.com/themes/mediplus/img/blog3.jpg\" alt=\"#\" width=\"557\" height=\"373\"></p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis ultricies tortor, nec sollicitudin lorem sagittis vitae. Curabitur rhoncus commodo rutrum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam nec lacus pulvinar, laoreet dolor quis, pellentesque ante. Cras nulla orci, pharetra at dictum consequat, pretium pretium nulla. Suspendisse porttitor nunc a sodales tempor. Mauris sed felis maximus, interdum metus vel, tincidunt diam.</p><blockquote><p>Aliquam nec lacus pulvinar, laoreet dolor quis, pellentesque ante. Cras nulla orci, pharetra at dictum consequat, pretium pretium nulla. Suspendisse porttitor nunc a sodales tempor. Mauris sed felis maximus, interdum metus vel, tincidunt diam. Nam ac risus vitae sem vehicula egestas. Sed velit nulla, viverra non commodo et, sodales</p></blockquote><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis ultricies tortor, nec sollicitudin lorem sagittis vitae. Curabitur rhoncus commodo rutrum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam nec lacus pulvinar, laoreet dolor quis, pellentesque ante. Cras nulla orci, pharetra at dictum consequat, pretium pretium nulla. Suspendisse porttitor nunc a sodales tempor. Mauris sed felis maximus, interdum metus vel, tincidunt diam. Nam ac risus vitae sem vehicula egestas. Sed velit nulla, viverra non commodo et, sodales id dui.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis ultricies tortor, nec sollicitudin lorem sagittis vitae. Curabitur rhoncus commodo rutrum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam nec lacus pulvinar, laoreet dolor quis, pellentesque ante. Cras nulla orci, pharetra at dictum consequat, pretium pretium nulla. Suspendisse</p>', 'public/backend/image/blog/1723114985blog1.jpg', 'Sabbir', NULL, '2024-08-08', 1, '2024-08-08 05:03:05', '2024-08-08 05:03:05'),
(5, 'Ipsum excepturi sit', 'Natus distinctio Qu', '<p>In the heart of a bustling city, where the streets were alive with the hum of activity, a small café stood tucked away in a quiet corner. The scent of freshly brewed coffee wafted through the air, mingling with the sound of clinking cups and murmured conversations. Sunlight streamed through the large windows, casting a warm glow over the wooden tables and the eclectic mix of patrons.</p><p>A young woman sat by the window, her fingers tapping idly on the rim of her coffee cup as she stared out at the world beyond. The café was her sanctuary, a place where she could escape the demands of daily life and lose herself in thought. Today, her mind wandered to the possibilities that lay ahead, the dreams she had yet to chase, and the paths she had yet to discover.</p><p>Across the room, an older gentleman flipped through the pages of a well-worn book, his brow furrowed in concentration. He was a regular at the café, known for his quiet demeanor and the way he always chose the same corner seat. The staff had grown fond of him, often sneaking an extra cookie onto his saucer when he wasn\'t looking.</p><p>The café was more than just a place to grab a quick coffee; it was a hub of stories waiting to be told. From the laughter shared over a shared table to the quiet moments of reflection, each visit added a new chapter to the lives of those who passed through its doors. And as the day drew to a close, the café would quietly hum with the echoes of the day’s events, waiting patiently for the next morning when the stories would begin again.</p>', 'public/backend/image/blog/1723136478blog2.jpg', 'Dolor recusandae Qu', NULL, '2024-08-08', 1, '2024-08-08 11:01:18', '2024-08-25 03:49:16');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('admin@admin.com|::1', 'i:2;', 1723529361),
('admin@admin.com|::1:timer', 'i:1723529361;', 1723529361),
('admin5@gmail.com|::1', 'i:1;', 1722960565),
('admin5@gmail.com|::1:timer', 'i:1722960565;', 1722960565);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint UNSIGNED NOT NULL,
  `blog_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `blog_id`, `name`, `message`, `created_at`, `updated_at`) VALUES
(2, 4, 'Rifat Bhuiyan', 'Good Service', '2024-08-08 06:20:42', '2024-08-08 06:20:42'),
(3, 4, 'Saif hossain', 'Very Good Clean Hospital', '2024-08-08 07:02:28', '2024-08-08 07:02:28'),
(4, 4, 'Stuff', 'Good Behavior', '2024-08-08 07:04:27', '2024-08-08 07:04:27'),
(5, 4, 'SuperAdmin', 'nice Attitude', '2024-08-08 07:04:42', '2024-08-08 07:04:42'),
(6, 4, 'Sabbir Bhuiyan', 'Testing', '2024-08-08 07:12:06', '2024-08-08 07:12:06'),
(7, 4, 'Rifat Khan', 'jiasodjsoakjdkasc', '2024-08-13 00:05:49', '2024-08-13 00:05:49'),
(8, 5, 'Rifat Khan', 'Is Sick.', '2024-08-20 05:07:16', '2024-08-20 05:07:16');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL DEFAULT '2' COMMENT '1=admin, 2=user',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `mobile`, `subject`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Darrel Daniel', 'fofove@mailinator.com', 'Corporis voluptatem', 'Dolores dolore et do', 'Exercitation similiq', 1, '2024-08-08 07:23:09', '2024-08-30 11:27:23'),
(2, 'Lisandra Parker', 'qudecubejy@mailinator.com', 'Aut sit earum et nob', 'Iusto dolor dolorem', 'Aut repellendus Qui', 1, '2024-08-08 07:23:54', '2024-08-08 07:23:54'),
(3, 'Nathaniel Harrington', 'kateroje@mailinator.com', 'Perspiciatis animi', 'Voluptas nostrud rep', 'Minima odit dignissi', 1, '2024-08-13 01:01:33', '2024-08-13 01:01:33'),
(4, 'Search Engine Index', 'submissions@searchindex.site', '240169250', 'Add supercarehospitalbd.com to Google Search Index!', 'Hello,\r\n\r\nfor your website do be displayed in searches your domain needs to be indexed in the Google Search Index.\r\n\r\nTo add your domain to Google Search Index now, please visit \r\n\r\nhttps://searchregistry.net/', 1, '2024-08-21 09:24:21', '2024-08-21 09:24:21'),
(5, 'Harvey Miller', 'harvey.websolution9@gmail.com', '8456404550', 'Question About your website', 'Hello,\r\nYour website is encountering significant SEO (Search Engine Optimization) issues, affecting its visibility on search engines like Google, Bing, and Yahoo. Please provide your phone number and a convenient time for a call so we can address and resolve these issues promptly.\r\n\r\nRegards,\r\nHarvey Miller', 1, '2024-08-21 12:06:58', '2024-08-21 12:06:58'),
(6, 'Denis Berger', 'denisberger.web@gmail.com', '2132620124', 'Re: Want to attract more clients and customers?', '\"Hello there,\r\n\r\nI was going through your website & I personally see a lot of potential in your website & business.\r\n\r\nWe can increase targeted visitor\'s to your website so that it appears on Google\'s first page. Bing, Yahoo, AOL, etc.\r\n\r\nKindly provide your cell/WhatsApp number with suitable time to talk to you.\r\n\r\nWell wishes,\r\nDenis Berger\"', 1, '2024-08-21 23:58:51', '2024-08-21 23:58:51'),
(7, 'Greg Di Bruno', 'info@letsgetuoptimize.com', '9497671355', 'Re: SEO - Expert', 'Hey team supercarehospitalbd.com,\r\n\r\nI was looking at your website and realized that despite having a good design; it was not ranking high on any of the Search Engines (Google, Yahoo & Bing) for most of the keywords related to your business.\r\n\r\nWe can place your website on Google\'s 1st page.\r\n\r\n*  Top ranking on Google search!\r\n*  Improve website clicks and views!\r\n*  Increase Your Leads, clients & Revenue!\r\n\r\nI can send you more details on the packages/Portfolio/past work details.\r\n\r\nWell wishes,\r\nGreg Di Bruno\r\nSenior Services Consultant - Let’s Get You Optimize\r\nEmail: info@letsgetuoptimize.com\r\nPhone: 9497671355\r\n\r\n\r\n\r\n\r\nIf you don’t want me to contact you again about this, reply with “unsubscribe”', 1, '2024-08-22 03:40:21', '2024-08-22 03:40:21'),
(8, 'Search Engine Index', 'submissions@searchindex.site', '6208616278', 'Add supercarehospitalbd.com to Google Search Index!', 'Hello,\r\n\r\nfor your website do be displayed in searches your domain needs to be indexed in the Google Search Index.\r\n\r\nTo add your domain to Google Search Index now, please visit \r\n\r\nhttps://searchregister.info/', 1, '2024-08-22 14:29:22', '2024-08-22 14:29:22'),
(9, 'Search Engine Index', 'submissions@searchindex.site', '242950582', 'Add supercarehospitalbd.com to Google Search Index!', 'Hello,\r\n\r\nfor your website do be displayed in searches your domain needs to be indexed in the Google Search Index.\r\n\r\nTo add your domain to Google Search Index now, please visit \r\n\r\nhttps://searchregistry.net/', 1, '2024-08-23 08:45:22', '2024-08-23 08:45:22');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint UNSIGNED NOT NULL,
  `department_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `department_name`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Surgery', 1, '2024-08-08 08:24:39', '2024-08-08 08:27:32'),
(4, 'Orthopedic', 1, '2024-08-08 08:25:09', '2024-08-08 08:27:36'),
(5, 'Maryam Frazier', 1, '2024-08-20 05:04:31', '2024-08-20 05:04:31');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1' COMMENT '1=active, 0=deActive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `image`, `title`, `category`, `status`, `created_at`, `updated_at`) VALUES
(1, 'public/backend/image/doctor/1725038965.8554.jpg', 'Dr. Lisa Young', 'Orthopediac', 1, '2024-08-30 11:29:25', '2024-08-30 11:29:25'),
(2, 'public/backend/image/doctor/1725039164.7027.jpg', 'Dr. Bike Man', 'Gastrology', 1, '2024-08-30 11:32:44', '2024-08-30 11:32:44');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_07_15_072305_create_banners_table', 1),
(5, '2024_07_15_091942_create_contacts_table', 1),
(6, '2024_07_15_104604_create_basic_infos_table', 1),
(7, '2024_07_16_051705_create_abouts_table', 1),
(9, '2024_08_04_161513_create_services_table', 3),
(10, '2024_08_04_161544_create_blogs_table', 4),
(11, '2024_08_04_161641_create_appointments_table', 4),
(12, '2024_08_04_164817_create_comments_table', 4),
(13, '2024_08_04_161350_create_schedules_table', 5),
(14, '2024_08_04_162106_create_projects_table', 6),
(15, '2024_08_08_133654_create_departments_table', 7),
(16, '2024_08_08_130637_create_doctors_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` int DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1' COMMENT '1=active, 0=deActive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `image`, `title`, `category`, `description`, `client_name`, `age`, `facebook`, `instagram`, `twitter`, `linkedin`, `date`, `status`, `created_at`, `updated_at`) VALUES
(1, 'public/backend/image/logo/1724150000.4386.jpg', 'Laboriosam aute off', 'Voluptatem quis ips', '<p>dummy</p>', 'Alice Padilla', 54, 'Sequi nobis iure iru', 'In repudiandae a qui', 'Recusandae Exceptur', 'Neque sint est repe', '20-08-2024', 1, '2024-08-06 12:22:47', '2024-08-20 04:33:20');

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` bigint UNSIGNED NOT NULL,
  `schedule_title_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `schedules_title_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `schedules_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `schedules_icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`id`, `schedule_title_1`, `schedules_title_2`, `schedules_desc`, `schedules_icon`, `status`, `created_at`, `updated_at`) VALUES
(5, 'Lorem Amet', 'Emergency Cases', '<p>Lorem ipsum sit amet consectetur adipiscing elit. Vivamus et erat in lacus convallis sodales.&nbsp;<br>UPDATE</p>', NULL, 1, '2024-08-07 10:27:31', '2024-08-10 03:50:37'),
(6, 'Fusce Porttitor', 'Doctors Timetable', '<p>Lorem ipsum sit amet consectetur adipiscing elit. Vivamus et erat in lacus convallis sodales.</p>', NULL, 1, '2024-08-07 10:28:01', '2024-08-07 10:28:01'),
(7, 'Donec luctus', 'Opening Hours', '<ul><li>Monday - Friday (8.00-20.00)</li><li>Saturday (9.00-18.30)</li><li>Monday - Thusday (9.00-15.00)</li></ul>', NULL, 1, '2024-08-07 10:29:09', '2024-08-07 10:29:09'),
(9, 'Et labore et porro v', 'Magni modi ut labore', '<p>ZXzxz</p>', NULL, 1, '2024-08-13 02:00:52', '2024-08-13 02:00:52');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint UNSIGNED NOT NULL,
  `service_icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_icon`, `service_title`, `service_desc`, `status`, `created_at`, `updated_at`) VALUES
(9, 'icofont icofont-prescription', 'General Treatment', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet.', 1, '2024-08-08 01:52:38', '2024-08-08 01:52:38'),
(10, 'icofont icofont-tooth', 'Teeth Whitening', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet.', 1, '2024-08-08 01:53:53', '2024-08-08 01:53:53'),
(11, 'icofont icofont-heart-alt', 'Heart Surgery', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet.', 1, '2024-08-08 01:55:06', '2024-08-08 01:55:06'),
(12, 'icofont icofont-listening', 'Ear Treatment', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet.', 1, '2024-08-08 01:55:39', '2024-08-08 01:55:39'),
(13, 'icofont icofont-eye-alt', 'Vision Problems', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet.', 1, '2024-08-08 01:56:09', '2024-08-08 01:56:09'),
(14, 'icofont icofont-blood', 'Blood Transfusion', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet.', 1, '2024-08-08 01:56:41', '2024-08-08 02:00:49');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('09yIgmH6pmB8YJE8TrXbLYfGkOh8j4wLga0gQ4CH', NULL, '66.249.79.102', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.6533.119 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYzdhOHU5UGZacXBmWDBQVnZ3YU5Ua2dHNjJTSnRFTjNibWFiNnNZbyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDc6Imh0dHBzOi8vd3d3LnN1cGVyY2FyZWhvc3BpdGFsYmQuY29tL2FwcG9pbnRtZW50Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1725155997),
('1EUfZmxVSrVyKxOl10uCkQUkn2YtMuNriOmb3MGx', NULL, '103.20.141.5', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVzdvbDhBeGhGOEk4NjdQckJOOE1KWEdLTjhlSTNidFZNVHRMSzNlVSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly9zdXBlcmNhcmVob3NwaXRhbGJkLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1725165871),
('4SCUv9vO6RvzCJziXCSMXznuzGAe1r6SXm7fFXne', NULL, '35.91.178.122', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64)AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSU4zdWpOTVk0Y3hXdmpteDVIdHdnOTZCN3ZaelZoVzBzSXUxQVpmdSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHBzOi8vc3VwZXJjYXJlaG9zcGl0YWxiZC5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1725108136),
('ag3J7VWJtzz8w3O8Sbd04RzWGmAvRMFyaY53IrGb', NULL, '43.133.38.182', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidEsxYTZIbE5TTW1qbUN5VkhyNVJrbVNFZjBpVldzYjBYZm9VNGFXciI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly93d3cuc3VwZXJjYXJlaG9zcGl0YWxiZC5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1725156875),
('AWAMApu6qE0zmwD05B3g2w78muNjaPK1yq03yYPx', NULL, '182.40.35.9', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/113.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYUJLUGZHbzExYzhKd1IxRnNjbkQ0b2gzZmtlTDRQaUNsdnA0bFVZdiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly93d3cuc3VwZXJjYXJlaG9zcGl0YWxiZC5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1725109713),
('bqmGFXulqJCPiUB1h0xHSflslcpZwwFiCVH7ifsg', NULL, '47.84.92.224', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaWo0V2lCOTJZMm5UVFZaQU1SbHRyY05kUXZNQjNYMmQ2NUdXMVhOWiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly9zdXBlcmNhcmVob3NwaXRhbGJkLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1725115534),
('e3vbQQj5O9G06ohcn3t3xLcn4GkSFEdtQmqaxVic', NULL, '18.116.32.15', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.6167.160 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSmNtOGdhRVNjNUZLZmltbDZ1M241UW00Vmp6bUhscGZ4SkZvR2RaMCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly9zdXBlcmNhcmVob3NwaXRhbGJkLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1725156689),
('fuv6sbvzYdeIfqNdJoNhc36hI9Ss8DNjlaV6Slkx', NULL, '66.249.79.101', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.6533.119 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMkFnUEVBbzNXOTEwRGdsOEpzeWNONGlSYWc1S0x2N0ZweVNtTFk2UCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDk6Imh0dHA6Ly93d3cuc3VwZXJjYXJlaG9zcGl0YWxiZC5jb20vYmxvZy1kZXRhaWxzLzUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1725140823),
('Gmje4VlZk71WTHbvW1TsTc1fv9U7LZytNtWyAKV1', NULL, '87.103.246.30', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0; .NET CLR 1.1.4322; .NET CLR 2.0.50727; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729; .NET4.0C; .NET4.0E)', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoidGdBTVRBRmM5ZlpLUEZ1cjhBbGFoT3VJbzk0M1VsSUxGdExVYzQ0aCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1725162217),
('HhFSY1JCydv5kMHW4enXDhbRhoMX8SqW3VNosiXn', NULL, '49.0.231.208', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.3738.16 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWUZXbHVJbkdIRk5yaVhJcnRTaWVFdGtyVmdlMHg1c2FzSHhyZVhIdCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly9zdXBlcmNhcmVob3NwaXRhbGJkLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1725136774),
('J4m5CjFQrHdMOqObLR287SNJDLsIymO9f93EafIS', NULL, '43.130.16.212', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibjVyalpNRGJxdUY4NFBOTllnTW1GYmlRR0dFUVFSU3M0eER0ZkY2WiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDI6Imh0dHA6Ly93d3cuc3VwZXJjYXJlaG9zcGl0YWxiZC5jb20vY29udGFjdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1725117672),
('j6BxNVZaRwvzQCjZKvQmSC1GEECXw9vTAdhDbcVl', NULL, '182.40.35.9', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/113.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVEY4azBIbUd2MXZzMVZPWXRKeVQ5c2NzTXlTWVpXTWlFYXRGSmN6ZiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDI6Imh0dHA6Ly93d3cuc3VwZXJjYXJlaG9zcGl0YWxiZC5jb20vY29udGFjdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1725109719),
('LsEJFqwjoTApy4zQQvmSLk8tCICOGWMkb2uXgdeU', NULL, '66.249.79.102', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.6533.119 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNzR2dUI4cFJXbkRUT2tLZjMzSm41UVY5dlRmUGV1VFgwTkVaVXdHVSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly93d3cuc3VwZXJjYXJlaG9zcGl0YWxiZC5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1725123668),
('mUdBs4W8179axGyNT2aNGmvscBMrag6xsewCi3gF', NULL, '103.136.159.93', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVElTWHNzZU9FSFRQYTBPS21hYjJlQmx4YlVIQTQ4WkFKUkZPMjdsViI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHBzOi8vc3VwZXJjYXJlaG9zcGl0YWxiZC5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1725166117),
('OdYzN2ORNSO6mo1q4CGFXd6CCAJPqlrZzA1BM3H1', NULL, '191.96.150.222', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) HeadlessChrome/121.0.6167.184 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOFFJN1pIWGxYcWZyNmNtSzJ5VG9SUWJnamM2THR3blQ0UllncE1BdyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly9zdXBlcmNhcmVob3NwaXRhbGJkLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1725105127),
('phJzxA7cpx4eHmkuFWd8Ip8cYNuOOX6pW1amH3ZG', NULL, '66.249.79.103', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.6533.119 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidHhiNGhzTDRyQlBJdWxSUDhqZUhEVXBUaDJBMW8wbjhhV2tmenFNWCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDM6Imh0dHBzOi8vd3d3LnN1cGVyY2FyZWhvc3BpdGFsYmQuY29tL2NvbnRhY3QiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1725132976),
('R1UPGmbm1VGBdhDNyYZggANpV9SKO8PgadukDITB', NULL, '43.134.190.89', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidUFRQlBoVk9ndERrRVAycno5QmVGRWcySlp2T2dCUXBKMnp6WkM4UCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly9zdXBlcmNhcmVob3NwaXRhbGJkLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1725127964),
('tVohMY9xkLBRLRnAzLiYM5E8xxI6jssEJg25IHH6', NULL, '43.131.62.4', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYWhqQlhVQVpBS0FySE5RejM3SkhGbGhwU2hYUTRiMVIzY0poUkFJTyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly93d3cuc3VwZXJjYXJlaG9zcGl0YWxiZC5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1725117162),
('TWGebWOJoqEayny9044TI2KhWztbKUzGPCdt5r6b', NULL, '47.84.85.40', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWWJxZ3pXVkZ2M2RWSDdaWTJON292R0VGZERyWDRiWnV2cm5abUdkeiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHBzOi8vc3VwZXJjYXJlaG9zcGl0YWxiZC5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1725103124),
('z7JwEXhIKM0zGtGL6Hx5vZqa0HceFpe4qn1520SS', NULL, '35.91.178.122', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64)AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiemtKVWNuWDB4bExRSXNJWGJCNXY5UUpxbmxpWTVMWkQ1S24xVGJlSSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly9zdXBlcmNhcmVob3NwaXRhbGJkLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1725108134);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int NOT NULL DEFAULT '2' COMMENT '1=admin, 2=user',
  `status` int NOT NULL DEFAULT '1' COMMENT '1=active, 2=inactive',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$12$eQhfKpsh/F3sxui/.b/YlOl6/A/0KB2Fy8HMtmPhNMdq.3u2hJ3UK', 1, 1, NULL, NULL, '2024-08-04 11:31:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `basic_infos`
--
ALTER TABLE `basic_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_blog_id_foreign` (`blog_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
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
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `basic_infos`
--
ALTER TABLE `basic_infos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
