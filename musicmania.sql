-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2019 at 05:08 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `musicmania`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `regid` int(11) NOT NULL,
  `regname` varchar(100) NOT NULL,
  `regemail` varchar(100) NOT NULL,
  `regpass` varchar(100) NOT NULL,
  `regmob` bigint(20) NOT NULL,
  `regtype` varchar(50) NOT NULL,
  `regstatus` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`regid`, `regname`, `regemail`, `regpass`, `regmob`, `regtype`, `regstatus`) VALUES
(1, 'Navneet Kaur Sekhon', 'nkaur@gmail.com', 'nkaur', 1234567890, 'admin', 'Active'),
(2, 'Navneet Kaur Sekhon', 'nkaur1@gmail.com', 'nkaur1', 1234567890, 'user', 'Active'),
(3, 'Navneet Kaur Sekhon', 'nkaur2@gmail.com', 'nkaur2', 1234567890, 'user', 'Active'),
(4, 'Navneet Kaur Sekhon', 'nkaur3@gmail.com', 'nkaur3', 1234567890, 'moderator', 'Approve'),
(5, 'Gagan MArken', 'gaganmarken1990@live.com', '1234', 9988910115, 'moderator', 'Approve'),
(6, 'Gagan MArken', 'gaganmarken19901@live.com', '', 9988910115, 'user', 'Active'),
(7, 'Gagan MArken', 'gaganmarken1@live.com', '1234', 9988910115, 'moderator', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbsongs`
--

CREATE TABLE `tbsongs` (
  `song_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `song_title` varchar(100) NOT NULL,
  `song_image` varchar(500) NOT NULL,
  `song` varchar(500) NOT NULL,
  `song_type` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbsongs`
--

INSERT INTO `tbsongs` (`song_id`, `email`, `song_title`, `song_image`, `song`, `song_type`, `status`) VALUES
(2, '', 'Breakup', 'insta.jpg', 'Breakup_1.mp3', 'mp3', 'Active'),
(7, '', 'Valentines_Special', '2.jpeg', 'Breakup_2.mp3', 'mp3', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`regid`),
  ADD UNIQUE KEY `email` (`regemail`);

--
-- Indexes for table `tbsongs`
--
ALTER TABLE `tbsongs`
  ADD PRIMARY KEY (`song_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `regid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbsongs`
--
ALTER TABLE `tbsongs`
  MODIFY `song_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
