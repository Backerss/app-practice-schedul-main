-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2023 at 08:37 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app_sport`
--

-- --------------------------------------------------------

--
-- Table structure for table `schedul`
--

CREATE TABLE `schedul` (
  `ID` int(11) NOT NULL,
  `S_date` date NOT NULL DEFAULT current_timestamp(),
  `S_time` time NOT NULL DEFAULT current_timestamp(),
  `S_endtime` time NOT NULL DEFAULT current_timestamp(),
  `S_deteil` varchar(120) NOT NULL DEFAULT 'None',
  `S_owner` int(11) NOT NULL DEFAULT 0,
  `S_note` varchar(120) NOT NULL DEFAULT 'None'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `user_student_id` varchar(20) NOT NULL DEFAULT 'None',
  `user_name` varchar(60) NOT NULL DEFAULT 'None',
  `user_email` varchar(60) NOT NULL DEFAULT 'none@gmail.com',
  `user_password` varchar(255) NOT NULL DEFAULT 'None',
  `user_sex` varchar(120) NOT NULL DEFAULT 'None',
  `user_birthday` varchar(10) NOT NULL DEFAULT 'None',
  `user_role` varchar(30) NOT NULL DEFAULT 'None',
  `user_tel` varchar(10) NOT NULL DEFAULT 'None',
  `user_register` datetime NOT NULL DEFAULT current_timestamp(),
  `user_note` varchar(120) NOT NULL DEFAULT 'None',
  `user_status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `schedul`
--
ALTER TABLE `schedul`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `schedul`
--
ALTER TABLE `schedul`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
