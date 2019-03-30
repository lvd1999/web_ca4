-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2019 at 10:28 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `d00198307`
--

-- --------------------------------------------------------

--
-- Table structure for table `bullets`
--

CREATE TABLE `bullets` (
  `bulletID` int(10) NOT NULL,
  `bulletName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bullets`
--

INSERT INTO `bullets` (`bulletID`, `bulletName`) VALUES
(1, '.45 ACP'),
(2, '9mm'),
(3, '7.62mm'),
(4, '5.56mm'),
(5, '.300 Magnum'),
(6, '12 Gauge');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categoryID` int(11) NOT NULL,
  `categoryName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categoryID`, `categoryName`) VALUES
(1, 'Pistol'),
(2, 'Shotgun'),
(3, 'Rifle'),
(4, 'Sniper');

-- --------------------------------------------------------

--
-- Table structure for table `guns`
--

CREATE TABLE `guns` (
  `gunID` int(11) NOT NULL,
  `categoryID` int(11) NOT NULL,
  `gunName` varchar(255) NOT NULL,
  `bullet` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guns`
--

INSERT INTO `guns` (`gunID`, `categoryID`, `gunName`, `bullet`) VALUES
(1, 1, 'P92', 2),
(3, 2, 'S686', 6),
(4, 2, 'S12K', 6),
(5, 3, 'M416', 4),
(6, 3, 'AKM', 3),
(7, 4, 'Kar98K', 3),
(8, 4, 'M24', 3),
(9, 4, 'AWM', 5),
(11, 3, 'Scar-L', 4),
(12, 1, 'P1911', 1),
(13, 1, 'R1895', 3),
(14, 4, 'VSS', 2),
(15, 4, 'Winchester', 1),
(17, 1, 'R45', 3),
(18, 3, 'DP-28', 3),
(19, 2, 'S1897', 6),
(20, 3, 'M16A4', 4);

-- --------------------------------------------------------

--
-- Table structure for table `ranges`
--

CREATE TABLE `ranges` (
  `rangeID` int(10) NOT NULL,
  `rangeName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ranges`
--

INSERT INTO `ranges` (`rangeID`, `rangeName`) VALUES
(1, 'short'),
(2, 'medium'),
(3, 'long');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bullets`
--
ALTER TABLE `bullets`
  ADD PRIMARY KEY (`bulletID`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indexes for table `guns`
--
ALTER TABLE `guns`
  ADD PRIMARY KEY (`gunID`),
  ADD KEY `categoryID` (`categoryID`),
  ADD KEY `bullet` (`bullet`);

--
-- Indexes for table `ranges`
--
ALTER TABLE `ranges`
  ADD PRIMARY KEY (`rangeID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bullets`
--
ALTER TABLE `bullets`
  MODIFY `bulletID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `guns`
--
ALTER TABLE `guns`
  MODIFY `gunID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `ranges`
--
ALTER TABLE `ranges`
  MODIFY `rangeID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `guns`
--
ALTER TABLE `guns`
  ADD CONSTRAINT `guns_ibfk_1` FOREIGN KEY (`categoryID`) REFERENCES `categories` (`categoryID`),
  ADD CONSTRAINT `guns_ibfk_2` FOREIGN KEY (`bullet`) REFERENCES `bullets` (`bulletID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
