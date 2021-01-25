-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2021 at 06:09 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uktmahasiswaupnvj`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `NIM` int(10) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Thn_Ajaran` varchar(10) NOT NULL,
  `Semester` varchar(10) NOT NULL,
  `Jns_Tagihan` varchar(5) NOT NULL,
  `Cicilan_ke` int(5) NOT NULL,
  `Nominal` int(10) NOT NULL,
  `Stat_Bayar` varchar(10) NOT NULL,
  `Tgl_Bayar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`NIM`, `Nama`, `Thn_Ajaran`, `Semester`, `Jns_Tagihan`, `Cicilan_ke`, `Nominal`, `Stat_Bayar`, `Tgl_Bayar`) VALUES
(1910501047, 'Alya Latifah Putri Achmad', '2021/2022', 'Ganjil', 'UKT', 1, 3400000, 'LUNAS', '2021-01-16'),
(1910501056, 'Tivani Yona Silvia', '2021/2022', 'Ganjil', 'UKT', 1, 6400000, 'LUNAS', '2021-01-15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`NIM`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
