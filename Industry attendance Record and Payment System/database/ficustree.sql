-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2024 at 03:47 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ficustree`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `Name` text NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `Phone_No` varchar(14) DEFAULT NULL,
  `Status` text NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Reg_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Name`, `email_id`, `Phone_No`, `Status`, `Password`, `Reg_date`) VALUES
(1, 'Auwal Musa Baba', 'auwalbaba90@gmail.com', '09039935629', 'Active', 'a23872663', '2024-10-19'),
(2, 'Paul Akande', 'amlashylash@gmail.com', '08036854948', 'Active', '271422', '2024-10-19');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `Employee_id` varchar(10) NOT NULL,
  `Full_name` text NOT NULL,
  `Department` text NOT NULL,
  `Shifts` text NOT NULL,
  `At_Date` date NOT NULL,
  `Time_in` varchar(8) NOT NULL,
  `Time_out` varchar(8) NOT NULL,
  `Working_status` text NOT NULL,
  `Salary` varchar(20) NOT NULL,
  `Time_status` text NOT NULL,
  `Payment_status` text NOT NULL,
  `Payment_method` text NOT NULL,
  `Payment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Reg_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `Employee_id` varchar(10) NOT NULL,
  `First_name` text NOT NULL,
  `Surname` text NOT NULL,
  `Other_name` text DEFAULT NULL,
  `Gender` text NOT NULL,
  `Phone_number` varchar(15) NOT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Department` text NOT NULL,
  `Employee_group` varchar(5) NOT NULL,
  `Employee_status` text NOT NULL,
  `Card_status` text NOT NULL,
  `Account_no` varchar(10) DEFAULT NULL,
  `Bank_name` varchar(30) DEFAULT NULL,
  `Bank_branch` varchar(50) DEFAULT NULL,
  `Reg_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `From_date` date NOT NULL,
  `To_date` date NOT NULL,
  `Shifts` text NOT NULL,
  `Working_status` text NOT NULL,
  `Time_in` varchar(6) NOT NULL,
  `Time_out` varchar(6) NOT NULL,
  `Date_set` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `From_date`, `To_date`, `Shifts`, `Working_status`, `Time_in`, `Time_out`, `Date_set`) VALUES
(1, '2024-01-01', '2024-12-31', 'Mornning', 'Undertime', '14:43', '00:43', '2024-10-19');

-- --------------------------------------------------------

--
-- Table structure for table `shift`
--

CREATE TABLE `shift` (
  `id` int(11) NOT NULL,
  `Name` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_id` (`email_id`),
  ADD UNIQUE KEY `Phone_No` (`Phone_No`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Name` (`Name`) USING HASH;

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Employee id` (`Employee_id`),
  ADD UNIQUE KEY `Phone_number` (`Phone_number`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shift`
--
ALTER TABLE `shift`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Name` (`Name`) USING HASH;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shift`
--
ALTER TABLE `shift`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
