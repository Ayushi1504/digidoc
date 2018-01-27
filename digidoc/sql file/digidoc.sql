-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 10, 2017 at 03:13 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `digidoc`
--

-- --------------------------------------------------------

--
-- Table structure for table `chemist`
--

CREATE TABLE IF NOT EXISTS `chemist` (
  `cid` int(4) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(40) NOT NULL,
  `zip` int(6) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chemist`
--

INSERT INTO `chemist` (`cid`, `name`, `address`, `zip`) VALUES
(8652, 'Apollo Pharmacy', 'Beside AIIMS Delhi', 110029),
(9245, 'Medicus', 'Sector A, Dum Dum, Kolkata', 600127);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
  `did` int(4) NOT NULL,
  `dname` varchar(30) NOT NULL,
  `contact` int(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `specialisation` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  PRIMARY KEY (`did`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`did`, `dname`, `contact`, `email`, `specialisation`, `username`) VALUES
(2326, 'aditi', 2147483647, 'ayushi.2016@vitstudent.ac.iin', 'dermatologist', '12345678'),
(4444, 'Ayushi', 2147483647, 'ayushi.2016@vitstudent.ac.iin', 'gynecologist', '1234'),
(5399, 'Bhumi Patel', 2147483647, 'patelbhumi.1010@gmail.com', 'pediatrician', 'bhumi');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE IF NOT EXISTS `hospital` (
  `hid` int(4) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(40) NOT NULL,
  `zip_hos` int(6) NOT NULL,
  PRIMARY KEY (`hid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`hid`, `name`, `address`, `zip_hos`) VALUES
(1001, 'The LifeLine', 'Sector 1, Salt Lake, Kolkata', 600127),
(1002, 'AIIMS', 'AIIMS Delhi', 110029);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(16) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('1234', 'ayushisharma'),
('12345678', '12345678'),
('ayooshi', 'qwerty'),
('bhumi', 'bhumipatel'),
('muskan', 'muskangupta');

-- --------------------------------------------------------

--
-- Table structure for table `nurse`
--

CREATE TABLE IF NOT EXISTS `nurse` (
  `nid` int(4) NOT NULL,
  `name` varchar(30) NOT NULL,
  `age` int(3) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `hid` int(4) NOT NULL,
  PRIMARY KEY (`nid`),
  KEY `hid` (`hid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nurse`
--

INSERT INTO `nurse` (`nid`, `name`, `age`, `contact`, `hid`) VALUES
(5001, 'Shreya', 26, '7550170170', 1001),
(5002, 'Moana', 24, '9477702037', 1001),
(5104, 'Riya', 26, '9852465420', 1002);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `pname` varchar(30) NOT NULL,
  `pid` int(4) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `perm_address` varchar(150) NOT NULL,
  `pres_address` varchar(150) NOT NULL,
  `pres_zip` int(6) NOT NULL,
  `contact` int(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `username` varchar(20) NOT NULL,
  PRIMARY KEY (`pid`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`pname`, `pid`, `age`, `gender`, `perm_address`, `pres_address`, `pres_zip`, `contact`, `email`, `username`) VALUES
('muskan gupta', 1456, 19, 'f', ' kolkata', ' chennai', 600127, 2147483647, 'muskan@gmail.com', 'muskan'),
('ayushi', 7823, 20, 'f', ' kolkata', 'chennai', 600127, 2147483647, 'ayu@gmail.com', 'ayooshi');

-- --------------------------------------------------------

--
-- Table structure for table `pat_his`
--

CREATE TABLE IF NOT EXISTS `pat_his` (
  `pid` int(4) NOT NULL,
  `illness` varchar(30) NOT NULL,
  `remarks` varchar(30) DEFAULT NULL,
  `med_nm` varchar(30) NOT NULL,
  `med_start` date NOT NULL,
  `med_end` date DEFAULT NULL,
  PRIMARY KEY (`pid`,`med_nm`,`med_start`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pat_his`
--

INSERT INTO `pat_his` (`pid`, `illness`, `remarks`, `med_nm`, `med_start`, `med_end`) VALUES
(1456, 'diabetes ', 'type 2', 'insulin', '2016-03-15', '2016-11-24');

-- --------------------------------------------------------

--
-- Table structure for table `pat_query`
--

CREATE TABLE IF NOT EXISTS `pat_query` (
  `pid` int(4) NOT NULL,
  `did` int(4) DEFAULT NULL,
  `query` varchar(150) NOT NULL,
  `specialisation` varchar(100) NOT NULL,
  `remarks` varchar(100) DEFAULT NULL,
  `medicines` varchar(30) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`pid`,`query`,`time`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pat_query`
--

INSERT INTO `pat_query` (`pid`, `did`, `query`, `specialisation`, `remarks`, `medicines`, `time`) VALUES
(1456, 4444, 'Irregular menstrual cycle', 'gynecologist', 'Regular exercise and Take iron tablets daily ', 'Autrin', '2017-11-06 21:57:09'),
(1456, 2326, 'Skin rashes', 'dermatologist', 'Apply medicine twice daily', 'Soframycin', '2017-11-06 00:52:07');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `doctor`
--
ALTER TABLE `doctor`
  ADD CONSTRAINT `docusernmfk` FOREIGN KEY (`username`) REFERENCES `login` (`username`);

--
-- Constraints for table `nurse`
--
ALTER TABLE `nurse`
  ADD CONSTRAINT `nurse_ibfk_1` FOREIGN KEY (`hid`) REFERENCES `hospital` (`hid`);

--
-- Constraints for table `patient`
--
ALTER TABLE `patient`
  ADD CONSTRAINT `patusernmfk` FOREIGN KEY (`username`) REFERENCES `login` (`username`);

--
-- Constraints for table `pat_his`
--
ALTER TABLE `pat_his`
  ADD CONSTRAINT `pid_fk` FOREIGN KEY (`pid`) REFERENCES `patient` (`pid`);
