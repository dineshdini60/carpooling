-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2016 at 11:59 AM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `new_record`
--

DROP TABLE IF EXISTS `new_record`;
CREATE TABLE IF NOT EXISTS `new_record` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `trn_date` datetime NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `submittedby` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `post` varchar(200) NOT NULL,
  `user_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `post`, `user_id`) VALUES
(14, 'YADAV YADAV', 8),
(13, 'SUNNY YADAV', 8),
(9, 'me', 4),
(12, 'face', 7),
(11, 'google', 2),
(10, 'haiii', 5),
(15, 'NOOB DINI', 8),
(16, 'dini', 1),
(18, 'dinesh', 1),
(19, 'dini', 1),
(21, 'noooooooooooob', 11),
(24, 'iam going by car through tambaram', 1),
(25, 'adfadf', 1),
(26, 'adfadf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'dinesh', 'dinesh@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99'),
(2, 'dinesh', 'd@email.com', '5f4dcc3b5aa765d61d8327deb882cf99'),
(3, 'dini', 'd@aa.com', '5f4dcc3b5aa765d61d8327deb882cf99'),
(4, 'sri', 'scsricharan244@gmail.com', '65acd523a4cd6adfff0d380e116ed240'),
(5, 'lokesh', 'boom@gmail.com', '58b4e38f66bcdb546380845d6af27187'),
(6, 'sridhar', 'sridhar.ippili2010@gmail.com', 'cbab59fc9248ae0aeb23bd234f332c0e'),
(7, 'sreekar', 's@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99'),
(8, 'HARSHA', 'yadavy258@gmail.com', 'b0a7dd3db5be436258eb3f2de8cb7de1'),
(9, 'dinesh', 'dineshdini@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99'),
(10, 'lakshman', 'lakshman.yadav2015@vit.in', '6ae9277c115717d740c652a044862ab3'),
(12, 'd', 'dd@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99'),
(13, 'abhishek rupakula', 'abhishekrupakula1@gmail.com', '2e785b35ef1755e9740ffe0409e7bc65');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
