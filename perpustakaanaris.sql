-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 18, 2021 at 11:15 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaanaris`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

DROP TABLE IF EXISTS `kategori`;
CREATE TABLE IF NOT EXISTS `kategori` (
  `kode_kategori` int(10) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(20) NOT NULL,
  PRIMARY KEY (`kode_kategori`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kode_kategori`, `nama_kategori`) VALUES
(1, 'Manga');

-- --------------------------------------------------------

--
-- Table structure for table `master_buku`
--

DROP TABLE IF EXISTS `master_buku`;
CREATE TABLE IF NOT EXISTS `master_buku` (
  `kode_buku` int(10) NOT NULL AUTO_INCREMENT,
  `judul_buku` varchar(30) NOT NULL,
  `kategori` int(10) NOT NULL,
  `pengarang` int(10) NOT NULL,
  `penerbit` int(10) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(11) NOT NULL,
  PRIMARY KEY (`kode_buku`),
  KEY `kategori` (`kategori`,`pengarang`,`penerbit`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_buku`
--

INSERT INTO `master_buku` (`kode_buku`, `judul_buku`, `kategori`, `pengarang`, `penerbit`, `tahun`, `deskripsi`, `harga`) VALUES
(1, 'Inuyasha', 1, 1, 1, '2016', 'Lorem', 10000),
(5, 'Bleach', 1, 2, 2, '2016', 'Lorem', 10000),
(6, 'Eyeshield 21', 1, 2, 1, '2016', 'Lorem ipsum', 10000),
(7, 'Eyeshield 21', 1, 1, 2, '2016', 'Lorem ipsum', 12000),
(9, 'Eden Zero', 1, 2, 2, '2016', 'Lorem ipsum', 30000);

-- --------------------------------------------------------

--
-- Table structure for table `penerbit`
--

DROP TABLE IF EXISTS `penerbit`;
CREATE TABLE IF NOT EXISTS `penerbit` (
  `kode_penerbit` int(10) NOT NULL AUTO_INCREMENT,
  `nama_penerbit` varchar(30) NOT NULL,
  `kota_penerbit` varchar(10) NOT NULL,
  PRIMARY KEY (`kode_penerbit`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penerbit`
--

INSERT INTO `penerbit` (`kode_penerbit`, `nama_penerbit`, `kota_penerbit`) VALUES
(1, 'Viz Media', 'Japan'),
(2, 'Kodansha', 'Japan');

-- --------------------------------------------------------

--
-- Table structure for table `pengarang`
--

DROP TABLE IF EXISTS `pengarang`;
CREATE TABLE IF NOT EXISTS `pengarang` (
  `kode_pengarang` int(10) NOT NULL AUTO_INCREMENT,
  `nama_pengarang` varchar(30) NOT NULL,
  PRIMARY KEY (`kode_pengarang`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengarang`
--

INSERT INTO `pengarang` (`kode_pengarang`, `nama_pengarang`) VALUES
(1, 'Masashi Kishimoto'),
(2, 'Hiro Mashima');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
