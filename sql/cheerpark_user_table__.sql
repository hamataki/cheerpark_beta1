-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2024-07-16 18:47:12
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
-- テーブルの構造 `cheerpark_user_tableβ`
--

CREATE TABLE `cheerpark_user_tableβ` (
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
-- テーブルのデータのダンプ `cheerpark_user_tableβ`
--

INSERT INTO `cheerpark_user_tableβ` (`id`, `name`, `email`, `lid`, `lpw`, `kanri_flg`, `life_flg`, `date`) VALUES
(1, '濱滝 隆之介', 'hamatakiryunosuke@gmail.com', 'hamataki', '$2y$10$BH850ZiCXxIbsJTDbS1KEeB/u.xc7uSiW4mVuW0YTMENZ2fvBMtN.', 1, 0, '2024-07-15 07:50:32'),
(2, 'Steve Jobs', 'test@gmal.com', 'steve', '$2y$10$Y63BHHDn6CxUHe6fI4v5JOyluYNbB2KgC.uMt1I4tVtBs40jQHqw2', 0, 0, '2024-07-15 08:16:42'),
(17, '山田太郎', 'test@gmal.com', 'test1', '$2y$10$3khOYpUE5fiBa/5Ap3b7TulAcOfnFoONAmqRe1JBG5fhy8BKEsRl2', 0, 0, '2024-07-15 16:33:54');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `cheerpark_user_tableβ`
--
ALTER TABLE `cheerpark_user_tableβ`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `cheerpark_user_tableβ`
--
ALTER TABLE `cheerpark_user_tableβ`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
