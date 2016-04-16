-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 14, 2015 at 05:16 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `karyawan`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_karyawan`
--

CREATE TABLE IF NOT EXISTS `data_karyawan` (
  `nik` varchar(9) NOT NULL DEFAULT '',
  `nama` varchar(30) NOT NULL,
  `namafoto` varchar(50) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `jab` varchar(10) NOT NULL,
  `dept` varchar(20) NOT NULL,
  `tmp_lhr` varchar(15) NOT NULL,
  `tgl_lhr` date DEFAULT NULL,
  `gol_darah` varchar(2) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `status` varchar(2) NOT NULL,
  `telp` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`nik`),
  UNIQUE KEY `nik` (`nik`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_karyawan`
--

INSERT INTO `data_karyawan` (`nik`, `nama`, `namafoto`, `jk`, `jab`, `dept`, `tmp_lhr`, `tgl_lhr`, `gol_darah`, `agama`, `status`, `telp`, `email`) VALUES
('NIK000001', 'Galang', 'product12.jpg', 'L', 'Supervisor', 'Engineering', 'Tegal', '1986-06-30', 'O', 'Islam', 'K1', '085714057686', 'hhhhhhhhhhhhh@yahoo.com'),
('NIK000002', 'Evi Sulisya', 'product11.jpg', 'P', 'Admin', 'Engineering', ' Jogjakarta', '1998-11-18', 'AB', 'Islam', 'K1', '089877771100', ' rinaananta444@yahoo.com'),
('NIK000003', 'Agus Riyadh', '', 'L', 'Supervisor', 'Produksi', 'Tegal', '1972-11-12', 'AB', 'Islam', 'K3', '089877771111', 'agusriydh@yahoo.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
