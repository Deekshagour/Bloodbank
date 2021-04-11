-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 20, 2019 at 07:38 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blood1`
--

-- --------------------------------------------------------

--
-- Table structure for table `addblood`
--

CREATE TABLE IF NOT EXISTS `addblood` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `name` char(50) NOT NULL,
  `phone_no` bigint(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `addblood`
--

INSERT INTO `addblood` (`id`, `name`, `phone_no`, `address`) VALUES
(5, 'New Bhopal Blood', 915238547, 'Diagnostic Center pathology labs'),
(6, 'Hope hospital', 7589654869, 'Ratnagi by pass road bhopal'),
(7, 'abd', 785857484, 'bhopal'),
(8, 'gaytri hospital', 789659658, 'aanad nager'),
(9, 'kangau mal', 787877878, 'bansal chowk'),
(10, 'khandelval hospital', 9965864589, 'multai district betul'),
(11, 'gaytri hospital', 758695468, 'aanad nager'),
(12, 'ams hospital', 758694565, 'saket nagar');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `user_name` char(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `fathers_name` char(50) NOT NULL,
  `gender` char(10) NOT NULL,
  `age` int(2) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `mob` bigint(10) NOT NULL,
  `area` char(50) NOT NULL,
  `city` char(25) NOT NULL,
  `blood_group` varchar(5) NOT NULL,
  PRIMARY KEY (`email_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`user_name`, `password`, `fathers_name`, `gender`, `age`, `address`, `email_id`, `mob`, `area`, `city`, `blood_group`) VALUES
('Harshalata boharpi', '4242', 'Prayagrao boharpi', 'female', 22, 'Piplani', 'harshalataboharpi@gmail.com', 7999653594, 'Piplani', 'Bhopal', 'A+'),
('Riya Mishra', '12345', 'riya@gmail.com', 'female', 24, 'Bhopal', 'riya@gmail.com', 9907654980, 'Board Office', 'Bhopal', 'A+'),
('Vipin gourkhede', '12345', 'mr. gourkhede', 'male', 29, 'bhopal', 'vipin.gourkhede@gmail.com', 8720011444, 'Akiriti Aqua city', 'Bhopal', 'A+');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
