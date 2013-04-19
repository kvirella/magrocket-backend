-- phpMyAdmin SQL Dump
-- version 3.5.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 18, 2013 at 04:01 PM
-- Server version: 5.5.30-cll
-- PHP Version: 5.3.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mag1_magrocketdev2`
--

-- --------------------------------------------------------

--
-- Table structure for table `PURCHASES`
--

CREATE TABLE IF NOT EXISTS `PURCHASES` (
  `APP_ID` varchar(255) NOT NULL,
  `USER_ID` varchar(255) NOT NULL DEFAULT '',
  `PRODUCT_ID` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`APP_ID`(25),`USER_ID`(25),`PRODUCT_ID`(100))
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `PURCHASES`
--

INSERT INTO `PURCHASES` (`APP_ID`, `USER_ID`, `PRODUCT_ID`) VALUES
('com.nin9creative.magrocket', 'B7340733-CC87-420B-888A-EA24776E276A', 'com.nin9creative.magrocket.issues.march2013'),
('com.nin9creative.magrocket', 'B7340733-CC87-420B-888A-EA24776E276A', 'com.nin9creative.magrocket.issues.february2013'),
('com.nin9creative.magrocket', 'B7340733-CC87-420B-888A-EA24776E276A', 'com.nin9creative.magrocket.issues.january2013'),
('com.nin9creative.magrocket', 'B7340733-CC87-420B-888A-EA24776E276A', 'com.nin9creative.magrocket.issues.april2013'),
('com.nin9creative.magrocket', 'B7340733-CC87-420B-888A-EA24776E276A', 'com.nin9creative.magrocket.issues.may2013'),
('com.nin9creative.magrocket', 'B7340733-CC87-420B-888A-EA24776E276A', 'com.nin9creative.magrocket.issues.june2013'),
('com.nin9creative.magrocket', 'B7340733-CC87-420B-888A-EA24776E276A', 'com.nin9creative.magrocket.issues.july2013');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
