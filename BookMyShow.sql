-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 23, 2018 at 03:36 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `BookMyShow`
--
CREATE DATABASE IF NOT EXISTS `BookMyShow` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `BookMyShow`;

-- --------------------------------------------------------

--
-- Table structure for table `Booking`
--

DROP TABLE IF EXISTS `Booking`;
CREATE TABLE `Booking` (
  `B_id` int(22) NOT NULL,
  `B_time` time NOT NULL,
  `B_date` date NOT NULL,
  `B_movie` varchar(35) NOT NULL,
  `B_hall` int(3) NOT NULL,
  `B_seats` int(20) NOT NULL,
  `B_person` varchar(50) NOT NULL,
  `B_mail` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Customer`
--

DROP TABLE IF EXISTS `Customer`;
CREATE TABLE `Customer` (
  `C_id` int(22) NOT NULL,
  `C_name` varchar(50) NOT NULL,
  `C_phone` int(10) NOT NULL,
  `C_email` varchar(20) NOT NULL,
  `C_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Feedback`
--

DROP TABLE IF EXISTS `Feedback`;
CREATE TABLE `Feedback` (
  `F_id` int(22) NOT NULL,
  `F_feedback` varchar(100) NOT NULL,
  `F_movie` varchar(35) NOT NULL,
  `F_person` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Hall`
--

DROP TABLE IF EXISTS `Hall`;
CREATE TABLE `Hall` (
  `M_hall` varchar(3) NOT NULL,
  `M_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Movies`
--

DROP TABLE IF EXISTS `Movies`;
CREATE TABLE `Movies` (
  `M_name` char(50) NOT NULL,
  `M_release` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Payment`
--

DROP TABLE IF EXISTS `Payment`;
CREATE TABLE `Payment` (
  `P_id` int(22) NOT NULL,
  `P_person` varchar(50) NOT NULL,
  `P_mail` varchar(20) NOT NULL,
  `P_amount` decimal(5,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Booking`
--
ALTER TABLE `Booking`
  ADD PRIMARY KEY (`B_id`);

--
-- Indexes for table `Customer`
--
ALTER TABLE `Customer`
  ADD PRIMARY KEY (`C_id`);

--
-- Indexes for table `Feedback`
--
ALTER TABLE `Feedback`
  ADD PRIMARY KEY (`F_id`);

--
-- Indexes for table `Hall`
--
ALTER TABLE `Hall`
  ADD UNIQUE KEY `M_hall` (`M_hall`),
  ADD KEY `M_name` (`M_name`);

--
-- Indexes for table `Movies`
--
ALTER TABLE `Movies`
  ADD PRIMARY KEY (`M_name`);

--
-- Indexes for table `Payment`
--
ALTER TABLE `Payment`
  ADD PRIMARY KEY (`P_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Booking`
--
ALTER TABLE `Booking`
  MODIFY `B_id` int(22) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Customer`
--
ALTER TABLE `Customer`
  MODIFY `C_id` int(22) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Feedback`
--
ALTER TABLE `Feedback`
  MODIFY `F_id` int(22) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Payment`
--
ALTER TABLE `Payment`
  MODIFY `P_id` int(22) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Hall`
--
ALTER TABLE `Hall`
  ADD CONSTRAINT `hall_ibfk_1` FOREIGN KEY (`M_name`) REFERENCES `Movies` (`M_name`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
