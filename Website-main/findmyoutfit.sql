-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2020 at 06:50 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `findmyoutfit`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(35) NOT NULL,
  `password` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin.main0@gmail.com', 'HoneyBadger09'),
('admin.second@gmail.com', 'Nmay1709'),
('admin.third@gmail.com', 'asdfgh');

-- --------------------------------------------------------

--
-- Table structure for table `designer`
--

CREATE TABLE `designer` (
  `username` varchar(35) NOT NULL,
  `password` varchar(25) NOT NULL,
  `College_ID` int(15) NOT NULL,
  `College_Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `designer`
--

INSERT INTO `designer` (`username`, `password`, `College_ID`, `College_Name`) VALUES
('juan.designer@gmail.com', 'Juan1234', 111111111, 'Virtual State Fake University '),
('ramu.designer@gmail.com', 'Scam1992', 13720616, 'NY Institute of Designing');

-- --------------------------------------------------------

--
-- Table structure for table `designer_history`
--

CREATE TABLE `designer_history` (
  `designerorder_no` int(40) NOT NULL,
  `shop_name` text NOT NULL,
  `order_placed` varchar(10) NOT NULL,
  `pickup_date` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `designer_history`
--

INSERT INTO `designer_history` (`designerorder_no`, `shop_name`, `order_placed`, `pickup_date`) VALUES
(100001, 'Peter\'s Rental Outfits', '11/14/2020', '12/20/2020');

-- --------------------------------------------------------

--
-- Table structure for table `designer_info`
--

CREATE TABLE `designer_info` (
  `username` varchar(25) NOT NULL,
  `age` int(5) NOT NULL,
  `email_id` varchar(35) NOT NULL,
  `img` blob NOT NULL,
  `sex` varchar(15) NOT NULL,
  `phone` int(10) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `designer_info`
--

INSERT INTO `designer_info` (`username`, `age`, `email_id`, `img`, `sex`, `phone`, `address`) VALUES
('Nimay', 21, 'nimay.patel@sjsu.edu', 0x66617368696f6e2e6a7067, 'Male', 2147483647, '  1 Washington Square, San Jose, CA'),
('Randy', 92, 'raqndy.fakeman@outlook.com', 0x66617368696f6e2e6a7067, 'Female', 2147483647, '  1234, xyz Street, Virtual City, Imagination, Your Mind'),
('Manushi', 21, 'manushi.jariwala@fakeid.com', 0x66656d616c652e6a7067, 'Other', 2147483647, '  random home address which doesnot exist');

-- --------------------------------------------------------

--
-- Table structure for table `rental_history`
--

CREATE TABLE `rental_history` (
  `rental_number` int(40) NOT NULL,
  `shop_name` text NOT NULL,
  `items` varchar(100) NOT NULL,
  `p_date` varchar(40) NOT NULL,
  `r_date` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rental_history`
--

INSERT INTO `rental_history` (`rental_number`, `shop_name`, `items`, `p_date`, `r_date`) VALUES
(1100005, 'Peter’s Rental Outfits', 'Blue Tuxedo, Brown Suit.', 'December 10, 2020', 'December 16, 2020');

-- --------------------------------------------------------

--
-- Table structure for table `rental_info`
--

CREATE TABLE `rental_info` (
  `shop_id` int(10) NOT NULL,
  `owner_name` text NOT NULL,
  `shop_name` text NOT NULL,
  `owner_phone` varchar(15) NOT NULL,
  `owner_address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rental_info`
--

INSERT INTO `rental_info` (`shop_id`, `owner_name`, `shop_name`, `owner_phone`, `owner_address`) VALUES
(1, 'Peter', 'Peter\'s Rental Outfits', '2424245245', '42424 Alex Ave. San Jose, CA 95112'),
(2, 'Nitin', 'Nitin\'s Rental Outfits', '2424245247', '42425 Alex Ave. San Jose, CA 95112');

-- --------------------------------------------------------

--
-- Table structure for table `rental_shop`
--

CREATE TABLE `rental_shop` (
  `email` text NOT NULL,
  `password` varchar(25) NOT NULL,
  `ftc_id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rental_shop`
--

INSERT INTO `rental_shop` (`email`, `password`, `ftc_id`) VALUES
('peter.rental90@gmail.com', '1234567890', 1500001);

-- --------------------------------------------------------

--
-- Table structure for table `safety_credentials`
--

CREATE TABLE `safety_credentials` (
  `email` varchar(35) NOT NULL,
  `backup` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(35) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('rusty.user99@gmail.com', 'MirzapurS02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`) KEY_BLOCK_SIZE=35 USING HASH;

--
-- Indexes for table `designer`
--
ALTER TABLE `designer`
  ADD PRIMARY KEY (`username`) KEY_BLOCK_SIZE=35 USING HASH,
  ADD UNIQUE KEY `College_ID` (`College_ID`);

--
-- Indexes for table `designer_history`
--
ALTER TABLE `designer_history`
  ADD PRIMARY KEY (`designerorder_no`);

--
-- Indexes for table `rental_history`
--
ALTER TABLE `rental_history`
  ADD PRIMARY KEY (`rental_number`);

--
-- Indexes for table `rental_info`
--
ALTER TABLE `rental_info`
  ADD PRIMARY KEY (`shop_id`);

--
-- Indexes for table `rental_shop`
--
ALTER TABLE `rental_shop`
  ADD PRIMARY KEY (`email`(5)) KEY_BLOCK_SIZE=35 USING HASH,
  ADD UNIQUE KEY `UNIQUE` (`ftc_id`);

--
-- Indexes for table `safety_credentials`
--
ALTER TABLE `safety_credentials`
  ADD KEY `fk_foreign_key_name` (`email`) KEY_BLOCK_SIZE=35 USING HASH;

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`) KEY_BLOCK_SIZE=35 USING HASH;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `designer_history`
--
ALTER TABLE `designer_history`
  MODIFY `designerorder_no` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100002;

--
-- AUTO_INCREMENT for table `rental_history`
--
ALTER TABLE `rental_history`
  MODIFY `rental_number` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1100006;

--
-- AUTO_INCREMENT for table `rental_info`
--
ALTER TABLE `rental_info`
  MODIFY `shop_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `safety_credentials`
--
ALTER TABLE `safety_credentials`
  ADD CONSTRAINT `fk_foreign_key_name` FOREIGN KEY (`email`) REFERENCES `admin` (`username`);
  
  --
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `loginform`
--

CREATE TABLE `loginform` (
  `id` int(11) NOT NULL,
  `user` varchar(25) NOT NULL,
  `pass` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loginform`
--

INSERT INTO `loginform` (`id`, `user`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(150) NOT NULL,
  `product_price` int(5) NOT NULL,
  `product_qty` int(5) NOT NULL,
  `product_image` varchar(500) NOT NULL,
  `product_category` varchar(500) NOT NULL,
  `product_desc` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `loginform`
--
ALTER TABLE `loginform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `loginform`
--
ALTER TABLE `loginform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
