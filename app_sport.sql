-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2023 at 10:06 AM
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

--
-- Dumping data for table `schedul`
--

INSERT INTO `schedul` (`ID`, `S_date`, `S_time`, `S_endtime`, `S_deteil`, `S_owner`, `S_note`) VALUES
(1, '2023-10-06', '15:00:00', '17:00:00', 'ทำหนมๆๆๆ', 1, 'เตะพี่เจี่ย ทะลุปลาบ '),
(2, '2023-10-13', '13:50:00', '15:30:00', 'KIKIKKIKI', 1, 'DFASFSFASFASFAFASFASFASFASFSCASCASFASCFASFCASCA'),
(3, '2023-10-06', '13:30:00', '15:00:00', 'เตะไอ้ฟลุ๊ค', 1, 'เดินไปหาคนชื่อ พิรัชชัย แล้วเตะ พร้อมบอกว่า บีฝากมาก'),
(4, '2023-10-06', '14:30:00', '15:00:00', 'วิ่ง', 1, 'วิ่ง');

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
  `user_status` int(11) NOT NULL DEFAULT 1,
  `user_img` text NOT NULL DEFAULT 'None'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `user_student_id`, `user_name`, `user_email`, `user_password`, `user_sex`, `user_birthday`, `user_role`, `user_tel`, `user_register`, `user_note`, `user_status`, `user_img`) VALUES
(1, '65111822005', 'อาสาฬ รอดนวน', 'asan.r@nsru.ac.th', '$2y$10$/lgNACU4b52pw9E.1ef6qOIrOHBP.6mcwnuBjzx9HUNwS7QHOBRX2', 'ชาย', '2003-07-13', 'Admin', '0622647041', '2023-10-06 13:17:47', 'None', 1, './../img/profile_ul/profile_img_1.png'),
(2, '65111822004', 'Theerapong', 'theerapong.t@nsru', '$2y$10$l8cPHDZuWR6G.dv5fCDHIux88aPWj88ilC2sMr/yo..zfvOhfN.N6', 'ชาย', '2003-12-03', 'None', '0956386360', '2023-10-06 13:26:18', 'None', 1, 'None');

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
