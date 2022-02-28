-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 03, 2022 at 12:10 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wad`
--

-- --------------------------------------------------------

--
-- Table structure for table `ahsan@gmail.com`
--

CREATE TABLE `ahsan@gmail.com` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ahsan@gmail.com`
--

INSERT INTO `ahsan@gmail.com` (`id`, `name`, `quantity`, `price`, `total`) VALUES
(1, 'BEEF BURGER 3', 1, 700, 700),
(2, 'BEEF BURGER 1', 1, 500, 500);

-- --------------------------------------------------------

--
-- Table structure for table `ali@gmail`
--

CREATE TABLE `ali@gmail` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cdetails`
--

CREATE TABLE `cdetails` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(250) NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `corder`
--

CREATE TABLE `corder` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `adress` varchar(100) NOT NULL,
  `phone` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `corder`
--

INSERT INTO `corder` (`id`, `name`, `adress`, `phone`) VALUES
(1, 'ali', 'nawab town', 304222312),
(2, 'awais', 'ali town lahore', 863284),
(3, 'reyan', 'johar town', 830927498),
(4, 'farooq', 'nawab town lahore', 3298479),
(5, 'umair', '15b', 123);

-- --------------------------------------------------------

--
-- Table structure for table `farooq`
--

CREATE TABLE `farooq` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `farooq`
--

INSERT INTO `farooq` (`id`, `name`, `quantity`, `price`, `total`) VALUES
(4, 'BEEF BURGER 2', 1, 600, 600);

-- --------------------------------------------------------

--
-- Table structure for table `farooq@gmail.com`
--

CREATE TABLE `farooq@gmail.com` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `myorder`
--

CREATE TABLE `myorder` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `quantity` int(11) DEFAULT 0,
  `price` float NOT NULL DEFAULT 0,
  `total` float NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `myproducts`
--

CREATE TABLE `myproducts` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `price` double(9,2) NOT NULL,
  `image` varchar(250) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `myproducts`
--

INSERT INTO `myproducts` (`id`, `name`, `price`, `image`, `description`) VALUES
(1, 'BEEF BURGER 1', 500.00, './assets/cardimg1.png', 'A hamburger is not made of ham but of ground-up beef, shaped into a patty,which is then grilled and placed between the two halves of a sesame seed bun.'),
(2, 'BEEF BURGER 2', 600.00, './assets/cardimg2.png', 'A hamburger is not made of ham but of ground-up beef, shaped into a patty,which is then grilled and placed between the two halves of a sesame seed bun.'),
(3, 'BEEF BURGER 3', 700.00, './assets/cardimg3.png', 'A hamburger is not made of ham but of ground-up beef, shaped into a patty,which is then grilled and placed between the two halves of a sesame seed bun.');

-- --------------------------------------------------------

--
-- Table structure for table `mytable`
--

CREATE TABLE `mytable` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mytable`
--

INSERT INTO `mytable` (`id`, `name`, `email`) VALUES
(1, 'umair', '19umair@gmail.com'),
(2, 'ali', 'ali@gmail.com'),
(3, 'awais', 'awais@ucp'),
(7, 'hasnat', 'hasnat@ucp1'),
(12, 'umair', 'umairboi20@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `shaheen khan afridi`
--

CREATE TABLE `shaheen khan afridi` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `umair@gmail`
--

CREATE TABLE `umair@gmail` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `umer@gmail.com`
--

CREATE TABLE `umer@gmail.com` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `umer@gmail.com`
--

INSERT INTO `umer@gmail.com` (`id`, `name`, `quantity`, `price`, `total`) VALUES
(1, 'BEEF BURGER 2', 1, 600, 600);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ahsan@gmail.com`
--
ALTER TABLE `ahsan@gmail.com`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ali@gmail`
--
ALTER TABLE `ali@gmail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cdetails`
--
ALTER TABLE `cdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `corder`
--
ALTER TABLE `corder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `farooq`
--
ALTER TABLE `farooq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `farooq@gmail.com`
--
ALTER TABLE `farooq@gmail.com`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `myorder`
--
ALTER TABLE `myorder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `myproducts`
--
ALTER TABLE `myproducts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mytable`
--
ALTER TABLE `mytable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shaheen khan afridi`
--
ALTER TABLE `shaheen khan afridi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `umair@gmail`
--
ALTER TABLE `umair@gmail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `umer@gmail.com`
--
ALTER TABLE `umer@gmail.com`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ahsan@gmail.com`
--
ALTER TABLE `ahsan@gmail.com`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ali@gmail`
--
ALTER TABLE `ali@gmail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cdetails`
--
ALTER TABLE `cdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `corder`
--
ALTER TABLE `corder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `farooq`
--
ALTER TABLE `farooq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `farooq@gmail.com`
--
ALTER TABLE `farooq@gmail.com`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `myorder`
--
ALTER TABLE `myorder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `myproducts`
--
ALTER TABLE `myproducts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mytable`
--
ALTER TABLE `mytable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `shaheen khan afridi`
--
ALTER TABLE `shaheen khan afridi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `umair@gmail`
--
ALTER TABLE `umair@gmail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `umer@gmail.com`
--
ALTER TABLE `umer@gmail.com`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
