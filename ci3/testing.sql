-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 29, 2020 at 01:07 PM
-- Server version: 5.7.31-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testing`
--

-- --------------------------------------------------------

--
-- Table structure for table `codeigniter_register`
--

CREATE TABLE `codeigniter_register` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` text NOT NULL,
  `verification_key` varchar(250) NOT NULL,
  `is_email_verified` enum('no','yes') NOT NULL,
  `address` varchar(100) NOT NULL,
  `path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `codeigniter_register`
--

INSERT INTO `codeigniter_register` (`id`, `name`, `email`, `password`, `verification_key`, `is_email_verified`, `address`, `path`) VALUES
(7, 'neethu', 'neethu@gmail.com', '123456', '12356', 'yes', '', ''),
(8, 'neethu', 'john@gmail.com', 'admin@1234', '0053c794b0e6bae0b58d1829b3f117b6', 'yes', 'TC-11/1001,NNRA-146 Nanthencode', ''),
(9, 'sam', 'sam@gmail.com', '123456', '0d376502a2044d43c8141c2b583c3a8b', 'no', 'Nandavanam ,TVM', 'http://localhost/ci3/upload/download.jpg'),
(10, 'ram', 'ram@gmail.com', '123456', '243e56ce4874685f4bad7ff298759d2c', 'no', 'ram nagar', ''),
(11, 'soba', 'soba@gmail.com', '123456', 'de4e7b15b597333d4a0ba98e610e63d5', 'no', 'soba bhavan', ''),
(12, 'rahul', 'rahul@gmail.com', '123456', '55d1ba8e177e20a1938d2e3832392fc7', 'yes', '123456', ''),
(13, '', '', '', '', 'no', '', '/var/www/html/ci3/upload/61.jpg'),
(14, 'midhun  raj', 'smidhunraj@gmail.com', '123456', 'a7bb2ea608e435ca1c1d77e8a11b27bc', 'yes', 'TC-11/1001,Nanthencode', 'http://localhost/ci3/upload/download5.jpg'),
(15, 'midhun', 'ramu123@gmail.com', '123456', '2702a329e6450fe73a9967c05e9d80ef', 'yes', 'nanthencode', ''),
(16, 'banu', 'banu@gmail.com', 'Welcome123', 'fcc1e002d5c19a155b5bf806af0e76e6', 'yes', 'sasg', ''),
(17, 'Banuz', 'banuz@gmail.com', 'W12345', '4a2fc220c6d7b64fcae10dc1f468b619', 'yes', 'asdf', 'http://localhost/ci3/upload/74.jpg'),
(18, 'Arya', 'arya123@gmail.com', 'W1234', '22b6d4dd429a10568e22dfa8e39aab26', 'yes', 'world', 'http://localhost/ci3/upload/66.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(2, 'new', 'hi', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'midhun', '123456', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `codeigniter_register`
--
ALTER TABLE `codeigniter_register`
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
-- AUTO_INCREMENT for table `codeigniter_register`
--
ALTER TABLE `codeigniter_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
