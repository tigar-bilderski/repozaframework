-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2016 at 05:40 PM
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
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `navigation`
--

INSERT INTO `navigation` (`ID`, `name`, `link`, `icon_class`, `nav_class`, `active`, `status`) VALUES
(1, 'dashboard', 'probni/home', 'fa fa-desktop', 'xn-text', 'active', '1'),
(2, 'users', '', 'fa fa-users', 'xn-text', '', '1');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=19 ;

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
(18, '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
