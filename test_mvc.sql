-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 01 2022 г., 10:39
-- Версия сервера: 8.0.24
-- Версия PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test_mvc`
--

-- --------------------------------------------------------

--
-- Структура таблицы `departments`
--

CREATE TABLE `departments` (
  `id` int NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `departments`
--

INSERT INTO `departments` (`id`, `title`) VALUES
(11, 'test dep1'),
(12, 'test dep2'),
(7, 'бугалтерія'),
(2, 'Виконавчий директор'),
(1, 'Директор'),
(8, 'логістика'),
(4, 'Магазин'),
(3, 'Офіс');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `department_id` int NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `address` text COLLATE utf8mb4_general_ci,
  `phone` varchar(12) COLLATE utf8mb4_general_ci NOT NULL,
  `comment` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `department_id`, `email`, `first_name`, `address`, `phone`, `comment`) VALUES
(1, 1, 'vasily@gmail.com', 'Vasily', 'pushkina 22/5', '252525', 'test coment test coment test coment test coment test coment test coment test coment test coment test coment test coment test coment test coment test coment test coment test coment test coment test coment test coment '),
(2, 2, 'bob@gmail.com', 'Bob', 'Vishneva 88/9', '7898788', 'test coment test coment test coment test coment test coment test coment test coment test coment test coment test coment test coment test coment test coment test coment test coment test coment test coment test coment '),
(3, 3, 'nikolay@gmail.com', 'Nikolay', 'some adres 66/55', '7898788', 'test coment test coment test coment test coment test coment test coment test coment test coment test coment test coment test coment test coment test coment test coment test coment test coment test coment test coment '),
(4, 4, 'viktor@gmail.com', 'Viktor', 'Victor bomj', '7898788', 'test coment test coment test coment test coment test coment test coment test coment test coment test coment test coment test coment test coment test coment test coment test coment test coment test coment test coment '),
(5, 4, 'jenya@gmail.com', 'Genay', 'adres unow', '7898788', 'test coment test coment test coment test coment test coment test coment test coment test coment test coment test coment test coment test coment test coment test coment test coment test coment test coment test coment '),
(7, 1, 'tets@gmail', 'test', 'test', 'test', 'test'),
(10, 1, 'test2@gmail.com', 'test name', 'address', '8888888', 'test coment'),
(12, 2, 'user@gmail.com', 'first name', 'address', 'phone', 'comment');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `departments_title_unique` (`title`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `	users_email_unique` (`email`),
  ADD KEY `users_department_id_foreign` (`department_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
