-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2023 at 05:20 PM
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
-- Database: `uasweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `id_testimoni` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `kesan` varchar(250) NOT NULL,
  `foto` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`id_testimoni`, `nama`, `tempat`, `kesan`, `foto`) VALUES
(1, 'Angga Risky', 'Ubud', '“Itu luar biasa dan saya tidak bisa berhenti untuk mengatakan wohooo untuk setiap momen”', 'members-1.png'),
(2, 'Shayna', 'Nusa Penida', '“Perjalanannya luar biasa dan saya melihat sesuatu yang indah di pulau itu yang membuat saya ingin belajar lebih banyak”', 'members-2.png'),
(3, 'Shabrina', 'Karimun Jawa', '“Saya suka saat ombak berguncang lebih keras — saya juga takut”', 'members-3.png'),
(5, 'Avrians', 'Bali', 'Tempat impian', 'members-4.png'),
(10, 'Joko Susilo', 'Kota Bandung', 'Bagus Banget  kota bandung ini', 'members-2.png'),
(11, 'Avriansyah Bahtiar', 'Semarang', 'Semangat bagus banget banyak makanan dan tempat yang bersejarah', 'members-1.png'),
(15, 'Kevin sanjaya', 'Kuta Bali', 'Jaih', 'members-4.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id_testimoni`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id_testimoni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
