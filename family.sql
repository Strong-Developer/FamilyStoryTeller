-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2020 at 12:04 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `family`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookdatas`
--

CREATE TABLE `bookdatas` (
  `id` int(11) NOT NULL,
  `title` varchar(222) NOT NULL,
  `contributors` text NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bookdatas`
--

INSERT INTO `bookdatas` (`id`, `title`, `contributors`, `status`) VALUES
(1, 'Book1', '', 'Story Making');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `parent`, `created_at`, `updated_at`) VALUES
(1, 'Family', -1, NULL, NULL),
(2, 'Childhood', -1, NULL, NULL),
(3, 'Work', -1, NULL, NULL),
(4, 'Travel', -1, NULL, NULL),
(5, 'Wisdom', -1, NULL, NULL),
(6, 'Relationship', -1, NULL, NULL),
(7, 'Tell me about your siblings.', 1, NULL, NULL),
(8, 'Tell me about something you like to do with family.', 1, NULL, NULL),
(9, 'Tell me about a time when your family surprised you in some way.', 1, NULL, NULL),
(10, 'What important things did you learn from your parents.', 1, NULL, NULL),
(11, 'Where & when your parents born?', 1, NULL, NULL),
(12, 'Where did your parents grow up & what was it like?', 1, NULL, NULL),
(13, 'Tell me about family gatherings.', 1, NULL, NULL),
(14, 'Tell me about your siblings.', 2, NULL, NULL),
(15, 'Tell me about something you like to do with family.', 2, NULL, NULL),
(16, 'Tell me about something you like to do with family.', 3, NULL, NULL),
(17, 'What important things did you learn from your parents.', 3, NULL, NULL),
(18, 'Where did your parents grow up & what was it like?', 3, NULL, NULL),
(19, 'Tell me about a time when your family surprised you in some way.', 4, NULL, NULL),
(20, 'Where & when your parents born?', 4, NULL, NULL),
(21, 'Tell me about family gatherings.', 4, NULL, NULL),
(22, 'What important things did you learn from your parents.', 4, NULL, NULL),
(23, 'Tell me about your siblings.', 5, NULL, NULL),
(24, 'Tell me about something you like to do with family.', 5, NULL, NULL),
(25, 'Tell me about a time when your family surprised you in some way.', 5, NULL, NULL),
(26, 'What important things did you learn from your parents.', 5, NULL, NULL),
(27, 'Where & when your parents born?', 5, NULL, NULL),
(28, 'Where did your parents grow up & what was it like?', 5, NULL, NULL),
(29, 'Tell me about family gatherings.', 5, NULL, NULL),
(30, 'Tell me about your siblings.', 5, NULL, NULL),
(31, 'What important things did you learn from your parents.', 6, NULL, NULL),
(32, 'Tell me about your siblings.', 6, NULL, NULL),
(33, 'Tell me about something you like to do with family.', 6, NULL, NULL),
(34, 'Tell me about family gatherings.', 6, NULL, NULL),
(35, 'What important things did you learn from your parents.', 6, NULL, NULL),
(36, 'Tell me about something you like to do with family.', 6, NULL, NULL);

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
-- Table structure for table `invites`
--

CREATE TABLE `invites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` int(11) NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invites`
--

INSERT INTO `invites` (`id`, `type`, `first_name`, `last_name`, `phone`, `email`, `created_at`, `updated_at`) VALUES
(13, 1, 'Petro', 'T', '12345678', 'petro@gmail.com', '2020-06-24 10:08:08', '2020-06-24 10:08:08'),
(14, 0, 'Andrey', 'K', '14466887', 'andrey@gmail.com', '2020-06-24 10:08:57', '2020-06-24 10:08:57'),
(15, 1, 'Olga', 'S', '18787233', 'olga@gmail.com', '2020-06-24 10:09:32', '2020-06-24 10:09:32'),
(16, 1, 'Illia', 'I', '533526663', 'illia@gmail.com', '2020-06-24 10:11:10', '2020-06-24 10:11:10'),
(18, 0, 'Sergey', 'P', '123456789', 'yandex.kmv2019@gmail.com', '2020-06-24 10:16:29', '2020-06-24 10:16:29');

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
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_05_12_042855_create_story_table', 1),
(4, '2020_05_12_043609_create_invite_table', 1),
(5, '2020_05_20_164114_create_category_table', 1),
(6, '2020_05_20_164241_create_question_table', 1),
(7, '2020_05_20_164305_create_record_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `storyteller_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `collaborator_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `proceed` int(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `category_id`, `storyteller_name`, `collaborator_name`, `content`, `proceed`, `created_at`, `updated_at`) VALUES
(14, 19, 'Petro', 'Sergey', NULL, 1, '2020-06-24 10:16:52', '2020-06-24 10:16:52'),
(15, 14, 'Olga', 'Sergey', NULL, 1, '2020-06-24 10:28:52', '2020-06-24 10:28:52'),
(16, 18, 'Sergey', 'Sergey', NULL, 1, '2020-06-24 10:29:13', '2020-06-24 10:29:13');

-- --------------------------------------------------------

--
-- Table structure for table `stories`
--

CREATE TABLE `stories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question_ID` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Transcript` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Record` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Orders` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stories`
--

INSERT INTO `stories` (`id`, `question_ID`, `Transcript`, `Record`, `Orders`, `created_at`, `updated_at`) VALUES
(1, '15', 'CA10dae68ee5a5c14cacc2be8394ecc5c9_RE51975ad6eb68c336636b0240104da4e9.txt', 'CA10dae68ee5a5c14cacc2be8394ecc5c9_RE51975ad6eb68c336636b0240104da4e9.wav', 0, '2020-06-24 10:16:52', '2020-06-24 10:16:52'),
(7, '16', 'CAb3dd30b0db3cd1dcdb481d5754cb0a27_REb7472bceabc8aa700edea14aef644e7b.txt', 'CAb3dd30b0db3cd1dcdb481d5754cb0a27_REb7472bceabc8aa700edea14aef644e7b.wav', 2, '2020-06-24 10:16:52', '2020-06-24 10:16:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'Sergey', 'yandex.kmv2019@gmail.com', '$2y$10$40tXUf8j2JaGMwFMb0YYYuiFJPAElCafPcIOJvi9.8BsZOOMnGCRi', '123456789', NULL, '2020-06-24 09:49:32', '2020-06-24 09:49:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookdatas`
--
ALTER TABLE `bookdatas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invites`
--
ALTER TABLE `invites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stories`
--
ALTER TABLE `stories`
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
-- AUTO_INCREMENT for table `bookdatas`
--
ALTER TABLE `bookdatas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invites`
--
ALTER TABLE `invites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `stories`
--
ALTER TABLE `stories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
