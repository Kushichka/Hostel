-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Май 29 2021 г., 00:24
-- Версия сервера: 10.4.19-MariaDB
-- Версия PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `hostel`
--

-- --------------------------------------------------------

--
-- Структура таблицы `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `roomID` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `reservation`
--

INSERT INTO `reservation` (`id`, `username`, `roomID`) VALUES
(4, 'kushichka@gmail.com', '17'),
(8, 'kushichka@gmail.com', '4');

-- --------------------------------------------------------

--
-- Структура таблицы `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `city` varchar(32) NOT NULL,
  `type` int(1) NOT NULL,
  `status` varchar(32) NOT NULL,
  `imgID` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `room`
--

INSERT INTO `room` (`id`, `city`, `type`, `status`, `imgID`) VALUES
(1, 'Gdansk', 1, '1', 1),
(2, 'Gdansk', 1, '1', 2),
(3, 'Gdansk', 2, '0', 3),
(4, 'Gdansk', 2, '1', 4),
(5, 'Gdansk', 3, '0', 5),
(6, 'Gdansk', 3, '1', 6),
(7, 'London', 1, '1', 1),
(8, 'London', 1, '1', 2),
(9, 'London', 2, '0', 3),
(10, 'London', 2, '1', 4),
(11, 'London', 3, '1', 5),
(12, 'London', 3, '0', 6),
(13, 'Paris', 1, '0', 1),
(14, 'Paris', 1, '0', 2),
(15, 'Paris', 2, '1', 3),
(16, 'Paris', 2, '0', 4),
(17, 'Paris', 3, '1', 5),
(18, 'Paris', 3, '0', 6);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstName` varchar(32) NOT NULL,
  `secondName` varchar(32) NOT NULL,
  `email` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `firstName`, `secondName`, `email`, `password`) VALUES
(1, 'Viktor', 'Dariienko', 'kushichka@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$UkguL2Ezck51OTRZaWpPdQ$UffWseM/U4vow+Uo/XoLHMYCHmiZIljnM+f5HSZo0/U'),
(22, 'Oksana', 'Popovych', 'satinewood@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$R0dxazZLR0d5L3RpeUthOA$OATUhOYxwYlSnaptcnk5wXskfwz+E1s1k76QLM3wGM4');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
