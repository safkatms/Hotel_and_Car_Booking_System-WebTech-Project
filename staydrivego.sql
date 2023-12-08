-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2023 at 02:36 AM
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
(16, 'sakib123_', 'Safkat Mahmud', 'safkatmahmudsakib@gmail.com', '01629313025', 'sakib22', 1, 'BMW', 'E30', '2023-12-08', '2023-12-09', 'Dhaka', 10000, 'Confirmed'),
(17, 'sakib123_', 'Safkat Mahmud', 'safkatmahmudsakib@gmail.com', '01629313025', 'sakib22', 1, 'BMW', 'E30', '2023-12-08', '2023-12-09', 'Dhaka', 10000, 'Confirmed');

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
(2, 'sakib22', 'BMW', 'E30', '2019', 'Dhaka', 50000, 'Available ');

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
(26, 'sakib123_', 'Safkat Mahmud', 'safkatmahmudsakib@gmail.com', '01629313025', 'Hotel Akash', 1, 'Dhaka', 'Suite', 1, '2023-12-08', '2023-12-09', 1, 5000, 'Confirmed'),
(27, 'sakib123_', 'Safkat Mahmud', 'safkatmahmudsakib@gmail.com', '01629313025', 'Hotel Akash', 1, 'Dhaka', 'Suite', 1, '2023-12-08', '2023-12-09', 1, 5000, 'Confirmed'),
(28, 'sakib123_', 'Safkat Mahmud', 'safkatmahmudsakib@gmail.com', '01629313025', 'Hotel Akash', 1, 'Dhaka', 'Suite', 1, '2023-12-08', '2023-12-09', 1, 5000, 'Cancelled');

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
(1, 'sakib22', 'Hotel Akash', 'Dhaka', 'Dhaka', '2 Star'),
(2, 'sakib44', 'Hotel ', 'basundhara', 'Dhaka', '5');

-- --------------------------------------------------------

--
-- Table structure for table `ownersinfo`
--

CREATE TABLE `ownersinfo` (
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `service` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ownersinfo`
--

INSERT INTO `ownersinfo` (`firstname`, `lastname`, `username`, `email`, `mobile`, `dob`, `gender`, `password`, `service`) VALUES
('Safkat', 'Mahmud', 's1akib', 'safkatms@gmail.com', '01630312213', '2023-11-06', 'Male', 'Sakib@1', 'hotel'),
('Safkat', 'Mahmud', 'safkat', 'safkat@gmail.com', '01630312213', '2023-11-01', 'Male', 'Sakib@1', 'hotel'),
('Safkat', 'Mahmud', 'sakib22', 'safkatmahmudsakib2000@gmail.com', '01630312213', '2023-10-31', 'Male', 'Sakib@1', 'hotel'),
('Safkat', 'Mahmud', 'sakib23', 'safkatmahmudsakib@gmail.com', '01630312213', '2023-10-31', 'Male', 'Sakib@1', 'hotel'),
('Safkat', 'Mahmud', 'sakib44', 'mahmudsakib@gmail.com', '01630312213', '2023-11-07', 'Male', 'Sakib@1', 'hotel');

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
(1, 1, 'Suite', 5000, 5, 2),
(2, 2, 'Suite', 1000, 5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `signin_info`
--

CREATE TABLE `signin_info` (
  `user_number` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_type` varchar(10) NOT NULL,
  `banstatus` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signin_info`
--

INSERT INTO `signin_info` (`user_number`, `username`, `password`, `user_type`, `banstatus`) VALUES
(13, 'sakib123_', 'Sakib@1', 'user', 0),
(14, 'sakib123', 'Sakib@1', 'user', 0);

-- --------------------------------------------------------

--
-- Table structure for table `usersinfo`
--

CREATE TABLE `usersinfo` (
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usersinfo`
--

INSERT INTO `usersinfo` (`firstname`, `lastname`, `username`, `email`, `mobile`, `dob`, `gender`, `password`) VALUES
('Sakib', 'Safkat', 'sakib123', 'netflix2023scam@gmail.com', '01629313026', '2023-12-06', 'Male', 'Sakib@1'),
('Safkat', 'Mahmud', 'sakib123_', 'safkatmahmudsakib@gmail.com', '01629313025', '2001-12-31', 'Male', 'Sakib@1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carbooking`
--
ALTER TABLE `carbooking`
  ADD PRIMARY KEY (`BookingID`),
  ADD KEY `fk6` (`CarID`),
  ADD KEY `fk7` (`Username`),
  ADD KEY `fk8` (`OwnerUsername`);

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
  ADD KEY `fk2` (`Username`),
  ADD KEY `fk3` (`HotelID`),
  ADD KEY `fk4` (`RoomTypeID`);

--
-- Indexes for table `hotel_info`
--
ALTER TABLE `hotel_info`
  ADD PRIMARY KEY (`HotelID`),
  ADD KEY `fk` (`OwnerUsername`);

--
-- Indexes for table `ownersinfo`
--
ALTER TABLE `ownersinfo`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `UNIQUE` (`email`);

--
-- Indexes for table `roomtype`
--
ALTER TABLE `roomtype`
  ADD PRIMARY KEY (`RoomTypeID`),
  ADD KEY `fk1` (`HotelID`);

--
-- Indexes for table `signin_info`
--
ALTER TABLE `signin_info`
  ADD PRIMARY KEY (`user_number`),
  ADD UNIQUE KEY `unique` (`username`);

--
-- Indexes for table `usersinfo`
--
ALTER TABLE `usersinfo`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carbooking`
--
ALTER TABLE `carbooking`
  MODIFY `BookingID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `car_info`
--
ALTER TABLE `car_info`
  MODIFY `CarID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hotelbooking`
--
ALTER TABLE `hotelbooking`
  MODIFY `BookingID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `hotel_info`
--
ALTER TABLE `hotel_info`
  MODIFY `HotelID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roomtype`
--
ALTER TABLE `roomtype`
  MODIFY `RoomTypeID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `signin_info`
--
ALTER TABLE `signin_info`
  MODIFY `user_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carbooking`
--
ALTER TABLE `carbooking`
  ADD CONSTRAINT `fk7` FOREIGN KEY (`Username`) REFERENCES `usersinfo` (`username`),
  ADD CONSTRAINT `fk8` FOREIGN KEY (`OwnerUsername`) REFERENCES `ownersinfo` (`username`);

--
-- Constraints for table `car_info`
--
ALTER TABLE `car_info`
  ADD CONSTRAINT `fk5` FOREIGN KEY (`OwnerUsername`) REFERENCES `ownersinfo` (`username`);

--
-- Constraints for table `hotelbooking`
--
ALTER TABLE `hotelbooking`
  ADD CONSTRAINT `fk2` FOREIGN KEY (`Username`) REFERENCES `usersinfo` (`username`),
  ADD CONSTRAINT `fk3` FOREIGN KEY (`HotelID`) REFERENCES `hotel_info` (`HotelID`),
  ADD CONSTRAINT `fk4` FOREIGN KEY (`RoomTypeID`) REFERENCES `roomtype` (`RoomTypeID`);

--
-- Constraints for table `hotel_info`
--
ALTER TABLE `hotel_info`
  ADD CONSTRAINT `fk` FOREIGN KEY (`OwnerUsername`) REFERENCES `ownersinfo` (`username`);

--
-- Constraints for table `roomtype`
--
ALTER TABLE `roomtype`
  ADD CONSTRAINT `fk1` FOREIGN KEY (`HotelID`) REFERENCES `hotel_info` (`HotelID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
