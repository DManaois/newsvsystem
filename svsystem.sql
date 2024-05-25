-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2024 at 08:17 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `svsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `incident_reports`
--

CREATE TABLE `incident_reports` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `reported_by` varchar(255) NOT NULL,
  `report_date` timestamp NULL DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `date` date NOT NULL,
  `details` text NOT NULL,
  `level_of_violation` varchar(255) NOT NULL,
  `intervention_program` varchar(255) NOT NULL,
  `violation_type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `incident_reports`
--

INSERT INTO `incident_reports` (`id`, `student_id`, `reported_by`, `report_date`, `description`, `created_at`, `updated_at`, `date`, `details`, `level_of_violation`, `intervention_program`, `violation_type_id`) VALUES
(4, 3, '4', NULL, NULL, '2024-05-14 08:10:37', '2024-05-14 09:09:13', '2024-05-15', 'nakipagsapakan kay maam quentina', 'Sending a student to the principal\'s office', 'Parent-Teacher Conferences', 6),
(5, 10, '4', NULL, NULL, '2024-05-23 09:07:35', '2024-05-23 09:07:35', '2024-05-25', 'A group of students was reported bullying a younger student by calling them names and pushing them around.', 'Detention', 'Behavior Modification Workshops', 2),
(6, 10, '4', NULL, NULL, '2024-05-23 09:08:01', '2024-05-23 09:08:01', '2024-05-27', 'Laboratory equipment was found damaged, and walls were spray-painted with graffiti.', 'Warnings', 'Community Service Assignments', 12),
(7, 10, '4', NULL, NULL, '2024-05-23 09:08:33', '2024-05-23 10:39:15', '2024-05-28', 'Diomer Manaois was caught using unauthorized notes during a math exam.', 'Sending a student to the principal\'s office', 'Parent-Teacher Conferences', 1),
(8, 13, '4', NULL, NULL, '2024-05-23 12:53:37', '2024-05-23 12:54:00', '2024-05-26', 'The student join the brawl outside the campus', 'Suspensions', 'Behavior Modification Workshops', 6),
(10, 15, '4', NULL, NULL, '2024-05-23 13:01:19', '2024-05-23 13:01:19', '2024-05-25', 'Joined the brawl outside the campus', 'Sending a student to the principal\'s office', 'Anger Management Training', 6),
(11, 16, '4', NULL, NULL, '2024-05-23 13:03:16', '2024-05-23 13:04:09', '2024-05-25', 'Stole a smartphone inside the canteen', 'Suspensions', 'Anger Management Training', 10);

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
(1, '2024_05_14_072509_create_sessions_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `policies`
--

CREATE TABLE `policies` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
('IX1tJmIM5MfCXY27Zh7yb2hC7fsDCuCFFnzloSSW', 10, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiUmF5MW8zQUpvNnQzRklqVWN1RlpxR2Z4UG42ZTBDM0kwQXhqdzVudSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxMDt9', 1716574186),
('WDAMKNBZ91hcguJYB0c67HHNcO95h9VRr8wggdMp', 10, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoielAzTGxKaHJTS3pJT1JZYjhDSlNzaW5FT2tBRkE0THpMTVdOQTVsZyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjEwO30=', 1716574144);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `student_no` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` enum('admin','student') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `student_no`, `name`, `email`, `password`, `created_at`, `updated_at`, `role`) VALUES
(4, NULL, 'admin', 'admin@gmail.com', '$2y$12$q2wTn5epTAyRuDQcmZ6WHeaqDOcr1fpgdV1TSJtoFulCGV12yuGnm', '2024-05-13 23:59:13', '2024-05-14 11:03:50', 'admin'),
(5, '202117061 ', 'Gabriel Louizze Antoni', 'gabriel.louizze@gmail.com', '$2y$12$IZkitU2qOKb8i0Wh/OOfL.MNa5bV4liToYmu7k1gzIezYycoXsGpK', '2024-05-14 07:30:52', '2024-05-14 07:30:52', 'student'),
(6, '202116586 ', 'Gianne Lexter Baldonasa', 'giannebaldonasa@gmail.com', '$2y$12$4dDwdV37VvJp9izC29VnX..89bIcWy/aszengTOR4FQT60BZH.a8O', '2024-05-14 07:33:24', '2024-05-14 10:37:46', 'student'),
(7, '202150282 ', 'Alfred Atienza', 'alfredatienza@gmail.com', '$2y$12$VYnv7fNDs5AVNv7z5HiI/eKPUjToZChkWsR1xvX5xrM66zyMxXuJq', '2024-05-14 07:34:45', '2024-05-14 10:48:31', 'student'),
(8, '202115521', 'Chaniquax Izer De Ocampo', 'Chaniquax@gmail.com', '$2y$12$9iSL5q.ee4QLIXilbt5QY.XypSttsxYuPGjxRQjNvvCex5FV0G2fG', '2024-05-14 09:07:54', '2024-05-14 09:07:54', 'student'),
(10, '202115524', 'Diomer Manaois', 'diomermanaois@gmail.com', '$2y$12$Wnod0mgunsgadvcMGYAUUebuI5tB6TXio1CgmRx68M2cIS9rrr2tC', '2024-05-23 09:06:17', '2024-05-23 09:06:17', 'student'),
(11, '20216966', 'AJ San Luiz', 'ajsanluis@gmail.com', '$2y$12$QSOLQ8ObheaHmOLY9EgX3ehzART3H9KtDj0gTFN9Bhg8muKX/hF6C', '2024-05-23 12:04:38', '2024-05-23 12:04:38', 'student'),
(12, '696969696969', 'trytodeletemeadmin', 'trytodeletemeadmin@gmail.com', '$2y$12$kieCCeCmwQRFbjidKJga1.JW3Wcd87PPAW5Fr0xmHYLZ/S6Z.tPYu', '2024-05-23 12:29:25', '2024-05-23 12:29:25', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `violation_types`
--

CREATE TABLE `violation_types` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `violation_types`
--

INSERT INTO `violation_types` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Academic Dishonesty', 'Any form of cheating or plagiarism in academic work.', '2024-05-13 15:30:44', '2024-05-13 15:30:44'),
(2, 'Bullying', 'Repeated aggressive behavior intended to hurt, intimidate, or dominate others.', '2024-05-13 15:30:44', '2024-05-13 15:30:44'),
(3, 'Disruptive behavior', 'Actions that interrupt or disturb the normal functioning of a school environment.', '2024-05-13 15:30:44', '2024-05-13 15:30:44'),
(4, 'Dress code violations', 'Failure to comply with the school\'s dress code policy.', '2024-05-13 15:30:44', '2024-05-13 15:30:44'),
(5, 'Drug and alcohol violations', 'Possession, use, or distribution of drugs or alcohol on school premises.', '2024-05-13 15:30:44', '2024-05-13 15:30:44'),
(6, 'Brawl', 'A physical fight involving multiple individuals.', '2024-05-13 15:30:44', '2024-05-13 15:30:44'),
(7, 'Harassment', 'Persistent behavior that is unwelcome and causes fear, distress, or harm.', '2024-05-13 15:30:44', '2024-05-13 15:30:44'),
(8, 'Property Damage', 'Intentional or negligent damage to school property or the property of others.', '2024-05-13 15:30:44', '2024-05-13 15:30:44'),
(9, 'Skipping Classes', 'Failure to attend scheduled classes without permission.', '2024-05-13 15:30:44', '2024-05-13 15:30:44'),
(10, 'Theft', 'Stealing or unauthorized taking of property.', '2024-05-13 15:30:44', '2024-05-13 15:30:44'),
(11, 'Threats', 'Expressions of intent to cause harm, fear, or intimidation.', '2024-05-13 15:30:44', '2024-05-13 15:30:44'),
(12, 'Vandalism', 'Deliberate destruction or defacement of property.', '2024-05-13 15:30:44', '2024-05-13 15:30:44'),
(13, 'Weapon possession', 'Possession of weapons, including firearms, knives, or other dangerous objects.', '2024-05-13 15:30:44', '2024-05-13 15:30:44'),
(14, 'Truancy', 'Absence from school without a valid reason or permission.', '2024-05-13 15:30:44', '2024-05-13 15:30:44'),
(15, 'Hazing', 'Rituals or activities involving harassment, abuse, or humiliation as a way of initiating new members into a group or organization.', '2024-05-13 15:30:44', '2024-05-13 15:30:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `incident_reports`
--
ALTER TABLE `incident_reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `policies`
--
ALTER TABLE `policies`
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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `violation_types`
--
ALTER TABLE `violation_types`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `incident_reports`
--
ALTER TABLE `incident_reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `policies`
--
ALTER TABLE `policies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `violation_types`
--
ALTER TABLE `violation_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `incident_reports`
--
ALTER TABLE `incident_reports`
  ADD CONSTRAINT `incident_reports_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
