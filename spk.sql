-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2019 at 12:45 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk`
--

-- --------------------------------------------------------

--
-- Table structure for table `gapmhs`
--

CREATE TABLE `gapmhs` (
  `nama` varchar(30) NOT NULL,
  `gapipk` int(5) NOT NULL,
  `gapps` int(5) NOT NULL,
  `gapbing` int(5) NOT NULL,
  `gapdk` int(5) NOT NULL,
  `gappres` int(5) NOT NULL,
  `gaptk` int(5) NOT NULL,
  `gapukm` int(5) NOT NULL,
  `gapdisiplin` int(5) NOT NULL,
  `gapki` int(5) NOT NULL,
  `gapsmt` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gapmhs`
--

INSERT INTO `gapmhs` (`nama`, `gapipk`, `gapps`, `gapbing`,`gapdk`, `gappres`,`gaptk`,`gapukm`,`gapdisiplin`,`gapki`,`gapsmt`) VALUES
('Mhs 1', 0, 0, -1, 1, 0, 0, 1, 0, 0, 1),
('Mhs 2', -1, 0, 0, 0,-1, 0, 0, 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `hasilmhs`
--

CREATE TABLE `hasilmhs` (
  `nama` varchar(30) NOT NULL,
  `bobotipk` float NOT NULL,
  `bobotps` float NOT NULL,
  `bobotbing` float NOT NULL,
  `bobotdk` float NOT NULL,
  `bobotpres` float NOT NULL,
  `bobottk` float NOT NULL,
  `bobotukm` float NOT NULL,
  `bobotdisiplin` float NOT NULL,
  `bobotki` float NOT NULL,
  `bobotsmt` float NOT NULL,
  `na` float NOT NULL,
  `nkk` float NOT NULL,
  `np` float NOT NULL,
  `npp` float NOT NULL,
  `hasil` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hasilmhs`
--

INSERT INTO `hasilmhs` (`nama`, `bobotipk`, `bobotps`, `bobotbing`, `bobotdk`, `bobotpres`, `bobottk`, `bobotukm`, `bobotdisiplin`, `bobotki`, `bobotsmt`, `na`, `nkk`, `np`, `npp`, `hasil`) VALUES
('Mhs 1', 5, 5, 4, 4, 4, 5, 3, 3, 5, 4.5, 5, 4.25, 4.7),
('Mhs 2', 4, 5, 5, 5, 4, 3, 5, 4, 5, 3, 4.5, 5, 4.7);

-- --------------------------------------------------------

--
-- Table structure for table `keteranganmhs`
--

CREATE TABLE `keteranganmhs` (
  `nama` varchar(30) NOT NULL,
  `ket_ipk` varchar(20) NOT NULL,
  `ket_ps` varchar(20) NOT NULL,
  `ket_bing` varchar(20) NOT NULL,
  `ket_dk` varchar(20) NOT NULL,
  `ket_pres` varchar(20) NOT NULL,
  `ket_tk` varchar(20) NOT NULL,
  `ket_ukm` varchar(20) NOT NULL,
  `ket_disiplin` varchar(20) NOT NULL,
  `ket_ki` varchar(20) NOT NULL,
  `ket_smt` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keteranganmhs`
--

INSERT INTO `keteranganmhs` (`nama`, `ket_ipk`, `ket_ps`, `ket_bing`,`ket_dk`,`ket_pres`,`ket_tk`,`ket_ukm`,`ket_disiplin`,`ket_ki`, `ket_smt`) VALUES
('Mhs 1', '>3 dan <= 3,5', '0', '0', '0', '6','0','0','0','0','6'),
('Mhs 2', '>2,5 dan <= 3', '0', '0', '0','0','0','0','0','0','5');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nama` varchar(30) NOT NULL,
  `ipk` int(5) NOT NULL,
  `public speaking` int(5) NOT NULL,
  `bahasa inggris` int(5) NOT NULL,
  `daftar kehadiran` int(5) NOT NULL,
  `prestasi` int(5) NOT NULL,
  `tingkah laku` int(5) NOT NULL,
  `ukm` int(5) NOT NULL,
  `disiplin` int(5) NOT NULL,
  `karya ilmiah` int(5) NOT NULL,
  `semester` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `mahasiswa` (`nama`, `ipk`, `public speaking`, `bahasa inggris`,`daftar kehadiran`,`prestasi`,`tingkah laku`,`ukm`,`disiplin`, `karya ilmiah`,`semester`) VALUES
('Mhs 1', 3, 3, 2, 3, 0, 0, 0, 0, 0, 0),
('Mhs 2', 2, 3, 3, 2, 0, 0, 0, 0, 0, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
