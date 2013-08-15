-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Време на генериране: 
-- Версия на сървъра: 5.5.16
-- Версия на PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данни: `newssite`
--

-- --------------------------------------------------------

--
-- Структура на таблица `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cOrder` int(20) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `link` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Ссхема на данните от таблица `categories`
--

INSERT INTO `categories` (`id`, `cOrder`, `name`, `link`) VALUES
(1, 5, 'PC', './cat1.php'),
(2, 4, 'PlayStation', './cat2.php'),
(3, 2, 'XBOX2', './cat3.php'),
(4, 1, 'WII', './cat4.php'),
(5, 3, 'Others', './cat5.php');

-- --------------------------------------------------------

--
-- Структура на таблица `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aID` int(11) NOT NULL,
  `author` varchar(26) NOT NULL,
  `content` varchar(5000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура на таблица `news_items`
--

CREATE TABLE IF NOT EXISTS `news_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cID` int(2) DEFAULT NULL,
  `title` tinytext NOT NULL,
  `content` text NOT NULL,
  `isrc` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Ссхема на данните от таблица `news_items`
--

INSERT INTO `news_items` (`id`, `cID`, `title`, `content`, `isrc`) VALUES
(1, 1, 'First Title', 'First item', './media/images/image1.jpg'),
(2, 2, 'Second Title', 'Second item', './media/images/image2.jpg'),
(3, 3, 'Third Title', 'Third item', './media/images/image3.jpg'),
(4, 4, 'Fourth title', 'Fourth item', './media/images/image4.jpg'),
(5, 5, 'Fifth Title', 'Fifth Content', NULL),
(6, 2, 'Sixth Title', 'Sixth Content', NULL),
(7, 1, 'qwer', 'qwer', NULL),
(8, 1, 'random_title', 'random_content', NULL),
(9, 2, 'custom title', 'custom content', NULL),
(10, 1, 'hhtitle', 'heyho', NULL),
(11, 1, 'nova tema', 'nov content', NULL);

-- --------------------------------------------------------

--
-- Структура на таблица `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(70) DEFAULT NULL,
  `email` varchar(70) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `isAdmin` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`userid`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Ссхема на данните от таблица `users`
--

INSERT INTO `users` (`userid`, `full_name`, `email`, `username`, `password`, `isAdmin`) VALUES
(10, 'Yoann Markoff', 'markoff@abv.bg', 'meritas', 'dcc62e31c8030d9488969c5da73d2f16', 1),
(11, 'Koko Lino', 'popolino@abv.bg', 'kokolino', '702ec348f4a3ac0f2ea41f1c43aeb767', 0),
(12, 'Popo Lino', 'kokolino@abv.bg', 'popolino', '4abc4e1dff4cfb3d781455b669ea7a51', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
