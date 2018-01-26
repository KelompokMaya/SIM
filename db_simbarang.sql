-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2018 at 10:20 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_simbarang`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_aset`
--

CREATE TABLE `tb_aset` (
  `id_aset` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `manufaktur` varchar(100) NOT NULL,
  `noseri` varchar(100) NOT NULL,
  `tipe` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `kampus_id` int(11) NOT NULL,
  `fakultas_id` int(11) NOT NULL,
  `jurusan_id` int(11) NOT NULL,
  `lokasi_id` int(11) NOT NULL,
  `noinventory` varchar(30) NOT NULL,
  `tgldipasang` date NOT NULL,
  `Lokasi` varchar(200) NOT NULL,
  `trakhir_diperbaiki` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_aset`
--

INSERT INTO `tb_aset` (`id_aset`, `nama`, `status`, `manufaktur`, `noseri`, `tipe`, `model`, `kampus_id`, `fakultas_id`, `jurusan_id`, `lokasi_id`, `noinventory`, `tgldipasang`, `Lokasi`, `trakhir_diperbaiki`) VALUES
(45, '06VHZBSB', 'Aktif', 'HP', '06VHZBSB', 'HARD DISK', '781578-001', 2, 16, 0, 0, '0', '0000-00-00', 'GDLN', '2015-09-17'),
(46, '06VK6LRB', 'Aktif', 'HP', '06VK6LRB', 'HARD DISK', '781578-001', 2, 16, 0, 0, '0', '0000-00-00', 'GDLN', '2015-09-17'),
(47, '06VK6SXB', 'Aktif', 'HP', '06VK6SXB', 'HARD DISK', '781578-001', 2, 16, 0, 0, '0', '0000-00-00', 'GDLN', '2015-09-17'),
(48, '06VK6VEB', 'Aktif', 'HP', '06VK6VEB', 'HARD DISK', '781578-001', 2, 16, 0, 0, '0', '0000-00-00', 'GDLN', '2015-09-17'),
(49, '06VK7VPB', 'Aktif', 'HP', '06VK7VPB', 'HARD DISK', '781578-001', 2, 16, 0, 0, '0', '0000-00-00', 'GDLN', '2015-09-17'),
(50, '06VK8RSB', 'Aktif', 'HP', '06VK8RSB', 'HARD DISK', '781578-001', 2, 16, 0, 0, '0', '0000-00-00', 'GDLN', '2015-09-17'),
(51, '06VK9LBB', 'Aktif', 'HP', '06VK9LBB', 'HARD DISK', '781578-001', 2, 16, 0, 0, '0', '0000-00-00', 'GDLN', '2015-09-17'),
(52, '06VK9ZRB', 'Aktif', 'HP', '06VK9ZRB', 'HARD DISK', '781578-001', 2, 16, 0, 0, '0', '0000-00-00', 'GDLN', '2015-09-17'),
(53, '06VKBUAB', 'Aktif', 'HP', '06VKBUAB', 'HARD DISK', '781578-001', 2, 16, 0, 0, '0', '0000-00-00', 'GDLN', '2015-09-17'),
(54, '06VKBUJB', 'Aktif', 'HP', '06VKBUJB', 'HARD DISK', '781578-001', 2, 16, 0, 0, '0', '0000-00-00', 'GDLN', '2015-09-17'),
(55, '361618F4TG', 'Aktif', 'HP', '361618F4TG', 'RAM', '805351-B21', 2, 16, 0, 0, '0', '0000-00-00', 'GDLN', '2015-09-17'),
(56, '361618F4TS', 'Aktif', 'HP', '361618F4TS', 'RAM', '805351-B21', 2, 16, 0, 0, '0', '0000-00-00', 'GDLN', '2015-09-17'),
(57, '361618Q04W', 'Aktif', 'HP', '361618Q04W', 'RAM', '805351-B21', 2, 16, 0, 0, '0', '0000-00-00', 'GDLN', '2015-09-17'),
(58, '361618Q0HU', 'Aktif', 'HP', '361618Q0HU', 'RAM', '805351-B21', 2, 16, 0, 0, '0', '0000-00-00', 'GDLN', '2015-09-17'),
(59, '361618Q0JN', 'Aktif', 'HP', '361618Q0JN', 'RAM', '805351-B21', 2, 16, 0, 0, '0', '0000-00-00', 'GDLN', '2015-09-17'),
(60, '361618Q0MA', 'Aktif', 'HP', '361618Q0MA', 'RAM', '805351-B21', 2, 16, 0, 0, '0', '0000-00-00', 'GDLN', '2015-09-17'),
(61, 'HP82QPCI-E FC HBA', 'Aktif', 'HP', 'MY551320A6', 'FC HBA Card', 'HP 82Q PCI-E', 2, 16, 0, 0, '0', '0000-00-00', 'GDLN', '2015-09-17'),
(62, 'Lan Card Server INTEL I350-T2', 'Aktif', 'HP', '', 'Lan Card', 'Lan Card Server', 1, 17, 0, 0, '0', '0000-00-00', 'puskom', '2020-09-17'),
(63, 'memory server 8GB PC3 10600', 'Aktif', 'HP', '', 'RAM', '', 2, 16, 0, 0, '0', '0000-00-00', 'GDLN', '2021-08-17'),
(64, 'PHG720H0AW', 'Aktif', 'HP', 'PHG720H0AW', 'HARD DISK', 'J9F48A', 2, 16, 0, 0, '0', '0000-00-00', 'GDLN', '2025-08-17'),
(65, 'PHG721H04Y', 'Aktif', 'HP', 'PHG721H04Y', 'HARD DISK', 'J9F48A', 2, 16, 0, 0, '0', '0000-00-00', 'GDLN', '2003-08-17'),
(66, 'PHG721H052', 'Aktif', 'HP', 'PHG721H052', 'HARD DISK', 'J9F48A', 2, 16, 0, 0, '0', '0000-00-00', 'GDLN', '2003-08-17'),
(67, 'PHG721H05E', 'Aktif', 'HP', 'PHG721H05E', 'HARD DISK', 'J9F48A', 2, 16, 0, 0, '0', '0000-00-00', 'GDLN', '2003-08-17'),
(68, 'PHG721H05F', 'Aktif', 'HP', 'PHG721H05F', 'HARD DISK', 'J9F48A', 2, 16, 0, 0, '0', '0000-00-00', 'GDLN', '2003-08-17'),
(69, 'PHG721H05J', 'Aktif', 'HP', 'PHG721H05J', 'HARD DISK', 'J9F48A', 2, 16, 0, 0, '0', '0000-00-00', 'GDLN', '2003-08-17'),
(70, 'PHG721H05N', 'Aktif', 'HP', 'PHG721H05N', 'HARD DISK', 'J9F48A', 2, 16, 0, 0, '0', '0000-00-00', 'GDLN', '2025-08-17'),
(71, 'PHZ643004W', 'Aktif', 'HP', 'PHZ643004W', 'RAM', '805351-B21', 2, 16, 0, 0, '0', '0000-00-00', 'GDLN', '2015-09-17'),
(72, 'PHZ643004Y', 'Aktif', 'HP', 'PHZ643004Y', 'RAM', '805351-B21', 2, 16, 0, 0, '0', '0000-00-00', 'GDLN', '2015-09-17'),
(73, 'PHZ643005D', 'Aktif', 'HP', 'PHZ643005D', 'RAM', '805351-B21', 2, 16, 0, 0, '0', '0000-00-00', 'GDLN', '2015-09-17'),
(74, 'PRZ5410049', 'Aktif', 'HP', 'PRZ5410049', 'RAM', '627812-B21', 2, 16, 0, 0, '0', '0000-00-00', 'GDLN', '2002-08-17'),
(75, 'PRZ541004C', 'Aktif', 'HP', 'PRZ541004C', 'RAM', '627812-B21', 2, 16, 0, 0, '0', '0000-00-00', 'GDLN', '2002-08-17'),
(76, 'PRZ541004M', 'Aktif', 'HP', 'PRZ541004M', 'RAM', '627812-B21', 2, 16, 0, 0, '0', '0000-00-00', 'GDLN', '2002-08-17'),
(77, 'PRZ541004T', 'Aktif', 'HP', 'PRZ541004T', 'RAM', '627812-B21', 2, 16, 0, 0, '0', '0000-00-00', 'GDLN', '2002-08-17'),
(78, 'PRZ541005A', 'Aktif', 'HP', 'PRZ541005A', 'RAM', '627812-B21', 2, 16, 0, 0, '0', '0000-00-00', 'GDLN', '2002-08-17'),
(79, 'PRZ541005C', 'Aktif', 'HP', 'PRZ541005C', 'RAM', '627812-B21', 2, 16, 0, 0, '0', '0000-00-00', 'GDLN', '2002-08-17'),
(80, 'PRZ541005D', 'Aktif', 'HP', 'PRZ541005D', 'RAM', '627812-B21', 2, 16, 0, 0, '0', '0000-00-00', 'GDLN', '2002-08-17'),
(81, 'PRZ541005F', 'Aktif', 'HP', 'PRZ541005F', 'RAM', '627812-B21', 2, 16, 0, 0, '0', '0000-00-00', 'GDLN', '2002-08-17'),
(82, 'PRZ541005Z', 'aktif', 'HP', 'PRZ541005Z', 'RAM', '627812-B21', 2, 16, 0, 0, '0', '0000-00-00', 'GDLN', '2002-08-17'),
(83, 'TH1721H0I7', 'Aktif', 'HP', 'TH1721H0I7', 'HARD DISK', 'J9F48A', 2, 16, 0, 0, '0', '0000-00-00', 'GDLN', '2025-08-17'),
(84, 'TH1721H0IF', 'Aktif', 'HP', 'TH1721H0IF', 'HARD DISK', 'J9F48A', 2, 16, 0, 0, '0', '0000-00-00', 'GDLN', '2003-08-17'),
(85, 'TH1721H0IG', 'Aktif', 'HP', 'TH1721H0IG', 'HARD DISK', 'J9F48A', 2, 16, 0, 0, '0', '0000-00-00', 'GDLN', '2003-08-17'),
(86, 'Windows Server 2016', 'Aktif', 'Windows', '', 'Lisensi', 'Windows 2016 Server', 2, 16, 0, 0, '0', '0000-00-00', 'GDLN', '2022-08-17'),
(88, '(242)', 'backup', 'Ficomm', '', 'kabel FO', 'Pigtail SC', 1, 17, 0, 0, '0', '0000-00-00', 'puskom', '2017-09-20'),
(89, '(243)', 'backup', 'Ficomm', '', 'kabel FO', 'Pigtail SC', 1, 17, 0, 0, '0', '0000-00-00', 'puskom', '2017-09-20'),
(90, '(244)', 'backup', 'Ficomm', '', 'kabel FO', 'Pigtail SC', 1, 17, 0, 0, '0', '0000-00-00', 'puskom', '2017-09-20'),
(91, '(245)', 'backup', 'Ficomm', '', 'kabel FO', 'Pigtail SC', 1, 17, 0, 0, '0', '0000-00-00', 'puskom', '2017-09-20'),
(92, '(246)', 'backup', 'Ficomm', '', 'kabel FO', 'Pigtail SC', 1, 17, 0, 0, '0', '0000-00-00', 'puskom', '2017-09-20'),
(93, '(247)', 'backup', 'Ficomm', '', 'kabel FO', 'Pigtail SC', 1, 17, 0, 0, '0', '0000-00-00', 'puskom', '2017-09-20'),
(94, '(248)', 'backup', 'Ficomm', '', 'kabel FO', 'Pigtail SC', 1, 17, 0, 0, '0', '0000-00-00', 'puskom', '2017-09-20'),
(95, '(249)', 'backup', 'Ficomm', '', 'kabel FO', 'Pigtail SC', 1, 17, 0, 0, '0', '0000-00-00', 'puskom', '2017-09-20'),
(96, '(250)', 'backup', 'Ficomm', '', 'kabel FO', 'Pigtail SC', 1, 17, 0, 0, '0', '0000-00-00', 'puskom', '2017-09-20'),
(97, '(251)', 'backup', 'Ficomm', '', 'kabel FO', 'Pigtail SC', 1, 17, 0, 0, '0', '0000-00-00', 'puskom', '2017-09-20'),
(98, '(252)', 'backup', 'Ficomm', '', 'kabel FO', 'Pigtail SC', 1, 17, 0, 0, '0', '0000-00-00', 'puskom', '2017-09-20'),
(99, '(253)', 'backup', 'Ficomm', '', 'kabel FO', 'Pigtail SC', 1, 17, 0, 0, '0', '0000-00-00', 'puskom', '2017-09-20'),
(100, '(254)', 'backup', 'Ficomm', '', 'kabel FO', 'Pigtail SC', 1, 17, 0, 0, '0', '0000-00-00', 'puskom', '2017-09-20'),
(101, '(255)', 'backup', 'Ficomm', '', 'kabel FO', 'Pigtail SC', 1, 17, 0, 0, '0', '0000-00-00', 'puskom', '2017-09-20'),
(102, '(256)', 'backup', 'Ficomm', '', 'kabel FO', 'Pigtail SC', 1, 17, 0, 0, '0', '0000-00-00', 'puskom', '2017-09-20'),
(103, '(257)', 'backup', 'Ficomm', '', 'kabel FO', 'Pigtail SC', 1, 17, 0, 0, '0', '0000-00-00', 'puskom', '2017-09-20'),
(104, '(258)', 'backup', 'Ficomm', '', 'kabel FO', 'Pigtail SC', 1, 17, 0, 0, '0', '0000-00-00', 'puskom', '2017-09-20'),
(105, '(259)', 'backup', 'Ficomm', '', 'kabel FO', 'Pigtail SC', 1, 17, 0, 0, '0', '0000-00-00', 'puskom', '2017-09-20'),
(106, '(260)', 'backup', 'Ficomm', '', 'kabel FO', 'Pigtail SC', 1, 17, 0, 0, '0', '0000-00-00', 'puskom', '2017-09-20'),
(107, '(261)', 'backup', 'Ficomm', '', 'kabel FO', 'Pigtail SC', 1, 17, 0, 0, '0', '0000-00-00', 'puskom', '2017-09-20'),
(108, '(262)', 'backup', 'Ficomm', '', 'kabel FO', 'Pigtail SC', 1, 17, 0, 0, '0', '0000-00-00', 'puskom', '2017-09-20'),
(109, '(263)', 'backup', 'Ficomm', '', 'kabel FO', 'Pigtail SC', 1, 17, 0, 0, '0', '0000-00-00', 'puskom', '2017-09-20'),
(110, '(264)', 'backup', 'spotlink', '', 'kabel FO', 'patch cord LC-LC', 1, 17, 0, 0, '0', '0000-00-00', 'puskom', '2017-09-20'),
(111, '(265)', 'backup', 'spotlink', '', 'kabel FO', 'patch cord LC-LC', 1, 17, 0, 0, '0', '0000-00-00', 'puskom', '2017-09-20'),
(112, '(266)', 'backup', 'spotlink', '', 'kabel FO', 'patch cord LC-LC', 1, 17, 0, 0, '0', '0000-00-00', 'puskom', '2017-09-20'),
(113, '(267)', 'backup', 'spotlink', '', 'kabel FO', 'patch cord LC-LC', 1, 17, 0, 0, '0', '0000-00-00', 'puskom', '2017-09-20'),
(114, '(268)', 'backup', 'spotlink', '', 'kabel FO', 'patch cord LC-LC', 1, 17, 0, 0, '0', '0000-00-00', 'puskom', '2017-09-20'),
(115, '(269)', 'backup', 'spotlink', '', 'kabel FO', 'patch cord LC-LC', 1, 17, 0, 0, '0', '0000-00-00', 'puskom', '2017-09-20'),
(116, '(270)', 'backup', 'spotlink', '', 'kabel FO', 'patch cord LC-LC', 1, 17, 0, 0, '0', '0000-00-00', 'puskom', '2017-09-20'),
(117, '(271)', 'backup', 'spotlink', '', 'kabel FO', 'patch cord LC-LC', 1, 17, 0, 0, '0', '0000-00-00', 'puskom', '2017-09-20'),
(118, '(272)', 'backup', 'spotlink', '', 'kabel FO', 'patch cord LC-LC', 1, 17, 0, 0, '0', '0000-00-00', 'puskom', '2017-09-20'),
(119, '(273)', 'backup', 'spotlink', '', 'kabel FO', 'patch cord LC-LC', 1, 17, 0, 0, '0', '0000-00-00', 'puskom', '2017-09-20'),
(120, '(274)', 'backup', 'spotlink', '', 'kabel FO', 'patch cord LC-LC', 1, 17, 0, 0, '0', '0000-00-00', 'puskom', '2017-09-20'),
(121, '(275)', 'backup', 'spotlink', '', 'kabel FO', 'patch cord LC-LC', 1, 17, 0, 0, '0', '0000-00-00', 'puskom', '2017-09-20'),
(122, '(276)', 'backup', 'spotlink', '', 'kabel FO', 'patch cord LC-LC', 1, 17, 0, 0, '0', '0000-00-00', 'puskom', '2017-09-20'),
(123, '(277)', 'backup', 'spotlink', '', 'kabel FO', 'patch cord LC-LC', 1, 17, 0, 0, '0', '0000-00-00', 'puskom', '2017-09-20'),
(124, '(278)', 'backup', 'spotlink', '', 'kabel FO', 'patch cord LC-LC', 1, 17, 0, 0, '0', '0000-00-00', 'puskom', '2017-09-20'),
(125, 'access point G HH lt 2', 'Aktif', 'Mikrotik', '', 'Acces Point', 'Mikrotik cAP series', 1, 29, 59, 44, '0', '0000-00-00', 'HUKUM &gt; Hukum Bukit &gt; Gd HH Lt 2', '2017-09-26'),
(126, 'Access Point Gd BIPAS Room A', 'Aktif', 'Mikrotik', '', 'Acces Point', 'Mikrotik cAP series', 1, 40, 72, 59, '0', '0000-00-00', 'Sastra-Bukit &gt; Bipas &gt; lt 1 &gt; Room A', '2017-09-26'),
(127, 'Access Point Gd CIP Lobby', 'Aktif', 'Mikrotik', '', 'Acces Point', 'Mikrotik cAP series', 1, 40, 73, 61, '0', '0000-00-00', 'Sastra-Bukit &gt; Gd CIP &gt; Lobby Lt1', '2017-09-26'),
(128, 'Access Point Gd GoBali Lt 1', 'Aktif', 'Mikrotik', '', 'Acces Point', 'Mikrotik cAP series', 1, 40, 74, 63, '0', '0000-00-00', 'Sastra-Bukit &gt; Gd GObali Lt 1', '2017-09-26'),
(129, 'Access Point Gd GOBALI Lt 2', 'Aktif', 'Mikrotik', '', 'Acces Point', 'Mikrotik cAP series', 1, 40, 74, 64, '0', '0000-00-00', 'Sastra-Bukit &gt; Gd GoBali Lt2', '2017-09-26'),
(130, 'Access Point Gd HD Lt 1', 'Aktif', 'Mikrotik', '', 'Acces Point', 'Mikrotik cAP series', 1, 40, 75, 65, '0', '0000-00-00', 'Sastra-Bukit &gt; Gd HD &gt; Lt 1', '2017-09-26'),
(131, 'access point Gd HF lt 1 hukum', 'Aktif', 'Mikrotik', '', 'Acces Point', 'Mikrotik cAP series', 1, 29, 59, 42, '0', '0000-00-00', 'HUKUM &gt; Hukum Bukit &gt; Gd HF Lt 1', '2017-09-26'),
(132, 'Access Point Gd HG Lt 1', 'Aktif', 'Mikrotik', '', 'Acces Point', 'Mikrotik cAP series', 1, 29, 59, 43, '0', '0000-00-00', 'HUKUM &gt; Hukum Bukit &gt; Gd HG Lt 1', '2017-09-26'),
(133, 'Access Point Lobby IBSN', 'Aktif', 'Mikrotik', '', 'Acces Point', 'Mikrotik cAP series', 1, 40, 76, 66, '0', '0000-00-00', 'Sastra-Bukit &gt; Gd IBSN &gt; Lobby', '2017-09-26'),
(134, 'access point office cip', 'Aktif', 'Mikrotik', '', 'Acces Point', 'Mikrotik cAP series', 1, 40, 73, 62, '0', '0000-00-00', 'Sastra-Bukit &gt; Gd CIP &gt; Office', '2017-09-26'),
(135, 'Access Point Office IBSN', 'Aktif', 'Mikrotik', '', 'Acces Point', 'Mikrotik cAP series', 1, 40, 76, 67, '0', '0000-00-00', 'Sastra-Bukit &gt; Gd IBSN &gt; Office', '2017-09-26'),
(136, 'allied telesis', 'backup', 'Allied Telesis', '', 'Switch', 'AT-GS950/8', 2, 16, 0, 0, '0', '0000-00-00', 'GDLN', '2017-05-22'),
(137, 'allied telesis', 'backup', 'Allied Telesis', '', 'Switch', 'AT-GS924M-50', 2, 16, 0, 0, '0', '0000-00-00', 'GDLN', '2017-05-22'),
(138, 'allied telesis', 'backup', 'Allied Telesis', '', 'Switch', 'AT-GS924M-50', 1, 22, 54, 0, '0', '0000-00-00', 'ELEKTRO BUKIT', '2017-05-22'),
(139, 'allied telesis', 'Aktif', 'Allied Telesis', '', 'Switch', 'AT-GS950/8', 1, 35, 67, 50, '0', '0000-00-00', 'Pertanian &gt; Gd BA Dekanat &gt; Gd BA LT.1', '2017-04-24'),
(140, 'allied telesis', 'Aktif', 'Allied Telesis', '', 'Switch', 'AT-GS950/8', 2, 28, 0, 0, '0', '0000-00-00', 'FTP', '2017-04-24'),
(141, 'allied telesis', 'Aktif', 'Allied Telesis', '', 'Acces Point', 'AT-GS950/8', 1, 19, 0, 0, '0', '0000-00-00', 'LPPM', '2017-04-24'),
(142, 'allied telesis', 'Aktif', 'Allied Telesis', '', 'Switch', 'AT-GS950/8', 2, 27, 0, 0, '0', '0000-00-00', 'FKP', '2017-04-24'),
(143, 'allied telesis', 'Aktif', 'Allied Telesis', '', 'Switch', 'AT-GS924M-50', 1, 17, 0, 0, '0', '0000-00-00', 'puskom', '2017-04-24'),
(144, 'AP Cisco Elektro gd DH Lt.1', 'Aktif', 'CISCO', '', 'Acces Point', 'AIR-CAP3502I-C-K9', 0, 0, 0, 0, '0', '0000-00-00', 'TEKNIK ELEKTRO &gt; Gd DH &gt; Gd DH Lt.1', '2017-03-30'),
(145, 'AP Cisco Elektro gd DH Lt.2', 'Aktif', 'CISCO', '', 'Acces Point', 'AIR-CAP3502I-C-K9', 0, 0, 0, 0, '0', '0000-00-00', 'TEKNIK ELEKTRO &gt; Gd DH &gt; Gd DH Lt.2', '2017-03-30'),
(146, 'Ap Cisco perpus LANTAI 1', 'Aktif', 'CISCO', '', 'Acces Point', 'AIR-CAP3502I-C-K9', 1, 34, 0, 0, '0', '0000-00-00', 'Perpustakaan Pusat Bukit', '2017-03-30'),
(147, 'Ap Cisco perpus LANTAI 2', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 1, 34, 0, 0, '0', '0000-00-00', 'Perpustakaan Pusat Bukit', '2017-03-30'),
(148, 'Ap Cisco perpus LANTAI 3', 'Aktif', 'CISCO', '', 'Acces Point', 'AIR-CAP3502I-C-K9', 1, 34, 0, 0, '0', '0000-00-00', 'Perpustakaan Pusat Bukit', '2017-03-30'),
(149, 'aruba', 'Aktif', 'ARUBA', '', 'Acces Point', 'AP135', 1, 36, 70, 57, '0', '0000-00-00', 'Peternakan &gt; Gd AE &gt; Lt.2', '2017-03-22'),
(150, 'aruba', 'Aktif', 'ARUBA', '', 'Acces Point', 'AP135', 1, 36, 70, 56, '0', '0000-00-00', 'Peternakan &gt; Gd AE &gt; Lt.1', '2017-03-25'),
(151, 'aruba', 'Aktif', 'ARUBA', '', 'Acces Point', 'AP135', 1, 2, 33, 40, '0', '0000-00-00', 'Farmasi &gt; AF &gt; Lt.1', '2017-03-25'),
(152, 'aruba', 'Aktif', 'ARUBA', '', 'Acces Point', 'AP135', 1, 36, 70, 58, '0', '0000-00-00', 'Peternakan &gt; Gd AA &gt; Lt.2 Dekanat', '2017-03-22'),
(153, 'aruba', 'Rusak', 'ARUBA', '', 'Acces Point', 'AP135', 1, 35, 67, 51, '0', '0000-00-00', 'Pertanian &gt; Gd BA Dekanat &gt; Gd BA Lt.2', '2017-03-22'),
(154, 'aruba', 'Rusak', 'ARUBA', '', 'Acces Point', 'AP135', 1, 35, 67, 52, '0', '0000-00-00', 'Pertanian &gt; Gd BB &gt; Gd BB Lt.2', '2017-03-22'),
(155, 'aruba', 'Rusak', 'ARUBA', '', 'Acces Point', 'AP135', 0, 0, 0, 0, '0', '0000-00-00', 'Pertanian &gt; BJ &gt; Gd BJ Lt.2', '2017-03-22'),
(156, 'Aruba Dekan teknik lt.1', 'Aktif', 'ARUBA', '', 'Acces Point', 'AP135', 0, 0, 0, 0, '0', '0000-00-00', 'Dekanat Teknik', '2017-03-30'),
(157, 'Aruba Dekan teknik lt.2', 'Aktif', 'ARUBA', '', 'Acces Point', 'AP135', 0, 0, 0, 0, '0', '0000-00-00', 'Dekanat Teknik', '2017-03-30'),
(158, 'aruba lt 2 dekanat pertanian', 'Rusak', 'ARUBA', '', 'Acces Point', 'AP135', 1, 35, 67, 51, '0', '0000-00-00', 'Pertanian &gt; Gd BA Dekanat &gt; Gd BA Lt.2', '2017-10-16'),
(159, 'Aruba T.elektro ruang dosen', 'Aktif', 'ARUBA', '', 'Acces Point', 'AP135', 1, 22, 54, 0, '0', '0000-00-00', 'TEKNIK ELEKTRO', '2017-03-30'),
(160, 'Aruba T.elektro ruang TU', 'Aktif', 'ARUBA', '', 'Acces Point', 'AP135', 1, 22, 54, 0, '0', '0000-00-00', 'TEKNIK ELEKTRO', '2017-03-30'),
(161, 'Aruba Teknik elktro depan gedung jurusan', 'Aktif', 'ARUBA', '', 'Acces Point', 'AP135', 1, 22, 54, 0, '0', '0000-00-00', 'TEKNIK ELEKTRO', '2017-03-30'),
(162, 'Aruba Teknik sipil lt 2 ruang baca', 'Aktif', 'ARUBA', '', 'Acces Point', 'AP135', 1, 22, 80, 0, '0', '0000-00-00', 'TEKNIK SIPIL', '2017-03-30'),
(163, 'Aruba Teknik sipil ruang Dosen', 'Aktif', 'ARUBA', '', 'Acces Point', 'AP135', 1, 22, 80, 0, '0', '0000-00-00', 'TEKNIK SIPIL', '2017-03-30'),
(164, 'cisco 4507', 'Rusak', 'CISCO', '', 'Router', '', 1, 17, 0, 0, '0', '0000-00-00', 'puskom', '2016-05-25'),
(165, 'cisco 4507', 'Aktif', 'CISCO', '', 'Router', '', 2, 16, 0, 0, '0', '0000-00-00', 'GDLN', '2016-12-23'),
(166, 'converter', 'backup', 'TP-LINK', '', 'Converter', 'MC210CS', 1, 17, 0, 0, '0', '0000-00-00', 'puskom', '2017-09-20'),
(167, 'converter', 'backup', 'TP-LINK', '', 'Converter', 'MC210CS', 1, 17, 0, 0, '0', '0000-00-00', 'puskom', '2017-09-20'),
(168, 'converter', 'backup', 'TP-LINK', '', 'Converter', 'MC210CS', 1, 17, 0, 0, '0', '0000-00-00', 'puskom', '2017-09-20'),
(169, 'converter', 'backup', 'TP-LINK', '', 'Converter', 'MC210CS', 1, 17, 0, 0, '0', '0000-00-00', 'puskom', '2017-03-20'),
(170, 'converter', 'backup', 'TP-LINK', '', 'Converter', 'MC210CS', 1, 17, 0, 0, '0', '0000-00-00', 'puskom', '2017-03-20'),
(171, 'converter', 'backup', 'TP-LINK', '', 'Converter', 'MC210CS', 1, 17, 0, 0, '0', '0000-00-00', 'puskom', '2017-03-20'),
(172, 'converter dekanat teknik', 'Aktif', 'TP-LINK', '', 'Converter', 'MC210CS', 0, 0, 0, 0, '0', '0000-00-00', 'Dekanat Teknik', '2017-10-24'),
(173, 'converter Ekonomi', 'Aktif', 'TP-LINK', '', 'Converter', 'MC210CS', 1, 23, 49, 0, '0', '0000-00-00', 'Ekonomi-Bukit &gt; GD GJ', '2017-10-24'),
(174, 'converter Ekonomi', 'Aktif', 'TP-LINK', '', 'Converter', 'MC210CS', 1, 23, 49, 0, '0', '0000-00-00', 'Ekonomi-Bukit &gt; GD GJ', '2017-10-24'),
(175, 'converter ekonomi Gd.IA', 'Aktif', 'TP-LINK', '', 'Converter', 'MC210CS', 1, 23, 50, 0, '0', '0000-00-00', 'Ekonomi-Bukit &gt; Gd IA', '2017-10-24'),
(176, 'converter Hukum', 'Aktif', 'TP-LINK', '', 'Converter', 'MC210CS', 1, 29, 59, 0, '0', '0000-00-00', 'HUKUM &gt; Hukum Bukit', '2017-10-24'),
(177, 'converter optik ILKOM', 'Aktif', 'TP-LINK', '', 'Converter', 'MC210CS', 1, 17, 0, 0, '0', '0000-00-00', 'puskom', '2017-09-20'),
(178, 'converter optik LPPM', 'Aktif', 'TP-LINK', '', 'Converter', 'MC210CS', 1, 19, 0, 0, '0', '0000-00-00', 'LPPM', '2017-10-24'),
(179, 'converter optik LPPM', 'Aktif', 'TP-LINK', '', 'Converter', 'MC210CS', 1, 17, 0, 0, '0', '0000-00-00', 'puskom', '2017-09-20'),
(180, 'converter puskom to Dekanat Teknik bukit', 'Aktif', 'TP-LINK', '', 'Converter', 'MC210CS', 1, 17, 0, 0, '0', '0000-00-00', 'puskom', '2017-09-26'),
(181, 'Gd BIPAS Room B', 'Aktif', 'Mikrotik', '', 'Acces Point', 'Mikrotik cAP series', 1, 40, 72, 60, '0', '0000-00-00', 'Sastra-Bukit &gt; Bipas &gt; lt 2 &gt; Room B', '2017-09-26'),
(182, 'mikrotik', 'backup', 'Mikrotik', '', 'Acces Point', 'Mikrotik cAP series', 1, 2, 7, 47, '0', '0000-00-00', 'ILKOM &gt; Gd BC &gt; Gedung BC Lt.2', '2017-03-20'),
(183, 'mikrotik', 'backup', 'Mikrotik', '', 'Acces Point', 'Mikrotik cAP series', 1, 2, 7, 48, '0', '0000-00-00', 'ILKOM &gt; Gd BD &gt; Gedung BD Lt.1', '2017-03-20'),
(184, 'mikrotik', 'backup', 'Mikrotik', '', 'Acces Point', 'Mikrotik cAP series', 0, 0, 0, 0, '0', '0000-00-00', 'TEKNIK MESIN &gt; Prodi MESIN R-DOSEN Lt.2', '2017-03-20'),
(185, 'mikrotik', 'backup', 'Mikrotik', '', 'Acces Point', 'Mikrotik cAP series', 0, 0, 0, 0, '0', '0000-00-00', 'TEKNIK ARSITEKTUR &gt; Gd DF &gt; ARSITEKTUR Gedung DF Lt.2', '2017-03-20'),
(186, 'mikrotik', 'backup', 'Mikrotik', '', 'Acces Point', 'Mikrotik cAP series', 0, 0, 0, 0, '0', '0000-00-00', 'TEKNIK ARSITEKTUR &gt; Gd DG &gt; ARSITEKTUR Gedung DG Lt.1', '2017-03-20'),
(187, 'mikrotik', 'backup', 'Mikrotik', '', 'Switch', 'Mikrotik Mikrobit Sierra', 1, 18, 0, 0, '0', '0000-00-00', 'USDI', '2017-03-22'),
(188, 'mikrotik', 'backup', 'Mikrotik', '', 'Switch', 'Mikrotik Mikrobit Sierra', 1, 18, 0, 0, '0', '0000-00-00', 'USDI', '2017-03-22'),
(189, 'mikrotik', 'backup', 'Mikrotik', '', 'Switch', 'Mikrotik Mikrobit Sierra', 1, 18, 0, 0, '0', '0000-00-00', 'USDI', '2017-03-22'),
(190, 'mikrotik', 'backup', 'Mikrotik', '', 'Switch', 'Mikrotik Mikrobit Sierra', 1, 18, 0, 0, '0', '0000-00-00', 'USDI', '2017-03-22'),
(191, 'mikrotik', 'backup', 'Mikrotik', '', 'Switch', 'Mikrotik Mikrobit Sierra', 1, 18, 0, 0, '0', '0000-00-00', 'USDI', '2017-03-22'),
(192, 'mikrotik gd dp sipil', 'Aktif', 'Mikrotik', '', 'Acces Point', 'Mikrotik cAP series', 0, 0, 0, 0, '0', '0000-00-00', 'TEKNIK SIPIL &gt; GD DP lt 1', '2017-10-16'),
(193, 'Mikrotik access point pertanian BI', 'Aktif', 'Mikrotik', '', 'Acces Point', '', 1, 35, 69, 53, '0', '0000-00-00', 'Pertanian &gt; Gd Bi &gt; Lt.1 Gd BI', '2017-10-16'),
(194, 'Mikrotik AULA ekonomi lt 4', 'Aktif', 'Mikrotik', '', 'Acces Point', 'Mikrotik cAP series', 2, 24, 51, 0, '0', '0000-00-00', 'Ekonomi-Sudirman &gt; AULA ekonomi lt 4', '2017-03-25'),
(195, 'mikrotik Aula Hukum Lt.3', 'Aktif', 'Mikrotik', '', 'Acces Point', 'Mikrotik cAP series', 2, 30, 0, 0, '0', '0000-00-00', 'HUKUM &gt; Hukum Sudirman', '2017-03-22'),
(196, 'Mikrotik Aula Lantai 4', 'Aktif', 'Mikrotik', '', 'Acces Point', 'Mikrotik cAP series', 0, 0, 0, 0, '0', '0000-00-00', 'Student Center &gt; Lt.4', '2017-03-25'),
(197, 'mikrotik aula sastra prijono', 'Aktif', 'Mikrotik', '', 'Acces Point', 'Mikrotik cAP series', 0, 0, 0, 0, '0', '0000-00-00', 'Sastra Nias &gt; Aula sastra prof Prijono', '2017-03-25'),
(198, 'mikrotik aula sastra soekarno', 'Aktif', 'Mikrotik', '', 'Acces Point', 'Mikrotik cAP series', 0, 0, 0, 0, '0', '0000-00-00', 'Sastra Nias &gt; Aula Sastra Ir Soekarno', '2017-03-25'),
(199, 'mikrotik Aula Teknik Lt.4', 'Aktif', 'Mikrotik', '', 'Acces Point', 'Mikrotik cAP series', 1, 22, 48, 0, '0', '0000-00-00', 'Aula Teknik Sudirman', '2017-03-21'),
(200, 'Mikrotik Biologi', 'Aktif', 'Mikrotik', '', 'Acces Point', 'Mikrotik cAP series', 1, 2, 47, 31, '0', '0000-00-00', 'Biologi &gt; Gd FE', '2017-03-30'),
(201, 'Mikrotik BUKIT-BIPAS.RUANG.A.LT.1-AP', 'Aktif', 'Mikrotik', '', 'Acces Point', 'Mikrotik cAP series', 1, 40, 72, 0, '0', '0000-00-00', 'Sastra-Bukit &gt; Bipas', '2017-03-31'),
(202, 'Mikrotik BUKIT-BIPAS.RUANG.B.LT.2-AP', 'Aktif', 'Mikrotik', '', 'Acces Point', 'Mikrotik cAP series', 1, 40, 72, 0, '0', '0000-00-00', 'Sastra-Bukit &gt; Bipas', '2017-03-31'),
(203, 'Mikrotik CAP Lab Forensik Gd AH Farmasi', 'Aktif', 'Mikrotik', '', 'Acces Point', 'Mikrotik cAP series', 0, 0, 0, 0, '0', '0000-00-00', 'Farmasi &gt; Lab Forensik Gd AH &gt; Gd AH Lt 1', '2017-09-12'),
(204, 'mikrotik dekanat peternakan Lt2 ruang sidang', 'Aktif', 'Mikrotik', '', 'Acces Point', 'Mikrotik cAP series', 1, 36, 70, 58, '0', '0000-00-00', 'Peternakan &gt; Gd AA &gt; Lt.2 Dekanat', '2017-09-12'),
(205, 'mikrotik dinara', 'Aktif', 'Mikrotik', '', 'Router', 'Dinara', 1, 17, 0, 0, '0', '0000-00-00', 'puskom', '2016-12-23'),
(206, 'mikrotik dinara', 'Aktif', 'Mikrotik', '', 'Router', 'Dinara', 2, 16, 0, 0, '0', '0000-00-00', 'GDLN', '2016-12-23'),
(207, 'Mikrotik Farmasi Gd AG Lt.1', 'Aktif', 'Mikrotik', '', 'Acces Point', 'Mikrotik cAP series', 1, 36, 70, 58, '0', '0000-00-00', 'Peternakan &gt; Peternakan Gd AG Lt.1', '2017-09-12'),
(208, 'Mikrotik Kajian Bali', 'Aktif', 'Mikrotik', '', 'Acces Point', 'Mikrotik cAP series', 0, 0, 0, 0, '0', '0000-00-00', 'Kajian Bali', '2017-03-25'),
(209, 'Mikrotik LAB KIMIA LT.2', 'Aktif', 'Mikrotik', '', 'Acces Point', 'Mikrotik cAP series', 1, 2, 61, 0, '0', '0000-00-00', 'Kimia', '2017-03-30'),
(210, 'Mikrotik lab mektan sipil', 'Aktif', 'Mikrotik', '', 'Acces Point', 'Mikrotik cAP series', 0, 0, 0, 0, '0', '0000-00-00', 'TEKNIK SIPIL &gt; lab Mektan', '2017-10-16'),
(211, 'Mikrotik Lantai 1 Lobby', 'Aktif', 'Mikrotik', '', 'Acces Point', 'Mikrotik cAP series', 2, 31, 60, 45, '0', '0000-00-00', 'IKM &gt; Lt.1', '2017-03-25'),
(212, 'mikrotik Lantai 1 selasar kantin', 'Aktif', 'Mikrotik', '', 'Acces Point', 'Mikrotik cAP series', 2, 20, 45, 27, '0', '0000-00-00', 'Agrokompleks/ lab bersama &gt; lt 1 (lobby)', '2017-03-25'),
(213, 'Mikrotik Lantai 3', 'Aktif', 'Mikrotik', '', 'Acces Point', 'Mikrotik cAP series', 0, 0, 0, 0, '0', '0000-00-00', 'Student Center &gt; Lt.3', '2017-03-25'),
(214, 'mikrotik Lantai 3 R.Bhinneka', 'Aktif', 'Mikrotik', '', 'Acces Point', 'Mikrotik cAP series', 2, 20, 45, 29, '0', '0000-00-00', 'Agrokompleks/ lab bersama &gt; Lt.3', '2017-03-25'),
(215, 'mikrotik Lantai 3 R.Bhinneka', 'Aktif', 'Mikrotik', '', 'Acces Point', 'Mikrotik cAP series', 2, 20, 45, 29, '0', '0000-00-00', 'Agrokompleks/ lab bersama &gt; Lt.3', '2017-03-25'),
(216, 'Mikrotik Lantai 3 R.Sidang', 'Aktif', 'Mikrotik', '', 'Acces Point', 'Mikrotik cAP series', 2, 31, 60, 46, '0', '0000-00-00', 'IKM &gt; Lt.3', '2017-03-25'),
(217, 'Mikrotik Lantai 4', 'Aktif', 'Mikrotik', '', 'Acces Point', 'Mikrotik cAP series', 2, 20, 45, 30, '0', '0000-00-00', 'Agrokompleks/ lab bersama &gt; Lt.4', '2017-03-25'),
(218, 'Mikrotik Lantai 4 lobby', 'Aktif', 'Mikrotik', '', 'Acces Point', 'Mikrotik cAP series', 0, 0, 0, 0, '0', '0000-00-00', 'Student Center &gt; Lt.4', '2017-03-25'),
(219, 'Mikrotik Lantai 4 selasar', 'Aktif', 'Mikrotik', '', 'Acces Point', 'Mikrotik cAP series', 2, 20, 45, 30, '0', '0000-00-00', 'Agrokompleks/ lab bersama &gt; Lt.4', '2017-03-25'),
(220, 'mikrotik Lt.1 Depan ruang Conference', 'Aktif', 'Mikrotik', '', 'Acces Point', 'Mikrotik cAP series', 2, 30, 0, 0, '0', '0000-00-00', 'HUKUM &gt; Hukum Sudirman', '2017-03-22'),
(221, 'Mikrotik pasca lt3 (r.sidang Besar)', 'Aktif', 'Mikrotik', '', 'Acces Point', 'Mikrotik cAP series', 2, 32, 66, 0, '0', '0000-00-00', 'pasca sarjana &gt; Lt.3', '2017-03-25'),
(222, 'Mikrotik pasca lt3 (r.sidang Besar)', 'Aktif', 'Mikrotik', '', 'Acces Point', 'Mikrotik cAP series', 2, 32, 66, 0, '0', '0000-00-00', 'pasca sarjana &gt; Lt.3', '2017-03-25'),
(223, 'Mikrotik pasca lt3 (r.sidang Kecil)', 'Aktif', 'Mikrotik', '', 'Acces Point', 'Mikrotik cAP series', 2, 32, 66, 0, '0', '0000-00-00', 'pasca sarjana &gt; Lt.3', '2017-03-25'),
(224, 'Mikrotik R 31 ekonomi gedung BI lt 3', 'Aktif', 'Mikrotik', '', 'Acces Point', 'Mikrotik cAP series', 2, 24, 52, 34, '0', '0000-00-00', 'Ekonomi-Sudirman &gt; Gd BI &gt; R 31 ekonomi gedung BI lt 3', '2017-03-25'),
(225, 'mikrotik R 33 dan 34 ekonomi gedung BI lt 3', 'Aktif', 'Mikrotik', '', 'Acces Point', 'Mikrotik cAP series', 2, 24, 52, 35, '0', '0000-00-00', 'Ekonomi-Sudirman &gt; Gd BI &gt; R 33 dan 34 ekonomi gedung BI lt 3', '2017-03-25'),
(226, 'mikrotik ruang sidang lt 2 pertanian', 'Aktif', 'Mikrotik', '', 'Acces Point', 'Mikrotik cAP series', 1, 35, 67, 51, '0', '0000-00-00', 'Pertanian &gt; Gd BA Dekanat &gt; Gd BA Lt.2', '2017-10-16'),
(227, 'mikrotik Rumah Jabatan Rektor', 'Aktif', 'Mikrotik', '', 'Acces Point', 'Mikrotik cAP series', 2, 37, 0, 0, '0', '0000-00-00', 'Rumah Jabatan Rektor', '2017-03-22'),
(228, 'Mikrotik Rumah Tangga', 'Aktif', 'Mikrotik', '', 'Acces Point', 'Mikrotik cAP series', 1, 38, 0, 0, '0', '0000-00-00', 'Rumah Tangga (RT) Bukit', '2017-03-30'),
(229, 'mikrotik sastra aula', 'Aktif', 'Mikrotik', '', 'Acces Point', 'Mikrotik cAP series', 0, 0, 0, 0, '0', '0000-00-00', 'Sastra Nias', '2017-03-25'),
(230, 'mikrotik switch poe rusunawa', 'Aktif', 'Mikrotik', '', 'Switch', 'Mikrotik Mikrobit Sierra', 1, 39, 0, 0, '0', '0000-00-00', 'Rusunawa', '2017-08-30'),
(231, 'mikrotik TI lt 4', 'Aktif', 'Mikrotik', '', 'Acces Point', 'Mikrotik cAP series', 0, 0, 0, 0, '0', '0000-00-00', 'TEKNOLOGI INFORMASI &gt; lt 4', '2017-10-16'),
(232, 'mikrotik TI ruang kuliah lt 3', 'Aktif', 'Mikrotik', '', 'Acces Point', 'Mikrotik cAP series', 0, 0, 0, 0, '0', '0000-00-00', 'TEKNOLOGI INFORMASI &gt; ruang kuliah lt 3', '2017-10-16'),
(233, 'Mikrotik Udayana Pers', 'Aktif', 'Mikrotik', '', 'Acces Point', 'Mikrotik cAP series', 0, 0, 0, 0, '0', '0000-00-00', 'Udayana Pers', '2017-03-25'),
(234, 'OTB RACK OPTIK', 'Aktif', '', '', 'OTB Rack Optik', '', 1, 18, 0, 0, '0', '0000-00-00', 'USDI', '2017-08-21'),
(235, 'OTB RACK OPTIK', 'Aktif', '', '', 'OTB Rack Optik', '', 1, 17, 0, 0, '0', '0000-00-00', 'puskom', '2017-08-21'),
(236, 'rack server 42u', 'Aktif', '', '', 'Rack Server', '', 1, 18, 0, 0, '0', '0000-00-00', 'USDI', '2017-08-21'),
(237, 'Router CISCO3900', 'Aktif', 'CISCO', '', 'Router', 'WS-3925', 1, 17, 0, 0, '0', '0000-00-00', 'puskom', '2017-09-20'),
(238, 'Server HP DL390 G9', 'Aktif', 'HP', '', 'Server', 'DL-380-G9', 2, 16, 0, 0, '0', '0000-00-00', 'GDLN', '2017-08-21'),
(239, 'Server HP DL390 G9', 'Aktif', 'HP', '', 'Server', 'DL-380-G9', 2, 16, 0, 0, '0', '0000-00-00', 'GDLN', '2017-08-21'),
(240, 'Server HP DL390 G9', 'Aktif', 'HP', '', 'Server', 'DL-380-G9', 2, 16, 0, 0, '0', '0000-00-00', 'GDLN', '2017-08-21'),
(241, 'Server HP Proliat DL180 Gen9 E-2603v3', 'Aktif', 'HP', '', 'Server', 'DL180-G9', 2, 16, 0, 0, '0', '0000-00-00', 'GDLN', '2017-08-21'),
(242, 'Server VM-70', 'Aktif', 'HP', '', 'Server', '', 2, 16, 0, 0, '0', '0000-00-00', 'GDLN', '2017-01-28'),
(243, 'Server vm-71', 'Aktif', 'HP', '', 'Server', 'DL-380-G9', 2, 16, 0, 0, '0', '0000-00-00', 'GDLN', '2017-01-28'),
(244, 'Storage HP MSA1024', 'Aktif', 'HP', '', 'Storage', 'MSA-1040', 2, 16, 0, 0, '0', '0000-00-00', 'GDLN', '2017-08-21'),
(245, 'Storage-vm-70', 'Aktif', 'HP', '', 'Storage', '', 2, 16, 0, 0, '0', '0000-00-00', 'GDLN', '2017-08-21'),
(246, 'Storage-vm-71', 'Aktif', 'HP', '', 'Storage', '', 2, 16, 0, 0, '0', '0000-00-00', 'GDLN', '2017-01-28'),
(247, 'Switch AT-GS950/8', 'Aktif', 'Allied Telesis', '', 'Switch', 'AT-GS950/8', 1, 35, 67, 50, '0', '0000-00-00', 'Pertanian &gt; Gd BA Dekanat &gt; Gd BA LT.1', '2017-03-26'),
(248, 'Switch AT-GS950/8- FTP', 'Aktif', 'Allied Telesis', '', 'Switch', 'AT-GS950/8', 2, 28, 0, 0, '0', '0000-00-00', 'FTP', '2017-03-20'),
(249, 'Switch Cisco 2960', 'Aktif', 'CISCO', '', 'Switch', 'WS-C2960-24-S', 1, 18, 0, 0, '0', '0000-00-00', 'USDI', '2017-08-21'),
(250, 'Switch cisco Bipas', 'Aktif', 'CISCO', '', 'Switch', 'WS-C2950SX-24', 1, 40, 72, 0, '0', '0000-00-00', 'Sastra-Bukit &gt; Bipas', '2017-03-31'),
(251, 'Switch Cisco SF302-08P 8 port', 'Aktif', 'CISCO', '', 'Switch', 'SF302-08P 8 port', 1, 2, 33, 39, '0', '0000-00-00', 'Farmasi &gt; AF &gt; Lt 2', '2017-09-12'),
(252, 'Switch Dekanat Peternakan', 'Aktif', 'CISCO', '', 'Switch', 'SF302-08P 8 port', 1, 36, 70, 54, '0', '0000-00-00', 'Peternakan &gt; Gd AA &gt; Lt 1', '2017-09-12'),
(253, 'Switch Farmasi Gd AG Lt 1', 'Aktif', 'UBNT', '', 'Switch', 'Tough Switch PoE UBIQuity Network', 1, 36, 70, 58, '0', '0000-00-00', 'Peternakan &gt; Peternakan Gd AG Lt.1', '2017-09-12'),
(254, 'Switch LPPM', 'Aktif', 'CISCO', '', 'Switch', 'WS-C2960-24-S', 1, 19, 0, 0, '0', '0000-00-00', 'LPPM', '2017-03-14'),
(255, 'Switch LPPM', 'Aktif', 'Allied Telesis', '', 'Switch', 'AT-GS950/8', 1, 19, 0, 0, '0', '0000-00-00', 'LPPM', '2017-03-14'),
(256, 'switch PASCA Lt.2', 'Rusak', 'CISCO', '', 'Switch', 'WS-C2960S-24PS-L', 2, 32, 65, 0, '0', '0000-00-00', 'pasca sarjana &gt; Lt.2', '2017-03-25'),
(257, 'switch perpus sudirman', 'Rusak', 'CISCO', '', 'Switch', 'WS-C2960S-24PS-L', 2, 33, 0, 0, '0', '0000-00-00', 'perpus sudirman', '2017-03-22'),
(258, 'Tp-Link Converter', 'Aktif', 'TP-LINK', '', 'Converter', 'MC110CS', 1, 39, 71, 0, '0', '0000-00-00', 'Rusunawa &gt; Rusunawa Lt.1', '2017-08-30'),
(259, 'TP-LINK SG1016D', 'Aktif', 'TP-LINK', '', 'Switch Unmanage', 'TL-SG1016D', 0, 0, 0, 0, '0', '0000-00-00', 'TEKNIK MESIN &gt; Prodi MESIN Lt.1', '2017-03-22'),
(260, 'TP-LINK SG1016D', 'backup', 'TP-LINK', '', 'Switch Unmanage', 'TL-SG1016D', 1, 18, 0, 0, '0', '0000-00-00', 'USDI', '2017-03-22'),
(261, 'TP-LINK SG1016D', 'backup', 'TP-LINK', '', 'Switch Unmanage', 'TL-SG1016D', 2, 16, 0, 0, '0', '0000-00-00', 'GDLN', '2017-05-22'),
(262, 'TP-LINK SG1016D', 'backup', 'TP-LINK', '', 'Switch Unmanage', 'TL-SG1016D', 2, 16, 0, 0, '0', '0000-00-00', 'GDLN', '2017-05-22'),
(263, 'TP-LINK SG1016D', 'backup', 'TP-LINK', '', 'Switch Unmanage', 'TL-SG1016D', 1, 18, 0, 0, '0', '0000-00-00', 'USDI', '2017-03-22'),
(264, 'TP-LINK SG1016D', 'backup', 'TP-LINK', '', 'Switch Unmanage', 'TL-SG1016D', 2, 16, 0, 0, '0', '0000-00-00', 'GDLN', '2017-05-22'),
(265, 'TPLINK converter', 'backup', 'TP-LINK', '', 'Converter', 'MC110CS', 1, 17, 0, 0, '0', '0000-00-00', 'puskom', '2017-09-20'),
(266, 'TPlink Switch', 'Aktif', 'TP-LINK', '', 'Switch', 'TL-SG108E', 1, 39, 0, 0, '0', '0000-00-00', 'Rusunawa', '2017-08-30'),
(267, 'unifi', 'backup', 'UBNT', '', 'Acces Point', 'UNIFI', 1, 17, 0, 0, '0', '0000-00-00', 'puskom', '2017-03-22'),
(268, 'unifi', 'backup', 'UBNT', '', 'Acces Point', 'UNIFI', 1, 17, 0, 0, '0', '0000-00-00', 'puskom', '2017-03-22'),
(269, 'unifi', 'backup', 'UBNT', '', 'Acces Point', 'UNIFI', 1, 17, 0, 0, '0', '0000-00-00', 'puskom', '2017-03-22'),
(270, 'unifi', 'backup', 'UBNT', '', 'Acces Point', 'UNIFI', 1, 17, 0, 0, '0', '0000-00-00', 'puskom', '2017-03-22'),
(271, 'UNIFI', 'backup', 'UBNT', '', 'Acces Point', 'UNIFI', 1, 17, 0, 0, '0', '0000-00-00', 'puskom', '2017-03-22'),
(272, 'UNIFI', 'backup', 'UBNT', '', 'Acces Point', 'UNIFI', 1, 17, 0, 0, '0', '0000-00-00', 'puskom', '2017-03-22'),
(273, 'unifi', 'backup', 'UBNT', '', 'Acces Point', 'UNIFI', 1, 17, 0, 0, '0', '0000-00-00', 'puskom', '2017-03-22'),
(274, 'unifi', 'backup', 'UBNT', '', 'Acces Point', 'UNIFI', 1, 17, 0, 0, '0', '0000-00-00', 'puskom', '2017-03-22'),
(275, 'UNIFI', 'backup', 'UBNT', '', 'Acces Point', 'UNIFI', 1, 17, 0, 0, '0', '0000-00-00', 'puskom', '2017-03-22'),
(276, 'unifi', 'backup', 'UBNT', '', 'Acces Point', 'UNIFI', 1, 17, 0, 0, '0', '0000-00-00', 'puskom', '2017-03-22'),
(277, 'UNIFI', 'backup', 'UBNT', '', 'Acces Point', 'UNIFI', 1, 17, 0, 0, '0', '0000-00-00', 'puskom', '2017-03-22'),
(278, 'unifi', 'backup', 'UBNT', '', 'Acces Point', 'UNIFI', 1, 17, 0, 0, '0', '0000-00-00', 'puskom', '2017-03-22'),
(279, 'UNIFI', 'backup', 'UBNT', '', 'Acces Point', 'UNIFI', 1, 17, 0, 0, '0', '0000-00-00', 'puskom', '2017-03-22'),
(280, 'unifi', 'backup', 'UBNT', '', 'Acces Point', 'UNIFI', 1, 17, 0, 0, '0', '0000-00-00', 'puskom', '2017-03-22'),
(281, 'unifi', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 0, 0, 0, 0, '0', '0000-00-00', 'TEKNIK MESIN &gt; MESIN LAB KE Lt.1', '2017-03-22'),
(282, 'unifi', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 0, 0, 0, 0, '0', '0000-00-00', 'TEKNIK MESIN &gt; MESIN LAB PRODUKSI Lt.1', '2017-03-22'),
(283, 'unifi', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 0, 0, 0, 0, '0', '0000-00-00', 'TEKNIK MESIN &gt; Prodi MESIN Lt.1', '2017-03-22'),
(284, 'unifi', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 0, 0, 0, 0, '0', '0000-00-00', 'TEKNIK ARSITEKTUR &gt; ARSITEKTUR R.DOSEN', '2017-03-22'),
(285, 'unifi', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 0, 0, 0, 0, '0', '0000-00-00', 'TEKNIK ARSITEKTUR &gt; ARSITEKTUR R.TU', '2017-03-22'),
(286, 'unifi aula teknik barat', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 1, 22, 48, 0, '0', '0000-00-00', 'Aula Teknik Sudirman', '2017-03-21'),
(287, 'unifi aula teknik timur', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 1, 22, 48, 0, '0', '0000-00-00', 'Aula Teknik Sudirman', '2017-03-21'),
(288, 'unifi CDC', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 0, 0, 0, 0, '0', '0000-00-00', 'CDC', '2017-03-22'),
(289, 'unifi ekonomi lt 4 (kelas)', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 2, 24, 53, 38, '0', '0000-00-00', 'Ekonomi-Sudirman &gt; Gd BJ &gt; Lt.4 Gd BJ Ruang kelas', '2017-03-25'),
(290, 'unifi ekonomi lt1 (lobby)', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 2, 24, 53, 36, '0', '0000-00-00', 'Ekonomi-Sudirman &gt; Gd BJ &gt; Lt.1 Gd.BJ', '2017-03-25'),
(291, 'unifi ekonomi lt2 (perpustakaan)', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 2, 24, 53, 37, '0', '0000-00-00', 'Ekonomi-Sudirman &gt; Gd BJ &gt; Lt.2 Gd BJ perpustakaan', '2017-03-25'),
(292, 'unifi elektro ruang sidang', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 0, 0, 0, 0, '0', '0000-00-00', 'TEKNIK ELEKTRO &gt; ruang sidang lt 2', '2017-10-16'),
(293, 'unifi fisika office', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 1, 2, 55, 0, '0', '0000-00-00', 'Fisika', '2017-03-30'),
(294, 'unifi fisip lt 1 (R.Dekan)', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 2, 25, 0, 0, '0', '0000-00-00', 'FISIP', '2017-03-21'),
(295, 'unifi fisip lt 1 (R.TU)', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 2, 25, 0, 0, '0', '0000-00-00', 'FISIP', '2017-03-21'),
(296, 'unifi fisip lt 2', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 2, 25, 0, 0, '0', '0000-00-00', 'FISIP', '2017-03-21'),
(297, 'unifi fkh lt 2', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 2, 26, 56, 0, '0', '0000-00-00', 'FKH &gt; FKH lt 2 (ruang TU)', '2017-10-16'),
(298, 'unifi fkh lt 3', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 2, 26, 57, 0, '0', '0000-00-00', 'FKH &gt; FKH lt 3 (lorong)', '2017-10-16'),
(299, 'unifi fkh lt 4', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 2, 26, 58, 0, '0', '0000-00-00', 'FKH &gt; fkh lt 4 (lorong)', '2017-10-16'),
(300, 'unifi FTP BUKIT', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 2, 28, 0, 0, '0', '0000-00-00', 'FTP', '2017-08-28'),
(301, 'unifi FTP BUKIT', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 2, 28, 0, 0, '0', '0000-00-00', 'FTP', '2017-08-28'),
(302, 'unifi FTP BUKIT', 'Rusak', 'UBNT', '', 'Acces Point', 'UNIFI', 2, 28, 0, 0, '0', '0000-00-00', 'FTP', '2017-08-28'),
(303, 'unifi FTP BUKIT', 'Rusak', 'UBNT', '', 'Acces Point', 'UNIFI', 2, 28, 0, 0, '0', '0000-00-00', 'FTP', '2017-08-28'),
(304, 'unifi FTP BUKIT', 'Rusak', 'UBNT', '', 'Acces Point', 'UNIFI', 2, 28, 0, 0, '0', '0000-00-00', 'FTP', '2017-08-28'),
(305, 'unifi gdln (outdoor)', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 2, 16, 0, 0, '0', '0000-00-00', 'GDLN', '2017-03-22'),
(306, 'unifi Gedung Maematika Lt.2', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 1, 2, 62, 0, '0', '0000-00-00', 'Matematika', '2017-03-30'),
(307, 'unifi hukum (kantin)', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 2, 30, 0, 0, '0', '0000-00-00', 'HUKUM &gt; Hukum Sudirman', '2017-03-22'),
(308, 'unifi hukum (lobby kelas)', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 2, 30, 0, 0, '0', '0000-00-00', 'HUKUM &gt; Hukum Sudirman', '2017-03-22'),
(309, 'unifi hukum (ruang dosen)', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 2, 30, 0, 0, '0', '0000-00-00', 'HUKUM &gt; Hukum Sudirman', '2017-03-22'),
(310, 'unifi hukum lt2 (lobby aula)', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 2, 30, 0, 0, '0', '0000-00-00', 'HUKUM &gt; Hukum Sudirman', '2017-03-22'),
(311, 'unifi Kimia GEDUNG TU lt.1', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 1, 2, 61, 0, '0', '0000-00-00', 'Kimia', '2017-03-30'),
(312, 'unifi Kimia Lobby lt.2 ruang dosen', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 1, 2, 61, 0, '0', '0000-00-00', 'Kimia', '2017-03-30'),
(313, 'unifi lab bersama lt 1 (lobby)', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 2, 20, 45, 27, '0', '0000-00-00', 'Agrokompleks/ lab bersama &gt; lt 1 (lobby)', '2017-03-25'),
(314, 'unifi lab bersama lt 2 (arsitektur pertamanan)', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 2, 20, 45, 28, '0', '0000-00-00', 'Agrokompleks/ lab bersama &gt; Lt 2', '2017-03-25'),
(315, 'unifi lab biologi', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 1, 2, 47, 0, '0', '0000-00-00', 'Biologi', '2017-03-30'),
(316, 'unifi lab fisika', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 1, 2, 55, 41, '0', '0000-00-00', 'Fisika &gt; Gd FK', '2017-03-30'),
(317, 'unifi lab komputer sipil', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 1, 22, 80, 0, '0', '0000-00-00', 'TEKNIK SIPIL', '2017-03-30'),
(318, 'unifi labbersama1b', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 2, 20, 45, 27, '0', '0000-00-00', 'Agrokompleks/ lab bersama &gt; lt 1 (lobby)', '2017-03-25'),
(319, 'unifi labbersama1d', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 2, 20, 45, 27, '0', '0000-00-00', 'Agrokompleks/ lab bersama &gt; lt 1 (lobby)', '2017-03-25'),
(320, 'unifi labbersama1e', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 2, 20, 45, 27, '0', '0000-00-00', 'Agrokompleks/ lab bersama &gt; lt 1 (lobby)', '2017-03-25'),
(321, 'unifi labbersama2a', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 2, 20, 45, 28, '0', '0000-00-00', 'Agrokompleks/ lab bersama &gt; Lt 2', '2017-03-25'),
(322, 'unifi labbersama2b', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 2, 20, 45, 28, '0', '0000-00-00', 'Agrokompleks/ lab bersama &gt; Lt 2', '2017-03-25'),
(323, 'unifi labbersama2d', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 2, 20, 45, 28, '0', '0000-00-00', 'Agrokompleks/ lab bersama &gt; Lt 2', '2017-03-25'),
(324, 'unifi labbersama2e', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 2, 20, 45, 28, '0', '0000-00-00', 'Agrokompleks/ lab bersama &gt; Lt 2', '2017-03-25'),
(325, 'unifi labbersama3a', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 2, 20, 45, 29, '0', '0000-00-00', 'Agrokompleks/ lab bersama &gt; Lt.3', '2017-03-25'),
(326, 'unifi labbersama3b', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 2, 20, 45, 29, '0', '0000-00-00', 'Agrokompleks/ lab bersama &gt; Lt.3', '2017-03-25'),
(327, 'unifi labbersama3c', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 2, 20, 45, 29, '0', '0000-00-00', 'Agrokompleks/ lab bersama &gt; Lt.3', '2017-03-25'),
(328, 'unifi labbersama3d', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 2, 20, 45, 29, '0', '0000-00-00', 'Agrokompleks/ lab bersama &gt; Lt.3', '2017-03-25'),
(329, 'unifi labbersama3e', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 2, 20, 45, 29, '0', '0000-00-00', 'Agrokompleks/ lab bersama &gt; Lt.3', '2017-03-25'),
(330, 'unifi labbersama4a', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 2, 20, 45, 30, '0', '0000-00-00', 'Agrokompleks/ lab bersama &gt; Lt.4', '2017-03-25'),
(331, 'unifi labbersama4b', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 2, 20, 45, 30, '0', '0000-00-00', 'Agrokompleks/ lab bersama &gt; Lt.4', '2017-03-25'),
(332, 'unifi labbersama4c', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 2, 20, 45, 30, '0', '0000-00-00', 'Agrokompleks/ lab bersama &gt; Lt.4', '2017-03-25'),
(333, 'unifi labbersama4d', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 2, 20, 45, 30, '0', '0000-00-00', 'Agrokompleks/ lab bersama &gt; Lt.4', '2017-03-25'),
(334, 'unifi labbersama4e', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 2, 20, 45, 30, '0', '0000-00-00', 'Agrokompleks/ lab bersama &gt; Lt.4', '2017-03-25'),
(335, 'unifi Lantai 2', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 2, 20, 45, 28, '0', '0000-00-00', 'Agrokompleks/ lab bersama &gt; Lt 2', '2017-03-25'),
(336, 'unifi Lantai 2', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 0, 0, 0, 0, '0', '0000-00-00', 'Student Center &gt; Lt.2', '2017-03-25'),
(337, 'unifi lantai 2a', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 1, 22, 81, 0, '0', '0000-00-00', 'TEKNOLOGI INFORMASI', '2017-03-30'),
(338, 'unifi lantai 2b', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 1, 22, 81, 0, '0', '0000-00-00', 'TEKNOLOGI INFORMASI', '2017-03-30'),
(339, 'unifi lantai 3', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 1, 22, 81, 0, '0', '0000-00-00', 'TEKNOLOGI INFORMASI', '2017-03-30'),
(340, 'unifi lantai 4a', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 1, 22, 81, 0, '0', '0000-00-00', 'TEKNOLOGI INFORMASI', '2017-03-30'),
(341, 'unifi lantai 4b', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 1, 22, 81, 0, '0', '0000-00-00', 'TEKNOLOGI INFORMASI', '2017-03-30'),
(342, 'unifi lobby lantai 1', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 1, 22, 81, 0, '0', '0000-00-00', 'TEKNOLOGI INFORMASI', '2017-03-30'),
(343, 'unifi meeting room bipas', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 1, 40, 72, 0, '0', '0000-00-00', 'Sastra-Bukit &gt; Bipas', '2017-03-31'),
(344, 'unifi office bipas', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 1, 40, 72, 0, '0', '0000-00-00', 'Sastra-Bukit &gt; Bipas', '2017-03-31'),
(345, 'unifi Outdoor', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI-Outdoor', 1, 2, 7, 48, '0', '0000-00-00', 'ILKOM &gt; Gd BD &gt; Gedung BD Lt.1', '2017-03-26'),
(346, 'unifi pariwisata (lobby)', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 0, 0, 0, 0, '0', '0000-00-00', 'Pariwisata', '2017-03-25'),
(347, 'unifi pariwisata (R.prodi)', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 0, 0, 0, 0, '0', '0000-00-00', 'Pariwisata', '2017-03-25'),
(348, 'unifi pariwisata (ruang TU)', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 0, 0, 0, 0, '0', '0000-00-00', 'Pariwisata', '2017-03-25'),
(349, 'unifi pasca ground (lobby)', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 2, 32, 63, 0, '0', '0000-00-00', 'pasca sarjana &gt; Ground', '2017-03-25'),
(350, 'unifi pasca lt 1 (lobby)', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 2, 32, 64, 0, '0', '0000-00-00', 'pasca sarjana &gt; Lt.1', '2017-03-25'),
(351, 'unifi pasca lt 2 (lobby)&gt;;&gt;;s3 Ilmu Teknik', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 2, 32, 65, 0, '0', '0000-00-00', 'pasca sarjana &gt; Lt.2', '2017-03-25'),
(352, 'unifi pasca lt3 (lobby)', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 2, 32, 66, 0, '0', '0000-00-00', 'pasca sarjana &gt; Lt.3', '2017-03-25'),
(353, 'unifi pasca lt3 (r.sidang Besar)', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 2, 32, 66, 0, '0', '0000-00-00', 'pasca sarjana &gt; Lt.3', '2017-03-25'),
(354, 'unifi perpus teknik Bukit', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 1, 22, 48, 33, '0', '0000-00-00', 'Dekanat Teknik &gt; Perpus Teknik Bukit Undagigraha Lt.2', '2017-03-30'),
(355, 'unifi perpustakaan lt.1', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 1, 34, 0, 0, '0', '0000-00-00', 'Perpustakaan Pusat Bukit', '2017-03-30'),
(356, 'unifi perpustakaan lt.2', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 1, 34, 0, 0, '0', '0000-00-00', 'Perpustakaan Pusat Bukit', '2017-03-30'),
(357, 'unifi perpustakaan lt.3', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 1, 34, 0, 0, '0', '0000-00-00', 'Perpustakaan Pusat Bukit', '2017-03-30'),
(358, 'unifi Ruang Ketua USDI', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 2, 16, 0, 0, '0', '0000-00-00', 'GDLN', '2017-03-22'),
(359, 'unifi Rumah Jabatan Rektor', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 2, 37, 0, 0, '0', '0000-00-00', 'Rumah Jabatan Rektor', '2017-03-22'),
(360, 'unifi S2 Elektro 1', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 2, 32, 65, 49, '0', '0000-00-00', 'pasca sarjana &gt; Lt.2 &gt; S2 Elektro', '2017-03-25'),
(361, 'unifi S2 Elektro 2', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 2, 32, 65, 49, '0', '0000-00-00', 'pasca sarjana &gt; Lt.2 &gt; S2 Elektro', '2017-03-25'),
(362, 'unifi sastra lt1 (dekan)', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 0, 0, 0, 0, '0', '0000-00-00', 'Sastra Nias', '2017-03-25'),
(363, 'unifi sastra lt3 (aula)', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 0, 0, 0, 0, '0', '0000-00-00', 'Sastra Nias', '2017-03-25'),
(364, 'unifi sastra lt3 (kantor bipa)', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 0, 0, 0, 0, '0', '0000-00-00', 'Sastra Nias', '2017-03-25'),
(365, 'unifi sastra lt3 (kelas bipa)', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 0, 0, 0, 0, '0', '0000-00-00', 'Sastra Nias', '2017-03-25'),
(366, 'unifi SPI', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 0, 0, 0, 0, '0', '0000-00-00', 'SPI', '2017-03-22'),
(367, 'unifi taman internet (outdoor)', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 2, 16, 0, 0, '0', '0000-00-00', 'GDLN', '2017-03-22'),
(368, 'unifi teknik outdoor', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 1, 22, 81, 0, '0', '0000-00-00', 'TEKNOLOGI INFORMASI', '2017-03-30'),
(369, 'unifi TU biologi', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 1, 2, 47, 32, '0', '0000-00-00', 'Biologi &gt; Gd FF', '2017-03-30'),
(370, 'unifi ubiquiti', 'Rusak', 'UBNT', '', 'Acces Point', 'UNIFI', 0, 0, 0, 0, '0', '0000-00-00', '', '2017-08-21'),
(371, 'unifi vokasi', 'Aktif', 'UBNT', '', 'Acces Point', 'UNIFI', 0, 0, 0, 0, '0', '0000-00-00', 'vokasi', '2017-03-22'),
(372, 'UPS APC SRT10KXLI', 'Aktif', 'APC', '', 'UPS', 'SRT10KXLI', 2, 16, 0, 0, '0', '0000-00-00', 'GDLN', '2017-08-21'),
(373, 'UPS APC SRT10KXLI', 'Aktif', 'APC', '', 'UPS', 'SRT10KXLI', 1, 18, 0, 0, '0', '0000-00-00', 'USDI', '2017-09-19'),
(374, 'UPS APC SRT5KXLI', 'Aktif', 'APC', '', 'UPS', 'SRT5KXLI', 1, 18, 0, 0, '0', '0000-00-00', 'USDI', '2017-09-19'),
(375, 'UPS APC SRT5KXLI', 'Aktif', 'APC', '', 'UPS', 'SRT5KXLI', 1, 18, 0, 0, '0', '0000-00-00', 'USDI', '2017-09-19'),
(376, 'UPS APC SURT10000XLI', 'Aktif', 'APC', '', 'UPS', 'SURT10000XLI', 2, 16, 0, 0, '0', '0000-00-00', 'GDLN', '2017-08-21'),
(377, 'UPS APC SURT10000XLI', 'Aktif', 'APC', '', 'UPS', 'SURT10000XLI', 2, 16, 0, 0, '0', '0000-00-00', 'GDLN', '2017-08-21'),
(378, 'Wallmount Rack', 'Aktif', '', '', 'Rack Server', '', 1, 18, 0, 0, '0', '0000-00-00', 'USDI', '2017-08-21');

-- --------------------------------------------------------

--
-- Table structure for table `tb_aset1`
--

CREATE TABLE `tb_aset1` (
  `id_aset` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `manufaktur` varchar(100) NOT NULL,
  `noseri` varchar(100) NOT NULL,
  `tipe` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `kampus_id` int(11) NOT NULL,
  `fakultas_id` int(11) NOT NULL,
  `jurusan_id` int(11) NOT NULL,
  `lokasi_id` int(11) NOT NULL,
  `noinventory` varchar(100) NOT NULL,
  `tgldipasang` date NOT NULL,
  `trakhir_diperbaiki` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_aset1`
--

INSERT INTO `tb_aset1` (`id_aset`, `nama`, `status`, `manufaktur`, `noseri`, `tipe`, `model`, `kampus_id`, `fakultas_id`, `jurusan_id`, `lokasi_id`, `noinventory`, `tgldipasang`, `trakhir_diperbaiki`) VALUES
(13, 'kim', 'Rusak', 'kim', '12', 'w12', 'qw12', 1, 13, 44, 0, '21', '2017-10-26', '2017-10-01'),
(15, 'tes', 'backup', 'tes', 'we1w w ', 'weqw', 'ddeqe ', 2, 16, 0, 0, '0', '2017-10-26', '2017-10-06'),
(32, 'q', 'aktif', 'q', 'q', 'q', 'q', 1, 13, 0, 0, '1', '2017-10-26', '2017-10-06'),
(33, 'a', 'aktif', 'a2', 'a3', 'a4', 'a5', 1, 15, 0, 0, '3', '2017-10-04', '2017-10-03'),
(34, 'b', 'aktif', 'b', '121', '221', 'wq', 2, 10, 0, 0, '221', '2017-10-25', '2017-10-28'),
(35, 'kayu', 'aktif', 'asus', '2122', 'wewe', '2332', 1, 2, 7, 26, '1', '2017-10-31', '2017-10-31'),
(36, 'batu', 'aktif', 'apel', '1212', 'jos', 'md44', 1, 14, 34, 25, '21', '2017-10-26', '2017-10-27');

-- --------------------------------------------------------

--
-- Table structure for table `tb_fakultas`
--

CREATE TABLE `tb_fakultas` (
  `id_fakultas` int(11) NOT NULL,
  `kampus_id` int(11) NOT NULL,
  `nama_fakultas` varchar(30) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_fakultas`
--

INSERT INTO `tb_fakultas` (`id_fakultas`, `kampus_id`, `nama_fakultas`, `lat`, `lng`) VALUES
(2, 1, 'Mipa', -8.799440, 115.170418),
(9, 1, 'bukit punya', 0.000000, 0.000000),
(13, 1, 'fisip', 0.000000, 0.000000),
(14, 1, 'kedokteran', 0.000000, 0.000000),
(16, 2, 'GDLN', 0.000000, 0.000000),
(17, 1, 'PUSKOM', 0.000000, 0.000000),
(18, 1, 'USDI', 0.000000, 0.000000),
(19, 1, 'LPPM', 0.000000, 0.000000),
(20, 2, 'Agrokompleks', 0.000000, 0.000000),
(21, 2, 'Teknik-Sudirman', 0.000000, 0.000000),
(22, 1, 'Teknik-Bukit', 0.000000, 0.000000),
(23, 1, 'Ekonomi-Bukit', 0.000000, 0.000000),
(24, 2, 'Ekonomi-Sudirman', 0.000000, 0.000000),
(25, 2, 'FISIP', 0.000000, 0.000000),
(26, 2, 'FKH', 0.000000, 0.000000),
(27, 1, 'FKP', 0.000000, 0.000000),
(28, 1, 'FTP', 0.000000, 0.000000),
(29, 1, 'Hukum-Bukit', 0.000000, 0.000000),
(30, 2, 'Hukum-Sudirman', 0.000000, 0.000000),
(31, 2, 'Kedokteran', 0.000000, 0.000000),
(32, 2, 'Pasca Sarjana', 0.000000, 0.000000),
(33, 2, 'Perpustakaan Sudirman', 0.000000, 0.000000),
(34, 1, 'Perpustakaan Pusat Bukit', 0.000000, 0.000000),
(35, 1, 'Pertanian', 0.000000, 0.000000),
(36, 1, 'Peternakan', 0.000000, 0.000000),
(37, 2, 'Rumah Jabatan Rektor', 0.000000, 0.000000),
(38, 1, 'Rumah Tangga (RT) Bukit', 0.000000, 0.000000),
(39, 1, 'Rusunawa', 0.000000, 0.000000),
(40, 1, 'Sastra-Bukit', 0.000000, 0.000000),
(41, 2, 'Student Center', 0.000000, 0.000000),
(43, 1, 'langit', -8.799419, 115.174004);

-- --------------------------------------------------------

--
-- Table structure for table `tb_history`
--

CREATE TABLE `tb_history` (
  `id` int(11) NOT NULL,
  `aset_id` int(11) NOT NULL,
  `nama_aset` varchar(100) NOT NULL,
  `awal_kampus_id` int(11) NOT NULL,
  `awal_fakultas_id` int(11) NOT NULL,
  `awal_jurusan_id` int(11) NOT NULL,
  `awal_lokasi_id` int(11) NOT NULL,
  `sekarang_kampus_id` int(11) NOT NULL,
  `sekarang_fakultas_id` int(11) NOT NULL,
  `sekarang_jurusan_id` int(11) NOT NULL,
  `sekarang_lokasi_id` int(11) NOT NULL,
  `tanggal_pindah` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_history`
--

INSERT INTO `tb_history` (`id`, `aset_id`, `nama_aset`, `awal_kampus_id`, `awal_fakultas_id`, `awal_jurusan_id`, `awal_lokasi_id`, `sekarang_kampus_id`, `sekarang_fakultas_id`, `sekarang_jurusan_id`, `sekarang_lokasi_id`, `tanggal_pindah`) VALUES
(36, 35, 'kayu', 1, 14, 0, 0, 1, 2, 33, 24, '0000-00-00'),
(37, 35, 'kayu', 1, 2, 7, 26, 1, 2, 7, 26, '2017-10-28'),
(38, 13, 'kim', 1, 2, 7, 0, 1, 13, 44, 0, '2017-10-31'),
(39, 33, 'a', 1, 2, 7, 0, 1, 15, 0, 0, '0000-00-00'),
(41, 315, 'unifi lab biologi', 0, 0, 0, 0, 1, 2, 47, 0, '0000-00-00'),
(43, 369, 'unifi TU biologi', 0, 0, 0, 0, 1, 2, 47, 32, '0000-00-00'),
(44, 354, 'unifi perpus teknik Bukit', 0, 0, 0, 0, 1, 22, 48, 33, '0000-00-00'),
(50, 225, 'mikrotik R 33 dan 34 ekonomi gedung BI lt 3', 0, 0, 0, 0, 2, 24, 52, 35, '0000-00-00'),
(51, 290, 'unifi ekonomi lt1 (lobby)', 0, 0, 0, 0, 2, 24, 53, 36, '0000-00-00'),
(52, 291, 'unifi ekonomi lt2 (perpustakaan)', 0, 0, 0, 0, 2, 24, 53, 37, '0000-00-00'),
(53, 289, 'unifi ekonomi lt 4 (kelas)', 0, 0, 0, 0, 2, 24, 53, 38, '0000-00-00'),
(54, 251, 'Switch Cisco SF302-08P 8 port', 0, 0, 0, 0, 1, 2, 33, 39, '0000-00-00'),
(55, 293, 'unifi fisika office', 0, 0, 0, 0, 1, 2, 55, 0, '0000-00-00'),
(56, 316, 'unifi lab fisika', 0, 0, 0, 0, 1, 2, 55, 41, '0000-00-00'),
(57, 297, 'unifi fkh lt 2', 0, 0, 0, 0, 2, 26, 56, 0, '0000-00-00'),
(58, 298, 'unifi fkh lt 3', 0, 0, 0, 0, 2, 26, 58, 0, '0000-00-00'),
(59, 299, 'unifi fkh lt 4', 0, 0, 0, 0, 2, 26, 58, 0, '0000-00-00'),
(60, 298, 'unifi fkh lt 3', 2, 26, 58, 0, 2, 26, 57, 0, '0000-00-00'),
(62, 131, 'access point Gd HF lt 1 hukum', 0, 0, 0, 0, 1, 29, 59, 42, '0000-00-00'),
(63, 132, 'Access Point Gd HG Lt 1', 0, 0, 0, 0, 1, 29, 59, 43, '0000-00-00'),
(64, 125, 'access point G HH lt 2', 0, 0, 0, 0, 1, 29, 59, 44, '0000-00-00'),
(67, 306, 'unifi Gedung Maematika Lt.2', 0, 0, 0, 0, 1, 2, 62, 0, '0000-00-00'),
(68, 350, 'unifi pasca lt 1 (lobby)', 0, 0, 0, 0, 2, 32, 64, 0, '0000-00-00'),
(69, 349, 'unifi pasca ground (lobby)', 0, 0, 0, 0, 2, 32, 63, 0, '0000-00-00'),
(70, 256, 'switch PASCA Lt.2', 0, 0, 0, 0, 2, 32, 65, 0, '0000-00-00'),
(71, 351, 'unifi pasca lt 2 (lobby)&gt;;&gt;;s3 Ilmu Teknik', 0, 0, 0, 0, 2, 32, 65, 0, '0000-00-00'),
(72, 361, 'unifi S2 Elektro 2', 0, 0, 0, 0, 2, 32, 65, 49, '0000-00-00'),
(73, 360, 'unifi S2 Elektro 1', 0, 0, 0, 0, 2, 32, 65, 49, '0000-00-00'),
(74, 257, 'switch perpus sudirman', 0, 0, 0, 0, 2, 33, 0, 0, '0000-00-00'),
(75, 252, 'Switch Dekanat Peternakan', 0, 0, 0, 0, 1, 36, 70, 54, '0000-00-00'),
(76, 228, 'Mikrotik Rumah Tangga', 0, 0, 0, 0, 1, 38, 0, 0, '0000-00-00'),
(77, 126, 'Access Point Gd BIPAS Room A', 0, 0, 0, 0, 1, 40, 72, 59, '0000-00-00'),
(79, 127, 'Access Point Gd CIP Lobby', 0, 0, 0, 0, 1, 40, 73, 61, '0000-00-00'),
(80, 134, 'access point office cip', 0, 0, 0, 0, 1, 40, 73, 62, '0000-00-00'),
(81, 128, 'Access Point Gd GoBali Lt 1', 0, 0, 0, 0, 1, 40, 74, 63, '0000-00-00'),
(82, 129, 'Access Point Gd GOBALI Lt 2', 0, 0, 0, 0, 1, 40, 74, 64, '0000-00-00'),
(83, 130, 'Access Point Gd HD Lt 1', 0, 0, 0, 0, 1, 40, 75, 65, '0000-00-00'),
(84, 133, 'Access Point Lobby IBSN', 0, 0, 0, 0, 1, 40, 76, 66, '0000-00-00'),
(85, 135, 'Access Point Office IBSN', 0, 0, 0, 0, 1, 40, 76, 67, '0000-00-00'),
(86, 379, 'tes', 1, 2, 0, 0, 1, 28, 0, 0, '2017-11-05'),
(87, 379, 'tes', 1, 28, 0, 0, 1, 22, 48, 33, '0000-00-00'),
(88, 379, 'tes', 1, 22, 48, 33, 2, 20, 45, 27, '2017-11-30'),
(89, 378, 'Wallmount Rack', 1, 18, 0, 0, 1, 17, 0, 0, '0000-00-00'),
(90, 378, 'Wallmount Rack', 1, 17, 0, 0, 1, 18, 0, 0, '0000-00-00'),
(91, 380, 'tes', 1, 2, 7, 26, 2, 31, 60, 45, '2018-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jurusan`
--

CREATE TABLE `tb_jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `kampus_id` int(11) NOT NULL,
  `fakultas_id` int(11) NOT NULL,
  `nama_jurusan` varchar(100) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jurusan`
--

INSERT INTO `tb_jurusan` (`id_jurusan`, `kampus_id`, `fakultas_id`, `nama_jurusan`, `lat`, `lng`) VALUES
(7, 1, 2, 'Ilmu Komputer', -8.792532, 115.178329),
(33, 1, 2, 'Farmasi', 0.000000, 0.000000),
(44, 1, 13, 'ilmu komunikasi', 0.000000, 0.000000),
(45, 2, 20, 'Lab Bersama', 0.000000, 0.000000),
(46, 2, 21, 'Aula Teknik Sudirman', 0.000000, 0.000000),
(47, 1, 2, 'Biologi', 0.000000, 0.000000),
(48, 1, 22, 'Dekanat Teknik', 0.000000, 0.000000),
(49, 1, 23, 'Gd GJ', 0.000000, 0.000000),
(50, 1, 23, 'Gd IA', 0.000000, 0.000000),
(51, 2, 24, 'Aula Ekonomi Lt 4', 0.000000, 0.000000),
(52, 2, 24, 'Gd BI', 0.000000, 0.000000),
(53, 2, 24, 'Gd BJ', 0.000000, 0.000000),
(54, 1, 22, 'Elektro-Bukit', 0.000000, 0.000000),
(55, 1, 2, 'Fisika', 0.000000, 0.000000),
(56, 2, 26, 'FKH Lt 2 (ruang TU)', 0.000000, 0.000000),
(57, 2, 26, 'FKH Lt 3 (Lorong)', 0.000000, 0.000000),
(58, 2, 26, 'FKH Lt 4 (Lorong)', 0.000000, 0.000000),
(59, 1, 29, 'Hukum', 0.000000, 0.000000),
(60, 2, 31, 'IKM', 0.000000, 0.000000),
(61, 1, 2, 'Kimia', 0.000000, 0.000000),
(62, 1, 2, 'Matematika', 0.000000, 0.000000),
(63, 2, 32, 'Ground', 0.000000, 0.000000),
(64, 2, 32, 'Lt 1', 0.000000, 0.000000),
(65, 2, 32, 'lt 2', 0.000000, 0.000000),
(66, 2, 32, 'Lt 3', 0.000000, 0.000000),
(67, 1, 35, 'Dekanat', 0.000000, 0.000000),
(68, 1, 35, 'Gd BB', 0.000000, 0.000000),
(69, 1, 35, 'Gd  BI', 0.000000, 0.000000),
(70, 1, 36, 'Peternakan', 0.000000, 0.000000),
(71, 1, 39, 'Lt 1', 0.000000, 0.000000),
(72, 1, 40, 'Bipas', 0.000000, 0.000000),
(73, 1, 40, 'Gd CIP', 0.000000, 0.000000),
(74, 1, 40, 'Gd GOBali', 0.000000, 0.000000),
(75, 1, 40, 'Gd HD', 0.000000, 0.000000),
(76, 1, 40, 'Gd IBSN', 0.000000, 0.000000),
(77, 2, 41, 'Lt 2', 0.000000, 0.000000),
(78, 2, 41, 'Lt 3', 0.000000, 0.000000),
(79, 2, 41, 'Lt 4', 0.000000, 0.000000),
(80, 1, 22, 'Teknik Sipil', 0.000000, 0.000000),
(81, 1, 22, 'Teknologi Informasi', 0.000000, 0.000000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kampus`
--

CREATE TABLE `tb_kampus` (
  `id_kampus` int(11) NOT NULL,
  `nama_kampus` varchar(100) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kampus`
--

INSERT INTO `tb_kampus` (`id_kampus`, `nama_kampus`, `lat`, `lng`) VALUES
(1, 'Kampus Bukit', -8.798197, 115.172089),
(2, 'Kampus Sudirman', -8.672883, 115.218750);

-- --------------------------------------------------------

--
-- Table structure for table `tb_lokasi`
--

CREATE TABLE `tb_lokasi` (
  `id_lokasi` int(11) NOT NULL,
  `kampus_id` int(11) NOT NULL,
  `fakultas_id` int(11) NOT NULL,
  `jurusan_id` int(11) NOT NULL,
  `nama_lokasi` varchar(100) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_lokasi`
--

INSERT INTO `tb_lokasi` (`id_lokasi`, `kampus_id`, `fakultas_id`, `jurusan_id`, `nama_lokasi`, `lat`, `lng`) VALUES
(25, 1, 14, 34, 'bc22', 0.000000, 0.000000),
(26, 1, 2, 7, 'gedung BC', 0.000000, 0.000000),
(27, 2, 20, 45, 'Lt 1', 0.000000, 0.000000),
(28, 2, 20, 45, 'Lt 2', 0.000000, 0.000000),
(29, 2, 20, 45, 'Lt 3', 0.000000, 0.000000),
(30, 2, 20, 45, 'Lt 4', 0.000000, 0.000000),
(31, 1, 2, 47, 'Gd FE', 0.000000, 0.000000),
(32, 1, 2, 47, 'Gd FF', 0.000000, 0.000000),
(33, 1, 22, 48, 'Perpus Teknik Bukit Undagigraha Lt.2', 0.000000, 0.000000),
(34, 2, 24, 52, 'R 31  lt 3', 0.000000, 0.000000),
(35, 2, 24, 52, 'R 33 dan 34  lt 3', 0.000000, 0.000000),
(36, 2, 24, 53, 'lt 1', 0.000000, 0.000000),
(37, 2, 24, 53, 'lt 2 Perpustakaan', 0.000000, 0.000000),
(38, 2, 24, 53, 'lt 4 Ruang kelas', 0.000000, 0.000000),
(39, 1, 2, 33, 'Gd AF lt 2', 0.000000, 0.000000),
(40, 1, 2, 33, 'Gd AF lt 1', 0.000000, 0.000000),
(41, 1, 2, 55, 'Gd FK', 0.000000, 0.000000),
(42, 1, 29, 59, 'Gd HF Lt 1', 0.000000, 0.000000),
(43, 1, 29, 59, 'Gd HG Lt 1', 0.000000, 0.000000),
(44, 1, 29, 59, 'Gd HH Lt 2', 0.000000, 0.000000),
(45, 2, 31, 60, 'Lt 1', 0.000000, 0.000000),
(46, 2, 31, 60, 'Lt 3', 0.000000, 0.000000),
(47, 1, 2, 7, 'Gd BC lt 2', 0.000000, 0.000000),
(48, 1, 2, 7, 'Gd BD lt 1', 0.000000, 0.000000),
(49, 2, 32, 65, 'S2 Elektro', 0.000000, 0.000000),
(50, 1, 35, 67, 'Gd BA LT.1', 0.000000, 0.000000),
(51, 1, 35, 67, 'Gd BA LT.2', 0.000000, 0.000000),
(52, 1, 35, 68, 'Lt 2', 0.000000, 0.000000),
(53, 1, 35, 69, 'Lt 1', 0.000000, 0.000000),
(54, 1, 36, 70, 'gd AA Lt 1', 0.000000, 0.000000),
(55, 1, 36, 70, 'gd AA Lt 2 Dekanat', 0.000000, 0.000000),
(56, 1, 36, 70, 'gd AE Lt 1', 0.000000, 0.000000),
(57, 1, 36, 70, 'gd AE Lt 2', 0.000000, 0.000000),
(58, 1, 36, 70, 'gd AG Lt 1', 0.000000, 0.000000),
(59, 1, 40, 72, 'Lt 1 Room A', 0.000000, 0.000000),
(60, 1, 40, 72, 'Lt 1 Room B', 0.000000, 0.000000),
(61, 1, 40, 73, 'Lt 1 Lobby', 0.000000, 0.000000),
(62, 1, 40, 73, 'Lt 1 Office', 0.000000, 0.000000),
(63, 1, 40, 74, 'Lt 1 ', 0.000000, 0.000000),
(64, 1, 40, 74, 'Lt 2', 0.000000, 0.000000),
(65, 1, 40, 75, 'Lt 1', 0.000000, 0.000000),
(66, 1, 40, 76, 'Lobby', 0.000000, 0.000000),
(67, 1, 40, 76, 'Office', 0.000000, 0.000000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `aktif` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `fullname`, `password`, `email`, `phone`, `lokasi`, `aktif`) VALUES
(1, 'kim', 'kim arya', 'fb1eaf2bd9f2a7013602be235c305e7a', 'aryana@gmail.com', '081212122', 'USDI', 'ya');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_aset`
--
ALTER TABLE `tb_aset`
  ADD PRIMARY KEY (`id_aset`);

--
-- Indexes for table `tb_aset1`
--
ALTER TABLE `tb_aset1`
  ADD PRIMARY KEY (`id_aset`);

--
-- Indexes for table `tb_fakultas`
--
ALTER TABLE `tb_fakultas`
  ADD PRIMARY KEY (`id_fakultas`);

--
-- Indexes for table `tb_history`
--
ALTER TABLE `tb_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `tb_kampus`
--
ALTER TABLE `tb_kampus`
  ADD PRIMARY KEY (`id_kampus`);

--
-- Indexes for table `tb_lokasi`
--
ALTER TABLE `tb_lokasi`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_aset`
--
ALTER TABLE `tb_aset`
  MODIFY `id_aset` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=379;
--
-- AUTO_INCREMENT for table `tb_aset1`
--
ALTER TABLE `tb_aset1`
  MODIFY `id_aset` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `tb_fakultas`
--
ALTER TABLE `tb_fakultas`
  MODIFY `id_fakultas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `tb_history`
--
ALTER TABLE `tb_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;
--
-- AUTO_INCREMENT for table `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
--
-- AUTO_INCREMENT for table `tb_kampus`
--
ALTER TABLE `tb_kampus`
  MODIFY `id_kampus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_lokasi`
--
ALTER TABLE `tb_lokasi`
  MODIFY `id_lokasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
