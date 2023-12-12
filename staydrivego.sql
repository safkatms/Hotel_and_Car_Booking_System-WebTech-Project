-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2023 at 08:12 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `staydrivego`
--

-- --------------------------------------------------------

--
-- Table structure for table `carbooking`
--

CREATE TABLE `carbooking` (
  `BookingID` int(20) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Fullname` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mobile` varchar(11) NOT NULL,
  `OwnerUsername` varchar(20) NOT NULL,
  `CarID` int(20) NOT NULL,
  `Brand` varchar(50) NOT NULL,
  `Model` varchar(50) NOT NULL,
  `StartDate` date NOT NULL,
  `EndDate` date NOT NULL,
  `Location` varchar(20) NOT NULL,
  `TotalPrice` int(10) NOT NULL,
  `Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carbooking`
--

INSERT INTO `carbooking` (`BookingID`, `Username`, `Fullname`, `Email`, `Mobile`, `OwnerUsername`, `CarID`, `Brand`, `Model`, `StartDate`, `EndDate`, `Location`, `TotalPrice`, `Status`) VALUES
(19, 'sakib123_', 'Safkat Mahmud', 'safkatmahmud@gmail.com', '01630312213', 'sakib22', 1, 'BMW', 'E30', '2023-12-11', '2023-12-14', 'Dhaka', 30000, 'Cancelled');

-- --------------------------------------------------------

--
-- Table structure for table `car_info`
--

CREATE TABLE `car_info` (
  `CarID` int(20) NOT NULL,
  `OwnerUsername` varchar(50) NOT NULL,
  `Barnd` varchar(20) NOT NULL,
  `Model` varchar(10) NOT NULL,
  `Year` varchar(10) NOT NULL,
  `Location` varchar(20) NOT NULL,
  `DailyRate` int(10) NOT NULL,
  `AvailabilityStatus` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `car_info`
--

INSERT INTO `car_info` (`CarID`, `OwnerUsername`, `Barnd`, `Model`, `Year`, `Location`, `DailyRate`, `AvailabilityStatus`) VALUES
(1, 'sakib22', 'BMW', 'E30', '2019', 'Dhaka', 10000, 'Available '),
(2, 'sakib22', 'BMW', 'E30', '2019', 'Sylhet', 50000, 'Available ');

-- --------------------------------------------------------

--
-- Table structure for table `hotelbooking`
--

CREATE TABLE `hotelbooking` (
  `BookingID` int(20) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Fullname` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mobile` varchar(11) NOT NULL,
  `HotelName` varchar(50) NOT NULL,
  `HotelID` int(20) NOT NULL,
  `HotelAddress` varchar(50) NOT NULL,
  `RoomTypeName` varchar(20) NOT NULL,
  `RoomTypeID` int(20) NOT NULL,
  `CheckInDate` date NOT NULL,
  `CheckOutDate` date NOT NULL,
  `NumberOfRooms` int(10) NOT NULL,
  `TotalPrice` int(30) NOT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotelbooking`
--

INSERT INTO `hotelbooking` (`BookingID`, `Username`, `Fullname`, `Email`, `Mobile`, `HotelName`, `HotelID`, `HotelAddress`, `RoomTypeName`, `RoomTypeID`, `CheckInDate`, `CheckOutDate`, `NumberOfRooms`, `TotalPrice`, `Status`) VALUES
(35, 'sakib123_', 'Safkat Mahmud', 'safkatmahmud@gmail.com', '01630312213', 'Continental', 1, 'Uttara,Dhaka,Bangladesh', 'suite', 28, '2023-12-10', '2023-12-15', 2, 100000, 'Confirmed');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_info`
--

CREATE TABLE `hotel_info` (
  `HotelID` int(20) NOT NULL,
  `OwnerUsername` varchar(50) NOT NULL,
  `HotelName` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Rating` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotel_info`
--

INSERT INTO `hotel_info` (`HotelID`, `OwnerUsername`, `HotelName`, `Address`, `City`, `Rating`) VALUES
(1, 'sakib22', 'Continental', 'Uttara,Dhaka,Bangladesh', 'Dhaka', '3');

-- --------------------------------------------------------

--
-- Table structure for table `registeruser`
--

CREATE TABLE `registeruser` (
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(10) NOT NULL DEFAULT 'User',
  `banstatus` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registeruser`
--

INSERT INTO `registeruser` (`firstname`, `lastname`, `username`, `email`, `mobile`, `dob`, `gender`, `password`, `usertype`, `banstatus`) VALUES
('Admin', 'Admin', 'admin', 'admin@gmail.com', '01630312213', '2023-11-07', 'Male', 'Sakib@1', 'Admin', 0),
('Asif', 'Ahmad', 'sakib', 'asif@gmail.com', '01630312213', '2023-11-07', 'Male', 'Sakib@1', 'Car', 0),
('Safkat', 'Mahmud', 'sakib123_', 'safkatmahmud@gmail.com', '01630312213', '2023-12-10', 'Male', 'Sakib@1', 'User', 0),
('AL', 'Owasi', 'sakib22', 'owasi@gmail.com', '01790427288', '2023-10-31', 'Male', 'Sakib@1', 'Hotel', 0);

-- --------------------------------------------------------

--
-- Table structure for table `roomtype`
--

CREATE TABLE `roomtype` (
  `RoomTypeID` int(20) NOT NULL,
  `HotelID` int(20) NOT NULL,
  `TypeName` varchar(20) NOT NULL,
  `PricePerNight` int(20) NOT NULL,
  `TotalRooms` int(20) NOT NULL,
  `AvailableRooms` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roomtype`
--

INSERT INTO `roomtype` (`RoomTypeID`, `HotelID`, `TypeName`, `PricePerNight`, `TotalRooms`, `AvailableRooms`) VALUES
(26, 1, 'standard', 1000, 5, 5),
(27, 1, 'deluxe', 2000, 5, 5),
(28, 1, 'suite', 10000, 2, 0),
(29, 1, 'single', 800, 10, 10),
(30, 1, 'double', 2000, 10, 10),
(31, 1, 'twin', 8000, 2, 1),
(32, 1, 'triple', 12000, 2, 1),
(33, 1, 'double', 1000, 8, 8),
(34, 1, 'suite', 1000000, 2, 1),
(35, 1, 'deluxe', 2000, 12, 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carbooking`
--
ALTER TABLE `carbooking`
  ADD PRIMARY KEY (`BookingID`),
  ADD KEY `fk6` (`CarID`),
  ADD KEY `fk8` (`OwnerUsername`),
  ADD KEY `fk7` (`Username`);

--
-- Indexes for table `car_info`
--
ALTER TABLE `car_info`
  ADD PRIMARY KEY (`CarID`),
  ADD KEY `fk5` (`OwnerUsername`);

--
-- Indexes for table `hotelbooking`
--
ALTER TABLE `hotelbooking`
  ADD PRIMARY KEY (`BookingID`),
  ADD KEY `fk3` (`HotelID`),
  ADD KEY `fk4` (`RoomTypeID`),
  ADD KEY `fk2` (`Username`);

--
-- Indexes for table `hotel_info`
--
ALTER TABLE `hotel_info`
  ADD PRIMARY KEY (`HotelID`),
  ADD KEY `fk` (`OwnerUsername`);

--
-- Indexes for table `registeruser`
--
ALTER TABLE `registeruser`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `UNIQUE` (`email`);

--
-- Indexes for table `roomtype`
--
ALTER TABLE `roomtype`
  ADD PRIMARY KEY (`RoomTypeID`),
  ADD KEY `fk1` (`HotelID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carbooking`
--
ALTER TABLE `carbooking`
  MODIFY `BookingID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `car_info`
--
ALTER TABLE `car_info`
  MODIFY `CarID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hotelbooking`
--
ALTER TABLE `hotelbooking`
  MODIFY `BookingID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `hotel_info`
--
ALTER TABLE `hotel_info`
  MODIFY `HotelID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roomtype`
--
ALTER TABLE `roomtype`
  MODIFY `RoomTypeID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carbooking`
--
ALTER TABLE `carbooking`
  ADD CONSTRAINT `fk7` FOREIGN KEY (`Username`) REFERENCES `registeruser` (`username`),
  ADD CONSTRAINT `fk8` FOREIGN KEY (`OwnerUsername`) REFERENCES `registeruser` (`username`);

--
-- Constraints for table `car_info`
--
ALTER TABLE `car_info`
  ADD CONSTRAINT `fk5` FOREIGN KEY (`OwnerUsername`) REFERENCES `registeruser` (`username`);

--
-- Constraints for table `hotelbooking`
--
ALTER TABLE `hotelbooking`
  ADD CONSTRAINT `fk2` FOREIGN KEY (`Username`) REFERENCES `registeruser` (`username`),
  ADD CONSTRAINT `fk3` FOREIGN KEY (`HotelID`) REFERENCES `hotel_info` (`HotelID`),
  ADD CONSTRAINT `fk4` FOREIGN KEY (`RoomTypeID`) REFERENCES `roomtype` (`RoomTypeID`);

--
-- Constraints for table `hotel_info`
--
ALTER TABLE `hotel_info`
  ADD CONSTRAINT `fk` FOREIGN KEY (`OwnerUsername`) REFERENCES `registeruser` (`username`);

--
-- Constraints for table `roomtype`
--
ALTER TABLE `roomtype`
  ADD CONSTRAINT `fk1` FOREIGN KEY (`HotelID`) REFERENCES `hotel_info` (`HotelID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
