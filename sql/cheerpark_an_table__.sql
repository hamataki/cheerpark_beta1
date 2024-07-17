-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2024-07-16 18:47:41
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
-- テーブルの構造 `cheerpark_an_tableβ`
--

CREATE TABLE `cheerpark_an_tableβ` (
  `id` int(11) NOT NULL,
  `imgfile` varchar(256) NOT NULL,
  `note` text NOT NULL,
  `genre` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `cheerpark_an_tableβ`
--

INSERT INTO `cheerpark_an_tableβ` (`id`, `imgfile`, `note`, `genre`, `date`) VALUES
(18, 'img/66945a174d86c.jpg', 'good!', '食', '2024-07-15 08:07:03'),
(19, 'img/66945a6c66f35.jpg', 'Nice!', 'インタビュー', '2024-07-15 08:08:28'),
(20, 'img/66945c822275f.png', 'Think different.', 'その他', '2024-07-15 08:17:22'),
(21, 'img/6694cfc0c9e39.jpg', 'ee', '食', '2024-07-15 16:29:04'),
(22, 'img/6694d093edc05.png', 'ww', 'プレー集', '2024-07-15 16:32:35');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `cheerpark_an_tableβ`
--
ALTER TABLE `cheerpark_an_tableβ`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `cheerpark_an_tableβ`
--
ALTER TABLE `cheerpark_an_tableβ`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
