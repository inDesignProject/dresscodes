-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2016 at 12:55 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dresscodes`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_admin`
--

CREATE TABLE `db_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `fullname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_admin`
--

INSERT INTO `db_admin` (`id_admin`, `username`, `password`, `fullname`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `db_product`
--

CREATE TABLE `db_product` (
  `id_product` int(11) NOT NULL,
  `title_1` varchar(45) NOT NULL,
  `title_2` varchar(45) NOT NULL,
  `slug` varchar(45) NOT NULL,
  `brand` varchar(45) NOT NULL,
  `description` text NOT NULL,
  `price_1` int(11) NOT NULL,
  `price_2` int(11) NOT NULL,
  `soldout` enum('Y','N') NOT NULL DEFAULT 'N',
  `sold` int(11) NOT NULL,
  `date_added` datetime NOT NULL,
  `date_edited` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_product`
--

INSERT INTO `db_product` (`id_product`, `title_1`, `title_2`, `slug`, `brand`, `description`, `price_1`, `price_2`, `soldout`, `sold`, `date_added`, `date_edited`) VALUES
(1, 'Test 12', '', 'test-12', 'Ini Brand', 'Ini Description<br>', 1000000, 800000, 'N', 0, '2016-02-13 10:46:06', '2016-02-13 12:50:20');

-- --------------------------------------------------------

--
-- Table structure for table `db_product_image`
--

CREATE TABLE `db_product_image` (
  `id_product_image` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `image` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_product_image`
--

INSERT INTO `db_product_image` (`id_product_image`, `id_product`, `image`) VALUES
(2, 1, 'test-1.jpg'),
(3, 1, 'test-1.jpeg'),
(4, 1, 'test-12.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_admin`
--
ALTER TABLE `db_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `db_product`
--
ALTER TABLE `db_product`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `db_product_image`
--
ALTER TABLE `db_product_image`
  ADD PRIMARY KEY (`id_product_image`),
  ADD KEY `fk_db_product_image_db_product_idx` (`id_product`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db_admin`
--
ALTER TABLE `db_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `db_product`
--
ALTER TABLE `db_product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `db_product_image`
--
ALTER TABLE `db_product_image`
  MODIFY `id_product_image` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `db_product_image`
--
ALTER TABLE `db_product_image`
  ADD CONSTRAINT `fk_db_product_image_db_product` FOREIGN KEY (`id_product`) REFERENCES `db_product` (`id_product`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
