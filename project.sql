-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2018 at 08:22 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE `survey` (
  `id` int(11) NOT NULL,
  `no_responden` int(11) NOT NULL,
  `umur` int(11) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `pendidikan_terakhir` varchar(15) NOT NULL,
  `pekerjaan_utama` varchar(15) NOT NULL,
  `tanggal` date NOT NULL,
  `jenis_pelayanan` varchar(20) NOT NULL,
  `sesuai` int(11) NOT NULL,
  `mudah` int(11) NOT NULL,
  `cepat` int(11) NOT NULL,
  `wajar` int(11) NOT NULL,
  `sesuai2` int(11) NOT NULL,
  `kompetensi` int(11) NOT NULL,
  `sopan` int(11) NOT NULL,
  `kualitas` int(11) NOT NULL,
  `pengaduan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `survey`
--

INSERT INTO `survey` (`id`, `no_responden`, `umur`, `jenis_kelamin`, `pendidikan_terakhir`, `pekerjaan_utama`, `tanggal`, `jenis_pelayanan`, `sesuai`, `mudah`, `cepat`, `wajar`, `sesuai2`, `kompetensi`, `sopan`, `kualitas`, `pengaduan`) VALUES
(1, 1, 19, 'Laki Laki', '0', '0', '0000-00-00', 'KTP', 3, 4, 3, 4, 3, 4, 3, 4, 4),
(2, 2323, 12, 'Laki Laki', '0', '0', '0000-00-00', 'KTP', 3, 3, 3, 3, 3, 3, 3, 4, 4),
(3, 2323, 12, 'Laki Laki', '0', '0', '0000-00-00', 'KTP', 3, 3, 3, 3, 3, 3, 3, 4, 4),
(4, 2323, 12, 'Laki Laki', '0', '0', '0000-00-00', 'KTP', 3, 3, 3, 3, 3, 3, 3, 4, 4),
(5, 218376, 29, 'Laki Laki', 'Diploma', 'Pelajar/Mahasis', '2018-04-05', 'KTP', 4, 4, 4, 4, 4, 4, 4, 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `level`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `survey`
--
ALTER TABLE `survey`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
