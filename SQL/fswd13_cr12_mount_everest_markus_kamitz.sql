-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Erstellungszeit: 28. Aug 2021 um 15:57
-- Server-Version: 10.4.20-MariaDB
-- PHP-Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `fswd13_cr12_mount_everest_markus_kamitz`
--
CREATE DATABASE IF NOT EXISTS `fswd13_cr12_mount_everest_markus_kamitz` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `fswd13_cr12_mount_everest_markus_kamitz`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `destinations`
--

CREATE TABLE `destinations` (
  `id` int(11) NOT NULL,
  `locationName` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `price` varchar(100) NOT NULL,
  `description` varchar(256) NOT NULL,
  `longitude` varchar(256) NOT NULL,
  `latitude` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `destinations`
--

INSERT INTO `destinations` (`id`, `locationName`, `image`, `price`, `description`, `longitude`, `latitude`) VALUES
(5, 'Havanna Cuba', 'https://cdn.pixabay.com/photo/2020/12/06/19/56/sunset-5809870_960_720.jpg', '750 €', 'very nice climate', '-82.3858857169267', '23.128316454590173'),
(7, 'London England', 'https://cdn.pixabay.com/photo/2015/12/08/00/32/london-1081820_960_720.jpg', '1125 €', 'fancy and historical', '-0.12701054538663262', '51.5097580784187'),
(8, 'New York America', 'https://cdn.pixabay.com/photo/2016/10/28/13/09/usa-1777986_960_720.jpg', '2200 €', 'artsy and fancy', '-74.04150936676947', '40.72005158217541'),
(9, 'Sydney Australia', 'https://cdn.pixabay.com/photo/2019/07/15/08/32/australia-4338883_960_720.jpg', '2300 €', 'far away and  currently crazy', '151.21072352338163', '-33.83880214787597'),
(10, 'Rome Italy', 'https://cdn.pixabay.com/photo/2019/10/06/08/57/architecture-4529605_960_720.jpg', '750 €', 'historical and wild', '12.45427960537886', '41.90640890005556'),
(13, 'Lissabon Portugal', 'https://cdn.pixabay.com/photo/2017/07/26/23/15/lisbon-2543511_960_720.jpg', '550 €', 'very nice city good climate', '-9.139262534302125', '38.7213767328184'),
(14, 'Madrid Spain', 'https://cdn.pixabay.com/photo/2015/03/26/09/43/carousel-690166_960_720.jpg', '990 €', 'warm and welcoming', '-3.707696808203012', '40.421143676366626'),
(17, 'Tokyo Japan', 'https://cdn.pixabay.com/photo/2020/01/15/19/05/shibuyasky-4768679_960_720.jpg', '1750 €', 'fancy and modern', '139.73633093641473', '35.736228716402344'),
(18, 'Milan Italy', 'https://cdn.pixabay.com/photo/2015/04/03/20/51/milan-705878_960_720.jpg', '1111 €', 'funny and cool', '9.176014076757967', '45.48052864047341');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `destinations`
--
ALTER TABLE `destinations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `destinations`
--
ALTER TABLE `destinations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
