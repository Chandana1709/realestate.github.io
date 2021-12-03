-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2021 at 01:29 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `realestate`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_reg`
--

CREATE TABLE `admin_reg` (
  `adname` varchar(20) NOT NULL,
  `admin_id` varchar(15) NOT NULL,
  `admin_email_id` varchar(25) NOT NULL,
  `admin_mobile_no` varchar(10) NOT NULL,
  `admin_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_reg`
--

INSERT INTO `admin_reg` (`adname`, `admin_id`, `admin_email_id`, `admin_mobile_no`, `admin_password`) VALUES
('diya', 'aa', 'manu@gmail.com', '9987654321', 'aa'),
('chandana', 'chandu1', 'chandana17@gmail.com', '9945978208', 'Dhanya@2000'),
('dhanya', 'dhanu1', 'dhanya@gmail.com', '9987654321', 'Chandana@2000'),
('dhanya', 'dhanu123', 'dhanya11@gmail.com', '9987654329', 'Dhanya@2000'),
('raju', 'raju12', 'chandanamanjunath1986@gma', '9987654321', 'Chandana@000'),
('sanju', 'sanju1', 'sanju@gmail.com', '9987654321', 'Sanju22000'),
('sanju', 'sanju123', 'sanju@gmail.com', '9987654329', 'Sanju@1999');

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(15) NOT NULL,
  `title` varchar(25) NOT NULL,
  `content` longtext NOT NULL,
  `image_file` varchar(200) NOT NULL,
  `article_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `title`, `content`, `image_file`, `article_date`) VALUES
(1, 'India’s real estate indus', '\r\nIn June 2020, Ashish Puravankara had to make a critical decision. Sales had taken a hit due to the nationwide lockdown, but there was demand and customer queries were still pouring in. He decided not to hold back on launches, even though everything seemed to have changed in the blink of an eye. In June and July, the publicly listed firm Puravankara launched three projects virtually. The online launches were attended by about 30,000 participants. The projects were launched on the firm’s website as well as on YouTube, Facebook and other digital platforms. “In 2019, we had created an online launch platform but didn’t launch any project. The digital tools were there but we used them only now,\" said Puravankara, managing director of the Bengaluru-based real estate firm. “The virtual launches reinforced our trust that this could be done.\"\r\n\r\n', 'project2/news1.jfif', '2021-07-07'),
(2, 'Why Buying A New House Am', 'BENGALURU : Imagine a giant ballroom at an upscale hotel in south Bengaluru, Karnataka. A few hundred people have gathered for the launch of a real estate project. On the stage, there is an auction-like mood. The developers’ team drums up excitement and drama. The base price of the premium homes on offer is about to be revealed. The crowd cheers as the rate changes, until it stops at the final cost tag.\r\n\r\n', 'project2/news2.jpg', '2021-08-09'),
(3, 'Prestige Group to invest ', 'The new commercial development, a standalone ground plus 63 storey and a 43-floor prestige Liberty Tower property, will be the tallest office property in the country. The proposed 2.5 million sq ft property, which is scheduled to be completed by 2025, will have 400,000 sq ft of amenities area and business club along with a viewing gallery on the top floor.\r\n\r\n“Construction finance for both the projects has been tied up, and we are seeing strong demand for some large requirements,” said Ju ..\r\n\r\n', 'project2/news6.png', '2021-08-09');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `user_id` varchar(15) NOT NULL,
  `fname` text NOT NULL,
  `femail` varchar(35) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `feedback` tinytext NOT NULL,
  `suggestions` text NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`user_id`, `fname`, `femail`, `phone`, `feedback`, `suggestions`, `reg_date`) VALUES
('anu123', 'anu', 'anu@gmail.com', '9513246831', 'excellent', 'ewffd', '2021-06-04 08:20:32');

-- --------------------------------------------------------

--
-- Table structure for table `interested`
--

CREATE TABLE `interested` (
  `user_id` varchar(15) NOT NULL,
  `property_id` int(50) NOT NULL,
  `logintime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `interested`
--

INSERT INTO `interested` (`user_id`, `property_id`, `logintime`) VALUES
('manu12', 2, '2008-07-21 03:26:16'),
('manu12', 4, '2008-07-21 03:29:16'),
('manu12', 4, '2008-07-21 03:33:44'),
('manu12', 4, '2008-07-21 03:33:52'),
('manu12', 2, '2008-07-21 03:34:06'),
('manu12', 2, '2008-07-21 03:36:14'),
('manu12', 2, '2008-07-21 03:36:36'),
('manu12', 2, '2008-07-21 03:36:41'),
('gowda1', 5, '2008-07-21 05:27:18'),
('gowda1', 4, '2009-07-21 01:11:12'),
('gowda1', 4, '2009-07-21 01:11:39'),
('gowda1', 4, '2009-07-21 01:11:58'),
('preya1', 4, '2005-08-21 08:36:18'),
('anu123', 2, '2018-08-21 05:11:24'),
('anu123', 2, '2018-08-21 05:11:34'),
('anu123', 5, '2018-08-21 05:12:17'),
('anu123', 4, '2018-08-21 05:12:37'),
('anu123', 2, '2018-08-21 05:23:11'),
('anu123', 2, '2018-08-21 05:27:10'),
('anu123', 2, '2018-08-21 05:27:13');

-- --------------------------------------------------------

--
-- Table structure for table `plan`
--

CREATE TABLE `plan` (
  `Plan_id` varchar(100) DEFAULT NULL,
  `Plan_Description` varchar(100) DEFAULT NULL,
  `Plan_Duration` varchar(100) DEFAULT NULL,
  `Plan_Amount` varchar(100) DEFAULT NULL,
  `plancontent` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plan`
--

INSERT INTO `plan` (`Plan_id`, `Plan_Description`, `Plan_Duration`, `Plan_Amount`, `plancontent`) VALUES
('1', 'BASIC PLAN', '30', '199', 'View complete details of the properties'),
('2', 'STANDARD  ', '180', '299', 'View complete details of the properties'),
('3', 'PREMIUM', '365', '499', 'View complete details of the properties');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `property_id` int(25) NOT NULL,
  `user_id` varchar(15) NOT NULL,
  `admin_id` varchar(15) NOT NULL,
  `seller_name` varchar(25) NOT NULL,
  `city` varchar(25) NOT NULL,
  `type_of_property` varchar(25) NOT NULL,
  `no_of_bedroom` varchar(20) NOT NULL,
  `no_of_bathroom` varchar(20) NOT NULL,
  `other_rooms` varchar(20) NOT NULL,
  `balconies` varchar(20) NOT NULL,
  `parking` varchar(20) NOT NULL,
  `total_no_of_floor` varchar(20) NOT NULL,
  `floor_no` varchar(20) NOT NULL,
  `availability_status` varchar(20) NOT NULL,
  `age_of_property` varchar(20) NOT NULL,
  `images` varchar(300) NOT NULL,
  `special_prop1` longtext NOT NULL,
  `MobileNo` varchar(100) NOT NULL,
  `SIZE_OF_PROPERTY` varchar(100) NOT NULL,
  `COST_OF_THE_PROPERTY` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`property_id`, `user_id`, `admin_id`, `seller_name`, `city`, `type_of_property`, `no_of_bedroom`, `no_of_bathroom`, `other_rooms`, `balconies`, `parking`, `total_no_of_floor`, `floor_no`, `availability_status`, `age_of_property`, `images`, `special_prop1`, `MobileNo`, `SIZE_OF_PROPERTY`, `COST_OF_THE_PROPERTY`) VALUES
(2, 'manu12', '', 'Girish', 'Bangalore', 'Independent House', '2', '2', 'Study Room', 'No', 'Open Parking', '1', '2', 'Ready to move', '2', 'project2/cartimg.jpeg', 'Home is near to the park', '9945878208', '1200', 'Rs.60,0000'),
(5, 'manu12', '', 'Chandana M', 'mangalore', 'select option', '2', '2', 'Drawing Room', 'No', 'Open Parking', '2', '2', 'Ready to move', '2', 'project2/cartimg2.jpeg', 'Near to many temples', '9876543218', '3200', 'Rs.63,0000'),
(6, '', 'chandu1', 'Rathna J', 'Bangalore', 'Villa', '1', '2', 'Dinning Room', 'Yes', 'Reserved Parking', '2', 'More', 'Ready to move', '3', 'project2/cartimg7.jpeg', 'Near to Mall', '9878765432', '4200', 'Rs.600000'),
(7, 'preya1', '', 'Rajesh H', 'Mangalore', 'Villa', '2', '2', 'Drawing Room', 'Yes', 'Reserved Parking', '2', '3', 'Still in constructio', '3', 'project2/cartimg4.jpeg', 'near to Big Baazar', '9876543456', '3700', ' Rs.45,00000'),
(8, 'preya1', '', 'Nirmala', 'Hydrabad', 'Apartment', '3', '2', 'select option', 'Yes', 'Reserved Parking', '3', '2', 'Ready to Move', '2', 'project2/cartimg5.jpeg', 'New house ', '9876545678', '468', ' Rs.47,00000'),
(9, 'preya1', '', 'Karthik H', 'Chennai', 'Independent House', '2', '2', 'Dinning Room', 'No', 'Open Parking', '3', '3', 'Still in constructio', '2', 'project2/cartimg11.jfif', 'Highway is near', '9876543457', '567', ' Rs.31,00000'),
(10, 'preya1', '', 'Rajiv', 'Varnasi', 'Villa', '2', '2', 'Drawing Room', 'No', 'Open Parking', '3', '3', 'Ready to move', '1', 'project2/cartimg8.jpeg', 'Very modern and eye catching', '9876543450', '465', ' Rs.38,00000'),
(11, 'preya1', '', 'Madhuri J', 'Bangalore', 'Independent House', '2', '2', 'Dinning Room', 'Yes', 'Open Parking', 'More', '3', 'Ready to move', '4', 'project2/cartimg9.jpeg', 'Less traffic', '9876543457', '468', ' Rs.67,00000'),
(12, 'preya1', '', 'Manjunath H', 'Delhi', 'Independent House', '2', '2', 'Living Room', 'No', 'Reserved Parking', '1', '2', 'Ready to move', '1', 'project2/cartimg18.jpg', 'near temple ,big baazar', '9876543458', '568', ' Rs.49,00000'),
(13, 'preya1', '', 'Bhavya u', 'Bangalore', 'Villa', '2', '1', 'Study Room', 'No', 'Reserved Parking', 'More', '3', 'Ready to move', '2', 'project2/cartimg17.jpg', 'your own parking shed', '9876545679', '569', ' Rs.71,00000'),
(14, 'preya1', '', 'Varalakshmi N', 'Bangalore', 'Independent House', '2', '1', 'Study Room', 'No', 'Open Parking', '3', '2', 'Ready to move', '3', 'project2/cartimg17.jpg', 'large bathrooms', '9876543459', '460', ' Rs.48,00000'),
(15, '', 'chandu1', 'Rahul H', 'Bangalore', 'Villa', '3', '3', 'Study Room', 'No', 'Reserved Parking', 'More', '1', 'Ready to move', '0', 'project2/cartimg16.jpg', ' Near Park', '9876543456', '567', ' Rs.67,00000');

-- --------------------------------------------------------

--
-- Table structure for table `userplan`
--

CREATE TABLE `userplan` (
  `Plan_id` varchar(100) DEFAULT NULL,
  `Plan_Description` varchar(100) DEFAULT NULL,
  `Plan_Duration` varchar(100) DEFAULT NULL,
  `Plan_Amount` varchar(100) DEFAULT NULL,
  `Plan_Start_Date` varchar(100) DEFAULT NULL,
  `Plant_End_Date` varchar(100) DEFAULT NULL,
  `Email_id` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userplan`
--

INSERT INTO `userplan` (`Plan_id`, `Plan_Description`, `Plan_Duration`, `Plan_Amount`, `Plan_Start_Date`, `Plant_End_Date`, `Email_id`) VALUES
('1', 'BASIC PLAN', '30', '199', '2021/08/18', '2021/09/17', 'chandanamanjunath1986@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user_reg`
--

CREATE TABLE `user_reg` (
  `name` varchar(25) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `email_id` varchar(40) NOT NULL,
  `mobile_no` varchar(10) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_reg`
--

INSERT INTO `user_reg` (`name`, `user_id`, `email_id`, `mobile_no`, `password`) VALUES
('Chandana M', 'anu123', 'chandanamanjunath1986@gmail.com', '9945678900', 'Anushree@2000'),
('Bhavya', 'bha123', 'bhavya@gmail.com', '9513246831', 'Chandana@2000'),
('Chandana M', 'cha123', 'chandu@gmail.com', '9945878208', 'Chandana@2000'),
('Chandana M', 'chandu', 'chandanam1709@gmail.com', '9945678900', 'Dhanya@2000'),
('Dhanya M', 'dhanu1', 'dhanyamanjunath111@gmail.com', '9945678900', 'Dhanya@1991'),
('gowda g', 'gowda1', 'gowda@gmail.com', '9945678900', 'Gowda@1986'),
('Manjunath H', 'manju1', 'manju@gmail.com', '9945878208', 'Chandana@2000'),
('Manushree VS', 'manu12', 'manushree@gmail.com', '9945678900', 'Manushree@2000'),
('Preyanka V', 'preya1', 'preya@gmail.com', '9945878208', 'Preya@1999'),
('Rajesh G', 'rajesh12', 'rajesh@gmail.com', '9513246831', 'Chandana@2000'),
('Yashwanth', 'yash12', 'yashwanth@gmail.com', '9945878208', 'Yashwanth@2000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_reg`
--
ALTER TABLE `admin_reg`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`property_id`);

--
-- Indexes for table `user_reg`
--
ALTER TABLE `user_reg`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email_id` (`email_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `property_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_reg` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
