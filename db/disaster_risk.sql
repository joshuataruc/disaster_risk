-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2021 at 05:44 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `disaster_risk`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `date_of_birth` varchar(20) NOT NULL,
  `cont_num` varchar(15) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `created_at` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `fname`, `mname`, `lname`, `username`, `date_of_birth`, `cont_num`, `address`, `password`, `created_at`) VALUES
(2, 'admin', 'admin', 'admin', 'admin', '0015-11-18', '09667615561', 'san jose', '0cc175b9c0f1b6a831c399e269772661', '2021/10/30 10:31:15 '),
(3, 'joshua', '', 'taruc', 'imtaruc25', '1998-10-04', '09667615561', 'san jose tarlac city', '793a24b8af7505fd68ffe2bf8dcdceec', '2021/10/31 02:45:57 '),
(5, 'b', 'b', 'b', 'b', '2021-10-09', '1', 'b', '92eb5ffee6ae2fec3ad71c777531578f', '2021/10/31 06:02:38 ');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `event_title` varchar(50) NOT NULL,
  `event_details` varchar(255) NOT NULL,
  `event_date` varchar(15) NOT NULL,
  `event_time` varchar(15) NOT NULL,
  `event_organizer` varchar(50) NOT NULL,
  `created_at` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_title`, `event_details`, `event_date`, `event_time`, `event_organizer`, `created_at`) VALUES
(4, 'title', 'details', '2021-11-24', '15:55', 'organizer', '2021/11/16 04:45:04 pm'),
(5, 'webinar2', '  firefight webinar', '2021-11-16', '08:30', 'san manuel firefighters', '2021/11/16 05:18:06 pm'),
(6, 'fire protection', 'fire protection details', '2021-11-16', '00:00', 'firemens', '2021/11/16 05:30:55 pm');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `notif_id` int(11) NOT NULL,
  `sender_id` varchar(50) NOT NULL,
  `sender_fname` varchar(50) NOT NULL,
  `sender_lname` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `sender_contact_num` varchar(15) NOT NULL,
  `sos_type` varchar(50) NOT NULL,
  `created_at` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`notif_id`, `sender_id`, `sender_fname`, `sender_lname`, `address`, `sender_contact_num`, `sos_type`, `created_at`) VALUES
(29, '2', 'test', 'test', 'test address', '2252525', 'Crime Emergency', '2021/10/30 10:53:01 pm'),
(30, '2', 'test', 'test', 'test address', '2252525', 'Medical Emergency', '2021/10/30 10:53:03 pm'),
(31, '2', 'test', 'test', 'test address', '2252525', 'Medical Emergency', '2021/10/30 10:53:04 pm'),
(32, '2', 'test', 'test', 'test address', '2252525', 'Medical Emergency', '2021/10/30 10:53:17 pm'),
(33, '2', 'test', 'test', 'test address', '2252525', 'Medical Emergency', '2021/10/30 10:53:44 pm'),
(35, '2', 'test', 'test', 'test address', '2252525', 'Barangay Emergency', '2021/10/30 11:50:35 pm'),
(36, '2', 'test', 'test', 'test address', '2252525', 'Crime Emergency', '2021/10/31 01:08:05 pm');

-- --------------------------------------------------------

--
-- Table structure for table `sos_reports`
--

CREATE TABLE `sos_reports` (
  `report_id` int(11) NOT NULL,
  `sender_id` varchar(50) NOT NULL,
  `sender_fname` varchar(50) NOT NULL,
  `sender_lname` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `sender_contact_num` varchar(15) NOT NULL,
  `sos_type` varchar(50) NOT NULL,
  `responded_by` varchar(20) NOT NULL,
  `current_location` varchar(255) NOT NULL,
  `created_at` varchar(25) NOT NULL,
  `time_responded` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sos_reports`
--

INSERT INTO `sos_reports` (`report_id`, `sender_id`, `sender_fname`, `sender_lname`, `address`, `sender_contact_num`, `sos_type`, `responded_by`, `current_location`, `created_at`, `time_responded`) VALUES
(2, '2', 'test', 'test', 'test address', '2252525', 'Crime Emergency', '3', '', '2021/10/30 10:47:09 pm', '03:42:28 pm'),
(3, '2', 'test', 'test', 'test address', '2252525', 'Barangay Emergency', '3', '', '2021/10/30 10:49:40 pm', '03:43:30 pm'),
(4, '2', 'test', 'test', 'test address', '2252525', 'Barangay Emergency', '3', '', '2021/10/30 10:50:03 pm', '10:46:00 pm'),
(5, '2', 'test', 'test', 'test address', '2252525', 'Medical Emergency', '3', '', '2021/10/30 10:52:01 pm', '11:04:38 pm'),
(6, '2', 'test', 'test', 'test address', '2252525', 'Medical Emergency', '3', '', '2021/11/01 09:33:20 pm', '11:08:56 pm'),
(7, '2', 'test', 'test', 'test address', '2252525', 'Fire Emergency', '3', '', '2021/10/30 10:53:57 pm', '11:14:35 pm');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `date_of_birth` varchar(20) NOT NULL,
  `cont_num` varchar(15) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `created_at` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fname`, `mname`, `lname`, `username`, `date_of_birth`, `cont_num`, `address`, `password`, `created_at`) VALUES
(2, 'test', 'test', 'test', 'test', '1998-10-04', '2252525', 'test address', '098f6bcd4621d373cade4e832627b4f6', '2021/10/28 03:09:51 '),
(3, 'user', 'user', 'user', 'user', '2021-10-08', '54151454151', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', '2021/10/30 11:30:32 ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`notif_id`);

--
-- Indexes for table `sos_reports`
--
ALTER TABLE `sos_reports`
  ADD PRIMARY KEY (`report_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `notif_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `sos_reports`
--
ALTER TABLE `sos_reports`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
