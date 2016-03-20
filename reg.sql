-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2016 at 09:26 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `reg`
--

-- --------------------------------------------------------

--
-- Table structure for table `navigation`
--

CREATE TABLE IF NOT EXISTS `navigation` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `icon_class` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nav_class` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `active` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `sort` int(11) NOT NULL,
  `parent` tinyint(1) NOT NULL,
  `id_parent` int(10) unsigned NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `navigation`
--

INSERT INTO `navigation` (`ID`, `name`, `link`, `icon_class`, `nav_class`, `active`, `status`, `sort`, `parent`, `id_parent`) VALUES
(1, 'dashboard', 'dashboard/home', 'fa fa-desktop', '', 'active', '1', 1, 0, 0),
(2, 'users', '', 'fa fa-users', 'xn-openable', '', '1', 2, 1, 0),
(4, 'search_users', 'users/search', 'fa fa-search', 'xn-text', '', '1', 4, 0, 2),
(3, 'insert_users', 'users/insert', 'fa fa-user', 'xn-text', '', '1', 3, 0, 2),
(5, 'debts', '', 'fa fa-eur', 'xn-openable', '', '1', 5, 1, 0),
(6, 'insert_debts', 'debts/insert', 'fa fa-database', 'xn-text', '', '1', 6, 0, 5),
(7, 'debts_review', 'debts/review', 'fa fa-bar-chart-o', 'xn-text', '', '1', 7, 0, 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=20 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(9, 'Jovan Jagodic', 'jovan.jagodic@link.co.rs', 'jasamkonj'),
(2, 'eee', 'eee@ee.com', 'eweeeee'),
(3, 'eee', 'eee@ee.com', 'eweeeee'),
(4, 'sadsad', 'sadsad', 'sadasxda'),
(5, 'sadsad', 'sadsad', 'sadasxda'),
(12, 'Dragan Savic', 'dragan.savic@link.co.rs', 'dragan'),
(13, 'test', 'test', 'test'),
(14, 'Dragan test', 'sad@sad.com', 'sadsadsa'),
(15, '', '', ''),
(16, 'or &#39;1&#39;=&#39;1&#39;', 'sadas ;;;;&#39;&#39;&#39;&#39;&#39;&#39;&#39;&#39;&#39;&#34;&#34;&#34;', '&#34;&#34;&#34;sad'),
(17, 'Goran Mladenovic', 'gowasdasd@sadas.com', 'sadsadsadads'),
(18, '', '', ''),
(19, '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
