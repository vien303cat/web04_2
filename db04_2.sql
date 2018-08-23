-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2018-08-23 16:54:30
-- 伺服器版本: 10.1.31-MariaDB
-- PHP 版本： 5.6.35

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
(7, '背包', 5),
(9, '拜託改><', 5);

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
  MODIFY `item3_seq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表 AUTO_INCREMENT `member`
--
ALTER TABLE `member`
  MODIFY `member_seq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
