-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 02, 2023 at 10:37 PM
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
  `club_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `onm_status` tinyint(4) NOT NULL DEFAULT '3',
  `cits_status` tinyint(4) NOT NULL DEFAULT '3',
  `facilities_status` tinyint(4) NOT NULL DEFAULT '3',
  `security_status` tinyint(4) NOT NULL DEFAULT '3',
  `finance_status` tinyint(4) NOT NULL DEFAULT '3',
  `administration_status` tinyint(4) NOT NULL DEFAULT '3',
  `councilaffairs_status` tinyint(4) NOT NULL DEFAULT '3',
  `mpr_status` tinyint(4) NOT NULL DEFAULT '3',
  `vc_status` tinyint(4) NOT NULL DEFAULT '0',
  `dean_status` tinyint(4) NOT NULL DEFAULT '0',
  `dosa_status` tinyint(4) NOT NULL DEFAULT '0',
  `onm_response` text COLLATE utf8mb4_unicode_ci,
  `cits_response` text COLLATE utf8mb4_unicode_ci,
  `facilities_response` text COLLATE utf8mb4_unicode_ci,
  `security_response` text COLLATE utf8mb4_unicode_ci,
  `finance_response` text COLLATE utf8mb4_unicode_ci,
  `administration_response` text COLLATE utf8mb4_unicode_ci,
  `councilaffairs_response` text COLLATE utf8mb4_unicode_ci,
  `mpr_response` text COLLATE utf8mb4_unicode_ci,
  `vc_response` text COLLATE utf8mb4_unicode_ci,
  `dean_response` text COLLATE utf8mb4_unicode_ci,
  `dosa_response` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `application_info`
--

INSERT INTO `application_info` (`application_id`, `application_title`, `application_type`, `application_date`, `application_description`, `applicant_name`, `club_name`, `onm_status`, `cits_status`, `facilities_status`, `security_status`, `finance_status`, `administration_status`, `councilaffairs_status`, `mpr_status`, `vc_status`, `dean_status`, `dosa_status`, `onm_response`, `cits_response`, `facilities_response`, `security_response`, `finance_response`, `administration_response`, `councilaffairs_response`, `mpr_response`, `vc_response`, `dean_response`, `dosa_response`, `created_at`, `updated_at`) VALUES
(1, 'IUB Chess competition 2023', 'Competition', '2023-11-30', 'I am writing on behalf of the Chess Club at IUB to seek permission to organize a Chess Competition on 30th November at IUB Cafeteria. The event aims to foster community engagement, intellectual development, and a spirit of friendly competition among our students.\r\n\r\nWe have outlined the details in the attached proposal and would appreciate your approval for the event. Your support is crucial to the success of this initiative, and we are available to discuss any further details at your convenience.\r\n\r\nThank you for your time and consideration.\r\n\r\nBest regards,\r\nPritom', 'Pritom', 'chess club', 1, 1, 3, 2, 0, 3, 3, 3, 0, 0, 0, 'All ok', NULL, NULL, 'There will be conflicts on that specified date. So, We recommend you to change the schedule', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-13 22:04:21', '2023-11-13 22:04:21'),
(2, 'IUB Cricket Tournament', 'Sports', '2024-01-05', 'Intra IUB Cricket competition will held on 5th Jan 2024', 'Azwad', 'IUB Cricket Club', 0, 0, 0, 3, 0, 3, 3, 3, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-02 10:16:51', '2023-12-02 10:16:51');

-- --------------------------------------------------------

--
-- Table structure for table `blub club`
--

CREATE TABLE `blub club` (
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
(4, 1231234, 'rht', 'rh999@gmail.com', '12124', 'male', 'Normal', NULL, NULL),
(5, 13213443, 'Mehedi', 'mehedi@gmail.com', '01232323454', 'male', 'Vice President', NULL, NULL),
(6, 1820713, 'Azwad Bhuiyan', 'azwad@gmail.com', '0123456928', 'male', 'Vice President', NULL, NULL),
(7, 192168, 'Tahmid Hossain', 'tahmid@gmail.com', '012345672', 'male', 'President', NULL, NULL);

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
(0, 'iub music club'),
(333, 'blub club'),
(999, 'dance club'),
(121, 'IUB Cricket Club');

-- --------------------------------------------------------

--
-- Table structure for table `dance club`
--

CREATE TABLE `dance club` (
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
-- Table structure for table `IUB Cricket Club`
--

CREATE TABLE `IUB Cricket Club` (
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
-- Dumping data for table `IUB Cricket Club`
--

INSERT INTO `IUB Cricket Club` (`id`, `user_id`, `user_name`, `user_email`, `contact_number`, `gender`, `club_position`, `created_at`, `updated_at`) VALUES
(1, 1820713, 'Abdul Azwad Bhuiyan', 'azwad@gmail.com', '01938599887', 'male', 'Treasurer', NULL, NULL);

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
(4, '2023_08_16_114334_create_application_infos_table', 3),
(5, '2023_09_18_164308_create_users_table', 4),
(6, '2023_09_22_100834_create_new_user_requests_table', 5),
(7, '2023_09_22_111035_create_new_user_requests_table', 6),
(8, '2023_09_23_145751_create_users_table', 7),
(9, '2014_10_12_100000_create_password_resets_table', 8),
(10, '2023_09_23_160738_create_users_table', 9),
(11, '2023_09_23_162654_create_users_table', 10),
(12, '2023_09_23_163020_create_users_table', 11),
(13, '2023_09_22_142332_create_upcoming_events_table', 12),
(14, '2023_10_04_183837_create_post_info_table', 13),
(15, '2023_11_14_035440_create_application_infos_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `new_user_requests`
--

CREATE TABLE `new_user_requests` (
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `new_user_requests`
--

INSERT INTO `new_user_requests` (`user_id`, `user_name`, `user_email`, `contact_number`, `gender`, `password`, `created_at`, `updated_at`) VALUES
('18264748', 'Abdul Azwad Bhuiyan', 'abc@gmail.com', '0123232', 'male', '$2y$10$yBNyFoJ6cEOLpfOHoIAzQOrKX45CZYsbdtwqunQBEQ8p0c5mmV1yW', '2023-09-22 06:33:27', '2023-09-22 06:33:27'),
('1826474832', 'Azwad Rahat Arkods', 'abcdsdsd@gmail.com', '01232323454', 'male', '$2y$10$NZze9NpowpcwKKFuwsMe6Omwcavdpd.iLHByFZ7WA1DzzT89yjPpO', '2023-09-22 06:42:46', '2023-09-22 06:42:46'),
('18264748d', 'Azwad Rahat Arko', 'abcdsd@gmail.com', '01232323', 'male', '$2y$10$3iSxju7fN5z6/Fi09VjP/.ulErGCJYctj2FF6e35.7dd0RerMqzV2', '2023-09-22 06:41:50', '2023-09-22 06:41:50');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `club_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_date` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post_info`
--

CREATE TABLE `post_info` (
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `post_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_date` date NOT NULL,
  `post_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `writers_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `club_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_info`
--

INSERT INTO `post_info` (`post_id`, `post_title`, `post_type`, `post_date`, `post_description`, `writers_name`, `club_name`) VALUES
(1, 'IUC chess competition 2023', 'Competition', '2023-11-30', 'join', 'chess club', 'chess club'),
(2, 'IUB Chess Club Workshop', 'Workshop', '2023-11-30', 'Get ready to sharpen your strategic skills! The Chess Club at IUB is thrilled to announce an upcoming Chess Workshop on. Whether you\'re a beginner or a seasoned player, join us for a fun and educational session to enhance your game.', 'chess club', 'chess club'),
(3, 'IUB Chess Club Workshop 2', 'Seminar', '2023-12-08', 'asdsa', 'chess club', 'chess club'),
(4, 'Team preliminary squad practice session', 'Workshop', '2023-12-29', 'Dear IUBIAN!!\r\nPractice session alert!🏏\r\nTeam preliminary squad practice session♥️.\r\n\r\nSelected players for practice are requested to join the practice session. Our coach will be present on that day. Please Be remind you have to wear proper practice kits like jersey, Trouser, cricket rubber sport shoe 👟(jeans, T-shirt 👕, Shirt 👔 is not allowed in practice session).', 'IUB Cricket Club', 'IUB Cricket Club'),
(5, 'IUB Cricket Club Recruitment 2023', 'Recruitment', '2023-12-15', 'Calling all talented female cricketers! 🏏 Join IUB Cricket Club\'s Recruitment Booth and showcase your skills on the pitch. Don\'t miss this exciting opportunity to be a part of our winning team! 🏆🌟 #IUBCricketClub #WomenInCricket #RecruitmentBooth', 'IUB Cricket Club', 'IUB Cricket Club');

-- --------------------------------------------------------

--
-- Table structure for table `upcoming_events`
--

CREATE TABLE `upcoming_events` (
  `event_id` bigint(20) UNSIGNED NOT NULL,
  `event_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `club_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` enum('male','female') COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci,
  `user_type` enum('super admin','club admin','official','general') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `contact_number`, `gender`, `password`, `bio`, `user_type`, `created_at`, `updated_at`) VALUES
('1001', 'cits', 'cits@gmail.com', '213123123', 'male', 'cits1234', NULL, 'official', NULL, NULL),
('1002', 'onm', 'onm@gmail.com', '12345678', 'male', 'onm1234', NULL, 'official', NULL, NULL),
('1003', 'facilities', 'facilities@gmail.com', '0221934124', 'female', 'facilities1234', NULL, 'official', NULL, NULL),
('1004', 'security', 'security@gmail.com', '12394874', 'female', 'security1234', NULL, 'official', NULL, NULL),
('1005', 'administration', 'administration@gmail.com', '21312124', 'male', 'administration1234', NULL, 'official', NULL, NULL),
('1006', 'councilaffairs', 'councilaffairs@gmail.com', '12431455', 'male', 'councilaffairs1234', NULL, 'official', NULL, NULL),
('1007', 'mpr', 'mpr@gmail.com', '019548575', 'female', 'mpr1234', NULL, 'official', NULL, NULL),
('121', 'IUB Cricket Club', 'iubcricketclub@gmail.com', '0123232212', 'male', 'iubcricketclub1234', NULL, 'club admin', NULL, NULL),
('1234', 'asdff', 'asdfss@gmail.com', '1111234567', 'female', 'asdf1234', NULL, 'general', NULL, NULL),
('1234231', 'Sanzar Adnan Alam', 'sanzar@gmail.com', '012432332', 'male', 'sanzar1234', 'Hi, this is Sanzar.', 'official', NULL, NULL),
('1234567', 'Rahatul Karim', 'rahat@gmail.com', '01234567', 'male', 'rahat1234', 'Hi I\'m Rahat', 'super admin', NULL, NULL),
('1820713', 'Abdul Azwad Bhuiyan', 'azwad@gmail.com', '01938599887', 'male', 'azwad1234', 'Hi, I\'m Abdul Azwad Bhuiyan', 'general', NULL, '2023-11-24 05:45:48'),
('1883002', 'chess club', 'chess@gmail.com', '000012312312', 'male', 'chess1234', NULL, 'club admin', NULL, NULL),
('1920714', 'Arko Ahmed', 'arko@gmail.com', '012342311', 'male', 'arko1234', NULL, 'general', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application_info`
--
ALTER TABLE `application_info`
  ADD PRIMARY KEY (`application_id`);

--
-- Indexes for table `blub club`
--
ALTER TABLE `blub club`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chess club`
--
ALTER TABLE `chess club`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dance club`
--
ALTER TABLE `dance club`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `IUB Cricket Club`
--
ALTER TABLE `IUB Cricket Club`
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
-- Indexes for table `new_user_requests`
--
ALTER TABLE `new_user_requests`
  ADD UNIQUE KEY `new_user_requests_user_id_unique` (`user_id`),
  ADD UNIQUE KEY `new_user_requests_user_email_unique` (`user_email`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
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
-- Indexes for table `post_info`
--
ALTER TABLE `post_info`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `upcoming_events`
--
ALTER TABLE `upcoming_events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `users_user_id_unique` (`user_id`),
  ADD UNIQUE KEY `users_user_email_unique` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application_info`
--
ALTER TABLE `application_info`
  MODIFY `application_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blub club`
--
ALTER TABLE `blub club`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chess club`
--
ALTER TABLE `chess club`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `dance club`
--
ALTER TABLE `dance club`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `IUB Cricket Club`
--
ALTER TABLE `IUB Cricket Club`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post_info`
--
ALTER TABLE `post_info`
  MODIFY `post_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `upcoming_events`
--
ALTER TABLE `upcoming_events`
  MODIFY `event_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
