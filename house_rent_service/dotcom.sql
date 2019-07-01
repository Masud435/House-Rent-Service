-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 30, 2018 at 11:06 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dotcom`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

DROP TABLE IF EXISTS `registration`;
CREATE TABLE IF NOT EXISTS `registration` (
  `username` varchar(8) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(25) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `roommate`
--

DROP TABLE IF EXISTS `roommate`;
CREATE TABLE IF NOT EXISTS `roommate` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) NOT NULL,
  `location` varchar(100) NOT NULL,
  `road` int(2) NOT NULL,
  `house` int(2) NOT NULL,
  `floor` int(2) NOT NULL,
  `balcony` varchar(3) NOT NULL,
  `rent_price` int(10) NOT NULL,
  `service_charge` int(10) NOT NULL,
  `security_deposit` int(10) NOT NULL,
  `picture` varchar(500) NOT NULL,
  `available_from` date NOT NULL,
  `contact` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sublet`
--

DROP TABLE IF EXISTS `sublet`;
CREATE TABLE IF NOT EXISTS `sublet` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) NOT NULL,
  `location` varchar(100) NOT NULL,
  `road` int(2) NOT NULL,
  `house` int(2) NOT NULL,
  `floor` int(2) NOT NULL,
  `balcony` varchar(3) NOT NULL,
  `rent_price` int(10) NOT NULL,
  `service_charge` int(10) NOT NULL,
  `security_deposit` int(10) NOT NULL,
  `picture` varchar(500) NOT NULL,
  `available_from` date NOT NULL,
  `contact` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sublet`
--

INSERT INTO `sublet` (`id`, `title`, `location`, `road`, `house`, `floor`, `balcony`, `rent_price`, `service_charge`, `security_deposit`, `picture`, `available_from`, `contact`) VALUES
(1, 'Alo Vubon Trust housing complex', 'Eastern Housing, Pallabi, Mirpur-1216', 4, 12, 4, '1', 4000, 800, 4500, 'images/Yes_check.jpg', '2018-12-01', '01745656842');

-- --------------------------------------------------------

--
-- Table structure for table `tolet`
--

DROP TABLE IF EXISTS `tolet`;
CREATE TABLE IF NOT EXISTS `tolet` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) NOT NULL,
  `location` varchar(100) NOT NULL,
  `road` int(2) NOT NULL,
  `house` int(2) NOT NULL,
  `floor` int(2) NOT NULL,
  `room` int(2) NOT NULL,
  `washroom` int(2) NOT NULL,
  `balcony` int(2) NOT NULL,
  `rent_price` int(11) NOT NULL,
  `service_charge` int(11) NOT NULL,
  `security_deposite` int(11) NOT NULL,
  `picture` varchar(500) NOT NULL,
  `available_from` date NOT NULL,
  `contact` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tolet`
--

INSERT INTO `tolet` (`id`, `title`, `location`, `road`, `house`, `floor`, `room`, `washroom`, `balcony`, `rent_price`, `service_charge`, `security_deposite`, `picture`, `available_from`, `contact`) VALUES
(1, 'Rajanighandha Complex', 'rupnagar, mirpur', 9, 65, 8, 3, 2, 2, 12000, 2000, 14000, 'images/Snapshot_20181026164740.png', '2018-10-18', '01558934599'),
(2, 'Al Madrid Housing', '11.5 bus stand, pallabi, mirpur', 12, 65, 3, 4, 3, 4, 14000, 2000, 16000, 'images/07c175ff-18a5-11e8-93a0-42010af00004.jpg', '2018-11-01', '01834657592'),
(3, 'Alo Vubon Trust housing complex', 'Eastern Housing, Pallabi, Mirpur-1216', 4, 12, 3, 4, 3, 2, 12000, 2000, 14000, 'images/designer-prague-rental-apartment.jpg', '2019-01-01', '01947645412');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
