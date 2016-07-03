-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2016 at 08:51 PM
-- Server version: 5.5.36
-- PHP Version: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE IF NOT EXISTS `answers` (
  `aid` varchar(30) NOT NULL,
  `ast` varchar(300) NOT NULL,
  `qid` varchar(30) NOT NULL,
  PRIMARY KEY (`qid`,`aid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`aid`, `ast`, `qid`) VALUES
('1', 'nile', '1'),
('2', 'missipi', '1'),
('3', 'amazon', '1'),
('1', 'nile', '2'),
('2', 'misspi', '2'),
('3', 'amazon', '2'),
('1', 'Indian Institute of Management', '3'),
('2', 'Indian Institution of Management', '3'),
('3', 'International Institute of Management', '3'),
('1', 'Smrithi Raini', '4'),
('2', 'Arun Jaitley', '4'),
('3', 'Amit Shah', '4'),
('1', 'Tamil Nadu', '5'),
('2', 'Kerala', '5'),
('3', 'Himachal Pradesh', '5');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE IF NOT EXISTS `details` (
  `name` varchar(30) NOT NULL,
  `age` varchar(2) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `phone number` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`name`, `age`, `gender`, `address`, `phone number`, `Email`, `password`) VALUES
('maki', '2', 'male', '9389kjdlk', '1234567890', 'huhdj@gmail.com', '98307gs@'),
('Harry', '13', 'male', '43 kalpakkam', '9125441664', 'jjaga@gmail.com', '726ystgwyug@'),
('Hermione', '34', 'female', '67 chennai', '9847364234', 'hajsj@gmail.com', 'gsyt@41156g');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `qid` varchar(30) NOT NULL,
  `qst` varchar(300) NOT NULL,
  `cansid` varchar(30) NOT NULL,
  `status` varchar(2) NOT NULL,
  PRIMARY KEY (`qid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`qid`, `qst`, `cansid`, `status`) VALUES
('1', 'What is the largest river of the world?', '3', '0'),
('2', 'What is the longest river of the world?', '1', '0'),
('3', 'What is the abbreviation of IIM?', '1', '0'),
('4', 'Who is the finance minister of India?', '2', '0'),
('5', 'Where is Palani falls located?', '3', '0');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_ibfk_1` FOREIGN KEY (`qid`) REFERENCES `questions` (`qid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
