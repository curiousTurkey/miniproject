-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 06, 2022 at 08:48 AM
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
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `updationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'admin', '5c428d8875d2948607f3e3fe134d71b4', '2017-06-18 12:22:38');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

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
(38, 'Regular Service', 'Pressure Valve', 'Parking sensor', NULL, 5000, 500, 2500, NULL, '2021-12-27', 'eldhose', 2, 1, 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `comp`
--

INSERT INTO `comp` (`F_id`, `F_name`, `L_name`, `Email`, `Subject`, `Message`, `status`) VALUES
(1, 'AROMAL', 'ASHOK', 'eldhose@gmail.com', 'Staff Not Friendly', 'Staff was not friendly while discussing an insurance related service. I hope i will get better customer friendly staff next time. ', 1),
(2, 'Ashir', 'Muhammad', 'ashir34@gmail.com', 'Issues not fixed properly', 'My service has not done correctly. I asked for a replacement and the mechanic just installed a 2nd hand item , not good.', 0),
(3, 'Eldhose ', 'Babu', 'eldhose@gmail.com', 'Excellent service', 'Every issues of my car is fixed. Now I can drive without any problems.', 0),
(4, 'Nikhil', 'Tenny', 'nikhil@gmail.com', 'Good service', 'Service was good, staff was friendly. An okay experience.', 0);

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
('eldhose556', '12345678', 'Emp'),
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
('EldhoseBabu', 'eldhose556', 'eldhosebabu197@gmail.com', '9995268041'),
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=69 ;

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
(68, 'eldhose', 'Golf GTI', 'TTTTTGGGB', '2021-12-27', 101, 'Completed', 1);

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
('eldhose55', '123456', 'User');

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
('Eldhose Babu', 'eldhosebabu197@gmail.com', 'eldhose55', '9995268040');

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
(737, 685, 570);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `stockpayment`
--

INSERT INTO `stockpayment` (`Transaction_ID`, `F_name`, `Email`, `Address`, `City`, `Zip`, `State`, `Cardname`, `Cardno`, `Expmonth`, `Cvv`, `Expyear`) VALUES
(1, 'EldhoseBabu el', 'eldhosebabu197@gmail', 'Chocklayil House ', 'Muvattupuzha', '68666', 'Kerala', 'eldhose', '1234123412341234', 'June', '613', '2023'),
(2, 'EldhoseBabu', 'eldhosebabu197@gmail', 'Chocklayil House , Ooramana P.O , Oorama', 'Muvattupuzha', '68666', 'Kerala', 'eldhose', '1245877965844333', 'June', '613', '2023'),
(3, 'ELDHOSE BABU', 'eldhosebabu197@gmail', 'OORAMANA, OORAMANA', 'Ernakulam', '68666', 'Kerala', 'Eldhose', '1111222233334444', 'JUNE', '613', '2023');

-- --------------------------------------------------------

--
-- Table structure for table `tblbooking`
--

CREATE TABLE IF NOT EXISTS `tblbooking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `BookingNumber` bigint(12) DEFAULT NULL,
  `userEmail` varchar(100) DEFAULT NULL,
  `VehicleId` int(11) DEFAULT NULL,
  `FromDate` varchar(20) DEFAULT NULL,
  `ToDate` varchar(20) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `Status` int(11) DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `LastUpdationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tblbooking`
--

INSERT INTO `tblbooking` (`id`, `BookingNumber`, `userEmail`, `VehicleId`, `FromDate`, `ToDate`, `message`, `Status`, `PostingDate`, `LastUpdationDate`) VALUES
(1, 123456789, 'test@gmail.com', 1, '2020-07-07', '2020-07-09', 'What  is the cost?', 1, '2020-07-07 14:03:09', NULL),
(2, 987456321, 'test@gmail.com', 4, '2020-07-19', '2020-07-24', 'hfghg', 1, '2020-07-09 17:49:21', '2020-07-11 12:20:57');

-- --------------------------------------------------------

--
-- Table structure for table `tblbrands`
--

CREATE TABLE IF NOT EXISTS `tblbrands` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `BrandName` varchar(120) NOT NULL,
  `CreationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tblbrands`
--

INSERT INTO `tblbrands` (`id`, `BrandName`, `CreationDate`, `UpdationDate`) VALUES
(1, 'Maruti', '2017-06-18 16:24:34', '2017-06-19 06:42:23'),
(2, 'BMW', '2017-06-18 16:24:50', NULL),
(3, 'Audi', '2017-06-18 16:25:03', NULL),
(4, 'Nissan', '2017-06-18 16:25:13', NULL),
(5, 'Toyota', '2017-06-18 16:25:24', NULL),
(7, 'Volkswagon', '2017-06-19 06:22:13', '2020-07-07 14:14:09');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontactusinfo`
--

CREATE TABLE IF NOT EXISTS `tblcontactusinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Address` tinytext,
  `EmailId` varchar(255) DEFAULT NULL,
  `ContactNo` char(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tblcontactusinfo`
--

INSERT INTO `tblcontactusinfo` (`id`, `Address`, `EmailId`, `ContactNo`) VALUES
(1, 'J&K Block, Laxmi Nagar', 'info@gmail.com', '8974561236');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontactusquery`
--

CREATE TABLE IF NOT EXISTS `tblcontactusquery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `EmailId` varchar(120) DEFAULT NULL,
  `ContactNumber` char(11) DEFAULT NULL,
  `Message` longtext,
  `PostingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tblcontactusquery`
--

INSERT INTO `tblcontactusquery` (`id`, `name`, `EmailId`, `ContactNumber`, `Message`, `PostingDate`, `status`) VALUES
(1, 'Kunal ', 'kunal@gmail.com', '7977779798', 'I want to know you brach in Chandigarh?', '2020-07-07 09:34:51', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblpages`
--

CREATE TABLE IF NOT EXISTS `tblpages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `PageName` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL DEFAULT '',
  `detail` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `tblpages`
--

INSERT INTO `tblpages` (`id`, `PageName`, `type`, `detail`) VALUES
(1, 'Terms and Conditions', 'terms', '<P align=justify><FONT size=2><STRONG><FONT color=#990000>(1) ACCEPTANCE OF TERMS</FONT><BR><BR></STRONG>Welcome to Yahoo! India. 1Yahoo Web Services India Private Limited Yahoo", "we" or "us" as the case may be) provides the Service (defined below) to you, subject to the following Terms of Service ("TOS"), which may be updated by us from time to time without notice to you. You can review the most current version of the TOS at any time at: <A href="http://in.docs.yahoo.com/info/terms/">http://in.docs.yahoo.com/info/terms/</A>. In addition, when using particular Yahoo services or third party services, you and Yahoo shall be subject to any posted guidelines or rules applicable to such services which may be posted from time to time. All such guidelines or rules, which maybe subject to change, are hereby incorporated by reference into the TOS. In most cases the guides and rules are specific to a particular part of the Service and will assist you in applying the TOS to that part, but to the extent of any inconsistency between the TOS and any guide or rule, the TOS will prevail. We may also offer other services from time to time that are governed by different Terms of Services, in which case the TOS do not apply to such other services if and to the extent expressly excluded by such different Terms of Services. Yahoo also may offer other services from time to time that are governed by different Terms of Services. These TOS do not apply to such other services that are governed by different Terms of Service. </FONT></P>\r\n<P align=justify><FONT size=2>Welcome to Yahoo! India. Yahoo Web Services India Private Limited Yahoo", "we" or "us" as the case may be) provides the Service (defined below) to you, subject to the following Terms of Service ("TOS"), which may be updated by us from time to time without notice to you. You can review the most current version of the TOS at any time at: </FONT><A href="http://in.docs.yahoo.com/info/terms/"><FONT size=2>http://in.docs.yahoo.com/info/terms/</FONT></A><FONT size=2>. In addition, when using particular Yahoo services or third party services, you and Yahoo shall be subject to any posted guidelines or rules applicable to such services which may be posted from time to time. All such guidelines or rules, which maybe subject to change, are hereby incorporated by reference into the TOS. In most cases the guides and rules are specific to a particular part of the Service and will assist you in applying the TOS to that part, but to the extent of any inconsistency between the TOS and any guide or rule, the TOS will prevail. We may also offer other services from time to time that are governed by different Terms of Services, in which case the TOS do not apply to such other services if and to the extent expressly excluded by such different Terms of Services. Yahoo also may offer other services from time to time that are governed by different Terms of Services. These TOS do not apply to such other services that are governed by different Terms of Service. </FONT></P>\r\n<P align=justify><FONT size=2>Welcome to Yahoo! India. Yahoo Web Services India Private Limited Yahoo", "we" or "us" as the case may be) provides the Service (defined below) to you, subject to the following Terms of Service ("TOS"), which may be updated by us from time to time without notice to you. You can review the most current version of the TOS at any time at: </FONT><A href="http://in.docs.yahoo.com/info/terms/"><FONT size=2>http://in.docs.yahoo.com/info/terms/</FONT></A><FONT size=2>. In addition, when using particular Yahoo services or third party services, you and Yahoo shall be subject to any posted guidelines or rules applicable to such services which may be posted from time to time. All such guidelines or rules, which maybe subject to change, are hereby incorporated by reference into the TOS. In most cases the guides and rules are specific to a particular part of the Service and will assist you in applying the TOS to that part, but to the extent of any inconsistency between the TOS and any guide or rule, the TOS will prevail. We may also offer other services from time to time that are governed by different Terms of Services, in which case the TOS do not apply to such other services if and to the extent expressly excluded by such different Terms of Services. Yahoo also may offer other services from time to time that are governed by different Terms of Services. These TOS do not apply to such other services that are governed by different Terms of Service. </FONT></P>'),
(2, 'Privacy Policy', 'privacy', '<span style="color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat</span>'),
(3, 'About Us ', 'aboutus', '<span style="color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13.3333px;">We offer a varied fleet of cars, ranging from the compact. All our vehicles have air conditioning, &nbsp;power steering, electric windows. All our vehicles are bought and maintained at official dealerships only. Automatic transmission cars are available in every booking class.&nbsp;</span><span style="color: rgb(52, 52, 52); font-family: Arial, Helvetica, sans-serif;">As we are not affiliated with any specific automaker, we are able to provide a variety of vehicle makes and models for customers to rent.</span><div><span style="color: rgb(62, 62, 62); font-family: &quot;Lucida Sans Unicode&quot;, &quot;Lucida Grande&quot;, sans-serif; font-size: 11px;">ur mission is to be recognised as the global leader in Car Rental for companies and the public and private sector by partnering with our clients to provide the best and most efficient Cab Rental solutions and to achieve service excellence.</span><span style="color: rgb(52, 52, 52); font-family: Arial, Helvetica, sans-serif;"><br></span></div>'),
(11, 'FAQs', 'faqs', '																														<span style="color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;">Address------Test &nbsp; &nbsp;dsfdsfds</span>');

-- --------------------------------------------------------

--
-- Table structure for table `tblsubscribers`
--

CREATE TABLE IF NOT EXISTS `tblsubscribers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `SubscriberEmail` varchar(120) DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tblsubscribers`
--

INSERT INTO `tblsubscribers` (`id`, `SubscriberEmail`, `PostingDate`) VALUES
(4, 'harish@gmail.com', '2020-07-07 09:26:21'),
(5, 'kunal@gmail.com', '2020-07-07 09:35:07');

-- --------------------------------------------------------

--
-- Table structure for table `tbltestimonial`
--

CREATE TABLE IF NOT EXISTS `tbltestimonial` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `UserEmail` varchar(100) NOT NULL,
  `Testimonial` mediumtext NOT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbltestimonial`
--

INSERT INTO `tbltestimonial` (`id`, `UserEmail`, `Testimonial`, `PostingDate`, `status`) VALUES
(1, 'test@gmail.com', 'I am satisfied with their service great job', '2020-07-07 14:30:12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE IF NOT EXISTS `tblusers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `FullName` varchar(120) DEFAULT NULL,
  `EmailId` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `ContactNo` char(11) DEFAULT NULL,
  `dob` varchar(100) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `City` varchar(100) DEFAULT NULL,
  `Country` varchar(100) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `EmailId` (`EmailId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `FullName`, `EmailId`, `Password`, `ContactNo`, `dob`, `Address`, `City`, `Country`, `RegDate`, `UpdationDate`) VALUES
(1, 'Test', 'test@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '6465465465', '', 'L-890, Gaur City Ghaziabad', 'Ghaziabad', 'India', '2020-07-07 14:00:49', '2020-07-12 05:44:29');

-- --------------------------------------------------------

--
-- Table structure for table `tblvehicles`
--

CREATE TABLE IF NOT EXISTS `tblvehicles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `VehiclesTitle` varchar(150) DEFAULT NULL,
  `VehiclesBrand` int(11) DEFAULT NULL,
  `VehiclesOverview` longtext,
  `PricePerDay` int(11) DEFAULT NULL,
  `FuelType` varchar(100) DEFAULT NULL,
  `ModelYear` int(6) DEFAULT NULL,
  `SeatingCapacity` int(11) DEFAULT NULL,
  `Vimage1` varchar(120) DEFAULT NULL,
  `Vimage2` varchar(120) DEFAULT NULL,
  `Vimage3` varchar(120) DEFAULT NULL,
  `Vimage4` varchar(120) DEFAULT NULL,
  `Vimage5` varchar(120) DEFAULT NULL,
  `AirConditioner` int(11) DEFAULT NULL,
  `PowerDoorLocks` int(11) DEFAULT NULL,
  `AntiLockBrakingSystem` int(11) DEFAULT NULL,
  `BrakeAssist` int(11) DEFAULT NULL,
  `PowerSteering` int(11) DEFAULT NULL,
  `DriverAirbag` int(11) DEFAULT NULL,
  `PassengerAirbag` int(11) DEFAULT NULL,
  `PowerWindows` int(11) DEFAULT NULL,
  `CDPlayer` int(11) DEFAULT NULL,
  `CentralLocking` int(11) DEFAULT NULL,
  `CrashSensor` int(11) DEFAULT NULL,
  `LeatherSeats` int(11) DEFAULT NULL,
  `RegDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tblvehicles`
--

INSERT INTO `tblvehicles` (`id`, `VehiclesTitle`, `VehiclesBrand`, `VehiclesOverview`, `PricePerDay`, `FuelType`, `ModelYear`, `SeatingCapacity`, `Vimage1`, `Vimage2`, `Vimage3`, `Vimage4`, `Vimage5`, `AirConditioner`, `PowerDoorLocks`, `AntiLockBrakingSystem`, `BrakeAssist`, `PowerSteering`, `DriverAirbag`, `PassengerAirbag`, `PowerWindows`, `CDPlayer`, `CentralLocking`, `CrashSensor`, `LeatherSeats`, `RegDate`, `UpdationDate`) VALUES
(1, 'Maruti Suzuki Wagon R', 1, 'Maruti Wagon R Latest Updates\r\n\r\nMaruti Suzuki has launched the BS6 Wagon R S-CNG in India. The LXI CNG and LXI (O) CNG variants now cost Rs 5.25 lakh and Rs 5.32 lakh respectively, up by Rs 19,000. Maruti claims a fuel economy of 32.52km per kg. The CNG Wagon R’s continuation in the BS6 era is part of the carmaker’s ‘Mission Green Million’ initiative announced at Auto Expo 2020.\r\n\r\nPreviously, the carmaker had updated the 1.0-litre powertrain to meet BS6 emission norms. It develops 68PS of power and 90Nm of torque, same as the BS4 unit. However, the updated motor now returns 21.79 kmpl, which is a little less than the BS4 unit’s 22.5kmpl claimed figure. Barring the CNG variants, the prices of the Wagon R 1.0-litre have been hiked by Rs 8,000.', 500, 'Petrol', 2019, 5, 'rear-3-4-left-589823254_930x620.jpg', 'tail-lamp-1666712219_930x620.jpg', 'rear-3-4-right-520328200_930x620.jpg', 'steering-close-up-1288209207_930x620.jpg', 'boot-with-standard-luggage-202327489_930x620.jpg', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2020-07-07 07:04:35', '2020-07-07 07:27:08'),
(2, 'BMW 5 Series', 2, 'BMW 5 Series price starts at ? 55.4 Lakh and goes upto ? 68.39 Lakh. The price of Petrol version for 5 Series ranges between ? 55.4 Lakh - ? 60.89 Lakh and the price of Diesel version for 5 Series ranges between ? 60.89 Lakh - ? 68.39 Lakh.', 1000, 'Petrol', 2018, 5, 'BMW-5-Series-Exterior-102005.jpg', 'BMW-5-Series-New-Exterior-89729.jpg', 'BMW-5-Series-Exterior-102006.jpg', 'BMW-5-Series-Interior-102021.jpg', 'BMW-5-Series-Interior-102022.jpg', 1, 1, 1, 1, 1, 1, 1, 1, NULL, 1, 1, 1, '2020-07-07 07:12:02', '2020-07-07 07:27:44'),
(3, 'Audi Q8', 3, 'As per ARAI, the mileage of Q8 is 0 kmpl. Real mileage of the vehicle varies depending upon the driving habits. City and highway mileage figures also vary depending upon the road conditions.', 3000, 'Petrol', 2017, 5, 'audi-q8-front-view4.jpg', '1920x1080_MTC_XL_framed_Audi-Odessa-Armaturen_Spiegelung_CC_v05.jpg', 'audi1.jpg', '1audiq8.jpg', 'audi-q8-front-view4.jpeg', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2020-07-07 07:19:21', '2020-07-07 07:28:02'),
(4, 'Nissan Kicks', 4, 'Latest Update: Nissan has launched the Kicks 2020 with a new turbocharged petrol engine. You can read more about it here.\r\n\r\nNissan Kicks Price and Variants: The Kicks is available in four variants: XL, XV, XV Premium, and XV Premium(O).', 800, 'Petrol', 2020, 5, 'front-left-side-47.jpg', 'kicksmodelimage.jpg', 'download.jpg', 'kicksmodelimage.jpg', '', 1, NULL, NULL, 1, NULL, NULL, 1, 1, NULL, NULL, NULL, 1, '2020-07-07 07:25:28', NULL),
(5, 'Nissan GT-R', 4, ' The GT-R packs a 3.8-litre V6 twin-turbocharged petrol, which puts out 570PS of max power at 6800rpm and 637Nm of peak torque. The engine is mated to a 6-speed dual-clutch transmission in an all-wheel-drive setup. The 2+2 seater GT-R sprints from 0-100kmph in less than 3', 2000, 'Petrol', 2019, 5, 'Nissan-GTR-Right-Front-Three-Quarter-84895.jpg', 'Best-Nissan-Cars-in-India-New-and-Used-1.jpg', '2bb3bc938e734f462e45ed83be05165d.jpg', '2020-nissan-gtr-rakuda-tan-semi-aniline-leather-interior.jpg', 'images.jpg', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2020-07-07 07:34:17', NULL),
(6, 'Nissan Sunny 2020', 4, 'Value for money product and it was so good It is more spacious than other sedans It looks like a luxurious car.', 400, 'CNG', 2018, 5, 'Nissan-Sunny-Right-Front-Three-Quarter-48975_ol.jpg', 'images (1).jpg', 'Nissan-Sunny-Interior-114977.jpg', 'nissan-sunny-8a29f53-500x375.jpg', 'new-nissan-sunny-photo.jpg', 1, 1, NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2020-07-07 09:12:49', NULL),
(7, 'Toyota Fortuner', 5, 'Toyota Fortuner Features: It is a premium seven-seater SUV loaded with features such as LED projector headlamps with LED DRLs, LED fog lamp, and power-adjustable and foldable ORVMs. Inside, the Fortuner offers features such as power-adjustable driver seat, automatic climate control, push-button stop/start, and cruise control.\r\n\r\nToyota Fortuner Safety Features: The Toyota Fortuner gets seven airbags, hill assist control, vehicle stability control with brake assist, and ABS with EBD.', 3000, 'Petrol', 2020, 5, '2015_Toyota_Fortuner_(New_Zealand).jpg', 'toyota-fortuner-legender-rear-quarters-6e57.jpg', 'zw-toyota-fortuner-2020-2.jpg', 'download (1).jpg', '', NULL, NULL, NULL, NULL, NULL, 1, NULL, 1, NULL, 1, 1, 1, '2020-07-07 09:17:46', NULL),
(8, 'Maruti Suzuki Vitara Brezza', 1, 'The new Vitara Brezza is a well-rounded package that is feature-loaded and offers good drivability. And it is backed by Maruti’s vast service network, which ensures a peace of mind to customers. The petrol motor could have been more refined and offered more pep.', 600, 'Petrol', 2018, 5, 'marutisuzuki-vitara-brezza-right-front-three-quarter3.jpg', 'marutisuzuki-vitara-brezza-rear-view37.jpg', 'marutisuzuki-vitara-brezza-dashboard10.jpg', 'marutisuzuki-vitara-brezza-boot-space59.jpg', 'marutisuzuki-vitara-brezza-boot-space28.jpg', NULL, 1, 1, 1, NULL, NULL, 1, NULL, NULL, NULL, 1, NULL, '2020-07-07 09:23:11', NULL);

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
