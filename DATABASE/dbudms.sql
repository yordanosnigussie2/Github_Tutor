-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2014 at 04:04 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbudms`
--

-- --------------------------------------------------------

--
-- Table structure for table `block`
--

CREATE TABLE IF NOT EXISTS `block` (
  `block_no` varchar(3) NOT NULL DEFAULT '',
  `norooms` varchar(4) DEFAULT NULL,
  `faculty` varchar(30) DEFAULT NULL,
  `batch` varchar(20) NOT NULL,
  `sexcategory` varchar(8) DEFAULT NULL,
  `user_id` varchar(20) DEFAULT NULL,
  `phone` varchar(13) DEFAULT NULL,
  PRIMARY KEY (`block_no`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `message` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `registrar`
--

CREATE TABLE IF NOT EXISTS `registrar` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `stud_id` varchar(20) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `batch` varchar(20) NOT NULL,
  `faculty` varchar(30) NOT NULL,
  `department` varchar(30) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `registrar`
--

INSERT INTO `registrar` (`no`, `fname`, `mname`, `lname`, `stud_id`, `sex`, `batch`, `faculty`, `department`) VALUES
(1, 'abebe', 'kshf', 'djhfgdj', '100', 'male', '3rdyear', 'computing', 'information technology'),
(2, 'djfhgdj', 'sjdhfgj', 'jfdk', '101', 'male', '4thyear', 'computing', 'information technology'),
(3, 'temesegan', 'djfh', 'jdfhg', '102', 'male', '4thyear', 'computing', 'information technology'),
(4, 'jfhdghj', 'g', 'jfhjfh', '103', 'male', '4thyear', 'computing', 'information technology'),
(5, 'hjf', 'jsdhb', 'fdjgbd', '104', 'male', '4thyear', 'computing', 'information technology'),
(6, 'abebech', 'alemu', 'djhgfjh', '023', 'female', '4thyear', 'computing', 'computer science'),
(7, 'dfhjh', 'jhdsgsj', 'fhgj', '152', 'female', '4thyear', 'computing', 'information technology'),
(8, 'fhfd', 'jhdlgkjsgsj', 'fhgj', '132', 'male', '4thyear', 'agree', 'information technology'),
(9, 'jfkdgsj', 'jksdghjk', 'dfjhg', '58', 'male', '4thyear', 'computing', 'cs'),
(10, 'dsfdfbl', 'dfjbh', 'jhfvdfjhdf', '109', 'male', '4thyear', 'computing', 'is');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE IF NOT EXISTS `room` (
  `block_no` varchar(3) DEFAULT NULL,
  `room_no` varchar(3) NOT NULL DEFAULT '',
  `nobed` int(2) DEFAULT NULL,
  PRIMARY KEY (`room_no`),
  KEY `block_no` (`block_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `fname` varchar(30) DEFAULT NULL,
  `mname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `stud_id` varchar(15) NOT NULL DEFAULT '',
  `sex` varchar(8) DEFAULT NULL,
  `batch` varchar(10) DEFAULT NULL,
  `faculty` varchar(25) DEFAULT NULL,
  `block_no` varchar(3) DEFAULT NULL,
  `room_no` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`stud_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`fname`, `mname`, `lname`, `stud_id`, `sex`, `batch`, `faculty`, `block_no`, `room_no`) VALUES
('djfhgdj', 'sjdhfgj', 'jfdk', '101', 'male', '4thyear', 'computing', '30', '1'),
('temesegan', 'djfh', 'jdfhg', '102', 'male', '4thyear', 'computing', '30', '1'),
('jfhdghj', 'g', 'jfhjfh', '103', 'male', '4thyear', 'computing', '30', '1'),
('hjf', 'jsdhb', 'fdjgbd', '104', 'male', '4thyear', 'computing', '30', '1'),
('dsfdfbl', 'dfjbh', 'jhfvdfjhdf', '109', 'male', '4thyear', 'computing', '30', '1'),
('jfkdgsj', 'jksdghjk', 'dfjhg', '58', 'male', '4thyear', 'computing', '30', '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `FNAME` varchar(30) DEFAULT NULL,
  `mNAME` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `user_id` varchar(15) NOT NULL DEFAULT '',
  `sex` varchar(8) DEFAULT NULL,
  `level` varchar(10) DEFAULT NULL,
  `phone_no` varchar(25) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `confirmpassword` varchar(15) NOT NULL,
  `status` varchar(5) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`FNAME`, `mNAME`, `lname`, `user_id`, `sex`, `level`, `phone_no`, `username`, `password`, `confirmpassword`, `status`) VALUES
('gebiyanesh', 'gedefaw', 'demeis', '069', 'female', '3', '+251918529252', 'mkt', '069', '069', '1'),
('seleshi', 'zelalem', 'bayleyegn', '082', 'male', '2', '+251920737328', 'sele', '1234', '1234', '1'),
('Temesegan', 'Walelign', 'Kebede', '089', 'male', '1', '0922553395', 'admin', '789', '789', '1'),
('John', 'Gkiros', 'haile', '117', 'male', '3', '+251927456841', 'john', '117', '117', '1'),
('sintayehu', 'yimam', 'ahmed', '134', 'female', '3', '+251912633107', 'judi', '1046', '1046', '1'),
('henok', 'Gmariam', 'feseha', '139', 'male', '3', '+251912929283', 'henok', '139', '139', '1');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `block`
--
ALTER TABLE `block`
  ADD CONSTRAINT `block_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `room_ibfk_1` FOREIGN KEY (`block_no`) REFERENCES `block` (`block_no`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
