-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2023 at 06:54 AM
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
-- Table structure for table `hotelbooking`
--

CREATE TABLE `hotelbooking` (
  `BookingID` int(20) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `HotelID` int(20) NOT NULL,
  `RoomTypeID` int(20) NOT NULL,
  `CheckInDate` date NOT NULL,
  `CheckOutDate` date NOT NULL,
  `NumberOfRooms` int(10) NOT NULL,
  `TotalPrice` int(30) NOT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(1, 1, 'Suite', 1000, 5, 2),
(2, 2, 'Suite', 1000, 5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `signin_info`
--

CREATE TABLE `signin_info` (
  `user_number` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signin_info`
--

INSERT INTO `signin_info` (`user_number`, `username`, `password`, `user_type`) VALUES
(1, 'wasi123_', 'Sakib1!', 'user'),
(2, 'sakib125', 'Sakib1!', 'user'),
(3, 'sakib1254', 'Sakib1!', 'car'),
(4, 'wasi12_', 'Sakib1!', 'user'),
(5, 'sakib123_', 'Sakib@1', 'user'),
(6, 'owasi1_', 'Sakib@1', 'user'),
(7, 'sakib1', 'Sakib@1', 'user'),
(8, 'sakib22', 'Sakib@1', 'hotel'),
(9, 'sakib23', 'Sakib@1', 'hotel'),
(10, 'safkat', 'Sakib@1', 'hotel'),
(11, 'sakib44', 'Sakib@1', 'hotel'),
(12, 's1akib', 'Sakib@1', 'hotel');

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
('Owasi', 'Soumik', 'owasi1_', 'mohammadowasi70@gmail.com', '01790427288', '2023-10-01', 'Male', 'Sakib1!'),
('Safkat', 'Mahmud', 'sakib1', 'safkatmahmud@gmail.com', '01630312213', '2023-10-31', 'Male', 'Sakib1!'),
('Safkat', 'Mahmud', 'sakib123_', 'safkatmahmudsakib@gmail.com', '01629313026', '2001-12-31', 'Male', 'Sakib@1');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `hotelbooking`
--
ALTER TABLE `hotelbooking`
  MODIFY `BookingID` int(20) NOT NULL AUTO_INCREMENT;

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
  MODIFY `user_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

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
