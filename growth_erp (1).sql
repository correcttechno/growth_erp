-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2024 at 07:00 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `growth_erp`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `company` varchar(255) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `birthday` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `rfirstname` varchar(255) DEFAULT NULL,
  `rlastname` varchar(255) DEFAULT NULL,
  `rphone` varchar(255) DEFAULT NULL,
  `remail` varchar(255) DEFAULT NULL,
  `rbirthday` varchar(255) DEFAULT NULL,
  `raddress` varchar(255) DEFAULT NULL,
  `customertype` enum('person','company') NOT NULL DEFAULT 'person',
  `voen` varchar(255) DEFAULT NULL,
  `countworkers` int(11) NOT NULL DEFAULT 0,
  `countobject` int(11) NOT NULL DEFAULT 0,
  `bankname` varchar(255) DEFAULT NULL,
  `bankperson` varchar(255) DEFAULT NULL,
  `bankphone` varchar(255) DEFAULT NULL,
  `anumber` varchar(255) DEFAULT NULL,
  `aid` int(11) NOT NULL DEFAULT 0,
  `apin1` int(11) NOT NULL DEFAULT 0,
  `apin2` int(11) NOT NULL DEFAULT 0,
  `skod` varchar(255) DEFAULT NULL,
  `spass` varchar(255) DEFAULT NULL,
  `vkod` varchar(255) DEFAULT NULL,
  `vpass` varchar(255) DEFAULT NULL,
  `periodictasks` text DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `company`, `firstname`, `lastname`, `phone`, `email`, `birthday`, `address`, `rfirstname`, `rlastname`, `rphone`, `remail`, `rbirthday`, `raddress`, `customertype`, `voen`, `countworkers`, `countobject`, `bankname`, `bankperson`, `bankphone`, `anumber`, `aid`, `apin1`, `apin2`, `skod`, `spass`, `vkod`, `vpass`, `periodictasks`, `date`) VALUES
(1, '', 'Pro Material', 'MMC', '050-823-66-66', 'recebli212@gmail.com', '', '', 'Kərəm', 'Ikramlı', '', '', '', '', 'company', '1007548851', 3, 1, 'Unibank', 'Ad Soyad', '055616515616', '', 0, 0, 0, '', '', '', '', 'null', '2024-11-02 14:16:51'),
(2, '', 'Growth Consulting Services', 'MMC', '+994502353599', 'info@growth.az', '1997-04-24', 'Cefer Cabbarli 44', 'Elnur', 'Veliyev', '0506644917', 'correcttechno@gmail.com', '1997-02-04', 'Cəfər Cabbarlı 46', 'company', '3102903441', 8, 1, 'Unibank', 'Ad Soyad', '055616515616', '1', 2, 3, 45, '4', '5', '6', '7', 'null', '2024-11-02 14:16:51'),
(4, '', 'Agric Store', 'MMC', '+79372583822', 'qara@gmail.com', '', '', 'Qara', 'Məmmədov', '', '', '', '', 'company', '2008574311', 3, 1, '', '', '', '', 0, 0, 0, '', '', '', '', 'null', '2024-11-26 06:48:15'),
(5, '', 'Baku Textile Company', 'MMC', '+994555638313', '', '', '', 'Elçin', 'Nərimanov', '', '', '', '', 'company', '1504265591', 30, 3, '', '', '', '', 0, 0, 0, '', '', '', '', 'null', '2024-11-26 06:48:56'),
(6, '', 'Madeira', 'MMC', '055-262-78-02', '', '', '', 'Akim ', 'Əliyev', '', '', '', '', 'company', '1406312421', 3, 1, '', '', '', '', 0, 0, 0, '', '', '', '', '[\"2\",\"3\"]', '2024-11-28 13:08:09'),
(7, '', 'TEO MED', 'MMC', '', '', '', '', 'Rəşad', 'Məmmədov', '050-229-62-27', '', '', '', 'company', '1504841201', 1, 1, '', '', '', '', 0, 0, 0, '', '', '', '', 'null', '2024-11-28 13:09:30'),
(8, '', 'Baku Esthetic Solutions', 'MMC', '050-212-40-86', 'vugarman@gmail.com', '', '', 'Vuqar', 'Məcnunov', '', '', '', '', 'company', '1603632331', 9, 1, '', '', '', '', 0, 0, 0, '', '', '', '', 'null', '2024-11-28 13:17:42'),
(9, '', 'Delta', 'MMC', '070-899-96-96', '', '', '', 'İsmet', 'Aydogan', '', '', '', '', 'company', '1306520421', 1, 1, '', '', '', '', 0, 0, 0, '', '', '', '', 'null', '2024-11-28 13:18:32'),
(10, '', 'Texnoland', 'MMC', '055-444-20-21', '', '', '', 'Nofəl', '', '', '', '', '', 'company', '2003568231', 1, 1, '', '', '', '', 0, 0, 0, '', '', '', '', 'null', '2024-11-28 13:19:12'),
(11, '', 'Malva-M', 'MMC', '055-424-38-88', '', '', '', 'Azər', 'Molamov', '', '', '', '', 'company', '1005316671', 3, 2, '', '', '', '', 0, 0, 0, '', '', '', '', 'null', '2024-11-28 13:25:18'),
(12, '', 'Rest Travel', 'MMC', '050-449-40-09', '', '', '', 'Vüqar', 'Haqverdiyev', '', '', '', '', 'company', '2002637411', 3, 0, '', '', '', '', 0, 0, 0, '', '', '', '', 'null', '2024-11-28 13:25:55'),
(13, '', 'İsa', 'Bünyatov', '050-636-05-00', '', '', '', 'İsa', 'Bünyatov', '', '', '', '', 'person', '1306897852', 5, 1, '', '', '', '', 0, 0, 0, '', '', '', '', 'null', '2024-11-28 13:26:34'),
(14, '', 'Esma-Butik', 'MMC', '070-314-11-10', '', '', '', 'Əli', 'Cəfərov', '', '', '', '', 'company', '2006815041', 3, 2, '', '', '', '', 0, 0, 0, '', '', '', '', 'null', '2024-11-28 13:32:05'),
(15, '', 'Nərmin', 'Gülməmmədova', '050-211-43-49', '', '', '', 'Nərmin', 'Gülməmmdova', '', '', '', '', 'person', '1006057262', 8, 1, '', '', '', '', 0, 0, 0, '', '', '', '', 'null', '2024-11-28 13:32:54'),
(16, '', 'Medipolitan Sağlık ve Eğitim Hizmetleri', 'Azərbaycandakı nümayəndəliyi', '055-309-44-14', '', '', '', 'Üstün', 'Uygar', '', '', '', '', 'company', '1402978901', 4, 1, '', '', '', '', 0, 0, 0, '', '', '', '', 'null', '2024-11-28 13:33:55'),
(17, '', 'Tofiq', 'Quliyev', '050-214-52-86', '', '', '', 'Tofiq', 'Quliyev', '', '', '', '', 'person', '1702434752', 1, 0, '', '', '', '', 0, 0, 0, '', '', '', '', 'null', '2024-11-28 13:35:06'),
(18, '', 'TulparAz', 'MMC', '070-788-03-87', '', '', '', 'Ceyhun', 'Hüseynov', '', '', '', '', 'company', '1505913711', 3, 0, '', '', '', '', 0, 0, 0, '', '', '', '', 'null', '2024-11-28 13:36:01'),
(19, '', 'Metra', 'MMC', '050-284-19-18', '', '', '', 'Vüqar', 'Məmmədov', '', '', '', '', 'company', '2007328671', 0, 0, '', '', '', '', 0, 0, 0, '', '', '', '', 'null', '2024-11-28 13:48:02'),
(20, '', 'Mehman', 'Tahirov', '070-314-11-10', '', '', '', 'Mehman', 'Tahirov', '', '', '', '', 'person', '6200464512', 0, 0, '', '', '', '', 0, 0, 0, '', '', '', '', 'null', '2024-11-28 13:58:23'),
(21, '', 'AzeriSS', 'MMC', '055-327-29-72', '', '', '', 'İlahe', 'Hüseynova', '', '', '', '', 'company', '3104324541', 3, 0, '', '', '', '', 0, 0, 0, '', '', '', '', 'null', '2024-11-28 13:59:09'),
(22, '', 'Deysver', 'MMC', '050-216-44-14', '', '', '', 'İsa', 'Deystani', '', '', '', '', 'company', '1406120201', 3, 0, '', '', '', '', 0, 0, 0, '', '', '', '', 'null', '2024-11-28 14:00:08'),
(23, '', 'Bakery', 'MMC', '050-288-68-51', '', '', '', 'Nərgiz', 'Kərimova', '', '', '', '', 'company', '1007021942', 0, 0, '', '', '', '', 0, 0, 0, '', '', '', '', 'null', '2024-11-28 14:02:23'),
(24, '', 'Azerclinic', 'MMC', '055-522-38-18', '', '', '', 'Nuranə', 'Bagırova', '', '', '', '', 'company', '1806015981', 0, 0, '', '', '', '', 0, 0, 0, '', '', '', '', 'null', '2024-11-28 14:05:39'),
(25, '', 'Dalivall', 'MMC', '050-210-42-78', '', '', '', 'Vidadi', '', '', '', '', '', 'company', '1406195691', 0, 0, '', '', '', '', 0, 0, 0, '', '', '', '', 'null', '2024-11-28 14:06:27'),
(26, '', 'Orion Supply', 'MMC', '050-789-99-09', '', '', '', 'Seymur', 'Mustafayev', '050-789-99-09', '', '', '', 'company', '1904951351', 3, 0, '', '', '', '', 0, 0, 0, '', '', '', '', 'null', '2024-11-28 14:12:27'),
(27, '', 'Vitaverse', 'MMC', '051-723-92-92', '', '', '', 'Miraga', 'Quliyev', '', '', '', '', 'company', '1008557951', 1, 0, '', '', '', '', 0, 0, 0, '', '', '', '', 'null', '2024-11-28 14:13:13'),
(28, '', 'Ko Trade', 'MMC', '050-669-78-11', '', '', '', 'Togrul', 'Vəliyev', '', '', '', '', 'company', '3105066201', 3, 0, '', '', '', '', 0, 0, 0, '', '', '', '', 'null', '2024-11-28 14:16:06'),
(29, '', 'Aydoganlar', 'MMC', '070-899-96-96', '', '', '', 'İsmet', 'Aydogan', '', '', '', '', 'company', '2008525621', 3, 0, '', '', '', '', 0, 0, 0, '', '', '', '', 'null', '2024-11-28 14:16:41'),
(30, '', 'PTP Azel', 'MMC', '055-444-40-35', '', '', '', 'Yuki', 'Morino', '', '', '', '', 'company', '1406765321', 0, 0, '', '', '', '', 0, 0, 0, '', '', '', '', 'null', '2024-11-28 14:19:49'),
(31, '', 'Khazar Tekstil', 'MMC', '010-512-03-14', '', '', '', 'Cesur', '', '', '', '', '', 'company', '7703750441', 0, 0, '', '', '', '', 0, 0, 0, '', '', '', '', 'null', '2024-11-28 14:23:31'),
(32, '', 'Helind Enerji', 'MMC', '055-471-08-09', '', '', '', 'Orxan', 'Quliyev', '', '', '', '', 'company', '1102385871', 20, 0, '', '', '', '', 0, 0, 0, '', '', '', '', 'null', '2024-11-28 14:37:32'),
(33, '', 'Uzbekistan Gastronom', 'MMC', '050-216-44-14', '', '', '', 'İsa', 'Deystani', '', '', '', '', 'company', '1506540061', 0, 0, '', '', '', '', 0, 0, 0, '', '', '', '', 'null', '2024-11-28 14:38:06'),
(34, '', 'Renovare', 'MMC', '050-886-28-70', '', '', '', 'Zabil', 'Osmanov', '', '', '', '', 'company', '1806829301', 0, 0, '', '', '', '', 0, 0, 0, '', '', '', '', 'null', '2024-11-28 14:38:43'),
(35, '', 'Baku Kliniki Mərkəzi', 'MMC', '055-600-15-08', '', '', '', 'Qadir', 'Məmmədov', '', '', '', '', 'company', '1603179311', 0, 0, '', '', '', '', 0, 0, 0, '', '', '', '', 'null', '2024-11-28 14:39:19'),
(36, '', 'Zəfər Contrakt', 'MMC', '050-210-43-79', '', '', '', 'Rasim', 'Dergahquliyev', '', '', '', '', 'company', '1500018681', 0, 0, '', '', '', '', 0, 0, 0, '', '', '', '', 'null', '2024-11-28 14:43:15'),
(37, '', 'Asrotech', 'MMC', '010-232-21-15', '', '', '', 'Ramin', 'Əliyev', '', '', '', '', 'company', '1805855231', 0, 0, '', '', '', '', 0, 0, 0, '', '', '', '', 'null', '2024-11-28 14:45:03');

-- --------------------------------------------------------

--
-- Table structure for table `customerstype`
--

CREATE TABLE `customerstype` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customerstype`
--

INSERT INTO `customerstype` (`id`, `title`, `date`) VALUES
(1, 'Fiziki şəxs', '2024-10-26 13:35:22'),
(3, 'Hüquqi şəxs', '2024-10-26 13:35:57');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `title`, `date`) VALUES
(3, 'Vergi', '2024-10-21 06:27:13'),
(8, 'Mühasibatlıq', '2024-10-26 13:14:52'),
(9, 'Insan Resurslari', '2024-11-22 14:03:35'),
(10, 'Əməliyyat şöbəsi', '2024-11-22 14:03:57'),
(11, 'Hüquq şöbəsi', '2024-11-22 14:04:26'),
(12, 'İdarə etmə', '2024-11-22 14:04:36');

-- --------------------------------------------------------

--
-- Table structure for table `periodictaskstype`
--

CREATE TABLE `periodictaskstype` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `department_id` int(11) NOT NULL DEFAULT 0,
  `date` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `periodictaskstype`
--

INSERT INTO `periodictaskstype` (`id`, `title`, `department_id`, `date`) VALUES
(2, 'Service 1', 8, '2024-11-10 09:50:40'),
(3, 'Service 2', 3, '2024-11-12 15:16:28');

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

CREATE TABLE `positions` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `positions`
--

INSERT INTO `positions` (`id`, `title`, `content`, `date`) VALUES
(1, 'IT', 'Proqram təminatına dəstək', '2024-10-21 15:38:44'),
(3, 'Təcrübəci əməliyyatçı', 'tabe olduğu işçidən öyrənmək', '2024-11-22 14:15:54'),
(4, 'Əməliyyatçı', '', '2024-11-22 14:16:13'),
(5, 'Aparıcı əməliyyatçı', '', '2024-11-22 14:16:56'),
(6, 'Baş əməliyyatçı', '', '2024-11-22 14:17:28'),
(7, 'Əməliyyatlar üzrə menecer', '', '2024-11-22 14:18:02'),
(8, 'Təcrübəci vergi üzrə mütəxəssis', '', '2024-11-22 14:18:24'),
(9, 'Vergi üzrə mütəxəssis', '', '2024-11-22 14:18:48'),
(10, 'Aparıcı vergi üzrə mütəxəssis', '', '2024-11-22 14:19:22'),
(11, 'Baş vergi üzrə mütəxəssis', '', '2024-11-22 14:19:35'),
(12, 'Vergi işləri üzrə menecer', '', '2024-11-22 14:20:01'),
(13, 'İnsan resursları üzrə təcrübəci', '', '2024-11-22 14:24:03'),
(14, 'İnsan resursları üzrə mütəxəssis', '', '2024-11-22 14:24:24'),
(15, 'İnsan resursları üzrə aparıcı mütəxəssis', '', '2024-11-22 14:24:43'),
(16, 'İnsan resursları üzrə baş mütəxəssis', '', '2024-11-22 14:25:54'),
(17, 'İnsan resursları üzrə menecer', '', '2024-11-22 14:26:06'),
(18, 'İT üzrə menecer', '', '2024-11-22 14:26:58'),
(19, 'PR üzrə menecer', '', '2024-11-22 14:27:43'),
(20, 'Satış üzrə mütəxəssis', '', '2024-11-22 14:27:56'),
(21, 'Reklam və marketing üzrə mütəxəssis', '', '2024-11-22 14:28:14'),
(22, 'Direktor', '', '2024-11-23 10:02:42'),
(23, 'Mühasib təcrübəci', '', '2024-11-23 10:52:14'),
(24, 'Mühasib', '', '2024-11-23 10:52:24'),
(25, 'Aparıcı mühasib', '', '2024-11-23 10:52:35'),
(26, 'Baş mühasib', '', '2024-11-23 10:52:54');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `creator_id` int(11) NOT NULL DEFAULT 0,
  `tasktype_id` int(11) NOT NULL DEFAULT 0,
  `customer_id` int(11) NOT NULL DEFAULT 0,
  `content` text DEFAULT NULL,
  `start` varchar(255) DEFAULT NULL,
  `end` varchar(255) DEFAULT NULL,
  `priority` enum('hight','middle','low') NOT NULL DEFAULT 'hight',
  `users` text DEFAULT NULL,
  `file` text DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `creator_id`, `tasktype_id`, `customer_id`, `content`, `start`, `end`, `priority`, `users`, `file`, `date`) VALUES
(7, 8, 9, 5, 'ıJÜKVN vsbhınc jbvıgrBIV. ckNBUIGBIV nəvohvb ', '2024-11-26', '2024-11-26', 'hight', '[\"11\"]', NULL, '2024-11-26 07:08:31'),
(8, 9, 9, 5, 'Azeriss tesisci borc muqavile', '2024-11-26', '2024-11-26', 'middle', '[\"9\"]', NULL, '2024-11-26 08:38:14'),
(9, 9, 8, 5, 'Azeriss RT Kimya odenis', '2024-11-26', '2024-11-26', 'middle', '[\"9\"]', NULL, '2024-11-26 08:39:25'),
(10, 9, 7, 5, 'Fiziki Şəxs Nicat hesab acmaq ATB bankda', '2024-11-26', '2024-11-26', 'middle', '[\"9\"]', NULL, '2024-11-26 08:40:06'),
(11, 9, 5, 5, 'BTC qaime gondermek', '2024-11-26', '2024-11-26', 'hight', '[\"9\"]', NULL, '2024-11-26 08:40:33'),
(12, 9, 6, 5, 'PTP AZEL AQTA qeydiyyata duzelis', '2024-11-26', '2024-11-26', 'hight', '[\"9\"]', NULL, '2024-11-26 08:44:12'),
(13, 9, 8, 5, 'Helind Tamerlan odenis etmek', '2024-11-26', '2024-11-26', 'hight', '[\"9\"]', NULL, '2024-11-26 08:45:43'),
(14, 11, 5, 5, 'Qaimə göndər zəhmət olmasa', '2024-11-26', '2024-11-26', 'hight', '[\"9\"]', NULL, '2024-11-26 09:11:09'),
(15, 9, 8, 5, 'Pro material qisa idxal odenis', '2024-11-26', '2024-11-26', 'hight', '[\"9\"]', NULL, '2024-11-26 10:29:30'),
(16, 9, 8, 5, 'Orion odenis Dincer', '2024-11-26', '2024-11-26', 'middle', '[\"9\"]', NULL, '2024-11-26 10:30:15'),
(17, 9, 5, 5, 'Orion qaime kes', '2024-11-26', '2024-11-26', 'middle', '[\"9\"]', NULL, '2024-11-26 12:07:47'),
(18, 9, 5, 5, 'Pro Material qaime gonder', '2024-11-26', '2024-11-26', 'hight', '[\"9\"]', NULL, '2024-11-26 12:08:18'),
(19, 9, 9, 5, 'Helind sened hazirlamaq', '2024-11-26', '2024-11-26', 'middle', '[\"9\"]', NULL, '2024-11-26 12:15:44'),
(20, 9, 8, 5, ' BTC emek haqqi odenisi', '2024-11-26', '2024-11-26', 'middle', '[\"9\"]', NULL, '2024-11-26 13:29:35'),
(21, 10, 8, 4, 'Azercell', '2024-11-26', '2024-11-26', 'middle', '[\"10\"]', NULL, '2024-11-26 13:37:11'),
(22, 10, 5, 4, 'Giləzi 447.300 ton 340 Azn', '2024-11-26', '2024-11-26', 'hight', '[\"10\"]', NULL, '2024-11-26 13:38:24'),
(23, 10, 5, 4, 'Agro Fermer 1089.100 ton 400 Azn', '2024-11-26', '2024-11-26', 'hight', '[\"10\"]', NULL, '2024-11-26 13:39:12'),
(24, 10, 5, 4, 'Agro Fermer 1022.150 ton', '2024-11-26', '2024-11-26', 'hight', '[\"10\"]', NULL, '2024-11-26 13:39:52'),
(25, 10, 5, 4, 'Vergidə Qısa İdxalın Bəyan Edilməsi.\nGiləzi 207.100 ton 400 Azn', '2024-11-26', '2024-11-26', 'hight', '[\"10\"]', NULL, '2024-11-26 13:41:45'),
(26, 10, 8, 5, 'Bizneskarta köçürmə 500 Azn', '2024-11-26', '2024-11-26', 'hight', '[\"10\"]', NULL, '2024-11-26 13:42:14'),
(27, 10, 8, 4, 'Favorit 2226.71 usd Avans ödənişi', '2024-11-26', '2024-11-26', 'hight', '[\"10\"]', NULL, '2024-11-26 13:43:39'),
(28, 10, 9, 4, 'Lider Customs ödəniş (Araz icra etdi)', '2024-11-26', '2024-11-26', 'hight', '[\"10\"]', NULL, '2024-11-26 13:44:07'),
(29, 10, 9, 4, 'Notarius Hesabdan Çıxarış (Yadulla bəy)', '2024-11-26', '2024-11-26', 'hight', '[\"10\"]', NULL, '2024-11-26 13:49:27'),
(30, 10, 5, 5, 'Eqaimə General Supply (Araz icra etdi)', '2024-11-26', '2024-11-26', 'hight', '[\"10\"]', NULL, '2024-11-26 13:50:19'),
(31, 10, 5, 5, 'Eqaimə Parritoas', '2024-11-26', '2024-11-26', 'hight', '[\"10\"]', NULL, '2024-11-26 13:50:49'),
(32, 10, 8, 5, 'Əmək haqqı (Oktyabr) Teomed', '2024-11-26', '2024-11-26', 'hight', '[\"10\"]', NULL, '2024-11-26 13:53:18'),
(33, 10, 5, 4, 'Khazar Eqaimə My Vmr Göz yumaq üçün maye 4 ədəd 35 Azn', '2024-11-27', '2024-11-27', 'hight', '[\"10\"]', NULL, '2024-11-27 05:18:34'),
(34, 9, 6, 5, 'PTP AZEL gomruk kodu almaq', '2024-11-27', '2024-11-27', 'middle', '[\"9\"]', NULL, '2024-11-27 06:32:25'),
(35, 9, 9, 5, 'Helind iSB cedvel qurmaq', '2024-11-27', '2024-11-27', 'middle', '[\"9\"]', NULL, '2024-11-27 06:32:57'),
(36, 9, 5, 5, 'Orion qaime pdf tesdiqlemek', '2024-11-27', '2024-11-27', 'middle', '[\"9\"]', NULL, '2024-11-27 06:33:23'),
(37, 9, 5, 5, 'Helind qaime tesdiq etmek', '2024-11-27', '2024-11-27', 'middle', '[\"9\"]', NULL, '2024-11-27 06:33:51'),
(38, 9, 8, 5, 'Baku Klinik edv odenis etmek', '2024-11-27', '2024-11-27', 'middle', '[\"9\"]', NULL, '2024-11-27 06:34:14'),
(39, 9, 8, 5, 'Helind ygb odemek', '2024-11-27', '2024-11-27', 'middle', '[\"9\"]', NULL, '2024-11-27 06:35:25'),
(40, 9, 8, 5, 'Enex borc demek vergi', '2024-11-27', '2024-11-27', 'middle', '[\"9\"]', NULL, '2024-11-27 06:35:50'),
(41, 9, 5, 5, 'Helind 4 qaime gondermek', '2024-11-27', '2024-11-27', 'hight', '[\"9\"]', NULL, '2024-11-27 06:48:14'),
(42, 9, 8, 5, 'Helind odenis etmek LUCKY OFFICE MMC', '2024-11-27', '2024-11-27', 'middle', '[\"9\"]', NULL, '2024-11-27 07:24:08'),
(43, 10, 9, 4, 'Dalivvall Tender sənədlərinin hazırlanması', '2024-11-27', '2024-11-29', 'hight', '[\"10\"]', NULL, '2024-11-27 07:40:13'),
(44, 9, 5, 5, 'Pro material qaime ', '2024-11-27', '2024-11-27', 'middle', '[\"9\"]', NULL, '2024-11-27 08:00:15'),
(45, 9, 9, 5, 'Pro material qaime alt senedleri', '2024-11-27', '2024-11-27', 'middle', '[\"9\"]', NULL, '2024-11-27 08:14:24'),
(46, 9, 8, 5, 'Pro material icare odenisi', '2024-11-27', '2024-11-27', 'middle', '[\"9\"]', NULL, '2024-11-27 08:15:51'),
(47, 9, 8, 5, 'Pro material xarici odenis', '2024-11-27', '2024-11-27', 'middle', '[\"9\"]', NULL, '2024-11-27 08:19:05'),
(48, 9, 10, 5, 'Helind İSB etmek', '2024-11-27', '2024-11-27', 'low', '[\"9\"]', NULL, '2024-11-27 08:44:02'),
(49, 9, 8, 5, 'Helind odenis etmek', '2024-11-27', '2024-11-27', 'middle', '[\"9\"]', NULL, '2024-11-27 08:44:21'),
(50, 10, 5, 5, 'Ko Trade Eqaimə (Şöhrət İsmayılov Xırdalan)', '2024-11-27', '2024-11-27', 'hight', '[\"10\"]', NULL, '2024-11-27 08:51:59'),
(51, 10, 8, 5, 'Papa Johns Mirzəyev Ceyhun Büdcə Ödənişləri və Eqaimə (Araz icra edir)', '2024-11-27', '2024-11-27', 'hight', '[\"10\"]', NULL, '2024-11-27 09:02:18'),
(53, 9, 8, 5, 'Grous odenis', '2024-11-27', '2024-11-27', 'middle', '[\"9\"]', NULL, '2024-11-27 10:36:46'),
(54, 9, 8, 5, 'Grous icare odenisi', '2024-11-27', '2024-11-27', 'middle', '[\"9\"]', NULL, '2024-11-27 11:00:12'),
(55, 9, 5, 5, 'Orion Supply qaime gonder', '2024-11-27', '2024-11-27', 'middle', '[\"9\"]', NULL, '2024-11-27 11:29:16'),
(56, 9, 8, 5, 'Helind hesablararasi kocurme', '2024-11-27', '2024-11-27', 'middle', '[\"9\"]', NULL, '2024-11-27 11:47:34'),
(57, 9, 8, 5, 'Helind biznes karta kocurme', '2024-11-27', '2024-11-27', 'middle', '[\"9\"]', NULL, '2024-11-27 12:03:05'),
(58, 9, 8, 5, 'Helind DESIGN COMPANY MAHDUD MASULIYYATLI CAMIYYATI odenis', '2024-11-27', '2024-11-27', 'middle', '[\"9\"]', NULL, '2024-11-27 12:06:49'),
(59, 10, 5, 4, 'Agric Баку Faylının işlənməsi', '2024-11-27', '2024-11-27', 'hight', '[\"10\"]', NULL, '2024-11-27 12:30:29'),
(60, 10, 5, 4, 'Agric Rusiyaya vurulan avansların Ygb-lərini bankda göndərmək', '2024-11-27', '2024-11-27', 'hight', '[\"10\"]', NULL, '2024-11-27 12:31:17'),
(61, 10, 8, 4, 'Bes Dsmf ödənişi', '2024-11-27', '2024-11-27', 'hight', '[\"10\"]', NULL, '2024-11-27 13:31:59'),
(62, 9, 9, 5, 'Pro material MMC muqavile hazirlamaq', '2024-11-28', '2024-11-28', 'middle', '[\"9\"]', NULL, '2024-11-28 04:57:30'),
(63, 10, 8, 8, 'Əmək haqqı ödənişi, kredit xəttindən', '2024-11-28', '2024-11-28', 'hight', '[\"10\"]', NULL, '2024-11-28 05:47:04'),
(64, 10, 8, 30, 'Dsmf ödənişləri', '2024-11-28', '2024-11-29', 'middle', '[\"10\"]', NULL, '2024-11-28 05:47:32'),
(65, 10, 5, 4, 'Papa Johns Asan imza göndərilməsi, Təhvil-Təslim Aktı', '2024-11-28', '2024-11-28', 'hight', '[\"10\"]', NULL, '2024-11-28 05:48:31'),
(66, 9, 9, 5, 'BES emek haqqi cedveli hazirlamaq', '2024-11-28', '2024-11-28', 'middle', '[\"9\"]', NULL, '2024-11-28 05:53:30'),
(67, 9, 9, 5, 'Grous-Helind muqavileye elave', '2024-11-28', '2024-11-28', 'middle', '[\"9\"]', NULL, '2024-11-28 06:16:27'),
(68, 10, 5, 4, 'Bes Eqaimənin ləğvə göndərilməsi MT241011520734', '2024-11-28', '2024-11-28', 'hight', '[\"10\"]', NULL, '2024-11-28 06:21:44'),
(69, 10, 5, 4, 'Agric Eqaimə Giləzi 297.100 ton 350 Azn Ygb 01241000486027', '2024-11-28', '2024-11-28', 'hight', '[\"10\"]', NULL, '2024-11-28 06:42:56'),
(70, 9, 8, 5, 'Azeriss odenis Dircelis', '2024-11-28', '2024-11-28', 'hight', '[\"9\"]', NULL, '2024-11-28 07:11:26'),
(71, 10, 10, 4, 'Depozit hesabına mədaxili qrupa göndərmək Btc dən gndərilən 5000 Azn-in', '2024-11-28', '2024-11-28', 'hight', '[\"10\"]', NULL, '2024-11-28 07:30:23'),
(72, 9, 8, 5, 'Helind vergi odenisi', '2024-11-28', '2024-11-28', 'middle', '[\"9\"]', NULL, '2024-11-28 08:22:01'),
(73, 9, 8, 5, 'Orion pasa sigorta odenis', '2024-11-28', '2024-11-28', 'middle', '[\"9\"]', NULL, '2024-11-28 08:36:13'),
(74, 10, 10, 4, 'Agric, Bakı Taxıl Terminalı Debitor, Qara bəyə təqdim ediləcək', '2024-11-28', '2024-11-28', 'hight', '[\"10\"]', NULL, '2024-11-28 08:57:19'),
(75, 10, 13, 25, 'Dalivval Tender, Meyar 1(bunu Elnur Müəllimdəndən dəqiqləşdir), Meyar 2, Meyar 3 sənədlərini qrupa göndərmək', '2024-11-29', '2024-11-29', 'middle', '[\"10\"]', NULL, '2024-11-28 08:59:58'),
(76, 9, 5, 5, 'Qaimələr göndər', '2024-11-28', '2024-11-28', 'middle', '[\"9\"]', NULL, '2024-11-28 09:26:20'),
(77, 10, 8, 18, 'Tulpar Dsmf ödənişi', '2024-11-28', '2024-11-29', 'hight', '[\"10\"]', NULL, '2024-11-28 09:58:35'),
(78, 10, 8, 18, 'Tulpar Əmək haqqı Ceyhun Hüseynov', '2024-11-30', '2024-11-30', 'middle', '[\"10\"]', NULL, '2024-11-28 09:59:28'),
(79, 10, 8, 18, 'Tulpar Gorus xidmət ödənişi', '2024-11-30', '2024-11-30', 'middle', '[\"10\"]', NULL, '2024-11-28 10:00:11'),
(80, 9, 8, 5, 'Helind odenis etmek 3 qaime', '2024-11-28', '2024-11-28', 'middle', '[\"9\"]', NULL, '2024-11-28 11:03:41'),
(81, 9, 5, 5, 'Grous Helind qaime kesmek', '2024-11-28', '2024-11-28', 'middle', '[\"9\"]', NULL, '2024-11-28 11:04:06'),
(82, 9, 8, 5, 'Helind Grous odenis etmek', '2024-11-28', '2024-11-28', 'middle', '[\"9\"]', NULL, '2024-11-28 11:04:27'),
(83, 9, 8, 5, 'Helind Azpetrol odenis etmek', '2024-11-28', '2024-11-28', 'middle', '[\"9\"]', NULL, '2024-11-28 12:11:58'),
(84, 9, 8, 5, 'BTC emek haqqi odenisi', '2024-11-28', '2024-11-28', 'middle', '[\"9\"]', NULL, '2024-11-28 12:12:25'),
(85, 9, 8, 5, 'Orion xarici kocurme (sabah)', '2024-11-29', '2024-11-29', 'middle', '[\"9\"]', NULL, '2024-11-28 12:41:56'),
(86, 9, 8, 5, 'Helind odenis Moonstar (sabah)', '2024-11-29', '2024-11-29', 'middle', '[\"9\"]', NULL, '2024-11-28 13:03:46'),
(87, 8, 14, 2, 'gonderdiyim excelde her kes ozune aid melumatlari doldurub mene gondersin', '2024-11-28', '2024-11-30', 'hight', '[\"11\",\"10\",\"9\",\"3\"]', NULL, '2024-11-28 13:23:33'),
(88, 10, 14, 8, 'Mərkəzi Ekspreetiza Bürosu AtaTenologiya ödəniş', '2024-11-28', '2024-11-28', 'hight', '[\"10\"]', NULL, '2024-11-28 13:53:04'),
(89, 10, 8, 8, 'Bes Respublika Sanitariya Mərkəzi Ödəniş', '2024-11-28', '2024-11-28', 'hight', '[\"10\"]', NULL, '2024-11-28 13:53:32'),
(90, 10, 10, 25, 'Btc-dən vurulan 5000 Azn +ƏDV-nin ödəniş tapşırıqlarını qrupa göndərmək (bank və depozitdən)', '2024-11-28', '2024-11-28', 'middle', '[\"10\"]', NULL, '2024-11-28 18:33:20'),
(91, 10, 10, 8, 'Əli bəy(kurator) ilə əlaqə, 452 Azn-i kredit xəttinə qaytaran zaman məxaricdə 452 Azn deyil 359.24 Azn və 92.76 Azn 2 fərqli rəqəm qeyd edildi(dəqiqləşdir faiz və ya komissiya olduğu üçün ola bilər)', '2024-11-29', '2024-11-29', 'hight', '[\"10\"]', NULL, '2024-11-28 18:37:04'),
(92, 9, 8, 32, 'Helind Turan-A odenis etmek', '2024-11-29', '2024-11-29', 'hight', '[\"9\"]', NULL, '2024-11-29 05:12:24'),
(93, 9, 8, 26, 'Konvertasiya etmek', '2024-11-29', '2024-11-29', 'middle', '[\"9\"]', NULL, '2024-11-29 05:23:36'),
(94, 9, 8, 32, 'Meqaaz odenis etmek avans', '2024-11-29', '2024-11-29', 'middle', '[\"9\"]', NULL, '2024-11-29 06:26:58'),
(95, 10, 8, 8, 'Bizneskarta kredit xəttindən 10500 Azn ödəniş', '2024-11-29', '2024-11-29', 'middle', '[\"10\"]', NULL, '2024-11-29 07:10:03'),
(96, 10, 8, 4, 'Bizneskarta 500 Azn köçürmə', '2024-11-29', '2024-11-29', 'middle', '[\"10\"]', NULL, '2024-11-29 07:10:36'),
(97, 11, 8, 5, 'İcarə ödənişi 11min Tağıyeva Qəribə', '2024-11-29', '2024-11-29', 'hight', '[\"9\"]', NULL, '2024-11-29 07:35:16'),
(98, 11, 14, 5, 'Post terminal ve kassanin her iki magazadan addan cixarilmasi', '2024-11-29', '2024-11-29', 'hight', '[\"9\"]', NULL, '2024-11-29 07:36:04'),
(99, 10, 8, 28, 'Qarşı tərəfin səhvən depozit əvəzinə banka vurduğu ədv ni depozit hesabına köçür', '2024-11-29', '2024-11-29', 'middle', '[\"10\"]', NULL, '2024-11-29 07:42:06'),
(100, 9, 8, 32, 'Əliyev Məhəmməd ödəniş qaimə əsasən', '2024-11-29', '2024-11-29', 'middle', '[\"9\"]', NULL, '2024-11-29 07:43:40'),
(101, 9, 8, 35, 'İcare odenisi', '2024-11-29', '2024-11-29', 'middle', '[\"9\"]', NULL, '2024-11-29 07:56:02'),
(102, 9, 8, 35, 'İcare qaimesi kesmek', '2024-11-29', '2024-11-29', 'middle', '[\"9\"]', NULL, '2024-11-29 08:01:11'),
(103, 10, 8, 8, 'İcarə və ÖMV ödənişi kredit xəttindən', '2024-11-29', '2024-11-29', 'hight', '[\"10\"]', NULL, '2024-11-29 08:01:16'),
(104, 11, 14, 9, 'Hesab faktura', '2024-11-29', '2024-11-29', 'middle', '[\"11\"]', NULL, '2024-11-29 08:02:07'),
(105, 9, 8, 26, 'Orion odenis bilet', '2024-11-29', '2024-11-29', 'middle', '[\"9\"]', NULL, '2024-11-29 08:35:17'),
(106, 10, 8, 18, 'Grous Noyabr ödənişi', '2024-11-29', '2024-11-29', 'middle', '[\"10\"]', NULL, '2024-11-29 08:50:30'),
(107, 10, 8, 18, 'Ceyhun bəy Maaş ödənişi', '2024-11-29', '2024-11-29', 'hight', '[\"10\"]', NULL, '2024-11-29 08:51:01'),
(108, 10, 8, 15, 'Maaş ödənişi', '2024-11-29', '2024-11-29', 'hight', '[\"10\"]', NULL, '2024-11-29 11:00:46'),
(109, 10, 8, 18, 'Xarici köçürmə Cy 1125 Usd', '2024-11-29', '2024-11-29', 'middle', '[\"10\"]', NULL, '2024-11-29 11:32:23'),
(110, 10, 8, 4, 'ADY Ödəniş (Araz icra edir)', '2024-11-29', '2024-11-29', 'middle', '[\"10\"]', NULL, '2024-11-29 12:11:11'),
(111, 10, 11, 4, '137.650-Zarat-335 azn- vergi məlumat', '2024-11-30', '2024-11-30', 'middle', '[\"10\"]', NULL, '2024-11-30 07:12:39'),
(112, 10, 5, 4, '145.600 - Zarat- 335 azn - qaimə', '2024-11-30', '2024-11-30', 'middle', '[\"10\"]', NULL, '2024-11-30 07:13:18'),
(113, 9, 9, 1, 'Təsisçi borc müqaviləsi', '2024-12-02', '2024-12-02', 'low', '[\"9\"]', NULL, '2024-12-02 05:16:06'),
(114, 10, 8, 18, 'Xarici Köçürmə Yongkang 7275 Euro', '2024-12-02', '2024-12-02', 'middle', '[\"10\"]', NULL, '2024-12-02 06:48:22'),
(115, 10, 8, 4, 'Azpetrol yanacaq ödənişi 500 Azn', '2024-12-02', '2024-12-02', 'middle', '[\"10\"]', NULL, '2024-12-02 07:25:23'),
(116, 10, 8, 18, 'Tulpar Rabitəbank Rusiyadan 16.09.2024 tarixində səhv təyinatla vurulan ödənişin geri qaytarılması', '2024-12-02', '2024-12-02', 'middle', '[\"10\"]', NULL, '2024-12-02 07:52:40'),
(117, 10, 8, 15, 'Elnur Print MMC 3121 Azn', '2024-12-02', '2024-12-02', 'middle', '[\"10\"]', NULL, '2024-12-02 10:04:57'),
(118, 8, 8, 2, 'ABV (bayaqki muqavile uzre) 474 AZN (EDV daxil) odenis et,edv-ni depozitden ode', '2024-12-02', '2024-12-02', 'hight', '[\"9\"]', NULL, '2024-12-02 10:21:36'),
(119, 8, 5, 2, 'Agrice avans qaimesi gondermek', '2024-12-02', '2024-12-02', 'hight', '[\"9\"]', NULL, '2024-12-02 10:37:26'),
(120, 10, 5, 8, 'Mərkəzi Ekspertiza Bürosuna İcarə Eqaiməsi göndərmək', '2024-12-02', '2024-12-02', 'middle', '[\"10\"]', NULL, '2024-12-02 11:35:08'),
(121, 10, 8, 4, 'ADY Ödəniş (Araz icra edir)', '2024-12-02', '2024-12-02', 'middle', '[\"10\"]', NULL, '2024-12-02 12:08:34'),
(122, 10, 14, 37, 'Lider Customs Ödəniş (Araz icra edir)', '2024-12-02', '2024-12-02', 'middle', '[\"10\"]', NULL, '2024-12-02 12:09:02'),
(123, 10, 10, 8, 'Maliyyə hesabatı dəqiqləşmə', '2024-12-02', '2024-12-02', 'middle', '[\"10\"]', NULL, '2024-12-02 12:25:22'),
(124, 8, 14, 37, 'cfgvbhjnmk', '2024-12-02', '2024-12-13', 'hight', '[\"7\"]', NULL, '2024-12-02 19:28:04'),
(125, 8, 14, 37, '', '2024-12-02', '2024-12-02', 'hight', '[\"15\",\"12\",\"10\",\"7\"]', NULL, '2024-12-02 19:33:46'),
(126, 10, 8, 8, 'Təsisçi Borc Müqaviləsinə əsasən təsisşiyə borcun geri qaytarılması 10000 Azn', '2024-12-03', '2024-12-03', 'middle', '[\"10\"]', NULL, '2024-12-03 05:51:11'),
(127, 10, 10, 18, 'Ceyhun bəyə 02.12.2024 tarixində Yongkang şirkətinə icra edilən 7275 Euro köçürməni excelə əlavə edib göndərmək(bu ümumi exceldir, mədaxillər əsasında məxaricləri qeyd edirik, hansı pul gəldi və ödəndi)', '2024-12-03', '2024-12-03', 'middle', '[\"10\"]', NULL, '2024-12-03 06:14:04'),
(128, 10, 13, 25, 'Debitor, kreditor, Bank qalığı, depozit exceldə hazırlayıb qrupa göndərmək', '2024-12-03', '2024-12-03', 'middle', '[\"10\"]', NULL, '2024-12-03 06:41:20'),
(129, 10, 9, 18, 'Güven Celik, Xarici köçürmə sənədlərinin yoxlanması', '2024-12-03', '2024-12-03', 'middle', '[\"10\"]', NULL, '2024-12-03 10:43:01'),
(130, 10, 8, 18, 'Tulpar Xarici Köçürmə, Güven Celik', '2024-12-03', '2024-12-03', 'middle', '[\"10\"]', NULL, '2024-12-03 11:21:10'),
(131, 10, 8, 15, 'Aylıq ödənişlərin icrası', '2024-12-03', '2024-12-03', 'middle', '[\"10\"]', NULL, '2024-12-03 14:21:45');

-- --------------------------------------------------------

--
-- Table structure for table `taskstype`
--

CREATE TABLE `taskstype` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `taskstype`
--

INSERT INTO `taskstype` (`id`, `title`, `date`) VALUES
(2, 'Vergi Hesabatının təqdim edilməsi', '2024-11-03 03:37:17'),
(4, 'Vahid beyenname', '2024-11-20 14:29:07'),
(5, 'Elektron qaime gonder', '2024-11-20 14:29:14'),
(6, 'Obyektin qeydiyyatı', '2024-11-26 06:43:39'),
(7, 'Bank hesabının açılması', '2024-11-26 06:43:51'),
(8, 'Ödənişin həyata keçirilməsi', '2024-11-26 06:44:19'),
(9, 'Müqavilə hazırlanması', '2024-11-26 06:44:34'),
(10, 'Bank hesabindan çıxarış', '2024-11-27 08:11:41'),
(11, 'Qısa idxalın vergiyə bəyan edilməsi', '2024-11-27 08:12:05'),
(12, 'Adoc proqramında sənədlərin imzalanması', '2024-11-27 08:12:29'),
(13, 'tender senedleri üçün müraciet etmək', '2024-11-27 08:13:12'),
(14, 'Digər tapşırıqlar', '2024-11-28 13:21:03');

-- --------------------------------------------------------

--
-- Table structure for table `tasks_log`
--

CREATE TABLE `tasks_log` (
  `id` int(11) NOT NULL,
  `task_id` int(11) NOT NULL DEFAULT 0,
  `user_id` int(11) NOT NULL DEFAULT 0,
  `note` text DEFAULT NULL,
  `status` enum('notanswer','answered') NOT NULL DEFAULT 'notanswer',
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tasks_log`
--

INSERT INTO `tasks_log` (`id`, `task_id`, `user_id`, `note`, `status`, `date`) VALUES
(7, 5, 3, '', 'answered', '2024-11-20 14:31:42'),
(8, 7, 3, 'senedler tam deyil,musteriden istenildi', 'notanswer', '2024-11-26 07:12:58'),
(9, 7, 11, '', 'answered', '2024-11-26 07:13:28'),
(10, 14, 9, 'İcra edildi', 'answered', '2024-11-26 10:55:14'),
(11, 11, 9, '', 'answered', '2024-11-26 10:55:33'),
(12, 8, 9, '', 'answered', '2024-11-26 10:55:41'),
(13, 12, 9, '', 'answered', '2024-11-26 10:55:48'),
(14, 15, 9, '', 'answered', '2024-11-26 10:55:51'),
(15, 13, 9, '', 'answered', '2024-11-26 10:55:56'),
(16, 16, 9, '', 'answered', '2024-11-26 11:02:39'),
(17, 17, 9, '', 'answered', '2024-11-26 12:07:51'),
(18, 18, 9, '', 'answered', '2024-11-26 12:13:23'),
(19, 19, 9, '', 'answered', '2024-11-26 12:32:58'),
(20, 9, 9, '', 'answered', '2024-11-26 12:54:09'),
(21, 20, 9, '', 'answered', '2024-11-26 13:32:03'),
(22, 21, 10, '', 'answered', '2024-11-26 13:37:23'),
(23, 26, 10, '', 'answered', '2024-11-26 13:42:56'),
(24, 25, 10, '', 'answered', '2024-11-26 13:42:59'),
(25, 24, 10, '', 'answered', '2024-11-26 13:43:01'),
(26, 23, 10, '', 'answered', '2024-11-26 13:43:04'),
(27, 22, 10, '', 'answered', '2024-11-26 13:43:06'),
(28, 28, 10, '', 'answered', '2024-11-26 13:45:29'),
(29, 27, 10, '', 'answered', '2024-11-26 13:45:32'),
(30, 31, 10, '', 'answered', '2024-11-26 13:51:53'),
(31, 30, 10, '', 'answered', '2024-11-26 13:51:55'),
(32, 29, 10, '', 'answered', '2024-11-26 13:51:57'),
(33, 32, 10, '', 'answered', '2024-11-26 13:53:28'),
(34, 33, 10, '', 'answered', '2024-11-27 05:18:38'),
(35, 39, 9, '', 'answered', '2024-11-27 06:35:54'),
(36, 37, 9, '', 'answered', '2024-11-27 06:35:59'),
(37, 36, 9, '', 'answered', '2024-11-27 06:36:03'),
(38, 34, 9, '', 'answered', '2024-11-27 06:36:06'),
(39, 41, 9, '', 'answered', '2024-11-27 07:21:39'),
(40, 42, 9, '', 'answered', '2024-11-27 07:32:28'),
(41, 43, 10, '', 'answered', '2024-11-27 08:04:28'),
(42, 44, 9, '', 'answered', '2024-11-27 08:12:51'),
(43, 45, 9, '', 'answered', '2024-11-27 08:14:33'),
(44, 47, 9, '', 'answered', '2024-11-27 08:42:36'),
(45, 35, 9, '', 'answered', '2024-11-27 08:42:57'),
(46, 48, 9, '', 'answered', '2024-11-27 08:44:05'),
(47, 49, 9, '', 'answered', '2024-11-27 08:52:32'),
(48, 46, 9, '', 'answered', '2024-11-27 08:54:06'),
(49, 40, 9, '', 'answered', '2024-11-27 09:27:11'),
(50, 50, 10, '', 'answered', '2024-11-27 10:42:33'),
(51, 51, 10, '', 'answered', '2024-11-27 11:04:32'),
(52, 55, 9, '', 'answered', '2024-11-27 11:29:21'),
(53, 56, 9, '', 'answered', '2024-11-27 12:02:44'),
(54, 57, 9, '', 'answered', '2024-11-27 12:06:21'),
(55, 60, 10, '', 'answered', '2024-11-27 12:31:25'),
(56, 58, 9, '', 'answered', '2024-11-27 12:35:26'),
(57, 59, 10, '', 'answered', '2024-11-27 12:47:42'),
(58, 61, 10, '', 'answered', '2024-11-27 13:59:53'),
(59, 38, 9, '', 'answered', '2024-11-28 04:56:58'),
(60, 62, 9, '', 'answered', '2024-11-28 04:57:34'),
(61, 65, 10, '', 'answered', '2024-11-28 05:48:36'),
(62, 53, 9, '', 'answered', '2024-11-28 05:52:48'),
(63, 54, 9, '', 'answered', '2024-11-28 06:02:36'),
(64, 68, 10, '', 'answered', '2024-11-28 06:28:07'),
(65, 69, 10, '', 'answered', '2024-11-28 07:01:06'),
(66, 67, 9, '', 'answered', '2024-11-28 07:10:52'),
(67, 70, 9, '', 'answered', '2024-11-28 07:33:19'),
(68, 71, 10, '', 'answered', '2024-11-28 08:09:50'),
(69, 73, 9, '', 'answered', '2024-11-28 08:36:17'),
(70, 72, 9, '', 'answered', '2024-11-28 09:07:32'),
(71, 66, 9, '', 'answered', '2024-11-28 09:25:53'),
(72, 80, 9, '', 'answered', '2024-11-28 11:03:44'),
(73, 81, 9, '', 'answered', '2024-11-28 11:13:30'),
(74, 82, 9, '', 'answered', '2024-11-28 11:27:54'),
(75, 76, 9, '', 'answered', '2024-11-28 12:37:55'),
(76, 84, 9, '', 'answered', '2024-11-28 12:41:35'),
(77, 83, 9, '', 'answered', '2024-11-28 13:03:22'),
(78, 63, 10, '', 'answered', '2024-11-28 13:50:31'),
(79, 88, 10, '', 'answered', '2024-11-28 13:53:09'),
(80, 89, 10, '', 'answered', '2024-11-28 13:53:36'),
(81, 77, 10, '', 'answered', '2024-11-28 14:00:18'),
(82, 74, 10, '', 'answered', '2024-11-28 18:30:59'),
(83, 90, 10, '', 'answered', '2024-11-28 18:33:25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `status` enum('user','admin') NOT NULL DEFAULT 'user',
  `token` varchar(255) DEFAULT NULL,
  `department_id` int(11) NOT NULL DEFAULT 0,
  `position_id` int(11) NOT NULL DEFAULT 0,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `gender` enum('male','female') NOT NULL DEFAULT 'male',
  `birthday` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `photo` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `status`, `token`, `department_id`, `position_id`, `firstname`, `lastname`, `password`, `address`, `phone`, `email`, `date`, `gender`, `birthday`, `content`, `photo`) VALUES
(3, 'admin', 'c2fbcd9fe54bb80d8146bc4c4f7694c32c6ff45d68f4766d88a9c79bb59608d693614ddc066b2181', 3, 10, 'Əsmər', 'Qənibərova', 'f64632bc4c4d1702fd92ce9354692332', 'Ceyranbatan', '+99410238001', 'esmeryolcuyeva@growth.az', '2024-10-26 13:00:58', 'female', '1999-03-11', '', NULL),
(7, 'user', '874b3a9543c94013485f5bf5b1ccf293f22755d4c60c2ee8ead699fedfc2a1c7b97c76ee31983e2e', 8, 24, 'Günay', 'Murseyfullayeva', 'f64632bc4c4d1702fd92ce9354692332', 'Baki', '+994102308005', 'gunay.mirseyfullayeva@growth.az', '2024-11-20 14:30:32', 'female', '1990-09-11', '', NULL),
(8, 'admin', 'f0213414940a72cc8600aef43fea8afb8127b73593df8f93daa7ee22cd314b6e35d683e42ec9f226', 12, 22, 'Elnur', 'Vəliyev', 'e28035f819e5bc6b76efed05002ea798', 'Bakı şəhəri', '+994502353599', 'elnur@growth.az', '2024-11-23 10:03:31', 'male', '1986-12-12', '', NULL),
(9, 'user', 'ac09d2477ea8a6ce59d683b606e66bd66bdb19640c6665df57d4eb69b8e1da64eb1abda79190d28a', 10, 5, 'Günel', 'Əmiraslanova', 'f64632bc4c4d1702fd92ce9354692332', 'Sumqayıt', '+994102308002', 'gunel.emiraslanova@growth.az', '2024-11-23 10:10:29', 'female', '', '', NULL),
(10, 'user', '3cbd99dc7bc4013a047b10d99577ad4815e360c96895c578c54b85b05fea73caf22fe869d26da1fa', 10, 4, 'Mirməhəmməd', 'Həsimzadə', 'f64632bc4c4d1702fd92ce9354692332', 'Sabuncu', '+994102308004', 'mirmehemmed.hashimzade@growth.az', '2024-11-23 10:45:10', 'male', '1995-12-01', '', NULL),
(11, 'user', 'e3d0c4d15ed12d3ae9a14c1741eeec9acda1b2fa43edde0307ae7c61a1860d1493c294076a81145f', 10, 10, 'Elza', 'Kərimova', 'f64632bc4c4d1702fd92ce9354692332', 'Bakı şəhəri', '+994102308003', 'elza.karimova@growth.az', '2024-11-23 10:48:37', 'female', '', '', NULL),
(12, 'user', 'f11f2efe6078bcff742bbc05ea19fbbaae5512997ec83efedc0de492ebd55574d2a6eb1896a66d8f', 8, 25, 'Güllər', 'Həsənzadə', 'f64632bc4c4d1702fd92ce9354692332', 'Əhmədli metrosu', '+994102308006', 'guller.hesenzade@growth.az', '2024-11-23 11:05:52', 'female', '1988-05-27', '', NULL),
(14, 'admin', 'b3575b8d6abf2e633debcee156b0aa3c39fcdeef24f381a7c697a0ab3f7ed1d2530d6ed55333ee1a', 0, 0, 'Ruslan', 'Recebli', '5da5b15af74f18b5ae4a6f43a5877f0f', NULL, NULL, 'info@correcttechno.com', '2024-11-24 05:08:06', 'male', NULL, NULL, NULL),
(15, 'user', 'b7f1f2ebf2f7aa92ea25a7212b188af7d148f81a80fcb2c05976efa6800f89b2b874221d9711c0b2', 9, 13, 'Gülnur', 'Bədirova', 'hr12345', 'Behruz Nuriyev 24 A', '+994102308007', 'hr@growth.az', '2024-11-29 08:30:52', 'female', '1985-02-17', '', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customerstype`
--
ALTER TABLE `customerstype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `periodictaskstype`
--
ALTER TABLE `periodictaskstype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taskstype`
--
ALTER TABLE `taskstype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks_log`
--
ALTER TABLE `tasks_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `customerstype`
--
ALTER TABLE `customerstype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `periodictaskstype`
--
ALTER TABLE `periodictaskstype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `positions`
--
ALTER TABLE `positions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT for table `taskstype`
--
ALTER TABLE `taskstype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tasks_log`
--
ALTER TABLE `tasks_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
