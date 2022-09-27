-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 06 sep 2022 om 09:00
-- Serverversie: 5.7.36
-- PHP-versie: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `septemberfest`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `kaartgegevens`
--

DROP TABLE IF EXISTS `kaartgegevens`;
CREATE TABLE IF NOT EXISTS `kaartgegevens` (
  `Naam` varchar(100) NOT NULL,
  `IdKaart` int(11) NOT NULL AUTO_INCREMENT,
  `Saldo` int(11) NOT NULL,
  PRIMARY KEY (`IdKaart`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `kaartgegevens`
--

INSERT INTO `kaartgegevens` (`Naam`, `IdKaart`, `Saldo`) VALUES
('Cansel', 1, 9),
('Alara', 2, 0),
('Jessie', 3, 10),
('Bushra', 6, 5),
('Jasmin', 7, 15),
('Kinga', 9, 20),
('daniel', 13, 16),
('Tutai', 12, 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
