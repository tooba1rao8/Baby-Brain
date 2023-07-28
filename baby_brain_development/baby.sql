-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2023 at 04:26 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `photogallery`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE IF NOT EXISTS `aboutus` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `date` varchar(30) NOT NULL,
  `introone` varchar(200) NOT NULL,
  `introdetails` text NOT NULL,
  `firstheading` varchar(200) NOT NULL,
  `firstdetail` text NOT NULL,
  `secondheading` varchar(200) NOT NULL,
  `seconddetails` text NOT NULL,
  `image` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `addvideo`
--

CREATE TABLE IF NOT EXISTS `addvideo` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `date` varchar(30) NOT NULL,
  `titlename` varchar(200) NOT NULL,
  `videosize` varchar(200) NOT NULL,
  `videocategory` text NOT NULL,
  `videoimage` text NOT NULL,
  `videourl` varchar(200) NOT NULL,
  `detail` varchar(400) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `addvideo`
--

INSERT INTO `addvideo` (`id`, `date`, `titlename`, `videosize`, `videocategory`, `videoimage`, `videourl`, `detail`) VALUES
(1, '04-07-23', 'Video Name ', 'Video Size', 'For 6 Month Baby', 'placeholder-2.jpg', 'https://www.youtube.com/watch?v=PLNBNdtJciI', 'details'),
(2, '04-07-23', 'Video Name ', 'Video Size', 'For 1 Year Baby', 'go-kids-2.jpg', 'https://www.youtube.com/watch?v=fXtsv3Grp6A', 'details'),
(3, '04-07-23', 'Video Name ', 'Video Size', 'For 2 Year Baby', 'early-childhood-activities-e1593123209292.jpeg', 'https://www.youtube.com/watch?v=fXtsv3Grp6A', 'details'),
(4, '04-07-23', 'Video Name ', 'Video Size', 'For 3 Year Baby', 'Westley-2254-1024x684.jpg', 'https://www.youtube.com/watch?v=fXtsv3Grp6A', 'details'),
(5, '04-07-23', 'Video Name ', 'Video Size', 'For 4 Year Baby', 'go-kids-2.jpg', 'https://www.youtube.com/watch?v=fXtsv3Grp6A', 'details'),
(6, '04-07-23', 'Video Name ', 'Video Size', 'For 3 Year Baby', 'Westley-2254-1024x684.jpg', 'https://www.youtube.com/watch?v=fXtsv3Grp6A', 'details'),
(7, '04-07-23', 'Video Name ', 'Video Size', 'For 2 Year Baby', 'Westley-2254-1024x684.jpg', 'https://www.youtube.com/watch?v=fXtsv3Grp6A', 'details'),
(8, '04-07-23', 'Video Name ', 'Video Size', 'For 6 Month Baby', 'Westley-2254-1024x684.jpg', 'https://www.youtube.com/watch?v=fXtsv3Grp6A', 'details'),
(9, '04-07-23', 'Video Name ', 'Video Size', 'For 4 Year Baby', 'Westley-2254-1024x684.jpg', 'https://www.youtube.com/watch?v=fXtsv3Grp6A', 'details'),
(10, '04-07-23', 'Video Name ', 'Video Size', 'For 1 Year Baby', 'Westley-2254-1024x684.jpg', 'https://www.youtube.com/watch?v=fXtsv3Grp6A', 'details');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `date` varchar(30) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `yourimage` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `date`, `fname`, `lastname`, `email`, `password`, `yourimage`) VALUES
(5, '05-07-23', 'Msc', 'IT', 'msc@gmail.com', '123', 'author-2.png');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE IF NOT EXISTS `contactus` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `date` varchar(30) NOT NULL,
  `name` varchar(200) NOT NULL,
  `contact` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `date` int(30) NOT NULL,
  `serviceheading` text NOT NULL,
  `servicedetail` text NOT NULL,
  `firstheading` text NOT NULL,
  `firstdetail` text NOT NULL,
  `secondheading` text NOT NULL,
  `seconddetail` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `useraccount`
--

CREATE TABLE IF NOT EXISTS `useraccount` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `date` varchar(30) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `yourimage` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
