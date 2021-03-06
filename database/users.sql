-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2021 at 10:46 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(100) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `content` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `fullName`, `email`, `content`) VALUES
(1, 'Ali Yassine', 'aliyassine_2000@hotmail.com', 'test'),
(2, 'Hasan Itani', 'ITANIHH@students.rhu.edulb', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `order` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `method` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `promo` tinyint(1) NOT NULL,
  `isDone` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order`, `price`, `name`, `email`, `method`, `address`, `promo`, `isDone`) VALUES
(1, 'Kebab x1Classic Pizza x1Margherita Pizza x1Cheese Burger x1', 60, 'Ali Yassine', 'aliyassine_2000@hotmail.com', 'Delivery', 'beirut', 0, 1),
(10, 'Kebab x1Classic Pizza x1Margherita Pizza x1Cheese Burger x1', 60, 'Ali Yassine', 'aliyassine_2000@hotmail.com', 'Delivery', 'beirut', 0, 0),
(11, 'Kebab x1Classic Pizza x1Margherita Pizza x1', 50, 'Ali Yassine', 'aliyassine_2000@hotmail.com', 'Delivery', 'beirut', 0, 0),
(26, 'Cheese Burger x1', 10, 'Mohammad', 'gg@g.com', 'Delivery', 'beirut', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `name` varchar(250) NOT NULL,
  `code` varchar(100) NOT NULL,
  `price` double(9,2) NOT NULL,
  `category` varchar(30) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `code`, `price`, `category`, `image`) VALUES
(26, 'Russian Soup', 'JIB-987-BEY', 12.00, 'soups', 'russian-soup.jpg'),
(27, 'Ice cream', 'asddadas', 2.00, 'desserts', 'icecream.jpg'),
(36, 'Pepsi', 'pepsi', 1.00, 'beverages', '97CBAD26-D00C-4324-8CC2-15BB90615FF1.png'),
(37, 'Oreo Milkshake', 'oreo1', 5.00, 'beverages', '2204713D-33C4-4FF0-9C93-788008CCA76F.jpeg'),
(38, 'Mirinda', 'mirinda1', 1.00, 'beverages', 'EA65A03D-3FD9-436F-BFBD-DA06145513AD.jpeg'),
(41, 'Pepsi diet', 'pepsidiet1', 1.00, 'beverages', '2424A46F-2836-4F3B-9611-A2A888755200.jpeg'),
(42, '7up', '7 up 1', 1.00, 'beverages', '16D8AEAA-88EC-4320-8FE4-F8CA4D1C44AF.jpeg'),
(44, 'Red bull', 'redbull 1', 3.00, 'beverages', '6E7B0AC1-EAB1-40BD-BE65-0AB11B897574.jpeg'),
(45, 'Chocolate cake ', 'cake1', 10.00, 'desserts', '41312505-89DE-4184-BA14-60A777D0866C.png'),
(46, 'Donuts', 'donuts1', 5.00, 'desserts', '319D5D15-05A9-4EF9-99CC-CE3008507678.jpeg'),
(47, 'Kebab', 'kebab1', 20.00, 'mains-grills', '3693AB76-1B71-4785-BE7E-F87189AD8E67.jpeg'),
(48, 'Fried Eggs', 'eggs 1', 5.00, 'breakfast-brunch', '662AADD6-D7E1-4F14-82C4-8216AE2A26F2.jpeg'),
(49, 'Baked Eggs', 'egg1', 5.00, 'breakfast-brunch', '8C941970-DFD1-4A68-B9AD-1781091D61DC.jpeg'),
(51, 'Nescafe', 'nescafe1', 3.00, 'beverages', '1596B68B-A628-4657-8B16-33AD629BD18F.png'),
(52, 'Tea', 'tea1', 3.00, 'beverages', '14F0AA98-A5D9-4D56-B43D-BA79B7214BB1.jpeg'),
(53, 'Classic Pizza', 'pizza2', 15.00, 'pizza-burger', 'A0015B6A-0186-4DE8-B102-6E909976E3F0.jpeg'),
(54, 'Margherita Pizza', 'pizza3', 15.00, 'pizza-burger', '0378AD91-5161-4805-B5C1-A32F038E6111.jpeg'),
(55, 'Cheese Burger', 'burger1', 10.00, 'pizza-burger', '01484B6B-A1DE-4DAA-B36F-E1FC7839BECD.jpeg'),
(56, 'Beef Burger', 'burger2', 10.00, 'pizza-burger', 'E323B182-C269-448C-9867-FED3DB00D5B4.webp'),
(58, 'Alidddd', 'qq', 11.00, 'breakfast-brunch', '');

-- --------------------------------------------------------

--
-- Table structure for table `rate`
--

CREATE TABLE `rate` (
  `id` int(100) NOT NULL,
  `date` varchar(50) NOT NULL,
  `taste` int(5) NOT NULL,
  `service` int(5) NOT NULL,
  `hygiene` int(5) NOT NULL,
  `friendliness` int(5) NOT NULL,
  `professionalism` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rate`
--

INSERT INTO `rate` (`id`, `date`, `taste`, `service`, `hygiene`, `friendliness`, `professionalism`) VALUES
(1, 'Sat, 17 Apr 2021 17:45:04 +0200', 1, 1, 2, 2, 2),
(2, 'Sat, 17 Apr 2021 17:43:28 +0200', 0, 0, 0, 0, 0),
(3, 'Sat, 17 Apr 2021 21:33:08 +0200', 5, 5, 5, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `address`, `admin`) VALUES
(9, 'Ali Yassine', 'aliyassine_2000@hotmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'beirut', 1),
(10, 'Mohammad', 'gg@g.com', 'c4ca4238a0b923820dcc509a6f75849b', 'beirut', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `rate`
--
ALTER TABLE `rate`
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
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `rate`
--
ALTER TABLE `rate`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
