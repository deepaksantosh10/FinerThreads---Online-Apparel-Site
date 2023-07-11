-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2022 at 08:43 AM
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
-- Database: `finerthreads`
--

-- --------------------------------------------------------

--
-- Table structure for table `womenproducts`
--

CREATE TABLE `womenproducts` (
  `id` varchar(32) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `imageurl` varchar(100) DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `womenproducts`
--

INSERT INTO `womenproducts` (`id`, `name`, `imageurl`, `price`) VALUES
('w-prd1', 'Blue knee length dress', 'images/wimg1.jpg', 1999),
('w-prd2', 'Pink knee length dress', 'images/wimg2.jpg', 3425),
('w-prd3', 'Brown Jumpsuit', 'images/wimg3.jpg', 990),
('w-prd4', 'Black floral knee length dress', 'images/wimg4.jpg', 1399),
('w-prd5', 'Green  knee length dress', 'images/wimg5.jpg', 1750),
('w-prd6', 'Light Blue knee length dress', 'images/wimg6.jpg', 1199),
('w-prd7', 'Light Blue knee length dress', 'images/wimg7.jpg', 1999),
('w-prd8', 'Black knee length dress', 'images/wimg8.jpg', 2099);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `womenproducts`
--
ALTER TABLE `womenproducts`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
