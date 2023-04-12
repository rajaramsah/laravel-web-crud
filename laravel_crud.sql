-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2023 at 05:50 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(30) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `image` varchar(250) DEFAULT NULL,
  `dep` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `email`, `address`, `image`, `dep`, `status`) VALUES
(1, 'ram', 'ram@gmail.com', 'pune', '', '', ''),
(3, 'ram', 'ram@gmail.com', 'pune', '', '', ''),
(5, 'sawalia', 'sawalia@gmail.com', 'shalimar howrah', '', '', ''),
(6, 'himalay', 'himu@gmail.com', 'delhi', '', '', ''),
(9, 'ravi', 'ravi@gmail.com', 'bihar', '', '[\"php\",\"angular\"]', 'active'),
(10, 'jitu', 'jitu@gmail.com', 'N.delhi', '', '', ''),
(11, 'Rajesh shaw', 'rajesh@gmail.com', 'Dwarka(Nagli Deri)', '', '', ''),
(12, 'himu', 'himu@gmail.com', 'delhi', '', '[\"php\",\"laravel\"]', 'active'),
(14, 'sawalia', 'sawalia@gmail.com', 'kolkata', NULL, '[\"laravel\",\"angular\"]', 'active'),
(15, 'arun', 'arun@gmail.com', 'Delhi', NULL, '[\"laravel\",\"angular\"]', 'active'),
(17, 'satpal', 'satu@gmail.com', 'palam', 'images\\846916.jpg', '[\"php\",\"laravel\"]', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(50) NOT NULL,
  `productname` varchar(250) NOT NULL,
  `category` varchar(100) NOT NULL,
  `freshness` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `comment` varchar(250) NOT NULL,
  `date` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `productname`, `category`, `freshness`, `price`, `comment`, `date`) VALUES
(1, 'orange', 'fruits', 'new', 200, 'this new and fresh', '2023-04-07 15:36:13.000000'),
(2, 'orange', 'fruits', 'new', 200, 'this new and fresh', '2023-04-07 15:36:13.000000'),
(4, 'mango', 'Fruits', 'fresh', 120, 'fruits', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
