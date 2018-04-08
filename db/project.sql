-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 07, 2018 at 05:54 PM
-- Server version: 5.7.21-0ubuntu0.16.04.1
-- PHP Version: 7.0.28-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `pendidikan_terakhir` varchar(50) NOT NULL,
  `pekerjaan_utama` varchar(50) NOT NULL,
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
(1, 3371, 20, 'Perempuan', 'SLTA Sederajat', 'Lainnya', '2018-03-13', 'KTP', 3, 4, 3, 3, 4, 4, 4, 4, 3),
(2, 1687, 28, 'Laki-laki', 'S1', 'Wiraswasta/Usahawan', '2018-03-07', 'KTP', 3, 4, 3, 4, 3, 3, 4, 3, 4),
(3, 107, 23, 'Laki-laki', 'S1', 'Pegawai Swasta', '2018-03-01', 'KTP', 4, 3, 3, 4, 4, 3, 3, 3, 4),
(4, 1029, 21, 'Laki-laki', 'S2 Keatas', 'Pegawai Swasta', '2018-03-27', 'KTP', 4, 4, 4, 3, 3, 3, 4, 4, 3),
(5, 2542, 23, 'Perempuan', 'SLTA Sederajat', 'Lainnya', '2018-03-24', 'KTP', 3, 3, 3, 4, 4, 3, 4, 3, 3),
(6, 1732, 24, 'Perempuan', 'SLTA Sederajat', 'Lainnya', '2018-03-10', 'KTP', 3, 3, 4, 3, 4, 4, 4, 4, 4),
(7, 2441, 28, 'Perempuan', 'S1', 'Lainnya', '2018-03-26', 'KTP', 4, 4, 3, 3, 3, 4, 3, 4, 3),
(8, 1961, 26, 'Laki-laki', 'SLTA Sederajat', 'Wiraswasta/Usahawan', '2018-03-19', 'KTP', 3, 4, 3, 4, 3, 3, 4, 3, 3),
(9, 2723, 20, 'Laki-laki', 'S1', 'Pegawai Swasta', '2018-03-23', 'KTP', 3, 4, 4, 4, 3, 3, 3, 3, 4),
(10, 154, 22, 'Laki-laki', 'SD Kebawah', 'Pegawai Swasta', '2018-03-21', 'KTP', 4, 3, 3, 4, 3, 3, 3, 4, 4),
(11, 1728, 22, 'Perempuan', 'S1', 'Lainnya', '2018-03-11', 'KTP', 3, 3, 3, 3, 4, 3, 4, 3, 4),
(12, 2329, 29, 'Laki-laki', 'S2 Keatas', 'Pelajar/Mahasiswa', '2018-03-28', 'KTP', 3, 3, 3, 4, 4, 3, 3, 3, 3),
(13, 2599, 21, 'Perempuan', 'D1/D2/23', 'PNS/TNI/POLRI', '2018-03-21', 'KTP', 3, 4, 3, 4, 4, 3, 4, 4, 3),
(14, 2894, 26, 'Laki-laki', 'SLTA Sederajat', 'Pelajar/Mahasiswa', '2018-03-28', 'KTP', 4, 4, 4, 3, 4, 3, 4, 3, 4),
(15, 1150, 26, 'Laki-laki', 'SLTA Sederajat', 'Pelajar/Mahasiswa', '2018-03-23', 'KTP', 3, 3, 3, 3, 4, 3, 3, 4, 3),
(16, 358, 26, 'Laki-laki', 'D1/D2/23', 'PNS/TNI/POLRI', '2018-03-10', 'KTP', 4, 4, 4, 3, 3, 4, 3, 4, 4),
(17, 81, 28, 'Perempuan', 'SLTA Sederajat', 'Lainnya', '2018-03-21', 'KTP', 3, 4, 4, 4, 3, 4, 3, 4, 4),
(18, 2354, 27, 'Laki-laki', 'S2 Keatas', 'Pelajar/Mahasiswa', '2018-03-25', 'KTP', 4, 3, 3, 3, 3, 4, 4, 4, 3),
(19, 2261, 24, 'Laki-laki', 'SLTA Sederajat', 'Pelajar/Mahasiswa', '2018-03-11', 'KTP', 3, 3, 4, 3, 4, 4, 4, 3, 3),
(20, 1094, 19, 'Laki-laki', 'S1', 'Pegawai Swasta', '2018-03-15', 'KTP', 4, 4, 3, 4, 4, 3, 3, 3, 4),
(21, 3118, 22, 'Perempuan', 'D1/D2/23', 'PNS/TNI/POLRI', '2018-03-22', 'KTP', 3, 3, 4, 3, 4, 3, 3, 4, 4),
(22, 888, 25, 'Laki-laki', 'D1/D2/23', 'Pegawai Swasta', '2018-03-07', 'KTP', 3, 3, 4, 4, 3, 4, 3, 3, 4),
(23, 3088, 18, 'Perempuan', 'SLTP Sederajat', 'Pelajar/Mahasiswa', '2018-03-25', 'KTP', 4, 3, 3, 4, 3, 4, 3, 4, 4),
(24, 3684, 25, 'Perempuan', 'SLTA Sederajat', 'Wiraswasta/Usahawan', '2018-03-17', 'KTP', 4, 3, 3, 3, 3, 3, 3, 3, 4),
(25, 886, 29, 'Perempuan', 'SD Kebawah', 'PNS/TNI/POLRI', '2018-03-27', 'KTP', 4, 3, 3, 3, 3, 3, 4, 3, 4),
(26, 3763, 29, 'Laki-laki', 'SLTA Sederajat', 'Lainnya', '2018-03-22', 'KTP', 3, 3, 3, 4, 4, 3, 4, 4, 4),
(27, 2502, 27, 'Laki-laki', 'SD Kebawah', 'PNS/TNI/POLRI', '2018-03-05', 'KTP', 3, 3, 4, 3, 3, 4, 3, 3, 3),
(28, 17, 24, 'Perempuan', 'S1', 'Pegawai Swasta', '2018-03-15', 'KTP', 3, 4, 3, 4, 4, 4, 3, 4, 4),
(29, 416, 19, 'Laki-laki', 'S2 Keatas', 'PNS/TNI/POLRI', '2018-03-15', 'KTP', 4, 4, 3, 4, 3, 3, 3, 3, 3),
(30, 2216, 20, 'Perempuan', 'D1/D2/23', 'Lainnya', '2018-03-16', 'KTP', 3, 3, 3, 3, 4, 3, 4, 4, 3),
(31, 1715, 17, 'Perempuan', 'D1/D2/23', 'Pegawai Swasta', '2018-03-11', 'KTP', 3, 4, 4, 4, 3, 3, 3, 3, 4),
(32, 1304, 22, 'Laki-laki', 'S2 Keatas', 'PNS/TNI/POLRI', '2018-03-11', 'KTP', 4, 3, 4, 3, 4, 3, 4, 4, 3),
(33, 83, 30, 'Perempuan', 'SLTP Sederajat', 'PNS/TNI/POLRI', '2018-03-20', 'KTP', 3, 3, 3, 4, 3, 4, 4, 4, 4),
(34, 1695, 29, 'Perempuan', 'SLTP Sederajat', 'Pelajar/Mahasiswa', '2018-03-09', 'KTP', 4, 3, 3, 3, 4, 3, 4, 3, 3),
(35, 2264, 20, 'Laki-laki', 'D1/D2/23', 'Pegawai Swasta', '2018-03-19', 'KTP', 4, 3, 4, 4, 3, 4, 3, 4, 3),
(36, 1937, 26, 'Laki-laki', 'S1', 'Lainnya', '2018-03-22', 'KTP', 4, 3, 3, 4, 4, 3, 3, 4, 3),
(37, 3950, 17, 'Perempuan', 'S1', 'Pelajar/Mahasiswa', '2018-03-28', 'KTP', 3, 3, 3, 4, 4, 3, 3, 4, 3),
(38, 587, 20, 'Laki-laki', 'SD Kebawah', 'Pegawai Swasta', '2018-03-09', 'KTP', 3, 3, 3, 4, 3, 4, 4, 3, 4),
(39, 1315, 22, 'Laki-laki', 'S1', 'Lainnya', '2018-03-25', 'KTP', 4, 3, 4, 3, 3, 4, 3, 3, 4),
(40, 2322, 20, 'Laki-laki', 'SD Kebawah', 'Pelajar/Mahasiswa', '2018-03-21', 'KTP', 4, 3, 3, 4, 4, 3, 4, 4, 4),
(41, 2979, 26, 'Perempuan', 'S2 Keatas', 'PNS/TNI/POLRI', '2018-03-03', 'KTP', 3, 3, 4, 3, 4, 3, 3, 3, 3),
(42, 331, 29, 'Perempuan', 'SLTP Sederajat', 'Pelajar/Mahasiswa', '2018-03-07', 'KTP', 3, 4, 4, 4, 3, 4, 4, 3, 3),
(43, 910, 28, 'Laki-laki', 'S2 Keatas', 'Pegawai Swasta', '2018-03-02', 'KTP', 4, 4, 4, 4, 3, 3, 4, 3, 3),
(44, 3585, 29, 'Laki-laki', 'D1/D2/23', 'Pegawai Swasta', '2018-03-13', 'KTP', 4, 4, 3, 4, 4, 3, 4, 3, 4),
(45, 3012, 30, 'Laki-laki', 'D1/D2/23', 'PNS/TNI/POLRI', '2018-03-23', 'KTP', 3, 4, 4, 4, 4, 4, 3, 4, 4),
(46, 1176, 29, 'Laki-laki', 'SLTA Sederajat', 'Pelajar/Mahasiswa', '2018-03-07', 'KTP', 4, 4, 3, 4, 3, 4, 3, 4, 3),
(47, 3194, 20, 'Perempuan', 'SLTP Sederajat', 'Lainnya', '2018-03-18', 'KTP', 4, 4, 3, 4, 3, 4, 4, 3, 4),
(48, 341, 23, 'Perempuan', 'SLTP Sederajat', 'Lainnya', '2018-03-21', 'KTP', 3, 4, 4, 3, 3, 4, 4, 4, 3),
(49, 2254, 22, 'Perempuan', 'SLTP Sederajat', 'Wiraswasta/Usahawan', '2018-03-15', 'KTP', 3, 3, 4, 4, 4, 4, 4, 3, 3),
(50, 962, 21, 'Perempuan', 'S1', 'Lainnya', '2018-03-15', 'KTP', 3, 3, 3, 4, 3, 4, 4, 4, 3),
(51, 838, 26, 'Perempuan', 'S1', 'Wiraswasta/Usahawan', '2018-03-27', 'KTP', 4, 4, 4, 3, 3, 3, 4, 3, 3),
(52, 2171, 24, 'Laki-laki', 'S2 Keatas', 'Wiraswasta/Usahawan', '2018-03-09', 'KTP', 4, 4, 4, 4, 3, 4, 4, 3, 4),
(53, 2644, 25, 'Perempuan', 'SD Kebawah', 'Lainnya', '2018-03-12', 'KTP', 3, 4, 3, 3, 4, 4, 4, 4, 3),
(54, 3371, 17, 'Laki-laki', 'S1', 'PNS/TNI/POLRI', '2018-03-12', 'KTP', 3, 4, 4, 4, 3, 3, 3, 4, 4),
(55, 2157, 29, 'Laki-laki', 'S2 Keatas', 'Lainnya', '2018-03-17', 'KTP', 4, 4, 3, 4, 3, 3, 4, 3, 4),
(56, 1570, 29, 'Laki-laki', 'D1/D2/23', 'Pelajar/Mahasiswa', '2018-03-17', 'KTP', 3, 3, 4, 3, 3, 3, 3, 4, 3),
(57, 3225, 28, 'Laki-laki', 'SLTP Sederajat', 'Pelajar/Mahasiswa', '2018-03-20', 'KTP', 4, 3, 3, 4, 3, 3, 3, 4, 3),
(58, 1033, 23, 'Laki-laki', 'D1/D2/23', 'Pelajar/Mahasiswa', '2018-03-12', 'KTP', 4, 4, 3, 4, 4, 4, 4, 3, 3),
(59, 2388, 25, 'Laki-laki', 'S2 Keatas', 'Lainnya', '2018-03-10', 'KTP', 3, 3, 4, 3, 4, 3, 3, 3, 4),
(60, 159, 26, 'Perempuan', 'S1', 'Pelajar/Mahasiswa', '2018-03-18', 'KTP', 4, 3, 3, 4, 3, 3, 4, 3, 4),
(61, 1583, 19, 'Laki-laki', 'S2 Keatas', 'Lainnya', '2018-03-25', 'KTP', 3, 4, 3, 4, 3, 4, 4, 3, 4),
(62, 3798, 30, 'Perempuan', 'SLTA Sederajat', 'PNS/TNI/POLRI', '2018-03-25', 'KTP', 3, 4, 3, 4, 3, 4, 3, 3, 3),
(63, 1211, 27, 'Perempuan', 'SD Kebawah', 'Lainnya', '2018-03-07', 'KTP', 3, 3, 3, 3, 3, 3, 4, 4, 3),
(64, 2802, 26, 'Perempuan', 'SLTA Sederajat', 'Lainnya', '2018-03-05', 'KTP', 4, 3, 3, 3, 3, 4, 4, 3, 3),
(65, 1827, 27, 'Laki-laki', 'S1', 'Pegawai Swasta', '2018-03-04', 'KTP', 3, 4, 3, 4, 4, 4, 3, 3, 3),
(66, 1679, 17, 'Laki-laki', 'S2 Keatas', 'Pelajar/Mahasiswa', '2018-03-02', 'KTP', 4, 3, 4, 4, 3, 4, 4, 4, 4),
(67, 3899, 23, 'Perempuan', 'SLTA Sederajat', 'Wiraswasta/Usahawan', '2018-03-06', 'KTP', 3, 3, 4, 4, 4, 3, 3, 4, 3),
(68, 2365, 17, 'Perempuan', 'D1/D2/23', 'Pelajar/Mahasiswa', '2018-03-05', 'KTP', 4, 3, 4, 3, 3, 3, 3, 4, 3),
(69, 1007, 27, 'Perempuan', 'D1/D2/23', 'PNS/TNI/POLRI', '2018-03-13', 'KTP', 3, 3, 3, 4, 3, 3, 3, 4, 4),
(70, 3882, 28, 'Perempuan', 'SLTA Sederajat', 'Pelajar/Mahasiswa', '2018-03-25', 'KTP', 3, 3, 4, 4, 3, 4, 3, 4, 3),
(71, 1338, 21, 'Laki-laki', 'S2 Keatas', 'Pelajar/Mahasiswa', '2018-03-08', 'KTP', 4, 4, 3, 3, 4, 4, 3, 3, 3),
(72, 822, 27, 'Perempuan', 'SD Kebawah', 'Lainnya', '2018-03-24', 'KTP', 3, 3, 3, 4, 3, 4, 3, 4, 3),
(73, 3622, 28, 'Laki-laki', 'D1/D2/23', 'Pegawai Swasta', '2018-03-15', 'KTP', 3, 3, 3, 3, 3, 4, 4, 3, 3),
(74, 877, 22, 'Laki-laki', 'SLTA Sederajat', 'Pelajar/Mahasiswa', '2018-03-27', 'KTP', 3, 3, 3, 4, 3, 3, 3, 3, 3),
(75, 2532, 19, 'Perempuan', 'S2 Keatas', 'Lainnya', '2018-03-28', 'KTP', 4, 4, 3, 3, 3, 3, 3, 3, 3),
(76, 1619, 19, 'Perempuan', 'SLTA Sederajat', 'Lainnya', '2018-03-23', 'KTP', 3, 4, 4, 3, 3, 4, 4, 4, 3),
(77, 1693, 28, 'Laki-laki', 'SLTP Sederajat', 'Pegawai Swasta', '2018-03-27', 'KTP', 4, 4, 4, 4, 4, 4, 3, 4, 4),
(78, 955, 19, 'Laki-laki', 'SLTP Sederajat', 'PNS/TNI/POLRI', '2018-03-28', 'KTP', 4, 4, 4, 3, 4, 3, 3, 4, 4),
(79, 1547, 22, 'Laki-laki', 'D1/D2/23', 'Pelajar/Mahasiswa', '2018-03-25', 'KTP', 4, 3, 3, 3, 4, 4, 3, 4, 4),
(80, 3325, 20, 'Perempuan', 'D1/D2/23', 'Lainnya', '2018-03-29', 'KTP', 3, 3, 4, 4, 3, 4, 4, 4, 3),
(81, 3848, 29, 'Perempuan', 'S2 Keatas', 'Wiraswasta/Usahawan', '2018-03-02', 'KTP', 3, 4, 3, 3, 3, 3, 3, 4, 4),
(82, 2831, 19, 'Perempuan', 'S2 Keatas', 'Lainnya', '2018-03-14', 'KTP', 3, 3, 4, 3, 3, 4, 4, 4, 3),
(83, 1479, 20, 'Laki-laki', 'SLTP Sederajat', 'Lainnya', '2018-03-16', 'KTP', 4, 3, 3, 4, 4, 4, 3, 4, 3),
(84, 1782, 26, 'Laki-laki', 'S1', 'Lainnya', '2018-03-21', 'KTP', 3, 4, 4, 4, 3, 4, 3, 4, 3),
(85, 737, 30, 'Perempuan', 'SD Kebawah', 'Pegawai Swasta', '2018-03-15', 'KTP', 3, 4, 4, 4, 3, 3, 3, 4, 3),
(86, 2917, 25, 'Laki-laki', 'S1', 'Pegawai Swasta', '2018-03-25', 'KTP', 3, 3, 4, 4, 3, 3, 4, 3, 3),
(87, 3196, 28, 'Laki-laki', 'SLTP Sederajat', 'Wiraswasta/Usahawan', '2018-03-10', 'KTP', 4, 3, 4, 3, 3, 3, 3, 3, 4),
(88, 3193, 27, 'Perempuan', 'SLTA Sederajat', 'Pegawai Swasta', '2018-03-25', 'KTP', 4, 3, 4, 3, 3, 3, 4, 4, 4),
(89, 3548, 23, 'Perempuan', 'SD Kebawah', 'Pelajar/Mahasiswa', '2018-03-23', 'KTP', 4, 4, 4, 4, 3, 3, 4, 3, 4),
(90, 990, 24, 'Laki-laki', 'SD Kebawah', 'Lainnya', '2018-03-04', 'KTP', 4, 3, 4, 3, 3, 4, 4, 4, 3),
(91, 3333, 17, 'Perempuan', 'S2 Keatas', 'Lainnya', '2018-03-24', 'KTP', 4, 3, 3, 3, 4, 3, 4, 3, 4),
(92, 605, 22, 'Perempuan', 'S2 Keatas', 'PNS/TNI/POLRI', '2018-03-09', 'KTP', 3, 4, 4, 3, 3, 3, 3, 3, 3),
(93, 3023, 30, 'Laki-laki', 'SD Kebawah', 'PNS/TNI/POLRI', '2018-03-07', 'KTP', 3, 3, 3, 3, 3, 3, 4, 3, 3),
(94, 1446, 27, 'Laki-laki', 'SLTA Sederajat', 'Pelajar/Mahasiswa', '2018-03-23', 'KTP', 4, 3, 3, 4, 4, 3, 4, 3, 4),
(95, 1548, 17, 'Perempuan', 'SLTA Sederajat', 'Lainnya', '2018-03-28', 'KTP', 4, 4, 3, 3, 4, 4, 4, 3, 4),
(96, 3529, 25, 'Perempuan', 'S2 Keatas', 'Wiraswasta/Usahawan', '2018-03-04', 'KTP', 3, 4, 3, 3, 3, 4, 4, 3, 4),
(97, 3965, 22, 'Perempuan', 'S2 Keatas', 'Pelajar/Mahasiswa', '2018-03-08', 'KTP', 3, 3, 4, 4, 4, 3, 3, 3, 4),
(98, 1125, 19, 'Perempuan', 'SD Kebawah', 'Pelajar/Mahasiswa', '2018-03-09', 'KTP', 4, 3, 4, 3, 4, 4, 3, 3, 3),
(99, 3918, 26, 'Perempuan', 'SLTP Sederajat', 'PNS/TNI/POLRI', '2018-03-22', 'KTP', 3, 3, 3, 3, 4, 3, 3, 4, 4),
(100, 1030, 24, 'Laki-laki', 'SLTA Sederajat', 'PNS/TNI/POLRI', '2018-03-15', 'KTP', 3, 4, 3, 3, 3, 3, 3, 3, 3),
(101, 603, 23, 'Laki-laki', 'SD Kebawah', 'Wiraswasta/Usahawan', '2018-03-06', 'KTP', 4, 3, 2, 4, 2, 4, 2, 2, 2),
(102, 2647, 24, 'Perempuan', 'S1', 'Pelajar/Mahasiswa', '2018-03-18', 'KTP', 3, 2, 2, 4, 2, 2, 3, 3, 3),
(103, 3707, 24, 'Laki-laki', 'SLTA Sederajat', 'Pegawai Swasta', '2018-03-10', 'KTP', 2, 4, 2, 2, 3, 4, 3, 3, 4),
(104, 1270, 21, 'Laki-laki', 'SLTP Sederajat', 'Pelajar/Mahasiswa', '2018-03-05', 'KTP', 2, 3, 4, 2, 4, 2, 2, 2, 4),
(105, 1715, 23, 'Perempuan', 'D1/D2/23', 'Lainnya', '2018-03-16', 'KTP', 4, 4, 3, 2, 2, 3, 3, 3, 4),
(106, 1723, 18, 'Perempuan', 'SLTP Sederajat', 'PNS/TNI/POLRI', '2018-03-12', 'KTP', 4, 3, 2, 4, 3, 4, 2, 4, 2),
(107, 3045, 29, 'Perempuan', 'S2 Keatas', 'PNS/TNI/POLRI', '2018-03-04', 'KTP', 3, 2, 3, 2, 3, 2, 2, 3, 2),
(108, 1792, 26, 'Perempuan', 'SLTA Sederajat', 'Pegawai Swasta', '2018-03-17', 'KTP', 3, 4, 2, 4, 2, 3, 4, 4, 3),
(109, 3694, 20, 'Laki-laki', 'SLTA Sederajat', 'PNS/TNI/POLRI', '2018-03-29', 'KTP', 3, 2, 2, 4, 3, 4, 2, 2, 4),
(110, 833, 27, 'Laki-laki', 'D1/D2/23', 'Lainnya', '2018-03-08', 'KTP', 4, 4, 2, 3, 3, 2, 3, 3, 3),
(111, 3198, 27, 'Laki-laki', 'S1', 'Lainnya', '2018-03-22', 'KTP', 3, 4, 4, 3, 3, 2, 2, 2, 3),
(112, 485, 18, 'Perempuan', 'SLTP Sederajat', 'PNS/TNI/POLRI', '2018-03-12', 'KTP', 4, 4, 4, 2, 4, 4, 3, 2, 2),
(113, 3923, 28, 'Laki-laki', 'S2 Keatas', 'Wiraswasta/Usahawan', '2018-03-27', 'KTP', 4, 2, 2, 3, 4, 4, 3, 4, 4),
(114, 3516, 27, 'Perempuan', 'S2 Keatas', 'PNS/TNI/POLRI', '2018-03-22', 'KTP', 4, 4, 2, 4, 2, 2, 3, 3, 2),
(115, 2526, 22, 'Laki-laki', 'SLTA Sederajat', 'PNS/TNI/POLRI', '2018-03-03', 'KTP', 3, 2, 4, 2, 4, 4, 4, 4, 2),
(116, 1265, 21, 'Perempuan', 'S1', 'Pegawai Swasta', '2018-03-04', 'KTP', 4, 4, 3, 2, 3, 4, 4, 4, 4),
(117, 1335, 28, 'Perempuan', 'S2 Keatas', 'Lainnya', '2018-03-09', 'KTP', 3, 4, 2, 2, 2, 3, 4, 2, 4),
(118, 3628, 21, 'Laki-laki', 'SD Kebawah', 'Pelajar/Mahasiswa', '2018-03-10', 'KTP', 3, 3, 2, 4, 2, 2, 3, 2, 3),
(119, 3239, 19, 'Laki-laki', 'D1/D2/23', 'Wiraswasta/Usahawan', '2018-03-09', 'KTP', 4, 4, 3, 4, 2, 3, 3, 3, 3),
(120, 3398, 24, 'Laki-laki', 'SLTA Sederajat', 'PNS/TNI/POLRI', '2018-03-12', 'KTP', 3, 4, 3, 4, 4, 2, 2, 2, 3),
(121, 187, 24, 'Perempuan', 'SD Kebawah', 'PNS/TNI/POLRI', '2018-03-29', 'KTP', 4, 4, 4, 2, 3, 2, 4, 4, 4),
(122, 367, 24, 'Perempuan', 'SLTP Sederajat', 'Pegawai Swasta', '2018-03-22', 'KTP', 2, 2, 2, 3, 4, 2, 3, 4, 2),
(123, 3954, 25, 'Laki-laki', 'D1/D2/23', 'PNS/TNI/POLRI', '2018-03-25', 'KTP', 4, 3, 4, 4, 2, 2, 2, 2, 2),
(124, 1528, 30, 'Perempuan', 'S2 Keatas', 'Wiraswasta/Usahawan', '2018-03-20', 'KTP', 3, 3, 2, 2, 4, 4, 2, 4, 4),
(125, 913, 18, 'Perempuan', 'SLTP Sederajat', 'Pegawai Swasta', '2018-03-05', 'KTP', 4, 2, 4, 3, 3, 3, 3, 4, 2),
(126, 1397, 25, 'Perempuan', 'D1/D2/23', 'Wiraswasta/Usahawan', '2018-03-11', 'KTP', 3, 4, 2, 2, 4, 3, 4, 4, 3),
(127, 1930, 30, 'Laki-laki', 'SLTP Sederajat', 'Pelajar/Mahasiswa', '2018-03-03', 'KTP', 2, 4, 2, 3, 4, 4, 4, 4, 2),
(128, 1216, 18, 'Perempuan', 'SLTP Sederajat', 'Pelajar/Mahasiswa', '2018-03-19', 'KTP', 2, 4, 3, 2, 4, 4, 4, 3, 4),
(129, 2111, 28, 'Perempuan', 'SD Kebawah', 'Pelajar/Mahasiswa', '2018-03-23', 'KTP', 2, 4, 3, 2, 3, 3, 2, 2, 2),
(130, 2475, 30, 'Perempuan', 'SLTA Sederajat', 'Wiraswasta/Usahawan', '2018-03-25', 'KTP', 2, 3, 4, 2, 2, 3, 4, 2, 2),
(131, 263, 24, 'Perempuan', 'SD Kebawah', 'Pegawai Swasta', '2018-03-25', 'KTP', 2, 3, 2, 2, 3, 4, 2, 4, 2),
(132, 1257, 18, 'Laki-laki', 'S2 Keatas', 'Pegawai Swasta', '2018-03-18', 'KTP', 2, 2, 2, 3, 2, 4, 3, 3, 3),
(133, 124, 25, 'Perempuan', 'S1', 'Wiraswasta/Usahawan', '2018-03-18', 'KTP', 4, 2, 2, 3, 4, 4, 3, 2, 3),
(134, 3320, 23, 'Laki-laki', 'SLTA Sederajat', 'Pelajar/Mahasiswa', '2018-03-08', 'KTP', 3, 4, 2, 2, 4, 4, 3, 4, 2),
(135, 3502, 17, 'Perempuan', 'S2 Keatas', 'Wiraswasta/Usahawan', '2018-03-05', 'KTP', 4, 3, 4, 4, 3, 3, 4, 3, 3),
(136, 1933, 17, 'Perempuan', 'S1', 'Lainnya', '2018-03-27', 'KTP', 3, 4, 3, 2, 3, 3, 2, 3, 3),
(137, 1349, 25, 'Laki-laki', 'SLTP Sederajat', 'Pegawai Swasta', '2018-03-02', 'KTP', 3, 2, 3, 2, 4, 3, 4, 3, 3),
(138, 3588, 23, 'Laki-laki', 'D1/D2/23', 'Pelajar/Mahasiswa', '2018-03-17', 'KTP', 2, 3, 3, 4, 3, 2, 2, 3, 2),
(139, 3007, 25, 'Perempuan', 'SLTA Sederajat', 'Wiraswasta/Usahawan', '2018-03-14', 'KTP', 2, 4, 4, 4, 3, 4, 4, 4, 3),
(140, 2069, 28, 'Laki-laki', 'S2 Keatas', 'PNS/TNI/POLRI', '2018-03-23', 'KTP', 4, 2, 3, 3, 4, 2, 2, 4, 4),
(141, 794, 18, 'Perempuan', 'D1/D2/23', 'Wiraswasta/Usahawan', '2018-03-08', 'KTP', 4, 3, 3, 3, 3, 3, 2, 3, 3),
(142, 1535, 28, 'Perempuan', 'D1/D2/23', 'PNS/TNI/POLRI', '2018-03-03', 'KTP', 3, 4, 2, 3, 3, 4, 2, 4, 2),
(143, 829, 22, 'Laki-laki', 'D1/D2/23', 'Wiraswasta/Usahawan', '2018-03-29', 'KTP', 3, 3, 4, 4, 2, 2, 2, 2, 3),
(144, 1488, 20, 'Perempuan', 'S2 Keatas', 'Wiraswasta/Usahawan', '2018-03-19', 'KTP', 4, 4, 3, 3, 3, 4, 2, 3, 4),
(145, 3263, 27, 'Perempuan', 'SD Kebawah', 'Pelajar/Mahasiswa', '2018-03-29', 'KTP', 4, 3, 2, 2, 4, 3, 4, 3, 4),
(146, 1466, 21, 'Perempuan', 'SLTA Sederajat', 'Pegawai Swasta', '2018-03-17', 'KTP', 2, 4, 2, 4, 3, 4, 2, 3, 4),
(147, 3397, 23, 'Perempuan', 'D1/D2/23', 'PNS/TNI/POLRI', '2018-03-10', 'KTP', 2, 3, 4, 4, 3, 2, 4, 4, 4),
(148, 2052, 30, 'Perempuan', 'S2 Keatas', 'Pelajar/Mahasiswa', '2018-03-20', 'KTP', 4, 4, 2, 4, 2, 3, 2, 3, 4),
(149, 835, 28, 'Laki-laki', 'SLTA Sederajat', 'Pegawai Swasta', '2018-03-24', 'KTP', 3, 4, 3, 3, 3, 3, 3, 2, 4),
(150, 3431, 30, 'Laki-laki', 'S2 Keatas', 'Pelajar/Mahasiswa', '2018-03-18', 'KTP', 4, 3, 3, 4, 4, 2, 4, 3, 4);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
