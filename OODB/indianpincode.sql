-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 31, 2020 at 09:36 PM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `indianpincode`
--

-- --------------------------------------------------------

--
-- Table structure for table `pincode`
--

CREATE TABLE IF NOT EXISTS `pincode` (
  `id` int(20) NOT NULL,
  `pincode` varchar(50) NOT NULL,
  `place` varchar(50) NOT NULL,
  `temperature` varchar(50) NOT NULL,
  `rainfall` varchar(50) NOT NULL,
  `pressure` varchar(50) NOT NULL,
  `humidity` varchar(50) NOT NULL,
  `windspeed` int(20) NOT NULL,
  `moisture` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pincode`
--

INSERT INTO `pincode` (`id`, `pincode`, `place`, `temperature`, `rainfall`, `pressure`, `humidity`, `windspeed`, `moisture`) VALUES
(1, '454545', '54', '45', '454', '5', '454', 45, 45),
(1, '691501', '34', '33', '45', '66', '66', 66, 66);
