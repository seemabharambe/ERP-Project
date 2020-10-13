-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2020 at 09:29 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itsan2`
--

-- --------------------------------------------------------

--
-- Table structure for table `depts`
--

CREATE TABLE `depts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `deptid` int(11) NOT NULL,
  `deptname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `depts`
--

INSERT INTO `depts` (`id`, `deptid`, `deptname`, `created_at`, `updated_at`) VALUES
(1, 1, 'Raw Material Dept', '2020-09-18 04:25:23', '2020-09-18 04:25:23'),
(2, 2, 'QualityCheck', '2020-09-18 05:36:46', '2020-09-18 05:36:46'),
(3, 3, 'Dispatch Dept', '2020-09-18 05:37:06', '2020-09-18 05:37:06'),
(4, 4, 'Production', '2020-09-18 05:37:21', '2020-09-18 05:37:21');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `empid` int(11) NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `empid`, `fname`, `lname`, `mno`, `email`, `created_at`, `updated_at`) VALUES
(1, 1021, 'Rakesh', 'Patil', '09970825344', 'rakesh@gmail.com', '2020-09-18 04:25:10', '2020-09-18 04:25:10'),
(2, 1022, 'Ramesh', 'Neve', '9856321456', 'ramesh@gmail.com', '2020-09-18 05:34:49', '2020-09-18 05:34:49'),
(3, 1023, 'Deepak', 'Dhole', '09970825344', 'deepak@gmail.com', '2020-09-18 05:35:48', '2020-09-18 05:35:48');

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
-- Table structure for table `jupiters`
--

CREATE TABLE `jupiters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `maintaskid` int(11) NOT NULL,
  `maintask` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `createdon` date NOT NULL,
  `deptid` int(11) NOT NULL,
  `empid` int(11) NOT NULL,
  `partyid` int(11) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jupiters`
--

INSERT INTO `jupiters` (`id`, `maintaskid`, `maintask`, `details`, `createdon`, `deptid`, `empid`, `partyid`, `startdate`, `enddate`, `status`, `attachment`, `created_at`, `updated_at`) VALUES
(7, 101, 'New Product Development', 'quality product', '2020-09-14', 2, 1023, 11, '2020-09-16', '2020-09-28', 'pending', 'public/Project Tasks tables.xlsx', '2020-09-20 08:32:57', '2020-09-20 08:32:57'),
(8, 104, 'New Product Development part3', 'speacial feature product', '2020-09-14', 2, 1024, 11, '2020-09-15', '2020-09-28', 'workinprogress', '/storage/hello.java', '2020-09-20 11:19:38', '2020-09-20 11:19:38'),
(9, 102, 'clamp bolts', 'speacial', '2020-09-14', 1, 1024, 11, '2020-09-21', '2020-09-29', 'complete', '/storage/Course-fileFINALSC.doc', '2020-09-20 12:43:03', '2020-09-21 03:33:57'),
(10, 103, 'New Product Development', 'prepare', '2020-09-16', 1, 1023, 11, '2020-09-17', '2020-10-07', 'workinprogress', '/storage/BE Conduction Report.xlsx', '2020-09-23 06:05:30', '2020-09-26 01:23:42');

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `source` int(11) NOT NULL,
  `target` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 1),
(9, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(10, '2019_08_19_000000_create_failed_jobs_table', 1),
(11, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(12, '2020_09_13_125514_create_sessions_table', 1),
(13, '2020_09_18_090255_create_jupiters_table', 2),
(14, '2020_09_18_092158_create_subtks_table', 3),
(15, '2020_09_18_092626_create_depts_table', 4),
(16, '2020_09_18_093122_create_employees_table', 5),
(17, '2020_09_18_093512_create_parties_table', 6),
(18, '2020_09_26_095216_create_tasks_table', 7),
(19, '2020_09_26_095629_create_links_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `parties`
--

CREATE TABLE `parties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `partyid` int(11) NOT NULL,
  `partyname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `parties`
--

INSERT INTO `parties` (`id`, `partyid`, `partyname`, `created_at`, `updated_at`) VALUES
(1, 11, 'Mahindra&Mahindra', '2020-09-18 04:25:42', '2020-09-18 04:25:42'),
(2, 12, 'Bajaj Auto', '2020-09-18 05:37:37', '2020-09-18 05:38:38'),
(3, 13, 'Bajaj', '2020-09-18 05:37:56', '2020-09-18 05:37:56'),
(4, 14, 'Tata Motors', '2020-09-18 05:38:14', '2020-09-18 05:38:14');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('3112SX0LeZpwzTv8TXhspul2wa9vEFgpRLUhv3o8', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.121 Safari/537.36 Edg/85.0.564.63', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiRTF4YUk4aEt5TkdObXRldlpqUTBCc2FrT0I3ZGNTemJUZEFoNTlXUyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCQuTi9pZU1ZRC43VXZYV0o2Z0dVUksuWDFxVU1WaENray9MWjJnNUZNaVZGczN5ZFlIWHQuRyI7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkLk4vaWVNWUQuN1V2WFdKNmdHVVJLLlgxcVVNVmhDa2svTFoyZzVGTWlWRnMzeWRZSFh0LkciO30=', 1601629205),
('HOnFxlZUEgGtyOjNRjLZXFjwLgjCCyYiZWia5gs4', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.121 Safari/537.36 Edg/85.0.564.63', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiWVlSdXpWdE5rVzE2Q05KV3FwWGl2RG1oMmdBckhyQXduUnF4amtibSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9qdXBpdGVyIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJC5OL2llTVlELjdVdlhXSjZnR1VSSy5YMXFVTVZoQ2trL0xaMmc1Rk1pVkZzM3lkWUhYdC5HIjtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCQuTi9pZU1ZRC43VXZYV0o2Z0dVUksuWDFxVU1WaENray9MWjJnNUZNaVZGczN5ZFlIWHQuRyI7fQ==', 1601825685),
('i4aF9iKuSfuNj3Zk0HEHRnfZX2S1Pqzpe4tRwLCo', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.121 Safari/537.36 Edg/85.0.564.68', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNTc0b29RVEVMQ1hDajByR1Rob25jczFQQVRyZW1laEZxb29WRmg5UCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1601878087),
('oLZfLHgBN5B3NSirI2wrzVzKcEr4oAmFNgUWt5Bb', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.121 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoidk5xM0FwNVdUbTl0MjhVOXJTS29ZRXJWdUY5YjFUNnI1RzJwOUN0bCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9kZXB0d2lzZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCQuTi9pZU1ZRC43VXZYV0o2Z0dVUksuWDFxVU1WaENray9MWjJnNUZNaVZGczN5ZFlIWHQuRyI7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkLk4vaWVNWUQuN1V2WFdKNmdHVVJLLlgxcVVNVmhDa2svTFoyZzVGTWlWRnMzeWRZSFh0LkciO30=', 1601876621);

-- --------------------------------------------------------

--
-- Table structure for table `subtks`
--

CREATE TABLE `subtks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subtaskid` int(11) NOT NULL,
  `subtask` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maintaskid` int(11) NOT NULL,
  `deptid` int(11) NOT NULL,
  `empid` int(11) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subtks`
--

INSERT INTO `subtks` (`id`, `subtaskid`, `subtask`, `details`, `maintaskid`, `deptid`, `empid`, `startdate`, `enddate`, `status`, `attachment`, `created_at`, `updated_at`) VALUES
(1, 2, 'cleaning', 'all', 101, 1, 1021, '2020-09-16', '2020-09-30', 'complete', '/storage/Advance PHP.docx', '2020-09-18 04:24:15', '2020-09-20 12:40:58'),
(2, 2, 'purchasing', 'Raw', 101, 2, 1022, '2020-09-17', '2020-09-27', 'workinprogress', '/storage/OOPs concepts in Java.docx', '2020-09-18 05:32:25', '2020-09-20 12:40:39'),
(3, 3, 'inspection', 'Raw', 101, 4, 1023, '2020-09-18', '2020-09-27', 'workinprogress', '/storage/Format_Lecture conduction.docx', '2020-09-18 05:34:07', '2020-09-20 12:40:19'),
(4, 3, 'Analysis', 'prepare', 101, 2, 1023, '2020-09-20', '2020-09-28', 'workinprogress', '/storage/dashboard.php', '2020-09-20 12:36:02', '2020-09-20 12:39:49'),
(5, 5, 'design', 'quality  good', 104, 2, 1022, '2020-09-15', '2020-09-28', 'workinprogress', '/storage/loops.docx', '2020-09-20 12:47:14', '2020-09-20 12:47:14');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` int(11) NOT NULL,
  `progress` double(8,2) NOT NULL,
  `start_date` datetime NOT NULL,
  `parent` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `text`, `duration`, `progress`, `start_date`, `parent`, `created_at`, `updated_at`) VALUES
(1, 'Project #1', 5, 0.80, '2017-04-01 00:00:00', 0, NULL, NULL),
(2, 'Task #1', 4, 0.50, '2017-04-06 00:00:00', 1, NULL, NULL),
(3, 'Task #2', 6, 0.70, '2017-04-05 00:00:00', 1, NULL, NULL),
(4, 'Task #3', 2, 0.00, '2017-04-07 00:00:00', 1, NULL, NULL),
(5, 'Task #1.1', 5, 0.34, '2017-04-05 00:00:00', 2, NULL, NULL),
(6, 'Task #1.2', 4, 0.50, '2017-04-11 00:00:00', 2, NULL, NULL),
(7, 'Task #2.1', 5, 0.20, '2017-04-07 00:00:00', 3, NULL, NULL),
(8, 'Task #2.2', 4, 0.90, '2017-04-06 00:00:00', 3, NULL, NULL);

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
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'seema', 'bharambe.seema2@gmail.com', NULL, '$2y$10$.N/ieMYD.7UvXWJ6gGURK.X1qUMVhCkk/LZ2g5FMiVFs3ydYHXt.G', NULL, NULL, 'M4KxNVx0VkykoiXYc12VzqGKAjs14qjQcUL9Yp7Jx86l0yVVo0qU3VyZ1szu', NULL, NULL, '2020-09-13 09:11:24', '2020-09-13 09:11:24'),
(2, 'prasad ingale', 'ingaleprasad31@gmail.com', NULL, '$2y$10$oa669dT4gZRAaegCYZKjQ.qPGAGNcO14t4/jB9bWQITKphfaLAZuG', NULL, NULL, NULL, NULL, NULL, '2020-09-18 05:21:35', '2020-09-18 05:21:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `depts`
--
ALTER TABLE `depts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jupiters`
--
ALTER TABLE `jupiters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parties`
--
ALTER TABLE `parties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `subtks`
--
ALTER TABLE `subtks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
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
-- AUTO_INCREMENT for table `depts`
--
ALTER TABLE `depts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jupiters`
--
ALTER TABLE `jupiters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `parties`
--
ALTER TABLE `parties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subtks`
--
ALTER TABLE `subtks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
