-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2018 年 2 朁E26 日 15:17
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
-- テーブルの構造 `gs_code_table`
--

CREATE TABLE IF NOT EXISTS `gs_code_table` (
`id` int(12) NOT NULL,
  `date` date NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `spec` text COLLATE utf8_unicode_ci NOT NULL,
  `subject` text COLLATE utf8_unicode_ci NOT NULL,
  `source` text COLLATE utf8_unicode_ci NOT NULL,
  `link` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_code_table`
--

INSERT INTO `gs_code_table` (`id`, `date`, `name`, `spec`, `subject`, `source`, `link`) VALUES
(5, '2018-02-12', '浅井', 'css', 'セレクトボックスを作成', 'ああああ', 'http://www.htmq.com/html/select.shtml'),
(7, '2018-02-12', '浅井', 'css', 'フォントの変更', '<p>font-size: 15px;</p>\r\n\r\n<p>font-weight:900;</p>\r\n\r\n<p>color:orange;</p>\r\n', 'なし'),
(8, '2018-02-12', '浅井', 'css', 'ボックスに丸みをつける', 'border-radius:10px;', 'なし'),
(9, '2018-02-12', '木村', 'php', 'データアップロード', 'あああ', 'なし'),
(10, '2018-02-13', '浅井', 'css', '図表などの並べ方', 'display:flex;', 'なし'),
(11, '2018-02-14', '浅井', 'html', '画像を入力する', 'img src="画像ファイル" alt=""', 'https://w0s.jp/diary/263'),
(12, '2018-02-24', '浅井', 'js', 'コピー', '$("#btn").click(function(){\r\n    $("#source").select();\r\n    document.execCommand(''copy'');', 'https://stackoverflow.com/questions/37658524/copying-text-of-textarea-in-clipboard-when-button-is-clicked'),
(14, '2018-02-25', '片岡', 'html', 'ａタグ', '＜a＞', 'www.yahoo.co.jp');

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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(14, '浜辺', 'hama', 'be', 1, 0),
(15, '鎌上', 'kama', 'kamii', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gs_code_table`
--
ALTER TABLE `gs_code_table`
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
-- AUTO_INCREMENT for table `gs_code_table`
--
ALTER TABLE `gs_code_table`
MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `gs_user_table`
--
ALTER TABLE `gs_user_table`
MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
