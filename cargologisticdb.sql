-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2022 at 05:49 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cargologisticdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `abonement`
--

CREATE TABLE `abonement` (
  `abonementid` int(11) NOT NULL,
  `cargoid` int(11) NOT NULL,
  `cargoname` varchar(100) NOT NULL,
  `drivername` varchar(100) NOT NULL,
  `driverphone` varchar(20) NOT NULL,
  `driverotherphon` varchar(20) NOT NULL,
  `cargoprice` varchar(100) NOT NULL,
  `abonementday` varchar(255) NOT NULL,
  `remainday` varchar(100) NOT NULL,
  `totalpay` varchar(255) NOT NULL,
  `doneon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `abonement`
--

INSERT INTO `abonement` (`abonementid`, `cargoid`, `cargoname`, `drivername`, `driverphone`, `driverotherphon`, `cargoprice`, `abonementday`, `remainday`, `totalpay`, `doneon`) VALUES
(1, 2, 'Fuel Tank', 'Kamuzinzi Jimmy', '0784440785', '0799990784', '2000', '15', '12', '30000', '2022-07-28');

-- --------------------------------------------------------

--
-- Table structure for table `admintb`
--

CREATE TABLE `admintb` (
  `adminid` int(11) NOT NULL,
  `adminemail` varchar(100) NOT NULL,
  `adminname` varchar(100) NOT NULL,
  `adminphone` varchar(20) NOT NULL,
  `adminpass` varchar(70) NOT NULL,
  `doneon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admintb`
--

INSERT INTO `admintb` (`adminid`, `adminemail`, `adminname`, `adminphone`, `adminpass`, `doneon`) VALUES
(1, 'manager@gmail.com', 'Paccy Kibamba', '0781110784', '1234567', '2022-07-27');

-- --------------------------------------------------------

--
-- Table structure for table `attendencetb`
--

CREATE TABLE `attendencetb` (
  `attendenceid` int(11) NOT NULL,
  `cargoid` int(11) NOT NULL,
  `attendedtime` varchar(255) NOT NULL,
  `attendeddate` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL,
  `doneon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendencetb`
--

INSERT INTO `attendencetb` (`attendenceid`, `cargoid`, `attendedtime`, `attendeddate`, `status`, `doneon`) VALUES
(1, 2, '10:39', '2022-07-28', 'In', '2022-07-28'),
(2, 2, '10:54', '2022-07-28', 'In', '2022-07-28'),
(3, 2, '19:38', '2022-08-22', 'In', '2022-08-22');

-- --------------------------------------------------------

--
-- Table structure for table `carcargotb`
--

CREATE TABLE `carcargotb` (
  `carcargoid` int(11) NOT NULL,
  `cargoid` int(11) NOT NULL,
  `cargoname` varchar(100) NOT NULL,
  `drivername` varchar(100) NOT NULL,
  `driverphone` varchar(20) NOT NULL,
  `driverotherphon` varchar(20) NOT NULL,
  `cargoprice` varchar(100) NOT NULL,
  `cargostat` varchar(80) NOT NULL,
  `geton` varchar(255) NOT NULL,
  `gettime` varchar(255) NOT NULL,
  `doneon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carcargotb`
--

INSERT INTO `carcargotb` (`carcargoid`, `cargoid`, `cargoname`, `drivername`, `driverphone`, `driverotherphon`, `cargoprice`, `cargostat`, `geton`, `gettime`, `doneon`) VALUES
(1, 2, 'Container food', 'Musoni Frederic', '07899908777', '07899908789', '2000', 'In', '2022-07-27\r\n', '17:24', '2022-07-27'),
(2, 2, 'Container food', 'Musoni Frederic', '07899908777', '07899908789', '0', 'Out', '2022-07-27', '19:40', '2022-07-27');

-- --------------------------------------------------------

--
-- Table structure for table `cargotb`
--

CREATE TABLE `cargotb` (
  `cargoid` int(11) NOT NULL,
  `carcode` varchar(255) NOT NULL,
  `drivernames` varchar(100) NOT NULL,
  `cartype` varchar(100) NOT NULL,
  `carplate` varchar(100) NOT NULL,
  `driverphone` varchar(20) NOT NULL,
  `driverotherphone` varchar(20) NOT NULL,
  `cargostatususe` varchar(100) NOT NULL,
  `doneon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cargotb`
--

INSERT INTO `cargotb` (`cargoid`, `carcode`, `drivernames`, `cartype`, `carplate`, `driverphone`, `driverotherphone`, `cargostatususe`, `doneon`) VALUES
(1, '722813448', 'Musoni Frederic', 'Benz', 'Rac456G', '0789990784', '0785550786', 'none', '2022-07-27'),
(2, '240298592', 'Musoni Frederic', 'Shakiman', 'Rac496G', '0789990783', '0788850786', 'abonement', '2022-07-27');

-- --------------------------------------------------------

--
-- Table structure for table `cartypetb`
--

CREATE TABLE `cartypetb` (
  `cartypeid` int(11) NOT NULL,
  `cartype` varchar(100) NOT NULL,
  `carprice` varchar(100) NOT NULL,
  `doneon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cartypetb`
--

INSERT INTO `cartypetb` (`cartypeid`, `cartype`, `carprice`, `doneon`) VALUES
(1, 'Truck', '2000', '2022-07-27'),
(2, 'Taxi', '1000', '2022-07-27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abonement`
--
ALTER TABLE `abonement`
  ADD PRIMARY KEY (`abonementid`);

--
-- Indexes for table `admintb`
--
ALTER TABLE `admintb`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `attendencetb`
--
ALTER TABLE `attendencetb`
  ADD PRIMARY KEY (`attendenceid`);

--
-- Indexes for table `carcargotb`
--
ALTER TABLE `carcargotb`
  ADD PRIMARY KEY (`carcargoid`);

--
-- Indexes for table `cargotb`
--
ALTER TABLE `cargotb`
  ADD PRIMARY KEY (`cargoid`);

--
-- Indexes for table `cartypetb`
--
ALTER TABLE `cartypetb`
  ADD PRIMARY KEY (`cartypeid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abonement`
--
ALTER TABLE `abonement`
  MODIFY `abonementid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admintb`
--
ALTER TABLE `admintb`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `attendencetb`
--
ALTER TABLE `attendencetb`
  MODIFY `attendenceid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `carcargotb`
--
ALTER TABLE `carcargotb`
  MODIFY `carcargoid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cargotb`
--
ALTER TABLE `cargotb`
  MODIFY `cargoid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cartypetb`
--
ALTER TABLE `cartypetb`
  MODIFY `cartypeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
