-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2023 at 05:59 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kaberuka`
--

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(11) NOT NULL,
  `responder` varchar(50) NOT NULL,
  `survey_id` varchar(20) NOT NULL,
  `results` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`results`)),
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `responder`, `survey_id`, `results`, `date`) VALUES
(13, '', 'NON', '{\"Should security be among the top priorities in IT spending for your organization?\":\"Strongly disagree\",\"What percentage of IT budget do you believe should be allocated to security measures in your organization? (Select only one)\":\"10-15%\"}', '2023-06-18 11:56:22'),
(14, 'test', 'NON', '{\"Should security be among the top priorities in IT spending for your organization?\":\"Strongly disagree\",\"What percentage of IT budget do you believe should be allocated to security measures in your organization? (Select only one)\":\"5-10%\"}', '2023-06-18 12:22:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `position` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`firstname`, `lastname`, `username`, `password`, `position`) VALUES
('admin', 'admin', 'admin', 'admin', 'ADMIN'),
('cfo', 'cfo', 'cfo', 'cfo', 'CFO'),
('dfgdfg', 'dfgfdgfd', 'gfdgfdgfdg', 'gg', 'position'),
('rtr', 'h', 'ghjg', 'e', 'position'),
('fgfh', 'gjh', 'gjhgjh', 'test', 'position'),
('t', 't', 't', 't', 'position'),
('test', 'test', 'test', 'test', 'CEO'),
('test', 'test', 'test1', 'test', 'CFO'),
('fdfsgsfd', 'KK', 'user1', 'user1', 'CFO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
