-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 10, 2021 at 07:10 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventaris`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `id_ruang` varchar(11) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `merek` varchar(30) NOT NULL,
  `tgl_beli` date NOT NULL,
  `kondisi_barang` enum('baik','rusak') NOT NULL,
  `jumlah_barang` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `id_ruang`, `nama_barang`, `merek`, `tgl_beli`, `kondisi_barang`, `jumlah_barang`) VALUES
(2, 'GDG', 'HP LAPTOP', 'Kursi Kayu', '2021-12-01', 'baik', '100'),
(3, '001', 'Komputer 1', 'LG', '2021-11-02', 'baik', '20'),
(4, '001', 'Tes', 'Kursi Kayu', '2021-12-09', 'baik', '100'),
(5, 'GDG', 'Tes Lagi', 'Tes ', '2021-12-10', 'baik', '12');

-- --------------------------------------------------------

--
-- Table structure for table `ruang`
--

CREATE TABLE `ruang` (
  `id` varchar(11) NOT NULL,
  `nama_ruang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ruang`
--

INSERT INTO `ruang` (`id`, `nama_ruang`) VALUES
('GDG', 'GUDANG #1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `jenis_pengguna` enum('admin','guru') NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `jenis_pengguna`, `nama`, `username`, `password`) VALUES
(1, 'admin', 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'admin', 'Luthfy Ok', 'luthfy', 'faba3e98e029c12e6e50b3c442a4afc8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`id_ruang`),
  ADD KEY `id_ruang` (`id_ruang`);

--
-- Indexes for table `ruang`
--
ALTER TABLE `ruang`
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
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
