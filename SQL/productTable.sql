-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: fdb28.awardspace.net
-- Generation Time: Jan 12, 2021 at 09:05 AM
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
-- Table structure for table `productTable`
--

CREATE TABLE `productTable` (
  `SNo` int(11) NOT NULL,
  `productName` varchar(225) NOT NULL,
  `productCost` int(11) NOT NULL,
  `productDate` date NOT NULL,
  `productValidity` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productTable`
--

INSERT INTO `productTable` (`SNo`, `productName`, `productCost`, `productDate`, `productValidity`) VALUES
(1, 'Xiaomi Redmi Note 5 Pro', 15000, '2020-12-03', 12),
(2, 'Beyerdynamic Dt 880 Pro', 20000, '2021-01-04', 36),
(3, 'Lenovo Ideapad Gaming 3i', 79000, '2021-01-03', 12),
(10, 'Alcazer Ultra Max Pro', 2147483647, '2021-01-08', 24),
(9, 'vivo', 1800, '2021-01-04', 12),
(8, 'OPPO F11 PRO', 15000, '2021-01-04', 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `productTable`
--
ALTER TABLE `productTable`
  ADD PRIMARY KEY (`SNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `productTable`
--
ALTER TABLE `productTable`
  MODIFY `SNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
