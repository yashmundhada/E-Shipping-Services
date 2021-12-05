-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2021 at 11:56 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-shipping`
--

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` int(10) NOT NULL,
  `street` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `pincode` varchar(50) NOT NULL,
  `country` text NOT NULL,
  `contact` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `street`, `city`, `state`, `pincode`, `country`, `contact`) VALUES
(1, '4th Avenue', 'Ghaziabad', 'Uttar Pradesh', '123456', 'India', '9899898898'),
(4, '4th Avenue ', 'Noida ', 'Uttar Pradesh ', '234234', 'India ', '9891234898 '),
(7, 'lane 6', 'Ajmer', 'Rajasthan', '123456', 'India', '09891233498');

-- --------------------------------------------------------

--
-- Table structure for table `cancelrequest`
--

CREATE TABLE `cancelrequest` (
  `id` int(10) NOT NULL,
  `trackingId` varchar(50) NOT NULL,
  `senderEmail` varchar(50) NOT NULL,
  `sender_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cancelrequest`
--

INSERT INTO `cancelrequest` (`id`, `trackingId`, `senderEmail`, `sender_name`) VALUES
(1, '619f4e9f76dd3', 'palak@gmail.com', 'Palak Thakur'),
(2, '619f69ad836b4', 'user1@gmail.com', 'user1');

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `id` int(30) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `branch` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`id`, `firstname`, `lastname`, `email`, `branch`) VALUES
(3, 'emp1', 'emp', 'emp1@gmail.com', '4'),
(4, 'emp1', 'emp', 'emp1@gmail.com', '7');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(20) NOT NULL,
  `trackingId` varchar(100) NOT NULL,
  `sender_name` varchar(50) NOT NULL,
  `sender_address` varchar(100) NOT NULL,
  `sender_contact` int(20) NOT NULL,
  `recipient_name` varchar(50) NOT NULL,
  `recipient_address` varchar(100) NOT NULL,
  `recipient_contact` int(20) NOT NULL,
  `weight` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT '11',
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `email` varchar(50) NOT NULL,
  `payment` varchar(20) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `trackingId`, `sender_name`, `sender_address`, `sender_contact`, `recipient_name`, `recipient_address`, `recipient_contact`, `weight`, `price`, `status`, `date_created`, `email`, `payment`) VALUES
(1, '619f4e9f76dd3', 'Palak Thakur', '362,Vaishali,Uttar Pradesh,India,201221', 2147483647, 'Shruti Mittal', 'A11,Vellore,Tamil Nadu,India,143221', 2147483647, '17', 1700, '10', '2021-11-25 09:51:43', 'palak@gmail.com', 'Paid'),
(2, '619f69ad836b4', 'user1', 'abc', 2147483647, 'receiver1', 'bcd', 2147483647, '11', 1100, '10', '2021-11-25 11:47:09', 'user1@gmail.com', 'Paid');

-- --------------------------------------------------------

--
-- Table structure for table `userfeedback`
--

CREATE TABLE `userfeedback` (
  `id` int(10) NOT NULL,
  `orderId` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `feedback` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `type` varchar(20) NOT NULL DEFAULT 'user' COMMENT '= admin,user',
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Name`, `email`, `password`, `type`, `date_created`) VALUES
(1, 'Administrator', 'admin@admin.com', '0192023a7bbd73250516f069df18b500', 'admin', '2021-11-12 10:57:04'),
(2, 'Palak Thakur', 'palak@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'user', '2021-11-25 14:17:04'),
(3, 'user1', 'user1@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'user', '2021-11-25 16:16:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cancelrequest`
--
ALTER TABLE `cancelrequest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp`
--
ALTER TABLE `emp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userfeedback`
--
ALTER TABLE `userfeedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cancelrequest`
--
ALTER TABLE `cancelrequest`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `emp`
--
ALTER TABLE `emp`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `userfeedback`
--
ALTER TABLE `userfeedback`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
