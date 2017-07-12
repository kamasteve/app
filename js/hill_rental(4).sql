-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2017 at 11:56 AM
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
(51, '7000', 0, '2017-07-11', '1035', '', NULL, 0, 'kamasteve ');

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
(1, '0', 7000, '2017-04-19 08:57:17', '1015', '1', '101', 0, 'kamasteve '),
(2, '0', 6100, '2017-04-19 08:58:33', '1015', '11', '102', 0, 'kamasteve '),
(3, '0', 7000, '2017-04-19 09:00:18', '1015', '1', '101', 0, 'kamasteve '),
(4, '0', 7000, '2017-04-19 09:01:32', '1015', '11', '102', 0, 'kamasteve '),
(5, '0', 7000, '2017-04-19 09:02:27', '1015', '', '103', 0, 'kamasteve '),
(6, '0', 7750, '2017-04-19 13:36:06', '1036', '', '103', 0, 'kamasteve '),
(7, '0', 8250, '2017-04-19 13:38:12', '1037', '11', '102', 0, 'kamasteve '),
(8, '0', 7700, '2017-04-19 14:03:11', '1000', '1', '101', 0, 'kamasteve '),
(9, '0', 1750, '2017-04-20 08:15:35', '1001', '11', '102', 0, 'kamasteve '),
(10, '0', 7500, '2017-04-24 09:23:16', '1002', '11', '102', 0, 'kamasteve '),
(11, '0', 7000, '2017-05-02 06:50:48', '1003', '1', '101', 0, 'kamasteve '),
(12, '0', 6100, '2017-05-02 07:32:36', '1004', '1', '101', 0, 'kamasteve '),
(13, '0', 500, '2017-05-02 07:56:07', '1005', '1', '101', 0, 'kamasteve '),
(20, '0', 7000, '2017-06-29 09:13:01', '1013', '11', '102', 0, 'kamasteve '),
(15, '0', 7000, '2017-05-02 08:28:36', '1007', '5', '101', 0, 'kamasteve '),
(16, '0', 7000, '2017-05-08 07:34:49', '1008', '1', '101', 0, 'kamasteve '),
(17, '0', 7250, '2017-05-08 07:42:36', '1009', '5', '101', 0, 'kamasteve '),
(18, '0', 7000, '2017-05-08 07:43:16', '1010', '11', '102', 0, 'kamasteve '),
(19, '0', 7000, '2017-05-18 05:54:07', '1011', '1', '101', 0, 'kamasteve '),
(21, '0', 13500, '2017-06-29 09:13:48', '1014', '11', '102', 0, 'kamasteve '),
(22, '0', 7000, '2017-06-29 12:48:13', '1015', '', '103', 0, 'kamasteve '),
(23, '0', 9000, '2017-06-29 12:48:50', '1016', '5', '101', 0, 'kamasteve '),
(24, '0', 15900, '2017-06-29 13:11:27', '1017', '11', '102', 0, 'kamasteve '),
(25, '0', 23150, '2017-07-05 07:08:50', '1018', '11', '102', 0, 'kamasteve '),
(26, '0', 6900, '2017-07-05 07:10:15', '1019', '1', '101', 0, 'kamasteve '),
(27, '0', 7000, '2017-07-05 07:23:40', '1020', '', '106', 0, 'kamasteve '),
(28, '0', 7000, '2017-07-05 12:21:27', '1021', '', '103', 0, 'kamasteve '),
(29, '0', 6100, '2017-07-05 12:24:38', '1022', '5', '101', 0, 'kamasteve '),
(30, '0', 7000, '2017-07-05 12:27:01', '1023', '5', '101', 0, 'kamasteve '),
(31, '0', 8900, '2017-07-05 12:36:59', '1024', '1', '101', 0, 'kamasteve '),
(32, '0', 7000, '2017-07-10 08:35:43', '1025', '4', '101', 0, 'kamasteve '),
(33, '0', 7000, '2017-07-10 08:49:10', '1026', '6', '101', 0, 'kamasteve '),
(34, '0', 8900, '2017-07-10 08:49:53', '1027', '12', '104', 0, 'kamasteve '),
(35, '0', 250, '2017-07-10 09:13:11', '1028', '11', '102', 0, 'kamasteve '),
(36, '0', 7000, '2017-07-10 10:46:56', '1029', '5', '101', 0, 'kamasteve '),
(37, '0', 250, '2017-07-11 07:01:41', '1030', '11', '102', 0, 'kamasteve '),
(38, '0', 250, '2017-07-11 08:10:27', '1031', '11', '102', 0, 'kamasteve '),
(39, '0', 500, '2017-07-11 08:11:44', '1032', '11', '102', 0, 'kamasteve '),
(40, '0', 7000, '2017-07-11 08:28:00', '1033', '11', '102', 0, 'kamasteve '),
(41, '0', 500, '2017-07-11 08:28:56', '1034', '', '103', 0, 'kamasteve '),
(42, '0', 8900, '2017-07-11 09:10:39', '1035', '', '103', 0, 'kamasteve '),
(43, '0', 250, '2017-07-11 09:11:06', '1036', '12', '104', 0, 'kamasteve '),
(44, '0', 2500, '2017-07-11 09:11:48', '1037', '', '105', 0, 'kamasteve '),
(45, '0', 7000, '2017-07-11 09:49:32', '1038', '', '103', 0, 'kamasteve ');

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
('Aqua Villa', 'J009', 'kamau', '10/12/2016', 7000, 'sdhnfg', 'kamasteve ', 13, NULL, 0, 0),
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
('Platinum Plaza', 'PP002', 'James Kariuki', '10/12/2016', 7000, 'am now humbled, please work now', 'kamasteve ', 37, '2017-05-09', 0, 0);

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
  `Period` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`invoice`, `invoice_date`, `invoice_due_date`, `property`, `id_unit`, `subtotal`, `shipping`, `discount`, `vat`, `total`, `notes`, `responsible`, `status`, `Period`) VALUES
(1019, '2017/07/05', '2017/07/12', 101, 'J001', '6900.00', '', '9000.00', '0.00', '6900.00', '', 'kamasteve ', 'closed', 'May'),
(1018, '2017/07/20', '2017/07/20', 102, '201', '23150.00', '', '0.00', '0.00', '23150.00', '', 'kamasteve ', 'closed', 'June'),
(1017, '2017/06/15', '2017/06/16', 102, '201', '15900.00', '', '0.00', '0.00', '15900.00', '', 'kamasteve ', 'closed', 'July'),
(1016, '2017/06/22', '2017/06/23', 101, 'J002', '9000.00', '', '0.00', '0.00', '9000.00', 'bjmkjl', 'kamasteve ', 'closed', 'August'),
(1015, '2017/06/21', '2017/06/23', 103, 'LA004', '7000.00', '', '0.00', '0.00', '7000.00', '', 'kamasteve ', 'closed', 'January'),
(1014, '22/06/2017', '22/06/2017', 102, '201', '13500.00', '', '0.00', '0.00', '13500.00', 'This is just a test', 'kamasteve ', 'closed', 'February'),
(1013, '14/06/2017', '28/06/2017', 102, '201', '7000.00', '', '0.00', '0.00', '7000.00', '', 'kamasteve ', 'closed', 'March'),
(1012, '08/06/2017', '01/06/2017', 103, 'LA004', 'NaN', '', 'NaN', 'NaN', 'NaN', '', 'kamasteve ', 'deleted', 'June'),
(1011, '18/05/2017', '04/05/2017', 101, 'J001', '7000.00', '', '0.00', '0.00', '7000.00', '', 'kamasteve ', 'closed', 'July'),
(1010, '09/05/2017', '18/05/2017', 102, '201', '7000.00', '', '0.00', '0.00', '7000.00', 'electricity ', 'kamasteve ', 'closed', 'August'),
(1009, '17/05/2017', '24/05/2017', 101, 'J002', '7250.00', '', '0.00', '0.00', '7250.00', '', 'kamasteve ', 'closed', 'March'),
(1008, '09/05/2017', '08/05/2017', 101, 'J001', '7000.00', '', '0.00', '0.00', '7000.00', 'qwe gb jh', 'kamasteve ', 'closed', 'April'),
(1007, '25/05/2017', '11/05/2017', 101, 'J002', '7000.00', '', '0.00', '0.00', '7000.00', '', 'kamasteve ', 'closed', 'June'),
(1006, '18/05/2017', '25/05/2017', 102, '201', '7000.00', '', '0.00', '0.00', '7000.00', '', 'kamasteve ', 'deleted', 'January '),
(1005, '11/05/2017', '17/05/2017', 101, 'J001', '500.00', '', '0.00', '0.00', '500.00', '', 'kamasteve ', 'closed', 'February'),
(1004, '11/05/2017', '10/05/2017', 101, 'J001', '6100.00', '', '900.00', '0.00', '6100.00', '', 'kamasteve ', 'closed', 'February'),
(1003, '16/05/2017', '10/05/2017', 101, 'J001', '7000.00', '', '0.00', '0.00', '7000.00', '', 'kamasteve ', 'closed', 'February'),
(1002, '19/04/2017', '20/04/2017', 102, '201', '7500.00', '', '0.00', '0.00', '7500.00', '', 'kamasteve ', 'closed', 'January'),
(1001, '06/04/2017', '28/04/2017', 102, '201', '1750.00', '', '0.00', '0.00', '1750.00', '', 'kamasteve ', 'closed', 'March'),
(1000, '20/04/2017', '20/04/2017', 101, 'J001', '7700.00', '', '0.00', '0.00', '7700.00', '', 'kamasteve ', 'closed', 'April'),
(1020, '2017/07/05', '2017/06/29', 106, 'WH003', '7000.00', '', '0.00', '0.00', '7000.00', '', 'kamasteve ', 'closed', 'August'),
(1021, '2017/07/12', '2017/07/20', 103, 'LA003', '7000.00', '', '0.00', '0.00', '7000.00', 'gg', 'kamasteve ', 'closed', 'February'),
(1022, '2017/07/05', '2017/07/19', 101, 'J002', '6100.00', '', '900.00', '0.00', '6100.00', 'hklgjkg.', 'kamasteve ', 'closed', 'February'),
(1023, '2017/07/06', '2017/07/14', 101, 'J002', '7000.00', '', '0.00', '0.00', '7000.00', '', 'kamasteve ', 'closed', 'Janaury'),
(1024, '2017/07/05', '2017/07/05', 101, 'J001', '8900.00', '', '0.00', '0.00', '8900.00', '', 'kamasteve ', 'closed', 'February'),
(1025, '2017/07/10', '2017/07/24', 101, 'J003', '7000.00', '', '0.00', '0.00', '7000.00', 'ewfrg', 'kamasteve ', 'closed', 'Janaury'),
(1026, '2017/07/10', '2017/07/24', 101, 'J006', '7000.00', '', '0.00', '0.00', '7000.00', 'hbjnh', 'kamasteve ', 'closed', 'February'),
(1027, '2017/07/21', '2017/08/02', 104, 'AV001', '8900.00', '', '0.00', '0.00', '8900.00', '', 'kamasteve ', 'closed', 'February'),
(1028, '2017/07/12', '2017/07/21', 102, '201', '250.00', '', '0.00', '0.00', '250.00', '', 'kamasteve ', 'closed', 'February'),
(1029, '2017/07/13', '2017/07/13', 101, 'J002', '7000.00', '', '0.00', '0.00', '7000.00', '', 'kamasteve ', 'closed', 'February'),
(1030, '2017/07/11', '2017/07/18', 102, '201', '250.00', '', '0.00', '0.00', '250.00', '', 'kamasteve ', 'closed', 'July'),
(1031, '2017/07/11', '2017/07/18', 102, '201', '250.00', '', '0.00', '0.00', '250.00', 'EWR', 'kamasteve ', 'closed', 'February'),
(1032, '2017/07/11', '2017/07/18', 102, '201', '500.00', '', '0.00', '0.00', '500.00', '', 'kamasteve ', 'closed', 'July'),
(1033, '2017/07/27', '2017/07/18', 102, '201', '7000.00', '', '0.00', '0.00', '7000.00', 'GTRHJU', 'kamasteve ', 'closed', 'August'),
(1034, '2017/07/11', '2017/07/18', 103, 'LA003', '500.00', '', '0.00', '0.00', '500.00', 'N', 'kamasteve ', 'closed', 'February'),
(1035, '2017/07/11', '2017/07/18', 103, 'LA003', '8900.00', '', '0.00', '0.00', '8900.00', 'ekju', 'kamasteve ', 'open', 'June'),
(1036, '2017/07/11', '2017/07/25', 104, 'AV001', '250.00', '', '0.00', '0.00', '250.00', '', 'kamasteve ', 'open', 'July'),
(1037, '2017/07/25', '2017/08/01', 105, 'PP001', '2500.00', '', '0.00', '0.00', '2500.00', '', 'kamasteve ', 'open', 'April'),
(1038, '2017/07/11', '2017/07/11', 103, 'LA002', '7000.00', '', '0.00', '0.00', '7000.00', 'u89p', 'kamasteve ', 'open', 'February');

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
(65, '1038', 'rent', 1, '7000', '', '7000.00');

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
  `location` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`property_id`, `name`, `year`, `type`, `address`, `city`, `zip`, `country`, `add_date`, `county`, `location`) VALUES
(101, 'Aqua Villa', '2011', 'Apartment', 'Kimbo 32', 'Nairobi', '0010', 'Kenya', '2017-01-26 08:38:47', 'Nairobi', 'Kimbo'),
(102, 'Prime Hostels', '2013', 'Rental', '970 Thika', 'Nairobi', '01012', 'Kenya', '2017-02-13 08:33:02', 'Kiambu', 'maragua'),
(103, 'Litzz Apartments', '1999', 'Rental', 'thika 1234', 'Thika', '01000', 'Kenya', '2017-03-06 10:19:38', 'Muranga', 'Ruiru'),
(104, 'Aqua Villa Ruiru', '2013', 'rantal', '45 Kimbo', 'Nairobi', '01012', 'Kenya', '2017-04-10 09:09:49', 'Muranga', 'Ruiru'),
(105, 'Platinum Plaza', '2016', 'Commercial', '0100', 'Nairobi', '01000', 'Kenya', '2017-04-11 12:10:02', 'Nairobi', 'Westlands'),
(106, 'Westgate Hostels', '2009', 'Rental', 'KM Road', 'Nairobi', '0123', 'Kenya', '2017-04-11 12:48:01', 'Kiambu', 'KM'),
(107, 'Wema Apartments', '2009', 'Rental', '970 Thika', 'Nairobi', '01000', 'Kirinyaga', '2017-04-11 12:54:49', 'Kirinyaga', 'Mwea'),
(108, 'Westgate Hostels', '2009', 'Rental', 'KM Road', 'Nairobi', '0123', 'Kenya', '2017-04-11 13:01:32', 'Muranga', 'Kenol'),
(109, 'Crystal Apartments', '2009', 'Rental', '970 Thika', 'Thika', '01000', 'Kenya', '2017-04-11 13:11:32', 'Kiambu', 'maragua'),
(110, 'Kenya Plaza', '2009', 'Rental', '970 Thika', 'Thika', '01012', 'Kenya', '2017-06-29 08:28:43', 'Nairobi', 'Westlands');

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
  `adress` varchar(75) NOT NULL,
  `company` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`fname`, `lname`, `nationality`, `email`, `password`, `phone`, `activation`, `username`, `adress`, `company`) VALUES
('James ', 'Mwangi', 'kenyan', 'jtmwangi@gmail.com', 'jemo123', 720422910, '204987dedf5128807c60175ee3a72e6e', 'jemo123', '', ''),
('stephen', 'ngugi', 'kenyan', 'kamasteve13@gmail.com', 'kamah4778', 729477334, '', 'kamasteve', '', ''),
('Stephen', 'Wajohanna', 'kenyan', 'kandesteve@gmail.com', 'kamah4778', 720422910, '865848d62b995e64944238b0249b36e1', 'kamasteveqs', '', '');

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
('103', 'LA002', '1 Bedroom', '1', '13000', 0),
('103', 'LA003', '1 Bedroom', '1', '13000', 0),
('103', 'LA004', '1 Bedroom', '1', '13000', 0),
('103', 'LA005', '1 Bedroom', '1', '13000', 0),
('103', 'LA006', 'bedsitter', '1', '6500', 0),
('103', 'LA007', 'bedsitter', '1', '6500', 0),
('103', 'LA001', '2 bedroom', '2', '16000', 0),
('102', '201', '1 Bedroom', '1', '25000', 1),
('101', 'J001', 'Bedsitter', '1', '6500', 1),
('101', 'J002', 'Bedsitter', '1', '6500', 1),
('101', 'J003', 'Bedsitter', '1', '6500', 1),
('101', 'J004', '1 Bedroom', '1', '12000', 1),
('101', 'J005', 'Bedsitter', '1', '6500', 1),
('101', 'J006', '4 Bedroom', '4', '25000', 1),
('101', 'J007', '3 Bedroom', '3', '25000', 1),
('101', 'J008', '2 Bedroom', '2', '16000', 1),
('101', 'J009', '1 Bebdroom', '1', '17000', 1),
('101', 'J010', 'Bedsitter', '1', '14000', 1);

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
(1, 'Aqua Villa', 'February', 'Cash', 'Peter', 'James', 'J001', 26734590, '1234567', 'email', 732456890, 35, '2017-05-08', 'Deposit', NULL, NULL),
(2, 'Aqua Villa', 'March', 'Bank Deposit', 'Peter', 'Opiyo', 'J001', 26734590, '1234567', 'email', 721356789, 35, '2017-05-17', 'Electricity', NULL, NULL),
(3, 'Aqua Villa', 'March', 'Mpesa', 'Peter', 'njeri', 'J001', 729477334, '1234567', 'email', 721356789, 5000, '2017-05-17', 'Deposit', NULL, NULL),
(4, 'Aqua Villa', 'March', 'Cash', 'Susan', 'Wachu', 'J001', 26734590, '1234567', 'email', 721356789, 35, '2017-05-17', 'Deposit', NULL, NULL),
(5, 'Prime Hostels', 'February', 'Cash', 'Peter', 'Wankiku', '201', 26734590, '1234567', 'email', 721356789, 5000, '2017-06-29', 'Deposit', NULL, NULL),
(6, 'Aqua Villa', 'March', 'Cheque', 'Peter', 'Wanyonyi', 'J001', 26734590, '1234567', 'email', 721356789, 5000, '2017-05-17', 'Deposit', NULL, NULL),
(7, 'Aqua Villa', 'March', 'Cash', 'Peter', 'Wanyonyi', 'J001', 26734590, '1234567', 'email', 721356789, 5000, '2017-05-17', 'Deposit', NULL, NULL),
(8, 'Aqua Villa', 'March', 'Cash', 'Peter', 'Wanyonyi', 'J001', 26734590, '1234567', 'email', 721356789, 5000, '2017-05-17', 'Deposit', NULL, NULL),
(9, 'Prime Hostels', 'March', 'Cash', 'maina', 'Mwangi', '201', 26734590, '1234567', 'email', 721356789, 5000, '2017-05-17', 'Deposit', NULL, NULL),
(10, 'Aqua Villa Ruiru', 'March', 'Mpesa', 'Peter', 'karanja', 'AV001', 26734590, '1234567', 'email', 721356789, 5000, '2017-05-17', 'Deposit', NULL, NULL),
(11, NULL, NULL, 'Cash', NULL, NULL, NULL, NULL, '1020', NULL, NULL, 7000, '2017-07-05', 'Invoice Payment', '', 'TGRRYU236'),
(12, NULL, NULL, 'Cash', NULL, NULL, NULL, NULL, '1019', NULL, NULL, 6900, '2017-07-05', 'Invoice Payment', '1', '132QRT46'),
(13, NULL, NULL, 'Cash', NULL, NULL, NULL, NULL, '1023', NULL, NULL, 7000, '2017-07-05', 'Invoice Payment', '5', 'WER7821g'),
(14, NULL, NULL, 'Bank Deposit', NULL, NULL, NULL, NULL, '1021', NULL, NULL, 7000, '2017-07-05', 'Invoice Payment', '', 'qwe#%76'),
(15, NULL, NULL, 'Cheque', NULL, NULL, NULL, NULL, '1018', NULL, NULL, 23150, '2017-07-05', 'Invoice Payment', '11', '345yebd'),
(16, NULL, NULL, 'Cash', NULL, NULL, NULL, NULL, '1024', NULL, NULL, 8900, '2017-07-05', 'Invoice Payment', '1', 'KJY586'),
(17, NULL, NULL, 'Cash', NULL, NULL, NULL, NULL, '1017', NULL, NULL, 15900, '2017-07-11', 'Invoice Payment', '11', 'THK7823kou'),
(18, NULL, NULL, 'Mpesa', NULL, NULL, NULL, NULL, '1002', NULL, NULL, 7500, '2017-07-11', 'Invoice Payment', '11', 'FG563hw'),
(19, NULL, NULL, 'Cash', NULL, NULL, NULL, NULL, '1030', NULL, NULL, 250, '2017-07-11', 'Invoice Payment', '11', 'GAG924'),
(20, NULL, NULL, 'Cash', NULL, NULL, NULL, NULL, '1027', NULL, NULL, 8900, '2017-07-11', 'Invoice Payment', '12', 'etrj546'),
(21, NULL, NULL, 'Cash', NULL, NULL, NULL, NULL, '1028', NULL, NULL, 250, '2017-07-11', 'Invoice Payment', '11', 'etrj546'),
(22, NULL, NULL, 'Cash', NULL, NULL, NULL, NULL, '1025', NULL, NULL, 7000, '2017-07-11', 'Invoice Payment', '4', 'etrj546'),
(23, NULL, NULL, 'Cash', NULL, NULL, NULL, NULL, '1026', NULL, NULL, 7000, '2017-07-11', 'Invoice Payment', '6', '13DSDGF'),
(24, NULL, NULL, 'Cash', NULL, NULL, NULL, NULL, '1016', NULL, NULL, 9000, '2017-07-11', 'Invoice Payment', '5', '56TT38123'),
(25, NULL, NULL, 'Cash', NULL, NULL, NULL, NULL, '1022', NULL, NULL, 6100, '2017-07-11', 'Invoice Payment', '5', '1234wE'),
(26, NULL, NULL, 'Cash', NULL, NULL, NULL, NULL, '1029', NULL, NULL, 7000, '2017-07-11', 'Invoice Payment', '5', '2534FDH'),
(27, NULL, NULL, 'Cash', NULL, NULL, NULL, NULL, '1032', NULL, NULL, 500, '2017-07-11', 'Invoice Payment', '11', '467ght'),
(28, NULL, NULL, 'Cash', NULL, NULL, NULL, NULL, '1031', NULL, NULL, 7000, '2017-07-11', 'Invoice Payment', '11', '34FGRYT'),
(29, NULL, NULL, 'Cash', NULL, NULL, NULL, NULL, '1033', NULL, NULL, 7000, '2017-07-11', 'Invoice Payment', '11', 'F346'),
(30, NULL, NULL, 'Cash', NULL, NULL, NULL, NULL, '1034', NULL, NULL, 500, '2017-07-11', 'Invoice Payment', '', 'QWE#@45'),
(31, NULL, NULL, 'Cash', NULL, NULL, NULL, NULL, '1035', NULL, NULL, 7000, '2017-07-11', 'Invoice Payment', '', '7000');

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
  `gender` enum('male','female') NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(20) NOT NULL,
  `unit` varchar(20) NOT NULL,
  `bank` varchar(20) NOT NULL,
  `adress` varchar(100) NOT NULL,
  `property` varchar(100) NOT NULL,
  `acountnumber` varchar(200) NOT NULL,
  `idnumber` int(60) NOT NULL,
  `type` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tenants`
--

INSERT INTO `tenants` (`tenant_id`, `fname`, `lname`, `gender`, `email`, `phone`, `unit`, `bank`, `adress`, `property`, `acountnumber`, `idnumber`, `type`) VALUES
(1, 'James', 'Morrison', 'male', 'kamasteve13@gmail.com', 729477334, 'J001', 'Equity', '970 Thika', 'Aqua Villa', '5677', 347, ''),
(2, 'james', 'James', 'female', 'pwhhae@gmail.com', 721356789, 'J007', 'KCB', '4000', 'Aqua Villa', '123456789', 28634590, ''),
(3, 'Peter', 'Opiyo', 'male', 'popiyo@techisoft.co.ke', 721356789, 'J004', 'KCB', '4000', 'Aqua Villa', '123456789', 28634590, ''),
(4, 'Susan', 'Wankiku', 'female', 'swanjiku@gmail.com', 722123876, 'J003', 'Equity', '12000', 'Aqua Villa', '123456789', 12345678, ''),
(5, 'Steve', 'Waits', 'female', 'stevewaits@gmail.com', 732456890, 'J002', 'KCB', '12000', 'Aqua Villa', '14235', 123456789, ''),
(6, 'Philis', 'Ochieng', 'female', 'kamasteve13@gmail.com', 721356789, 'J006', 'KCB', '4000', 'Aqua Villa', '123456789', 28634590, ''),
(7, 'Wilberforce', 'Waits', 'male', 'kamasteve10@yahoo.com', 732456890, 'J005', 'Co-operative', '12000', 'Aqua Villa', '123456789', 28634590, ''),
(8, 'Philis', 'wajigi', 'female', 'kamasteve10@yahoo.com', 722123876, 'J008', 'Co-operative', '970 Thika', 'Aqua Villa', '123456789', 28634590, ''),
(9, 'peter', 'karanja', 'female', 'kamasteve10@yahoo.com', 721356789, 'J009', 'KCB', '4000', 'Aqua Villa', '123456789', 26734590, ''),
(10, 'Martin', 'Wilikins', 'male', 'popiyo@techisoft.co.ke', 7234567, 'J010', 'Equity', '970 Thika', 'Aqua Villa', '123456789', 12345678, ''),
(11, 'maina', 'karanja', 'female', 'pwhhae@gmail.com', 732456890, '201', 'Equity', '970 Thika', 'Prime Hostels', '123456789', 123456789, ''),
(12, 'Philis', 'njeri', 'female', 'kamasteve13@gmail.com', 722123876, 'AV001', 'Equity', '970 Thika', 'Aqua Villa Ruiru', '123456789', 28383849, '');

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD UNIQUE KEY `payment_id` (`payment_id`);

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
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`owner_id`);

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
-- Indexes for table `register`
--
ALTER TABLE `register`
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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `payment_id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `cash_register`
--
ALTER TABLE `cash_register`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `credit`
--
ALTER TABLE `credit`
  MODIFY `payment_id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `invoice` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1039;
--
-- AUTO_INCREMENT for table `invoices_backup`
--
ALTER TABLE `invoices_backup`
  MODIFY `invoice` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1006;
--
-- AUTO_INCREMENT for table `invoice_items`
--
ALTER TABLE `invoice_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `invoice_logs`
--
ALTER TABLE `invoice_logs`
  MODIFY `invoice` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1013;
--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `owner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=979;
--
-- AUTO_INCREMENT for table `rent_payments`
--
ALTER TABLE `rent_payments`
  MODIFY `payment_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `store_customers`
--
ALTER TABLE `store_customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `tenants`
--
ALTER TABLE `tenants`
  MODIFY `tenant_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
