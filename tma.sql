-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2021 at 09:47 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pertemuan13`
--

-- --------------------------------------------------------

--
-- Table structure for table `tma`
--

CREATE TABLE `tma` (
  `id_tma` int(20) NOT NULL,
  `id_pos` int(3) NOT NULL,
  `nilai` double NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tma`
--

INSERT INTO `tma` (`id_tma`, `id_pos`, `nilai`, `waktu`) VALUES
(6524, 10, 9.25, '2018-01-01 00:00:00'),
(6529, 10, 8.27, '2018-01-01 00:20:00'),
(6534, 10, 8.29, '2018-01-01 00:30:00'),
(6539, 10, 8.19, '2018-01-01 00:40:00'),
(6544, 10, 8.24, '2018-01-01 00:50:00'),
(6549, 10, 8.32, '2018-01-01 01:00:00'),
(6554, 10, 8.26, '2018-01-01 01:10:00'),
(6558, 10, 8.29, '2018-01-01 01:20:00'),
(6563, 10, 8.29, '2018-01-01 01:30:00'),
(6568, 10, 8.18, '2018-01-01 01:40:00'),
(6573, 10, 8.19, '2018-01-01 01:50:00'),
(6577, 10, 8.25, '2018-01-01 02:00:00'),
(6581, 10, 8.22, '2018-01-01 02:10:00'),
(6585, 10, 8.33, '2018-01-01 02:20:00'),
(6589, 10, 8.31, '2018-01-01 02:30:00'),
(6593, 10, 8.27, '2018-01-01 02:40:00'),
(6595, 10, 8.27, '2018-01-01 02:40:00'),
(6598, 10, 8.2, '2018-01-01 02:50:00'),
(6602, 10, 8.25, '2018-01-01 03:00:00'),
(6606, 10, 8.32, '2018-01-01 03:10:00'),
(6611, 10, 8.31, '2018-01-01 03:20:00'),
(6615, 10, 8.27, '2018-01-01 03:30:00'),
(6619, 10, 8.19, '2018-01-01 03:40:00'),
(6623, 10, 8.2, '2018-01-01 03:50:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tma`
--
ALTER TABLE `tma`
  ADD PRIMARY KEY (`id_tma`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tma`
--
ALTER TABLE `tma`
  MODIFY `id_tma` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6624;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
