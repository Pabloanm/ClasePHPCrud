-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2022 at 07:35 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crudcustomer`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `lastname` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `telephone` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `details` text COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `lastname`, `email`, `telephone`, `details`) VALUES
(6, 'Cacho', 'Fontana', 'cacho@fontana.com.ar', '123456', 'La pucha!'),
(9, '213', '3123', '231', '1231', '123'),
(10, '213', '3123', '231', '1231', '123'),
(11, '213', '3123', '231', '1231', '123'),
(12, '213', '3123', '231', '1231', '123'),
(13, '213', '3123', '231', '1231', '123'),
(15, 'Lennon', 'Nuñez', 'Lennon@pie.com.ar', '456465', 'Details'),
(16, 'Papito', 'Chulo', '', '', ''),
(17, 'prueba', 'klajslkf', '', '', 'Detalle de la prueba'),
(18, 'Nueva prueba', 'Puta Madre', 'prueba@nueva.com.ar', '4564564', 'Este es el detalle'),
(20, 'Delia', 'idontknow', '44654', '123123', '6667');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
