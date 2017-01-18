-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Erstellungszeit: 14. Dez 2016 um 02:13
-- Server-Version: 5.6.33
-- PHP-Version: 7.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Datenbank: `projekt_umfrage`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `umfrage`
--

CREATE TABLE `umfrage` (
  `frage` varchar(100) NOT NULL,
  `antwort1` varchar(100) NOT NULL,
  `img1` varchar(100) NOT NULL,
  `clicks1` int(5) NOT NULL,
  `antwort2` varchar(100) NOT NULL,
  `img2` varchar(100) NOT NULL,
  `clicks2` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `umfrage`
--

INSERT INTO `umfrage` (`frage`, `antwort1`, `img1`, `clicks1`, `antwort2`, `img2`, `clicks2`) VALUES
('Ei oder Huhn?', 'Ei', 'ei.jpg', 1, 'Huhn', 'huhn.jpg', 2);
