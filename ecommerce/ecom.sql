-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2020 at 07:57 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL,
  `size` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`p_id`, `ip_add`, `qty`, `size`) VALUES
(1, '::1', 1, 34),
(2, '::1', 1, 34),
(8, '::1', 1, 34);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(10) NOT NULL,
  `cat_title` text NOT NULL,
  `cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `cat_desc`) VALUES
(1, 'Men', ''),
(2, 'Women', ''),
(3, 'Kids', '');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `product_title` text NOT NULL,
  `product_img1` text NOT NULL,
  `product_img2` text NOT NULL,
  `product_img3` text NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `cat_id`, `date`, `product_title`, `product_img1`, `product_img2`, `product_img3`, `product_price`, `product_desc`) VALUES
(1, 2, '2020-11-17 10:16:03', 'Women Beige Solid Cardigan ', 'w1.jpg', 'w1A.jpg', 'w1B.jpg', 3180, 'LADY\'S CARDIGAN-V/N-F/S\r\n\r\n'),
(2, 2, '2020-11-17 10:17:43', 'Women Beige Solid Cardigan ', 'w2.jpg', 'w2A.jpg', 'w2B.jpg', 3180, 'LADY\'S CARDIGAN-V/N-F/S\r\n\r\n'),
(3, 2, '2020-11-17 10:17:43', 'Green Solid Cardigan ', 'w3.jpg', 'w3A.jpg', 'w3B.jpg', 4330, 'LADY\'S CARDIGAN-V/N-F/S\r\n\r\n'),
(4, 2, '2020-11-17 10:17:43', 'Peach Solid Cardigan ', 'w4.jpg', 'w4A.jpg', 'w4B.jpg', 5640, 'LADY\'S CARDIGAN-V/N-F/S'),
(5, 1, '2020-11-17 10:17:43', 'Men Blue Printed Sweatshirt ', 'm1.jpg', 'm1A.jpg', 'm1B.jpg', 2340, 'MEN\'S SWEAT SHIRT-RN-F/S'),
(6, 1, '2020-11-17 10:17:43', 'Men Grey Printed Sweatshirt ', 'm2.jpg', 'm2A.jpg', 'm2B.jpg', 2170, 'MEN\'S SWEAT SHIRT-RN-F/S'),
(7, 1, '2020-11-17 10:17:43', 'Men Green Printed Sweatshirt ', 'm3.jpg', 'm3A.jpg', 'm3B.jpg', 1340, 'MEN\'S SWEAT SHIRT-RN-F/S'),
(8, 1, '2020-11-17 10:17:43', 'Men Orange Printed Sweatshirt\r\n\r\n', 'm4.jpg', 'm4A.jpg', 'm4B.jpg', 2640, 'MEN\'S SWEAT SHIRT-RN-F/S'),
(9, 3, '2020-11-17 10:17:43', 'Navy Collar Jacket ', 'k1.jpg', 'k1A.jpg', 'k1B.jpg', 1722, ''),
(10, 3, '2020-11-17 10:17:43', 'Grey Collar Jacket ', 'k2.jpg', 'k2A.jpg', 'k2B.jpg', 1677, ''),
(11, 3, '2020-11-17 10:17:43', 'Blue Solid Collar Jacket', 'k3.jpg', 'k3A.jpg', 'k3B.jpg', 1922, ''),
(12, 3, '2020-11-17 10:17:43', 'Olive Solid Collar Jacket ', 'k4.jpg', 'k4A.jpg', 'k4B.jpg', 1722, '');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slide_id` int(10) NOT NULL,
  `slide_name` varchar(255) NOT NULL,
  `slide_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slide_id`, `slide_name`, `slide_img`) VALUES
(1, 'Slide number 1', 'sale.JPG'),
(2, 'Slide number 2', 'wear.JPG'),
(3, 'Slide number 3', 'diwali.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `book` varchar(255) NOT NULL,
  `dish` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `email_id`, `pwd`, `book`, `dish`) VALUES
(1, 'anmol', 'kauranmol81@gmail.com', 'anmol', 'harry potter', 'paneer');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`p_id`, `ip_add`) VALUES
(2, '::1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slide_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email_id` (`email_id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slide_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
