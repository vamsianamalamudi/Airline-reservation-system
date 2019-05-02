-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2019 at 08:29 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.1.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ars2`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `GetAllFlights` ()  BEGIN
   SELECT * FROM `flight`;
   END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin_details`
--

CREATE TABLE `admin_details` (
  `admin_user_name` varchar(40) NOT NULL,
  `admin_password` varchar(40) NOT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_details`
--

INSERT INTO `admin_details` (`admin_user_name`, `admin_password`, `admin_id`) VALUES
('vamsi', 'life', 123),
('yedhu', 'life', 124);

-- --------------------------------------------------------

--
-- Table structure for table `booking_table`
--

CREATE TABLE `booking_table` (
  `user_id` int(11) NOT NULL,
  `booking_date` date NOT NULL,
  `reporting_time` time NOT NULL,
  `booking_id` int(11) NOT NULL,
  `flight_id` int(4) NOT NULL,
  `CON_REJ` varchar(10) NOT NULL DEFAULT 'REJECTED'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking_table`
--

INSERT INTO `booking_table` (`user_id`, `booking_date`, `reporting_time`, `booking_id`, `flight_id`, `CON_REJ`) VALUES
(82, '2018-11-22', '08:00:00', 89, 0, 'cirnfiv');

-- --------------------------------------------------------

--
-- Table structure for table `contact_table`
--

CREATE TABLE `contact_table` (
  `user_id` int(10) NOT NULL,
  `country` varchar(20) NOT NULL,
  `subject` longtext NOT NULL,
  `contact_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_table`
--

INSERT INTO `contact_table` (`user_id`, `country`, `subject`, `contact_id`) VALUES
(82, 'india', 'cbadcbodab', 3),
(82, 'india', 'ola ola', 6),
(82, 'india', 'page not responsive!!', 7),
(82, 'india', 'nice website bro!', 8),
(82, 'india', 'nice website bro!', 9),
(82, 'india', 'doubvt', 10);

-- --------------------------------------------------------

--
-- Table structure for table `dummy`
--

CREATE TABLE `dummy` (
  `abc` int(10) NOT NULL,
  `abcd` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dummy`
--

INSERT INTO `dummy` (`abc`, `abcd`) VALUES
(87, 87),
(88, 88),
(89, 89),
(90, 90);

-- --------------------------------------------------------

--
-- Table structure for table `flight`
--

CREATE TABLE `flight` (
  `flight_name` varchar(20) NOT NULL,
  `flight_id` int(11) NOT NULL,
  `flight_type` varchar(20) NOT NULL,
  `from` varchar(20) NOT NULL,
  `to` varchar(20) NOT NULL,
  `dep_date` date NOT NULL,
  `dep_time` time NOT NULL,
  `arr_date` date NOT NULL,
  `arr_time` time NOT NULL,
  `dest_no` int(11) NOT NULL,
  `no_of_seats` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flight`
--

INSERT INTO `flight` (`flight_name`, `flight_id`, `flight_type`, `from`, `to`, `dep_date`, `dep_time`, `arr_date`, `arr_time`, `dest_no`, `no_of_seats`) VALUES
('flight1', 126, 'economy', 'mangalore', 'bangalore', '2018-06-07', '08:00:00', '2018-06-07', '09:30:00', 0, 120),
('flight2', 127, 'business', 'mangalore', 'bangalore', '2018-06-07', '09:00:00', '2018-06-07', '10:00:00', 0, 120);

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `user_name` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL,
  `user_id` int(4) NOT NULL,
  `passport_no` int(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `zip` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`first_name`, `last_name`, `user_name`, `password`, `user_id`, `passport_no`, `address`, `city`, `state`, `zip`) VALUES
('vamsi', 'A', 'yedhu@hh', 'hh', 81, 1231, '', '', '', ''),
('vamsi', 'a', 'vamsi@aa', 'aa', 82, 1234, '', '', '', ''),
('hello', 'bye', 'hello@bye', '123456', 89, 1234567889, '', '', '', '');

--
-- Triggers `user_details`
--
DELIMITER $$
CREATE TRIGGER `added_user` AFTER INSERT ON `user_details` FOR EACH ROW INSERT INTO dummy (abc, abcd)
  VALUES (NEW.user_id, NEW.user_id)
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_details`
--
ALTER TABLE `admin_details`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `booking_table`
--
ALTER TABLE `booking_table`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `contact_table`
--
ALTER TABLE `contact_table`
  ADD PRIMARY KEY (`contact_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `flight`
--
ALTER TABLE `flight`
  ADD PRIMARY KEY (`flight_id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_table`
--
ALTER TABLE `booking_table`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `contact_table`
--
ALTER TABLE `contact_table`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `flight`
--
ALTER TABLE `flight`
  MODIFY `flight_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `user_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking_table`
--
ALTER TABLE `booking_table`
  ADD CONSTRAINT `booking_table_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_details` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `contact_table`
--
ALTER TABLE `contact_table`
  ADD CONSTRAINT `contact_table_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_details` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
