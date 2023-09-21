-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2021 at 09:34 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lucifer`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(12) NOT NULL,
  `image` varchar(506) NOT NULL,
  `username` varchar(34) NOT NULL,
  `password` varchar(23) NOT NULL,
  `fname` varchar(22) NOT NULL,
  `lname` varchar(22) NOT NULL,
  `city` varchar(22) NOT NULL,
  `state` varchar(22) NOT NULL,
  `zip` int(12) NOT NULL,
  `gender` varchar(22) NOT NULL,
  `phoneno` int(13) NOT NULL,
  `atype` varchar(19) NOT NULL,
  `rdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `image`, `username`, `password`, `fname`, `lname`, `city`, `state`, `zip`, `gender`, `phoneno`, `atype`, `rdate`) VALUES
(1, '', 'abc1', '1234', '', '', '', '', 0, '', 0, 'manager', NULL),
(2, '', 'abc2', '12345', '', '', '', '', 0, '', 0, 'clerk', NULL),
(7, 'IMG-20200404-WA0000 (2).jpg', 'shrutika', '5421', ' shrutika', 'upadhye', 'kolhapur', 'Maharashtra', 416223, 'Female', 0, 'manager', '2021-05-21'),
(8, '20201211162544 F__MG_1330 (3).jpg', 'prathmesh', '5421', ' Prathmesh', 'Parit', 'kolhapur', 'Maharashtra', 416223, 'Male', 0, 'manager', '2021-05-21'),
(10, 'WhatsApp Image 2021-05-20 at 4.57.50 PM (2).jpeg', 'riddhi', '5421', ' riddhi', 'patel', 'kolhapur', 'Maharashtra', 416223, 'Female', 0, 'clerk', '2021-05-21'),
(11, 'WhatsApp Image 2021-05-20 at 5.01.50 PM.jpeg', 'amol', '5421', ' amol', 'ajri', 'kolhapur', 'Maharashtra', 416223, 'Male', 0, 'clerk', '2021-05-21');

-- --------------------------------------------------------

--
-- Table structure for table `balancesheet`
--

CREATE TABLE `balancesheet` (
  `fname` varchar(22) NOT NULL,
  `accountno` bigint(22) NOT NULL,
  `atype` varchar(22) NOT NULL,
  `balance` bigint(22) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `current`
--

CREATE TABLE `current` (
  `fname` varchar(22) NOT NULL,
  `accountno` bigint(22) NOT NULL,
  `dob` date NOT NULL,
  `age` int(22) NOT NULL,
  `address` text NOT NULL,
  `phoneno` bigint(22) NOT NULL,
  `email` varchar(22) NOT NULL,
  `gender` varchar(22) NOT NULL,
  `nationality` varchar(22) NOT NULL,
  `scitizen` varchar(22) NOT NULL,
  `eduqualification` varchar(22) NOT NULL,
  `occupation` varchar(22) NOT NULL,
  `aincome` varchar(22) NOT NULL,
  `atype` varchar(22) NOT NULL,
  `date` date NOT NULL,
  `balance` bigint(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `current`
--

INSERT INTO `current` (`fname`, `accountno`, `dob`, `age`, `address`, `phoneno`, `email`, `gender`, `nationality`, `scitizen`, `eduqualification`, `occupation`, `aincome`, `atype`, `date`, `balance`) VALUES
('ratan ghatage', 2, '2021-06-05', 45, 'gargoti', 6789657898, 'honorprathmesh9@gmail.', 'Male', 'Indian', 'no', 'MBA', 'JOB', '233456', 'Current', '2021-06-30', 0);

-- --------------------------------------------------------

--
-- Table structure for table `deposit`
--

CREATE TABLE `deposit` (
  `Accno` bigint(50) NOT NULL,
  `Amount` bigint(50) NOT NULL,
  `Date` date NOT NULL,
  `Acctype` varchar(56) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deposit`
--

INSERT INTO `deposit` (`Accno`, `Amount`, `Date`, `Acctype`) VALUES
(1, 67000, '2021-05-17', 'current'),
(1, 33000, '2021-05-19', 'Saving'),
(1, 2000, '2021-05-21', 'Saving'),
(1, 5000, '2021-05-26', 'Saving'),
(2, 10000, '2021-05-26', 'Saving'),
(1, 34000, '2021-05-27', 'Saving'),
(1, 45000, '2021-06-18', 'Saving'),
(45, 67000, '2021-06-27', 'Saving'),
(1, 23000, '2021-06-30', 'Saving');

-- --------------------------------------------------------

--
-- Table structure for table `fixed`
--

CREATE TABLE `fixed` (
  `fname` varchar(22) NOT NULL,
  `accountno` bigint(22) NOT NULL,
  `dob` date NOT NULL,
  `age` bigint(22) NOT NULL,
  `address` text NOT NULL,
  `phoneno` bigint(22) NOT NULL,
  `email` varchar(22) NOT NULL,
  `gender` varchar(22) NOT NULL,
  `nationality` varchar(22) NOT NULL,
  `dipoamount` bigint(22) NOT NULL,
  `rate` double NOT NULL,
  `tenure` bigint(22) NOT NULL,
  `interest` bigint(22) NOT NULL,
  `finalamount` bigint(22) NOT NULL,
  `atype` varchar(22) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fixed`
--

INSERT INTO `fixed` (`fname`, `accountno`, `dob`, `age`, `address`, `phoneno`, `email`, `gender`, `nationality`, `dipoamount`, `rate`, `tenure`, `interest`, `finalamount`, `atype`, `date`) VALUES
('Prathmesh Parit', 1, '2021-06-04', 23, 'gargoti\r\nerrrrrrrr', 3456789878, 'honorprathmesh9@gmail.', 'male', ' indian', 4500, 2.9, 2, 261, 4761, 'fixed', '2021-06-30');

-- --------------------------------------------------------

--
-- Table structure for table `intransfer`
--

CREATE TABLE `intransfer` (
  `senderacno` int(10) NOT NULL,
  `senderactype` text NOT NULL,
  `reciveracno` int(10) NOT NULL,
  `reciveractype` text NOT NULL,
  `amt` double NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

CREATE TABLE `loan` (
  `fname` varchar(22) NOT NULL,
  `accountno` bigint(22) NOT NULL,
  `dob` date NOT NULL,
  `age` int(22) NOT NULL,
  `address` text NOT NULL,
  `phoneno` bigint(22) NOT NULL,
  `email` varchar(22) NOT NULL,
  `gender` varchar(22) NOT NULL,
  `nationality` varchar(22) NOT NULL,
  `scitizen` varchar(22) NOT NULL,
  `eduqualification` varchar(22) NOT NULL,
  `occupation` varchar(22) NOT NULL,
  `aincome` bigint(22) NOT NULL,
  `loantype` varchar(22) NOT NULL,
  `sanamount` bigint(22) NOT NULL,
  `tenure` int(22) NOT NULL,
  `actype` varchar(22) NOT NULL,
  `date` date NOT NULL,
  `emi` bigint(22) NOT NULL,
  `interest` bigint(20) NOT NULL,
  `rate` float NOT NULL,
  `finalamount` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(50) NOT NULL,
  `Ten` bigint(50) NOT NULL,
  `Twenty` bigint(50) NOT NULL,
  `Fifty` bigint(100) NOT NULL,
  `Hundred` bigint(56) NOT NULL,
  `Twohundred` bigint(66) NOT NULL,
  `Fivehundred` bigint(66) NOT NULL,
  `Twothousand` bigint(66) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `Ten`, `Twenty`, `Fifty`, `Hundred`, `Twohundred`, `Fivehundred`, `Twothousand`) VALUES
(1, 12, 10, 4, 5, 0, 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `otherbankinvest`
--

CREATE TABLE `otherbankinvest` (
  `bankname` text NOT NULL,
  `branchname` text NOT NULL,
  `Accountno` bigint(100) NOT NULL,
  `IFSC_code` text NOT NULL,
  `Amount` bigint(78) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `otherbankinvest`
--

INSERT INTO `otherbankinvest` (`bankname`, `branchname`, `Accountno`, `IFSC_code`, `Amount`, `Date`) VALUES
('SBI', 'gargoti', 123, 'sbi540', 3456000, '2021-05-16');

-- --------------------------------------------------------

--
-- Table structure for table `recurring`
--

CREATE TABLE `recurring` (
  `fname` varchar(22) NOT NULL,
  `accountno` bigint(22) NOT NULL,
  `dob` date NOT NULL,
  `age` int(22) NOT NULL,
  `address` text NOT NULL,
  `phoneno` bigint(22) NOT NULL,
  `email` varchar(22) NOT NULL,
  `gender` varchar(22) NOT NULL,
  `nationality` varchar(22) NOT NULL,
  `scitizen` varchar(22) NOT NULL,
  `eduqualification` varchar(22) NOT NULL,
  `occupation` varchar(22) NOT NULL,
  `aincome` bigint(22) NOT NULL,
  `depositamount` bigint(22) NOT NULL,
  `tenure` int(22) NOT NULL,
  `interest` bigint(22) NOT NULL,
  `finalamount` bigint(22) NOT NULL,
  `atype` varchar(22) NOT NULL,
  `date` date NOT NULL,
  `rate` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `saving`
--

CREATE TABLE `saving` (
  `fname` varchar(22) NOT NULL,
  `accountno` bigint(22) NOT NULL,
  `dob` date NOT NULL,
  `age` int(22) NOT NULL,
  `address` text NOT NULL,
  `phoneno` bigint(22) NOT NULL,
  `email` varchar(22) NOT NULL,
  `gender` varchar(22) NOT NULL,
  `nationality` varchar(22) NOT NULL,
  `scitizen` varchar(22) NOT NULL,
  `eduqualification` varchar(22) NOT NULL,
  `occupation` varchar(22) NOT NULL,
  `aincome` bigint(13) NOT NULL,
  `atype` varchar(22) NOT NULL,
  `date` date NOT NULL,
  `balance` bigint(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sharesacc`
--

CREATE TABLE `sharesacc` (
  `sname` varchar(50) NOT NULL,
  `saccountno` bigint(50) NOT NULL,
  `dob` date NOT NULL,
  `age` bigint(56) NOT NULL,
  `address` text NOT NULL,
  `phoneno` bigint(70) NOT NULL,
  `email` text NOT NULL,
  `gender` varchar(66) NOT NULL,
  `nationality` text NOT NULL,
  `atype` varchar(66) NOT NULL,
  `samount` bigint(66) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sharesacc`
--

INSERT INTO `sharesacc` (`sname`, `saccountno`, `dob`, `age`, `address`, `phoneno`, `email`, `gender`, `nationality`, `atype`, `samount`, `date`) VALUES
('prathmesh parit', 1, '2021-06-25', 23, 'gargoti\r\nerrrrrrrr', 78989098, 'honorprathmesh9@gmail.com', 'male', 'indian', 'shares', 45000, '2021-06-30');

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE `transfer` (
  `rname` text NOT NULL,
  `bkname` text NOT NULL,
  `brname` text NOT NULL,
  `raccno` bigint(56) NOT NULL,
  `ifscode` text NOT NULL,
  `amount` bigint(70) NOT NULL,
  `saccno` bigint(44) NOT NULL,
  `date` date NOT NULL,
  `acctype` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `withdrawl`
--

CREATE TABLE `withdrawl` (
  `Accno` bigint(50) NOT NULL,
  `Amount` bigint(50) NOT NULL,
  `Date` date NOT NULL,
  `Acctype` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `withdrawl`
--

INSERT INTO `withdrawl` (`Accno`, `Amount`, `Date`, `Acctype`) VALUES
(1, 2000, '2021-05-16', 'Saving'),
(1, 1000, '2021-05-26', 'current');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `current`
--
ALTER TABLE `current`
  ADD PRIMARY KEY (`accountno`);

--
-- Indexes for table `fixed`
--
ALTER TABLE `fixed`
  ADD PRIMARY KEY (`accountno`);

--
-- Indexes for table `loan`
--
ALTER TABLE `loan`
  ADD PRIMARY KEY (`accountno`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recurring`
--
ALTER TABLE `recurring`
  ADD PRIMARY KEY (`accountno`);

--
-- Indexes for table `saving`
--
ALTER TABLE `saving`
  ADD PRIMARY KEY (`accountno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
