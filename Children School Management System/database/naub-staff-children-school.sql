-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2023 at 08:40 AM
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
-- Database: `naub-staff-children-school`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(5) NOT NULL,
  `Full_Name` text DEFAULT NULL,
  `Admin_id` varchar(30) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Password` varchar(2000) DEFAULT NULL,
  `Login_time` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `Full_Name`, `Admin_id`, `Email`, `Password`, `Login_time`) VALUES
(1, 'Auwal Musa Baba', 'NSS/ADMIN/001', 'auwalbaba90@gmail.com', 'c5dc51ae8e51ae277e3a35d3a4662799', '2023-08-01'),
(59, 'Hamsatu Ibrahim', 'NSCS/ADMIN/001', 'hamsatu2131@gmail.com', '884d511ea2d2c56c62a69d584a658196', '2023-10-26'),
(60, 'Muhammad Isah', 'NSCS/ADMIN/002', 'muhammadisa3031@gmail.com', '731572a618a30334a01014aecd1ccca0', '2023-10-26'),
(61, 'Mairo Muhammed Dawi', 'NSCS/ADMIN/003', 'mairo.muhammad@gmail.com', '197f14ad6811f19d03b012a088140027', '2023-10-26');

-- --------------------------------------------------------

--
-- Table structure for table `current_session`
--

CREATE TABLE `current_session` (
  `id` int(1) NOT NULL,
  `Session` varchar(15) DEFAULT NULL,
  `Term` text DEFAULT NULL,
  `Date` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `current_session`
--

INSERT INTO `current_session` (`id`, `Session`, `Term`, `Date`) VALUES
(1, '2023/2024', 'First', '2023-08-03');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `Name` text DEFAULT NULL,
  `Email_Address` varchar(100) DEFAULT NULL,
  `Mobile_Number` varchar(20) DEFAULT NULL,
  `Message` varchar(500) DEFAULT NULL,
  `Date` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `next_term_begins`
--

CREATE TABLE `next_term_begins` (
  `id` int(30) NOT NULL,
  `Next_Term_Begins` varchar(30) DEFAULT NULL,
  `Next_Term_Ends` varchar(30) DEFAULT NULL,
  `Time_School_open` varchar(30) DEFAULT NULL,
  `Times_Present` varchar(30) NOT NULL,
  `Cause_Absent` varchar(30) NOT NULL,
  `Times_Absent` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `next_term_begins`
--

INSERT INTO `next_term_begins` (`id`, `Next_Term_Begins`, `Next_Term_Ends`, `Time_School_open`, `Times_Present`, `Cause_Absent`, `Times_Absent`) VALUES
(1, '12 September 2023', '14 November 2023', '12 September 2023', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `nursery_result`
--

CREATE TABLE `nursery_result` (
  `ID_No` int(11) NOT NULL,
  `First_Name` text DEFAULT NULL,
  `Middle_Name` text DEFAULT NULL,
  `Last_Name` text NOT NULL,
  `Gender` text DEFAULT NULL,
  `Class` varchar(12) DEFAULT NULL,
  `Addmission_No` varchar(10) DEFAULT NULL,
  `Age` date DEFAULT NULL,
  `House` text DEFAULT NULL,
  `Term` varchar(10) DEFAULT NULL,
  `Session` varchar(12) DEFAULT NULL,
  `English_CA1` varchar(3) DEFAULT NULL,
  `English_CA2` varchar(3) DEFAULT NULL,
  `English_Exam` varchar(3) DEFAULT NULL,
  `English_Total` varchar(3) DEFAULT NULL,
  `English_Remark` varchar(20) DEFAULT NULL,
  `Mathematics_CA1` varchar(3) DEFAULT NULL,
  `Mathematics_CA2` varchar(3) DEFAULT NULL,
  `Mathematics_Exam` varchar(3) DEFAULT NULL,
  `Mathematics_Total` varchar(3) DEFAULT NULL,
  `Mathematics_Remark` varchar(15) DEFAULT NULL,
  `Verbal_CA1` varchar(3) DEFAULT NULL,
  `Verbal_CA2` varchar(3) DEFAULT NULL,
  `Verbal_Exam` varchar(3) DEFAULT NULL,
  `Verbal_Total` varchar(3) DEFAULT NULL,
  `Verbal_Remark` varchar(15) DEFAULT NULL,
  `Quantitative_CA1` varchar(3) DEFAULT NULL,
  `Quantitative_CA2` varchar(3) DEFAULT NULL,
  `Quantitative_Exam` varchar(3) DEFAULT NULL,
  `Quantitative_Total` varchar(3) DEFAULT NULL,
  `Quantitative_Remark` varchar(15) DEFAULT NULL,
  `Phonics_CA1` varchar(3) DEFAULT NULL,
  `Phonics_CA2` varchar(3) DEFAULT NULL,
  `Phonics_Exam` varchar(3) DEFAULT NULL,
  `Phonics_Total` varchar(3) DEFAULT NULL,
  `Phonics_Remark` varchar(15) DEFAULT NULL,
  `handwriting_CA1` varchar(3) DEFAULT NULL,
  `handwriting_CA2` varchar(3) DEFAULT NULL,
  `handwriting_Exam` varchar(3) DEFAULT NULL,
  `handwriting_Total` varchar(3) DEFAULT NULL,
  `handwriting_Remark` varchar(15) DEFAULT NULL,
  `T_No_In_Class` varchar(5) DEFAULT NULL,
  `Average` varchar(5) DEFAULT NULL,
  `Total` varchar(5) DEFAULT NULL,
  `Grade` text DEFAULT NULL,
  `Class_Teacher_Comment` varchar(30) DEFAULT NULL,
  `Headmaster_Comment` varchar(30) DEFAULT NULL,
  `Promotion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `primary_result`
--

CREATE TABLE `primary_result` (
  `ID_No` int(11) NOT NULL,
  `First_Name` text DEFAULT NULL,
  `Middle_Name` text DEFAULT NULL,
  `Last_Name` text NOT NULL,
  `Gender` text DEFAULT NULL,
  `Class` text DEFAULT NULL,
  `Addmission_No` varchar(10) DEFAULT NULL,
  `Age` date DEFAULT NULL,
  `House` text DEFAULT NULL,
  `Term` varchar(15) DEFAULT NULL,
  `Session` varchar(20) DEFAULT NULL,
  `English_CA1` varchar(3) DEFAULT NULL,
  `English_CA2` varchar(3) DEFAULT NULL,
  `English_Exam` varchar(3) DEFAULT NULL,
  `English_Total` varchar(3) DEFAULT NULL,
  `English_Remark` varchar(15) DEFAULT NULL,
  `Mathematics_CA1` varchar(3) DEFAULT NULL,
  `Mathematics_CA2` varchar(3) DEFAULT NULL,
  `Mathematics_Exam` varchar(3) DEFAULT NULL,
  `Mathematics_Total` varchar(3) DEFAULT NULL,
  `Mathematics_Remark` varchar(15) DEFAULT NULL,
  `Civic_Education_CA1` varchar(3) DEFAULT NULL,
  `Civic_Education_CA2` varchar(3) DEFAULT NULL,
  `Civic_Education_Exam` varchar(3) DEFAULT NULL,
  `Civic_Education_Total` varchar(3) DEFAULT NULL,
  `Civic_Education_Remark` varchar(15) DEFAULT NULL,
  `Basic_Science_CA1` varchar(3) DEFAULT NULL,
  `Basic_Science_CA2` varchar(3) DEFAULT NULL,
  `Basic_Science_Exam` varchar(3) DEFAULT NULL,
  `Basic_Science_Total` varchar(3) DEFAULT NULL,
  `Basic_Science_Remark` varchar(15) DEFAULT NULL,
  `Quantitative_CA1` varchar(3) DEFAULT NULL,
  `Quantitative_CA2` varchar(3) DEFAULT NULL,
  `Quantitative_Exam` varchar(3) DEFAULT NULL,
  `Quantitative_Total` varchar(3) DEFAULT NULL,
  `Quantitative_Remark` varchar(15) DEFAULT NULL,
  `P_H_E_CA1` varchar(3) DEFAULT NULL,
  `P_H_E_CA2` varchar(3) DEFAULT NULL,
  `P_H_E_Exam` varchar(3) DEFAULT NULL,
  `P_H_E_Total` varchar(3) DEFAULT NULL,
  `P_H_E_Remark` varchar(15) DEFAULT NULL,
  `Hausa_Lang_CA1` varchar(3) DEFAULT NULL,
  `Hausa_Lang_CA2` varchar(3) DEFAULT NULL,
  `Hausa_Lang_Exam` varchar(3) DEFAULT NULL,
  `Hausa_Lang_Total` varchar(3) DEFAULT NULL,
  `Hausa_Lang_Remark` varchar(15) DEFAULT NULL,
  `Verbal_CA1` varchar(3) DEFAULT NULL,
  `Verbal_CA2` varchar(3) DEFAULT NULL,
  `Verbal_Exam` varchar(3) DEFAULT NULL,
  `Verbal_Total` varchar(3) DEFAULT NULL,
  `Verbal_Remark` varchar(15) DEFAULT NULL,
  `Computer_CA1` varchar(3) DEFAULT NULL,
  `Computer_CA2` varchar(3) DEFAULT NULL,
  `Computer_Exam` varchar(3) DEFAULT NULL,
  `Computer_Total` varchar(3) DEFAULT NULL,
  `Computer_Remark` varchar(15) DEFAULT NULL,
  `Religion_CA1` varchar(3) DEFAULT NULL,
  `Religion_CA2` varchar(3) DEFAULT NULL,
  `Religion_Exam` varchar(3) DEFAULT NULL,
  `Religion_Total` varchar(3) DEFAULT NULL,
  `Religion_Remark` varchar(15) DEFAULT NULL,
  `Agric_CA1` varchar(3) DEFAULT NULL,
  `Agric_CA2` varchar(3) DEFAULT NULL,
  `Agric_Exam` varchar(3) DEFAULT NULL,
  `Agric_Total` varchar(3) DEFAULT NULL,
  `Agric_Remark` varchar(15) DEFAULT NULL,
  `CCACA1` varchar(3) DEFAULT NULL,
  `CCACA2` varchar(3) DEFAULT NULL,
  `CCAExam` varchar(3) DEFAULT NULL,
  `CCATotal` varchar(3) DEFAULT NULL,
  `CCARemark` varchar(15) DEFAULT NULL,
  `Sos_CA1` varchar(3) DEFAULT NULL,
  `Sos_CA2` varchar(3) DEFAULT NULL,
  `Sos_Exam` varchar(3) DEFAULT NULL,
  `Sos_Total` varchar(5) DEFAULT NULL,
  `Sos_Remark` varchar(50) DEFAULT NULL,
  `T_No_In_Class` varchar(5) DEFAULT NULL,
  `Position` varchar(5) DEFAULT NULL,
  `Average` varchar(5) DEFAULT NULL,
  `Total` varchar(5) DEFAULT NULL,
  `Class_Teacher_Comment` varchar(50) DEFAULT NULL,
  `Headmaster_Comment` varchar(50) DEFAULT NULL,
  `Promotion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `id` int(11) NOT NULL,
  `Session` varchar(15) DEFAULT NULL,
  `Date` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`id`, `Session`, `Date`) VALUES
(3, '2023/2024', '2023-08-03');

-- --------------------------------------------------------

--
-- Table structure for table `staff_account`
--

CREATE TABLE `staff_account` (
  `id` int(11) NOT NULL,
  `Title` text DEFAULT NULL,
  `First_Name` text DEFAULT NULL,
  `Surname` text DEFAULT NULL,
  `Other_Name` text NOT NULL,
  `Gender` text DEFAULT NULL,
  `Email_Address` varchar(50) DEFAULT NULL,
  `Phone_No` varchar(20) DEFAULT NULL,
  `Staff_ID` varchar(20) DEFAULT NULL,
  `Rank` varchar(30) DEFAULT NULL,
  `Class` text DEFAULT NULL,
  `D_O_B` date DEFAULT NULL,
  `Password` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `Addmission_No` varchar(15) DEFAULT NULL,
  `First_Name` text DEFAULT NULL,
  `Surname` text DEFAULT NULL,
  `Other_Name` text NOT NULL,
  `Class` varchar(20) DEFAULT NULL,
  `Gender` text DEFAULT NULL,
  `D_O_B` date DEFAULT NULL,
  `Place_of_Birth` text NOT NULL,
  `State` text DEFAULT NULL,
  `Nationality` text NOT NULL,
  `Home_Language` text NOT NULL,
  `Others_Language` text NOT NULL,
  `Religion` text NOT NULL,
  `Home_Address` varchar(200) NOT NULL,
  `A_Name` varchar(100) NOT NULL COMMENT 'Schools Attended',
  `A_Year_Class` varchar(50) NOT NULL COMMENT 'Schools Attended',
  `B_Name` varchar(100) NOT NULL COMMENT 'Schools Attended',
  `B_Year_Class` varchar(50) NOT NULL COMMENT 'Schools Attended',
  `Allergies` varchar(100) NOT NULL COMMENT 'Medical History',
  `Physical_Challenges` text NOT NULL COMMENT 'Medical History',
  `Father_Full_Name` text DEFAULT NULL COMMENT 'Father',
  `Father_M_Number` varchar(15) DEFAULT NULL COMMENT 'Father',
  `Father_W_Number` varchar(15) NOT NULL COMMENT 'Father',
  `Father_Email_Address` varchar(100) NOT NULL COMMENT 'Father',
  `Father_Nationality` text DEFAULT NULL COMMENT 'Father',
  `Father_Parental_Status` text DEFAULT NULL COMMENT 'Father',
  `Father_Permanent_Address` varchar(100) DEFAULT NULL COMMENT 'Father',
  `Mother_Full_Name` text DEFAULT NULL COMMENT 'Mother',
  `Mother_M_Number` varchar(15) DEFAULT NULL COMMENT 'Mother',
  `Mother_W_Number` varchar(15) NOT NULL COMMENT 'Mother',
  `Mother_Email_Address` varchar(50) NOT NULL COMMENT 'Mother',
  `Mother_Nationality` text DEFAULT NULL COMMENT 'Mother',
  `Mother_Parental_Status` text DEFAULT NULL COMMENT 'Mother',
  `House` varchar(50) DEFAULT NULL,
  `Entry_Year` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `admin_id` (`Admin_id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `current_session`
--
ALTER TABLE `current_session`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Session` (`Session`,`Term`) USING HASH;

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `next_term_begins`
--
ALTER TABLE `next_term_begins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nursery_result`
--
ALTER TABLE `nursery_result`
  ADD PRIMARY KEY (`ID_No`);

--
-- Indexes for table `primary_result`
--
ALTER TABLE `primary_result`
  ADD PRIMARY KEY (`ID_No`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Session` (`Session`);

--
-- Indexes for table `staff_account`
--
ALTER TABLE `staff_account`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Email_Address` (`Email_Address`),
  ADD UNIQUE KEY `Phone_No` (`Phone_No`),
  ADD UNIQUE KEY `Staff_ID` (`Staff_ID`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Student_id` (`Addmission_No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `current_session`
--
ALTER TABLE `current_session`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `next_term_begins`
--
ALTER TABLE `next_term_begins`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `nursery_result`
--
ALTER TABLE `nursery_result`
  MODIFY `ID_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `primary_result`
--
ALTER TABLE `primary_result`
  MODIFY `ID_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `staff_account`
--
ALTER TABLE `staff_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
