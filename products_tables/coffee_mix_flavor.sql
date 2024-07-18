-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2024-07-18 14:39:39
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
-- 資料表結構 `coffee_mix_flavor`
--

CREATE TABLE `coffee_mix_flavor` (
  `p_id` varchar(10) NOT NULL,
  `f_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `coffee_mix_flavor`
--

INSERT INTO `coffee_mix_flavor` (`p_id`, `f_id`) VALUES
('CB001', 'F01'),
('CB001', 'F06'),
('CB002', 'F02'),
('CB002', 'F04'),
('ET001', 'F02'),
('ET001', 'F03'),
('ET002', 'F02'),
('ET002', 'F03'),
('BR001', 'F05'),
('BR001', 'F06'),
('JM001', 'F02'),
('JM001', 'F03'),
('VN001', 'F05'),
('ID001', 'F07'),
('ID001', 'F09'),
('KE001', 'F01'),
('KE001', 'F08'),
('KE002', 'F01'),
('KE002', 'F08'),
('KE003', 'F02'),
('KE003', 'F08'),
('MM001', 'F01'),
('MM001', 'F06');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `coffee_mix_flavor`
--
ALTER TABLE `coffee_mix_flavor`
  ADD KEY `f_id` (`f_id`),
  ADD KEY `p_id` (`p_id`);

--
-- 已傾印資料表的限制式
--

--
-- 資料表的限制式 `coffee_mix_flavor`
--
ALTER TABLE `coffee_mix_flavor`
  ADD CONSTRAINT `coffee_mix_flavor_ibfk_2` FOREIGN KEY (`f_id`) REFERENCES `flavor_list` (`f_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `coffee_mix_flavor_ibfk_3` FOREIGN KEY (`p_id`) REFERENCES `goods_list` (`p_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
