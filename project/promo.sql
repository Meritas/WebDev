-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Време на генериране: 
-- Версия на сървъра: 5.5.32
-- Версия на PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- БД: `project`
--

-- --------------------------------------------------------

--
-- Структура на таблица `promo`
--

CREATE TABLE IF NOT EXISTS `promo` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `PromoName` varchar(255) DEFAULT NULL,
  `PromoType` int(11) DEFAULT '2',
  `IsActive` varchar(45) DEFAULT 'FALSE',
  `Pict1` varchar(255) DEFAULT NULL,
  `Pict2` varchar(45) DEFAULT NULL,
  `Pict3` varchar(45) DEFAULT NULL,
  `Pict4` varchar(45) DEFAULT NULL,
  `Pict5` varchar(45) DEFAULT NULL,
  `Pict6` varchar(45) DEFAULT NULL,
  `Text` varchar(255) DEFAULT NULL,
  `Interval` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Схема на данните от таблица `promo`
--

INSERT INTO `promo` (`ID`, `PromoName`, `PromoType`, `IsActive`, `Pict1`, `Pict2`, `Pict3`, `Pict4`, `Pict5`, `Pict6`, `Text`, `Interval`) VALUES
(1, 'Scenario 1', 1, 'FALSE', './upload/scenario_1_1.jpg', './upload/scenario_1_2.jpg', './upload/scenario_1_3.jpg', NULL, NULL, NULL, 'TEST TEST TEST', 30),
(2, 'Scenario 2', 2, 'TRUE', './upload/scenario_2_1.jpg', './upload/scenario_2_2.jpg', '../images/promo/scn-2-ad3.jpg', NULL, NULL, NULL, 'TEST TEST TEST', 30),
(3, 'Scenario 3', 3, 'FALSE', './upload/scenario_3_1.jpg', './upload/scenario_3_2.jpg', '../images/promo/scn-3-ad3.jpg', NULL, NULL, NULL, 'TEST TEST TEST', 30),
(4, 'Scenario 4', 4, 'FALSE', '../images/promo/scn-4-ad1.jpg', '../images/promo/scn-4-ad2.jpg', NULL, NULL, NULL, NULL, 'TEST TEST TEST', 30);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
