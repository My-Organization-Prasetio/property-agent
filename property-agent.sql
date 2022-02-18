-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2022 at 09:35 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `property-agent`
--

-- --------------------------------------------------------

--
-- Table structure for table `mst_asset_category`
--

CREATE TABLE `mst_asset_category` (
  `asset_category_id` int(11) NOT NULL,
  `asset_category_name` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_by` int(11) NOT NULL,
  `deleted` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mst_asset_category`
--

INSERT INTO `mst_asset_category` (`asset_category_id`, `asset_category_name`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted`) VALUES
(1, 'Rumah', '2022-02-17 18:05:52', 1, '2022-02-17 18:05:52', 1, 0),
(2, 'Ruko', '2022-02-17 18:05:52', 1, '2022-02-17 18:05:52', 1, 0),
(3, 'Apartmen', '2022-02-18 07:43:02', 9, '2022-02-18 07:43:02', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `mst_owner`
--

CREATE TABLE `mst_owner` (
  `owner_id` int(11) NOT NULL,
  `owner_name` varchar(100) NOT NULL,
  `owner_type` varchar(30) NOT NULL,
  `owner_photo` varchar(255) NOT NULL,
  `id_number` varchar(50) NOT NULL,
  `id_number_type` varchar(25) NOT NULL,
  `owner_phone_number` varchar(25) NOT NULL,
  `owner_email` varchar(50) NOT NULL,
  `address` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_by` int(11) NOT NULL,
  `deleted` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mst_owner`
--

INSERT INTO `mst_owner` (`owner_id`, `owner_name`, `owner_type`, `owner_photo`, `id_number`, `id_number_type`, `owner_phone_number`, `owner_email`, `address`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted`) VALUES
(1, 'Dedi Prasetio', 'Perorangan', '', '112999101', 'KTP', '085711119182', 'dediprasetio03@gmail.com', 'asdsad', '2022-02-17 09:01:45', 9, '2022-02-17 09:01:45', 1, 1),
(2, 'Dedi Prasetio', 'Perorangan', '8fb0aad8f70bc78e6abaccf347f70806.png', '', '', '0981212', '', 'dsad', '2022-02-17 16:51:16', 9, '2022-02-17 16:51:16', 0, 1),
(3, 'Dedi Prasetio', 'Perorangan', 'ddc2efbfcb09762405306024c7bbdfdb.jpg', '', '', '087666', '', '', '2022-02-17 17:10:21', 9, '2022-02-17 17:10:21', 0, 1),
(4, 'Dedi Prasetio', 'Perorangan', '259bfd4e46f98f2fa808dbacc9db5811.png', '', '', '087777', '', '', '2022-02-17 17:11:21', 9, '2022-02-17 17:11:21', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `mst_user`
--

CREATE TABLE `mst_user` (
  `user_id` int(11) NOT NULL,
  `user_level_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_full_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_phone_number` varchar(25) NOT NULL,
  `id_card` varchar(25) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_photo` varchar(255) NOT NULL DEFAULT 'default.png',
  `address` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_with` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_with` int(11) NOT NULL,
  `status` varchar(15) NOT NULL,
  `deleted` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mst_user`
--

INSERT INTO `mst_user` (`user_id`, `user_level_id`, `user_name`, `user_full_name`, `user_email`, `user_phone_number`, `id_card`, `user_password`, `user_photo`, `address`, `created_at`, `created_with`, `updated_at`, `updated_with`, `status`, `deleted`) VALUES
(2, 1, 'Admin', 'Admin', 'admin@gmail.co.id', '085715055622', '44512015080001', '$2y$10$P0GfNjJ8NuTixiZSOdhS/eBudEwn233eAEXxJr5IaX0iXk9HoOs1a', '1958cabf0d9eedd4212b6d4b6e6829f5.jpg', '', '2022-02-15 18:05:25', 0, '2022-02-15 18:05:25', 0, 'active', 0),
(9, 1, 'kakasi', 'kakasi', 'kakasi@mail.com', '0911212281', '11021134229', '$2y$10$vTb7/IOstn8in4SKBfKQJOUIKfif8YlvtPHEQ/Ymqu6fhPcsdOxyK', '897071ba1cbd22cfbedca794c807d7c3.jpg', '', '2022-02-17 05:49:45', 8, '2022-02-17 05:49:45', 0, 'active', 0);

-- --------------------------------------------------------

--
-- Table structure for table `my_company`
--

CREATE TABLE `my_company` (
  `company_id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `my_company`
--

INSERT INTO `my_company` (`company_id`, `company_name`, `address`, `phone_number`, `email`) VALUES
(1, 'Eagle Tree - Property Agent', 'Ruko Kebayoran Arcade 2 Blok B3 No. 39 Bintaro Sektor 7 Pondok Aren Tangerang Selatan', '021- 7486 6920', ' admbintaro.eagletree@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user_level_management`
--

CREATE TABLE `user_level_management` (
  `user_level_id` int(11) NOT NULL,
  `user_level_position` varchar(100) NOT NULL,
  `user_level_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_level_management`
--

INSERT INTO `user_level_management` (`user_level_id`, `user_level_position`, `user_level_status`) VALUES
(1, 'admin', 'active'),
(2, 'agen', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mst_asset_category`
--
ALTER TABLE `mst_asset_category`
  ADD PRIMARY KEY (`asset_category_id`);

--
-- Indexes for table `mst_owner`
--
ALTER TABLE `mst_owner`
  ADD PRIMARY KEY (`owner_id`);

--
-- Indexes for table `mst_user`
--
ALTER TABLE `mst_user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user_level_id` (`user_level_id`);

--
-- Indexes for table `my_company`
--
ALTER TABLE `my_company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `user_level_management`
--
ALTER TABLE `user_level_management`
  ADD PRIMARY KEY (`user_level_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mst_asset_category`
--
ALTER TABLE `mst_asset_category`
  MODIFY `asset_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mst_owner`
--
ALTER TABLE `mst_owner`
  MODIFY `owner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mst_user`
--
ALTER TABLE `mst_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `my_company`
--
ALTER TABLE `my_company`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_level_management`
--
ALTER TABLE `user_level_management`
  MODIFY `user_level_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mst_user`
--
ALTER TABLE `mst_user`
  ADD CONSTRAINT `mst_user_ibfk_1` FOREIGN KEY (`user_level_id`) REFERENCES `user_level_management` (`user_level_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
