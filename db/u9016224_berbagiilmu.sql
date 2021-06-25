-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 25, 2021 at 10:01 PM
-- Server version: 10.3.29-MariaDB-cll-lve
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u9016224_berbagiilmu`
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
(1, 'Admin', 'L', 'Sumedang', '1996-04-23', 'Purwakarta', 89661203309, 'Rizkia_Administrator', 'rizkia_adm', 'admin', '2.jpg'),
(2, 'Admin', 'L', 'Tuban', '1986-05-16', 'Purwakarta', 85223804545, 'Yedy_Administrator', 'Yn_adm', 'admin', '3.jpg');

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
(55, 'Standar Pemeliharaan Sarana Keamanan', 12, '09', '2021-06-23'),
(56, 'BUKU PANDUAN Laporan Kegiatan Kerja Produksi LKKP ', 12, '09', '2021-06-23'),
(57, 'Kepmen Tata Cara Napi Bekerja', 11, '09', '2021-06-24'),
(58, 'kepmen-th-1990-tentang-dana-penunjang-narapidana-d', 11, '09', '2021-06-24'),
(59, 'Permenkumham Nomor 33 Tahun 2015 Tentang Pengamana', 13, '09', '2021-06-24'),
(60, 'Mekanisme Pemindahan Narapidana', 13, '09', '2021-06-24'),
(61, 'PENYAM~1', 13, '09', '2021-06-24'),
(62, 'Perlindungan_Hukum_Terhadap_Anak_Yang_Be', 13, '09', '2021-06-24');

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
('A_1', 'Permenkumham MHH-24.PK.01.01.01', 'Amir Syamsudin', 1, '08', 'Indonesia', '2021-06-24'),
('A_2', 'PP 58 Tahun 1999 tentang Perawatan Tahanan', 'Presiden RI', 1, '08', 'Indonesia', '2021-06-24'),
('A_3', 'Revitalisasi_Penyelenggaraan_Pemasyaraka', 'Widodo Ekatjahjana', 1, '08', 'Indonesia', '2021-06-24');

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
  `member_nama` varchar(40) DEFAULT NULL,
  `member_jk` varchar(1) DEFAULT NULL,
  `member_ttl` varchar(20) DEFAULT NULL,
  `member_tglahir` date DEFAULT NULL,
  `member_alamat` varchar(50) DEFAULT NULL,
  `member_tlp` varchar(15) DEFAULT NULL,
  `member_username` varchar(20) DEFAULT NULL,
  `member_email` varchar(40) DEFAULT NULL,
  `member_password` varchar(40) DEFAULT NULL,
  `member_foto` varchar(40) DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `member_nama`, `member_jk`, `member_ttl`, `member_tglahir`, `member_alamat`, `member_tlp`, `member_username`, `member_email`, `member_password`, `member_foto`) VALUES
(11, 'Rizal Madani', 'L', 'Bandung', '1992-03-10', 'Cluster bumi tesa blok j no 5 rt/rw 63/4 kec purwa', '087827502793', 'rizalhafiz', 'rizalmadani.rm77@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'default.png'),
(12, 'Moch. Rizkia Hidayat', 'L', 'Sumedang', '1996-04-23', 'Sumedang', '089661203309', 'Rizkia', 'rizkiaerr@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'default.png'),
(13, 'Yedy Nurdiansyah', 'L', 'Tuban', '1986-05-16', 'Purwakarta', '085223804545', 'yn_yedy', 'ynyedy@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'default.png'),
(14, 'Aan Andiansyah', 'L', 'Ciamis', '1992-04-19', 'Purwakarta', '082218852455', 'aanciamis', 'aanciamis@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'default.png'),
(15, 'Egih Rahmat', 'L', 'Sumedang', '1993-07-06', 'Jl Jati Baru E 13 No 8A, RT 5 RW 8, Kec Margaasih,', '089604672521', 'egih.rahmat', 'egih.rahmat@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'default.png'),
(16, 'Adi Firman Sahala Maringan Siregar', 'L', 'Batam', '1997-02-16', 'Perum grand panghegar', '087716942523', 'Firman Siregar', 'siregarfirman617@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'default.png'),
(17, 'Dimas Ferary R', 'L', 'Yogyakarta', '1996-05-01', 'Jl. Desa No 129 RT05 RW03', '087822723496', 'dimasferary', 'ferary.dimas@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'default.png'),
(18, 'Silvani Dewi Aferiska', 'P', 'Cirebon', '1998-04-01', 'Purwakarta, Jawa Barat', '081930955959', 'silvanidewia', 'silvanidewia@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'default.png'),
(19, 'Yogy Yudistira Gumelar', 'L', 'Sukabumi', '1996-08-25', 'Jl.Amubawasasana Babakan Bandung RT 06 RW 01 Kelur', '081297420775', 'Yogy Yudistira', 'yogy.yudistira25@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'default.png'),
(20, 'Triadi Permana', 'L', 'Bandung', '1992-10-23', 'Sukajadi, Margamukti Sumedang Utara Kabupaten Sume', '082312454081', 'Triadipermana', 'triadipermana26@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'default.png'),
(21, 'Cakra Saputra', 'L', 'Ciamis', '1993-04-02', 'Dusun Cipantaran RT 18 RW 04 Desa Cibeureum Kota B', '085223554777', 'Cakra', 'cakrasaputra11@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'default.png'),
(22, 'Eka Oktaviani', 'P', 'Bandung', '1992-02-10', 'Jalan Cikutra Sukasari II No.17 RT 02/04 Bandung', '081221183535', 'Ekaokta', 'ekaagiloo@rocketmail.com', '25d55ad283aa400af464c76d713c07ad', 'default.png'),
(23, 'Rizkar Hidayat', 'L', 'kuningan', '1970-01-01', 'perum panghegar', '082214944964', 'rizkar ', 'saputrafachmy@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'default.png'),
(24, 'Muhamad Kuncoro Hadi Saputro ', 'L', 'Bandung', '1992-08-02', 'KPAD Cilame Permai Jl Ajudan Jenderal B/86', '081385654773', 'mkunco0208 ', 'kncoro92@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'default.png'),
(25, 'Dedi Hidayat', 'L', 'Ciamis', '1992-03-15', 'Dusun Sembungjaya RT 10 RW 08 Desa Mekarmukti Keca', '083820330789', 'Dedi92', 'dedihidayat16@yahoo.com', '25d55ad283aa400af464c76d713c07ad', 'default.png'),
(26, 'Bayu Kurniawan', 'L', 'Jakarta', '1970-01-01', 'Green Selaawi Residnce Blok C7', '081348686891', 'Bayu', 'masbhay91@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'default.png'),
(27, 'Ridwan Firmansyah', 'L', 'Bandung', '1995-06-09', 'JL. MR. DR. Kusuma Atmaja No. 14, Cipaisan, Purwak', '082112805073', 'RidwanF', 'ridwanfirmansyah1095@gmail.com', '23b94f42396e0cb76c4309e8d1aca804', 'default.png'),
(28, 'Ridwan Firmansyah', 'L', 'Bandung', '1995-06-09', 'JL. MR. DR. Kusuma Atmaja No. 14, Cipaisan, Purwak', '082112805073', 'RidwanF', 'ridwanfirmansyah1095@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'default.png'),
(29, 'Imay Lesmana', 'L', 'Cililin', '1992-12-23', 'Gang Benteng Purwakarta RT 09 RW 03', '082213090002', 'Imaylesmana', 'imay.lesmana@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'default.png'),
(30, 'Rafi firman firdaus', 'L', 'Bandung', '1970-01-01', 'Kp.ciseupang rt 02/06 desa nagrog kecamatan cicale', '081909876524', 'Raffi', 'raffifirmanf@gmai.com', '9127c368363bc0c6ba54463a7bf4b030', 'default.png'),
(31, 'Rizki Muladi Irawan', 'L', 'Bandung', '1996-08-02', 'Purwakarta', '081316113851', 'Rizkimuladii', 'rizkimuladii@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'default.png'),
(32, 'Rafi firman firdaus', 'L', 'Bandung', '1998-10-28', 'Kp.ciseupang rt 02/06 desa nagrog kecamatan cicale', '081909876524', 'Raffifirman', 'raffifirmanf@gmail.com', '9127c368363bc0c6ba54463a7bf4b030', 'default.png'),
(33, 'Putra Setia Nugraha', 'L', 'Bandung', '1997-09-28', 'Jl. Raya Timur No. 525 RT 05/13 Desa Cicalengka We', '082128805003', 'Putrasetia', 'putra_setianugraha@yahoo.com', '25d55ad283aa400af464c76d713c07ad', 'default.png'),
(34, 'Muhammad Fazri Kusriadi', 'L', 'Bandung', '1970-01-01', 'Komp Rama Birus Asri Blok 38 No 11', '082216950879', 'fazri17', 'muhamadfazrikusriadi@gmail.com', '3f2dd50eb6197773fd112e0b7f887b6a', 'default.png'),
(35, 'Ihsan Dwi Rahayu', 'L', 'Tasikmalaya', '1996-11-11', 'Purwakarta', '085310205044', 'Ihsandr', 'ihsandwirahayu@yahoo.com', '25d55ad283aa400af464c76d713c07ad', 'default.png'),
(36, 'Didik Ardianto', 'L', 'Jakarta', '1995-01-29', 'Rt 001/005 Kel. Cikiwul Kec. Bantargebang Kota Bek', '082111425143', 'Didikar25', 'didikar25@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'default.png'),
(37, 'Miftahudin', 'L', 'Bogor', '1994-06-17', 'Kp. Cipayung RT 02 RW 06 Kelurahan Pondok Rajeg Ci', '087873773664', 'Miftah17', 'mmiftahudin1994@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'default.png'),
(38, 'Herry Eko Bayu Christyanto', 'L', 'Indramayu', '1990-01-04', 'Desa Rambatan Kulon RT. 14 / RW. 02 Kec. Lohbener ', '089662761111', 'Herry', 'christyanto.herry@yahoo.com', '25d55ad283aa400af464c76d713c07ad', 'default.png'),
(39, 'Detasia Dwi Putra Dewantara Zaenal', 'L', 'Denpasar', '1994-04-29', 'Saptamarga Y 11 RT 002 RW 004 Kelurahan Campaka Ke', '081299252324', 'Detasia', 'detadewantara@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'default.png'),
(40, 'Bramantyo Junior', 'L', 'Jakarta', '1995-06-11', 'Perum Bukit Asri Blok E3 No.9 Cibinong-Bogor', '081211505225', 'braamm', 'tyopurba@yahoo.com', '25d55ad283aa400af464c76d713c07ad', 'default.png'),
(42, 'Dimas Rakawibowo', 'L', 'Ponorogo', '1999-10-21', 'Jl. Veteran, Gg. Tritura, Ciseureuh, Purwakarta', '085257206456', 'dimas_raka', 'dimasrakawibowo07@gmail.com', '59e234735aea7f441fd7460bea10795d', 'default.png'),
(43, 'Alfis Renaldi Fadilah', 'L', 'Bandung', '1995-10-09', 'Kp. Sukamaju RT04 RW06, Kelurahan Padasuka, Cimahi', '087839822377', 'alfisrenaldi', 'alfisrenaldi17@gmail.com', '85c573d58f27237b540741c659877601', 'default.png'),
(44, 'Reynaldi dwi putra', 'L', 'Bandung', '2000-09-02', 'Kp. Mekarsari Rt.01/23 , kel/kec. Baleendah, Kab. ', '082240726572', 'reredp', 'reydwi34@gmail.com', 'c70f2feef1c82791ec279294c8fdbd4a', 'default.png'),
(45, 'Joko Umbaran', 'L', 'Bandung', '1997-02-09', 'Karang Mulya Rt02 Rw05, Kel. Cigondewah Kaler, Kec', '081317912697', 'Aajoko09', 'joko11bdg@gmail.com', 'a3f62676d7e48582b997951aa4bb193d', 'default.png'),
(46, 'Setya Budi Pratama', 'L', 'Ciamis', '2001-03-04', 'Kp. Sukamulya Ds. Cimurah Kec. Karangpawitan Kab. ', '087891066945', 'Setyabudi', 'setyabudi9e@gmail.com', 'bdd35ac1b49855ae0bf02617056cbac7', 'default.png'),
(47, 'Eko subiakto', 'L', 'Bandung', '2000-02-03', 'Jln. Pangaritan utara no.34 rt 05/07 Kota Bandung', '082124884690', 'ekos3295', 'ekos3295@gmail.com', '3c1f01711af55bfc3abc1a4f0e2d014e', 'default.png'),
(48, 'Taufik Akhbar Mulyana', 'L', 'Bandung', '1998-04-29', 'Kp. Leuwigadung, Rt 02/ Rw 10, Desa Ciapus, Kecama', '088223551042', 'Taufik Akhbar', 'taufikakhbar29@gmail.com', 'efce5dc51e7636c0828d4aa18b8fd71f', 'default.png'),
(49, 'Nurjaeni Hidayat', 'L', 'Kuningan', '1991-06-02', 'Dusun Kliwon RT02 / RW01 Desa Datar Kecamatan Cida', '087784836179', 'Jend_Hidayat', 'nurjaenihidayat@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'default.png'),
(50, 'AnitaBonita ', 'P', 'Jakarta', '1994-08-29', 'Perum Bumi Bekasi Baru Blok C No. 471 RT09 RW10 Ke', '082124525073', 'Anita', 'anniitta.b2@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'default.png');

-- --------------------------------------------------------

--
-- Table structure for table `personality`
--

CREATE TABLE `personality` (
  `no_personality` int(11) NOT NULL,
  `personality_id` varchar(11) CHARACTER SET latin1 NOT NULL,
  `personality_tema` varchar(40) CHARACTER SET latin1 NOT NULL,
  `isi_personality` varchar(3000) CHARACTER SET latin1 NOT NULL,
  `tanggal_upload` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `personality_komen`
--

CREATE TABLE `personality_komen` (
  `no_personality_komen` int(11) NOT NULL,
  `no_personality` int(11) NOT NULL,
  `personality_komen_id` int(11) NOT NULL,
  `personality_komen_pesan` varchar(3000) CHARACTER SET latin1 NOT NULL,
  `personality_komen_tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Indexes for table `personality`
--
ALTER TABLE `personality`
  ADD PRIMARY KEY (`no_personality`);

--
-- Indexes for table `personality_komen`
--
ALTER TABLE `personality_komen`
  ADD PRIMARY KEY (`no_personality_komen`),
  ADD KEY `fk_no_personality` (`no_personality`) USING BTREE;

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
  ADD KEY `fk_no_thread` (`no_thread`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` smallint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `buku_id` smallint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` smallint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `personality`
--
ALTER TABLE `personality`
  MODIFY `no_personality` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personality_komen`
--
ALTER TABLE `personality_komen`
  MODIFY `no_personality_komen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `thread`
--
ALTER TABLE `thread`
  MODIFY `no_thread` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `thread_komen`
--
ALTER TABLE `thread_komen`
  MODIFY `no_thread_komen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- Constraints for table `personality_komen`
--
ALTER TABLE `personality_komen`
  ADD CONSTRAINT `fk_no_personality` FOREIGN KEY (`no_personality`) REFERENCES `personality` (`no_personality`) ON DELETE CASCADE;

--
-- Constraints for table `thread_komen`
--
ALTER TABLE `thread_komen`
  ADD CONSTRAINT `fk_no_thread` FOREIGN KEY (`no_thread`) REFERENCES `thread` (`no_thread`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
