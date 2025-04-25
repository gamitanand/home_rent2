-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 29, 2025 at 09:19 AM
-- Server version: 9.1.0
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homerent`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `articles_id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `img1` varchar(100) NOT NULL,
  `img2` varchar(100) NOT NULL,
  `articledatetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`articles_id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`articles_id`, `title`, `description`, `img1`, `img2`, `articledatetime`) VALUES
(47, 'title1', 'Description', '17416839089914.png', '17416839083651.png', '2025-03-11 14:35:08'),
(48, 'title1', 'Description', '17416848273539.png', '17416848271590.png', '2025-03-11 14:50:28'),
(49, 'title', 'Description', '17417540412358.png', '17417540414300.png', '2025-03-12 10:04:01'),
(50, 'title3', 'Description', '17417544462364.png', '17417544461271.png', '2025-03-12 10:10:46'),
(51, 'title6', 'Description4', '17421252753112.png', '17421252755984.png', '2025-03-16 17:11:15'),
(52, '', '', '', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `table_states`
--

DROP TABLE IF EXISTS `table_states`;
CREATE TABLE IF NOT EXISTS `table_states` (
  `state_id` int NOT NULL AUTO_INCREMENT,
  `state_name` varchar(50) NOT NULL,
  PRIMARY KEY (`state_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `table_states`
--

INSERT INTO `table_states` (`state_id`, `state_name`) VALUES
(12, 'pune'),
(13, 'kerela'),
(14, 'maharastra');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

DROP TABLE IF EXISTS `tbl_admin`;
CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `admin_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `name`, `email`, `password`, `mobile`) VALUES
(1, 'admin', 'anandgamit244@gmail.com', '1234', '7485965832'),
(2, 'gamitanand', 'gamitanand78@gmail.com', '1234', '7874801125'),
(3, '', '', '', ''),
(4, 'darshun', 'darshun@gmail.com', '123', '1234567890');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_geallery`
--

DROP TABLE IF EXISTS `tbl_geallery`;
CREATE TABLE IF NOT EXISTS `tbl_geallery` (
  `gallery_id` int NOT NULL AUTO_INCREMENT,
  `property_id` int NOT NULL,
  `img_url` varchar(100) NOT NULL,
  PRIMARY KEY (`gallery_id`),
  KEY `property_id` (`property_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inquiry`
--

DROP TABLE IF EXISTS `tbl_inquiry`;
CREATE TABLE IF NOT EXISTS `tbl_inquiry` (
  `inq_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `property_id` int NOT NULL,
  `inq_text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `inq_datetime` datetime NOT NULL,
  PRIMARY KEY (`inq_id`),
  KEY `tbl_inquiry_ibfk_1` (`user_id`),
  KEY `property_id` (`property_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_location_area`
--

DROP TABLE IF EXISTS `tbl_location_area`;
CREATE TABLE IF NOT EXISTS `tbl_location_area` (
  `area_id` int NOT NULL AUTO_INCREMENT,
  `areaname` varchar(30) NOT NULL,
  `city_id` int NOT NULL,
  PRIMARY KEY (`area_id`),
  KEY `city_id` (`city_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_location_area`
--

INSERT INTO `tbl_location_area` (`area_id`, `areaname`, `city_id`) VALUES
(4, 'Area Name', 14);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_property`
--

DROP TABLE IF EXISTS `tbl_property`;
CREATE TABLE IF NOT EXISTS `tbl_property` (
  `property_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `type_id` int NOT NULL,
  `area_id` int NOT NULL,
  `property_file` varchar(100) NOT NULL,
  `about_property` varchar(100) NOT NULL,
  `buildyear` year NOT NULL,
  `rent_amount` varchar(25) NOT NULL,
  `mainphotos` varchar(100) NOT NULL,
  `video_url` varchar(100) NOT NULL,
  `term_conditions` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `is_active` varchar(30) NOT NULL,
  `specifications` varchar(100) NOT NULL,
  `latitude` varchar(200) NOT NULL,
  `longtitude` varchar(200) NOT NULL,
  `addrees` varchar(300) NOT NULL,
  `pincode` int NOT NULL,
  `property_status` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `sqft` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `overlooking` varchar(100) NOT NULL,
  `facing` varchar(100) NOT NULL,
  PRIMARY KEY (`property_id`),
  KEY `user_id` (`user_id`),
  KEY `type_id` (`type_id`),
  KEY `area_id` (`area_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_property`
--

INSERT INTO `tbl_property` (`property_id`, `user_id`, `type_id`, `area_id`, `property_file`, `about_property`, `buildyear`, `rent_amount`, `mainphotos`, `video_url`, `term_conditions`, `is_active`, `specifications`, `latitude`, `longtitude`, `addrees`, `pincode`, `property_status`, `status`, `sqft`, `overlooking`, `facing`) VALUES
(2, 2, 33, 4, 'abc.jpg', 'xyz', '2000', '5000', 'abc.jpg', 'http:/', 'alll ok', 'Yes', 'xyz', 'xyz', 'xyz', 'xyz', 304430, 'xyz', 'ok', '30', '50', '30'),
(6, 2, 34, 4, '17432392875779.png', '4', '2001', '5000', 'abc.jpg', 'test.mp4', 'guhu', '', 'ewdew', '333', '23e', 'eddwe', 222323, 'rent', 'yes', '12', 'qws', 'wqd'),
(7, 2, 34, 4, '17432394895194.png', '4', '2001', '5000', '17432394895831.png', 'test.mp4', 'guhu', '', 'ewdew', '333', '23e', 'eddwe', 222323, 'rent', 'yes', '12', 'qws', 'wqd');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_property_type`
--

DROP TABLE IF EXISTS `tbl_property_type`;
CREATE TABLE IF NOT EXISTS `tbl_property_type` (
  `type_id` int NOT NULL AUTO_INCREMENT,
  `type_name` varchar(50) NOT NULL,
  `type_imges` varchar(50) NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_property_type`
--

INSERT INTO `tbl_property_type` (`type_id`, `type_name`, `type_imges`) VALUES
(30, 'office', '17421336697150.png'),
(32, 'apartment', '17421337059283.png'),
(33, 'abc', '17421411572752.'),
(34, 'vila', '17421425583823.');

-- --------------------------------------------------------

--
-- Table structure for table `type_city`
--

DROP TABLE IF EXISTS `type_city`;
CREATE TABLE IF NOT EXISTS `type_city` (
  `city_id` int NOT NULL AUTO_INCREMENT,
  `city_name` varchar(50) NOT NULL,
  `state_id` int NOT NULL,
  PRIMARY KEY (`city_id`),
  KEY `state_id` (`state_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `type_city`
--

INSERT INTO `type_city` (`city_id`, `city_name`, `state_id`) VALUES
(11, 'katargam', 12),
(12, 'ahemandabad1', 13),
(13, 'tempale', 13),
(14, 'suncity', 13),
(15, 'abc', 13);

-- --------------------------------------------------------

--
-- Table structure for table `type_users`
--

DROP TABLE IF EXISTS `type_users`;
CREATE TABLE IF NOT EXISTS `type_users` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `mobile` int NOT NULL,
  `photo` varchar(100) NOT NULL,
  `otp` int DEFAULT NULL,
  `is_verify` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT 'no',
  `regi_datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `type_users`
--

INSERT INTO `type_users` (`user_id`, `name`, `email`, `password`, `mobile`, `photo`, `otp`, `is_verify`, `regi_datetime`) VALUES
(2, 'gamitanand', 'anand@gmail.com', '1234', 748596583, 'abc.jpg', 123, 'yes', '2025-03-17 04:48:03'),
(3, '', '', '', 0, '', NULL, 'no', '2025-03-24 15:22:52'),
(4, 'test', 'test@gmail.com', '1234', 2147483647, 'test.png', NULL, 'no', '2025-03-24 15:24:00'),
(5, 'test', 'test@gmail.com', '1234', 2147483647, 'test.png', NULL, 'no', '2025-03-25 10:08:40'),
(8, 'test', 'test@gmail.com', '123', 1470852356, 'abc.png', NULL, 'no', '2025-03-25 10:31:51'),
(9, 'demo', 'demo@gmail.com', '123', 1470852369, '17432309533680.jpg', NULL, 'yes', '2025-03-25 10:35:19'),
(15, '', 'demo@gmail.com', '123', 0, '', NULL, 'no', '2025-03-25 11:10:41'),
(16, '', 'demo@gmail.com', '123', 0, '', NULL, 'no', '2025-03-25 11:10:42'),
(17, 'demo2', 'demo2@gmail.com', '123', 2147483647, 'apc.jpg', NULL, 'no', '2025-03-25 11:12:25'),
(21, 'gamit anand', 'anand@gmail.com', '123', 1234567890, 'abs jpg', NULL, 'no', '2025-03-25 12:44:35'),
(27, 'anand', 'anand@gmail.com', '123', 1234567890, 'abc jpg', NULL, 'no', '2025-03-25 12:49:30'),
(28, 'test', 'test@gmail.com', '123456', 2147483647, 'abc.jpg', NULL, 'no', '2025-03-28 15:08:02'),
(29, '', '', '', 0, '', NULL, 'no', '2025-03-28 15:08:57'),
(30, 'test', 'test@gmail.com', '123456', 2147483647, 'abc.jpg', NULL, 'no', '2025-03-28 15:09:59'),
(31, 'pragnesh', 'p@gmail.com', '2589637410', 123456, '17432292717779.jpg', NULL, 'no', '2025-03-29 11:51:11'),
(32, 'nidhi', 'n@gmail.com', '1231231230', 123, '17432306494352.jpg', NULL, 'yes', '2025-03-29 12:14:09'),
(33, 'nidhi', 'n@gmail.com', '1231231231', 123, '17432307061893.jpg', NULL, 'no', '2025-03-29 12:15:06'),
(34, 'karishma', 'k@gmail.com', '1231231231', 123, '17432309533680.jpg', NULL, 'no', '2025-03-29 12:19:13'),
(35, 'khushi', 'k@gmail.com', '123', 123123123, '17432312527926.jpg', NULL, 'yes', '2025-03-29 12:24:12'),
(36, 'b', 'b@gmail.com', '1231231231', 123, '17432362464408.jpg', NULL, 'no', '2025-03-29 13:47:26');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_geallery`
--
ALTER TABLE `tbl_geallery`
  ADD CONSTRAINT `tbl_geallery_ibfk_1` FOREIGN KEY (`property_id`) REFERENCES `tbl_property_type` (`type_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_inquiry`
--
ALTER TABLE `tbl_inquiry`
  ADD CONSTRAINT `tbl_inquiry_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `type_users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_inquiry_ibfk_2` FOREIGN KEY (`property_id`) REFERENCES `tbl_property` (`property_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_location_area`
--
ALTER TABLE `tbl_location_area`
  ADD CONSTRAINT `tbl_location_area_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `type_city` (`city_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_property`
--
ALTER TABLE `tbl_property`
  ADD CONSTRAINT `tbl_property_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `type_users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_property_ibfk_2` FOREIGN KEY (`type_id`) REFERENCES `tbl_property_type` (`type_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_property_ibfk_3` FOREIGN KEY (`area_id`) REFERENCES `tbl_location_area` (`area_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `type_city`
--
ALTER TABLE `type_city`
  ADD CONSTRAINT `type_city_ibfk_1` FOREIGN KEY (`state_id`) REFERENCES `table_states` (`state_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
