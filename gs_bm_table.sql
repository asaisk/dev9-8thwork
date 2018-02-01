-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2018 年 2 朁E01 日 12:37
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
-- テーブルの構造 `gs_bm_table`
--

CREATE TABLE IF NOT EXISTS `gs_bm_table` (
`id` int(12) NOT NULL,
  `date` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  `place` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `distance` int(12) NOT NULL,
  `comment` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_bm_table`
--

INSERT INTO `gs_bm_table` (`id`, `date`, `name`, `place`, `distance`, `comment`, `time`) VALUES
(2, '2017/1/28', '浅井', '茨城県', 0, 'asai satoshi', '2018-01-29 23:26:38'),
(3, '2017/1/27', '浅井', '皇居10周', 25, 'good', '2018-01-29 23:28:31'),
(5, '2017/3/5', '浅井', '深大寺', 13, '桜が綺麗だった。足が痛い。', '2018-01-30 23:49:57'),
(6, '2018/1/25', '北原', '沖縄', 42, '遠かった！', '2018-02-01 13:52:00'),
(7, '2017/5/5', '浅井', '北海道', 42, '暑かった！', '2018-02-01 18:58:41'),
(8, '2017/5/23', '浅井', '香川県', 23, 'うどん！', '2018-02-01 20:05:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
