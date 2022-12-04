-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2022 at 01:17 PM
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
-- Database: `jobish`
--

-- --------------------------------------------------------

--
-- Table structure for table `job_list`
--

CREATE TABLE `job_list` (
  `jo_id` int(11) NOT NULL,
  `jo_title` varchar(60) NOT NULL,
  `jo_des` text NOT NULL,
  `jo_name` varchar(60) NOT NULL,
  `jo_cat` varchar(60) NOT NULL,
  `jo_sub_cat` varchar(60) NOT NULL,
  `jo_salary_ty` varchar(60) NOT NULL,
  `jo_salary` int(60) NOT NULL,
  `jo_currency` varchar(60) NOT NULL,
  `jo_email` varchar(60) NOT NULL,
  `jo_whatsappno` int(60) NOT NULL,
  `jo_location` varchar(60) NOT NULL,
  `user_id` int(191) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_list`
--

INSERT INTO `job_list` (`jo_id`, `jo_title`, `jo_des`, `jo_name`, `jo_cat`, `jo_sub_cat`, `jo_salary_ty`, `jo_salary`, `jo_currency`, `jo_email`, `jo_whatsappno`, `jo_location`, `user_id`) VALUES
(5, 'Asad Mukhtar 1', '	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n	proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ', 'Asad Mukhtar', 'Category 2', 'Category 2', 'Monthly', 50000, 'USD', 'axad03213@gmail.com', 2147483647, 'lahore', 12);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(191) DEFAULT NULL,
  `email` varchar(191) DEFAULT NULL,
  `password` varchar(191) DEFAULT NULL,
  `status` int(191) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `status`) VALUES
(12, 'ASad Mukhtar', 'axad03213@gmail.com', 'asad03213', 2),
(13, 'Abdullah ', 'Abdullah@gmail.com', 'asad03213', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `job_list`
--
ALTER TABLE `job_list`
  ADD PRIMARY KEY (`jo_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `job_list`
--
ALTER TABLE `job_list`
  MODIFY `jo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
