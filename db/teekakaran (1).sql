-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2021 at 10:17 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teekakaran`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `user_id` varchar(200) NOT NULL,
  `user_type` tinyint(6) NOT NULL,
  `password` varchar(200) NOT NULL,
  `last_login` datetime(6) NOT NULL,
  `login_count` int(6) NOT NULL,
  `is_active` tinyint(6) NOT NULL,
  `otp_key` varchar(200) NOT NULL,
  `require_reset` tinyint(6) NOT NULL,
  `reset_code` varchar(200) NOT NULL,
  `created_on` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `updated_on` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `user_id`, `user_type`, `password`, `last_login`, `login_count`, `is_active`, `otp_key`, `require_reset`, `reset_code`, `created_on`, `updated_on`) VALUES
(4, '1', 1, '123', '0000-00-00 00:00:00.000000', 7, 1, '346873', 0, '', '2021-06-30 13:19:25.714536', NULL),
(5, '3', 1, 'admin', '2021-07-09 21:41:05.000000', 8, 0, '933300', 0, '', '2021-07-09 20:23:51.733402', NULL),
(6, '5', 0, 'admin', '2021-07-11 13:37:10.000000', 3, 0, '931589', 0, '', '2021-07-10 00:48:53.974974', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

CREATE TABLE `manufacturer` (
  `manufacture_id` int(10) NOT NULL,
  `manufacture_name` varchar(200) NOT NULL,
  `status` tinyint(10) NOT NULL,
  `created_by` varchar(200) NOT NULL,
  `created_on` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manufacturer`
--

INSERT INTO `manufacturer` (`manufacture_id`, `manufacture_name`, `status`, `created_by`, `created_on`) VALUES
(3, 'abcd', 1, '3', '2021-07-09 22:42:10.273351');

-- --------------------------------------------------------

--
-- Table structure for table `medical_item`
--

CREATE TABLE `medical_item` (
  `medical_item_id` int(10) NOT NULL,
  `med_cat_id` varchar(10) NOT NULL,
  `manufacturer_id` varchar(10) NOT NULL,
  `medical_item_name` varchar(200) NOT NULL,
  `unit` varchar(200) NOT NULL,
  `aviable_qty` int(10) DEFAULT NULL,
  `description` varchar(2000) NOT NULL,
  `price` int(2) NOT NULL,
  `expiry_date` date NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `created_on` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `updated_on` datetime(6) DEFAULT NULL,
  `status` tinyint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medical_item`
--

INSERT INTO `medical_item` (`medical_item_id`, `med_cat_id`, `manufacturer_id`, `medical_item_name`, `unit`, `aviable_qty`, `description`, `price`, `expiry_date`, `created_by`, `created_on`, `updated_on`, `status`) VALUES
(6, '7', '2', 'first item', '3', 21, 'test', 200, '2021-07-30', '3', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000', 1),
(8, '7', '2', 'cghcgh', '3', 322, 'vyufyu', 200, '2021-07-21', '3', '2021-07-04 14:56:51.876999', NULL, 1),
(9, '14', '3', 'rohit', '3', 5, 'hgyyg', 200, '2021-07-24', '3', '2021-07-09 17:42:05.367707', NULL, 1),
(10, '14', '3', 'one', '3', 5, 'wvvjd', 200, '2021-07-10', '3', '2021-07-09 18:08:18.252582', NULL, 1),
(12, '14', '3', 'rbks', '3', 121, 'sxsc', 100, '2021-07-10', '3', '2021-07-09 18:10:05.659752', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `medicine_category`
--

CREATE TABLE `medicine_category` (
  `med_cat_id` int(6) NOT NULL,
  `category_name` varchar(200) NOT NULL,
  `status` tinyint(200) NOT NULL,
  `created_by` varchar(200) NOT NULL,
  `created_on` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicine_category`
--

INSERT INTO `medicine_category` (`med_cat_id`, `category_name`, `status`, `created_by`, `created_on`) VALUES
(13, 'rohit bhati', 0, '3', '2021-07-09 16:29:46.851279'),
(14, 'test', 1, '3', '2021-07-09 16:41:26.009858');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy_unit`
--

CREATE TABLE `pharmacy_unit` (
  `punit_id` int(10) NOT NULL,
  `punit_name` varchar(200) NOT NULL,
  `qty` int(10) NOT NULL,
  `status` tinyint(10) NOT NULL,
  `created_by` varchar(200) NOT NULL,
  `created_on` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pharmacy_unit`
--

INSERT INTO `pharmacy_unit` (`punit_id`, `punit_name`, `qty`, `status`, `created_by`, `created_on`) VALUES
(3, 'kg', 11, 1, '3', '2021-06-30 11:10:23.019162');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(10) NOT NULL,
  `role_name` varchar(200) NOT NULL,
  `created_on` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `created_by` varchar(200) NOT NULL,
  `status` tinyint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`, `created_on`, `created_by`, `status`) VALUES
(2, 'Category', '0000-00-00 00:00:00.000000', '3', 1),
(4, 'Unit', '0000-00-00 00:00:00.000000', '3', 1),
(6, 'Manufacter', '2021-07-04 14:53:29.964199', '3', 1),
(8, 'Item', '0000-00-00 00:00:00.000000', '3', 1),
(9, 'User', '0000-00-00 00:00:00.000000', '3', 1),
(10, 'Role', '2021-07-04 14:53:29.964199', '3', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `user_type` tinyint(6) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `is_email_verified` tinyint(6) NOT NULL,
  `is_mobile_verified` tinyint(6) NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `created_on` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `updated_on` datetime(6) DEFAULT NULL,
  `status` tinyint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_type`, `first_name`, `last_name`, `email`, `mobile`, `password`, `is_email_verified`, `is_mobile_verified`, `created_by`, `created_on`, `updated_on`, `status`) VALUES
(3, 2, 'aaksh', 'kumar', 'aa@yahoo.in', '8786868686', '12345678', 0, 0, '3', '2021-07-09 18:56:05.521399', NULL, 1),
(5, 0, 'admin', 'admin', 'admin@admin.com', '245', 'admin', 0, 0, '3', '0000-00-00 00:00:00.000000', NULL, 1),
(6, 2, 'aakash', 'aa', 'aa@yahhoo.in', '9871750901', '234567', 0, 0, '5', '2021-07-09 19:19:17.954602', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `id` int(10) NOT NULL,
  `role_id` int(10) NOT NULL,
  `user_id` varchar(200) NOT NULL,
  `sign_date` date NOT NULL,
  `assigned_by` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`id`, `role_id`, `user_id`, `sign_date`, `assigned_by`) VALUES
(2, 2, '5', '2021-07-07', '5'),
(3, 4, '5', '2021-07-07', '5'),
(4, 6, '5', '2021-07-07', '5'),
(5, 8, '5', '2021-07-07', '5'),
(6, 9, '5', '2021-07-07', '5'),
(7, 10, '5', '2021-07-07', '5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manufacturer`
--
ALTER TABLE `manufacturer`
  ADD PRIMARY KEY (`manufacture_id`);

--
-- Indexes for table `medical_item`
--
ALTER TABLE `medical_item`
  ADD PRIMARY KEY (`medical_item_id`);

--
-- Indexes for table `medicine_category`
--
ALTER TABLE `medicine_category`
  ADD PRIMARY KEY (`med_cat_id`);

--
-- Indexes for table `pharmacy_unit`
--
ALTER TABLE `pharmacy_unit`
  ADD PRIMARY KEY (`punit_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `manufacturer`
--
ALTER TABLE `manufacturer`
  MODIFY `manufacture_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `medical_item`
--
ALTER TABLE `medical_item`
  MODIFY `medical_item_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `medicine_category`
--
ALTER TABLE `medicine_category`
  MODIFY `med_cat_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pharmacy_unit`
--
ALTER TABLE `pharmacy_unit`
  MODIFY `punit_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
