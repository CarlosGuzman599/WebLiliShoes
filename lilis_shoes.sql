-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2021 at 08:49 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lilis_shoes`
--

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(4) NOT NULL,
  `nombre_producto` varchar(40) NOT NULL,
  `precio_producto` int(4) NOT NULL,
  `talla_producto` varchar(20) NOT NULL,
  `img` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`id_producto`, `nombre_producto`, `precio_producto`, `talla_producto`, `img`) VALUES
(1, 'zapato cafe', 500, '23', '001.jpg'),
(2, 'blusa roja', 350, 'md', '002.jpg\r'),
(3, 'zapato negro', 300, '23', '003.jpg\r'),
(4, 'zapato negro', 350, '22', '004.jpg\r'),
(5, 'zapato negro', 250, '21', '005.jpg\r'),
(6, 'bota baquera', 700, '25', '006.jpg\r'),
(7, 'bota baquera', 900, '26', '007.jpg\r'),
(8, 'guarache dama', 450, '23', '008.jpg\r'),
(9, 'zapato azul marino', 500, '24', '009.jpg\r'),
(10, 'zapatilla tacon alto', 500, '23', '010.jpg\r'),
(11, 'zapatilla tacon alto', 430, '23', '011.jpg\r'),
(12, 'zapatilla tacon alto', 435, '22', '012.jpg\r'),
(13, 'zapatilla cafe', 422, '22', '013.jpg\r'),
(14, 'zapato alto cafe', 450, '25', '014.jpg'),
(15, 'tenis negro alto', 600, '27', '015.jpg\r'),
(16, 'tenis rojo adiadas', 750, '23', '016.jpg\r'),
(17, 'tenis negro pirma', 900, '27', '017.jpg\r'),
(18, 'tenis tinto adidas', 800, '26', '018.jpg\r'),
(19, 'conjunto blusa falda', 600, 'ch', '019.jpg\r');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
