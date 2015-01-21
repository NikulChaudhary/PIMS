-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2014 at 10:58 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pims`
--
CREATE DATABASE IF NOT EXISTS `pims` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `pims`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `adm_id` int(10) NOT NULL AUTO_INCREMENT,
  `adm_name` varchar(20) NOT NULL,
  `adm_email` varchar(30) NOT NULL,
  `adm_designation` varchar(20) NOT NULL,
  `adm_contact` bigint(10) NOT NULL,
  `pic` varchar(20) NOT NULL,
  PRIMARY KEY (`adm_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adm_id`, `adm_name`, `adm_email`, `adm_designation`, `adm_contact`, `pic`) VALUES
(1, 'mehulpatel', 'mehul100exp@gmail.com', 'admin', 9879861889, 'mehulpatel.jpg'),
(2, 'ww', 'm@gmail.com', 'admin', 2356458698, '');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE IF NOT EXISTS `branch` (
  `branch_id` int(5) NOT NULL AUTO_INCREMENT,
  `branch_name` varchar(100) NOT NULL,
  PRIMARY KEY (`branch_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`branch_id`, `branch_name`) VALUES
(1, 'AERONAUTICAL'),
(2, 'AUTOMOBILE'),
(3, 'BIO-MEDICAL'),
(4, 'BIO-TECHNOLOGY'),
(5, 'CHEMICAL'),
(6, 'CIVIL'),
(7, 'COMPUTER'),
(8, 'ELECTRICAL & ELECTRONICS'),
(9, 'ELECTRICAL'),
(10, 'ELECTRONICS'),
(11, 'ELECTRONICS & COMMUNICATION'),
(12, 'ELECTRONICS & TELECOMMUNICATION'),
(13, 'ENVIRONMENTAL'),
(14, 'FOOD PROCESSING TECHNOLOGY'),
(15, 'INDUSTRIAL'),
(16, 'INFORMATION TECHNOLOGY'),
(17, 'INSTRUMENTATION & CONTROL'),
(19, 'MECHANICAL'),
(20, 'MECHATRONIC'),
(21, 'METALLURGICAL'),
(22, 'MINING'),
(23, 'PLASTIC TECHNOLOGY'),
(24, 'POWER ELECTRONICS'),
(25, 'PRODUCTION'),
(26, 'RUBBER TECHNOLOGY'),
(28, 'TEXTILE PRODUCTION'),
(29, 'TEXTILE TECHNOLOGY'),
(31, 'COMPUTER SCIENCE & ENGGINEERING'),
(32, 'INFORMATION AND COMMUNICATION TECHNOLOGY');

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE IF NOT EXISTS `college` (
  `clg_id` int(5) NOT NULL,
  `clg_name` varchar(100) NOT NULL,
  `clg_address` varchar(100) NOT NULL,
  `clg_email` varchar(100) NOT NULL,
  `clg_contact` bigint(20) NOT NULL,
  PRIMARY KEY (`clg_id`),
  UNIQUE KEY `clg_email` (`clg_email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`clg_id`, `clg_name`, `clg_address`, `clg_email`, `clg_contact`) VALUES
(7, 'BVM', 'VVNagar\r\n\r\n', 'bvmengineering@gmail.com', 2147483647),
(11, 'GHP', 'VVNagar', 'ghp@gmail.com', 2147483647),
(63, 'ICCT', 'VVNagar', 'icct@gmail.com', 2154896253);

-- --------------------------------------------------------

--
-- Table structure for table `college_branch`
--

CREATE TABLE IF NOT EXISTS `college_branch` (
  `clg_branch_id` int(5) NOT NULL AUTO_INCREMENT,
  `clg_id` int(5) NOT NULL,
  `branch_id` int(5) NOT NULL,
  PRIMARY KEY (`clg_branch_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `college_branch`
--

INSERT INTO `college_branch` (`clg_branch_id`, `clg_id`, `branch_id`) VALUES
(1, 7, 7),
(2, 7, 6),
(3, 7, 8),
(4, 7, 9),
(5, 7, 10),
(6, 7, 12),
(7, 7, 16),
(8, 7, 19),
(9, 7, 25),
(10, 11, 7),
(11, 11, 19);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `f_id` varchar(15) NOT NULL,
  `f_fname` varchar(20) NOT NULL,
  `f_lname` varchar(20) NOT NULL,
  `f_gender` varchar(6) NOT NULL,
  `f_dob` date NOT NULL,
  `f_clgname` varchar(30) NOT NULL,
  `f_department` varchar(20) NOT NULL,
  `f_designation` varchar(20) NOT NULL,
  `f_qualification` varchar(30) NOT NULL,
  `f_email` varchar(30) NOT NULL,
  `f_mo_no` bigint(10) NOT NULL,
  `f_DOJoin` date NOT NULL,
  `f_area_of_expert` varchar(20) NOT NULL,
  `f_experience` int(3) NOT NULL,
  `f_book_published` varchar(50) NOT NULL,
  `f_project_guided` varchar(50) NOT NULL,
  `f_expert_courses` varchar(50) NOT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`f_id`, `f_fname`, `f_lname`, `f_gender`, `f_dob`, `f_clgname`, `f_department`, `f_designation`, `f_qualification`, `f_email`, `f_mo_no`, `f_DOJoin`, `f_area_of_expert`, `f_experience`, `f_book_published`, `f_project_guided`, `f_expert_courses`) VALUES
('fc53037c8383958', 'Mayur', 'Vegad', 'Male', '2014-02-14', 'BVM', 'COMPUTER', 'Assosiate Professor', 'PhD', 'mayurmvegad@bvmengineering.ac.', 9376155526, '1999-02-02', 'Networking', 12, '', '', ''),
('fc53037ca75ae25', 'Sunil', 'Bakhru', 'Male', '1943-02-20', 'BVM', 'COMPUTER', 'Professor', 'PhD', 'sabakhru@bvmengineering.ac.in', 998978965232, '1999-02-01', 'OS', 15, '', '', ''),
('fc530a4eff7f4c8', 'Narendra', 'Patel', 'Male', '1970-02-08', 'BVM', 'COMPUTER', 'professor', 'PhD', 'nmp@bvmengineering.ac.in', 998654562312, '2000-02-01', 'Image Prosessing', 10, '', '', ''),
('fc530aeefba73ab', 'Prashant', 'Swadash', 'Male', '1992-02-02', 'BVM', 'COMPUTER', 'Assosiate Professor,', 'M.Tech', 'pbswadas@bvmengineering.ac.in', 9865253595, '1989-07-03', 'Database', 22, '', '', ''),
('fc530af0925737f', 'Darshak', 'Thakore', 'Male', '1992-02-02', 'BVM', 'COMPUTER', 'Assosiate Professor', 'PhD', 'dgthakore@bvmengineering.ac.in', 9865256547, '1991-09-03', ' 	Digital Image Proc', 20, '', '', ''),
('fc530af0d77baed', 'Mohsin', 'Hasan', 'Male', '1992-02-02', 'BVM', 'COMPUTER', 'Assosiate Professor', 'M.E', 'mihasan@bvmengineering.ac.in', 9856458565, '2006-02-16', 'NetworkSecurity ,.NE', 8, '', '', ''),
('fc530af10a9aa89', 'Hemant', 'Vasava', 'Male', '1992-02-02', 'BVM', 'COMPUTER', 'Assistant Professor', 'M.E', 'hdvasava@bvmengineering.ac.in', 8956895656, '2008-03-01', 'DS,Networking,Progra', 6, '', '', ''),
('fc530af13928a5b', 'Bhavesh', 'Tanavala', 'Male', '1992-02-02', 'BVM', 'COMPUTER', 'Assistant Professor', 'M.S', 'bhavesh.tanawala@bvmengineerin', 9898654586, '2009-07-03', 'Java, ERP, Software ', 5, '', '', ''),
('fc530af17f1b7d0', 'Kirti', 'Sharma', 'Male', '1992-02-02', 'BVM', 'COMPUTER', 'Assistant Professor', 'M.E', 'kjsharma@bvmengineering.ac.in', 9856458565, '2011-03-04', 'DBMS, Distributed Sy', 3, '', '', ''),
('fc530af1c126f07', 'Udesang', 'Jaliya', 'Male', '1992-02-02', 'BVM', 'COMPUTER', 'Assistant Professor', 'M.E', 'udesang.jaliya@bvmengineering.', 9856564526, '2011-12-27', 'DSA, UML, Programmin', 0, '', '', ''),
('fc530af1f2eb21d', 'Mahasveta', 'Joshi', 'Female', '1992-02-02', 'BVM', 'COMPUTER', 'Assistant Professor', 'M.E', 'mjjoshi@bvmengineering.ac.in', 0, '0000-00-00', '', 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `industry_eng_detail`
--

CREATE TABLE IF NOT EXISTS `industry_eng_detail` (
  `ie_ref_id` varchar(15) NOT NULL,
  `ie_fname` varchar(20) NOT NULL,
  `ie_lname` varchar(20) NOT NULL,
  `ie_gender` varchar(6) NOT NULL,
  `ie_dob` date NOT NULL,
  `company_name` varchar(30) NOT NULL,
  `company_email` varchar(30) NOT NULL,
  `company_addr` text NOT NULL,
  `ie_qualification` varchar(30) NOT NULL,
  `ie_DOJoin` date NOT NULL,
  `ie_area_of_expert` varchar(30) NOT NULL,
  `ie_experience` int(3) NOT NULL,
  `ie_designation` varchar(20) NOT NULL,
  `ie_email` varchar(30) NOT NULL,
  `ie_mo_no` bigint(10) NOT NULL,
  `ie_project_undertaken` int(5) NOT NULL,
  PRIMARY KEY (`ie_ref_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_title` varchar(100) NOT NULL,
  `post_detail` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `post_title`, `post_detail`) VALUES
(1, 'New Project', 'Ariived');

-- --------------------------------------------------------

--
-- Table structure for table `project_faculty_guide`
--

CREATE TABLE IF NOT EXISTS `project_faculty_guide` (
  `pro_id` varchar(15) NOT NULL,
  `f_id` varchar(20) NOT NULL,
  `id` int(5) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `project_faculty_guide`
--

INSERT INTO `project_faculty_guide` (`pro_id`, `f_id`, `id`) VALUES
('13007071dgmJG', 'fc53037c8383958', 1);

-- --------------------------------------------------------

--
-- Table structure for table `project_group_details`
--

CREATE TABLE IF NOT EXISTS `project_group_details` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `pro_id` varchar(15) NOT NULL,
  `st_id` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `project_group_details`
--

INSERT INTO `project_group_details` (`id`, `pro_id`, `st_id`) VALUES
(2, '13007071dgmJG', 'st53084f540cc60'),
(4, '13007071dgmJG', 'st530a4d4b64bc8'),
(5, '13007071dgmJG', 'st530a4dec19f4c'),
(6, '13007071dgmJG', 'st530a4d9f4c6ad');

-- --------------------------------------------------------

--
-- Table structure for table `project_guide_industryperson`
--

CREATE TABLE IF NOT EXISTS `project_guide_industryperson` (
  `id` int(5) NOT NULL,
  `pro_id` varchar(15) NOT NULL,
  `ie_ref_id` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pro_requirement`
--

CREATE TABLE IF NOT EXISTS `pro_requirement` (
  `prreq_id` int(10) NOT NULL AUTO_INCREMENT,
  `pro_title` varchar(30) NOT NULL,
  `pro_desc` text NOT NULL,
  `pro_discipline` varchar(20) NOT NULL,
  `pro_area` varchar(20) NOT NULL,
  `pro_tools` varchar(20) NOT NULL,
  `pro_platform` varchar(20) NOT NULL,
  `pro_expected_time` int(3) NOT NULL,
  `pro_keyword` text NOT NULL,
  `pro_type` varchar(10) NOT NULL,
  `pro_status` varchar(20) NOT NULL,
  PRIMARY KEY (`prreq_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `st_id` varchar(15) NOT NULL,
  `st_fname` varchar(20) NOT NULL,
  `st_lname` varchar(20) NOT NULL,
  `st_gender` varchar(6) NOT NULL,
  `st_enroll` bigint(12) NOT NULL,
  `st_college` varchar(30) NOT NULL,
  `st_branch` varchar(20) NOT NULL,
  `st_dob` date NOT NULL,
  `st_addr` text NOT NULL,
  `st_mo_no` bigint(10) NOT NULL,
  `st_email` varchar(30) NOT NULL,
  PRIMARY KEY (`st_id`),
  UNIQUE KEY `st_enroll` (`st_enroll`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`st_id`, `st_fname`, `st_lname`, `st_gender`, `st_enroll`, `st_college`, `st_branch`, `st_dob`, `st_addr`, `st_mo_no`, `st_email`) VALUES
('st53030e216ce01', 'Nikunj', 'Shekhada', 'Male', 100070107020, 'BVM', 'COMPUTER', '1992-02-08', 'B53,New Hostel,VVNagar', 9099516826, 'nik@gmail.com'),
('st53084f540cc60', 'Mehul', 'Patel', 'Male', 100070107042, 'BVM', 'COMPUTER', '1999-05-29', 'B53,New Hostel,VVNagar', 9879861889, 'mehulpatel100exp@gmail.com'),
('st530a4d4b64bc8', 'Sunil', 'Prajapati', 'Male', 100070107046, 'BVM', 'COMPUTER', '2014-02-20', 'B,53,New Hostel,VVn', 8460285615, 'Sunil@gmail.com'),
('st530a4d9f4c6ad', 'Hitesh', 'Prajapati', 'Male', 100070107048, 'BVM', 'COMPUTER', '1993-02-21', 'B,53,New Hostel,VVn', 1234567891, 'hitesh123@gmail.com'),
('st530a4dec19f4c', 'Nikul', 'Chaudhary', 'Male', 100070107044, 'BVM', 'COMPUTER', '1993-02-13', 'B,53,New Hostel,VVN', 1234567893, 'nikul@gmail.com'),
('st530a4e379c4bd', 'Nikhil', 'Godhani', 'Male', 100070107026, 'BVM', 'COMPUTER', '1993-08-20', 'B,53,New Hostel,VVN', 1234567896, 'nikhil@gmail.com'),
('st530a4e8e34f11', 'Bhavdip', 'Pambhar', 'Male', 100070107023, 'BVM', 'COMPUTER', '1993-03-21', 'B,53,New Hostel,VVN', 1234567892, 'bhavdip@gmail.com'),
('st530ad398cacc6', 'Jigar', 'Varmora', 'Male', 100070107032, 'BVM', 'COMPUTER', '1992-02-02', 'B53,New Hostel,VVNagar', 1234567895, 'jigar@gmail.com'),
('st530ae09663735', 'Hardik', 'Chauhan', 'Male', 100070107043, 'BVM', 'COMPUTER', '1993-05-29', 'B53,New Hostel,VVNagar', 9986564521, 'hardik@gmail.com'),
('st530ae19945091', 'Harshad', 'Ghori', 'Male', 100070107018, 'BVM', 'COMPUTER', '1993-02-02', 'B53,New Hostel,VVNagar', 9987562354, 'harshad@gmail.com'),
('st530ae1f5c6699', 'Chandresh', 'Katheriya', 'Male', 100070107028, 'BVM', 'COMPUTER', '1992-02-02', 'B53,New Hostel,VVNagar', 9987546235, 'chandresh@gmail.com'),
('st530aeabf5ca05', 'Sunilkumar', 'Bhoi', 'Male', 110073107009, 'BVM', 'COMPUTER', '1992-08-15', 'Anand', 8460884458, 'sunil7004@gmail.com'),
('st530af3fbd6867', 'radhika', 'kaneriya', 'Female', 100070107033, 'BVM', 'COMPUTER', '1992-06-15', 'B53,New Hostel,VVNagar', 9724866602, 'radhikakaneriya@gmail.com'),
('st530af5b32966b', 'Kena', 'Khakhkhar', 'Female', 100070107006, 'BVM', 'COMPUTER', '1992-10-18', 'hostel', 7405307905, 'khakhkhar.kena@gmail.com'),
('st530af6131504d', 'Nirali', 'Dave', 'Female', 100070107005, 'BVM', 'COMPUTER', '1992-02-02', 'hostel', 9409255352, 'niralidave91@gmail.com'),
('st530af6ba61121', 'karishma', 'nimavat', 'Female', 100070107047, 'BVM', 'COMPUTER', '1992-02-02', 'hostel', 9979066267, 'nimavat.karishma1@gmail.com'),
('st530af7a988265', 'anjana', 'ratadiya', 'Female', 100070107038, 'BVM', 'COMPUTER', '1992-02-02', 'hostel', 9033960620, 'anjanaratadiya@gmail.com'),
('st530afa6eb7a23', 'Darshana', 'Chauhan', 'Female', 100070107035, 'BVM', 'COMPUTER', '1993-01-01', 'hostel', 9510440669, 'dschauhan91@gmail.com'),
('st530c3751232b2', 'Ashish', 'Kalariya', '', 100070107024, '', 'COMPUTER', '1993-02-22', '', 0, 'ashiahk@gmail.com'),
('st530c40d4d8732', 'Shail', 'Chokshi', 'Male', 100070107034, 'BVM', 'COMPUTER', '1992-02-02', 'B53,New Hostel,VVNagar', 9856545264, 'shail@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `student_project_information`
--

CREATE TABLE IF NOT EXISTS `student_project_information` (
  `pro_id` varchar(15) NOT NULL,
  `ref_id` varchar(15) NOT NULL,
  `pro_title` varchar(50) NOT NULL,
  `pro_def` text NOT NULL,
  `disciplinary` varchar(10) NOT NULL,
  `pro_area` varchar(30) NOT NULL,
  `pro_keywords` text NOT NULL,
  `pro_company_name` varchar(30) NOT NULL,
  `pro_company_addr` text NOT NULL,
  `pro_company_email` varchar(30) NOT NULL,
  `yearofproject` int(4) NOT NULL,
  `pro_tools_used` varchar(50) NOT NULL,
  `pro_platform` varchar(20) NOT NULL,
  `pro_type` varchar(5) NOT NULL,
  `phase1` varchar(3) NOT NULL,
  `phase2` varchar(3) NOT NULL,
  `phase3` varchar(3) NOT NULL,
  PRIMARY KEY (`pro_id`),
  UNIQUE KEY `ref_id` (`ref_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_project_information`
--

INSERT INTO `student_project_information` (`pro_id`, `ref_id`, `pro_title`, `pro_def`, `disciplinary`, `pro_area`, `pro_keywords`, `pro_company_name`, `pro_company_addr`, `pro_company_email`, `yearofproject`, `pro_tools_used`, `pro_platform`, `pro_type`, `phase1`, `phase2`, `phase3`) VALUES
('10', 'st530afa6eb7a23', 'GUI Editor', 'Gui Editor ', '', 'Android applicaion', '', 'BVM', '', '', 2013, 'eclipse', 'windows', 'UDP', '', '', ''),
('11', 'st530c40d4d8732', 'IT Aid Help Desk System', 'Develop system for help desk', '', 'web application', 'IT Aid Help Desk System Develop system for help desk ', 'Elecon', 'vvn', 'elecon@gmail.com', 2013, '.net', 'windows', 'IDP', '', '', ''),
('13007071dgmJG', 'st53084f540cc60', '', '', 'yes', '', '', '', '', '', 2013, '', '', '', 'no', 'no', 'no'),
('2', 'st53030e216ce01', 'Student Information', 'web', '', 'web Application', 'student information web', 'BVM', '', '', 2013, 'xampp', 'windows', 'UDP', '', '', ''),
('5', 'st530ae09663735', 'Enhanced planner with video conferrence ', 'web application for conferencing', '', 'web Application', '', 'BVM', '', '', 2013, '.net,CWF', 'windows', 'UDP', '', '', ''),
('8', 'st530af3fbd6867', 'developing a management dashboard interfacing with', 'The dashboard will give the summary of the business process in any organizations.So any changes can be done very easily.', '', 'Business Intelligence', '', 'BVM', '', '', 2013, 'Visual Studio,SQL Server R2', 'windows', 'UDP', '', '', ''),
('9', 'st530af6ba61121', 'use of internet for fault detection', 'development of fault utility', '', 'Hardware', '', 'BVM', '', '', 2013, 'sensor microcontroller AT mega 2560  ', 'windows', 'UDP', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `ref_id` varchar(15) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `profession` varchar(10) NOT NULL,
  PRIMARY KEY (`ref_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ref_id`, `username`, `password`, `profession`) VALUES
('1', 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 'admin'),
('2', 'new', '12345', 'admin'),
('fc53037c8383958', 'mayurm', '81dc9bdb52d04dc20036dbd8313ed055', 'faculty'),
('fc53037ca75ae25', 'sbakhru', '81dc9bdb52d04dc20036dbd8313ed055', 'faculty'),
('fc530a4eff7f4c8', 'nmp', '81dc9bdb52d04dc20036dbd8313ed055', 'faculty'),
('st53030e216ce01', 'Nikunj', '81dc9bdb52d04dc20036dbd8313ed055', 'student'),
('st53084f540cc60', 'mehultest', '81dc9bdb52d04dc20036dbd8313ed055', 'student'),
('st530a4d4b64bc8', 'sunil', '81dc9bdb52d04dc20036dbd8313ed055', 'student'),
('st530a4d9f4c6ad', 'hitesh', '81dc9bdb52d04dc20036dbd8313ed055', 'student'),
('st530a4dec19f4c', 'nikul', '81dc9bdb52d04dc20036dbd8313ed055', 'student'),
('st530a4e379c4bd', 'nikhil', '81dc9bdb52d04dc20036dbd8313ed055', 'student'),
('st530a4e8e34f11', 'bhavdip', '81dc9bdb52d04dc20036dbd8313ed055', 'student'),
('st530ad398cacc6', 'jigar', '81dc9bdb52d04dc20036dbd8313ed055', 'student'),
('st530ae09663735', 'hardik', '81dc9bdb52d04dc20036dbd8313ed055', 'student'),
('st530ae19945091', 'harshad', '81dc9bdb52d04dc20036dbd8313ed055', 'student'),
('st530ae1f5c6699', 'chandresh', '81dc9bdb52d04dc20036dbd8313ed055', 'student'),
('st530aeabf5ca05', 'Sunil_Bhoi', '7e53d1f210ffb04a215eb0db49080874', 'student'),
('st530af3fbd6867', 'radhika', '81dc9bdb52d04dc20036dbd8313ed055', 'student'),
('st530af5b32966b', 'Kena', 'e10adc3949ba59abbe56e057f20f883e', 'student'),
('st530af6131504d', 'Nirali', 'e10adc3949ba59abbe56e057f20f883e', 'student'),
('st530af6ba61121', 'karishma', '81dc9bdb52d04dc20036dbd8313ed055', 'student'),
('st530af7a988265', 'anjana', '81dc9bdb52d04dc20036dbd8313ed055', 'student'),
('st530afa6eb7a23', 'dschauhan', '0a9e80f25ce9cbf42a7a8e904e7b6f2e', 'student'),
('st530c3751232b2', 'ashiahk@gmail.com', 'e19ce441b910e453d5cf0e1926ee88f6', 'student'),
('st530c40d4d8732', 'shail', '81dc9bdb52d04dc20036dbd8313ed055', 'student');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
