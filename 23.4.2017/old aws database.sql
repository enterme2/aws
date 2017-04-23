-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2017 at 01:49 AM
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
-- Table structure for table `workrequest`
--

CREATE TABLE `workrequest` (
  `ID` int(11) NOT NULL,
  `reqDateTime` datetime(6) DEFAULT NULL,
  `wrNo` varchar(255) DEFAULT NULL,
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
  `dVerified` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `workrequest`
--

INSERT INTO `workrequest` (`ID`, `reqDateTime`, `wrNo`, `requestedBy`, `jobTitle`, `Ref`, `ContactNo`, `Dept`, `AssetNo`, `AssetName`, `LocationCode`, `LocationName`, `WorkGroup`, `VariationStatus`, `WorkCategory`, `ConditionStatus`, `RequestedDetails`, `IDName`, `TargetDate`, `rSignature`, `dTime`, `aDetails`, `amStatus`, `lProvided`, `aInfo`, `lStartDateTime`, `lEndDateTime`, `lReceivedBy`, `lReturnBy`, `d1`, `u1`, `q1`, `d2`, `u2`, `q2`, `d3`, `u3`, `q3`, `eNo1`, `eN1`, `tC1`, `date1`, `sTime1`, `eTime1`, `rHour1`, `eNo2`, `eN2`, `tC2`, `date2`, `sTime2`, `eTime2`, `rHour2`, `eNo3`, `eN3`, `tC3`, `date3`, `sTime3`, `eTime3`, `rHour3`, `eNo4`, `eN4`, `tC4`, `date4`, `sTime4`, `eTime4`, `rHour4`, `dtwS`, `dtwC`, `aTaken`, `esTest`, `pTest`, `qcppm`, `qcuptime`, `nameCompleted`, `sCompleted`, `nameVerified`, `sVerified`, `dVerified`) VALUES
(4, NULL, NULL, 'ABDUL MALIK', 'PT', NULL, '135', 'A02/Administration', '88605GF001', 'Inventory Asset', '05GF001', 'ADMINISTRATION - MEETING ROOM', 'eFEMS', 'Existing', 'Corrective', 'Good', 'TO CHECK EXT TELEPHONE NOT FUNCTIONING', 'MOHD FADHIL KHAMSHAH', '07/11/2016', 'MOHDFADHIL', '7/11/16 @ 12.35PM', 'Junction box broken', 'Functioning', 'Yes', '', '', '', '', '', 'Junction box', '11', '1pcs', '', '', '', '', '', '', 'TFM88603', 'MOHD FADHIL KHAMSHAH', 'FSC500', '7/11/16', '12:35', '01:05', '0.5', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '7/11/16 @ 12.35', '7/11/16 @ 01.05', 'Change junction box. Testes working normal', 'Not Applicable', 'Not Applicable', '', '', 'MOHD FADHIL KHAMSHAH', 'MOHDFADHIL', 'ABDUL MALIK BIN MD JAN', 'ABDULMALIK', 'PERDANA MENTERI'),
(7, '0000-00-00 00:00:00.000000', 'MWR897/17/001042', 'Sr Hasnah Ahmad', 'Sister', NULL, '227', 'A01/ Accident & Emergency', '897002367 (QAP Asset)', 'Security Door Access Control, Electronic/Digital', '11GF400', 'Ambulance Porch', 'eFEMS', 'Added', 'User Requests', 'Good', 'Access door not functioning properly', 'AHMAD FAIZAL BIN NOR', '04/04/2017', '', '28/05/2017 17:50', 'Door access magnet 0roblem', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'AHMAD FAIZAL BIN NUR', 'F50000', '28/03/17', '17:50', '19:50', '2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '28/03/17 17:50', '28/03/17 19:50', 'Check magnetic door. Fixed and Tested.', '', '', '', '', '', '', '', '', ''),
(9, '2017-04-16 12:32:00.000000', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workrequest`
--
ALTER TABLE `workrequest`
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
-- AUTO_INCREMENT for table `workrequest`
--
ALTER TABLE `workrequest`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
