-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2021 at 12:30 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thims`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `hospitals`
--

CREATE TABLE `hospitals` (
  `hospital_Id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `ownership` varchar(50) NOT NULL,
  `region` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hospital_category`
--

CREATE TABLE `hospital_category` (
  `id` int(11) NOT NULL,
  `category` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospital_category`
--

INSERT INTO `hospital_category` (`id`, `category`) VALUES
(1, 'Referral '),
(2, 'Regional');

-- --------------------------------------------------------

--
-- Table structure for table `hospital_has_payments`
--

CREATE TABLE `hospital_has_payments` (
  `id` int(11) NOT NULL,
  `card_id` int(11) NOT NULL,
  `hospital_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hospital_has_services`
--

CREATE TABLE `hospital_has_services` (
  `id` int(11) NOT NULL,
  `hospital_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hospital_has_specialists`
--

CREATE TABLE `hospital_has_specialists` (
  `id` int(11) NOT NULL,
  `specialist_id` int(11) DEFAULT NULL,
  `hospital_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hospital_info`
--

CREATE TABLE `hospital_info` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `category` varchar(50) NOT NULL,
  `category_id` int(11) NOT NULL,
  `region` varchar(30) NOT NULL,
  `district` varchar(30) NOT NULL,
  `ownership` varchar(50) NOT NULL,
  `ownership_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hospital_ownership`
--

CREATE TABLE `hospital_ownership` (
  `id` int(11) NOT NULL,
  `type` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospital_ownership`
--

INSERT INTO `hospital_ownership` (`id`, `type`) VALUES
(1, 'Private'),
(2, 'Public');

-- --------------------------------------------------------

--
-- Table structure for table `payment_service`
--

CREATE TABLE `payment_service` (
  `id` int(11) NOT NULL,
  `payment_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `regions`
--

CREATE TABLE `regions` (
  `region_id` int(5) NOT NULL,
  `region_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regions`
--

INSERT INTO `regions` (`region_id`, `region_name`) VALUES
(1, 'Arusha'),
(15, 'Dodoma'),
(9, 'Geita'),
(20, 'Iringa'),
(6, 'Kagera'),
(12, 'Katavi'),
(11, 'Kigoma'),
(2, 'Kilimanjaro'),
(23, 'Lindi'),
(3, 'Manyara'),
(5, 'Mara'),
(18, 'Mbeya'),
(21, 'Morogoro'),
(24, 'Mtwara'),
(7, 'Mwanza'),
(19, 'Njombe'),
(22, 'Pwani'),
(16, 'Rukwa'),
(26, 'Ruvuma'),
(10, 'Shinyanga'),
(8, 'Simiyu'),
(14, 'Singida'),
(17, 'Songwe'),
(13, 'Tabora'),
(4, 'Tanga');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `service_category` varchar(50) NOT NULL,
  `service_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `service_category`
--

CREATE TABLE `service_category` (
  `id` int(11) NOT NULL,
  `service_category` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_category`
--

INSERT INTO `service_category` (`id`, `service_category`) VALUES
(1, 'Laboratory'),
(2, 'Specialization');

-- --------------------------------------------------------

--
-- Table structure for table `specialists`
--

CREATE TABLE `specialists` (
  `id` int(11) NOT NULL,
  `specialist_name` varchar(45) NOT NULL,
  `Specialization` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_last_login`
--

CREATE TABLE `tbl_last_login` (
  `id` bigint(20) NOT NULL,
  `userId` bigint(20) NOT NULL,
  `sessionData` varchar(2048) NOT NULL,
  `machineIp` varchar(1024) NOT NULL,
  `userAgent` varchar(128) NOT NULL,
  `agentString` varchar(1024) NOT NULL,
  `platform` varchar(128) NOT NULL,
  `createdDtm` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_last_login`
--

INSERT INTO `tbl_last_login` (`id`, `userId`, `sessionData`, `machineIp`, `userAgent`, `agentString`, `platform`, `createdDtm`) VALUES
(95, 3, '{\"role\":\"3\",\"roleText\":\"Accountant\",\"name\":\"Mpeka\"}', '::1', 'Firefox 78.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0', 'Windows 10', '2020-06-13 04:58:32'),
(96, 3, '{\"role\":\"3\",\"roleText\":\"Accountant\",\"name\":\"Mpeka\"}', '::1', 'Firefox 78.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0', 'Windows 10', '2020-06-13 05:01:27'),
(97, 2, '{\"role\":\"2\",\"roleText\":\"GIS Officer\",\"name\":\"Irene Boniphace\"}', '::1', 'Firefox 78.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0', 'Windows 10', '2020-06-13 05:02:29'),
(98, 3, '{\"role\":\"3\",\"roleText\":\"Accountant\",\"name\":\"Mpeka\"}', '::1', 'Firefox 78.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0', 'Windows 10', '2020-06-13 05:03:04'),
(99, 3, '{\"role\":\"3\",\"roleText\":\"Accountant\",\"name\":\"Mpeka Mpeka\"}', '::1', 'Firefox 78.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0', 'Windows 10', '2020-06-13 12:25:46'),
(100, 3, '{\"role\":\"3\",\"roleText\":\"Accountant\",\"name\":\"Mpeka Mpeka\"}', '::1', 'Firefox 78.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0', 'Windows 10', '2020-06-13 21:54:28'),
(101, 3, '{\"role\":\"3\",\"roleText\":\"Accountant\",\"name\":\"Mpeka Mpeka\"}', '::1', 'Firefox 78.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0', 'Windows 10', '2020-06-13 22:00:50'),
(102, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Firefox 78.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0', 'Windows 10', '2020-06-14 01:05:06'),
(103, 3, '{\"role\":\"3\",\"roleText\":\"Accountant\",\"name\":\"Mpeka Mpeka\"}', '::1', 'Firefox 78.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0', 'Windows 10', '2020-06-14 01:06:57'),
(104, 3, '{\"role\":\"3\",\"roleText\":\"Accountant\",\"name\":\"Mpeka Mpeka\"}', '::1', 'Firefox 78.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0', 'Windows 10', '2020-06-14 12:45:04'),
(105, 3, '{\"role\":\"3\",\"roleText\":\"Accountant\",\"name\":\"Mpeka Mpeka\"}', '::1', 'Firefox 78.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0', 'Windows 10', '2020-06-14 23:17:04'),
(106, 3, '{\"role\":\"3\",\"roleText\":\"Accountant\",\"name\":\"Mpeka Mpeka\"}', '127.0.0.1', 'Firefox 78.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0', 'Windows 10', '2020-06-16 12:51:49'),
(107, 3, '{\"role\":\"3\",\"roleText\":\"Accountant\",\"name\":\"Mpeka Mpeka\"}', '::1', 'Firefox 78.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0', 'Windows 10', '2020-06-17 12:41:11'),
(108, 3, '{\"role\":\"3\",\"roleText\":\"Accountant\",\"name\":\"Mpeka Mpeka\"}', '::1', 'Firefox 78.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0', 'Windows 10', '2020-06-17 13:01:59'),
(109, 3, '{\"role\":\"3\",\"roleText\":\"Accountant\",\"name\":\"Mpeka Mpeka\"}', '::1', 'Firefox 78.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0', 'Windows 10', '2020-06-18 10:02:22'),
(110, 4, '{\"role\":\"4\",\"roleText\":\"Valuer\",\"name\":\"Medard Mshasha\"}', '::1', 'Firefox 78.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0', 'Windows 10', '2020-06-18 10:33:12'),
(111, 3, '{\"role\":\"3\",\"roleText\":\"Accountant\",\"name\":\"Mpeka Mpeka\"}', '::1', 'Firefox 78.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0', 'Windows 10', '2020-06-18 10:50:20'),
(112, 3, '{\"role\":\"3\",\"roleText\":\"Accountant\",\"name\":\"Mpeka Mpeka\"}', '::1', 'Firefox 78.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0', 'Windows 10', '2020-06-18 11:02:18'),
(113, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Firefox 78.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0', 'Windows 10', '2020-06-18 11:12:14'),
(114, 3, '{\"role\":\"3\",\"roleText\":\"Accountant\",\"name\":\"Mpeka Mpeka\"}', '::1', 'Firefox 78.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0', 'Windows 10', '2020-06-18 11:13:26'),
(115, 3, '{\"role\":\"3\",\"roleText\":\"Accountant\",\"name\":\"Mpeka Mpeka\"}', '::1', 'Firefox 78.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0', 'Windows 10', '2020-06-18 14:06:34'),
(116, 2, '{\"role\":\"2\",\"roleText\":\"GIS Officer\",\"name\":\"Irene Boniphace\"}', '::1', 'Firefox 78.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0', 'Windows 10', '2020-06-18 14:27:08'),
(117, 3, '{\"role\":\"3\",\"roleText\":\"Accountant\",\"name\":\"Mpeka Mpeka\"}', '::1', 'Firefox 78.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0', 'Windows 10', '2020-06-18 14:31:28'),
(118, 2, '{\"role\":\"2\",\"roleText\":\"GIS Officer\",\"name\":\"Irene Boniphace\"}', '::1', 'Firefox 78.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0', 'Windows 10', '2020-06-18 17:33:03'),
(119, 4, '{\"role\":\"4\",\"roleText\":\"Valuer\",\"name\":\"Medard Mshasha\"}', '::1', 'Firefox 78.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0', 'Windows 10', '2020-06-18 17:35:18'),
(120, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Firefox 78.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0', 'Windows 10', '2020-06-18 17:36:13'),
(121, 3, '{\"role\":\"3\",\"roleText\":\"Accountant\",\"name\":\"Mpeka Mpeka\"}', '::1', 'Firefox 78.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0', 'Windows 10', '2020-06-18 17:38:13'),
(122, 3, '{\"role\":\"3\",\"roleText\":\"Accountant\",\"name\":\"Mpeka Mpeka\"}', '127.0.0.1', 'Firefox 78.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0', 'Windows 10', '2020-06-18 22:24:12'),
(123, 3, '{\"role\":\"3\",\"roleText\":\"Accountant\",\"name\":\"Mpeka Mpeka\"}', '::1', 'Firefox 78.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0', 'Windows 10', '2020-06-19 11:35:59'),
(124, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Firefox 78.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0', 'Windows 10', '2020-06-19 11:52:18'),
(125, 3, '{\"role\":\"3\",\"roleText\":\"Accountant\",\"name\":\"Mpeka Mpeka\"}', '::1', 'Firefox 78.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0', 'Windows 10', '2020-06-19 11:52:50'),
(126, 3, '{\"role\":\"3\",\"roleText\":\"Accountant\",\"name\":\"Mpeka Mpeka\"}', '::1', 'Firefox 78.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0', 'Windows 10', '2020-06-22 11:09:52'),
(127, 4, '{\"role\":\"4\",\"roleText\":\"Valuer\",\"name\":\"Medard Mshasha\"}', '::1', 'Firefox 78.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0', 'Windows 10', '2020-06-22 12:24:53'),
(128, 5, '{\"role\":\"5\",\"roleText\":\"Technician\",\"name\":\"Issa\"}', '::1', 'Firefox 78.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0', 'Windows 10', '2020-06-22 12:25:58'),
(129, 3, '{\"role\":\"3\",\"roleText\":\"Accountant\",\"name\":\"Mpeka Mpeka\"}', '::1', 'Firefox 78.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0', 'Windows 10', '2020-06-22 12:34:18'),
(130, 3, '{\"role\":\"3\",\"roleText\":\"Accountant\",\"name\":\"Mpeka Mpeka\"}', '::1', 'Firefox 78.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0', 'Windows 10', '2020-06-23 00:31:34'),
(131, 3, '{\"role\":\"3\",\"roleText\":\"Accountant\",\"name\":\"Mpeka Mpeka\"}', '::1', 'Firefox 78.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0', 'Windows 10', '2020-06-23 09:26:38'),
(132, 3, '{\"role\":\"3\",\"roleText\":\"Accountant\",\"name\":\"Mpeka Mpeka\"}', '::1', 'Firefox 78.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0', 'Windows 10', '2020-06-23 17:07:38'),
(133, 3, '{\"role\":\"3\",\"roleText\":\"Accountant\",\"name\":\"Mpeka Mpeka\"}', '::1', 'Firefox 78.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0', 'Windows 10', '2020-06-24 16:20:25'),
(134, 2, '{\"role\":\"2\",\"roleText\":\"GIS Officer\",\"name\":\"Irene Boniphace\"}', '::1', 'Firefox 78.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0', 'Windows 10', '2020-06-24 16:40:30'),
(135, 3, '{\"role\":\"3\",\"roleText\":\"Accountant\",\"name\":\"Mpeka Mpeka\"}', '::1', 'Firefox 78.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0', 'Windows 10', '2020-06-24 16:59:50'),
(136, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Firefox 78.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0', 'Windows 10', '2020-06-24 18:13:11'),
(137, 2, '{\"role\":\"2\",\"roleText\":\"GIS Officer\",\"name\":\"Irene Boniphace\"}', '::1', 'Firefox 78.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0', 'Windows 10', '2020-06-24 18:24:30'),
(138, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Firefox 78.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0', 'Windows 10', '2020-06-24 19:15:32'),
(139, 3, '{\"role\":\"3\",\"roleText\":\"Accountant\",\"name\":\"Mpeka Mpeka\"}', '::1', 'Firefox 78.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0', 'Windows 10', '2020-06-24 19:18:20'),
(140, 3, '{\"role\":\"3\",\"roleText\":\"Accountant\",\"name\":\"Mpeka Mpeka\"}', '::1', 'Firefox 78.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0', 'Windows 10', '2020-06-24 23:42:49'),
(141, 3, '{\"role\":\"3\",\"roleText\":\"Accountant\",\"name\":\"Mpeka Mpeka\"}', '::1', 'Firefox 78.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0', 'Windows 10', '2020-06-25 06:46:28'),
(142, 5, '{\"role\":\"5\",\"roleText\":\"Technician\",\"name\":\"Issa\"}', '::1', 'Firefox 78.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0', 'Windows 10', '2020-06-25 16:26:01'),
(143, 4, '{\"role\":\"4\",\"roleText\":\"Valuer\",\"name\":\"Medard Mshasha\"}', '::1', 'Firefox 78.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0', 'Windows 10', '2020-06-25 16:26:19'),
(144, 5, '{\"role\":\"5\",\"roleText\":\"Technician\",\"name\":\"Issa\"}', '::1', 'Firefox 78.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0', 'Windows 10', '2020-06-25 16:26:50'),
(145, 3, '{\"role\":\"3\",\"roleText\":\"Accountant\",\"name\":\"Mpeka Mpeka\"}', '::1', 'Firefox 78.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0', 'Windows 10', '2020-06-25 16:44:40'),
(146, 5, '{\"role\":\"5\",\"roleText\":\"Technician\",\"name\":\"Issa\"}', '::1', 'Firefox 78.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0', 'Windows 10', '2020-06-25 16:44:55'),
(147, 3, '{\"role\":\"3\",\"roleText\":\"Accountant\",\"name\":\"Mpeka Mpeka\"}', '::1', 'Firefox 78.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0', 'Windows 10', '2020-06-25 16:46:07'),
(148, 2, '{\"role\":\"2\",\"roleText\":\"GIS Officer\",\"name\":\"Irene Boniphace\"}', '::1', 'Firefox 78.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0', 'Windows 10', '2020-06-25 16:46:22'),
(149, 3, '{\"role\":\"3\",\"roleText\":\"Accountant\",\"name\":\"Mpeka Mpeka\"}', '::1', 'Firefox 78.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0', 'Windows 10', '2020-06-25 16:49:03'),
(150, 4, '{\"role\":\"4\",\"roleText\":\"Valuer\",\"name\":\"Medard Mshasha\"}', '::1', 'Firefox 78.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0', 'Windows 10', '2020-06-25 16:49:38'),
(151, 3, '{\"role\":\"3\",\"roleText\":\"Accountant\",\"name\":\"Mpeka Mpeka\"}', '::1', 'Firefox 78.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0', 'Windows 10', '2020-06-25 20:37:58'),
(152, 4, '{\"role\":\"4\",\"roleText\":\"Valuer\",\"name\":\"Medard Mshasha\"}', '::1', 'Firefox 78.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0', 'Windows 10', '2020-06-26 01:27:42'),
(153, 3, '{\"role\":\"3\",\"roleText\":\"Accountant\",\"name\":\"Mpeka Mpeka\"}', '::1', 'Firefox 78.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0', 'Windows 10', '2020-06-26 01:37:35'),
(154, 3, '{\"role\":\"3\",\"roleText\":\"Accountant\",\"name\":\"Mpeka Mpeka\"}', '::1', 'Firefox 78.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0', 'Windows 10', '2020-06-26 08:39:13'),
(155, 3, '{\"role\":\"3\",\"roleText\":\"Accountant\",\"name\":\"Mpeka Mpeka\"}', '::1', 'Firefox 78.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0', 'Windows 10', '2020-06-26 20:54:07'),
(156, 3, '{\"role\":\"3\",\"roleText\":\"Accountant\",\"name\":\"Mpeka Mpeka\"}', '::1', 'Edge 18.18362', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.102 Safari/537.36 Edge/18.18362', 'Windows 10', '2020-06-26 21:05:15'),
(157, 2, '{\"role\":\"2\",\"roleText\":\"GIS Officer\",\"name\":\"Irene Boniphace\"}', '::1', 'Firefox 78.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0', 'Windows 10', '2020-06-26 21:57:37'),
(158, 5, '{\"role\":\"5\",\"roleText\":\"Technician\",\"name\":\"Issa\"}', '::1', 'Firefox 78.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0', 'Windows 10', '2020-06-26 22:00:46'),
(159, 3, '{\"role\":\"3\",\"roleText\":\"Accountant\",\"name\":\"Mpeka Mpeka\"}', '::1', 'Firefox 78.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0', 'Windows 10', '2020-06-26 22:01:39'),
(160, 3, '{\"role\":\"3\",\"roleText\":\"Accountant\",\"name\":\"Mpeka Mpeka\"}', '::1', 'Firefox 78.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0', 'Windows 10', '2020-06-27 07:46:06'),
(161, 3, '{\"role\":\"3\",\"roleText\":\"Accountant\",\"name\":\"Mpeka Mpeka\"}', '::1', 'Firefox 78.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0', 'Windows 10', '2020-06-27 22:16:50'),
(162, 3, '{\"role\":\"3\",\"roleText\":\"Accountant\",\"name\":\"Mpeka Mpeka\"}', '::1', 'Firefox 78.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0', 'Windows 10', '2020-06-29 01:17:13'),
(163, 3, '{\"role\":\"3\",\"roleText\":\"Accountant\",\"name\":\"Mpeka Mpeka\"}', '::1', 'Firefox 78.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0', 'Windows 10', '2020-06-29 11:28:34'),
(164, 2, '{\"role\":\"2\",\"roleText\":\"GIS Officer\",\"name\":\"Irene Boniphace\"}', '::1', 'Firefox 78.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0', 'Windows 10', '2020-06-29 11:33:31'),
(165, 3, '{\"role\":\"3\",\"roleText\":\"Accountant\",\"name\":\"Mpeka Mpeka\"}', '::1', 'Chrome 83.0.4103.116', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36 Edg/83.0.478.56', 'Windows 10', '2020-06-30 11:40:48'),
(166, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 83.0.4103.116', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36 Edg/83.0.478.56', 'Windows 10', '2020-06-30 12:48:39'),
(167, 3, '{\"role\":\"3\",\"roleText\":\"Accountant\",\"name\":\"Mpeka Mpeka\"}', '::1', 'Chrome 83.0.4103.116', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36 Edg/83.0.478.56', 'Windows 10', '2020-06-30 13:11:19'),
(168, 3, '{\"role\":\"3\",\"roleText\":\"Accountant\",\"name\":\"Mpeka Mpeka\"}', '::1', 'Chrome 83.0.4103.116', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36 Edg/83.0.478.56', 'Windows 10', '2020-06-30 16:53:11'),
(169, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 83.0.4103.116', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36 Edg/83.0.478.56', 'Windows 10', '2020-06-30 17:15:12'),
(170, 11, '{\"role\":\"3\",\"roleText\":\"Accountant\",\"name\":\"Lilian\"}', '::1', 'Chrome 83.0.4103.116', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36 Edg/83.0.478.56', 'Windows 10', '2020-06-30 17:16:47'),
(171, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 83.0.4103.116', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36 Edg/83.0.478.56', 'Windows 10', '2020-06-30 17:26:55'),
(172, 3, '{\"role\":\"3\",\"roleText\":\"Accountant\",\"name\":\"Mpeka Mpeka\"}', '::1', 'Chrome 83.0.4103.116', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36 Edg/83.0.478.56', 'Windows 10', '2020-06-30 17:27:22'),
(173, 3, '{\"role\":\"3\",\"roleText\":\"Accountant\",\"name\":\"Mpeka Mpeka\"}', '::1', 'Chrome 90.0.4430.212', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 'Linux', '2021-05-12 17:48:29'),
(174, 2, '{\"role\":\"2\",\"roleText\":\"Hospital Admin\",\"name\":\"Irene Boniphace\"}', '::1', 'Chrome 90.0.4430.212', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 'Linux', '2021-05-13 16:49:56'),
(175, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 90.0.4430.212', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 'Linux', '2021-05-13 16:50:38'),
(176, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 90.0.4430.212', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 'Linux', '2021-05-13 16:57:05'),
(177, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 90.0.4430.212', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 'Linux', '2021-05-13 17:21:53'),
(178, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 90.0.4430.212', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 'Linux', '2021-05-13 17:43:11'),
(179, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 90.0.4430.212', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 'Linux', '2021-05-13 23:02:59'),
(180, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 90.0.4430.212', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 'Linux', '2021-05-14 19:57:28'),
(181, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 90.0.4430.212', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 'Linux', '2021-05-14 20:43:21'),
(182, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 90.0.4430.212', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 'Linux', '2021-05-16 15:22:01'),
(183, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 90.0.4430.212', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 'Linux', '2021-05-16 16:38:56'),
(184, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 90.0.4430.212', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 'Linux', '2021-05-16 16:41:32'),
(185, 2, '{\"role\":\"2\",\"roleText\":\"Hospital Admin\",\"name\":\"Irene Daniel\"}', '::1', 'Chrome 90.0.4430.212', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 'Linux', '2021-05-16 16:42:17'),
(186, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 90.0.4430.212', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 'Linux', '2021-05-16 17:03:25'),
(187, 2, '{\"role\":\"2\",\"roleText\":\"Hospital Admin\",\"name\":\"Irene Daniel\"}', '::1', 'Chrome 90.0.4430.212', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 'Linux', '2021-05-16 17:04:07'),
(188, 3, '{\"role\":\"3\",\"roleText\":\"Specialist\",\"name\":\"Kimaro Lyimo\"}', '::1', 'Chrome 90.0.4430.212', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 'Linux', '2021-05-16 17:04:45'),
(189, 3, '{\"role\":\"3\",\"roleText\":\"Specialist\",\"name\":\"Kimaro Lyimo\"}', '::1', 'Chrome 90.0.4430.212', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 'Linux', '2021-05-16 17:19:30');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reset_password`
--

CREATE TABLE `tbl_reset_password` (
  `id` bigint(20) NOT NULL,
  `email` varchar(128) NOT NULL,
  `activation_id` varchar(32) NOT NULL,
  `agent` varchar(512) NOT NULL,
  `client_ip` varchar(32) NOT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT 0,
  `createdBy` bigint(20) NOT NULL DEFAULT 1,
  `createdDtm` datetime NOT NULL,
  `updatedBy` bigint(20) DEFAULT NULL,
  `updatedDtm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_reset_password`
--

INSERT INTO `tbl_reset_password` (`id`, `email`, `activation_id`, `agent`, `client_ip`, `isDeleted`, `createdBy`, `createdDtm`, `updatedBy`, `updatedDtm`) VALUES
(1, 'accountant@gmail.com', 'H0P6ZkamCpubh5G', 'Chrome 83.0.4103.61', '::1', 0, 1, '2020-06-07 13:57:25', NULL, NULL),
(2, 'accountant@gmail.com', 'wqe2kmK7nULioXZ', 'Chrome 83.0.4103.61', '::1', 0, 1, '2020-06-07 13:58:22', NULL, NULL),
(3, 'lilianbaitu@gmail.com', 'yGrKJSQ5pTB8w6l', 'Chrome 83.0.4103.116', '::1', 0, 1, '2020-06-30 16:17:19', NULL, NULL),
(4, 'lilianbaitu@gmail.com', '2SODV56J7ZhqXwT', 'Chrome 83.0.4103.116', '::1', 0, 1, '2020-06-30 16:17:34', NULL, NULL),
(5, 'lilianbaitu@gmail.com', 'yAQNSuRGBH5TZzF', 'Chrome 83.0.4103.116', '::1', 0, 1, '2020-06-30 16:24:53', NULL, NULL),
(6, 'lilianbaitu@gmail.com', '6K9BZHqhIEDoMCi', 'Chrome 83.0.4103.116', '::1', 0, 1, '2020-06-30 16:25:12', NULL, NULL),
(7, 'lilianbaitu@gmail.com', 'lAEihfgLRQbY8et', 'Chrome 83.0.4103.116', '::1', 0, 1, '2020-06-30 16:25:23', NULL, NULL),
(8, 'lilianbaitu@gmail.com', 'ERO2KihCzbgBuMS', 'Chrome 83.0.4103.116', '::1', 0, 1, '2020-06-30 16:25:32', NULL, NULL),
(9, 'lilianbaitu@gmail.com', 'Ggvl4kezRNIwmO0', 'Chrome 83.0.4103.116', '::1', 0, 1, '2020-06-30 16:25:41', NULL, NULL),
(10, 'lilianbaitu@gmail.com', 'GtjwRIAxeWvbSao', 'Chrome 83.0.4103.116', '::1', 0, 1, '2020-06-30 16:25:50', NULL, NULL),
(11, 'lilianbaitu@gmail.com', 'ScmBK6kFvznZ98U', 'Chrome 83.0.4103.116', '::1', 0, 1, '2020-06-30 16:25:58', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `roleId` tinyint(4) NOT NULL COMMENT 'role id',
  `role` varchar(50) NOT NULL COMMENT 'role text'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_roles`
--

INSERT INTO `tbl_roles` (`roleId`, `role`) VALUES
(1, 'System Administrator'),
(2, 'Hospital Admin'),
(3, 'Specialist');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `userId` int(11) NOT NULL,
  `email` varchar(128) NOT NULL COMMENT 'login email',
  `password` varchar(128) NOT NULL COMMENT 'hashed login password',
  `name` varchar(128) DEFAULT NULL COMMENT 'full name of user',
  `mobile` varchar(20) DEFAULT NULL,
  `roleId` tinyint(4) NOT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT 0,
  `createdBy` int(11) NOT NULL,
  `createdDtm` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`userId`, `email`, `password`, `name`, `mobile`, `roleId`, `isDeleted`, `createdBy`, `createdDtm`, `updatedBy`, `updatedDtm`) VALUES
(1, 'admin@gmail.com', '$2y$10$S8zP.UNHTZYS./1x.DkXv.3udwUP8zWAYCBedUddnAswiNfkhzwmG', 'System Administrator', '0762174951', 1, 0, 0, '2021-05-01 18:56:49', 1, '2021-05-11 09:53:19'),
(2, 'hospitaladmin@gmail.com', '$2y$10$eRsduLrTnGe9838Wfb.WX.M/NDzNwJqSJ/v.nPcJGw1tH2ppULL7W', 'Irene Daniel', '0713864534', 2, 0, 1, '2021-05-09 17:49:56', 2, '2021-05-16 15:47:12'),
(3, 'specialist@gmail.com', '$2y$10$ruCxrScAwPWJ7Ae8E3Too.QYHKB3hnefYeCfTrbiXO6uDvt27Yk4W', 'Kimaro Lyimo', '0762174951', 3, 0, 1, '2021-05-09 17:50:22', 3, '2021-05-16 16:17:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `hospitals`
--
ALTER TABLE `hospitals`
  ADD PRIMARY KEY (`hospital_Id`);

--
-- Indexes for table `hospital_category`
--
ALTER TABLE `hospital_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospital_has_payments`
--
ALTER TABLE `hospital_has_payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_hospital_has_payments_1_idx` (`hospital_id`),
  ADD KEY `fk_hospital_has_payments_2_idx` (`card_id`);

--
-- Indexes for table `hospital_has_services`
--
ALTER TABLE `hospital_has_services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_hospital_has_services_2_idx` (`service_id`),
  ADD KEY `fk_hospital_has_services_1_idx` (`hospital_id`);

--
-- Indexes for table `hospital_has_specialists`
--
ALTER TABLE `hospital_has_specialists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_hospital_has_specialists_1_idx` (`hospital_id`),
  ADD KEY `fk_hospital_has_specialists_2_idx` (`specialist_id`);

--
-- Indexes for table `hospital_info`
--
ALTER TABLE `hospital_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_id` (`category_id`),
  ADD KEY `fk_hospital_info_1` (`ownership_id`),
  ADD KEY `fk_hospital_info_2_idx` (`category_id`),
  ADD KEY `category_id_2` (`category_id`);

--
-- Indexes for table `hospital_ownership`
--
ALTER TABLE `hospital_ownership`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_service`
--
ALTER TABLE `payment_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`region_id`),
  ADD UNIQUE KEY `region_name` (`region_name`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_category`
--
ALTER TABLE `service_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specialists`
--
ALTER TABLE `specialists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_last_login`
--
ALTER TABLE `tbl_last_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_reset_password`
--
ALTER TABLE `tbl_reset_password`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  ADD PRIMARY KEY (`roleId`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hospitals`
--
ALTER TABLE `hospitals`
  MODIFY `hospital_Id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hospital_has_services`
--
ALTER TABLE `hospital_has_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hospital_info`
--
ALTER TABLE `hospital_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `regions`
--
ALTER TABLE `regions`
  MODIFY `region_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `service_category`
--
ALTER TABLE `service_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_last_login`
--
ALTER TABLE `tbl_last_login`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=190;

--
-- AUTO_INCREMENT for table `tbl_reset_password`
--
ALTER TABLE `tbl_reset_password`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `roleId` tinyint(4) NOT NULL AUTO_INCREMENT COMMENT 'role id', AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hospital_has_payments`
--
ALTER TABLE `hospital_has_payments`
  ADD CONSTRAINT `fk_hospital_has_payments_1` FOREIGN KEY (`hospital_id`) REFERENCES `hospital_info` (`id`),
  ADD CONSTRAINT `fk_hospital_has_payments_2` FOREIGN KEY (`card_id`) REFERENCES `payment_service` (`id`);

--
-- Constraints for table `hospital_has_services`
--
ALTER TABLE `hospital_has_services`
  ADD CONSTRAINT `fk_hospital_has_services_1` FOREIGN KEY (`hospital_id`) REFERENCES `hospital_info` (`id`),
  ADD CONSTRAINT `fk_hospital_has_services_2` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`);

--
-- Constraints for table `hospital_has_specialists`
--
ALTER TABLE `hospital_has_specialists`
  ADD CONSTRAINT `fk_hospital_has_specialists_1` FOREIGN KEY (`hospital_id`) REFERENCES `hospital_info` (`id`),
  ADD CONSTRAINT `fk_hospital_has_specialists_2` FOREIGN KEY (`specialist_id`) REFERENCES `specialists` (`id`);

--
-- Constraints for table `hospital_info`
--
ALTER TABLE `hospital_info`
  ADD CONSTRAINT `fk_hospital_info_1` FOREIGN KEY (`ownership_id`) REFERENCES `hospital_ownership` (`id`),
  ADD CONSTRAINT `fk_hospital_info_2` FOREIGN KEY (`category_id`) REFERENCES `hospital_category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
