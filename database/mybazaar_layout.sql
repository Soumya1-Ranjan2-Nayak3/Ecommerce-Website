-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2023 at 10:33 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mybazaar`
--

-- --------------------------------------------------------

--
-- Table structure for table `allproduct`
--

CREATE TABLE `allproduct` (
  `item_id` int(11) NOT NULL,
  `type` varchar(200) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_register` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `allproduct`
--

INSERT INTO `allproduct` (`item_id`, `type`, `item_name`, `item_price`, `item_image`, `item_register`) VALUES
(101, 'Earphones', 'boAt Bassheads 103 Black Wired Headset', 449.00, './assets/products/Accessories/boat.png', '2023-02-07 19:20:02'),
(102, 'Earphones', 'Boult Audio AirBass Y1 TWS Earbuds', 1399.00, './assets/products/Accessories/boult_ear.png', '2023-02-07 19:20:02'),
(103, 'Earphones', 'JBL C150SI with One Button', 749.00, './assets/products/Accessories/jbl_ear.png', '2023-02-07 19:20:02'),
(104, 'Earphones', 'Mivi Rock Roll E5 With HD Sound Wired Headset', 249.00, './assets/products/Accessories/mivi_ear.png', '2023-02-07 19:20:02'),
(105, 'Earphones', 'OnePlus Bullets Wireless Z2 Bluetooth Headset', 1799.00, './assets/products/Accessories/onneplus_earphone.png', '2023-02-07 19:20:02'),
(106, 'Earphones', 'realme Buds 2 Neo With HD Mic Wired Headset', 499.00, './assets/products/Accessories/realme_ear.png', '2023-02-07 19:20:02'),
(107, 'Earphones', 'SONY ZX110A Wired without Mic Headset', 799.00, './assets/products/Accessories/sony_ear.png', '2023-02-07 19:20:02'),
(108, 'Earphones', 'ZEBRONICS ZEB-BRO Wired Headset', 299.00, './assets/products/Accessories/zebronic_ear.png', '2023-02-07 19:20:02'),
(201, 'Mobiles', 'Infinix HOT 20 Play (Fantasy Purple, 64 GB)', 8199.00, './assets/products/mobiles/infinix.png', '2023-02-07 19:20:02'),
(202, 'Mobiles', 'APPLE iPhone 14 (Blue, 128 GB)', 72499.00, './assets/products/mobiles/iphone.png', '2023-02-07 19:20:02'),
(203, 'Mobiles', 'LAVA Blaze (Glass Blue, 64 GB)', 8699.00, './assets/products/mobiles/lava.png', '2023-02-07 19:20:02'),
(204, 'Mobiles', 'Nokia G21 (Nordic Blue, 128 GB)', 14999.00, './assets/products/mobiles/nokia.png', '2023-02-07 19:20:02'),
(205, 'Mobiles', 'Nubia Redmagic 3S (Cyber Shade, 256 GB)', 49999.00, './assets/products/mobiles/nubia.png', '2023-02-07 19:20:02'),
(206, 'Mobiles', 'OnePlus Nord CE 2 Lite 5G (Blue Tide, 128 GB)', 19997.00, './assets/products/mobiles/oneplus.png', '2023-02-07 19:20:02'),
(207, 'Mobiles', 'realme 10 Pro 5G (Hyperspace, 128 GB)', 18999.00, './assets/products/mobiles/realme.png', '2023-02-07 19:20:02'),
(208, 'Mobiles', 'REDMI 10A (Slate grey, 64 GB)', 8649.00, './assets/products/mobiles/redmi.png', '2023-02-07 19:20:02'),
(209, 'Mobiles', 'SAMSUNG Galaxy F23 5G (Forest Green, 128 GB)', 16999.00, './assets/products/mobiles/samsung.png', '2023-02-07 19:20:02'),
(301, 'Watches', 'boAt Wave Infinity', 1949.00, './assets/products/watch/boat_watch.png', '2023-02-07 19:20:02'),
(302, 'Watches', 'realme Watch 3', 3499.00, './assets/products/watch/realme.png', '2023-02-07 19:20:02'),
(303, 'Watches', 'Noise ColorFit Caliber', 1249.00, './assets/products/watch/noise.png', '2023-02-07 19:20:02'),
(304, 'Watches', 'APPLE Watch SE (GPS, 44mm)', 32900.00, './assets/products/watch/iwatch.png', '2023-02-07 19:20:02'),
(305, 'Watches', 'FITBIT Versa 2 Smartwatch', 13249.00, './assets/products/watch/fitbit.png', '2023-02-07 19:20:02'),
(306, 'Watches', 'Fireboltt WONDER Smartwatch', 5999.00, './assets/products/watch/fire-bolt.png', '2023-02-07 19:20:02'),
(307, 'Watches', 'Pebble Cosmos Grande', 3799.00, './assets/products/watch/pabble.png', '2023-02-07 19:20:02'),
(308, 'Watches', 'SAMSUNG Watch 4', 18990.00, './assets/products/watch/samsung.png', '2023-02-07 19:20:02'),
(401, 'Footware', 'Mystere M Running Shoes For Men', 2319.00, './assets/products/shoes/adidas.png', '2023-02-07 19:20:02'),
(402, 'Footware', 'Stride Runner M Running Shoes For Men', 1047.00, './assets/products/shoes/reeebok.png', '2023-02-07 19:20:02'),
(403, 'Footware', 'Humble Running Shoes For Men', 1700.00, './assets/products/shoes/puma.png', '2023-02-07 19:20:02'),
(404, 'Footware', 'Revolution 6 Next Nature Road', 2394.00, './assets/products/shoes/nike.png', '2023-02-07 19:20:02'),
(405, 'Footware', 'Running Shoes For Men', 942.00, './assets/products/shoes/fila.png', '2023-02-07 19:20:02'),
(406, 'Footware', 'Literide 360 Pacer M Blk/Sgy Casuals For Men', 5995.00, './assets/products/shoes/crocs.png', '2023-02-07 19:20:02'),
(407, 'Footware', 'Casuals For Men', 869.00, './assets/products/shoes/bata.png', '2023-02-07 19:20:02'),
(408, 'Footware', 'Casuals For Women', 589.00, './assets/products/shoes/alensoli.png', '2023-02-07 19:20:02');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fresharrival`
--

CREATE TABLE `fresharrival` (
  `item_id` int(11) NOT NULL,
  `type` varchar(200) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_register` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fresharrival`
--

INSERT INTO `fresharrival` (`item_id`, `type`, `item_name`, `item_price`, `item_image`, `item_register`) VALUES
(105, 'Earphones', 'OnePlus Bullets Wireless Z2 Bluetooth Headset', 1799.00, './assets/products/Accessories/onneplus_earphone.png', '2023-02-07 19:20:02'),
(202, 'Mobiles', 'APPLE iPhone 14 (Blue, 128 GB)', 72499.00, './assets/products/mobiles/iphone.png', '2023-02-07 19:20:02'),
(205, 'Mobiles', 'Nubia Redmagic 3S (Cyber Shade, 256 GB)', 49999.00, './assets/products/mobiles/nubia.png', '2023-02-07 19:20:02'),
(207, 'Mobiles', 'realme 10 Pro 5G (Hyperspace, 128 GB)', 18999.00, './assets/products/mobiles/realme.png', '2023-02-07 19:20:02'),
(305, 'Watches', 'FITBIT Versa 2 Smartwatch', 13249.00, './assets/products/watch/fitbit.png', '2023-02-07 19:20:02'),
(406, 'Footware', 'Literide 360 Pacer M Blk/Sgy Casuals For Men', 5995.00, './assets/products/shoes/crocs.png', '2023-02-07 19:20:02'),
(408, 'Footware', 'Casuals For Women', 589.00, './assets/products/shoes/alensoli.png', '2023-02-07 19:20:02');

-- --------------------------------------------------------

--
-- Table structure for table `topoffer`
--

CREATE TABLE `topoffer` (
  `item_id` int(11) NOT NULL,
  `type` varchar(200) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_register` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `topoffer`
--

INSERT INTO `topoffer` (`item_id`, `type`, `item_name`, `item_price`, `item_image`, `item_register`) VALUES
(101, 'Earphones', 'boAt Bassheads 103 Black Wired Headset', 449.00, './assets/products/Accessories/boat.png', '2023-02-07 19:20:02'),
(106, 'Earphones', 'realme Buds 2 Neo With HD Mic Wired Headset', 499.00, './assets/products/Accessories/realme_ear.png', '2023-02-07 19:20:02'),
(201, 'Mobiles', 'Infinix HOT 20 Play (Fantasy Purple, 64 GB)', 8199.00, './assets/products/mobiles/infinix.png', '2023-02-07 19:20:02'),
(202, 'Mobiles', 'APPLE iPhone 14 (Blue, 128 GB)', 72499.00, './assets/products/mobiles/iphone.png', '2023-02-07 19:20:02'),
(304, 'Watches', 'APPLE Watch SE (GPS, 44mm)', 32900.00, './assets/products/watch/iwatch.png', '2023-02-07 19:20:02'),
(307, 'Watches', 'Pebble Cosmos Grande', 3799.00, './assets/products/watch/pabble.png', '2023-02-07 19:20:02'),
(401, 'Footware', 'Mystere M Running Shoes For Men', 2319.00, './assets/products/shoes/adidas.png', '2023-02-07 19:20:02');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `register_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `email_id`, `password`, `register_date`) VALUES
(1, 'soumya', 'ranjan', 'work.soumya001@gmail.com', 'Soumy@2000', '2023-02-07 19:20:02'),
(2, 'admin', 'one', '', '', '2023-02-07 19:20:02'),
(8, 'Soumya Ranjan', 'Nayak', 'panthergaming5464@gmail.com', 'helloworld', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allproduct`
--
ALTER TABLE `allproduct`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `fresharrival`
--
ALTER TABLE `fresharrival`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `topoffer`
--
ALTER TABLE `topoffer`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allproduct`
--
ALTER TABLE `allproduct`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=409;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `fresharrival`
--
ALTER TABLE `fresharrival`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=409;

--
-- AUTO_INCREMENT for table `topoffer`
--
ALTER TABLE `topoffer`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=402;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
