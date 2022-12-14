-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2022-12-14 18:35:19
-- サーバのバージョン： 10.4.27-MariaDB
-- PHP のバージョン: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `kadai_20221217`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_bm_table`
--

CREATE TABLE `gs_bm_table` (
  `id` int(20) NOT NULL,
  `item` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `num` int(20) NOT NULL,
  `price` int(20) NOT NULL,
  `itemurl` text NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- テーブルのデータのダンプ `gs_bm_table`
--

INSERT INTO `gs_bm_table` (`id`, `item`, `type`, `num`, `price`, `itemurl`, `date`) VALUES
(12, 'とまと', '食費', 2, 1111, 'aaaa', '2022-12-14 21:49:18'),
(13, 'きゅうり', '娯楽費', 2, 222, 'aaaa', '2022-12-14 22:04:09'),
(14, 'なす', '交通費', 2, 222, 'aaaa', '2022-12-14 22:04:21'),
(15, 'はさみ', '娯楽費', 2, 1111, 'aaaa', '2022-12-14 22:04:32'),
(16, 'きゅうり', '食費', 3, 333, 'aaaa', '2022-12-14 23:58:19'),
(17, 'はさみ', '食費', 2, 222, 'aaaa', '2022-12-15 00:07:15'),
(18, 'きゅうり', '娯楽費', 2, 1111, 'aaaa', '2022-12-15 00:07:22'),
(19, 'はさみ', '交通費', 2, 222, 'aaaa', '2022-12-15 00:07:27'),
(20, 'とまと', '娯楽費', 2, 1111, 'aaaa', '2022-12-15 01:02:49'),
(21, 'きゅうり', '娯楽費', 2, 1111, 'aaaa', '2022-12-15 01:02:55');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
