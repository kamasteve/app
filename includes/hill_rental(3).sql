-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2017 at 03:05 PM
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
(1, '', 0, '2017-04-19', '1003', '', NULL, 0, 'kamasteve ');

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
(14, '0', 7000, '2017-05-02 07:58:07', '1006', '11', '102', 0, 'kamasteve '),
(15, '0', 7000, '2017-05-02 08:28:36', '1007', '5', '101', 0, 'kamasteve '),
(16, '0', 7000, '2017-05-08 07:34:49', '1008', '1', '101', 0, 'kamasteve '),
(17, '0', 7250, '2017-05-08 07:42:36', '1009', '5', '101', 0, 'kamasteve '),
(18, '0', 7000, '2017-05-08 07:43:16', '1010', '11', '102', 0, 'kamasteve ');

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
('', '', 'kamau', '10/12/2016', 7000, 'estge erhytr ', 'kamasteve ', 1, NULL, 0, 0),
('', '', 'kamau', '10/12/2016', 7000, 'estge erhytr ', 'kamasteve ', 2, NULL, 0, 0),
('', '', 'kamau', '10/12/2016', 7000, 'estge erhytr ', 'kamasteve ', 3, NULL, 0, 0),
('', '', 'kamau', '10/12/2016', 7000, 'estge erhytr ', 'kamasteve ', 4, NULL, 0, 0),
('', '', 'kamau', '10/12/2016', 7000, 'estge erhytr ', 'kamasteve ', 5, NULL, 0, 0),
('', '', 'kamau', '10/12/2016', 7000, 'estge erhytr ', 'kamasteve ', 6, NULL, 0, 0),
('', '', 'kamau', '10/12/2016', 7000, 'estge erhytr ', 'kamasteve ', 7, NULL, 0, 0),
('', '', 'kamau', '10/12/2016', 7000, 'estge erhytr ', 'kamasteve ', 8, NULL, 0, 0),
('', '', 'kamau', '10/12/2016', 7000, 'estge erhytr ', 'kamasteve ', 9, NULL, 0, 0),
('', '', 'kamau', '10/12/2016', 7000, 'estge erhytr ', 'kamasteve ', 10, NULL, 0, 0),
('', 'J009', 'kamau', '10/12/2016', 7000, 'gbdf', 'kamasteve ', 11, NULL, 0, 0),
('Aqua Villa', 'J009', 'kamau', '10/12/2016', 7000, 'sdhnfg', 'kamasteve ', 12, NULL, 0, 0),
('Aqua Villa', 'J009', 'kamau', '10/12/2016', 7000, 'sdhnfg', 'kamasteve ', 13, NULL, 0, 0),
('Aqua Villa', 'J009', 'kamau', '12', 345, 'rwq', 'kamasteve ', 14, NULL, 0, 0),
('Aqua Villa', 'J010', 'kamau', '10/12/2016', 7000, 'i love this shit', 'kamasteve ', 15, NULL, 0, 0),
('Aqua Villa', 'J009', 'kamau', '12', 345, 'sdcs', 'kamasteve ', 16, NULL, 0, 0),
('Aqua Villa', 'J010', 'kamau', '12', 345, 'afwe', 'kamasteve ', 17, NULL, 0, 0),
('Prime Hostels', '201', 'kamau', '12', 345, 'stgsr', 'kamasteve ', 18, NULL, 0, 0),
('Prime Hostels', '201', 'James Kariuki', '10/12/2016', 7000, 'Payment for the broken lock', 'kamasteve ', 19, NULL, 0, 0),
('Prime Hostels', '201', 'James Kariuki', '10/12/2016', 7000, 'Payment for cleaning', 'kamasteve ', 20, NULL, 0, 0),
('Prime Hostels', '201', 'kamau', '10/12/2016', 7000, 'dfdb ', 'kamasteve ', 21, NULL, 0, 0),
('Prime Hostels', '201', 'kamau', '10/12/2016', 7000, 'sdfergh', 'kamasteve ', 22, NULL, 0, 0),
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
  `status` varchar(60) NOT NULL DEFAULT 'open'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`invoice`, `invoice_date`, `invoice_due_date`, `property`, `id_unit`, `subtotal`, `shipping`, `discount`, `vat`, `total`, `notes`, `responsible`, `status`) VALUES
(1010, '09/05/2017', '18/05/2017', 102, '201', '7000.00', '', '0.00', '0.00', '7000.00', 'electricity ', 'kamasteve ', 'open'),
(1009, '17/05/2017', '24/05/2017', 101, 'J002', '7250.00', '', '0.00', '0.00', '7250.00', '', 'kamasteve ', 'open'),
(1008, '09/05/2017', '08/05/2017', 101, 'J001', '7000.00', '', '0.00', '0.00', '7000.00', 'qwe gb jh', 'kamasteve ', 'open'),
(1007, '25/05/2017', '11/05/2017', 101, 'J002', '7000.00', '', '0.00', '0.00', '7000.00', '', 'kamasteve ', 'open'),
(1006, '18/05/2017', '25/05/2017', 102, '201', '7000.00', '', '0.00', '0.00', '7000.00', '', 'kamasteve ', 'open'),
(1005, '11/05/2017', '17/05/2017', 101, 'J001', '500.00', '', '0.00', '0.00', '500.00', '', 'kamasteve ', 'open'),
(1004, '11/05/2017', '10/05/2017', 101, 'J001', '6100.00', '', '900.00', '0.00', '6100.00', '', 'kamasteve ', 'open'),
(1003, '16/05/2017', '10/05/2017', 101, 'J001', '7000.00', '', '0.00', '0.00', '7000.00', '', 'kamasteve ', 'open'),
(1002, '19/04/2017', '20/04/2017', 102, '201', '7500.00', '', '0.00', '0.00', '7500.00', '', 'kamasteve ', 'open'),
(1001, '06/04/2017', '28/04/2017', 102, '201', '1750.00', '', '0.00', '0.00', '1750.00', '', 'kamasteve ', 'open'),
(1000, '20/04/2017', '20/04/2017', 101, 'J001', '7700.00', '', '0.00', '0.00', '7700.00', '', 'kamasteve ', 'open');

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
(25, '1010', 'electricity', 1, '7000', '', '7000.00');

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
(109, 'Crystal Apartments', '2009', 'Rental', '970 Thika', 'Thika', '01000', 'Kenya', '2017-04-11 13:11:32', 'Kiambu', 'maragua');

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
(1, 'Aqua Villa', 'February', 'Cash', 'Peter', 'James', 'J001', 26734590, '1234567', 'email', 732456890, 35, '2017-05-08', 'Deposit', NULL, NULL);

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
  MODIFY `payment_id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cash_register`
--
ALTER TABLE `cash_register`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT;
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
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `invoice` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1038;
--
-- AUTO_INCREMENT for table `invoices_backup`
--
ALTER TABLE `invoices_backup`
  MODIFY `invoice` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1006;
--
-- AUTO_INCREMENT for table `invoice_items`
--
ALTER TABLE `invoice_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `invoice_logs`
--
ALTER TABLE `invoice_logs`
  MODIFY `invoice` int(60) NOT NULL AUTO_INCREMENT;
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
  MODIFY `payment_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
