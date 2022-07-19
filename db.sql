-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 19, 2022 at 02:32 PM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `Cust_ID` int(11) NOT NULL,
  `Name` varchar(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`Cust_ID`, `Name`, `Email`, `Amount`) VALUES
(1, 'harish', 'pranjal@yahoo.com', 9500),
(2, 'shivam', 'shivam@orkut.com', 10500),
(3, 'niladri', 'singh@outlook.com', 10000),
(4, 'raj', 'sudeep@gmail.com', 10000),
(5, 'parkash', 'nishant@gmail.com', 10000),
(6, 'kunal', 'kunal@protonmail.com', 10000),
(7, 'rahul', 'rahul@gmail.com', 10000),
(8, 'aryan', 'aryan@yahoo.com', 10000),
(9, 'chandan', 'jenil@gmail.com', 10000),
(10, 'vikas', 'aman@gmail.com', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `Tran_ID` varchar(255) NOT NULL,
  `From` varchar(255) NOT NULL,
  `To` varchar(255) NOT NULL,
  `Amount` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`Tran_ID`, `From`, `To`, `Amount`) VALUES
('462d6a92b7aedd', 'pranjal@yahoo.com', 'shivam@orkut.com', '500');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`Cust_ID`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD UNIQUE KEY `Tran_ID` (`Tran_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `Cust_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
