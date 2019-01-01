SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE IF NOT EXISTS `Groupstory` (
  `id` int(11) NOT NULL PRIMARY KEY,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `Story` (
  `id` int(11) NOT NULL PRIMARY KEY,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `avartar` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `StoryDetail` (
)

CREATE TABLE IF NOT EXISTS `Customer` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
  `role` int(11) NOT NULL,
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `User` (
  `id` int(11) NOT NULL PRIMARY KEY,
  `username` varchar(225) NOT NULL,
  `password` varchar(64) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
