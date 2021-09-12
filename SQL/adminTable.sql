-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: fdb28.awardspace.net
-- Generation Time: Jan 12, 2021 at 09:04 AM
-- Server version: 5.7.20-log
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `3700261_gokakmobileservice`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminTable`
--

CREATE TABLE `adminTable` (
  `SNo` int(11) NOT NULL,
  `adminName` varchar(225) NOT NULL,
  `adminEmailID` varchar(225) NOT NULL,
  `adminPswd` varchar(225) NOT NULL,
  `adminPhone` varchar(10) NOT NULL,
  `deviceIP` varchar(225) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminTable`
--

INSERT INTO `adminTable` (`SNo`, `adminName`, `adminEmailID`, `adminPswd`, `adminPhone`, `deviceIP`) VALUES
(1, 'Shadab', 'shadabkarnachi@gmail.com', 'Gokakmobile@18', '9483819738', 'NA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminTable`
--
ALTER TABLE `adminTable`
  ADD PRIMARY KEY (`SNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminTable`
--
ALTER TABLE `adminTable`
  MODIFY `SNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
