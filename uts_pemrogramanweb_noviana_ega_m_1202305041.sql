-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2025 at 02:54 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts_pemrogramanweb_noviana_ega_m_1202305041`
--

-- --------------------------------------------------------



--
-- Table structure for table `artist_sm_entertaiment`
--

CREATE TABLE `artist_sm_entertaiment` (
  `id` int(10) DEFAULT NULL,
  `nama_artis` varchar(100) NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `Tahun_Debut` year(4) NOT NULL,
  `nama_Grup` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;











--
-- Dumping data for table `artist_sm_entertaiment`
--

INSERT INTO `artist_sm_entertaiment` (`id`, `nama_artis`, `Tanggal_Lahir`, `Tahun_Debut`, `nama_Grup`) VALUES
(NULL, 'Lee Mark', '1999-08-02', '2016', ''),
(NULL, 'Lee Mark', '1999-08-02', '2016', ''),
(NULL, 'Lee Mark', '1999-08-02', '2016', ''),
(NULL, 'Lee Mark', '1999-08-02', '2016', ''),
(NULL, 'Lee Mark', '1999-08-02', '2016', ''),
(NULL, 'Park Jisung', '2002-02-05', '2016', 'NCT Dream'),
(NULL, 'Lee Jeno', '2000-04-23', '2016', 'NCT Dream');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
