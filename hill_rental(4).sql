-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2018 at 03:38 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hill_rental`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `payment_id` int(60) NOT NULL,
  `debit` varchar(60) DEFAULT '0',
  `credit` int(60) NOT NULL DEFAULT '0',
  `date` varchar(60) NOT NULL,
  `invoice_id` varchar(60) NOT NULL,
  `customercode` varchar(45) NOT NULL,
  `property_id` varchar(70) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `responsible` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`payment_id`, `debit`, `credit`, `date`, `invoice_id`, `customercode`, `property_id`, `status`, `responsible`) VALUES
(1, '', 0, '2017-04-19', '1003', '', NULL, 0, 'kamasteve '),
(2, '7000', 0, '2017-05-15', '1008', '1', NULL, 0, 'kamasteve '),
(3, '500', 0, '2017-05-15', '1005', '1', NULL, 0, 'kamasteve '),
(4, '7000', 0, '2017-05-15', '1008', '1', NULL, 0, 'kamasteve '),
(5, '6100', 0, '2017-05-15', '1004', '1', NULL, 0, 'kamasteve '),
(6, '1750', 0, '2017-05-15', '1001', '11', NULL, 0, 'kamasteve '),
(7, '7050', 0, '2017-05-16', '1003', '1', NULL, 0, 'kamasteve '),
(8, '7000', 0, '2017-05-16', '22', '', NULL, 0, 'kamau'),
(9, '7000', 0, '2017-05-16', '15', '', NULL, 0, 'kamau'),
(10, '0', 7000, '2017-05-16', '15', '', NULL, 0, 'kamau'),
(11, '0', 7000, '2017-05-16', '13', '', NULL, 0, 'kamau'),
(12, '0', 7000, '2017-05-16', '21', '', '', 0, 'kamau'),
(13, '0', 7000, '2017-05-16', 'EXP15', '', '', 0, 'kamau'),
(14, '0', 7000, '2017-05-16', 'EXP15', 'kamau', '', 0, 'kamau'),
(15, '0', 345, '2017-05-16', 'EXP14', 'kamau', 'Aqua Villa', 0, 'kamau'),
(16, '0', 345, '2017-05-16', 'EXP14', 'kamau', 'Aqua Villa', 0, 'kamau'),
(17, '0', 345, '2017-05-16', 'EXP16', 'kamau', 'Aqua Villa', 0, 'kamau'),
(18, '7000', 0, '2017-06-23', '1011', '1', NULL, 0, 'kamasteve '),
(19, '7700', 0, '2017-06-23', '1000', '1', NULL, 0, 'kamasteve '),
(20, '7000', 0, '2017-06-29', '1011', '1', NULL, 0, 'kamasteve '),
(21, '', 0, '2017-06-29', '1012', '', NULL, 0, 'kamasteve '),
(22, '7000', 0, '2017-06-29', '1010', '11', NULL, 0, 'kamasteve '),
(23, '7000', 0, '2017-06-29', '1007', '5', NULL, 0, 'kamasteve '),
(24, '13500', 0, '2017-06-29', '1014', '11', NULL, 0, 'kamasteve '),
(25, '7000', 0, '2017-06-29', '1013', '11', NULL, 0, 'kamasteve '),
(26, '7000', 0, '2017-07-03', '1015', '', NULL, 0, 'kamasteve '),
(27, '7000', 0, '2017-07-05', '1015', '', NULL, 0, 'kamasteve '),
(28, '7250', 0, '2017-07-05', '1009', '5', NULL, 0, 'kamasteve '),
(29, '7000', 0, '2017-07-05', '1020', '', NULL, 0, 'kamasteve '),
(30, '6900', 0, '2017-07-05', '1019', '1', NULL, 0, 'kamasteve '),
(31, '0', 7000, '2017-07-05', 'EXP21', 'kamau', 'Prime Hostels', 0, 'kamau'),
(32, '0', 7000, '2017-07-05', 'EXP22', 'kamau', 'Prime Hostels', 0, 'kamau'),
(33, '7000', 0, '2017-07-05', '1023', '5', NULL, 0, 'kamasteve '),
(34, '7000', 0, '2017-07-05', '1021', '', NULL, 0, 'kamasteve '),
(35, '23150', 0, '2017-07-05', '1018', '11', NULL, 0, 'kamasteve '),
(36, '8900', 0, '2017-07-05', '1024', '1', NULL, 0, 'kamasteve '),
(37, '15900', 0, '2017-07-11', '1017', '11', NULL, 0, 'kamasteve '),
(38, '7500', 0, '2017-07-11', '1002', '11', NULL, 0, 'kamasteve '),
(39, '250', 0, '2017-07-11', '1030', '11', NULL, 0, 'kamasteve '),
(40, '8900', 0, '2017-07-11', '1027', '12', NULL, 0, 'kamasteve '),
(41, '250', 0, '2017-07-11', '1028', '11', NULL, 0, 'kamasteve '),
(42, '7000', 0, '2017-07-11', '1025', '4', NULL, 0, 'kamasteve '),
(43, '7000', 0, '2017-07-11', '1026', '6', NULL, 0, 'kamasteve '),
(44, '9000', 0, '2017-07-11', '1016', '5', NULL, 0, 'kamasteve '),
(45, '6100', 0, '2017-07-11', '1022', '5', NULL, 0, 'kamasteve '),
(46, '7000', 0, '2017-07-11', '1029', '5', NULL, 0, 'kamasteve '),
(47, '500', 0, '2017-07-11', '1032', '11', NULL, 0, 'kamasteve '),
(48, '7000', 0, '2017-07-11', '1031', '11', NULL, 0, 'kamasteve '),
(49, '7000', 0, '2017-07-11', '1033', '11', NULL, 0, 'kamasteve '),
(50, '500', 0, '2017-07-11', '1034', '', NULL, 0, 'kamasteve '),
(51, '7000', 0, '2017-07-11', '1035', '', NULL, 0, 'kamasteve '),
(52, '7000', 0, '2017-07-23', '1036', '12', NULL, 0, 'kamasteve '),
(53, '500', 0, '2017-07-23', '1039', '1', NULL, 0, 'kamasteve '),
(54, '7000', 0, '2017-07-27', '', '', NULL, 0, 'kamasteve '),
(55, '7000', 0, '2017-08-05', '1044', '18', NULL, 0, 'mwkush '),
(56, '500', 0, '2017-08-05', '1040', '14', NULL, 0, 'mwkush '),
(57, '0', 7000, '2017-08-05', 'EXP13', 'kamau', 'Aqua Villa', 0, 'kamau'),
(58, '2500', 0, '2017-09-04', '1037', '', NULL, 0, 'kamasteve '),
(59, '1991', 0, '2017-09-04', '1043', '7', NULL, 0, 'kamasteve '),
(60, '450', 0, '2017-09-04', '1049', '13', NULL, 0, 'kamasteve '),
(61, '450', 0, '2017-09-07', '1049', '13', NULL, 0, 'kamasteve '),
(62, '500', 0, '2017-09-07', '1049', '13', NULL, 0, 'kamasteve '),
(63, '6000', 0, '2017-09-07', '1038', '20', NULL, 0, 'kamasteve '),
(64, '7000', 0, '2017-09-08', '1050', '19', NULL, 0, 'kamasteve '),
(65, '13500', 0, '2017-09-11', '1051', '', NULL, 0, 'kamasteve '),
(66, '15000', 0, '2017-09-11', '1050', '19', NULL, 0, 'kamasteve '),
(67, '900', 0, '2017-09-11', '1050', '19', NULL, 0, 'kamasteve '),
(68, '500', 0, '2017-09-11', '1042', '4', NULL, 0, 'kamasteve '),
(69, '7500', 0, '2017-09-11', '1045', '19', NULL, 0, 'kamasteve '),
(70, '7000', 0, '2017-09-11', '1044', '18', NULL, 0, 'kamasteve '),
(71, '500', 0, '2017-09-11', '1044', '18', NULL, 0, 'kamasteve '),
(72, '15900', 0, '2017-09-11', '1050', '', NULL, 0, 'kamasteve '),
(73, '9700', 0, '2017-09-11', '1047', '16', NULL, 0, 'kamasteve '),
(74, '7000', 0, '2017-09-11', '1048', '', NULL, 0, 'kamasteve '),
(75, '7500', 0, '2017-09-11', '1044', '', NULL, 0, 'kamasteve '),
(76, '9900', 0, '2017-09-11', '1048', '', NULL, 0, 'kamasteve '),
(77, '400', 0, '2017-09-11', '1041', '', NULL, 0, 'kamasteve '),
(78, '500', 0, '2017-09-11', '1041', '17', NULL, 0, 'kamasteve '),
(79, '6500', 0, '2017-09-11', '1046', '17', NULL, 0, 'kamasteve '),
(80, '7000', 0, '2017-09-11', '1038', '20', NULL, 0, 'kamasteve '),
(81, '8900', 0, '2017-09-11', '1035', '16', NULL, 0, 'kamasteve '),
(82, '8900', 0, '2017-09-11', '1035', '16', NULL, 0, 'kamasteve '),
(83, '7000', 0, '2017-09-11', '1046', '17', NULL, 0, 'kamasteve '),
(84, '9700', 0, '2017-09-11', '1000', '5', NULL, 0, 'kamasteve '),
(85, '6700', 0, '2017-09-11', '1001', '5', NULL, 0, 'kamasteve '),
(86, '800', 0, '2017-09-11', '1001', '5', NULL, 0, 'kamasteve '),
(87, '9000', 0, '2017-09-11', '1002', '4', NULL, 0, 'kamasteve '),
(88, '700', 0, '2017-09-11', '1002', '4', NULL, 0, 'kamasteve '),
(89, '6500', 0, '2017-09-12', '1001', '5', NULL, 0, 'kamasteve '),
(90, '7000', 0, '2017-09-12', '1003', '5', NULL, 0, 'kamasteve '),
(91, '5000', 0, '2017-09-13', '1000', '19', NULL, 0, 'kamasteve '),
(92, '100', 0, '2017-09-13', '1002', '19', NULL, 0, 'kamasteve '),
(93, '3000', 0, '2017-09-13', '1003', '19', NULL, 0, 'kamasteve '),
(94, '7000', 0, '2017-09-14', '1001', '9', NULL, 0, 'kamasteve '),
(95, '1700', 0, '2017-09-14', '1000', '19', NULL, 0, 'kamasteve '),
(96, '3500', 0, '2017-09-14', '1005', '19', NULL, 0, 'kamasteve '),
(97, '6700', 0, '2017-09-14', '1007', '4', NULL, 0, 'kamasteve '),
(98, '10000', 0, '2017-09-14', '1006', '19', NULL, 0, 'kamasteve '),
(99, '6500', 0, '2017-09-15', '1008', '5', NULL, 0, 'kamasteve '),
(100, '7200', 0, '2017-09-18', '1004', '19', NULL, 0, 'kamasteve '),
(101, '6000', 0, '2017-09-21', '1010', '22', NULL, 0, 'kamasteve '),
(102, '6000', 0, '2017-09-21', '1011', '5', NULL, 0, 'kamasteve '),
(103, '5000', 0, '2017-09-21', '1013', '20', NULL, 0, 'kamasteve '),
(104, '500', 0, '2017-09-21', '1013', '20', NULL, 0, 'kamasteve '),
(105, '3400', 0, '2017-09-21', '1013', '20', NULL, 0, 'kamasteve '),
(106, '6500', 0, '2017-10-12', '1010', '22', NULL, 0, 'kamasteve '),
(107, '30', 0, '2017-10-12', '1000', '19', NULL, 0, 'kamasteve '),
(108, '1', 0, '2017-10-12', '1002', '19', NULL, 0, 'kamasteve '),
(109, '200', 0, '2017-10-12', '1013', '20', NULL, 0, 'kamasteve '),
(110, '200', 0, '2017-10-12', '1013', '20', NULL, 0, 'kamasteve '),
(111, '399', 0, '2017-10-12', '1002', '19', NULL, 0, 'kamasteve '),
(112, '7000', 0, '2017-10-12', '1009', '19', NULL, 0, 'kamasteve '),
(113, '7000', 0, '2017-10-12', '1000', '19', NULL, 0, 'kamasteve '),
(114, '0', 1200, '2017-10-20', 'EXP54', 'Landlord', 'Aqua Villa', 0, 'Landlord'),
(115, '8900', 0, '2017-10-20', '1013', '20', NULL, 0, 'mwkush '),
(116, '0', 6000, '2017-11-23', 'EXP55', 'Landlord', 'Litzz Apartments', 0, 'Landlord'),
(117, '7000', 0, '2017-11-23', '1015', '30', NULL, 0, 'kamasteve '),
(118, '7200', 0, '2017-12-30', '1014', '22', NULL, 0, 'kamasteve '),
(119, '500', 0, '2017-12-30', '1002', '19', NULL, 0, 'kamasteve '),
(120, '3500', 0, '2017-12-30', '1003', '19', NULL, 0, 'kamasteve ');

-- --------------------------------------------------------

--
-- Table structure for table `bank_accounts`
--

CREATE TABLE `bank_accounts` (
  `id` int(60) NOT NULL,
  `bank_name` varchar(60) NOT NULL,
  `code` varchar(60) NOT NULL,
  `account_number` bigint(255) NOT NULL,
  `address` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `phone` int(60) NOT NULL,
  `location` varchar(60) NOT NULL,
  `country` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank_accounts`
--

INSERT INTO `bank_accounts` (`id`, `bank_name`, `code`, `account_number`, `address`, `email`, `phone`, `location`, `country`) VALUES
(1, 'Equity Bank', '00101', 120162601142, 'Tom Mboya Nairobi', 'info@equitybank.co.ke', 20985458, 'Tom Mboya', 'Kenya'),
(2, 'Kenya Commercial Bank', '00101', 120162601142, 'Karen', 'info@kcb.co.ke', 729477678, 'Tom Mboya', 'Kenya');

-- --------------------------------------------------------

--
-- Table structure for table `cash_register`
--

CREATE TABLE `cash_register` (
  `id` int(60) NOT NULL,
  `debit` varchar(60) NOT NULL,
  `credit` varchar(60) NOT NULL,
  `date` date NOT NULL,
  `user_id` varchar(60) NOT NULL,
  `external_id` varchar(55) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('089804857f96a9dc59b6afcc9e5185a2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.101 Safari/537.36', 1427355864, ''),
('0e8f2a86400b3ef33956914b9b924963', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.101 Safari/537.36', 1427205270, ''),
('224b5bd5248d84ebe20d082eb869a800', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:38.0) Gecko/20100101 Firefox/38.0', 1431946433, ''),
('9dfa1467ac22629b644b168847133e31', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.89 Safari/537.36', 1426593047, ''),
('be0fce860cde1c703930faf8b57a9684', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.115 Safari/537.36', 1426168370, ''),
('e927a7b27271e2e14c0cb40b8dd087c1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.89 Safari/537.36', 1426502919, '');

-- --------------------------------------------------------

--
-- Table structure for table `company_data`
--

CREATE TABLE `company_data` (
  `company_id` int(60) NOT NULL,
  `company_name` varchar(60) NOT NULL,
  `address_1` varchar(60) NOT NULL,
  `adress_2` varchar(60) NOT NULL,
  `phone` int(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `zip` varchar(60) NOT NULL,
  `country` varchar(60) NOT NULL,
  `reg_no` varchar(60) NOT NULL,
  `tax_info` varchar(60) NOT NULL,
  `website` varchar(60) NOT NULL,
  `code` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_data`
--

INSERT INTO `company_data` (`company_id`, `company_name`, `address_1`, `adress_2`, `phone`, `email`, `zip`, `country`, `reg_no`, `tax_info`, `website`, `code`) VALUES
(1, 'Prime properties', '970 Thika', 'kamasteve@gmail.com', 729477678, 'kamasteve@gmail.com', '000123', 'Kenyan', 'GH%6283', 'Adfe2344', 'techisoft.co.ke', ' 01023  ');

-- --------------------------------------------------------

--
-- Table structure for table `credit`
--

CREATE TABLE `credit` (
  `payment_id` int(60) NOT NULL,
  `debit` varchar(60) DEFAULT '0',
  `credit` int(60) NOT NULL DEFAULT '0',
  `date` varchar(60) NOT NULL,
  `invoice_id` varchar(60) NOT NULL,
  `customercode` varchar(45) NOT NULL,
  `property_id` varchar(70) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `responsible` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `credit`
--

INSERT INTO `credit` (`payment_id`, `debit`, `credit`, `date`, `invoice_id`, `customercode`, `property_id`, `status`, `responsible`) VALUES
(2, '0', 6700, '2017-09-13 12:43:36', '1000', '1', '101', 0, 'kamasteve '),
(3, '0', 7000, '2017-09-13 13:15:44', '1001', '9', '101', 0, 'kamasteve '),
(4, '0', 500, '2017-09-13 13:16:19', '1002', '1', '101', 0, 'kamasteve '),
(5, '0', 6500, '2017-09-13 13:31:27', '1003', '1', '101', 0, 'kamasteve '),
(6, '0', 7200, '2017-09-14 06:58:58', '1004', '1', '101', 0, 'kamasteve '),
(7, '0', 6500, '2017-09-14 06:59:31', '1005', '1', '101', 0, 'kamasteve '),
(8, '0', 307043, '2017-09-14 15:05:03', '1006', '1', '101', 0, 'kamasteve '),
(9, '0', 6700, '2017-09-14 15:05:52', '1007', '4', '101', 0, 'kamasteve '),
(10, '0', 6500, '2017-09-14 15:23:18', '1008', '5', '101', 0, 'kamasteve '),
(11, '0', 6500, '2017-09-21 11:43:04', '1009', '1', '101', 0, 'kamasteve '),
(12, '0', 6500, '2017-09-21 11:44:32', '1010', '22', '101', 0, 'kamasteve '),
(13, '0', 6500, '2017-09-21 11:46:36', '1011', '5', '101', 0, 'kamasteve '),
(14, '0', 8900, '2017-09-21 11:52:19', '1012', '5', '101', 0, 'kamasteve '),
(15, '0', 8900, '2017-09-21 15:24:12', '1013', '15', '103', 0, 'kamasteve '),
(16, '0', 7200, '2017-10-20 11:10:02', '1014', '22', '101', 0, 'mwkush '),
(17, '0', 7200, '2017-11-23 16:21:03', '1015', '30', '114', 0, 'kamasteve '),
(18, '0', 0, '2018-02-08 07:15:16', '1016', '4', '101', 0, 'kamasteve ');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `invoice` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address_1` varchar(255) NOT NULL,
  `address_2` varchar(255) NOT NULL,
  `town` varchar(255) NOT NULL,
  `county` varchar(255) NOT NULL,
  `postcode` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `name_ship` varchar(255) NOT NULL,
  `address_1_ship` varchar(255) NOT NULL,
  `address_2_ship` varchar(255) NOT NULL,
  `town_ship` varchar(255) NOT NULL,
  `county_ship` varchar(255) NOT NULL,
  `postcode_ship` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `invoice`, `name`, `email`, `address_1`, `address_2`, `town`, `county`, `postcode`, `phone`, `name_ship`, `address_1_ship`, `address_2_ship`, `town_ship`, `county_ship`, `postcode_ship`) VALUES
(41, '1006', 'James', 'kamasteve13@gmail.com', '889 kimbo', 'q23', 'Thika', 'Muranga', '08724', '0722477334', 'James', '889 kimbo', 'q23', 'Thika', 'Muranga', '08724'),
(42, '1006', 'James', 'kamasteve13@gmail.com', '889 kimbo', 'q23', 'Thika', 'Muranga', '08724', '0722477334', 'James', '889 kimbo', 'q23', 'Thika', 'Muranga', '08724'),
(44, '1010', 'Stephen', 'kamasteve12@gmail.com', 'swdw', 'add', 'ad', 'ddc', 'a1245', '214321', 'Stephen', 'swdw', 'add', 'ad', 'ddc', 'a1245'),
(45, '1011', 'James', 'kamasteve13@gmail.com', '889 kimbo', 'q23', 'Thika', 'Muranga', '08724', '0722477334', 'James', '889 kimbo', 'q23', 'Thika', 'Muranga', '08724'),
(46, '1012', 'James', 'kamasteve13@gmail.com', '889 kimbo', 'q23', 'Thika', 'Muranga', '08724', '0722477334', 'James', '889 kimbo', 'q23', 'Thika', 'Muranga', '08724'),
(47, '1013', 'Stephen', 'kamasteve12@gmail.com', 'swdw', '', 'ad', 'ddc', 'a1245', '214321', 'Stephen', 'swdw', 'add', 'ad', 'ddc', 'a1245'),
(48, '1014', 'Stephen', 'kamasteve12@gmail.com', '889 kimbo', 'q23', 'Thika', 'Muranga', '08724', '0722477334', 'Stephen', '889 kimbo', 'q23', 'Thika', 'Muranga', '08724'),
(49, '1015', 'Stephen', 'kamasteve12@gmail.com', 'swdw', 'q23', 'Thika', 'Muranga', '08724', '0722477334', 'Stephen', 'swdw', 'q23', 'Thika', 'Muranga', '08724'),
(50, '1016', 'Stephen', 'kamasteve12@gmail.com', '889 kimbo', 'q23', 'Thika', 'Muranga', '08724', '0722477334', 'Stephen', '889 kimbo', 'q23', 'Thika', 'Muranga', '08724'),
(51, '1017', 'Stephen', 'kamasteve12@gmail.com', '889 kimbo', 'q23', 'Thika', 'Muranga', '08724', '0722477334', 'Stephen', '889 kimbo', 'q23', 'Thika', 'Muranga', '08724');

-- --------------------------------------------------------

--
-- Table structure for table `deposit`
--

CREATE TABLE `deposit` (
  `ammount` int(100) NOT NULL,
  `date` date NOT NULL,
  `idnumber` int(100) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `property` varchar(60) NOT NULL,
  `unit` varchar(60) NOT NULL,
  `payee` varchar(60) NOT NULL,
  `due_date` varchar(60) NOT NULL,
  `credit` int(60) NOT NULL,
  `details` varchar(250) NOT NULL,
  `responsible` varchar(60) NOT NULL,
  `id` int(60) NOT NULL,
  `date` date DEFAULT NULL,
  `debit` int(60) NOT NULL DEFAULT '0',
  `status` int(60) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`property`, `unit`, `payee`, `due_date`, `credit`, `details`, `responsible`, `id`, `date`, `debit`, `status`) VALUES
('Platinum Plaza', 'PP001', 'James Kariuki', '07/12/2017 12:00 PM', 7000, 'gtr', 'kamasteve ', 39, '2017-07-05', 0, 0),
('Wema Apartments', 'WA001', 'James Kariuki', '10/12/2016', 30000, 'payment for the ', 'kamasteve ', 38, '2017-06-23', 0, 0),
('Aqua Villa', 'J009', 'kamau', '10/12/2016', 7000, 'sdhnfg', 'kamasteve ', 13, NULL, 0, 1),
('Aqua Villa', 'J009', 'kamau', '12', 345, 'rwq', 'kamasteve ', 14, NULL, 0, 1),
('Aqua Villa', 'J010', 'kamau', '10/12/2016', 7000, 'i love this shit', 'kamasteve ', 15, NULL, 0, 0),
('Aqua Villa', 'J009', 'kamau', '12', 345, 'sdcs', 'kamasteve ', 16, NULL, 0, 1),
('Aqua Villa', 'J010', 'kamau', '12', 345, 'afwe', 'kamasteve ', 17, NULL, 0, 0),
('Prime Hostels', '201', 'kamau', '12', 345, 'stgsr', 'kamasteve ', 18, NULL, 0, 0),
('Prime Hostels', '201', 'James Kariuki', '10/12/2016', 7000, 'Payment for the broken lock', 'kamasteve ', 19, NULL, 0, 0),
('Prime Hostels', '201', 'James Kariuki', '10/12/2016', 7000, 'Payment for cleaning', 'kamasteve ', 20, NULL, 0, 0),
('Prime Hostels', '201', 'kamau', '10/12/2016', 7000, 'dfdb ', 'kamasteve ', 21, NULL, 0, 1),
('Prime Hostels', '201', 'kamau', '10/12/2016', 7000, 'sdfergh', 'kamasteve ', 22, NULL, 0, 1),
('Prime Hostels', '201', 'James Kariuki', '10/12/2016', 7000, 'dghhjn', 'kamasteve ', 23, NULL, 0, 0),
('Prime Hostels', '201', 'James Kariuki', '10/12/2016', 7000, 'erhg', 'kamasteve ', 24, NULL, 0, 0),
('Aqua Villa', 'J009', 'kamau', '10/12/2016', 7000, 'trjy', 'kamasteve ', 25, NULL, 0, 0),
('Prime Hostels', '201', 'James Kariuki', '10/12/2016', 7000, 'gfhbf', 'kamasteve ', 26, NULL, 0, 0),
('Aqua Villa', 'J009', 'James Kariuki', '10/12/2016', 7000, 'payment ', 'kamasteve ', 27, NULL, 0, 0),
('Prime Hostels', '201', 'James Kariuki', '10/12/2016', 7000, '24q3qw', 'kamasteve ', 28, NULL, 0, 0),
('Aqua Villa', 'J010', 'Stephen Wangeno', '10/12/2016', 7000, 'this mail is a dummy', 'kamasteve ', 29, NULL, 0, 0),
('Aqua Villa', 'J010', 'Stephen walker', '3/06/2016', 30000, 'payment for water connection', 'kamasteve ', 30, NULL, 0, 0),
('Prime Hostels', '201', 'James Kariuki', '3/06/2016', 7000, 'yyjt', 'kamasteve ', 31, NULL, 0, 0),
('Prime Hostels', '201', 'James Kariuki', '3/06/2016', 7000, 'yyjt', 'kamasteve ', 32, NULL, 0, 0),
('Aqua Villa', 'J010', 'Stephen walker', '10/12/2016', 7000, 'frwe', 'kamasteve ', 33, NULL, 0, 0),
('Prime Hostels', '201', 'James Kariuki', '3/06/2016', 30000, 'werwet', 'kamasteve ', 34, NULL, 0, 0),
('Prime Hostels', '201', 'Stephen walker', '3/06/2016', 30000, 'utf', 'kamasteve ', 35, NULL, 0, 0),
('Aqua Villa', 'J010', 'James Kariuki', '3/06/2016', 7000, 'weg', 'kamasteve ', 36, '2017-03-06', 0, 0),
('Platinum Plaza', 'PP002', 'James Kariuki', '10/12/2016', 7000, 'am now humbled, please work now', 'kamasteve ', 37, '2017-05-09', 0, 0),
('Aqua Villa', 'J001', 'Stephen Kamau', '09/07/2017 11:30 PM', 7000, '45t4th', 'kamasteve ', 40, '2017-09-14', 0, 0),
('Aqua Villa', 'J001', 'Stephen Kamau', '09/12/2017 6:11 PM', 7000, 'ety', 'kamasteve ', 41, '2017-09-14', 0, 0),
('Aqua Villa', 'LDA1234', 'Stephen Kamau', '09/27/2017 1:16 PM', 7000, 'we', 'kamasteve ', 42, '2017-09-28', 0, 0),
('Aqua Villa', 'LDA1234', 'Stephen Kamau', '09/27/2017 1:16 PM', 7000, 'we', 'kamasteve ', 43, '2017-09-28', 0, 0),
('Litzz Apartments', 'LA004', 'Landlord', '10/06/2017 1:15 PM', 7000, 'Marketing vacant houses', 'kamasteve ', 44, '2017-10-13', 0, 0),
('Prime Hostels', '', '', '', 567, 'wdfrf', 'kamasteve ', 45, '2017-10-13', 0, 0),
('Prime Hostels', '', 'Nguru', '', 900, 'wdfrf', 'kamasteve ', 46, '2017-10-13', 0, 0),
('Litzz Apartments', 'LA002', 'Landlord', '', 600, 'Painting a house due for vacation', 'kamasteve ', 47, '2017-10-13', 0, 0),
('Litzz Apartments', 'LA002', 'Landlord', '2017-10-13', 500, 'Painting a house due for vacation', 'kamasteve ', 48, '2017-10-13', 0, 0),
('Litzz Apartments', 'LA003', 'Nguru', '2017-10-13', 6700, 'd  g', 'kamasteve ', 49, '2017-10-13', 0, 0),
('Litzz Apartments', 'LA002', 'Landlord', '2017-10-13', 6700, 'Painting a house due for vacation', 'kamasteve ', 50, '2017-10-13', 0, 0),
('Litzz Apartments', 'LA002', 'Landlord', '2017-10-13', 400, 'Painting a house due for vacation', 'kamasteve ', 51, '2017-10-13', 0, 0),
('Litzz Apartments', 'LA002', 'Landlord', '2017-10-13', 700, 'Painting a house due for vacation', 'kamasteve ', 52, '2017-10-13', 0, 0),
('Prime Hostels', '201', 'Nguru', '2017-10-13', 600, 'wdfrf', 'kamasteve ', 53, '2017-10-13', 0, 0),
('Aqua Villa', 'J002', 'Landlord', '2017-10-20', 1200, '\n\nFactors\nto consider when buying a car boot linerainting', 'mwkush ', 54, '2017-10-20', 0, 1),
('Litzz Apartments', 'LA002', 'Landlord', '2017-11-23', 6000, 'Painting a house due for vacation', 'kamasteve ', 55, '2017-11-23', 0, 1),
('Aqua Villa', 'J001', 'Landlord', '2017-11-23', 700, 'we need paint', 'kamasteve ', 56, '2017-11-23', 0, 0),
('Litzz Apartments', 'LA002', 'Landlord', '11/30/2017 7:27 PM', 7000, 'ft76yuh', 'kamasteve ', 57, '2017-11-23', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `invoice` int(60) NOT NULL,
  `invoice_date` varchar(60) DEFAULT NULL,
  `invoice_due_date` varchar(60) DEFAULT NULL,
  `property` int(60) DEFAULT NULL,
  `id_unit` varchar(60) DEFAULT NULL,
  `subtotal` varchar(55) DEFAULT NULL,
  `shipping` varchar(60) DEFAULT NULL,
  `discount` varchar(60) DEFAULT NULL,
  `vat` varchar(60) DEFAULT NULL,
  `total` varchar(60) DEFAULT NULL,
  `notes` varchar(255) DEFAULT NULL,
  `responsible` varchar(60) DEFAULT NULL,
  `status` varchar(60) NOT NULL DEFAULT 'open',
  `Period` varchar(60) NOT NULL,
  `tenant_name` varchar(60) NOT NULL,
  `tenant_id` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`invoice`, `invoice_date`, `invoice_due_date`, `property`, `id_unit`, `subtotal`, `shipping`, `discount`, `vat`, `total`, `notes`, `responsible`, `status`, `Period`, `tenant_name`, `tenant_id`) VALUES
(1000, '2017/09/13', '2017/09/20', 101, 'J001', '6700.00', '', '0.00', '0.00', '6700.00', '', 'kamasteve ', 'closed', 'May', 'Stephen Kibet', '1000'),
(1001, '2017/09/20', '2017/09/20', 101, 'J009', '7000.00', '', '0.00', '0.00', '7000.00', '', 'kamasteve ', 'closed', 'February', 'peter karanja', '1001'),
(1002, '2017/09/14', '2017/09/07', 101, 'J001', '500.00', '', '0.00', '0.00', '500.00', '', 'kamasteve ', 'closed', 'April', 'Stephen Muiruri', '1002'),
(1003, '2017/09/13', '2017/08/30', 101, 'J001', '6500.00', '', '0.00', '0.00', '6500.00', '', 'kamasteve ', 'open', 'February', 'Stephen Muiruri', '1003'),
(1004, '2017/09/14', '2017/09/28', 101, 'J001', '7200.00', '', '0.00', '0.00', '7200.00', '', 'kamasteve ', 'closed', 'August', 'Stephen Muiruri', '1004'),
(1005, '2017/09/14', '2017/09/21', 101, 'J001', '6500.00', '', '0.00', '0.00', '6500.00', '', 'kamasteve ', 'open', 'September', 'Stephen Muiruri', '1005'),
(1006, '2017/09/14', '2017/09/19', 101, 'J001', '307043.00', '', '0.00', '0.00', '307043.00', '4rt5', 'kamasteve ', 'open', 'August', 'Stephen Muiruri', '1006'),
(1007, '2017/09/21', '2017/09/21', 101, 'J003', '6700.00', '', '0.00', '0.00', '6700.00', '', 'kamasteve ', 'closed', 'September', 'Susan Wankiku', '1007'),
(1008, '2017/09/21', '2017/09/07', 101, 'J002', '6500.00', '', '0.00', '0.00', '6500.00', '', 'kamasteve ', 'closed', 'September', 'Steve Waits', '5'),
(1012, '2017/09/21', '2017/09/28', 101, 'J002', '8900.00', '', '0.00', '0.00', '8900.00', '', 'kamasteve ', 'open', 'October', 'Steve Waits', '5'),
(1009, '2017/09/21', '2017/09/28', 101, 'J001', '6500.00', '', '0.00', '0.00', '6500.00', '', 'kamasteve ', 'closed', 'January', 'Stephen Muiruri', '1009'),
(1010, '2017/09/06', '2017/09/28', 101, 'J011', '6500.00', '', '0.00', '0.00', '6500.00', '', 'kamasteve ', 'closed', 'February', 'Pauline Njoroge', '1010'),
(1011, '2017/09/21', '2017/09/28', 101, 'J002', '6500.00', '', '0.00', '0.00', '6500.00', '', 'kamasteve ', 'open', 'September', 'Steve Waits', '5'),
(1013, '2017/09/21', '2017/10/05', 103, 'LA002', '8900.00', '', '0.00', '0.00', '8900.00', '', 'kamasteve ', 'closed', 'September', 'Stephen Biwott', '20'),
(1014, '2017/10/20', '2017/10/20', 101, 'J011', '7200.00', '', '0.00', '0.00', '7200.00', '', 'mwkush ', 'closed', 'October', 'Pauline Njoroge', '22'),
(1015, '2017/11/23', '2017/12/05', 114, '201PP', '7200.00', '', '0.00', '0.00', '7200.00', 'to be paid before 5th', 'kamasteve ', 'open', 'November', 'Stephen Wanyoro', '30'),
(1016, '2018/02/08', '2018/02/15', 101, 'J003', '0.00', '', '0.00', '0.00', '0.00', '', 'kamasteve ', 'open', 'December', 'Susan Wankiku', '4');

-- --------------------------------------------------------

--
-- Table structure for table `invoices_backup`
--

CREATE TABLE `invoices_backup` (
  `invoice` int(60) NOT NULL,
  `invoice_date` varchar(60) DEFAULT NULL,
  `invoice_due_date` varchar(60) DEFAULT NULL,
  `property` int(60) DEFAULT NULL,
  `id_unit` varchar(60) DEFAULT NULL,
  `subtotal` varchar(55) DEFAULT NULL,
  `shipping` varchar(60) DEFAULT NULL,
  `discount` varchar(60) DEFAULT NULL,
  `vat` varchar(60) DEFAULT NULL,
  `total` varchar(60) DEFAULT NULL,
  `notes` varchar(255) DEFAULT NULL,
  `responsible` varchar(60) DEFAULT NULL,
  `status` varchar(60) NOT NULL DEFAULT 'open'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoices_backup`
--

INSERT INTO `invoices_backup` (`invoice`, `invoice_date`, `invoice_due_date`, `property`, `id_unit`, `subtotal`, `shipping`, `discount`, `vat`, `total`, `notes`, `responsible`, `status`) VALUES
(1000, '25/01/2017', '26/01/2017', 101, 'J001', '7000.00', '', '0.00', '0.00', '7000.00', '', 'kamasteve ', 'open'),
(1005, '20/01/2017', '26/01/2017', 101, 'J008', '6500.00', '', '0.00', '0.00', '6500.00', '', 'kamasteve ', 'open');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_items`
--

CREATE TABLE `invoice_items` (
  `id` int(11) NOT NULL,
  `invoice` varchar(255) NOT NULL,
  `product` text NOT NULL,
  `qty` int(11) NOT NULL,
  `price` varchar(255) NOT NULL,
  `discount` varchar(255) NOT NULL,
  `subtotal` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice_items`
--

INSERT INTO `invoice_items` (`id`, `invoice`, `product`, `qty`, `price`, `discount`, `subtotal`) VALUES
(1, '1', '1', 1, '7000', '', '7000.00'),
(2, '1033', '1', 1, '250', '', '250.00'),
(3, '1', 'electricity', 1, '250', '', '250.00'),
(4, '0', 'water', 1, '7000', '', '7000.00'),
(5, '3', 'rent', 1, '500', '', '500.00'),
(6, '1037', 'rent', 1, '7000', '', '7000.00'),
(7, '1037', 'water', 1, '250', '', '250.00'),
(8, '1037', 'electricity', 1, '1000', '', '1000.00'),
(9, '1000', 'electricity', 1, '500', '', '500.00'),
(10, '1000', 'water', 1, '200', '', '200.00'),
(11, '1000', 'garbage', 1, '7000', '', '7000.00'),
(12, '1001', 'water', 1, '1000', '', '1000.00'),
(13, '1001', 'rent', 1, '500', '', '500.00'),
(14, '1001', 'electricity', 1, '250', '', '250.00'),
(15, '1002', 'water', 1, '7000', '', '7000.00'),
(16, '1002', 'Electricity', 1, '500', '', '500.00'),
(17, '1003', 'electricity', 1, '7000', '', '7000.00'),
(18, '1004', 'electricity', 1, '7000', '900', '6100.00'),
(19, '1005', 'electricity', 1, '500', '', '500.00'),
(20, '1006', 'electricity', 1, '7000', '', '7000.00'),
(21, '1007', 'electricity', 1, '7000', '', '7000.00'),
(22, '1008', 'electricity', 1, '7000', '', '7000.00'),
(23, '1009', 'electricity', 1, '7000', '', '7000.00'),
(24, '1009', 'Water', 1, '250', '', '250.00'),
(25, '1010', 'electricity', 1, '7000', '', '7000.00'),
(26, '1011', 'electricity', 1, '7000', '', '7000.00'),
(27, '1012', 'electricity', 1, '', '9000', 'NaN'),
(28, '1013', 'Electricity', 1, '7000', '', '7000.00'),
(29, '1013', '', 1, '', '', '0.00'),
(30, '1013', '', 1, '', '', '0.00'),
(31, '1014', 'water', 1, '7000', '', '7000.00'),
(32, '1014', 'rent', 1, '6500', '', '6500.00'),
(33, '1015', 'water', 1, '7000', '', '7000.00'),
(34, '1016', 'Electricity', 1, '7000', '', '7000.00'),
(35, '1016', 'rent', 1, '1000', '', '1000.00'),
(36, '1016', 'Electricity', 1, '1000', '', '1000.00'),
(37, '1017', 'Water', 1, '7000', '', '7000.00'),
(38, '1017', 'rent', 1, '8900', '', '8900.00'),
(39, '1018', 'Water', 1, '7000', '', '7000.00'),
(40, '1018', 'rent', 1, '7000', '', '7000.00'),
(41, '1018', 'Rent', 1, '8900', '', '8900.00'),
(42, '1018', 'garbage', 1, '250', '', '250.00'),
(43, '1019', 'electricity', 1, '7000', '9000', '-2000.00'),
(44, '1019', 'rent', 1, '8900', '', '8900.00'),
(45, '1020', 'electricity', 1, '7000', '', '7000.00'),
(46, '1021', 'electricity', 1, '7000', '', '7000.00'),
(47, '1022', 'electricity', 1, '7000', '900', '6100.00'),
(48, '1023', 'electricity', 1, '7000', '', '7000.00'),
(49, '1024', 'rent', 1, '8900', '', '8900.00'),
(50, '1025', 'electricity', 1, '7000', '', '7000.00'),
(51, '1026', 'electricity', 1, '7000', '', '7000.00'),
(52, '1027', 'rent', 1, '8900', '', '8900.00'),
(53, '1028', 'water', 1, '250', '', '250.00'),
(54, '1029', 'electricity', 1, '7000', '', '7000.00'),
(55, '1030', 'water', 1, '250', '', '250.00'),
(56, '1031', 'water', 1, '250', '', '250.00'),
(57, '1032', 'Electricity', 1, '500', '', '500.00'),
(58, '1033', 'Electricity', 1, '7000', '', '7000.00'),
(59, '1034', 'Water', 1, '500', '', '500.00'),
(60, '1035', 'Water', 1, '8900', '', '8900.00'),
(61, '1036', 'Electricity', 1, '250', '', '250.00'),
(62, '1037', 'rent', 1, '1000', '', '1000.00'),
(63, '1037', 'water', 1, '500', '', '500.00'),
(64, '1037', 'Electricity', 1, '1000', '', '1000.00'),
(65, '1038', 'rent', 1, '7000', '', '7000.00'),
(66, '1039', 'Water', 1, '500', '', '500.00'),
(67, '1040', 'Water', 1, '500', '', '500.00'),
(68, '1041', 'Water', 1, '500', '', '500.00'),
(69, '1042', 'Water', 1, '500', '', '500.00'),
(70, '1043', 'Water', 1, '500', '', '500.00'),
(71, '1044', 'Water', 1, '500', '', '500.00'),
(72, '1044', 'rent', 1, '6500', '', '6500.00'),
(73, '1044', 'electricity', 1, '500', '', '500.00'),
(74, '1045', 'Water', 1, '500', '', '500.00'),
(75, '1045', 'electricity', 1, '500', '', '500.00'),
(76, '1045', 'rent', 1, '6500', '', '6500.00'),
(77, '1046', 'electricity', 1, '500', '', '500.00'),
(78, '1046', 'Water', 1, '6500', '', '6500.00'),
(79, '1047', 'Water', 1, '500', '', '500.00'),
(80, '1047', 'Electricity', 1, '300', '', '300.00'),
(81, '1047', 'Rent', 1, '8900', '', '8900.00'),
(82, '1048', 'Water', 1, '500', '', '500.00'),
(83, '1048', 'electricity', 1, '500', '', '500.00'),
(84, '1048', 'rent', 1, '8900', '', '8900.00'),
(85, '1049', 'Electricity', 1, '500', '', '500.00'),
(86, '1050', 'Water', 1, '6500', '', '6500.00'),
(87, '1050', 'electricity', 1, '500', '', '500.00'),
(88, '1050', 'Water', 1, '8900', '', '8900.00'),
(89, '1051', 'Water', 1, '6500', '', '6500.00'),
(90, '1051', 'electricity', 1, '500', '', '500.00'),
(91, '1051', 'Rent', 1, '6500', '', '6500.00'),
(92, '1000', 'Rent', 1, '8900', '', '8900.00'),
(93, '1000', 'Water', 1, '500', '', '500.00'),
(94, '1000', 'Electricity', 1, '300', '', '300.00'),
(95, '1001', 'electricity', 1, '500', '', '500.00'),
(96, '1001', 'Rent', 1, '500', '', '500.00'),
(97, '1001', 'Water', 1, '6500', '', '6500.00'),
(98, '1002', 'electricity', 1, '500', '', '500.00'),
(99, '1002', 'Water', 1, '300', '', '300.00'),
(100, '1002', 'Rent', 1, '8900', '', '8900.00'),
(101, '1003', 'Water', 1, '500', '', '500.00'),
(102, '1003', 'electricity', 1, '500', '', '500.00'),
(103, '1003', 'Rent', 1, '6500', '', '6500.00'),
(104, '1004', 'Rent', 1, '6500', '', '6500.00'),
(105, '1004', 'Water', 1, '200', '', '200.00'),
(106, '1004', 'Electricity', 1, '500', '', '500.00'),
(107, '1005', 'Water', 1, '6500', '', '6500.00'),
(108, '1005', 'electricity', 1, '500', '', '500.00'),
(109, '1006', 'Water', 1, '500', '', '500.00'),
(110, '1006', 'electricity', 1, '200', '', '200.00'),
(111, '1006', 'Rent', 1, '6500', '', '6500.00'),
(112, '1007', 'Water', 1, '6500', '', '6500.00'),
(113, '1007', 'electricity', 1, '500', '', '500.00'),
(114, '1008', 'Water', 1, '6500', '', '6500.00'),
(115, '1008', 'Electricity', 1, '6500', '', '6500.00'),
(116, '1009', 'Water', 1, '500', '', '500.00'),
(117, '1009', 'Electricity', 1, '200', '', '200.00'),
(118, '1009', 'Rent', 1, '8900', '', '8900.00'),
(119, '1000', 'Water', 1, '500', '', '500.00'),
(120, '1000', 'electricity', 1, '6500', '', '6500.00'),
(121, '1000', 'Water', 1, '200', '', '200.00'),
(122, '1001', 'Electricity', 1, '6500', '', '6500.00'),
(123, '1001', 'Rent', 1, '500', '', '500.00'),
(124, '1001', '', 1, '', '', '0.00'),
(125, '1002', 'Water', 1, '500', '', '500.00'),
(126, '1003', 'electricity', 1, '6500', '', '6500.00'),
(127, '1004', 'Water', 1, '200', '', '200.00'),
(128, '1004', 'electricity', 1, '500', '', '500.00'),
(129, '1004', 'Rent', 1, '6500', '', '6500.00'),
(130, '1005', 'Rent', 1, '6500', '', '6500.00'),
(131, '1006', 'Rent', 1, '6500', '', '6500.00'),
(132, '1006', 'electricity', 1, '200', '', '200.00'),
(133, '1006', 'Water', 1, '300343r', '', '300343.00'),
(134, '1007', 'Rent', 1, '6500', '', '6500.00'),
(135, '1007', 'electricity', 1, '200', '', '200.00'),
(136, '1008', 'Rent', 1, '6500', '', '6500.00'),
(137, '1009', 'Rent', 1, '6500', '', '6500.00'),
(138, '1010', 'Rent', 1, '6500', '', '6500.00'),
(139, '1011', 'Rent', 1, '6500', '', '6500.00'),
(140, '1012', 'Rent', 1, '8900', '', '8900.00'),
(141, '1013', 'Rent', 1, '8900', '', '8900.00'),
(142, '1014', 'Rent', 1, '6500', '', '6500.00'),
(143, '1014', 'Water', 1, '200', '', '200.00'),
(144, '1014', 'electricity', 1, '500', '', '500.00'),
(145, '1015', 'Rent', 1, '6500', '', '6500.00'),
(146, '1015', 'Water', 1, '200', '', '200.00'),
(147, '1015', 'Garbage', 1, '500', '', '500.00'),
(148, '1016', 'Water', 1, '', '', '0.00'),
(149, '1016', 'Rent', 1, '', '', '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_logs`
--

CREATE TABLE `invoice_logs` (
  `invoice` int(60) NOT NULL,
  `invoice_date` varchar(60) DEFAULT NULL,
  `invoice_due_date` varchar(60) DEFAULT NULL,
  `property` int(60) DEFAULT NULL,
  `id_unit` varchar(60) DEFAULT NULL,
  `subtotal` varchar(55) DEFAULT NULL,
  `shipping` varchar(60) DEFAULT NULL,
  `discount` varchar(60) DEFAULT NULL,
  `vat` varchar(60) DEFAULT NULL,
  `total` varchar(60) DEFAULT NULL,
  `notes` varchar(255) DEFAULT NULL,
  `responsible` varchar(60) DEFAULT NULL,
  `status` varchar(60) NOT NULL DEFAULT 'open'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice_logs`
--

INSERT INTO `invoice_logs` (`invoice`, `invoice_date`, `invoice_due_date`, `property`, `id_unit`, `subtotal`, `shipping`, `discount`, `vat`, `total`, `notes`, `responsible`, `status`) VALUES
(1006, '18/05/2017', '25/05/2017', 102, '201', '7000.00', '', '0.00', '0.00', '7000.00', '', 'kamasteve ', 'open'),
(1012, '08/06/2017', '01/06/2017', 103, 'LA004', 'NaN', '', 'NaN', 'NaN', 'NaN', '', 'kamasteve ', 'open');

-- --------------------------------------------------------

--
-- Table structure for table `maintenance`
--

CREATE TABLE `maintenance` (
  `id` int(60) NOT NULL,
  `property` varchar(60) NOT NULL,
  `unit` varchar(60) NOT NULL,
  `requester` varchar(60) NOT NULL,
  `payee` varchar(60) NOT NULL,
  `responsible` varchar(60) NOT NULL,
  `date` varchar(60) NOT NULL,
  `priority` varchar(60) NOT NULL,
  `details` varchar(2000) NOT NULL,
  `status` int(60) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maintenance`
--

INSERT INTO `maintenance` (`id`, `property`, `unit`, `requester`, `payee`, `responsible`, `date`, `priority`, `details`, `status`) VALUES
(1, 'Prime Hostels', '201', 'Ngui', 'Nguru', 'kamasteve ', '2017/10/12', 'High', 'wdfrf', 1),
(2, 'Litzz Apartments', 'LA002', 'Kamau', 'Landlord', 'kamasteve ', '2017/10/13', 'Normal', 'Painting a house due for vacation', 1),
(3, 'Litzz Apartments', 'LA003', 'Kamau', 'Nguru', 'kamasteve ', '2017/10/20', 'High', 'd  g', 0),
(4, 'Aqua Villa', 'J002', 'Kamau', 'Nguru', 'kamasteve ', '2017/10/20', 'High', 'Payment for cleaning services', 0),
(5, 'Aqua Villa', 'J002', 'Kamau', 'Landlord', 'mwkush ', '2017/10/27', 'Normal', '\r\n\r\nFactors\r\nto consider when buying a car boot linerainting', 1),
(6, 'Prime Hostels', '201', 'Kamau', 'Landlord', 'kamasteve ', '2017/11/23', 'Critical', 'just to check', 0),
(7, 'Aqua Villa', 'J001', 'Kamau', 'Landlord', 'kamasteve ', '2017/11/30', 'High', 'painting', 1);

-- --------------------------------------------------------

--
-- Table structure for table `menu_details`
--

CREATE TABLE `menu_details` (
  `menu_id` int(60) NOT NULL,
  `MENU_URL` varchar(60) NOT NULL,
  `DISPLAY_STRING` varchar(60) NOT NULL,
  `MENU_ICON` varchar(60) NOT NULL,
  `PARENT_MENU_ID` int(60) NOT NULL,
  `DOCUMENT_FILE_NAME` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_details`
--

INSERT INTO `menu_details` (`menu_id`, `MENU_URL`, `DISPLAY_STRING`, `MENU_ICON`, `PARENT_MENU_ID`, `DOCUMENT_FILE_NAME`) VALUES
(1, 'invoice.php', 'Invoices', 'glyphicon glyphicon-home', 2, 'List of all invoices'),
(2, 'creat_invoice.php', 'Create Invoice', 'glyphicon-picture', 2, 'Create new invoice'),
(3, 'invoice-list.php', 'Manage Invoices', 'glyphicon-picture', 2, 'Manage all Invoices'),
(4, 'payments.php', 'Payments', 'glyphicon-list-alt', 2, 'Create New Payments'),
(5, 'edit_payments.php', 'Edit Payments', 'glyphicon-list-alt', 2, 'Edit Payments'),
(6, 'bank_accounts.php', 'Bank Accounts', 'glyphicon-list-alt', 2, 'Bank Accounts'),
(7, 'reconcile_accounts.php', 'Bank reconciliation', 'glyphicon-list-alt', 2, 'Bank reconciliation'),
(8, 'newexpense.php', 'Add expense', 'glyphicon-plus', 2, 'Add expenses'),
(9, 'expenses.php', 'Manage Epenses', 'glyphicon-th-list', 2, 'Manage Epenses'),
(10, 'mpesa.php', 'Mpesa Payments', 'glyphicon-picture', 2, 'Mpesa Payments'),
(11, 'main.php', 'Dashboard', 'glyphicon glyphicon-home', 1, 'Dashboard'),
(12, 'profile.php', 'Profile', 'glyphicon glyphicon-user', 1, 'Profile'),
(13, 'editprofile.php', 'Edit profile', 'glyphicon glyphicon-edit', 1, 'Edit profile'),
(14, 'register.php', 'Add User', 'glyphicon glyphicon-plus', 1, 'Add User'),
(15, 'manage_users.php', 'Manage Users', 'glyphicon glyphicon-edit', 1, 'Manage Users'),
(16, 'company_data.php', 'Edit Company Data', 'glyphicon glyphicon-tower', 1, 'Edit Company Data'),
(17, 'user_role.php', 'Create User Role', 'glyphicon glyphicon-envelope', 1, 'Create User Role'),
(18, 'apartments.php', 'All Apartments', 'glyphicon glyphicon-check', 3, 'All Apartments'),
(19, 'tenants1.php', 'Tenants', 'glyphicon glyphicon-file', 3, 'Tenants'),
(20, 'leased_apartments.php', 'Leased Apartments', 'glyphicon glyphicon-lock', 3, 'Leased Apartments'),
(21, 'vacant_apartments.php', 'Vacant Apartments', 'glyphicon glyphicon-edit', 3, 'Vacant Apartments'),
(22, 'landlord.php', 'Property Owners', 'glyphicon glyphicon-user', 3, 'Property Owners'),
(23, 'new_tenant.php', 'Add New Tenants', 'glyphicon glyphicon-list-alt', 3, 'Add New Tenants'),
(24, 'add_property.php', 'Add New Property', 'glyphicon glyphicon-plus-sign', 3, 'Add New Property'),
(25, 'leases.php', 'Lease Agreaments', 'glyphicon glyphicon-file', 3, 'Lease Agreaments'),
(26, 'maintenance_request.php', 'New Maintenance Requests', 'glyphicon glyphicon-wrench', 3, 'New Maintenance Requests'),
(27, 'maintenance.php', 'Maintenance Requests', 'glyphicon glyphicon-th', 3, 'Maintenance Requests'),
(28, 'account_statement.php', 'Rent Payement', 'glyphicon glyphicon-align-justify', 4, 'Rent Payement'),
(29, 'tenant_statement.php', 'Tenant Account Statement', 'glyphicon glyphicon-user', 4, 'Tenant Account Statement'),
(30, 'payments_due.php', 'Payments Due', 'glyphicon glyphicon-calendar', 4, 'Payments Due'),
(31, 'breakdown.php', 'Rent Payement Summary', 'glyphicon glyphicon-stats', 4, 'Rent Payement Summary'),
(32, 'entries.php', 'Entries Analysis', 'glyphicon glyphicon-pie-chart', 4, 'Entries Analysis'),
(33, 'account_payable.php', 'Account Payable', 'glyphicon glyphicon-calendar', 4, 'Account Payable');

-- --------------------------------------------------------

--
-- Table structure for table `menu_role_map`
--

CREATE TABLE `menu_role_map` (
  `map_id` int(60) NOT NULL,
  `user_role` varchar(60) NOT NULL,
  `role_id` int(60) NOT NULL,
  `munu_id` int(60) NOT NULL,
  `parent` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_role_map`
--

INSERT INTO `menu_role_map` (`map_id`, `user_role`, `role_id`, `munu_id`, `parent`) VALUES
(2, '1', 5, 34, '2'),
(3, '3', 8, 34, '2'),
(4, '3', 15, 78, '1'),
(5, '3', 11, 23456, '1'),
(6, '3', 12, 455, '1'),
(7, '3', 13, 45, '1');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `owner_id` int(11) NOT NULL,
  `owner_name` varchar(100) NOT NULL,
  `owner_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`owner_id`, `owner_name`, `owner_status`) VALUES
(1, 'Manoj', 1),
(2, 'Verma', 1),
(3, 'Stephen Kamau', 1),
(123, 'kamau', 1),
(124, 'moreen', 1);

-- --------------------------------------------------------

--
-- Table structure for table `parent_menu`
--

CREATE TABLE `parent_menu` (
  `menu_id` int(60) NOT NULL,
  `name` varchar(60) DEFAULT NULL,
  `menu_icon` varchar(60) DEFAULT NULL,
  `description` varchar(60) DEFAULT NULL,
  `url` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parent_menu`
--

INSERT INTO `parent_menu` (`menu_id`, `name`, `menu_icon`, `description`, `url`) VALUES
(1, 'Home', 'glyphicon glyphicon-home', 'Default login menu page', 'main.php'),
(2, 'Accounting', 'glyphicon glyphicons-stats', 'Accounting module', 'invoice.php'),
(3, 'Property Management', 'glyphicon glyphicons-building', 'Property Management', 'tenants1.php'),
(4, 'Reports', 'glyphicon glyphicons-pie-chart', 'reports', 'account_statement.php');

-- --------------------------------------------------------

--
-- Table structure for table `pesapi_account`
--

CREATE TABLE `pesapi_account` (
  `id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `identifier` varchar(255) NOT NULL,
  `push_in` tinyint(1) NOT NULL,
  `push_out` tinyint(1) NOT NULL,
  `push_neutral` tinyint(1) NOT NULL,
  `settings` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pesapi_payment`
--

CREATE TABLE `pesapi_payment` (
  `id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `super_type` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `receipt` varchar(255) NOT NULL,
  `time` datetime NOT NULL,
  `phonenumber` varchar(45) NOT NULL,
  `name` varchar(255) NOT NULL,
  `account` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `amount` bigint(20) NOT NULL,
  `post_balance` bigint(20) NOT NULL,
  `note` varchar(255) NOT NULL,
  `transaction_cost` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` text NOT NULL,
  `product_desc` text NOT NULL,
  `product_price` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `property_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `zip` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `add_date` varchar(100) NOT NULL,
  `county` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `contact` varchar(60) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`property_id`, `name`, `year`, `type`, `address`, `city`, `zip`, `country`, `add_date`, `county`, `location`, `contact`) VALUES
(101, 'Aqua Villa', '2017', 'Apartment', 'Kimbo 32', 'Nairobi', '0010', 'Kenya', '2017-01-26 08:38:47', 'Nairobi', 'Kimbo', '0729477335'),
(102, 'Prime Hostels', '2013', 'Rental', '970 Thika', 'Nairobi', '01012', 'Kenya', '2017-02-13 08:33:02', 'Kiambu', 'maragua', NULL),
(103, 'Litzz Apartments', '1999', 'Rental', 'thika 1234', 'Thika', '01000', 'Kenya', '2017-03-06 10:19:38', 'Muranga', 'Ruiru', NULL),
(104, 'Aqua Villa Ruiru', '2013', 'rantal', '45 Kimbo', 'Nairobi', '01012', 'Kenya', '2017-04-10 09:09:49', 'Muranga', 'Ruiru', NULL),
(105, 'Platinum Plaza', '2016', 'Commercial', '0100', 'Nairobi', '01000', 'Kenya', '2017-04-11 12:10:02', 'Nairobi', 'Westlands', NULL),
(106, 'Westgate Hostels', '2009', 'Rental', 'KM Road', 'Nairobi', '0123', 'Kenya', '2017-04-11 12:48:01', 'Kiambu', 'KM', '0729477334'),
(107, 'Wema Apartments', '2009', 'Rental', '970 Thika', 'Nairobi', '01000', 'Kirinyaga', '2017-04-11 12:54:49', 'Kirinyaga', 'Mwea', NULL),
(108, 'Westgate Hostels', '2009', 'Rental', 'KM Road', 'Nairobi', '0123', 'Kenya', '2017-04-11 13:01:32', 'Muranga', 'Kenol', NULL),
(109, 'Crystal Apartments', '2009', 'Rental', '970 Thika', 'Thika', '01000', 'Kenya', '2017-04-11 13:11:32', 'Kiambu', 'maragua', NULL),
(110, 'Kenya Plaza', '2009', 'Rental', '970 Thika', 'Thika', '01012', 'Kenya', '2017-06-29 08:28:43', 'Nairobi', 'Westlands', NULL),
(111, 'Precious Shiroh', '2008', 'Rental', '970', 'Ruiru', '00012', 'Kenyan', '2017-08-05 18:39:12', 'Kiambu', 'Ruiru', NULL),
(112, 'Precious Shiroh', '2008', 'Rental', '970', 'Ruiru', '00012', 'Kenyan', '2017-08-30 13:33:56', 'Kiambu', 'Ruiru', NULL),
(113, 'Mwituria Plaza', '2008', 'Rental', '970', 'Ruiru', '00012', 'Kenyan', '2017-09-14 08:29:37', 'Kiambu', 'Ruiru', NULL),
(114, 'Prime properties', '2008', 'Rental', 'Karen', 'Nairobi', '00012', 'Kenyan', '2017-11-23 16:02:05', 'Nairobi', 'Ruiru', '0738494834');

-- --------------------------------------------------------

--
-- Table structure for table `property_owners`
--

CREATE TABLE `property_owners` (
  `property` varchar(80) NOT NULL,
  `fname` varchar(60) NOT NULL,
  `mname` varchar(60) NOT NULL,
  `lname` varchar(60) NOT NULL,
  `id_number` int(60) NOT NULL,
  `adres` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `mobile` int(60) NOT NULL,
  `bank` varchar(60) NOT NULL,
  `branch` varchar(60) NOT NULL,
  `account_name` varchar(60) NOT NULL,
  `nationality` varchar(60) NOT NULL,
  `id` int(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property_owners`
--

INSERT INTO `property_owners` (`property`, `fname`, `mname`, `lname`, `id_number`, `adres`, `email`, `mobile`, `bank`, `branch`, `account_name`, `nationality`, `id`) VALUES
('Aqua Villa', 'Admin', 'Wamae', 'Admin', 23567289, '970 Thika', 'peterwanyoro@gmail.com', 234, 'Equity Bank', '4356', '35', 'y65', 1),
('Prime properties', 'Peter', 'maina', 'Admin', 23567289, '970 Thika', 'peterwanyoro@gmail.com', 234, 'Equity Bank', '4356', '35', 'y65', 2);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` int(100) NOT NULL,
  `activation` varchar(100) NOT NULL,
  `username` varchar(200) NOT NULL,
  `role` varchar(75) NOT NULL,
  `company` varchar(75) DEFAULT NULL,
  `user_id` int(60) NOT NULL,
  `status` varchar(60) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`fname`, `lname`, `nationality`, `email`, `password`, `phone`, `activation`, `username`, `role`, `company`, `user_id`, `status`) VALUES
('grace', 'Wairimu', 'Kenyan', 'gracewairimu@gmail.com', '1234567890', 1234567890, '2027cf183462d514c91e74c75daa302c', 'gracemontedetony', 'user', 'Techisoft Solutions', 2, 'active'),
('Jonathan', 'Kibet', 'Kenyan', 'jkkibet@telkom.co.ke', '123456', 1234567890, '92baed5312988034656f642af9b114de', 'jkkibet', 'user', 'Techisoft Solutions', 3, 'active'),
('James ', 'Mwangi', 'kenyan', 'jtmwangi@gmail.com', 'jemo123', 720422910, '204987dedf5128807c60175ee3a72e6e', 'jemo123', 'admin', 'Techisoft Solutions', 4, 'active'),
('Stephen', 'Muiruri', 'Kenyan', 'kamasteve134@gmail.com', '0987654321', 1234567890, '6ccb5d2778e76fc8c5db022820959f3d', 'gracemontedetonyo', 'user', NULL, 6, 'active'),
('Stephen', 'kamau', 'Kenyan', 'kamasteve136@gmail.com', 'kamah4778', 729477678, '', 'kamasteve', '', 'Techisoft Solutions', 7, 'active'),
('Stephen', 'kamau', 'Kenyan', 'kamasteve165@gmail.com', 'kamah4778', 729477678, 'b23386a37442f47b39e0a932badcc938', 'kamastevesdjf', 'admin', 'Techisoft Solutions', 8, 'active'),
('Stephen', 'Muiruri', 'Kenyan', 'kamasteve19@gmail.com', 'kamah4778', 1234567890, '067ab1a51cfe1dee668eaf3c19b0ad1c', 'jamesmwangigi', 'user', NULL, 12, 'active'),
('kande ', 'steve', 'Kenyan', 'kandesteve@gmail.com', '1234567890', 1234567890, '85f387be50d64a830030e02e5209d639', 'kandesteveee', 'user', NULL, 14, 'active'),
('Stephen', 'Kibet', 'Kenyan', 'skkibe@telkom.co.ke', '123456789', 729477678, 'ae136279c01c88c62b47b8f563a5f1f2', 'skkibet', 'user', NULL, 15, 'active'),
('Stephen', 'Muiruri', 'Kenyan', 'snkamau1@telkom.co.ke', '@Stevewaits4778', 729477678, 'a3c45fae6ee4f0e5f895070495c29cf5', 'snkamau1', 'admin', NULL, 16, 'active'),
('Stephen', 'Muiruri', 'Kenyan', 'snkamau@telkom.co.ke', '@Stevewaits4778', 729477678, '505b65004a5ec4f4531f07bed5a9c921', 'snkamau', '2', '', 17, 'active'),
('tom', 'okila', 'Kenyan', 'tokila@telkom.co.ke', '12345678', 1234567890, 'c8828847be4d8c796e2df0da2e47f0c5', 'tokila', 'user', NULL, 18, 'active'),
('stephen', 'ngugi', 'Kenyan', 'kamasteve13@gmail.com', 'kamah4778', 729477334, '8fc09df4669057d1544b16b93a12c65f', 'kamau', 'user', NULL, 19, 'active'),
('Moreen', 'Wanjiku', 'Kenyan', 'mwkush@gmail.com', 'mwkush123', 720422910, '5c25bc1507d2486bbe6222c40bb4cca3', 'mwkush', 'user', NULL, 22, 'active'),
('Stephen', 'Muiruri', 'Kenyan', 'peterwanyoro@gmail.com', '1234567890', 3457, 'abcd6ca852f07d0a08abcce4358ada49', 'quiwoeo', 'user', NULL, 24, 'active'),
('james', 'Thuku', 'Kenyan', 'jmthuku@gmail.com', 'jm123456', 729477678, '777680108d7de5faf6be135c13645f6c', 'jmthuku', 'user', NULL, 25, 'active'),
('Stephen', 'Muiruri', 'Kenyan', 'snwarururu@gmail.com', 'SNwaruru@123', 729477678, 'dd85db0896f01c536ca855a454cb8f27', 'snwarurur', '1', NULL, 27, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `rental_units`
--

CREATE TABLE `rental_units` (
  `property_id` varchar(255) NOT NULL,
  `unit_id` varchar(100) NOT NULL,
  `unit_type` varchar(100) NOT NULL,
  `bed` varchar(100) NOT NULL,
  `rent` varchar(100) NOT NULL,
  `status` tinyint(8) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rental_units`
--

INSERT INTO `rental_units` (`property_id`, `unit_id`, `unit_type`, `bed`, `rent`, `status`) VALUES
('110', 'KP9800', '1 Bedroom', '4', '16000', 0),
('109', 'CA001', '2 bedroom', '2', '16000', 0),
('107', 'WA001', '1 Bedroom', '1', '16000', 0),
('106', 'WH003', '3 bedroom', '3', '16000', 0),
('106', 'WH002', '2 bedroom', '2', '13000', 0),
('106', 'WH001', '1 Bedroom', '1', '12000', 0),
('105', 'PP002', 'Comercial', '0', '120000', 0),
('105', 'PP001', 'Comercial', '0', '86000', 0),
('104', 'AV001', '2 bedroom', '2', '25000', 1),
('103', 'LA002', '1 Bedroom', '1', '13000', 1),
('103', 'LA003', '1 Bedroom', '1', '13000', 1),
('103', 'LA004', '1 Bedroom', '1', '13000', 1),
('103', 'LA005', '1 Bedroom', '1', '13000', 0),
('103', 'LA006', 'bedsitter', '1', '6500', 0),
('103', 'LA007', 'bedsitter', '1', '6500', 0),
('103', 'LA001', '2 bedroom', '2', '16000', 0),
('102', '201', '1 Bedroom', '1', '20000', 0),
('101', 'J001', 'Bedsitter', '1', '6800', 0),
('101', 'J002', 'Bedsitter', '1', '6500', 0),
('101', 'J003', 'Bedsitter', '1', '6500', 0),
('101', 'J004', '1 Bedroom', '1', '12000', 1),
('101', 'J005', 'Bedsitter', '1', '6900', 0),
('101', 'J006', '4 Bedroom', '4', '25000', 0),
('101', 'J007', '3 Bedroom', '3', '25000', 1),
('101', 'J008', '2 Bedroom', '2', '16000', 0),
('101', 'J009', '1 Bebdroom', '1', '17000', 0),
('101', 'J010', 'Bedsitter', '1', '14000', 0),
('111', 'Bedsitter', 'Rental', '1', '6500', 1),
('111', '1 Bedroom', 'Rental', '1', '13000', 0),
('111', '2 Bedroom', 'Rental', '2', '17000', 0),
('111', '3 Bedroom', 'Rental', '2', '23000', 0),
('101  ', 'J012', '2 Bedroom', '2', '18000', 0),
('101  ', 'J011', '2 Bedroom', '2', '24000', 1),
('108  ', 'Wg2008', '2 Bedroom', '2', '18000', 1),
('108  ', 'Wg2018', '2 Bedroom', '2', '18000', 0),
('108  ', 'Wg2048', '2 Bedroom', '2', '18000', 0),
('108  ', 'Wg2011', '2 Bedroom', '1', '13000', 0),
('108  ', 'Wg2012', '2 Bedroom', '1', '13000', 0),
('108  ', 'Wg2013', '2 Bedroom', '1', '13000', 0),
('108  ', 'Wg2014', '2 Bedroom', '1', '13000', 0),
('108  ', 'Wg2015', '2 Bedroom', '1', '13000', 0),
('108  ', 'Wg2016', '2 Bedroom', '1', '13000', 0),
('108  ', 'Wg2017', '2 Bedroom', '1', '13000', 0),
('108  ', 'Wg2019', '2 Bedroom', '1', '13000', 0),
('108  ', 'Wg2020', '2 Bedroom', '1', '13000', 0),
('113', 'MP702', 'Rental', '2', '13000', 0),
('101  ', 'j0078', '2 Bedroom', '2', '13000', 0),
('114', '201PP', '1 BEDROOM', '2', '13000', 0),
('114', '202PP', '1 BEDROOM', '1', '6500', 0),
('114  ', '203PP', '2 Bedroom', '2', '56000', 0);

-- --------------------------------------------------------

--
-- Table structure for table `rent_payments`
--

CREATE TABLE `rent_payments` (
  `payment_id` int(100) NOT NULL,
  `property` varchar(255) DEFAULT NULL,
  `rental_period` varchar(255) DEFAULT NULL,
  `payment_mode` varchar(255) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `house_number` varchar(255) DEFAULT NULL,
  `id_number` int(255) DEFAULT NULL,
  `serial` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` int(255) DEFAULT NULL,
  `ammount` int(255) NOT NULL,
  `date` date NOT NULL,
  `type` varchar(60) NOT NULL,
  `tenant_id` varchar(45) DEFAULT NULL,
  `particulars` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rent_payments`
--

INSERT INTO `rent_payments` (`payment_id`, `property`, `rental_period`, `payment_mode`, `first_name`, `last_name`, `house_number`, `id_number`, `serial`, `email`, `phone`, `ammount`, `date`, `type`, `tenant_id`, `particulars`) VALUES
(1, 'Aqua Villa', 'May', 'Cash', 'Stephen', 'Muiruri', NULL, NULL, '1000', NULL, NULL, 5000, '2017-08-01', 'Invoice Payment', '19', '@#567'),
(2, 'Aqua Villa', 'April', 'Cash', 'Stephen', 'Muiruri', NULL, NULL, '1002', NULL, NULL, 100, '2017-07-19', 'Invoice Payment', '19', ''),
(3, 'Aqua Villa', 'February', 'Mpesa', 'Stephen', 'Muiruri', NULL, NULL, '1003', NULL, NULL, 3000, '2017-06-21', 'Invoice Payment', '19', 'R7#7qwd'),
(4, 'Aqua Villa', 'February', 'Bank Deposit', 'peter', 'karanja', NULL, NULL, '1001', NULL, NULL, 7000, '2017-08-08', 'Invoice Payment', '9', '232r5tsg'),
(5, 'Aqua Villa', 'May', 'Bank Deposit', 'Stephen', 'Muiruri', NULL, NULL, '1000', NULL, NULL, 1700, '2017-01-05', 'Invoice Payment', '19', 'r5ih'),
(6, 'Aqua Villa', 'September', 'Cash', 'Stephen', 'Muiruri', NULL, NULL, '1005', NULL, NULL, 3500, '2017-05-23', 'Invoice Payment', '19', '#FWGE!@'),
(7, 'Aqua Villa', 'September', 'Bank Deposit', 'Susan', 'Wankiku', NULL, NULL, '1007', NULL, NULL, 6700, '2017-04-19', 'Invoice Payment', '4', 'ET769e'),
(8, 'Aqua Villa', 'August', 'Cash', 'Stephen', 'Muiruri', NULL, NULL, '1006', NULL, NULL, 10000, '2017-05-16', 'Invoice Payment', '19', 'WE456789'),
(9, 'Aqua Villa', 'September', 'Cash', 'Steve', 'Waits', NULL, NULL, '1008', NULL, NULL, 6500, '2017-03-15', 'Invoice Payment', '5', '123edef'),
(10, 'Aqua Villa', 'August', 'Cash', 'Stephen', 'Muiruri', NULL, NULL, '1004', NULL, NULL, 7200, '2017-02-06', 'Invoice Payment', '19', 'WER#$%46'),
(11, 'Aqua Villa', 'February', 'Cash', 'Pauline', 'Njoroge', NULL, NULL, '1010', NULL, NULL, 6000, '2017-09-21', 'Invoice Payment', '22', ''),
(12, 'Aqua Villa', 'September', 'Cash', 'Steve', 'Waits', NULL, NULL, '1011', NULL, NULL, 6000, '2017-09-21', 'Invoice Payment', '5', '45FHWE#'),
(13, 'Litzz Apartments', 'September', 'Cash', 'Stephen', 'Biwott', NULL, NULL, '1013', NULL, NULL, 5000, '2017-09-21', 'Invoice Payment', '20', 'SD#$Hk3'),
(14, 'Litzz Apartments', 'September', 'Cash', 'Stephen', 'Biwott', NULL, NULL, '1013', NULL, NULL, 500, '2017-09-21', 'Invoice Payment', '20', 'ERY#435'),
(15, 'Litzz Apartments', 'September', 'Cash', 'Stephen', 'Biwott', NULL, NULL, '1013', NULL, NULL, 3400, '2017-09-21', 'Invoice Payment', '20', '2e34'),
(16, 'Aqua Villa', 'February', 'Cash', 'Pauline', 'Njoroge', NULL, NULL, '1010', NULL, NULL, 6500, '2017-10-12', 'Invoice Payment', '22', '34zfgtbt'),
(17, 'Aqua Villa', 'May', 'Cash', 'Stephen', 'Muiruri', NULL, NULL, '1000', NULL, NULL, 30, '2017-10-12', 'Invoice Payment', '19', '45'),
(18, 'Aqua Villa', 'April', 'Cash', 'Stephen', 'Muiruri', NULL, NULL, '1002', NULL, NULL, 1, '2017-10-12', 'Invoice Payment', '19', '5g'),
(19, 'Litzz Apartments', 'September', 'Cash', 'Stephen', 'Biwott', 'LA002', NULL, '1013', NULL, NULL, 200, '2017-10-12', 'Invoice Payment', '20', 'gyy'),
(20, 'Litzz Apartments', 'September', 'Cash', 'Stephen', 'Biwott', 'LA002', NULL, '1013', NULL, NULL, 200, '2017-10-12', 'Invoice Payment', '20', '3456gr'),
(21, 'Aqua Villa', 'April', 'Cash', 'Stephen', 'Muiruri', 'J001', NULL, '1002', NULL, NULL, 399, '2017-10-12', 'Invoice Payment', '19', '456bvgtgh'),
(22, 'Aqua Villa', 'January', 'Cash', 'Stephen', 'Muiruri', 'J001', NULL, '1009', NULL, NULL, 7000, '2017-10-12', 'Invoice Payment', '19', 't5hj57u'),
(23, 'Aqua Villa', 'May', 'Cash', 'Stephen', 'Muiruri', 'J001', NULL, '1000', NULL, NULL, 7000, '2017-10-12', 'Invoice Payment', '19', 'ryu7'),
(24, 'Litzz Apartments', 'September', 'Cash', 'Stephen', 'Biwott', 'LA002', NULL, '1013', NULL, NULL, 8900, '2017-10-20', 'Invoice Payment', '20', 'e7tti'),
(25, 'Prime properties', 'November', 'Cash', 'Stephen', 'Wanyoro', '201PP', NULL, '1015', NULL, NULL, 7000, '2017-11-23', 'Invoice Payment', '30', 'W##%%77'),
(26, 'Aqua Villa', 'October', 'Cash', 'Pauline', 'Njoroge', 'J011', NULL, '1014', NULL, NULL, 7200, '2017-12-30', 'Invoice Payment', '22', '#132HJR'),
(27, 'Aqua Villa', 'April', 'Cash', 'Stephen', 'Muiruri', 'J001', NULL, '1002', NULL, NULL, 500, '2017-12-30', 'Invoice Payment', '19', '3rr'),
(28, 'Aqua Villa', 'February', 'Cash', 'Stephen', 'Muiruri', 'J001', NULL, '1003', NULL, NULL, 3500, '2017-12-30', 'Invoice Payment', '19', 'rfv22');

-- --------------------------------------------------------

--
-- Table structure for table `store_customers`
--

CREATE TABLE `store_customers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address_1` varchar(255) NOT NULL,
  `address_2` varchar(255) NOT NULL,
  `town` varchar(255) NOT NULL,
  `county` varchar(255) NOT NULL,
  `postcode` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `name_ship` varchar(255) NOT NULL,
  `address_1_ship` varchar(255) NOT NULL,
  `address_2_ship` varchar(255) NOT NULL,
  `town_ship` varchar(255) NOT NULL,
  `county_ship` varchar(255) NOT NULL,
  `postcode_ship` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tenants`
--

CREATE TABLE `tenants` (
  `tenant_id` int(20) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `tax_id` varchar(80) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(20) NOT NULL,
  `unit` varchar(20) NOT NULL,
  `bank` varchar(20) NOT NULL,
  `adress` varchar(100) NOT NULL,
  `property` varchar(100) NOT NULL,
  `acountnumber` varchar(200) NOT NULL,
  `idnumber` int(60) NOT NULL,
  `status` varchar(60) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tenants`
--

INSERT INTO `tenants` (`tenant_id`, `fname`, `lname`, `tax_id`, `email`, `phone`, `unit`, `bank`, `adress`, `property`, `acountnumber`, `idnumber`, `status`) VALUES
(1, 'James', 'Morrison', 'AG02093ER', 'kamasteve13@gmail.com', 729477334, 'J001', 'Equity Bank', '970 Thika', 'Aqua Villa', '567767', 23487634, 'Deactivate'),
(2, 'james', 'James', 'female', 'pwhhae@gmail.com', 721356789, 'J007', 'KCB', '4000', 'Aqua Villa', '123456789', 28634590, 'Deactivate'),
(3, 'Peter', 'Opiyo', 'male', 'popiyo@techisoft.co.ke', 721356789, 'J004', 'KCB', '4000', 'Aqua Villa', '123456789', 28634590, 'Deactivate'),
(4, 'Susan', 'Wankiku', 'female', 'swanjiku@gmail.com', 722123876, 'J003', 'Equity', '12000', 'Aqua Villa', '123456789', 12345678, 'Active'),
(5, 'Steve', 'Waits', 'female', 'stevewaits@gmail.com', 732456890, 'J002', 'KCB', '12000', 'Aqua Villa', '14235', 123456789, 'Active'),
(6, 'Philis', 'Ochieng', 'female', 'kamasteve13@gmail.com', 721356789, 'J006', 'KCB', '4000', 'Aqua Villa', '123456789', 28634590, 'Active'),
(7, 'Wilberforce', 'Waits', 'male', 'kamasteve10@yahoo.com', 732456890, 'J005', 'Co-operative', '12000', 'Aqua Villa', '123456789', 28634590, 'Active'),
(8, 'Philis', 'wajigi', 'female', 'kamasteve10@yahoo.com', 722123876, 'J008', 'Co-operative', '970 Thika', 'Aqua Villa', '123456789', 28634590, 'Active'),
(9, 'peter', 'karanja', 'female', 'kamasteve10@yahoo.com', 721356789, 'J009', 'KCB', '4000', 'Aqua Villa', '123456789', 26734590, 'Active'),
(10, 'Martin', 'Wilikins', 'male', 'popiyo@techisoft.co.ke', 7234567, 'J010', 'Equity', '970 Thika', 'Aqua Villa', '123456789', 12345678, 'Active'),
(11, 'maina', 'karanja', 'female', 'pwhhae@gmail.com', 732456890, '201', 'Equity', '970 Thika', 'Prime Hostels', '123456789', 123456789, '1'),
(12, 'Philis', 'njeri', 'female', 'kamasteve13@gmail.com', 722123876, 'AV001', 'Equity', '970 Thika', 'Aqua Villa Ruiru', '123456789', 28383849, '1'),
(13, 'grace', 'wairimu', '234WFDERF', 'kamasteve134@gmail.com', 729477678, '201', 'equity', 'sqq', 'Prime Hostels', 'rty5', 28567890, '1'),
(14, 'Stephen', 'Kibet', '234WFDERF', 'kamasteve14@gmail.com', 729477678, 'J001', 'qsdwd', 'qwr43', 'Aqua Villa', 'tujtu', 27845634, '1'),
(15, 'Jonathan', 'Kibet', '234WFDERF', 'kamasteve13@gmail.com', 729477678, 'LA002', '28335896', 'qwr43', 'Litzz Apartments', 'tujtu', 12467834, '1'),
(16, 'mercy', 'Biwott', '234WFDERF', 'kamasteve13@gmail.com', 729477678, 'LA003', 'qsdwd', 'qwr43', 'Litzz Apartments', 'fwrge', 28567890, '1'),
(17, 'Stephen', 'Muiruri', '234WFDERF', 'kamasteve18@gmail.com', 729477678, 'LA004', 'qsdwd', 'qwr43', 'Litzz Apartments', 'tujtu', 28907419, '1'),
(18, 'Stephen', 'Muiruri', '234WFDERF', 'kamasteve13@gmail.com', 729477678, 'Bedsitter', 'qsdwd', 'qwr43', 'Precious Shiroh', '234357', 28567890, '1'),
(19, 'Stephen', 'Muiruri', '234WFDERF', 'kamasteve13@gmail.com', 729477678, 'J001', 'Equity Bank', 'qwr43', 'Aqua Villa', '234357', 28567890, 'Active'),
(20, 'Stephen', 'Biwott', '234WFDERF', 'kamasteve13@gmail.com', 1234567890, 'LA002', 'Equity Bank', 'qwr43', 'Litzz Apartments', 'tujtu', 28567890, 'Active'),
(21, 'Pauline', 'Njoroge', '234WFDERF', 'admin@techisoft.co.ke', 729477678, 'Wg2008', 'Equity Bank', 'qwr43', 'Westgate Hostels', 'tujtu', 12346756, 'Active'),
(22, 'Pauline', 'Njoroge', '234WFDERF', 'kamasteve13@gmail.com', 722437702, 'J011', 'Equity Bank', 'qwr43', 'Aqua Villa', '2341324678', 28734578, 'Active'),
(23, 'Stephen', 'Muiruri', '234WFDERF', 'admin@techisoft.co.ke', 729477678, 'LDA1234', 'Equity Bank', 'qwr43', 'Aqua Villa', '134', 28335696, 'Active'),
(24, 'Stephen', 'Muiruri', '234WFDERF', 'peterwanyoro@gmail.com', 729477678, '201', 'Equity Bank', 'qwr43', 'Prime Hostels', '234357', 729477334, 'Active'),
(25, 'Stephen', 'Wanyoro', '234WFDERF', 'peterwanyoro@gmail.com', 729477678, '201', 'Equity Bank', 'qwr43', 'Prime Hostels', '234357', 28335696, 'Active'),
(26, 'Admin', 'Ndung', '234WFDERF', 'admin@techisoft.co.ke', 7345678, '201', 'Equity Bank', 'qwr43', 'Prime Hostels', '234357', 26578934, 'Active'),
(27, 'Stephen Kibet', 'Wanyoro', '234WFDERF', 'admin@vycansdigital.co.ke', 3457, '201', 'Equity Bank', 'qwr43', 'Prime Hostels', '234357', 23456789, 'Active'),
(28, 'Stephen', 'Muiruri', '234WFDERF', 'info@vycansdigital.co.ke', 729477678, 'J004', 'Equity Bank', 'qwr43', 'Aqua Villa', 'tujtu', 23678456, 'Active'),
(29, 'mutuku', 'maximus', '234WFDERF', 'mutukumx@gmail.com', 729477678, '201', 'Equity Bank', 'qwr43', 'Prime Hostels', '234357', 27619796, 'Active'),
(30, 'Stephen', 'Wanyoro', '234WFDERF', 'admin@techisoft.co.ke', 729477678, '201PP', 'Equity Bank', 'qwr43', 'Prime properties', '90876643', 23456678, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `phone`, `password`) VALUES
(1, 'Joe Bloggs', 'admin', 'admin@yourdomain.co.uk', '', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `user_types`
--

CREATE TABLE `user_types` (
  `id` int(60) NOT NULL,
  `name` varchar(60) NOT NULL,
  `description` varchar(60) NOT NULL,
  `unique_id` varchar(60) NOT NULL,
  `parent` int(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_types`
--

INSERT INTO `user_types` (`id`, `name`, `description`, `unique_id`, `parent`) VALUES
(1, 'Administrator', 'Overall system controls', 'ADMIN01', 0),
(4, 'user', 'Normal User', 'USR002', 3),
(3, 'Cashier', 'Data Entry', 'CAS012', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD UNIQUE KEY `payment_id` (`payment_id`);

--
-- Indexes for table `bank_accounts`
--
ALTER TABLE `bank_accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cash_register`
--
ALTER TABLE `cash_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `company_data`
--
ALTER TABLE `company_data`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `credit`
--
ALTER TABLE `credit`
  ADD UNIQUE KEY `payment_id` (`payment_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deposit`
--
ALTER TABLE `deposit`
  ADD PRIMARY KEY (`idnumber`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD UNIQUE KEY `invoice` (`invoice`);

--
-- Indexes for table `invoices_backup`
--
ALTER TABLE `invoices_backup`
  ADD UNIQUE KEY `invoice` (`invoice`);

--
-- Indexes for table `invoice_items`
--
ALTER TABLE `invoice_items`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `invoice_logs`
--
ALTER TABLE `invoice_logs`
  ADD UNIQUE KEY `invoice` (`invoice`);

--
-- Indexes for table `maintenance`
--
ALTER TABLE `maintenance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_details`
--
ALTER TABLE `menu_details`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `menu_role_map`
--
ALTER TABLE `menu_role_map`
  ADD PRIMARY KEY (`map_id`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`owner_id`);

--
-- Indexes for table `parent_menu`
--
ALTER TABLE `parent_menu`
  ADD KEY `menu_id` (`menu_id`);

--
-- Indexes for table `pesapi_account`
--
ALTER TABLE `pesapi_account`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type_index` (`type`),
  ADD KEY `definedby` (`identifier`);

--
-- Indexes for table `pesapi_payment`
--
ALTER TABLE `pesapi_payment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type_index` (`type`),
  ADD KEY `name_index` (`name`),
  ADD KEY `phone_index` (`phonenumber`),
  ADD KEY `time_index` (`time`),
  ADD KEY `super_index` (`super_type`),
  ADD KEY `fk_mpesapi_payment_account_idx` (`account_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD UNIQUE KEY `property_id` (`property_id`);

--
-- Indexes for table `property_owners`
--
ALTER TABLE `property_owners`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `rental_units`
--
ALTER TABLE `rental_units`
  ADD UNIQUE KEY `unit_id` (`unit_id`);

--
-- Indexes for table `rent_payments`
--
ALTER TABLE `rent_payments`
  ADD PRIMARY KEY (`payment_id`),
  ADD UNIQUE KEY `payment_id` (`payment_id`);

--
-- Indexes for table `store_customers`
--
ALTER TABLE `store_customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tenants`
--
ALTER TABLE `tenants`
  ADD PRIMARY KEY (`tenant_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_types`
--
ALTER TABLE `user_types`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `payment_id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;
--
-- AUTO_INCREMENT for table `bank_accounts`
--
ALTER TABLE `bank_accounts`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cash_register`
--
ALTER TABLE `cash_register`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `company_data`
--
ALTER TABLE `company_data`
  MODIFY `company_id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `credit`
--
ALTER TABLE `credit`
  MODIFY `payment_id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `invoice` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1017;
--
-- AUTO_INCREMENT for table `invoices_backup`
--
ALTER TABLE `invoices_backup`
  MODIFY `invoice` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1006;
--
-- AUTO_INCREMENT for table `invoice_items`
--
ALTER TABLE `invoice_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;
--
-- AUTO_INCREMENT for table `invoice_logs`
--
ALTER TABLE `invoice_logs`
  MODIFY `invoice` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1013;
--
-- AUTO_INCREMENT for table `maintenance`
--
ALTER TABLE `maintenance`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `menu_details`
--
ALTER TABLE `menu_details`
  MODIFY `menu_id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `menu_role_map`
--
ALTER TABLE `menu_role_map`
  MODIFY `map_id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `owner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;
--
-- AUTO_INCREMENT for table `parent_menu`
--
ALTER TABLE `parent_menu`
  MODIFY `menu_id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pesapi_account`
--
ALTER TABLE `pesapi_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pesapi_payment`
--
ALTER TABLE `pesapi_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=979;
--
-- AUTO_INCREMENT for table `property_owners`
--
ALTER TABLE `property_owners`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `user_id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `rent_payments`
--
ALTER TABLE `rent_payments`
  MODIFY `payment_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `store_customers`
--
ALTER TABLE `store_customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `tenants`
--
ALTER TABLE `tenants`
  MODIFY `tenant_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_types`
--
ALTER TABLE `user_types`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `pesapi_payment`
--
ALTER TABLE `pesapi_payment`
  ADD CONSTRAINT `fk_mpesapi_payment_account` FOREIGN KEY (`account_id`) REFERENCES `pesapi_account` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
