-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 14, 2015 at 05:00 AM
-- Server version: 5.5.44-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `travelmy_travelmynepal`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `username`, `password`, `active`) VALUES
(5, 'Suman', '21232f297a57a5a743894a0e4a801fc3', 1),
(9, 'sumi', 'suman', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE IF NOT EXISTS `tbl_contact` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fname` varchar(80) NOT NULL,
  `lname` varchar(90) NOT NULL,
  `email` varchar(80) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `message` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `fname`, `lname`, `email`, `phone`, `message`) VALUES
(1, 'Suman', 'Suman', 'sumn2u@hotmail.com', '9808231638', 'Well come Suman !'),
(2, 'Frank', 'Frank', 'franklampard@hotmail.com', '567576867', 'Well must be done !'),
(3, 'Suman', 'Suman', 'sumn2u@hotmail.com', '9808231638', 'tHIS IS ATEST'),
(4, 'ana', 'ana', 'frarkot@gmail.com', '123456789', 'Hello, I want work for you, if you need someone"ork for you?');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_image`
--

CREATE TABLE IF NOT EXISTS `tbl_image` (
  `img_id` int(5) NOT NULL AUTO_INCREMENT,
  `img_name` varchar(50) NOT NULL,
  `img_title` varchar(50) NOT NULL,
  `banner_desc` text NOT NULL,
  `img_created` date NOT NULL,
  PRIMARY KEY (`img_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_image`
--

INSERT INTO `tbl_image` (`img_id`, `img_name`, `img_title`, `banner_desc`, `img_created`) VALUES
(1, 'banner1.jpg', 'Poon hill', '', '2015-05-02'),
(2, 'banner2.png', 'arround annapurna', '', '2015-05-02'),
(3, 'banner3.jpg', 'arround dun valley', '', '2015-05-02'),
(4, 'banner4.jpg', 'everest expedition', '', '2015-05-02');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_include_exclude`
--

CREATE TABLE IF NOT EXISTS `tbl_include_exclude` (
  `id` int(60) NOT NULL AUTO_INCREMENT,
  `cat_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `include_exclude` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_include_exclude`
--

INSERT INTO `tbl_include_exclude` (`id`, `cat_id`, `name`, `include_exclude`) VALUES
(3, '1', 'toast', 'exclude'),
(4, '1', 'rampak', 'include'),
(5, '1', 'champak', 'include'),
(7, '1', 'pasta', 'exclude');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_item`
--

CREATE TABLE IF NOT EXISTS `tbl_item` (
  `ad_id` int(11) NOT NULL AUTO_INCREMENT,
  `ad_cat` varchar(255) NOT NULL,
  `ad_title` varchar(255) NOT NULL,
  `ad_desc` text NOT NULL,
  `ad_image` varchar(500) NOT NULL,
  `ad_views` int(255) NOT NULL,
  `ad_created` date NOT NULL,
  `publish` int(11) NOT NULL,
  PRIMARY KEY (`ad_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_item`
--

INSERT INTO `tbl_item` (`ad_id`, `ad_cat`, `ad_title`, `ad_desc`, `ad_image`, `ad_views`, `ad_created`, `publish`) VALUES
(1, 'Trekking', 'Poon Hill', '<p>&nbsp;<strong>Annapurna Base Camp</strong> Trek combines some of the most spectacular mountain scenery and fascinating insights into the lives of people in the Himalaya.</p>\r\n\r\n<p>It is</p>\r\n', 'himal.jpg', 0, '2015-04-18', 1),
(2, 'Trekking', 'Ghorepani Trek ', '<p>Ghorepani is most famous for Europen people who wants to trek for short time.</p>\r\n', 'Island_Peak.jpg', 0, '2015-04-12', 1),
(3, 'Recommendation ', 'Potala Trek', '<p>This is a recommendation page where we can do recommendation.</p>\r\n', 'Potala.jpg', 0, '2015-05-02', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE IF NOT EXISTS `tbl_news` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `newstitle` varchar(255) NOT NULL,
  `newsdesc` text NOT NULL,
  `status` int(2) NOT NULL,
  `newsdate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE IF NOT EXISTS `tbl_order` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `cat_id` int(25) NOT NULL,
  `quantity` int(25) NOT NULL,
  `table_id` int(11) NOT NULL,
  `item_id` int(25) NOT NULL,
  `order_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `cat_id`, `quantity`, `table_id`, `item_id`, `order_name`) VALUES
(1, 1, 5, 1, 1, 'oreder_firstxx');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_package`
--

CREATE TABLE IF NOT EXISTS `tbl_package` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(255) NOT NULL,
  `cat_image` varchar(255) DEFAULT NULL,
  `publish` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `tbl_package`
--

INSERT INTO `tbl_package` (`id`, `cat_name`, `cat_image`, `publish`) VALUES
(1, 'Pizza', 'Potala.jpg', 1),
(3, 'Nepal Best Seller Trips', 'Potala.jpg', 1),
(4, 'Special Private Tour', 'Potala.jpg', 1),
(5, 'Adventure holidays in nepal', '', 1),
(6, 'Places of interest in Nepal', '', 1),
(7, 'Deals And Offers', '', 1),
(8, 'Festival Tour', '', 1),
(9, 'Test', '', 1),
(10, 'desrt', '', 1),
(11, 'desrt', '', 1),
(12, 'desss', '', 1),
(13, 'desst', 'suj.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pages`
--

CREATE TABLE IF NOT EXISTS `tbl_pages` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `pagetitle` varchar(255) NOT NULL,
  `pagename` varchar(255) NOT NULL,
  `pagedesc` text NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_suscribe`
--

CREATE TABLE IF NOT EXISTS `tbl_suscribe` (
  `contact_id` int(5) NOT NULL AUTO_INCREMENT,
  `contact_name` varchar(20) NOT NULL,
  `contact_email` varchar(50) NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_suscribe`
--

INSERT INTO `tbl_suscribe` (`contact_id`, `contact_name`, `contact_email`) VALUES
(2, 'suman', 'sumn2u@hotmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_table`
--

CREATE TABLE IF NOT EXISTS `tbl_table` (
  `id` int(24) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_table`
--

INSERT INTO `tbl_table` (`id`, `name`, `status`) VALUES
(1, 'Table on', 1),
(2, 'Tables 2', 1),
(3, 'Tables 3', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_trip_planner`
--

CREATE TABLE IF NOT EXISTS `tbl_trip_planner` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `grp_leader_info` text NOT NULL,
  `tour_specification` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_trip_planner`
--

INSERT INTO `tbl_trip_planner` (`id`, `grp_leader_info`, `tour_specification`) VALUES
(1, 'My name is  of 1 belonging to 1 of 1 ,my contact number is 1 fax 1 email is 1 .', 'I want to plan a trip 1 between 1 - 1 will going to  1 we are 1 , accomodation 1 and our meals breakfast and the budget will be 1 per person and special feature is 1 .');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
