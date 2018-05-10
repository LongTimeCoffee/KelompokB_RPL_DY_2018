-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2018 at 09:08 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ListMenu`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `jenis_menu` varchar(70) NOT NULL,
  `harga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `jenis_menu`, `harga`) VALUES
(1, 'burger', 15000),
(2, 'omlet', 13000),
(3, 'mie goreng', 12000),
(4, 'mie rebus', 12000),
(5, 'potato', 10000),
(6, 'nougat', 10000),
(7, 'sosis BBQ', 10000),
(8, 'indomie goreng', 9000),
(9, 'pisang keju', 8000),
(10, 'risol', 8000),
(11, 'tea hijau susu', 13000),
(12, 'coffee latte', 12000),
(13, 'tea tarik', 10000),
(14, 'tea hijau', 10000),
(15, 'jus mangga', 10000),
(16, 'jus apel', 10000),
(17, 'jus alvokad', 10000),
(18, 'jus jeruk', 10000),
(19, 'cappucino', 8000),
(20, 'nutrisari', 7000),
(21, 'Mie Goreng + Telur + Jus Mangga', 23000),
(22, 'Pisang Keju + Cream Coklat + Jus Jeruk2', 22000),
(23, 'Burger + Potato + Jus Alvukad', 30000),
(24, 'Potato + Mayonnaise + Coffee Latte', 25000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
