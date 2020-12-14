-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2020 at 01:40 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reklame`
--

-- --------------------------------------------------------

--
-- Table structure for table `biiboard`
--

CREATE TABLE `biiboard` (
  `id_billboard` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `tanggal_pasang` date NOT NULL,
  `tanggal_ex` date NOT NULL,
  `npwp` varchar(128) NOT NULL,
  `penyewa` varchar(128) NOT NULL,
  `biro` varchar(128) NOT NULL,
  `foto` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `id_lokasi` int(11) NOT NULL,
  `id_pemilik` int(8) NOT NULL,
  `nama_lok` varchar(128) NOT NULL,
  `alamat_lok` varchar(128) NOT NULL,
  `lat` varchar(128) NOT NULL,
  `lng` varchar(128) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`id_lokasi`, `id_pemilik`, `nama_lok`, `alamat_lok`, `lat`, `lng`, `status`) VALUES
(17, 21, '11', '11', '1.1147831252686538', '104.00100236347657', 0),
(18, 15, '55', '5', '1.1118654327647834', '104.01954179218751', 0);

-- --------------------------------------------------------

--
-- Table structure for table `reklame`
--

CREATE TABLE `reklame` (
  `id_reklame` int(32) NOT NULL,
  `id_penyewa` int(32) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `nama_iklan` varchar(128) NOT NULL,
  `start` date DEFAULT NULL,
  `end` date DEFAULT NULL,
  `lat` varchar(10) NOT NULL,
  `lon` varchar(10) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `lokasi` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reklame`
--

INSERT INTO `reklame` (`id_reklame`, `id_penyewa`, `alamat`, `nama_iklan`, `start`, `end`, `lat`, `lon`, `gambar`, `lokasi`) VALUES
(5, 0, 'tes', '11', NULL, NULL, '0.70019', '127.41712', 'error.PNG', ''),
(6, 0, '', '22', NULL, NULL, '0.64269', '127.39926', 'darul.PNG', ''),
(7, 0, '', '33', NULL, NULL, '0.69933', '127.44085', 'leaflet.PNG', ''),
(8, 0, '', '44', NULL, NULL, '0.63719', '128.02643', 'covid_per1000.PNG', ''),
(9, 0, '', '55', NULL, NULL, '0.69847', '127.41597', 'heatmap.PNG', ''),
(11, 23, 'Alamat', 'Nama', NULL, NULL, '0.69315', '127.41485', 'DSCF6621.JPG', 'volvo'),
(12, 23, 'Seraya', 'Kampung Seraya', NULL, NULL, '1.13661', '104.02938', 'darul.PNG', 'saab'),
(13, 23, 'kampung', 'tes lagi', NULL, NULL, '1.10320', '104.03666', 'RS_Mapping.PNG', 'volvo'),
(14, 23, 'batam', 'Baloi', '2020-12-07', '2021-01-07', '1.10500', '104.03641', '.PNG', ''),
(15, 0, '', 'asd', NULL, NULL, '0.69839', '127.44201', 'error.PNG', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `phone` varchar(128) NOT NULL,
  `foto` varchar(128) NOT NULL,
  `perusahaan` varchar(32) NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `email`, `password`, `nama`, `alamat`, `phone`, `foto`, `perusahaan`, `level`) VALUES
(22, 'maudi', '$2y$10$mNbOGvhcqNcSmy0eRZO03e/SlXO4eFY1OplqaKvSsg0B7sWaDaTPm', 'Admin', '', '08123123123', 'default.png', '', 0),
(23, 'reza', '$2y$10$JgZWfT0e5cRirJNR4uONzuu684U.VoN.u/TJLnG7qKA0xSp9vajz2', 'Reza', '', '123123', 'default.png', '', 1),
(24, 'coba@coba', '$2y$10$.RIC.60vQDQTBkRhVubqou32nzdmiiUjDBLhkdOEPE9D8hgnPgtfu', 'coba', 'bengkong', '80123', 'default.png', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biiboard`
--
ALTER TABLE `biiboard`
  ADD PRIMARY KEY (`id_billboard`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- Indexes for table `reklame`
--
ALTER TABLE `reklame`
  ADD PRIMARY KEY (`id_reklame`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biiboard`
--
ALTER TABLE `biiboard`
  MODIFY `id_billboard` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id_lokasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `reklame`
--
ALTER TABLE `reklame`
  MODIFY `id_reklame` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
