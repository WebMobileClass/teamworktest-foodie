-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2017 at 02:35 PM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `se`
--

-- --------------------------------------------------------

--
-- Table structure for table `food_list`
--

CREATE TABLE `food_list` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `price` int(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `food_list`
--

INSERT INTO `food_list` (`id`, `name`, `price`, `image`) VALUES
(1, 'Pork Suya', 1800, 'suya.jpeg'),
(2, 'Burger and Fries', 3000, 'burgerfries.jpeg'),
(3, 'Korean Fried Rice', 2000, 'kimchi-korean-fried-rice.jpeg'),
(4, 'Spaghetti', 1500, 'spag.jpeg'),
(5, 'Meat and Vegetables', 2500, 'meat-vegetables-gemuesepiess-mushrooms.jpeg'),
(6, 'Fruit Salad', 1400, 'fruit-salad.jpg'),
(7, 'Sandwich', 1500, 'sandwich.jpeg'),
(8, 'Pizza', 3200, 'food-pizza-fastfood.jpg'),
(9, 'Fried Rice', 1300, 'yellow-rice.jpg'),
(36, 'Suya', 4999, 'suya.jpeg'),
(37, 'Suya', 4999, 'suya.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `user_list`
--

CREATE TABLE `user_list` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_list`
--

INSERT INTO `user_list` (`id`, `username`, `email`, `password`) VALUES
(1, 'Orinami', 'orinami@gmail.com', 'hololens'),
(2, 'admin', 'admin@admin.com', 'admin'),
(6, 'shola', 'shola@gmail.com', 'tomilola'),
(7, 'uncooloj', 'oj@gmail.com', 'oj'),
(8, 'pappy_sho', 'shoetanphilips@yahoo.com', 'madmad'),
(9, 'jake', 'edwards@gmail.com', 'j');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `food_list`
--
ALTER TABLE `food_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_list`
--
ALTER TABLE `user_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `food_list`
--
ALTER TABLE `food_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `user_list`
--
ALTER TABLE `user_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
