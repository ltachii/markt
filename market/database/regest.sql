-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2018 年 04 月 03 日 08:54
-- 服务器版本: 5.5.53
-- PHP 版本: 5.4.45

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `regest`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- 表的结构 `classily`
--

CREATE TABLE IF NOT EXISTS `classily` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `thename` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `classily`
--

INSERT INTO `classily` (`id`, `thename`) VALUES
(8, '衣鞋伞帽'),
(7, '闲置书籍'),
(6, '电子数码'),
(9, '代步工具'),
(10, '其他');

-- --------------------------------------------------------

--
-- 表的结构 `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `tid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `othername` varchar(50) NOT NULL,
  `comm` varchar(50) NOT NULL,
  `lasttime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `thekey` int(10) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `comment`
--

INSERT INTO `comment` (`tid`, `othername`, `comm`, `lasttime`, `thekey`) VALUES
(3, '3', '3', '2018-03-10 03:12:07', 2),
(8, '张飞', '你好，请同意一下我的好友申请', '2018-03-11 08:29:33', 7),
(9, '岳晓', '顶顶顶', '2018-03-13 07:29:09', 11),
(10, '岳晓 ', '多少钱', '2018-03-13 10:57:09', 13);

-- --------------------------------------------------------

--
-- 表的结构 `content`
--

CREATE TABLE IF NOT EXISTS `content` (
  `id` int(16) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `title` varchar(25) NOT NULL,
  `content` varchar(300) NOT NULL,
  `image` varchar(100) NOT NULL,
  `image1` varchar(100) NOT NULL,
  `image2` varchar(100) NOT NULL,
  `image3` varchar(100) NOT NULL,
  `type` int(10) NOT NULL,
  `thetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `seenum` int(20) unsigned NOT NULL,
  `price` int(50) NOT NULL,
  `examine` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- 转存表中的数据 `content`
--

INSERT INTO `content` (`id`, `username`, `title`, `content`, `image`, `image1`, `image2`, `image3`, `type`, `thetime`, `seenum`, `price`, `examine`) VALUES
(7, '岳晓 ', '二手鞋子', '35码  几乎全新 欢迎询价', '15207563145a6c3e4cdce76.jpg', '15207563145a6c3e4d07b38.jpg', '15207563145a6c3e4d7e4f7.jpg', '15207563145a6c3e4d64044.jpg', 8, '2018-03-11 08:18:35', 8, 80, 1),
(10, '张飞', '出售羽绒服', '二手 都是175码  ', '15207568855a6b6c6c2c702.jpg', '1520756885timg (1).jpg', '1520756885timg.jpg', '1520756885u=1714131575,673557090&fm=27&gp=0.jpg', 8, '2018-03-11 08:28:06', 5, 70, 1),
(11, '岳晓', '闲置手机  价格可小刀', '8成新小米手机 欢迎问价', '15209259735.jpeg', '15209259735a4bb47b47814.jpeg', '1520925973180310072743_4034970a304e251fe74febeeac86c9177f3e536f.jpg', '1520925973180310072800_u=3057007410,3636440401&fm=27&gp=0.jpg', 6, '2018-03-13 07:26:14', 5, 400, 0),
(13, '李白', '二手书籍', '二手书籍 欢迎询价', '152092946759413fc6675af.jpg', '152092946759413fca09a82.jpg', '1520929467WW~5{A91AU)438JWFPD}K8F.jpg', '152092946757c51eef1cdbb.jpg', 7, '2018-03-13 08:24:28', 24, 50, 1),
(14, '岳晓', '二手小摩托', '全新 无损坏', '15209298635a9b5451daa8b (1).jpg', '15209298635a9b5451daa8b.jpg', '15209298635a9b545558328.jpg', '15209298635a9655e03943d.jpg', 9, '2018-03-13 08:31:04', 1, 300, 0),
(15, '岳晓', '代步工具', '可小刀  加我详聊', '15209299265a4b29313b33a.jpg', '15209299265a4b293131cb0.jpg', '15209299265a4b293136df2.jpg', '15209299265a4b293148cac.jpg', 9, '2018-03-13 08:32:07', 0, 200, 0),
(16, '岳晓', '二手吉他', '音色很好  无划伤', '152093005658f9cc49d67ab.jpg', '152093005658f9cc496ff5a.jpg', '152093005658f9cc4923e76.jpg', '152093005658f9cc491373f.jpg', 10, '2018-03-13 08:34:17', 2, 200, 1),
(17, '岳晓 ', '二手手机', '9成新，欢迎咨询！！！', '1520941139180310072800_u=3057007410,3636440401&fm=27&gp=0.jpg', '', '', '', 6, '2018-03-13 11:39:00', 2, 999, 0);

-- --------------------------------------------------------

--
-- 表的结构 `huifu`
--

CREATE TABLE IF NOT EXISTS `huifu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `comm` varchar(50) NOT NULL,
  `thekey` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `huifu`
--

INSERT INTO `huifu` (`id`, `username`, `comm`, `thekey`) VALUES
(1, '1', '测试', 6),
(2, '2', '问问', 6),
(3, '2', '亲戚', 6),
(4, '2', '嗯嗯', 6),
(5, '2', '问问', 0),
(6, '2', '宿舍', 7),
(7, '1', '到底', 7),
(8, '2', '？？', 7),
(9, '岳晓', '好的  ', 8),
(10, '李白', '借楼', 8);

-- --------------------------------------------------------

--
-- 表的结构 `regcheck`
--

CREATE TABLE IF NOT EXISTS `regcheck` (
  `rid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `background` varchar(50) NOT NULL,
  `synopsis` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `qq` varchar(20) NOT NULL,
  `wechat` varchar(20) NOT NULL,
  `examine` int(5) NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=37 ;

--
-- 转存表中的数据 `regcheck`
--

INSERT INTO `regcheck` (`rid`, `username`, `password`, `photo`, `background`, `synopsis`, `phone`, `qq`, `wechat`, `examine`) VALUES
(36, 'admin', 'admin', 'default5.png', '', '', '', '', '', 1),
(33, '岳晓', '111111', '180311041422_180304064942_111.jpg', '', '天助自助者', '15653866629', '799211289', 'yxsgmsj', 1),
(34, '张飞', '111111', '180311042149_180208030508_pho1.jpg', '', '就算大雨让这个城市颠倒，我会给你拥抱。', '17862827928', '7992228989', '18293829293', 1),
(35, '李白', '111111', '180313033159_180209032733_pho.jpg', '', '那时年轻，不懂得生命中的馈赠，其实都暗中标好了价格。', '17839839879', '799222345', 'fsgfgfd', 0);

-- --------------------------------------------------------

--
-- 表的结构 `shoucang`
--

CREATE TABLE IF NOT EXISTS `shoucang` (
  `cid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `myname` varchar(50) COLLATE utf8_bin NOT NULL,
  `thekey` int(10) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=14 ;

--
-- 转存表中的数据 `shoucang`
--

INSERT INTO `shoucang` (`cid`, `myname`, `thekey`) VALUES
(6, '2', 6),
(9, '张飞', 7),
(8, '张飞', 7),
(7, '张飞', 10),
(10, '岳晓 ', 10),
(13, '李白', 7);

-- --------------------------------------------------------

--
-- 表的结构 `want`
--

CREATE TABLE IF NOT EXISTS `want` (
  `id` int(16) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(100) COLLATE utf8_bin NOT NULL,
  `title` varchar(25) COLLATE utf8_bin NOT NULL,
  `content` varchar(200) COLLATE utf8_bin NOT NULL,
  `thetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `price` int(16) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `want`
--

INSERT INTO `want` (`id`, `username`, `title`, `content`, `thetime`, `price`) VALUES
(7, '岳晓 ', '求购手机', '小米手机', '2018-03-13 10:45:44', 999),
(6, '岳晓', '求购二手吉他', '音色好的新手吉他。', '2018-03-13 07:28:38', 400);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
