-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 06 Mei 2018 pada 06.14
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
-- Struktur dari tabel `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id_menu` int(11) NOT NULL AUTO_INCREMENT,
  `nama_menu` varchar(30) NOT NULL,
  `kategori` int(8) NOT NULL,
  `harga` varchar(10) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `id_pesan` int(11) NOT NULL,
  PRIMARY KEY (`id_menu`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id_menu`, `nama_menu`, `kategori`, `harga`, `jumlah`, `id_pesan`) VALUES
(1, 'Burger', 0, '', 1, 0),
(2, 'Burger', 0, '', 3, 0),
(3, 'Burger', 0, '', 2, 0),
(4, 'Burger', 0, '', 1, 0),
(5, 'Burger', 0, '', 3, 0),
(6, 'Roti Bakar Telur Sosis keju', 0, '', 5, 0),
(7, 'Burger', 0, '', 3, 0),
(8, 'Roti Bakar Telur Sosis keju', 0, '', 2, 0),
(9, 'Burger', 0, '', 555, 0),
(10, 'Pisang Bakar Milo', 0, '', 23, 0),
(11, 'Burger', 0, '', 5, 0),
(12, 'Mie Goreng', 0, '', 7, 0),
(13, 'Indomie Goreng', 0, '', 787, 0),
(14, 'Pisang Bakar Keju', 0, '', 565, 0),
(15, 'Mie Goreng', 0, '', 5, -1),
(16, 'Nugget', 0, '', 7, -1),
(17, 'Mie Goreng', 0, '', 5, 0),
(18, 'Mie Goreng', 0, '', 5, 28),
(19, 'Mie Goreng', 0, '', 5, 28);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
