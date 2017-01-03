-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2016 at 01:47 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `topsis_bidan`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_peserta`
--

CREATE TABLE `data_peserta` (
  `id_data` int(10) NOT NULL,
  `NIK` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `pend` int(10) NOT NULL,
  `t_kemampuan` int(10) NOT NULL,
  `t_tulis` int(10) NOT NULL,
  `t_pribadi` int(10) NOT NULL,
  `wawancara1` int(10) NOT NULL,
  `wawancara2` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_peserta`
--

INSERT INTO `data_peserta` (`id_data`, `NIK`, `nama`, `pend`, `t_kemampuan`, `t_tulis`, `t_pribadi`, `wawancara1`, `wawancara2`) VALUES
(1, '350512203930001', 'Sely Nurhidayat', 50, 70, 100, 80, 60, 70),
(2, '350512203930002', 'Afrianti Candra Ayu R', 50, 75, 80, 81, 75, 75),
(3, '350512203930003', 'Ika Novia Candra P', 50, 74, 100, 80, 71, 85),
(4, '350512203930004', 'Aulia Paramita', 50, 80, 80, 86, 72, 86),
(5, '350512203930005', 'Susi Ismawati', 50, 81, 90, 85, 73, 81),
(6, '350512203930006', 'Yunita Sari', 50, 89, 65, 87, 78, 72),
(7, '350512203930007', 'Okta Dwi F', 50, 79, 60, 89, 79, 73),
(8, '350512203930008', 'Ani Vita', 50, 82, 100, 79, 75, 81),
(9, '350512203930009', 'Luluk W', 50, 83, 60, 80, 81, 80),
(10, '350512203930010', 'Ira Dwi A', 50, 70, 95, 84, 80, 80),
(11, '350512203930011', 'Siti Zubaidah', 50, 78, 88, 71, 75, 79),
(12, '350512203930012', 'Ressania Fitri Ekasari', 100, 76, 79, 81, 74, 91),
(13, '350512203930013', 'Retno Wulandari', 50, 69, 100, 81, 78, 86),
(14, '350512203930014', 'Diyah Kusuma Wardani', 50, 73, 61, 82, 79, 82),
(15, '350512203930015', 'Ryski Asri Wahida', 100, 74, 88, 79, 76, 83),
(16, '350512203930016', 'Nilamsari Dwimasiuti', 50, 75, 91, 78, 80, 84),
(17, '350512203930017', 'Pusvita Anggraeni', 50, 78, 78, 77, 81, 85),
(18, '350512203930018', 'Shindy Ayu Widyaswara', 50, 79, 98, 79, 83, 87),
(19, '350512203930019', 'Elia Ika Rahmawati', 50, 80, 100, 81, 84, 81),
(20, '350512203930020', 'Roro Agustina', 50, 81, 100, 80, 85, 79),
(21, '350512203930021', 'Sendi Ira Wibowo', 50, 78, 50, 79, 79, 81),
(22, '350512203930022', 'Sri Wahyuni', 50, 77, 100, 78, 89, 82),
(23, '350512203930023', 'Devy Costantia Rini', 50, 88, 65, 84, 85, 87),
(24, '350512203930024', 'Yekti Astuti', 50, 90, 87, 82, 84, 78),
(25, '350512203930025', 'Dania Lestari', 50, 73, 92, 76, 81, 79),
(26, '350512203930026', 'Putri Titian ', 50, 74, 100, 86, 78, 81),
(27, '350512203930027', 'Nisa Putri', 100, 75, 99, 84, 79, 83),
(28, '350512203930028', 'Danis Kanaya', 100, 78, 81, 82, 76, 76),
(29, '350512203930029', 'Aliya Mahadewi', 50, 81, 65, 83, 81, 80),
(30, '350512203930030', 'Dina Andriana', 50, 83, 80, 78, 81, 82),
(31, '350512203930031', 'Narulita Harumadewi', 100, 79, 90, 73, 79, 79),
(32, '350512203930032', 'Prastika Putri', 50, 81, 94, 72, 79, 81),
(33, '350512203930033', 'Putri Sabila', 100, 78, 82, 75, 79, 80),
(34, '350512203930034', 'Nabila Kania D', 100, 78, 78, 78, 75, 80),
(35, '350512203930035', 'Annisa Wiji', 50, 79, 85, 79, 72, 81),
(36, '350512203930036', 'Nevi Widianti', 50, 79, 85, 81, 81, 80),
(37, '350512203930037', 'Qopitinia Nurul Afka', 50, 76, 95, 80, 80, 79),
(38, '350512203930038', 'Fitri Zulfaidah', 50, 79, 90, 80, 84, 75),
(39, '350512203930039', 'Ervin Rachmawati', 50, 80, 97, 82, 83, 72),
(40, '350512203930040', 'Salsabila Anggraini', 50, 86, 90, 85, 89, 91),
(41, '350512203930041', 'Ririn Ekawati', 50, 81, 90, 89, 78, 80),
(42, '350512203930042', 'Arina Suci R', 50, 85, 80, 89, 79, 75),
(43, '350512203930043', 'Elok Eka P', 50, 87, 55, 86, 100, 100),
(44, '350512203930044', 'Heni Dwi K', 50, 89, 100, 83, 100, 100),
(45, '350512203930045', 'Mona Aliya S', 50, 85, 88, 100, 100, 100),
(46, '350512203930046', 'Amidya Kalista', 50, 86, 77, 84, 73, 74),
(47, '350512203930047', 'Eka Pangastuti', 50, 87, 85, 81, 74, 79),
(48, '350512203930048', 'Ema Dian P', 50, 86, 95, 89, 87, 81),
(49, '350512203930049', 'Putri Mahardika', 50, 89, 100, 85, 82, 80),
(50, '350512203930050', 'Aginta Dwi Mahartika', 50, 81, 98, 85, 81, 80),
(51, '350512203930051', 'Tyas Prasati', 50, 80, 88, 79, 82, 80),
(52, '350512203930052', 'Nurul Hidayati', 50, 78, 92, 79, 82, 80),
(53, '350512203930053', 'Nurul Andriani', 50, 80, 100, 75, 85, 90),
(54, '350512203930054', 'Kalista Putri Pertiwi', 50, 80, 100, 85, 85, 88),
(55, '350512203930055', 'Prastiwi Mei S', 50, 80, 100, 85, 90, 90);

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `buka_pendaftaran` date NOT NULL,
  `terakhir_pendaftaran` date NOT NULL,
  `pengumuman_hasil` date NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `judul`, `buka_pendaftaran`, `terakhir_pendaftaran`, `pengumuman_hasil`, `isi`) VALUES
(1, 'Lowongan Kerja', '2016-06-01', '2016-06-10', '2016-06-18', 'Dibuka lowongan kerja sebagai karyawan di Daqu Sehat. Bagi Anda yang memiliki kriteria sesuai, dipersilahkan mendaftar.');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_kelamin`
--

CREATE TABLE `jenis_kelamin` (
  `id` int(11) NOT NULL,
  `jenis` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_kelamin`
--

INSERT INTO `jenis_kelamin` (`id`, `jenis`) VALUES
(1, 'Laki-laki'),
(2, 'Perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id` int(11) NOT NULL,
  `jenjang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`id`, `jenjang`) VALUES
(1, 'D3'),
(2, 'S1');

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `NIK` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `no_tes` varchar(100) NOT NULL,
  `tmp_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `pendidikan` varchar(100) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `berkas` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`NIK`, `nama_lengkap`, `no_tes`, `tmp_lahir`, `tgl_lahir`, `jk`, `alamat`, `pendidikan`, `foto`, `berkas`) VALUES
('350512203930001', 'Sely Nurhidayat', 'PST001', 'Banyuwangi', '1991-08-21', 'Perempuan', 'Banyuwangi', 'D3', '', ''),
('350512203930002', 'Afrianti Candra Ayu R', 'PST002', 'Malang', '1990-08-12', 'Perempuan', 'Malang', 'D3', '', ''),
('350512203930003', 'Ika Novia Candra P', 'PST003', 'Malang', '1990-01-20', 'Perempuan', 'Malang', 'D3', '', ''),
('350512203930004', 'Aulia Paramita', 'PST004', 'Batu', '1993-03-21', 'Perempuan', 'Batu', 'D3', '', ''),
('350512203930005', 'Susi Ismawati', 'PST005', 'Malang', '1992-12-12', 'Perempuan', 'Malang', 'D3', '', ''),
('350512203930006', 'Yunita Sari', 'PST006', 'Padang ', '1990-01-01', 'Perempuan', 'Padang Sumatera Barat', 'D3', '', ''),
('350512203930007', 'Okta Dwi F', 'PST007', 'Probolinggo', '1992-02-12', 'Perempuan', 'Probolinggo', 'D3', '', ''),
('350512203930008', 'Ani Vita', 'PST008', 'Blitar', '1991-06-17', 'Perempuan', 'Malang', 'D3', '', ''),
('350512203930009', 'Luluk W', 'PST009', 'Bim', '1992-08-08', 'Perempuan', 'Surabaya', 'D3', '', ''),
('350512203930010', 'Ira Dwi A', 'PST010', 'Pasuruan', '1993-01-01', 'Perempuan', 'Malang', 'D3', '', ''),
('350512203930011', 'Siti Zubaidah', 'PST011', 'Pasuruan ', '1990-07-05', 'Perempuan', 'Pasuruan', 'D3', '', ''),
('350512203930012', 'Ressania Fitri Ekasari', 'PST012', 'Tulungagung', '1993-02-12', 'Perempuan', 'Tulungagung', 'S1', '', ''),
('350512203930013', 'Retno Wulandari', 'PST013', 'Lumajang', '1994-12-11', 'Perempuan', 'Lumajang', 'D3', '', ''),
('350512203930014', 'Diyah Kusuma Wardani', 'PST014', 'Malang', '1993-10-22', 'Perempuan', 'Malang', 'D3', '', ''),
('350512203930015', 'Ryski Asri Wahida', 'PST015', 'Malang', '1994-10-12', 'Perempuan', 'Jember', 'S1', '', ''),
('350512203930016', 'Nilamsari Dwimasiuti', 'PST016', 'Jepara', '1992-06-18', 'Perempuan', 'Malang', 'D3', '', ''),
('350512203930017', 'Pusvita Anggraeni', 'PST017', 'Blitar', '1990-04-11', 'Perempuan', 'Lumajang', 'D3', '', ''),
('350512203930018', 'Shindy Ayu Widyaswara', 'PST018', 'Buleleng', '1990-06-12', 'Perempuan', 'Banyuwangi', 'D3', '', ''),
('350512203930019', 'Elia Ika Rahmawati', 'PST019', 'Kendal', '1991-01-12', 'Perempuan', 'Yogyakarta', 'D3', '', ''),
('350512203930020', 'Roro Agustina', 'PST020', 'Malang', '1994-11-03', 'Perempuan', 'Malang', 'D3', '', ''),
('350512203930021', 'Sendi Ira Wibowo', 'PST021', 'Banyuwangi', '1990-12-12', 'Perempuan', 'Banyuwangi', 'D3', '', ''),
('350512203930022', 'Sri Wahyuni', 'PST022', 'Jember', '1989-12-01', 'Perempuan', 'Gresik', 'D3', '', ''),
('350512203930023', 'Devy Costantia Rini', 'PST023', 'Denpasar', '1989-01-01', 'Perempuan', 'Denpasar', 'D3', '', ''),
('350512203930024', 'Yekti Astuti', 'PST024', 'Palu', '1990-02-11', 'Perempuan', 'Yogyakarta', 'D3', '', ''),
('350512203930025', 'Dania Lestari', 'PST025', 'Malang', '1989-02-19', 'Perempuan', 'Malang', 'D3', '', ''),
('350512203930026', 'Putri Titian ', 'PST026', 'Malang', '1993-04-15', 'Perempuan', 'Malang', 'D3', '', ''),
('350512203930027', 'Nisa Putri', 'PST027', 'Blitar', '1992-07-14', 'Perempuan', 'Blitar', 'S1', '', ''),
('350512203930028', 'Danis Kanaya', 'PST028', 'Blitar', '1989-10-16', 'Perempuan', 'Blitar', 'S1', '', ''),
('350512203930029', 'Aliya Mahadewi', 'PST029', 'Blitar', '1991-04-05', 'Perempuan', 'Surabaya', 'D3', '', ''),
('350512203930030', 'Dina Andriana', 'PST030', 'Malang', '1994-03-21', 'Perempuan', 'Pasuruan', 'D3', '', ''),
('350512203930031', 'Narulita Harumadewi', 'PST031', 'Lampung', '1993-10-23', 'Perempuan', 'Kediri', 'S1', '', ''),
('350512203930032', 'Prastika Putri', 'PST032', 'Pasuruan', '1991-02-11', 'Perempuan', 'Pasuruan', 'D3', '', ''),
('350512203930033', 'Putri Sabila', 'PST033', 'Blitar', '1994-02-01', 'Perempuan', 'Blitar', 'S1', '', ''),
('350512203930034', 'Nabila Kania D', 'PST034', 'Blitar', '1990-03-21', 'Perempuan', 'Blitar', 'S1', '', ''),
('350512203930035', 'Annisa Wiji', 'PST035', 'Bengkulu', '1993-06-18', 'Perempuan', 'Blitar', 'D3', '', ''),
('350512203930036', 'Nevi Widianti', 'PST036', 'Malang', '1989-04-14', 'Perempuan', 'Malang', 'D3', '', ''),
('350512203930037', 'Qopitinia Nurul Afka', 'PST037', 'Malang', '1992-01-10', 'Perempuan', 'Malang', 'D3', '', ''),
('350512203930038', 'Fitri Zulfaidah', 'PST038', 'Malang', '1993-05-17', 'Perempuan', 'Malang', 'D3', '', ''),
('350512203930039', 'Ervin Rachmawati', 'PST039', 'Malang', '1993-07-26', 'Perempuan', 'Malang', 'D3', '', ''),
('350512203930040', 'Salsabila Anggraini', 'PST040', 'Jember', '1993-08-22', 'Perempuan', 'Jember', 'D3', '', ''),
('350512203930041', 'Ririn Ekawati', 'PST041', 'Banyuwangi', '1992-03-18', 'Perempuan', 'Banyuwangi', 'D3', '', ''),
('350512203930042', 'Arina Suci R', 'PST042', 'Surabaya', '1993-08-19', 'Perempuan', 'Surabaya', 'D3', '', ''),
('350512203930043', 'Elok Eka P', 'PST043', 'Jakarta', '1993-11-21', 'Perempuan', 'Surabaya', 'D3', '', ''),
('350512203930044', 'Heni Dwi K', 'PST044', 'Gresik', '1993-12-12', 'Perempuan', 'Gresik', 'D3', '', ''),
('350512203930045', 'Mona Aliya S', 'PST045', 'Jakarta', '1990-05-22', 'Perempuan', 'Malang', 'D3', '', ''),
('350512203930046', 'Amidya Kalista', 'PST046', 'Bandung', '1990-09-09', 'Perempuan', 'Gresik', 'D3', '', ''),
('350512203930047', 'Eka Pangastuti', 'PST047', 'Lamongan', '1990-09-19', 'Perempuan', 'Lamongan', 'D3', '', ''),
('350512203930048', 'Ema Dian P', 'PST048', 'Semarang', '1990-10-10', 'Perempuan', 'Malang', 'D3', '', ''),
('350512203930049', 'Putri Mahardika', 'PST049', 'Malang', '1990-11-11', 'Perempuan', 'Bojonegoro', 'D3', '', ''),
('350512203930050', 'Aginta Dwi Mahartika', 'PST050', 'Depok', '1990-12-21', 'Perempuan', 'Malang', 'D3', '', ''),
('350512203930051', 'Tyas Prasati', 'PST051', 'Blitar', '1993-11-11', 'Perempuan', 'Malang', 'D3', '', ''),
('350512203930052', 'Nurul Hidayati', 'PST052', 'Cepu', '1994-01-01', 'Perempuan', 'Bojonegoro', 'D3', '', ''),
('350512203930053', 'Nurul Andriani', 'PST053', 'Bojonegoro', '1994-05-15', 'Perempuan', 'Bojonegoro', 'D3', '', ''),
('350512203930054', 'Kalista Putri Pertiwi', 'PST054', 'Bojonegoro', '1989-06-16', 'Perempuan', 'Bojonegoro', 'D3', '', ''),
('350512203930055', 'Prastiwi Mei S', 'PST055', 'Surabaya', '1994-06-13', 'Perempuan', 'Bojonegoro', 'D3', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jumlah_kuadrat`
--

CREATE TABLE `tbl_jumlah_kuadrat` (
  `jenis_nilai` varchar(100) NOT NULL,
  `pend` float NOT NULL,
  `t_kemampuan` float NOT NULL,
  `t_tulis` float NOT NULL,
  `t_pribadi` float NOT NULL,
  `wawancara1` float NOT NULL,
  `wawancara2` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jumlah_kuadrat`
--

INSERT INTO `tbl_jumlah_kuadrat` (`jenis_nilai`, `pend`, `t_kemampuan`, `t_tulis`, `t_pribadi`, `wawancara1`, `wawancara2`) VALUES
('JUMLAH KUADRAT', 190000, 352088, 422602, 367987, 359591, 371034),
('AKAR KUADRAT', 435.89, 593.37, 650.078, 606.619, 599.659, 609.126);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kedekatan_relatif`
--

CREATE TABLE `tbl_kedekatan_relatif` (
  `NIK` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `dekat_relatif` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kedekatan_relatif`
--

INSERT INTO `tbl_kedekatan_relatif` (`NIK`, `nama`, `dekat_relatif`) VALUES
('350512203930001', 'Sely Nurhidayat', 0.405236),
('350512203930002', 'Afrianti Candra Ayu R', 0.329742),
('350512203930003', 'Ika Novia Candra P', 0.444206),
('350512203930004', 'Aulia Paramita', 0.3642),
('350512203930005', 'Susi Ismawati', 0.414032),
('350512203930006', 'Yunita Sari', 0.312027),
('350512203930007', 'Okta Dwi F', 0.255679),
('350512203930008', 'Ani Vita', 0.458778),
('350512203930009', 'Luluk W', 0.268076),
('350512203930010', 'Ira Dwi A', 0.430294),
('350512203930011', 'Siti Zubaidah', 0.378818),
('350512203930012', 'Ressania Fitri Ekasari', 0.641376),
('350512203930013', 'Retno Wulandari', 0.451706),
('350512203930014', 'Diyah Kusuma Wardani', 0.236824),
('350512203930015', 'Ryski Asri Wahida', 0.660323),
('350512203930016', 'Nilamsari Dwimasiuti', 0.416259),
('350512203930017', 'Pusvita Anggraeni', 0.352823),
('350512203930018', 'Shindy Ayu Widyaswara', 0.468503),
('350512203930019', 'Elia Ika Rahmawati', 0.474634),
('350512203930020', 'Roro Agustina', 0.47444),
('350512203930021', 'Sendi Ira Wibowo', 0.207807),
('350512203930022', 'Sri Wahyuni', 0.476498),
('350512203930023', 'Devy Costantia Rini', 0.348335),
('350512203930024', 'Yekti Astuti', 0.436851),
('350512203930025', 'Dania Lestari', 0.410143),
('350512203930026', 'Putri Titian ', 0.459268),
('350512203930027', 'Nisa Putri', 0.719839),
('350512203930028', 'Danis Kanaya', 0.633391),
('350512203930029', 'Aliya Mahadewi', 0.288832),
('350512203930030', 'Dina Andriana', 0.37397),
('350512203930031', 'Narulita Harumadewi', 0.666236),
('350512203930032', 'Prastika Putri', 0.429196),
('350512203930033', 'Putri Sabila', 0.63961),
('350512203930034', 'Nabila Kania D', 0.617004),
('350512203930035', 'Annisa Wiji', 0.369682),
('350512203930036', 'Nevi Widianti', 0.392576),
('350512203930037', 'Qopitinia Nurul Afka', 0.433343),
('350512203930038', 'Fitri Zulfaidah', 0.418116),
('350512203930039', 'Ervin Rachmawati', 0.450008),
('350512203930040', 'Salsabila Anggraini', 0.476163),
('350512203930041', 'Ririn Ekawati', 0.429767),
('350512203930042', 'Arina Suci R', 0.383253),
('350512203930043', 'Elok Eka P', 0.391699),
('350512203930044', 'Heni Dwi K', 0.543699),
('350512203930045', 'Mona Aliya S', 0.521719),
('350512203930046', 'Amidya Kalista', 0.343919),
('350512203930047', 'Eka Pangastuti', 0.39602),
('350512203930048', 'Ema Dian P', 0.483176),
('350512203930049', 'Putri Mahardika', 0.491219),
('350512203930050', 'Aginta Dwi Mahartika', 0.466523),
('350512203930051', 'Tyas Prasati', 0.410715),
('350512203930052', 'Nurul Hidayati', 0.426926),
('350512203930053', 'Nurul Andriani', 0.481217),
('350512203930054', 'Kalista Putri Pertiwi', 0.491402),
('350512203930055', 'Prastiwi Mei S', 0.503488);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kriteria`
--

CREATE TABLE `tbl_kriteria` (
  `keterangan` varchar(100) NOT NULL,
  `pend` float NOT NULL,
  `t_kemampuan` float NOT NULL,
  `t_tulis` float NOT NULL,
  `t_pribadi` float NOT NULL,
  `wawancara1` float NOT NULL,
  `wawancara2` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kriteria`
--

INSERT INTO `tbl_kriteria` (`keterangan`, `pend`, `t_kemampuan`, `t_tulis`, `t_pribadi`, `wawancara1`, `wawancara2`) VALUES
('Bobot Kriteria', 0.15, 0.2, 0.2, 0.15, 0.15, 0.15);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kuadrat`
--

CREATE TABLE `tbl_kuadrat` (
  `NIK` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `pend` int(10) NOT NULL,
  `t_kemampuan` int(10) NOT NULL,
  `t_tulis` int(10) NOT NULL,
  `t_pribadi` int(10) NOT NULL,
  `wawancara1` int(10) NOT NULL,
  `wawancara2` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kuadrat`
--

INSERT INTO `tbl_kuadrat` (`NIK`, `nama`, `pend`, `t_kemampuan`, `t_tulis`, `t_pribadi`, `wawancara1`, `wawancara2`) VALUES
('350512203930001', 'Sely Nurhidayat', 2500, 4900, 10000, 6400, 3600, 4900),
('350512203930002', 'Afrianti Candra Ayu R', 2500, 5625, 6400, 6561, 5625, 5625),
('350512203930003', 'Ika Novia Candra P', 2500, 5476, 10000, 6400, 5041, 7225),
('350512203930004', 'Aulia Paramita', 2500, 6400, 6400, 7396, 5184, 7396),
('350512203930005', 'Susi Ismawati', 2500, 6561, 8100, 7225, 5329, 6561),
('350512203930006', 'Yunita Sari', 2500, 7921, 4225, 7569, 6084, 5184),
('350512203930007', 'Okta Dwi F', 2500, 6241, 3600, 7921, 6241, 5329),
('350512203930008', 'Ani Vita', 2500, 6724, 10000, 6241, 5625, 6561),
('350512203930009', 'Luluk W', 2500, 6889, 3600, 6400, 6561, 6400),
('350512203930010', 'Ira Dwi A', 2500, 4900, 9025, 7056, 6400, 6400),
('350512203930011', 'Siti Zubaidah', 2500, 6084, 7744, 5041, 5625, 6241),
('350512203930012', 'Ressania Fitri Ekasari', 10000, 5776, 6241, 6561, 5476, 8281),
('350512203930013', 'Retno Wulandari', 2500, 4761, 10000, 6561, 6084, 7396),
('350512203930014', 'Diyah Kusuma Wardani', 2500, 5329, 3721, 6724, 6241, 6724),
('350512203930015', 'Ryski Asri Wahida', 10000, 5476, 7744, 6241, 5776, 6889),
('350512203930016', 'Nilamsari Dwimasiuti', 2500, 5625, 8281, 6084, 6400, 7056),
('350512203930017', 'Pusvita Anggraeni', 2500, 6084, 6084, 5929, 6561, 7225),
('350512203930018', 'Shindy Ayu Widyaswara', 2500, 6241, 9604, 6241, 6889, 7569),
('350512203930019', 'Elia Ika Rahmawati', 2500, 6400, 10000, 6561, 7056, 6561),
('350512203930020', 'Roro Agustina', 2500, 6561, 10000, 6400, 7225, 6241),
('350512203930021', 'Sendi Ira Wibowo', 2500, 6084, 2500, 6241, 6241, 6561),
('350512203930022', 'Sri Wahyuni', 2500, 5929, 10000, 6084, 7921, 6724),
('350512203930023', 'Devy Costantia Rini', 2500, 7744, 4225, 7056, 7225, 7569),
('350512203930024', 'Yekti Astuti', 2500, 8100, 7569, 6724, 7056, 6084),
('350512203930025', 'Dania Lestari', 2500, 5329, 8464, 5776, 6561, 6241),
('350512203930026', 'Putri Titian ', 2500, 5476, 10000, 7396, 6084, 6561),
('350512203930027', 'Nisa Putri', 10000, 5625, 9801, 7056, 6241, 6889),
('350512203930028', 'Danis Kanaya', 10000, 6084, 6561, 6724, 5776, 5776),
('350512203930029', 'Aliya Mahadewi', 2500, 6561, 4225, 6889, 6561, 6400),
('350512203930030', 'Dina Andriana', 2500, 6889, 6400, 6084, 6561, 6724),
('350512203930031', 'Narulita Harumadewi', 10000, 6241, 8100, 5329, 6241, 6241),
('350512203930032', 'Prastika Putri', 2500, 6561, 8836, 5184, 6241, 6561),
('350512203930033', 'Putri Sabila', 10000, 6084, 6724, 5625, 6241, 6400),
('350512203930034', 'Nabila Kania D', 10000, 6084, 6084, 6084, 5625, 6400),
('350512203930035', 'Annisa Wiji', 2500, 6241, 7225, 6241, 5184, 6561),
('350512203930036', 'Nevi Widianti', 2500, 6241, 7225, 6561, 6561, 6400),
('350512203930037', 'Qopitinia Nurul Afka', 2500, 5776, 9025, 6400, 6400, 6241),
('350512203930038', 'Fitri Zulfaidah', 2500, 6241, 8100, 6400, 7056, 5625),
('350512203930039', 'Ervin Rachmawati', 2500, 6400, 9409, 6724, 6889, 5184),
('350512203930040', 'Salsabila Anggraini', 2500, 7396, 8100, 7225, 7921, 8281),
('350512203930041', 'Ririn Ekawati', 2500, 6561, 8100, 7921, 6084, 6400),
('350512203930042', 'Arina Suci R', 2500, 7225, 6400, 7921, 6241, 5625),
('350512203930043', 'Elok Eka P', 2500, 7569, 3025, 7396, 10000, 10000),
('350512203930044', 'Heni Dwi K', 2500, 7921, 10000, 6889, 10000, 10000),
('350512203930045', 'Mona Aliya S', 2500, 7225, 7744, 10000, 10000, 10000),
('350512203930046', 'Amidya Kalista', 2500, 7396, 5929, 7056, 5329, 5476),
('350512203930047', 'Eka Pangastuti', 2500, 7569, 7225, 6561, 5476, 6241),
('350512203930048', 'Ema Dian P', 2500, 7396, 9025, 7921, 7569, 6561),
('350512203930049', 'Putri Mahardika', 2500, 7921, 10000, 7225, 6724, 6400),
('350512203930050', 'Aginta Dwi Mahartika', 2500, 6561, 9604, 7225, 6561, 6400),
('350512203930051', 'Tyas Prasati', 2500, 6400, 7744, 6241, 6724, 6400),
('350512203930052', 'Nurul Hidayati', 2500, 6084, 8464, 6241, 6724, 6400),
('350512203930053', 'Nurul Andriani', 2500, 6400, 10000, 5625, 7225, 8100),
('350512203930054', 'Kalista Putri Pertiwi', 2500, 6400, 10000, 7225, 7225, 7744),
('350512203930055', 'Prastiwi Mei S', 2500, 6400, 10000, 7225, 8100, 8100);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_normalisasi_matriks`
--

CREATE TABLE `tbl_normalisasi_matriks` (
  `NIK` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `pend` float NOT NULL,
  `t_kemampuan` float NOT NULL,
  `t_tulis` float NOT NULL,
  `t_pribadi` float NOT NULL,
  `wawancara1` float NOT NULL,
  `wawancara2` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_normalisasi_matriks`
--

INSERT INTO `tbl_normalisasi_matriks` (`NIK`, `nama`, `pend`, `t_kemampuan`, `t_tulis`, `t_pribadi`, `wawancara1`, `wawancara2`) VALUES
('350512203930001', 'Sely Nurhidayat', 0.114708, 0.11797, 0.153828, 0.131878, 0.100057, 0.114919),
('350512203930002', 'Afrianti Candra Ayu R', 0.114708, 0.126397, 0.123062, 0.133527, 0.125071, 0.123127),
('350512203930003', 'Ika Novia Candra P', 0.114708, 0.124711, 0.153828, 0.131878, 0.118401, 0.139544),
('350512203930004', 'Aulia Paramita', 0.114708, 0.134823, 0.123062, 0.141769, 0.120068, 0.141186),
('350512203930005', 'Susi Ismawati', 0.114708, 0.136508, 0.138445, 0.140121, 0.121736, 0.132977),
('350512203930006', 'Yunita Sari', 0.114708, 0.149991, 0.099988, 0.143418, 0.130074, 0.118202),
('350512203930007', 'Okta Dwi F', 0.114708, 0.133138, 0.0922966, 0.146715, 0.131742, 0.119844),
('350512203930008', 'Ani Vita', 0.114708, 0.138194, 0.153828, 0.13023, 0.125071, 0.132977),
('350512203930009', 'Luluk W', 0.114708, 0.139879, 0.0922966, 0.131878, 0.135077, 0.131336),
('350512203930010', 'Ira Dwi A', 0.114708, 0.11797, 0.146136, 0.138472, 0.133409, 0.131336),
('350512203930011', 'Siti Zubaidah', 0.114708, 0.131453, 0.135368, 0.117042, 0.125071, 0.129694),
('350512203930012', 'Ressania Fitri Ekasari', 0.229416, 0.128082, 0.121524, 0.133527, 0.123403, 0.149394),
('350512203930013', 'Retno Wulandari', 0.114708, 0.116285, 0.153828, 0.133527, 0.130074, 0.141186),
('350512203930014', 'Diyah Kusuma Wardani', 0.114708, 0.123026, 0.0938349, 0.135175, 0.131742, 0.134619),
('350512203930015', 'Ryski Asri Wahida', 0.229416, 0.124711, 0.135368, 0.13023, 0.126739, 0.136261),
('350512203930016', 'Nilamsari Dwimasiuti', 0.114708, 0.126397, 0.139983, 0.128582, 0.133409, 0.137902),
('350512203930017', 'Pusvita Anggraeni', 0.114708, 0.131453, 0.119986, 0.126933, 0.135077, 0.139544),
('350512203930018', 'Shindy Ayu Widyaswara', 0.114708, 0.133138, 0.150751, 0.13023, 0.138412, 0.142828),
('350512203930019', 'Elia Ika Rahmawati', 0.114708, 0.134823, 0.153828, 0.133527, 0.14008, 0.132977),
('350512203930020', 'Roro Agustina', 0.114708, 0.136508, 0.153828, 0.131878, 0.141747, 0.129694),
('350512203930021', 'Sendi Ira Wibowo', 0.114708, 0.131453, 0.0769138, 0.13023, 0.131742, 0.132977),
('350512203930022', 'Sri Wahyuni', 0.114708, 0.129767, 0.153828, 0.128582, 0.148418, 0.134619),
('350512203930023', 'Devy Costantia Rini', 0.114708, 0.148305, 0.099988, 0.138472, 0.141747, 0.142828),
('350512203930024', 'Yekti Astuti', 0.114708, 0.151676, 0.13383, 0.135175, 0.14008, 0.128052),
('350512203930025', 'Dania Lestari', 0.114708, 0.123026, 0.141521, 0.125285, 0.135077, 0.129694),
('350512203930026', 'Putri Titian ', 0.114708, 0.124711, 0.153828, 0.141769, 0.130074, 0.132977),
('350512203930027', 'Nisa Putri', 0.229416, 0.126397, 0.152289, 0.138472, 0.131742, 0.136261),
('350512203930028', 'Danis Kanaya', 0.229416, 0.131453, 0.1246, 0.135175, 0.126739, 0.124769),
('350512203930029', 'Aliya Mahadewi', 0.114708, 0.136508, 0.099988, 0.136824, 0.135077, 0.131336),
('350512203930030', 'Dina Andriana', 0.114708, 0.139879, 0.123062, 0.128582, 0.135077, 0.134619),
('350512203930031', 'Narulita Harumadewi', 0.229416, 0.133138, 0.138445, 0.120339, 0.131742, 0.129694),
('350512203930032', 'Prastika Putri', 0.114708, 0.136508, 0.144598, 0.118691, 0.131742, 0.132977),
('350512203930033', 'Putri Sabila', 0.229416, 0.131453, 0.126139, 0.123636, 0.131742, 0.131336),
('350512203930034', 'Nabila Kania D', 0.229416, 0.131453, 0.119986, 0.128582, 0.125071, 0.131336),
('350512203930035', 'Annisa Wiji', 0.114708, 0.133138, 0.130754, 0.13023, 0.120068, 0.132977),
('350512203930036', 'Nevi Widianti', 0.114708, 0.133138, 0.130754, 0.133527, 0.135077, 0.131336),
('350512203930037', 'Qopitinia Nurul Afka', 0.114708, 0.128082, 0.146136, 0.131878, 0.133409, 0.129694),
('350512203930038', 'Fitri Zulfaidah', 0.114708, 0.133138, 0.138445, 0.131878, 0.14008, 0.123127),
('350512203930039', 'Ervin Rachmawati', 0.114708, 0.134823, 0.149213, 0.135175, 0.138412, 0.118202),
('350512203930040', 'Salsabila Anggraini', 0.114708, 0.144935, 0.138445, 0.140121, 0.148418, 0.149394),
('350512203930041', 'Ririn Ekawati', 0.114708, 0.136508, 0.138445, 0.146715, 0.130074, 0.131336),
('350512203930042', 'Arina Suci R', 0.114708, 0.14325, 0.123062, 0.146715, 0.131742, 0.123127),
('350512203930043', 'Elok Eka P', 0.114708, 0.14662, 0.0846052, 0.141769, 0.166761, 0.16417),
('350512203930044', 'Heni Dwi K', 0.114708, 0.149991, 0.153828, 0.136824, 0.166761, 0.16417),
('350512203930045', 'Mona Aliya S', 0.114708, 0.14325, 0.135368, 0.164848, 0.166761, 0.16417),
('350512203930046', 'Amidya Kalista', 0.114708, 0.144935, 0.118447, 0.138472, 0.121736, 0.121486),
('350512203930047', 'Eka Pangastuti', 0.114708, 0.14662, 0.130754, 0.133527, 0.123403, 0.129694),
('350512203930048', 'Ema Dian P', 0.114708, 0.144935, 0.146136, 0.146715, 0.145082, 0.132977),
('350512203930049', 'Putri Mahardika', 0.114708, 0.149991, 0.153828, 0.140121, 0.136744, 0.131336),
('350512203930050', 'Aginta Dwi Mahartika', 0.114708, 0.136508, 0.150751, 0.140121, 0.135077, 0.131336),
('350512203930051', 'Tyas Prasati', 0.114708, 0.134823, 0.135368, 0.13023, 0.136744, 0.131336),
('350512203930052', 'Nurul Hidayati', 0.114708, 0.131453, 0.141521, 0.13023, 0.136744, 0.131336),
('350512203930053', 'Nurul Andriani', 0.114708, 0.134823, 0.153828, 0.123636, 0.141747, 0.147753),
('350512203930054', 'Kalista Putri Pertiwi', 0.114708, 0.134823, 0.153828, 0.140121, 0.141747, 0.144469),
('350512203930055', 'Prastiwi Mei S', 0.114708, 0.134823, 0.153828, 0.140121, 0.150085, 0.147753);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_positif_negatif`
--

CREATE TABLE `tbl_positif_negatif` (
  `jenis_nilai` varchar(100) NOT NULL,
  `pend` float NOT NULL,
  `t_kemampuan` float NOT NULL,
  `t_tulis` float NOT NULL,
  `t_pribadi` float NOT NULL,
  `wawancara1` float NOT NULL,
  `wawancara2` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_positif_negatif`
--

INSERT INTO `tbl_positif_negatif` (`jenis_nilai`, `pend`, `t_kemampuan`, `t_tulis`, `t_pribadi`, `wawancara1`, `wawancara2`) VALUES
('MAKS POSITIF', 0.0344124, 0.0303352, 0.0307656, 0.0247272, 0.0250142, 0.0246255),
('MIN NEGATIF', 0.0172062, 0.023257, 0.0153828, 0.0175563, 0.0150086, 0.0172378);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rangking`
--

CREATE TABLE `tbl_rangking` (
  `NIK` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nilai` float NOT NULL,
  `ranking` int(11) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_rangking`
--

INSERT INTO `tbl_rangking` (`NIK`, `nama`, `nilai`, `ranking`, `status`) VALUES
('350512203930001', 'Sely Nurhidayat', 0.405236, 37, ''),
('350512203930002', 'Afrianti Candra Ayu R', 0.329742, 49, ''),
('350512203930003', 'Ika Novia Candra P', 0.444206, 25, ''),
('350512203930004', 'Aulia Paramita', 0.3642, 45, ''),
('350512203930005', 'Susi Ismawati', 0.414032, 34, ''),
('350512203930006', 'Yunita Sari', 0.312027, 50, ''),
('350512203930007', 'Okta Dwi F', 0.255679, 53, ''),
('350512203930008', 'Ani Vita', 0.458778, 22, ''),
('350512203930009', 'Luluk W', 0.268076, 52, ''),
('350512203930010', 'Ira Dwi A', 0.430294, 28, ''),
('350512203930011', 'Siti Zubaidah', 0.378818, 42, ''),
('350512203930012', 'Ressania Fitri Ekasari', 0.641376, 4, 'diterima'),
('350512203930013', 'Retno Wulandari', 0.451706, 23, ''),
('350512203930014', 'Diyah Kusuma Wardani', 0.236824, 54, ''),
('350512203930015', 'Ryski Asri Wahida', 0.660323, 3, ''),
('350512203930016', 'Nilamsari Dwimasiuti', 0.416259, 33, ''),
('350512203930017', 'Pusvita Anggraeni', 0.352823, 46, ''),
('350512203930018', 'Shindy Ayu Widyaswara', 0.468503, 19, ''),
('350512203930019', 'Elia Ika Rahmawati', 0.474634, 17, ''),
('350512203930020', 'Roro Agustina', 0.47444, 18, ''),
('350512203930021', 'Sendi Ira Wibowo', 0.207807, 55, ''),
('350512203930022', 'Sri Wahyuni', 0.476498, 15, ''),
('350512203930023', 'Devy Costantia Rini', 0.348335, 47, ''),
('350512203930024', 'Yekti Astuti', 0.436851, 26, ''),
('350512203930025', 'Dania Lestari', 0.410143, 36, ''),
('350512203930026', 'Putri Titian ', 0.459268, 21, ''),
('350512203930027', 'Nisa Putri', 0.719839, 1, 'diterima'),
('350512203930028', 'Danis Kanaya', 0.633391, 6, ''),
('350512203930029', 'Aliya Mahadewi', 0.288832, 51, ''),
('350512203930030', 'Dina Andriana', 0.37397, 43, ''),
('350512203930031', 'Narulita Harumadewi', 0.666236, 2, 'diterima'),
('350512203930032', 'Prastika Putri', 0.429196, 30, ''),
('350512203930033', 'Putri Sabila', 0.63961, 5, 'diterima'),
('350512203930034', 'Nabila Kania D', 0.617004, 7, ''),
('350512203930035', 'Annisa Wiji', 0.369682, 44, ''),
('350512203930036', 'Nevi Widianti', 0.392576, 39, ''),
('350512203930037', 'Qopitinia Nurul Afka', 0.433343, 27, ''),
('350512203930038', 'Fitri Zulfaidah', 0.418116, 32, ''),
('350512203930039', 'Ervin Rachmawati', 0.450008, 24, ''),
('350512203930040', 'Salsabila Anggraini', 0.476163, 16, ''),
('350512203930041', 'Ririn Ekawati', 0.429767, 29, ''),
('350512203930042', 'Arina Suci R', 0.383253, 41, ''),
('350512203930043', 'Elok Eka P', 0.391699, 40, ''),
('350512203930044', 'Heni Dwi K', 0.543699, 8, 'diterima'),
('350512203930045', 'Mona Aliya S', 0.521719, 9, 'diterima'),
('350512203930046', 'Amidya Kalista', 0.343919, 48, ''),
('350512203930047', 'Eka Pangastuti', 0.39602, 38, ''),
('350512203930048', 'Ema Dian P', 0.483176, 13, ''),
('350512203930049', 'Putri Mahardika', 0.491219, 12, ''),
('350512203930050', 'Aginta Dwi Mahartika', 0.466523, 20, ''),
('350512203930051', 'Tyas Prasati', 0.410715, 35, ''),
('350512203930052', 'Nurul Hidayati', 0.426926, 31, ''),
('350512203930053', 'Nurul Andriani', 0.481217, 14, ''),
('350512203930054', 'Kalista Putri Pertiwi', 0.491402, 11, ''),
('350512203930055', 'Prastiwi Mei S', 0.503488, 10, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_separasi`
--

CREATE TABLE `tbl_separasi` (
  `NIK` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `ideal_positif` float NOT NULL,
  `ideal_negatif` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_separasi`
--

INSERT INTO `tbl_separasi` (`NIK`, `nama`, `ideal_positif`, `ideal_negatif`) VALUES
('350512203930001', 'Sely Nurhidayat', 0.0228177, 0.0155466),
('350512203930002', 'Afrianti Candra Ayu R', 0.021414, 0.0105349),
('350512203930003', 'Ika Novia Candra P', 0.0203927, 0.0162984),
('350512203930004', 'Aulia Paramita', 0.02045, 0.0117142),
('350512203930005', 'Susi Ismawati', 0.0198994, 0.0140605),
('350512203930006', 'Yunita Sari', 0.0223669, 0.0101444),
('350512203930007', 'Okta Dwi F', 0.0232474, 0.00798563),
('350512203930008', 'Ani Vita', 0.019781, 0.0167678),
('350512203930009', 'Luluk W', 0.0228991, 0.00838706),
('350512203930010', 'Ira Dwi A', 0.0202188, 0.0152711),
('350512203930011', 'Siti Zubaidah', 0.0210551, 0.0128401),
('350512203930012', 'Ressania Fitri Ekasari', 0.0115453, 0.020648),
('350512203930013', 'Retno Wulandari', 0.0202583, 0.0166896),
('350512203930014', 'Diyah Kusuma Wardani', 0.0232358, 0.00721038),
('350512203930015', 'Ryski Asri Wahida', 0.0111016, 0.0215812),
('350512203930016', 'Nilamsari Dwimasiuti', 0.0199857, 0.0142516),
('350512203930017', 'Pusvita Anggraeni', 0.0206592, 0.0112628),
('350512203930018', 'Shindy Ayu Widyaswara', 0.0191174, 0.0168516),
('350512203930019', 'Elia Ika Rahmawati', 0.0191676, 0.0173167),
('350512203930020', 'Roro Agustina', 0.0192493, 0.017377),
('350512203930021', 'Sendi Ira Wibowo', 0.0250099, 0.00656058),
('350512203930022', 'Sri Wahyuni', 0.019289, 0.0175571),
('350512203930023', 'Devy Costantia Rini', 0.0212706, 0.0113698),
('350512203930024', 'Yekti Astuti', 0.0194224, 0.0150665),
('350512203930025', 'Dania Lestari', 0.0204815, 0.0142413),
('350512203930026', 'Putri Titian ', 0.0197307, 0.0167582),
('350512203930027', 'Nisa Putri', 0.00929666, 0.0238866),
('350512203930028', 'Danis Kanaya', 0.0118875, 0.0205381),
('350512203930029', 'Aliya Mahadewi', 0.0220391, 0.00895089),
('350512203930030', 'Dina Andriana', 0.0202808, 0.0121151),
('350512203930031', 'Narulita Harumadewi', 0.0110509, 0.022059),
('350512203930032', 'Prastika Putri', 0.0201515, 0.0151522),
('350512203930033', 'Putri Sabila', 0.0117086, 0.0207801),
('350512203930034', 'Nabila Kania D', 0.012455, 0.0200649),
('350512203930035', 'Annisa Wiji', 0.0207125, 0.0121479),
('350512203930036', 'Nevi Widianti', 0.0200003, 0.0129261),
('350512203930037', 'Qopitinia Nurul Afka', 0.0199228, 0.0152357),
('350512203930038', 'Fitri Zulfaidah', 0.019941, 0.0143287),
('350512203930039', 'Ervin Rachmawati', 0.019842, 0.0162349),
('350512203930040', 'Salsabila Anggraini', 0.0182641, 0.0166019),
('350512203930041', 'Ririn Ekawati', 0.0194077, 0.014627),
('350512203930042', 'Arina Suci R', 0.0202398, 0.0125772),
('350512203930043', 'Elok Eka P', 0.0223771, 0.0144091),
('350512203930044', 'Heni Dwi K', 0.0177154, 0.0211085),
('350512203930045', 'Mona Aliya S', 0.0176784, 0.019284),
('350512203930046', 'Amidya Kalista', 0.021218, 0.0111225),
('350512203930047', 'Eka Pangastuti', 0.0202358, 0.0132683),
('350512203930048', 'Ema Dian P', 0.0184419, 0.0172412),
('350512203930049', 'Putri Mahardika', 0.018827, 0.0181771),
('350512203930050', 'Aginta Dwi Mahartika', 0.0191373, 0.0167355),
('350512203930051', 'Tyas Prasati', 0.0198126, 0.0138088),
('350512203930052', 'Nurul Hidayati', 0.0197475, 0.0147114),
('350512203930053', 'Nurul Andriani', 0.0191252, 0.0177403),
('350512203930054', 'Kalista Putri Pertiwi', 0.0185468, 0.0179197),
('350512203930055', 'Prastiwi Mei S', 0.0182618, 0.0185184);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wndm`
--

CREATE TABLE `tbl_wndm` (
  `NIK` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `pend` float NOT NULL,
  `t_kemampuan` float NOT NULL,
  `t_tulis` float NOT NULL,
  `t_pribadi` float NOT NULL,
  `wawancara1` float NOT NULL,
  `wawancara2` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_wndm`
--

INSERT INTO `tbl_wndm` (`NIK`, `nama`, `pend`, `t_kemampuan`, `t_tulis`, `t_pribadi`, `wawancara1`, `wawancara2`) VALUES
('350512203930001', 'Sely Nurhidayat', 0.0172062, 0.023594, 0.0307656, 0.0197817, 0.0150086, 0.0172378),
('350512203930002', 'Afrianti Candra Ayu R', 0.0172062, 0.0252794, 0.0246124, 0.020029, 0.0187606, 0.0184691),
('350512203930003', 'Ika Novia Candra P', 0.0172062, 0.0249422, 0.0307656, 0.0197817, 0.0177602, 0.0209316),
('350512203930004', 'Aulia Paramita', 0.0172062, 0.0269646, 0.0246124, 0.0212654, 0.0180102, 0.0211779),
('350512203930005', 'Susi Ismawati', 0.0172062, 0.0273016, 0.027689, 0.0210181, 0.0182604, 0.0199465),
('350512203930006', 'Yunita Sari', 0.0172062, 0.0299982, 0.0199976, 0.0215127, 0.0195111, 0.0177303),
('350512203930007', 'Okta Dwi F', 0.0172062, 0.0266276, 0.0184593, 0.0220072, 0.0197613, 0.0179766),
('350512203930008', 'Ani Vita', 0.0172062, 0.0276388, 0.0307656, 0.0195345, 0.0187606, 0.0199465),
('350512203930009', 'Luluk W', 0.0172062, 0.0279758, 0.0184593, 0.0197817, 0.0202616, 0.0197004),
('350512203930010', 'Ira Dwi A', 0.0172062, 0.023594, 0.0292272, 0.0207708, 0.0200114, 0.0197004),
('350512203930011', 'Siti Zubaidah', 0.0172062, 0.0262906, 0.0270736, 0.0175563, 0.0187606, 0.0194541),
('350512203930012', 'Ressania Fitri Ekasari', 0.0344124, 0.0256164, 0.0243048, 0.020029, 0.0185104, 0.0224091),
('350512203930013', 'Retno Wulandari', 0.0172062, 0.023257, 0.0307656, 0.020029, 0.0195111, 0.0211779),
('350512203930014', 'Diyah Kusuma Wardani', 0.0172062, 0.0246052, 0.018767, 0.0202763, 0.0197613, 0.0201929),
('350512203930015', 'Ryski Asri Wahida', 0.0344124, 0.0249422, 0.0270736, 0.0195345, 0.0190108, 0.0204391),
('350512203930016', 'Nilamsari Dwimasiuti', 0.0172062, 0.0252794, 0.0279966, 0.0192873, 0.0200114, 0.0206853),
('350512203930017', 'Pusvita Anggraeni', 0.0172062, 0.0262906, 0.0239972, 0.0190399, 0.0202616, 0.0209316),
('350512203930018', 'Shindy Ayu Widyaswara', 0.0172062, 0.0266276, 0.0301502, 0.0195345, 0.0207618, 0.0214242),
('350512203930019', 'Elia Ika Rahmawati', 0.0172062, 0.0269646, 0.0307656, 0.020029, 0.021012, 0.0199465),
('350512203930020', 'Roro Agustina', 0.0172062, 0.0273016, 0.0307656, 0.0197817, 0.021262, 0.0194541),
('350512203930021', 'Sendi Ira Wibowo', 0.0172062, 0.0262906, 0.0153828, 0.0195345, 0.0197613, 0.0199465),
('350512203930022', 'Sri Wahyuni', 0.0172062, 0.0259534, 0.0307656, 0.0192873, 0.0222627, 0.0201929),
('350512203930023', 'Devy Costantia Rini', 0.0172062, 0.029661, 0.0199976, 0.0207708, 0.021262, 0.0214242),
('350512203930024', 'Yekti Astuti', 0.0172062, 0.0303352, 0.026766, 0.0202763, 0.021012, 0.0192078),
('350512203930025', 'Dania Lestari', 0.0172062, 0.0246052, 0.0283042, 0.0187928, 0.0202616, 0.0194541),
('350512203930026', 'Putri Titian ', 0.0172062, 0.0249422, 0.0307656, 0.0212654, 0.0195111, 0.0199465),
('350512203930027', 'Nisa Putri', 0.0344124, 0.0252794, 0.0304578, 0.0207708, 0.0197613, 0.0204391),
('350512203930028', 'Danis Kanaya', 0.0344124, 0.0262906, 0.02492, 0.0202763, 0.0190108, 0.0187153),
('350512203930029', 'Aliya Mahadewi', 0.0172062, 0.0273016, 0.0199976, 0.0205236, 0.0202616, 0.0197004),
('350512203930030', 'Dina Andriana', 0.0172062, 0.0279758, 0.0246124, 0.0192873, 0.0202616, 0.0201929),
('350512203930031', 'Narulita Harumadewi', 0.0344124, 0.0266276, 0.027689, 0.0180508, 0.0197613, 0.0194541),
('350512203930032', 'Prastika Putri', 0.0172062, 0.0273016, 0.0289196, 0.0178037, 0.0197613, 0.0199465),
('350512203930033', 'Putri Sabila', 0.0344124, 0.0262906, 0.0252278, 0.0185454, 0.0197613, 0.0197004),
('350512203930034', 'Nabila Kania D', 0.0344124, 0.0262906, 0.0239972, 0.0192873, 0.0187606, 0.0197004),
('350512203930035', 'Annisa Wiji', 0.0172062, 0.0266276, 0.0261508, 0.0195345, 0.0180102, 0.0199465),
('350512203930036', 'Nevi Widianti', 0.0172062, 0.0266276, 0.0261508, 0.020029, 0.0202616, 0.0197004),
('350512203930037', 'Qopitinia Nurul Afka', 0.0172062, 0.0256164, 0.0292272, 0.0197817, 0.0200114, 0.0194541),
('350512203930038', 'Fitri Zulfaidah', 0.0172062, 0.0266276, 0.027689, 0.0197817, 0.021012, 0.0184691),
('350512203930039', 'Ervin Rachmawati', 0.0172062, 0.0269646, 0.0298426, 0.0202763, 0.0207618, 0.0177303),
('350512203930040', 'Salsabila Anggraini', 0.0172062, 0.028987, 0.027689, 0.0210181, 0.0222627, 0.0224091),
('350512203930041', 'Ririn Ekawati', 0.0172062, 0.0273016, 0.027689, 0.0220072, 0.0195111, 0.0197004),
('350512203930042', 'Arina Suci R', 0.0172062, 0.02865, 0.0246124, 0.0220072, 0.0197613, 0.0184691),
('350512203930043', 'Elok Eka P', 0.0172062, 0.029324, 0.016921, 0.0212654, 0.0250142, 0.0246255),
('350512203930044', 'Heni Dwi K', 0.0172062, 0.0299982, 0.0307656, 0.0205236, 0.0250142, 0.0246255),
('350512203930045', 'Mona Aliya S', 0.0172062, 0.02865, 0.0270736, 0.0247272, 0.0250142, 0.0246255),
('350512203930046', 'Amidya Kalista', 0.0172062, 0.028987, 0.0236894, 0.0207708, 0.0182604, 0.0182229),
('350512203930047', 'Eka Pangastuti', 0.0172062, 0.029324, 0.0261508, 0.020029, 0.0185104, 0.0194541),
('350512203930048', 'Ema Dian P', 0.0172062, 0.028987, 0.0292272, 0.0220072, 0.0217623, 0.0199465),
('350512203930049', 'Putri Mahardika', 0.0172062, 0.0299982, 0.0307656, 0.0210181, 0.0205116, 0.0197004),
('350512203930050', 'Aginta Dwi Mahartika', 0.0172062, 0.0273016, 0.0301502, 0.0210181, 0.0202616, 0.0197004),
('350512203930051', 'Tyas Prasati', 0.0172062, 0.0269646, 0.0270736, 0.0195345, 0.0205116, 0.0197004),
('350512203930052', 'Nurul Hidayati', 0.0172062, 0.0262906, 0.0283042, 0.0195345, 0.0205116, 0.0197004),
('350512203930053', 'Nurul Andriani', 0.0172062, 0.0269646, 0.0307656, 0.0185454, 0.021262, 0.0221629),
('350512203930054', 'Kalista Putri Pertiwi', 0.0172062, 0.0269646, 0.0307656, 0.0210181, 0.021262, 0.0216704),
('350512203930055', 'Prastiwi Mei S', 0.0172062, 0.0269646, 0.0307656, 0.0210181, 0.0225128, 0.0221629);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `NIK` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `deskripsi` varchar(50) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `NIK`, `nama`, `username`, `password`, `deskripsi`, `level`) VALUES
(13, '-', 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', 1),
(14, '-', 'Direktur', 'direktur', '4fbfd324f5ffcdff5dbf6f019b02eca8', 'Direktur', 2),
(15, '350512203930001', 'Sely Nurhidayat', 'sely', '32ab08f45c41b7fff8a7fe8f1fa69f6f', 'Peserta', 0),
(16, '350512203930002', 'Afrianti Candra Ayu R', 'afrianti', 'fab491f66eb020f21862fa6de536e37c', 'Peserta', 0),
(17, '350512203930003', 'Ika Novia Candra P', 'ika', '7965c82127bd8517d2495e8efb12702c', 'Peserta', 0),
(18, '350512203930004', 'Aulia Paramita', 'aulia', '614913bc360cdfd1c56758cb87eb9e8f', 'Peserta', 0),
(19, '350512203930005', 'Susi Ismawati', 'susi', '536931d80decb18c33db9612bdd004d4', 'Peserta', 0),
(20, '350512203930006', 'Yunita Sari', 'yunita', '771393b4e52f91157c7a2dc3ab198037', 'Peserta', 0),
(21, '350512203930007', 'Okta Dwi F', 'okta', '411d2f5092ce942f2163866113f28168', 'Peserta', 0),
(22, '350512203930008', 'Ani Vita', 'ani', '29d1e2357d7c14db51e885053a58ec67', 'Peserta', 0),
(23, '350512203930009', 'Luluk W', 'luluk', '11fc2e08327227d802532d48ee16960b', 'Peserta', 0),
(24, '350512203930010', 'Ira Dwi A', 'ira', '3c67080a1a09b022fb9d94e57a75ddad', 'Peserta', 0),
(25, '350512203930011', 'Siti Zubaidah', 'siti', 'db04eb4b07e0aaf8d1d477ae342bdff9', 'Peserta', 0),
(26, '350512203930012', 'Ressania Fitri Ekasari', 'ressania', 'fca1c5f41492089177016652630172d2', 'Peserta', 0),
(27, '350512203930013', 'Retno Wulandari', 'retno', 'edd39370424d54db23ccec123f0ce66b', 'Peserta', 0),
(28, '350512203930014', 'Diyah Kusuma Wardani', 'diyah', '65df1a518a08177a39b57767a338cf77', 'Peserta', 0),
(29, '350512203930015', 'Ryski Asri Wahida', 'ryski', 'c9e64292add969b36a44a438e49b2b4a', 'Peserta', 0),
(30, '350512203930016', 'Nilamsari Dwimasiuti', 'nilamsari', '34a2ff2737b5d71b59fbbe37bc3ea660', 'Peserta', 0),
(31, '350512203930017', 'Pusvita Anggraeni', 'pusvita', '08ecfc55e2a3390b7046d0e5dae8df12', 'Peserta', 0),
(32, '350512203930018', 'Shindy Ayu Widyaswara', 'shindy', '9a822c7868b51bb2747400d3c95668a9', 'Peserta', 0),
(33, '350512203930019', 'Elia Ika Rahmawati', 'elia', '9773bf404d60e43e693b5bde0e7e1df0', 'Peserta', 0),
(34, '350512203930020', 'Roro Agustina', 'roro', '54b1d109dc7156ef46816a9527a861bc', 'Peserta', 0),
(35, '350512203930021', 'Sendi Ira Wibowo', 'sendi', '8b15d7aecb51a9e61b91a8348757676e', 'Peserta', 0),
(36, '350512203930022', 'Sri Wahyuni', 'sri', 'd1565ebd8247bbb01472f80e24ad29b6', 'Peserta', 0),
(37, '350512203930023', 'Devy Costantia Rini', 'devy', '7faf399ef936e5e6883dbc03fb133d14', 'Peserta', 0),
(38, '350512203930024', 'Yekti Astuti', 'yekti', '280a5b53c315df5cf862193276252c73', 'Peserta', 0),
(39, '350512203930025', 'Dania Lestari', 'dania', 'c272f83c67f9c4ff4e8ebcd11bcf44b0', 'Peserta', 0),
(40, '350512203930026', 'Putri Titian ', 'putri', '4093fed663717c843bea100d17fb67c8', 'Peserta', 0),
(42, '350512203930027', 'Nisa Putri', 'nisa', '5fad30428811fe378fd389cd7659a33c', 'Peserta', 0),
(43, '350512203930028', 'Danis Kanaya', 'danis', '257ffa69697c2d5144f0b4b76b51ae95', 'Peserta', 0),
(44, '350512203930029', 'Aliya Mahadewi', 'aliya', 'e3cb970693574ea75d091a6049f8a3ff', 'Peserta', 0),
(45, '350512203930030', 'Dina Andriana', 'dina', 'e274648aed611371cf5c30a30bbe1d65', 'Peserta', 0),
(46, '350512203930031', 'Narulita Harumadewi', 'narulita', 'b0e63736f36084d3e32029c1897208de', 'Peserta', 0),
(47, '350512203930032', 'Prastika Putri', 'prastika', '5633cdfba34a7d3921aa524423d9fe5c', 'Peserta', 0),
(48, '350512203930033', 'Putri Sabila', 'putri sabila ', '9a5d73de5d14d575267825e0ce3ced13', 'Peserta', 0),
(49, '350512203930034', 'Nabila Kania D', 'nabila', '652d3266220e0aacb047d3aa6f51f1b0', 'Peserta', 0),
(50, '350512203930035', 'Annisa Wiji', 'annisa ', 'c9d2cce909ea37234be8af1a1f958805', 'Peserta', 0),
(51, '350512203930036', 'Nevi Widianti', 'nevi', 'dbec90c51b93fa2ce217a19242407da4', 'Peserta', 0),
(52, '350512203930037', 'Qopitinia Nurul Afka', 'qopitinia', '536910fb6bb5e34168a30bac221f3791', 'Peserta', 0),
(53, '350512203930038', 'Fitri Zulfaidah', 'fitri', '534a0b7aa872ad1340d0071cbfa38697', 'Peserta', 0),
(54, '350512203930039', 'Ervin Rachmawati', 'ervin', '2a5f383e75e5652cfa7058cdb4337c17', 'Peserta', 0),
(55, '350512203930040', 'Salsabila Anggraini', 'salsabila', 'fe1e33bb1f71656d0d06d68e0dd2f8f0', 'Peserta', 0),
(56, '350512203930041', 'Ririn Ekawati', 'ririn', 'b84a4059d1af6c8b50bb7a28290dbd63', 'Peserta', 0),
(57, '350512203930042', 'Arina Suci R', 'arina', 'bec688cda6d94b466969b926825a8554', 'Peserta', 0),
(58, '350512203930043', 'Elok Eka P', 'elok', '4d20bb4214c8ee6453e5be2a36d71c21', 'Peserta', 0),
(59, '350512203930044', 'Heni Dwi K', 'heni', 'cd07a63af5f14ac0d51b5bbbf6e93ae9', 'Peserta', 0),
(60, '350512203930045', 'Mona Aliya S', 'mona', '4af5cab77c62eaec5f87b570f2d2b127', 'Peserta', 0),
(61, '350512203930046', 'Amidya Kalista', 'amidya', '3169a4100a900e2a24f63c17fc4daad9', 'Peserta', 0),
(62, '350512203930047', 'Eka Pangastuti', 'eka', '79ee82b17dfb837b1be94a6827fa395a', 'Peserta', 0),
(63, '350512203930048', 'Ema Dian P', 'ema', '93bdb73b49e88b5ce23da0509da1b8ac', 'Peserta', 0),
(64, '350512203930049', 'Putri Mahardika', 'putri mahardika', '98cda82d8bc6d5481afe5da3749302f8', 'Peserta', 0),
(65, '350512203930050', 'Aginta Dwi Mahartika', 'aginta', 'be7be18145f71c547ccb7c1a75841c11', 'Peserta', 0),
(66, '350512203930051', 'Tyas Prasati', 'tyas', '0c36534326afe8f3c3e7f4d1aaab1079', 'Peserta', 0),
(67, '350512203930052', 'Nurul Hidayati', 'nurul', '6968a2c57c3a4fee8fadc79a80355e4d', 'Peserta', 0),
(68, '350512203930053', 'Nurul Andriani', 'nurul andriani', '3bca55ef18fed76ab9e71e4ee008fcbd', 'Peserta', 0),
(69, '350512203930054', 'Kalista Putri Pertiwi', 'kalista', '340969df792b7283ce86d8d427426fe8', 'Peserta', 0),
(70, '350512203930055', 'Prastiwi Mei S', 'prastiwi', 'a1c9da601bc19930ca6715f23c5590e0', 'Peserta', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_peserta`
--
ALTER TABLE `data_peserta`
  ADD PRIMARY KEY (`id_data`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_kelamin`
--
ALTER TABLE `jenis_kelamin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`NIK`);

--
-- Indexes for table `tbl_kedekatan_relatif`
--
ALTER TABLE `tbl_kedekatan_relatif`
  ADD PRIMARY KEY (`NIK`);

--
-- Indexes for table `tbl_kuadrat`
--
ALTER TABLE `tbl_kuadrat`
  ADD PRIMARY KEY (`NIK`);

--
-- Indexes for table `tbl_normalisasi_matriks`
--
ALTER TABLE `tbl_normalisasi_matriks`
  ADD PRIMARY KEY (`NIK`);

--
-- Indexes for table `tbl_rangking`
--
ALTER TABLE `tbl_rangking`
  ADD PRIMARY KEY (`NIK`);

--
-- Indexes for table `tbl_separasi`
--
ALTER TABLE `tbl_separasi`
  ADD PRIMARY KEY (`NIK`);

--
-- Indexes for table `tbl_wndm`
--
ALTER TABLE `tbl_wndm`
  ADD PRIMARY KEY (`NIK`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_peserta`
--
ALTER TABLE `data_peserta`
  MODIFY `id_data` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `jenis_kelamin`
--
ALTER TABLE `jenis_kelamin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
