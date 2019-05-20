-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 20, 2019 at 02:45 PM
-- Server version: 5.5.61-38.13-log
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wtintern_wt`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(33) NOT NULL,
  `att_date` date DEFAULT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `employee_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `in_time` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `out_time` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `employee_category` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `employee_uname` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `attendance_date`
--

CREATE TABLE `attendance_date` (
  `currentDate` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `attendance_date`
--

INSERT INTO `attendance_date` (`currentDate`) VALUES
('2019-05-20');

-- --------------------------------------------------------

--
-- Table structure for table `leave_employee`
--

CREATE TABLE `leave_employee` (
  `leave_id` int(11) NOT NULL,
  `id` int(255) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `startdate` date DEFAULT NULL,
  `enddate` date DEFAULT NULL,
  `reason` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `seen_status` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Notice`
--

CREATE TABLE `Notice` (
  `notice_id` int(11) NOT NULL,
  `admin_id` int(100) DEFAULT NULL,
  `admin_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `notice_date` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `notice_head` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `notice_body` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `notice_department` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `target` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `task_id` varchar(255) NOT NULL,
  `task_category` varchar(255) NOT NULL,
  `task_name` varchar(255) NOT NULL,
  `task_description` varchar(255) NOT NULL,
  `task_deadline` varchar(255) NOT NULL,
  `task_status` varchar(255) NOT NULL,
  `assigned_to` varchar(255) NOT NULL,
  `assigned_employee` varchar(100) DEFAULT NULL,
  `assigned_date` date DEFAULT NULL,
  `task_cpercentage` varchar(10) DEFAULT NULL,
  `completed_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `date` date DEFAULT NULL,
  `time` varchar(255) NOT NULL,
  `permanent_address` varchar(255) NOT NULL,
  `temprory_address` varchar(255) NOT NULL,
  `img_path` varchar(255) DEFAULT NULL,
  `rights` varchar(20) DEFAULT NULL,
  `notification_count` int(11) DEFAULT '0',
  `onLeave` tinyint(4) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `email`, `contact`, `dob`, `category`, `status`, `date`, `time`, `permanent_address`, `temprory_address`, `img_path`, `rights`, `notification_count`, `onLeave`) VALUES
(1, 'Ankit Sharma', 'ankit', 'newadmin', 'admin@wtsolutions.cc', '7088457921', '1998-06-29', 'Director', 'Confirmed', '2019-04-23', '12:00pm', 'dehradun', 'dehradun', NULL, 'admin', 64, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leave_employee`
--
ALTER TABLE `leave_employee`
  ADD PRIMARY KEY (`leave_id`);

--
-- Indexes for table `Notice`
--
ALTER TABLE `Notice`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`task_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(33) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `leave_employee`
--
ALTER TABLE `leave_employee`
  MODIFY `leave_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `Notice`
--
ALTER TABLE `Notice`
  MODIFY `notice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
