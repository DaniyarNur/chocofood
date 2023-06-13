-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 27 2022 г., 22:21
-- Версия сервера: 10.4.25-MariaDB
-- Версия PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `chocofood`
--

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(100) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `text` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(100) NOT NULL,
  `product_image` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `text`, `price`, `product_image`, `type`, `code`) VALUES
(1, 'Куриные стрипсы, 8 шт', 'Куриное филе в панировке', 1700, 'https://sc01.chocofood.kz/hermes/food_new/6/650aa234-9da1-4b00-aa62-e0d1e0d45c96.jpeg', 'kurochka', 'aasdf930#'),
(2, 'Куриные стрипсы, 12 шт', 'Куриное филе в панировке', 2100, 'https://sc01.chocofood.kz/hermes/food_new/c/cc098e95-98dc-403d-8188-dfe8ded80167.jpeg', 'kurochka', 'aasdf930!'),
(3, 'Шашлычки из курицы', 'Маринованное куриное филе в соусе \"Терияки\"', 1800, 'https://sc01.chocofood.kz/hermes/food_new/d/d4895b8f-f40e-4bee-93f6-9c613e513134.jpeg', 'kurochka', 'aasdf930&'),
(4, '\"Калифорния\" с креветкой', 'Рис, креветки, авокадо, икра \"Тобико\", майонез, огурец, нори', 1500, 'https://sc01.chocofood.kz/hermes/food_new/d/d02b2d93-4691-45ab-adb8-6351bd59636c.jpeg', 'sushi', 'kdfjv8'),
(5, '\"Калифорния\" с креветкой', 'Рис, креветки, авокадо, икра \"Тобико\", майонез, огурец, нори<', 2500, 'https://sc01.chocofood.kz/hermes/food_new/3/31fb5573-33e7-4234-a0cc-5455df27bfc9.jpeg', 'sushi', 'kdfjv89'),
(6, 'Калифорния', 'Рис, снежный краб, огурец, сливочный соус, нори, икра тобико', 2000, 'https://sc01.chocofood.kz/hermes/food_new/0/085b72ef-38ac-4f23-ace2-a8633322952f.jpeg', 'sushi', 'kdfjv10'),
(7, 'Сет \"Темпура\"', 'Цезарь темпура, Тори спайс темпура, Гурман, Горячий лосось', 6300, 'https://sc01.chocofood.kz/hermes/food/997499ca-0a8a-4be5-8851-04cfa05c68cd', 'set', 'kdjns56'),
(8, 'Банзай', 'Ролл \"Филадельфия\" - 8 шт, ролл \"Планета Микс\" - 8 шт, ролл \"Нами\" - 8 шт, ролл', 12000, 'https://sc01.chocofood.kz/hermes/food_new/f/f76e44a6-29fc-4439-a133-86e6f215d7b7.jpeg', 'set', 'kdjns#'),
(9, 'Запеченный', 'Ролл \"Филадельфия Хот\" - 8 шт, ролл \"Калифорния Хот\" - 8 шт, ролл \"Унаги Маки Хот\" - 8 шт', 6200, 'https://sc01.chocofood.kz/hermes/food_new/f/f8e4698d-e6f0-4095-af62-0b8ccc729731.jpeg', 'set', 'kdjns#8');

-- --------------------------------------------------------

--
-- Структура таблицы `restaurants`
--

CREATE TABLE `restaurants` (
  `id` int(100) NOT NULL,
  `restaurants_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `restaurants_image` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `delivery_time` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `delivery_price` int(100) NOT NULL,
  `rating` float NOT NULL,
  `type` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `restaurants`
--

INSERT INTO `restaurants` (`id`, `restaurants_name`, `restaurants_image`, `delivery_time`, `delivery_price`, `rating`, `type`) VALUES
(1, 'Центр плова и шашлыка', 'https://sc01.chocofood.kz/hermes/restaurant/1d23704f-dac7-4b6e-8410-4dd2a5a7cef7', '~65-75 мин', 350, 3.6, 'fastfood'),
(2, 'Ginger Sushi', 'https://sc01.chocofood.kz/hermes/restaurant/aa8774b5-c661-4c25-a253-6919531ff75a', '~65-75 мин', 500, 3.6, 'sushi'),
(3, 'Центр Плова \"Дружба\"', 'https://sc01.chocofood.kz/hermes/restaurant/d9846066-48f6-4b94-9fc2-19c2d14b80ee', '~45-55 мин', 500, 3.6, 'fastfood'),
(4, 'Free&Co Москва', 'https://sc01.chocofood.kz/hermes/restaurant/264ef1df-1bae-409e-9753-6a1e9ad15887', '~35-45 мин', 500, 3.6, 'fastfood'),
(5, 'ChickenLove Kalkaman', 'https://sc01.chocofood.kz/hermes/restaurant/f5bab01c-c616-40f4-a886-0c13efe35dc5', '~65-75 мин', 500, 3.6, 'kurochka'),
(6, 'Baifood', 'https://sc01.chocofood.kz/hermes/restaurant/2be37dd5-dbf7-4adf-bd6f-3011583ab42d', '~65-75 мин', 500, 3.6, ''),
(7, 'Чибо Сано', 'https://sc01.chocofood.kz/hermes/restaurant/dfe433b1-637e-4af0-8968-2f1286631e31', '~65-75 мин', 350, 3.6, 'kurochka'),
(8, 'Тануки Розыбакиева', 'https://sc01.chocofood.kz/hermes/restaurant/0762e572-27cd-4a43-b40e-7d34c6fae856', '~65-75 мин', 500, 3.6, 'sushi'),
(9, 'SUSHIеды', 'https://sc01.chocofood.kz/hermes/restaurant/689f6339-2a3c-4f36-a36a-db3014a066e7', '~45-55 мин', 500, 3.6, 'sushi'),
(10, 'Fortunepizza ', 'https://sc01.chocofood.kz/hermes/restaurant/6830a753-feed-4c23-865c-df6615650de1', '~65-75 мин', 350, 350, 'fastfood'),
(11, 'Метеор', 'https://sc01.chocofood.kz/hermes/restaurant/1cfba145-3541-4fd7-89cc-de5dabdb5f11', '~65-75 мин', 500, 3.6, 'kurochka');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
--
-- Table structure for table `tbl_comments`
--

CREATE TABLE `tbl_comments` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `comment` text NOT NULL,
  `comment_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_comments`
--

INSERT INTO `tbl_comments` (`id`, `name`, `comment`, `comment_time`) VALUES
(8, '#321456', 'I order here every week. Have never been disappointed yet. Great service!', '2022-12-29 05:27:05'),
(9, '#321457', 'Very long delivery! The food arrived cold! Perhaps this claim is more to the restaurant.', '2022-12-29 05:27:17'),
(10, '#321458', 'The nuggets were very tasty! Recomend for everybody. But for some reason the drinks were warm. We need to pay attention to this issue.', '2022-12-29 05:27:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_comments`
--
ALTER TABLE `tbl_comments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_comments`
--
ALTER TABLE `tbl_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;