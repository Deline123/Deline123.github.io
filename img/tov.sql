-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 25 2019 г., 18:58
-- Версия сервера: 5.7.26
-- Версия PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `tovari`
--

-- --------------------------------------------------------

--
-- Структура таблицы `tov`
--

DROP TABLE IF EXISTS `tov`;
CREATE TABLE IF NOT EXISTS `tov` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `opisanie` text,
  `price` decimal(10,0) NOT NULL,
  `img` varchar(20) DEFAULT NULL,
  `proizv` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tov`
--

INSERT INTO `tov` (`id`, `name`, `opisanie`, `price`, `img`, `proizv`) VALUES
(1, 'Virtuoso', 'vcdsbgnyumi,', '800', 'img/DanDave.jpg', 'UPSCC'),
(2, 'Virtuoso v2', 'mkjnhbgvfcdx', '850', NULL, 'USPCC'),
(3, 'Bicycle', 'nhbgvfcd', '100', 'img/Hype.jpg', 'UPSCC'),
(4, 'Bicycle Rider Back', 'mjunhbgvfcd', '250', NULL, 'USPCC'),
(5, 'Tally-Ho', ',mjunhbgvfcdxs', '120', NULL, 'Cardamundi'),
(6, 'NOC', 'nhbgvfcdxs', '500', 'img/NOC.jpg', 'UPSCC');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
