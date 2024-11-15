-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2024 at 01:16 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ai2dev`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `id` int(11) NOT NULL,
  `infrastructure` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `applicationname` varchar(255) NOT NULL,
  `masternodeip` varchar(255) NOT NULL,
  `workernodeip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`id`, `infrastructure`, `email`, `applicationname`, `masternodeip`, `workernodeip`) VALUES
(6, '[\"VPS\"]', 'tova@admin', 'rt', '198.362.3.6', '199.35.16.36'),
(7, '[\"GCP\"]', 'tova@admin', '345', '123.365.1.1', '123.365.1.1');

-- --------------------------------------------------------

--
-- Table structure for table `cluster`
--

CREATE TABLE `cluster` (
  `id` int(11) NOT NULL,
  `infrastructure` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `clustername` varchar(255) NOT NULL,
  `masternodeip` varchar(255) NOT NULL,
  `workernodeip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cluster`
--

INSERT INTO `cluster` (`id`, `infrastructure`, `email`, `clustername`, `masternodeip`, `workernodeip`) VALUES
(113, '[\"AZURE\"]', 'tova@admin', 'f', '454353', '55445'),
(114, '[\"AZURE\"]', 'tova@admin', '123', '123.362.3.3', '123.362.3.3');

-- --------------------------------------------------------

--
-- Table structure for table `loadbalancer`
--

CREATE TABLE `loadbalancer` (
  `id` int(11) NOT NULL,
  `infrastructure` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `loadbalancername` varchar(255) NOT NULL,
  `masternodeip` varchar(255) NOT NULL,
  `workernodeip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loadbalancer`
--

INSERT INTO `loadbalancer` (`id`, `infrastructure`, `email`, `loadbalancername`, `masternodeip`, `workernodeip`) VALUES
(8, '[\"AZURE\"]', 'tova@admin', '22', '198.236.1.1', '198.236.2.3');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profileimage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `email`, `password`, `profileimage`) VALUES
(1, 'Malony', 'a@gmail.com', '202cb962ac59075b964b07152d234b70', 'logo.png'),
(2, 'Amelia', 'tova@admin', '202cb962ac59075b964b07152d234b70', 'profile.jpg'),
(12, 'Reo', 'test1@gmail.com', '202cb962ac59075b964b07152d234b70', '');

-- --------------------------------------------------------

--
-- Table structure for table `node`
--

CREATE TABLE `node` (
  `id` int(11) NOT NULL,
  `infrastructure` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nodename` varchar(255) NOT NULL,
  `masternodeip` varchar(255) NOT NULL,
  `workernodeip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `node`
--

INSERT INTO `node` (`id`, `infrastructure`, `email`, `nodename`, `masternodeip`, `workernodeip`) VALUES
(13, '[\"VPS\"]', 'tova@admin', 'weq', '2001:0db8:85a3:0000:0000:8a2e:0370:7334', '2001:0db8:85a3:0000:0000:8a2e:0370:7334'),
(14, '[\"AZURE\"]', 'tova@admin', '423', '123.365.2.2', '123.362.3.3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cluster`
--
ALTER TABLE `cluster`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loadbalancer`
--
ALTER TABLE `loadbalancer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `node`
--
ALTER TABLE `node`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cluster`
--
ALTER TABLE `cluster`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `loadbalancer`
--
ALTER TABLE `loadbalancer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `node`
--
ALTER TABLE `node`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
