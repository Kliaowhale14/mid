-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2024-07-18 14:39:27
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
-- 資料表結構 `goods_list`
--

CREATE TABLE `goods_list` (
  `p_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `p_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `p_pic` varchar(255) DEFAULT NULL,
  `p_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `p_price` int NOT NULL,
  `p_discount` int NOT NULL,
  `p_intro` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `p_weight` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `p_storage` int NOT NULL,
  `p_color` varchar(10) DEFAULT NULL,
  `p_loc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `p_breed` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `p_process` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `p_roast` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `p_flavor` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `p_sale` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `p_update` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `goods_list`
--

INSERT INTO `goods_list` (`p_id`, `p_name`, `p_pic`, `p_type`, `p_price`, `p_discount`, `p_intro`, `p_weight`, `p_storage`, `p_color`, `p_loc`, `p_breed`, `p_process`, `p_roast`, `p_flavor`, `p_sale`, `p_update`) VALUES
('3', '44', 'logo.png', '', 4, 3, '', '', 3, '', '', '', '', '', '', 's_000', '2024-07-18 14:15:02'),
('4', '4', 'bread.jpg', '4', 4, 4, '4', '99', 4, '', '', '', '', '', '', 's_000', '2024-07-18 14:15:31'),
('5', '7', 'uploads/6698af90b0577.', '66', 5, 5, '5', '5', 5, '5', '', '', '', '', '', 's_000', '2024-07-18 14:00:48'),
('6', '6', '6698a51b44f9b.png', '', 6, 6, '6', '6', 6, '6', '6', '', '', '', '', 's_000', '2024-07-18 13:16:11'),
('BR001', '巴西Santos咖啡豆', '', '咖啡豆', 200, 310, '巴西Santos咖啡豆是來自巴西最具代表性的咖啡豆之一，得名於其主要出口港口聖保羅（Santos）。這些豆子通常具有濃厚的身體感和低酸度，帶有明顯的巧克力和堅果的風味。巴西Santos咖啡豆適合用於混合咖啡中，為咖啡增添濃郁的口感和甜美的風味，是許多咖啡愛好者日常喜愛的選擇之一。', '115g', 5, NULL, '巴西', '阿拉比卡', '日曬法', '中深烘焙', NULL, 's_000', '2023-06-28 00:00:00'),
('CB001', '哥倫比亞Supremo咖啡豆', '', '咖啡豆', 250, 200, '哥倫比亞Excelso咖啡豆是來自哥倫比亞的高品質咖啡豆之一，通常是來自較大的豆子或選擇性採摘的次等豆子。這些豆子通常具有平衡的口感和豐富的果酸度，帶有明顯的堅果和甜味。哥倫比亞Excelso咖啡豆以其溫和且酸度適中的風味特色而廣受歡迎，適合單獨飲用或用於混合咖啡中增加風味層次。', '115g', 5, NULL, '哥倫比亞', '阿拉比卡', '水洗法', '中烘焙', NULL, 's_001', '2023-05-10 00:00:00'),
('CB002', '哥倫比亞Excelso咖啡豆', '', '咖啡豆', 240, 225, '哥倫比亞Excelso咖啡豆是來自哥倫比亞的高品質咖啡豆之一，通常是來自較大的豆子或選擇性採摘的次等豆子。這些豆子通常具有平衡的口感和豐富的果酸度，帶有明顯的堅果和甜味。哥倫比亞Excelso咖啡豆以其溫和且酸度適中的風味特色而廣受歡迎，適合單獨飲用或用於混合咖啡中增加風味層次。', '115g', 3, NULL, '哥倫比亞', '阿拉比卡', '水洗法', '中烘焙', NULL, 's_000', '2023-08-05 00:00:00'),
('ET001', '衣索比亞Yirgacheffe咖啡豆', '', '咖啡豆', 300, 240, '通常展現出明亮的酸度和清新的口感，帶有鮮明的茉莉花香和柑橘的果味。Sidamo咖啡豆有時也會帶有淡淡的莓果或茶葉的風味，整體風味複雜而平衡，非常受到咖啡愛好者的喜愛。', '115g', 1, NULL, '衣索比亞', '阿拉比卡', '自然處理法', '輕烘焙', NULL, 's_000', '2023-07-15 00:00:00'),
('ET002', '衣索比亞Sidamo咖啡豆', '', '咖啡豆', 310, 300, '通常展現出明亮的酸度和清新的口感，帶有鮮明的茉莉花香和柑橘的果味。Sidamo咖啡豆有時也會帶有淡淡的莓果或茶葉的風味，整體風味複雜而平衡，非常受到咖啡愛好者的喜愛。', '115g', 0, NULL, '衣索比亞', '阿拉比卡', '自然處理法', '中烘焙', NULL, 's_000', '2023-07-01 00:00:00'),
('FR001', '法式壓濾壺', '', '器具', 300, 4000, '法式壓濾壺製作的咖啡具有豐富的油脂和濃郁的口感，通常比其他咖啡沖泡方式更濃厚和濃郁。這種方式尤其適合喜愛口感豐富和濃郁風味的咖啡愛好者。使用法式壓濾壺沖泡的咖啡不需要濾紙，保留了咖啡豆的所有精華，因此常被認為是一種精緻且具有傳統風味的沖泡方式。', NULL, 1, '黑色/藍色', '法國', NULL, NULL, NULL, NULL, 's_002', '2023-07-01 00:00:00'),
('ID001', '印尼Sumatra咖啡豆', '', '咖啡豆', 280, 280, '印尼Sumatra咖啡豆是來自印尼島西北部的咖啡豆，以其獨特的風味而聞名。這些豆子通常展現出濃厚的身體感和低酸度，帶有濃郁的泥土、煙燻和香料的風味。Sumatra咖啡豆常用於深烘焙的咖啡中，其特殊的風味使其成為喜愛濃郁口感的咖啡愛好者的首選之一。', '115g', 1, NULL, '印尼', '阿拉比卡', '半水洗法', '中烘焙', NULL, 's_000', '2023-07-31 00:00:00'),
('IT001', '義式濃縮咖啡機', '', '器具', 5000, 280, '意式濃縮咖啡機是一種專為製作濃縮咖啡而設計的咖啡機。它通常具有高壓萃取系統（通常是15巴以上），能夠將熱水通過咖啡粉快速且均勻地萃取出濃郁的咖啡液。這種機器操作簡便，可以製作出具有濃厚咖啡香和奶油色泡沫的意式濃縮咖啡，是咖啡愛好者喜愛的選擇之一。', NULL, 6, '不銹鋼色', '義大利', NULL, NULL, NULL, NULL, 's_002', '2023-08-02 00:00:00'),
('JM001', '牙買加藍山咖啡豆', '', '咖啡豆', 1200, 240, '牙買加藍山咖啡豆是世界上最著名的高級咖啡之一，主要產於牙買加的藍山地區。這些咖啡豆以其溫和的口感、柔和的酸度和完美平衡的風味而聞名。通常具有花香氣息和堅果的香甜味，口感濃郁圓潤，並伴有淡淡的可可味道。由於生產量稀少，牙買加藍山咖啡被視為稀有且極具價值的豆子，常被認為是咖啡中的極致享受。', '115g', 5, NULL, '牙買加', '阿拉比卡', '水洗法', '中烘焙', NULL, 's_000', '2023-04-17 00:00:00'),
('KE001', '肯亞AA級咖啡豆', '', '咖啡豆', 350, 280, '肯亞AA級咖啡豆是肯亞咖啡中最高級別之一，通常來自高海拔地區，如肯亞中央省的恩布羅省。這些豆子大小均勻，質量優良，以其獨特的風味特點而著稱。肯亞AA級咖啡豆通常展現出明亮而清新的酸度，伴隨著濃郁的黑醋栗、柑橘和莓果的風味。它們的口感潔淨且平衡，被認為是世界上最優質的咖啡之一，深受精品咖啡愛好者的喜愛。', '115g', 4, NULL, '肯亞', '阿拉比卡', '水洗法', '中深烘焙', NULL, 's_002', '2023-06-15 00:00:00'),
('KE002', '肯亞精選AA級咖啡豆', '', '咖啡豆', 350, 288, '肯亞精選AA級咖啡豆是來自肯亞的最高品質之一，精心挑選的咖啡豆，通常來自高海拔地區，如恩布羅省。這些豆子通常較大且質量優良，具有明亮的酸度和豐富的口感。肯亞精選AA級咖啡豆的風味特點包括濃郁的黑醋栗、柑橘和莓果風味，伴隨著甜味和清新的餘韻。這些豆子通常被認為是肯亞咖啡中的頂級選擇，是高端咖啡愛好者追求的對象。', '115g', 0, NULL, '肯亞', '阿拉比卡', '水洗法', '中深烘焙', NULL, 's_002', '2023-06-15 00:00:00'),
('KE003', '肯亞特級AA咖啡豆', '', '咖啡豆', 360, 360, '肯亞特級AA咖啡豆是肯亞咖啡中的最高級別，具有卓越的品質和獨特的風味特點。這些豆子通常來自肯亞中央省的高海拔地區，如恩布羅省。它們的特點包括極其均勻的大小和高質量的豆子，展現出明亮而清新的酸度，伴隨著濃郁的黑醋栗、柑橘和莓果的風味。肯亞特級AA咖啡豆的口感豐富、潔淨且平衡，是全球精品咖啡中的極品之一，深受高端咖啡愛好者的青睞。', '115g', 5, NULL, '肯亞', '阿拉比卡', '水洗法', '中深烘焙', NULL, 's_000', '2023-08-10 00:00:00'),
('MM001', '墨西哥Chiapas咖啡豆', '', '咖啡豆', 220, 220, '墨西哥Chiapas咖啡豆來自墨西哥南部的Chiapas州，以其獨特的風味和高品質而聞名。這些豆子通常展現出中等到濃厚的身體感，低到中等的酸度，帶有柔和的甜味和堅果的香氣。Chiapas咖啡豆的風味特點可能包括巧克力、焦糖、柑橘或香草的調性，口感平衡且頗受歡迎。这些咖啡豆通常適合獨自品嚐或用於混合咖啡中，為飲品帶來溫暖和豐富的風味。', '115g', 3, NULL, '墨西哥', '阿拉比卡', '日曬法', '中烘焙', NULL, 's_000', '2023-05-05 00:00:00'),
('VN001', '越南Robusta咖啡豆', '', '咖啡豆', 180, 1200, '越南Robusta咖啡豆是越南主要的咖啡品種之一，通常生長在高地地區，如達拉特高原。這些咖啡豆以其強烈的風味和高咖啡因含量而著稱。Robusta豆的特點包括濃厚的身體感、低酸度、以及明顯的苦味和木質風味。它們常用於製作濃縮咖啡和混合咖啡中，為飲品增添強烈的口感和香味。', '115g', 9, NULL, '越南', '羅布斯塔', '日曬法', '中深烘焙', NULL, 's_000', '2023-06-02 00:00:00');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `goods_list`
--
ALTER TABLE `goods_list`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `p_sale` (`p_sale`);

--
-- 已傾印資料表的限制式
--

--
-- 資料表的限制式 `goods_list`
--
ALTER TABLE `goods_list`
  ADD CONSTRAINT `goods_list_ibfk_1` FOREIGN KEY (`p_sale`) REFERENCES `sale_activity` (`s_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
