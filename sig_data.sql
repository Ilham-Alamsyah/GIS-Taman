-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2022 at 02:57 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sig_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_taman`
--

CREATE TABLE `tbl_taman` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `latitude` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL,
  `ket` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_taman`
--

INSERT INTO `tbl_taman` (`id`, `nama`, `alamat`, `latitude`, `longitude`, `ket`) VALUES
(72, 'Taman Tegalega', 'Jl. Otto Iskandar Dinata, Karanganyar, Kec. Astanaanyar, Kota Bandung, Jawa Barat 40241', '-6.934973824030609', '107.60480225086214', '-'),
(73, 'Taman Makam Pahlawan', 'Sukaluyu, Kec. Cibeunying Kaler, Kota Bandung, Jawa Barat 40123', '-6.89043731822381', '107.63598228334594', '-'),
(74, 'Taman Neglasari', 'Neglasari, Kec. Cibeunying Kaler, Kota Bandung, Jawa Barat 40124', '-6.892698060892519', '107.64025300741197', '-'),
(75, 'Taman Gasibu', 'Lebakgede, Kecamatan Coblong, Kota Bandung, Jawa Barat 40132', '-6.900311012793081', '107.61863099016857', '-'),
(76, 'Taman Telkom', 'Jl. Japati No.1, Sadang Serang, Kecamatan Coblong, Kota Bandung, Jawa Barat 40133', '-6.898856371363596', '107.61868444631862', '-'),
(80, 'Taman Balai Kota', 'Jl. Wastukencana No.2, Babakan Ciamis, Kec. Sumur Bandung, Kota Bandung, Jawa Barat 40117', '-6.912137180588643', '107.60982512889484', '-'),
(81, 'Taman Radio', 'Jl. Ir. H. Juanda, Tamansari, Kec. Bandung Wetan, Kota Bandung, Jawa Barat 40116', '-6.902544175482396', '107.61127172970526', '-'),
(82, 'Taman Film', 'Jl. Layang Pasupati, Tamansari, Kec. Bandung Wetan, Kota Bandung, Jawa Barat 40116', '-6.898289052323158', '107.60803699493408', '-'),
(83, 'Taman Fitnes', 'Jl. Teuku Umar, Lebakgede, Kecamatan Coblong, Kota Bandung, Jawa Barat 40132', '-6.891982825799692', '107.6157629318128', '-'),
(84, 'Taman Panatayuda', 'Jl. Penata Yudha, Lebakgede, Kecamatan Coblong, Kota Bandung, Jawa Barat 40132', '-6.89812433200102', '107.61571704415265', '-');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_taman`
--
ALTER TABLE `tbl_taman`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_taman`
--
ALTER TABLE `tbl_taman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
