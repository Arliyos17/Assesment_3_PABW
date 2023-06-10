-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2023 at 02:43 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sport`
--

-- --------------------------------------------------------

--
-- Table structure for table `jadwal1`
--

CREATE TABLE `jadwal1` (
  `id_jadwal` varchar(10) NOT NULL,
  `tim1` varchar(50) NOT NULL,
  `tim2` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `liga` varchar(50) NOT NULL,
  `stadion` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal1`
--

INSERT INTO `jadwal1` (`id_jadwal`, `tim1`, `tim2`, `tanggal`, `waktu`, `liga`, `stadion`, `harga`) VALUES
('j01', 'Semen Padang', 'PSIS', '2023-06-09', '19:19:00', 'Liga 2', 'Kanjuruhan', '120000'),
('j02', 'Borneo FC', 'Cilegon United', '2023-01-01', '16:00:00', 'Liga 1', 'Stadion Aji Imbut', '200000'),
('j03', 'Bhayangkara', 'PSS', '2023-01-03', '23:00:00', 'Liga 1', 'Stadion Si Jalak Harupat', '175000'),
('j04', 'PSMS', 'Karo United', '2022-12-22', '12:30:00', 'Liga 2', 'Stadion Utama Gelora Bung Tomo', '155000'),
('j05', 'Persiraja', 'Semen Padang', '2022-12-28', '22:30:00', 'Liga 2', 'Stadion Utama Riau', '100000'),
('j06', 'PSDS', 'PSKC', '2022-12-31', '17:00:00', 'Liga 2', 'Gelora Bandung lautan Api', '255000'),
('j07', 'Semen padang', 'PSS', '2022-12-23', '22:16:00', 'Liga 2', 'Stadion Si Jalak Harupat', '175000'),
('j08', 'Persib Bandung', 'Persija', '2023-01-25', '20:06:00', 'Liga 1', 'Stadion Sriwijaya', '100000'),
('j09', 'Madura United', 'PSIS', '2023-06-06', '19:19:00', 'Liga 1', 'Anfield', '200000'),
('j10', 'Madura United', 'Persikabo', '2023-06-16', '16:08:00', 'Liga 1', 'Stadion JIS', '100000'),
('j11', 'Persikabo', 'Arema Fc', '2023-06-07', '18:36:00', 'Liga 1', 'Stadion JIS', '100000'),
('j12', 'Persib Bandung', 'persita', '2023-06-26', '20:48:00', 'Liga 1', 'al Bayat', '100000'),
('j13', 'Arema Fc', 'Rans Fc', '2023-06-14', '01:40:00', 'Liga 1', 'al Bayat', '100000'),
('j14', 'Semen Padang', 'Arema', '2023-10-12', '17:00:00', 'Liga 1', 'GBK', '120000'),
('j15', 'arema', 'persib', '2023-06-15', '18:00:00', 'Liga 1', 'Stadion JIS', '650000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jadwal1`
--
ALTER TABLE `jadwal1`
  ADD PRIMARY KEY (`id_jadwal`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
