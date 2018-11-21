-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2018 at 01:08 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('faizal', 'faizal'),
('tebak', 'ciumdulu');

-- --------------------------------------------------------

--
-- Table structure for table `data_obat`
--

CREATE TABLE `data_obat` (
  `id_obat` int(11) NOT NULL,
  `nama_obat` varchar(23) COLLATE utf8_bin NOT NULL,
  `manfaat_obat` tinytext COLLATE utf8_bin NOT NULL,
  `dosis_dewasa` int(10) NOT NULL,
  `dosis_anak` int(10) NOT NULL,
  `efek_samping` tinytext COLLATE utf8_bin NOT NULL,
  `harga_obat` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `data_obat`
--

INSERT INTO `data_obat` (`id_obat`, `nama_obat`, `manfaat_obat`, `dosis_dewasa`, `dosis_anak`, `efek_samping`, `harga_obat`) VALUES
(1, 'Paracetamol', 'Pereda nyeri <br>\r\nPereda demam', 1000, 500, 'Mual <br>\r\nUrin berwarna gelap', 3500),
(2, 'Ibuprofen', 'Pereda nyeri <br>\r\nPenurun demam <br>\r\nMengobati asam urat <br>', 300, 100, 'Nyeri dada <br>\r\nSusah buang air <br>\r\nPerut sakit <br>', 6000),
(3, 'Amoxicillin', 'Antibiotik <br>\r\nMengobati infeksi bakteri <br>', 500, 500, 'Mual <br>\r\nSakit kepala <br>', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `data_penyakit`
--

CREATE TABLE `data_penyakit` (
  `id_penyakit` int(10) NOT NULL,
  `nama_penyakit` varchar(15) COLLATE utf8_bin NOT NULL,
  `penyebab` tinytext COLLATE utf8_bin NOT NULL,
  `nama_obat` varchar(23) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `data_penyakit`
--

INSERT INTO `data_penyakit` (`id_penyakit`, `nama_penyakit`, `penyebab`, `nama_obat`) VALUES
(1, 'Encok', 'Banyak Aktivitas Berat', 'Promag'),
(2, 'Rabies', 'virus lyssaviruses melalui gigitan anjing', 'serum dan vaksina'),
(3, 'Alergi', 'Gigitan serangga atau melalui udara', 'NCP+Muncrod+Zinc'),
(4, 'Abses Gigi', 'Terbentuknya kantung atau benjolan berisi nanah pada gigi yang disebabkan oleh infeksi bakter', 'Antibiotik'),
(5, 'Abses Payudara', 'Mastitis, yaitu suatu peradangan pada payudara ', 'Antibiotik'),
(6, 'Batu Ginjal', 'Disebabkan oleh makanan atau masalah kesehatan lain yang mendasari.', 'Acetaminopen, ibuprofen'),
(7, 'Batuk-batuk', 'Infeksi virus pada saluran pernapasan bagian atas dan bawah', 'Parasetamol , Ibuprofen'),
(8, 'Bisul', 'Bakteri Staphylococcus Aureus', 'Paracetamol , Ibuprofen'),
(9, 'Bronkitis', 'Merokok', 'Mucolytic'),
(10, 'Buta Warna', 'Ada gangguan pigmen pada reseptor penglihatan warna (sel kerucut di mata).', 'Susu , Bawang Merah');

-- --------------------------------------------------------

--
-- Table structure for table `rs`
--

CREATE TABLE `rs` (
  `Nama_Rs` varchar(30) NOT NULL,
  `Alamat_Rs` varchar(80) NOT NULL,
  `Telephon_RS` varchar(25) NOT NULL,
  `Tempat_Terdekat_Rs` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rs`
--

INSERT INTO `rs` (`Nama_Rs`, `Alamat_Rs`, `Telephon_RS`, `Tempat_Terdekat_Rs`) VALUES
(' RSIA Restu Bunda Lampung', 'Jalan KH. Hasyim Ashari Nomor73,Pakuon Teluk Betung Selatan, Bandar Lampung.', '(0721) 484185.', 'Iker Peace Shop, Bintang Abadi Motor, Air Minum Pemuka Raya, Toko Mas Logam Mulia.\r\n'),
('RS Advent Bandar Lampung ', 'Jalan Teuku Umar Nomor 48 Kedaton, Bandar Lampung 35148.', '(0721) 703459', 'Pasar Koga, Roman Bakery, Bank Mandiri, Zoya Lampung, Mie Koga, Nasi Goreng Abbas.'),
('RS Anugerah Medika', 'Jalan Tulang Bawang Nomor 21-23, Enggal, Bandar Lampung, 35213', '(0721) 262139.', ' Hotel Pelangi, Gramedia Bandar Lampung, Auto 2000 Bandar Lampung, SMA Arjuna, Pindang Meranjat.'),
('RS Bhayangkara Polda Lampung', 'Jalan Pramuka Nomor 88, Bandar Lampung.', '(0721) 706402.', ' Samsat Bandar Lampung, Radio Pratama Mahardika, Kwarda Gerakan Pramuka Lampung.'),
('RS Bumi Waras', 'Jalan Wolter Monginsidi Nomor 235 Bandar Lampung.', '(0721) 254589', 'Hotel Pop, Toro Guest House, Wisma Mustika, Bappeda Provinsi Lampung.'),
('RS DKT Lampung', ' Jalan dr. Ahmad Rivai Nomor 7, Penengahan, Bandar Lampung.', ' (0721) 770430.', ' RSUD Abdul Moeloek Lampung.'),
('RS Graha Husada', 'Jalan Gajah Mada Nomor 6 GH, Bandar Lampung.', '(0721) 240000.', 'Kedai Surabi Duren Mang Uban, Roman Bakery, CV Abah, Bakso Son Haji Sony VII, Dr. Helmi Muchtar, Spm.\r\n'),
('RS Imanuel Way Halim', 'Jalan Soekarno Hatta Nomor 1 Bandar Lampung (By Pass).', '(0721) 704900', ' Pondok Singgah RM, Rumah Makan Kusumo Ayu II, RM Pakde Muktar, Taman Hutan Kota'),
('RS Kartika', 'Jalan Gatot Subroto Nomor 59 Kota Bandar Lampung.', ' (0721) 486686.', ' Hotel Aston Lampung, Balai Besar Wilayah Sungai Mesuji.'),
('RS Khusus Mata Permana Sari', 'Jalan HOS. Cokroaminoto Nomor 87 Bandar Lampung.', '(0721) 240588.', 'RSIA Mutiara Putri, Pelangi Residence, SMKN 4 Bandar Lampung, Akbid Adila, BRI Kanwil Lampung.\r\n'),
('RS Pertamina Bintang Amin', 'Jalan Pramuka Nomor 27 Bandar Lampung.', '(0721) 273601, 271116', ' Universitas Malahayati, SMP N 2 Bandar Lampung.'),
('RS Urip Sumoharjo', 'Jalan Urip Sumoharjo Nomor 200, Sukarame, Bandar Lampung.', '(0721) 771322.', 'Harion Hostel Syariah.'),
('RSIA Bunda Assyifa', 'Jalan Dr. Susilo Nomor 54, Pahoman, Bandar Lampung.', '(0721) 259259, 240474.', 'Dinas Kesehatan Provinsi Lampung, KPPN Bandar Lampung, LPMP Provinsi Lampung.\r\n'),
('RSIA Mutiara PUTRI', 'Jalan Hos Cokroaminoto Nomor 96, Tanjung Karang, Bandar Lampung, 35121', ' (0721) 252519.', 'Hotel Enggal, SMK N 4 Bandar Lampung, SMP N 4 Bandar Lampung, BNI, Chandra Supermarket.\r\n'),
('RSIA Puri Betik Hati', 'Jalan Pajajaran Nomor 109 Jagabaya II, Bandar Lampung, 35132.', '(0721) 787799', ' Majelis Taklim Khusnul Khotimah, Ayam Keprek, Bintang Gypsum, Toko Putra Sunda.'),
('RSIA Santa Anna', ' Jalan Hasanuddin Nomor 27 Kupang Kota, Teluk Betung Utara, Bandar Lampung.', '(0721) 482424.', ' Dinas Pemuda dan Olah Raga Provinsi Lampung, PMI Lampung, Korpri, Kantor Pos Teluk Betung, Papa Joe, Bank Lippo.'),
('RSIA Sinta', 'Jalan Imam Bonjol Nomor 512, Langkapura, Bandar Lampung.', '(0721) 266115.', ' STIE Krakatau, Universitas Saburai, Bakso Solo Baru.\r\n'),
('Rumah Sakit A Dadi Tjokrodipo', 'Jalan Basuki Rahmat Nomor 73 Bandar Lampung.', '(0721) 471723 / 470177.', 'Kantor Perwakilan BPKP Provinsi Lampung (di depannya persis), Dinas Perhubungan Kota Bandar Lampung, Rumah Makan Do\'a Saudara, Wisma Andalas Asri, Kanwil Pajak Lampung-Bengkulu, Kantor BPS Provinsi Lampung.'),
('Rumah Sakit Abdul Moeloek', ' Jalan Dr. Rivai Nomor 6 Bandar Lampung.', '(0721) 703312 / 702455.', 'Rumah Sakit DKT.'),
('Rumah Sakit Bersalin Kosasih', 'Jalan Tanjungpura Nomor 754, Pidada, Panjang, Bandar Lampung.', '(0721) 31754.', 'Swadex, Mayora, Anugrah Esa 4.\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `data_obat`
--
ALTER TABLE `data_obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `data_penyakit`
--
ALTER TABLE `data_penyakit`
  ADD PRIMARY KEY (`id_penyakit`);

--
-- Indexes for table `rs`
--
ALTER TABLE `rs`
  ADD PRIMARY KEY (`Nama_Rs`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_obat`
--
ALTER TABLE `data_obat`
  MODIFY `id_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `data_penyakit`
--
ALTER TABLE `data_penyakit`
  MODIFY `id_penyakit` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
