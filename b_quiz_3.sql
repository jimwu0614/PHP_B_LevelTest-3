-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-08-19 09:40:47
-- 伺服器版本： 10.4.24-MariaDB
-- PHP 版本： 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `b_quiz_3`
--

-- --------------------------------------------------------

--
-- 資料表結構 `movie`
--

CREATE TABLE `movie` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `length` int(10) UNSIGNED NOT NULL,
  `ondate` date NOT NULL,
  `publish` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `director` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `trailer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `poster` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `intro` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rank` tinyint(11) UNSIGNED NOT NULL,
  `sh` tinyint(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `movie`
--

INSERT INTO `movie` (`id`, `name`, `level`, `length`, `ondate`, `publish`, `director`, `trailer`, `poster`, `intro`, `rank`, `sh`) VALUES
(3, 'asdf', '普遍級', 200, '2022-08-19', 'po', 'de', '', '', '12312313', 10, 1),
(4, 'asdf', '限制級', 123, '2022-08-18', '453', '4536', '', '', '456543', 10, 1),
(5, 'kyuyt', '輔導級', 85, '2022-08-20', 'ytuk', 'yuk', '', '', 'ewgewg', 10, 1),
(6, 'gws', '普遍級', 453, '2022-08-19', '123', 'fjh', '', '', 'gfhjgf', 10, 1),
(7, 'ytrtr', '保護級', 788, '2022-08-18', '453745', '45234', '', '', 'ygfjgfhj', 10, 1),
(8, 'dsfg', '輔導級', 7853, '2022-08-17', 'po', '4536', '', '', '73274', 10, 1),
(9, 'fdsgdsf', '輔導級', 99, '2022-08-21', 'gh', 'fghj', '', '', 'dsaf', 10, 1);

-- --------------------------------------------------------

--
-- 資料表結構 `orders`
--

CREATE TABLE `orders` (
  `id` int(11) UNSIGNED NOT NULL,
  `no` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `movie` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `session` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `qt` int(11) NOT NULL,
  `seats` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `orders`
--

INSERT INTO `orders` (`id`, `no`, `movie`, `date`, `session`, `qt`, `seats`) VALUES
(21, '202208120001', '院線片01', '2022-08-14', '16:00~18:00', 3, 'a:3:{i:0;i:3;i:1;i:2;i:2;i:0;}'),
(22, '202208120022', '院線片02', '2022-08-13', '16:00~18:00', 4, 'a:4:{i:0;i:15;i:1;i:19;i:2;i:7;i:3;i:10;}'),
(23, '202208120023', '院線片04', '2022-08-12', '20:00~22:00', 2, 'a:2:{i:0;i:19;i:1;i:3;}'),
(24, '202208120024', '院線片02', '2022-08-15', '20:00~22:00', 2, 'a:2:{i:0;i:17;i:1;i:12;}'),
(25, '202208120025', '院線片04', '2022-08-14', '22:00~24:00', 3, 'a:3:{i:0;i:12;i:1;i:11;i:2;i:14;}'),
(26, '202208120026', '院線片03', '2022-08-13', '20:00~22:00', 1, 'a:1:{i:0;i:12;}'),
(27, '202208120027', '院線片02', '2022-08-13', '22:00~24:00', 4, 'a:4:{i:0;i:5;i:1;i:6;i:2;i:13;i:3;i:2;}'),
(28, '202208120028', '院線片02', '2022-08-12', '14:00~16:00', 4, 'a:4:{i:0;i:1;i:1;i:4;i:2;i:18;i:3;i:7;}'),
(29, '202208120029', '院線片02', '2022-08-14', '22:00~24:00', 4, 'a:4:{i:0;i:7;i:1;i:12;i:2;i:17;i:3;i:18;}'),
(30, '202208120030', '院線片01', '2022-08-14', '16:00~18:00', 3, 'a:3:{i:0;i:17;i:1;i:14;i:2;i:8;}'),
(31, '202208120031', '院線片04', '2022-08-15', '16:00~18:00', 3, 'a:3:{i:0;i:15;i:1;i:12;i:2;i:6;}'),
(32, '202208120032', '院線片03', '2022-08-15', '18:00~20:00', 1, 'a:1:{i:0;i:9;}'),
(33, '202208120033', '院線片02', '2022-08-14', '16:00~18:00', 4, 'a:4:{i:0;i:4;i:1;i:10;i:2;i:15;i:3;i:7;}'),
(34, '202208120034', '院線片04', '2022-08-15', '20:00~22:00', 4, 'a:4:{i:0;i:7;i:1;i:19;i:2;i:11;i:3;i:17;}'),
(35, '202208120035', '院線片03', '2022-08-14', '20:00~22:00', 4, 'a:4:{i:0;i:12;i:1;i:15;i:2;i:5;i:3;i:7;}'),
(36, '202208120036', '院線片03', '2022-08-12', '14:00~16:00', 2, 'a:2:{i:0;i:9;i:1;i:13;}'),
(37, '202208120037', '院線片01', '2022-08-13', '18:00~20:00', 1, 'a:1:{i:0;i:6;}'),
(38, '202208120038', '院線片03', '2022-08-15', '18:00~20:00', 1, 'a:1:{i:0;i:3;}'),
(39, '202208120039', '院線片01', '2022-08-13', '14:00~16:00', 4, 'a:4:{i:0;i:0;i:1;i:8;i:2;i:18;i:3;i:6;}');

-- --------------------------------------------------------

--
-- 資料表結構 `poster`
--

CREATE TABLE `poster` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rank` int(10) UNSIGNED NOT NULL,
  `sh` tinyint(3) UNSIGNED NOT NULL,
  `ani` tinyint(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `poster`
--

INSERT INTO `poster` (`id`, `img`, `name`, `rank`, `sh`, `ani`) VALUES
(1, '03A01.jpg', '預告片1', 0, 0, 3),
(2, '03A02.jpg', '預告片2', 0, 1, 1),
(3, '03A03.jpg\r\n', '預告片3', 0, 1, 1),
(4, '03A04.jpg\r\n', '預告片4', 0, 1, 1),
(5, '03A05.jpg\r\n', '預告片5', 0, 1, 1),
(6, '03A06.jpg\r\n', '預告片6', 0, 1, 1),
(7, '03A07.jpg\r\n', '預告片7', 0, 1, 1),
(8, '03A08.jpg\r\n', '預告片8', 0, 1, 1),
(9, '03A09.jpg\r\n', '預告片9', 0, 1, 1);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `poster`
--
ALTER TABLE `poster`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `movie`
--
ALTER TABLE `movie`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `poster`
--
ALTER TABLE `poster`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
