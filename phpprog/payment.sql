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
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` varchar(255) NOT NULL,
  `modeofpayment` varchar(5) NOT NULL,
  `amount` int(32) NOT NULL,
  `cardno` bigint(20) NOT NULL,
  `year` mediumint(9) NOT NULL,
  `month` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`firstname`, `lastname`, `email`, `address`, `modeofpayment`, `amount`, `cardno`, `year`, `month`) VALUES
('a', 'b', 'krishnanmms@gmail.com', 'xcsc', 'cod', 0, 0, 0, '0'),
('a', 'b', 'krishnanmms@gmail.com', 'fwef', 'cod', 6296, 0, 0, '0'),
('a', 'b', 'krishnanmms@gmail.com', 'fwef', 'cod', 6296, 0, 0, '0'),
('a', 'b', 'krishnanmms@gmail.com', 'fwef', 'cod', 6296, 0, 0, '0'),
('a', 'b', 'krishnanmms@gmail.com', 'fwef', 'cod', 6296, 0, 0, '0'),
('a', 'b', 'krishnanmms@gmail.com', 'fwef', 'cod', 6296, 0, 0, '0'),
('a', 'b', 'krishnanmms@gmail.com', 'fwef', 'cod', 6296, 0, 0, '0'),
('a', 'b', 'krishnanmms@gmail.com', 'fwef', 'cod', 6296, 0, 0, '0'),
('a', 'b', 'krishnanmms@gmail.com', 'fwef', 'cod', 6296, 0, 0, '0'),
('a', 'b', 'krishnanmms@gmail.com', 'fwef', 'cod', 6296, 0, 0, '0'),
('a', 'b', 'krishnanmms@gmail.com', 'fwef', 'cod', 6296, 0, 0, '0'),
('a', 'b', 'krishnanmms@gmail.com', 'fwef', 'cod', 6296, 0, 0, '0'),
('a', 'b', 'krishnanmms@gmail.com', 'fwef', 'cod', 6296, 0, 0, '0'),
('a', 'b', 'krishnanmms@gmail.com', 'fwef', 'cod', 6296, 0, 0, '0'),
('a', 'b', 'krishnanmms@gmail.com', 'fwef', 'cod', 6296, 0, 0, '0'),
('a', 'b', 'krishnanmms@gmail.com', 'fwef', 'cod', 6296, 0, 0, '0'),
('a', 'b', 'krishnanmms@gmail.com', 'fwef', 'cod', 6296, 0, 0, '0'),
('a', 'b', 'krishnanmms@gmail.com', 'fwef', 'cod', 6296, 0, 0, '0'),
('a', 'b', 'krishnanmms@gmail.com', 'fwef', 'cod', 6296, 0, 0, '0'),
('a', 'b', 'krishnanmms@gmail.com', 'fwef', 'cod', 6296, 0, 0, '0'),
('a', 'b', 'krishnanmms@gmail.com', 'fwef', 'cod', 6296, 0, 0, '0'),
('a', 'b', 'krishnanmms@gmail.com', 'fwef', 'cod', 6296, 0, 0, '0'),
('a', 'b', 'krishnanmms@gmail.com', 'fwef', 'cod', 6296, 0, 0, '0'),
('Madhumita', 'Krishnan', 'krishnanmadhumita@gmail.com', 'Maaruthi Eden, Velachery, Chennai-600042', 'card', 6296, 0, 0, '0'),
('Madhumita', 'Krishnan', 'krishnanmadhumita@gmail.com', 'Maaruthi Eden, Velachery, Chennai-600042', 'card', 6296, 0, 0, '0'),
('Madhumita', 'Krishnan', 'krishnanmadhumita@gmail.com', 'Maaruthi Eden, Velachery, Chennai-600042', 'card', 6296, 0, 0, '0'),
('Madhumita', 'Krishnan', 'krishnanmadhumita@gmail.com', 'Maaruthi Eden, Velachery, Chennai-600042', 'card', 6296, 0, 0, '0'),
('Madhumita', 'Krishnan', 'ds@gmail.co.in', 'Maaruthi Eden, Velachery, Chennai-600042', 'card', 6296, 0, 0, '0'),
('', '', '', '', '', 6296, 0, 0, '0'),
('', '', '', '', '', 6296, 0, 0, '0'),
('', '', '', '', '', 6296, 0, 0, '0'),
('', '', '', '', '', 6296, 0, 0, '0'),
('', '', '', '', '', 6296, 0, 0, '0'),
('', '', '', '', 'cod', 6296, 0, 0, '0'),
('ad', 'dfaf', 'krishnanmadhumita@gmail.com', 'asf', '', 6296, 0, 0, '0'),
('Madhumita', 'Krishnan', 'krishnan@primaze.com', 'swwqdqd', 'cod', 3998, 0, 0, '0'),
('Madhumita', 'Krishnan', 'krishnan@primaze.com', 'swwqdqd', 'cod', 3998, 0, 0, '0'),
('Madhumita', 'Krishnan', 'krishnan@primaze.com', 'swwqdqd', 'card', 3998, 0, 0, '0'),
('', '', '', '', '', 1299, 0, 0, '0'),
('Ramesh', 'VC', 'meetvcr2021@gmail.com', 'A105, TULIVE DAKSHIN APT, A N E Salai, OIL MILL ROAD\r\nTULIVE DAKSHIN', 'cod', 1299, 0, 0, '0'),
('', '', '', '', '', 3992, 0, 0, '0'),
('', '', '', '', '', 3992, 0, 0, '0'),
('Ramesh', 'VC', 'meetvcr2021@gmail.com', 'A105, TULIVE DAKSHIN APT, A N E Salai, OIL MILL ROAD\r\nTULIVE DAKSHIN', 'card', 3567, 12345678912345, 0, '0'),
('Ramesh', 'VC', 'meetvcr2021@gmail.com', 'A105, TULIVE DAKSHIN APT, A N E Salai, OIL MILL ROAD\r\nTULIVE DAKSHIN', 'card', 3567, 12345678912345, 0, '0'),
('Ramesh', 'VC', 'meetvcr2021@gmail.com', 'A105, TULIVE DAKSHIN APT, A N E Salai, OIL MILL ROAD\r\nTULIVE DAKSHIN', 'card', 3567, 12345678912345, 0, '0'),
('Ramesh', 'VC', 'meetvcr2021@gmail.com', 'A105, TULIVE DAKSHIN APT, A N E Salai, OIL MILL ROAD\r\nTULIVE DAKSHIN', 'cod', 6194, 0, 2016, '0'),
('Ramesh', 'VC', 'meetvcr2021@gmail.com', 'A105, TULIVE DAKSHIN APT, A N E Salai, OIL MILL ROAD\r\nTULIVE DAKSHIN', 'card', 6194, 1234123412341237, 0, 'february'),
('Ramesh', 'VC', 'meetvcr2021@gmail.com', 'A105, TULIVE DAKSHIN APT, A N E Salai, OIL MILL ROAD\r\nTULIVE DAKSHIN', 'card', 6194, 1234123412341237789, 0, 'february'),
('', '', '', '', '', 6194, 343546758464758464, 0, ''),
('Ramesh', 'VC', 'meetvcr2021@gmail.com', 'A105, TULIVE DAKSHIN APT, A N E Salai, OIL MILL ROAD\r\nTULIVE DAKSHIN', 'card', 1199, 1111000011, 0, ''),
('Ramesh', 'VC', 'meetvcr2021@gmail.com', 'A105, TULIVE DAKSHIN APT, A N E Salai, OIL MILL ROAD\r\nTULIVE DAKSHIN', 'card', 1199, 1111000011, 0, ''),
('', '', '', '', '', 0, 0, 0, ''),
('', '', '', '', '', 0, 0, 0, ''),
('Ramesh', 'VC', 'meetvcr2021@gmail.com', 'A105, TULIVE DAKSHIN APT, A N E Salai, OIL MILL ROAD\r\nTULIVE DAKSHIN', 'card', 1199, 78, 2019, 'march'),
('Ramesh', 'VC', 'meetvcr2021@gmail.com', 'A105, TULIVE DAKSHIN APT, A N E Salai, OIL MILL ROAD\r\nTULIVE DAKSHIN', 'card', 1199, 78, 2019, 'march'),
('Ramesh', 'VC', 'meetvcr2021@gmail.com', 'A105, TULIVE DAKSHIN APT, A N E Salai, OIL MILL ROAD\r\nTULIVE DAKSHIN', 'card', 1199, 34568756846, 2018, 'march');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
