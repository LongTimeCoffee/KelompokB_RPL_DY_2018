-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 06 Mei 2018 pada 06.15
-- Versi Server: 5.6.14
-- Versi PHP: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `rpl`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE IF NOT EXISTS `pesan` (
  `id_pesan` int(4) NOT NULL AUTO_INCREMENT,
  `id_pelanggan` int(4) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `people` int(3) NOT NULL,
  `clientrequest` varchar(50) NOT NULL,
  PRIMARY KEY (`id_pesan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `id_pelanggan`, `date`, `time`, `people`, `clientrequest`) VALUES
(13, 0, '0000-00-00', '04:28:00', 1, ''),
(14, 10, '0000-00-00', '04:40:00', 2, 'ef'),
(15, 10, '0000-00-00', '04:59:00', 2, 'gh'),
(16, 10, '0000-00-00', '05:03:00', 2, 'gfg'),
(17, 10, '0000-00-00', '05:16:00', 2, 'hhgh'),
(18, 10, '0000-00-00', '05:19:00', 3, 'ff'),
(19, 10, '0000-00-00', '05:38:00', 3, ''),
(20, 10, '2018-05-02', '05:42:00', 2, ''),
(21, 10, '2018-05-02', '05:42:00', 2, ''),
(22, 10, '2018-05-03', '05:44:00', 1, 'hhuhu'),
(23, 10, '2018-05-03', '05:44:00', 1, 'hhuhu'),
(24, 10, '2018-05-03', '05:44:00', 1, 'hhuhu'),
(25, 10, '2018-05-24', '05:56:00', 5, 'ghhg'),
(26, 10, '2018-05-24', '05:56:00', 5, 'ghhg'),
(27, 10, '2018-05-24', '05:56:00', 5, 'ghhg'),
(28, 10, '2018-05-24', '05:56:00', 5, 'ghhg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
