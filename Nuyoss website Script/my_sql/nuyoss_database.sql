-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2022 at 06:00 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nuyoss_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `Home_Address` text NOT NULL,
  `Resident_Address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `S_N` int(4) NOT NULL,
  `Name` text NOT NULL,
  `Admin_id` varchar(20) NOT NULL,
  `Email_Add` varchar(150) NOT NULL,
  `Password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`S_N`, `Name`, `Admin_id`, `Email_Add`, `Password`) VALUES
(1, 'Auwal Musa Baba', 'NUYOSS/ADMIN/101', 'auwalbaba90@gmail.com', 'a23872663'),
(2, 'Auwal Baba', 'NUYOSS/ADMIN/102', 'auwalbaba90@yandex.com', 'a23872663');

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `Candidate_id` int(11) NOT NULL,
  `Full_Name` text NOT NULL,
  `School` text NOT NULL,
  `Course` text NOT NULL,
  `Matric_No` varchar(100) NOT NULL,
  `Local_Govt` text NOT NULL,
  `Position_Name` text NOT NULL,
  `Candidate_Photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`Candidate_id`, `Full_Name`, `School`, `Course`, `Matric_No`, `Local_Govt`, `Position_Name`, `Candidate_Photo`) VALUES
(1, 'Sulaiman Yahaya Abubakar', 'Nigerian Defense Academy  ', 'Cyber Security', 'UG17/SGED/12562', 'Machina', 'Vice President (2)', 'uploads/6238b155132dc4.85217975.jpg'),
(7, 'ibrahim yahai', 'Ahmadu Bello University Zaria (ATBU)', 'Sociology', 'dewq', 'Geidam', 'President', 'uploads/6238b1990cceb1.76573157.jpg'),
(10, 'ibrahim garba', 'Federal College of Education Technical, FCE(T) Potiskum.', 'technical', 'ewfetgt', 'Karasuwa', 'Assistant Secretary General', 'uploads/62390a88bb8c29.24949287.png'),
(11, 'Abubakar Abdulmannan', 'Ahmadu Bello University Zaria (ATBU)', 'Sociology', 'af33332', 'Damaturu', 'President', 'uploads/6238b2c28ec257.54670466.jpg'),
(12, 'ibrahim garba', 'Ahmadu Bello University Zaria (ATBU)', 'Sociology', '443', 'Potiskum', 'Deputy Chief Whip', 'uploads/6238b48d4610b3.56802982.jpg'),
(18, 'malio', 'yobe state uni ', 'biology', '1234567809', 'Nangere', 'Auditor (1)', 'uploads/6238dff9ba63c9.69852798.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `deligate`
--

CREATE TABLE `deligate` (
  `ID_No` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Email_Add` varchar(300) NOT NULL,
  `Matric_No` varchar(100) NOT NULL,
  `Deligate_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deligate`
--

INSERT INTO `deligate` (`ID_No`, `Name`, `Email_Add`, `Matric_No`, `Deligate_id`) VALUES
(3, 'Auwal Musa Baba', 'auwalbaba90@gmail.com', 'CYB/19D/1745', 'NUYOSS/DLT/2022/9158'),
(5, 'Abubakar Abdulmannan', 'abdulmannanabubakar@gmail.com', 'UG17/SGED/12562', 'NUYOSS/DLT/2022/9081'),
(7, 'Ali Musa Baba', 'ali223@gmai.com', 'CCD12432', 'NUYOSS/DLT/2022/3267'),
(8, 'sulaiman abubakar', 'suleabk@gmail.com', 'UG17/SGED/1256', 'NUYOSS/DLT/2022/9664'),
(9, 'kkjjsssss', 'sad33q9000@gmail.com', 'fkdsfdsmfosdo333', 'NUYOSS/DLT/2022/9642'),
(10, 'Abubakar Musa Usman', 'auwalbaba9s0@gmail.com', 'UG17/SGED/125622', 'NUYOSS/DLT/2022/4319'),
(11, 'ioijo', 'auwalbabaa90@gmail.com', 'UG17/SGED/1256233', 'NUYOSS/DLT/2022/1321');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `file_name` varchar(11) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`file_name`, `status`) VALUES
('aliko.jpg', 1),
('aliko.jpg', 1),
('aliko2.jpg', 1),
('My School L', 1);

-- --------------------------------------------------------

--
-- Table structure for table `next_of_kin`
--

CREATE TABLE `next_of_kin` (
  `Next_Of_Kin_id` int(11) NOT NULL,
  `Full Name` text NOT NULL,
  `Phone_No` varchar(15) NOT NULL,
  `Email_Add` varchar(200) NOT NULL,
  `Home_Add` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

CREATE TABLE `positions` (
  `Position_id` int(4) NOT NULL,
  `Name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `positions`
--

INSERT INTO `positions` (`Position_id`, `Name`) VALUES
(79, 'President'),
(80, 'Vice President (1)'),
(81, 'Vice President (2)'),
(82, 'Secretary General'),
(83, 'Assistant Secretary General'),
(84, 'Financial Secretary'),
(85, 'Treasurer'),
(86, 'Auditor (1)'),
(87, 'Auditor (2)'),
(88, 'Auditor (3)'),
(89, 'Welfare Director (1)'),
(90, 'Welfare Director (2)'),
(91, 'Admin. Secretary'),
(92, 'Social Director'),
(93, 'Sport Director'),
(94, 'PRO (1)'),
(95, 'PRO (2)'),
(96, 'Speaker'),
(97, 'Deputy Speaker'),
(98, 'Cleark'),
(99, 'Deputy Cleark'),
(100, 'Chief Whip'),
(101, 'Deputy Chief Whip');

-- --------------------------------------------------------

--
-- Table structure for table `posting`
--

CREATE TABLE `posting` (
  `ID_No` int(100) NOT NULL,
  `Post_Title` varchar(500) NOT NULL,
  `Post_Descriptions` varchar(5000) NOT NULL,
  `image` varchar(200) DEFAULT NULL,
  `Post_Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posting`
--

INSERT INTO `posting` (`ID_No`, `Post_Title`, `Post_Descriptions`, `image`, `Post_Date`) VALUES
(1, 'Question', '1 Define a class Deposit that has a principal, a rate of interest, which is fixed for all \r\ndeposits and a period in terms of years. Write member functions to\r\n(i) alter(float) which can change the rate of interest.\r\n(ii) interest() which computes the interest and returns it.\r\n(iii) print() which prints data as shown below. Note that the width of each column is 20.s\r\nThe study of fault-tolerant computing has paralleled the development of modern computers. Ones of the very early contributions was due to von Neumann, the designer of the first stored program machine. Von Neumannâ€™s work addressed the question of synthesizing reliable computers from unreliable components and developed the ideas of redundancy and replication that are common in many computers today. Strong need for fault tolerance came from the space program in the early 1960â€™s. There was the need to build systems that would survive without maintenance for extended periods of time. Manned space flights provided a further boost to fault tolerance. Reliability techniques advanced rapidly during this period. In this initial period, interest in fault tolerance largely remained the domain of the space, defense and telephone industries.', '', '2022-03-10 12:07:57'),
(4, 'DXVCXVCXVCXVX', 'SVDVCXVCXVCXVCX\r\nTo provide a highly developed form of teaching through maximizing the use of technology which will somehow give an easier and efficient way of learning that will make them to be competitive and productive citizens of the society.\r\nTo provide a highly developed form of teaching through maximizing the use of technology which will somehow give an easier and efficient way of learning that will make them to be competitive and productive citizens of the society.', '', '2022-03-02 20:34:29'),
(7, 'auwal musa baba', 'afmflasasjfasifajgfalsigjilsjdsgijdsgiljgdwigjwgijdw\r\nTo provide a highly developed form of teaching through maximizing the use of technology which will somehow give an easier and efficient way of learning that will make them to be competitive and productive citizens of the society.\r\nTo provide a highly developed form of teaching through maximizing the use of technology which will somehow give an easier and efficient way of learning that will make them to be competitive and productive citizens of the society.\r\nTo provide a highly developed form of teaching through maximizing the use of technology which will somehow give an easier and efficient way of learning that will make them to be competitive and productive citizens of the society.\r\nTo provide a highly developed form of teaching through maximizing the use of technology which will somehow give an easier and efficient way of learning that will make them to be competitive and productive citizens of the society.', '', '2022-03-02 20:35:57'),
(8, 'Introduction to Fault Tolerant Computing', 'The study of fault-tolerant computing has paralleled the development of modern computers. Ones\r\nof the very early contributions was due to von Neumann, the designer of the first stored program\r\nmachine. Von Neumannâ€™s work addressed the question of synthesizing reliable computers from\r\nunreliable components and developed the ideas of redundancy and replication that are common in\r\nmany computers today. Strong need for fault tolerance came from the space program in the early\r\n1960â€™s. There was the need to build systems that would survive without maintenance for extended\r\nperiods of time. Manned space flights provided a further boost to fault tolerance. Reliability\r\ntechniques advanced rapidly during this period. In this initial period, interest in fault tolerance\r\nlargely remained the domain of the space, defense and telephone industries. High reliability and\r\navailability have become critical for efficient functioning of our modem society. In this regard the\r\ndevelopment of VLSI techniques has provided a major impetus to the advancement of fault-tolerant\r\ncomputing VLSI designs have made replication and redundancy both cost effective and practically\r\nfeasible.\r\nIn the past twenty years, fault-tolerant computing has matured into a broad discipline encompassing many aspects of computer design. This study material is intended to provide the reader\r\nwith an overview of the different areas which encompass hardware and software fault tolerance.\r\nThree factors driving the interest in fault tolerance are:\r\nâ€¢ First is the need for high reliability.\r\nâ€¢ Second is the need for high availability.\r\nâ€¢ Third is the direct impact of a loss in reliability on system performance (also referred to as\r\nperform-ability).\r\nA fault-tolerant system may be able to tolerate one or more fault-types including:\r\n1\r\nâ€¢ Transient, Intermittent or Permanent hardware faults.\r\nâ€¢ Software and Hardware design errors.\r\nâ€¢ Operator errors.\r\nâ€¢ Externally induced upsets or physical.', '', '2022-03-08 16:09:16'),
(9, 'National Union Of Yobe State Students.\r\n(NUYOSS)', 'To provide a highly developed form of teaching through maximizing the use of technology which will somehow give an easier and efficient way of learning that will make them to be competitive and productive citizens of the society.\r\nTo provide a highly developed form of teaching through maximizing the use of technology which will somehow give an easier and efficient way of learning that will make them to be competitive and productive citizens of the society.\r\nTo provide a highly developed form of teaching through maximizing the use of technology which will somehow give an easier and efficient way of learning that will make them to be competitive and productive citizens of the society.\r\nTo provide a highly developed form of teaching through maximizing the use of technology which will somehow give an easier and efficient way of learning that will make them to be competitive and productive citizens of the society.\r\nTo provide a highly developed form of teaching through maximizing the use of technology which will somehow give an easier and efficient way of learning that will make them to be competitive and productive citizens of the society.\r\nTo provide a highly developed form of teaching through maximizing the use of technology which will somehow give an easier and efficient way of learning that will make them to be competitive and productive citizens of the society.To provide a highly developed form of teaching through maximizing the use of technology which will somehow give an easier and efficient way of learning that will make them to be competitive and productive citizens of the society.To provide a highly developed form of teaching through maximizing the use of technology which will somehow give an easier and efficient way of learning that will make them to be competitive and productive citizens of the society.To provide a highly developed form of teaching through maximizing the use of technology which will somehow give an easier and efficient way of learning that will make them to be competitive and productive citizens of the society.\r\nTo provide a highly developed form of teaching through maximizing the use of technology which will somehow give an easier and efficient way of learning that will make them to be competitive and productive citizens of the society.', '', '2022-03-02 20:31:09');

-- --------------------------------------------------------

--
-- Table structure for table `president_voted`
--

CREATE TABLE `president_voted` (
  `ID` int(11) NOT NULL,
  `Deligate_ID` varchar(20) NOT NULL,
  `Candidate_Full_Name` text NOT NULL,
  `Candidate_School` text NOT NULL,
  `Candidate_Course` text NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `president_voted`
--

INSERT INTO `president_voted` (`ID`, `Deligate_ID`, `Candidate_Full_Name`, `Candidate_School`, `Candidate_Course`, `Date`) VALUES
(79, 'NUYOSS/DLT/2022/9081', 'ibrahim yahai', 'Ahmadu Bello University Zaria (ATBU)', 'Sociology', '2022-03-12 17:56:59'),
(82, 'NUYOSS/DLT/2022/9158', 'Abubakar Abdulmannan', 'Ahmadu Bello University Zaria (ATBU)', 'Sociology', '2022-03-12 17:57:40'),
(86, 'NUYOSS/DLT/2022/3267', 'ibrahim yahai', 'Ahmadu Bello University Zaria (ATBU)', 'Sociology', '2022-03-12 17:58:50'),
(88, 'NUYOSS/DLT/2022/9664', 'ibrahim yahai', 'Ahmadu Bello University Zaria (ATBU)', 'Sociology', '2022-03-12 17:59:21'),
(91, 'NUYOSS/DLT/2022/9642', 'nkkykuhio', 'yobe state uni ', 'biology', '2022-03-14 10:48:57'),
(93, 'NUYOSS/DLT/2022/4319', 'ibrahim yahai', 'Ahmadu Bello University Zaria (ATBU)', 'Sociology', '2022-03-14 12:28:05'),
(110, 'NUYOSS/DLT/2022/1321', 'Abubakar Abdulmannan', 'Ahmadu Bello University Zaria (ATBU)', 'Sociology', '2022-03-21 21:39:37');

-- --------------------------------------------------------

--
-- Table structure for table `school_information`
--

CREATE TABLE `school_information` (
  `id` int(11) NOT NULL,
  `School_Name` text NOT NULL,
  `Faculty` text NOT NULL,
  `Department` text NOT NULL,
  `Course` text NOT NULL,
  `State` text NOT NULL,
  `Country` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Users_id` int(11) NOT NULL,
  `First_name` text NOT NULL,
  `Surname` text NOT NULL,
  `Other_Name` text DEFAULT NULL,
  `Email_Address` varchar(200) NOT NULL,
  `Matric_No` varchar(50) NOT NULL,
  `Phone_No` varchar(15) NOT NULL,
  `State` text NOT NULL,
  `local_govt` text NOT NULL,
  `Date_of_Birth` varchar(20) NOT NULL,
  `Gender` text NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Confirmation_Code` varchar(4) NOT NULL,
  `Date_Reg` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Users_id`, `First_name`, `Surname`, `Other_Name`, `Email_Address`, `Matric_No`, `Phone_No`, `State`, `local_govt`, `Date_of_Birth`, `Gender`, `Password`, `Confirmation_Code`, `Date_Reg`) VALUES
(1, 'Auwal', 'Musa', 'Baba', 'auwalbaba90@gmail.com', 'NAUB/19D/FCOM/CBS/047', '09039935629', 'Yobe', 'Potiskum', '1999-08-12', 'Male', 'a23872663', '2354', '2022-03-11 13:43:49'),
(10, 'ibrahim', 'yakubu', 'shuaibu', 'ibrahimyakubushuaibu779@gmail.com', 'NIB/16/01479', '09078376872', 'Yobe', 'Potiskum', '1997-12-01', 'Male', '1480', '9715', '2022-03-03 13:13:08'),
(14, 'muhammad ', 'muhammad', 'rabiu', 'kwankwasiya24@gmail.com', 'COS/19D/1669', '08038405850', 'Yobe', 'Nangere', '1995-10-02', 'Male', '1521922', '9567', '2022-03-14 18:14:51'),
(20, 'mkabir', 'muhammad', 'muhammad', 'muhammadkabir0050@gmail.com', 'cyb/21d/2972', '08100502650', 'Bauchi', 'Bauchi', '1997-01-01', 'Male', '08100', '9125', '2021-11-09 07:29:11'),
(43, 'abubakar', 'abdulmannan', '', 'abdulmannanabubakar@gmail.com', 'ug17/sged/1256', '08105502096', 'Yobe', 'Potiskum', '1999-02-20', 'Male', '05502096', '5912', '2022-02-14 15:17:16'),
(44, 'hassan', 'garba', 'judge', 'hgarba018@gmail.com', 'ndpa/c17/2497', '08062278641', 'Yobe', 'Potiskum', '1996-03-01', 'Male', '62278641', '3705', '2022-03-08 16:18:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`S_N`),
  ADD UNIQUE KEY `Admin_id` (`Admin_id`),
  ADD UNIQUE KEY `Email_Add` (`Email_Add`);

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`Candidate_id`),
  ADD UNIQUE KEY `Matric_No` (`Matric_No`);

--
-- Indexes for table `deligate`
--
ALTER TABLE `deligate`
  ADD PRIMARY KEY (`ID_No`),
  ADD UNIQUE KEY `Email_Add` (`Email_Add`),
  ADD UNIQUE KEY `Matric_No` (`Matric_No`),
  ADD UNIQUE KEY `ID_No` (`ID_No`,`Deligate_id`),
  ADD UNIQUE KEY `ID_No_2` (`ID_No`),
  ADD UNIQUE KEY `Deligate_id` (`Deligate_id`),
  ADD KEY `ID_No_3` (`ID_No`);

--
-- Indexes for table `next_of_kin`
--
ALTER TABLE `next_of_kin`
  ADD PRIMARY KEY (`Next_Of_Kin_id`);

--
-- Indexes for table `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`Position_id`),
  ADD UNIQUE KEY `Name` (`Name`) USING HASH;

--
-- Indexes for table `posting`
--
ALTER TABLE `posting`
  ADD PRIMARY KEY (`ID_No`);

--
-- Indexes for table `president_voted`
--
ALTER TABLE `president_voted`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Deligate_ID` (`Deligate_ID`);

--
-- Indexes for table `school_information`
--
ALTER TABLE `school_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Users_id`),
  ADD UNIQUE KEY `Email_Address` (`Email_Address`),
  ADD UNIQUE KEY `Matric_No` (`Matric_No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `S_N` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `Candidate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `deligate`
--
ALTER TABLE `deligate`
  MODIFY `ID_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `positions`
--
ALTER TABLE `positions`
  MODIFY `Position_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `posting`
--
ALTER TABLE `posting`
  MODIFY `ID_No` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `president_voted`
--
ALTER TABLE `president_voted`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
