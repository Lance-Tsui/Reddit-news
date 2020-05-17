-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2020-05-17 07:12:23
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
-- 表的结构 `picture`
--

CREATE TABLE `picture` (
  `id` text NOT NULL,
  `item` text NOT NULL,
  `type` text NOT NULL,
  `note` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `picture`
--

INSERT INTO `picture` (`id`, `item`, `type`, `note`, `link`) VALUES
('0366', 'a', '贴吧敢死队', '', 'https://i.redd.it/4a523jalc2z41.jpg'),
('0366', 'b', '倒车大师', '', 'https://i.redd.it/pkethdblc2z41.jpg'),
('0366', 'c', '妄议朝政', '', 'https://i.redd.it/aha1gddlc2z41.jpg'),
('0366', 'd', '武汉肺炎', '', 'https://i.redd.it/r95grmalc2z41.jpg'),
('0366', 'e', '武汉肺炎', '', 'https://i.redd.it/yag0aqalc2z41.jpg'),
('0366', 'f', '武汉肺炎', '', 'https://i.redd.it/sbcw5vdlc2z41.jpg'),
('0366', 'g', '资本主义', '', 'https://i.redd.it/rrtrxyalc2z41.jpg'),
('0366', 'h', '粉蛆', '', 'https://i.redd.it/1ywuwkalc2z41.jpg'),
('0366', 'i', '文字审查', '', 'https://i.redd.it/u6pcqtblc2z41.jpg'),
('0366', 'j', '文字审查', '', 'https://i.redd.it/b0m65vblc2z41.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
