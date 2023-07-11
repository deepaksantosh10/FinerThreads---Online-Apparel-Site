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
-- Table structure for table `tailormade`
--

CREATE TABLE `tailormade` (
  `Firstname` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phonenumber` int(10) NOT NULL,
  `ExpectedDeliveryDate` date NOT NULL,
  `CategoryName` varchar(50) NOT NULL,
  `Color` varchar(50) NOT NULL,
  `Composition` varchar(50) NOT NULL,
  `Material` varchar(50) NOT NULL,
  `Neck` varchar(50) NOT NULL,
  `Waist` varchar(50) NOT NULL,
  `ArmLength` varchar(50) NOT NULL,
  `Shoulder` varchar(50) NOT NULL,
  `PantLength` varchar(50) NOT NULL,
  `Description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tailormade`
--

INSERT INTO `tailormade` (`Firstname`, `Email`, `Phonenumber`, `ExpectedDeliveryDate`, `CategoryName`, `Color`, `Composition`, `Material`, `Neck`, `Waist`, `ArmLength`, `Shoulder`, `PantLength`, `Description`) VALUES
('Ramesh VC', 'meetvcr2021@gmail.com', 944517531, '2022-11-16', 'H', '#000000', 'H', 'polyster', '24', '4', '7', '5', '6', 'ji'),
('Ramesh VC', 'meetvcr2021@gmail.com', 944517531, '2022-11-16', 'H', '#000000', 'H', 'polyster', '24', '4', '7', '9', '6', 'HI'),
('Ramesh VC', 'meetvcr2021@gmail.com', 944517531, '2022-11-16', 'H', '#000000', 'H', 'polyster', '24', '4', '7', '9', '6', 'HI'),
('Deepak', 'meetvcr2021@gmail.com', 2147483647, '2022-11-17', 'H', '#000000', 'h', 'polyster', '24', '4', '7', '5', '6', 'thank you'),
('Ramesh VC', 'meetvcr2021@gmail.com', 944517531, '2022-11-16', 'H', '#000000', 'M', 'polyster', '8', '5', '9', '9', '6', 'hi'),
('Ramesh VC', 'deepak.santosh2002@gmail.com', 944517531, '2022-11-10', 'H', '#000000', 'M', 'wool', '8', '9', '10', '11', '12', 'hello deeps'),
('Ramesh VC', 'deepak.santosh2002@gmail.com', 944517531, '2022-11-10', 'H', '#000000', 'M', 'wool', '8', '9', '10', '11', '12', 'hello deeps'),
('Ramesh VC', 'meetvcr2021@gmail.com', 944517531, '2022-11-02', 'H', '#000000', 'M', 'silk', '6', '5', '4', '5', '8', 'deepak');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
