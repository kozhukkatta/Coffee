-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2025 at 05:36 PM
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
-- Database: `coffee`
--

-- --------------------------------------------------------

--
-- Table structure for table `additional`
--

CREATE TABLE `additional` (
  `aid` int(11) NOT NULL,
  `aname` varchar(255) NOT NULL,
  `aprice` int(11) DEFAULT NULL,
  `userid` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `additional`
--

INSERT INTO `additional` (`aid`, `aname`, `aprice`, `userid`, `status`) VALUES
(1, 'Butter', 15, '', 1),
(2, ' Cinnamon', 30, '', 1),
(3, 'Egg', 10, '', 1),
(4, 'Honey', 20, '', 1),
(5, 'Coconut milk', 40, '', 1),
(6, 'Condensed milk', 60, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `oid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `aid` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cid` int(11) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `userid` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cid`, `cname`, `userid`, `status`) VALUES
(3, 'Arabica', NULL, 1),
(4, 'Robusta', NULL, 1),
(5, 'Liberica', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` int(11) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `pcat` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` int(30) NOT NULL,
  `pimage` varchar(255) NOT NULL,
  `userid` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `pname`, `pcat`, `description`, `price`, `pimage`, `userid`, `status`) VALUES
(1, 'Typica', 3, 'clean, sweet, and complex cup profile, often featuring notes of chocolate, nuts, and spices with balanced acidity', 200, '83405356ef7b767d8507187634464b05_33a737753b170.png', '2', 1),
(2, 'Geisha', 3, 'outstanding aroma and flavour, with notes of jasmine, black tea, and tropical fruit, and for profound sweetness', 300, '6ea74f78887defffe1a2c003fce754a6_567dc1b6cb4.jpg', NULL, 1),
(3, 'Erecta', 4, 'In addition to being highly productive, these semi-wild varieties of coffee with varied phenotypic traits are known to be resistant to a variety of pests and coffee illnesses.', 250, '06d87f70f27d1eb1741503247c7639de_4627ce4acb23e386efae.png', '2', 1),
(4, 'Excelsa', 5, 'Its bright acidity and balanced body create a unique and enjoyable coffee experience. Compared to the smooth and sweet Arabica, the strong and bitter Robusta, and the smoky Liberica, Excelsa offers a distinct and complex alternative that is both refreshin', 322, 'fb9a44ddef261440a37439e3ffaf9582_00499ca3c8d313.webp', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `sid` int(11) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gstin` varchar(255) NOT NULL,
  `gmail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `simage` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`sid`, `sname`, `address`, `gstin`, `gmail`, `password`, `simage`, `status`) VALUES
(2, 'CoffeeHouse', 'Suite 420 23542 Kiehn Springs, Marceloton, FL 87306', '09AAACH7409R1ZZ', 'letiju_xumo26@hotmail.com', 'letiju_xumo26@hotmail.com', 'd9e8019bb37e5691079cdc8112795c2e_fa7cb6636e729a2f800.jpg', 1),
(3, 'coffeeshop', '450 Berge Islands, South Lakieshamouth, PA 79167', '29AAACH7409R1ZX', 'tax_ihorexa78@outlook.com', 'tax_ihorexa78@outlook.com', 'da6ceaffc864795e8008756fb37249fa_6d2acf36796325.webp', 1),
(4, 'coffeeyard', 'Esc. 963 Partida Gilberto Terán 9, Castellón de la Plana, Com 05029', '36AAACH7409R1Z2', 'wuforas_era84@mail.com', 'wuforas_era84@mail.com', '69f51c59abc52b5f4ae3d2862e329bf4_8e4cc6f7080b07b164b5.png', 1),
(5, 'Espresso', 'al. Kubica 8509, Radzionków, WM 76-274', '24AAACH7409R2Z6', 'niruy-ijase41@gmail.com', 'niruy-ijase41@gmail.com', '89959ba6e6ec9acbefd2bf637ac4739e_c64939067e5b9c892.avif', 1),
(6, 'asdasd', 'asdasd', 'dasdasd', 'asd@gmail.com', 'asd@gmail.com', '8feb1ac721226003e6d8b88df35ae438_b46ce12ac4a077e7b4fa.jpg', 1),
(7, 'Coffeeplace', 'al. Kubica 8509, Radzionków, WM 76-274', '19AAACH7409R1ZY', 'xut_ivahuka67@gmail.com', 'xut_ivahuka67@gmail.com', '48ba1c7fc8bad5dda939e8b831ba38ec_0b96261e78d41e2.webp', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `additional`
--
ALTER TABLE `additional`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `additional`
--
ALTER TABLE `additional`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
