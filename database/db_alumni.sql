-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2024 at 08:21 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_alumni`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(225) UNSIGNED NOT NULL,
  `nisn` int(50) NOT NULL,
  `nama` char(100) DEFAULT NULL,
  `tempat_tanggal_lahir` varchar(200) NOT NULL,
  `jurusan` char(100) DEFAULT NULL,
  `alamat` char(100) DEFAULT NULL,
  `tahun_lulus` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `nisn`, `nama`, `tempat_tanggal_lahir`, `jurusan`, `alamat`, `tahun_lulus`) VALUES
(1, 46795176, 'ACHMAD BAYU AL GHOZALI', 'Bondowoso, 25 Maret 2004', 'RPL', 'Jurangsapi  RT.22 RW.8 Kec. Tapen\r\n', '2023-04-26'),
(2, 57778762, 'ADAM BARIERA', 'Bondowoso, 29 April 2005', 'RPL', 'Jl. Mawar Kotim Kota Timur RT.1 RW.1 Besuki Kec. Besuki\r\n', '2023-03-26'),
(3, 41703191, 'ADITIA FIRMANSYAH', 'Bondowoso, 6 Januari 2004', 'RPL', 'Desa Patemon Kendal RT.1 RW.1 Patemon Kec. Pakem\r\n', '2023-04-26'),
(4, 47726419, 'AHMAD UBAIDILLAH', 'Bondowoso, 29 Juni 2004', 'RPL', 'Dusun Krajan  RT.3 RW.1 Pakuwesi Kec. Curahdami\r\n', '2023-04-26'),
(5, 51693557, 'ARIEL FARHAN FAHREZI', 'Bondowoso, 12 Pebruari 2005', 'RPL', 'Jl. Penanggungan Krajan RT.1 RW.1 Penanggungan Kec. Maesan\r\n', '2023-04-26'),
(6, 58468157, 'DICKY MAULIA EKA SAPUTRA', 'Bondowoso, 10 April 2005', 'RPL', 'Jl.Situbondo  RT.9 RW.3 Traktakan Kec. Wonosari\r\n\r\n', '2023-04-26'),
(7, 49334036, 'DIMAS AHMADIYANTO', 'Bondowoso, 15 Desember 2004', 'RPL', 'Kawah Ijen Sumber Tengah Utara RT.10 RW.3 Rejoagung Kec. Sumber Wringin\r\n', '2023-04-26'),
(8, 44765904, 'ELISA OKTAVIANA', 'Bondowoso, 04 Oktober 2004', 'RPL', 'Bendelan  RT.1 RW.1  Kec. Binakal\r\n', '2023-04-26'),
(9, 52632128, 'FIRMAN ADIANSYAH', 'Surabaya, 9 Januari 2005', 'RPL', 'Keputih III-C/7  RT.3 RW.2 Keputih Kec. Sukolilo\r\n', '2023-04-26'),
(10, 45041166, 'HAYDAR REZA FIRDAUS', 'Bondowoso, 24 Desember 2004', 'RPL', 'Jurang Sapi   RT.36 RW.12 Kec. Wonosari\r\n', '2023-04-26'),
(11, 49488243, 'IMELDA ALIFATUNNUR', 'Bondowoso, 12 Mei 2004', 'RPL', 'Kosumber Gununganyar RT.4 RW.3 Kec. Tapen\r\n', '2023-04-26'),
(12, 46592632, 'IVAN VARENDURI', 'Bondowoso, 29 Maret 2004', 'RPL', 'Bataan RT.32 RW.9 Kec. Tenggarang\r\n', '2023-04-26'),
(13, 47062759, 'KATOH ABI MANYU SAPUTRA', 'Bondowoso, 07 Juni 2004', 'RPL', 'Jl.Bondowoso-Jember  RT.67 RW.7 Taman Kec. Grujugan\r\n', '2023-04-26'),
(14, 49570035, 'MOCHAMMAD HENGKY DWI SEPTYAN', 'Bondowoso, 12 September 2004', 'RPL', 'Kawah Wurung  RT.6 RW.3 Jampit Kec. Ijen\r\n', '2023-04-26'),
(15, 45831850, 'MUCH. RIZKY BRILIANTO', 'Banyuwangi, 15 November 2004', 'RPL', 'Sumber Kalong  RT.17 RW.7 Wonosari Kec. Wonosari\r\n', '2023-04-26'),
(16, 45836933, 'MUHAMMAD AIDAN BAZMUL', 'Bondowoso, 07 Februari 2004', 'RPL', 'Jalan Supriadi  RT.14 RW.3 Kademangan Kec. Bondowoso\r\n', '2023-04-26'),
(17, 47485251, 'MUHAMMAD DIMAS HARDIYANTO', 'Bondowoso, 15 Mei 2004', 'RPL', 'Tangsil Wetan Krajan RT.12 RW.5 Tangsil Wetan Kec. Wonosari\r\n', '2023-04-26'),
(18, 43974270, 'MUHAMMAD IVAN AVANSYAH', 'Bondowoso, 16 Juni 2004', 'RPL', 'Duko Kembang RT.11 RW.4 Kembang  Kec. Bondowoso\r\n', '2023-04-26'),
(19, 48672784, 'MUHAMMAD NOR KHOLIT', 'Bondowoso, 27 Juni 2004', 'RPL', 'Dsn. Gunduh  RT.10 RW.3 Bataan Kec. Tenggarang\r\n', '2023-04-26'),
(20, 38301341, 'MUHAMMAD ZAFIL', 'Bondowoso, 13 Mei 2003', 'RPL', 'Wonosroyo Tengah RT.23 RW.5 Lombok Kulon Kec. Wonosari\r\n', '2023-04-26'),
(21, 51978037, 'NASHWA FAJRI LUSYYANA', 'Jember, 1 Januari 2005', 'RPL', 'Dusun Krajan  RT.1 RW.5 Sukokerto Kec. Sukowono\r\n', '2023-04-26'),
(22, 47238783, 'NURUL HADI', 'Bondowoso, 08 Mei 2004', 'RPL', 'Tangsil Wetan Kepondok RT.13 RW.5  Kec. Wonosari\r\n', '2023-04-26'),
(23, 53000404, 'RENDY WAHYU WARDANA', 'Bondowoso, 28 Maret 2005', 'RPL', 'Taman RT.72 RW.8  Kec. Grujugan\r\n', '2023-04-26'),
(24, 55739364, 'RYAN MAULANA', 'Bondowoso, 5 Maret 2005', 'RPL', 'Jl. Diponegoro 28  RT.34 RW.4 Kotakulon Kec. Bondowoso\r\n', '2023-04-26'),
(25, 53637549, 'SAVEMA AURELIANDARU IRAWAN', 'Bondowoso, 17 Juli 2005', 'RPL', 'Villa Kembang Asri AC 10 RT.23 RW.3 Sukowiryo, Kec. Bondowoso\r\n', '2023-04-26'),
(26, 47044943, 'SELDI ADI PURWANTO', 'Bondowoso, 5 Juli 2004', 'RPL', 'Pejaten  RT.12 RW.3 Kec. Bondowoso\r\n', '2023-04-26'),
(27, 54610739, 'SITTI KHOTIJAH', 'Bondowoso, 30 April 2005', 'RPL', 'Jl. Putri Rengganis Keseran RT.5 RW.2 Kembang Kec. Bondowoso\r\n', '2023-04-26'),
(28, 44145697, 'TAMPAN OKTAVIAND', 'Bondowoso, 14 Oktober 2004', 'RPL', 'Jl. Chairil Anwar  RT.33 RW.1 Badean Kec. Bondowoso\r\n', '2023-04-26'),
(29, 43970870, 'ULFANIYAH', 'Bondowoso, 18 April 2004', 'RPL', 'Jl. Pakisan Pancoran RT.15 RW.3 Pekalangan Kec. Tenggarang\r\n', '2023-04-26'),
(30, 41687682, 'YANUAR ANTAMA SAIYA', 'Bondowoso, 10 Januari 2004', 'RPL', 'Jln. Diponegoro  RT.34 RW.4 Kotakulon Kec. Bondowoso\r\n', '2023-04-26'),
(31, 44355395, 'ZAKIA DAHLIA KUMALASARI', 'Bondowoso, 07 Mei 2004', 'RPL', 'Sumbersari Krajan 2 RT.7 RW.2 Sumbersari Kec. Maesan\r\n', '2023-04-26'),
(32, 45389180, 'ACHMAD ZIDAN', 'Bondowoso, 16 Desember 2004', 'RPL', 'Jl. Hos Cokroaminoto  RT.24 RW.4 Kademangan Kec. Bondowoso\r\n', '2023-04-26'),
(33, 48034789, 'ADI GUNAWAN', 'Bondowoso, 14 September 2004', 'RPL', 'Desa  Dumpyong RT.6 RW.2 Kec. Pakem\r\n', '2023-04-26'),
(34, 44928751, 'AHMAD JA`FAR SHODIQ', 'Bondowoso, 10 September 2004', 'RPL', 'Kupang  RT.5 RW.3 Kec. Curahdami\r\n', '2023-04-26'),
(35, 34642047, 'ARI FAHURRAHMAN', 'Bondowoso, 22 September 2003', 'RPL', 'Wonosari Krajan RT.27 RW.9 Wonosari Kec. Wonosari\r\n', '2023-04-26'),
(36, 45483496, 'DHEDEN SANDIKA', 'Bondowoso, 20 Desember 2004', 'RPL', 'Wonosari  RT.34 RW.11 Kec. Wonosari\r\n', '2023-04-26'),
(37, 44087942, 'DIMAS ADITYA DERMAWAN', 'Bondowoso, 24 Januari 2004', 'RPL', 'Sumber Gading RT.23 RW.6  Kec. Sumber Wringin\r\n', '2023-04-26'),
(38, 56224016, 'EFRILIANSAH PUTRA MAUALANA', 'Bondowoso, 20 April 2005', 'RPL', 'Sumberkalong  RT.16 RW.6  Kec. Wonosari\r\n', '2023-04-26'),
(39, 56740739, 'FAIKATUL HIKMAH', 'Bondowoso, 05 Juni 2005', 'RPL', 'Tumpeng  RT.6 RW.3  Kec. Wonosari\r\n', '2023-04-26'),
(40, 54384263, 'FERDIANSYAH LUKMANA', 'Bondowoso, 28 Maret 2005', 'RPL', 'Jl. Kh Wahid Hasyim No. 30  RT.40 RW.9 Dabasah Kec. Bondowoso\r\n', '2023-04-26'),
(41, 49750394, 'GILANG WAGYANT NARENDRA', 'Bondowoso, 24 September 2004', 'RPL', 'Jln. Diponegoro 103  RT.13 RW.3 Kotakulon Kec. Bondowoso\r\n', '2023-04-26'),
(42, 37313734, 'IKG WISNU SATRYO NUGROHO', 'Denpasar, 25 September 2003', 'RPL', 'Jl. Re. Martadinata Gg. Patih 43  RT.24 RW.5 Dabasah Kec. Bondowoso\r\n', '2023-04-26'),
(43, 56232307, 'MAULANA ALI MUBAROK', 'Bondowoso, 26 April 2005', 'RPL', 'Wonosari Krajan RT.34 RW.11 Wonosari Kec. Wonosari\r\n', '2023-04-26'),
(44, 55723279, 'MAULITA APRILIANTI', 'Bondowoso, 26 April 2005', 'RPL', 'Sukorejo Lor RT.4 RW.1 Sukorejo Kec. Sumber Wringin\r\n', '2023-04-26'),
(45, 51401455, 'MOCHAMMAD RIZKI FEBRIAN', 'Bondowoso, 20 Februari 2005', 'RPL', 'Taman  RT.4 RW.1 Kec. Grujugan\r\n', '2023-04-26'),
(46, 52156021, 'MOHAMMAD IMRON', 'Bondowoso, 20 April 2005', 'RPL', 'Laok Gunung RT.7 RW.2 Tlogosari Kec. Tlogosari\r\n', '2023-04-26'),
(47, 44746685, 'MUHAMMAD ADE MARSA', 'Sidoarjo, 19 Agustus 2004', 'RPL', 'Penambangan Koh Tinggi RT.9 RW.6 Penambangan Kec. Curahdami\r\n', '2023-04-26'),
(48, 55188756, 'MUHAMMAD AKRAM GHATAFF', 'Bondowoso, 06 Juni 2005', 'RPL', ' Perum Sekarputih Indah  RT.31 RW.1 Sekarputih Kec. Tegalampel\r\n', '2023-04-26'),
(49, 45133845, 'MUHAMMAD IQBAL ILYAS', 'Bondowoso, 10 Mei 2004', 'RPL', 'Kapuran  RT.8 RW.3 Kec. Wonosari\r\n', '2023-04-26'),
(50, 56106946, 'MUHAMMAD KAVIN', 'Bondowoso, 12 Januari 2005', 'RPL', 'Sumber Kalong Krajan RT.4 RW.2 Sumber Kalong Kec. Wonosari\r\n', '2023-04-26'),
(51, 44409487, 'MUHAMMAD RIZAL ARIFIN PUTRA', 'Bondowoso, 05 Januari 2004', 'RPL', 'Tumpeng  RT.13 RW.5  Kec. Wonosari\r\nTumpeng  RT.13 RW.5  Kec. Wonosari\r\n', '2023-04-26'),
(52, 46027880, 'MUHAMMAD ZAUKI', 'Bondowoso, 01 Oktober 2004', 'RPL', 'Wonosroyo Barat RT.27 RW.6 Lombok Kulon Kec. Wonosari\r\n', '2023-04-26'),
(53, 55324447, 'NINDI SEPVIA WINDAYANTI', 'Ngawi, 7 September 2005', 'RPL', 'Perum Vandolang  RT.6 RW.2 Petung Kec. Curahdami\r\n', '2023-04-26'),
(54, 51524315, 'RAFLI FIRMANSYAH', 'Bondowoso, 28 Januari 2005', 'RPL', 'Kali Sengon RT.1 RW.1 Kaligedang Kec. Ijen\r\n', '2023-04-26'),
(55, 51820513, 'RISKI ALIFFATUR RAHMAN', 'Bondowoso, 09 April 2005', 'RPL', 'Dusun Krajan Utara RT.4 RW.1 Mengen Kec. Tamanan\r\n', '2023-04-26'),
(56, 45014563, 'SANDHY DWI HARYANTO', 'Bondowoso, 30 November 2004', 'RPL', 'Jl. Re Martadinata  RT.26 RW.6 Dabasah Kec. Bondowoso\r\n', '2023-04-26'),
(57, 23385591, 'SITI NURHALIMAH', 'Bondowoso, 26 Juni 2002', 'RPL', 'Pejaten  RT.8 RW.2  Kec. Bondowoso\r\n', '2023-04-26'),
(58, 33727452, 'SONI IRMANSYAH', 'Bondowoso, 12 September 2004', 'RPL', 'Pasar Pakem Kendal RT.1 RW.1 Patemon Kec. Pakem\r\n', '2023-04-26'),
(59, 56980487, 'TANANDA SERLIAND GADISYAH HANDOKO', 'Bondowoso, 20 September 2005', 'RPL', 'Jl. Kamboja Posong RT.14 RW.4 Tapen Kec. Tapen\r\n', '2023-04-26'),
(60, 44899797, 'VIRGO WARDHANA', 'Bondowoso, 4 September 2004', 'RPL', 'Jalan Kh. Zainul Arifin 68  RT.4 RW.1 Kotakulon Kec. Bondowoso\r\n', '2023-04-26'),
(61, 42046047, 'YOLANDA EKA WICAKSONO', 'Bondowoso, 11 Juni 2004', 'RPL', 'Krajan RT.1 RW.1 Dawuhan Kec. Tenggarang\r\n', '2023-04-26'),
(62, 2234, 'ajis', '23-10-2007', 'RPL', 'koncer', '2024-03-07');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username_user` varchar(50) NOT NULL,
  `pass_user` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username_user`, `pass_user`) VALUES
(2, 'admin', 'rplgen16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
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
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(225) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=232551;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
