-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2024 at 07:03 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

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
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `firstname`, `lastname`, `phone`, `email`, `birthday`, `address`, `rfirstname`, `rlastname`, `rphone`, `remail`, `rbirthday`, `raddress`, `customertype`, `voen`, `countworkers`, `countobject`, `bankname`, `bankperson`, `bankphone`, `date`) VALUES
(1, 'Ruslan', 'Recebli', '0706644917', 'recebli212@gmail.com', '1997-04-24', 'Cefer Cabbarli 44', 'Ruslan', 'Recebli', '0506644917', 'correcttechno@gmail.com', '1997-02-04', 'Cəfər Cabbarlı 46', 'person', '4401472742', 3, 1, 'Unibank', 'Ad Soyad', '055616515616', '2024-11-02 14:16:51'),
(2, 'Ruslann', 'Recebli', '0706644917', 'recebli212@gmail.com', '1997-04-24', 'Cefer Cabbarli 44', 'Ruslan', 'Recebli', '0506644917', 'correcttechno@gmail.com', '1997-02-04', 'Cəfər Cabbarlı 46', 'company', '5401472742', 3, 1, 'Unibank', 'Ad Soyad', '055616515616', '2024-11-02 14:16:51');

-- --------------------------------------------------------

--
-- Table structure for table `customerstype`
--

CREATE TABLE `customerstype` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `title`, `date`) VALUES
(3, 'DEP', '2024-10-21 06:27:13'),
(8, 'HR', '2024-10-26 13:14:52');

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

CREATE TABLE `positions` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `positions`
--

INSERT INTO `positions` (`id`, `title`, `content`, `date`) VALUES
(1, 'IT', 'Proqram təminatına dəstək', '2024-10-21 15:38:44');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `creator_id`, `tasktype_id`, `customer_id`, `content`, `start`, `end`, `priority`, `users`, `file`, `date`) VALUES
(3, 3, 2, 2, 'dggdgdg', '2024-11-09', '2024-11-09', 'hight', '[\"6\",\"5\",\"3\"]', NULL, '2024-11-09 16:43:14'),
(4, 3, 2, 2, 'dggdgdg', '2024-11-09', '2024-11-09', 'hight', '[\"6\",\"5\",\"3\"]', NULL, '2024-11-09 16:43:14');

-- --------------------------------------------------------

--
-- Table structure for table `taskstype`
--

CREATE TABLE `taskstype` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `taskstype`
--

INSERT INTO `taskstype` (`id`, `title`, `date`) VALUES
(2, 'Vergi Hesabatıd', '2024-11-03 03:37:17');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tasks_log`
--

INSERT INTO `tasks_log` (`id`, `task_id`, `user_id`, `note`, `status`, `date`) VALUES
(1, 3, 3, 'W3Schools is optimized for learning and training. Examples might be simplified to improve reading and learning.\nTutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness\nof all content. While using W3Schools, you agree to have read and accepted our terms of use, cookie and privacy policy', 'answered', '2024-11-09 17:26:55'),
(2, 3, 5, 'W3Schools is optimized for learning and training. Examples might be simplified to improve reading and learning.\r\nTutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness\r\nof all content. While using W3Schools, you agree to have read and accepted our terms of use, cookie and privacy policy', 'notanswer', '2024-11-09 17:26:55'),
(7, 4, 3, '', 'notanswer', '2024-11-09 18:01:22');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `status`, `token`, `department_id`, `position_id`, `firstname`, `lastname`, `password`, `address`, `phone`, `email`, `date`, `gender`, `birthday`, `content`, `photo`) VALUES
(3, 'admin', '2627d3156f6808c1988cb8708771f20c0f6f762028b6ba5459be85792018dbc6c37d2629d979cbe0', 3, 1, 'Ruslan', 'Recebli', '01e20b61d05bb6b42840997233579e08', 'Cefer Cabbarli 44', '0706644917', 'recebli212@gmail.com', '2024-10-26 13:00:58', 'male', '', '', NULL),
(5, 'user', '7786415943bf1a1c50d7469464b6a86691eb30d1ff5c2b19982b3f873ebb295923374215cddc65f1', 3, 1, 'Edtech', 'Azerbaijan', 'e5d7cffe25654f7e3a1e334118c71549', 'Cefer Cabbarli 44', '0706644917', 'recebli212d@gmail.com', '2024-11-03 05:01:08', 'male', '', '', NULL),
(6, 'user', '7786415943bf1a1c50d7469464b6a86691eb30d1ff5c2b19982b3f873ebb295923374215cddc65f1', 3, 1, 'Correct', 'Technology', 'e5d7cffe25654f7e3a1e334118c71549', 'Cefer Cabbarli 44', '0706644917', 'recebli212d@gmail.com', '2024-11-03 05:01:08', 'male', '', '', NULL);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customerstype`
--
ALTER TABLE `customerstype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `positions`
--
ALTER TABLE `positions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `taskstype`
--
ALTER TABLE `taskstype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tasks_log`
--
ALTER TABLE `tasks_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
