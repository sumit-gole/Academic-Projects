-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 17, 2020 at 07:24 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL,
  `description` varchar(300) NOT NULL,
  `location` varchar(50) NOT NULL,
  `edate` date NOT NULL,
  `etime` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `image`, `description`, `location`, `edate`, `etime`) VALUES
(17, 'WC', 'love-life-jared-nickerson-wallpaper-preview.jpg', 'wjwlc jrieruiwer iiriowe', 'Pune', '2020-09-25', '15:00');

-- --------------------------------------------------------

--
-- Table structure for table `msghistory`
--

DROP TABLE IF EXISTS `msghistory`;
CREATE TABLE IF NOT EXISTS `msghistory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message` varchar(100) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `msghistory`
--

INSERT INTO `msghistory` (`id`, `message`, `user_name`) VALUES
(11, 'hii mahi', 'sagar'),
(12, 'hlw sagar', 'mahesh'),
(13, 'hii guys..', 'SUMIT GOLE');

-- --------------------------------------------------------

--
-- Table structure for table `regi_users`
--

DROP TABLE IF EXISTS `regi_users`;
CREATE TABLE IF NOT EXISTS `regi_users` (
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password_1` varchar(30) NOT NULL,
  `password_2` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regi_users`
--

INSERT INTO `regi_users` (`username`, `email`, `password_1`, `password_2`) VALUES
('sumitgole', 'sumiitgole@gmail.com', 'sumit', 'sumit');

-- --------------------------------------------------------

--
-- Table structure for table `sa_categories`
--

DROP TABLE IF EXISTS `sa_categories`;
CREATE TABLE IF NOT EXISTS `sa_categories` (
  `catID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `catTitle` varchar(255) DEFAULT NULL,
  `catSlug` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`catID`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sa_categories`
--

INSERT INTO `sa_categories` (`catID`, `catTitle`, `catSlug`) VALUES
(11, 'Football', 'football');

-- --------------------------------------------------------

--
-- Table structure for table `sa_posts`
--

DROP TABLE IF EXISTS `sa_posts`;
CREATE TABLE IF NOT EXISTS `sa_posts` (
  `postID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `postTitle` varchar(255) DEFAULT NULL,
  `postSlug` varchar(255) DEFAULT NULL,
  `postDesc` text,
  `postCont` text,
  `postDate` datetime DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`postID`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sa_posts`
--

INSERT INTO `sa_posts` (`postID`, `postTitle`, `postSlug`, `postDesc`, `postCont`, `postDate`, `image`) VALUES
(22, 'Saurabh lanke', 'saurabh-lanke', '<p>iashkha</p>', '<p>dlmmd</p>', '2020-05-20 12:38:48', 'admin_profile.png'),
(23, 'dsddd', 'dsddd', '<p>asdd</p>', '<p>dsaddd</p>', '2020-05-20 23:20:53', '1579424143.jpg'),
(24, 'baburao', 'baburao', '<p>me baburao</p>', '<p>ho me baburao</p>', '2020-05-24 01:31:42', '1.jpg'),
(25, 'dsddd', 'dsddd', '<p>fffdff</p>', '<p><img src=\"dd\" alt=\"\" /></p>', '2020-05-24 01:42:19', 'Free_Sample_By_Wix.jpg'),
(26, 'Manchester United', 'manchester-united', '<p>mufc</p>', '<p>ss</p>', '2020-05-24 07:22:49', '1.png');

-- --------------------------------------------------------

--
-- Table structure for table `sa_post_categories`
--

DROP TABLE IF EXISTS `sa_post_categories`;
CREATE TABLE IF NOT EXISTS `sa_post_categories` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `postID` int(11) DEFAULT NULL,
  `catID` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sa_post_categories`
--

INSERT INTO `sa_post_categories` (`id`, `postID`, `catID`) VALUES
(50, 26, 11),
(49, 24, 9);

-- --------------------------------------------------------

--
-- Table structure for table `sa_users`
--

DROP TABLE IF EXISTS `sa_users`;
CREATE TABLE IF NOT EXISTS `sa_users` (
  `memberID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`memberID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sa_users`
--

INSERT INTO `sa_users` (`memberID`, `username`, `password`, `email`) VALUES
(1, 'demo@softaox.com', '$2y$10$EBSi06Gfv7b8jWkzlDp25evh.BtB1e3v3j31etvonHS/Gz1.dUEQ.', 'mraj@softaox.info'),
(2, 'saurabh', '$2y$10$4vc3t6FpHAYhgS9oW6Yqf.j83D.Plt0hlWB.KO/40HTDWu0mKRFSu', 'lankesaurabh29@gmail.com'),
(3, 'sportsgenix@123', '$2y$10$mSIfILK2q2XTlkgfezpgieMbdVuYsqqy8UqUvfl/DVHspkUYBT/KK', 'sportsgenix@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(4, 'SUMIT GOLE', 'sumiitgole@gmail.com', '7225ff71e8821b24fd72b4c8fda95b9a'),
(5, 'sumit', 'golesumit123@gmail.com', '7225ff71e8821b24fd72b4c8fda95b9a'),
(10, 'saurabh', 'lankesaurabh29@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
