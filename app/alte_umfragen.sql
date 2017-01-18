-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Erstellungszeit: 17. Jan 2017 um 00:25
-- Server-Version: 5.6.33
-- PHP-Version: 5.6.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Datenbank: `projekt_umfrage`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `alte_umfragen`
--

CREATE TABLE `alte_umfragen` (
  `frage` varchar(100) NOT NULL,
  `antwort1` varchar(100) NOT NULL,
  `img1` varchar(100) NOT NULL,
  `clicks1` int(5) NOT NULL,
  `antwort2` varchar(100) NOT NULL,
  `img2` varchar(100) NOT NULL,
  `clicks2` int(5) NOT NULL,
  `id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `alte_umfragen`
--
ALTER TABLE `alte_umfragen`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `alte_umfragen`
--
ALTER TABLE `alte_umfragen`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;