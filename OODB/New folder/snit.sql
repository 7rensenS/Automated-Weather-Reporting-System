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
-- Database: `snit`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(10) NOT NULL,
  `password` text NOT NULL,
  `type` text NOT NULL,
  `status` text NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `type`, `status`, `email`) VALUES
('1', '12345', 'user', '1', 'nithin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `parameter`
--

CREATE TABLE IF NOT EXISTS `parameter` (
  `pid` int(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `place` text NOT NULL,
  ` temparature` varchar(20) NOT NULL,
  `humidity` varchar(20) NOT NULL,
  `windspeed` varchar(20) NOT NULL,
  `moisture` varchar(20) NOT NULL,
  `prvalue` text NOT NULL,
  `prstring` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parameter`
--

INSERT INTO `parameter` (`pid`, `email`, `place`, ` temparature`, `humidity`, `windspeed`, `moisture`, `prvalue`, `prstring`) VALUES
(1, 'nithin@gmail.com', 'klm', 'high', 'high', 'high', 'high', '1', 't_high h_high w_high m_high');

-- --------------------------------------------------------

--
-- Table structure for table `qatbl`
--

CREATE TABLE IF NOT EXISTS `qatbl` (
  `email` varchar(25) NOT NULL,
  `question` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qatbl`
--

INSERT INTO `qatbl` (`email`, `question`, `answer`) VALUES
('nithin@gmail.com', 'cx,.vncx.m ncvbm cv\r\nvb.cvmbjcnbc\r\nxbv/,bvcmncx:b\r\ncb\r\nfg', ''),
('nithin@gmail.com', 'cx,.vncx.m ncvbm cv\r\nvb.cvmbjcnbc\r\nxbv/,bvcmncx:b\r\ncb\r\nfg', ''),
('nithin@gmail.com', 'cx,.vncx.m ncvbm cv\r\nvb.cvmbjcnbc\r\nxbv/,bvcmncx:b\r\ncb\r\nfg', ''),
('nithin@gmail.com', 'hjvbj', '');

-- --------------------------------------------------------

--
-- Table structure for table `scientistreg`
--

CREATE TABLE IF NOT EXISTS `scientistreg` (
  `scid` int(11) NOT NULL,
  `name` text NOT NULL,
  `address` text NOT NULL,
  `email` text NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scientistreg`
--


-- --------------------------------------------------------

--
-- Table structure for table `sciparameter`
--

CREATE TABLE IF NOT EXISTS `sciparameter` (
  `pid` int(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `place` text NOT NULL,
  `temparature` int(100) NOT NULL,
  `humidity` int(100) NOT NULL,
  `windspeed` int(100) NOT NULL,
  `moisture` int(100) NOT NULL,
  `prvalue` varchar(100) NOT NULL,
  `prstring` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sciparameter`
--

INSERT INTO `sciparameter` (`pid`, `email`, `place`, `temparature`, `humidity`, `windspeed`, `moisture`, `prvalue`, `prstring`) VALUES
(1, 'nithin@gmail.com', 'klmm', 12, 12, 12, 12, '', 't_12 h_12 w_12 m_12');

-- --------------------------------------------------------

--
-- Table structure for table `stationreg`
--

CREATE TABLE IF NOT EXISTS `stationreg` (
  `wsid` int(11) NOT NULL,
  `name` text NOT NULL,
  `address` text NOT NULL,
  `email` text NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stationreg`
--


-- --------------------------------------------------------

--
-- Table structure for table `userreg`
--

CREATE TABLE IF NOT EXISTS `userreg` (
  `sid` int(11) NOT NULL,
  `name` text NOT NULL,
  `address` text NOT NULL,
  `email` text NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userreg`
--

INSERT INTO `userreg` (`sid`, `name`, `address`, `email`, `phone`) VALUES
(1, 'nithin', 'nithin hm', 'nithin@gmail.com', 2147483647);
