-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2014 at 11:36 AM
-- Server version: 5.5.34
-- PHP Version: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `qa`
--

-- --------------------------------------------------------

--
-- Table structure for table `actionplan_cal`
--

CREATE TABLE IF NOT EXISTS `actionplan_cal` (
  `id_actionplan_call` int(10) NOT NULL,
  `qa_cal_id_qa_cal` int(10) NOT NULL,
  `qa_cal_qa_category_id_qa_category` int(10) NOT NULL,
  `qa_cal_qa_indicator_id_qa_indicator` int(10) NOT NULL,
  `qa_cal_qa_evidence_id_qa_evidence` int(10) NOT NULL,
  PRIMARY KEY (`id_actionplan_call`,`qa_cal_id_qa_cal`,`qa_cal_qa_category_id_qa_category`,`qa_cal_qa_indicator_id_qa_indicator`,`qa_cal_qa_evidence_id_qa_evidence`),
  KEY `fk_calendar_cal_qa_cal1` (`qa_cal_id_qa_cal`,`qa_cal_qa_category_id_qa_category`,`qa_cal_qa_indicator_id_qa_indicator`,`qa_cal_qa_evidence_id_qa_evidence`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `fname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `fname`, `lname`) VALUES
(1, 'admin', 'root', 'susana', 'dahata');

-- --------------------------------------------------------

--
-- Table structure for table `calendar`
--

CREATE TABLE IF NOT EXISTS `calendar` (
  `id_calendar` int(10) NOT NULL AUTO_INCREMENT,
  `title_calendr` varchar(255) COLLATE utf8_bin NOT NULL,
  `start_calendar` datetime NOT NULL,
  `end_calendar` datetime DEFAULT NULL,
  `allday_calendar` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT 'false',
  PRIMARY KEY (`id_calendar`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `lecturer`
--

CREATE TABLE IF NOT EXISTS `lecturer` (
  `id_lecturer` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `fname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `e-mail` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `department` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_lecturer`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `lecturer`
--

INSERT INTO `lecturer` (`id_lecturer`, `username`, `password`, `fname`, `lname`, `phone`, `e-mail`, `department`) VALUES
(1, 'lecturer', 'root', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE IF NOT EXISTS `manager` (
  `id_manager` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `fname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `e_mail` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `department` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_manager`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=15 ;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`id_manager`, `username`, `password`, `fname`, `lname`, `phone`, `e_mail`, `department`) VALUES
(1, 'susana', 'root', 'yusra', 'asae', '09868767', 'susana@hotmail.com', 'CS'),
(7, 'trgt', 'bghh', 'bcbc', 'vbnv', '908', ',hbk,h', ' mbm'),
(8, 'fgdfh', 'ngvng', 'hmkg', 'mhm', 'mhm ', 'mh m', 'mb m'),
(9, 'susana', '2066', 'nana', 'dada', '09868767', 'susana@hotmail.com', 'CS'),
(10, 'Sobree', '3579', 'sobree', 'amalina', '0896510025', 'imail9500@gmail.com', 'cs'),
(11, '', '', '', '', '', '', ''),
(12, '', '', '', '', '', '', ''),
(13, '', '', '', '', '', '', ''),
(14, '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `id_notification` int(10) NOT NULL,
  `message` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `officer`
--

CREATE TABLE IF NOT EXISTS `officer` (
  `id_officer` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `fname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `e-mail` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `department` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_officer`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `officer`
--

INSERT INTO `officer` (`id_officer`, `username`, `password`, `fname`, `lname`, `phone`, `e-mail`, `department`) VALUES
(1, 'officer', 'root', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE IF NOT EXISTS `portfolio` (
  `id_profile` int(11) NOT NULL,
  `type_portfolio` varchar(45) DEFAULT NULL,
  `department_portforlio` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_profile`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `id_profile` int(10) NOT NULL,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `date/of/birth` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `age` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(15) NOT NULL,
  `e-mail` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `graduated` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_profile`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `id_project` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `place` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `budget` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `department` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `responsibility` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_project`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `qa_cal`
--

CREATE TABLE IF NOT EXISTS `qa_cal` (
  `id_qa_cal` int(10) NOT NULL,
  `qa_category_id_qa_category` int(10) NOT NULL,
  `qa_indicator_id_qa_indicator` int(10) NOT NULL,
  `qa_evidence_id_qa_evidence` int(10) NOT NULL,
  `project_id_project` int(10) NOT NULL,
  PRIMARY KEY (`id_qa_cal`,`qa_category_id_qa_category`,`qa_indicator_id_qa_indicator`,`qa_evidence_id_qa_evidence`,`project_id_project`),
  KEY `fk_qa_cal_qa_category` (`qa_category_id_qa_category`),
  KEY `fk_qa_cal_qa_indicator1` (`qa_indicator_id_qa_indicator`),
  KEY `fk_qa_cal_qa_evidence1` (`qa_evidence_id_qa_evidence`),
  KEY `fk_qa_cal_project1` (`project_id_project`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `qa_category`
--

CREATE TABLE IF NOT EXISTS `qa_category` (
  `id_qa_category` int(10) NOT NULL AUTO_INCREMENT,
  `component_qa_category` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `name_qa_category` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `principle_qa_category` text COLLATE utf8_unicode_ci NOT NULL,
  `description_qa_category` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_qa_category`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `qa_category`
--

INSERT INTO `qa_category` (`id_qa_category`, `component_qa_category`, `name_qa_category`, `principle_qa_category`, `description_qa_category`) VALUES
(1, '', '', '', ''),
(2, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `qa_evidence`
--

CREATE TABLE IF NOT EXISTS `qa_evidence` (
  `id_qa_evidence` int(10) NOT NULL,
  `name_qa_evidence` varchar(45) DEFAULT NULL,
  `type_qa_evidence` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_qa_evidence`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `qa_indicator`
--

CREATE TABLE IF NOT EXISTS `qa_indicator` (
  `id_qa_indicator` int(10) NOT NULL AUTO_INCREMENT,
  `name_qa_indicator` text COLLATE utf8_unicode_ci NOT NULL,
  `type_qa_indicator` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_qa_indicator`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `actionplan_cal`
--
ALTER TABLE `actionplan_cal`
  ADD CONSTRAINT `fk_calendar_cal_qa_cal1` FOREIGN KEY (`qa_cal_id_qa_cal`, `qa_cal_qa_category_id_qa_category`, `qa_cal_qa_indicator_id_qa_indicator`, `qa_cal_qa_evidence_id_qa_evidence`) REFERENCES `qa_cal` (`id_qa_cal`, `qa_category_id_qa_category`, `qa_indicator_id_qa_indicator`, `qa_evidence_id_qa_evidence`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `qa_cal`
--
ALTER TABLE `qa_cal`
  ADD CONSTRAINT `fk_qa_cal_project1` FOREIGN KEY (`project_id_project`) REFERENCES `project` (`id_project`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_qa_cal_qa_category` FOREIGN KEY (`qa_category_id_qa_category`) REFERENCES `qa_category` (`id_qa_category`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_qa_cal_qa_evidence1` FOREIGN KEY (`qa_evidence_id_qa_evidence`) REFERENCES `qa_evidence` (`id_qa_evidence`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_qa_cal_qa_indicator1` FOREIGN KEY (`qa_indicator_id_qa_indicator`) REFERENCES `qa_indicator` (`id_qa_indicator`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
