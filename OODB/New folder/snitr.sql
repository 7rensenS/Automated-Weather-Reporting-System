-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 04, 2019 at 01:57 PM
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
-- Table structure for table `atbl`
--

CREATE TABLE IF NOT EXISTS `atbl` (
  `a` varchar(20) NOT NULL,
  `b` varchar(20) NOT NULL,
  `c` varchar(20) NOT NULL,
  `d` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `atbl`
--

INSERT INTO `atbl` (`a`, `b`, `c`, `d`) VALUES
('yes', 'yes', 'yes', ''),
('yes', 'yes', 'yes', 'yes'),
('yes', 'yes', 'yes', 'yes'),
('yes', 'yes', 'yes', ''),
('yes', 'yes', 'yes', 'yes');

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
('1', '12345', 'user', '1', 'nithin@gmail.com'),
('1', '1234', 'station', '1', 'sta1@gmail.com'),
('3', '1234', 'user', '1', 'ram@gmail.com'),
('3', '1234', 'user', '1', 'ram@gmail.com'),
('1', '1234', 'scientist', '1', 'dr1@gmail.com');

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
(1, 'nithin@gmail.com', 'klm', 'high', 'high', 'high', 'high', '1', 't_high h_high w_high m_high'),
(2, 'nithin@gmail.com', 'kty', 'high', 'high', 'high', 'high', '', 't_high h_high w_high m_high'),
(3, 'nithin@gmail.com', 'kundara', 'low', 'low', 'low', 'low', '', 't_low h_low w_low m_low'),
(4, 'nithin@gmail.com', 'kty', 'high', 'high', 'high', 'high', '', 't_high h_high w_high m_high'),
(5, 'nithin@gmail.com', '', 'high', 'high', 'high', 'high', '', 't_high h_high w_high m_high'),
(6, 'nithin@gmail.com', 'mzh', 'high', 'high', 'high', 'high', '', 't_high h_high w_high m_high');

-- --------------------------------------------------------

--
-- Table structure for table `qatbl`
--

CREATE TABLE IF NOT EXISTS `qatbl` (
  `email` varchar(25) NOT NULL,
  `question` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL,
  `flag` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qatbl`
--

INSERT INTO `qatbl` (`email`, `question`, `answer`, `flag`) VALUES
('nithin@gmail.com', 'dfdsgdgdg', '', 0),
('nithin@gmail.com', 'dskbd skcjbskjcb\r\nsdjsbc kcdbcdbc', '', 0);

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

INSERT INTO `scientistreg` (`scid`, `name`, `address`, `email`, `phone`) VALUES
(1, 'dr1', 'dream place', 'dr1@gmail.com', 1234567890);

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

INSERT INTO `stationreg` (`wsid`, `name`, `address`, `email`, `phone`) VALUES
(1, 'sta1', 'sta1', 'sta1@gmail.com', 1234567890);

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
(1, 'nithin', 'nithin hm', 'nithin@gmail.com', 2147483647),
(2, 'dom', 'dream place', 'dom@gmail.com', 2147483647),
(2, 'dom', 'dream place', 'dom@gmail.com', 2147483647),
(3, 'ram', 'dream place', 'ram@gmail.com', 1234567890),
(3, 'ram', 'dream place', 'ram@gmail.com', 1234567890);
