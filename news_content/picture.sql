-- phpMyAdmin SQL Dump
-- version 4.0.10deb1ubuntu0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 16, 2020 at 07:47 PM
-- Server version: 5.5.62-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `news_content`
--

-- --------------------------------------------------------

--
-- Table structure for table `picture`
--

CREATE TABLE IF NOT EXISTS `picture` (
  `id` text NOT NULL,
  `item` text NOT NULL,
  `type` text NOT NULL,
  `note` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `picture`
--

INSERT INTO `picture` (`id`, `item`, `type`, `note`, `link`) VALUES
('0351', 'a', '冲塔', '知乎冲塔壬', 'https://i.redd.it/8h62wyr5jow41.jpg'),
('0351', 'b', '辱华', '', 'https://i.redd.it/r2lklgs5jow41.jpg'),
('0351', 'c', '辱华', '', 'https://i.redd.it/qbjok4t5jow41.jpg'),
('0351', 'd', '维尼', '', 'https://i.redd.it/fwr7m1s5jow41.jpg'),
('0351', 'e', '维尼', '', 'https://i.redd.it/02z3b2s5jow41.jpg'),
('0351', 'f', '维尼', '', 'https://i.redd.it/37pfkjs5jow41.jpg'),
('0351', 'g', '五四', '', 'https://i.redd.it/lp8ivks5jow41.jpg'),
('0351', 'h', '五四', '', 'https://i.redd.it/ju7r3ms5jow41.jpg'),
('0351', 'i', '冲塔', '', 'https://i.redd.it/g68tcks5jow41.jpg'),
('0351', 'j', '战狼', '', 'https://i.redd.it/o1t0qxr5jow41.jpg'),
('0351', 'k', '迷惑', '', 'https://i.redd.it/4j3eyms5jow41.jpg'),
('0351', 'l', '剥削', '', 'https://i.redd.it/loy5xvs5jow41.jpg'),
('0351', 'm', '毛粉', '', 'https://i.redd.it/6dq4eus5jow41.jpg'),
('0351', 'n', '计生', '', 'https://i.redd.it/dmw1x7s5jow41.jpg'),
('0351', 'o', '肺炎', '', 'https://i.redd.it/jqbk7ys5jow41.jpg'),
('0351', 'p', '郝海东', '', 'https://i.redd.it/lnwlfvs5jow41.jpg'),
('0351', 'q', '翻车', '', 'https://i.redd.it/izd160t5jow41.jpg'),
('0351', 'r', 'Steam', '', 'https://i.redd.it/h88oays5jow41.jpg'),
('0351', 's', 'Steam', '', 'https://i.redd.it/6dj9e8s5jow41.jpg'),
('0352', 'a', '&#20116;&#22235;', '', 'https://i.redd.it/djzhw8jelqw41.jpg'),
('0352', 'b', '&#20845;&#22235;', '', 'https://i.redd.it/vknvp4jelqw41.jpg'),
('0352', 'c', '&#25991;&#23383;&#29425;', '', 'https://i.redd.it/g6ro97jelqw41.jpg'),
('0352', 'd', 'n&#21495;&#25151;', '', 'https://i.redd.it/g8ro21jelqw41.png'),
('0352', 'e', '&#35745;&#29983;', '', 'https://i.redd.it/q63vlejelqw41.jpg'),
('0352', 'f', '&#21093;&#21066;', '', 'https://i.redd.it/1f1q21kelqw41.jpg'),
('0352', 'g', '&#38893;&#33756;', '', 'https://i.redd.it/ugaq2fjelqw41.jpg'),
('0352', 'h', '&#22823;&#28165;', '', 'https://i.redd.it/vgxy0ijelqw41.jpg'),
('0352', 'i', '&#22916;&#35758;', '', 'https://i.redd.it/plwpc6jelqw41.jpg'),
('0352', 'j', '&#24688;&#28866;&#38065;', '', 'https://i.redd.it/9tut8hjelqw41.jpg'),
('0352', 'k', '&#24038;&#20154;', '', 'https://i.redd.it/zfbqakjelqw41.jpg'),
('0352', 'l', '&#24038;&#20154;', '', 'https://i.redd.it/wfkak0kelqw41.jpg'),
('0352', 'm', '&#21253;&#23376;', '', 'https://i.redd.it/dnsmd0kelqw41.jpg'),
('0352', 'n', 'PS4', '', 'https://i.redd.it/k2sbh0kelqw41.jpg'),
('0352', 'o', 'PS4', '', 'https://i.redd.it/3c9l40kelqw41.jpg'),
('0352', 'p', '&#32954;&#28814;', '', 'https://i.redd.it/330bg5jelqw41.jpg'),
('0353', 'a', '&#38081;&#25331;', '', 'https://i.redd.it/r72v8zl8svw41.jpg'),
('0353', 'b', '&#38081;&#25331;', '', 'https://i.redd.it/3ab5rjj8svw41.jpg'),
('0353', 'c', '&#20116;&#22235;', '', 'https://i.redd.it/ejqk8hm8svw41.jpg'),
('0353', 'd', '&#25991;&#38761;', '', 'https://i.redd.it/zvf541k8svw41.jpg'),
('0353', 'e', '&#25991;&#38761;', '', 'https://i.redd.it/dyf49vj8svw41.jpg'),
('0353', 'f', '&#32500;&#23612;', '', 'https://i.redd.it/3174aum8svw41.jpg'),
('0353', 'g', '&#36785;&#21253;', '', 'https://i.redd.it/8ntltzm8svw41.jpg'),
('0353', 'h', '&#21518;&#28010;', '', 'https://i.redd.it/szwqw5k8svw41.jpg'),
('0353', 'i', '&#20837;&#20851;', '', 'https://i.redd.it/3t05n5k8svw41.jpg'),
('0353', 'j', '&#23457;&#26680;', '', 'https://i.redd.it/7xzr3uk8svw41.jpg'),
('0353', 'k', '&#21518;&#28010;', '', 'https://i.redd.it/baiv4bj8svw41.jpg'),
('0353', 'l', '&#38035;&#40060;', '', 'https://i.redd.it/zadibcj8svw41.jpg'),
('0353', 'm', '&#21518;&#28010;', '', 'https://i.redd.it/y9kw1fj8svw41.jpg'),
('0353', 'n', '&#20914;&#22612;', '', 'https://i.redd.it/mhu2nij8svw41.jpg'),
('0353', 'o', '&#20914;&#22612;', '', 'https://i.redd.it/4vszbkj8svw41.jpg'),
('0353', 'p', '&#21152;&#36895;', '', 'https://i.redd.it/azgdtnj8svw41.jpg'),
('0353', 'q', '&#36785;&#21253;', '', 'https://i.redd.it/06o2zhj8svw41.jpg'),
('0354', 'a', '&#26446;&#23567;&#29840;', '&#26446;&#23567;&#29840;&#34987;&#31105;&#27490;&#30452;&#25773;&#24102;&#36135;', 'https://i.redd.it/ekvu8u1x53x41.jpg'),
('0354', 'b', '&#32445;&#32422;&#26102;&#25253;', '&#32445;&#32422;&#26102;&#25253;&#24494;&#20449;&#20844;&#20247;&#21495;&#34987;&#23553;', 'https://i.redd.it/1na1lw1x53x41.jpg'),
('0354', 'c', '&#25935;&#24863;&#35789;', '', 'https://i.redd.it/0cpwae2x53x41.jpg'),
('0354', 'd', '&#30041;&#23398;&#29983;', '', 'https://i.redd.it/l73roj2x53x41.jpg'),
('0354', 'e', '&#19978;&#35775;', '', 'https://i.redd.it/xamgql2x53x41.jpg'),
('0354', 'f', '&#23380;&#32769;&#20108;', '', 'https://i.redd.it/zczv9f2x53x41.jpg'),
('0354', 'g', '&#30742;&#23478;', '', 'https://i.redd.it/gblt6l2x53x41.jpg'),
('0354', 'h', '&#20914;&#22612;', '', 'https://i.redd.it/eenmue2x53x41.jpg'),
('0354', 'i', '&#25991;&#38761;', '', 'https://i.redd.it/gokudp2x53x41.jpg'),
('0354', 'j', '&#38893;&#33756;', '', 'https://i.redd.it/wt523t2x53x41.jpg'),
('0354', 'k', '&#26446;&#40527;', '', 'https://i.redd.it/nen4oz2x53x41.jpg'),
('0354', 'l', '&#36164;&#26412;&#23478;', '', 'https://i.redd.it/ec6l123x53x41.png'),
('0354', 'm', '&#36864;&#20237;&#20891;&#20154;', '', 'https://i.redd.it/qluzh13x53x41.jpg'),
('0354', 'n', '&#38450;&#28779;&#22681;', '', 'https://i.redd.it/n8lj4e2x53x41.jpg'),
('0354', 'o', '&#30041;&#23398;&#29983;', '', 'https://i.redd.it/0xrdqx1x53x41.jpg'),
('0354', 'p', '&#30041;&#23398;&#29983;', '', 'https://i.redd.it/6vdv9e2x53x41.jpg'),
('0354', 'q', '&#36785;&#21253;', '', 'https://i.redd.it/s2ngmn4x53x41.png'),
('0355', 'a', '&#38081;&#25331;', '&#38081;&#25331;&#29616;&#19990;&#25253;', 'https://i.redd.it/a9ojbflmxax41.png'),
('0355', 'b', '&#38081;&#25331;', '&#38081;&#25331;&#29616;&#19990;&#25253;', 'https://i.redd.it/medcp2kmxax41.png'),
('0355', 'c', '&#20914;&#22612;', '&#30693;&#20046;&#25954;&#27515;&#38431;', 'https://i.redd.it/cvu3n0kmxax41.jpg'),
('0355', 'd', '&#20914;&#22612;', '&#30693;&#20046;&#25954;&#27515;&#38431;', 'https://i.redd.it/03tya0kmxax41.jpg'),
('0355', 'e', '&#38381;&#20851;&#38145;&#22269;', '&#31105;&#27490;&#22806;&#22269;&#20154;&#30452;&#25773;', 'https://i.redd.it/yzq234kmxax41.jpg'),
('0355', 'f', '&#38381;&#20851;&#38145;&#22269;', '&#31105;&#27490;&#22806;&#22269;&#20154;&#30452;&#25773;', 'https://i.redd.it/v4od0hkmxax41.jpg'),
('0355', 'g', '&#31881;&#32418;', '&#30475;&#40644;&#29255;&#29233;&#22269;', 'https://i.redd.it/qbbe42kmxax41.jpg'),
('0355', 'h', '&#31881;&#32418;', '&#30475;&#40644;&#29255;&#29233;&#22269;', 'https://i.redd.it/uhxzqnmmxax41.jpg'),
('0355', 'i', '&#36785;&#21253;', '&#21702;&#21862;A&#26790;', 'https://i.redd.it/4ekbq5kmxax41.jpg'),
('0355', 'j', '&#32954;&#28814;', '', 'https://i.redd.it/k4a7f8lmxax41.jpg'),
('0355', 'k', '&#20498;&#36710;', '', 'https://i.redd.it/w6z202mmxax41.jpg'),
('0355', 'l', '&#36785;&#21253;', '', 'https://i.redd.it/ecb5v9kmxax41.jpg'),
('0355', 'm', '&#37117;&#30563;', '', 'https://i.redd.it/v74m8blmxax41.jpg'),
('0355', 'n', '&#20845;&#22235;', '', 'https://i.redd.it/4cjnilmmxax41.jpg'),
('0355', 'o', '&#25991;&#23383;&#29425;', '&#20986;&#29256;&#23457;&#26680;', 'https://i.redd.it/1jjidgkmxax41.jpg'),
('0355', 'p', '&#36785;&#21253;', '&#32500;&#23612;&#29066;', 'https://i.redd.it/imd3e4kmxax41.jpg'),
('0356', 'a', '&#23433;&#20493;', '', 'https://i.redd.it/knyqxr0i2hx41.jpg'),
('0356', 'b', '&#29926;&#25151;&#24215;', '', 'https://i.redd.it/ucslr41i2hx41.jpg'),
('0356', 'c', '&#29926;&#25151;&#24215;', '', 'https://i.redd.it/8nfeebai2hx41.jpg'),
('0356', 'd', '&#21488;&#29420;', '', 'https://i.redd.it/7ibqqw0i2hx41.jpg'),
('0356', 'e', '&#21488;&#29420;', '', 'https://i.redd.it/40njf92i2hx41.jpg'),
('0356', 'f', '&#29399;&#23448;', '', 'https://i.redd.it/3q1s591i2hx41.jpg'),
('0356', 'g', '&#29399;&#23448;', '', 'https://i.redd.it/uag0uv5i2hx41.jpg'),
('0356', 'h', '&#36785;&#21253;', '', 'https://i.redd.it/39sd8a5i2hx41.jpg'),
('0356', 'i', '&#36138;&#23448;', '', 'https://i.redd.it/chkggm1i2hx41.jpg'),
('0356', 'j', '&#36138;&#23448;', '', 'https://i.redd.it/35b7i4aw2hx41.jpg'),
('0356', 'k', '&#36785;&#21253;', '', 'https://i.redd.it/mso4ejai2hx41.jpg'),
('0356', 'l', '&#25351;&#26705;&#39554;&#27088;', '', 'https://i.redd.it/lupfmc6i2hx41.jpg'),
('0357', 'a', '&#20498;&#36710;', '', 'https://i.redd.it/376qd08shox41.jpg'),
('0357', 'b', '&#29926;&#25151;&#24215;', '', 'https://i.redd.it/czq4lv8shox41.jpg'),
('0357', 'c', '&#20914;&#22612;', '', 'https://i.redd.it/26i7i19shox41.jpg'),
('0357', 'd', '&#26263;&#32593;', '', 'https://i.redd.it/3ivdmz7shox41.jpg'),
('0357', 'e', '&#27602;&#22902;', '', 'https://i.redd.it/9m3l418shox41.jpg'),
('0357', 'f', '&#25112;&#29436;', '', 'https://i.redd.it/lebnhyashox41.jpg'),
('0357', 'g', '&#32993;&#38177;&#36827;', '', 'https://i.redd.it/tozh6x7shox41.jpg'),
('0357', 'h', '&#39640;&#36895;', '', 'https://i.redd.it/p06tz39shox41.jpg'),
('0357', 'i', '&#23385;&#20013;&#23665;', '', 'https://i.redd.it/yhp8r08shox41.jpg'),
('0357', 'j', '&#20498;&#36710;', '', 'https://i.redd.it/jfdt6x7shox41.png'),
('0357', 'k', '&#36785;&#21326;', '', 'https://i.redd.it/ci5mvb8shox41.jpg'),
('0357', 'l', '&#21518;&#28010;', '', 'https://i.redd.it/cp8f268shox41.jpg'),
('0357', 'm', '&#20914;&#22612;', '', 'https://i.redd.it/4czak18shox41.jpg'),
('0357', 'n', '&#19979;&#20307;&#21319;&#32423;&#22764;', '', 'https://i.redd.it/otolcz7shox41.jpg'),
('0357', 'o', '&#22825;&#23433;&#38376;', '', 'https://i.redd.it/fm8e3z7shox41.jpg'),
('0358', 'a', '&#20914;&#22612;', '&#30693;&#20046;&#25954;&#27515;&#38431;', 'https://i.redd.it/yx5sfinivvx41.jpg'),
('0359', 'a', '&#20914;&#22612;', '&#30693;&#20046;&#25954;&#27515;&#38431;', 'https://i.redd.it/mv3vsin6m2y41.jpg'),
('0359', 'b', 'PS4', 'PS4&#19979;&#26550;', 'https://i.redd.it/5cbcxsn6m2y41.jpg'),
('0360', 'a', '&#36138;&#27745;', '', 'https://i.redd.it/0866therx9y41.jpg'),
('0361', 'a', '&#36138;&#27745;', '', 'https://i.redd.it/rzutgej5rgy41.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
