-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2020 at 08:49 PM
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
-- Constraints for dumped tables
--

--
-- Constraints for table `safety_credentials`
--
ALTER TABLE `safety_credentials`
  ADD CONSTRAINT `fk_foreign_key_name` FOREIGN KEY (`email`) REFERENCES `admin` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
