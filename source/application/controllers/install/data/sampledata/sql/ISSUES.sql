-- phpMyAdmin SQL Dump
-- version 3.5.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 22, 2013 at 09:49 PM
-- Server version: 5.5.30-cll
-- PHP Version: 5.3.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mag1_magrocketinstall`
--

-- --------------------------------------------------------

--
-- Table structure for table `ISSUES`
--

CREATE TABLE IF NOT EXISTS `ISSUES` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `APP_ID` varchar(255) NOT NULL,
  `NAME` varchar(100) DEFAULT NULL,
  `PRICING` enum('paid','free') NOT NULL DEFAULT 'paid',
  `PRODUCT_ID` varchar(255) DEFAULT NULL,
  `TITLE` varchar(100) DEFAULT NULL,
  `INFO` varchar(500) DEFAULT NULL,
  `DATE` datetime DEFAULT NULL,
  `AVAILABILITY` enum('pending','published') NOT NULL DEFAULT 'pending',
  `COVER` varchar(1024) DEFAULT NULL,
  `URL` varchar(1024) DEFAULT NULL,
  `ITUNES_SUMMARY` varchar(1024) DEFAULT NULL,
  `ITUNES_COVERART_URL` varchar(1024) DEFAULT NULL,
  `ITUNES_UPDATED` datetime DEFAULT NULL,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `ISSUES`
--

INSERT INTO `ISSUES` (`ID`, `APP_ID`, `NAME`, `PRICING`, `PRODUCT_ID`, `TITLE`, `INFO`, `DATE`, `AVAILABILITY`, `COVER`, `URL`, `ITUNES_SUMMARY`, `ITUNES_COVERART_URL`, `ITUNES_UPDATED`) VALUES
(8, 'com.nin9creative.magrocket', 'MagRocket-January', 'paid', 'com.nin9creative.magrocket.issues.january2013', 'January 2013', 'Apple''s Man of the Year Issue.', '2013-01-01 00:00:00', 'published', 'http://www.newsstandcontent.com/publication/com.nin9creative.magrocket/BookCoverTemplate@2x.png', 'http://www.newsstandcontent.com/publication/com.nin9creative.magrocket/samplemagazine.hpub', 'In this issue we interview Steve Jobs on all things Apple.', 'http://www.newsstandcontent.com/publication/com.nin9creative.magrocket/itunes/iTunesAtomFeedCoverArt.png', '2013-05-22 21:32:30'),
(13, 'com.nin9creative.magrocket', 'MagRocket-February', 'free', '', 'February 2013', 'The top 10 developers of the decade.', '2013-02-01 00:00:00', 'published', 'http://www.newsstandcontent.com/publication/com.nin9creative.magrocket/BookCoverTemplate@2x.png', 'http://www.newsstandcontent.com/publication/com.nin9creative.magrocket/samplemagazine.hpub', 'Bond.  James Bond.', 'http://www.newsstandcontent.com/publication/com.nin9creative.magrocket/itunes/iTunesAtomFeedCoverArt.png', '2012-10-01 00:00:00'),
(14, 'com.nin9creative.magrocket', 'MagRocket-March', 'paid', 'com.nin9creative.magrocket.issues.march2013', 'March 2013', 'All you need to know about Objective-C.', '2013-03-01 00:00:00', 'published', 'http://www.newsstandcontent.com/publication/com.nin9creative.magrocket/BookCoverTemplate@2x.png', 'http://www.newsstandcontent.com/publication/com.nin9creative.magrocket/samplemagazine.hpub', 'The latest issue for the ultimate professional photographer.', 'http://www.newsstandcontent.com/publication/com.nin9creative.magrocket/itunes/iTunesAtomFeedCoverArt.png', '2013-05-22 21:32:34'),
(15, 'com.nin9creative.magrocket', 'MagRocket-April', 'paid', 'com.nin9creative.magrocket.issues.april2013', 'April 2013', 'Interview with the Baker team.', '2013-04-01 00:00:00', 'published', 'http://www.newsstandcontent.com/publication/com.nin9creative.magrocket/BookCoverTemplate@2x.png', 'http://www.newsstandcontent.com/publication/com.nin9creative.magrocket/samplemagazine.hpub', 'Brad Pitt loves bluetooth headsets.', 'http://www.newsstandcontent.com/publication/com.nin9creative.magrocket/itunes/iTunesAtomFeedCoverArt.png', '2013-05-22 21:32:38'),
(16, 'com.nin9creative.magrocket', 'MagRocket-May', 'paid', 'com.nin9creative.magrocket.issues.may2013', 'May 2013', 'Which iPad?  Mini or Not?', '2013-05-01 00:00:00', 'published', 'http://www.newsstandcontent.com/publication/com.nin9creative.magrocket/BookCoverTemplate@2x.png', 'http://www.newsstandcontent.com/publication/com.nin9creative.magrocket/samplemagazine.hpub', 'Jake Gyllenhaal is in a lot of movies.', 'http://www.newsstandcontent.com/publication/com.nin9creative.magrocket/itunes/iTunesAtomFeedCoverArt.png', '2013-05-22 21:32:42'),
(17, 'com.nin9creative.magrocket', 'MagRocket-June', 'paid', 'com.nin9creative.magrocket.issues.june2013', 'June 2013', 'Apples or Oranges?', '2013-06-01 00:00:00', 'published', 'http://www.newsstandcontent.com/publication/com.nin9creative.magrocket/BookCoverTemplate@2x.png', 'http://www.newsstandcontent.com/publication/com.nin9creative.magrocket/samplemagazine.hpub', 'Eminem has recovered and is back on the charts.', 'http://www.newsstandcontent.com/publication/com.nin9creative.magrocket/itunes/iTunesAtomFeedCoverArt.png', '2013-05-22 21:32:46'),
(18, 'com.nin9creative.magrocket', 'MagRocket-July', 'paid', 'com.nin9creative.magrocket.issues.july2013', 'July 2013', 'To iOS or not to iOS.', '2013-07-01 00:00:00', 'published', 'http://www.newsstandcontent.com/publication/com.nin9creative.magrocket/BookCoverTemplate@2x.png', 'http://www.newsstandcontent.com/publication/com.nin9creative.magrocket/samplemagazine.hpub', 'Is it Johnny or Jack?', 'http://www.newsstandcontent.com/publication/com.nin9creative.magrocket/itunes/iTunesAtomFeedCoverArt.png', '2013-05-22 21:32:50');

--
-- Triggers `ISSUES`
--
DROP TRIGGER IF EXISTS `IssueInsert`;
DELIMITER //
CREATE TRIGGER `IssueInsert` BEFORE INSERT ON `ISSUES`
 FOR EACH ROW BEGIN  
   IF NEW.PRICING = 'free' THEN
	SET NEW.PRODUCT_ID = '';
   END IF;
   
   IF NEW.ITUNES_UPDATED IS NULL THEN
	SET NEW.ITUNES_UPDATED = NOW();
   END IF;
   
   UPDATE PUBLICATION
   	SET ITUNES_UPDATED = NOW()
       	WHERE PUBLICATION.APP_ID = NEW.APP_ID;
END
//
DELIMITER ;
DROP TRIGGER IF EXISTS `IssueUpdate`;
DELIMITER //
CREATE TRIGGER `IssueUpdate` BEFORE UPDATE ON `ISSUES`
 FOR EACH ROW BEGIN  
   IF NEW.PRICING = 'free' THEN
	SET NEW.PRODUCT_ID = '';
   END IF;
   
   SET NEW.ITUNES_UPDATED = NOW();
   
   UPDATE PUBLICATION
   	SET ITUNES_UPDATED = NOW()
   	WHERE PUBLICATION.APP_ID = NEW.APP_ID;
END
//
DELIMITER ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
