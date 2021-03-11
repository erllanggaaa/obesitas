-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 11 Mar 2021 pada 05.37
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `web_obesitas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bmi`
--

CREATE TABLE IF NOT EXISTS `bmi` (
`id_bmi` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `tinggi` varchar(100) NOT NULL,
  `bb` varchar(100) NOT NULL,
  `jumlah` varchar(100) NOT NULL,
  `hasil` varchar(100) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `bmi`
--

INSERT INTO `bmi` (`id_bmi`, `id_member`, `tinggi`, `bb`, `jumlah`, `hasil`, `tgl`) VALUES
(1, 1, '168', '57', '20.195578231293', 'Normal', '2020-11-20'),
(2, 2, '159', '58', '22.9421304537', 'Normal', '2020-11-20'),
(3, 1, '168', '55', '19.486961451247', 'Normal', '2020-11-27'),
(4, 1, '168', '45', '15.94387755102', 'Kurus', '2020-12-12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE IF NOT EXISTS `member` (
`id_member` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ttl` date NOT NULL,
  `bb` varchar(3) NOT NULL,
  `tinggi` varchar(3) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(10) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `aktif` varchar(5) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`id_member`, `nama`, `email`, `ttl`, `bb`, `tinggi`, `username`, `password`, `level`, `kode`, `aktif`) VALUES
(1, 'Aslam Haikal', 'aslam.haikal@gmail.com', '1998-11-01', '55', '170', 'aslamhaikal', '$2y$10$XUFT911U9SbhAG/D6MMWWOM8.EPRWp0RWzMM9LkYuiS5b4d2vOCj.', 'member', '0d615bd5f727122be8fe239bd213a81d', 'Y'),
(2, 'Roby Salam', 'suaramaster3@gmail.com', '1997-11-01', '58', '159', 'robysalam', '$2y$10$41DRJFsX.nhtNySqMjrgk.6.iNiZ.VwUaGyxS90LPk1bunRlbsLQ.', 'member', '0a2688230ddccaeac802dadf73afefe5', 'Y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bmi`
--
ALTER TABLE `bmi`
 ADD PRIMARY KEY (`id_bmi`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
 ADD PRIMARY KEY (`id_member`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bmi`
--
ALTER TABLE `bmi`
MODIFY `id_bmi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
