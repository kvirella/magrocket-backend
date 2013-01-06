-- phpMyAdmin SQL Dump
-- version 3.5.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 05, 2013 at 09:34 PM
-- Server version: 5.5.28-cll
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mag1_magrocketdemo`
--

-- --------------------------------------------------------

--
-- Table structure for table `ACCOUNT`
--

CREATE TABLE IF NOT EXISTS `ACCOUNT` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `UUID` char(36) DEFAULT NULL,
  `NAME` varchar(100) DEFAULT NULL,
  `EMAIL` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ACCOUNT`
--

INSERT INTO `ACCOUNT` (`ID`, `UUID`, `NAME`, `EMAIL`) VALUES
(1, '50f9e837-ee86-4c14-af58-9b9cd94e4310', 'MagRocket', 'admin@magrocket.com');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) DEFAULT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('e0bb6b35458ce6b1de3fe1f15410132d', '71.201.61.99', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.7; rv:17.0) Gecko/20100101 Firefox/17.0', 1357439576, 'a:1:{s:9:"user_data";s:0:"";}');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Table structure for table `ISSUES`
--

CREATE TABLE IF NOT EXISTS `ISSUES` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `PUBLICATION_UUID` char(36) DEFAULT NULL,
  `NAME` varchar(100) DEFAULT NULL,
  `TITLE` varchar(100) DEFAULT NULL,
  `INFO` varchar(500) DEFAULT NULL,
  `DATE` varchar(20) DEFAULT NULL,
  `COVER` varchar(1024) DEFAULT NULL,
  `URL` varchar(1024) DEFAULT NULL,
  `ITUNES_SUMMARY` varchar(1024) DEFAULT NULL,
  `ITUNES_COVERART_URL` varchar(1024) DEFAULT NULL,
  `ITUNES_PUBLISHED` varchar(26) DEFAULT NULL,
  `ITUNES_UPDATED` varchar(26) DEFAULT NULL,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `ISSUES`
--

INSERT INTO `ISSUES` (`ID`, `PUBLICATION_UUID`, `NAME`, `TITLE`, `INFO`, `DATE`, `COVER`, `URL`, `ITUNES_SUMMARY`, `ITUNES_COVERART_URL`, `ITUNES_PUBLISHED`, `ITUNES_UPDATED`) VALUES
(8, 'ed3aeedb-e0f8-4365-aa3f-56d115a4347c', 'MagRocket-November', 'November 2012', 'Apple''s Man of the Year Issue.', '2012-11-01 00:00:00', 'http://www.newsstandcontent.com/publication/ed3aeedb-e0f8-4365-aa3f-56d115a4347c/BookCoverTemplate@2x.png', 'http://www.newsstandcontent.com/publication/ed3aeedb-e0f8-4365-aa3f-56d115a4347c/samplemagazine.hpub', 'In this issue we interview Steve Jobs on all things Apple.', 'http://www.newsstandcontent.com/publication/ed3aeedb-e0f8-4365-aa3f-56d115a4347c/itunes/iTunesAtomFeedCoverArt.png', '2012-11-01T00:00:00-07:00', '2012-11-01T00:00:00-07:00'),
(13, 'ed3aeedb-e0f8-4365-aa3f-56d115a4347c', 'MagRocket-October', 'October 2012', 'The top 10 developers of the decade.', '2012-10-01 00:00:00', 'http://www.newsstandcontent.com/publication/ed3aeedb-e0f8-4365-aa3f-56d115a4347c/BookCoverTemplate@2x.png', 'http://www.newsstandcontent.com/publication/ed3aeedb-e0f8-4365-aa3f-56d115a4347c/samplemagazine.hpub', 'Bond.  James Bond.', 'http://www.newsstandcontent.com/publication/ed3aeedb-e0f8-4365-aa3f-56d115a4347c/itunes/iTunesAtomFeedCoverArt.png', '2012-10-01T00:00:00-07:00', '2012-10-01T00:00:00-07:00'),
(14, 'ed3aeedb-e0f8-4365-aa3f-56d115a4347c', 'MagRocket-December', 'December 2012', 'All you need to know about Objective-C.', '2012-12-01 00:00:00', 'http://www.newsstandcontent.com/publication/ed3aeedb-e0f8-4365-aa3f-56d115a4347c/BookCoverTemplate@2x.png', 'http://www.newsstandcontent.com/publication/ed3aeedb-e0f8-4365-aa3f-56d115a4347c/samplemagazine.hpub', 'The latest issue for the ultimate professional photographer.', 'http://www.newsstandcontent.com/publication/ed3aeedb-e0f8-4365-aa3f-56d115a4347c/tunes/iTunesAtomFeedCoverArt.png', '2012-12-01T00:00:00-07:00', '2012-12-01T00:00:00-07:00'),
(15, 'ed3aeedb-e0f8-4365-aa3f-56d115a4347c', 'MagRocket-September', 'September 2012', 'Interview with the Baker team.', '2012-09-01 00:00:00', 'http://www.newsstandcontent.com/publication/ed3aeedb-e0f8-4365-aa3f-56d115a4347c/BookCoverTemplate@2x.png', 'http://www.newsstandcontent.com/publication/ed3aeedb-e0f8-4365-aa3f-56d115a4347c/samplemagazine.hpub', 'Brad Pitt loves bluetooth headsets.', 'http://www.newsstandcontent.com/publication/ed3aeedb-e0f8-4365-aa3f-56d115a4347c/itunes/iTunesAtomFeedCoverArt.png', '2012-09-01T00:00:00-07:00', '2012-09-01T00:00:00-07:00'),
(16, 'ed3aeedb-e0f8-4365-aa3f-56d115a4347c', 'MagRocket-August', 'August 2012', 'Which iPad?  Mini or Not?', '2012-08-01 00:00:00', 'http://www.newsstandcontent.com/publication/ed3aeedb-e0f8-4365-aa3f-56d115a4347c/BookCoverTemplate@2x.png', 'http://www.newsstandcontent.com/publication/ed3aeedb-e0f8-4365-aa3f-56d115a4347c/Book5Cover@2x.png', 'Jake Gyllenhaal is in a lot of movies.', 'http://www.newsstandcontent.com/publication/ed3aeedb-e0f8-4365-aa3f-56d115a4347c/itunes/iTunesAtomFeedCoverArt.png', '2012-08-01T00:00:00-07:00', '2012-08-01T00:00:00-07:00'),
(17, 'ed3aeedb-e0f8-4365-aa3f-56d115a4347c', 'MagRocket-July', 'July 2012', 'Apples or Oranges?', '2012-07-01 00:00:00', 'http://www.newsstandcontent.com/publication/ed3aeedb-e0f8-4365-aa3f-56d115a4347c/BookCoverTemplate@2x.png', 'http://www.newsstandcontent.com/publication/ed3aeedb-e0f8-4365-aa3f-56d115a4347c/samplemagazine.hpub', 'Eminem has recovered and is back on the charts.', 'http://www.newsstandcontent.com/publication/ed3aeedb-e0f8-4365-aa3f-56d115a4347c/itunes/iTunesAtomFeedCoverArt.png', '2012-07-01T00:00:00-07:00', '2012-07-01T00:00:00-07:00'),
(18, 'ed3aeedb-e0f8-4365-aa3f-56d115a4347c', 'MagRocket-June', 'June 2012', 'To iOS or not to iOS.', '2012-06-01 00:00:00', 'http://www.newsstandcontent.com/publication/ed3aeedb-e0f8-4365-aa3f-56d115a4347c/BookCoverTemplate@2x.png', 'http://www.newsstandcontent.com/publication/ed3aeedb-e0f8-4365-aa3f-56d115a4347c/samplemagazine.hpub', 'Is it Johnny or Jack?', 'http://www.newsstandcontent.com/publication/ed3aeedb-e0f8-4365-aa3f-56d115a4347c/itunes/iTunesAtomFeedCoverArt.png', '2012-06-01T00:00:00-07:00', '2012-06-01T00:00:00-07:00');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varbinary(16) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `PUBLICATION`
--

CREATE TABLE IF NOT EXISTS `PUBLICATION` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `UUID` char(36) DEFAULT NULL,
  `ACCOUNT_UUID` char(36) DEFAULT NULL,
  `NAME` varchar(100) DEFAULT NULL,
  `PARSE_APPLICATION_ID` varchar(100) DEFAULT NULL,
  `PARSE_REST_API_KEY` varchar(100) DEFAULT NULL,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `PUBLICATION`
--

INSERT INTO `PUBLICATION` (`ID`, `UUID`, `ACCOUNT_UUID`, `NAME`, `PARSE_APPLICATION_ID`, `PARSE_REST_API_KEY`) VALUES
(6, 'ed3aeedb-e0f8-4365-aa3f-56d115a4347c', '50f9e837-ee86-4c14-af58-9b9cd94e4310', 'MagRocket Magazine Shelf', 'CFTto7CKHLA9uvDbJJemIFkTdghZw3RGaVrIcfEY', 'o1Vq1388iyPYBeqaEUdhMXwuhREHmNIxL2HjcBK1');

-- --------------------------------------------------------

--
-- Table structure for table `SUBSCRIPTIONS`
--

CREATE TABLE IF NOT EXISTS `SUBSCRIPTIONS` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `PUBLICATION_UUID` char(36) DEFAULT NULL,
  `QUANTITY` varchar(10) DEFAULT NULL,
  `PRODUCT_ID` varchar(250) DEFAULT NULL,
  `TRANSACTION_ID` varchar(250) DEFAULT NULL,
  `PURCHASE_DATE` varchar(50) DEFAULT NULL,
  `ORIGINAL_TRANSACTION_ID` varchar(100) DEFAULT NULL,
  `ORIGINAL_PURCHASE_DATE` varchar(50) DEFAULT NULL,
  `APP_ITEM_ID` varchar(150) DEFAULT NULL,
  `VERSION_EXTERNAL_IDENTIFIER` varchar(50) DEFAULT NULL,
  `BID` varchar(50) DEFAULT NULL,
  `BVRS` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `SUBSCRIPTIONS`
--

INSERT INTO `SUBSCRIPTIONS` (`ID`, `PUBLICATION_UUID`, `QUANTITY`, `PRODUCT_ID`, `TRANSACTION_ID`, `PURCHASE_DATE`, `ORIGINAL_TRANSACTION_ID`, `ORIGINAL_PURCHASE_DATE`, `APP_ITEM_ID`, `VERSION_EXTERNAL_IDENTIFIER`, `BID`, `BVRS`) VALUES
(15, 'abe6d7fa-12e8-427e-b690-5b8e977dd8d1', '1', 'com.nin9creative.magrocket.sub.free', '1000000060079776', '2012-12-07 17:19:01 Etc/GMT', NULL, NULL, NULL, NULL, 'com.nin9creative.magrocket', 'Baker-40'),
(14, 'abe6d7fa-12e8-427e-b690-5b8e977dd8d1', '1', 'com.nin9creative.magrocket.sub.free', '1000000060013394', '2012-12-07 03:33:01 Etc/GMT', NULL, NULL, NULL, NULL, 'com.nin9creative.magrocket', 'Baker-40'),
(13, 'abe6d7fa-12e8-427e-b690-5b8e977dd8d1', '1', 'com.nin9creative.magrocket.sub.free', '1000000060013305', '2012-12-07 03:30:43 Etc/GMT', NULL, NULL, NULL, NULL, 'com.nin9creative.magrocket', 'Baker-40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `ACCOUNT_UUID` char(36) DEFAULT NULL,
  `ip_address` varbinary(16) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(80) NOT NULL,
  `salt` varchar(40) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ACCOUNT_UUID`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '50f9e837-ee86-4c14-af58-9b9cd94e4310', '\0\0', 'admin', '2864c66bafaa4e61b11fbb742a19df5d89a24a6c', '9462e8eee0', 'admin@magrocket.com', '', NULL, NULL, NULL, 1268889823, 1357439095, 1, 'Admin', 'User', 'MagRocket', '877-875-1535');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
