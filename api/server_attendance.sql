-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2023 at 01:13 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `santech`
--

-- --------------------------------------------------------

--
-- Table structure for table `server_attendance`
--

CREATE TABLE `server_attendance` (
  `row_counter` int(20) NOT NULL,
  `id_code` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `id_number` varchar(50) NOT NULL,
  `id_given_date` varchar(50) NOT NULL,
  `entry_time` datetime NOT NULL,
  `expiry_time` datetime NOT NULL,
  `time_difference` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `server_attendance`
--

INSERT INTO `server_attendance` (`row_counter`, `id_code`, `name`, `id_number`, `id_given_date`, `entry_time`, `expiry_time`, `time_difference`) VALUES
(2, '321', 'SANGAYESUSeth Kevin', '11996 8 0068426 1 62', '0115032016', '2023-05-31 10:29:07', '2023-05-31 10:33:50', '2023-05-31 10:29:07'),
(47, '787', 'NIYISHOBORAEric', '11995 8 0031166 0 63', '0108112011', '2023-05-31 10:37:46', '2023-05-31 10:37:46', '2023-05-31 10:37:46'),
(48, '787', 'NIYISHOBORAEric', '11995 8 0031166 0 63', '0108112011', '2023-05-31 10:37:46', '2023-05-31 10:37:46', '2023-05-31 10:37:46'),
(49, '321', 'SANGAYESUSeth Kevin', '11996 8 0766426 1 62', '0115032016', '2023-05-31 15:37:06', '2023-05-31 15:37:06', '2023-05-31 15:37:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `server_attendance`
--
ALTER TABLE `server_attendance`
  ADD PRIMARY KEY (`row_counter`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `server_attendance`
--
ALTER TABLE `server_attendance`
  MODIFY `row_counter` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
