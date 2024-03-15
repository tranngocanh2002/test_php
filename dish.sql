-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2024 at 05:10 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dish`
--

-- --------------------------------------------------------

--
-- Table structure for table `dishes`
--

CREATE TABLE `dishes` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `restaurant` varchar(255) DEFAULT NULL,
  `availableMeals` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dishes`
--

INSERT INTO `dishes` (`id`, `name`, `restaurant`, `availableMeals`) VALUES
(1, 'Chicken Burger', 'Mc Donalds', 'lunch,dinner'),
(2, 'Ham Burger', 'Mc Donalds', 'lunch,dinner'),
(3, 'Cheese Burger', 'Mc Donalds', 'lunch,dinner'),
(4, 'Fries', 'Mc Donalds', 'lunch,dinner'),
(5, 'Egg Muffin', 'Mc Donalds', 'breakfast'),
(6, 'Burrito', 'Taco Bell', 'lunch,dinner'),
(7, 'Tacos', 'Taco Bell', 'lunch,dinner'),
(8, 'Quesadilla', 'Taco Bell', 'lunch,dinner'),
(9, 'Steak', 'BBQ Hut', 'dinner'),
(10, 'Yakitori', 'BBQ Hut', 'dinner'),
(11, 'Nankotsu', 'BBQ Hut', 'dinner'),
(12, 'Piman', 'BBQ Hut', 'dinner'),
(13, 'Vegan Bento', 'Vege Deli', 'lunch'),
(14, 'Coleslaw Sandwich', 'Vege Deli', 'breakfast'),
(15, 'Grilled Sandwich', 'Vege Deli', 'breakfast'),
(16, 'Veg. Salad', 'Vege Deli', 'lunch,dinner'),
(17, 'Fruit Salad', 'Vege Deli', 'lunch,dinner'),
(18, 'Corn Soup', 'Vege Deli', 'lunch,dinner'),
(19, 'Tomato Soup', 'Vege Deli', 'lunch,dinner'),
(20, 'Minestrone Soup', 'Vege Deli', 'lunch,dinner'),
(21, 'Pepperoni Pizza', 'Pizzeria', 'lunch,dinner'),
(22, 'Pepperoni Pizza', 'Pizzeria', 'lunch,dinner'),
(23, 'Hawaiian Pizza', 'Pizzeria', 'lunch,dinner'),
(24, 'Seafood Pizza', 'Pizzeria', 'lunch,dinner'),
(25, 'Deep Dish Pizza', 'Pizzeria', 'dinner'),
(26, 'Chow Mein', 'Panda Express', 'lunch,dinner'),
(27, 'Mapo Tofu', 'Panda Express', 'lunch,dinner'),
(28, 'Kung Pao', 'Panda Express', 'lunch,dinner'),
(29, 'Wontons', 'Panda Express', 'lunch,dinner'),
(30, 'Garlic Bread', 'Olive Garden', 'breakfast,lunch,dinner'),
(31, 'Ravioli', 'Olive Garden', 'lunch,dinner'),
(32, 'Rigatoni Spaghetti', 'Olive Garden', 'lunch,dinner'),
(33, 'Fettucine Pasta', 'Olive Garden', 'lunch,dinner');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dishes`
--
ALTER TABLE `dishes`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
