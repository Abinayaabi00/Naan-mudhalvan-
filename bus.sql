-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 28, 2022 at 10:28 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bus`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `uname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`uname`, `password`) VALUES
('admin', 'admin'),
('bhuvanesh', 'bishophebercollege');

-- --------------------------------------------------------

--
-- Table structure for table `admin1`
--

CREATE TABLE `admin1` (
  `name` varchar(50) NOT NULL,
  `psw` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin1`
--

INSERT INTO `admin1` (`name`, `psw`) VALUES
('admin', '111');

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `bno` varchar(50) NOT NULL,
  `spoint` varchar(50) NOT NULL,
  `epoint` varchar(50) NOT NULL,
  `stp` varchar(500) NOT NULL,
  `time` varchar(50) NOT NULL,
  `fees` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`id`, `name`, `bno`, `spoint`, `epoint`, `stp`, `time`, `fees`) VALUES
(1, 'rpm', '123', 'trichy', 'chennai ', 'perambalur,vilupuram,chengalpattu', '4:00pm', ''),
(2, 'sundara', '124', 'trichy', 'madurai', 'viralimalai', '3:00pm', ''),
(3, 'KSR', 'TN41S1212', 'trichy', 'Erode', 'Trichy, Musiri, Nammakkal, thiruchengode', '09:00 AM', ''),
(4, 'SRS', 'TN41S1213', 'Trichy', 'Chennai', 'Trichy,Perambalur,Dindivanam,thambaram,chennai', '09:00 PM - 04:00 AM', ''),
(5, 'Raja', 'TN41S1213', 'Edaiyathi', 'karambakudi', 'Edaiyathi,neively,karambakudi', '08:30AM', '');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(20) NOT NULL,
  `regno` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `degree` varchar(50) NOT NULL,
  `depart` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `pnumber` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `regno`, `name`, `gender`, `dob`, `degree`, `depart`, `address`, `pnumber`, `email`, `uname`, `password`) VALUES
(2, 'reg002', 'pandiyan', 'male', '2018-03-14', 'kll', 'MCA', 'tyrichy', '9976388888', 'sundarv06@gmail.com', 'admin', '123'),
(3, '81200000', 'pandiyan', 'female', '2018-03-13', 'MCA', 'MCA', 'trichy', '9976388888', 'fantazysolution@gmail.com', 'sundar', '123'),
(4, '', 'anu', 'female', '', '', '', 'trichy', '8796541254', 'anuprathi@gmail.com', 'anu', '12345'),
(5, '', 'vijay', 'male', '', '', '', 'trichy', '9585463084', 'vijaybala231994@gmail.com', 'vijay', '12345'),
(6, '', 'admin', 'male', '', '', '', 'dffdh', '99799999', 'test@gmail.com', 'admin', '111'),
(7, '', 'vino', 'male', '', '', '', 'trichy', '99799999', 'test@gmail.com', 'vino', '1111'),
(8, '', 'sam', 'male', '', '', '', 'trichy', '8908908900', 'sam@mail.com', 'sam', '123');
