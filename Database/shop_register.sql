-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2025 at 10:35 AM
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
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `shop_register`
--

CREATE TABLE `shop_register` (
  `id` int(11) NOT NULL,
  `F_name` varchar(255) NOT NULL,
  `U_name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` int(11) NOT NULL,
  `City` varchar(255) NOT NULL,
  `Pin` int(11) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shop_register`
--

INSERT INTO `shop_register` (`id`, `F_name`, `U_name`, `Email`, `Phone`, `City`, `Pin`, `Password`, `Gender`) VALUES
(1, 'DEVICHARAN DASARI', 'Monkey', 'devicharandasari123@gmail.com', 2147483647, 'Wankaner', 363621, '@MonkeyD1', 'male'),
(2, 'Charn', 'monke', 'devicharan@gmail.com', 988578457, 'Gnajer', 45754, '@MonkeyD', 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shop_register`
--
ALTER TABLE `shop_register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shop_register`
--
ALTER TABLE `shop_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
