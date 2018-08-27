-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2018-08-27 10:26:51
-- 伺服器版本: 10.1.31-MariaDB
-- PHP 版本： 7.0.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `db04_2`
--

-- --------------------------------------------------------

--
-- 資料表結構 `bot`
--

CREATE TABLE `bot` (
  `bot_seq` int(10) UNSIGNED NOT NULL,
  `bot_txt` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `bot`
--

INSERT INTO `bot` (`bot_seq`, `bot_txt`) VALUES
(1, 'NO.2');

-- --------------------------------------------------------

--
-- 資料表結構 `item1`
--

CREATE TABLE `item1` (
  `item1_seq` int(10) UNSIGNED NOT NULL,
  `item1_txt` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `item1`
--

INSERT INTO `item1` (`item1_seq`, `item1_txt`) VALUES
(2, '流行皮件'),
(3, '流行鞋區'),
(4, '流行飾品'),
(5, '背包');

-- --------------------------------------------------------

--
-- 資料表結構 `item2`
--

CREATE TABLE `item2` (
  `item2_seq` int(10) UNSIGNED NOT NULL,
  `item2_txt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `item2_i1` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `item2`
--

INSERT INTO `item2` (`item2_seq`, `item2_txt`, `item2_i1`) VALUES
(1, '男用皮件', 2),
(2, '女用皮件', 2),
(3, '少女鞋區', 3),
(4, '紳士流行鞋區', 3),
(5, '時尚手錶', 4),
(6, '時尚珠寶', 4),
(7, '背包', 5);

-- --------------------------------------------------------

--
-- 資料表結構 `item3`
--

CREATE TABLE `item3` (
  `item3_seq` int(10) UNSIGNED NOT NULL,
  `item3_txt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `item3_price` int(10) NOT NULL,
  `item3_type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `item3_howmuch` int(10) NOT NULL,
  `item3_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `item3_con` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `item3_i1` int(10) NOT NULL,
  `item3_i2` int(10) NOT NULL,
  `item3_display` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `item3`
--

INSERT INTO `item3` (`item3_seq`, `item3_txt`, `item3_price`, `item3_type`, `item3_howmuch`, `item3_img`, `item3_con`, `item3_i1`, `item3_i2`, `item3_display`) VALUES
(11, '手工訂製長夾', 1200, '全牛皮', 2, '1535372689.jpg', '手工製作長夾卡片層6*2 鈔票層 *2 零錢拉鍊層 *1 \r\n採用愛馬仕相同的雙針縫法,皮件堅固耐用不脫線 \r\n材質:直革鞣(馬鞍皮)牛皮製作  \r\n手工染色 ', 2, 1, 1),
(12, '兩用式磁扣腰包', 685, '中型', 18, '1535372720.jpg', '材質:進口牛皮\r\n顏色:黑色荔枝紋+黑色珠光面皮(黑色縫線)\r\n尺寸:15cm*14cm(高)*6cm(前後)\r\n產地:臺灣', 2, 1, 1),
(13, '超薄設計男士長款真皮', 800, 'L號', 61, '1535372814.jpg', '基本:編織皮革對摺長款零錢包\r\n特色:最潮流最時尚的單品 \r\n顏色:黑色珠光面皮(黑色縫線)\r\n形狀:黑白格編織皮革對摺 ', 2, 1, 1),
(14, '經典牛皮少女帆船鞋', 1000, 'S號', 6, '1535372846.jpg', '以傳統學院派風格聞名，創始近百年工藝製鞋精神\r\n共用獨家專利氣墊技術，兼具紐約工藝精神，與舒適跑格靈魂', 3, 3, 1),
(15, '經典優雅時尚流行涼鞋', 2650, 'LL', 8, '1535372900.jpg', '優雅流線方型楦頭設計，結合簡潔線條綴飾，\r\n獨特的弧度與曲線美，突顯年輕優雅品味，\r\n是年輕上班族不可或缺的鞋款！\r\n全新美國運回，現貨附鞋盒', 3, 4, 1),
(16, '寵愛天然藍寶女戒', 28000, '1克拉', 1, '1535372936.jpg', '◎典雅設計品味款\r\n◎藍寶為珍貴天然寶石之一，具有保值收藏\r\n◎專人設計製造，以貴重珠寶精緻鑲工製造', 4, 6, 1),
(17, '反折式大容量手提肩背包', 888, 'L號', 15, '1535372976.jpg', '特色:反折式的包口設計,釘釦的裝飾,讓簡單的包型更增添趣味性\r\n材質:棉布\r\n顏色:藍色\r\n尺寸:長50cm寬20cm高41cm\r\n產地:日本', 5, 7, 1),
(18, '男單肩包男', 650, '多功能', 7, '1535373001.jpg', '特色:男單肩包/電腦包/公文包/雙肩背包多用途\r\n材質:帆不\r\n顏色:黑色\r\n尺寸:深11cm寬42cm高33cm\r\n產地:香港', 5, 7, 1);

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

CREATE TABLE `member` (
  `member_seq` int(10) UNSIGNED NOT NULL,
  `member_acc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_pw` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_lv1` int(2) NOT NULL,
  `member_lv2` int(2) NOT NULL,
  `member_lv3` int(2) NOT NULL,
  `member_lv4` int(2) NOT NULL,
  `member_lv5` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `member`
--

INSERT INTO `member` (`member_seq`, `member_acc`, `member_pw`, `member_lv1`, `member_lv2`, `member_lv3`, `member_lv4`, `member_lv5`) VALUES
(1, 'admin', '1234', 1, 1, 1, 1, 1),
(2, '123', '123', 1, 1, 0, 1, 0),
(3, 'qqq', 'qqq', 1, 1, 0, 0, 1);

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `bot`
--
ALTER TABLE `bot`
  ADD PRIMARY KEY (`bot_seq`);

--
-- 資料表索引 `item1`
--
ALTER TABLE `item1`
  ADD PRIMARY KEY (`item1_seq`);

--
-- 資料表索引 `item2`
--
ALTER TABLE `item2`
  ADD PRIMARY KEY (`item2_seq`);

--
-- 資料表索引 `item3`
--
ALTER TABLE `item3`
  ADD PRIMARY KEY (`item3_seq`);

--
-- 資料表索引 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_seq`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `bot`
--
ALTER TABLE `bot`
  MODIFY `bot_seq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表 AUTO_INCREMENT `item1`
--
ALTER TABLE `item1`
  MODIFY `item1_seq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用資料表 AUTO_INCREMENT `item2`
--
ALTER TABLE `item2`
  MODIFY `item2_seq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- 使用資料表 AUTO_INCREMENT `item3`
--
ALTER TABLE `item3`
  MODIFY `item3_seq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- 使用資料表 AUTO_INCREMENT `member`
--
ALTER TABLE `member`
  MODIFY `member_seq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
