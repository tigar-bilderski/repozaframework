-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2016 at 10:06 PM
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
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(9, 'Jovan Jagodic', 'jovan.jagodic@link.co.rs', 'jasamkonj'),
(2, 'eee', 'eee@ee.com', 'eweeeee'),
(3, 'eee', 'eee@ee.com', 'eweeeee'),
(4, 'sadsad', 'sadsad', 'sadasxda'),
(5, 'sadsad', 'sadsad', 'sadasxda'),
(6, 'Dragan', 'dragan.savic@link.co.rs', 'oprem'),
(7, 'Dragan Peric', 'dragan.savic@link.co.rs', 'oprem'),
(8, 'Dragan Savic', 'dragan.savic@link.co.rs', 'oprem'),
(10, 'Jovan Jagodic', 'jovan.jagodic@link.co.rs', 'jasamkonj'),
(11, 'Jovan Jagodic1', 'jovan.jagodic@link.co.rs', 'jasamkonj'),
(12, 'Dragan Savic', 'dragan.savic@link.co.rs', 'spodobasamja'),
(13, 'test', 'test', 'test');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
