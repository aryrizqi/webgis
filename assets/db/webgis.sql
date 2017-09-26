-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 28 Jul 2017 pada 12.37
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `webgis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kota`
--

CREATE TABLE IF NOT EXISTS `kota` (
`id` int(11) NOT NULL,
  `kd_kota` varchar(50) NOT NULL,
  `nm_kota` varchar(100) NOT NULL,
  `wilayah` enum('WIB','WITA','WIT') NOT NULL,
  `lintang` varchar(100) NOT NULL,
  `bujur` varchar(100) NOT NULL,
  `waktu` varchar(50) NOT NULL,
  `tipe_pasut` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=102 ;

--
-- Dumping data untuk tabel `kota`
--

INSERT INTO `kota` (`id`, `kd_kota`, `nm_kota`, `wilayah`, `lintang`, `bujur`, `waktu`, `tipe_pasut`) VALUES
(2, 'K0722-0001', 'SABANG', 'WIB', '05° 52'' 54 U ( N )', '95° 19'' 18 T ( E )', 'GMT+7', 'Harian Ganda'),
(3, 'K0722-0002', 'MALAHAYATI', 'WIB', '05° 35'' 50.26" U ( N )', '95° 31'' 32.45" T ( E )', 'GMT+7', 'Harian Ganda'),
(4, 'K0722-0003', 'MEULABOH', 'WIB', '04° 07'' 38.39" U ( N )', '96° 07'' 54.44" T ( E )', 'GMT+7', 'Campuran Condong ke Harian Ganda'),
(5, 'K0722-0004', 'SIMEULUE', 'WIB', '02° 29'' 17" U ( N )', '96° 22'' 09" T ( E )', 'GMT+7', 'Campuran Condong ke Harian Ganda'),
(6, 'K0722-0005', 'LHOKSEUMAWE', 'WIB', '05° 13'' 18" U ( N )', '97° 06'' 06" T ( E )', 'GMT+7', 'Harian Ganda'),
(7, 'K0722-0006', 'GUNUNG SITOLI', 'WIB', '01° 18'' 33" U ( N )', '97° 36'' 40" T ( E )', 'GMT+7', 'Campuran Condong ke Harian Ganda'),
(8, 'K0722-0007', 'PANGKALANSUSU', 'WIB', '04° 07'' 14" U ( N )', '98° 12'' 30" T ( E )', 'GMT+7', 'Harian Ganda'),
(9, 'K0722-0008', 'BELAWAN', 'WIB', '03° 47'' 08" U ( N )', '98° 42'' 57" T ( E )', 'GMT+7', 'Harian Ganda'),
(10, 'K0722-0009', 'SIBOLGA', 'WIB', '01° 43'' 20" U ( N )', '98° 47'' 08" T ( E )', 'GMT+7', 'Campuran Condong ke Harian Ganda'),
(11, 'K0722-0010', 'SIBERUT', 'WIB', '01° 35'' 50" U ( N )', '99° 12'' 37" T ( E )', 'GMT+7', 'Campuran Condong ke Harian Ganda'),
(12, 'K0722-0011', 'KUALATANJUNG', 'WIB', '03° 21'' 27" U ( N )', '99° 27'' 13" T ( E )', 'GMT+7', 'Harian Ganda'),
(13, 'K0722-0012', 'MUARA SUNGAI ASAHAN', 'WIB', '03° 01'' 06" U ( N )', '99° 51'' 38" T ( E )', 'GMT+7', 'Harian Ganda'),
(14, 'K0722-0013', 'TELUK BAYUR', 'WIB', '01° 00'' 05.84" U ( S )', '100° 22'' 21.65" T ( E )', 'GMT+7', 'Campuran Condong ke Harian Ganda'),
(15, 'K0722-0014', 'BAGANSIAPIAPI', 'WIB', '02° 09'' 34.24" U ( N )', '100° 46'' 43.53" T ( E )', 'GMT+7', 'Harian Ganda'),
(16, 'K0722-0015', 'DUMAI', 'WIB', '01° 41'' 14" U ( N )', '101° 26'' 54" T ( E )', 'GMT+7', 'Harian Ganda'),
(17, 'K0722-0016', 'SUNGAI PAKNING', 'WIB', '01° 20'' 55.22" U ( N )', '102° 09'' 32.76" T ( E )', 'GMT+7', 'Campuran Condong ke Harian Ganda'),
(18, 'K0722-0017', 'PULAU BAAI BENGKULU', 'WIB', '03° 54'' 23" S ( S )', '102° 18'' 16" T ( E )', 'GMT+7', 'Campuran Condong ke Harian Ganda'),
(19, 'K0722-0018', 'MUARA SUNGAI KAMPAR', 'WIB', '00° 31'' 58" U ( N )', '103° 17'' 50" T ( E )', 'GMT+7', 'Campuran Condong ke Harian Ganda'),
(20, 'K0722-0019', 'TANJUNGBALAI KARIMUN', 'WIB', '00° 59'' 17.76" U ( N )', '103° 26'' 05.97" T ( E )', 'GMT+7', 'Campuran Condong ke Harian Ganda'),
(21, 'K0722-0020', 'MUARA SUNGAI INDRAGIRI', 'WIB', '00° 23'' 11" S ( S )', '103° 31'' 50" T ( E )', 'GMT+7', 'Campuran Condong ke Harian Ganda'),
(22, 'K0722-0021', 'MUARA SABAK', 'WIB', '01° 07'' 41.86" S ( S )', '103° 51'' 01.11" T ( E )', 'GMT+7', 'Campuran Condong ke Harian Ganda'),
(23, 'K0722-0022', 'BATUAMPAR', 'WIB', '01° 09'' 54.11" U ( N )', '104° 00'' 07.42" T ( E )', 'GMT+7', 'Campuran Condong ke Harian Ganda'),
(24, 'K0722-0023', 'TANJUNGUBAN', 'WIB', '01° 03'' 17.85" U ( N )', '104° 13'' 28.18" T ( E )', 'GMT+7', 'Campuran Condong ke Harian Ganda'),
(25, 'K0722-0024', 'TANJUNGPINANG', 'WIB', '00° 55'' 50.87" U ( N )', '104° 26'' 21.80" T ( E )', 'GMT+7', 'Campuran Condong ke Harian Ganda'),
(26, 'K0722-0025', 'DABOSINGKEP', 'WIB', '00° 30'' 10.03" S ( S )', '104° 34'' 06.85" T ( E )', 'GMT+7', 'Harian Tunggal'),
(27, 'K0722-0026', 'MUARA SUNGAI MUSI', 'WIB', '02° 19'' 42.44" S ( S )', '104° 54'' 48.3" T ( E )', 'GMT+7', 'Harian Tunggal'),
(28, 'K0722-0027', 'PANJANG LAMPUNG', 'WIB', '05° 29'' 30" S ( S )', '105° 19'' 27" T ( E )', 'GMT+7', 'Campuran Condong ke Harian Ganda'),
(29, 'K0722-0028', 'CIWANDAN', 'WIB', '06° 01'' 07" S ( S )', '105° 57'' 05" T ( E )', 'GMT+7', 'Campuran Condong ke Harian Ganda'),
(30, 'K0722-0029', 'PANGKALPINANG', 'WIB', '02° 05'' 50.48" S ( S )', '106° 07'' 45.17" T ( E )', 'GMT+7', 'Harian Tunggal'),
(31, 'K0722-0030', 'TAREMPA', 'WIB', '03° 13'' 05" U ( N )', '106° 13'' 09" T ( E )', 'GMT+7', 'Harian Tunggal'),
(32, 'K0722-0031', 'TANJUNGPRIOK', 'WIB', '06° 05'' 45" S ( S )', '106° 53'' 10" T ( E )', 'GMT+7', 'Harian Tunggal'),
(33, 'K0722-0032', 'TANJUNGPANDAN', 'WIB', '02° 44'' 39.67" S ( S )', '107° 38'' 02.77" T ( E )', 'GMT+7', 'Harian Tunggal'),
(34, 'K0722-0033', 'PENAGI (RANAI)', 'WIB', '03° 53'' 31.76" U ( N )', '108° 23'' 32.36" T ( E )', 'GMT+7', 'Campuran Condong ke Harian Tunggal'),
(35, 'K0722-0034', 'CIREBON', 'WIB', '06° 44'' 04.19" S ( S )', '108° 34'' 59.79" T ( E )', 'GMT+7', 'Campuran Condong ke Harian Ganda'),
(36, 'K0722-0035', 'CILACAP', 'WIB', '07° 45'' 00.10" S ( S )', '109° 00'' 47.89" T ( E )', 'GMT+7', 'Campuran Condong ke Harian Ganda'),
(37, 'K0722-0036', 'PONTIANAK', 'WIB', '00° 00'' 23.38" S ( S )', '109° 19'' 13.52" T ( E )', 'GMT+7', 'Campuran Condong ke Harian Tunggal'),
(38, 'K0722-0037', 'KENDAWANGAN', 'WIB', '02° 31'' 51.72" S ( S )', '110° 12'' 58.38" T ( E )', 'GMT+7', 'Campuran Condong ke Harian Tunggal'),
(39, 'K0722-0038', 'SEMARANG', 'WIB', '06° 57'' 16.20" S ( S )', '110° 25'' 19.13" T ( E )', 'GMT+7', 'Campuran Condong ke Harian Ganda'),
(40, 'K0722-0039', 'MUARA SUNGAI KOTAWARINGIN', 'WIB', '02° 55'' 15" S ( S )', '111° 23'' 15" T ( E )', 'GMT+7', 'Campuran Condong ke Harian Tunggal'),
(41, 'K0722-0040', 'TANJUNGPERAK', 'WIB', '07° 11'' 54.28" S ( S )', '112° 43'' 11.70" T ( E )', 'GMT+7', 'Campuran Condong ke Harian Ganda'),
(42, 'K0722-0041', 'ALUR PELAYARAN BARAT SURABAYA', 'WIB', '06° 55'' 45.85" S ( S )', '112° 43'' 40.86" T ( E )', 'GMT+7', 'Campuran Condong ke Harian Tunggal'),
(43, 'K0722-0042', 'TELUK SAMPIT', 'WIB', '02° 58'' 40" S ( S )', '113° 02'' 45" T ( E )', 'GMT+7', 'Campuran Condong ke Harian Tunggal'),
(44, 'K0722-0043', 'PROBOLINGGO', 'WIB', '07° 44'' 10.79" S ( S )', '113° 12'' 59.64" T ( E )', 'GMT+7', 'Harian Tunggal'),
(45, 'K0722-0044', 'KALIANGET', 'WIB', '07° 03'' 25.07" S ( S )', '113° 56'' 26.47" T ( E )', 'GMT+7', 'Campuran Condong ke Harian Ganda'),
(46, 'K0722-0045', 'TANJUNGWANGI', 'WIB', '08° 07'' 40.35" S ( S )', '114° 23'' 59.23" T ( E )', 'GMT+7', 'Campuran Condong ke Harian Ganda'),
(47, 'K0722-0046', 'MUARA SUNGAI BARITO', 'WIB', '03° 27'' 13" S ( S )', '114° 31'' 11" T ( E )', 'GMT+7', 'Campuran Condong ke Harian Tunggal'),
(48, 'K0722-0047', 'BENOA', 'WIB', '08° 44'' 40" S ( S )', '115° 12'' 38" T ( E )', 'GMT+8', 'Campuran Condong ke Harian Tunggal'),
(49, 'K0722-0048', 'LEMBAR', 'WITA', '08° 43'' 44" S ( S )', '116° 04'' 16" T ( E )', 'GMT+8', 'Campuran Condong ke Harian Ganda'),
(50, 'K0722-0049', 'KOTABARU', 'WITA', '03° 13'' 44.47" S ( S )', '116° 13'' 57.68" T ( E )', 'GMT+8', 'Campuran Condong ke Harian Ganda'),
(51, 'K0722-0050', 'BALIKPAPAN', 'WITA', '01° 16'' 23.58" S ( S )', '116° 48'' 20.31" T ( E )', 'GMT+8', 'Campuran Condong ke Harian Ganda'),
(52, 'K0722-0051', 'MUARA SUNGAI BERAU', 'WITA', '02° 10'' 10" U ( N )', '117° 29'' 30" T ( E )', 'GMT+8', 'Campuran Condong ke Harian Ganda'),
(53, 'K0722-0052', 'PULAU NUBI (MUARA SUNGAI MAHAKAM)', 'WITA', '00° 52'' 12.82" S ( S )', '117° 22'' 54.08" T ( E )', 'GMT+8', 'Campuran Condong ke Harian Ganda'),
(54, 'K0722-0053', 'TARAKAN', 'WITA', '03° 16'' 48.95" U ( N )', '117° 35'' 39.23" T ( E )', 'GMT+8', 'Harian Ganda'),
(55, 'K0722-0054', 'NUNUKAN', 'WITA', '04° 05'' 40.84" U ( N )', '117° 42'' 45.21" T ( E )', 'GMT+8', 'Campuran Condong ke Harian Ganda'),
(56, 'K0722-0055', 'TELUK SANGKULIRANG', 'WITA', '00° 54'' 43.39" U ( N )', '118° 03'' 07.78" T ( E )', 'GMT+8', 'Campuran Condong ke Harian Ganda'),
(57, 'K0722-0056', 'BIMA', 'WITA', '08° 26'' 51.88', '118° 42'' 54.10', 'GMT+8', 'Campuran Condong ke Harian Ganda'),
(58, 'K0722-0057', 'MAMUJU', 'WITA', '02° 40'' 29.74" S ( S )', '118° 52'' 03.99" T ( E )', 'GMT+8', 'Campuran Condong ke Harian Ganda'),
(59, 'K0722-0058', 'MAKASSAR', 'WITA', '05° 06'' 43.15" S ( S )', '119° 24'' 59.93" T ( E )', 'GMT+8', 'Campuran Condong ke Harian Tunggal'),
(60, 'K0722-0059', 'PAREPARE', 'WITA', '04° 00'' 51.95" S ( S )', '119° 37'' 11.15" T ( E )', 'GMT+8', 'Campuran Condong ke Harian Ganda'),
(61, 'K0722-0060', 'PANTOLAN (PALU)', 'WITA', '00° 49'' 15.65" S ( S )', '119° 48'' 40.57" T ( E )', 'GMT+8', 'Campuran Condong ke Harian Ganda'),
(62, 'K0722-0061', 'LABUHANBAJO', 'WITA', '08° 29'' 28" S ( S )', '119° 52'' 30" T ( E )', 'GMT+8', 'Campuran Condong ke Harian Ganda'),
(63, 'K0722-0062', 'WAINGAPU', 'WITA', '09° 38'' 30.97" S ( S )', '120° 15'' 37.82" T ( E )', 'GMT+8', 'Campuran Condong ke Harian Ganda'),
(64, 'K0722-0063', 'PALOPO', 'WITA', '02° 59'' 17.31" S ( S )', '120° 12'' 33.41" T ( E )', 'GMT+8', 'Campuran Condong ke Harian Ganda'),
(65, 'K0722-0064', 'POSO', 'WITA', '01° 26'' 14.60" S ( S )', '121° 06'' 00.08" T ( E )', 'GMT+8', 'Campuran Condong ke Harian Ganda'),
(66, 'K0722-0065', 'TOLITOLI', 'WITA', '01° 02'' 14.97" U ( N )', '120° 48'' 30.97" T ( E )', 'GMT+8', 'Campuran Condong ke Harian Ganda'),
(67, 'K0722-0066', 'ENDE', 'WITA', '08° 51'' 18.8" S ( S )', '121° 38'' 17.8" T ( E )', 'GMT+8', 'Campuran Condong ke Harian Ganda'),
(68, 'K0722-0067', 'MAUMERE', 'WITA', '08° 36'' 58.6" S ( S )', '122° 13'' 05.8" T ( E )', 'GMT+8', 'Campuran Condong ke Harian Ganda'),
(69, 'K0722-0068', 'KENDARI', 'WITA', '03° 58'' 26.6" S ( S )', '122° 35'' 14.2" T ( E )', 'GMT+8', 'Campuran Condong ke Harian Ganda'),
(70, 'K0722-0069', 'BAUBAU', 'WITA', '05° 27'' 17.57" S ( S )', '122° 36'' 38.96" T ( E )', 'GMT+8', 'Campuran Condong ke Harian Ganda'),
(71, 'K0722-0070', 'LUWUK', 'WITA', '00° 56'' 34.35" S ( S )', '112° 48'' 00.74" T ( E )', 'GMT+8', 'Campuran Condong ke Harian Ganda'),
(72, 'K0722-0071', 'TELUK KWANDANG', 'WITA', '00° 51'' 12" U ( N )', '122° 53'' 44" T ( E )', 'GMT+8', 'Campuran Condong ke Harian Ganda'),
(73, 'K0722-0072', 'GORONTALO', 'WITA', '00° 30'' 35.39" U ( N )', '123° 03'' 34.93" T ( E )', 'GMT+8', 'Campuran Condong ke Harian Ganda'),
(74, 'K0722-0073', 'KUPANG', 'WITA', '10° 12'' 57.99" S ( S )', '123° 31'' 21.63" T ( E )', 'GMT+8', 'Campuran Condong ke Harian Ganda'),
(75, 'K0722-0074', 'MANADO', 'WITA', '01° 29'' 42.25" U ( N )', '124° 50'' 19.22" T ( E )', 'GMT+8', 'Campuran Condong ke Harian Ganda'),
(76, 'K0722-0075', 'ATAPUPU', 'WITA', '08° 31'' 59.69" S ( S )', '125° 40'' 53.18" T ( E )', 'GMT+8', 'Campuran Condong ke Harian Ganda'),
(77, 'K0722-0076', 'BITUNG', 'WITA', '01° 26'' 10" U ( N )', '125° 12'' 00" T ( E )', 'GMT+8', 'Campuran Condong ke Harian Ganda'),
(78, 'K0722-0077', 'TAHUNA', 'WITA', '03° 36'' 25" U ( N )', '125° 30'' 09" T ( E )', 'GMT+8', 'Campuran Condong ke Harian Ganda'),
(79, 'K0722-0078', 'KALABAHI', 'WITA', '08° 13'' 16" S ( S )', '124° 30'' 57.5" T ( E )', 'GMT+8', 'Campuran Condong ke Harian Ganda'),
(80, 'K0722-0079', 'MELONGUANE', 'WITA', '03° 59'' 52" U ( N )', '126° 40'' 34" T ( E )', 'GMT+8', 'Campuran Condong ke Harian Ganda'),
(81, 'K0722-0080', 'NAMLEA P.BURU', 'WIT', '03° 16'' 09.43" S ( S )', '127° 05'' 02.10" T ( E )', 'GMT+9', 'Campuran Condong ke Harian Ganda'),
(82, 'K0722-0081', 'TERNATE', 'WIT', '00° 46'' 06" U ( N )', '127° 22'' 42" T ( E )', 'GMT+9', 'Campuran Condong ke Harian Ganda'),
(83, 'K0722-0082', 'TOBELO', 'WIT', '01° 43'' 25.70" U ( N )', '128° 00'' 55.65" T ( E )', 'GMT+9', 'Campuran Condong ke Harian Ganda'),
(84, 'K0722-0083', 'AMBON', 'WIT', '03° 40'' 10" S ( S )', '128° 10'' 45" T ( E )', 'GMT+9', 'Campuran Condong ke Harian Ganda'),
(85, 'K0722-0084', 'DARUBA P. MOROTAI', 'WIT', '02° 01'' 01.66" U ( N )', '128° 16'' 52.4" T ( E )', 'GMT+9', 'Campuran Condong ke Harian Ganda'),
(86, 'K0722-0085', 'AMAHAI', 'WIT', '03° 18'' 03.9" S ( S )', '128° 56'' 58.6" T ( E )', 'GMT+9', 'Campuran Condong ke Harian Ganda'),
(87, 'K0722-0086', 'SORONG', 'WIT', '00° 52'' 50.30" S ( S )', '131° 15'' 15.27" T ( E )', 'GMT+9', 'Campuran Condong ke Harian Ganda'),
(88, 'K0722-0087', 'SELAT LELE', 'WIT', '01° 07'' 28.42" S ( S )', '131° 13'' 36.08" T ( E )', 'GMT+9', 'Campuran Condong ke Harian Ganda'),
(89, 'K0722-0088', 'SAUMLAKI', 'WIT', '07° 58'' 48" S ( S )', '131° 17'' 25" T ( E )', 'GMT+9', 'Campuran Condong ke Harian Ganda'),
(90, 'K0722-0089', 'FAKFAK', 'WIT', '02° 55'' 49" S ( S )', '132° 18'' 34" T ( E )', 'GMT+9', 'Campuran Condong ke Harian Ganda'),
(91, 'K0722-0090', 'TUAL', 'WIT', '05° 37'' 34" S ( S )', '132° 44'' 33" T ( E )', 'GMT+9', 'Campuran Condong ke Harian Ganda'),
(92, 'K0722-0091', 'KAIMANA', 'WIT', '03° 39'' 46" S ( S )', '133° 44'' 42" T ( E )', 'GMT+9', 'Campuran Condong ke Harian Ganda'),
(93, 'K0722-0092', 'MANOKWARI', 'WIT', '00° 52'' 23" S ( S )', '133° 03'' 39" T ( E )', 'GMT+9', 'Campuran Condong ke Harian Ganda'),
(94, 'K0722-0093', 'DOBO (P. P. ARU)', 'WIT', '05° 45'' 22.90" S ( S )', '134° 14'' 18.85" T ( E )', 'GMT+9', 'Campuran Condong ke Harian Ganda'),
(95, 'K0722-0094', 'BIAK', 'WIT', '01° 10'' 39" S ( S )', '136° 03'' 21" T ( E )', 'GMT+9', 'Campuran Condong ke Harian Ganda'),
(96, 'K0722-0095', 'TIMIKA', 'WIT', '04° 48'' 56.5" S ( S )', '136° 50'' 10.5" T ( E )', 'GMT+9', 'Harian Tunggal'),
(97, 'K0722-0096', 'AGATS', 'WIT', '05° 32'' 15.66" S ( S )', '138° 07'' 59.09" T ( E )', 'GMT+9', 'Harian Tunggal'),
(98, 'K0722-0097', 'MUARA SUNGAI DIGUL', 'WIT', '07° 10'' 00" S ( S )', '138° 41'' 30" T ( E )', 'GMT+9', 'Campuran Condong ke Harian Tunggal'),
(99, 'K0722-0098', 'SELAT MULI (PANTAI SELATAN PAPUA)', 'WIT', '08° 01'' 00" S ( S )', '138° 53'' 40" T ( E )', 'GMT+9', 'Campuran Condong ke Harian Ganda'),
(100, 'K0722-0099', 'MERAUKE', 'WIT', '08° 28'' 41" S ( S )', '140° 23'' 34" T ( E )', 'GMT+9', 'Campuran Condong ke Harian Ganda'),
(101, 'K0722-0100', 'JAYAPURA', 'WIT', '02° 32'' 23" S ( S )', '140° 42'' 24" T ( E )', 'GMT+9', 'Campuran Condong ke Harian Ganda');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tinggi_meter`
--

CREATE TABLE IF NOT EXISTS `tinggi_meter` (
`id` int(11) NOT NULL,
  `kd_tinggi` varchar(50) NOT NULL,
  `kd_kota` varchar(50) NOT NULL,
  `tinggi_meter` varchar(50) NOT NULL,
  `wilayah` enum('WIB','WITA','WIT') NOT NULL,
  `nm_kota` varchar(100) NOT NULL,
  `bulan` varchar(50) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `jam` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `tinggi_meter`
--

INSERT INTO `tinggi_meter` (`id`, `kd_tinggi`, `kd_kota`, `tinggi_meter`, `wilayah`, `nm_kota`, `bulan`, `tanggal`, `jam`) VALUES
(3, 'TM0725-0001', 'K0722-0001', '1.4', 'WIB', 'SABANG', 'Januari', '1', '1'),
(4, 'TM0725-0002', 'K0722-0002', '1.5', 'WIB', 'MALAHAYATI', 'Januari', '2', '1'),
(5, 'TM0725-0003', 'K0722-0001', '1.6', 'WIB', 'SABANG', 'Januari', '3', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `kd_kota` (`kd_kota`);

--
-- Indexes for table `tinggi_meter`
--
ALTER TABLE `tinggi_meter`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `kd_tinggi` (`kd_tinggi`), ADD KEY `kd_kota` (`kd_kota`), ADD KEY `kd_kota_2` (`kd_kota`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=102;
--
-- AUTO_INCREMENT for table `tinggi_meter`
--
ALTER TABLE `tinggi_meter`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tinggi_meter`
--
ALTER TABLE `tinggi_meter`
ADD CONSTRAINT `tinggi_meter_ibfk_1` FOREIGN KEY (`kd_kota`) REFERENCES `kota` (`kd_kota`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
