-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2023 at 09:45 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_alocaliso`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbadmin`
--

CREATE TABLE `tbadmin` (
  `id` int(11) NOT NULL,
  `nome` varchar(10) NOT NULL,
  `email` varchar(150) NOT NULL,
  `senha` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbadmin`
--

INSERT INTO `tbadmin` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'Admin', 'adm@alocaliso.com', 123);

-- --------------------------------------------------------

--
-- Table structure for table `tbcarros`
--

CREATE TABLE `tbcarros` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` varchar(255) NOT NULL,
  `descr` varchar(255) NOT NULL,
  `marca` varchar(150) NOT NULL,
  `modelo` varchar(150) NOT NULL,
  `ano` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbcarros`
--

INSERT INTO `tbcarros` (`id`, `img`, `descr`, `marca`, `modelo`, `ano`) VALUES
(38, 'carro1.jpg', '100.00', 'Audi', 'A3', '2001'),
(39, 'carro2.jpg', '93.00', 'Chevrolet', 'Chevet', '2000'),
(40, 'carro3.jpg', '70.00', 'FIAT', 'Palio', '2000'),
(41, 'carro4.jpg', '79.00', 'FIAT', 'Tempra', '2000'),
(42, 'carro5.jpg', '40.00', 'Volkswagen', 'Fusca', '1997'),
(43, 'carro6.jpg', '110.00', 'Volkswagen', 'Gol G4', '2005'),
(44, 'carro1.jpg', '130.00', 'Audi', 'A3', '2001'),
(47, 'carro6.jpg', '5000.00', 'Alabunda', 'Che', '2050'),
(48, 'carro5.jpg', '5000.00', 'Serjippe', 'duasrodas', '2050');

-- --------------------------------------------------------

--
-- Table structure for table `tbclientes`
--

CREATE TABLE `tbclientes` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `senha` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbclientes`
--

INSERT INTO `tbclientes` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'Ademir', 'destroilombada@gmai.com', '123'),
(4, 'Menor da Quebrada', 'bigodinralin@gmai.com', '1234'),
(5, 'Comedor de Coxinha', 'gulosoaberto@gmail.com', '1234'),
(6, 'Denta Monta', 'denta@gmai.com', '123'),
(7, 'Ricardos', 'via_tura@gmail.com', '123'),
(8, 'Frigeels Gelado', 'bebaawa@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbadmin`
--
ALTER TABLE `tbadmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbcarros`
--
ALTER TABLE `tbcarros`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbclientes`
--
ALTER TABLE `tbclientes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbadmin`
--
ALTER TABLE `tbadmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbcarros`
--
ALTER TABLE `tbcarros`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `tbclientes`
--
ALTER TABLE `tbclientes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
