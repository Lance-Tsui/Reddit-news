-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2020-05-16 21:37:50
-- 服务器版本： 10.4.11-MariaDB
-- PHP 版本： 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `news_content`
--

-- --------------------------------------------------------

--
-- 表的结构 `navigation`
--

CREATE TABLE `navigation` (
  `category` text NOT NULL,
  `cat_type` int(11) NOT NULL,
  `cat_weight` int(11) NOT NULL,
  `content` text NOT NULL,
  `content_weight` int(11) NOT NULL,
  `content_link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `navigation`
--

INSERT INTO `navigation` (`category`, `cat_type`, `cat_weight`, `content`, `content_weight`, `content_link`) VALUES
('论坛', 1, 1, '品葱', 1, 'https://www.pincong.rocks/'),
('论坛', 1, 1, '膜乎', 2, 'https://mohu.pincong.rocks/'),
('论坛', 1, 1, '翻车新闻', 3, 'reverse/index.html'),
('论坛', 1, 1, '连登', 4, 'https://www.lihkg.com/'),
('VPN', 1, 2, '迷雾通', 1, 'https://geph.io/'),
('VPN', 1, 2, 'NordVPN', 2, 'https://www.nordvpn.com/'),
('VPN', 1, 2, 'ExpressVPN', 3, 'https://www.expressvpn.com/'),
('VPN', 1, 2, 'Clash', 4, 'https://github.com/Kr328/ClashForAndroid'),
('左派', 1, 3, '佳士声援', 1, 'https://jiashigrsyt1.github.io/'),
('左派', 1, 3, '劳工论坛', 2, 'https://chinaworker.info/'),
('左派', 1, 3, '马克思文库', 3, 'https://www.marxists.org/chinese/'),
('左派', 1, 3, '大赦国际', 4, 'https://zh.amnesty.org/'),
('邮箱', 1, 4, 'protonmail', 1, 'https://www.protonmail.com/'),
('邮箱', 1, 4, 'Sec Mail', 2, 'https://www.secmail.com/'),
('邮箱', 1, 4, 'Tuna Mail', 3, 'https://tutanota.com/'),
('邮箱', 1, 4, 'Outlook', 4, 'https://outlook.com/'),
('社交', 1, 5, 'Pixiv', 1, 'https://www.pixiv.net/'),
('社交', 1, 5, 'AO3', 2, 'https://archiveofourown.org/'),
('社交', 1, 5, '推特', 3, 'https://www.twitter.com/'),
('社交', 1, 5, 'Telegram', 4, 'https://www.telegram.org/'),
('匿名', 1, 6, '迷雾通', 1, 'https://geph.io/'),
('匿名', 1, 6, 'I2P', 2, 'https://geti2p.net/zh/'),
('匿名', 1, 6, 'Tor', 3, 'https://www.torproject.org/zh-CN/'),
('匿名', 1, 6, 'Zero Net', 4, 'https://zeronet.io/zh'),
('游戏', 2, 1, '维尼飞', 1, 'https://hahaxixi.github.io/'),
('游戏', 2, 1, '切青蛙', 2, 'https://hahaxixi.github.io/ninja/'),
('游戏', 2, 1, '切包子', 3, 'https://hahaxixi.github.io/bao/'),
('游戏', 2, 1, '>>更多', 4, 'game/index.html'),
('工具', 2, 2, '图片加密', 1, 'https://smallcrypt.com/'),
('工具', 2, 2, '汉五码', 2, 'https://han5.cc/'),
('工具', 2, 2, '加密文字', 3, 'https://github.com/szcsd/codebooks'),
('工具', 2, 2, '乱序生成器', 4, 'http://mix.niin.cc/'),
('聊天', 2, 3, 'Telegram', 1, 'https://www.telegram.org/'),
('聊天', 2, 3, 'Briar', 2, 'https://briarproject.org/'),
('聊天', 2, 3, 'Signal', 3, 'https://signal.org/'),
('聊天', 2, 3, 'Tox', 4, 'http://tox.chat/'),
('资讯', 2, 4, '编程随想', 1, 'https://program-think.blogspot.com/'),
('资讯', 2, 4, '数字时代', 2, 'https://chinadigitaltimes.net/'),
('资讯', 2, 4, '美国之音', 3, 'http://www.voachinese.com/'),
('资讯', 2, 4, '>>更多', 4, 'news.html'),
('系统', 2, 5, 'Tails OS', 1, 'https://tails.boum.org/'),
('系统', 2, 5, 'Qubes OS', 2, 'https://www.qubes-os.org/'),
('系统', 2, 5, 'Debian', 3, 'https://www.debian.org/'),
('系统', 2, 5, '虚拟机', 4, 'https://www.vmware.com/'),
('其他', 2, 6, '赤纳维基', 1, 'https://chinazi.wiki/'),
('其他', 2, 6, 'PTT', 2, 'https://www.ptt.cc/'),
('其他', 2, 6, 'Sakura', 3, 'https://sunxiaochuan258.club/'),
('其他', 2, 6, '诸夏网', 4, 'http://zhuxia.com/web/');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
