-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2019 at 04:37 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


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
(34, 10, 'Main', 'mainaccount@main.main', 12, 3, 600, 'S'),
(35, 10, 'name', 'name@name.name', 16, 1, 360, 'L'),
(36, 6, 'Mr Cashout', 'cashout@yahoo.com', 17, 1, 136, 'L'),
(37, 28, 'Mr Cashout', 'cashout@yahoo.com', 17, 4, 120, 'S'),
(38, 1, 'name', 'name@name.com', -1, 3, 400, 'L'),
(39, 1, 'Mr Cashout', 'cashout@yahoo.com', 17, 1, 240, 'S'),
(40, 1, 'Mr Cashout', 'cashout@yahoo.com', 17, 1, 240, 'S'),
(41, 1, 'Mr Cashout', 'cashout@yahoo.com', 17, 4, 240, 'L'),
(42, 25, 'Mr Cashout', 'cashout@yahoo.com', 17, 1, 45, 'L'),
(43, 25, 'Mr Cashout', 'cashout@yahoo.com', 17, 1, 45, 'L'),
(44, 25, 'Mr Cashout', 'cashout@yahoo.com', 17, 1, 45, 'L'),
(45, 25, 'Mr Cashout', 'cashout@yahoo.com', 17, 1, 45, 'L'),
(46, 25, 'Mr Cashout', 'cashout@yahoo.com', 17, 1, 45, 'L'),
(47, 25, 'Mr Cashout', 'cashout@yahoo.com', 17, 1, 45, 'L'),
(48, 25, 'Mr Cashout', 'cashout@yahoo.com', 17, 1, 45, 'L'),
(49, 25, 'Mr Cashout', 'cashout@yahoo.com', 17, 1, 45, 'L'),
(50, 25, 'Mr Cashout', 'cashout@yahoo.com', 17, 1, 45, 'L'),
(51, 25, 'Mr Cashout', 'cashout@yahoo.com', 17, 1, 45, 'L'),
(52, 25, 'Mr Cashout', 'cashout@yahoo.com', 17, 1, 45, 'L'),
(53, 25, 'Mr Cashout', 'cashout@yahoo.com', 17, 1, 45, 'L'),
(54, 25, 'Mr Cashout', 'cashout@yahoo.com', 17, 1, 45, 'L'),
(55, 25, 'Mr Cashout', 'cashout@yahoo.com', 17, 1, 45, 'L'),
(56, 25, 'Mr Cashout', 'cashout@yahoo.com', 17, 1, 45, 'L'),
(57, 10, 'Test', 'Name', -1, 2, 1200, 'S'),
(58, 25, 'Test', 'Name', -1, 1, 75, 'S'),
(59, 10, 'Test', 'Name', -1, 2, 1200, 'S'),
(60, 25, 'Test', 'Name', -1, 1, 75, 'S'),
(61, 10, 'Test', 'Name', -1, 2, 1200, 'S'),
(62, 25, 'Test', 'Name', -1, 1, 75, 'S'),
(63, 10, 'Test', 'Name', -1, 2, 1200, 'S'),
(64, 25, 'Test', 'Name', -1, 1, 75, 'S'),
(65, 10, 'Test', 'Name', -1, 2, 1200, 'S'),
(66, 25, 'Test', 'Name', -1, 1, 75, 'S'),
(67, 10, 'Test', 'Name', -1, 2, 1200, 'S'),
(68, 25, 'Test', 'Name', -1, 1, 75, 'S'),
(69, 10, 'Test', 'Name', -1, 2, 1200, 'S'),
(70, 25, 'Test', 'Name', -1, 1, 75, 'S'),
(71, 10, 'Test', 'Name', -1, 2, 1200, 'S'),
(72, 25, 'Test', 'Name', -1, 1, 75, 'S'),
(73, 10, 'Account', 'accountorder@order.com', -1, 2, 1200, 'S'),
(74, 25, 'Account', 'accountorder@order.com', -1, 1, 75, 'S'),
(75, 10, 'newguy', 'newguy@gmail.com', -1, 2, 1200, 'S'),
(76, 25, 'newguy', 'newguy@gmail.com', -1, 1, 75, 'S'),
(77, 6, 'Aperson', 'Aperson@yahoo.com', -1, 1, 226, 'S'),
(78, 10, 'Aperson', 'Aperson@yahoo.com', -1, 1, 600, 'S'),
(79, 1, 'Mr Cashout', 'cashout@yahoo.com', 17, 4, 1600, 'L'),
(80, 25, 'Mr Cashout', 'cashout@yahoo.com', 17, 5, 375, 'S'),
(81, 24, 'Mr Cashout', 'cashout@yahoo.com', 17, 4, 1000, 'L'),
(82, 6, 'Mr Cashout', 'cashout@yahoo.com', 17, 1, 136, 'S'),
(83, 10, 'Mr Cashout', 'cashout@yahoo.com', 17, 1, 360, 'S'),
(84, 24, 'cashout', 'cashes@yahoo.com', 19, 1, 250, 'S'),
(85, 10, 'cashout', 'cashes@yahoo.com', 19, 1, 360, 'S'),
(86, 25, 'cashout', 'cashes@yahoo.com', 19, 4, 180, 'S'),
(87, 6, 'Mr Cashout', 'cashout@yahoo.com', 17, 1, 136, 'S'),
(88, 10, 'Mr Cashout', 'cashout@yahoo.com', 17, 1, 360, 'S'),
(89, 10, 'Mr Cashout', 'cashout@yahoo.com', 17, 1, 360, 'S'),
(90, 6, 'Mr Cashout', 'cashout@yahoo.com', 17, 1, 136, 'S'),
(91, 6, 'Mr Cashout', 'cashout@yahoo.com', 17, 2, 271, 'S'),
(92, 25, 'Mr Cashout', 'cashout@yahoo.com', 17, 1, 45, 'S'),
(93, 1, 'Mr Cashout', 'cashout@yahoo.com', 17, 1, 240, 'S'),
(94, 25, 'mdaccount', 'md@md.com', 24, 1, 45, 'L'),
(95, 10, 'mdaccount', 'md5@md5.com', 26, 1, 360, 'S'),
(96, 26, 'mdaccount', 'md5@md5.com', 26, 5, 4500, 'S'),
(97, 6, 'mdaccount', 'md5@md5.com', 26, 1, 136, 'S'),
(98, 24, 'mdaccount', 'md5@md5.com', 26, 3, 450, 'S');

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
(1, 'Ralph Lauren Hat   ', 'ralph.jpg', 400, 14, 'A comfortable hat that will keep you warm with a luxury look!'),
(3, 'Respek My Name  ', 'repsek.png', 6501, 0, 'A description    '),
(6, 'RL Blackwatch                                              ', 'blackwatch.png', 226, 18, 'A very nice shirt                                              '),
(10, 'Gucci Shirt   ', 'gucci.png', 600, 2, 'A very expensive shirt!   '),
(24, 'Iron Rockets Graphic Shirt ', 'iron.png', 250, 9, 'Cool tee  '),
(25, 'Nike John Stark TShirt  ', 'stark.png', 75, 37, 'A cool shirt!  '),
(26, 'True Religions Jean Jacket', 'denimjacket.png', 1500, 2, 'Warm and stylish with this denim jacket'),
(27, 'Hick Sweatpants', 'hickssweats.png', 35, 61, 'Sweat in fashion '),
(28, '501 Levi Jeans   ', '501levis.png', 45, 49, 'Classic Levi Jeans   ');

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
(12, 'Main', '123456', 'mainaccount@main.main', 'Yes'),
(13, 'rgmiorjg', '123456', 'email@gmail.comw', 'No'),
(14, 'll', '123456', 'll@ll.l', 'No'),
(15, 'David', '1111111', 'ewpfke@ofkeof.cok', 'No'),
(16, 'name', '123456', 'name@name.name', 'No'),
(17, 'Mr Cashout', '123456', 'cashout@yahoo.com', 'No'),
(18, 'new', '111111', 'newperson@aol.com', 'No'),
(19, 'cashout', '123456', 'cashes@yahoo.com', 'No'),
(24, 'mdaccount', 'e10adc3949ba59abbe56e057f20f883e', 'md@md.com', 'No'),
(25, 'mdaccount', 'e10adc3949ba59abbe56e057f20f883e', 'mdt@md.com', 'No'),
(26, 'mdaccount', 'e10adc3949ba59abbe56e057f20f883e', 'md5@md5.com', 'No'),
(27, 'adminaccount', 'e10adc3949ba59abbe56e057f20f883e', 'adminaccount@admin.admin', 'Yes');

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
  MODIFY `orderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
