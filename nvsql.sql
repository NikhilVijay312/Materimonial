-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 13, 2021 at 12:01 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `matrimonial`
--

-- --------------------------------------------------------

--
-- Table structure for table `match`
--

CREATE TABLE IF NOT EXISTS `match` (
  `from_code` varchar(20) NOT NULL,
  `to_code` varchar(20) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `match`
--

INSERT INTO `match` (`from_code`, `to_code`, `status`) VALUES
('FKQWkx_1', 'bcdefg', 2),
('FKQWkx_1', 'tAOGfs_5', 1),
('tAOGfs_5', 'FKQWkx_1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `matri`
--

CREATE TABLE IF NOT EXISTS `matri` (
  `sn` int(11) NOT NULL,
  `code` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `mob` varchar(15) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `age` int(11) DEFAULT '0',
  `religion` varchar(100) NOT NULL,
  `lang` varchar(100) NOT NULL,
  `caste` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `education` varchar(100) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matri`
--

INSERT INTO `matri` (`sn`, `code`, `name`, `email`, `pass`, `mob`, `gender`, `dob`, `age`, `religion`, `lang`, `caste`, `status`, `education`, `occupation`, `state`, `city`) VALUES
(1, 'FKQWkx_1', 'krish', 'krish@gmail.com', 'krish', '65451684', 'male', '1999-07-24', 19, 'Sikh', 'Bengali', 'brahmin', 'Divorced', 'btech', 'engg', 'bihar', 'ssm'),
(2, 'bcdefg', 'rmhjgjg', 'r@gmail.com', 'krish', '4654', 'female', '2019-08-02', 20, 'Jain', '', 'br', 'Divorced', 'br', 'br', 'br', 'br'),
(3, 'MRWZ05_3', 'kk', 'kk@gmail.com', 'krish', '16516', 'male', '2008-02-14', 22, 'Hindu', '', 'rjput', 'Single', 'engg', 'engg', 'bihar', 'bikaner'),
(4, '1ZshJ6_4', 'diveh', 'divesh@gmil.com', 'krish', '464844', 'male', '2020-02-03', 0, 'Muslim', 'Koshali', 'brhmi', 'Single', 'dckh', 'techer', 'bihr', 'bkn'),
(5, 'tAOGfs_5', 'avinash', 'avinash@gmail.com', '1234', '26178', 'male', '2020-08-05', 0, 'Hindu', 'Bihari', 'brhmi', 'Single', 'nothing', 'techeroi', 'bihar', 'ssm');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `from_code` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL,
  `to_code` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`from_code`, `message`, `to_code`) VALUES
('bcdefg', 'hii', 'FKQWkx_1');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `code` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--


-- --------------------------------------------------------

--
-- Table structure for table `shortlist`
--

CREATE TABLE IF NOT EXISTS `shortlist` (
  `from_code` varchar(20) NOT NULL,
  `to_code` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shortlist`
--

INSERT INTO `shortlist` (`from_code`, `to_code`) VALUES
('FKQWkx_1', 'tAOGfs_5');

-- --------------------------------------------------------

--
-- Table structure for table `visit`
--

CREATE TABLE IF NOT EXISTS `visit` (
  `p_code` varchar(100) NOT NULL,
  `v_code` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visit`
--

INSERT INTO `visit` (`p_code`, `v_code`) VALUES
('FKQWkx_1', 'MRWZ05_3'),
('MRWZ05_3', 'FKQWkx_1'),
('bcdefg', 'FKQWkx_1'),
('bcdefg', 'FKQWkx_1'),
('bcdefg', 'FKQWkx_1'),
('bcdefg', 'MRWZ05_3'),
('bcdefg', 'MRWZ05_3'),
('bcdefg', 'MRWZ05_3'),
('FKQWkx_1', 'MRWZ05_3'),
('bcdefg', 'MRWZ05_3'),
('bcdefg', 'MRWZ05_3'),
('bcdefg', 'MRWZ05_3'),
('bcdefg', 'MRWZ05_3'),
('bcdefg', 'MRWZ05_3'),
('bcdefg', 'MRWZ05_3'),
('FKQWkx_1', 'MRWZ05_3'),
('bcdefg', 'MRWZ05_3'),
('AFTk07_1', 'MRWZ05_3'),
('MRWZ05_3', 'MRWZ05_3'),
('AFTk07_1', 'MRWZ05_3'),
('MRWZ05_3', 'bcdefg'),
('MRWZ05_3', 'bcdefg'),
('FKQWkx_1', 'bcdefg'),
('FKQWkx_1', 'MRWZ05_3'),
('FKQWkx_1', 'bcdefg'),
('bcdefg', 'FKQWkx_1'),
('1ZshJ6_4', 'FKQWkx_1'),
('bcdefg', 'FKQWkx_1'),
('bcdefg', 'FKQWkx_1'),
('1ZshJ6_4', 'FKQWkx_1'),
('1ZshJ6_4', 'FKQWkx_1'),
('FKQWkx_1', 'MRWZ05_3'),
('MRWZ05_3', 'MRWZ05_3'),
('FKQWkx_1', 'MRWZ05_3'),
('FKQWkx_1', 'FKQWkx_1'),
('1ZshJ6_4', 'FKQWkx_1'),
('FKQWkx_1', 'FKQWkx_1'),
('FKQWkx_1', 'MRWZ05_3'),
('FKQWkx_1', 'MRWZ05_3'),
('MRWZ05_3', 'MRWZ05_3'),
('1ZshJ6_4', 'MRWZ05_3'),
('FKQWkx_1', 'MRWZ05_3'),
('MRWZ05_3', 'MRWZ05_3'),
('MRWZ05_3', 'MRWZ05_3'),
('MRWZ05_3', 'MRWZ05_3'),
('bcdefg', 'FKQWkx_1'),
('FKQWkx_1', 'FKQWkx_1'),
('FKQWkx_1', 'FKQWkx_1'),
('MRWZ05_3', 'FKQWkx_1'),
('FKQWkx_1', 'FKQWkx_1'),
('bcdefg', 'FKQWkx_1'),
('bcdefg', 'FKQWkx_1'),
('MRWZ05_3', 'FKQWkx_1'),
('1ZshJ6_4', 'FKQWkx_1'),
('1ZshJ6_4', 'FKQWkx_1'),
('MRWZ05_3', 'FKQWkx_1'),
('MRWZ05_3', 'FKQWkx_1'),
('MRWZ05_3', 'FKQWkx_1'),
('bcdefg', 'FKQWkx_1'),
('1ZshJ6_4', 'FKQWkx_1'),
('tAOGfs_5', 'FKQWkx_1'),
('tAOGfs_5', 'FKQWkx_1'),
('tAOGfs_5', 'FKQWkx_1'),
('bcdefg', 'FKQWkx_1'),
('tAOGfs_5', 'FKQWkx_1'),
('tAOGfs_5', 'FKQWkx_1');
