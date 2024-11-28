-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2024 at 04:52 AM
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

INSERT INTO `customers` (`id`, `firstname`, `lastname`, `phone`, `email`, `birthday`, `address`, `rfirstname`, `rlastname`, `rphone`, `remail`, `rbirthday`, `raddress`, `customertype`, `voen`, `countworkers`, `countobject`, `bankname`, `bankperson`, `bankphone`, `anumber`, `aid`, `apin1`, `apin2`, `skod`, `spass`, `vkod`, `vpass`, `periodictasks`, `date`) VALUES
(1, 'Ruslan', 'Recebli', '0706644917', 'recebli212@gmail.com', '1997-04-24', 'Cefer Cabbarli 44', 'Ruslan', 'Recebli', '0506644917', 'correcttechno@gmail.com', '1997-02-04', 'Cəfər Cabbarlı 46', 'person', '4401472742', 3, 1, 'Unibank', 'Ad Soyad', '055616515616', NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, '2024-11-02 14:16:51'),
(2, 'Ruslann', 'Recebli', '0706644917', 'recebli212@gmail.com', '1997-04-24', 'Cefer Cabbarli 44', 'Ruslan', 'Recebli', '0506644917', 'correcttechno@gmail.com', '1997-02-04', 'Cəfər Cabbarlı 46', 'company', '5401472742', 3, 1, 'Unibank', 'Ad Soyad', '055616515616', '1', 2, 3, 45, '4', '5', '6', '7', '[\"2\",\"3\"]', '2024-11-02 14:16:51'),
(4, 'Qara', 'Məmmədov', '+79372583822', 'qara@gmail.com', '', '', '', '', '', '', '', '', 'company', '1700164781', 5, 2, '', '', '', '', 0, 0, 0, '', '', '', '', 'null', '2024-11-26 06:48:15'),
(5, 'Elçin ', 'Nərimanov', '', '', '', '', '', '', '', '', '', '', 'company', '1405111641', 0, 0, '', '', '', '', 0, 0, 0, '', '', '', '', '[\"2\",\"3\"]', '2024-11-26 06:48:56');

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
(61, 10, 8, 4, 'Bes Dsmf ödənişi', '2024-11-27', '2024-11-27', 'hight', '[\"10\"]', NULL, '2024-11-27 13:31:59');

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
(13, 'tender senedleri üçün müraciet etmək', '2024-11-27 08:13:12');

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
(58, 61, 10, '', 'answered', '2024-11-27 13:59:53');

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
(8, 'admin', '64aa079e51b9ad50a0a067f57f72b27ead7f49fc2d852331f19b67e0fa7e53c3068fa98178fe827b', 12, 22, 'Elnur', 'Vəliyev', 'e28035f819e5bc6b76efed05002ea798', 'Bakı şəhəri', '+994502353599', 'elnur@growth.az', '2024-11-23 10:03:31', 'male', '1986-12-12', '', NULL),
(9, 'user', '17bbcbaed2fe010a4280a224881682fa7c69b2c96542c5ee243746babe209b9bfdf0ef22a634e3d9', 10, 5, 'Günel', 'Əmiraslanova', 'f64632bc4c4d1702fd92ce9354692332', 'Sumqayıt', '+994102308002', 'gunel.emiraslanova@growth.az', '2024-11-23 10:10:29', 'female', '', '', NULL),
(10, 'user', 'c7c80f724223f61071f754cfa6278191a3d404e7ec2a9ec52c7b589c5c59949c3b4dd344e724e663', 10, 4, 'Mirməhəmməd', 'Həsimzadə', 'f64632bc4c4d1702fd92ce9354692332', 'Sabuncu', '+994102308004', 'mirmehemmed.hashimzade@growth.az', '2024-11-23 10:45:10', 'male', '1995-12-01', '', NULL),
(11, 'user', '8f157781e33bf850cbeccf020be6259dc27631308377d2a1d677c8fb3941e1602c1f8bd71c703420', 10, 10, 'Elza', 'Kərimova', 'f64632bc4c4d1702fd92ce9354692332', 'Bakı şəhəri', '+994102308003', 'elza.karimova@growth.az', '2024-11-23 10:48:37', 'female', '', '', NULL),
(12, 'user', 'f11f2efe6078bcff742bbc05ea19fbbaae5512997ec83efedc0de492ebd55574d2a6eb1896a66d8f', 8, 25, 'Güllər', 'Həsənzadə', 'f64632bc4c4d1702fd92ce9354692332', 'Əhmədli metrosu', '+994102308006', 'guller.hesenzade@growth.az', '2024-11-23 11:05:52', 'female', '1988-05-27', '', NULL),
(14, 'admin', '80f6fd2784be0e9aa97a590f91fc2a3868029e3dadc8c6b7b6846c0df2cac820e323bdef3a55fddd', 0, 0, 'Ruslan', 'Recebli', '5da5b15af74f18b5ae4a6f43a5877f0f', NULL, NULL, 'info@correcttechno.com', '2024-11-24 05:08:06', 'male', NULL, NULL, NULL);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `taskstype`
--
ALTER TABLE `taskstype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tasks_log`
--
ALTER TABLE `tasks_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
