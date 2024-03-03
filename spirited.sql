-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 03 2024 г., 15:57
-- Версия сервера: 10.8.4-MariaDB
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `spirited`
--

-- --------------------------------------------------------

--
-- Структура таблицы `animes`
--

CREATE TABLE `animes` (
  `id` int(11) NOT NULL,
  `Title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Genre` int(11) NOT NULL,
  `Episodes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `animes`
--

INSERT INTO `animes` (`id`, `Title`, `Type`, `Genre`, `Episodes`, `Description`, `Picture`) VALUES
(1, 'Стальной алхимик: Братство', 'ТВ Сериал', 1, '64', 'В этом мире существуют алхимики — люди, владеющие искусством алхимии, способностью манипулировать материей и преобразовывать вещество. Все они ограничены основным Законом алхимии: нельзя алхимическим путём получить что-то, не пожертвовав чем-то равноценным полученному. Лишь с помощью легендарного философского камня, способ создания которого утерян, можно обойти этот Закон.\r\nГлавные герои, братья Эдвард и Альфонс Элрики, пострадали в детстве при попытке вернуть к жизни свою мать, умершую от болезни. Они забыли основной Закон алхимии и жестоко поплатились за это: Альфонс потерял всё своё тело, а Эдвард — руку и ногу. Эдвард сумел спасти лишь душу Альфонса, запечатав её в старинных доспехах.\r\nСпустя много лет Эдвард сдаёт государственный экзамен на звание алхимика и получает прозвище «Стальной Алхимик». Братья начинают путешествие с целью найти философский камень и вернуть с его помощью утраченное много лет назад.', 'pics/fullmetalalch.jpg'),
(3, 'Хёка', 'ТВ Сериал', 2, '22', 'Хотаро Орэки, юноша, казалось бы, равнодушный ко всем и всему, считает, что, если что-то можно не делать, нужно просто не делать это. А если сделать всё же надо — делать как можно скорее.\r\nПо просьбе старшей сестры он вступает в клуб классической литературы, которому грозит закрытие, где встречает Эру Читанду, красивую, воспитанную и настолько же любознательную девушку, неизменный девиз которой: «Мне интересно!» Вскоре к клубу присоединяется одноклассник Хотаро — Сатоши Фукубэ, улыбчивый и озорной, да ещё с фантастической памятью, называющий себя «базой данных». Классическая литература привлекает всё больше людей, и вот у порога появляется Маяка Ибара, влюблённая в Сатоши, вечно уклоняющегося от её попыток сблизиться.\r\nВместе ребята начинают расследовать таинственный случай, произошедший 40 с лишним лет назад. Случай, следы которого уже почти исчезли со страниц собрания сочинений бывших участников клуба, на обложке которого можно прочесть незамысловатое название «Хёка».', 'pics/hyoka.jpg'),
(6, 'Иная', 'ТВ Сериал', 3, '12', '26 лет назад в одном из третьих классов средней школы была некая ученица по имени Мисаки. Она была хороша в учёбе и в спорте, красива внешностью и пользовалась популярностью в своём классе. Однако внезапно умерла. После чего её одноклассники решили до самого выпуска вести себя так, как будто она всё ещё рядом.\r\nСпустя много лет, весной 1998 года, юноша по имени Коити Сакакибара переводится в этот класс и сразу же ощущает гнетущую атмосферу, царящую среди его новых одноклассников. В особенности, его внимание привлекает красивая, но отчуждённая от остального класса Мэй Мисаки, носящая глазную повязку и постоянно что-то рисующая в одиночестве.', 'pics/another.jpg'),
(34, 'Дракон-горничная Кобаяси', 'ТВ Сериал', 4, '13', 'Кобаяси — одинокая офисная сотрудница, единственный друг которой — коллега Макото Такия. Каждый вечер она «празднует» окончание рабочих будней в разных забегаловках.\r\nОдним таким вечером Кобаяси встречает раненного дракона по имени Тору, которой наобум предлагает жить у неё. Тору на радостях соглашается и решает стать горничной Кобаяси. Не имея представления о жизни людей, Тору будет творить много глупостей.\r\nНо одной творить — скучно. Потому следом за Тору приходит Канна, поначалу желавшая просто вернуть мятежную дракониху, но от бессилия оставшаяся с ней.\r\nТем временем, прознав о том, как Тору и Канне весело в мире людей, друзья и знакомые драконы также прибывают в этот мир и пробуют ужиться в нём по их примеру. Кто-то — становится отаку, другая — откликается на призыв маленького мага, а третья — начинает работать в одном офисе с Кобаяси.', 'pics/kobayasi.png'),
(35, 'Когда плачут цикады', 'ТВ Сериал', 5, '24', 'Жарким летом 1983 года Кэйити Маэбара вместе со своими родителями переезжает из крупного города в глубинку — небольшую, но спокойную и уютную деревню Хинамидзава. Быстро подружившись со своими новыми одноклассницами: Рэной Рюгу, Мион Сонодзаки, Рикой Фурудэ и Сатоко Ходзё, он становится полноправным членом их школьного клуба. Компания друзей беззаботно проводит тёплые летние деньки, предаваясь различным весёлым занятиям, начиная от карточных и настольных игр и заканчивая прятками. Кэйити постепенно привыкает к подобной размеренной и комфортной жизни, однако всё начинает представать в ином свете, когда однажды мальчик случайно натыкается на газетную вырезку, повествующую о мрачной истории Хинамидзавы. Углубляясь в тайны прошлого деревни, он обнаруживает, что его новые друзья могут быть совсем не теми, кем они кажутся на первый взгляд.', 'pics/higurashi.jpg'),
(36, 'Покемон', 'ТВ Сериал', 6, '276', 'Мальчик по имени Сатоши отправляется в поездку, чтобы стать мастером покемонов, с его первым покемоном Пикачу. В его путешествии к нему присоединяется Такэши — одержимый девочками горный тренер покемонов, и Касуми — пацанка, водный тренер покемонов, которая, возможно, влюблена в первого.\r\nСатоши с командой проезжают различные области, включая Канто, Оранжевые острова и Дзёто, и затем принимают там участие в «Лиге покемонов».\r\nПо пути они сталкиваются с обособленной организацией под названием «Команда-ракета», в которую входят трое воров покемонов Мусаши, Коджиро и Мяут. Каждый раз злобное трио пытается наворотить дел, но благодаря Сатоши и его покемону их попытки заканчиваются провалом.', 'pics/pokemon.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `genres`
--

CREATE TABLE `genres` (
  `id` int(11) NOT NULL,
  `GName` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `genres`
--

INSERT INTO `genres` (`id`, `GName`) VALUES
(1, 'Сёнэн'),
(2, 'Романтика'),
(3, 'Ужасы'),
(4, 'Повседневность'),
(5, 'Детектив'),
(6, 'Детское'),
(7, 'Спорт'),
(8, 'Махо-сёдзе'),
(9, 'Музыка'),
(10, 'Драма'),
(11, 'Приключения');

-- --------------------------------------------------------

--
-- Структура таблицы `liked`
--

CREATE TABLE `liked` (
  `id` int(11) NOT NULL,
  `Likes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `liked`
--

INSERT INTO `liked` (`id`, `Likes`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Login` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `Login`, `Email`, `Password`, `Role`, `Photo`) VALUES
(1, 'chateau', 'chateau@mail.ru', '123456', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `ID_Anime` int(11) NOT NULL,
  `video_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `videos`
--

INSERT INTO `videos` (`id`, `ID_Anime`, `video_url`) VALUES
(2, 35, 'videos/ALHAITHAM.mp4'),
(3, 35, 'videos/farben.mp4');

-- --------------------------------------------------------

--
-- Структура таблицы `watchlist`
--

CREATE TABLE `watchlist` (
  `id` int(11) NOT NULL,
  `Запланирвано` int(11) NOT NULL,
  `Просмотрено` int(11) NOT NULL,
  `Брошено` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `animes`
--
ALTER TABLE `animes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Genre` (`Genre`);

--
-- Индексы таблицы `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `liked`
--
ALTER TABLE `liked`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Likes` (`Likes`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ID_Anime` (`ID_Anime`);

--
-- Индексы таблицы `watchlist`
--
ALTER TABLE `watchlist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Просмотрено` (`Просмотрено`),
  ADD KEY `Брошено` (`Брошено`),
  ADD KEY `Запланирвано` (`Запланирвано`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `animes`
--
ALTER TABLE `animes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT для таблицы `genres`
--
ALTER TABLE `genres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `liked`
--
ALTER TABLE `liked`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `watchlist`
--
ALTER TABLE `watchlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `animes`
--
ALTER TABLE `animes`
  ADD CONSTRAINT `animes_ibfk_1` FOREIGN KEY (`Genre`) REFERENCES `genres` (`id`);

--
-- Ограничения внешнего ключа таблицы `liked`
--
ALTER TABLE `liked`
  ADD CONSTRAINT `liked_ibfk_1` FOREIGN KEY (`Likes`) REFERENCES `animes` (`id`);

--
-- Ограничения внешнего ключа таблицы `videos`
--
ALTER TABLE `videos`
  ADD CONSTRAINT `videos_ibfk_1` FOREIGN KEY (`ID_Anime`) REFERENCES `animes` (`id`);

--
-- Ограничения внешнего ключа таблицы `watchlist`
--
ALTER TABLE `watchlist`
  ADD CONSTRAINT `watchlist_ibfk_1` FOREIGN KEY (`Просмотрено`) REFERENCES `animes` (`id`),
  ADD CONSTRAINT `watchlist_ibfk_2` FOREIGN KEY (`Брошено`) REFERENCES `animes` (`id`),
  ADD CONSTRAINT `watchlist_ibfk_3` FOREIGN KEY (`Запланирвано`) REFERENCES `animes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
