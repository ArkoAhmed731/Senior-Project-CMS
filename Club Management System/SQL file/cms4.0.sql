-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Aug 16, 2023 at 06:44 PM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `application_info`
--

CREATE TABLE `application_info` (
  `application_id` bigint(20) UNSIGNED NOT NULL,
  `application_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `application_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `application_date` date NOT NULL,
  `application_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `applicant_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `onm_status` tinyint(4) NOT NULL DEFAULT '3',
  `cits_status` tinyint(4) NOT NULL DEFAULT '3',
  `facilities_status` tinyint(4) NOT NULL DEFAULT '3',
  `security_status` tinyint(4) NOT NULL DEFAULT '3',
  `finance_status` tinyint(4) NOT NULL DEFAULT '3',
  `adminisrtration_status` tinyint(4) NOT NULL DEFAULT '3',
  `councilaffairs_status` tinyint(4) NOT NULL DEFAULT '3',
  `mpr_status` tinyint(4) NOT NULL DEFAULT '3',
  `onm_response` text COLLATE utf8mb4_unicode_ci,
  `cits_response` text COLLATE utf8mb4_unicode_ci,
  `facilities_response` text COLLATE utf8mb4_unicode_ci,
  `security_response` text COLLATE utf8mb4_unicode_ci,
  `finance_response` text COLLATE utf8mb4_unicode_ci,
  `adminisrtration_response` text COLLATE utf8mb4_unicode_ci,
  `councilaffairs_response` text COLLATE utf8mb4_unicode_ci,
  `mpr_response` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `application_info`
--

INSERT INTO `application_info` (`application_id`, `application_title`, `application_type`, `application_date`, `application_description`, `applicant_name`, `onm_status`, `cits_status`, `facilities_status`, `security_status`, `finance_status`, `adminisrtration_status`, `councilaffairs_status`, `mpr_status`, `onm_response`, `cits_response`, `facilities_response`, `security_response`, `finance_response`, `adminisrtration_response`, `councilaffairs_response`, `mpr_response`, `created_at`, `updated_at`) VALUES
(1, 'IUB Tech Fest', 'Festival', '2023-08-18', 'dasd', 'sadas', 0, 0, 3, 3, 3, 3, 3, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-16 06:30:39', '2023-08-16 06:30:39'),
(2, 'IUB Tech Fest', 'Festival', '2023-08-19', 'asdasdgfsgetg efewfew fdsfsdf fdsfsdfdfsd', 'Azwad', 3, 0, 0, 3, 3, 3, 3, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-16 06:31:38', '2023-08-16 06:31:38'),
(3, 'IUB music club festival', 'Seminar', '2023-08-31', 'dasdas', 'dsad', 3, 3, 0, 3, 3, 3, 3, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-16 06:40:30', '2023-08-16 06:40:30'),
(4, 'IUB music competition', 'Competition', '2023-08-26', 'cxzczxc', 'czxczx', 3, 0, 3, 0, 3, 3, 3, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-16 06:42:47', '2023-08-16 06:42:47');

-- --------------------------------------------------------

--
-- Table structure for table `chess club`
--

CREATE TABLE `chess club` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` enum('male','female','other') COLLATE utf8mb4_unicode_ci NOT NULL,
  `club_position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chess club`
--

INSERT INTO `chess club` (`id`, `user_id`, `user_name`, `user_email`, `contact_number`, `gender`, `club_position`, `created_at`, `updated_at`) VALUES
(1, 128232, 'rraasd', 'qwew@gnas.com', '134134134', 'male', 'Normal', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `club2`
--

CREATE TABLE `club2` (
  `id` int(8) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `contact` int(14) NOT NULL,
  `gender` text NOT NULL,
  `position` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `club2`
--

INSERT INTO `club2` (`id`, `name`, `email`, `contact`, `gender`, `position`) VALUES
(183213213, 'rahat', 'rahat@gmail.com', 1234, 'Male', 'Vice-President'),
(12345, 'Arko', 'arko@gmail.com', 12327847, 'Male', 'Treasurer'),
(1820713, 'Azwad', 'azwad@gmail.com', 123455, 'Male', 'Member'),
(123467, 'Ahmed', 'ahmed@gmail.com', 12747364, 'Male', 'Executive Member');

-- --------------------------------------------------------

--
-- Table structure for table `club_list`
--

CREATE TABLE `club_list` (
  `club_id` int(3) NOT NULL,
  `club_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `club_list`
--

INSERT INTO `club_list` (`club_id`, `club_name`) VALUES
(102, 'ww'),
(101, 'chess club'),
(0, ''),
(103, 'Drama Club'),
(105, 'Fight Club'),
(106, 'karate_club'),
(0, 'iub music club');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `iub music club`
--

CREATE TABLE `iub music club` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` enum('male','female','other') COLLATE utf8mb4_unicode_ci NOT NULL,
  `club_position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `karate_club`
--

CREATE TABLE `karate_club` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` enum('male','female','other') COLLATE utf8mb4_unicode_ci NOT NULL,
  `club_position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `karate_club`
--

INSERT INTO `karate_club` (`id`, `user_id`, `user_name`, `user_email`, `contact_number`, `gender`, `club_position`, `created_at`, `updated_at`) VALUES
(1, 128232, 'asdasd', 'qwd@gfma.com', '81281432', 'female', 'Normal', NULL, NULL);

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
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2023_07_30_112550_create_clubs_table', 2),
(4, '2023_08_16_114334_create_application_infos_table', 3);

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
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testeventapply`
--

CREATE TABLE `testeventapply` (
  `Name` text NOT NULL,
  `Type` text NOT NULL,
  `Date` date NOT NULL,
  `Summary` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Email` varchar(100) NOT NULL,
  `ID` int(10) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `MobileNumber` int(14) NOT NULL,
  `ClubName` varchar(100) NOT NULL,
  `PositionInClub` varchar(100) NOT NULL,
  `Role` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ww`
--

CREATE TABLE `ww` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` enum('male','female','other') COLLATE utf8mb4_unicode_ci NOT NULL,
  `club_position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application_info`
--
ALTER TABLE `application_info`
  ADD PRIMARY KEY (`application_id`);

--
-- Indexes for table `chess club`
--
ALTER TABLE `chess club`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iub music club`
--
ALTER TABLE `iub music club`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karate_club`
--
ALTER TABLE `karate_club`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `ww`
--
ALTER TABLE `ww`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application_info`
--
ALTER TABLE `application_info`
  MODIFY `application_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `chess club`
--
ALTER TABLE `chess club`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `iub music club`
--
ALTER TABLE `iub music club`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `karate_club`
--
ALTER TABLE `karate_club`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ww`
--
ALTER TABLE `ww`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
