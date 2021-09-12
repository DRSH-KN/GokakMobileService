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
-- Table structure for table `customerTable`
--

CREATE TABLE `customerTable` (
  `SNo` int(11) NOT NULL,
  `firstName` varchar(225) NOT NULL,
  `lastName` varchar(225) NOT NULL,
  `phoneNumber` varchar(10) NOT NULL,
  `emailID` varchar(225) NOT NULL DEFAULT 'NA',
  `IMEI` varchar(20) NOT NULL,
  `deviceName` varchar(225) NOT NULL,
  `saleDate` date NOT NULL,
  `salePeriod` int(11) NOT NULL,
  `deviceID` int(11) NOT NULL,
  `offerType` int(11) NOT NULL,
  `offerStat` int(11) NOT NULL,
  `offerCode` varchar(225) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customerTable`
--

INSERT INTO `customerTable` (`SNo`, `firstName`, `lastName`, `phoneNumber`, `emailID`, `IMEI`, `deviceName`, `saleDate`, `salePeriod`, `deviceID`, `offerType`, `offerStat`, `offerCode`) VALUES
(1, 'Shadab', 'Karnachi', '9483819738', 'shadabkarnachi@gmail.com', '123456789012345', 'Xiaomi Redmi Note 5 Pro', '2020-11-12', 12, 5, 2, 0, 'RD34GYT'),
(2, 'karnachi', 'Shadab karnachi', '6596551645', 'iamshaad.kn@gmail.com', '123456789012346', 'dfgdfgdfgfdgd', '2021-01-12', 12, 5, 2, 0, 'rdydrgedf'),
(3, 'Dariush', 'Music', '9483819738', 'dariushmusic@gmail.com', '123456789123456', 'Beyerdynamic Dt 880 Pro', '2020-10-01', 36, 2, 1, 0, 'EEJEOPJF'),
(4, 'bob', 'Marley', '1234567890', 'bobmarley@gmail.com', '1234556789012345', 'GanjaBox', '2021-01-03', 12, 6, 1, 0, 'ENKJNFJKS'),
(5, 'Hardy', 'Sandhu', '0987645312', 'NA', '1235654365566444', 'Xiaomi Redmi Note 5 Pro', '2021-01-16', 12, 0, 1, 0, 'NA'),
(6, 'hello', 'my', '1234567590', 'hshs', '8273662', 'Lenovo Ideapad Gaming 3i', '2021-01-03', 12, 0, 1, 1, 'hsushhs'),
(7, 'Testfirst', 'Testlast', '1234567890', 'test@gmail.com', '1236377488383', 'Lenovo Ideapad Gaming 3i', '2021-01-06', 6, 0, 2, 1, 'hdhsjjs'),
(8, 'testFirst', 'testLast', '1234556786', 'testemail@email.com', '17263627727277', 'Beyerdynamic Dt 880 Pro', '2021-01-04', 6, 0, 1, 1, 'hauyys'),
(9, 'humin', 'good yu', '5555555555', 'mmail@mail.com', '4755775556', 'Beyerdynamic Dt 880 Pro', '2021-01-04', 12, 0, 2, 1, 'gytffyy'),
(10, 'Sahil', 'Liaquat', '6006067251', 'sahil.liaquat136@gmail.com', '8901725100117', 'OPPO F11 PRO', '2020-10-01', 12, 0, 2, 0, 'NA'),
(11, 'Asif', 'Rajekhan', '9739731927', 'asifrajekhan@gmail.com', '7383', 'Xiaomi Redmi Note 5 Pro', '2021-01-04', 12, 0, 1, 1, '6728'),
(12, 'Abc', 'ra', '9739731927', 'asifrajekhan0@gmail.com', '1122', 'vivo', '2021-01-15', 12, 0, 1, 1, 'avdd'),
(13, 'John', 'Doe', '8764531264', 'imajsi@gmail.com', '744577644466', 'vivo', '2021-01-01', 12, 0, 2, 0, 'NA'),
(14, 'Doe', 'john', '1234587665', 'NA', '64666727', 'Beyerdynamic Dt 880 Pro', '2021-07-15', 18, 0, 1, 0, 'NA'),
(15, 'doe', 'Doe2', '6456678489', 'jshshha@gmail.com', '75467655743567888', 'Lenovo Ideapad Gaming 3i', '2021-01-04', 18, 0, 1, 0, 'NA'),
(16, 'Asif', 'Rajekhan', '9739731927', 'asifrajekhan@gmail.com', 'iiggo', 'Lenovo Ideapad Gaming 3i', '2021-02-10', 12, 0, 1, 1, 'jfjf'),
(17, 'John', 'cena', '6464546545', 'NA', '8902442228009', 'Xiaomi Redmi Note 5 Pro', '2021-01-12', 12, 0, 2, 0, 'NA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customerTable`
--
ALTER TABLE `customerTable`
  ADD PRIMARY KEY (`SNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customerTable`
--
ALTER TABLE `customerTable`
  MODIFY `SNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
