-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2024 at 10:34 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `facility_care`
--

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl_lapor` date NOT NULL DEFAULT current_timestamp(),
  `fasilitas` varchar(50) NOT NULL,
  `pilihan_tempat` varchar(200) NOT NULL,
  `fasilitas_rusak` varchar(200) NOT NULL,
  `alamat` text NOT NULL,
  `foto` text NOT NULL,
  `keterangan` text NOT NULL,
  `status_laporan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id`, `nama`, `tgl_lapor`, `fasilitas`, `pilihan_tempat`, `fasilitas_rusak`, `alamat`, `foto`, `keterangan`, `status_laporan`) VALUES
(1, 'Raihana', '2024-12-08', 'Trans Koetaradja', 'Darussalam', 'halte', 'darussalam', 'Logo-Facility_Care.png', 'bangku halte ilang', ''),
(2, 'Ilham', '2024-12-08', 'Pelabuhan', 'Ulee Lheue', 'Tempat Antri', 'pelabuhan ulele', 'Facility Care1.png', 'bangku hilang', ''),
(3, 'Max', '2024-12-08', 'Pelabuhan', 'Ulee Lheue', 'Tempat Antri', 'pelabuhan ulele', 'Facility Care1.png', 'bangku hilang', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(25) NOT NULL,
  `hak_akses` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `hak_akses`) VALUES
(1, 'Admin', 'admin', '123', 'admin'),
(2, 'Tara', 'tara', '123', 'pegawai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
