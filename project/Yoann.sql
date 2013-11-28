-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 27, 2013 at 12:23 PM
-- Server version: 5.5.31
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `Yoann`
--
CREATE DATABASE IF NOT EXISTS `Yoann` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `Yoann`;

-- --------------------------------------------------------

--
-- Table structure for table `Promo`
--

CREATE TABLE IF NOT EXISTS `Promo` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `PromoName` varchar(255) DEFAULT NULL,
  `PromoType` int(11) DEFAULT '2',
  `IsActive` varchar(45) DEFAULT 'FALSE',
  `Pict1` varchar(45) DEFAULT NULL,
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
-- Dumping data for table `Promo`
--

INSERT INTO `Promo` (`ID`, `PromoName`, `PromoType`, `IsActive`, `Pict1`, `Pict2`, `Pict3`, `Pict4`, `Pict5`, `Pict6`, `Text`, `Interval`) VALUES
(1, 'Scenario 1', 1, 'FALSE', '../images/promo/scn-1-ad1.jpg', '../images/promo/scn-1-ad2.jpg', NULL, NULL, NULL, NULL, 'TEST TEST TEST', 30),
(2, 'Scenario 2', 2, 'TRUE', '../images/promo/scn-2-ad1.jpg', '../images/promo/scn-2-ad2.jpg', '../images/promo/scn-2-ad3.jpg', NULL, NULL, NULL, 'TEST TEST TEST', 30),
(3, 'Scenario 3', 3, 'FALSE', '../images/promo/scn-3-ad1.jpg', '../images/promo/scn-3-ad2.jpg', '../images/promo/scn-3-ad3.jpg', NULL, NULL, NULL, 'TEST TEST TEST', 30),
(4, 'Scenario 4', 4, 'FALSE', '../images/promo/scn-4-ad1.jpg', '../images/promo/scn-4-ad2.jpg', NULL, NULL, NULL, NULL, 'TEST TEST TEST', 30);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
