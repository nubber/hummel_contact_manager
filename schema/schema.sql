-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2014 at 04:29 PM
-- Server version: 5.1.65
-- PHP Version: 5.3.26

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hummel_contact_manager`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `nick_name` varchar(255) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `zip` varchar(30) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `messenger` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `birth_date` varchar(255) DEFAULT NULL,
  `twitter_handle` varchar(255) DEFAULT NULL,
  `instagram_handle` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `user_id`, `first_name`, `last_name`, `nick_name`, `company`, `phone`, `email`, `address`, `city`, `state`, `zip`, `country`, `messenger`, `website`, `birth_date`, `twitter_handle`, `instagram_handle`, `created_at`, `updated_at`) VALUES
(8, NULL, 'jason', 'Hummel', 'jason hummel', 'Jummel Interactive', '7609007280', 'jason@hummelinteractive.com', '15255 bluffview st', 'fontana', 'ca', '92336', 'United States', NULL, 'hummelinteractive.com', '005/27/1983', 'jummell', 'nubber', '0000-00-00 00:00:00', '2014-02-03 16:22:40'),
(10, NULL, 'Ted', 'Bundy', 'Teddy', 'Marrie with children Inc.', '221-559-4864', 'ted@bundy.com', '125 Pecks Rd.', 'New York', 'MA', '32212', 'US', NULL, 'asdfadf', '07/21/1945', 'ted', 'ted', '0000-00-00 00:00:00', '2014-02-03 16:18:55'),
(11, NULL, 'Tom', 'Cruize', 'Tommy', 'Cuize Inc', '2939230', 'Cruz@cool.com', '234 Fullerton Ave.', 'Fullerton', 'CA', '', '', NULL, '', '02/20/1960', 'myspacetom', 'myspacetom', '0000-00-00 00:00:00', '2014-02-03 16:21:32'),
(12, NULL, 'John', 'Appleseed', 'Johnnyseed', 'Apple Inc', '293-343-2343', 'john@apple.com', '1 Infinit Loop.', 'Cupertino', 'CA', '', 'United States', NULL, 'http://apple.com', '02/19/1974', 'john', 'john', '0000-00-00 00:00:00', '2014-02-03 16:18:58'),
(13, NULL, 'Zooey', 'Dechanel', 'Zooey', '', '455-444-3434', 'zoe@wonderful.com', '8302 S Brighton Loop Rd', 'Brighton', 'UT', '43345', 'United States', NULL, 'http://zooeydeschanel.com', '09/13/1988', 'zooeydeschanel', 'zooeydeschanel', '0000-00-00 00:00:00', '2014-02-03 16:18:48'),
(17, NULL, 'Frank', 'Park', 'Frankie', 'Franks Hot Suace', '392939239', 'franke@park.com', '2399', 'Winter Park', 'FL', '37123', 'United States', NULL, 'winterpark.com', '02/05/1983', 'winterpark', 'winterpark', '0000-00-00 00:00:00', '2014-02-03 16:22:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `passkey` varchar(255) DEFAULT NULL,
  `passkey_salt` varchar(100) DEFAULT NULL,
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
