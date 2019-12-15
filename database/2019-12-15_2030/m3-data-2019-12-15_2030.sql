-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2019 at 03:03 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `m3`
--

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `customerName`) VALUES
(1, 'Default User');

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `itemType`, `itemName`, `buyPrice`, `sellPrice`, `numberOfItem`) VALUES
(1, 0, 'Default Product', 500, 1000, -10),
(2, 1, 'Default Service', 0, 2000, 0);

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `customerId`, `itemId`, `numberOfItemSales`, `dateOfPurchase`) VALUES
(1, 1, 1, 10, '2019-12-15');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
