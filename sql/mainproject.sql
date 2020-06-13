-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2020 at 09:11 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mainproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `alogin`
--

CREATE TABLE `alogin` (
  `id` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `firstname` varchar(150) NOT NULL,
  `lastname` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alogin`
--

INSERT INTO `alogin` (`id`, `username`, `password`, `firstname`, `lastname`) VALUES
(1, 'admin', 'admin', 'admin', 'admin'),
(3, 'ninad', 'parkar', 'Ninad', 'Parkar');

-- --------------------------------------------------------

--
-- Table structure for table `hallticketsub`
--

CREATE TABLE `hallticketsub` (
  `id` int(8) NOT NULL,
  `sem` int(8) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `s1` varchar(100) NOT NULL,
  `s1date` varchar(50) NOT NULL,
  `s1time` varchar(50) NOT NULL,
  `s2` varchar(100) NOT NULL,
  `s2date` varchar(50) NOT NULL,
  `s2time` varchar(50) NOT NULL,
  `s3` varchar(100) NOT NULL,
  `s3date` varchar(50) NOT NULL,
  `s3time` varchar(50) NOT NULL,
  `s4` varchar(100) NOT NULL,
  `s4date` varchar(50) NOT NULL,
  `s4time` varchar(50) NOT NULL,
  `s5` varchar(100) NOT NULL,
  `s5date` varchar(50) NOT NULL,
  `s5time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hallticketsub`
--

INSERT INTO `hallticketsub` (`id`, `sem`, `branch`, `s1`, `s1date`, `s1time`, `s2`, `s2date`, `s2time`, `s3`, `s3date`, `s3time`, `s4`, `s4date`, `s4time`, `s5`, `s5date`, `s5time`) VALUES
(1, 3, 'COMP', 'Applied Mathematics -III ', '15-05-2020', '3:00pm', 'Digital Logic Design and Analysis', '16-05-2020', '3:00pm', 'Discrete Mathematics ', '17-05-2020', '3:00pm', ' Electronic Circuits and  Communication Fundamentals', '18-05-2020', '3:00pm', ' Data Structures', '19-05-2020', '3:00pm'),
(2, 4, 'COMP', 'Applied Mathematics- IV', '15-05-2020', '3:00pm', 'Analysis of Algorithms', '16-05-2020', '3:00pm', 'Computer Organization and Architecture', '17-05-2020', '3:00pm', 'Computer Graphics ', '18-05-2020', '3:00pm', 'Operating System ', '19-05-2020', '3:00pm'),
(3, 5, 'COMP', 'Microprocessor', '15-05-2020', '3:00pm', 'Database Management System', '16-05-2020', '3:00pm', 'Computer Network ', '17-05-2020', '3:00pm', 'Theory of Computer Science ', '18-05-2020', '3:00pm', 'Department Level Optional Course -I', '19-05-2020', '3:00pm'),
(4, 6, 'COMP', 'Software Engineering', '15-05-2020', '3:00pm', 'System Programming &  Complier Construction ', '16-05-2020', '3:00pm', 'Data Warehousing &  Mining ', '17-05-2020', '3:00pm', 'Cryptography & System Security', '18-05-2020', '3:00pm', 'Department Level Optional Course -II ', '19-05-2020', '3:00pm'),
(5, 3, 'MECH', 'Applied Mathematics III', '15-05-2020', '3:00pm', 'Thermodynamics', '16-05-2020', '3:00pm', 'Strength of Materials', '17-05-2020', '3:00pm', 'Production Process I', '18-05-2020', '3:00pm', 'Material Technology', '19-05-2020', '3:00pm'),
(6, 4, 'MECH', 'Applied Mathematics IV', '15-05-2020', '3:00pm', 'Fluid Mechanics', '16-05-2020', '3:00pm', 'Industrial Electronics', '17-05-2020', '3:00pm', 'Production Process II', '18-05-2020', '3:00pm', 'Kinematics of Machinery', '19-05-2020', '3:00pm'),
(7, 5, 'MECH', 'Internal Combustion Engines', '15-05-2020', '3:00pm', 'Mechanical Measurements and Control', '16-05-2020', '3:00pm', 'Heat Transfer', '17-05-2020', '3:00pm', 'Dynamics of Machinery', '18-05-2020', '3:00pm', 'Department Level Optional Course I ', '19-05-2020', '3:00pm'),
(8, 6, 'MECH', 'Metrology and Quality engineering', '15-05-2020', '3:00pm', 'Machine Design I ', '16-05-2020', '3:00pm', 'Finite Element analysis ', '17-05-2020', '3:00pm', 'Refrigeration and Air Conditioning', '18-05-2020', '3:00pm', 'Department Level Optional Course II ', '19-05-2020', '3:00pm'),
(9, 3, 'CIVIL', 'Applied Mathematics III', '15-05-2020', '3:00pm', 'Surveying I', '16-05-2020', '3:00pm', 'Strength of Materials ', '17-05-2020', '3:00pm', 'Engineering Geology ', '18-05-2020', '3:00pm', 'Fluid Mechanics  I', '19-05-2020', '3:00pm'),
(10, 4, 'CIVIL', 'Applied Mathematics IV', '15-05-2020', '3:00pm', 'SurveyingII ', '16-05-2020', '3:00pm', 'Structural AnalysisI', '17-05-2020', '3:00pm', 'Building Materials & Construction Technology', '18-05-2020', '3:00pm', 'Fluid MechanicsII', '19-05-2020', '3:00pm'),
(11, 5, 'CIVIL', 'Structural Analysis – II ', '15-05-2020', '3:00pm', 'Geotechnical Engg.– I ', '16-05-2020', '3:00pm', 'Applied Hydraulics ', '17-05-2020', '3:00pm', 'Environmental Engineering I', '18-05-2020', '3:00pm', 'Transportation Engineering – I ', '19-05-2020', '3:00pm'),
(12, 6, 'CIVIL', 'Geotechnical Engg. – II ', '15-05-2020', '3:00pm', 'Design and Drawing of Steel Structures', '16-05-2020', '3:00pm', 'Transportation Engg. – II ', '17-05-2020', '3:00pm', 'Environmental Engg – II', '18-05-2020', '3:00pm', 'Water Resource Engineering  I', '19-05-2020', '3:00pm'),
(13, 3, 'EXTC', 'Applied Mathematics-III ', '15-05-2020', '3:00pm', 'Electronic Devices and Circuits I ', '16-05-2020', '3:00pm', 'Digital System Design ', '17-05-2020', '3:00pm', 'Circuit Theory and Networks', '18-05-2020', '3:00pm', 'Electronic Instrumentation and Control ', '19-05-2020', '3:00pm'),
(14, 4, 'EXTC', 'Applied Mathematics- IV ', '15-05-2020', '3:00pm', 'Electronic Devices and Circuits II', '16-05-2020', '3:00pm', 'Linear Integrated Circuits ', '17-05-2020', '3:00pm', 'Signals & Systems ', '18-05-2020', '3:00pm', 'Principles of Communication Engineering ', '19-05-2020', '3:00pm'),
(15, 5, 'EXTC', 'Microprocessor & Peripherals Interfacing ', '15-05-2020', '3:00pm', 'Digital Communication ', '16-05-2020', '3:00pm', 'Electromagnetic Engineering', '17-05-2020', '3:00pm', 'Discrete Time Signal Processing ', '18-05-2020', '3:00pm', 'Department Level Optional Course I ', '19-05-2020', '3:00pm'),
(16, 6, 'EXTC', 'Microcontrollers & Applications ', '15-05-2020', '3:00pm', 'Computer Communication Networks ', '16-05-2020', '3:00pm', 'Antenna & Radio Wave Propagation', '17-05-2020', '3:00pm', 'Image Processing and Machine Vision ', '18-05-2020', '3:00pm', 'Department Level Optional Course II ', '19-05-2020', '3:00pm');

-- --------------------------------------------------------

--
-- Table structure for table `ktexdetails`
--

CREATE TABLE `ktexdetails` (
  `id` int(8) NOT NULL,
  `hall_ticket` text NOT NULL,
  `user_photo` text NOT NULL,
  `transaction_ss` text NOT NULL,
  `fname` text NOT NULL,
  `mname` text NOT NULL,
  `sname` text NOT NULL,
  `gender` text NOT NULL,
  `year` text NOT NULL,
  `Sem` text NOT NULL,
  `ktorr` text NOT NULL,
  `fs` text NOT NULL,
  `branch` text NOT NULL,
  `dob` date NOT NULL,
  `contact` text NOT NULL,
  `address` text NOT NULL,
  `transaction_id` text NOT NULL,
  `s1` text NOT NULL,
  `s1th` text NOT NULL,
  `s1ut` text NOT NULL,
  `s1tw` text NOT NULL,
  `s1op` text NOT NULL,
  `s2` text NOT NULL,
  `s2th` text NOT NULL,
  `s2ut` text NOT NULL,
  `s2tw` text NOT NULL,
  `s2op` text NOT NULL,
  `s3` text NOT NULL,
  `s3th` text NOT NULL,
  `s3ut` text NOT NULL,
  `s3tw` text NOT NULL,
  `s3op` text NOT NULL,
  `s4` text NOT NULL,
  `s4th` text NOT NULL,
  `s4ut` text NOT NULL,
  `s4tw` text NOT NULL,
  `s4op` text NOT NULL,
  `s5` text NOT NULL,
  `s5th` text NOT NULL,
  `s5ut` text NOT NULL,
  `s5tw` text NOT NULL,
  `s5op` text NOT NULL,
  `s6` text NOT NULL,
  `s6th` text NOT NULL,
  `s6ut` text NOT NULL,
  `s6tw` text NOT NULL,
  `s6op` text NOT NULL,
  `s7` text NOT NULL,
  `s7th` text NOT NULL,
  `s7ut` text NOT NULL,
  `s7tw` text NOT NULL,
  `s7op` text NOT NULL,
  `s8` text NOT NULL,
  `s8th` text NOT NULL,
  `s8ut` text NOT NULL,
  `s8tw` text NOT NULL,
  `s8op` text NOT NULL,
  `s9` text NOT NULL,
  `s9th` text NOT NULL,
  `s9ut` text NOT NULL,
  `s9tw` text NOT NULL,
  `s9op` text NOT NULL,
  `s10` text NOT NULL,
  `s10th` text NOT NULL,
  `s10ut` text NOT NULL,
  `s10tw` text NOT NULL,
  `s10op` text NOT NULL,
  `s11` text NOT NULL,
  `s11th` text NOT NULL,
  `s11ut` text NOT NULL,
  `s11tw` text NOT NULL,
  `s11op` text NOT NULL,
  `es1` text NOT NULL,
  `is1` text NOT NULL,
  `es2` text NOT NULL,
  `is2` text NOT NULL,
  `es3` text NOT NULL,
  `is3` text NOT NULL,
  `es4` text NOT NULL,
  `is4` text NOT NULL,
  `es5` text NOT NULL,
  `is5` text NOT NULL,
  `sem1` text NOT NULL,
  `sem2` text NOT NULL,
  `sem3` text NOT NULL,
  `sem4` text NOT NULL,
  `sem5` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ktexdetails`
--

INSERT INTO `ktexdetails` (`id`, `hall_ticket`, `user_photo`, `transaction_ss`, `fname`, `mname`, `sname`, `gender`, `year`, `Sem`, `ktorr`, `fs`, `branch`, `dob`, `contact`, `address`, `transaction_id`, `s1`, `s1th`, `s1ut`, `s1tw`, `s1op`, `s2`, `s2th`, `s2ut`, `s2tw`, `s2op`, `s3`, `s3th`, `s3ut`, `s3tw`, `s3op`, `s4`, `s4th`, `s4ut`, `s4tw`, `s4op`, `s5`, `s5th`, `s5ut`, `s5tw`, `s5op`, `s6`, `s6th`, `s6ut`, `s6tw`, `s6op`, `s7`, `s7th`, `s7ut`, `s7tw`, `s7op`, `s8`, `s8th`, `s8ut`, `s8tw`, `s8op`, `s9`, `s9th`, `s9ut`, `s9tw`, `s9op`, `s10`, `s10th`, `s10ut`, `s10tw`, `s10op`, `s11`, `s11th`, `s11ut`, `s11tw`, `s11op`, `es1`, `is1`, `es2`, `is2`, `es3`, `is3`, `es4`, `is4`, `es5`, `is5`, `sem1`, `sem2`, `sem3`, `sem4`, `sem5`) VALUES
(2, '', 'http://localhost/mainproject/upload/Passport-size-photo1.jpg', 'http://localhost/mainproject/upload/unnamed1.png', 'qwq', 'dads', 'aad', 'male', '2018', '3', 'Regular', '1sthalf', 'dadaad', '2020-04-05', '1234', 'wqdasdads', 'adadadas', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'http://localhost/mainproject/upload/maxresdefault5.jpg', 'http://localhost/mainproject/upload/maxresdefault6.jpg', 'http://localhost/mainproject/upload/maxresdefault7.jpg', 'http://localhost/mainproject/upload/maxresdefault8.jpg', 'http://localhost/mainproject/upload/maxresdefault9.jpg'),
(3, '', 'http://localhost/mainproject/upload/Passport-size-photo2.jpg', 'http://localhost/mainproject/upload/unnamed2.png', 'qw', 'dads', 'aad', 'male', '2018', '3', 'Regular', '1sthalf', 'dadaad', '0000-00-00', '1234', 'wqdasdads', 'adadadas', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'http://localhost/mainproject/upload/maxresdefault10.jpg', 'http://localhost/mainproject/upload/maxresdefault11.jpg', 'http://localhost/mainproject/upload/maxresdefault12.jpg', 'http://localhost/mainproject/upload/maxresdefault13.jpg', 'http://localhost/mainproject/upload/maxresdefault14.jpg'),
(4, '', 'http://localhost/mainproject/upload/Sandip_pic.png', 'http://localhost/mainproject/upload/unnamed3.png', '', 'Nandkishor', '', 'male', '', '', 'Regular', '1sthalf', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'http://localhost/mainproject/upload/maxresdefault15.jpg', '', '', '', ''),
(6, '12345', 'http://localhost/mainproject/upload/Passport-size-photo3.jpg', 'http://localhost/mainproject/upload/unnamed4.png', 'Ninad', 'Nandkishor', 'Parkar', 'male', '2020', '6', 'Regular', '2ndhalf', 'Comp', '0000-00-00', '9029003747', '22/D Jogeshwari Wadi , K.G. Marg , Prabhadevi , Mumbai-400025', 'adadadaseru', 's1', 'y', 'y', '', '', 's2', 'y', 'y', '', '', 's3', 'y', 'y', '', '', 's4', 'y', 'y', '', '', 's5', 'y', 'y', '', '', 's6', '', '', 'y', 'y', 's7', '', '', 'y', 'y', 's8', '', '', 'y', 'y', 's9', '', '', 'y', 'y', 's10', '', '', 'y', 'y', '', '', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', 'http://localhost/mainproject/upload/maxresdefault16.jpg', 'http://localhost/mainproject/upload/maxresdefault17.jpg', 'http://localhost/mainproject/upload/maxresdefault18.jpg', 'http://localhost/mainproject/upload/maxresdefault19.jpg', 'http://localhost/mainproject/upload/maxresdefault20.jpg'),
(7, '', 'http://localhost/mainproject/upload/Sandip_pic1.png', 'http://localhost/mainproject/upload/unnamed5.png', 'Pritesh', 'Nandkishor', 'Parkar', 'male', '2020', '3', 'Regular', '1sthalf', 'Mech', '0000-00-00', '9029003747', 'Prabhadevi', 'vmvbmbbnmljj', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(8, '12345', 'http://localhost/mainproject/upload/Sandip_pic2.png', 'http://localhost/mainproject/upload/unnamed9.png', 'Jay', 'Sanjay', 'Parab', 'male', '2019', '3', 'Regular', '1sthalf', 'Comp', '1997-06-27', '1234567890', 'Vikhroli', 'sdaldlajdlajdad', 's1', 'y', 'y', '', '', 's2', 'y', 'y', '', '', 's3', 'y', 'y', '', '', 's4', 'y', 'y', '', '', 's5', 'y', 'y', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'http://localhost/mainproject/upload/maxresdefault21.jpg', 'http://localhost/mainproject/upload/maxresdefault22.jpg', 'http://localhost/mainproject/upload/maxresdefault23.jpg', 'http://localhost/mainproject/upload/maxresdefault24.jpg', 'http://localhost/mainproject/upload/maxresdefault25.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `revaldetails`
--

CREATE TABLE `revaldetails` (
  `id` int(8) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `hall_ticket` int(8) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  `Sem` int(8) NOT NULL,
  `ktorr` varchar(20) NOT NULL,
  `fs` varchar(20) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `contact` int(20) NOT NULL,
  `address` text NOT NULL,
  `transaction_id` text NOT NULL,
  `s1` varchar(50) NOT NULL,
  `s1th` varchar(5) NOT NULL,
  `s1ut` varchar(5) NOT NULL,
  `s1tw` varchar(5) NOT NULL,
  `s1op` varchar(5) NOT NULL,
  `s2` varchar(100) NOT NULL,
  `s2th` varchar(5) NOT NULL,
  `s2ut` varchar(5) NOT NULL,
  `s2tw` varchar(5) NOT NULL,
  `s2op` varchar(5) NOT NULL,
  `s3` varchar(100) NOT NULL,
  `s3th` varchar(5) NOT NULL,
  `s3ut` varchar(5) NOT NULL,
  `s3tw` varchar(5) NOT NULL,
  `s3op` varchar(5) NOT NULL,
  `s4` varchar(100) NOT NULL,
  `s4th` varchar(5) NOT NULL,
  `s4ut` varchar(5) NOT NULL,
  `s4tw` varchar(5) NOT NULL,
  `s4op` varchar(5) NOT NULL,
  `s5` varchar(100) NOT NULL,
  `s5th` varchar(5) NOT NULL,
  `s5ut` varchar(5) NOT NULL,
  `s5tw` varchar(5) NOT NULL,
  `s5op` varchar(5) NOT NULL,
  `s6` varchar(100) NOT NULL,
  `s6th` varchar(5) NOT NULL,
  `s6ut` varchar(5) NOT NULL,
  `s6tw` varchar(5) NOT NULL,
  `s6op` varchar(5) NOT NULL,
  `s7` varchar(100) NOT NULL,
  `s7th` varchar(5) NOT NULL,
  `s7ut` varchar(5) NOT NULL,
  `s7tw` varchar(5) NOT NULL,
  `s7op` varchar(5) NOT NULL,
  `s8` varchar(100) NOT NULL,
  `s8th` varchar(5) NOT NULL,
  `s8ut` varchar(5) NOT NULL,
  `s8tw` varchar(5) NOT NULL,
  `s8op` varchar(5) NOT NULL,
  `s9` varchar(100) NOT NULL,
  `s9th` varchar(5) NOT NULL,
  `s9ut` varchar(5) NOT NULL,
  `s9tw` varchar(5) NOT NULL,
  `s9op` varchar(5) NOT NULL,
  `s10` varchar(100) NOT NULL,
  `s10th` varchar(5) NOT NULL,
  `s10ut` varchar(5) NOT NULL,
  `s10tw` varchar(5) NOT NULL,
  `s10op` varchar(5) NOT NULL,
  `s11` varchar(100) NOT NULL,
  `s11th` varchar(5) NOT NULL,
  `s11ut` varchar(5) NOT NULL,
  `s11tw` varchar(5) NOT NULL,
  `s11op` varchar(5) NOT NULL,
  `user_photo` text NOT NULL,
  `transaction_ss` text NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `revaldetails`
--

INSERT INTO `revaldetails` (`id`, `fname`, `mname`, `sname`, `hall_ticket`, `gender`, `year`, `Sem`, `ktorr`, `fs`, `branch`, `dob`, `contact`, `address`, `transaction_id`, `s1`, `s1th`, `s1ut`, `s1tw`, `s1op`, `s2`, `s2th`, `s2ut`, `s2tw`, `s2op`, `s3`, `s3th`, `s3ut`, `s3tw`, `s3op`, `s4`, `s4th`, `s4ut`, `s4tw`, `s4op`, `s5`, `s5th`, `s5ut`, `s5tw`, `s5op`, `s6`, `s6th`, `s6ut`, `s6tw`, `s6op`, `s7`, `s7th`, `s7ut`, `s7tw`, `s7op`, `s8`, `s8th`, `s8ut`, `s8tw`, `s8op`, `s9`, `s9th`, `s9ut`, `s9tw`, `s9op`, `s10`, `s10th`, `s10ut`, `s10tw`, `s10op`, `s11`, `s11th`, `s11ut`, `s11tw`, `s11op`, `user_photo`, `transaction_ss`, `status`) VALUES
(2, 'Ninad', 'Nandkishor', 'Parkar', 234567, 'male', '2018', 3, 'Regular', '1sthalf', 'Computer', '0000-00-00', 123457890, 'Prabhadevi', 'vmvbmbbnmljjas', 's1', 'Y', '', '', '', 's2', 'Y', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'http://localhost/mainproject/upload/Passport-size-photo7.jpg', 'http://localhost/mainproject/upload/unnamed8.png', 'DONE');

-- --------------------------------------------------------

--
-- Table structure for table `slogin`
--

CREATE TABLE `slogin` (
  `id` int(50) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `firstname` varchar(150) NOT NULL,
  `lastname` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slogin`
--

INSERT INTO `slogin` (`id`, `username`, `password`, `firstname`, `lastname`) VALUES
(1, 'admin', 'admin', 'admin', 'admin'),
(6, 'ninad', 'parkar', 'ninad', 'parkar');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `marksheet` text NOT NULL,
  `xform` text NOT NULL,
  `rform` text NOT NULL,
  `ktform` text NOT NULL,
  `ht` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`marksheet`, `xform`, `rform`, `ktform`, `ht`) VALUES
('on', 'on', 'on', '', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `stlogin`
--

CREATE TABLE `stlogin` (
  `stid` int(50) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `firstname` varchar(150) NOT NULL,
  `lastname` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stlogin`
--

INSERT INTO `stlogin` (`stid`, `username`, `password`, `firstname`, `lastname`) VALUES
(1, 'admin', 'admin', 'admin', 'admin'),
(2, 'ninad', 'parkar', 'Ninad', 'Parkar'),
(4, 'pritesh', 'pritesh', 'Pritesh', 'Parkar');

-- --------------------------------------------------------

--
-- Table structure for table `studentdetails`
--

CREATE TABLE `studentdetails` (
  `id` int(8) NOT NULL,
  `hall_ticket` int(8) NOT NULL,
  `fname` varchar(150) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `lname` varchar(150) NOT NULL,
  `heldin` varchar(100) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `sem` int(8) NOT NULL,
  `s1` varchar(100) NOT NULL,
  `s1th` int(8) NOT NULL,
  `s1ut` int(8) NOT NULL,
  `s1tht` int(8) NOT NULL,
  `s1utt` int(8) NOT NULL,
  `s1c` int(8) NOT NULL,
  `os1` int(8) NOT NULL,
  `ts1` int(8) NOT NULL,
  `s1g` varchar(8) NOT NULL,
  `s1p` int(8) NOT NULL,
  `s2` varchar(8) NOT NULL,
  `s2th` int(8) NOT NULL,
  `s2ut` int(8) NOT NULL,
  `s2tht` int(8) NOT NULL,
  `s2utt` int(8) NOT NULL,
  `s2c` int(8) NOT NULL,
  `os2` int(8) NOT NULL,
  `ts2` int(8) NOT NULL,
  `s2g` varchar(8) NOT NULL,
  `s2p` int(8) NOT NULL,
  `s3` varchar(8) NOT NULL,
  `s3th` int(8) NOT NULL,
  `s3ut` int(8) NOT NULL,
  `s3tht` int(8) NOT NULL,
  `s3utt` int(8) NOT NULL,
  `s3c` int(8) NOT NULL,
  `os3` int(8) NOT NULL,
  `ts3` int(8) NOT NULL,
  `s3g` varchar(8) NOT NULL,
  `s3p` int(8) NOT NULL,
  `s4` varchar(8) NOT NULL,
  `s4th` int(8) NOT NULL,
  `s4ut` int(8) NOT NULL,
  `s4tht` int(8) NOT NULL,
  `s4utt` int(8) NOT NULL,
  `s4c` int(8) NOT NULL,
  `os4` int(8) NOT NULL,
  `ts4` int(8) NOT NULL,
  `s4g` varchar(8) NOT NULL,
  `s4p` int(8) NOT NULL,
  `s5` varchar(8) NOT NULL,
  `s5th` int(8) NOT NULL,
  `s5ut` int(8) NOT NULL,
  `s5tht` int(8) NOT NULL,
  `s5utt` int(8) NOT NULL,
  `s5c` int(8) NOT NULL,
  `os5` int(8) NOT NULL,
  `ts5` int(8) NOT NULL,
  `s5g` varchar(8) NOT NULL,
  `s5p` int(8) NOT NULL,
  `s6` varchar(8) NOT NULL,
  `s6th` int(8) NOT NULL,
  `s6ut` int(8) NOT NULL,
  `s6tht` int(8) NOT NULL,
  `s6utt` int(8) NOT NULL,
  `s6c` int(8) NOT NULL,
  `os6` int(8) NOT NULL,
  `ts6` int(8) NOT NULL,
  `s6g` varchar(8) NOT NULL,
  `s6p` int(8) NOT NULL,
  `s7` varchar(8) NOT NULL,
  `s7th` int(8) NOT NULL,
  `s7ut` int(8) NOT NULL,
  `s7tht` int(8) NOT NULL,
  `s7utt` int(8) NOT NULL,
  `s7c` int(8) NOT NULL,
  `os7` int(8) NOT NULL,
  `ts7` int(8) NOT NULL,
  `s7g` varchar(8) NOT NULL,
  `s7p` int(8) NOT NULL,
  `s8` varchar(8) NOT NULL,
  `s8th` int(8) NOT NULL,
  `s8ut` int(8) NOT NULL,
  `s8tht` int(8) NOT NULL,
  `s8utt` int(8) NOT NULL,
  `s8c` int(8) NOT NULL,
  `os8` int(8) NOT NULL,
  `ts8` int(8) NOT NULL,
  `s8g` varchar(8) NOT NULL,
  `s8p` int(8) NOT NULL,
  `s9` varchar(8) NOT NULL,
  `s9th` int(8) NOT NULL,
  `s9ut` int(8) NOT NULL,
  `s9tht` int(8) NOT NULL,
  `s9utt` int(8) NOT NULL,
  `s9c` int(8) NOT NULL,
  `os9` int(8) NOT NULL,
  `ts9` int(8) NOT NULL,
  `s9g` varchar(8) NOT NULL,
  `s9p` int(8) NOT NULL,
  `s10` varchar(8) NOT NULL,
  `s10th` int(8) NOT NULL,
  `s10ut` int(8) NOT NULL,
  `s10tht` int(8) NOT NULL,
  `s10utt` int(8) NOT NULL,
  `s10c` int(8) NOT NULL,
  `os10` int(8) NOT NULL,
  `ts10` int(8) NOT NULL,
  `s10g` varchar(8) NOT NULL,
  `s10p` int(8) NOT NULL,
  `s11` varchar(8) NOT NULL,
  `s11th` int(8) NOT NULL,
  `s11ut` int(8) NOT NULL,
  `s11tht` int(8) NOT NULL,
  `s11utt` int(8) NOT NULL,
  `s11c` int(8) NOT NULL,
  `os11` int(8) NOT NULL,
  `ts11` int(8) NOT NULL,
  `s11g` varchar(8) NOT NULL,
  `s11p` int(8) NOT NULL,
  `cgpa` float(12,2) NOT NULL,
  `remark` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentdetails`
--

INSERT INTO `studentdetails` (`id`, `hall_ticket`, `fname`, `mname`, `lname`, `heldin`, `branch`, `sem`, `s1`, `s1th`, `s1ut`, `s1tht`, `s1utt`, `s1c`, `os1`, `ts1`, `s1g`, `s1p`, `s2`, `s2th`, `s2ut`, `s2tht`, `s2utt`, `s2c`, `os2`, `ts2`, `s2g`, `s2p`, `s3`, `s3th`, `s3ut`, `s3tht`, `s3utt`, `s3c`, `os3`, `ts3`, `s3g`, `s3p`, `s4`, `s4th`, `s4ut`, `s4tht`, `s4utt`, `s4c`, `os4`, `ts4`, `s4g`, `s4p`, `s5`, `s5th`, `s5ut`, `s5tht`, `s5utt`, `s5c`, `os5`, `ts5`, `s5g`, `s5p`, `s6`, `s6th`, `s6ut`, `s6tht`, `s6utt`, `s6c`, `os6`, `ts6`, `s6g`, `s6p`, `s7`, `s7th`, `s7ut`, `s7tht`, `s7utt`, `s7c`, `os7`, `ts7`, `s7g`, `s7p`, `s8`, `s8th`, `s8ut`, `s8tht`, `s8utt`, `s8c`, `os8`, `ts8`, `s8g`, `s8p`, `s9`, `s9th`, `s9ut`, `s9tht`, `s9utt`, `s9c`, `os9`, `ts9`, `s9g`, `s9p`, `s10`, `s10th`, `s10ut`, `s10tht`, `s10utt`, `s10c`, `os10`, `ts10`, `s10g`, `s10p`, `s11`, `s11th`, `s11ut`, `s11tht`, `s11utt`, `s11c`, `os11`, `ts11`, `s11g`, `s11p`, `cgpa`, `remark`) VALUES
(2, 33443, 'Ninad', 'Nandkishor', 'Parkar', 'May2020', 'Computer', 4, 's1', 54, 15, 80, 20, 5, 69, 100, 'C', 35, 's2', 45, 16, 80, 20, 4, 61, 100, 'C', 28, 's33', 65, 15, 80, 20, 4, 80, 100, 'O', 40, 's4', 56, 15, 80, 20, 4, 71, 100, 'B', 32, 's5', 42, 16, 80, 20, 4, 58, 100, 'D', 24, 's6', 20, 20, 25, 25, 1, 40, 50, 'O', 10, 's7', 20, 20, 25, 25, 1, 40, 50, 'O', 10, 's8', 20, 20, 25, 25, 1, 40, 50, 'O', 10, 's9', 20, 20, 25, 25, 1, 40, 50, 'O', 10, 's10', 40, 40, 50, 50, 2, 80, 100, 'O', 20, '', 0, 0, 0, 0, 0, 0, 0, '', 0, 8.11, 'Pass'),
(3, 2, 'Ninad', 'Nandkishor', 'Parkar', 'May2020', 'Computer', 4, 's1', 54, 15, 80, 20, 5, 69, 100, 'C', 35, 's2', 45, 16, 80, 20, 4, 61, 100, 'C', 28, 's33', 65, 15, 80, 20, 4, 80, 100, 'O', 40, 's4', 56, 15, 80, 20, 4, 71, 100, 'B', 32, 's5', 60, 16, 80, 20, 4, 76, 100, 'A', 36, 's6', 20, 20, 25, 25, 1, 40, 50, 'O', 10, 's7', 20, 20, 25, 25, 1, 40, 50, 'O', 10, 's8', 20, 20, 25, 25, 1, 40, 50, 'O', 10, 's9', 20, 20, 25, 25, 1, 40, 50, 'O', 10, 's10', 40, 40, 50, 50, 2, 80, 100, 'O', 20, '', 0, 0, 0, 0, 0, 0, 0, '', 0, 8.56, 'Pass'),
(4, 2345671, 'Ninad', 'Nandkishor', 'Parkar', 'May2019', 'Computer', 4, 's1', 54, 20, 80, 20, 4, 74, 100, 'B', 32, 's2', 62, 17, 80, 20, 4, 79, 100, 'A', 36, 's3', 54, 17, 80, 20, 4, 71, 100, 'B', 32, 's4', 62, 18, 80, 20, 4, 80, 100, 'O', 40, 's5', 66, 19, 80, 20, 4, 85, 100, 'O', 40, 's6', 20, 20, 25, 25, 1, 40, 50, 'O', 10, 's7', 20, 20, 25, 25, 1, 40, 50, 'O', 10, 's8', 20, 20, 25, 25, 1, 40, 50, 'O', 10, 's9', 20, 20, 25, 25, 1, 40, 50, 'O', 10, '', 0, 0, 0, 0, 0, 50, 50, 'O', 10, '', 0, 0, 0, 0, 0, 0, 0, '', 0, 9.17, 'Pass'),
(5, 334433, 'Pritesh', 'Nandkishor', 'Parkar', 'May2020', 'Computer', 4, 's1', 54, 15, 80, 20, 5, 69, 100, 'C', 35, 's2', 45, 16, 80, 20, 4, 61, 100, 'C', 28, 's33', 65, 15, 80, 20, 4, 80, 100, 'O', 40, 's4', 56, 15, 80, 20, 4, 71, 100, 'B', 32, 's5', 42, 16, 80, 20, 4, 58, 100, 'D', 24, 's6', 20, 20, 25, 25, 1, 40, 50, 'O', 10, 's7', 20, 20, 25, 25, 1, 40, 50, 'O', 10, 's8', 20, 20, 25, 25, 1, 40, 50, 'O', 10, 's9', 20, 20, 25, 25, 1, 40, 50, 'O', 10, 's10', 40, 40, 50, 50, 2, 80, 100, 'O', 20, '', 0, 0, 0, 0, 0, 0, 0, '', 0, 8.11, 'Pass'),
(8, 12, 'Sachin', 'Ramesh', 'Tendulkar', 'May2019', 'Computer', 4, 's1', 32, 8, 80, 20, 4, 40, 100, 'P', 16, 's2', 32, 8, 80, 20, 4, 40, 100, 'P', 16, 's3', 32, 8, 80, 20, 4, 40, 100, 'P', 16, 's4', 32, 8, 80, 20, 4, 40, 100, 'P', 16, 's5', 32, 8, 80, 20, 4, 40, 100, 'P', 16, 's6', 10, 10, 25, 25, 1, 20, 50, 'P', 4, 's7', 10, 10, 25, 25, 1, 20, 50, 'P', 4, 's8', 10, 10, 25, 25, 1, 20, 50, 'P', 4, 's9', 10, 10, 25, 25, 1, 20, 50, 'P', 4, '', 0, 0, 0, 0, 0, 0, 0, '', 0, '', 0, 0, 0, 0, 0, 0, 0, '', 0, 4.00, 'Pass'),
(9, 676767, 'Jay', 'Sanjay', 'Parab', 'May2018', 'Comp', 3, 's1', 54, 18, 80, 20, 5, 72, 100, 'B', 40, 's2', 40, 15, 80, 20, 4, 55, 100, 'D', 24, 's3', 40, 15, 80, 20, 4, 55, 100, 'D', 24, 's4', 40, 20, 80, 20, 4, 60, 100, 'C', 28, 's5', 40, 12, 80, 20, 4, 52, 100, 'D', 24, 's6', 20, 20, 25, 25, 1, 40, 50, 'O', 10, 's7', 20, 20, 25, 25, 1, 40, 50, 'O', 10, 's8', 20, 20, 25, 25, 1, 40, 50, 'O', 10, 's9', 40, 40, 50, 50, 2, 80, 100, 'O', 20, 's10', 20, 20, 25, 25, 2, 40, 50, 'O', 20, '', 0, 0, 0, 0, 0, 0, 0, '', 0, 7.50, 'Pass');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alogin`
--
ALTER TABLE `alogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hallticketsub`
--
ALTER TABLE `hallticketsub`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ktexdetails`
--
ALTER TABLE `ktexdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `revaldetails`
--
ALTER TABLE `revaldetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slogin`
--
ALTER TABLE `slogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stlogin`
--
ALTER TABLE `stlogin`
  ADD PRIMARY KEY (`stid`);

--
-- Indexes for table `studentdetails`
--
ALTER TABLE `studentdetails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alogin`
--
ALTER TABLE `alogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hallticketsub`
--
ALTER TABLE `hallticketsub`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `ktexdetails`
--
ALTER TABLE `ktexdetails`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `revaldetails`
--
ALTER TABLE `revaldetails`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slogin`
--
ALTER TABLE `slogin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `stlogin`
--
ALTER TABLE `stlogin`
  MODIFY `stid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `studentdetails`
--
ALTER TABLE `studentdetails`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
