-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Stř 09. čen 2021, 10:46
-- Verze serveru: 10.4.19-MariaDB
-- Verze PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `zkouskadb`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `tabulka`
--

CREATE TABLE `tabulka` (
  `id` int(11) NOT NULL,
  `krestni` varchar(50) COLLATE utf8mb4_czech_ci NOT NULL,
  `prijmeni` varchar(50) COLLATE utf8mb4_czech_ci NOT NULL,
  `prezdivka` varchar(50) COLLATE utf8mb4_czech_ci NOT NULL,
  `heslo` varchar(10) COLLATE utf8mb4_czech_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_czech_ci;

--
-- Vypisuji data pro tabulku `tabulka`
--

INSERT INTO `tabulka` (`id`, `krestni`, `prijmeni`, `prezdivka`, `heslo`) VALUES
(1, 'Tomas', 'Sterba', 'Nyron', '123456'),
(2, 'Honza', 'Skopal', 'Agillar', '123456'),
(3, 'Pepa', 'Zdepa', 'Pepik', '123456');

--
-- Indexy pro exportované tabulky
--

--
-- Indexy pro tabulku `tabulka`
--
ALTER TABLE `tabulka`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `tabulka`
--
ALTER TABLE `tabulka`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
