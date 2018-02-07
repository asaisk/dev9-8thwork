-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2018 年 2 朁E07 日 14:33
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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_bm_table`
--

INSERT INTO `gs_bm_table` (`id`, `date`, `name`, `place`, `distance`, `comment`, `time`) VALUES
(6, '2018/1/25', '北原', '沖縄', 42, '遠かったし暑かった！もう行かない。', '2018-02-01 13:52:00'),
(7, '2017/5/5', '浅井', '北海道', 42, '暑かった！', '2018-02-01 18:58:41'),
(9, '2015/5/6', 'asaiasai', 'okinawa', 32, 'very hot', '2018-02-03 12:31:20'),
(11, '2016/5/31', '浅井', 'ホノルル', 42, '景色がよかった！', '2018-02-03 18:56:06'),
(12, '2017/3/5', '川村', '湘南国際', 42, '初マラソンでした。4時間切ることができました。', '2018-02-04 18:03:51'),
(13, '2015/4/1', '君島', '札幌', 42, 'まだ寒かったですが、楽しかったです。', '2018-02-06 23:24:48');

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_user_table`
--

CREATE TABLE IF NOT EXISTS `gs_user_table` (
`id` int(12) NOT NULL,
  `name` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `lid` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `lpw` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kanri_flg` int(1) NOT NULL,
  `life_flg` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_user_table`
--

INSERT INTO `gs_user_table` (`id`, `name`, `lid`, `lpw`, `kanri_flg`, `life_flg`) VALUES
(2, '浅井', 'asai', 'asai', 0, 0),
(4, '浅井', 'asai', 'asaiasai', 0, 0),
(5, '北村', 'kik', 'tamu', 0, 0),
(6, 'asai', 'asaiasai', 'aaaaaa', 0, 0),
(9, '浅井', 'asaiasai', 'password', 1, 0),
(10, '柏原', 'kashi', 'hara', 0, 1),
(11, '笠原', 'kasa', 'hara', 0, 0),
(12, '向井', 'mukai', 'mukai', 1, 0),
(13, '平松', 'hira', 'matsu', 0, 0),
(14, '浜辺', 'hama', 'be', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gs_user_table`
--
ALTER TABLE `gs_user_table`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `gs_user_table`
--
ALTER TABLE `gs_user_table`
MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
