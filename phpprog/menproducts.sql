-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2022 at 08:42 AM
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
-- Table structure for table `menproducts`
--

CREATE TABLE `menproducts` (
  `id` varchar(32) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `imageurl` varchar(100) DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menproducts`
--

INSERT INTO `menproducts` (`id`, `name`, `imageurl`, `price`) VALUES
('m-prd1', 'Adidas Black t shirt', 'images/mimg1.jpg', 1299),
('m-prd2', 'Adidas White t shirt', 'images/mimg2.jpg', 1199),
('m-prd3', 'Adidas Blue t shirt', 'images/mimg3.jpg', 999),
('m-prd4', 'Adidas Pink tee', 'images/mimg4.jpg', 1599),
('m-prd5', 'Adidas Black t shirt', 'images/mimg5.jpg', 1450),
('m-prd6', 'Adidas dark grey t shirt', 'images/mimg6.jpg', 1399),
('m-prd7', 'Adidas black and dark grey t shirt', 'images/mimg7.jpg', 1670),
('m-prd8', 'Adidas grey t shirt', 'images/mimg8.jpg', 2150);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menproducts`
--
ALTER TABLE `menproducts`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
