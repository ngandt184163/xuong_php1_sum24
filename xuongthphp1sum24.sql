-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 25, 2024 at 02:45 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xuongthphp1sum24`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int NOT NULL,
  `name` varchar(200) COLLATE utf8mb3_unicode_ci NOT NULL,
  `des_c` varchar(250) COLLATE utf8mb3_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `des_c`) VALUES
(1, 'Máy tính', NULL),
(2, 'Điện thoại', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` varchar(250) COLLATE utf8mb3_unicode_ci NOT NULL,
  `price` varchar(100) COLLATE utf8mb3_unicode_ci NOT NULL,
  `image` varchar(250) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `des_c` varchar(250) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `quanty` int NOT NULL,
  `category_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`, `des_c`, `quanty`, `category_id`) VALUES
(2, 'ip 15', '30000000', './public/image/17182563081111.png', 'hahahahaha', 5, 2),
(7, 'acer', '120000', './public/image/17182560011123.png', 'xau', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `email` varchar(50) COLLATE utf8mb3_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8mb3_unicode_ci NOT NULL,
  `phone` varchar(12) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `address` varchar(200) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `name` varchar(100) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `img` varchar(250) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `role` int NOT NULL DEFAULT '2' COMMENT '1 là admin, 2 là user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `phone`, `address`, `name`, `img`, `role`) VALUES
(1, 'an@gmail.com', '000000', NULL, NULL, NULL, NULL, 2),
(2, 'lan@gmail.com', '000000', NULL, NULL, NULL, NULL, 1),
(3, 'duyen@gmail.com', '000000', NULL, NULL, NULL, NULL, 2),
(4, 'hieu@gmail.com', '000000', NULL, NULL, NULL, NULL, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
