-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 23, 2018 at 02:21 PM
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
-- Database: `baribharadotcom`
--

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

DROP TABLE IF EXISTS `information`;
CREATE TABLE IF NOT EXISTS `information` (
  `name` varchar(50) NOT NULL,
  `address` varchar(250) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL,
  `picture` varchar(500) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `roommate`
--

DROP TABLE IF EXISTS `roommate`;
CREATE TABLE IF NOT EXISTS `roommate` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `location` varchar(100) NOT NULL,
  `road_no` varchar(5) NOT NULL,
  `house_no` varchar(5) NOT NULL,
  `floor_no` int(2) NOT NULL,
  `balcony` varchar(3) NOT NULL,
  `rental_price` int(11) NOT NULL,
  `service_charge` int(11) NOT NULL,
  `security_deposit` int(11) NOT NULL,
  `picture` varchar(500) NOT NULL,
  `available_from` date NOT NULL,
  `contact` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roommate`
--

INSERT INTO `roommate` (`id`, `title`, `location`, `road_no`, `house_no`, `floor_no`, `balcony`, `rental_price`, `service_charge`, `security_deposit`, `picture`, `available_from`, `contact`) VALUES
(1, 'comilla', 'magura', '4', '12', 5, '2', 2500, 500, 3000, 'images/41326702_1819823101433902_2420101998419378176_n.jpg', '2018-10-27', '01558934599');

-- --------------------------------------------------------

--
-- Table structure for table `sub_let`
--

DROP TABLE IF EXISTS `sub_let`;
CREATE TABLE IF NOT EXISTS `sub_let` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `location` varchar(100) NOT NULL,
  `road_no` varchar(5) NOT NULL,
  `house_no` varchar(5) NOT NULL,
  `floor_no` int(2) NOT NULL,
  `balcony` varchar(3) NOT NULL,
  `rental_price` int(11) NOT NULL,
  `service_charge` int(11) NOT NULL,
  `security_deposit` int(11) NOT NULL,
  `picture` varchar(500) NOT NULL,
  `available_from` date NOT NULL,
  `contact` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_let`
--

INSERT INTO `sub_let` (`id`, `title`, `location`, `road_no`, `house_no`, `floor_no`, `balcony`, `rental_price`, `service_charge`, `security_deposit`, `picture`, `available_from`, `contact`) VALUES
(2, 'khal', 'magura', '8', '65', 8, '2', 2500, 2000, 14000, 'images/41326702_1819823101433902_2420101998419378176_n.jpg', '2018-10-25', '0156456456'),
(3, 'aziz', 'agargao', '8', '65', 2, '1', 12000, 2000, 10500, 'images/43291510_2186553648285166_6271438140980854784_n.jpg', '2018-12-01', '0156456456'),
(4, 'comilla', 'agargao', '9', '65', 5, '1', 12000, 500, 3000, 'images/16473370_381732558870047_591538760077716380_n.jpg', '2018-10-31', '01852030887');

-- --------------------------------------------------------

--
-- Table structure for table `to_let`
--

DROP TABLE IF EXISTS `to_let`;
CREATE TABLE IF NOT EXISTS `to_let` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `location` varchar(100) NOT NULL,
  `road_no` varchar(5) NOT NULL,
  `house_no` varchar(5) NOT NULL,
  `floor_no` int(2) NOT NULL,
  `no_of_room` int(2) NOT NULL,
  `washrooms` int(2) NOT NULL,
  `balcony` int(2) NOT NULL,
  `rental_price` int(11) NOT NULL,
  `service_charge` int(11) NOT NULL,
  `security_deposit` int(11) NOT NULL,
  `picture` varchar(500) NOT NULL,
  `available_from` date NOT NULL,
  `contact` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `to_let`
--

INSERT INTO `to_let` (`id`, `title`, `location`, `road_no`, `house_no`, `floor_no`, `no_of_room`, `washrooms`, `balcony`, `rental_price`, `service_charge`, `security_deposit`, `picture`, `available_from`, `contact`) VALUES
(2, 'nagar vavan', 'mirpur 2', '4', '12', 5, 2, 2, 2, 12000, 2000, 14000, 'images/35565559_2193967600636674_8757433330086969344_n.jpg', '2018-10-10', '01852030887');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
