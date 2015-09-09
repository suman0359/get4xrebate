-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 08, 2015 at 04:21 PM
-- Server version: 5.5.44-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `globegain`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_administrator`
--

CREATE TABLE IF NOT EXISTS `tbl_administrator` (
  `admin_id` int(2) NOT NULL AUTO_INCREMENT,
  `admin_email` varchar(100) NOT NULL,
  `admin_first_name` varchar(50) NOT NULL,
  `admin_last_name` varchar(50) NOT NULL,
  `admin_role` tinyint(1) DEFAULT '2',
  `admin_profile_image` varchar(255) NOT NULL,
  `admin_status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `user_id` int(3) NOT NULL AUTO_INCREMENT,
  `user_first_name` varchar(50) NOT NULL,
  `user_last_name` varchar(50) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_gender` tinyint(1) NOT NULL DEFAULT '1',
  `user_date_of_birth` varchar(30) NOT NULL,
  `user_country` varchar(255) NOT NULL,
  `user_phone_no` varchar(20) NOT NULL,
  `user_language` varchar(50) NOT NULL,
  `user_time_zone` int(100) NOT NULL,
  `user_status` tinyint(1) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
