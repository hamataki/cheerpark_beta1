-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2024-07-27 02:23:37
-- サーバのバージョン： 10.4.32-MariaDB
-- PHP のバージョン: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `cheerpark_db_class`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `cheerpark_an_tableβ1`
--

CREATE TABLE `cheerpark_an_tableβ1` (
  `id` int(12) NOT NULL,
  `user_id` int(10) NOT NULL,
  `youtube` text NOT NULL,
  `note` text NOT NULL,
  `genre` varchar(64) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `cheerpark_an_tableβ1`
--

INSERT INTO `cheerpark_an_tableβ1` (`id`, `user_id`, `youtube`, `note`, `genre`, `date`) VALUES
(1, 1, '<iframe width=\"727\" height=\"409\" src=\"https://www.youtube.com/embed/9P9ljXzP0c0\" title=\"Jürgen Klopp&#39;s Anfield Farewell Speech\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', 'Klopp farewell speech', '移籍関連', '0000-00-00 00:00:00'),
(4, 1, '<iframe width=\"727\" height=\"409\" src=\"https://www.youtube.com/embed/lRqFnF9SrmQ\" title=\"「アイ・ラブ・ユー」 |ユルゲン・クロップ監督が選手たちに向けた試合後の最後のスピーチ\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', 'Liverpool', '自己解説', '2024-07-27 09:19:26'),
(15, 4, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/j9otrvph8GE?list=UUiNCXr6Lcb_QJbJth1ravLA\" title=\"Montenegro tryout\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', 'プレー集', 'プレー集', '2024-07-26 18:52:47'),
(20, 4, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/S0VmeqJzfc4?list=UUufrQ7KVPceps_tH-V3s1dw\" title=\"23/24 Season Highlight\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', 'プレー集', 'プレー集', '2024-07-26 18:47:56'),
(21, 4, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/4FwTCrecSXg?list=UUjcCZsORXhZnpYASLGJ9EBA\" title=\"Montenegro play video\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', 'プレー集', 'プレー集', '2024-07-26 18:49:15'),
(22, 4, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/qoOOQDCJZ3c?list=UU2BoVdUveKK2avyc3xdq0Zw\" title=\"Play Highlight / Jun Toba / FC Lernayin Artsakh No.16 / Armenia Premier League (2022/23 Season)\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', 'プレー集', 'プレー集', '2024-07-26 18:51:05'),
(25, 4, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/lb4tQ99efSc?list=UULSC-wYN-2-7KSHpIzHEJGw\" title=\"Rintaro Tsuchitani  Highlight\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', 'プレー集', 'プレー集', '2024-07-26 19:01:12');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `cheerpark_an_tableβ1`
--
ALTER TABLE `cheerpark_an_tableβ1`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `cheerpark_an_tableβ1`
--
ALTER TABLE `cheerpark_an_tableβ1`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
