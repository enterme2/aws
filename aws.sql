-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2017 at 08:05 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aws`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `nameEmployee` varchar(64) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(8) NOT NULL,
  `usertype` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `nameEmployee`, `username`, `password`, `usertype`) VALUES
(1, 'Alexzender Marunsai', 'alexzendermarunsai', 'miau1234', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `sedafiatform`
--

CREATE TABLE `sedafiatform` (
  `ID` int(11) NOT NULL,
  `requestedBy` varchar(255) DEFAULT NULL,
  `jobTitle` varchar(255) DEFAULT NULL,
  `Ref` varchar(255) DEFAULT NULL,
  `ContactNo` varchar(255) DEFAULT NULL,
  `Dept` varchar(255) DEFAULT NULL,
  `AssetNo` varchar(255) DEFAULT NULL,
  `AssetName` varchar(255) DEFAULT NULL,
  `LocationCode` varchar(255) DEFAULT NULL,
  `LocationName` varchar(255) DEFAULT NULL,
  `WorkGroup` varchar(255) DEFAULT NULL,
  `VariationStatus` varchar(255) DEFAULT NULL,
  `WorkCategory` varchar(255) DEFAULT NULL,
  `ConditionStatus` varchar(255) DEFAULT NULL,
  `RequestedDetails` varchar(255) DEFAULT NULL,
  `IDName` varchar(255) DEFAULT NULL,
  `TargetDate` varchar(255) DEFAULT NULL,
  `rSignature` varchar(255) DEFAULT NULL,
  `dTime` varchar(255) DEFAULT NULL,
  `aDetails` varchar(255) DEFAULT NULL,
  `amStatus` varchar(255) DEFAULT NULL,
  `lProvided` varchar(255) DEFAULT NULL,
  `aInfo` varchar(255) DEFAULT NULL,
  `lStartDateTime` varchar(255) DEFAULT NULL,
  `lEndDateTime` varchar(255) DEFAULT NULL,
  `lReceivedBy` varchar(255) DEFAULT NULL,
  `lReturnBy` varchar(255) DEFAULT NULL,
  `d1` varchar(255) DEFAULT NULL,
  `u1` varchar(255) DEFAULT NULL,
  `q1` varchar(255) DEFAULT NULL,
  `d2` varchar(255) DEFAULT NULL,
  `u2` varchar(255) DEFAULT NULL,
  `q2` varchar(255) DEFAULT NULL,
  `d3` varchar(255) DEFAULT NULL,
  `u3` varchar(255) DEFAULT NULL,
  `q3` varchar(255) DEFAULT NULL,
  `eNo1` varchar(255) DEFAULT NULL,
  `eN1` varchar(255) DEFAULT NULL,
  `tC1` varchar(255) DEFAULT NULL,
  `date1` varchar(255) DEFAULT NULL,
  `sTime1` varchar(255) DEFAULT NULL,
  `eTime1` varchar(255) DEFAULT NULL,
  `rHour1` varchar(255) DEFAULT NULL,
  `eNo2` varchar(255) DEFAULT NULL,
  `eN2` varchar(255) DEFAULT NULL,
  `tC2` varchar(255) DEFAULT NULL,
  `date2` varchar(255) DEFAULT NULL,
  `sTime2` varchar(255) DEFAULT NULL,
  `eTime2` varchar(255) DEFAULT NULL,
  `rHour2` varchar(255) DEFAULT NULL,
  `eNo3` varchar(255) DEFAULT NULL,
  `eN3` varchar(255) DEFAULT NULL,
  `tC3` varchar(255) DEFAULT NULL,
  `date3` varchar(255) DEFAULT NULL,
  `sTime3` varchar(255) DEFAULT NULL,
  `eTime3` varchar(255) DEFAULT NULL,
  `rHour3` varchar(255) DEFAULT NULL,
  `eNo4` varchar(255) DEFAULT NULL,
  `eN4` varchar(255) DEFAULT NULL,
  `tC4` varchar(255) DEFAULT NULL,
  `date4` varchar(255) DEFAULT NULL,
  `sTime4` varchar(255) DEFAULT NULL,
  `eTime4` varchar(255) DEFAULT NULL,
  `rHour4` varchar(255) DEFAULT NULL,
  `dtwS` varchar(255) DEFAULT NULL,
  `dtwC` varchar(255) DEFAULT NULL,
  `aTaken` varchar(255) DEFAULT NULL,
  `esTest` varchar(255) DEFAULT NULL,
  `pTest` varchar(255) DEFAULT NULL,
  `qcppm` varchar(255) DEFAULT NULL,
  `qcuptime` varchar(255) DEFAULT NULL,
  `nameCompleted` varchar(255) DEFAULT NULL,
  `sCompleted` varchar(255) DEFAULT NULL,
  `nameVerified` varchar(255) DEFAULT NULL,
  `sVerified` varchar(255) DEFAULT NULL,
  `dVerified` varchar(255) DEFAULT NULL,
  `dateDV01` varchar(255) DEFAULT NULL,
  `timeDV01` varchar(255) DEFAULT NULL,
  `dateDV02` varchar(255) DEFAULT NULL,
  `timeDV02` varchar(255) DEFAULT NULL,
  `dateCompleted` varchar(255) DEFAULT NULL,
  `timeCompleted` varchar(255) DEFAULT NULL,
  `dateVerified` varchar(255) DEFAULT NULL,
  `timeVerified` varchar(255) DEFAULT NULL,
  `validaton` varchar(255) DEFAULT NULL,
  `vF1` varchar(255) DEFAULT NULL,
  `vF4` varchar(255) DEFAULT NULL,
  `vF5` varchar(255) DEFAULT NULL,
  `vF6` varchar(255) DEFAULT NULL,
  `vJustify` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sedafiatform`
--

INSERT INTO `sedafiatform` (`ID`, `requestedBy`, `jobTitle`, `Ref`, `ContactNo`, `Dept`, `AssetNo`, `AssetName`, `LocationCode`, `LocationName`, `WorkGroup`, `VariationStatus`, `WorkCategory`, `ConditionStatus`, `RequestedDetails`, `IDName`, `TargetDate`, `rSignature`, `dTime`, `aDetails`, `amStatus`, `lProvided`, `aInfo`, `lStartDateTime`, `lEndDateTime`, `lReceivedBy`, `lReturnBy`, `d1`, `u1`, `q1`, `d2`, `u2`, `q2`, `d3`, `u3`, `q3`, `eNo1`, `eN1`, `tC1`, `date1`, `sTime1`, `eTime1`, `rHour1`, `eNo2`, `eN2`, `tC2`, `date2`, `sTime2`, `eTime2`, `rHour2`, `eNo3`, `eN3`, `tC3`, `date3`, `sTime3`, `eTime3`, `rHour3`, `eNo4`, `eN4`, `tC4`, `date4`, `sTime4`, `eTime4`, `rHour4`, `dtwS`, `dtwC`, `aTaken`, `esTest`, `pTest`, `qcppm`, `qcuptime`, `nameCompleted`, `sCompleted`, `nameVerified`, `sVerified`, `dVerified`, `dateDV01`, `timeDV01`, `dateDV02`, `timeDV02`, `dateCompleted`, `timeCompleted`, `dateVerified`, `timeVerified`, `validaton`, `vF1`, `vF4`, `vF5`, `vF6`, `vJustify`) VALUES
(4, 'ABDUL MALIK', 'PT', NULL, '135', 'A02/Administration', '88605GF001', 'Inventory Asset', '05GF001', 'ADMINISTRATION - MEETING ROOM', 'eFEMS', 'Existing', 'Corrective', 'Good', 'TO CHECK EXT TELEPHONE NOT FUNCTIONING', 'MOHD FADHIL KHAMSHAH', '07/11/2016', 'MOHDFADHIL', '7/11/16 @ 12.35PM', 'Junction box broken', 'Functioning', 'Yes', '', '', '', '', '', 'Junction box', '11', '1pcs', '', '', '', '', '', '', 'TFM88603', 'MOHD FADHIL KHAMSHAH', 'FSC500', '7/11/16', '12:35', '01:05', '0.5', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '7/11/16 @ 12.35', '7/11/16 @ 01.05', 'Change junction box. Testes working normal', 'Not Applicable', 'Not Applicable', '', '', 'MOHD FADHIL KHAMSHAH', 'MOHDFADHIL', 'ABDUL MALIK BIN MD JAN', 'ABDULMALIK', 'PERDANA MENTERI', '121212', '1212', '121212', '1212', '7/11/2016', '01.05PM', '11/11/2016', '1619', 'YES', '1', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sedafiatform`
--
ALTER TABLE `sedafiatform`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sedafiatform`
--
ALTER TABLE `sedafiatform`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
