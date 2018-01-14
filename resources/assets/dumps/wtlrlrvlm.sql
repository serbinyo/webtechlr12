-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 15 2018 г., 02:55
-- Версия сервера: 5.6.34
-- Версия PHP: 7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `wtlrlrvlm`
--
CREATE DATABASE IF NOT EXISTS `wtlrlrvlm` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `wtlrlrvlm`;

-- --------------------------------------------------------

--
-- Структура таблицы `blogarticles`
--

CREATE TABLE `blogarticles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `blogarticles`
--

INSERT INTO `blogarticles` (`id`, `title`, `image`, `body`, `date`) VALUES
(116, 'куда без этого', '=)', 'Привет, Мир!', '2017-07-11 21:30:59'),
(117, 'Тест', '../../public/img/noimage.jpg', 'Тест, тест. Банально и необходимо (,но?).', '2017-07-11 21:31:31'),
(118, 'Тест', '../../public/img/noimage.jpg', 'check', '2017-07-11 21:31:40'),
(122, 'Картинка NoImage', '../../public/img/noimage.jpg', 'Если добавлять публикацию через форму добавления и оставить пустую строку в графе изображения - добавиться картинка NoImage. \r\nНо при редактировании, ссылку можно исправить на что угодно, хоть на ту же пустую строку', '2017-07-11 21:33:53'),
(123, 'Доделал 6 лабораторную работу', '../../public/img/blog/minion.jpg', 'Все про все заняло у меня 14 дней.', '2017-07-12 17:18:38'),
(124, 'Какой твой любимый цвет?', '../../public/img/blog/pmap.jpg', '...', '2017-07-12 17:23:43'),
(126, 'О блоге', '../../public/img/blog/gubi.jpg', 'Что бы вести блог нужны мысли...или нет?', '2017-07-12 17:24:06'),
(127, 'Аватар', '../../public/img/noimage.jpg', 'Аватар..аватар..\r\nывыф', '2017-07-12 17:24:18'),
(128, 'Федор Михайлович Достоевский', '../../public/img/blog/dostoevskii.jpg', 'любимый и уважаемый писатель', '2017-07-12 17:25:19'),
(129, 'Важная информация', '../../public/img/noimage.jpg', 'Важная информация пишется тут,\r\nснизу комментируется', '2017-07-12 17:30:02'),
(130, 'Эта запись тестовая', '../../public/img/noimage.jpg', 'Если 111 изменилось на это предложение -&gt; взять конфету или сделать перерыв!!', '2017-07-12 17:37:38'),
(136, 'Что тебя интересует', '../../public/img/blog/vopros.jpg', 'Как принести пользу обществу?', '2017-07-12 18:36:10'),
(137, 'Илон Маск, кто', '../../public/img/blog/tesla.jpg', 'Реальный изобретатель, новый Конан Дойль или рекламное лицо?  Хороший предприниматель это ясно.', '2017-07-18 02:38:21'),
(199, 'Месси или Роналду', '../../public/img/blog/messi.jpg', 'Месси', '2017-07-18 22:26:48'),
(209, 'тема 1', '../../public/img/noimage.jpg', 'сообщение 1.\r\nИнтнересно эта публикация написана, пока я ещё не создал этот блог. Часы на ноуте сбились? Или ещё что то?', '2014-01-01 14:00:45'),
(210, 'мысль, интрига', '../../public/img/blog/kino.jpg', 'интрига, мысль, сюжет', '2014-01-01 14:01:59'),
(211, 'На сегодня', '../../public/img/noimage.jpg', 'это всё', '2014-01-01 14:02:13'),
(212, '8 работа!', '../../public/img/noimage.jpg', 'Закончил 8 лабу.\r\nКогда долго сидишь что бы закончить работу, тяжело написать что то кроме этого.\r\nПамятка. Не трогать код как бы ни хотелось, идти дальше. Все работает а время меньше и меньше!', '2017-09-16 00:20:13'),
(317, 'Вторая нормальная форма', '/public/img/blog/2nf.JPG', 'Формула получения второй нормальной формы при нормализации базы данных. \r\n\r\nНапомню, что первая нормальная форма получается если:\r\nвсе элементы отношения атомарны и выделены первичные ключи.', '2017-10-16 21:57:52'),
(318, 'Вариант главного изображения', '/public/img/blog/img_main.jpg', 'Вот такое изображение используется для \"шапки\". Есть ещё варианты?', '2017-10-17 00:48:45'),
(320, 'Жеребьевка ЧМ!8', '/public/img/blog/zerebiovka.jpg', 'Жеребьевка Чемпионата Мира по футболу в России 2018 пройдет 1 декабря в Кремле, г.Севастополь.', '2017-11-03 11:09:54'),
(321, 'changes.log', '../../public/img/noimage.jpg', '1. Рефакторинг.\r\nПо принципу - тонкие контроллены, толстые модели:\r\nВся бизнес-логика приложения должна содержаться в моделях. Модель - не просто сущности из бд, это еще и инкапсулированая логика ее обработки.  \r\nКонтроллер должен говорить модели, что делать и рендерить вьюхи.\r\n\r\nВопрос: Почему в Laravel из коробки валидация подразумевается в контроллере, а не в модели?\r\n\r\nВ документации сказано, что Базовый контроллер App\\Http\\Controllers\\Controller включает в себя трейт ValidatesRequests, который уже содержит методы для валидации.\r\n\r\nВопрос почему не базовый класс модели сразу содержит методы валидации?\r\n\r\n\r\n2. Убраны лишние контроллеры, методы добавлены в ресурс - контроллеры\r\n\r\n3. В main-layout добавленн @include(\'common.errors\')\r\nвместо кода, для изящности\r\n\r\n4. К проекту добавлен laravel-mix 1.0 и cofeescript 2.0.2 в нашем случае для обработкт (scss и coffee)\r\n\r\n5. Файл style.css приведен к отформатированному виду\r\n\r\n6. Переделаны формы с использованием FormBuilder\r\n\r\n7. Сделал что все пароли теперь хранятся в md5-хеш строках', '2017-11-03 13:28:03'),
(323, 'Россия - Аргентина. 10.11.17 15 - 00', 'public/img/blog/rus-ang.jpg', 'За 18 лет, которые я люблю футбол, эта самый сильный соперник для сборной России.', '2017-11-04 23:24:45'),
(324, '1', '1', '1', '2017-11-24 00:20:09'),
(325, 'd', 'd', 'd', '2017-11-24 00:20:36');

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `blogid` int(11) NOT NULL,
  `author` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `blogid`, `author`, `body`, `date`) VALUES
(156, 199, 'test', 'Роналду', '2017-09-18 00:29:02'),
(157, 199, 'test', 'Зидан', '2017-09-18 00:29:24'),
(158, 199, 'test', 'Ронадлу', '2017-09-18 00:29:32'),
(159, 130, 'test', 'Пишу коммент', '2017-09-18 00:29:58'),
(160, 199, 'hmnu16790', 'Люблю хоккей!', '2017-09-23 18:50:35'),
(161, 129, 'hmnu16790', 'Важный комментарий', '2017-10-13 22:30:27'),
(162, 128, 'hmnu16790', 'Мой любимый писатель!', '2017-10-13 22:37:55'),
(176, 130, 'hmnu16790', 'unique', '2017-10-14 00:05:32'),
(181, 130, 'hmnu16790', 'Привет Комменты!', '2017-10-14 00:15:26'),
(189, 130, 'hmnu16790', 'Hello, World!', '2017-10-14 00:22:58'),
(190, 130, 'hmnu16790', 'Hello, World 2!', '2017-10-14 00:23:12'),
(200, 118, 'hmnu16790', '.css', '2017-10-14 00:35:12'),
(201, 118, 'hmnu16790', '.css2', '2017-10-14 00:35:22'),
(202, 209, 'hmnu16790', 'close it!', '2017-10-14 00:36:53'),
(203, 124, 'hmnu16790', 'close it!', '2017-10-14 00:37:00'),
(204, 123, 'hmnu16790', 'close it!', '2017-10-14 00:37:06'),
(205, 122, 'hmnu16790', 'close it!', '2017-10-14 00:37:11'),
(206, 120, 'hmnu16790', 'close it!', '2017-10-14 00:37:16'),
(207, 120, 'hmnu16790', 'close it!', '2017-10-14 00:37:24'),
(208, 120, 'hmnu16790', 'close it!', '2017-10-14 00:38:10'),
(209, 119, 'hmnu16790', 'close it!', '2017-10-14 00:38:16'),
(210, 212, 'hmnu16790', 'laravel', '2017-10-14 00:43:49'),
(216, 318, 'veronikaOk', 'Привет. Очень красивый миньен', '2017-10-19 20:23:38'),
(217, 318, 'veronikaOk', 'Привет.', '2017-10-19 20:23:46'),
(219, 319, 'hmnu16790', 'Привет', '2017-10-20 21:34:28'),
(222, 308, 'hmnu16790', 'Тест', '2017-10-21 02:15:20'),
(224, 319, 'hmnu16790', 'Hello', '2017-10-27 19:03:40'),
(225, 329, 'hmnu16790', 'Нелло', '2017-10-27 19:38:33'),
(229, 318, 'hmnu16790', 'Круто', '2017-10-30 01:09:09'),
(235, 321, 'admin', 'Спросить про formbuilder - radio и lable?', '2017-11-04 15:11:37'),
(236, 320, 'admin', 'Керж красава', '2017-11-10 13:10:32'),
(237, 317, 'admin', 'Ну ты умник (=', '2017-11-10 13:21:21');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2017_10_27_174510_create_blogarticles_table', 1),
(2, '2017_10_27_183248_create_comments_table', 2),
(8, '2017_10_27_183313_create_statistics_table', 3),
(9, '2017_10_27_183342_create_testresults_table', 3),
(10, '2017_10_27_183358_create_users_table', 3),
(11, '2017_10_27_393248_create_comments_table', 3),
(15, '2017_10_27_192302_change_blogarticles_table', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `statistics`
--

CREATE TABLE `statistics` (
  `id` int(10) UNSIGNED NOT NULL,
  `date` datetime NOT NULL,
  `page` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `host` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `browser_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(52, '2017-07-26 18:44:30', '/index', '127.0.0.1', 'wtlr7', 'Mozilla/5.0 (Windows NT 6.1; rv:54.0) Gecko/20100101 Firefox/54.0'),
(53, '2017-10-12 19:38:49', '/study', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(54, '2017-10-12 19:38:53', '/testpage', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(55, '2017-10-12 19:38:53', '/photo', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(56, '2017-10-12 19:38:54', '/interests', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(57, '2017-10-12 19:38:55', '/about', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(58, '2017-10-12 19:38:55', '/', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(59, '2017-10-12 19:38:56', '/about', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(60, '2017-10-12 19:38:57', '/interests', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(61, '2017-10-12 19:38:57', '/study', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(62, '2017-10-12 19:38:58', '/photo', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(63, '2017-10-12 19:38:58', '/contact', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(64, '2017-10-12 19:39:10', '/testpage', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(65, '2017-10-12 19:39:11', '/interests', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(66, '2017-10-12 19:39:11', '/about', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(67, '2017-10-12 19:39:35', '/testpage', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(68, '2017-10-12 19:39:36', '/testpage', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(69, '2017-10-12 19:39:36', '/myblog', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(70, '2017-10-12 19:39:37', '/myblog', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(71, '2017-10-12 19:39:38', '/myblog', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(72, '2017-10-12 19:39:55', '/', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(73, '2017-10-12 19:39:56', '/', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(74, '2017-10-12 19:39:57', '/', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(75, '2017-10-12 19:40:03', '/guestbook', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(76, '2017-10-12 19:40:05', '/interests', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(77, '2017-10-12 19:40:06', '/about', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(78, '2017-10-29 23:47:41', '/', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(79, '2017-10-29 23:47:50', '/', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(80, '2017-10-29 23:47:52', '/', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(81, '2017-10-29 23:48:59', '/', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(82, '2017-10-29 23:49:13', '/', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(83, '2017-10-29 23:49:14', '/', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(84, '2017-10-29 23:49:16', '/', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(85, '2017-10-29 23:49:16', '/', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(86, '2017-10-29 23:49:17', '/', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(87, '2017-10-29 23:49:17', '/', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(88, '2017-10-29 23:49:18', '/', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(89, '2017-10-29 23:49:18', '/', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(90, '2017-10-29 23:49:19', '/', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(91, '2017-10-29 23:49:19', '/', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(92, '2017-10-29 23:49:20', '/', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(93, '2017-10-29 23:49:20', '/', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(94, '2017-10-29 23:50:01', '/', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(95, '2017-10-29 23:50:03', '/', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(96, '2017-10-29 23:50:03', '/', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(97, '2017-10-29 23:50:05', '/', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(98, '2017-10-29 23:50:05', '/', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(99, '2017-10-29 23:50:06', '/myblog', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(100, '2017-10-29 23:50:07', '/contact', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(101, '2017-10-29 23:52:09', '/study', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(102, '2017-10-29 23:52:10', '/interests', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(103, '2017-10-29 23:52:11', '/about', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(104, '2017-10-29 23:52:11', '/', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(105, '2017-10-29 23:53:10', '/guestbook', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(106, '2017-10-29 23:55:49', '/myblog', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(107, '2017-10-29 23:55:53', '/comment', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(108, '2017-10-30 00:27:06', '/study', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(109, '2017-10-30 00:43:09', '/', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(110, '2017-10-30 00:43:13', '/', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(111, '2017-10-30 00:43:13', '/', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(112, '2017-10-30 00:43:15', '/', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(113, '2017-10-30 00:43:15', '/', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(114, '2017-10-30 00:43:16', '/registration', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(115, '2017-10-30 00:43:18', '/registration', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(116, '2017-10-30 00:43:18', '/registration', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(117, '2017-10-30 00:43:27', '/registration', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(118, '2017-10-30 00:44:37', '/', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(119, '2017-10-30 00:44:40', '/', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(120, '2017-10-30 00:44:40', '/', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(121, '2017-10-30 00:44:40', '/registration', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(122, '2017-10-30 00:44:50', '/registration', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(123, '2017-10-30 00:44:50', '/', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(124, '2017-10-30 00:44:52', '/', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(125, '2017-10-30 00:44:52', '/', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(126, '2017-10-30 00:45:23', '/registration', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(127, '2017-10-30 00:45:26', '/registration', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(128, '2017-10-30 00:45:26', '/registration', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(129, '2017-10-30 00:45:32', '/checklogin', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(130, '2017-10-30 00:46:28', '/', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(131, '2017-10-30 00:46:29', '/registration', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(132, '2017-10-30 00:46:35', '/registration', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(133, '2017-10-30 00:46:35', '/registration', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(134, '2017-10-30 00:46:43', '/registration', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(135, '2017-10-30 00:46:43', '/', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(136, '2017-10-30 00:48:09', '/', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(137, '2017-10-30 00:48:09', '/', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(138, '2017-10-30 00:48:11', '/', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(139, '2017-10-30 00:48:11', '/', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(140, '2017-10-30 00:48:12', '/', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(141, '2017-10-30 00:48:12', '/', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(142, '2017-10-30 00:48:20', '/', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(143, '2017-10-30 00:48:20', '/', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(144, '2017-10-30 00:48:21', '/', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(145, '2017-10-30 00:48:21', '/', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(146, '2017-10-30 00:52:39', '/', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(147, '2017-10-30 00:52:40', '/', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(148, '2017-10-30 00:53:22', '/', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(149, '2017-10-30 00:53:22', '/', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(150, '2017-10-30 00:53:24', '/', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(151, '2017-10-30 00:53:24', '/', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(152, '2017-10-30 00:53:26', '/', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(153, '2017-10-30 00:53:26', '/', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(154, '2017-10-30 00:53:29', '/', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(155, '2017-10-30 00:53:29', '/', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(156, '2017-10-30 01:04:00', '/', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(157, '2017-10-30 01:04:01', '/', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(158, '2017-10-30 01:04:02', '/about', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(159, '2017-10-30 01:04:03', '/', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(160, '2017-10-30 01:04:03', '/', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(161, '2017-10-30 01:04:03', '/', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(162, '2017-10-30 01:04:05', '/registration', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(163, '2017-10-30 01:04:15', '/registration', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(164, '2017-10-30 01:04:16', '/', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(165, '2017-10-30 01:04:30', '/interests', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(166, '2017-10-30 01:04:32', '/study', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(167, '2017-10-30 01:04:33', '/', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(168, '2017-10-30 01:04:35', '/', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(169, '2017-10-30 01:04:35', '/', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(170, '2017-10-30 01:04:36', '/guestbook', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(171, '2017-10-30 01:04:37', '/myblog', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(172, '2017-10-30 01:04:37', '/contact', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(173, '2017-10-30 01:04:38', '/photo', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(174, '2017-10-30 01:08:53', '/about', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(175, '2017-10-30 01:08:54', '/interests', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(176, '2017-10-30 01:08:55', '/myblog', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(177, '2017-10-30 01:09:09', '/comment', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(178, '2017-10-30 01:11:27', '/contact', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(179, '2017-10-30 01:11:28', '/photo', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(180, '2017-10-30 01:11:29', '/testpage', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(181, '2017-10-30 01:11:30', '/testpage', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(182, '2017-10-30 01:11:31', '/testpage', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(183, '2017-10-30 01:15:00', '/', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(184, '2017-10-30 01:15:01', '/', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(185, '2017-10-30 01:15:02', '/', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(186, '2017-10-30 01:15:02', '/', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(187, '2017-10-30 01:15:03', '/', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(188, '2017-10-30 01:15:04', '/', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(189, '2017-10-30 01:15:04', '/', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(190, '2017-10-30 01:15:05', '/registration', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(191, '2017-10-30 01:15:17', '/registration', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(192, '2017-10-30 01:15:18', '/', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(193, '2017-10-30 01:15:20', '/myblog', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(194, '2017-10-30 01:15:21', '/contact', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(195, '2017-10-30 01:15:22', '/testpage', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(196, '2017-10-30 01:15:28', '/testpage', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(197, '2017-10-30 01:15:37', '/testpage', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(198, '2017-10-30 01:15:41', '/testpage', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(199, '2017-10-30 01:16:31', '/testpage', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(200, '2017-10-30 01:16:35', '/photo', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(201, '2017-10-30 01:16:36', '/contact', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'),
(202, '2017-10-30 01:16:38', '/guestbook', '127.0.0.1', 'wtlr12', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36');

-- --------------------------------------------------------

--
-- Структура таблицы `testresults`
--

CREATE TABLE `testresults` (
  `id` int(10) UNSIGNED NOT NULL,
  `date` datetime NOT NULL,
  `fio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `groupname` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `result1` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer2` int(11) NOT NULL,
  `result2` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer3` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `result3` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mark` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `testresults`
--

INSERT INTO `testresults` (`id`, `date`, `fio`, `groupname`, `answer1`, `result1`, `answer2`, `result2`, `answer3`, `result3`, `mark`) VALUES
(1, '2017-10-27 18:53:26', 'Андреев Илья Владимирович', 'ИС-12', 'Гибкая система настройки', 'НЕТ', 5456, 'НЕТ', 'Никлаус Вирт', 'ДА', 'Удовлетворительно'),
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
(20, '2017-09-23 18:48:21', 'Маслов Ян Рогович', 'ИС-51з', 'Гибкая система настройки', 'НЕТ', 444, 'НЕТ', 'Никлаус Вирт', 'ДА', 'Удовлетворительно'),
(29, '2017-10-07 20:23:40', 'Лозинская Вероника Игоревна', 'ИС-41з', 'Система типов данных', 'ДА', 3072, 'ДА', 'Никлаус Вирт', 'ДА', 'Отлично!'),
(30, '2017-10-07 20:24:05', 'Лозинская Вероника Игоревна', 'ИС-11', 'Гибкая система настройки', 'НЕТ', 7032, 'НЕТ', 'Никлаус Вирт', 'ДА', 'Удовлетворительно'),
(31, '2017-10-07 20:39:27', 'Гоголь Николай Иванович', 'ИС-41з', 'Система типов данных', 'ДА', 1254, 'НЕТ', 'Алан Тьюринг', 'НЕТ', 'Удовлетворительно'),
(32, '2017-10-08 01:02:24', 'Достоевский Федор Михайлович', 'ИС-31з', 'Совмещение нескольких парадигм программирования', 'НЕТ', 3072, 'ДА', 'Никлаус Вирт', 'ДА', 'Хорошо'),
(33, '2017-10-08 11:11:51', 'Андреев Илья Владимирович', 'ИС-12', 'Система типов данных', 'ДА', 3072, 'ДА', 'Никлаус Вирт', 'ДА', 'Отлично!'),
(34, '2017-10-08 11:12:54', 'ввв ввв ввв', 'ИС-21', 'Кроссплатформенность', 'НЕТ', 456, 'НЕТ', 'Алан Тьюринг', 'НЕТ', 'Провал!'),
(35, '2017-10-08 11:13:20', 'ввв ввв ввв', 'ИС-22', 'Система типов данных', 'ДА', 3333, 'НЕТ', 'Алан Тьюринг', 'НЕТ', 'Удовлетворительно'),
(36, '2017-10-14 00:53:26', 'Юдашев Дмитрий Антонович', 'ИС-21', 'Система типов данных', 'ДА', 1234, 'НЕТ', 'Никлаус Вирт', 'ДА', 'Хорошо'),
(37, '2017-10-14 00:55:35', 'Юдашев Дмитрий Антонович', 'ИС-21', 'Система типов данных', 'ДА', 1234, 'НЕТ', 'Никлаус Вирт', 'ДА', 'Хорошо'),
(38, '2017-10-14 00:56:06', 'Юдашев Дмитрий Антонович', 'ИС-41з', 'Система типов данных', 'ДА', 3072, 'ДА', 'Никлаус Вирт', 'ДА', 'Отлично!'),
(39, '2017-10-17 00:42:07', 'Юдашев Дмитрий Антонович', 'ИС-12', 'Гибкая система настройки', 'НЕТ', 6666, 'НЕТ', 'Никлаус Вирт', 'ДА', 'Удовлетворительно'),
(40, '2017-10-29 22:36:09', 'Андреев Илья Владимирович', 'ИС-12', 'Гибкая система настройки', 'НЕТ', 213, 'НЕТ', 'Никлаус Вирт', 'ДА', 'Удовлетворительно'),
(41, '2017-10-29 22:37:38', 'Андреев Илья Владимирович', 'ИС-12', 'Гибкая система настройки', 'НЕТ', 213, 'НЕТ', 'Никлаус Вирт', 'ДА', 'Удовлетворительно'),
(42, '2017-10-29 22:37:46', 'гоголь Николай И', 'ИС-11', 'Гибкая система настройки', 'НЕТ', 1231, 'НЕТ', 'Никлаус Вирт', 'ДА', 'Удовлетворительно'),
(43, '2017-10-29 22:50:07', 'Лозинская Вероника Игоревна', 'ИС-11', 'Гибкая система настройки', 'НЕТ', 1233, 'НЕТ', 'Никлаус Вирт', 'ДА', 'Удовлетворительно'),
(44, '2017-10-30 01:15:37', 'Лозинская Вероника Игоревна', 'ИС-11з', 'Кроссплатформенность', 'НЕТ', 132213, 'НЕТ', 'Никлаус Вирт', 'ДА', 'Удовлетворительно'),
(45, '2017-10-30 14:33:08', 'Юзер Нампадович Ноутбуков', 'ИС-11з', 'Система типов данных', 'ДА', 1233, 'НЕТ', 'Алан Тьюринг', 'НЕТ', 'Удовлетворительно'),
(46, '2017-10-30 14:33:48', 'Юзер Нампадович Ноутбуков', 'ИС-21', 'Система типов данных', 'ДА', 3072, 'ДА', 'Никлаус Вирт', 'ДА', 'Отлично!'),
(47, '2017-11-04 15:08:31', 'Андреев Илья Владимирович', 'ИС-31', 'Система типов данных', 'ДА', 3072, 'ДА', 'Никлаус Вирт', 'ДА', 'Отлично!');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `fio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `fio`, `email`, `login`, `password`, `reg_date`) VALUES
(1, 'test', 'test@mail.ru', 'test', '098f6bcd4621d373cade4e832627b4f6', '0000-00-00 00:00:00'),
(2, 'Сербин Александр Александр', '2333@gmail.com', 'hmnu16790', 'f7e0b956540676a129760a3eae309294', '2017-08-01 22:44:16'),
(3, 'Иванов Иван Иванович', '123@gmail.com', 'ivanov', '202cb962ac59075b964b07152d234b70', '2017-08-04 17:49:15'),
(4, 'Маслов Ян Романович', 'pass@gmail.com', 'yama', '1a1dc91c907325c69271ddf0c944bc72', '2017-08-05 23:43:42'),
(5, 'Торопов Федор Филиппович', '4444@gmail.com', 'toropov', 'dbc4d84bfcfe2284ba11beffb853a8c4', '2017-08-21 16:54:44'),
(6, 'Филипп Владимирович Колопов', '8888@yandex.ru', 'kolfi', 'cf79ae6addba60ad018347359bd144d2', '2017-10-12 15:10:13'),
(8, 'Лозинская Вероника Игоревна', 'loza@icloud.com', 'veronikaOk', 'ee95a16d763ab0d26ee62c53056df928', '2017-10-16 22:35:11'),
(9, 'Ласов Илья Валентинович', 'lasov@mail.ru', 'tigr', '14a3ab4b0fd1d42a0fadd826863cc403', '2017-10-17 00:21:00'),
(18, 'Новый Юзер Пользователевич', 'serbinyo@gmail.com', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', '2017-10-30 14:22:04'),
(19, 'Сербин Александр Александрович', 'serbinyo@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', '2017-11-03 23:08:26'),
(20, 'Петров Аркадий Денисович', 'petrden@rambler.ru', 'petrden', '0172b717b9276eb09e020d95d4f4b6ac', '2017-11-04 20:57:04');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `blogarticles`
--
ALTER TABLE `blogarticles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `statistics`
--
ALTER TABLE `statistics`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `testresults`
--
ALTER TABLE `testresults`
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
-- AUTO_INCREMENT для таблицы `blogarticles`
--
ALTER TABLE `blogarticles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=326;
--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=238;
--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT для таблицы `statistics`
--
ALTER TABLE `statistics`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203;
--
-- AUTO_INCREMENT для таблицы `testresults`
--
ALTER TABLE `testresults`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
