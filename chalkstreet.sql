-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2015 at 08:37 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chalkstreet`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `course_id` varchar(20) DEFAULT NULL,
  `c_name` varchar(30) DEFAULT NULL,
  `c_category` varchar(20) DEFAULT NULL,
  `c_level` varchar(20) DEFAULT NULL,
  `c_price` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `c_name`, `c_category`, `c_level`, `c_price`) VALUES
('COUR00001', 'hello', 'Computer', 'Computer', 'Computer'),
('COUR00002', 'hi', 'Computer', 'Computer', 'Computer'),
('COUR00003', 'ji', 'Computer', 'Computer', 'Computer');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE IF NOT EXISTS `section` (
  `section_id` varchar(20) DEFAULT NULL,
  `course_id` varchar(20) DEFAULT NULL,
  `s_name` varchar(20) DEFAULT NULL,
  `s_detail` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`section_id`, `course_id`, `s_name`, `s_detail`) VALUES
('SEC00001', 'COUR00001', 'jiten', 'Intro'),
('SEC00002', '', 'jiten', 'not reuired'),
('SEC00003', 'COUR00002', 'hi', 'one'),
('SEC00004', 'COUR00002', 'kartik', 'sir'),
('SEC00005', 'COUR00002', 'hello ', 'jiten'),
('SEC00006', 'COUR00002', 'jiten', 'hel'),
('SEC00007', '', 'ji', 'ji'),
('SEC00008', 'COUR00001', 'hi', 'hi'),
('SEC00009', 'COUR00001', 'hi', 'hi'),
('SEC00010', 'COUR00001', 'hi', 'jiten');

-- --------------------------------------------------------

--
-- Table structure for table `userdetail`
--

CREATE TABLE IF NOT EXISTS `userdetail` (
  `username` varchar(20) DEFAULT NULL,
  `Dob` date DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `Sno` int(10) NOT NULL,
  `user` varchar(20) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Sno`, `user`, `password`, `timestamp`) VALUES
(1, 'jitensabharwal08', '827ccb0eea8a706c4c34a16891f84e7b', '2015-08-18 18:36:01');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `section_id` varchar(20) DEFAULT NULL,
  `video_id` varchar(20) DEFAULT NULL,
  `video_detail` varchar(40) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`section_id`, `video_id`, `video_detail`, `timestamp`) VALUES
('SEC00006', 'VID00001', 'first', '2015-08-18 17:05:39'),
('SEC00006', 'VID00002', 'Introduction', '2015-08-18 17:21:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Sno` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
