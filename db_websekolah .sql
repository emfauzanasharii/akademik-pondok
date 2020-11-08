-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2020 at 11:31 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_websekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_absensi`
--

CREATE TABLE IF NOT EXISTS `tbl_absensi` (
`absensi_id` int(11) NOT NULL,
  `absen_siswa_id` int(11) NOT NULL,
  `absen_guru_id` int(11) NOT NULL,
  `absen_keterangan` varchar(100) DEFAULT NULL,
  `absen_status` int(3) NOT NULL DEFAULT '0' COMMENT '0=haadir, 1=alpha, 2=ijin',
  `absen_tanggal` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=118 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_absensi`
--

INSERT INTO `tbl_absensi` (`absensi_id`, `absen_siswa_id`, `absen_guru_id`, `absen_keterangan`, `absen_status`, `absen_tanggal`) VALUES
(1, 1, 2, NULL, 0, '2019-11-06'),
(2, 2, 2, NULL, 2, '2019-11-06'),
(3, 4, 2, NULL, 1, '2019-11-06'),
(4, 5, 2, NULL, 1, '2019-11-06'),
(5, 6, 2, NULL, 0, '2019-11-06'),
(6, 7, 2, NULL, 0, '2019-11-06'),
(7, 8, 2, NULL, 2, '2019-11-06'),
(8, 9, 2, NULL, 0, '2019-11-06'),
(9, 10, 2, NULL, 0, '2019-11-06'),
(10, 11, 2, NULL, 0, '2019-11-06'),
(11, 12, 2, NULL, 0, '2019-11-06'),
(12, 13, 2, NULL, 0, '2019-11-06'),
(13, 1, 2, NULL, 1, '2019-11-06'),
(14, 2, 2, NULL, 0, '2019-11-06'),
(15, 5, 2, NULL, 0, '2019-11-06'),
(16, 6, 2, NULL, 0, '2019-11-06'),
(17, 7, 2, NULL, 0, '2019-11-06'),
(18, 8, 2, NULL, 0, '2019-11-06'),
(19, 9, 2, NULL, 0, '2019-11-06'),
(20, 10, 2, NULL, 0, '2019-11-06'),
(21, 11, 2, NULL, 0, '2019-11-06'),
(22, 12, 2, NULL, 0, '2019-11-06'),
(23, 13, 2, NULL, 0, '2019-11-06'),
(24, 1, 2, NULL, 1, '2019-11-07'),
(25, 2, 2, NULL, 0, '2019-11-07'),
(26, 5, 2, NULL, 0, '2019-11-07'),
(27, 6, 2, NULL, 0, '2019-11-07'),
(28, 7, 2, NULL, 0, '2019-11-07'),
(29, 8, 2, NULL, 0, '2019-11-07'),
(30, 9, 2, NULL, 0, '2019-11-07'),
(31, 10, 2, NULL, 0, '2019-11-07'),
(32, 11, 2, NULL, 0, '2019-11-07'),
(33, 12, 2, NULL, 0, '2019-11-07'),
(34, 13, 2, NULL, 0, '2019-11-07'),
(35, 4, 1, NULL, 1, '2019-11-28'),
(36, 4, 1, NULL, 1, '2019-11-30'),
(37, 2, 1, NULL, 0, '2019-11-21'),
(38, 4, 1, NULL, 2, '2019-11-21'),
(39, 5, 1, NULL, 1, '2019-11-21'),
(40, 1, 9, NULL, 1, '2019-11-14'),
(41, 6, 9, NULL, 0, '2019-11-14'),
(42, 7, 9, NULL, 0, '2019-11-14'),
(43, 8, 9, NULL, 0, '2019-11-14'),
(44, 1, 9, NULL, 1, '2019-11-06'),
(45, 6, 9, NULL, 0, '2019-11-06'),
(46, 7, 9, NULL, 0, '2019-11-06'),
(47, 8, 9, NULL, 0, '2019-11-06'),
(48, 1, 9, NULL, 0, '2019-11-19'),
(49, 6, 9, NULL, 2, '2019-11-19'),
(50, 7, 9, NULL, 0, '2019-11-19'),
(51, 8, 9, NULL, 1, '2019-11-19'),
(52, 17, 20, NULL, 0, '2020-01-07'),
(53, 18, 20, NULL, 0, '2020-01-07'),
(54, 19, 20, NULL, 0, '2020-01-07'),
(55, 20, 2, NULL, 0, '2020-01-07'),
(56, 21, 20, NULL, 0, '2020-01-07'),
(57, 17, 20, NULL, 1, '2020-01-02'),
(58, 18, 20, NULL, 0, '2020-01-02'),
(59, 19, 20, NULL, 2, '2020-01-02'),
(60, 20, 20, NULL, 0, '2020-01-02'),
(61, 22, 20, NULL, 0, '2020-01-02'),
(62, 24, 20, NULL, 0, '2020-01-02'),
(63, 17, 20, NULL, 1, '2020-01-03'),
(64, 18, 20, NULL, 0, '2020-01-03'),
(65, 19, 20, NULL, 2, '2020-01-03'),
(66, 20, 20, NULL, 0, '2020-01-03'),
(67, 22, 20, NULL, 0, '2020-01-03'),
(68, 24, 20, NULL, 0, '2020-01-03'),
(69, 17, 20, NULL, 0, '2020-01-08'),
(70, 18, 20, NULL, 1, '2020-01-08'),
(71, 19, 20, NULL, 1, '2020-01-08'),
(72, 22, 20, NULL, 0, '2020-01-08'),
(73, 24, 20, NULL, 0, '2020-01-08'),
(74, 25, 20, NULL, 0, '2020-01-08'),
(75, 42, 20, NULL, 1, '2020-05-01'),
(76, 41, 20, NULL, 0, '2020-05-01'),
(77, 45, 20, NULL, 0, '2020-05-01'),
(78, 55, 30, NULL, 2, '2020-07-10'),
(79, 58, 30, NULL, 0, '2020-07-10'),
(80, 59, 30, NULL, 1, '2020-07-10'),
(81, 66, 40, NULL, 1, '2020-07-01'),
(82, 67, 40, NULL, 1, '2020-07-01'),
(83, 68, 40, NULL, 0, '2020-07-01'),
(84, 66, 40, NULL, 0, '2020-07-02'),
(85, 67, 40, NULL, 1, '2020-07-02'),
(86, 68, 40, NULL, 0, '2020-07-02'),
(87, 66, 40, NULL, 0, '2020-07-03'),
(88, 67, 40, NULL, 0, '2020-07-03'),
(89, 68, 40, NULL, 1, '2020-07-03'),
(90, 66, 40, NULL, 0, '2020-07-06'),
(91, 67, 40, NULL, 0, '2020-07-06'),
(92, 68, 40, NULL, 0, '2020-07-06'),
(93, 61, 36, NULL, 0, '2020-07-10'),
(94, 62, 36, NULL, 0, '2020-07-10'),
(95, 63, 36, NULL, 0, '2020-07-10'),
(96, 64, 36, NULL, 0, '2020-07-10'),
(97, 65, 36, NULL, 0, '2020-07-10'),
(98, 61, 36, NULL, 0, '2020-07-08'),
(99, 62, 36, NULL, 0, '2020-07-08'),
(100, 63, 36, NULL, 1, '2020-07-08'),
(101, 64, 36, NULL, 1, '2020-07-08'),
(102, 65, 36, NULL, 0, '2020-07-08'),
(103, 61, 36, NULL, 2, '2020-07-14'),
(104, 62, 36, NULL, 2, '2020-07-14'),
(105, 63, 36, NULL, 1, '2020-07-14'),
(106, 64, 36, NULL, 1, '2020-07-14'),
(107, 69, 36, NULL, 1, '2020-07-14'),
(108, 61, 36, NULL, 2, '2020-07-15'),
(109, 62, 36, NULL, 2, '2020-07-15'),
(110, 63, 36, NULL, 1, '2020-07-15'),
(111, 64, 36, NULL, 2, '2020-07-15'),
(112, 69, 36, NULL, 2, '2020-07-15'),
(113, 62, 36, NULL, 1, '2020-07-17'),
(114, 58, 30, NULL, 0, '2020-11-06'),
(115, 59, 30, NULL, 1, '2020-11-06'),
(116, 58, 30, NULL, 0, '2020-11-04'),
(117, 59, 30, NULL, 0, '2020-11-04');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_administrasi`
--

CREATE TABLE IF NOT EXISTS `tbl_administrasi` (
`adm_id` int(3) NOT NULL,
  `adm_siswa_id` int(3) NOT NULL,
  `adm_wali_id` int(3) NOT NULL,
  `adm_semester` int(3) NOT NULL,
  `januari` int(3) DEFAULT NULL,
  `februari` int(3) DEFAULT NULL,
  `maret` int(3) DEFAULT NULL,
  `april` int(3) DEFAULT NULL,
  `mei` int(3) DEFAULT NULL,
  `juni` int(3) DEFAULT NULL,
  `juli` int(3) DEFAULT NULL,
  `agustus` int(3) DEFAULT NULL,
  `september` int(3) DEFAULT NULL,
  `oktober` int(3) DEFAULT NULL,
  `november` int(3) DEFAULT NULL,
  `desember` int(3) DEFAULT NULL,
  `createat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_administrasi`
--

INSERT INTO `tbl_administrasi` (`adm_id`, `adm_siswa_id`, `adm_wali_id`, `adm_semester`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `createat`) VALUES
(1, 61, 36, 6, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-07-13 14:55:30'),
(2, 55, 30, 6, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, '2020-07-18 09:18:09'),
(3, 58, 30, 6, 1, 1, 1, 1, 1, 0, 1, 0, 0, 1, 1, 1, '2020-07-18 08:43:29'),
(6, 59, 30, 6, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-07-18 08:43:43');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_agenda`
--

CREATE TABLE IF NOT EXISTS `tbl_agenda` (
`agenda_id` int(11) NOT NULL,
  `agenda_nama` varchar(200) DEFAULT NULL,
  `agenda_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `agenda_deskripsi` text,
  `agenda_mulai` date DEFAULT NULL,
  `agenda_selesai` date DEFAULT NULL,
  `agenda_tempat` varchar(90) DEFAULT NULL,
  `agenda_waktu` varchar(30) DEFAULT NULL,
  `agenda_keterangan` varchar(200) DEFAULT NULL,
  `agenda_author` varchar(60) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_agenda`
--

INSERT INTO `tbl_agenda` (`agenda_id`, `agenda_nama`, `agenda_tanggal`, `agenda_deskripsi`, `agenda_mulai`, `agenda_selesai`, `agenda_tempat`, `agenda_waktu`, `agenda_keterangan`, `agenda_author`) VALUES
(3, 'Penerimaan Raport Semester Genap Tahun Ajaran 2017-2018', '2020-05-22 06:29:49', 'Berakhirnya semester ganjil tahun pelajaran 2019-2020, ditandai dengan pembagian laporan hasil belajar.', '2020-06-01', '2020-06-15', 'Sekolah', '07.30 - 12.00 WIB', 'Untuk kelas XI dan XII, pembagian raport dimulai pukul 07.30 WIB. Sedangkan untuk kelas X pada pukul 09.00 WIB. Raport diambil oleh orang tua/wali murid masing-masing.', 'admin Profile');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_album`
--

CREATE TABLE IF NOT EXISTS `tbl_album` (
`album_id` int(11) NOT NULL,
  `album_nama` varchar(50) DEFAULT NULL,
  `album_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `album_pengguna_id` int(11) DEFAULT NULL,
  `album_author` varchar(60) DEFAULT NULL,
  `album_count` int(11) DEFAULT '0',
  `album_cover` varchar(40) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_album`
--

INSERT INTO `tbl_album` (`album_id`, `album_nama`, `album_tanggal`, `album_pengguna_id`, `album_author`, `album_count`, `album_cover`) VALUES
(5, 'santri', '2020-06-25 10:25:07', 15, 'sapto', 3, 'IMG_0460.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_daftar`
--

CREATE TABLE IF NOT EXISTS `tbl_daftar` (
`id` int(10) NOT NULL,
  `daftar_nama` varchar(50) NOT NULL,
  `daftar_jengkel` varchar(5) NOT NULL,
  `daftar_tempat` varchar(50) NOT NULL,
  `daftar_alamat` varchar(100) NOT NULL,
  `daftar_tanggal` date NOT NULL,
  `daftar_ayah` varchar(10) NOT NULL,
  `daftar_ibu` varchar(10) NOT NULL,
  `daftar_telephone` varchar(20) NOT NULL,
  `daftar_email` varchar(50) NOT NULL,
  `daftar_nirm` varchar(15) NOT NULL,
  `daftar_foto` varchar(50) NOT NULL,
  `daftar_createat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `daftar_status` int(3) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_daftar`
--

INSERT INTO `tbl_daftar` (`id`, `daftar_nama`, `daftar_jengkel`, `daftar_tempat`, `daftar_alamat`, `daftar_tanggal`, `daftar_ayah`, `daftar_ibu`, `daftar_telephone`, `daftar_email`, `daftar_nirm`, `daftar_foto`, `daftar_createat`, `daftar_status`) VALUES
(47, 'badu', 'P', 'sleman', 'sleman condong catur', '2020-07-02', 'muji', 'suwarsi', '9876545678', 'fauzanashari29@gmail.com', '230720200001', '299-2995189_free-png-cassava-png-images-transparen', '2020-07-23 03:42:28', 0),
(48, 'muhamad fauzan ashari', 'L', 'sleman', 'condongcatur depok sleman', '2020-07-09', 'muji', 'suwarsi', '098765432456', 'fauzanashari29@gmail.com', '270720200002', '115.jpg', '2020-07-27 07:25:04', 1),
(49, 'muhamad nasrudin alfi', 'L', 'sleman', 'condongcatur depok sleman', '2020-07-01', 'muji', 'suwarsi', '2345678987654', 'fauzanashari29@gmail.com', '270720200003', '299-2995189_free-png-cassava-png-images-transparen', '2020-07-27 07:36:13', 0),
(50, 'muhadi anwar', '', 'sleman', 'condongcatur depok sleman', '2020-07-01', 'muji', 'suwarsi', '09876545678', 'fauzanashari29@gmail.com', '270720200004', '3773421435.jpg', '2020-07-27 08:00:45', 0),
(51, 'khoirul anwar', 'L', 'sleman', 'condongcatur depok sleman', '2020-07-02', 'dani', 'susi', '09869754578', 'fauzanashari29@gmail.com', '270720200005', '116.jpg', '2020-07-27 08:06:37', 1),
(52, 'dani', 'L', 'sleman', 'condongcatur depok sleman', '1998-02-03', 'dani', 'suwarsi', '096543457890', 'fauzanashari29@gmail.com', '250920200006', 'arsi_merah4.jpg', '2020-09-25 07:47:55', 1),
(53, 'badu', 'L', 'sleman', 'condongcatur depok sleman', '1997-12-09', 'dani', 'suwarsi', '087656789', 'fauzanashari29@gmail.com', '250920200006', 'arsi_merah5.jpg', '2020-09-25 07:57:10', 1),
(54, 'muhamad fauzan ashari', 'L', 'sleman', 'condongcatur depok sleman', '1997-01-29', 'muji', 'suwarsi', '0856578892978', 'fauzanashari29@gmail.com', '241020200006', 'Capture1.JPG', '2020-10-24 06:24:37', 0),
(56, 'nuris S', 'P', 'Kediri', 'puroasri kediri jawa timur', '1999-01-07', 'Samo''in', 'Asmaul hus', '0854345652', 'fauzanashari29@gmail.com', '241020200007', 'nn1.JPG', '2020-10-24 06:33:43', 0),
(57, 'Umi Istiqomah', 'P', 'sleman', 'condongcatur depok sleman', '1994-10-03', 'muji', 'suwarsi', '087543456345', 'fauzanashari29@gmail.com', '241020200008', 'crop_mbk_umi.jpg', '2020-10-24 06:35:07', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_files`
--

CREATE TABLE IF NOT EXISTS `tbl_files` (
`file_id` int(11) NOT NULL,
  `file_judul` varchar(120) DEFAULT NULL,
  `file_deskripsi` text,
  `file_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `file_oleh` varchar(60) DEFAULT NULL,
  `file_status` int(5) DEFAULT '3' COMMENT '1=santri, 2=web profil, 3=semuanya',
  `file_download` int(11) DEFAULT '0',
  `file_data` varchar(120) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_files`
--

INSERT INTO `tbl_files` (`file_id`, `file_judul`, `file_deskripsi`, `file_tanggal`, `file_oleh`, `file_status`, `file_download`, `file_data`) VALUES
(2, 'Dasar-dasar CSS', 'Modul dasar-dasar CSS 3. Modul ini membantu anda untuk memahami struktur dasar CSS', '2017-01-23 04:30:01', 'Drs. Joko', 3, 0, 'ab9a183ff240deadbedaff78e639af2f.pdf'),
(3, '14 Teknik Komunikasi Yang Paling Efektif', 'Ebook 14 teknik komunikasi paling efektif membantu anda untuk berkomunikasi dengan baik dan benar', '2017-01-23 15:26:06', 'Drs. Joko', 3, 0, 'ab2cb34682bd94f30f2347523112ffb9.pdf'),
(4, 'Bagaimana Membentuk Pola Pikir yang Baru', 'Ebook ini membantu anda membentuk pola pikir baru.', '2017-01-23 15:27:07', 'Drs. Joko', 3, 0, '30f588eb5c55324f8d18213f11651855.pdf'),
(5, '7 Tips Penting mengatasi Kritik', '7 Tips Penting mengatasi Kritik', '2017-01-23 15:27:44', 'Drs. Joko', 3, 0, '329a62b25ad475a148e1546aa3db41de.docx'),
(6, '8 Racun dalam kehidupan kita', '8 Racun dalam kehidupan kita', '2017-01-23 15:28:17', 'Drs. Joko', 3, 0, '8e38ad4948ba13758683dea443fbe6be.docx'),
(7, 'Jurnal Teknolgi Informasi', 'Jurnal Teknolgi Informasi', '2017-01-25 03:18:53', 'Gunawan, S.Pd', 3, 0, '87ae0f009714ddfdd79e2977b2a64632.pdf'),
(8, 'Jurnal Teknolgi Informasi 2', 'Jurnal Teknolgi Informasi', '2017-01-25 03:19:22', 'Gunawan, S.Pd', 3, 0, 'c4e966ba2c6e142155082854dc5b3602.pdf'),
(9, 'Naskah Publikasi IT', 'Naskah Teknolgi Informasi', '2017-01-25 03:21:04', 'Gunawan, S.Pd', 3, 0, '71380b3cf16a17a02382098c028ece9c.pdf'),
(10, 'Modul Teknologi Informasi', 'Modul Teknologi Informasi', '2017-01-25 03:22:08', 'Gunawan, S.Pd', 3, 0, '029143a3980232ab2900d94df36dbb0c.pdf'),
(11, 'Modul Teknologi Informasi Part II', 'Modul Teknologi Informasi', '2017-01-25 03:22:54', 'Gunawan, S.Pd', 3, 0, 'ea8f3f732576083156e509657614f551.pdf'),
(12, 'Modul Teknologi Informasi Part III', 'Modul Teknologi Informasi', '2017-01-25 03:23:21', 'Gunawan, S.Pd', 3, 0, 'c5e5e7d16e4cd6c3d22c11f64b0db2af.pdf'),
(13, 'latar belakang', 'coba coba', '2019-10-09 08:57:59', 'saya', 3, 0, 'fc23de77993a9dbc8b80290d2073fef9.pdf'),
(14, 'barubanget', 'lkjhgfghjk', '2020-01-08 22:43:49', 'saya jj', 3, 0, 'ef5c3ba69419fec95487b15878d28080.pdf'),
(15, 'barubangetjj', 'aesrdfgjfds', '2020-01-09 00:19:23', 'sayatt', 3, 0, '32898b6a92f636879003402341fb58c4.pdf'),
(17, 'PSB', 'data PSB 2020', '2020-07-03 21:06:38', '30', 3, 0, '67d329ca2dde905fa88a16528af9f09e.docx'),
(18, 'Laporan Akhir', 'Hanya Kover', '2020-07-08 03:23:09', '40', 3, 0, '8f8e768652427fadca4fbebb8de2b54e.pdf'),
(19, 'sempro22', 'proposl skripsi', '2020-07-13 15:35:15', '36', 3, 0, 'cde73f9ef569b66172bfb0ddb2d88960.docx'),
(20, 'khatamannn', 'ini khatamannn', '2020-10-20 15:44:51', '36', 1, 0, '5ccc0ffb043390b77f5d61893438d973.docx'),
(21, 'coba', 'coba lagi', '2020-11-08 10:17:15', 'amril', 3, 0, '12650043_BAB-I_VII_DAFTAR-PUSTAKA.docx');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_galeri`
--

CREATE TABLE IF NOT EXISTS `tbl_galeri` (
`galeri_id` int(11) NOT NULL,
  `galeri_judul` varchar(60) DEFAULT NULL,
  `galeri_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `galeri_gambar` varchar(40) DEFAULT NULL,
  `galeri_album_id` int(11) DEFAULT NULL,
  `galeri_pengguna_id` int(11) DEFAULT NULL,
  `galeri_author` varchar(60) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_galeri`
--

INSERT INTO `tbl_galeri` (`galeri_id`, `galeri_judul`, `galeri_tanggal`, `galeri_gambar`, `galeri_album_id`, `galeri_pengguna_id`, `galeri_author`) VALUES
(4, 'Diskusi Pemilihan Ketua Osis', '2017-01-21 14:04:53', '9b10fa300633f62f105e9b52789fc8f3.jpg', 3, 1, 'M Fikri Setiadi'),
(5, 'Panitia Pemilu Osis', '2017-01-22 04:13:20', '0ec0c2f9aae6501d7ed7930995d48b57.jpg', 3, 1, 'M Fikri Setiadi'),
(6, 'Proses Pemilu Osis', '2017-01-22 04:13:43', 'bfbe6cc1c8096f5f36c68e93da53c248.jpg', 3, 1, 'M Fikri Setiadi'),
(7, 'Belajar dengan native speaker', '2017-01-24 01:26:22', '831e5ad43ccc3c851d50c128ff095541.jpg', 1, 1, 'M Fikri Setiadi'),
(8, 'Diskusi dengan native speaker', '2017-01-24 01:27:05', '84afbf1d3ad45932f1d7ac47b8a00949.jpg', 1, 1, 'M Fikri Setiadi'),
(9, 'Foto bareng native speaker', '2017-01-24 01:27:28', 'a99ab060d5d5bf8c96f24fe385f7dd8b.jpg', 1, 1, 'M Fikri Setiadi'),
(10, 'Foto bareng native speaker', '2017-01-24 01:28:40', 'd70cedba6391b7b3c74b914efd82953f.jpg', 1, 1, 'M Fikri Setiadi'),
(11, 'Foto bareng native speaker', '2017-01-24 01:28:54', '10de99f425b9961ce1e87c5e5575f8f4.jpg', 1, 1, 'M Fikri Setiadi'),
(12, 'Belajar sambil bermain', '2017-01-24 01:31:42', '9df82241493b94d1e06b461129cf57b2.jpg', 4, 1, 'M Fikri Setiadi'),
(13, 'Belajar sambil bermain', '2017-01-24 01:31:55', '5374415f11683ad6dd31572a7bbf8a7b.jpg', 4, 1, 'M Fikri Setiadi'),
(14, 'Belajar komputer programming', '2017-01-24 01:32:24', '82b91bd35706b21c3ab04e205e358eb6.jpg', 4, 1, 'M Fikri Setiadi'),
(15, 'Belajar komputer programming', '2017-01-24 01:32:34', '93048f2a103987bce8c8ec8d6912de06.jpg', 4, 1, 'M Fikri Setiadi'),
(16, 'Belajar komputer programming', '2017-01-24 01:32:44', '41f46be181f2f8452c2041b5e79a05a5.jpg', 4, 1, 'M Fikri Setiadi'),
(17, 'Belajar sambil bermain', '2017-01-24 01:33:08', '2858b0555c252690e293d29b922ba8e6.jpg', 4, 1, 'M Fikri Setiadi'),
(18, 'Makan bersama', '2017-01-24 01:33:24', '90d67328e33a31d3f5eecd7dcb25b55d.jpg', 4, 1, 'M Fikri Setiadi'),
(19, 'santri baru', '2020-06-25 10:34:08', 'IMG_0460.JPG', 5, 15, 'sapto'),
(20, 'khataman', '2020-06-25 12:13:34', 'IMG_8876.JPG', 5, 15, 'sapto'),
(21, 'khataman', '2020-06-25 12:16:40', 'IMG_88761.JPG', 5, 15, 'sapto');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_guru`
--

CREATE TABLE IF NOT EXISTS `tbl_guru` (
`guru_id` int(11) NOT NULL,
  `guru_status` int(3) NOT NULL DEFAULT '1' COMMENT '0=Tidak Aktif, 1=Aktif',
  `guru_nip` varchar(30) DEFAULT NULL,
  `guru_nama` varchar(70) DEFAULT NULL,
  `guru_jenkel` varchar(2) DEFAULT NULL,
  `guru_tmp_lahir` varchar(80) DEFAULT NULL,
  `guru_tgl_lahir` date DEFAULT NULL,
  `guru_alamat` varchar(100) DEFAULT NULL,
  `guru_mapel` varchar(120) DEFAULT NULL,
  `guru_facebook` varchar(55) DEFAULT NULL,
  `guru_instagram` varchar(50) DEFAULT NULL,
  `guru_twitter` varchar(45) DEFAULT NULL,
  `guru_whatsaap` varchar(50) DEFAULT NULL,
  `guru_photo` varchar(40) DEFAULT NULL,
  `guru_tgl_input` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_guru`
--

INSERT INTO `tbl_guru` (`guru_id`, `guru_status`, `guru_nip`, `guru_nama`, `guru_jenkel`, `guru_tmp_lahir`, `guru_tgl_lahir`, `guru_alamat`, `guru_mapel`, `guru_facebook`, `guru_instagram`, `guru_twitter`, `guru_whatsaap`, `guru_photo`, `guru_tgl_input`) VALUES
(39, 1, '12342155rt', 'nuris', 'L', 'sleman', '2020-06-12', NULL, '16', NULL, NULL, NULL, NULL, 'crop_mbk_umi.jpg', '2020-06-25 14:03:05'),
(40, 0, '0868655', 'hari PSB', 'L', 'sleman', '2020-06-18', NULL, '15', NULL, NULL, NULL, NULL, 'IMG_0360.JPG', '2020-06-25 14:14:34'),
(41, 1, '', 'admin Profile', 'L', '', '0000-00-00', NULL, '14', NULL, NULL, NULL, NULL, 'IMG_0360.JPG', '2020-06-25 14:15:20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inbox`
--

CREATE TABLE IF NOT EXISTS `tbl_inbox` (
`inbox_id` int(11) NOT NULL,
  `inbox_nama` varchar(40) DEFAULT NULL,
  `inbox_email` varchar(60) DEFAULT NULL,
  `inbox_kontak` varchar(20) DEFAULT NULL,
  `inbox_pesan` text,
  `inbox_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `inbox_status` int(11) DEFAULT '1' COMMENT '1=Belum dilihat, 0=Telah dilihat'
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_inbox`
--

INSERT INTO `tbl_inbox` (`inbox_id`, `inbox_nama`, `inbox_email`, `inbox_kontak`, `inbox_pesan`, `inbox_tanggal`, `inbox_status`) VALUES
(2, 'M Fikri Setiadi', 'fikrifiver97@gmail.com', '-', 'Ping !', '2017-06-21 03:44:12', 0),
(3, 'M Fikri Setiadi', 'fikrifiver97@gmail.com', '-', 'Ini adalah pesan ', '2017-06-21 03:45:57', 0),
(5, 'M Fikri Setiadi', 'fikrifiver97@gmail.com', '-', 'Ping !', '2017-06-21 03:53:19', 0),
(7, 'M Fikri Setiadi', 'fikrifiver97@gmail.com', '-', 'Hi, there!', '2017-07-01 07:28:08', 0),
(8, 'M Fikri', 'fikrifiver97@gmail.com', '084375684364', 'Hi There, Would you please help me about register?', '2018-08-06 13:51:07', 0),
(9, 'adi', 'adi@gmail.com', '0908678673512', 'coba2', '2019-10-16 12:46:05', 0),
(10, 'badu', 'badu@gmail.com', '080793739477', 'absen', '2019-10-16 12:46:34', 0),
(11, 'nuris', 'fauzanashari29@gmail.com', '986787654567', 'baik', '2020-11-08 10:20:11', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE IF NOT EXISTS `tbl_kategori` (
`kategori_id` int(11) NOT NULL,
  `kategori_nama` varchar(30) DEFAULT NULL,
  `kategori_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`kategori_id`, `kategori_nama`, `kategori_tanggal`) VALUES
(1, 'Pendidikan', '2016-09-06 05:49:04'),
(2, 'Politik', '2016-09-06 05:50:01'),
(3, 'Sains', '2016-09-06 05:59:39'),
(5, 'Penelitian', '2016-09-06 06:19:26'),
(6, 'Prestasi', '2016-09-07 02:51:09'),
(13, 'Olah Raga', '2017-01-13 13:20:31');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori_kelas`
--

CREATE TABLE IF NOT EXISTS `tbl_kategori_kelas` (
`kategori_id` int(11) NOT NULL,
  `kategori_kelas` varchar(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kategori_kelas`
--

INSERT INTO `tbl_kategori_kelas` (`kategori_id`, `kategori_kelas`) VALUES
(2, 'XX'),
(3, 'VII'),
(4, 'IX');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kelas`
--

CREATE TABLE IF NOT EXISTS `tbl_kelas` (
`kelas_id` int(11) NOT NULL,
  `kelas_nama` varchar(50) NOT NULL,
  `kelas_kategori_id` int(11) NOT NULL,
  `kelas_wali_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kelas`
--

INSERT INTO `tbl_kelas` (`kelas_id`, `kelas_nama`, `kelas_kategori_id`, `kelas_wali_id`) VALUES
(12, 'aa', 2, 30),
(14, 'VII A', 3, 36),
(15, 'IX A', 4, 39),
(16, '--', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_komentar`
--

CREATE TABLE IF NOT EXISTS `tbl_komentar` (
`komentar_id` int(11) NOT NULL,
  `komentar_nama` varchar(30) DEFAULT NULL,
  `komentar_email` varchar(50) DEFAULT NULL,
  `komentar_isi` varchar(120) DEFAULT NULL,
  `komentar_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `komentar_status` varchar(2) DEFAULT NULL,
  `komentar_tulisan_id` int(11) DEFAULT NULL,
  `komentar_parent` int(11) DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_komentar`
--

INSERT INTO `tbl_komentar` (`komentar_id`, `komentar_nama`, `komentar_email`, `komentar_isi`, `komentar_tanggal`, `komentar_status`, `komentar_tulisan_id`, `komentar_parent`) VALUES
(1, 'M Fikri', 'fikrifiver97@gmail.com', ' Nice Post.', '2018-08-07 15:09:07', '1', 24, 0),
(2, 'M Fikri Setiadi', 'fikrifiver97@gmail.com', ' Awesome Post', '2018-08-07 15:14:26', '1', 24, 0),
(3, 'Joko', 'joko@gmail.com', 'Thank you.', '2018-08-08 03:54:56', '1', 24, 1),
(4, 'ashari', 'asharifauzan@gmail.com', ' sangat baik sekali', '2019-11-08 16:23:34', '1', 23, 0),
(5, 'admin', '', 'ok terimakasih', '2019-11-08 16:24:13', '1', 23, 4),
(6, 'waawan', 'wawan@gmail.com', 'fglfhkkhgghoiuowe9 hdqiewi joiqwo ', '2020-01-07 09:27:17', '1', 27, 0),
(7, 'sapto', '', 'ghgfghgf drwerrh', '2020-01-07 09:27:45', '1', 27, 6),
(8, 'admin Profile', '', 'wow', '2020-07-13 16:03:51', '1', 24, 1),
(9, 'Desi', 'fauzanashari29@gmail.com', ' josss', '2020-11-08 10:20:58', '1', 27, 0),
(10, 'admin Profile', '', 'terimakasih<br />\r\n', '2020-11-08 10:22:33', '1', 27, 9);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_log_aktivitas`
--

CREATE TABLE IF NOT EXISTS `tbl_log_aktivitas` (
`log_id` int(11) NOT NULL,
  `log_nama` text,
  `log_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `log_ip` varchar(20) DEFAULT NULL,
  `log_pengguna_id` int(11) DEFAULT NULL,
  `log_icon` blob,
  `log_jenis_icon` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mapel`
--

CREATE TABLE IF NOT EXISTS `tbl_mapel` (
`mapel_id` int(11) NOT NULL,
  `mapel_kode` varchar(11) NOT NULL,
  `mapel_nama` varchar(50) NOT NULL,
  `mapel_kelas` varchar(11) NOT NULL,
  `mapel_kategori_kelas` int(11) NOT NULL,
  `mapel_guru_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mapel`
--

INSERT INTO `tbl_mapel` (`mapel_id`, `mapel_kode`, `mapel_nama`, `mapel_kelas`, `mapel_kategori_kelas`, `mapel_guru_id`) VALUES
(14, 'K33455', 'ppkny', '12', 2, 0),
(15, 'F1123', 'Fiqih', '12', 2, 0),
(16, 'M223', 'Matematika', '14', 3, 0),
(17, 'NH33', 'Nahwu', '17', 4, 0),
(18, 'SR22', 'Sorof', '17', 4, 0),
(19, 'bh55', 'Bahasa Indonesia', '14', 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilai`
--

CREATE TABLE IF NOT EXISTS `tbl_nilai` (
`nilai_id` int(10) NOT NULL,
  `nilai_siswaId` int(10) NOT NULL,
  `nilai_waliId` int(10) NOT NULL,
  `nilai_mapelId` int(10) NOT NULL,
  `nilai1` int(10) NOT NULL COMMENT 'ex:uts',
  `nilai2` int(10) NOT NULL COMMENT 'ex:uas',
  `nilai_akhir` int(10) NOT NULL COMMENT 'nilai akhir',
  `createat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_nilai`
--

INSERT INTO `tbl_nilai` (`nilai_id`, `nilai_siswaId`, `nilai_waliId`, `nilai_mapelId`, `nilai1`, `nilai2`, `nilai_akhir`, `createat`) VALUES
(4, 58, 30, 15, 90, 90, 90, '2020-07-07 13:25:48'),
(5, 59, 30, 15, 90, 80, 85, '2020-07-07 14:24:21'),
(7, 55, 30, 15, 90, 100, 95, '2020-07-07 16:12:13'),
(8, 55, 30, 14, 30, 60, 45, '2020-07-07 16:15:18'),
(9, 58, 30, 14, 80, 75, 78, '2020-07-07 16:17:38'),
(10, 59, 30, 14, 80, 90, 85, '2020-07-07 16:17:54'),
(11, 61, 36, 16, 80, 70, 75, '2020-07-07 17:41:16'),
(12, 62, 36, 16, 30, 60, 45, '2020-07-07 17:41:38'),
(13, 63, 36, 16, 80, 80, 80, '2020-10-24 07:55:23'),
(14, 61, 36, 0, 0, 0, 0, '2020-07-11 09:04:49'),
(15, 61, 36, 0, 0, 0, 0, '2020-07-11 09:06:08'),
(16, 61, 36, 19, 50, 55, 53, '2020-07-15 13:47:15'),
(17, 62, 36, 19, 45, 65, 55, '2020-07-15 13:47:27'),
(19, 63, 36, 19, 50, 45, 48, '2020-07-17 09:57:50'),
(22, 64, 36, 16, 85, 60, 73, '2020-10-24 07:54:30');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengguna`
--

CREATE TABLE IF NOT EXISTS `tbl_pengguna` (
`pengguna_id` int(11) NOT NULL,
  `pengguna_nama` varchar(50) DEFAULT NULL,
  `pengguna_jenkel` varchar(2) DEFAULT NULL,
  `pengguna_username` varchar(30) DEFAULT NULL,
  `pengguna_pass_lihat` varchar(10) NOT NULL,
  `pengguna_password` varchar(35) DEFAULT NULL,
  `pengguna_email` varchar(50) DEFAULT NULL,
  `pengguna_nohp` varchar(20) DEFAULT NULL,
  `pengguna_status` int(2) DEFAULT '1',
  `pengguna_level` varchar(3) DEFAULT NULL COMMENT '1=superadmin, 2=wali kela, 3=admin profile, 4=santri, 5=panitia PSB',
  `pengguna_register` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `pengguna_photo` varchar(40) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengguna`
--

INSERT INTO `tbl_pengguna` (`pengguna_id`, `pengguna_nama`, `pengguna_jenkel`, `pengguna_username`, `pengguna_pass_lihat`, `pengguna_password`, `pengguna_email`, `pengguna_nohp`, `pengguna_status`, `pengguna_level`, `pengguna_register`, `pengguna_photo`) VALUES
(30, 'hari', 'L', 'hari123', '', '98641e30ace18a76f07bd7e5fbf7cd6c', 'fauzanashari29@gmail.com', '08099898898', 1, '2', '2020-06-25 13:35:22', 'arsi_biru4.jpg'),
(32, 'badu', 'L', 'badu123', '', '98641e30ace18a76f07bd7e5fbf7cd6c', 'fauzanashari29@gmail.com', '09867677637', 1, '4', '2020-06-25 13:37:00', 'aasa.jpg'),
(33, 'adminpsb', 'L', 'adminpsb', '', '98641e30ace18a76f07bd7e5fbf7cd6c', 'fauzanashari29@gmail.com', '08099898898', 1, '5', '2020-06-25 13:38:56', 'IMG_0318.JPG'),
(34, 'hari PSB', 'L', 'haripsb', '', '98641e30ace18a76f07bd7e5fbf7cd6c', 'fauzanashari29@gmail.com', '08099898898', 1, '5', '2020-06-25 14:14:34', 'crop1.jpg'),
(35, 'admin Profile', 'L', 'adminprofil', '', '98641e30ace18a76f07bd7e5fbf7cd6c', 'fauzanashari29@gmail.com', '08099898898', 1, '3', '2020-06-25 14:15:20', 'arsi_biru.jpg'),
(36, 'puji', 'L', 'puji123456', '', '98641e30ace18a76f07bd7e5fbf7cd6c', 'fauzanashari29@gmail.com', '08099898898', 1, '2', '2020-06-26 06:02:36', 'arsi_merah1.jpg'),
(37, 'super admin', 'L', 'superadmin', '', '98641e30ace18a76f07bd7e5fbf7cd6c', 'fauzanashari29@gmail.com', '08099898898', 1, '1', '2020-06-29 00:12:17', 'IMG_0315.JPG'),
(39, 'wahyu', 'P', 'wahyu123', '', '98641e30ace18a76f07bd7e5fbf7cd6c', 'fauzanashari29@gmail.com', '09867677637', 1, '2', '2020-07-08 00:59:06', 'bc_buku.jpg'),
(43, 'adam rifki', 'L', 'adam', '', '98641e30ace18a76f07bd7e5fbf7cd6c', 'fauzanashari29@gmail.com', '08099898898', 1, '5', '2020-07-11 00:32:54', '117.jpg'),
(47, 'amrul', 'L', 'psb123', '', '98641e30ace18a76f07bd7e5fbf7cd6c', 'fauzanashari29@gmail.com', '09867677637', 1, '5', '2020-07-11 00:57:22', '1112.jpg'),
(50, 'afif afandi', 'L', 'afif123', '26410', 'e36dfba5e7cc3a42ee845634093caaa1', 'fauzanashari29@gmail.com', '987678987', 1, '3', '2020-07-27 12:37:26', '1120.jpg'),
(51, 'alvian', 'L', 'alvian123', '10229', '70876df606415b050df59005c3cff238', 'fauzanashari29@gmail.com', '09876567898', 1, '3', '2020-07-27 12:41:48', 'arsi_biru5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengumuman`
--

CREATE TABLE IF NOT EXISTS `tbl_pengumuman` (
`pengumuman_id` int(11) NOT NULL,
  `pengumuman_judul` varchar(150) DEFAULT NULL,
  `pengumuman_deskripsi` text,
  `pengumuman_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `pengumuman_author` varchar(60) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengumuman`
--

INSERT INTO `tbl_pengumuman` (`pengumuman_id`, `pengumuman_judul`, `pengumuman_deskripsi`, `pengumuman_tanggal`, `pengumuman_author`) VALUES
(6, 'Pengumuman Libur Semester Ganjil Tahun Ajaran Genap', 'Libur mulai dari tanggal 20 Juli sampai 5 Agustus 2020', '2020-10-06 06:16:41', 'admin Profile');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengunjung`
--

CREATE TABLE IF NOT EXISTS `tbl_pengunjung` (
`pengunjung_id` int(11) NOT NULL,
  `pengunjung_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `pengunjung_ip` varchar(40) DEFAULT NULL,
  `pengunjung_perangkat` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=989 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengunjung`
--

INSERT INTO `tbl_pengunjung` (`pengunjung_id`, `pengunjung_tanggal`, `pengunjung_ip`, `pengunjung_perangkat`) VALUES
(930, '2018-08-09 08:04:59', '::1', 'Chrome'),
(931, '2019-09-21 10:41:40', '::1', 'Chrome'),
(932, '2019-10-09 08:55:22', '::1', 'Chrome'),
(933, '2019-10-09 21:18:57', '::1', 'Chrome'),
(934, '2019-10-11 09:55:28', '::1', 'Chrome'),
(935, '2019-10-14 04:15:01', '::1', 'Chrome'),
(936, '2019-10-15 03:48:29', '::1', 'Chrome'),
(937, '2019-10-16 10:06:23', '::1', 'Chrome'),
(938, '2019-10-23 10:05:48', '127.0.0.1', 'Firefox'),
(939, '2019-10-23 10:06:32', '::1', 'Chrome'),
(940, '2019-10-23 17:00:22', '127.0.0.1', 'Firefox'),
(941, '2019-11-01 12:35:06', '127.0.0.1', 'Firefox'),
(942, '2019-11-01 13:40:42', '::1', 'Chrome'),
(943, '2019-11-02 05:38:15', '127.0.0.1', 'Firefox'),
(944, '2019-11-05 13:33:03', '127.0.0.1', 'Firefox'),
(945, '2019-11-08 07:22:55', '127.0.0.1', 'Firefox'),
(946, '2019-11-09 06:25:31', '127.0.0.1', 'Firefox'),
(947, '2019-12-23 05:12:09', '127.0.0.1', 'Firefox'),
(948, '2019-12-27 17:36:15', '::1', 'Chrome'),
(949, '2020-01-06 11:58:43', '::1', 'Chrome'),
(950, '2020-01-07 09:26:48', '::1', 'Chrome'),
(951, '2020-01-08 06:12:05', '::1', 'Chrome'),
(952, '2020-01-08 11:20:56', '127.0.0.1', 'Firefox'),
(953, '2020-01-08 22:37:40', '::1', 'Chrome'),
(954, '2020-01-20 23:38:52', '127.0.0.1', 'Firefox'),
(955, '2020-02-24 12:54:15', '127.0.0.1', 'Firefox'),
(956, '2020-05-26 07:19:04', '::1', 'Chrome'),
(957, '2020-05-27 03:36:02', '::1', 'Chrome'),
(958, '2020-06-08 07:27:16', '::1', 'Chrome'),
(959, '2020-06-09 12:39:58', '::1', 'Chrome'),
(960, '2020-06-09 15:45:28', '127.0.0.1', 'Firefox'),
(961, '2020-06-11 02:41:58', '127.0.0.1', 'Firefox'),
(962, '2020-06-11 02:44:49', '::1', 'Chrome'),
(963, '2020-06-12 11:30:53', '::1', 'Chrome'),
(964, '2020-06-12 18:31:32', '::1', 'Chrome'),
(965, '2020-06-18 11:22:53', '::1', 'Chrome'),
(966, '2020-06-20 04:04:56', '::1', 'Chrome'),
(967, '2020-06-20 23:42:19', '::1', 'Chrome'),
(968, '2020-06-21 18:34:49', '::1', 'Chrome'),
(969, '2020-06-23 22:24:17', '::1', 'Chrome'),
(970, '2020-06-25 05:52:56', '::1', 'Chrome'),
(971, '2020-06-27 15:59:27', '::1', 'Chrome'),
(972, '2020-06-29 05:57:35', '::1', 'Chrome'),
(973, '2020-07-01 22:12:57', '::1', 'Chrome'),
(974, '2020-07-03 21:03:17', '::1', 'Chrome'),
(975, '2020-07-05 00:18:13', '::1', 'Chrome'),
(976, '2020-07-08 00:34:04', '::1', 'Chrome'),
(977, '2020-07-10 16:57:24', '::1', 'Chrome'),
(978, '2020-07-13 15:41:03', '::1', 'Chrome'),
(979, '2020-07-15 14:00:52', '::1', 'Chrome'),
(980, '2020-07-23 02:29:16', '::1', 'Chrome'),
(981, '2020-07-27 07:23:51', '::1', 'Chrome'),
(982, '2020-08-28 10:01:36', '::1', 'Chrome'),
(983, '2020-09-25 07:47:17', '::1', 'Chrome'),
(984, '2020-09-27 09:36:01', '::1', 'Chrome'),
(985, '2020-10-06 06:13:54', '::1', 'Chrome'),
(986, '2020-10-20 14:52:48', '::1', 'Chrome'),
(987, '2020-10-24 06:23:00', '::1', 'Chrome'),
(988, '2020-11-08 10:07:36', '::1', 'Chrome');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rapor`
--

CREATE TABLE IF NOT EXISTS `tbl_rapor` (
`id_rapor` int(10) NOT NULL,
  `rapor_siswaId` int(3) NOT NULL,
  `rapor_semester` int(3) NOT NULL,
  `rapor_status` int(3) NOT NULL,
  `rapor_kelas` int(3) NOT NULL,
  `rapor_catatan` text NOT NULL,
  `rapor_waliId` int(3) NOT NULL COMMENT 'id wali yg input rapor',
  `createat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=141 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_rapor`
--

INSERT INTO `tbl_rapor` (`id_rapor`, `rapor_siswaId`, `rapor_semester`, `rapor_status`, `rapor_kelas`, `rapor_catatan`, `rapor_waliId`, `createat`) VALUES
(136, 61, 6, 1, 15, 'bagus', 36, '2020-07-18 10:39:17'),
(137, 62, 6, 1, 15, 'tingkatkan', 36, '2020-07-18 10:39:21'),
(140, 55, 6, 1, 15, 'bagus sekali', 30, '2020-07-18 11:31:48');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa`
--

CREATE TABLE IF NOT EXISTS `tbl_siswa` (
`siswa_id` int(11) NOT NULL,
  `siswa_guru_id` int(11) NOT NULL,
  `siswa_nis` varchar(20) DEFAULT NULL,
  `siswa_password` varchar(50) NOT NULL,
  `siswa_password_lihat` varchar(50) NOT NULL,
  `siswa_nama` varchar(70) DEFAULT NULL,
  `siswa_jenkel` varchar(2) DEFAULT NULL,
  `siswa_kelas_id` int(11) DEFAULT NULL,
  `siswa_status` int(3) NOT NULL DEFAULT '1' COMMENT '1=Aktif , 0=alumni',
  `siswa_photo` varchar(40) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`siswa_id`, `siswa_guru_id`, `siswa_nis`, `siswa_password`, `siswa_password_lihat`, `siswa_nama`, `siswa_jenkel`, `siswa_kelas_id`, `siswa_status`, `siswa_photo`) VALUES
(55, 39, '12345', '98641e30ace18a76f07bd7e5fbf7cd6c', '123456qq', 'hari nande L', 'L', 15, 1, 'arsi_biru.jpg'),
(58, 30, '00012366', '30b1b5b6990012b272d5251f6a31489c', '12837', 'nuris', 'P', 12, 1, '1113.jpg'),
(59, 30, '123456', '61e40fcd266f6924734eefc31492e4b7', '20974', 'hari', 'L', 12, 1, '1114.jpg'),
(61, 39, '00989855', 'aab3238922bcc25a6f606eb525ffdc56', '123456qq', 'Dian', 'L', 15, 1, ''),
(62, 39, '00012333', 'aab3238922bcc25a6f606eb525ffdc56', '123456qq', 'Umi', 'P', 15, 1, ''),
(63, 36, '00989', '98641e30ace18a76f07bd7e5fbf7cd6c', '123456qq', 'hamimww', 'L', 14, 1, '377342143.jpg'),
(64, 36, '07886669999', '98641e30ace18a76f07bd7e5fbf7cd6c', '123456qq', 'badu123', 'L', 14, 1, '114.jpg'),
(66, 40, '886765', 'b5d62aa6024ab6a65a12c78c4c2d4efc', '7904', 'arsi', 'P', 17, 1, 'arsi_biru1.jpg'),
(67, 40, '99867', 'db0513583c7b05237076d942baab7ce9', '5529', 'nuzul', 'P', 17, 1, '11.png'),
(68, 40, '76655', 'b57a35f9dda9f73ab2c04e1a6963c932', '31746', 'Isti', 'P', 17, 1, 'pp.png'),
(69, 39, '009876', 'f50106ecc24e48b2f5d7b1ea7b289bc3', '29583', 'azazam ngeyil', 'L', 15, 1, 'fba98c5585d7fbc427b282bdfbef9d9a.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slide`
--

CREATE TABLE IF NOT EXISTS `tbl_slide` (
`slide_id` int(11) NOT NULL,
  `slide_caption` varchar(250) NOT NULL,
  `slide_judul` varchar(100) NOT NULL,
  `slide_gambar` varchar(50) NOT NULL,
  `slide_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_slide`
--

INSERT INTO `tbl_slide` (`slide_id`, `slide_caption`, `slide_judul`, `slide_gambar`, `slide_status`) VALUES
(22, 'usaha tanpa doa sia-sia', 'Berusha Dan Berdoa', 'IMG_0357.JPG', 0),
(23, 'baiklahh', 'Berusha Dan Berdoa', 'IMG_0333.JPG', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_testimoni`
--

CREATE TABLE IF NOT EXISTS `tbl_testimoni` (
`testimoni_id` int(11) NOT NULL,
  `testimoni_nama` varchar(30) DEFAULT NULL,
  `testimoni_isi` varchar(250) DEFAULT NULL,
  `testimoni_gambar` varchar(50) DEFAULT NULL,
  `testimoni_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_testimoni`
--

INSERT INTO `tbl_testimoni` (`testimoni_id`, `testimoni_nama`, `testimoni_isi`, `testimoni_gambar`, `testimoni_tanggal`) VALUES
(18, 'badu', 'asdfj', 'IMG_0460.JPG', '2020-06-25 10:56:01'),
(20, 'badu', 'WESTD', 'IMG_04601.JPG', '2020-06-25 11:03:18'),
(23, 'badu', 'hebat sekali', 'baim_1_3x4.jpg', '2020-06-25 11:23:02'),
(24, 'badu', 'ccfsf', 'IMG_04602.JPG', '2020-06-25 11:29:07'),
(25, 'badu', 'indah sekali', 'IMG_04603.JPG', '2020-06-25 11:31:26'),
(29, 'hari', 'ASDFGHGF', '11.jpg', '2020-06-25 12:18:44');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_thn_ajaran`
--

CREATE TABLE IF NOT EXISTS `tbl_thn_ajaran` (
`thn_id` int(3) NOT NULL,
  `thn_semester` int(3) NOT NULL,
  `thn_awal` int(10) NOT NULL,
  `thn_akhir` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_thn_ajaran`
--

INSERT INTO `tbl_thn_ajaran` (`thn_id`, `thn_semester`, `thn_awal`, `thn_akhir`) VALUES
(6, 1, 2020, 2021),
(7, 2, 2021, 2022),
(8, 1, 2022, 2023);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tulisan`
--

CREATE TABLE IF NOT EXISTS `tbl_tulisan` (
`tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text,
  `tulisan_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) DEFAULT '0',
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL DEFAULT '0',
  `tulisan_slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tulisan`
--

INSERT INTO `tbl_tulisan` (`tulisan_id`, `tulisan_judul`, `tulisan_isi`, `tulisan_tanggal`, `tulisan_kategori_id`, `tulisan_kategori_nama`, `tulisan_views`, `tulisan_gambar`, `tulisan_pengguna_id`, `tulisan_author`, `tulisan_img_slider`, `tulisan_slug`) VALUES
(23, 'Pelaksanaan Ujian Nasional ', '<p>Pelaksanaan UN (Ujian Nasional) di sekolah M-Sekolah berlangsung tentram dan damai. Terlihat ketenangan terpancar diwajah siswa berprestasi.&nbsp; Ini adalah sampel artikel Ini adalah sampel artikel&nbsp; Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n', '2017-05-17 09:41:30', 1, 'Pendidikan', 8, '08b79af56e7400c992ea68bb00168e7e.png', 35, 'admin Profile', 0, 'pelaksanaan-ujian-nasional'),
(24, 'Proses belajar mengajar ', '<p>Proses belajar mengajar di sekolah m-sekolah berlangsung menyenangkan. Didukung oleh instruktur yang fun dengan metode mengajar yang tidak biasa. Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel a Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel .</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n', '2017-05-17 09:46:29', 1, 'Pendidikan', 168, 'cover_eva.jpg', 35, 'admin Profile', 0, 'proses-belajar-mengajar'),
(26, 'latar belakang', '<p>bagian saddakdfjkdfkjfd,fnn,adfkf danf,s,fs,FJSD&nbsp; ,FlfjkFLsjkksjflsF</p>\r\n\r\n<p>sfSFLJs,fj</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>FFWFWFwf</p>\r\n', '2019-10-09 23:01:22', 6, 'Prestasi', 5, 'uin-sunan-kalijaga_20180504_163445.jpg', 35, 'admin Profile', 0, 'latar-belakang'),
(27, 'Pembangun pondok pesantren', '<p>lorem ipsum&nbsp;lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2020-07-13 16:12:52', 6, 'Prestasi', 12, 'IMG-20191029-WA0095.jpg', 35, 'admin Profile', 0, 'pembangun-pondok-pesantren');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_absensi`
--
ALTER TABLE `tbl_absensi`
 ADD PRIMARY KEY (`absensi_id`);

--
-- Indexes for table `tbl_administrasi`
--
ALTER TABLE `tbl_administrasi`
 ADD PRIMARY KEY (`adm_id`);

--
-- Indexes for table `tbl_agenda`
--
ALTER TABLE `tbl_agenda`
 ADD PRIMARY KEY (`agenda_id`);

--
-- Indexes for table `tbl_album`
--
ALTER TABLE `tbl_album`
 ADD PRIMARY KEY (`album_id`), ADD KEY `album_pengguna_id` (`album_pengguna_id`);

--
-- Indexes for table `tbl_daftar`
--
ALTER TABLE `tbl_daftar`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_files`
--
ALTER TABLE `tbl_files`
 ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
 ADD PRIMARY KEY (`galeri_id`), ADD KEY `galeri_album_id` (`galeri_album_id`), ADD KEY `galeri_pengguna_id` (`galeri_pengguna_id`);

--
-- Indexes for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
 ADD PRIMARY KEY (`guru_id`);

--
-- Indexes for table `tbl_inbox`
--
ALTER TABLE `tbl_inbox`
 ADD PRIMARY KEY (`inbox_id`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
 ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `tbl_kategori_kelas`
--
ALTER TABLE `tbl_kategori_kelas`
 ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
 ADD PRIMARY KEY (`kelas_id`);

--
-- Indexes for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
 ADD PRIMARY KEY (`komentar_id`), ADD KEY `komentar_tulisan_id` (`komentar_tulisan_id`);

--
-- Indexes for table `tbl_log_aktivitas`
--
ALTER TABLE `tbl_log_aktivitas`
 ADD PRIMARY KEY (`log_id`), ADD KEY `log_pengguna_id` (`log_pengguna_id`);

--
-- Indexes for table `tbl_mapel`
--
ALTER TABLE `tbl_mapel`
 ADD PRIMARY KEY (`mapel_id`);

--
-- Indexes for table `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
 ADD PRIMARY KEY (`nilai_id`);

--
-- Indexes for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
 ADD PRIMARY KEY (`pengguna_id`);

--
-- Indexes for table `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
 ADD PRIMARY KEY (`pengumuman_id`);

--
-- Indexes for table `tbl_pengunjung`
--
ALTER TABLE `tbl_pengunjung`
 ADD PRIMARY KEY (`pengunjung_id`);

--
-- Indexes for table `tbl_rapor`
--
ALTER TABLE `tbl_rapor`
 ADD PRIMARY KEY (`id_rapor`);

--
-- Indexes for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
 ADD PRIMARY KEY (`siswa_id`);

--
-- Indexes for table `tbl_slide`
--
ALTER TABLE `tbl_slide`
 ADD PRIMARY KEY (`slide_id`);

--
-- Indexes for table `tbl_testimoni`
--
ALTER TABLE `tbl_testimoni`
 ADD PRIMARY KEY (`testimoni_id`);

--
-- Indexes for table `tbl_thn_ajaran`
--
ALTER TABLE `tbl_thn_ajaran`
 ADD PRIMARY KEY (`thn_id`);

--
-- Indexes for table `tbl_tulisan`
--
ALTER TABLE `tbl_tulisan`
 ADD PRIMARY KEY (`tulisan_id`), ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`), ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_absensi`
--
ALTER TABLE `tbl_absensi`
MODIFY `absensi_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=118;
--
-- AUTO_INCREMENT for table `tbl_administrasi`
--
ALTER TABLE `tbl_administrasi`
MODIFY `adm_id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_agenda`
--
ALTER TABLE `tbl_agenda`
MODIFY `agenda_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_album`
--
ALTER TABLE `tbl_album`
MODIFY `album_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_daftar`
--
ALTER TABLE `tbl_daftar`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `tbl_files`
--
ALTER TABLE `tbl_files`
MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
MODIFY `galeri_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
MODIFY `guru_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `tbl_inbox`
--
ALTER TABLE `tbl_inbox`
MODIFY `inbox_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tbl_kategori_kelas`
--
ALTER TABLE `tbl_kategori_kelas`
MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
MODIFY `kelas_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
MODIFY `komentar_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_log_aktivitas`
--
ALTER TABLE `tbl_log_aktivitas`
MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_mapel`
--
ALTER TABLE `tbl_mapel`
MODIFY `mapel_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
MODIFY `nilai_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
MODIFY `pengguna_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
MODIFY `pengumuman_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_pengunjung`
--
ALTER TABLE `tbl_pengunjung`
MODIFY `pengunjung_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=989;
--
-- AUTO_INCREMENT for table `tbl_rapor`
--
ALTER TABLE `tbl_rapor`
MODIFY `id_rapor` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=141;
--
-- AUTO_INCREMENT for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
MODIFY `siswa_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=70;
--
-- AUTO_INCREMENT for table `tbl_slide`
--
ALTER TABLE `tbl_slide`
MODIFY `slide_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `tbl_testimoni`
--
ALTER TABLE `tbl_testimoni`
MODIFY `testimoni_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `tbl_thn_ajaran`
--
ALTER TABLE `tbl_thn_ajaran`
MODIFY `thn_id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_tulisan`
--
ALTER TABLE `tbl_tulisan`
MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
