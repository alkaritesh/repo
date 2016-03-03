-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2016 at 05:51 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `repo`
--

-- --------------------------------------------------------

--
-- Table structure for table `class_master`
--

CREATE TABLE IF NOT EXISTS `class_master` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(110) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`,`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `class_master`
--

INSERT INTO `class_master` (`id`, `name`) VALUES
(1, 'Nursery'),
(2, 'LKG'),
(3, 'UKG'),
(4, 'I'),
(5, 'II'),
(6, 'III'),
(7, 'IV'),
(8, 'V'),
(9, 'VI'),
(10, 'VII'),
(11, 'VIII'),
(12, 'IX'),
(13, 'X'),
(14, 'XI'),
(15, 'XII');

-- --------------------------------------------------------

--
-- Table structure for table `class_section`
--

CREATE TABLE IF NOT EXISTS `class_section` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `class_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `class_id` (`class_id`,`section_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `class_subject`
--

CREATE TABLE IF NOT EXISTS `class_subject` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `class_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `session_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `class_id` (`class_id`),
  KEY `subject_id` (`subject_id`),
  KEY `session_id` (`session_id`),
  KEY `section_id` (`section_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `class_subject`
--

INSERT INTO `class_subject` (`id`, `class_id`, `subject_id`, `session_id`, `section_id`) VALUES
(1, 1, 1, 1, 2),
(2, 2, 2, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `class_teacher_allocation`
--

CREATE TABLE IF NOT EXISTS `class_teacher_allocation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `class_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `session_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` text NOT NULL,
  `code` varchar(30) NOT NULL,
  `course_type` enum('Regular','Optional','Vocational') NOT NULL,
  `for_class` int(11) NOT NULL,
  `cce_status` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `name` varchar(110) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `description`, `code`, `course_type`, `for_class`, `cce_status`, `status`, `name`) VALUES
(1, 'This is special Course for Class IV during vacation', 'CCE2', 'Regular', 7, 1, 1, 'Computer Education');

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE IF NOT EXISTS `designation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(90) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`id`, `name`) VALUES
(2, 'Driver'),
(4, 'Management'),
(3, 'Principle'),
(1, 'Teacher');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `dob` date NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `marital_status` enum('Single','Married') NOT NULL,
  `age` int(11) NOT NULL,
  `residence_address` text NOT NULL,
  `permanent_address` text NOT NULL,
  `designation` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `designation` (`designation`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `instution_details`
--

CREATE TABLE IF NOT EXISTS `instution_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(110) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `contact_person` varchar(110) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `instution_details`
--

INSERT INTO `instution_details` (`id`, `name`, `address`, `email`, `phone`, `mobile`, `contact_person`) VALUES
(1, 'RAP', 'Mars', 'rap@rap.com', '9874563210', '9874563210', 'GABBAR');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1456500391),
('m130524_201442_init', 1456500395);

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE IF NOT EXISTS `section` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `class_id` int(11) NOT NULL,
  `name` varchar(11) NOT NULL,
  `session_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`id`, `class_id`, `name`, `session_id`) VALUES
(1, 1, 'A', 1),
(2, 1, 'B', 1),
(3, 2, 'A', 1);

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE IF NOT EXISTS `session` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`id`, `start_date`, `end_date`, `status`) VALUES
(1, '2015-04-01', '2016-03-31', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(220) NOT NULL,
  `father_name` varchar(220) NOT NULL,
  `mother_name` varchar(220) NOT NULL,
  `address` text NOT NULL,
  `admission_no` varchar(100) NOT NULL,
  `joining_date` date NOT NULL,
  `created_on` date NOT NULL,
  `created_on_time` time NOT NULL,
  `guardian_name` varchar(220) NOT NULL,
  `catagory` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `catagory` (`catagory`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `father_name`, `mother_name`, `address`, `admission_no`, `joining_date`, `created_on`, `created_on_time`, `guardian_name`, `catagory`) VALUES
(1, 'Newton', 'Issac', 'Calivery', 'La,90 St. Illonios', '123456', '2016-02-29', '2016-02-28', '12:20:23', 'Issac', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_catagory`
--

CREATE TABLE IF NOT EXISTS `student_catagory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(90) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `name_2` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `student_catagory`
--

INSERT INTO `student_catagory` (`id`, `name`) VALUES
(1, 'General'),
(2, 'OBC');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `code` varchar(90) NOT NULL,
  `type` int(11) NOT NULL,
  `session` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `type` (`type`),
  KEY `type_2` (`type`),
  KEY `session` (`session`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `name`, `code`, `type`, `session`) VALUES
(1, 'HINDI', 'NUR-HIN-01', 1, 1),
(2, 'HINDI', 'LKG-HIN-01', 1, 1),
(3, 'Hindi', 'UKG-HIN-01', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `subject_type`
--

CREATE TABLE IF NOT EXISTS `subject_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `subject_type`
--

INSERT INTO `subject_type` (`id`, `name`) VALUES
(1, 'Regular');

-- --------------------------------------------------------

--
-- Table structure for table `time_table`
--

CREATE TABLE IF NOT EXISTS `time_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `class_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `session_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `days` varchar(110) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'qge2ElLVGxZQ4hBqs9V6Oj6FD2YC3RIY', '$2y$13$30mz/Ikw7Xu8l3JS9ajbTu1gX7bW1nnuqGe11e5Tfjm2fKvObi04K', NULL, 'admin@admin.com', 10, 1456501095, 1456501095);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `class_subject`
--
ALTER TABLE `class_subject`
  ADD CONSTRAINT `class_subject_ibfk_4` FOREIGN KEY (`section_id`) REFERENCES `section` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `class_subject_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `class_master` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `class_subject_ibfk_2` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `class_subject_ibfk_3` FOREIGN KEY (`session_id`) REFERENCES `session` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `subject`
--
ALTER TABLE `subject`
  ADD CONSTRAINT `subject_ibfk_2` FOREIGN KEY (`session`) REFERENCES `session` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `subject_ibfk_1` FOREIGN KEY (`type`) REFERENCES `subject_type` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
