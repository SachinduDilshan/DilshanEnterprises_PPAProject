-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2024 at 08:19 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppa`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `empid` int(20) NOT NULL,
  `ename` varchar(150) NOT NULL,
  `age` int(10) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `salary` int(20) NOT NULL,
  `division` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`empid`, `ename`, `age`, `gender`, `address`, `salary`, `division`) VALUES
(3, 'Mechelle Conrad', 55, 'Non atque non corrup', 'Similique et dolores', 72, 'Voluptate dolor exer'),
(5, 'Zeph Howard', 19, 'Est numquam fuga V', 'Eaque libero ut veni', 80, 'Saepe architecto aut'),
(7, 'Belle Thompson', 76, 'Magna facere volupta', 'Reprehenderit nesciu', 75, 'Placeat accusantium'),
(11, 'Ruby Faulkner', 63, 'Vel consequat Odio ', 'Provident rem dolor', 78, 'Sed eu ipsa sequi m'),
(12, 'Jordan Hewitt', 59, 'Et vitae saepe harum', 'Velit rerum qui inci', 49, 'Facere ipsum sed ne'),
(13, 'Ahmed Schultz', 17, 'Eu maiores adipisci ', 'Labore quod fugiat m', 77, 'Corrupti laborum U');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedbackid` int(20) NOT NULL,
  `First Name` varchar(100) NOT NULL,
  `Last Name` varchar(100) NOT NULL,
  `Shop Name` varchar(100) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Reason` varchar(100) NOT NULL,
  `Phone Number` int(10) NOT NULL,
  `Address` varchar(250) NOT NULL,
  `Message` text NOT NULL,
  `Time` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedbackid`, `First Name`, `Last Name`, `Shop Name`, `Email`, `Reason`, `Phone Number`, `Address`, `Message`, `Time`) VALUES
(52, 'Whilemina', 'Kemp', 'Carson Gilmore', 'rulocomup@mailinator.com', 'Other', 298, 'Qui consectetur accu', 'Perspiciatis qui qu', '2024-05-04 20:04:35pm'),
(53, 'Demetrius', 'Ferguson', 'Sybil Stevenson', 'wihi@mailinator.com', 'General Inquiry', 902, 'Amet eu aute perfer', 'Odio rem dolorem ver', '2024-05-04 20:06:46pm'),
(54, 'Blaze', 'Bradshaw', 'Octavia Melton', 'goro@mailinator.com', 'Customer Support', 924, 'Nulla deserunt place', 'Ut ea maiores qui nu', '2024-05-05 19:52:40pm');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `imageid` int(200) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(10) NOT NULL,
  `firstname` varchar(120) NOT NULL,
  `lastname` varchar(120) NOT NULL,
  `shopname` varchar(300) NOT NULL,
  `phone` int(10) NOT NULL,
  `address` varchar(350) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(10) NOT NULL,
  `conpass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `firstname`, `lastname`, `shopname`, `phone`, `address`, `email`, `password`, `conpass`) VALUES
(26, 'Janani', 'Sumanrathne', '', 776261811, 'Rambukkana', 'jan@gmail.com', '123', '123'),
(27, 'Nipuni', 'Nivarthana', 'Nipuni Tyre House', 778880817, 'Uyandana', 'sachindudilshan7@gmail.com', '12345', '12345'),
(28, 'Sachindu', 'Dilshan', 'Dilshana Tyre Center', 372225644, 'Uyandana, Kurunegala.', 'sachindudilshan7@gmail.com', '12345', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`empid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedbackid`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`imageid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `empid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedbackid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `imageid` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
