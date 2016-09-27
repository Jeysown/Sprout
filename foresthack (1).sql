-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2016 at 03:36 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `foresthack`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
`event_id` int(11) NOT NULL,
  `ifDone` int(11) NOT NULL,
  `event_code` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `ifDone`, `event_code`) VALUES
(1, 0, 'KTRJS5');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE IF NOT EXISTS `report` (
`id` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `latitude` varchar(25) NOT NULL,
  `longitude` varchar(25) NOT NULL,
  `status` varchar(11) NOT NULL,
  `report_date` varchar(20) NOT NULL,
  `report_time` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `message`, `latitude`, `longitude`, `status`, `report_date`, `report_time`) VALUES
(1, 'A lot of new trees are growing', '15.0929081', '121.0613609', 'Safe', '2016', '10:34'),
(2, 'Trees are being cut down', '14.8740942', '121.1427638', 'Warning', '2015', '1:25'),
(3, 'I really enjoyed trekking in the Philippines', '14.760122', '121.2003971', 'Safe', '2012', '9:49'),
(4, 'There''s a forest fire!', '14.5772737', '121.0857342', 'Danger', '2015', '8:52');

-- --------------------------------------------------------

--
-- Table structure for table `trees`
--

CREATE TABLE IF NOT EXISTS `trees` (
`tree_id` int(11) NOT NULL,
  `tree_name` varchar(255) NOT NULL,
  `tree_pic` varchar(255) NOT NULL,
  `tree_pic_lock` varchar(255) NOT NULL,
  `point` int(11) NOT NULL,
  `ifLock` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trees`
--

INSERT INTO `trees` (`tree_id`, `tree_name`, `tree_pic`, `tree_pic_lock`, `point`, `ifLock`) VALUES
(1, 'Coconut', 'trees/icons_1.png', 'trees/icons_question_mark.png', 20, 0),
(2, 'Mangrove', 'trees/icons_2.png', 'trees/icons_question_mark.png', 30, 0),
(3, 'Pineapple', 'trees/icons_3.png', 'trees/icons_question_mark.png', 50, 0),
(4, 'Lollipop Tree', 'trees/icons_4.png', 'trees/icons_question_mark.png', 60, 0),
(5, 'Fire Tree', 'trees/icons_5.png', 'trees/icons_question_mark.png', 70, 0),
(6, 'Flower Tree', 'trees/icons_6.png', 'trees/icons_question_mark.png', 90, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
 ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trees`
--
ALTER TABLE `trees`
 ADD PRIMARY KEY (`tree_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `trees`
--
ALTER TABLE `trees`
MODIFY `tree_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
