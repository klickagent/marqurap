-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 19. Okt 2013 um 15:22
-- Server Version: 5.5.32
-- PHP-Version: 5.3.10-1ubuntu3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `task`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tasks`
--

CREATE TABLE IF NOT EXISTS `tasks` (
  `pkey` int(11) NOT NULL AUTO_INCREMENT,
  `titel` varchar(150) CHARACTER SET latin1 COLLATE latin1_german1_ci NOT NULL,
  `content` varchar(20000) CHARACTER SET latin1 COLLATE latin1_german1_ci NOT NULL,
  `date` date NOT NULL,
  `prio` int(11) NOT NULL,
  `solved` tinyint(1) NOT NULL,
  PRIMARY KEY (`pkey`),
  KEY `index` (`pkey`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Daten für Tabelle `tasks`
--

INSERT INTO `tasks` (`pkey`, `titel`, `content`, `date`, `prio`, `solved`) VALUES
(9, 'Hallo', 'Velo', '0000-00-00', 2, 0),
(10, 'Velo Fahren', 'Bald', '0000-00-00', 1, 0),
(11, 'Trompete Spielen', 'Irgendwann', '0000-00-00', 1, 0),
(12, 'Hunde Fuettern Gehen', 'Und allerlei colle sachen machen', '0000-00-00', 1, 0),
(13, 'In den Topf scheissen', 'Sas geht so:\r\na) einen Topf besorgen\r\nb) einen draufsitezn\r\nc) truuuuckeeee!', '0000-00-00', 4, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
