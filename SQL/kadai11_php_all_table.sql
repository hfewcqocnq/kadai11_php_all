-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2024-07-25 14:39:04
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
-- データベース: `kadai11_php_all`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `kadai11_php_all_table`
--

CREATE TABLE `kadai11_php_all_table` (
  `id` int(12) NOT NULL,
  `user_id` int(10) NOT NULL,
  `title` varchar(20) NOT NULL,
  `naiyou` varchar(500) NOT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `kadai11_php_all_table`
--

INSERT INTO `kadai11_php_all_table` (`id`, `user_id`, `title`, `naiyou`, `indate`) VALUES
(12, 5, '伊藤 左千夫', '「河口湖」\r\n「去年」\r\n「紅黄録」\r\n「春の潮」\r\n「野菊の墓」\r\n「隣の嫁」', '2024-07-18 22:14:24'),
(13, 2, '夏目 漱石', '「こころ」\r\n「それから」\r\n「虞美人草」\r\n「吾輩は猫である」\r\n「坑夫」\r\n「三四郎」\r\n「私の個人主義」\r\n「手紙」\r\n「草枕」\r\n「道草」\r\n「彼岸過迄」\r\n「坊っちゃん」\r\n「夢十夜」\r\n「明暗」\r\n「門」\r\n「倫敦塔」\r\n「硝子戸の中」\r\n「文鳥」', '2024-07-18 22:15:46'),
(14, 1, '宮沢 賢治', '「オツベルと象」\r\n「グスコーブドリの伝記」\r\n「セロ弾きのゴーシュ」\r\n「ツェねずみ」\r\n「やまなし」\r\n「よだかの星」\r\n「雨ニモマケズ」\r\n「銀河鉄道の夜」\r\n「春と修羅」\r\n「注文の多い料理店」\r\n「風の又三郎」\r\n「二十六夜」', '2024-07-18 22:16:44'),
(15, 1, '森 鴎外', '「ヰタ・セクスアリス」\r\n「阿部一族」\r\n「高瀬舟」\r\n「山椒大夫」\r\n「舞姫」', '2024-07-18 22:17:36');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `kadai11_php_all_table`
--
ALTER TABLE `kadai11_php_all_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `kadai11_php_all_table`
--
ALTER TABLE `kadai11_php_all_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
