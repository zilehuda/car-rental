-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2017 at 08:43 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cars`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `uname`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `caradd`
--

CREATE TABLE `caradd` (
  `seller_id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `cname` varchar(250) NOT NULL,
  `ccompany` varchar(250) NOT NULL,
  `cmodel` varchar(250) NOT NULL,
  `cfeul` varchar(250) NOT NULL,
  `ccondition` varchar(250) NOT NULL,
  `ctype` varchar(250) NOT NULL,
  `cseats` varchar(250) NOT NULL,
  `cyears` varchar(250) NOT NULL,
  `ccolor` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL,
  `cimage` varchar(250) NOT NULL,
  `price` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `caradd`
--

INSERT INTO `caradd` (`seller_id`, `car_id`, `cname`, `ccompany`, `cmodel`, `cfeul`, `ccondition`, `ctype`, `cseats`, `cyears`, `ccolor`, `status`, `cimage`, `price`) VALUES
(2, 11, 'mehran22', 'no', 'nn', 'nn', 'nnn', 'nnn', '5', '2017-12', '#563d7c', 'Approved', 'mehran22.jpg', 200),
(1, 12, 'mehran1', 'Toyata', 'New', 'Old', 'Good', 'bad ', '6', '2016-12', '#563d7c', 'Approved', 'mehran1.jpg', 300),
(1, 13, 'mehran3', 'toyata', 'new model', 'old', 'best', 'new', '5', '2016-12', '#563d7c', 'Approved', 'mehran3.jpg', 150),
(1, 14, 'mehran4', 'Toyata', 'Model2015', 'Good', 'Nice', 'bad', '5', '2017-12', '#563d7c', 'Approved', 'mehran4.jpg', 100);

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `car_id` int(11) NOT NULL,
  `car_name` varchar(255) NOT NULL,
  `car_type` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `hire_cost` int(11) NOT NULL,
  `capacity` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`car_id`, `car_name`, `car_type`, `image`, `hire_cost`, `capacity`, `status`) VALUES
(1, 'Mercedes Benz', 'Mercedes Benz', 'car1.jpg', 20000, 5, 'Available'),
(2, 'Range Rover', 'LandRover', 'car2.jpg', 30000, 6, 'Available'),
(3, 'Harrier', 'Toyota', 'car3.jpg', 20000, 6, 'Available'),
(5, 'LandCruiser V8', 'LandCruiser ', 'images (2).jpg', 20000, 5, 'Available'),
(6, 'Security Vehicles', 'Hammar Cars', 'sonkort2.png', 30000, 8, 'Available'),
(7, 'Wedding Limousine', 'Wedding Limousine', 'images (3).jpg', 50000, 10, 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `car_bookin`
--

CREATE TABLE `car_bookin` (
  `client_id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `status` varchar(250) NOT NULL,
  `payment` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car_bookin`
--

INSERT INTO `car_bookin` (`client_id`, `car_id`, `status`, `payment`) VALUES
(2, 11, 'Approved', 'paid'),
(10, 7, 'Approved', 'not'),
(10, 11, 'Approved', 'paid'),
(10, 12, 'Approved', 'paid'),
(10, 13, 'Pending', 'not');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `id_no` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `car_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `mpesa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `fname`, `email`, `id_no`, `phone`, `location`, `gender`, `car_id`, `status`, `mpesa`) VALUES
(2, 'felix kiamba', 'kiambafelix@yahoo.com', 30073147, 705053484, 'nairobi', 'Male', 1, 'Approved', 'GTD45H7H6'),
(3, 'concepter', 'concybogita@gmail.com', 27695131, 707403614, 'kisii', 'Female', 2, 'Approved', 'DJFL870FDK9'),
(4, 'enock bosire', 'enock@gmail.com', 1234567, 717056766, 'narok', 'Male', 2, 'Approved', 'HJHK678X'),
(5, 'pawan', 'k142173@nu.edu.pk', 22, 0, 'karachi', 'Male', 0, 'Available', ''),
(6, 'kumar', 'khatri.catten22@gmail.com', 12345, 2147483647, 'karachi', 'Male', 1, 'Approved', ''),
(7, 'pawan', 'pawan@pawan.com', 12, 2147483647, 'karachi', 'Male', 0, 'Available', ''),
(8, 'nothing', 'nothing@nu.edu.pk', 12, 0, 'aads', 'Male', 0, 'Available', ''),
(9, 'karan', 'karan@nu.edu.pk', 12, 2147483647, 'abtabad', 'Male', 0, 'Available', ''),
(10, 'buyer1', 'buyer@nu.edu.pk', 12, 2147483647, 'karachi', 'Male', 0, 'Available', '');

-- --------------------------------------------------------

--
-- Table structure for table `hire`
--

CREATE TABLE `hire` (
  `hire_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `msg_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`msg_id`, `client_id`, `message`, `status`, `time`) VALUES
(3, 0, 'Thanks for that..OK?', 'Unread', '0000-00-00 00:00:00'),
(5, 0, 'I love this. It worked the way i want...', 'Unread', '2015-08-04 21:45:33'),
(6, 0, 'i have alot of issues with it', 'Unread', '2017-05-23 12:57:36'),
(7, 0, 'asdsad', 'Unread', '2017-05-23 13:02:54'),
(8, 0, 'i can live with this car', 'Unread', '2017-05-24 03:34:06'),
(9, 0, 'so whjatas sdsd', 'Unread', '2017-05-24 03:36:48'),
(10, 2, 'so whjatas sdsd', 'Unread', '2017-05-24 03:38:52'),
(11, 2, 'asdad adss ada d', 'Unread', '2017-05-24 03:39:13'),
(12, 2, 'hello dears frim sekker', 'Unread', '2017-05-24 03:58:31'),
(13, 10, 'asdasdad asdsa', 'Unread', '2017-05-24 04:23:56'),
(14, 10, 'i am buyer', 'Unread', '2017-05-24 04:24:56'),
(15, 10, 'kkadnakd akd akd ', 'Unread', '2017-05-24 04:46:07'),
(16, 1, 'i am best seller', 'Unread', '2017-05-24 04:48:25'),
(17, 1, 'approve my cars', 'Unread', '2017-05-24 04:55:29');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `car_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `price` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`car_id`, `client_id`, `price`) VALUES
(11, 2, 200);

-- --------------------------------------------------------

--
-- Table structure for table `reply`
--

CREATE TABLE `reply` (
  `msg_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `reply` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reply`
--

INSERT INTO `reply` (`msg_id`, `client_id`, `reply`) VALUES
(11, 2, 'yes we will do it for u'),
(14, 10, 'hello dear will u help me'),
(15, 10, 'ajdnaksd ad ad'),
(16, 1, 'yes you are'),
(17, 1, 'ok i will ');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `seller_id` int(11) NOT NULL,
  `fname` varchar(250) NOT NULL,
  `id_no` int(11) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` int(11) NOT NULL,
  `location` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`seller_id`, `fname`, `id_no`, `gender`, `email`, `phone`, `location`) VALUES
(1, 'pawan', 123, 'Male', 'khatri.pawan22@yahoo.com', 2147483647, 'karachi'),
(2, 'nothing', 12, 'Male', 'noth@nu.edu.pk', 2147483647, 'karachi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `caradd`
--
ALTER TABLE `caradd`
  ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `car_bookin`
--
ALTER TABLE `car_bookin`
  ADD PRIMARY KEY (`client_id`,`car_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `hire`
--
ALTER TABLE `hire`
  ADD PRIMARY KEY (`hire_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`car_id`,`client_id`);

--
-- Indexes for table `reply`
--
ALTER TABLE `reply`
  ADD PRIMARY KEY (`msg_id`,`client_id`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`seller_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `caradd`
--
ALTER TABLE `caradd`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `hire`
--
ALTER TABLE `hire`
  MODIFY `hire_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `seller_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
