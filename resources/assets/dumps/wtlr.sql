-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 15 2018 г., 02:56
-- Версия сервера: 5.6.34
-- Версия PHP: 7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `wtlr`
--
CREATE DATABASE IF NOT EXISTS `wtlr` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `wtlr`;

-- --------------------------------------------------------

--
-- Структура таблицы `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `image` text,
  `body` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `blog`
--

INSERT INTO `blog` (`id`, `title`, `image`, `body`, `date`) VALUES
(116, 'куда без этого', '=)', 'Привет, Мир!', '2017-07-11 21:30:59'),
(117, 'Тест', '../../public/assets/img/noimage.jpg', 'Тест, тест. Банально и необходимо (,но?).', '2017-07-11 21:31:31'),
(118, 'Тест', '../../public/assets/img/noimage.jpg', 'check', '2017-07-11 21:31:40'),
(119, '4', '../../public/assets/img/noimage.jpg', '4', '2017-07-11 21:31:43'),
(120, '5!', '../../public/assets/img/noimage.jpg', '5', '2017-07-11 21:33:46'),
(122, 'Картинка NoImage', '../../public/assets/img/noimage.jpg', 'Если добавлять публикацию через форму добавления и оставить пустую строку в графе изображения - добавиться картинка NoImage. Но при редактировании, ссылку можно исправить на что угодно, хоть на ту же пустую строку', '2017-07-11 21:33:53'),
(123, 'Доделал 6 лабораторную работу', '../../public/assets/img/blog/minion.jpg', 'Все про все заняло у меня 14 дней.', '2017-07-12 17:18:38'),
(124, 'Какой твой любимый цвет?', '../../public/assets/img/blog/pmap.jpg', '...', '2017-07-12 17:23:43'),
(126, 'О блоге', '../../public/assets/img/blog/gubi.jpg', 'Что бы вести блог нужны мысли...или нет?', '2017-07-12 17:24:06'),
(127, 'Аватар', 'error://ups.fail.doh/noavatar', 'Аватар..аватар', '2017-07-12 17:24:18'),
(128, 'Федор Михайлович Достоевский', '../../public/assets/img/blog/dostoevskii.jpg', 'любимый и уважаемый писатель', '2017-07-12 17:25:19'),
(129, 'Важная информация', '../../public/assets/img/noimage.jpg', 'Важная информация пишется тут,\r\nснизу комментируется', '2017-07-12 17:30:02'),
(130, 'Эта запись тестовая', '../../public/assets/img/noimage.jpg', 'Если 111 изменилось на это предложение -&gt; взять конфету или сделать перерыв!!', '2017-07-12 17:37:38'),
(134, 'Тут могла бы быть Ваша реклама', '../../public/assets/img/blog/noads.jpg', 'Но я ее не добавил', '2017-07-12 18:36:17'),
(136, 'Что тебя интересует', '../../public/assets/img/blog/vopros.jpg', 'Как принести пользу обществу?', '2017-07-12 18:36:10'),
(137, 'Илон Маск, кто', '../../public/assets/img/blog/tesla.jpg', 'Реальный изобретатель, новый Конан Дойль или рекламное лицо?  Хороший предприниматель это ясно.', '2017-07-18 02:38:21'),
(199, 'Месси или Роналду', '../../public/assets/img/blog/messi.jpg', 'Месси', '2017-07-18 22:26:48'),
(209, 'тема 1', '../../public/assets/img/noimage.jpg', 'сообщение 1.\r\nИнтнересно эта публикация написана, пока я ещё не создал этот блог. Часы на ноуте сбились? Или ещё что то?', '2014-01-01 14:00:45'),
(210, 'мысль, интрига', '../../public/assets/img/blog/kino.jpg', 'интрига, мысль, сюжет', '2014-01-01 14:01:59'),
(211, 'На сегодня', '../../public/assets/img/noimage.jpg', 'это всё', '2014-01-01 14:02:13'),
(212, '8 работа', '../../public/assets/img/noimage.jpg', 'Закончил 8 лабу.\r\nКогда долго сидишь что бы закончить работу, тяжело написать что то кроме этого.\r\nПамятка. Не трогать код как бы ни хотелось, идти дальше. Все работает а время меньше и меньше', '2017-09-16 00:20:13'),
(213, 'Меню на ДР Веронички', '', 'сет мясной 0.5+0.5 2500\r\nсет куриный + грибы 1500\r\nпицца 600\r\nлодочки с сыром и яйцом 3 855\r\nкартофель по деревенски 0.5 275\r\nовощи гриль 0.4 420\r\nзеленые помидоры 0.1 55\r\nсоленые помидоры 0.1 70\r\nогурчики соленые 0.1 50\r\nовощная нарезка 0.25 270\r\nвешенки 0.2 300\r\nсоусы 150\r\nкомпот 500', '2017-10-05 22:54:41'),
(214, 'adsa', '', 'asdasd', '2017-11-04 23:17:26');

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `blogid` int(11) NOT NULL,
  `author` varchar(100) NOT NULL,
  `body` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `blogid`, `author`, `body`, `date`) VALUES
(125, 137, 'test', 'в', '2017-09-14 23:57:24'),
(126, 134, 'test', 'в', '2017-09-14 23:58:07'),
(127, 134, 'test', 'ва', '2017-09-15 00:03:40'),
(128, 134, 'test', 'о', '2017-09-15 00:04:28'),
(129, 136, 'test', '1', '2017-09-15 00:08:21'),
(130, 136, 'test', '5', '2017-09-15 00:08:48'),
(131, 136, 'test', '6', '2017-09-15 00:08:55'),
(132, 136, 'test', '7', '2017-09-15 00:09:34'),
(133, 136, 'test', 'н', '2017-09-15 00:09:39'),
(134, 137, 'test', 'еее', '2017-09-15 00:10:59'),
(135, 214, 'test', '1', '2017-09-15 00:12:04'),
(136, 214, 'test', '2', '2017-09-15 00:15:17'),
(137, 214, 'test', '3', '2017-09-15 00:15:49'),
(138, 134, 'test', 'а', '2017-09-15 00:23:59'),
(139, 134, 'test', 'с', '2017-09-15 00:24:36'),
(140, 134, 'test', 'а', '2017-09-15 00:24:54'),
(141, 136, 'test', 'в', '2017-09-15 00:25:23'),
(142, 136, 'test', 'и', '2017-09-15 00:25:52'),
(143, 199, 'test', 'к', '2017-09-15 00:27:45'),
(144, 134, 'test', '5', '2017-09-15 00:28:45'),
(145, 134, 'test', '6', '2017-09-15 00:29:41'),
(146, 126, 'test', '4', '2017-09-15 00:35:27'),
(147, 214, 'test', 'd', '2017-09-15 00:45:02'),
(148, 214, 'test', 'в', '2017-09-15 01:02:15'),
(149, 134, 'test', 'а', '2017-09-15 01:04:23'),
(150, 199, 'test', 'вав', '2017-09-15 01:04:44'),
(151, 130, 'test', '1', '2017-09-15 01:06:18'),
(152, 130, 'test', '2', '2017-09-15 01:06:21'),
(153, 130, 'test', '3', '2017-09-15 01:06:23'),
(154, 130, 'test', '4', '2017-09-15 01:06:26'),
(155, 130, 'test', '5', '2017-09-15 01:06:29'),
(156, 199, 'test', 'Роналду', '2017-09-18 00:29:02'),
(157, 199, 'test', 'Зидан', '2017-09-18 00:29:24'),
(158, 199, 'test', 'Ронадлу', '2017-09-18 00:29:32'),
(159, 130, 'test', 'Пишу коммент', '2017-09-18 00:29:58'),
(160, 199, 'hmnu16790', 'Люблю хоккей!', '2017-09-23 18:50:35');

-- --------------------------------------------------------

--
-- Структура таблицы `statistics`
--

CREATE TABLE `statistics` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `page` varchar(180) NOT NULL,
  `ip` varchar(30) NOT NULL,
  `host` varchar(180) NOT NULL,
  `browser_name` varchar(180) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `statistics`
--

INSERT INTO `statistics` (`id`, `date`, `page`, `ip`, `host`, `browser_name`) VALUES
(1, '0000-00-00 00:00:00', 'stat', 'stat', 'stat', 'stat'),
(2, '2017-07-26 15:17:24', '/index', '127.0.0.1', 'wtlr7', 'Mozilla/5.0 (Windows NT 6.1; rv:54.0) Gecko/20100101 Firefox/54.0'),
(3, '2017-07-26 15:50:29', '/', '127.0.0.1', 'wtlr7', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.36'),
(4, '2017-07-26 15:51:10', '/', '127.0.0.1', 'wtlr7', 'Mozilla/5.0 (Windows NT 6.1; rv:54.0) Gecko/20100101 Firefox/54.0'),
(5, '2017-07-26 16:57:57', '/study', '127.0.0.1', 'wtlr7', 'Mozilla/5.0 (Windows NT 6.1; rv:54.0) Gecko/20100101 Firefox/54.0'),
(6, '2017-07-26 16:57:58', '/photo', '127.0.0.1', 'wtlr7', 'Mozilla/5.0 (Windows NT 6.1; rv:54.0) Gecko/20100101 Firefox/54.0'),
(7, '2017-07-26 16:57:59', '/interests', '127.0.0.1', 'wtlr7', 'Mozilla/5.0 (Windows NT 6.1; rv:54.0) Gecko/20100101 Firefox/54.0'),
(8, '2017-07-26 16:58:01', '/photo', '127.0.0.1', 'wtlr7', 'Mozilla/5.0 (Windows NT 6.1; rv:54.0) Gecko/20100101 Firefox/54.0'),
(9, '2017-07-26 17:33:11', '/index', '127.0.0.1', 'wtlr7', 'Mozilla/5.0 (Windows NT 6.1; rv:54.0) Gecko/20100101 Firefox/54.0'),
(10, '2017-07-26 17:33:49', '/about', '127.0.0.1', 'wtlr7', 'Mozilla/5.0 (Windows NT 6.1; rv:54.0) Gecko/20100101 Firefox/54.0'),
(11, '2017-07-26 17:33:50', '/index', '127.0.0.1', 'wtlr7', 'Mozilla/5.0 (Windows NT 6.1; rv:54.0) Gecko/20100101 Firefox/54.0'),
(12, '2017-07-26 17:46:13', '/index', '127.0.0.1', 'wtlr7', 'Mozilla/5.0 (Windows NT 6.1; rv:54.0) Gecko/20100101 Firefox/54.0'),
(13, '2017-07-26 17:46:19', '/about', '127.0.0.1', 'wtlr7', 'Mozilla/5.0 (Windows NT 6.1; rv:54.0) Gecko/20100101 Firefox/54.0'),
(14, '2017-07-26 17:46:21', '/interests', '127.0.0.1', 'wtlr7', 'Mozilla/5.0 (Windows NT 6.1; rv:54.0) Gecko/20100101 Firefox/54.0'),
(15, '2017-07-26 17:46:22', '/study', '127.0.0.1', 'wtlr7', 'Mozilla/5.0 (Windows NT 6.1; rv:54.0) Gecko/20100101 Firefox/54.0'),
(16, '2017-07-26 17:46:23', '/photo', '127.0.0.1', 'wtlr7', 'Mozilla/5.0 (Windows NT 6.1; rv:54.0) Gecko/20100101 Firefox/54.0'),
(17, '2017-07-26 17:46:25', '/contact', '127.0.0.1', 'wtlr7', 'Mozilla/5.0 (Windows NT 6.1; rv:54.0) Gecko/20100101 Firefox/54.0'),
(18, '2017-07-26 17:46:29', '/myblog', '127.0.0.1', 'wtlr7', 'Mozilla/5.0 (Windows NT 6.1; rv:54.0) Gecko/20100101 Firefox/54.0'),
(19, '2017-07-26 17:46:31', '/guestbook', '127.0.0.1', 'wtlr7', 'Mozilla/5.0 (Windows NT 6.1; rv:54.0) Gecko/20100101 Firefox/54.0'),
(20, '2017-07-26 17:48:36', '/contact', '127.0.0.1', 'wtlr7', 'Mozilla/5.0 (Windows NT 6.1; rv:54.0) Gecko/20100101 Firefox/54.0'),
(21, '2017-07-26 17:49:17', '/contact', '127.0.0.1', 'wtlr7', 'Mozilla/5.0 (Windows NT 6.1; rv:54.0) Gecko/20100101 Firefox/54.0'),
(22, '2017-07-26 17:49:34', '/myblog', '127.0.0.1', 'wtlr7', 'Mozilla/5.0 (Windows NT 6.1; rv:54.0) Gecko/20100101 Firefox/54.0'),
(23, '2017-07-26 17:52:01', '/myblog', '127.0.0.1', 'wtlr7', 'Mozilla/5.0 (Windows NT 6.1; rv:54.0) Gecko/20100101 Firefox/54.0'),
(24, '2017-07-26 17:56:45', '/myblog', '127.0.0.1', 'wtlr7', 'Mozilla/5.0 (Windows NT 6.1; rv:54.0) Gecko/20100101 Firefox/54.0'),
(25, '2017-07-26 17:58:22', '/myblog', '127.0.0.1', 'wtlr7', 'Mozilla/5.0 (Windows NT 6.1; rv:54.0) Gecko/20100101 Firefox/54.0'),
(26, '2017-07-26 18:03:12', '/myblog', '127.0.0.1', 'wtlr7', 'Mozilla/5.0 (Windows NT 6.1; rv:54.0) Gecko/20100101 Firefox/54.0'),
(27, '2017-07-26 18:05:40', '/guestbook', '127.0.0.1', 'wtlr7', 'Mozilla/5.0 (Windows NT 6.1; rv:54.0) Gecko/20100101 Firefox/54.0'),
(28, '2017-07-26 18:05:44', '/myblog', '127.0.0.1', 'wtlr7', 'Mozilla/5.0 (Windows NT 6.1; rv:54.0) Gecko/20100101 Firefox/54.0'),
(29, '2017-07-26 18:05:50', '/contact', '127.0.0.1', 'wtlr7', 'Mozilla/5.0 (Windows NT 6.1; rv:54.0) Gecko/20100101 Firefox/54.0'),
(30, '2017-07-26 18:05:54', '/study', '127.0.0.1', 'wtlr7', 'Mozilla/5.0 (Windows NT 6.1; rv:54.0) Gecko/20100101 Firefox/54.0'),
(31, '2017-07-26 18:05:56', '/testpage', '127.0.0.1', 'wtlr7', 'Mozilla/5.0 (Windows NT 6.1; rv:54.0) Gecko/20100101 Firefox/54.0'),
(32, '2017-07-26 18:06:00', '/testpage', '127.0.0.1', 'wtlr7', 'Mozilla/5.0 (Windows NT 6.1; rv:54.0) Gecko/20100101 Firefox/54.0'),
(33, '2017-07-26 18:06:15', '/testpage', '127.0.0.1', 'wtlr7', 'Mozilla/5.0 (Windows NT 6.1; rv:54.0) Gecko/20100101 Firefox/54.0'),
(34, '2017-07-26 18:09:34', '/myblog', '127.0.0.1', 'wtlr7', 'Mozilla/5.0 (Windows NT 6.1; rv:54.0) Gecko/20100101 Firefox/54.0'),
(35, '2017-07-26 18:19:34', '/guestbook', '127.0.0.1', 'wtlr7', 'Mozilla/5.0 (Windows NT 6.1; rv:54.0) Gecko/20100101 Firefox/54.0'),
(36, '2017-07-26 18:20:31', '/guestbook', '127.0.0.1', 'wtlr7', 'Mozilla/5.0 (Windows NT 6.1; rv:54.0) Gecko/20100101 Firefox/54.0'),
(37, '2017-07-26 18:20:32', '/myblog', '127.0.0.1', 'wtlr7', 'Mozilla/5.0 (Windows NT 6.1; rv:54.0) Gecko/20100101 Firefox/54.0'),
(38, '2017-07-26 18:20:34', '/contact', '127.0.0.1', 'wtlr7', 'Mozilla/5.0 (Windows NT 6.1; rv:54.0) Gecko/20100101 Firefox/54.0'),
(39, '2017-07-26 18:20:37', '/study', '127.0.0.1', 'wtlr7', 'Mozilla/5.0 (Windows NT 6.1; rv:54.0) Gecko/20100101 Firefox/54.0'),
(40, '2017-07-26 18:20:38', '/interests', '127.0.0.1', 'wtlr7', 'Mozilla/5.0 (Windows NT 6.1; rv:54.0) Gecko/20100101 Firefox/54.0'),
(41, '2017-07-26 18:20:39', '/about', '127.0.0.1', 'wtlr7', 'Mozilla/5.0 (Windows NT 6.1; rv:54.0) Gecko/20100101 Firefox/54.0'),
(42, '2017-07-26 18:20:40', '/index', '127.0.0.1', 'wtlr7', 'Mozilla/5.0 (Windows NT 6.1; rv:54.0) Gecko/20100101 Firefox/54.0'),
(43, '2017-07-26 18:35:30', '/myblog?page=9', '127.0.0.1', 'wtlr7', 'Mozilla/5.0 (Windows NT 6.1; rv:54.0) Gecko/20100101 Firefox/54.0'),
(44, '2017-07-26 18:35:32', '/myblog?page=4', '127.0.0.1', 'wtlr7', 'Mozilla/5.0 (Windows NT 6.1; rv:54.0) Gecko/20100101 Firefox/54.0'),
(45, '2017-07-26 18:43:51', '/study', '127.0.0.1', 'wtlr7', 'Mozilla/5.0 (Windows NT 6.1; rv:54.0) Gecko/20100101 Firefox/54.0'),
(46, '2017-07-26 18:43:51', '/photo', '127.0.0.1', 'wtlr7', 'Mozilla/5.0 (Windows NT 6.1; rv:54.0) Gecko/20100101 Firefox/54.0'),
(47, '2017-07-26 18:44:14', '/photo', '127.0.0.1', 'wtlr7', 'Mozilla/5.0 (Windows NT 6.1; rv:54.0) Gecko/20100101 Firefox/54.0'),
(48, '2017-07-26 18:44:15', '/interests', '127.0.0.1', 'wtlr7', 'Mozilla/5.0 (Windows NT 6.1; rv:54.0) Gecko/20100101 Firefox/54.0'),
(49, '2017-07-26 18:44:15', '/about', '127.0.0.1', 'wtlr7', 'Mozilla/5.0 (Windows NT 6.1; rv:54.0) Gecko/20100101 Firefox/54.0'),
(50, '2017-07-26 18:44:28', '/about', '127.0.0.1', 'wtlr7', 'Mozilla/5.0 (Windows NT 6.1; rv:54.0) Gecko/20100101 Firefox/54.0'),
(51, '2017-07-26 18:44:29', '/index', '127.0.0.1', 'wtlr7', 'Mozilla/5.0 (Windows NT 6.1; rv:54.0) Gecko/20100101 Firefox/54.0'),
(52, '2017-07-26 18:44:30', '/index', '127.0.0.1', 'wtlr7', 'Mozilla/5.0 (Windows NT 6.1; rv:54.0) Gecko/20100101 Firefox/54.0');

-- --------------------------------------------------------

--
-- Структура таблицы `testpage`
--

CREATE TABLE `testpage` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `fio` varchar(50) NOT NULL,
  `groupname` varchar(10) NOT NULL,
  `answer1` varchar(50) NOT NULL,
  `result1` varchar(5) NOT NULL,
  `answer2` int(11) NOT NULL,
  `result2` varchar(5) NOT NULL,
  `answer3` varchar(20) NOT NULL,
  `result3` varchar(5) NOT NULL,
  `mark` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `testpage`
--

INSERT INTO `testpage` (`id`, `date`, `fio`, `groupname`, `answer1`, `result1`, `answer2`, `result2`, `answer3`, `result3`, `mark`) VALUES
(2, '2017-07-17 23:23:58', 'Сербин Александр Александр', 'ИС-41з', 'Система типов данных', 'ДА', 3072, 'ДА', 'Никлаус Вирт', 'ДА', 'Отлично!'),
(8, '2017-07-18 00:17:04', 'Игнатов Андрей Евгеньевич', 'ИС-22', 'Совмещение нескольких парадигм программирования', 'НЕТ', 3072, 'ДА', 'Алан Тьюринг', 'НЕТ', 'Удовлетворительно'),
(9, '2017-07-18 00:43:03', 'Сербин Александр Александр', 'ИС-41з', 'Совмещение нескольких парадигм программирования', 'НЕТ', 3002, 'НЕТ', 'Никлаус Вирт', 'ДА', 'Удовлетворительно'),
(10, '2017-07-18 01:12:18', 'Ким Николаевна Кардашьян', 'ИС-51з', 'Система типов данных', 'ДА', 321, 'НЕТ', 'Алан Тьюринг', 'НЕТ', 'Удовлетворительно'),
(11, '2017-07-18 01:29:57', 'Петр Васильевич Цирков', 'ИС-22', 'Система типов данных', 'ДА', 3072, 'ДА', 'Алан Тьюринг', 'НЕТ', 'Хорошо'),
(12, '2017-07-18 02:02:07', 'Сербин Александр Александр', 'ИС-51з', 'Гибкая система настройки', 'НЕТ', 22, 'НЕТ', 'Алан Тьюринг', 'НЕТ', 'Провал!'),
(13, '2017-07-18 02:15:23', 'Николай Осипович Крюк', 'ИС-12', 'Кроссплатформенность', 'НЕТ', 7032, 'НЕТ', 'Алан Тьюринг', 'НЕТ', 'Провал!'),
(14, '2017-07-18 16:46:48', 'Иван Андреевич Ургант', 'ИС-51', 'Кроссплатформенность', 'НЕТ', 4000, 'НЕТ', 'Никлаус Вирт', 'ДА', 'Удовлетворительно'),
(15, '2017-07-18 22:55:41', 'Сафин Марат Измайлович', 'ИС-11', 'Система типов данных', 'ДА', 3072, 'ДА', 'Блез Паскаль', 'НЕТ', 'Хорошо'),
(16, '2017-07-21 23:20:52', 'Сербин Александр А', 'ИС-11з', 'Гибкая система настройки', 'НЕТ', 6, 'НЕТ', 'Алан Тьюринг', 'НЕТ', 'Провал!'),
(17, '2017-07-21 23:22:50', 'Сербин Александр Александрович', 'ИС-11з', 'Система типов данных', 'ДА', 3072, 'ДА', 'Никлаус Вирт', 'ДА', 'Отлично!'),
(18, '2017-07-26 18:09:16', 'Петров Игорь Федорович', 'ИС-51', 'Гибкая система настройки', 'НЕТ', 432, 'НЕТ', 'Алан Тьюринг', 'НЕТ', 'Провал!'),
(19, '2017-08-05 23:45:31', 'Маслов Ян Рогович', 'ИС-22', 'Кроссплатформенность', 'НЕТ', 32123, 'НЕТ', 'Никлаус Вирт', 'ДА', 'Удовлетворительно'),
(20, '2017-09-23 18:48:21', 'Маслов Ян Рогович', 'ИС-51з', 'Гибкая система настройки', 'НЕТ', 444, 'НЕТ', 'Никлаус Вирт', 'ДА', 'Удовлетворительно');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fio` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `reg_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `fio`, `email`, `login`, `password`, `reg_date`) VALUES
(1, 'test', 'test', 'test', 'test', '0000-00-00 00:00:00'),
(2, 'Сербин Александр Александр', 'serbinyo@gmail.com', 'hmnu16790', '2333', '2017-08-01 22:44:16'),
(3, 'Иванов Иван Иванович', 'serbinyo@gmail.com', 'ivanov', '123', '2017-08-04 17:49:15'),
(4, 'Маслов Ян Рогович', 'serbinyo@gmail.com', 'yama', 'pass', '2017-08-05 23:43:42'),
(5, 'Торопов Федор Филиппович', 'serbinyo@gmail.com', 'toropov', '4444', '2017-08-21 16:54:44');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `statistics`
--
ALTER TABLE `statistics`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `testpage`
--
ALTER TABLE `testpage`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=215;
--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;
--
-- AUTO_INCREMENT для таблицы `statistics`
--
ALTER TABLE `statistics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT для таблицы `testpage`
--
ALTER TABLE `testpage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
