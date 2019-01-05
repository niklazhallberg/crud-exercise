- phpMyAdmin SQL Dump
-- version 4.7.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 02, 2018 at 11:19 AM
-- Server version: 5.6.38
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `Crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `Order_table`
--

CREATE TABLE `Order_table` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumping data for table `Order_table`
--

INSERT INTO `Order_table` (`order_id`, `user_id`, `product_id`, `product_amount`) VALUES
(14, 1, 3, 10),
(17, 1, 4, 15);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_image` varchar(500) COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_price`, `product_image`) VALUES
(1, 'Cremnophila_nutans', 500, 'image/blomma1.png'),
(2, 'Othonna_Crassifolia', 200, 'image/blomma2.png'),
(3, 'Symphoricarpos_albus', 300, 'image/blomma3.png'),
(4, 'Verticillata', 400, 'image/blomma4.png');

-- --------------------------------------------------------

--
-- Table structure for table `reg_info_users`
--

CREATE TABLE `reg_info_users` (
  `new_user_first_name` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `new_user_last_name` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `new_user_adress` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `new_user_zipcode` int(11) NOT NULL,
  `new_user_phone` int(11) NOT NULL,
  `new_user_mail` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumping data for table `reg_info_users`
--

INSERT INTO `reg_info_users` (`new_user_first_name`, `new_user_last_name`, `new_user_adress`, `new_user_zipcode`, `new_user_phone`, `new_user_mail`, `user_id`) VALUES
('Niklaz', 'Hallberg', 'Polhemsgatan 5', 11235, 705294776, 'niklaz@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`) VALUES
(1, 'Adrian', '$2y$10$XvWFEti6.K1.06qGICQ0PONpzoyie1vaXTOwj8o23S20Xqmen4R6y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Order_table`
--
ALTER TABLE `Order_table`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `reg_info_users`
--
ALTER TABLE `reg_info_users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Order_table`
--
ALTER TABLE `Order_table`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reg_info_users`
--
ALTER TABLE `reg_info_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
