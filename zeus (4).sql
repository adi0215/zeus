-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2023 at 08:31 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zeus`
--

-- --------------------------------------------------------

--
-- Table structure for table `cartype`
--

CREATE TABLE `cartype` (
  `id` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `icon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cartype`
--

INSERT INTO `cartype` (`id`, `name`, `icon`) VALUES
('c1', 'sedan', 'sedan.png'),
('c2', 'suv', 'suv.png'),
('c3', 'luxury', 'luxury.png');

-- --------------------------------------------------------

--
-- Table structure for table `car_details`
--

CREATE TABLE `car_details` (
  `RegNo` varchar(10) NOT NULL,
  `Brand` varchar(20) NOT NULL,
  `Car_Type` varchar(10) DEFAULT NULL,
  `KM_Driven` int(11) NOT NULL,
  `Fuel` varchar(10) DEFAULT NULL,
  `Transmission` varchar(10) NOT NULL,
  `Capacity` int(11) DEFAULT NULL,
  `Car_Image` varchar(100) DEFAULT NULL,
  `Price` int(11) NOT NULL,
  `Car_Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `car_details`
--

INSERT INTO `car_details` (`RegNo`, `Brand`, `Car_Type`, `KM_Driven`, `Fuel`, `Transmission`, `Capacity`, `Car_Image`, `Price`, `Car_Name`) VALUES
('DL02SW0129', 'Tata', 'Sedan', 49000, 'Diesel', 'Manual', 5, 'zest.png', 3861, 'Zest'),
('GJ01QF2831', 'Maruti', 'Sedan', 35000, 'Diesel', 'Automatic', 5, 'baleno.png', 3461, 'Baleno'),
('HR26DQ0001', 'Toyota', 'Suv', 38098, 'Petrol', 'Manual', 7, 'triber.png', 3771, 'Triber'),
('HR26DQ0002', 'Tata', 'Sedan', 38000, 'Diesel', 'Manual', 5, 'dastun.png', 2961, 'Dastun'),
('KA01RT0145', 'Mahindra', 'Suv', 28098, 'Petrol', 'Manual', 7, 'tuv.png', 2971, 'Tuv'),
('KL09ER3456', 'Tata', 'Sedan', 18000, 'Petrol', 'Automatic', 5, 'tiago.png', 2761, 'Tiago'),
('PB12FD3215', 'Toyota', 'Suv', 34098, 'Diesel', 'Manual', 7, 'innova.png', 1871, 'Innova');

-- --------------------------------------------------------

--
-- Table structure for table `fueltype`
--

CREATE TABLE `fueltype` (
  `id` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `icon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fueltype`
--

INSERT INTO `fueltype` (`id`, `name`, `icon`) VALUES
('f1', 'petrol', 'petrol.png'),
('f2', 'diesel', 'petrol.png'),
('f3', 'electric', 'electric.png'),
('f4', 'cng', 'cng.png');

-- --------------------------------------------------------

--
-- Table structure for table `host`
--

CREATE TABLE `host` (
  `HostID` varchar(10) NOT NULL,
  `Fname` varchar(20) NOT NULL,
  `Lname` varchar(20) NOT NULL,
  `City` varchar(20) DEFAULT NULL,
  `Pincode` varchar(6) NOT NULL,
  `HRegNo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `host`
--

INSERT INTO `host` (`HostID`, `Fname`, `Lname`, `City`, `Pincode`, `HRegNo`) VALUES
('AB1212', 'Aditya', 'Raj', 'Bangalore', '784594', 'HR26DQ0002'),
('AB1234', 'Aditya', 'Kashyap', 'Bangalore', '547894', 'HR26DQ0001'),
('AP1298', 'Akshat', 'Singh', 'Amritsar', '800594', 'PB12FD3215'),
('AX3436', 'Ayush', 'Vidyarthi', 'Kochi', '214894', 'KL09ER3456'),
('BN1892', 'Aniket', 'Rai', 'New Delhi', '444594', 'DL02SW0129'),
('DF1274', 'Aniket', 'Kashyap', 'Bangalore', '784594', 'KA01RT0145'),
('XZ4789', 'Azhar', 'Usmani', 'Ahmedabad', '667894', 'GJ01QF2831');

-- --------------------------------------------------------

--
-- Table structure for table `renter`
--

CREATE TABLE `renter` (
  `RenterID` varchar(10) NOT NULL,
  `Fname` varchar(20) NOT NULL,
  `Lname` varchar(20) NOT NULL,
  `City` varchar(20) DEFAULT NULL,
  `Pincode` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `renter`
--

INSERT INTO `renter` (`RenterID`, `Fname`, `Lname`, `City`, `Pincode`) VALUES
('CD1234', 'Suraj', 'Upadhyay', 'Mumbai', '547894'),
('CD1239', 'A', 'Yashydev', 'Bangalore', '784594'),
('CZ9239', 'Sashwat', 'Rane', 'Ahmedabad', '667894'),
('FG9874', 'Akash', 'Joshi', 'Kochi', '214894'),
('NM2147', 'Pushpak', 'Gill', 'Bangalore', '784594'),
('PL2147', 'Aniket', 'Aman', 'Amritsar', '800594'),
('PO2568', 'Ajay', 'Kundgir', 'New Delhi', '444594');

-- --------------------------------------------------------

--
-- Table structure for table `seats`
--

CREATE TABLE `seats` (
  `id` varchar(11) NOT NULL,
  `name` int(11) NOT NULL,
  `icon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seats`
--

INSERT INTO `seats` (`id`, `name`, `icon`) VALUES
('s1', 5, 'seats.png'),
('s2', 7, 'seats.png');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `UserID` int(11) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `userType` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`UserID`, `firstName`, `lastName`, `Email`, `Password`, `userType`) VALUES
(4, 'adv', 'b', 'advikabhat3@gmail.com', '1234', 'RENTER'),
(5, 'adv', 'k', 'hannah13200@gmail.com', '1234', 'RENTER'),
(6, 'shashwat', 'Rane', 'shashwatrane1920@gmail.com', '1234', 'RENTER'),
(27, 'Aditya', 'Kashyap', 'aditya.kashyap0215@gmail.com', '1234', 'RENTER');

-- --------------------------------------------------------

--
-- Table structure for table `transmission`
--

CREATE TABLE `transmission` (
  `id` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `icon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transmission`
--

INSERT INTO `transmission` (`id`, `name`, `icon`) VALUES
('t1', 'manual', 'manual.png'),
('t2', 'automatic', 'automatic.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cartype`
--
ALTER TABLE `cartype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_details`
--
ALTER TABLE `car_details`
  ADD PRIMARY KEY (`RegNo`);

--
-- Indexes for table `fueltype`
--
ALTER TABLE `fueltype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `host`
--
ALTER TABLE `host`
  ADD PRIMARY KEY (`HostID`),
  ADD KEY `HRegNo` (`HRegNo`);

--
-- Indexes for table `renter`
--
ALTER TABLE `renter`
  ADD PRIMARY KEY (`RenterID`);

--
-- Indexes for table `seats`
--
ALTER TABLE `seats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `transmission`
--
ALTER TABLE `transmission`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `host`
--
ALTER TABLE `host`
  ADD CONSTRAINT `host_ibfk_1` FOREIGN KEY (`HRegNo`) REFERENCES `car_details` (`RegNo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
