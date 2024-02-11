-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2024 at 02:48 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

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
-- Table structure for table `tb_schoolprofile`
--

CREATE TABLE `tb_schoolprofile` (
  `id` int(11) NOT NULL,
  `SchoolName` varchar(500) NOT NULL,
  `Lokation` varchar(500) NOT NULL,
  `Email` varchar(500) NOT NULL,
  `MobileNumber` varchar(15) NOT NULL,
  `TelephoneNumber` varchar(15) NOT NULL,
  `Discription` varchar(500) NOT NULL,
  `ToHome` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_schoolprofile`
--

INSERT INTO `tb_schoolprofile` (`id`, `SchoolName`, `Lokation`, `Email`, `MobileNumber`, `TelephoneNumber`, `Discription`, `ToHome`) VALUES
(1, 'Holy Cross College of Pampanga', 'Sta. Lucia, Sta. Ana, Pampanga', 'sample@gmail.Ccom', '0942498798', '09488170896', 'Preliminary Exam', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_schoolprofile`
--
ALTER TABLE `tb_schoolprofile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_schoolprofile`
--
ALTER TABLE `tb_schoolprofile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
