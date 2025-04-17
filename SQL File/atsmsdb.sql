-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2022 at 08:02 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atsmsdb`
--

-- --------------------------------------------------------
-- Table structure for table `contact_messages`
-- (Dùng để lưu thông tin liên hệ từ form contact.php)

CREATE TABLE `contact_messages` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `subject` VARCHAR(150),
  `message` TEXT NOT NULL,
  `created_at` DATETIME DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(5) NOT NULL,
  `AdminName` varchar(45) DEFAULT NULL,
  `UserName` char(45) DEFAULT NULL,
  `MobileNumber` bigint(11) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(1, 'Admin', 'admin', 1234567890, 'admin@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2022-08-16 06:26:14');

-- --------------------------------------------------------

--
-- Table structure for table `tblstandentry`
--

CREATE TABLE `tblstandentry` (
  `ID` int(5) NOT NULL,
  `ParkingNumber` varchar(250) DEFAULT NULL,
  `VehicleType` varchar(50) DEFAULT NULL,
  `DriverName` varchar(250) DEFAULT NULL,
  `Drivermobilenumber` bigint(10) DEFAULT NULL,
  `Driverlicensenumber` varchar(250) DEFAULT NULL,
  `Vehicleregistrationnumber` varchar(250) DEFAULT NULL,
  `EntryDate` timestamp NULL DEFAULT current_timestamp(),
  `OutDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `Price` decimal(10,0) DEFAULT NULL,
  `Remark` varchar(250) DEFAULT NULL,
  `Status` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstandentry`
--

INSERT INTO `tblstandentry` (`ID`, `ParkingNumber`, `VehicleType`, `DriverName`, `Drivermobilenumber`, `Driverlicensenumber`, `Vehicleregistrationnumber`, `EntryDate`, `OutDate`, `Price`, `Remark`, `Status`) VALUES
(1, '518325179', 'Auto', 'John', 9787987987, 'KL-9089', 'UP-9080', '2022-08-16 05:51:11', '2022-08-16 12:27:28', '30', 'Auto is out', 'Out'),
(2, '518325174', 'Taxi', 'Kishore Singh', 9879878798, 'JKI-89008', 'JK-6789', '2022-08-15 05:52:34', '2022-08-16 12:31:44', '30', 'Taxi Out', 'Out'),
(4, '118325179', 'Taxi', 'Kunal Singh', 6464646465, 'YPP-7896556', 'MP-7896', '2022-08-13 05:53:39', '2022-08-16 12:09:00', NULL, NULL, NULL),
(5, '618325172', 'Taxi', 'Lovely Singh', 9464646465, 'TPI-1196511', 'MP-1238', '2022-08-16 05:53:39', '2022-08-16 12:08:54', NULL, NULL, NULL),
(7, '418325173', 'Taxi', 'Manish Singh', 5464646465, 'BPI-7896512', 'MP-1236', '2022-08-16 05:53:39', '2022-08-16 12:08:37', NULL, NULL, NULL),
(8, '418325172', 'Taxi', 'Rahul Singh', 8464646465, 'API-7896511', 'MP-1235', '2022-08-16 05:53:39', '2022-08-16 12:08:30', NULL, NULL, NULL),
(9, '518325171', 'Auto', 'Sourabh Singh', 7464646465, 'VPI-7896556', 'MP-1234', '2022-08-16 05:53:39', '2022-08-16 12:49:59', '100', 'Out', 'Out'),
(11, '518325179', 'Taxi', 'Rakul Singh', 9787987897, 'LO_8899', 'HP-56789', '2022-08-16 12:08:04', NULL, NULL, NULL, NULL),
(12, '446971811', 'Auto', 'Rahul kumar', 1234567890, 'UP173175315GH', 'UP14AR1234', '2022-08-17 16:29:40', '2022-08-17 16:30:05', '100', 'Out', 'Out'),
(13, '338992277', 'Taxi', 'Anuj Kumar', 142536251, 'DL267271IH', 'DL8CAp1234', '2022-08-17 17:18:19', '2022-08-17 17:18:37', '80', 'Out', 'Out'),
(14, '998877665', 'Taxi', 'Amit Sharma', 9876543210, 'DL-1234567', 'DL10AB1234', '2022-08-18 08:12:45', '2022-08-18 12:30:00', '80', 'Taxi Out', 'Out'),
(15, '223344556', 'Auto', 'Suresh Kumar', 9123456789, 'RJ-223344', 'RJ14CD5678', '2022-08-18 09:05:10', '2022-08-18 11:45:32', '60', 'Auto left', 'Out'),
(16, '334455667', 'Taxi', 'Vinod Mehra', 9988776655, 'MH-778899', 'MH12EF9012', '2022-08-18 06:45:00', NULL, NULL, NULL, NULL),
(17, '445566778', 'Auto', 'Ravi Verma', 9090909090, 'BR-445566', 'BR01GH3456', '2022-08-18 10:00:00', NULL, NULL, NULL, NULL),
(18, '556677889', 'Taxi', 'Deepak Joshi', 9877898765, 'CG-334455', 'CG04IJ7890', '2022-08-17 20:15:00', '2022-08-18 02:30:00', '100', 'Night shift', 'Out'),
(19, '667788990', 'Auto', 'Manoj Singh', 8888888888, 'UP-556677', 'UP32KL1234', '2022-08-18 07:30:00', '2022-08-18 10:00:00', '50', 'Auto Out', 'Out'),
(20, '778899001', 'Taxi', 'Rakesh Yadav', 9876540987, 'PB-112233', 'PB65MN4567', '2022-08-18 11:20:00', NULL, NULL, NULL, NULL),
(21, '889900112', 'Auto', 'Gaurav Rana', 8765432109, 'HR-334455', 'HR26OP6789', '2022-08-18 12:00:00', '2022-08-18 14:45:00', '70', 'Auto left', 'Out'),
(22, '990011223', 'Taxi', 'Nikhil Jain', 9098765432, 'TN-556677', 'TN09QR7890', '2022-08-18 13:00:00', NULL, NULL, NULL, NULL),
(23, '111222333', 'Auto', 'Harsh Patel', 7001234567, 'GJ-998877', 'GJ05ST1234', '2022-08-18 07:45:00', '2022-08-18 09:15:00', '40', 'Quick visit', 'Out');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblstandentry`
--
ALTER TABLE `tblstandentry`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblstandentry`
--
ALTER TABLE `tblstandentry`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
