-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2018 年 1 月 27 日 07:28
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
-- テーブルの構造 `gs_an_table`
--

CREATE TABLE IF NOT EXISTS `gs_an_table` (
`id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `naiyou` text COLLATE utf8_unicode_ci NOT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_an_table`
--

INSERT INTO `gs_an_table` (`id`, `name`, `email`, `naiyou`, `indate`) VALUES
(2, '鈴木sss', 'test2@test.jp', '内容', '2017-11-28 11:31:50'),
(3, '佐藤', 'test3@test.jp', '内容', '2017-11-28 11:31:50'),
(4, '佐々木', 'test4@test.jp', '内容木', '2017-11-28 11:31:50'),
(5, '鏑木', 'test5@test.jp', '内容', '2017-11-28 11:31:50'),
(6, 'やまさん', 'yamasan@test.jp', 'やまさあん', '2017-11-28 12:20:28'),
(8, 'a', 'd', 'b', '2017-11-30 17:17:39'),
(9, 'aaaaa', 'vvvvv', 'bbbbb', '2017-11-30 17:19:03'),
(10, 'aaaaaa', 'dddddddd', 'gg', '2017-11-30 17:20:22'),
(11, 'aaaaaa', 'dddddddd', 'gg', '2017-11-30 17:20:22'),
(12, 'aaaaaa', 'dddddddd', 'gg', '2017-11-30 17:20:24'),
(13, 'aaaaaa', 'dddddddd', 'gg', '2017-11-30 17:20:25'),
(14, 'aaaaaa', 'dddddddd', 'gg', '2017-11-30 17:20:26'),
(15, 'aaaaaa', 'dddddddd', 'gg', '2017-11-30 17:20:26'),
(16, 'aaaaaa', 'dddddddd', 'gg', '2017-11-30 17:20:27'),
(17, 'aaaaaa', 'dddddddd', 'gg', '2017-11-30 17:20:27'),
(18, 'あいうえお', 'さしすせそ', 'ABC', '2017-11-30 17:24:40'),
(19, 'やまざき', 'test@test.jp', 'kyou \r\n', '2017-12-05 09:25:58'),
(20, 'TEST', 'TEST', 'TET', '2017-12-05 09:38:35'),
(21, 'Yamazaki Daisuke', 'php.yamazaki@gmail.com', 'aaaaaaa', '2017-12-06 11:31:54'),
(22, 'Yamazaki Daisuke', 'php.yamazaki@gmail.com', 'aaaaaaaaaa', '2017-12-06 11:32:36'),
(23, 'Yamazaki Daisuke', 'ddddddd', 'dddddddddd', '2017-12-06 11:32:59'),
(24, 'yamaza', 'php.yamazaki@gmail.com', 'aaaaaa', '2017-12-07 12:32:44'),
(25, 'aaaaaa', 'php.yamazaki@gmail.com', 'aaaaaaaa', '2017-12-07 12:33:00'),
(26, 'aaaa', 'php.yamazaki@gmail.com', 'qqq', '2017-12-07 12:34:04'),
(27, 'Yamazaki Daisuke', 'php.yamazaki@gmail.com', 'aaaaa', '2017-12-07 12:35:11'),
(28, 'Yamazaki Daisuke', 'php.yamazaki@gmail.com', 'aaaa', '2017-12-07 12:36:03'),
(29, 'sssssss', 'dddddddddddd', 'sssssssssssssss', '2017-12-07 16:49:50'),
(30, 'aaaaa', 'ddddd', 'dddd', '2017-12-07 16:51:36'),
(31, 'ssss', 'dddd', 'ssssss', '2017-12-07 16:52:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gs_an_table`
--
ALTER TABLE `gs_an_table`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gs_an_table`
--
ALTER TABLE `gs_an_table`
MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
