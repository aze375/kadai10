-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2017 年 11 月 03 日 19:13
-- サーバのバージョン： 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gs_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_10_table`
--

CREATE TABLE IF NOT EXISTS `gs_10_table` (
`id` int(12) NOT NULL,
  `client` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `category` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `delivery` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `naiyou` text COLLATE utf8_unicode_ci,
  `url` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `productioncompany` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pm` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pl` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cd` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ad` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cw` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `des` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `comment` text COLLATE utf8_unicode_ci,
  `indate` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_10_table`
--

INSERT INTO `gs_10_table` (`id`, `client`, `category`, `delivery`, `naiyou`, `url`, `productioncompany`, `pm`, `pl`, `cd`, `ad`, `cw`, `des`, `comment`, `indate`) VALUES
(1, '株式会社三角', 'メーカー', '1月', 'ランディングページ', 'http//', '内部制作', '田中', '鈴木', '佐藤', '木村', '高橋', '伊藤', '改善実績あり', '2017-11-04 02:42:31'),
(2, '株式会社四角', '小売', '7月', 'バナー', 'なし', '内部制作', 'なし', 'なし', '佐々木', 'なし', 'なし', '池田', 'なし', '2017-11-04 02:44:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gs_10_table`
--
ALTER TABLE `gs_10_table`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gs_10_table`
--
ALTER TABLE `gs_10_table`
MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
