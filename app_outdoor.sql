-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2021 at 07:02 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app_outdoor`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(120) NOT NULL,
  `username` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `nama` varchar(120) NOT NULL,
  `username` varchar(120) NOT NULL,
  `alamat` varchar(120) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `no_ktp` varchar(50) NOT NULL,
  `password` varchar(120) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `nama`, `username`, `alamat`, `gender`, `no_telepon`, `no_ktp`, `password`, `role_id`) VALUES
(7, 'Adrian', 'Adrianawn', 'JL. Plamongan Indah Sari No.22, Kota Semarang, Provinsi Jawa Tengah ', 'laki-laki', '082133929543', '82827146124812', '075b8afea7ec7d4d225d1ff5d2e302a6', 2),
(9, 'Pandanaran Outdoor', 'Admin', 'Perum Plamongan Hijau no.a 34, Pedurungan Kidul, Semarang', 'laki-laki', '085725005152', '-', 'd0782e7b4755b36408b34a80cc02d562', 1),
(10, 'Aku', 'Aku', 'JL. Plamongan Indah Sari No.22, Kota Semarang, Provinsi Jawa Tengah ', 'perempuan', '089339628123', '6356735835234223', '89ccfac87d8d06db06bf3211cb2d69ed', 2),
(11, 'Aldy', 'Aldy', 'JL. Plamongan Indah', 'laki-laki', '089339628123', '82827146124812', '3b2fb88da8c86baef513883eb2f8fa37', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(120) NOT NULL,
  `keterangan` varchar(225) NOT NULL,
  `kategori` varchar(60) NOT NULL,
  `harga` int(11) NOT NULL,
  `promo` int(11) NOT NULL,
  `status` int(4) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_brg`, `nama_brg`, `keterangan`, `kategori`, `harga`, `promo`, `status`, `gambar`) VALUES
(0, 'Dome Eiger ', 'Tenda Dome Eiger Kapasitas 4 Orang', 'Tenda Dome', 15000, 0, 0, 'dm41.jpg'),
(1, 'Carrier Canfier', 'Tas Carrier Canfier Elbrus Kapasitas 50L', 'Tas Punggung', 14000, 0, 0, 'cr1.jpg'),
(3, 'Tp Haoyang', 'Trecking Pole Haoyang 1', 'Perlengkapan Trecking', 7000, 0, 0, 'tp13.jpg'),
(4, 'Jacket TNF', 'Jacket The North Face Man', 'Pakaian Hangat', 12000, 1, 1, 'cl21.jpg'),
(5, 'Backpack', 'Tas Backpack Consina Kapasitas 30L', 'Tas Punggung', 12000, 0, 1, 'cr111.png'),
(6, 'Kompor', 'Kompor Portable Maspion', 'Peralatan Masak', 8000, 0, 1, 'cw11.jpg'),
(7, 'Gloves', 'Sarung Tangan Forester Sepasang', 'Accesories', 6000, 0, 0, 'acc11.jpg'),
(8, 'Dome Consina', 'Tenda Dome Consina 4 Orang', 'Tenda Dome', 13000, 0, 1, 'dm11.png'),
(10, 'Jacket Eiger', 'Jacket Hiking Eiger Women', 'Pakaian Hangat', 12000, 0, 1, 'cl31.jpg'),
(12, 'Carrier Eiger', 'Tas Carrier Eiger Kapasitas 60L', 'Promo', 15000, 12000, 1, 'cr51.png'),
(13, 'Carrier', 'Tas Backpack Consina', 'Promo', 15000, 12000, 1, 'cr31.jpg'),
(14, 'Carrier', 'Tas Backpack Consina', 'Promo', 12000, 11000, 1, 'cr41.jpg'),
(15, 'Carrier', 'Tas Carrier Eiger Kapasitas 60L', 'Promo', 13000, 11000, 1, 'cr2.jpg'),
(16, 'Carrier', 'Tas Backpack Consina', 'Promo', 12000, 10000, 1, 'cr10.jpg'),
(17, 'Carrier', 'Tas Carrier Eiger Kapasitas 60L', 'Promo', 13000, 11000, 1, 'cr131.jpg'),
(23, 'Cooking Set', 'Cooking Set (Gas + Kompor Portable + Panci/Wajan)', 'Bundle', 20000, 0, 1, 'bd1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_bayar`
--

CREATE TABLE `tb_detail_bayar` (
  `id_sewa` int(11) NOT NULL,
  `total_bayar` varchar(100) NOT NULL,
  `sudah_bayar` varchar(100) NOT NULL,
  `bukti_bayar` varchar(255) NOT NULL,
  `jns_pembayaran` varchar(50) NOT NULL,
  `total_denda` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_detail_bayar`
--

INSERT INTO `tb_detail_bayar` (`id_sewa`, `total_bayar`, `sudah_bayar`, `bukti_bayar`, `jns_pembayaran`, `total_denda`) VALUES
(1, '63000', '63000', 'pay21011710.png', 'bayar 50%', '0'),
(2, '42000', '42000', 'pay210117101.png', 'bayar penuh', '0'),
(3, '42000', '21000', 'pay210117102.png', 'bayar 50%', '0'),
(4, '12000', '6000', 'pay210117103.png', 'bayar 50%', '0'),
(5, '36000', ' 36000', 'pay210117104.png', 'bayar penuh', '0'),
(6, '36000', '36000', 'pay210117105.png', 'bayar penuh', '0'),
(7, '45000', '22500', 'pay210117106.png', 'bayar 50%', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_sewa`
--

CREATE TABLE `tb_detail_sewa` (
  `id` int(11) NOT NULL,
  `id_sewa` int(11) NOT NULL,
  `id_brg` int(11) NOT NULL,
  `denda_perhari` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_detail_sewa`
--

INSERT INTO `tb_detail_sewa` (`id`, `id_sewa`, `id_brg`, `denda_perhari`) VALUES
(1, 1, 0, '15000'),
(2, 1, 7, '6000'),
(3, 2, 1, '14000'),
(4, 3, 1, '14000'),
(5, 4, 7, '6000'),
(6, 5, 4, '12000'),
(7, 6, 5, '12000'),
(8, 7, 0, '15000');

-- --------------------------------------------------------

--
-- Table structure for table `tb_feed`
--

CREATE TABLE `tb_feed` (
  `id_feed` int(11) NOT NULL,
  `namauser` varchar(100) NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_feed`
--

INSERT INTO `tb_feed` (`id_feed`, `namauser`, `feedback`) VALUES
(1, 'Aku', 'coba feeed'),
(2, 'guest316', 'coba feed guest');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sewa`
--

CREATE TABLE `tb_sewa` (
  `id_sewa` int(11) NOT NULL,
  `kode` varchar(12) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `tanggal_sewa` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `tanggal_pengembalian` date NOT NULL,
  `keterlambatan` varchar(5) NOT NULL,
  `status_sewa` enum('0','1','2') NOT NULL,
  `status_pembayaran` enum('pending','confirm','cancel','paid') NOT NULL,
  `jns_pengambilan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_sewa`
--

INSERT INTO `tb_sewa` (`id_sewa`, `kode`, `id_customer`, `tanggal_sewa`, `tanggal_kembali`, `tanggal_pengembalian`, `keterlambatan`, `status_sewa`, `status_pembayaran`, `jns_pengambilan`) VALUES
(1, 'TR-OS95SIEVZ', 10, '2021-01-17', '2021-01-20', '2021-01-17', '0', '2', 'paid', 'Ketoko'),
(2, 'TR-OFIKAHENW', 10, '2021-01-17', '2021-01-20', '2021-01-17', '0', '2', 'paid', 'Diantar'),
(3, 'TR-OJ5BNYPUA', 10, '2021-01-17', '2021-01-20', '0000-00-00', '', '0', 'cancel', 'Ketoko'),
(4, 'TR-OA4NWUI5O', 10, '2021-01-17', '2021-01-19', '0000-00-00', '', '0', 'cancel', 'Ketoko'),
(5, 'TR-OOWXJSJQX', 10, '2021-01-17', '2021-01-20', '0000-00-00', '', '0', 'cancel', 'Ketoko'),
(6, 'TR-O3QIGQFAX', 10, '2021-01-17', '2021-01-20', '2021-01-17', '0', '2', 'paid', 'COD'),
(7, 'TR-OAEOJTRHD', 10, '2021-01-17', '2021-01-20', '0000-00-00', '', '1', 'confirm', 'COD');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indexes for table `tb_detail_sewa`
--
ALTER TABLE `tb_detail_sewa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_feed`
--
ALTER TABLE `tb_feed`
  ADD PRIMARY KEY (`id_feed`);

--
-- Indexes for table `tb_sewa`
--
ALTER TABLE `tb_sewa`
  ADD PRIMARY KEY (`id_sewa`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tb_detail_sewa`
--
ALTER TABLE `tb_detail_sewa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_feed`
--
ALTER TABLE `tb_feed`
  MODIFY `id_feed` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_sewa`
--
ALTER TABLE `tb_sewa`
  MODIFY `id_sewa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
