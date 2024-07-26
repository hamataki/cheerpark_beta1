-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2024-07-26 01:57:52
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
-- テーブルの構造 `cheerpark_user_tableβ1`
--

CREATE TABLE `cheerpark_user_tableβ1` (
  `id` int(12) NOT NULL,
  `name` varchar(64) NOT NULL,
  `email` varchar(128) NOT NULL,
  `lid` varchar(128) NOT NULL,
  `lpw` varchar(255) NOT NULL,
  `kanri_flg` int(1) NOT NULL,
  `life_flg` int(1) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `cheerpark_user_tableβ1`
--

INSERT INTO `cheerpark_user_tableβ1` (`id`, `name`, `email`, `lid`, `lpw`, `kanri_flg`, `life_flg`, `date`) VALUES
(1, '濱滝 隆之介', 'hamatakiryunosuke@gmail.com', 'hamataki', '$2y$10$PQEMBzQVqLtcYEomiv8JIuibB989MR/PMwUoOb76Z50pG41oH94hW', 1, 0, '2024-07-17 13:09:29'),
(2, 'Steve Jobs', 'test@gmal.com', 'steve', '$2y$10$/gMT1yPisaLq1.Q7Ild7n.ZaJxWPeXKQo/ElzG2y3TOfi52XhmZGC', 0, 0, '2024-07-17 13:16:13'),
(3, '盛田昭夫', 'test@gmal.com', 'morita', '$2y$10$8WbZ.f7Cnr3AP9IXOKk/quKESZJbtqF2DGZddwtBxfqwJ2J/Z7njm', 0, 0, '2024-07-26 08:50:56');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `cheerpark_user_tableβ1`
--
ALTER TABLE `cheerpark_user_tableβ1`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `cheerpark_user_tableβ1`
--
ALTER TABLE `cheerpark_user_tableβ1`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
