-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 23 2018 г., 08:58
-- Версия сервера: 5.6.34
-- Версия PHP: 5.6.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `yii1`
--

-- --------------------------------------------------------

--
-- Структура таблицы `post`
--

CREATE TABLE `post` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `excerpt` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `post`
--

INSERT INTO `post` (`id`, `user_id`, `title`, `excerpt`, `text`, `keywords`, `description`, `time`) VALUES
(1, 34, 'Адаптивный дизайн сайта и основные стратегии по его внедрению', 'Адаптивный дизайн сайта — это совершенно новый подход к дизайну, который привлекает к себе все больше внимания, но, учитывая, насколько сильно он отличается от традиционных методов разработки, вначале он может показаться заоблачно сложным для начинающих в', 'asdasd', 'адаптивный дизайн', 'Адаптивный дизайн сайта и основные стратегии по его внедрению', '2018-05-14 11:44:19'),
(2, 36, 'Советы по выравниванию иконок в тексте', 'Иконки сейчас очень популярны, они дополняют контент (в большинстве случаев). Но с другой стороны они могут доставить немало хлопот. Если вы определились с форматом (SVG или шрифты-иконки?) и создали сами иконки, все равно по мере разработки будут всплыва', 'asdasdas', 'ключевики', 'мета-описание', '2018-05-14 11:44:19'),
(3, 37, 'Редко используемые селекторы JQuery', 'Селекторы в JQuery играют главенствующую роль. Большинство методов в JQuery работают только на каких-то элементах, поэтому перед их использованием необходимо выбрать какой-либо тег. К примеру, чтобы прикрепить событие click к кнопке, эту кнопку сначала не', 'asdasdas', NULL, NULL, '2018-05-14 11:44:19'),
(4, 34, 'Тестовый пост', 'lorem ipsum...', 'asdasdsa', '', '', '2018-05-14 11:44:19'),
(5, 38, 'New post', 'Short description', 'Full Description', '', '', '2018-05-14 11:44:19'),
(7, 34, 'гыуцк', 'лоаввылж', 'лоыавоыл', '', '', '2018-05-14 11:44:19'),
(8, 36, 'asa', 'asas', 'asa', '', 'asda', '2018-05-14 11:44:19'),
(9, 37, 'ad', 'sas', 'asaq', 'qwq', 'wqw', '2018-05-14 11:44:19'),
(10, 34, 'id', 'id', 'id', 'idi', 'id', '2018-05-14 11:44:19'),
(11, 36, 'aaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaa', '', '', '2018-05-14 11:44:19'),
(12, 37, 'zzzzzzzzz', 'zzzzzzzzzzzzz', 'zzzzzzzzzzzzz', 'zzzz', '', '2018-05-14 11:44:19'),
(14, 36, 'asdas', 'asd', 'asda', '', '', '2018-05-14 12:17:32'),
(15, 0, 'new', 'asdas', 'asdasd', 'as', '', '2018-05-18 05:06:38'),
(16, 0, 'aaaaaaaaaaaa', 'aaaaaaaaa', 'aaaaaaaaa', '', '', '2018-05-18 05:07:52'),
(17, 0, 'asas', 'asas', 'asas', '', '', '2018-05-18 05:11:23'),
(19, 0, 'aas', 'as', 'asa', 'as', 'as', '2018-05-18 12:50:05'),
(27, 0, 'asdasd', 'asdasd', 'asdasd', '', '', '2018-05-21 06:29:29'),
(31, 52, 'done', 'done', 'done', 'done', 'done', '0000-00-00 00:00:00'),
(32, 52, 'new', 'new', 'new', 'new', 'new', '2018-05-22 09:25:21'),
(33, 52, 'javascript', ' javascript deee', 'With this ajax function I can get response (e.g. first name, last name, age, country, city etc..) as html output without popup box. But How do I place this result to each field on the form?', 'javascript', '', '2018-05-22 11:16:26'),
(34, 52, 'My day', 'vaxxaxa', 'yeap ', 'nope', 'nope', '2018-05-22 12:59:48');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `username`, `password`, `role`) VALUES
(29, 'dd', 'ddd', 'dfdf', '$2y$13$lKiqy16hfRT.eP7DcrlJpOOOFHm5JlsZXTFK4Sba/q5dAMoija/MK', 'user'),
(30, 'dd', 'ddd', 'dfdf333', '$2y$13$LZNtTnrCg0nYO9GJKixiNunfcL7gDUnzVccJ8Bi8YRj1MNW/J/5nS', 'user'),
(31, 'gayrat', 'burxonov', 'gayrat', '$2y$13$RJxHHdD8cuE2QUWssS0bVO8BkDB0p3ATYTqLhGmZPXOL6.FK2EzCW', 'user'),
(32, 'aaaaaaaaaa', 'aaaaaaaaaa', 'aaaaaaaa', '$2y$13$HRk/hvive8FQv7Y8Sp.04OLoenQr6ZDD50zOyGP9llxcj4zzb2UbK', 'user'),
(33, 'a@a.a', 'asdas', 'a@a.a', '$2y$13$3DkXw7eBzsl6sPMfGyevUuq217H8vQ6Q2j.UdU1SQVrbP6Lz1sHrC', 'user'),
(34, 'G\'ayrat', 'Burkhanov', 'hurry@gmail.com', '$2y$13$Y3XFkplkYQ8NkIUhHqtase1pKJ291HZ4PUnG0ij6.Gfad/8D91UhS', 'user'),
(35, 'asdas', 'asdas', 'asdas', '$2y$13$k7QMVr1rtOUMNCI0MtafkO5gmpYe7k2OGnhxWtXYAgghJ2gIbQTDm', 'user'),
(38, 'Harry', 'Potteraaa', 'harry', '$2y$13$zt130UHbixtn./uAWAseluR3lFjDe8EVI9xzKn2crAnJt1K8zE7Pe', 'user'),
(41, 'asas', 'asas', 'asa', '0cc175b9c0f1b6a831c399e269772661', 'user'),
(42, '1z', '1z', '1z', '8775ce1c0dd8f08f50951700f81636e7', 'user'),
(43, 'vcbc', 'vbcvb', 'cvbc', '$2y$13$hCvc.XsjVMRUjIABoAZj1OJ1HnccVKXyai59gFU7WX0qREtCbN.je', 'user'),
(44, '11111', '11111111', '111111', '$2y$13$xqEwHD2IrexG59T4TMNdGeWrnSNtVVWe41WAeV/0/kCKgQBbwzYyK', 'user'),
(45, 'aaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaa', 'aaaaaaaaaaa', 'aaaaaaaaaa', 'user'),
(52, '8s', '8asaaas', '1', 'c4ca4238a0b923820dcc509a6f75849b', 'user'),
(55, 'New', 'Person', 'Blog', 'c81e728d9d4c2f636f067f89cc14862c', 'user');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `post`
--
ALTER TABLE `post`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
