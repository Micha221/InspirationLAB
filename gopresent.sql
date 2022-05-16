-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 16, 2022 at 12:11 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gopresent`
--

-- --------------------------------------------------------

--
-- Table structure for table `calendar`
--

CREATE TABLE `calendar` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL,
  `fromUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `calendar`
--

INSERT INTO `calendar` (`id`, `title`, `start`, `end`, `fromUser`) VALUES
(8, 'fissa', '2022-05-19 00:00:00', '2022-05-20 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `gift_for`
--

CREATE TABLE `gift_for` (
  `gift_id` int(11) NOT NULL,
  `fname` varchar(25) DEFAULT NULL,
  `interests` varchar(25) DEFAULT NULL,
  `hobbies` varchar(25) DEFAULT NULL,
  `event_date` varchar(25) DEFAULT NULL,
  `event_name` varchar(25) DEFAULT NULL,
  `sex` varchar(10) DEFAULT NULL,
  `User_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gift_for`
--

INSERT INTO `gift_for` (`gift_id`, `fname`, `interests`, `hobbies`, `event_date`, `event_name`, `sex`, `User_ID`) VALUES
(1, 'nenad', 'dieren', 'Mindfulness', '2022-05-11', 'gamen', 'Male', NULL),
(2, 'DeGabbie', 'dieren', 'Badminton', '2022-05-11', 'poijhluigbjmlnk', 'Male', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(25) DEFAULT NULL,
  `product_price` float DEFAULT NULL,
  `gift_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User_ID` int(11) NOT NULL,
  `firstname` varchar(25) DEFAULT NULL,
  `lastname` varchar(25) DEFAULT NULL,
  `birthdate` date NOT NULL,
  `gender` varchar(25) DEFAULT NULL,
  `keyword` varchar(25) DEFAULT NULL,
  `isAdmin` tinyint(1) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_ID`, `firstname`, `lastname`, `birthdate`, `gender`, `keyword`, `isAdmin`, `email`) VALUES
(1, 'Sander', 'Hostyn', '2003-05-06', 'male', '123', 0, 'sander.hostyn@gmail.com'),
(2, 'Michiem', 'Naegels', '2002-06-10', 'male', '456', 0, 'michiel.naegels@gmail.com'),
(3, 'Simon', 'Hostyn', '1999-01-13', 'male', 'test', 0, 'simonhos99@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calendar`
--
ALTER TABLE `calendar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gift_for`
--
ALTER TABLE `gift_for`
  ADD PRIMARY KEY (`gift_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calendar`
--
ALTER TABLE `calendar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `gift_for`
--
ALTER TABLE `gift_for`
  MODIFY `gift_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
