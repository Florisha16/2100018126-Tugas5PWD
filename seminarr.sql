-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2024 at 06:33 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seminarr`
--

-- --------------------------------------------------------

--
-- Table structure for table `registrasi`
--

CREATE TABLE `registrasi` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `institusi` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `is_deleted` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registrasi`
--

INSERT INTO `registrasi` (`id`, `email`, `nama`, `institusi`, `country`, `address`, `is_deleted`) VALUES
(1, 'florisha@gmail.com', 'Nur Florisha', 'UAD', 'Indonesia', 'Bantul\r\n', 1),
(2, 'florisha@gmail.com', 'Nur Florisha', 'UAD', 'Indonesia', 'TAMANAN\r\n', 0),
(3, 'budi@gmail.com', 'Budi Santoso', 'UAD', 'INDONESIA', 'Yogyakarta\r\n', 1),
(4, 'rifman@gmail.com', 'Rifman Naragga', 'UAD', 'INDONESIA', 'Imogiri\r\n', 0),
(5, 'rizka.2004putriananda@gmail.com', 'Rizka Putri', 'UAD', 'Indonesia', 'Tamanan\r\n', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registrasi`
--
ALTER TABLE `registrasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
