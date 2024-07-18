-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2024-07-18 14:39:34
-- 伺服器版本： 8.4.0
-- PHP 版本： 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `midterm`
--

-- --------------------------------------------------------

--
-- 資料表結構 `flavor_list`
--

CREATE TABLE `flavor_list` (
  `f_id` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `f_name` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `flavor_list`
--

INSERT INTO `flavor_list` (`f_id`, `f_name`) VALUES
('F01', '果香味 '),
('F02', '柑橘味'),
('F03', '花香味 '),
('F04', '焦糖味'),
('F05', '巧克力風味'),
('F06', '堅果味'),
('F07', '木質風味'),
('F08', '黑醋栗'),
('F09', '烟燻味');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `flavor_list`
--
ALTER TABLE `flavor_list`
  ADD PRIMARY KEY (`f_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
