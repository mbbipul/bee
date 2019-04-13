-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2019 at 04:41 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bee`
--

-- --------------------------------------------------------

--
-- Table structure for table `block_list`
--

CREATE TABLE `block_list` (
  `id` int(11) NOT NULL,
  `block_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `block_list`
--

INSERT INTO `block_list` (`id`, `block_id`, `user_id`) VALUES
(1, 11, 13),
(2, 13, 11),
(3, 14, 15),
(4, 15, 14);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(9) NOT NULL,
  `comment` mediumtext NOT NULL,
  `picture` varchar(255) NOT NULL,
  `post_id` int(9) NOT NULL,
  `commented_date` varchar(20) NOT NULL,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment`, `picture`, `post_id`, `commented_date`, `userId`) VALUES
(13, 'gh', '', 16, '1532640018', 1),
(14, 'hello', '', 16, '1532640042', 8),
(15, 'gb', '', 16, '1532640080', 1),
(16, 'gc', '', 21, '1532640928', 1),
(17, 'gvvh', '', 22, '1532676526', 8),
(18, ':)', '', 23, '1532684579', 8),
(19, 'yufhg hggfh bnhghj mjh j nm\r\ngkugjkh kj;l \r\n', '', 22, '1532775648', 1),
(20, 'yufhg hggfh bnhghj mjh j nmrngkugjkh kj;l rnyufhg hggfh bnhghj mjh j nmrngkugjkh kj;l rnyufhg hggfh bnhghj mjh j nmrngkugjkh kj;l rnyufhg hggfh bnhghj mjh j nmrngkugjkh kj;l rnyufhg hggfh bnhghj mjh j nmrngkugjkh kj;l rnyufhg hggfh bnhghj mjh j nmrngkugjkh kj;l rnyufhg hggfh bnhghj mjh j nmrngkugjkh kj;l rnyufhg hggfh bnhghj mjh j nmrngkugjkh kj;l rnyufhg hggfh bnhghj mjh j nmrngkugjkh kj;l rnyufhg hggfh bnhghj mjh j nmrngkugjkh kj;l rnyufhg hggfh bnhghj mjh j nmrngkugjkh kj;l rnyufhg hggfh bnhghj mjh j nmrngkugjkh kj;l rnyufhg hggfh bnhghj mjh j nmrngkugjkh kj;l rnyufhg hggfh bnhghj mjh j nmrngkugjkh kj;l rnyufhg hggfh bnhghj mjh j nmrngkugjkh kj;l rnyufhg hggfh bnhghj mjh j nmrngkugjkh kj;l rnyufhg hggfh bnhghj mjh j nmrngkugjkh kj;l rnyufhg hggfh bnhghj mjh j nmrngkugjkh kj;l rnyufhg hggfh bnhghj mjh j nmrngkugjkh kj;l rnyufhg hggfh bnhghj mjh j nmrngkugjkh kj;l rnyufhg hggfh bnhghj mjh j nmrngkugjkh kj;l rnyufhg hggfh bnhghj mjh j nmrngkugjkh kj;l rnyufhg hggfh bnhghj mjh j nmrngkugjkh kj;l rnyufhg hggfh bnhghj mjh j nmrngkugjkh kj;l rnyufhg hggfh bnhghj mjh j nmrngkugjkh kj;l rnyufhg hggfh bnhghj mjh j nmrngkugjkh kj;l rnyufhg hggfh bnhghj mjh j nmrngkugjkh kj;l rnyufhg hggfh bnhghj mjh j nmrngkugjkh kj;l rnyufhg hggfh bnhghj mjh j nmrngkugjkh kj;l rn', '', 22, '1532775668', 1),
(21, ':) ;) ))))))))', '', 22, '1532775763', 1),
(22, 'hi', '', 23, '1532959191', 1),
(23, 'hnb', '', 34, '1533103673', 1),
(24, 'rfbv', '', 60, '1533104700', 1),
(26, ' n', '', 66, '1533586471', 1),
(27, ':)', '', 72, '1533619172', 10),
(28, 'http://localhost/bee/bee.php#', '', 72, '1533619226', 10),
(29, 'vv', '', 72, '1541172013', 9);

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE `friends` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `friend_id` int(11) NOT NULL,
  `friend_since` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `friend_requests`
--

CREATE TABLE `friend_requests` (
  `id` int(11) NOT NULL,
  `sent_to_id` int(11) NOT NULL,
  `sent_from_id` int(11) NOT NULL,
  `sent_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `friend_requests`
--

INSERT INTO `friend_requests` (`id`, `sent_to_id`, `sent_from_id`, `sent_time`) VALUES
(7, 8, 1, 1533542032),
(8, 8, 1, 1533542035),
(9, 8, 1, 1533542083),
(10, 8, 1, 1533542209),
(11, 10, 1, 1533974237),
(12, 10, 1, 1533974239),
(13, 10, 1, 1533974239),
(14, 10, 1, 1533974240),
(15, 10, 1, 1533974240);

-- --------------------------------------------------------

--
-- Table structure for table `loginstatus`
--

CREATE TABLE `loginstatus` (
  `userId` int(11) NOT NULL,
  `loginUsername` varchar(100) NOT NULL,
  `loginPassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `postlikes`
--

CREATE TABLE `postlikes` (
  `likeId` int(11) NOT NULL,
  `postId` int(11) NOT NULL,
  `likeUserId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `postlikes`
--

INSERT INTO `postlikes` (`likeId`, `postId`, `likeUserId`) VALUES
(37, 23, 9),
(44, 23, 1),
(47, 22, 1),
(49, 22, 8),
(50, 23, 8),
(51, 24, 8),
(52, 24, 1),
(53, 31, 1),
(54, 39, 1),
(55, 45, 1),
(61, 34, 1),
(63, 58, 1),
(75, 59, 1),
(77, 60, 1),
(82, 61, 1),
(84, 73, 9);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `postId` int(11) NOT NULL,
  `imageUrl` varchar(500) DEFAULT NULL,
  `videoUrl` varchar(500) DEFAULT NULL,
  `postCap` text,
  `postTagId` int(11) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `postDate` varchar(30) DEFAULT NULL,
  `postUserId` int(11) NOT NULL,
  `postLikeId` varchar(50) NOT NULL,
  `postCommentId` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`postId`, `imageUrl`, `videoUrl`, `postCap`, `postTagId`, `location`, `postDate`, `postUserId`, `postLikeId`, `postCommentId`) VALUES
(13, 'rqemczwh5qx168n80rkivas394gum3stj06v1hlgyn4sf7d2xa.png', '', 'style', 0, '', '0000-00-00', 1, '', ''),
(14, '99l9e9o6ylwd9unsve2upvru44nv6rnmy589y9kei9xir9a04v.png', '', 'gggggg', 0, '', '0000-00-00', 1, '', ''),
(15, '', '', 'gbh', 0, '', '0000-00-00', 1, '', ''),
(16, 'eqp5k9uwh89ou24ac37o0c2axz970fqn4ljgary6oj4qbxixxv.png', '', 'hello ', 0, '', '0000-00-00', 1, '', ''),
(17, 'lbhd5ohhsitl9cjdb6fchwwzpntjkbe051r7hp907740b1i1w6.png', '', 'hb', 0, '', '2018-07-26', 1, '', ''),
(18, 'x02wgfficp1ym8rvfh7s6a32ln8gybz5wrk4uuen8nsahy4i5d.png', '', 'fc', 0, '', '0000-00-00', 1, '', ''),
(19, 'dezeda3r9tpjeb3f1dhb6ejgj2ilcj30siuzoasexr9frehg73.png', '', 'jbbb', 0, '', '2018-07-26', 1, '', ''),
(20, 'oawp3hbvyzic25m3a0a2damkk90wgq0h6wz8q89dazqeho0qm8.png', '', 'gb', 0, '', '0000-00-00', 1, '', ''),
(21, 'tnailztzoegpqoiiu0fm47ohjma6ka8lj1zf18dm0hmi49jg5w.png', '', 'sun', 0, '', '1532640912', 1, '', ''),
(22, 'waq1g5ti5c9u3b22kgq7390d5ppk6b9o64i2yrnlhz9bdfwoh9.png', '', 'gbn', 0, '', '1532641111', 8, '', ''),
(23, '5qx03l1p5ijv9m84rgni5iajjdb20c7qn4dhi0hv2zoyclycog.png', '', 'hbjjvgh', 0, '', '1532684546', 8, '', ''),
(24, 'bgu18fhqre8c7hj81skiui1nqa1e7op3twz0mra1ef8ironu3j.png', '', '#Reunion 2018', 0, '', '1533037863', 1, '', ''),
(25, 'w8t61c1ekw1a4x4xwrnwcdn8rcnlv4qu8flyl2n7tw48wu57q8.png', '', 'gd', 0, '', '1533038011', 1, '', ''),
(26, '9e2tpts0143818ryoh7g78r3desx8cnd3hgntd7c3b8ocl1ld4.png', '', 'gh', 0, '', '1533039136', 1, '', ''),
(27, '3ua598w9ki55lqtnxvvsm1kowj0c81zro2k4k42mw2nv8ps31k.png', '', 'gb', 0, '', '1533039623', 1, '', ''),
(28, 'h3a1w0k3gyw7lox197rgmycaonaegek6jwpf7jdzp25egaob9f.png', '', 'd', 0, '', '1533039754', 1, '', ''),
(29, 'je8f5h25jgzl485m4exk7p7itz2ti7195mxrey8p8y77908uz5.png', '', 'bg', 0, '', '1533039815', 1, '', ''),
(30, 'jzbo7hzbtc6hzynkmnjdm2lkex40cg1aqs5g2ezfz07dcljf1l.png', '', 'nbn', 0, '', '1533056795', 1, '', ''),
(31, 'h18z88op42bmhq6hoqk32vw224uwq053k3nwhl5lsu1prsfniv.png', '', 'vb', 0, '', '1533056975', 1, '', ''),
(32, 'nvuw2j524y0sm4gauvmsj2e7177i6z5yyfnrdydzzz8fy47rx8.png', '', 'tr', 0, '', '1533057035', 1, '', ''),
(33, 'bke7sr13nl5ac5lpngxnhd65laeod3ghyej87y1nev1g38o7o0.png', '', 'bhn', 0, '', '1533057747', 1, '', ''),
(34, '', '', 'gfh', 0, '', '1533057923', 1, '', ''),
(35, '0wmyu1yz2mi5cwa2rjgjt7c1xmnvh0hdhr36f93f2cyze2jeu5.png', '', 'bh', 0, '', '1533057938', 1, '', ''),
(36, '7wm6jo6l1wq3gwwh8u6wvg61n3omrdup07otwbqiy852mzbpyl.png', '', 'hb', 0, '', '1533058047', 1, '', ''),
(37, 'sjfnmamaxcggebmv10n1ttk834eumzahoqopfp32vjsoo2dua0.png', '', 'gb', 0, '', '1533059021', 1, '', ''),
(38, 'fa1n1dym4nj6vgzhqgg1zevt8vs4kjtkm979rtxeo1dh4zrrij.png', '', 'a', 0, '', '1533059089', 1, '', ''),
(39, '8kptjqubt0k5e1xhf2img00dy32491kjdv5nc8frddgh4srblp.png', '', 'b', 0, '', '1533059169', 1, '', ''),
(40, 'n5umc1gf29aprom6gpkdisvv2zi6medja09am508tkzdzbvgib.png', '', 'yeap', 0, '', '1533066633', 1, '', ''),
(41, 'uqsko7cq7m8i4p22fi33zu26ss1kze2lmiu37xs3qaskp22eo9.png', '', 'gb', 0, '', '1533066774', 1, '', ''),
(42, 'pa6huuz7u5a2mvfz5xzuenqji2uqrcs8mtu5pp6q5ceq5u2prp.png', '', 'dc', 0, '', '1533066800', 1, '', ''),
(43, 'uxxml2wyqi0c7lv3d63pg71vttorsfeigj9rtselv4gn22guq2.png', '', 'g', 0, '', '1533066830', 1, '', ''),
(44, '3ertqbx27pvqk80htmz98btfzchvd42xim62gxx43u8vlib7ve.png', '', 'b', 0, '', '1533066976', 1, '', ''),
(45, '', '', 'u', 0, '', '1533067127', 1, '', ''),
(46, '', '', 'e', 0, '', '1533067156', 1, '', ''),
(47, '', '', 'e', 0, '', '1533067228', 1, '', ''),
(48, '1i52e8opthg2mky3f4eyqpzns2g3rne74xbx6ri1du0ste33aq.png', '', 'f', 0, '', '1533067294', 1, '', ''),
(49, 'ikaztndlyhb9pwirsskx1j46yb2uv5nqwbzqqnprrn0xaous6a.png', '', 'v', 0, '', '1533067436', 1, '', ''),
(50, '', '', 'h', 0, '', '1533067447', 1, '', ''),
(51, 'g923nv6owvqvxnj3n0l85zp3mayoevs9azoecpv48hwikw4qay.png', '', 'g', 0, '', '1533067567', 1, '', ''),
(52, 'llxubpm6bme2vvbcd3mfovyjcp3qei1snslu3eroak2msw0ebi.png', '', 'g', 0, '', '1533067950', 1, '', ''),
(53, 'umqreglcqniubp2188cxvefo4uwm59g8dzj9410tazif1r8h8d.png', '', 'j', 0, '', '1533067990', 1, '', ''),
(54, '5hbnpuo86425j31l9thwm0ewsuwq7o6upfkps3aidfzgs1k288.png', '', 'a', 0, '', '1533068074', 1, '', ''),
(55, 'joliwps9ziw714z0b9p9hg4kyqcva0wvgn9691hhjt7is0mcry.png', '', 'zd', 0, '', '1533068143', 1, '', ''),
(56, 'qqyucwgkhma9rbenu5f2ggt24fnto6abs74cpyioi7lcafrzyj.png', '', 'a', 0, '', '1533068190', 1, '', ''),
(57, 't01eufyrvtyt3ixxj3i3b4ezahli1znnl0hyozxa3a97r9nsqw.png', '', 's', 0, '', '1533068226', 1, '', ''),
(58, '9kh07i7e7jqeyglw5yd4x00twyharkhqfjcww97k9685ktmk0o.png', '', 'AA', 0, '', '1533069031', 1, '', ''),
(59, 'xwveoub2vrouopla38pjtusm62lq8ubub460ehlef4u34ddwnp.png', '', 'h', 0, '', '1533069597', 1, '', ''),
(60, 'j61uvvp4udiyxd6t4eekwzbm9g6eppcsmw1ywga4lqmezko504.png', '', 't', 0, '', '1533069977', 1, '', ''),
(61, '', 'https://www.youtube.com/watch?v=kXwA6wEUfQA', 'b', 0, '', '1533570998', 1, '', ''),
(62, 'hnwzv6rbf4u4a3opba2jlgljxvbm5edajpdtqr2lt5xgdt95uk.png', '', 'bv', 0, '', '1533585958', 1, '', ''),
(63, '9s3mt5ezujwpg1q7yao6l0jbr6fyzsjdjir1w45b0ku9situt0.png', '', 'g', 0, '', '1533585998', 1, '', ''),
(64, 'ib9351t3jo6dixgnucjn68thqprduubn2apj1656tchixq6jp0.png', '', 'fd', 0, '', '1533586044', 1, '', ''),
(65, 'x49mc0a0x2bc1qxrxvbdfk65oh2pjhvayfi9fy0dhfzg6xey02.png', '', 'bg', 0, '', '1533586172', 1, '', ''),
(66, '', '', 'fv', 0, '', '1533586210', 1, '', ''),
(67, '', '', 'cv', 0, '', '1533586246', 1, '', ''),
(68, '', '', 'jdsa', 0, '', '1533586342', 1, '', ''),
(69, '', '', 'bhn', 0, '', '1533586651', 1, '', ''),
(70, '', '', 'hello', 0, '', '1533615487', 1, '', ''),
(71, '', '', 'http://localhost/bee/bee.php', 0, '', '1533617527', 1, '', ''),
(72, 'ohjken6t8jb3dfavb1lipiy5qcv7gyme24amaqzckq30njf9e1.png', '', 'Hello Guys .This is our owsome project', 0, '', '1533618872', 10, '', ''),
(73, '9h5t405ikl6kqbipncuc3pj2dpfn2kvg4gyf64c9jepikiw0ze.png', '', 'gb', 0, '', '1533619433', 1, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sharedposts`
--

CREATE TABLE `sharedposts` (
  `shareId` int(11) NOT NULL,
  `sharingPostId` int(11) NOT NULL,
  `sharedByUserId` int(11) NOT NULL,
  `sharedPostId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userdescription`
--

CREATE TABLE `userdescription` (
  `userDesId` int(11) NOT NULL,
  `userProfilePicId` int(11) NOT NULL,
  `userJoinDate` date NOT NULL,
  `userAddress` varchar(100) NOT NULL,
  `userPhone` decimal(20,0) NOT NULL,
  `userUniversity` varchar(200) NOT NULL,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdescription`
--

INSERT INTO `userdescription` (`userDesId`, `userProfilePicId`, `userJoinDate`, `userAddress`, `userPhone`, `userUniversity`, `userId`) VALUES
(5, 44, '2012-12-15', 'ddd', '123456', 'bu', 1),
(6, 41, '2018-07-26', '', '0', '', 8),
(7, 31, '2018-07-30', '', '0', '', 9),
(8, 43, '2018-08-07', '', '0', '', 10);

-- --------------------------------------------------------

--
-- Table structure for table `userprofilepic`
--

CREATE TABLE `userprofilepic` (
  `userProfilePicId` int(11) NOT NULL,
  `imageUrl` varchar(500) NOT NULL,
  `updateTime` date NOT NULL,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userprofilepic`
--

INSERT INTO `userprofilepic` (`userProfilePicId`, `imageUrl`, `updateTime`, `userId`) VALUES
(1, 'g', '2018-07-04', 1),
(2, 'beeUser1234.png', '2018-07-21', 1),
(3, 'beeUser1234.png', '2018-07-21', 1),
(4, 'beeUser1234.png', '0000-00-00', 1),
(5, 'beeUser1234.png', '0000-00-00', 1),
(6, 'beeUser1234.png', '0000-00-00', 1),
(8, 'beeUsern.png', '0000-00-00', 1),
(9, 'beeUsern.png', '0000-00-00', 1),
(10, 'beeUsern.png', '0000-00-00', 1),
(11, '56t4fepykkmva9ywzz7z9d9bnyqt4g7m61o9rto4w4xeq5liuh..png', '0000-00-00', 1),
(12, 'fwkvwrfgaoi4ubvocwvm614bvvtiryeds4qzjzzan0grw2cfh0..png', '0000-00-00', 1),
(13, 'nqem90vxogxujrvpu8fray9qe79159qmshnnuppxkgwa9m01dq..png', '0000-00-00', 1),
(14, '1c3ntpnllg3t5d8j4w910yzmhg6deumzg3jkq60e3djcbjm0b4..png', '0000-00-00', 1),
(15, 'gu2grtrovmat55nbms65fu01oy4s08l8xpyw9zemhtkstxcxdt..png', '0000-00-00', 1),
(16, 'd46zfzps0ha6nm2809csi6lxu2uy4xnhrvgaaxvtdvvedi6lbt..png', '0000-00-00', 1),
(17, 'n4c7byzwgez387dwbojpe3yr7nvq72cqtb2impmsf2kgnxlzen..png', '0000-00-00', 1),
(18, '36v7ni2ub1o0dyacq9u2hr2905ijjwfnmuvxikhhbufisqbhj5..png', '0000-00-00', 1),
(19, 's187cxnz4nxc9zft60sqxh939yjy10jh1uof63o2z4xy81g17c.png', '0000-00-00', 1),
(20, 'ej3ke0g4zbds7353jkrtz5eaxkrgmkh75c7vfzjvkndrjdcz1a.jpeg', '0000-00-00', 1),
(21, 'dr8r34d4wy6jd77p3gs1uylm7ygoz95hcngbyfhibpjgdtzm00.png', '0000-00-00', 1),
(22, '6msb5kqo1o0rrtjqoqq5qc31jufnnyf1dbp1d5g8lifu5hdwzg.png', '0000-00-00', 1),
(23, 'yf5m60lmz6bh0qg6udpoy2a1nsog3fkcaz1ff2w4270dq5ghe8.png', '0000-00-00', 1),
(24, 'utpjkb3nfoa7h2pgahbgdqm5zopnc3xmoy1i5e715t17ihrweo.png', '0000-00-00', 2),
(26, 'beeDefaultUserProfilePicture2018Version1beeDefaultUserProfilePicture2018Version1beeDefaultUserProfilePicture2018Version1.png', '2018-07-01', 2),
(27, 'beeDefaultUserProfilePicture2018Version1beeDefaultUserProfilePicture2018Version1beeDefaultUserProfilePicture2018Version1.png', '2018-07-26', 8),
(28, '986tyveg47sa9r818tog9hlmh5mdlnyxvkn7u4nicu8smkvpck.png', '0000-00-00', 8),
(29, 'gvjtx3sreftaeccea6h8qc6d2pqaoyb38vupq7fjzxa38137od.png', '0000-00-00', 8),
(30, 'beeDefaultUserProfilePicture2018Version1beeDefaultUserProfilePicture2018Version1beeDefaultUserProfilePicture2018Version1.png', '2018-07-30', 9),
(31, 'swo7uofv1xyoftv4tpnzp18fs0cno08htlsrm3rit7q0x9hfsn.png', '0000-00-00', 9),
(32, 'rhigts0u2yvhg5knjbysidedn8rq3ya3zrmi0y9oem3ite872w.png', '2018-01-08', 1),
(33, 'sjx315ry3svlfrmtjpuqa2g4rwcw550aicq9xdswb0lcfj625t.png', '2018-01-08', 1),
(34, 'kuaq7zoym2n0mxp3zh2b5brk8ij10szsvtw9be0jicu9ohsnb4.png', '2018-01-08', 1),
(35, '27i3miuh1p05fu58hmg3mxdvfddoex9ef639dt2mbeulecdvex.png', '2018-06-08', 1),
(36, 'alvfet5hddfhr4ywcxp7haqnclz4s8cdx6ayraw9zj1xqs5jgp.png', '2018-06-08', 1),
(37, 'sgvqeutt0fenkte2laax2xtl7uzym66dqsnyxtepwj5f4howj7.png', '2018-07-08', 8),
(38, '0wvmuzb7rxgz8bhci4bn09aw3sr5iqil1w9khw41yeoy2tmxrb.png', '2018-07-08', 8),
(39, '9vyvh2e6xy7c9poukda6oapzyu4sm90yms48m4ro6t15fjc9kk.png', '2018-07-08', 8),
(40, 'q0wc6qz4qwcr9sdq5jmsy1d617wftmkocklodktg4h41pj4yho.png', '2018-07-08', 8),
(41, '5vtnx9k8u6ln6d0cp9fwpctmgphhqy6afh4s8rxbvgw4wstj9l.png', '2018-07-08', 8),
(42, 'beeDefaultUserProfilePicture2018Version1beeDefaultUserProfilePicture2018Version1beeDefaultUserProfilePicture2018Version1.png', '2018-08-07', 10),
(43, 'fpiq5qysjiu1aya9ozu7fooex93mxtt5hxryd3nrsc1qt1s1to.png', '2018-07-08', 10),
(44, '62tevhc2camdchh66k215mokue60qby4v4rc10kf9ftdicxjlh.png', '2018-07-08', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `loginUsername` varchar(100) NOT NULL,
  `loginUserEmail` varchar(200) NOT NULL,
  `loginPassword` varchar(100) NOT NULL,
  `userFirstName` varchar(50) NOT NULL,
  `userTitle` varchar(50) NOT NULL,
  `userGender` varchar(10) NOT NULL,
  `userDob` date NOT NULL,
  `verification` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `loginUsername`, `loginUserEmail`, `loginPassword`, `userFirstName`, `userTitle`, `userGender`, `userDob`, `verification`) VALUES
(1, '', 'mbbipulmandol.cse3.bu@gmail.com', 'c79fc701445329ca45c8d616540c02ffcd0aa49b', 'Bb', 'Bb', 'male', '2018-07-11', 0),
(2, '', 'bb@gmail.com', 'aa718c9ba978c2e28f76bfa03cec855356852656', 'Bipul', 'Mandol', 'male', '1997-07-17', 0),
(7, '', 'bbbb@gmail.com', '017cb4db3f69209a093145070b28dd0359c90b36', 'Bbbb@gmail.com', 'Bbbb@gmail.com', 'male', '1997-07-17', 0),
(8, '', 'mbbb@gmail.com', 'dbd32662e85295d2330aacd95ffb1ece1cb430f7', 'Bipul', 'Mandol', 'male', '1997-07-17', 0),
(9, '', 'reg@gmail.com', 'e5ee2e31a1915de8ceb20a5cdf66e322843ba0c3', 'As', 'Vc', 'female', '2018-07-05', 0),
(10, '', 'mbbipulmandol@gmail.com', '17aa3da6319584019deab633f8697597d64eb0f9', 'Bipul', 'Mandol', 'male', '2018-08-08', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `block_list`
--
ALTER TABLE `block_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `cpid` (`post_id`),
  ADD KEY `cpid_2` (`post_id`),
  ADD KEY `commented_date` (`commented_date`),
  ADD KEY `fk_for_comment_userId` (`userId`);

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `friend_requests`
--
ALTER TABLE `friend_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loginstatus`
--
ALTER TABLE `loginstatus`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `postlikes`
--
ALTER TABLE `postlikes`
  ADD PRIMARY KEY (`likeId`),
  ADD KEY `fk_for_likes_postId` (`postId`),
  ADD KEY `fk_for_likes_likeUserId` (`likeUserId`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`postId`),
  ADD KEY `fk_for_userId` (`postUserId`);

--
-- Indexes for table `sharedposts`
--
ALTER TABLE `sharedposts`
  ADD PRIMARY KEY (`shareId`),
  ADD KEY `fk_for_sharedPosts_sharingPostId` (`sharingPostId`),
  ADD KEY `fk_for_sharedPosts_sharedPostId` (`sharedPostId`),
  ADD KEY `fk_for_sharedPosts_sharedByUserId` (`sharedByUserId`);

--
-- Indexes for table `userdescription`
--
ALTER TABLE `userdescription`
  ADD PRIMARY KEY (`userDesId`),
  ADD KEY `userDes_fk_userId` (`userId`),
  ADD KEY `userdes_fk_userProId` (`userProfilePicId`);

--
-- Indexes for table `userprofilepic`
--
ALTER TABLE `userprofilepic`
  ADD PRIMARY KEY (`userProfilePicId`),
  ADD KEY `user_fk_userId` (`userId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `block_list`
--
ALTER TABLE `block_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `friends`
--
ALTER TABLE `friends`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `friend_requests`
--
ALTER TABLE `friend_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `loginstatus`
--
ALTER TABLE `loginstatus`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `postlikes`
--
ALTER TABLE `postlikes`
  MODIFY `likeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `postId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `sharedposts`
--
ALTER TABLE `sharedposts`
  MODIFY `shareId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userdescription`
--
ALTER TABLE `userdescription`
  MODIFY `userDesId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `userprofilepic`
--
ALTER TABLE `userprofilepic`
  MODIFY `userProfilePicId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `fk_for_comment_userId` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`);

--
-- Constraints for table `postlikes`
--
ALTER TABLE `postlikes`
  ADD CONSTRAINT `fk_for_likes_likeUserId` FOREIGN KEY (`likeUserId`) REFERENCES `users` (`userId`),
  ADD CONSTRAINT `fk_for_likes_postId` FOREIGN KEY (`postId`) REFERENCES `posts` (`postId`);

--
-- Constraints for table `sharedposts`
--
ALTER TABLE `sharedposts`
  ADD CONSTRAINT `fk_for_sharedPosts_sharedByUserId` FOREIGN KEY (`sharedByUserId`) REFERENCES `users` (`userId`),
  ADD CONSTRAINT `fk_for_sharedPosts_sharedPostId` FOREIGN KEY (`sharedPostId`) REFERENCES `posts` (`postId`),
  ADD CONSTRAINT `fk_for_sharedPosts_sharingPostId` FOREIGN KEY (`sharingPostId`) REFERENCES `posts` (`postId`);

--
-- Constraints for table `userdescription`
--
ALTER TABLE `userdescription`
  ADD CONSTRAINT `userDes_fk_userId` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`),
  ADD CONSTRAINT `userdes_fk_userProId` FOREIGN KEY (`userProfilePicId`) REFERENCES `userprofilepic` (`userProfilePicId`);

--
-- Constraints for table `userprofilepic`
--
ALTER TABLE `userprofilepic`
  ADD CONSTRAINT `user_fk_userId` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
