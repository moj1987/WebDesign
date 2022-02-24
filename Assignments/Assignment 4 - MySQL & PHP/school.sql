-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 01, 2021 at 05:12 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--
CREATE DATABASE IF NOT EXISTS `school` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `school`;

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

DROP TABLE IF EXISTS `class`;
CREATE TABLE IF NOT EXISTS `class` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `className` varchar(50) NOT NULL,
  `sectionName` varchar(50) NOT NULL,
  `sectionTeacher` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `sectionName` (`sectionName`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `className`, `sectionName`, `sectionTeacher`) VALUES
(1, 'Web design', 'w1', 'Noman'),
(3, 'HTML', 'w11', 'Noman'),
(4, 'Security', 'w111', 'Noman');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(75) NOT NULL,
  `lastName` varchar(75) NOT NULL,
  `fatherName` varchar(75) NOT NULL,
  `phoneNumber` double NOT NULL,
  `address` varchar(175) NOT NULL,
  `DOB` date NOT NULL,
  `addmissionDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `firstName`, `lastName`, `fatherName`, `phoneNumber`, `address`, `DOB`, `addmissionDate`) VALUES
(1, 'Mojtaba', 'Abbasszadeh', 'R', 226, '76', '2022-01-01', '2021-04-24 02:59:13'),
(2, 'Mojtaba', 'Abbasszadeh', 'R', 226, '76', '2022-01-01', '2021-04-24 03:56:21'),
(3, 'Mojtaba', 'Abbasszadeh', 'R', 226, '76', '2022-01-01', '2021-04-24 03:56:29'),
(4, 'Moj', 'Abbasszadeh', 'R', 226, '76', '2022-01-01', '2021-04-24 03:57:26'),
(5, 'Moj', 'Abbasszadeh', 'R', 226, '76', '2022-01-01', '2021-04-24 03:58:08'),
(6, 'Moj', 'Abbasszadeh', 'R', 226, '76', '2022-01-01', '2021-04-24 03:58:39'),
(7, 'Moj', 'Abbasszadeh', 'R', 226, '76', '2022-01-01', '2021-04-24 03:58:54'),
(8, 'Moj', 'Abbasszadeh', 'R', 226, '76', '2022-01-01', '2021-04-24 03:59:00'),
(9, 'Moj', 'Abbasszadeh', 'R', 226, '76', '2022-01-01', '2021-04-24 03:59:06'),
(10, 'Moj', 'Abbasszadeh', 'R', 226, '76', '2022-01-01', '2021-04-24 04:00:05'),
(11, 'Moj', 'Abbasszadeh', 'R', 226, '76', '2022-01-01', '2021-04-24 04:00:12'),
(12, 'M', 'Abbasszadeh', 'R', 226, '76', '2022-01-01', '2021-04-24 04:04:32'),
(13, 'm', 'm', 'm', 2222222222, 'm', '2021-04-24', '2021-04-24 04:17:51');

-- --------------------------------------------------------

--
-- Table structure for table `studentclass`
--

DROP TABLE IF EXISTS `studentclass`;
CREATE TABLE IF NOT EXISTS `studentclass` (
  `studentId` int(11) NOT NULL,
  `classId` int(11) NOT NULL,
  KEY `studentId` (`studentId`),
  KEY `classId_FK` (`classId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentclass`
--

INSERT INTO `studentclass` (`studentId`, `classId`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(9, 3),
(10, 3),
(11, 3),
(12, 3),
(13, 3),
(8, 3),
(9, 3),
(3, 4),
(6, 4),
(10, 4);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `studentclass`
--
ALTER TABLE `studentclass`
  ADD CONSTRAINT `classId_FK` FOREIGN KEY (`classId`) REFERENCES `class` (`id`),
  ADD CONSTRAINT `studentId_FK` FOREIGN KEY (`studentId`) REFERENCES `student` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
