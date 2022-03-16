-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 16, 2022 at 04:05 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `service_center`
--
CREATE DATABASE IF NOT EXISTS `service_center` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `service_center`;

-- --------------------------------------------------------

--
-- Table structure for table `adminsignin`
--

CREATE TABLE IF NOT EXISTS `adminsignin` (
  `Adminname` varchar(10) NOT NULL DEFAULT '',
  `Password` varchar(15) DEFAULT NULL,
  `User_type` varchar(10) NOT NULL DEFAULT '',
  PRIMARY KEY (`Adminname`,`User_type`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminsignin`
--

INSERT INTO `adminsignin` (`Adminname`, `Password`, `User_type`) VALUES
('admin1', '111111', 'Adm');

-- --------------------------------------------------------

--
-- Table structure for table `adminsignup`
--

CREATE TABLE IF NOT EXISTS `adminsignup` (
  `F_name` varchar(30) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Adminname` varchar(10) NOT NULL DEFAULT '',
  PRIMARY KEY (`Adminname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminsignup`
--

INSERT INTO `adminsignup` (`F_name`, `Email`, `Adminname`) VALUES
('Eldhose', 'admin@123.com', 'admin1');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE IF NOT EXISTS `bill` (
  `Invoice_no` int(11) NOT NULL AUTO_INCREMENT,
  `Service_type` varchar(30) DEFAULT NULL,
  `part1` varchar(30) DEFAULT NULL,
  `part2` varchar(30) DEFAULT NULL,
  `part3` varchar(30) DEFAULT NULL,
  `cost` int(11) DEFAULT NULL,
  `cost1` int(11) DEFAULT NULL,
  `cost2` int(11) DEFAULT NULL,
  `cost3` int(11) DEFAULT NULL,
  `Issue_date` date NOT NULL DEFAULT '0000-00-00',
  `Username` varchar(10) NOT NULL,
  `Unit_no1` int(11) NOT NULL,
  `Unit_no2` int(11) NOT NULL,
  `Unit_no3` int(11) NOT NULL,
  PRIMARY KEY (`Invoice_no`,`Issue_date`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=55 ;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`Invoice_no`, `Service_type`, `part1`, `part2`, `part3`, `cost`, `cost1`, `cost2`, `cost3`, `Issue_date`, `Username`, `Unit_no1`, `Unit_no2`, `Unit_no3`) VALUES
(8, 'Body Service', 'Wiper', 'Headlight', 'Sensor', 6000, 500, 3000, 3000, '2021-11-30', 'eldhose', 2, 2, 3),
(9, 'Regular Service', 'Wiper', 'Headlight', 'Sensor', 2500, 500, 3000, 2000, '2021-11-30', 'eldhose55', 2, 1, 1),
(10, 'Engine Service', 'Wiper', 'Headlight', 'Sensor', 8000, 500, 3000, 2000, '2021-12-01', 'aromal123', 2, 1, 2),
(11, 'Body Service', 'Wiper', 'Headlight', 'Sensor', 8000, 100, 2000, 2000, '2021-12-02', 'ashir123', 1, 2, 2),
(12, 'Engine Service', 'Wiper', 'Headlight', 'Sensor', 5000, 200, 200, 200, '2021-12-02', 'aromal123', 2, 2, 2),
(13, 'Body Service', 'www', 'dsd', 'ffff', 200, 111, 234, 200, '2021-12-15', 'eldhose', 2, 2, 2),
(15, 'Regular Service', 'www', 'dsd', 'ffff', 400, 400, 400, 400, '2021-12-15', 'eldhose', 4, 4, 4),
(16, 'Body Service', 'www', 'dsd', 'ffff', 1000, 1000, 1000, 1000, '2021-12-15', 'eldhose', 1, 1, 1),
(17, 'Body Service', 'www', 'dsd', 'ffff', 1000, 100, 100, 100, '2021-12-15', 'eldhose', 4, 4, 4),
(18, 'Engine Service', 'www', 'dsd', 'ffff', 5000, 1000, 1000, 1000, '2021-12-15', 'eldhose', 1, 2, 1),
(19, 'Engine Service', 'www', 'dsd', 'ffff', 5000, 1000, 1000, 1000, '2021-12-15', 'eldhose', 1, 2, 1),
(20, 'Body Service', 'www', 'dsd', 'ffff', 4000, 400, 400, 400, '2021-12-15', 'eldhose', 4, 4, 4),
(21, 'Body Service', 'Wiper', 'Parking sensor', 'Mirror (R)', 5000, 400, 2500, 3500, '2021-12-19', 'eldhose', 1, 1, 1),
(31, 'Body Service', 'wiper', 'Headlight', 'Mirror', 1250, 100, 100, 100, '2021-12-19', 'eldhose', 1, 1, 1),
(32, 'Body Service', 'Wiper', NULL, NULL, 5000, 200, NULL, NULL, '2021-12-27', 'eldhose', 1, 0, 0),
(33, 'Body Service', 'Wiper', NULL, NULL, 5000, 1000, NULL, NULL, '2021-12-27', 'eldhose', 2, 0, 0),
(34, 'Body Service', 'Wiper', NULL, NULL, 5000, 1000, NULL, NULL, '2021-12-27', 'eldhose', 2, 0, 0),
(35, 'Regular Service', 'Wiper', NULL, NULL, 5000, 1000, NULL, NULL, '2021-12-27', 'eldhose', 2, 0, 0),
(36, 'Engine Service', 'Wiper', NULL, NULL, 8000, 1000, NULL, NULL, '2021-12-27', 'eldhose', 2, 0, 0),
(37, 'Body Service', 'Wiper', 'Pressure Valve', NULL, 5000, 1000, 100, NULL, '2021-12-27', 'eldhose', 2, 4, 0),
(38, 'Regular Service', 'Pressure Valve', 'Parking sensor', NULL, 5000, 500, 2500, NULL, '2021-12-27', 'eldhose', 2, 1, 0),
(39, 'Body Service', 'Wiper', 'dsd', NULL, 2500, 2, 2, NULL, '2022-03-13', 'eldhose', 1, 1, 0),
(40, 'Body Service', 'Wiper', 'dsd', NULL, 2500, 2500, 111, NULL, '2022-03-13', 'eldhose', 1, 1, 0),
(41, '$service', '$p1', NULL, NULL, 200, 2000, NULL, NULL, '0000-00-00', '$uid', 2, 0, 0),
(42, 'Regular Service', 'Wiper', 'Pressure Valve', NULL, 1000, 1111, 2222, NULL, '2022-03-13', 'eldhose', 1, 1, 0),
(43, 'Body Service', 'Wiper', NULL, NULL, 1111, 9000, NULL, NULL, '2022-03-13', 'eldhose', 2, 0, 0),
(44, 'Regular Service', 'Wiper', NULL, NULL, 3000, 111, NULL, NULL, '2022-03-13', 'eldhose', 10, 0, 0),
(45, 'Engine Service', 'Wiper', NULL, NULL, 2500, 500, NULL, NULL, '2022-03-14', 'eldhose', 1, 0, 0),
(46, 'Engine Service', 'Wiper', NULL, NULL, 2500, 500, NULL, NULL, '2022-03-14', 'eldhose', 4, 0, 0),
(47, 'Body Service', 'Wiper', NULL, NULL, 20000, 10000, NULL, NULL, '2022-03-14', 'jewel', 1, 0, 0),
(48, 'Regular Service', NULL, NULL, NULL, 3000, NULL, NULL, NULL, '2022-03-16', 'eldhose', 0, 0, 0),
(49, 'Regular Service', NULL, NULL, NULL, 3000, NULL, NULL, NULL, '2022-03-16', 'eldhose', 0, 0, 0),
(50, 'Engine Service', NULL, NULL, NULL, 7000, NULL, NULL, NULL, '2022-03-16', 'eldhose', 0, 0, 0),
(51, 'Engine Service', NULL, NULL, NULL, 7000, NULL, NULL, NULL, '2022-03-16', 'eldhose', 0, 0, 0),
(52, 'Engine Service', 'Wiper', NULL, NULL, 7000, 111, NULL, NULL, '2022-03-16', 'eldhose', 2, 0, 0),
(53, 'Body Service', 'Wiper', NULL, NULL, 5000, 222, NULL, NULL, '2022-03-16', 'eldhose', 1, 0, 0),
(54, 'Engine Service', NULL, NULL, NULL, 7000, NULL, NULL, NULL, '2022-03-16', 'eldhose', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `comp`
--

CREATE TABLE IF NOT EXISTS `comp` (
  `F_id` int(11) NOT NULL AUTO_INCREMENT,
  `F_name` varchar(30) DEFAULT NULL,
  `L_name` varchar(30) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Subject` varchar(30) DEFAULT NULL,
  `Message` varchar(500) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`F_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `comp`
--

INSERT INTO `comp` (`F_id`, `F_name`, `L_name`, `Email`, `Subject`, `Message`, `status`) VALUES
(1, 'AROMAL', 'ASHOK', 'eldhose@gmail.com', 'Staff Not Friendly', 'Staff was not friendly while discussing an insurance related service. I hope i will get better customer friendly staff next time. ', 1),
(2, 'Ashir', 'Muhammad', 'ashir34@gmail.com', 'Issues not fixed properly', 'My service has not done correctly. I asked for a replacement and the mechanic just installed a 2nd hand item , not good.', 1),
(3, 'Eldhose ', 'Babu', 'eldhose@gmail.com', 'Excellent service', 'Every issues of my car is fixed. Now I can drive without any problems.', 1),
(4, 'Nikhil', 'Tenny', 'nikhil@gmail.com', 'Good service', 'Service was good, staff was friendly. An okay experience.', 1),
(5, 'EldhoseBabu', 'el', 'eldhose@gmail.com', 'Staff Not Friendly', 'oomb myre\r\n', 1);

-- --------------------------------------------------------

--
-- Table structure for table `empsignin`
--

CREATE TABLE IF NOT EXISTS `empsignin` (
  `Empusername` varchar(10) NOT NULL DEFAULT '',
  `Password` varchar(15) DEFAULT NULL,
  `User_type` varchar(10) NOT NULL DEFAULT '',
  PRIMARY KEY (`Empusername`,`User_type`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `empsignin`
--

INSERT INTO `empsignin` (`Empusername`, `Password`, `User_type`) VALUES
('aromal123', '1234567', 'Emp'),
('ashir123', '123456', 'Emp'),
('babu', '123456', 'Emp'),
('eldh', '123456', 'Emp'),
('tenny', '12345678', 'Emp');

-- --------------------------------------------------------

--
-- Table structure for table `empsignup`
--

CREATE TABLE IF NOT EXISTS `empsignup` (
  `F_name` varchar(30) DEFAULT NULL,
  `Empusername` varchar(10) NOT NULL DEFAULT '',
  `Emp_email` varchar(30) DEFAULT NULL,
  `Phone_no` varchar(10) NOT NULL,
  PRIMARY KEY (`Empusername`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `empsignup`
--

INSERT INTO `empsignup` (`F_name`, `Empusername`, `Emp_email`, `Phone_no`) VALUES
('AROMAL ASHOK', 'aromal123', 'aru@gmail.com', '9544537051'),
('Ashir', 'ashir123', 'ashir@gmail.com', '8879077689'),
('babu', 'babu', 'babu@gmail.com', '1234567890'),
('EldhoseBabu el', 'eldh', 'eldhosebabu197@gmail.com', '9656451511'),
('Nikhil ', 'tenny', 'nikhil123@gmail.com', '9658241578');

-- --------------------------------------------------------

--
-- Table structure for table `parts`
--

CREATE TABLE IF NOT EXISTS `parts` (
  `Part_id` int(11) NOT NULL DEFAULT '0',
  `Part_name` varchar(30) DEFAULT NULL,
  `Part_price` int(11) DEFAULT NULL,
  `Labour_fees` int(11) DEFAULT NULL,
  PRIMARY KEY (`Part_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parts`
--

INSERT INTO `parts` (`Part_id`, `Part_name`, `Part_price`, `Labour_fees`) VALUES
(100, 'Head Gasket', 3000, 800),
(101, 'Battery', 4500, 800),
(102, 'Piston', 4500, 1000),
(103, 'Cylinder Head', 4000, 800),
(104, 'Doors', 7500, 1000),
(105, 'Mirrors', 800, 100),
(106, 'Lights', 2000, 500),
(107, 'Windows', 4500, 1000),
(108, 'Tires', 4500, 250);

-- --------------------------------------------------------

--
-- Table structure for table `servicebook`
--

CREATE TABLE IF NOT EXISTS `servicebook` (
  `Service_id` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(30) DEFAULT NULL,
  `Car_model` varchar(30) DEFAULT NULL,
  `Reg_no` varchar(30) DEFAULT NULL,
  `Booked_date` date DEFAULT NULL,
  `Service_type_id` int(11) DEFAULT NULL,
  `Status` varchar(10) DEFAULT NULL,
  `bill_status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Service_id`),
  KEY `fg2` (`Username`),
  KEY `fg4` (`Service_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=89 ;

--
-- Dumping data for table `servicebook`
--

INSERT INTO `servicebook` (`Service_id`, `Username`, `Car_model`, `Reg_no`, `Booked_date`, `Service_type_id`, `Status`, `bill_status`) VALUES
(45, 'eldhose', 'Golf GTI', 'KL178779', '2021-11-30', 102, 'Completed', 1),
(46, 'eldhose55', 'Tiguan', 'KL178779', '2021-11-30', 101, 'Completed', 1),
(47, 'aromal123', 'Polo GT', 'KL178779', '2021-12-01', 100, 'Completed', 1),
(48, 'ashir123', 'Vento', 'KL178779', '2021-12-02', 102, 'Completed', 1),
(49, 'aromal123', 'Passat', 'KL178779', '2021-12-02', 100, 'Completed', 1),
(52, 'eldhose', 'Passat', 'KL17D7842', '2021-12-15', 102, 'Completed', 1),
(53, 'eldhose', 'Ameo', 'KL7T7324', '2021-12-15', 101, 'Completed', 1),
(54, 'eldhose', 'Vento', 'KL44G1650', '2021-12-15', 102, 'Completed', 1),
(55, 'eldhose', 'Golf GTI', 'KL5T7324', '2021-12-15', 102, 'Completed', 1),
(56, 'eldhose', 'Passat', 'KL44G1650', '2021-12-15', 100, 'Completed', 1),
(57, 'eldhose', 'Ameo', 'KL17D7842', '2021-12-15', 102, 'Completed', 1),
(59, 'eldhose', 'Vento', 'KL5T7324', '2021-12-19', 102, 'Completed', 1),
(64, 'eldhose', 'Golf GTI', 'TN05X5602', '2021-12-27', 102, 'Completed', 1),
(65, 'eldhose', 'Polo GT TSI', 'KL44G1650', '2021-12-27', 101, 'Completed', 1),
(66, 'eldhose', 'Beetle', 'KL17D7842', '2021-12-27', 100, 'Completed', 1),
(67, 'eldhose', 'Beetle', 'KL17D7842', '2021-12-27', 102, 'Completed', 1),
(68, 'eldhose', 'Golf GTI', 'TTTTTGGGB', '2021-12-27', 101, 'Completed', 1),
(69, 'eldhose', 'Vento', 'KL7T7324', '2022-03-13', 102, 'Completed', 1),
(70, 'eldhose', 'Passat', 'KL7T7324', '2022-03-13', 102, 'Completed', 1),
(71, 'eldhose', 'Tiguan', 'KL44G1650', '2022-03-13', 101, 'Completed', 1),
(72, 'eldhose', 'Golf GTI', 'TTTTTGGGB', '2022-03-13', 102, 'Completed', 1),
(73, 'eldhose', 'Jetta', 'TTTTTGGGB', '2022-03-13', 101, 'Completed', 1),
(74, 'eldhose', 'Polo GT TSI', 'KL44G1650', '2022-03-13', 102, 'Completed', 0),
(75, 'eldhose', 'Golf GTI', 'KL44G1650', '2022-03-13', 102, 'Completed', 0),
(76, 'eldhose', 'Jetta', 'TN05X5602', '2022-03-13', 102, 'Completed', 0),
(77, 'eldhose', 'Ameo', 'KL5T7324', '2022-03-13', 101, 'Completed', 0),
(78, 'eldhose', 'Golf GTI', 'KL5T7324', '2022-03-13', 102, 'Completed', 0),
(79, 'eldhose', 'Polo GT', 'KL44G1650', '2022-03-14', 100, 'Completed', 1),
(80, 'eldhose', 'Polo GT', 'KL44G1650', '2022-03-14', 100, 'Completed', 1),
(81, 'jewel', 'Polo GT', 'KL 38D 1311', '2022-03-14', 102, 'Completed', 1),
(82, 'eldhose', 'Passat', 'KL7T7324', '2022-03-16', 101, 'Completed', 1),
(83, 'eldhose', 'Golf GTI', 'KL5T7324', '2022-03-16', 100, 'Completed', 1),
(84, 'eldhose', 'Vento', 'KL5T7324', '2022-03-16', 100, 'Completed', 1),
(85, 'eldhose', 'Golf GTI', 'TTTTTGGGB', '2022-03-16', 100, 'Completed', 1),
(86, 'eldhose', 'Golf GTI', 'TN05X5602', '2022-03-16', 102, 'Completed', 1),
(87, 'eldhose', 'Golf GTI', 'KL44G1650', '2022-03-16', 100, 'Completed', 1),
(88, 'eldhose', 'Passat', 'KL5T7324', '2022-03-16', 102, 'Completed', 0);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `Service_type_id` int(11) NOT NULL DEFAULT '0',
  `Service_type` varchar(30) DEFAULT NULL,
  `Cost` int(11) DEFAULT NULL,
  PRIMARY KEY (`Service_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`Service_type_id`, `Service_type`, `Cost`) VALUES
(100, 'Engine Service', 5000),
(101, 'Body Service', 3500),
(102, 'Regular Service', 1500);

-- --------------------------------------------------------

--
-- Table structure for table `signin`
--

CREATE TABLE IF NOT EXISTS `signin` (
  `Username` varchar(10) NOT NULL DEFAULT '',
  `Password` varchar(15) DEFAULT NULL,
  `User_type` varchar(10) NOT NULL DEFAULT '',
  PRIMARY KEY (`Username`,`User_type`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signin`
--

INSERT INTO `signin` (`Username`, `Password`, `User_type`) VALUES
('aromal123', 'aromal123', 'User'),
('ashir123', '123456', 'User'),
('eldhose', '123456', 'User'),
('eldhose123', '123456', 'User'),
('eldhose55', '123456', 'User'),
('eldhosebab', '123456', 'User'),
('jewel', '123456', 'User'),
('qqq', '123456', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `F_name` varchar(30) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Username` varchar(10) NOT NULL DEFAULT '',
  `Phone_no` varchar(10) NOT NULL,
  PRIMARY KEY (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`F_name`, `Email`, `Username`, `Phone_no`) VALUES
('aromal ashok', 's@gmail.com', 'aromal123', '7025584097'),
('ashir', 'ashir@gmail.com', 'ashir123', '9995268041'),
('Eldhose', 'eldhosebabu197@gmail.com', 'eldhose', '9995268041'),
('Eldhose Babu', 'eldhosebabu197@gmail.com', 'eldhose123', ''),
('Eldhose Babu', 'eldhosebabu197@gmail.com', 'eldhose55', '9995268040'),
('Eldhose', 'eldhose@gmail.com', 'eldhosebab', ''),
('jewel', 'jewel@gmail.com', 'jewel', ''),
('EldhoseBabu el', 'eldhosebabu197@gmail.com', 'qqq', '');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE IF NOT EXISTS `stock` (
  `Engine` int(11) DEFAULT NULL,
  `Body` int(11) DEFAULT NULL,
  `Consumables` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`Engine`, `Body`, `Consumables`) VALUES
(777, 795, 776);

-- --------------------------------------------------------

--
-- Table structure for table `stockpayment`
--

CREATE TABLE IF NOT EXISTS `stockpayment` (
  `Transaction_ID` int(11) NOT NULL AUTO_INCREMENT,
  `F_name` varchar(30) DEFAULT NULL,
  `Email` varchar(20) DEFAULT NULL,
  `Address` varchar(40) DEFAULT NULL,
  `City` varchar(20) DEFAULT NULL,
  `Zip` varchar(5) DEFAULT NULL,
  `State` varchar(20) DEFAULT NULL,
  `Cardname` varchar(30) DEFAULT NULL,
  `Cardno` varchar(16) DEFAULT NULL,
  `Expmonth` varchar(20) DEFAULT NULL,
  `Cvv` varchar(3) DEFAULT NULL,
  `Expyear` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`Transaction_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `stockpayment`
--

INSERT INTO `stockpayment` (`Transaction_ID`, `F_name`, `Email`, `Address`, `City`, `Zip`, `State`, `Cardname`, `Cardno`, `Expmonth`, `Cvv`, `Expyear`) VALUES
(1, 'EldhoseBabu el', 'eldhosebabu197@gmail', 'Chocklayil House ', 'Muvattupuzha', '68666', 'Kerala', 'eldhose', '1234123412341234', 'June', '613', '2023'),
(2, 'EldhoseBabu', 'eldhosebabu197@gmail', 'Chocklayil House , Ooramana P.O , Oorama', 'Muvattupuzha', '68666', 'Kerala', 'eldhose', '1245877965844333', 'June', '613', '2023'),
(3, 'ELDHOSE BABU', 'eldhosebabu197@gmail', 'OORAMANA, OORAMANA', 'Ernakulam', '68666', 'Kerala', 'Eldhose', '1111222233334444', 'JUNE', '613', '2023'),
(4, 'Eldhose Babu', 'eldhosebabu197@gmail', 'Chocklayil House', 'Muvattupuzha', '68666', 'Kerala', 'Eldhose Babu', '1111', 'June', '123', '2018'),
(5, 'EldhoseBabu el', 'eldhosebabu197@gmail', 'Chocklayil House', 'Muvattupuzha', '68666', 'Kerala', 'Eldhose Babu', '111122233334444', 'June', '123', '2012'),
(6, 'Eldhose', 'eldhose@gmail.com', 'El', 'dddd', '33344', 'ddd', 'VOLKS', '1234567890123456', 'May', '111', '2024'),
(7, 'Eldhose', 'eldhose@gmail.com', 'El', 'dddd', '33344', 'ddd', 'VOLKS', '333555', 'Jun', '111', '2020'),
(8, 'Eldhose', 'eldhose@gmail.com', 'El', 'dddd', '3334', 'ddd', 'VOLKS', '234', 'Feb', '112', '2223'),
(9, 'Eldhose', 'eldhose@gmail.com', 'El', 'dddd', '3334', 'ddd', 'VOLKS', '3467345736', 'Apr', '1', '20'),
(10, 'Eldhose', 'eldhose@gmail.com', 'El', 'dddd', '3334', 'ddd', 'VOLKS', '1234', 'Jan', '123', ''),
(11, 'Eldhose', 'eldhose@gmail.com', 'El', 'dddd', '33344', 'ddd', 'VOLKS', '1111', 'Apr', '111', ''),
(12, 'Eldhose', 'eldhose@gmail.com', 'El', 'dddd', '33344', 'ddd', 'VOLKS', '1', 'May', '1', '2'),
(13, 'Eldhose', 'eldhose@gmail.com', 'El', 'dddd', '33344', 'ddd', 'VOLKS', '1234555555555555', 'May', '3', '3334'),
(14, 'Eldhose', 'eldhose@gmail.com', 'El', 'dddd', '33344', 'ddd', 'VOLKS', '2222222222222222', 'Apr', '2', '2222'),
(15, 'Eldhose Babu', 'eldhosebabu197@gmail', 'Chocklayil House , Ooramana P.O , Oorama', 'Muvattupuzha', '68666', 'Kerala', 'Eldhose Babu', '1111111111111111', 'Apr', '1', ''),
(16, 'EldhoseBabu', 'eldhosebabu197@gmail', 'Chocklayil House , Ooramana P.O , Oorama', 'Muvattupuzha', '68666', 'Kerala', 'Eldhose Babu', '2222222222222222', 'May', '22', '22'),
(17, 'EldhoseBabu', 'eldhosebabu197@gmail', 'Chocklayil House , Ooramana P.O , Oorama', 'Muvattupuzha', '68666', 'Kerala', 'Eldhose Babu', '1111111111111111', 'Sep', '111', '1111'),
(18, 'EldhoseBabu', 'eldhosebabu197@gmail', 'Chocklayil House , Ooramana P.O , Oorama', 'Muvattupuzha', '68666', 'Kerala', 'Eldhose Babu', '1111111111111111', 'Sep', '111', '1111'),
(19, 'EldhoseBabu', 'eldhosebabu197@gmail', 'Chocklayil House , Ooramana P.O , Oorama', 'Muvattupuzha', '68666', 'Kerala', 'Eldhose Babu', '1111111111111111', 'May', '222', '2222'),
(20, 'EldhoseBabu', 'eldhosebabu197@gmail', 'Chocklayil House , Ooramana P.O , Oorama', 'Muvattupuzha', '68666', 'Kerala', 'Eldhose Babu', '2222222222222222', 'Oct', '222', '2024');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adminsignin`
--
ALTER TABLE `adminsignin`
  ADD CONSTRAINT `fg11` FOREIGN KEY (`Adminname`) REFERENCES `adminsignup` (`Adminname`);

--
-- Constraints for table `empsignin`
--
ALTER TABLE `empsignin`
  ADD CONSTRAINT `fg5` FOREIGN KEY (`Empusername`) REFERENCES `empsignup` (`Empusername`);

--
-- Constraints for table `servicebook`
--
ALTER TABLE `servicebook`
  ADD CONSTRAINT `fg2` FOREIGN KEY (`Username`) REFERENCES `signup` (`Username`),
  ADD CONSTRAINT `fg4` FOREIGN KEY (`Service_type_id`) REFERENCES `services` (`Service_type_id`);

--
-- Constraints for table `signin`
--
ALTER TABLE `signin`
  ADD CONSTRAINT `fg` FOREIGN KEY (`Username`) REFERENCES `signup` (`Username`);
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
