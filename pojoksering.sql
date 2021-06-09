-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2021 at 08:27 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `berbagiilmu`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` smallint(3) NOT NULL,
  `admin_nama` varchar(20) DEFAULT NULL,
  `admin_jk` varchar(1) DEFAULT NULL,
  `admin_ttl` varchar(20) DEFAULT NULL,
  `admin_tglahir` date DEFAULT NULL,
  `admin_alamat` varchar(50) DEFAULT NULL,
  `admin_tlp` decimal(13,0) DEFAULT NULL,
  `admin_username` varchar(20) DEFAULT NULL,
  `admin_email` varchar(40) DEFAULT NULL,
  `admin_password` varchar(20) DEFAULT NULL,
  `admin_foto` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_nama`, `admin_jk`, `admin_ttl`, `admin_tglahir`, `admin_alamat`, `admin_tlp`, `admin_username`, `admin_email`, `admin_password`, `admin_foto`) VALUES
(1, 'Adira', 'L', 'Bandung', '0000-00-00', 'Jl Kramatjati No 32 Bandung', '89695686313', 'admin', 'fleqsy_afc@yahoo.com', 'admin_coi11', '1.png'),
(2, 'Admin', 'L', 'Sumedang', '1996-04-23', 'Purwakarta', '89661203309', 'Rizkia_administrator', 'rizkiaerr@gmail.com', 'admin', '2.png');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `buku_id` smallint(3) NOT NULL,
  `buku_judul` varchar(50) DEFAULT NULL,
  `buku_author` smallint(3) DEFAULT NULL,
  `buku_kategori` varchar(10) DEFAULT NULL,
  `tanggal_upload` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`buku_id`, `buku_judul`, `buku_author`, `buku_kategori`, `tanggal_upload`) VALUES
(50, 'asd', 13, '09', '2021-06-04'),
(51, '1 MODUL PENATAUSAHAAN PERLENGKAPAN KEAMANAN (1)', 13, '09', '2021-06-10');

-- --------------------------------------------------------

--
-- Table structure for table `buku_admin`
--

CREATE TABLE `buku_admin` (
  `buku_id` varchar(5) NOT NULL,
  `buku_judul` varchar(50) DEFAULT NULL,
  `buku_penulis` varchar(50) DEFAULT NULL,
  `buku_author` smallint(3) DEFAULT NULL,
  `buku_kategori` varchar(10) DEFAULT NULL,
  `buku_bahasa` varchar(10) DEFAULT NULL,
  `tanggal_upload` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku_admin`
--

INSERT INTO `buku_admin` (`buku_id`, `buku_judul`, `buku_penulis`, `buku_author`, `buku_kategori`, `buku_bahasa`, `tanggal_upload`) VALUES
('A_1', 'Modul Penatausahaan Perlengkapan Keamanan', 'Yedy  Nurdiansyah', 1, '01', 'Indonesia', '2021-06-01'),
('A_2', 'asd', 'Yedy Nurdiansyah', 1, '01', 'Bahasa Ind', '2021-06-03');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` varchar(10) NOT NULL,
  `kategori_jenis` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori_jenis`) VALUES
('01', 'Kepegawaian dan Keuangan'),
('02', 'Urusan Umum'),
('03', 'Materi Diklat BPSDM'),
('04', 'Administrasi Keamanan dan Ketertiban'),
('05', 'Kegiatan Kerja'),
('06', 'Kesatuan Pengamanan Lembaga Pemasyarakatan'),
('07', 'Perawatan Narapidana dan Anak Didik'),
('08', 'Registrasi dan Bimbingan Kemasyarakatan'),
('09', 'Lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `member_id` smallint(3) NOT NULL,
  `member_nama` varchar(20) DEFAULT NULL,
  `member_jk` varchar(1) DEFAULT NULL,
  `member_ttl` varchar(20) DEFAULT NULL,
  `member_tglahir` date DEFAULT NULL,
  `member_alamat` varchar(50) DEFAULT NULL,
  `member_tlp` decimal(13,0) DEFAULT NULL,
  `member_username` varchar(20) DEFAULT NULL,
  `member_email` varchar(40) DEFAULT NULL,
  `member_password` varchar(40) DEFAULT NULL,
  `member_foto` varchar(40) DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `member_nama`, `member_jk`, `member_ttl`, `member_tglahir`, `member_alamat`, `member_tlp`, `member_username`, `member_email`, `member_password`, `member_foto`) VALUES
(13, 'Moch. Rizkia Hidayat', 'L', 'Sumedang', '1996-04-23', 'Sumedang', '89661203309', 'Rizkia', 'rizkiaerr@gmail.com', '25d55ad283aa400af464c76d713c07ad', '13.png'),
(14, 'Yedy Nurdiansyah', 'L', 'Tuban', '1986-05-16', 'Purwakarta', '85223804545', 'yn_yedy', 'ynyedy@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'default.png');

-- --------------------------------------------------------

--
-- Table structure for table `thread`
--

CREATE TABLE `thread` (
  `no_thread` int(11) NOT NULL,
  `thread_id` varchar(5) NOT NULL,
  `thread_subjek` varchar(30) NOT NULL,
  `thread_pesan` varchar(1000) NOT NULL,
  `tanggal_upload` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thread`
--

INSERT INTO `thread` (`no_thread`, `thread_id`, `thread_subjek`, `thread_pesan`, `tanggal_upload`) VALUES
(2, '13', 'Penanganan Warga Binaan', 'Apaka penanganan warga binaan di Lapas Kelas II B Purwakarta sudah baik? silahkan diisi komentar disini ya? :D', '2021-06-09 22:17:05');

-- --------------------------------------------------------

--
-- Table structure for table `thread_komen`
--

CREATE TABLE `thread_komen` (
  `no_thread_komen` int(11) NOT NULL,
  `no_thread` int(11) NOT NULL,
  `thread_komen_id` int(11) NOT NULL,
  `thread_komen_pesan` varchar(300) CHARACTER SET latin1 NOT NULL,
  `thread_komen_tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `thread_komen`
--

INSERT INTO `thread_komen` (`no_thread_komen`, `no_thread`, `thread_komen_id`, `thread_komen_pesan`, `thread_komen_tanggal`) VALUES
(1, 2, 13, 'wakwaw', '2021-06-10 00:00:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`buku_id`),
  ADD KEY `fk_author` (`buku_author`) USING BTREE,
  ADD KEY `fk_kategori` (`buku_kategori`) USING BTREE;

--
-- Indexes for table `buku_admin`
--
ALTER TABLE `buku_admin`
  ADD PRIMARY KEY (`buku_id`),
  ADD KEY `fk_author` (`buku_author`),
  ADD KEY `fk_kategori` (`buku_kategori`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `thread`
--
ALTER TABLE `thread`
  ADD PRIMARY KEY (`no_thread`);

--
-- Indexes for table `thread_komen`
--
ALTER TABLE `thread_komen`
  ADD PRIMARY KEY (`no_thread_komen`),
  ADD KEY `fk_no_thread` (`no_thread`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` smallint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `buku_id` smallint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` smallint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `buku`
--
ALTER TABLE `buku`
  ADD CONSTRAINT `fk_kategori_member` FOREIGN KEY (`buku_kategori`) REFERENCES `kategori` (`kategori_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_member` FOREIGN KEY (`buku_author`) REFERENCES `member` (`member_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `buku_admin`
--
ALTER TABLE `buku_admin`
  ADD CONSTRAINT `fk_author` FOREIGN KEY (`buku_author`) REFERENCES `admin` (`admin_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_kategori` FOREIGN KEY (`buku_kategori`) REFERENCES `kategori` (`kategori_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `thread_komen`
--
ALTER TABLE `thread_komen`
  ADD CONSTRAINT `fk_no_thread` FOREIGN KEY (`no_thread`) REFERENCES `thread` (`no_thread`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
