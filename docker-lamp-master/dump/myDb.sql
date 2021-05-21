-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2020 at 02:52 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `course_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `course_code` varchar(200) NOT NULL,
  `course_name` varchar(200) NOT NULL,
  `section` varchar(50) NOT NULL,
  `credit` varchar(5) NOT NULL,
  `department` varchar(100) NOT NULL,
  `examination_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `userid`, `course_code`, `course_name`, `section`, `credit`, `department`, `examination_date`) VALUES
(19, '1', '2365dfq', 'datastructuree', '9', '2', 'ITIR', '2020-11-23'),
(20, '1', '215484', 'Business', 'A', '3', 'IM', '2020-11-22'),
(22, '32', '4554sds', 'สอนเขียนโปรแกรม', '1', '3', 'IT', '2020-11-22'),
(24, '35', '4554sds', 'สอนเขียนโปรแกรม', '1', '4', 'IT', '2020-11-22'),
(25, '35', '1234', 'nan333', '4', '4', 'sdsd', '2020-11-18'),
(62, '39', '100', 'Data Structure', '1', '3', 'IT', '2020-12-11');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `course_code` varchar(20) NOT NULL,
  `course_name` varchar(200) NOT NULL,
  `section` varchar(20) NOT NULL,
  `credit` varchar(5) NOT NULL,
  `department` varchar(100) NOT NULL,
  `examination_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_code`, `course_name`, `section`, `credit`, `department`, `examination_date`) VALUES
(12, '100', 'Data Structure', '1', '3', 'IT', '2020-12-11'),
(13, '101', 'Stat', '2', '3', 'IT', '2020-12-11'),
(14, '102', 'C++', '2', '1', 'IT', '2020-11-19'),
(15, '103', 'HTML', '1', '1', 'IT', '2020-11-11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `studentid` varchar(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `personalid` varchar(20) NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `address` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `adviser` varchar(300) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `studentid`, `name`, `personalid`, `nationality`, `address`, `email`, `adviser`, `status`) VALUES
(2, 'admin', 'admin', '', '', '', '', '', '', '', 'admin'),
(44, '6122770850', '1679900448408', '6122770850', 'Kodchapawn K.', '1679900448408', 'Thaii', 'Song', 'kodchpawn@gmail.com', 'Gojou', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
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
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
