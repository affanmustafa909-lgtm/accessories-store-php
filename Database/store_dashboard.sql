-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2026 at 06:52 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store_dashboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_product`
--

CREATE TABLE `add_product` (
  `id` int(11) NOT NULL,
  `p_name` varchar(150) NOT NULL,
  `p_des` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `p_image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_product`
--

INSERT INTO `add_product` (`id`, `p_name`, `p_des`, `price`, `p_image`, `created_at`) VALUES
(4, 'Iphone', 'Iphone 17 pro max', 350000.00, 'apple iphone 17.avif', '2026-01-27 16:13:00'),
(6, 'Head Phone', 'P47 Wireless Headset Bluetooth Foldable Headphone (Connect with All Smart Cell Phones / Laptops / Computer Systems).', 845.00, 'headphones.jfif', '2026-01-27 17:14:39'),
(7, 'Apple Watch ', 'Digital LED Watch for Men Boys| Ultra Big Display Comfortable Straps| T900 Ultra | LED WATCH ONLY\r\n', 2500.00, 'apple watch.png', '2026-01-27 17:16:36'),
(8, 'Hand Free', 'Akg Samsung Handfree Premium Quality - Universal Handsfree 3.5mm', 504.00, 'hand free.avif', '2026-01-27 17:18:52'),
(9, 'Samsung S 25 Ultra', 'Samsung Galaxy S25 Ultra 12 GB RAM + 256 GB ROM PTA APPROVED', 35600.00, 'S25 ultra.jfif', '2026-01-27 17:25:50'),
(10, 'Wireless  Neckband', 'Latest Wireless Neckband Earphones - High-Quality Dual-Ear In-Ear Design', 980.00, 'wireless neckband.avif', '2026-01-27 17:28:27');

-- --------------------------------------------------------

--
-- Table structure for table `buynow`
--

CREATE TABLE `buynow` (
  `id` int(11) NOT NULL,
  `product_id` varchar(50) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `qty` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `province` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `area` varchar(50) DEFAULT NULL,
  `colony` varchar(50) DEFAULT NULL,
  `house` varchar(50) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `order_date` datetime DEFAULT current_timestamp(),
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buynow`
--

INSERT INTO `buynow` (`id`, `product_id`, `p_name`, `price`, `qty`, `fullname`, `province`, `city`, `area`, `colony`, `house`, `address`, `order_date`, `image`) VALUES
(1, '9', 'Samsung S 25 Ultra', 35600.00, 1, 'Shehryar', 'punjab', 'Sahiwal', 'farid town', 'tbz', '20', 'swl', '2026-01-27 23:04:11', 'S25 ultra.jfif'),
(2, '4', 'Iphone', 350000.00, 1, 'ali', '1250', 'lahore', 'lahore', 'lahore', 'lahore ajwahouse', 'Punjab lahore ajwahouse', '2026-01-27 23:09:45', 'apple iphone 17.avif'),
(3, '10', 'Wireless  Neckband', 980.00, 1, 'Saad', 'sindh', 'k', 'Karachi', 'karachi', 'karachi', 'karachi', '2026-01-28 20:51:59', 'wireless neckband.avif'),
(4, '6', 'Head Phone', 845.00, 1, 'Hamza', 'punjab', 'Sahiwal', 'lahore', 'karachi', 'karachi', 'Okara', '2026-01-28 21:27:48', 'headphones.jfif'),
(5, '9', 'Samsung S 25 Ultra', 35600.00, 1, 'Shehryar', 'punjab', 'swl', 'farid town', 'tbz', 'lahore ajwahouse', 'Okara', '2026-01-28 21:53:33', 'S25 ultra.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `e_address` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `f_name`, `e_address`, `password`, `cpassword`) VALUES
(1, 'Affan', 'affan@gmail.com', '123456', '123456'),
(2, 'Hassan', 'ali@gmail.com', '123456', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_product`
--
ALTER TABLE `add_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buynow`
--
ALTER TABLE `buynow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `e_address` (`e_address`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_product`
--
ALTER TABLE `add_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `buynow`
--
ALTER TABLE `buynow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
