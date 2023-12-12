-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 12, 2023 at 11:53 AM
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
-- Database: `kafe_cina`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `product_id` int DEFAULT NULL,
  `quantity` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `product_id`, `quantity`) VALUES
(6, 1, 3, 1),
(7, 1, 1, 4),
(8, 1, 9, 5);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `imagePath` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `category` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `country_origin` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `imagePath`, `category`, `price`, `description`, `country_origin`) VALUES
(1, 'Klepon', '../assets/images/Lokal/Klepon_1.jpeg', 'Makanan', 10000.00, 'Klepon adalah kue khas Indonesia yang terbuat dari tepung ketan dan didalam nya diisi gula merah yang melelah dan di balur oleh kelapa', 'Lokal'),
(2, 'Coffee', '../assets/images/Western/coffee_1.jpg', 'Minuman', 15000.00, 'Coffee Barat yang buat anda seperti di Itali', 'Western'),
(3, 'Takoyaki', '../assets/images/Japanese/Takoyaki1.jpeg', 'Makanan', 25000.00, 'Takoyaki adalah jajanan khas Jepang yang terbuat dari tepung roti dan pada umumnya isinya ya gurita makanya namanya Tako diindonesia isinya malah sosis', 'Japanese'),
(4, 'Sakura Tea', '../assets/images/Japanese/Sakura Tea.jpg', 'Minuman', 20000.00, 'Minuman rasa bunga sakura ', 'Japanese'),
(5, 'Boba', '../assets/images/Chinese/boba1.jpg', 'Minuman', 15000.00, 'Ini adalah minuman boba cina', 'Chinese'),
(6, 'Nian Gao', '../assets/images/Chinese/Nian-Gao1.jpg', 'Makanan', 10000.00, 'Cemilan yang berasal dari Cina', 'Chinese'),
(7, 'Burger', '../assets/images/Western/burger1.jpg', 'Makanan', 15000.00, 'Makanan cepat saji dari roti dan didalam nya ada daging saus dan sayuran', 'Western'),
(8, 'Es Cendol Dawet', '../assets/images/Lokal/Es Cendol 1.jpg', 'Minuman', 5000.00, 'Minuman dari Indonesia yang menyegarkan', 'Lokal'),
(9, 'Sakura Tea Latte', '../assets/images/Japanese/Sakura Tea Latte.jpg', 'Minuman', 25000.00, 'Minuman Bunga sakura campur latte', 'Japanese');

-- --------------------------------------------------------

--
-- Table structure for table `promotions`
--

CREATE TABLE `promotions` (
  `promo_id` int NOT NULL,
  `type` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `product_id` int NOT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `promotions`
--

INSERT INTO `promotions` (`promo_id`, `type`, `product_id`, `description`, `created_at`, `updated_at`) VALUES
(5, 'diskon', 1, 'Diskon 5% untuk pembelian 2 porsi klepon', '2023-12-12 07:41:37', '2023-12-12 07:41:37'),
(6, 'bonus', 2, 'Beli 1 gratis ??? Gratis bertanya dan memberi saran', '2023-12-12 07:41:58', '2023-12-12 07:41:58'),
(8, 'diskon', 5, 'Diskon 50% untuk pembelian 2 buah xi boba', '2023-12-12 11:31:43', '2023-12-12 11:31:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `no_hp` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `passwordd` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `no_hp`, `passwordd`, `created_at`) VALUES
(1, 'Agung RS', 'ramadhanagung2611@gmail.com', '089623277568', '$2y$10$2Xxb5CSGIWiQu6bi9cbUQeBqH91P5IioKIqwPsJu.ACwoO8fel2h6', '2023-11-25 21:43:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `promotions`
--
ALTER TABLE `promotions`
  ADD PRIMARY KEY (`promo_id`),
  ADD KEY `fk_promotions_products` (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `promotions`
--
ALTER TABLE `promotions`
  MODIFY `promo_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

--
-- Constraints for table `promotions`
--
ALTER TABLE `promotions`
  ADD CONSTRAINT `fk_promotions_products` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
