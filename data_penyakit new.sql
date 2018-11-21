-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2018 at 01:20 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sehatkuy`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_penyakit`
--

CREATE TABLE `data_penyakit` (
  `id` int(10) NOT NULL,
  `nama` varchar(15) NOT NULL,
  `penyebab` tinytext NOT NULL,
  `nama_obat` varchar(23) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_penyakit`
--

INSERT INTO `data_penyakit` (`id`, `nama`, `penyebab`, `nama_obat`) VALUES
(1, 'Encok', 'Banyak Aktivitas Berat', 'Promag'),
(2, 'Rabies', 'virus lyssaviruses melalui gigitan anjing', 'serum dan vaksina'),
(3, 'Alergi', 'Gigitan serangga atau melalui udara', 'NCP+Muncrod+Zinc'),
(4, 'Abses Gigi', 'Terbentuknya kantung atau benjolan berisi nanah pada gigi yang disebabkan oleh infeksi bakter', 'Antibiotik'),
(5, 'Abses Payudara', 'Mastitis, yaitu suatu peradangan pada payudara ', 'Antibiotik'),
(6, 'Batu Ginjal', 'Disebabkan oleh makanan atau masalah kesehatan lain yang mendasari.', 'Acetaminopen, ibuprofen'),
(7, 'Batuk-batuk', 'Infeksi virus pada saluran pernapasan bagian atas dan bawah', 'Parasetamol , Ibuprofen'),
(8, 'Bisul', 'Bakteri Staphylococcus Aureus', 'Paracetamol , Ibuprofen'),
(9, 'Bronkitis', 'Merokok', 'Mucolytic'),
(10, 'Buta Warna', 'Ada gangguan pigmen pada reseptor penglihatan warna (sel kerucut di mata).', 'Susu , Bawang Merah'),
(11, 'Dermo Seboririk', 'Depresi yang membuat tubuh banyak mengeluarkan minyak sehingga menimbulkan penyakit ini.', 'Sampo seboroik'),
(12, 'Stroke', 'Sakit kepala yang berblebihan sehingga membuat otak terganggu yang dapat memicu ke bagian tubuh yang lain.', 'Citicoline'),
(13, 'Kontrasepsi', 'Gangguan yang disebabkan saat berhubungan intim.', 'Pil KB'),
(14, 'Flu Burung', 'Dari orang atau hewan yang memiliki virus tertentu.', 'influenza A/H5'),
(15, 'Linglung', 'Masalah kesehatan yang serius hingga defisiensi vitamin atau keracunan alkohol juga merupakan penyebab umum dari linglung.', 'Insulin / Obat pusing');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
