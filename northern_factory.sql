-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2019 at 05:54 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";
CREATE DATABASE northern_factory;
USE northern_factory;


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `northern_factory`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `customerName` varchar(255) NOT NULL,
  `customeremail` varchar(255) NOT NULL,
  `customerID` int(11) NOT NULL,
  `qtyOrdered` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `size` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderID`, `productID`, `customerName`, `customeremail`, `customerID`, `qtyOrdered`, `price`, `size`) VALUES
(1, 1, 'acustomer', 'customeremail@email.com', 0, 3, 0, ''),
(2, 0, 'new', '', 0, 0, 0, ''),
(3, 0, 'new', '', 0, 3, 100, ''),
(4, 0, 'new', 'testemail@email.com', 0, 3, 250, ''),
(5, 16, 'new', 'testemail@email.com', 0, 3, 20, ''),
(6, 5, 'David', 'David@david.com', 0, 1, 100, ''),
(7, 5, 'David', 'David@david.com', 0, 1, 100, ''),
(8, 5, 'David', 'David@david.com', 0, 1, 100, ''),
(9, 5, 'David', 'David@david.com', 0, 1, 100, ''),
(10, 5, 'David', 'David@david.com', 0, 1, 100, ''),
(11, 5, 'David', 'David@david.com', 0, 1, 100, ''),
(12, 4, 'David', 'David@david.com', 0, 3, 100, ''),
(13, 4, 'David', 'David@david.com', 0, 4, 100, ''),
(14, 4, 'David', 'David@david.com', 0, 5, 100, ''),
(15, 4, 'David', 'David@david.com', 0, 3, 100, ''),
(16, 4, 'David', 'David@david.com', 0, 2, 100, ''),
(17, 4, 'David', 'David@david.com', 0, 2, 100, ''),
(18, 4, 'David', 'David@david.com', 0, 3, 100, ''),
(19, 5, 'David', 'David@david.com', 0, 5, 100, ''),
(20, 5, 'David', 'David@david.com', 0, 5, 100, ''),
(21, 3, 'j', 'j', 0, 1, 250, ''),
(22, 5, '', '', 0, 1, 100, ''),
(23, 10, 'DAv', 'newemail@email.com', 0, 3, 100, ''),
(24, 3, 'account', 'account@account.com', 0, 1, 250, ''),
(25, 5, 'DAv', 'newemail@email.com', 5, 1, 100, 'S'),
(26, 5, 'DAv', 'newemail@email.com', 5, 1, 100, 'S'),
(27, 10, 'DAv', 'newemail@email.com', 5, 1, 100, 'L'),
(28, 7, 'DAv', 'newemail@email.com', 5, 3, 60, 'L'),
(29, 3, 'DAv', 'newemail@email.com', 5, 4, 150, 'L'),
(30, 3, 'DAv', 'newemail@email.com', 5, 4, 150, 'L'),
(31, 3, 'DAv', 'newemail@email.com', 5, 4, 150, 'L'),
(32, 3, 'DAv', 'newemail@email.com', 5, 4, 150, 'L'),
(33, 10, 'David', 'David@david.com', 2, 2, 600, 'M'),
(34, 10, 'Main', 'mainaccount@main.main', 12, 3, 600, 'S');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productID` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `imageName` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productID`, `productName`, `imageName`, `price`, `qty`, `description`) VALUES
(1, 'Ralph Lauren Hat', 'ralph.jpg', 400, 20, ''),
(3, 'Respek My Name', 'repsek.png', 6501, 0, 'A description  '),
(6, 'Ralph Lauren Blackwatch', 'blackwatch.png', 226, 4, 'A very nice shirt'),
(10, 'Gucci Shirt ', 'gucci.png', 600, 27, 'A very expensive shirt! '),
(24, 'Iron Rockets Graphic Shirt', 'iron.png', 250, 5, 'Cool tee '),
(25, 'Nike John Stark TShirt', 'stark.png', 75, 59, 'A cool shirt!');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `userpass` varchar(255) NOT NULL,
  `useremail` varchar(255) NOT NULL,
  `admin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `username`, `userpass`, `useremail`, `admin`) VALUES
(2, 'Firstuser', 'password', 'user@user.user', 'Yes'),
(5, 'Iwillbuystuff', 'lol123', 'newemail@email.com', 'No'),
(6, 'new', 'lol123', 'testemail@email.com', 'No'),
(7, 'newpersom', 'lol888', 'uihiuh@ctyty.fcty', 'No'),
(8, 'Ibuyalotofthings', 'password', 'Ibuyalotofthings@yahoo.com', 'No'),
(9, 'k', 'kik111', '', 'No'),
(10, 'account', 'account', 'account@account.com', 'No'),
(11, 'Averylongnamethatmes', '111111', 'email@gmail.com', 'No'),
(12, 'Main', '123456', 'mainaccount@main.main', 'Yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
