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
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `ID` int(11) NOT NULL,
  `Firstname` varchar(100) NOT NULL,
  `Lastname` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phonenumber` bigint(10) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `DOB` date NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `NativePlace` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`ID`, `Firstname`, `Lastname`, `Email`, `Phonenumber`, `Gender`, `DOB`, `Password`, `Address`, `NativePlace`) VALUES
(1, 'Deepak', 'Santosh', 'deepak.santosh29002@gmail.com', 9884395466, 'male', '2022-10-20', 'fu', 'jkl', 'kj'),
(4, 'Ramesh', 'VC', 'meetvcr2021@gmail.com', 9445175316, 'male', '2022-11-03', 'a', 'A105, TULIVE DAKSHIN APT, A N E Salai, OIL MILL ROAD\r\nTULIVE DAKSHIN', 'a'),
(5, 'Ramesh', 'VC', 'meetvcr2021@gmail.com', 9445175316, 'female', '2022-11-10', 'a', 'A105, TULIVE DAKSHIN APT, A N E Salai, OIL MILL ROAD\r\nTULIVE DAKSHIN', 'a'),
(6, 'Karthik', 'VC', 'meetvcr2021@gmail.com', 9445175316, 'male', '2022-11-02', 'a', 'A105, TULIVE DAKSHIN APT, A N E Salai, OIL MILL ROAD\r\nTULIVE DAKSHIN', 'a'),
(7, 'Ramesh', 'VC', 'meetvcr2021@gmail.com', 9445175316, 'male', '2022-11-05', 'a', 'A105, TULIVE DAKSHIN APT, A N E Salai, OIL MILL ROAD\r\nTULIVE DAKSHIN', 'a'),
(8, 'Ramesh', 'VC', 'meetvcr2021@gmail.com', 9445175316, 'male', '2022-11-10', 'a', 'A105, TULIVE DAKSHIN APT, A N E Salai, OIL MILL ROAD\r\nTULIVE DAKSHIN', 'a'),
(9, 'Ramesh', 'VC', 'meetvcr2021@gmail.com', 9445175316, 'male', '2022-11-10', 'a', 'A105, TULIVE DAKSHIN APT, A N E Salai, OIL MILL ROAD\r\nTULIVE DAKSHIN', 'a'),
(10, 'Ramesh', 'VC', 'meetvcr2021@gmail.com', 9445175316, 'male', '2022-11-10', 'a', 'A105, TULIVE DAKSHIN APT, A N E Salai, OIL MILL ROAD\r\nTULIVE DAKSHIN', 'a'),
(11, 'Ramesh', 'VC', 'meetvcr2021@gmail.com', 9445175316, 'male', '2022-11-02', 'a', 'A105, TULIVE DAKSHIN APT, A N E Salai, OIL MILL ROAD\r\nTULIVE DAKSHIN', 'a'),
(12, 'Ramesh', 'VC', 'meetvcr2021@gmail.com', 9445175316, 'male', '2022-11-04', 'a', 'A105, TULIVE DAKSHIN APT, A N E Salai, OIL MILL ROAD\r\nTULIVE DAKSHIN', 'a'),
(13, 'Deepak', 'Santosh', 'deepak.santosh2002@gmail.com', 9884395466, 'male', '2022-11-04', 'hi', 'tulive', 'Chennai'),
(14, 'Meena', 'r', 'meena@gmail.com', 9876543210, 'female', '2022-11-04', 'hello', 'hello', 'Madurai'),
(15, 'Ramesh', 'VC', 'meetvcr20214@gmail.com', 944517531, 'female', '2022-11-03', 'a', 'A105, TULIVE DAKSHIN APT, A N E Salai, OIL MILL ROAD\r\nTULIVE DAKSHIN', 'a'),
(16, 'Ramesh', 'VC', 'finerthreads@gmail.com', 944517531, 'male', '2022-11-03', 'hi', 'A105, TULIVE DAKSHIN APT, A N E Salai, OIL MILL ROAD\r\nTULIVE DAKSHIN', 'chennai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
