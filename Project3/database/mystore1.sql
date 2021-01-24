-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2020 at 05:17 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mystore`
--

-- --------------------------------------------------------

--
-- Table structure for table `cases`
--

CREATE TABLE `cases` (
  `Cooler Master` varchar(15) NOT NULL DEFAULT '',
  `NZXT` varchar(15) NOT NULL DEFAULT '',
  `Fractal Design` varchar(15) NOT NULL DEFAULT '',
  `TermalTake` varchar(15) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cases`
--

INSERT INTO `cases` (`Cooler Master`, `NZXT`, `Fractal Design`, `TermalTake`) VALUES
('MasterCase H500', 'Noctis 450', 'Meshify C', 'Versa C24');

-- --------------------------------------------------------

--
-- Table structure for table `cpu`
--

CREATE TABLE `cpu` (
  `intel i3` varchar(20) NOT NULL DEFAULT '',
  `intel i5` varchar(20) NOT NULL DEFAULT '',
  `intel i7` varchar(20) NOT NULL DEFAULT '',
  `ryzen 3` varchar(20) NOT NULL DEFAULT '',
  `ryzen 5` varchar(20) NOT NULL DEFAULT '',
  `ryzen 7` varchar(20) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpu`
--

INSERT INTO `cpu` (`intel i3`, `intel i5`, `intel i7`, `ryzen 3`, `ryzen 5`, `ryzen 7`) VALUES
('intel core i3 8300', 'intel core i5 8500', 'intel core i7 8700', 'Ryzen 3 2300', 'Ryzen 5 2600', 'Ryzen 7 2700'),
('intel core i3 8350K', 'intel core i5 8600K', 'intel core i7-8700K', 'Ryzen 3 2300X ', 'Ryzen 5 2600X', 'Ryzen 7 2700X');

-- --------------------------------------------------------

--
-- Table structure for table `gpu`
--

CREATE TABLE `gpu` (
  `Nvidia` varchar(15) NOT NULL DEFAULT '',
  `Radeon` varchar(15) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gpu`
--

INSERT INTO `gpu` (`Nvidia`, `Radeon`) VALUES
('GTX 1060 6GB', 'RX 560 4GB'),
('GTX 1070 8GB', 'RX 570 8GB');

-- --------------------------------------------------------

--
-- Table structure for table `pcparts`
--

CREATE TABLE `pcparts` (
  `CPUs` varchar(20) NOT NULL,
  `GPUs` varchar(20) NOT NULL,
  `Cases` varchar(20) NOT NULL,
  `RAMs` varchar(20) NOT NULL,
  `Storages` varchar(20) NOT NULL,
  `PSUs` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pcparts`
--

INSERT INTO `pcparts` (`CPUs`, `GPUs`, `Cases`, `RAMs`, `Storages`, `PSUs`) VALUES
('i3', '1050', 'CM', '8GB', '1TB', '500W'),
('i5', '1060', 'FD', '12GB', '2TB', '600W');

-- --------------------------------------------------------

--
-- Table structure for table `psu`
--

CREATE TABLE `psu` (
  `Seasonic` varchar(20) NOT NULL DEFAULT '',
  `Corsair` varchar(20) NOT NULL DEFAULT '',
  `EVGA` varchar(20) NOT NULL DEFAULT '',
  `Thermaltake` varchar(20) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `psu`
--

INSERT INTO `psu` (`Seasonic`, `Corsair`, `EVGA`, `Thermaltake`) VALUES
('FOCUS SGX 700W', 'RM750x 750W', 'SuperNOVA 750W G2', 'Smart BX1 750W'),
('S12II 500W', 'CX550 550W', '500 B1 500W', 'Smart BX1 550W');

-- --------------------------------------------------------

--
-- Table structure for table `ram`
--

CREATE TABLE `ram` (
  `Kingston` varchar(20) NOT NULL DEFAULT '',
  `G.Skill` varchar(20) NOT NULL DEFAULT '',
  `Corsair` varchar(20) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ram`
--

INSERT INTO `ram` (`Kingston`, `G.Skill`, `Corsair`) VALUES
('HyperX 2133Mhz', 'Ripjaws V 2400Mhz', 'VENGEANCE 2666Mhz'),
('HyperX 2666Mhz', 'Trident Z 3000Mhz', 'DOMINATOR 3600Mhz');

-- --------------------------------------------------------

--
-- Table structure for table `storage`
--

CREATE TABLE `storage` (
  `SSD` varchar(15) NOT NULL DEFAULT '',
  `HardDisk` varchar(15) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `storage`
--

INSERT INTO `storage` (`SSD`, `HardDisk`) VALUES
('Kingston 120GB', 'WD 1TB'),
('Samsung 970 evo', 'WD 3TB');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cases`
--
ALTER TABLE `cases`
  ADD UNIQUE KEY `case` (`Cooler Master`),
  ADD UNIQUE KEY `case2` (`NZXT`),
  ADD UNIQUE KEY `case3` (`Fractal Design`),
  ADD UNIQUE KEY `case4` (`TermalTake`);

--
-- Indexes for table `cpu`
--
ALTER TABLE `cpu`
  ADD UNIQUE KEY `R3` (`ryzen 3`) USING BTREE,
  ADD UNIQUE KEY `R5` (`ryzen 5`) USING BTREE,
  ADD UNIQUE KEY `R7` (`ryzen 7`) USING BTREE,
  ADD UNIQUE KEY `c3` (`intel i3`) USING BTREE,
  ADD UNIQUE KEY `c7` (`intel i7`) USING BTREE,
  ADD UNIQUE KEY `c5` (`intel i5`) USING BTREE;

--
-- Indexes for table `gpu`
--
ALTER TABLE `gpu`
  ADD UNIQUE KEY `GTX` (`Nvidia`),
  ADD UNIQUE KEY `RX` (`Radeon`);

--
-- Indexes for table `psu`
--
ALTER TABLE `psu`
  ADD UNIQUE KEY `psu` (`Seasonic`),
  ADD UNIQUE KEY `psu2` (`Corsair`),
  ADD UNIQUE KEY `psu3` (`EVGA`),
  ADD UNIQUE KEY `psu4` (`Thermaltake`);

--
-- Indexes for table `ram`
--
ALTER TABLE `ram`
  ADD UNIQUE KEY `ram` (`Kingston`),
  ADD UNIQUE KEY `ram2` (`G.Skill`),
  ADD UNIQUE KEY `ram3` (`Corsair`);

--
-- Indexes for table `storage`
--
ALTER TABLE `storage`
  ADD UNIQUE KEY `ssd` (`SSD`),
  ADD UNIQUE KEY `HDD` (`HardDisk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
