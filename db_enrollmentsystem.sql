-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2024 at 12:02 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_enrollmentsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_studentinfo`
--

CREATE TABLE `tb_studentinfo` (
  `student_id` int(100) NOT NULL,
  `elem` varchar(255) NOT NULL,
  `elem_year` varchar(255) NOT NULL,
  `jhs` varchar(255) NOT NULL,
  `jhs_year` varchar(255) NOT NULL,
  `shs` varchar(255) NOT NULL,
  `shs_year` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `birthday` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `num` varchar(255) NOT NULL,
  `guardian` varchar(255) NOT NULL,
  `guardian_number` varchar(255) NOT NULL,
  `guardian_address` varchar(255) NOT NULL,
  `user_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_studentinfo`
--

INSERT INTO `tb_studentinfo` (`student_id`, `elem`, `elem_year`, `jhs`, `jhs_year`, `shs`, `shs_year`, `fname`, `mname`, `lname`, `gender`, `course`, `year`, `birthday`, `address`, `num`, `guardian`, `guardian_number`, `guardian_address`, `user_id`) VALUES
(11, 'San Isidro', '2024', 'San Isidro', '2024', 'San Isidro', '2024', 'Marc', 'TURLA', 'TURLA', 'male', 'bscs', 'I', '2024-02-03', 'Banahaw Cubao Quezon City', '100010001010', 'Nanay', '31515332', 'San Simon', 12);

-- --------------------------------------------------------

--
-- Table structure for table `tb_userdata`
--

CREATE TABLE `tb_userdata` (
  `user_id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_userdata`
--

INSERT INTO `tb_userdata` (`user_id`, `username`, `pass`, `email`) VALUES
(1, 'admin@admin', 'admin', ''),
(12, 'admin@student', 'admin', 'rondeang@yahoo.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_studentinfo`
--
ALTER TABLE `tb_studentinfo`
  ADD PRIMARY KEY (`student_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tb_userdata`
--
ALTER TABLE `tb_userdata`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_studentinfo`
--
ALTER TABLE `tb_studentinfo`
  MODIFY `student_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_userdata`
--
ALTER TABLE `tb_userdata`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_studentinfo`
--
ALTER TABLE `tb_studentinfo`
  ADD CONSTRAINT `tb_studentinfo_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tb_userdata` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
