-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 28, 2019 at 07:09 AM
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
  `pincode` varchar(50) NOT NULL,
  `place` varchar(50) NOT NULL,
  `temperature` varchar(50) NOT NULL,
  `rainfall` varchar(50) NOT NULL,
  `pressure` varchar(50) NOT NULL,
  `humidity` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pincode`
--

INSERT INTO `pincode` (`pincode`, `place`, `temperature`, `rainfall`, `pressure`, `humidity`) VALUES
('100', 'jhu', 'jhj', 'khik', 'kihjki', ''),
('101', 'ewr', 'ewrw', 'ewr', 'ewr', 'ewr'),
('691501', '45', '45', '45', '435', '345'),
('691001', 'kollam', '45', '56', '56', '56');
