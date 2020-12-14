-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2020 at 04:35 AM
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
-- Database: `patients`
--

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `sr_no` int(11) NOT NULL,
  `PatientName` text NOT NULL,
  `RelativeName` text NOT NULL,
  `Gender` text NOT NULL,
  `BloodGroup` varchar(5) NOT NULL,
  `Ventilator` text NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Address` text NOT NULL,
  `CurrentSymptoms` text NOT NULL,
  `Rel_phone` varchar(20) NOT NULL,
  `Bed_no` varchar(20) NOT NULL,
  `dr_assign` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`sr_no`, `PatientName`, `RelativeName`, `Gender`, `BloodGroup`, `Ventilator`, `Phone`, `Address`, `CurrentSymptoms`, `Rel_phone`, `Bed_no`, `dr_assign`, `date`, `status`) VALUES
(21, 'Ronald Patrick', 'Arshad Warsi', 'Male', 'A+', 'Yes', '9834464826', '  \r\n      D wing yash', '', '8786786787', '11', 'DR. MAHESH', '2020-11-05', 'RECOVERED'),
(23, 'Evolved Geek', 'Suchita', 'Male', 'AB-', 'Yes', '9834464826', '  \r\n      khsukAJHD', '', '8786786787', '26', 'DR. MAHESH', '2020-11-17', 'Deceased');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`sr_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
