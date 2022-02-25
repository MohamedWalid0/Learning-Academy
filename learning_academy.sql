-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2022 at 07:00 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learning_academy`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oAuth_token` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `email`, `password`, `access_token`, `oAuth_token`, `created_at`, `updated_at`) VALUES
(2, 'mohamed', 'm@gmail.com', '$2y$10$TV8ILIW1f9uWwTgv6DmwcuCnXSXTdwIMf006B2DsrQPBOa57FCHGu', NULL, NULL, '2020-09-29 15:26:09', '2020-09-29 15:26:09'),
(12, 'Mohamed Walid', 'Mohamed Walid', '$2y$10$k0rrmeaAGn0nZYBxisD8f.2htxgwtN7tFlhGwDsBKDoZ3f2UeZxRC', NULL, 'EAAP6YomPhu4BAFcGXeZBuzF8AdrLMuaWsohKNAgyrZBMHypUcurdyZBXgcHVdAWHG7n1NGNsryQMMD8DhVsT8RH8VwuOqAQ5PLjmQqeRXkdtxv3yDPTFfdjntuccFX5f1lxAx3iZCIHEBiV3lVut1r5Tyrmcz1bydeQM29NQGQZDZD', '2020-10-03 22:14:38', '2020-10-03 22:14:38'),
(13, 'testacc', 'email@email.email', 'eyJpdiI6IkJSMTZDMkZaTzgrSnFBMStyeFFXWlE9PSIsInZhbHVlIjoick5hNHprYWRrZHpueXBvWThjMmNoZz09IiwibWFjIjoiMTIxMGM4MzZmN2E2MDQ0M2ZmYWFiMTNlNDE4MGJjZDYyOGEzNTljYzE3MjZjM2YyYjg5NjdkZDk2M2VkN2IwOSJ9', NULL, NULL, '2022-02-23 19:51:45', '2022-02-23 19:51:45'),
(14, 'testacaaac', 'e@e.e', 'eyJpdiI6IjB5TXpxVGJoZitMbFROWFB3RmdxZ3c9PSIsInZhbHVlIjoiTmpjSGhJU25DYXZXWWZZNFFrWlBkUT09IiwibWFjIjoiNDEzNjJkMjMyZmNkOWYwNWYyODU0YTkxMzZkMTY1YWUwNzQ2ODUwZGRjYjQyYThkMTMwMzE0YzkxNGY1NjQxOCJ9', NULL, NULL, '2022-02-23 19:56:06', '2022-02-23 19:56:06'),
(15, 'mohamedwalid', 'mohamed@walid.com', '$2y$10$bWMd6MoRxqpUHSZoxfBjn.QFOVdPOGW0qqAkl/noCWu1EQGa1rosO', NULL, NULL, '2022-02-23 19:57:33', '2022-02-23 19:57:33');

-- --------------------------------------------------------

--
-- Table structure for table `cats`
--

CREATE TABLE `cats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cats`
--

INSERT INTO `cats` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'science', NULL, NULL),
(2, 'web design', NULL, NULL),
(3, 'mobail', NULL, NULL),
(4, 'chemistry', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cat_id` bigint(20) UNSIGNED NOT NULL,
  `trainer_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `cat_id`, `trainer_id`, `name`, `desc`, `content`, `price`, `img`, `created_at`, `updated_at`) VALUES
(1, 2, 2, 'First course', 'this is first course', 'hahahaha', 500, 'jerYjrPR5wiWuw6gKIBGRkiKh4fLsu3teq3B1Pps.jpeg', NULL, '2020-10-01 22:53:14'),
(2, 3, 1, 'First course', 'dolor sit amet consectetur adipisicing elit. Voluptatum optio quos reiciendis nesciunt delectus maiores cumque numquam suscipit, mollitia ratione quam? Tempore rem illo perspiciatis, porro magni adipisci perferendis laboriosam', 'hahahaha', 500, '8fx64Bn9xU3nDTToSpFtXyLCTjF5qkguFFSMTrsr.jpeg', NULL, '2020-10-01 22:53:25'),
(4, 4, 1, 'fifth course', 'dolor sit amet consectetur adipisicing elit. Voluptatum optio quos reiciendis nesciunt delectus maiores cumque numquam suscipit, mollitia ratione quam? Tempore rem illo perspiciatis, porro magni adipisci perferendis laboriosam', 'hahahaha', 500, 'JVZhibPU18DSETB5lRErjD9WdwIwcfYgL07ika5C.jpeg', NULL, '2020-10-01 22:53:44'),
(6, 3, 1, 'seventh course', 'dolor sit amet consectetur adipisicing elit. Voluptatum optio quos reiciendis nesciunt delectus maiores cumque numquam suscipit, mollitia ratione quam? Tempore rem illo perspiciatis, porro magni adipisci perferendis laboriosam', 'hahahaha', 500, 'YBWqUJyqSZQ53o6Kwd9jzXoWzKXwzUid45HxkSAw.jpeg', NULL, '2020-10-01 22:54:06'),
(9, 2, 1, 'mhamedWalidAPI', 'sssssssssssssss', 'aaaaa', 500, 'fNCNb9WaauHb1XFfwKooXinG5hXBWCSawvVKub8x.jpeg', '2020-09-30 17:06:41', '2020-10-01 22:41:26'),
(11, 1, 1, 'n n', 'cc', 'aa', 100, 'OLqjrnm02Uy4YsZhnIyaOIAP3Yu4VttSe3hbWphy.jpeg', '2020-09-30 17:43:30', '2020-10-01 22:41:48');

-- --------------------------------------------------------

--
-- Table structure for table `course_student`
--

CREATE TABLE `course_student` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('approve','reject') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_student`
--

INSERT INTO `course_student` (`id`, `course_id`, `student_id`, `status`, `created_at`, `updated_at`) VALUES
(5, 1, 1, 'approve', NULL, NULL),
(8, 6, 4, 'approve', NULL, NULL),
(9, 11, 6, 'approve', NULL, NULL),
(10, 2, 6, 'approve', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spec` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `spec`, `desc`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Mohamed Walid', 'sowtware engineering ', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores quaerat earum voluptates expedita minus explicabo exercitationem culpa beatae provident illum!\r\n', 'testimonial_img_3.png', NULL, NULL),
(2, 'ahmed mohamed', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores quaerat earum voluptates expedita minus explicabo exercitationem culpa beatae provident illum!\r\n', 'testimonial_img_2.png', NULL, NULL),
(3, 'eslam mohamed', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores quaerat earum voluptates expedita minus explicabo exercitationem culpa beatae provident illum!\r\n', 'testimonial_img_1.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Mohamed walid', 'm@gmail.com', NULL, 'ahahahaha', '2020-09-28 23:54:03', '2020-09-28 23:54:03');

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
(1, '2020_09_26_224352_create_cats_table', 1),
(2, '2020_09_26_224420_create_trainers_table', 1),
(3, '2020_09_26_224427_create_courses_table', 1),
(4, '2020_09_26_224538_create_students_table', 1),
(5, '2020_09_26_224616_create_admins_table', 1),
(6, '2020_09_26_230501_create_course_student_table', 1),
(7, '2020_09_27_175315_create_feedback_table', 2),
(8, '2020_09_28_183907_create_settings_table', 3),
(10, '2020_09_28_223746_create_site_contents_table', 4),
(11, '2020_09_29_012021_create_newsletters_table', 5),
(12, '2020_09_29_012157_create_messages_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newsletters`
--

INSERT INTO `newsletters` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'm@gmail.com', '2020-09-28 23:38:09', '2020-09-28 23:38:09'),
(2, 'yebor43527@ismailgul.net', '2020-09-28 23:53:22', '2020-09-28 23:53:22');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `work_hours` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `insta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `map` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `title`, `logo`, `favicon`, `country`, `address`, `phone`, `work_hours`, `email`, `fb`, `twitter`, `insta`, `map`, `created_at`, `updated_at`) VALUES
(1, 'Etrain', 'logo.png', 'favicon.png', 'egypt', 'elnasria alaamria alexandria', '01007563471', '220', 'm@gmail.com', 'https://www.fb.com/', 'https://www.twitter.com/', 'https://www.instagram.com/', 'map here', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `site_contents`
--

CREATE TABLE `site_contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_contents`
--

INSERT INTO `site_contents` (`id`, `name`, `content`, `created_at`, `updated_at`) VALUES
(1, 'banner', '{\"title\":\"EVERY CHILD YEARNS TO LEARN\",\"subtitle\":\"Making Your Childs World Better\",\"desc\":\"Replenish seasons may male hath fruit beast were seas saw you arrie said man beast whales his void unto last session for bite. Set have great you\'ll male grass yielding yielding man\"}', '2020-09-28 20:56:37', '2020-09-28 20:56:37');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spec` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `spec`, `created_at`, `updated_at`) VALUES
(1, 'zzz', 'yousefOne@yahoo.com', 'hello update', '2020-09-29 00:13:24', '2020-10-01 00:04:50'),
(3, 'Mohamed walid', 'yousef@yahoo.com', NULL, '2020-09-29 00:14:03', '2020-09-29 00:14:03'),
(4, 'eslam', 'employee@email.com', 'zz', '2020-09-29 00:16:37', '2020-09-29 00:16:37'),
(6, 'test acc', 'test@example.test', 'test sub', '2022-02-23 19:44:50', '2022-02-23 19:44:50');

-- --------------------------------------------------------

--
-- Table structure for table `trainers`
--

CREATE TABLE `trainers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spec` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trainers`
--

INSERT INTO `trainers` (`id`, `name`, `phone`, `spec`, `img`, `created_at`, `updated_at`) VALUES
(1, 'first trainer ', '0000', 'hahah', 'special_cource_3.png', NULL, NULL),
(2, 'second trainer neww', NULL, 'sss', 'JzwiiwooQyKTfrFbLWGboC4s73CtELXiKrBExFtY.png', NULL, '2020-09-29 23:54:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cats`
--
ALTER TABLE `cats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `courses_cat_id_foreign` (`cat_id`),
  ADD KEY `courses_trainer_id_foreign` (`trainer_id`);

--
-- Indexes for table `course_student`
--
ALTER TABLE `course_student`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_student_course_id_foreign` (`course_id`),
  ADD KEY `course_student_student_id_foreign` (`student_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_contents`
--
ALTER TABLE `site_contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainers`
--
ALTER TABLE `trainers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `cats`
--
ALTER TABLE `cats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `course_student`
--
ALTER TABLE `course_student`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `site_contents`
--
ALTER TABLE `site_contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `trainers`
--
ALTER TABLE `trainers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `cats` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `courses_trainer_id_foreign` FOREIGN KEY (`trainer_id`) REFERENCES `trainers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `course_student`
--
ALTER TABLE `course_student`
  ADD CONSTRAINT `course_student_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `course_student_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
