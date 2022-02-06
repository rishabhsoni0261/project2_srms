-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 06, 2022 at 10:48 AM
-- Server version: 5.1.33
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `srms`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE IF NOT EXISTS `tbladmin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(30) NOT NULL,
  `admin_password` varchar(30) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`admin_id`, `admin_name`, `admin_password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tblcourse`
--

CREATE TABLE IF NOT EXISTS `tblcourse` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(30) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tblcourse`
--

INSERT INTO `tblcourse` (`cid`, `cname`) VALUES
(1, 'BCA'),
(2, 'Msc(IT)');

-- --------------------------------------------------------

--
-- Table structure for table `tblresult_bca_sem1`
--

CREATE TABLE IF NOT EXISTS `tblresult_bca_sem1` (
  `bca_s1_result_id` int(11) NOT NULL AUTO_INCREMENT,
  `stud_id` int(11) NOT NULL,
  `paper1` int(11) NOT NULL,
  `paper2` int(11) NOT NULL,
  `paper3` int(11) NOT NULL,
  `paper4` int(11) NOT NULL,
  `paper5` int(11) NOT NULL,
  PRIMARY KEY (`bca_s1_result_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tblresult_bca_sem1`
--

INSERT INTO `tblresult_bca_sem1` (`bca_s1_result_id`, `stud_id`, `paper1`, `paper2`, `paper3`, `paper4`, `paper5`) VALUES
(1, 5, 80, 75, 65, 65, 74);

-- --------------------------------------------------------

--
-- Table structure for table `tblresult_bca_sem2`
--

CREATE TABLE IF NOT EXISTS `tblresult_bca_sem2` (
  `bca_s2_result_id` int(11) NOT NULL AUTO_INCREMENT,
  `stud_id` int(11) NOT NULL,
  `paper1` int(11) NOT NULL,
  `paper2` int(11) NOT NULL,
  `paper3` int(11) NOT NULL,
  `paper4` int(11) NOT NULL,
  `paper5` int(11) NOT NULL,
  PRIMARY KEY (`bca_s2_result_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tblresult_bca_sem2`
--

INSERT INTO `tblresult_bca_sem2` (`bca_s2_result_id`, `stud_id`, `paper1`, `paper2`, `paper3`, `paper4`, `paper5`) VALUES
(1, 5, 55, 25, 22, 45, 33);

-- --------------------------------------------------------

--
-- Table structure for table `tblresult_bca_sem3`
--

CREATE TABLE IF NOT EXISTS `tblresult_bca_sem3` (
  `bca_s3_result_id` int(11) NOT NULL AUTO_INCREMENT,
  `stud_id` int(11) NOT NULL,
  `paper1` int(11) NOT NULL,
  `paper2` int(11) NOT NULL,
  `paper3` int(11) NOT NULL,
  `paper4` int(11) NOT NULL,
  `paper5` int(11) NOT NULL,
  PRIMARY KEY (`bca_s3_result_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tblresult_bca_sem3`
--

INSERT INTO `tblresult_bca_sem3` (`bca_s3_result_id`, `stud_id`, `paper1`, `paper2`, `paper3`, `paper4`, `paper5`) VALUES
(1, 5, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblresult_bca_sem4`
--

CREATE TABLE IF NOT EXISTS `tblresult_bca_sem4` (
  `bca_s4_result_id` int(11) NOT NULL AUTO_INCREMENT,
  `stud_id` int(11) NOT NULL,
  `paper1` int(11) NOT NULL,
  `paper2` int(11) NOT NULL,
  `paper3` int(11) NOT NULL,
  `paper4` int(11) NOT NULL,
  `paper5` int(11) NOT NULL,
  PRIMARY KEY (`bca_s4_result_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tblresult_bca_sem4`
--

INSERT INTO `tblresult_bca_sem4` (`bca_s4_result_id`, `stud_id`, `paper1`, `paper2`, `paper3`, `paper4`, `paper5`) VALUES
(1, 5, 40, 35, 40, 80, 50);

-- --------------------------------------------------------

--
-- Table structure for table `tblresult_bca_sem5`
--

CREATE TABLE IF NOT EXISTS `tblresult_bca_sem5` (
  `bca_s5_result_id` int(11) NOT NULL AUTO_INCREMENT,
  `stud_id` int(11) NOT NULL,
  `paper1` int(11) NOT NULL,
  `paper2` int(11) NOT NULL,
  `paper3` int(11) NOT NULL,
  `paper4` int(11) NOT NULL,
  `paper5` int(11) NOT NULL,
  PRIMARY KEY (`bca_s5_result_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tblresult_bca_sem5`
--

INSERT INTO `tblresult_bca_sem5` (`bca_s5_result_id`, `stud_id`, `paper1`, `paper2`, `paper3`, `paper4`, `paper5`) VALUES
(1, 5, 4, 5, 6, 7, 8);

-- --------------------------------------------------------

--
-- Table structure for table `tblresult_bca_sem6`
--

CREATE TABLE IF NOT EXISTS `tblresult_bca_sem6` (
  `bca_s6_result_id` int(11) NOT NULL AUTO_INCREMENT,
  `stud_id` int(11) NOT NULL,
  `paper1` int(11) NOT NULL,
  `paper2` int(11) NOT NULL,
  `paper3` int(11) NOT NULL,
  `paper4` int(11) NOT NULL,
  `paper5` int(11) NOT NULL,
  PRIMARY KEY (`bca_s6_result_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tblresult_bca_sem6`
--

INSERT INTO `tblresult_bca_sem6` (`bca_s6_result_id`, `stud_id`, `paper1`, `paper2`, `paper3`, `paper4`, `paper5`) VALUES
(1, 5, 45, 56, 86, 46, 13);

-- --------------------------------------------------------

--
-- Table structure for table `tblresult_msc_sem1`
--

CREATE TABLE IF NOT EXISTS `tblresult_msc_sem1` (
  `msc_s1_result_id` int(11) NOT NULL AUTO_INCREMENT,
  `stud_id` int(11) NOT NULL,
  `paper1` int(11) NOT NULL,
  `paper2` int(11) NOT NULL,
  `paper3` int(11) NOT NULL,
  `paper4` int(11) NOT NULL,
  `paper5` int(11) NOT NULL,
  PRIMARY KEY (`msc_s1_result_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tblresult_msc_sem1`
--

INSERT INTO `tblresult_msc_sem1` (`msc_s1_result_id`, `stud_id`, `paper1`, `paper2`, `paper3`, `paper4`, `paper5`) VALUES
(1, 3, 55, 75, 65, 85, 45),
(4, 1, 70, 80, 75, 85, 89),
(5, 2, 44, 55, 66, 77, 88);

-- --------------------------------------------------------

--
-- Table structure for table `tblresult_msc_sem2`
--

CREATE TABLE IF NOT EXISTS `tblresult_msc_sem2` (
  `msc_s2_result_id` int(11) NOT NULL AUTO_INCREMENT,
  `stud_id` int(11) NOT NULL,
  `paper1` int(11) NOT NULL,
  `paper2` int(11) NOT NULL,
  `paper3` int(11) NOT NULL,
  `paper4` int(11) NOT NULL,
  `paper5` int(11) NOT NULL,
  PRIMARY KEY (`msc_s2_result_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tblresult_msc_sem2`
--

INSERT INTO `tblresult_msc_sem2` (`msc_s2_result_id`, `stud_id`, `paper1`, `paper2`, `paper3`, `paper4`, `paper5`) VALUES
(1, 1, 70, 85, 75, 70, 95),
(2, 2, 65, 75, 45, 85, 95),
(3, 3, 66, 55, 44, 99, 88);

-- --------------------------------------------------------

--
-- Table structure for table `tblresult_msc_sem3`
--

CREATE TABLE IF NOT EXISTS `tblresult_msc_sem3` (
  `msc_s3_result_id` int(11) NOT NULL AUTO_INCREMENT,
  `stud_id` int(11) NOT NULL,
  `paper1` int(11) NOT NULL,
  `paper2` int(11) NOT NULL,
  `paper3` int(11) NOT NULL,
  `paper4` int(11) NOT NULL,
  `paper5` int(11) NOT NULL,
  PRIMARY KEY (`msc_s3_result_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tblresult_msc_sem3`
--

INSERT INTO `tblresult_msc_sem3` (`msc_s3_result_id`, `stud_id`, `paper1`, `paper2`, `paper3`, `paper4`, `paper5`) VALUES
(1, 1, 85, 65, 65, 95, 75),
(2, 2, 66, 88, 77, 99, 10),
(3, 3, 77, 55, 99, 66, 41);

-- --------------------------------------------------------

--
-- Table structure for table `tblresult_msc_sem4`
--

CREATE TABLE IF NOT EXISTS `tblresult_msc_sem4` (
  `msc_s4_result_id` int(11) NOT NULL AUTO_INCREMENT,
  `stud_id` int(11) NOT NULL,
  `paper1` int(11) NOT NULL,
  `paper2` int(11) NOT NULL,
  `paper3` int(11) NOT NULL,
  `paper4` int(11) NOT NULL,
  `paper5` int(11) NOT NULL,
  PRIMARY KEY (`msc_s4_result_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tblresult_msc_sem4`
--

INSERT INTO `tblresult_msc_sem4` (`msc_s4_result_id`, `stud_id`, `paper1`, `paper2`, `paper3`, `paper4`, `paper5`) VALUES
(1, 1, 55, 66, 77, 88, 99),
(2, 2, 55, 71, 95, 81, 72),
(3, 3, 45, 65, 95, 85, 72);

-- --------------------------------------------------------

--
-- Table structure for table `tblstudent`
--

CREATE TABLE IF NOT EXISTS `tblstudent` (
  `stud_id` int(11) NOT NULL AUTO_INCREMENT,
  `stud_name` varchar(30) NOT NULL,
  `stud_email` varchar(50) NOT NULL,
  `stud_dob` int(10) NOT NULL,
  `stud_rollno` int(10) NOT NULL,
  `stud_course` varchar(50) NOT NULL,
  PRIMARY KEY (`stud_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tblstudent`
--

INSERT INTO `tblstudent` (`stud_id`, `stud_name`, `stud_email`, `stud_dob`, `stud_rollno`, `stud_course`) VALUES
(1, 'Rishabh Soni', 'rishabhsoni0261@gmail.com', 17081999, 1, '2'),
(2, 'Yashwant Singh Rathore', 'yashwantrathore@gmail.com', 14052000, 2, '2'),
(3, 'Mehul Agarwal', 'mehulagrawal456@gmail.com', 25122000, 3, '2'),
(5, 'Vivek Gulchar', 'vivek@gmail.com', 15022001, 4, '1');
