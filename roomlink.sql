-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2022 at 06:05 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `roomlink`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` text NOT NULL,
  `email` text NOT NULL,
  `mobile` int(11) NOT NULL,
  `password` text NOT NULL,
  `profilePic` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `email`, `mobile`, `password`, `profilePic`) VALUES
('Paul Arthur', 'kofi@arthur.com', 202020202, '$2y$10$5eFqCIFlbuv5ATgYhODQ2ugQw3JqAUCQTKNLoydK/n2cU9KfJMDDG', '1661619257_potrait(outside).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hostelpending`
--

CREATE TABLE `hostelpending` (
  `image` text NOT NULL,
  `name` text NOT NULL,
  `location` text NOT NULL,
  `hostelType` text NOT NULL,
  `roomtype1` text NOT NULL,
  `roomtype2` text NOT NULL,
  `roomtype3` text NOT NULL,
  `roomtype4` text NOT NULL,
  `price1` text NOT NULL,
  `price2` text NOT NULL,
  `price3` text NOT NULL,
  `price4` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hostelpending`
--

INSERT INTO `hostelpending` (`image`, `name`, `location`, `hostelType`, `roomtype1`, `roomtype2`, `roomtype3`, `roomtype4`, `price1`, `price2`, `price3`, `price4`) VALUES
('1661787719_user[3].png', 'Sama Hostel', 'Takoradi', 'Mixed', '1 in a room', '', '', '', '5000', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `hostels`
--

CREATE TABLE `hostels` (
  `hostelName` text NOT NULL,
  `hostelType` text NOT NULL,
  `location` text NOT NULL,
  `rate` int(11) NOT NULL,
  `roomType1` text DEFAULT NULL,
  `roomType2` text DEFAULT NULL,
  `roomType3` text DEFAULT NULL,
  `roomType4` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hostels`
--

INSERT INTO `hostels` (`hostelName`, `hostelType`, `location`, `rate`, `roomType1`, `roomType2`, `roomType3`, `roomType4`) VALUES
('Unicorn Hostel', 'Female', 'Windy Ridge', 3000, '4 in a room', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pending`
--

CREATE TABLE `pending` (
  `name` text NOT NULL,
  `email` text NOT NULL,
  `indexNo` text NOT NULL,
  `hostelName` text NOT NULL,
  `price` text NOT NULL,
  `referenceID` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pending`
--

INSERT INTO `pending` (`name`, `email`, `indexNo`, `hostelName`, `price`, `referenceID`) VALUES
('Kofi Arthur', 'kofi@arthur.com', '0719000155', 'Windys Hostel', '1800', '120803'),
('Araba Antwua', 'antwuaaraba@highlyspiritual.com', '0719000001', 'Pink Hostel', '7200', '128784');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `name` text NOT NULL,
  `message` text NOT NULL,
  `rating` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`name`, `message`, `rating`) VALUES
('Paul Arthur', 'Idk, it sucked', '3'),
('Kevin', 'Fuck Yeah!', '5'),
('John Doe', 'Tme waster, couldn\'t get any hostel', '2'),
('Waleva!', 'Are these hostels even real????', '1'),
('Blah Blah', 'it\'s too simple it hurts', '3'),
('Araba Antwua', 'I just can\'t wait to get in the room with my new roomies', '0');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `firstName` text NOT NULL,
  `lastName` text NOT NULL,
  `indexNo` text NOT NULL,
  `email` text NOT NULL,
  `mobileNo` text NOT NULL,
  `gender` text NOT NULL,
  `hostelName` text NOT NULL,
  `hostelType` text NOT NULL,
  `approve` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`firstName`, `lastName`, `indexNo`, `email`, `mobileNo`, `gender`, `hostelName`, `hostelType`, `approve`) VALUES
('Kofi', 'Arthur', '0719000177', '0719000177@ttu.edu.gh', '0202020202', 'male', 'Kent Hostel', 'mixed hostel', 'approved'),
('Kevin', 'Aihoon', '0719000165', '0719000165@ttu.edu.gh', '0202020202', 'male', 'Kent Hostel', 'mixed hostel', 'approved'),
('Kofi', 'Arthur', '0719000155', 'kofi@arthur.com', '0202020202', 'male', 'Windys Hostel', 'mixed hostel', NULL),
('Araba', 'Antwua', '0719000001', 'antwuaaraba@highlyspiritual.com', '0200000001', 'other', 'Pink Hostel', 'female hostel', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
