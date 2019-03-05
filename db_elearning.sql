-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2016 at 09:05 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_elearning`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE IF NOT EXISTS `akun` (
  `kd_user` varchar(6) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(8) NOT NULL,
  `type` varchar(10) NOT NULL,
  `no_induk` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`kd_user`, `username`, `password`, `type`, `no_induk`) VALUES
('U001', 'alifianif', 'alifiani', 'mahasiswa', '1301140417'),
('U002', 'ramantidwi', 'ramanti', 'mahasiswa', '1301144267'),
('U003', 'fadlirian', 'fadli', 'mahasiswa', '1103120061'),
('U004', 'nandaremal', 'nanda', 'mahasiswa', '1301140087'),
('U005', 'maulana', 'maul', 'mahasiswa', '1301140187'),
('U006', 'arifyus', 'arif', 'mahasiswa', '1301142567'),
('U007', 'yulifitri', 'yuli', 'mahasiswa', '1103120787'),
('U008', 'hanahani', 'hana', 'mahasiswa', '1301140587'),
('U009', 'agungmuh', 'agung', 'mahasiswa', '1103124667'),
('U010', 'juliarahma', 'julia', 'mahasiswa', '1301107987'),
('U011', 'budiyudi', 'budi', 'dosen', '4450112789'),
('U012', 'ahmadsyam', 'ahmad', 'dosen', '4450113456'),
('U013', 'ghilmanrad', 'ghilman', 'dosen', '4450118490'),
('U014', 'divahusna', 'diva', 'dosen', '4450119655'),
('U015', 'tonianto', 'toni', 'dosen', '4501102344'),
('U016', 'faridakbar', 'farid', 'dosen', '4501167154'),
('U017', 'wiwiyud', 'wiwi', 'dosen', '4501103234'),
('U018', 'dilanhans', 'dilan', 'dosen', '4501108908'),
('U019', 'kiranalar', 'kirana', 'dosen', '4501134005'),
('U020', 'djajaher', 'djaja', 'dosen', '4501100018');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE IF NOT EXISTS `dosen` (
  `nik` varchar(10) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `kd_dosen` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`nik`, `nama`, `email`, `no_hp`, `kd_dosen`) VALUES
('4450112789', 'Budi Yudistia', 'budi.yudi@gmail.com', '08976545001', 'BYS'),
('4450113456', 'Ahmad Syamsudin', 'ahmadsyam@gmail.com', '08213456720', 'ASY'),
('4450118490', 'Ghilman Radhian', 'ghilman12@gmail.com', '08889876234', 'GLM'),
('4450119655', 'Adiva Husna', 'divahus@gmail.com', '08786531244', 'ADV'),
('4501100018', 'Djaja Herlambang', 'djajaherlambang@gmail.com', '085314815008', 'DJJ'),
('4501102344', 'Toni Antoro', 'toni.antoro@gmail.com', '08564788901', 'TNA'),
('4501103234', 'Wiwi Yudiawati', 'wiwi344@gmail.com', '085321698540', 'WWY'),
('4501108908', 'Dilan Hans', 'dilan@gmail.com', '08213456720', 'DLH'),
('4501134005', 'Kirana Larasati', 'kirana@gmail.com', '08217706540', 'KRN'),
('4501167154', 'Farid Akbar', 'farid_akbar@gmail.com', '08986733108', 'FRD');

-- --------------------------------------------------------

--
-- Table structure for table `jawabkuis`
--

CREATE TABLE IF NOT EXISTS `jawabkuis` (
  `kd_jawabkuis` varchar(6) NOT NULL,
  `jawkuis1` char(1) DEFAULT NULL,
  `jawkuis2` char(1) DEFAULT NULL,
  `jawkuis3` char(1) DEFAULT NULL,
  `jawkuis4` char(1) DEFAULT NULL,
  `jawkuis5` char(1) DEFAULT NULL,
  `jawkuis6` char(1) DEFAULT NULL,
  `jawkuis7` char(1) DEFAULT NULL,
  `jawkuis8` char(1) DEFAULT NULL,
  `jawkuis9` char(1) DEFAULT NULL,
  `jawkuis10` char(1) DEFAULT NULL,
  `jawkuis11` char(1) DEFAULT NULL,
  `jawkuis12` char(1) DEFAULT NULL,
  `jawkuis13` char(1) DEFAULT NULL,
  `jawkuis14` char(1) DEFAULT NULL,
  `jawkuis15` char(1) DEFAULT NULL,
  `kd_soal` varchar(6) NOT NULL,
  `kd_optionjawaban` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kuis`
--

CREATE TABLE IF NOT EXISTS `kuis` (
  `kd_kuis` varchar(6) NOT NULL,
  `judul_kuis` varchar(20) NOT NULL,
  `desk_kuis` text NOT NULL,
  `kd_soalkuis` varchar(6) NOT NULL,
  `kd_jawaban` varchar(6) NOT NULL,
  `tgl_pengerjaan` date NOT NULL,
  `jam_pengerjaan` time NOT NULL,
  `jam_selesai` time NOT NULL,
  `kd_matkul` varchar(6) NOT NULL,
  `kd_optionjawaban` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `nim` varchar(10) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `semester` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `kelas`, `email`, `no_hp`, `semester`) VALUES
('1103120061', 'Fadli Rian', 'IF-37-01', 'fadlirian@gmail.com', '088898745112', 7),
('1103120787', 'Yuli Fitri', 'IF-37-07', 'yulifit@gmail.com', '085314456721', 7),
('1103124667', 'Agung Muha', 'IF-37-07', 'agung55@gmail.com', '089844567721', 7),
('1301107987', 'Julia Rahm', 'IF-38-07', 'juliarahma@gmail.com', '088854321009', 5),
('1301140087', 'Nanda Remal', 'IF-38-07', 'remalnanda@gmail.com', '08214457230', 5),
('1301140187', 'Maulana', 'IF-38-07', 'maulana@gmail.com', '08783345612', 5),
('1301140417', 'Alifiani Fauzia', 'IF-38-07', 'alifiani12@gmail.com', '085314817005', 5),
('1301140587', 'Hana Diani', 'IF-38-07', 'hanahani@gmail.com', '085766423112', 5),
('1301142567', 'Arif Yusma', 'IF-38-07', 'arifyus@gmail.com', '08987770989', 5),
('1301144267', 'Ramanti Dwi Indrapurasih', 'IF-38-07', 'ramantidwi@gmail.com', '085716475969', 5);

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE IF NOT EXISTS `matakuliah` (
  `kd_matkul` varchar(6) NOT NULL,
  `nama_matkul` varchar(30) NOT NULL,
  `sks` int(2) NOT NULL,
  `kd_dosen` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`kd_matkul`, `nama_matkul`, `sks`, `kd_dosen`) VALUES
('CC3ASD', 'Algoritma Struktur Data', 3, 'FRD'),
('CC3BDR', 'Basis Data Relasional', 3, 'KRN'),
('CC3DAA', 'Desain Analisis Algoritma', 3, 'TNA'),
('CC3IMP', 'Implementasi Perangkat Lunak', 3, 'BYS'),
('CC3JRK', 'Jaringan Komputer', 3, 'ASY'),
('CC3KCB', 'Kecerdasan Buatan', 3, 'GLM'),
('CC3KWU', 'Kewirausahaan', 2, 'WWY'),
('CC3PBO', 'Pemrograman Basis Objek', 3, 'DLH'),
('CC3SSP', 'Sistem Operasi', 3, 'ADV'),
('CC3TBA', 'Tata Bahasa dan Automata', 3, 'DJJ');

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE IF NOT EXISTS `materi` (
  `kd_materi` int(20) NOT NULL,
  `nama_materi` varchar(50) NOT NULL,
  `nama_matkul` varchar(50) NOT NULL,
  `kelas` varchar(12) NOT NULL,
  `isi_materi` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`kd_materi`, `nama_materi`, `nama_matkul`, `kelas`, `isi_materi`) VALUES
(2, 's', 's', 's', ''),
(3, 's', 'ss', 's', ''),
(4, 's', 'ss', 's', ''),
(5, 's', 'ss', 's', ''),
(6, 'baru', 'jij', 'if', ''),
(7, 'barulagi', 'ss', 'a', ''),
(8, 'baru', 's', 'if', ''),
(9, 'd', 'jij', 'z', ''),
(10, 'baru', 's', 'if', ''),
(11, 's', 's', 'z', ''),
(12, 'wwe', 'jij', 'j', ''),
(13, 'baru', 's', 'if', ''),
(14, 'baru', 'ss', 's', ''),
(15, 's', 'ss', 'z', ''),
(16, 's', 's', 'z', ''),
(17, 'baru', 's', 'z', ''),
(18, 'baru', 'jij', 'z', ''),
(19, 's', 'ss', 's', ''),
(20, 's', 'ss', 's', ''),
(21, 'baru', 's', 'if', ''),
(22, 'wwe', 'jij', 'z', ''),
(23, 'baru', 'jij', 'z', ''),
(24, '', '', '', ''),
(25, 's', 's', 's', ''),
(26, 'baru', '', 's', ''),
(27, 's', 'CC3ASD', 's', 'HasilTest.xlsx'),
(28, 'baru', 'CC3BDR', 's', ''),
(29, 'baru', 'CC3BDR', 'z', ''),
(30, '', 'CC3BDR', '', ''),
(31, 'baru', 'CC3ASD', 'z', ''),
(32, 'oa', 'CC3SSP', 's', ''),
(33, 'baru', 'CC3ASD', 'IF-38-07', ''),
(34, '', '0', '', ''),
(35, '', '0', '', ''),
(36, 's', '0', '', ''),
(37, 'd', '0', 'if', ''),
(41, 'wwe', 'Implementasi Perangkat Lunak', 'IF-38-07', 'HasilTest.xlsx');

-- --------------------------------------------------------

--
-- Table structure for table `nilaikuis`
--

CREATE TABLE IF NOT EXISTS `nilaikuis` (
  `kd_nilaikuis` varchar(6) NOT NULL,
  `kd_matkul` varchar(6) NOT NULL,
  `nilai` int(11) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `kd_kuis` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nilaitugas`
--

CREATE TABLE IF NOT EXISTS `nilaitugas` (
  `kd_nilai` varchar(6) NOT NULL,
  `kd_matkul` varchar(6) NOT NULL,
  `nilai` int(11) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `kd_tugas` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `optionjawaban`
--

CREATE TABLE IF NOT EXISTS `optionjawaban` (
  `kd_optionjawaban` varchar(6) NOT NULL,
  `option_A` int(11) NOT NULL,
  `option_B` int(11) NOT NULL,
  `option_C` int(11) NOT NULL,
  `option_D` int(11) NOT NULL,
  `option_E` int(11) NOT NULL,
  `kd_soalkuis` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `silabus`
--

CREATE TABLE IF NOT EXISTS `silabus` (
  `kd_silabus` varchar(6) NOT NULL,
  `judul_pembahasan` text NOT NULL,
  `desk_pembahasan` text NOT NULL,
  `bab_pembahasan` text NOT NULL,
  `kd_matkul` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `silabus`
--

INSERT INTO `silabus` (`kd_silabus`, `judul_pembahasan`, `desk_pembahasan`, `bab_pembahasan`, `kd_matkul`) VALUES
('S001', 'Single Linked List', 'Mengenal dan menguasai Single Linked List', 'Bab 1', 'CC3ASD'),
('S002', 'Pengenalan Basis Data', 'Mengenal apa itu basis data dan bagaimana cara menggunakannya', 'Bab 1', 'CC3BDR'),
('S003', 'Dasar Analisis Algoritma', 'Mengenal bagaimana mendesain dan menganalisis algoritma', 'Bab 1', 'CC3DAA'),
('S004', 'Implementasi Perangkat Lunak', 'Mempelajari bagaimana cara mengimplementasikan sebuah perangkat lunak', 'Bab 1', 'CC3IMP'),
('S005', 'Pengenalan Jaringan Komputer', 'Mengenal apa itu jaringan komputer dan bagaimana pengimplementasiannya', 'Bab 1', 'CC3JRK'),
('S006', 'Konsep Kecerdasan Buatan', 'Mempelajari konsep kecerdasan buatan', 'Bab 1', 'CC3KCB'),
('S007', 'Pencarian Ide Kewirausahaan', 'Mengolah ide-ide mahasiswa tentang kewirausahaan untuk persiapan tugas besar', 'Bab 1', 'CC3KWU'),
('S008', 'Pengenalan Pemrograman Berbasis Objek', 'Mengenalkan konsep pemrograman berbasis objk', 'Bab 1', 'CC3PBO'),
('S009', 'Macam-macam Sistem Operasi', 'Mempelajari macam-macam sistem operasi', 'Bab 1', 'CC3SSP'),
('S010', 'Pengenalan Grammar', 'Mempelajari grammar dalam tata bahasa automata', 'Bab 1', 'CC3TBA');

-- --------------------------------------------------------

--
-- Table structure for table `soalkuis`
--

CREATE TABLE IF NOT EXISTS `soalkuis` (
  `kd_soalkuis` varchar(6) NOT NULL,
  `soal_1` char(1) DEFAULT NULL,
  `soal_2` char(1) DEFAULT NULL,
  `soal_3` char(1) DEFAULT NULL,
  `soal_4` char(1) DEFAULT NULL,
  `soal_5` char(1) DEFAULT NULL,
  `soal_6` char(1) DEFAULT NULL,
  `soal_7` char(1) DEFAULT NULL,
  `soal_8` char(1) DEFAULT NULL,
  `soal_9` char(1) DEFAULT NULL,
  `soal_10` char(1) DEFAULT NULL,
  `soal_11` char(1) DEFAULT NULL,
  `soal_12` char(1) DEFAULT NULL,
  `soal_13` char(1) DEFAULT NULL,
  `soal_14` char(1) DEFAULT NULL,
  `soal_15` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sss`
--

CREATE TABLE IF NOT EXISTS `sss` (
  `kd` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sss`
--

INSERT INTO `sss` (`kd`) VALUES
('0'),
('0'),
('0'),
('sss'),
('wwe'),
('ssdsd'),
('asik'),
('ddd'),
('sddfdsfs'),
('ssdd');

-- --------------------------------------------------------

--
-- Table structure for table `tugas`
--

CREATE TABLE IF NOT EXISTS `tugas` (
  `kd_tugas` int(6) NOT NULL,
  `judul_tugas` varchar(30) NOT NULL,
  `desk_tugas` text NOT NULL,
  `tugas` text NOT NULL,
  `nama_matkul` varchar(50) NOT NULL,
  `kelas` varchar(25) NOT NULL,
  `tgl_akhir` date NOT NULL,
  `tgl_mulai` date NOT NULL,
  `jam` time NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tugas`
--

INSERT INTO `tugas` (`kd_tugas`, `judul_tugas`, `desk_tugas`, `tugas`, `nama_matkul`, `kelas`, `tgl_akhir`, `tgl_mulai`, `jam`) VALUES
(1, 's', '', '', '0', '', '0000-00-00', '0000-00-00', '00:00:00'),
(2, 's', '', '', 'Algoritma Struktur Data', '', '2016-12-13', '0000-00-00', '16:02:00'),
(3, 'baru', '', '', 'Algoritma Struktur Data', '', '2016-12-05', '2016-12-04', '15:01:00'),
(4, 'baru', '', '', 'Algoritma Struktur Data', 's', '0000-00-00', '2016-12-04', '00:00:00'),
(5, 's', '', '', '0', '', '2016-12-13', '2016-12-04', '14:01:00'),
(6, 'baru', '', '', '0', '', '2016-12-07', '2016-12-04', '00:00:00'),
(7, 's', 'ssss', '', 'Algoritma Struktur Data', 'ssssss', '0000-00-00', '2016-12-04', '00:00:00'),
(8, 's', 'd', '', 'Algoritma Struktur Data', '', '2016-12-22', '2016-12-04', '15:01:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`kd_user`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `kuis`
--
ALTER TABLE `kuis`
  ADD PRIMARY KEY (`kd_kuis`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`kd_matkul`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`kd_materi`);

--
-- Indexes for table `tugas`
--
ALTER TABLE `tugas`
  ADD PRIMARY KEY (`kd_tugas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
  MODIFY `kd_materi` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `tugas`
--
ALTER TABLE `tugas`
  MODIFY `kd_tugas` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
