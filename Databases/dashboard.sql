-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2020 at 04:34 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dashboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `dashinfo`
--

CREATE TABLE `dashinfo` (
  `id` int(11) NOT NULL,
  `recovered` int(4) NOT NULL,
  `admitted` int(4) NOT NULL,
  `deceased` int(4) NOT NULL,
  `beds` int(4) NOT NULL,
  `vent` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dashinfo`
--

INSERT INTO `dashinfo` (`id`, `recovered`, `admitted`, `deceased`, `beds`, `vent`) VALUES
(0, 1, 0, 1, 50, 33);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dashinfo`
--
ALTER TABLE `dashinfo`
  ADD PRIMARY KEY (`recovered`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
