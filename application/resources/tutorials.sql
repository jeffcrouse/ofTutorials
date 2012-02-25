-- phpMyAdmin SQL Dump
-- version 3.4.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 24, 2012 at 08:52 PM
-- Server version: 5.5.20
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `oftutorials`
--

--
-- Dumping data for table `tutorials`
--

INSERT INTO `tutorials` (`id`, `title`, `description`, `category_id`, `author`, `author_url`, `url`, `published_at`, `created_at`) VALUES
(1, 'Getting Started with OpenFrameworks', NULL, 1, 'Stephen Braitsch', 'http://www.quietless.com/kitchen/', 'http://www.quietless.com/kitchen/getting-started-with-openframeworks/', '2009-11-10', '2012-02-24 11:05:30'),
(2, 'Setting up Openframeworks', NULL, 1, 'Berio Molina', 'http://www.berio.alg-a.org/', 'http://www.berio.alg-a.org/Setting-up-Openframeworks', '2008-07-09', '2012-02-24 11:06:59'),
(3, 'openFrameworks git workflow', NULL, 14, NULL, NULL, 'https://github.com/openframeworks/openFrameworks/wiki/openFrameworks-git-workflow', NULL, '2012-02-24 11:10:17'),
(4, 'Introduction to using openFrameworks with Arduino ', NULL, 15, 'CTaylor', 'http://www.sparkfun.com/users/19938', 'http://www.sparkfun.com/tutorials/318', '2012-01-26', '2012-02-24 11:10:17'),
(5, 'Arduino + Servo + openCV Tutorial', '', 15, 'Joshua Noble', 'http://thefactoryfactory.com/', 'http://www.creativeapplications.net/tutorials/arduino-servo-opencv-tutorial-openframeworks/', '2010-06-28', '2012-02-24 20:05:35'),
(6, 'Opening an Example in openFrameworks', '', 1, 'Lucas Werthein', 'http://www.lucaswerthein.com/', 'http://vimeo.com/13159243', '2010-07-07', '2012-02-24 20:14:02');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
