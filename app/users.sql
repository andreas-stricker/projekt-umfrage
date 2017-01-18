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
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `salt` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `password`, `salt`) VALUES
(8, 'Clemens', '492de30007334144367e45f31cfa8f649146547d', '1481475286'),
(9, 'Clemens', '3d4b6cd98faf735f9118927f8c903744e0bf216e', '1481475343'),
(10, 'Richard', '8343d71c0018c1183172a06133c2e7338eb11df4', '1481475357'),
(11, 'Thomas', 'e9a094cd725e263a8bc15e50c958075934d9ca3e', '1481475401'),
(12, 'Michael', '6c4fb11edcad64217ce9a5cb9f0a09171a3e76f5', '1481475430'),
(13, 'Tim', '8459d634e3b6485607d3ab9372ed395b7974593c', '1481475508'),
(14, 'admin', '379e83b82dba918b2f4d9568517ea8c2f8beb398', '1484593898');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;