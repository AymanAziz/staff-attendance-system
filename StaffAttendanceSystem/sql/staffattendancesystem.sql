-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2021 at 05:28 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `staffattendancesystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminId` varchar(10) NOT NULL,
  `AdminPasswrd` varchar(10) NOT NULL,
  `AdminName` varchar(30) NOT NULL,
  `AdminEmail` varchar(20) NOT NULL,
  `AdminNo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminId`, `AdminPasswrd`, `AdminName`, `AdminEmail`, `AdminNo`) VALUES
('adam', '1234', 'Adam razak', 'Adam@ump.my', '011-12345633');

-- --------------------------------------------------------

--
-- Table structure for table `applyleave`
--

CREATE TABLE `applyleave` (
  `LeaveID` int(100) NOT NULL,
  `StaffId` varchar(100) NOT NULL,
  `Date` date NOT NULL,
  `Reason` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applyleave`
--

INSERT INTO `applyleave` (`LeaveID`, `StaffId`, `Date`, `Reason`) VALUES
(19, 'Nuh123', '2021-01-26', 'hurmm'),
(20, 'lisa123', '2021-01-25', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `aprroveleave`
--

CREATE TABLE `aprroveleave` (
  `ApproveLeaveId` int(11) NOT NULL,
  `StaffId` varchar(10) NOT NULL,
  `Date` date NOT NULL,
  `Reason` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aprroveleave`
--

INSERT INTO `aprroveleave` (`ApproveLeaveId`, `StaffId`, `Date`, `Reason`) VALUES
(2, 'Nuh123', '2021-01-11', 'PKP'),
(3, 'hasif123', '2021-01-15', 'Malas nak kerja'),
(4, 'Nuh123', '2021-01-15', 'pkp 2020 hingga pkp 2300');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `AttendanceId` varchar(100) NOT NULL,
  `StaffId` varchar(10) NOT NULL,
  `Date` date NOT NULL,
  `SigninTime` datetime NOT NULL,
  `SignoutTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`AttendanceId`, `StaffId`, `Date`, `SigninTime`, `SignoutTime`) VALUES
('Hasif1232021-01-17', 'Hasif123', '2021-01-17', '2021-01-17 15:31:38', '2021-01-17 15:31:43'),
('Irsyad1232021-01-17', 'Irsyad123', '2021-01-17', '2021-01-17 18:00:26', '2021-01-17 18:00:33'),
('lisa1232021-01-21', 'lisa123', '2021-01-21', '2021-01-21 11:01:48', '2021-01-21 11:02:02'),
('Nuh1232021-01-04', 'Nuh123', '2021-01-04', '2021-01-04 08:20:05', '2021-01-04 17:17:40'),
('Nuh1232021-01-11', 'Nuh123', '2021-01-11', '2021-01-11 08:45:21', '2021-01-11 16:45:24');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `StaffId` varchar(10) NOT NULL,
  `StaffPasswrd` varchar(10) NOT NULL,
  `StaffName` varchar(30) NOT NULL,
  `StaffEmail` varchar(20) NOT NULL,
  `StaffNo` varchar(30) NOT NULL,
  `StaffAge` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`StaffId`, `StaffPasswrd`, `StaffName`, `StaffEmail`, `StaffNo`, `StaffAge`) VALUES
('hasif123', '123', 'Hasif Baharum', 'hasif@gmail.com', '+12586400', 23),
('Ikhwan321', '123', 'Ikhwan kamarulzaman', 'Ikhwan@ump.my', '016-4342121', 45),
('Irsyad123', '123', 'Amirul Irsyad', 'AIrsyard@gmail.com', '011-127685302', 23),
('lisa123', '123', 'lisa kamarulzaman', 'lisa@gmail.cpm', '011-123432342', 22),
('Nuh123', '123', 'Nuh Abdullah', 'Nuh@gmail.com', '011-23496443', 33);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminId`);

--
-- Indexes for table `applyleave`
--
ALTER TABLE `applyleave`
  ADD PRIMARY KEY (`LeaveID`),
  ADD KEY `StaffId` (`StaffId`);

--
-- Indexes for table `aprroveleave`
--
ALTER TABLE `aprroveleave`
  ADD PRIMARY KEY (`ApproveLeaveId`),
  ADD KEY `StaffId` (`StaffId`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`AttendanceId`),
  ADD KEY `StaffId` (`StaffId`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`StaffId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applyleave`
--
ALTER TABLE `applyleave`
  MODIFY `LeaveID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `aprroveleave`
--
ALTER TABLE `aprroveleave`
  MODIFY `ApproveLeaveId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `applyleave`
--
ALTER TABLE `applyleave`
  ADD CONSTRAINT `applyleave_ibfk_1` FOREIGN KEY (`StaffId`) REFERENCES `staff` (`StaffId`);

--
-- Constraints for table `aprroveleave`
--
ALTER TABLE `aprroveleave`
  ADD CONSTRAINT `aprroveleave_ibfk_1` FOREIGN KEY (`StaffId`) REFERENCES `staff` (`StaffId`);

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`StaffId`) REFERENCES `staff` (`StaffId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
