-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 05 Jun 2018 pada 05.45
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
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE IF NOT EXISTS `pembayaran` (
  `id_pelanggan` int(11) NOT NULL,
  `id_pesan` int(4) NOT NULL,
  `total` varchar(10) NOT NULL,
  PRIMARY KEY (`id_pelanggan`,`id_pesan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id_pelanggan`, `id_pesan`, `total`) VALUES
(27, 107, '44000'),
(27, 108, '30000'),
(27, 109, '50000'),
(27, 110, '43000'),
(27, 111, '24000'),
(27, 112, '65000'),
(27, 113, '60000'),
(27, 114, '30000'),
(27, 116, '24000'),
(27, 121, '20000'),
(27, 125, '46000'),
(32, 115, '34000'),
(32, 118, '20000'),
(32, 119, '20000'),
(32, 120, '50000'),
(33, 123, '30000'),
(33, 124, '20000'),
(33, 126, '16000'),
(33, 127, '30000'),
(36, 130, '40000');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
