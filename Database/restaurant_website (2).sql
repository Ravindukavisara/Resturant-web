-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 24, 2023 at 04:15 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `cart_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `item_id` int NOT NULL,
  `item_name` varchar(11) NOT NULL,
  `quantity` int NOT NULL,
  `price` int NOT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id`, `item_id`, `item_name`, `quantity`, `price`) VALUES
(55, 5, 5, 'Fries', 1, 600),
(56, 5, 5, 'Fries', 1, 600),
(57, 5, 5, 'Fries', 1, 600);

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

DROP TABLE IF EXISTS `contact_form`;
CREATE TABLE IF NOT EXISTS `contact_form` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(10) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

DROP TABLE IF EXISTS `delivery`;
CREATE TABLE IF NOT EXISTS `delivery` (
  `reservation_id` int NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `email` varchar(55) NOT NULL,
  `phone_number` int NOT NULL,
  `number_of_guests` int NOT NULL,
  `date_of_reservation` date NOT NULL,
  `time_of_reservation` time NOT NULL,
  PRIMARY KEY (`reservation_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `item_id` int NOT NULL AUTO_INCREMENT,
  `item_name` varchar(55) NOT NULL,
  `price` int NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`item_id`, `item_name`, `price`) VALUES
(1, 'donuts', 450),
(2, 'sandwich', 300),
(5, 'Fries', 600),
(6, 'Pizza', 1200),
(7, 'Tacos', 700),
(8, 'Burger', 500),
(9, 'Quinoa', 650),
(10, 'Pasta', 800),
(11, 'MatchaLattes', 400),
(12, 'Smoothies', 270),
(13, 'FruitJuice', 400),
(14, 'CoconutWater', 180);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `payment_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `cart_id` int NOT NULL,
  `total_payment` int NOT NULL,
  `payment_type` enum('Cash','Card','','') NOT NULL,
  PRIMARY KEY (`payment_id`),
  UNIQUE KEY `cart_id` (`user_id`,`cart_id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `user_id`, `cart_id`, `total_payment`, `payment_type`) VALUES
(12, 4, 49, 1400, 'Cash'),
(13, 4, 50, 700, 'Card'),
(14, 4, 51, 1500, 'Cash'),
(15, 4, 53, 700, 'Cash'),
(16, 5, 54, 2400, 'Cash'),
(17, 4, 58, 1200, 'Cash'),
(18, 4, 59, 1900, 'Cash'),
(19, 4, 0, 0, 'Cash'),
(20, 4, 61, 1850, 'Cash'),
(21, 4, 63, 700, 'Cash'),
(22, 4, 64, 2800, 'Cash'),
(23, 4, 68, 800, 'Cash'),
(24, 4, 69, 1200, 'Cash'),
(25, 4, 70, 1200, 'Cash'),
(27, 4, 71, 2000, 'Cash'),
(28, 4, 73, 1200, 'Cash'),
(29, 4, 74, 1500, 'Cash'),
(30, 4, 76, 700, 'Cash');

-- --------------------------------------------------------

--
-- Table structure for table `table`
--

DROP TABLE IF EXISTS `table`;
CREATE TABLE IF NOT EXISTS `table` (
  `table_id` int NOT NULL AUTO_INCREMENT,
  `reservation_id` int NOT NULL,
  `availability` enum('Available','Not Available','','') NOT NULL,
  PRIMARY KEY (`table_id`),
  UNIQUE KEY `reservation_id` (`reservation_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `address` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `phone_number` int NOT NULL,
  `password` varchar(55) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `address`, `email`, `phone_number`, `password`) VALUES
(4, 'Ravindu', 'Kavisara', '45/A,ajsdhiashdi', 'test@mail.com', 123456789, '123'),
(5, 'wanu', 'lak', 'metiyagane', 'wanu@gmail.com', 789338799, 'WANU1234');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
