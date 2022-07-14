-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2022 at 06:53 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_destination`
--

CREATE TABLE `add_destination` (
  `d_id` int(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `package` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_destination`
--

INSERT INTO `add_destination` (`d_id`, `destination`, `price`, `package`, `description`, `image`) VALUES
(47, 'Germany', '$257', '2 Days & 3 Night', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, itaque!', 'pexels-photo-2387873.jpeg'),
(48, 'Thailand', '$219', '2 Days & 2 Night', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, nam!', 'pexels-photo-5846548.jpeg'),
(49, 'Mexico', '$237', '3 Days & 2 Night', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, nam!', 'pexels-photo-2387873.jpeg'),
(50, 'Japan', '$250', '2 Days & 3 Nights', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis, velit!', 'pexels-photo-5922992.jpeg'),
(51, 'Indonesia', '$315', '3 Days & 2 Nights', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi, molestias.', 'pexels-photo-3586966.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `book_form`
--

CREATE TABLE `book_form` (
  `id` int(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `location` varchar(255) NOT NULL,
  `guests` int(255) NOT NULL,
  `package` varchar(100) NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_form`
--

INSERT INTO `book_form` (`id`, `name`, `email`, `phone`, `address`, `location`, `guests`, `package`, `price`) VALUES
(41, 'Tama', 'tamanna@gmail', '9876543', 'A-----', 'Japan', 4, '2 Days & 3 Nights', '$250'),
(42, 'tamanna', 'tamannaislam141101@gmail', '09876543', 'BB road', 'Mexico', 2, '3 Days & 2 Night', '$237');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `msg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `msg`) VALUES
(38, 'Tamanna  Islam', 'ttamanna559@gmail.com', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam et quod quo ipsam adipisci, praesentium corporis voluptatum possimus eaque minima?'),
(39, 'Tamanna  ', 'ttamanna559@gmail.com', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam et quod quo ipsam adipisci, praesentium corporis voluptatum possimus eaque minima?');

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(100) NOT NULL,
  `password` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `phone`, `password`) VALUES
(13, 'Tamanna  Islam', 'ttamanna559@gmail.com', 987654, 'd19bc3e3c70a0f81f9af8da3bb00005e'),
(14, 'tamanna', 'ttamanna559@gmail.com ', 298765, '5abf6a5d87f15d4acdc95a71d1d25b0d');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_destination`
--
ALTER TABLE `add_destination`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `book_form`
--
ALTER TABLE `book_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_destination`
--
ALTER TABLE `add_destination`
  MODIFY `d_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `book_form`
--
ALTER TABLE `book_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
