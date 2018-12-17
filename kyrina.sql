-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Час створення: Гру 17 2018 р., 03:06
-- Версія сервера: 10.1.31-MariaDB
-- Версія PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `kyrina`
--

-- --------------------------------------------------------

--
-- Структура таблиці `admin`
--

CREATE TABLE `admin` (
  `login` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп даних таблиці `admin`
--

INSERT INTO `admin` (`login`, `password`) VALUES
('bus', 'bus');

-- --------------------------------------------------------

--
-- Структура таблиці `bus`
--

CREATE TABLE `bus` (
  `id` int(11) NOT NULL,
  `sit_count` text NOT NULL,
  `driver` text NOT NULL,
  `mark` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп даних таблиці `bus`
--

INSERT INTO `bus` (`id`, `sit_count`, `driver`, `mark`) VALUES
(1, '55', 'SNN', 'mrk'),
(2, '10', 'SNN', 'lll'),
(3, '10', 'SNN', 'lll'),
(4, '10', 'SNN', 'lll');

-- --------------------------------------------------------

--
-- Структура таблиці `driver`
--

CREATE TABLE `driver` (
  `id` int(11) NOT NULL,
  `name_driver` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп даних таблиці `driver`
--

INSERT INTO `driver` (`id`, `name_driver`) VALUES
(1, 'SNN'),
(4, 'Ð’Ð¾Ð´Ñ–Ð¹_2');

-- --------------------------------------------------------

--
-- Структура таблиці `road`
--

CREATE TABLE `road` (
  `id` int(11) NOT NULL,
  `route` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп даних таблиці `road`
--

INSERT INTO `road` (`id`, `route`) VALUES
(1, 'Odesa- Lviv- Uzhorod- Kuiv');

-- --------------------------------------------------------

--
-- Структура таблиці `route`
--

CREATE TABLE `route` (
  `route_id` int(11) NOT NULL,
  `route` text NOT NULL,
  `departureTime` text NOT NULL,
  `arrivalTime` text NOT NULL,
  `price` int(11) NOT NULL,
  `departureDate` date NOT NULL,
  `arrivalDate` date NOT NULL,
  `bus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп даних таблиці `route`
--

INSERT INTO `route` (`route_id`, `route`, `departureTime`, `arrivalTime`, `price`, `departureDate`, `arrivalDate`, `bus`) VALUES
(1, '1-2-3-5', '11:00', '18:00', 123, '2018-11-22', '2018-11-22', 0),
(2, '2-3-5', '23:00', '06:00', 153, '2018-11-21', '2018-11-22', 0),
(3, '1-2-3', '04:25', '10:00', 75, '2018-11-22', '2018-11-22', 0);

-- --------------------------------------------------------

--
-- Структура таблиці `town`
--

CREATE TABLE `town` (
  `id_town` int(11) NOT NULL,
  `destination` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп даних таблиці `town`
--

INSERT INTO `town` (`id_town`, `destination`) VALUES
(1, 'Uzhorod'),
(2, 'Lviv'),
(3, 'Odesa'),
(5, 'Kuiv'),
(6, 'Chop');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `road`
--
ALTER TABLE `road`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`route_id`);

--
-- Індекси таблиці `town`
--
ALTER TABLE `town`
  ADD PRIMARY KEY (`id_town`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `bus`
--
ALTER TABLE `bus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблиці `driver`
--
ALTER TABLE `driver`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблиці `road`
--
ALTER TABLE `road`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблиці `route`
--
ALTER TABLE `route`
  MODIFY `route_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблиці `town`
--
ALTER TABLE `town`
  MODIFY `id_town` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
