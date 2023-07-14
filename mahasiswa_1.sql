-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2023 at 06:20 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `NIM` char(9) NOT NULL,
  `hobby` varchar(225) NOT NULL,
  `prodi` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `fakultas` varchar(256) NOT NULL,
  `noTlp` varchar(20) NOT NULL,
  `jk` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `NIM`, `hobby`, `prodi`, `gambar`, `fakultas`, `noTlp`, `jk`) VALUES
(1, 'Rey Mbayang', '12345', 'Mancing', 'Informatika', 'rey.png', 'FTIB', '083112345678', 'Laki-laki'),
(2, 'Aliando Syarief', '23456', 'Sepak bola', 'Teknik Industri', 'aliandos.png', 'FTEIC', '083112345671', 'Laki-laki'),
(3, 'Adinda Azani', '34567', 'Jalan-jalan, Mancing', 'Bisnis Digital', 'dinda.png', 'FTIB', '083112345672', 'Perempuan'),
(30, 'Keqing', '12011', 'Membaca, Jalan-jalan, Mancing', 'Rekayasa Perangkat Lunak', '105784031_p0_master1200.jpg', 'FTIB', '085155011895', 'Perempuan'),
(33, 'Fahre', '24412', 'Membaca, Jalan-jalan, Mancing, Mancing', 'Informatika', 'fahre.jpg', 'FTIB', '081341242453', 'Laki-laki'),
(34, 'Suisei Hoshimachi', '12367', 'Mendengarkan musik, Bermain Game, Jalan-jalan, Mancing, Mancing', 'Bisnis Digital', 'Hoshimachi.Suisei.full.3833029.jpg', 'FTEIC', '085155011897', 'Perempuan'),
(35, 'Ezra', '12678', 'Mendengarkan musik, Bermain Game, Mancing', 'Informatika', '02035.png', 'FTIB', '081534124243', 'Laki-laki'),
(36, 'Ai Hoshinoa', '23678', 'Olahraga, Mendengarkan musik, Jalan-jalan, Mancing', 'Teknik Telekomunikasi', '02061.jpg', 'FTEIC', '081341272453', 'Perempuan'),
(37, 'Shindo Amane', '35134', 'Membaca, Mendengarkan musik, Jalan-jalan', 'Teknik Logistik', 'amanesu.jpg', 'FTEIC', '085155041897', 'Perempuan'),
(38, 'Yûho Kitazawa', '87642', 'Mendengarkan musik, Jalan-jalan, Mancing', 'Teknologi Informasi', 'yuuhoo.jpg', 'FTIB', '085155019897', 'Perempuan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
