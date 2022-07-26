-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2022 at 05:06 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `deliveryman_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `deliveryman`
--

CREATE TABLE `deliveryman` (
  `name` varchar(100) DEFAULT NULL,
  `id` varchar(100) DEFAULT NULL,
  `location_d` varchar(100) DEFAULT NULL,
  `bio` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `deliveryman_details`
--

CREATE TABLE `deliveryman_details` (
  `p_name` varchar(50) DEFAULT NULL,
  `id` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `deliveryman_details`
--

INSERT INTO `deliveryman_details` (`p_name`, `id`) VALUES
('$username', '0');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_list`
--

CREATE TABLE `delivery_list` (
  `id` int(11) DEFAULT NULL,
  `delivery_location` varchar(100) DEFAULT NULL,
  `delivery_contact` varchar(100) DEFAULT NULL,
  `delivery_itemname` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `delivery_list`
--

INSERT INTO `delivery_list` (`id`, `delivery_location`, `delivery_contact`, `delivery_itemname`) VALUES
(1, 'dhaka', '017111111111', 'Food'),
(2, 'Khulna', '018111111111', 'Drinks');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
