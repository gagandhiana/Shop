-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 11, 2023 at 01:16 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `productId` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `productPrice` int(11) NOT NULL,
  `manufacturer` varchar(255) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `productImage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `userId`, `userName`, `productId`, `quantity`, `productPrice`, `manufacturer`, `productName`, `productImage`) VALUES
(37, 1, 'abc', 1, 2, 40000, 'Samsung', 'Samsung LED', '20221103085263637a9836082.png'),
(38, 1, 'abc', 3, 1, 3000, 'Nikon', 'Nikon D7000', '20221103084863637b0c1cc47.jpeg'),
(40, 1, 'abc', 5, 1, 6500, 'LG-Dishwasher', 'Dishwasher', '202211031046636396ee08a74.jpeg'),
(41, 1, 'abc', 7, 2, 55900, 'Samsung', 'Samsung Projector', '202211031010636397f6a3404.jpg'),
(44, 2, 'Gagandeep Kaur', 1, 1, 20000, 'Samsung', 'Samsung LED', '20221103085263637a9836082.png'),
(45, 2, 'Gagandeep Kaur', 5, 5, 32500, 'LG-Dishwasher', 'Dishwasher', '202211031046636396ee08a74.jpeg'),
(49, 2, 'Gagandeep Kaur', 4, 2, 7000, 'Kodak', 'Kodak Camera', '20221103082563637b31243d6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `category_details`
--

CREATE TABLE `category_details` (
  `category_id` int(11) NOT NULL,
  `categoryName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category_details`
--

INSERT INTO `category_details` (`category_id`, `categoryName`) VALUES
(1, 'TVs'),
(2, 'Dishwasher'),
(3, 'Ranges'),
(4, 'Computer'),
(5, 'Blu-ray & DVD Player'),
(6, 'Projectors'),
(7, 'Hometheater System'),
(8, 'Cameras'),
(9, 'Camcorders'),
(10, 'Washer & Dryers'),
(11, 'Refrigerators'),
(12, 'Microwaves');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `message`) VALUES
(1, 'John', 'newgmail@gmail.com', 'sfdhuesafrefivoerjjgfejr9fg8oute5rodthy');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `manufacturer` varchar(255) NOT NULL,
  `productPrice` varchar(255) NOT NULL,
  `productImage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `productName`, `model`, `manufacturer`, `productPrice`, `productImage`) VALUES
(1, 1, 'Samsung LED', 'Samsung LED', 'Samsung', '20000', '20221103085263637a9836082.png'),
(2, 4, 'Acer Monitor', 'Acer Monitor', 'Acer', '15000', '20221103085563637ad792fc6.jpg'),
(3, 8, 'Nikon D7000', 'Nikon D7000', 'Nikon', '3000', '20221103084863637b0c1cc47.jpeg'),
(4, 8, 'Kodak Camera', 'Kodak Camera', 'Kodak', '3500', '20221103082563637b31243d6.jpg'),
(5, 2, 'Dishwasher', 'Dishwasher', 'LG-Dishwasher', '6500', '202211031046636396ee08a74.jpeg'),
(6, 9, 'Sony camcorders', 'Sony camcorders', 'Sony', '16000', '202211031044636397a0e17eb.png'),
(7, 6, 'Samsung Projector', 'Samsung Projector', 'Samsung', '27950', '202211031010636397f6a3404.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `signups`
--

CREATE TABLE `signups` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signups`
--

INSERT INTO `signups` (`id`, `name`, `email`, `password`, `address`) VALUES
(1, 'abc', 'abc@gmail.com', '1111', ''),
(2, 'test', 'test@gmail.com', '2222', 'Chandigarh road, Ludhiana, Punjab - 141010');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_details`
--
ALTER TABLE `category_details`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signups`
--
ALTER TABLE `signups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `category_details`
--
ALTER TABLE `category_details`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `signups`
--
ALTER TABLE `signups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
