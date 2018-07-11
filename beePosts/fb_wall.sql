-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 25, 2015 at 12:21 AM
-- Server version: 5.5.41-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fb2`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `comment_id` int(9) NOT NULL AUTO_INCREMENT,
  `comment` mediumtext NOT NULL,
  `picture` varchar(255) NOT NULL,
  `post_id` int(9) NOT NULL,
  `commented_date` varchar(20) NOT NULL,
  PRIMARY KEY (`comment_id`),
  KEY `cpid` (`post_id`),
  KEY `cpid_2` (`post_id`),
  KEY `commented_date` (`commented_date`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `post_id` int(9) NOT NULL AUTO_INCREMENT,
  `post_desc` mediumtext NOT NULL,
  `image_url` varchar(100) NOT NULL,
  `vid_url` varchar(100) NOT NULL,
  `post_date` varchar(20) NOT NULL,
  PRIMARY KEY (`post_id`),
  KEY `pid` (`post_id`),
  KEY `date` (`post_date`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
