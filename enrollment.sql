-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2018 at 04:14 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `enrollment`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`id`, `name`, `email`, `password`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'sohan', 'sohanislam1992@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1858220225, '2018-10-23 08:59:23', '2018-10-23 08:59:23');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_tbl`
--

CREATE TABLE `student_tbl` (
  `student_id` int(11) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_roll` varchar(255) NOT NULL,
  `student_fathername` varchar(255) NOT NULL,
  `student_mothername` varchar(255) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `student_phone` varchar(255) NOT NULL,
  `student_address` varchar(255) NOT NULL,
  `student_image` varchar(255) NOT NULL,
  `student_password` varchar(255) NOT NULL,
  `student_department` varchar(255) NOT NULL,
  `student_admissionyear` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_tbl`
--

INSERT INTO `student_tbl` (`student_id`, `student_name`, `student_roll`, `student_fathername`, `student_mothername`, `student_email`, `student_phone`, `student_address`, `student_image`, `student_password`, `student_department`, `student_admissionyear`) VALUES
(2, 'Sohan Islam', '1416', 'Tazul Islam', 'Shamsun Naher', 'sohan@gmail.com', '01854789523', 'dhaka', 'image/uonjBxuuJdbxfQOZ3BUh.jpg', '202cb962ac59075b964b07152d234b70', '4', '2018-10-17'),
(4, 'Sanjida Khan', '1403', 'Karim Khan', 'Khadija Sultana', 'sanjida@gmail.com', '01658444759', 'Dhaka', 'image/eVTbkQkn6VrzFJkQXGQw.jpg', 'd9b1d7db4cd6e70935368a1efb10e377', '2', '2018-10-25'),
(5, 'Sneha Jahan', '1430', 'Tofail Islam', 'Soma Islam', 'sneha@gmail.com', '22222222222', 'Comilla', 'image/XWDQXeZFlBttdXgYcOzv.jpg', '81dc9bdb52d04dc20036dbd8313ed055', '3', '2017-09-09'),
(6, 'Masud Alom', '1402', 'Khan Alom', 'habiba Khan', 'masud@gmail.com', '01844559962', 'Pabna', 'image/AdzSxlbMvISaSFxkAsXw.jpg', '202cb962ac59075b964b07152d234b70', '1', '2018-10-24'),
(7, 'Tofail Islam', '1410', 'Tazul Islam', 'Shamsun Naher', 'sohag@gmail.com', '88888888888888', 'Comilla', 'image/TNDo7LTOm4f5GUURH4i8.jpg', '7363a0d0604902af7b70b271a0b96480', '5', '2018-10-15'),
(8, 'sassa', '21212', 'dsdsd', 'qwwq', 'asa@sas', '12212', 'sddsds', 'image/vGVYrMopPOyGQbmHmpPq.jpg', 'd41d8cd98f00b204e9800998ecf8427e', '1', '2018-10-15'),
(9, 'ssss', '1021', 'eeee', 'qqqq', 'aaa@gmail.com', '111111111111111', 'jkkjkjk', 'image/KUbBGa1d4Az49m6W5gMw.jpg', '202cb962ac59075b964b07152d234b70', '1', '2018-10-25');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `teachers_id` int(255) NOT NULL,
  `teachers_name` varchar(255) NOT NULL,
  `teachers_phone` varchar(255) NOT NULL,
  `teachers_address` varchar(255) NOT NULL,
  `teachers_department` varchar(255) NOT NULL,
  `teachers_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`teachers_id`, `teachers_name`, `teachers_phone`, `teachers_address`, `teachers_department`, `teachers_image`, `created_at`, `updated_at`) VALUES
(4, 'Jacquline', '01877745596', 'Dhaka', '1', 'image/qPvutf2mtPtKyOX7YkM4.png', NULL, NULL),
(5, 'Docha khan', '01744552214', 'Comilla', '2', 'image/DjWZrK8eXKBA5vEncDW5.jpg', NULL, NULL),
(6, 'khalifa Begum', '01887445269', 'USA', '4', 'image/83aRwUJolc8SlF3Cn03a.jpg', NULL, NULL),
(7, 'Hafiza Khan', '01995248744', 'Dhaka', '5', 'image/TytyZzf9cnHcyjMxbimG.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_tbl`
--
ALTER TABLE `student_tbl`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`teachers_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student_tbl`
--
ALTER TABLE `student_tbl`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `teachers_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
