-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2023 at 05:18 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `officesite`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `url`, `message`, `project`, `created_at`, `updated_at`) VALUES
(1, 'Habiba', 'habibarehman60@gmail.com', 'https://www.linkedin.com/in/habiba-rehman-660/', 'sdafsdfdsrtytuytru', 'tuyrtujhruyhjngjh', '2023-03-27 02:18:47', '2023-03-27 02:18:47');

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
-- Table structure for table `get_a_quotes`
--

CREATE TABLE `get_a_quotes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `days` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `get_a_quotes`
--

INSERT INTO `get_a_quotes` (`id`, `days`, `time`, `phone`, `email`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Mn-Fr', '9am-6pm', '0235266327', 'officesite@yahoo.com', '<p>Building # 45, street # 9,Multan</p>', '2023-03-23 13:16:50', '2023-03-24 06:29:37');

-- --------------------------------------------------------

--
-- Table structure for table `main_portfolios`
--

CREATE TABLE `main_portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `main_portfolios`
--

INSERT INTO `main_portfolios` (`id`, `project_name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'web development', '1679561462.jpg', '2023-03-23 03:51:02', '2023-03-23 03:51:02'),
(2, 'App Development', '1679561514.jpg', '2023-03-23 03:51:54', '2023-03-23 03:51:54'),
(3, 'Web Application', '1679561537.jpg', '2023-03-23 03:52:17', '2023-03-23 03:52:17');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_03_14_122814_create_sliders_table', 2),
(7, '2023_03_15_122606_create_services_table', 3),
(9, '2023_03_16_103958_create_testimonials_table', 4),
(10, '2023_03_17_104100_create_get_aquotes_table', 5),
(17, '2023_03_17_105953_create_get_a_quotes_table', 6),
(18, '2023_03_17_115305_create_contacts_table', 6),
(21, '2023_03_22_121318_create_main_portfolios_table', 7),
(22, '2023_03_23_072953_create_portfolios_table', 8),
(23, '2023_03_23_104938_create_themes_table', 9);

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
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `main_portfolio_id` bigint(20) UNSIGNED NOT NULL,
  `project_images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `main_portfolio_id`, `project_images`, `created_at`, `updated_at`) VALUES
(9, 2, '16796800526.jpg', '2023-03-24 12:47:32', '2023-03-24 12:47:32'),
(10, 2, '167968005215.jpg', '2023-03-24 12:47:32', '2023-03-24 12:47:32'),
(11, 2, '167968005236.jpg', '2023-03-24 12:47:32', '2023-03-24 12:47:32'),
(12, 1, '167968201745.jpg', '2023-03-24 13:20:17', '2023-03-24 13:20:17'),
(13, 1, '16796820177.jpg', '2023-03-24 13:20:17', '2023-03-24 13:20:17');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `icon`, `heading`, `description`, `detail`, `created_at`, `updated_at`) VALUES
(1, '<i class=\"bi bi-menu-down\"></i>', 'software house', '<p>Adjusts with different screen sizes and Mobile Website Design for all Mobile devices. Responsive design Beautiful design across desktops, smartphones, and tablets.</p>', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In iste nisi ea eveniet eligendi aspernatur, non animi ipsum labore minus laborum vel saepe, distinctio, debitis tenetur est quo doloremque perspiciatis sapiente? Autem nemo tempora unde earum officia accusamus voluptatem doloremque beatae ea dolorem! Odit, rem deleniti. Quis quasi consequatur deserunt, veritatis ex quaerat sed maiores laudantium sequi laborum minus odio ea consectetur, voluptate impedit doloremque, illo quas molestiae totam ut.</p>\r\n<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi eligendi eos magni mollitia optio rem quis, ex deserunt cupiditate ipsum saepe quibusdam ut adipisci fuga voluptate. Reprehenderit dolorum, cum temporibus voluptas in doloremque quae sint? Nostrum nemo corporis accusantium totam consequuntur excepturi, mollitia voluptatibus provident tempore, officia perspiciatis dolor ullam? Accusamus assumenda magni veniam in vero quo dicta nisi totam commodi quaerat quis, deleniti dolorem ex porro nemo rerum nobis dolore voluptas consectetur at ipsam! Ullam nihil aspernatur veniam ducimus.</p>\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore sed maiores quo perferendis nobis debitis provident iste, aliquam quam esse ipsa cupiditate quasi saepe vel exercitationem quibusdam inventore ad. Deleniti, amet aut. Magni, expedita praesentium cumque facilis voluptatem minima ut est, maxime, quibusdam quam minus tempora quas consequatur facere error nobis ipsam ab autem ipsum neque natus architecto quis! Quibusdam, quo, earum rerum quam optio nobis error, vero nisi possimus odit vitae enim! Distinctio, inventore.</p>', '2023-03-15 09:52:11', '2023-03-22 06:13:47'),
(2, '<i class=\"bi bi-search\"></i>', 'Search Engine Optimization', '<p>A good search engine optimization (SEO) product will dramatically increase the quality and quantity of traffic to your website. It&rsquo;ll boost your visibility and credibility on the web.</p>', '', '2023-03-15 09:54:50', '2023-03-17 08:03:06'),
(4, '<i class=\"bi bi-cloud-fog2\"></i>', 'Easy to Customize', '<p>Get more done with less effort. We provides you with simple tools to get the most out of your development process. The code and styles are easy to follow, making you faster than ever.</p>', '', '2023-03-17 08:06:15', '2023-03-17 08:06:15'),
(5, '<i class=\"bi bi-emoji-smile\"></i>', 'Great Ideas', '<p>A passionate group of thinkers, innovators, creatives, strategists, techno-geeks and fanboys dedicated to creating the most impactful digital solutions for meaningful brands..</p>', '', '2023-03-17 08:09:50', '2023-03-17 08:09:50'),
(6, '<i class=\"bi bi-android2\"></i>', 'Technologist & IT SOLUTIONS Agency', '<p>A good search engine optimization (SEO) product will dramatically increase the quality and quantity of traffic to your website. It&rsquo;ll boost your visibility and credibility on the web.</p>', '', '2023-03-21 03:52:39', '2023-03-21 03:52:39'),
(7, '<i class=\"bi bi-image\"></i>', 'software house', '<p>A good search engine optimization (SEO) product will dramatically increase the quality and quantity of traffic to your website. It&rsquo;ll boost your visibility and credibility on the web.</p>', '', '2023-03-21 03:53:00', '2023-03-21 03:53:00');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `b_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `heading`, `description`, `image`, `b_image`, `created_at`, `updated_at`) VALUES
(1, 'Responsive Websites Design', 'To create a website is one of the easiest things you can do!\r\nWith Microweber you can create your website in just a few minutes.', '1679314553.png', '1679314730.png', '2023-03-15 05:48:07', '2023-04-14 09:40:18'),
(3, 'software house', 'A software company is an organisation — owned either by state or private — established for profit whose primary products are various forms of software, software technology, distribution, and software product development', '1679597631.png', '1679597755.png', '2023-03-20 06:34:23', '2023-04-14 09:42:37'),
(4, 'Web Development', 'Some representative placeholder content for the first slide. Some representative placeholder content for the first slide content for the first slide.', '1679332845.200 px.png', '1679597733.png', '2023-03-20 12:20:45', '2023-03-23 13:55:33');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `designation`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Habiba', 'CEO & Founder', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vitae semper quis lectus nulla at volutpat diam</p>', '2023-03-16 05:55:15', '2023-03-17 08:18:06'),
(3, 'maria', 'senior teacher', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vitae semper quis lectus nulla at volutpat diam</p>', '2023-03-17 05:17:54', '2023-03-17 08:17:56'),
(4, 'fasih', 'manager', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vitae semper quis lectus nulla at volutpat diam</p>', '2023-03-17 08:17:44', '2023-03-17 08:17:44'),
(5, 'sami', 'junior manager', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vitae semper quis lectus nulla at volutpat diam</p>', '2023-03-17 08:18:35', '2023-03-17 08:18:35');

-- --------------------------------------------------------

--
-- Table structure for table `themes`
--

CREATE TABLE `themes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `themes`
--

INSERT INTO `themes` (`id`, `file_name`, `created_at`, `updated_at`) VALUES
(1, 'styleBlue.css', '2023-03-23 06:16:32', '2023-03-28 04:39:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'officesite', 'officesite@yahoo.com', NULL, '$2y$10$Q/bU9WGRVq29LUPC2r0BM.hrTyejp5Rm5g.bQGrpna/p28IQDtTg2', 'qY1ISgjc8uURVlLOArgR0LJWGJ28ZFMwKqhx2X6VTP1BNJNv79OvAbyAlYiv', '2023-03-13 05:39:27', '2023-03-13 05:39:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `get_a_quotes`
--
ALTER TABLE `get_a_quotes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_portfolios`
--
ALTER TABLE `main_portfolios`
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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `portfolios_main_portfolio_id_foreign` (`main_portfolio_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `themes`
--
ALTER TABLE `themes`
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
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `get_a_quotes`
--
ALTER TABLE `get_a_quotes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `main_portfolios`
--
ALTER TABLE `main_portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `themes`
--
ALTER TABLE `themes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD CONSTRAINT `portfolios_main_portfolio_id_foreign` FOREIGN KEY (`main_portfolio_id`) REFERENCES `main_portfolios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
