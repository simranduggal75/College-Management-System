-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 17, 2021 at 07:41 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `college`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `aname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aname`, `password`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE IF NOT EXISTS `assignment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rno` int(11) NOT NULL,
  `nm` varchar(40) NOT NULL,
  `at` varchar(40) NOT NULL,
  `csr` varchar(40) NOT NULL,
  `yrr` varchar(40) NOT NULL,
  `sbj` varchar(40) NOT NULL,
  `myfile` varchar(400) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`id`, `rno`, `nm`, `at`, `csr`, `yrr`, `sbj`, `myfile`) VALUES
(1, 11801, 'Aayush kumaria', 'Assignment 1', 'BCS', 'Year3', 'Accounting', 'Q.7..pdf'),
(2, 11802, 'Anjali Gupta', 'Assignment 2', 'BCS', 'Year1', 'Recent Trends', 'cld 11805,11848.docx'),
(3, 11803, 'Ram Sharma', 'Assignment 3', 'BCOM', 'Year2', 'Accounting', 'Q.6..pdf');

-- --------------------------------------------------------

--
-- Table structure for table `attandance`
--

CREATE TABLE IF NOT EXISTS `attandance` (
  `att_id` int(50) NOT NULL AUTO_INCREMENT,
  `rno` int(20) NOT NULL,
  `date` date NOT NULL,
  `attendance` int(20) NOT NULL,
  PRIMARY KEY (`att_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `attandance`
--

INSERT INTO `attandance` (`att_id`, `rno`, `date`, `attendance`) VALUES
(1, 11801, '2021-04-14', 1),
(2, 11802, '2021-04-14', 1),
(3, 11803, '2021-04-14', 0),
(4, 11801, '2021-04-14', 0),
(5, 11802, '2021-04-14', 0),
(6, 11803, '2021-04-14', 1),
(7, 11801, '2021-04-13', 1),
(8, 11802, '2021-04-13', 1),
(9, 11803, '2021-04-13', 1),
(18, 11801, '2021-04-09', 1),
(19, 11802, '2021-04-09', 1),
(20, 11803, '2021-04-09', 0),
(21, 11874, '2021-04-09', 1),
(22, 11801, '2021-04-15', 1),
(23, 11802, '2021-04-15', 0),
(24, 11803, '2021-04-15', 1),
(25, 11801, '2021-03-07', 0),
(26, 11802, '2021-03-07', 1),
(27, 11803, '2021-03-07', 1),
(28, 11801, '2021-03-09', 1),
(29, 11802, '2021-03-09', 1),
(30, 11803, '2021-03-09', 1);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `cid` int(40) NOT NULL,
  `cnm` varchar(100) NOT NULL,
  `syy` varchar(30) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`cid`, `cnm`, `syy`) VALUES
(101, 'MCA', '6 sem'),
(102, 'MA', '4 sem'),
(103, 'MBA', '2 yrs'),
(104, 'BCS', '4 yrs'),
(105, 'BCOM', '6 sems');

-- --------------------------------------------------------

--
-- Table structure for table `dropdown`
--

CREATE TABLE IF NOT EXISTS `dropdown` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `csr` varchar(40) NOT NULL,
  `yrr` varchar(40) NOT NULL,
  `sbj` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `dropdown`
--

INSERT INTO `dropdown` (`id`, `csr`, `yrr`, `sbj`) VALUES
(1, '202', 'Year2', ''),
(2, '202', 'Year4', ''),
(3, '103', 'Year3', '202'),
(4, 'MBA', 'Year1', 'Recent Trends ');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nmm` varchar(100) NOT NULL,
  `srolee` varchar(100) NOT NULL,
  `feedbackk` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `nmm`, `srolee`, `feedbackk`) VALUES
(3, 'kalpana chawla', 'Teacher', 'nice,good,wonderful.students are very naughty.college has hygien.'),
(4, 'Aayush Kumaria', 'Student', 'Professors teach very good. library has all books which we need for notes. ');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE IF NOT EXISTS `marks` (
  `rno` int(100) NOT NULL,
  `snm` varchar(255) NOT NULL,
  `sclass` varchar(255) NOT NULL,
  `sbj1` varchar(255) NOT NULL,
  `sbj2` varchar(255) NOT NULL,
  `sbj3` varchar(255) NOT NULL,
  `sbj4` varchar(255) NOT NULL,
  `sbj5` varchar(255) NOT NULL,
  `m1` int(255) NOT NULL,
  `m2` int(255) NOT NULL,
  `m3` int(255) NOT NULL,
  `m4` int(255) NOT NULL,
  `m5` int(255) NOT NULL,
  PRIMARY KEY (`rno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`rno`, `snm`, `sclass`, `sbj1`, `sbj2`, `sbj3`, `sbj4`, `sbj5`, `m1`, `m2`, `m3`, `m4`, `m5`) VALUES
(11801, 'Aayush Kumaria', 'TYBCS', 'python', 'HRM', 'Accounts', 'Recent trends', 'Project work', 67, 78, 87, 90, 68),
(11802, 'Anjali Gupta', 'FYBCS', 'JAVA', 'Bussiness Maths', 'OCM', 'Project work', 'DBMS', 89, 55, 78, 87, 69),
(11803, 'Ram Sharma', 'SYBCOM', 'Maths', 'Accounting', 'Economics', 'Project work', 'Recent Trends', 92, 80, 87, 85, 84);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rno` int(11) NOT NULL,
  `nm` varchar(40) NOT NULL,
  `pt` varchar(40) NOT NULL,
  `csr` varchar(40) NOT NULL,
  `yrr` varchar(40) NOT NULL,
  `sbj` varchar(40) NOT NULL,
  `myfile` varchar(400) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `rno`, `nm`, `pt`, `csr`, `yrr`, `sbj`, `myfile`) VALUES
(1, 11801, 'Aayush kumaria', 'student management system', 'BCS', 'Year3', 'python', 'dfd 11805,11848.docx'),
(2, 11802, 'Anjali Gupta', 'Exam system documents', 'BCS', 'Year1', 'Recent Trends', 'Q.1..pdf'),
(3, 11803, 'Ram Sharma', 'Store Management system', 'BCOM', 'Year2', 'Recent Trends ', '11848.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `studreg`
--

CREATE TABLE IF NOT EXISTS `studreg` (
  `rno` int(20) NOT NULL,
  `fs` varchar(30) NOT NULL,
  `ls` varchar(30) NOT NULL,
  `eid` varchar(30) NOT NULL,
  `cno` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `gd` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `address` varchar(40) NOT NULL,
  `fnmm` varchar(30) NOT NULL,
  `Mnmm` varchar(30) NOT NULL,
  `focc` varchar(30) NOT NULL,
  `Mocc` varchar(30) NOT NULL,
  `csr` varchar(30) NOT NULL,
  `yrr` varchar(30) NOT NULL,
  `IDD` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `confirmpass` varchar(30) NOT NULL,
  `image` varchar(600) NOT NULL,
  PRIMARY KEY (`rno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studreg`
--

INSERT INTO `studreg` (`rno`, `fs`, `ls`, `eid`, `cno`, `dob`, `gd`, `state`, `city`, `address`, `fnmm`, `Mnmm`, `focc`, `Mocc`, `csr`, `yrr`, `IDD`, `pass`, `confirmpass`, `image`) VALUES
(11801, 'Aayush', 'kumaria', 'ak@gmail.com', '9881754455', '2000-12-11', 'Male', 'maharashtra', 'pune', 'Brahma suncity A3 wadgaonsheri', 'vikas kumaria', 'Ratna kumaria', 'Businessman', 'HouseWife', 'BCS', 'Year3', 'ak@gmail.com', 'aayush', 'aayush', '11.jpg'),
(11802, 'Anjali ', 'Gupta', 'ak@gmail.com', '9994567801', '2002-10-16', 'Female', 'bihar', 'patna', 'om silver paradise khadki', 'Harish Gupta', 'Shweta Gupta', 'Consultant', 'Teacher', 'BCS', 'Year1', 'ak@gmail.com', 'anjali', 'anjali', '12.jpg'),
(11803, 'Ram', 'Sharma', 'rs07@gmail.com', '9881754444', '2001-06-13', 'Male', 'Maharashtra', 'Pune', 'Brahma Suncity c4 wadgoansheri', 'Rohit sharma', 'Priya sharma', 'Consultant', 'Teacher', 'B.Com', 'Year2', 'rs07@gmail.com', 'ram', 'ram', '16.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `sid` int(100) NOT NULL,
  `snm` varchar(60) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`sid`, `snm`) VALUES
(201, 'Recent Trends '),
(202, 'C programming'),
(203, 'Python'),
(204, 'Accounting'),
(205, 'HRM');

-- --------------------------------------------------------

--
-- Table structure for table `syllabus`
--

CREATE TABLE IF NOT EXISTS `syllabus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `csr` varchar(40) NOT NULL,
  `yrr` varchar(40) NOT NULL,
  `sbj` varchar(40) NOT NULL,
  `myfile` varchar(400) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `syllabus`
--

INSERT INTO `syllabus` (`id`, `csr`, `yrr`, `sbj`, `myfile`) VALUES
(1, 'MCA', 'Year1', 'python', 'Guidelines - Infosys Online Test.pdf'),
(2, 'MBA', 'Year3', 'HRM', 'erd 11805,11848.docx'),
(3, 'MA', 'Year2', 'Accounting', 'Q.1..pdf'),
(4, 'BCOM', 'Year2', 'Accounting', 'Guidelines - Infosys Online Test.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `teachreg`
--

CREATE TABLE IF NOT EXISTS `teachreg` (
  `tid` int(30) NOT NULL AUTO_INCREMENT,
  `fs` varchar(100) NOT NULL,
  `ls` varchar(100) NOT NULL,
  `eid` varchar(100) NOT NULL,
  `cno` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `gd` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `qual` varchar(100) NOT NULL,
  `expr` varchar(100) NOT NULL,
  `address` varchar(40) NOT NULL,
  `IDD` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `confirmpass` varchar(100) NOT NULL,
  `image` varchar(30) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=132 ;

--
-- Dumping data for table `teachreg`
--

INSERT INTO `teachreg` (`tid`, `fs`, `ls`, `eid`, `cno`, `dob`, `gd`, `state`, `city`, `qual`, `expr`, `address`, `IDD`, `pass`, `confirmpass`, `image`) VALUES
(128, 'kalpana', 'chawla', 'kp@gmail.com', '9881267887', '1982-01-13', 'Female', 'Maharashtra', 'shirdi', 'MCA', '5 yrs', 'sai palace chowk vimannagar', 'kp@gmail.com', '1234', '1234', '13.jpg'),
(131, 'kunjal', 'Batra', 'kb@gmail.com', '9771998555', '1974-05-14', 'Female', 'Maharashtra', 'Pune', 'Mcom', '3 yrs', 'om silver Society,vimannagar', 'kb@gmail.com', '123', '123', '14.jpg');
