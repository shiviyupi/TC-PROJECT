-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2020 at 10:56 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `email` varchar(255) NOT NULL,
  `password` varchar(252) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`email`, `password`, `timestamp`) VALUES
('shiv@123', '123', '2020-09-21 14:10:50'),
('pm@13', '123', '2020-09-21 14:11:43'),
('shiv@123', '123', '2020-09-21 14:15:04'),
('pm@123', '123', '2020-09-21 14:22:23');

-- --------------------------------------------------------

--
-- Table structure for table `frontdata`
--

CREATE TABLE `frontdata` (
  `serialno` int(11) NOT NULL,
  `studentid` varchar(211) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `frontdata`
--

INSERT INTO `frontdata` (`serialno`, `studentid`, `timestamp`) VALUES
(1, '1', '2020-09-17 14:52:20'),
(2, '1', '2020-09-17 14:52:36'),
(3, '1', '2020-09-17 14:57:15'),
(4, '1', '2020-09-17 14:57:48'),
(5, '1', '2020-09-17 14:58:23'),
(6, '1', '2020-09-17 16:26:42');

-- --------------------------------------------------------

--
-- Table structure for table `studentlist`
--

CREATE TABLE `studentlist` (
  `studentid` int(212) NOT NULL,
  `name` varchar(212) NOT NULL,
  `class` varchar(212) NOT NULL,
  `section` varchar(212) NOT NULL,
  `Guardian` varchar(255) NOT NULL,
  `file` text NOT NULL,
  `Timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentlist`
--

INSERT INTO `studentlist` (`studentid`, `name`, `class`, `section`, `Guardian`, `file`, `Timestamp`) VALUES
(1, 'DUMMY', 'L.K.G', 'A', 'SKM', 'uploads/5f6869e85c7850.85961500.pdf', '2020-09-21 14:22:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `frontdata`
--
ALTER TABLE `frontdata`
  ADD PRIMARY KEY (`serialno`);

--
-- Indexes for table `studentlist`
--
ALTER TABLE `studentlist`
  ADD PRIMARY KEY (`studentid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `frontdata`
--
ALTER TABLE `frontdata`
  MODIFY `serialno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
