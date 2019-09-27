-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2019 at 02:03 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `north`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'Test@123');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `categoryName` varchar(255) DEFAULT NULL,
  `categoryDescription` varchar(255) DEFAULT NULL,
  `creationDate` timestamp NULL DEFAULT NULL,
  `updationDate` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `categoryName`, `categoryDescription`, `creationDate`, `updationDate`) VALUES
(1, 'Residencial ', 'Bunglows,Flats ', NULL, NULL),
(2, 'Commercial', 'Offices,shops,', NULL, NULL),
(13, 'book', 'this is book', NULL, NULL),
(16, 'book', 'this is book', NULL, NULL),
(19, 'Commercial', 'Comercial Program', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `imgtable`
--

CREATE TABLE `imgtable` (
  `imgid` int(11) NOT NULL,
  `imglocation1` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `imgtable`
--

INSERT INTO `imgtable` (`imgid`, `imglocation1`, `title`) VALUES
(1, 'Admin/upload/IMG_20190818_114604_Bokeh.jpg', 'first'),
(2, 'Admin/upload/IMG_20190818_114604_Bokeh.jpg', 'The Interior design.'),
(3, 'Admin/upload/IMG_20190818_114256.jpg', 'The Interior design.'),
(4, 'Admin/upload/IMG_20190804_110119.jpg', 'The Interior design.'),
(5, 'Admin/upload/IMG_20190824_170919.jpg', 'The Interior design.'),
(6, 'Admin/upload/IMG_20190824_170840.jpg', 'The Interior design.'),
(7, 'Admin/upload/14.jpg', ''),
(8, 'Admin/upload/02.jpg', ''),
(9, 'Admin/upload/06.jpg', ''),
(10, '', ''),
(11, 'Admin/upload/IMG_20190818_113802-min.jpg', ''),
(12, 'Admin/upload/IMG_20190818_114214-min.jpg', ''),
(13, 'Admin/upload/IMG_20190818_114030-min.jpg', ''),
(14, 'Admin/upload/IMG_20190818_114244-min.jpg', ''),
(15, 'Admin/upload/IMG_20190818_114315-min.jpg', ''),
(16, 'Admin/upload/IMG_20190818_114401_Bokeh-min.jpg', ''),
(17, 'Admin/upload/IMG_20190818_114550_Bokeh-min.jpg', ''),
(18, 'Admin/upload/IMG_20190818_114604_Bokeh-min.jpg', ''),
(19, 'Admin/upload/IMG_20190818_114544_Bokeh-min.jpg', ''),
(20, 'Admin/upload/IMG_20190818_114256-min.jpg', ''),
(21, 'Admin/upload/04-min.jpg', ''),
(22, 'Admin/upload/07.jpg', ''),
(23, 'Admin/upload/34-min.jpg', ''),
(24, 'Admin/upload/16-min.jpg', ''),
(25, 'Admin/upload/02-min.jpg', ''),
(26, 'Admin/upload/20-min.jpg', ''),
(27, 'Admin/upload/12-min.jpg', ''),
(28, 'Admin/upload/28-min.jpg', ''),
(29, 'Admin/upload/07.jpg', ''),
(30, 'Admin/upload/21.jpg', ''),
(31, '', NULL),
(32, '', NULL),
(33, '', NULL),
(34, '', NULL),
(35, '', NULL),
(36, 'a', NULL),
(37, 'a', NULL),
(38, 'a', NULL),
(39, 'a', NULL),
(40, 'a', NULL),
(41, 'a', NULL),
(42, 'a', NULL),
(43, 'a', NULL),
(44, 'a', NULL),
(45, 'a', NULL),
(46, 'a', NULL),
(47, 'a', NULL),
(48, 'a', NULL),
(49, 'a', NULL),
(50, 'a', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `productsdemo`
--

CREATE TABLE `productsdemo` (
  `id` int(11) NOT NULL,
  `category` int(11) DEFAULT NULL,
  `productname` varchar(255) DEFAULT NULL,
  `productimage1` varchar(255) DEFAULT NULL,
  `productimage2` varchar(255) DEFAULT NULL,
  `productimage3` varchar(255) DEFAULT NULL,
  `productimage4` varchar(255) DEFAULT NULL,
  `productimage5` varchar(255) DEFAULT NULL,
  `productimage6` varchar(255) DEFAULT NULL,
  `productimage7` varchar(255) DEFAULT NULL,
  `productimage8` varchar(255) DEFAULT NULL,
  `productimage9` varchar(255) DEFAULT NULL,
  `productimage10` varchar(255) DEFAULT NULL,
  `productimage11` varchar(255) DEFAULT NULL,
  `productimage12` varchar(255) DEFAULT NULL,
  `title1` varchar(255) DEFAULT NULL,
  `title2` varchar(255) DEFAULT NULL,
  `title3` varchar(255) DEFAULT NULL,
  `title4` varchar(255) DEFAULT NULL,
  `title5` varchar(255) DEFAULT NULL,
  `title6` varchar(255) DEFAULT NULL,
  `title7` varchar(255) DEFAULT NULL,
  `title8` varchar(255) DEFAULT NULL,
  `title9` varchar(255) DEFAULT NULL,
  `title10` varchar(255) DEFAULT NULL,
  `title11` varchar(255) DEFAULT NULL,
  `title12` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productsdemo`
--

INSERT INTO `productsdemo` (`id`, `category`, `productname`, `productimage1`, `productimage2`, `productimage3`, `productimage4`, `productimage5`, `productimage6`, `productimage7`, `productimage8`, `productimage9`, `productimage10`, `productimage11`, `productimage12`, `title1`, `title2`, `title3`, `title4`, `title5`, `title6`, `title7`, `title8`, `title9`, `title10`, `title11`, `title12`) VALUES
(9, 1, '', '01.jpg', '03.jpg', '08.jpg', '09.jpg', '23.jpg', '07.jpg', '14.jpg', '24.jpg', '025.jpg', '10.jpg', '', '', 'PORCH', 'Exterior', 'Living', 'Living', 'Bed  Room', 'Lobby', 'Courtyard', 'Double height court', 'Main Entry', 'Living', '', ''),
(11, 1, 'Patil Sanjay Pune', '02-min.jpg', '04-min.jpg', '07.jpg', '16-min.jpg', '18.jpg', '20-min.jpg', '21.jpg', '23-min.jpg', '27-min.jpg', '37-min.jpg', '12-min.jpg', '28-min.jpg', '', '', '', '', '', '', '', '', '', '', '', ''),
(12, 2, 'REI Yoga Studio Pune', '01.jpg', '02.jpg', '05.jpg', '06.jpg', '09.jpg', '10.jpg', '12.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(27, 2, 'Remix BAr', '03.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(28, 2, 'Remix BAr', '03.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(29, 1, 'Remix BAr', '01.jpg', '02.jpg', '03.jpg', '05.jpg', '07.jpg', '7.jpg', 'limaye.jpg', 'serv-18.jpg', 'serv-07.jpg', 'wap.jpeg', '30-min.jpg', '40-min.jpg', '', '', '', '', '', '', '', '', '', '', '', ''),
(24, 2, 'Remix BAr', '03.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(26, 2, 'Remix BAr', '03.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(25, 2, 'Remix BAr', '03.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(22, 2, 'Remix BAr', '02-min.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Bar ', '', '', '', '', '', '', '', '', '', '', ''),
(23, 2, 'Remix BAr', '03.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(30, 1, 'Remix BAr', '01.jpg', '02.jpg', '03.jpg', '05.jpg', '07.jpg', '7.jpg', 'limaye.jpg', 'serv-18.jpg', 'serv-07.jpg', 'wap.jpeg', '30-min.jpg', '40-min.jpg', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `rid` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `postdescription` varchar(255) NOT NULL,
  `postdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`rid`, `name`, `postdescription`, `postdate`) VALUES
(8, 'Mr. Sanjay Patil,  Kothrud, Pune', 'North Architects did a fantastic job for us start to finish. They have great taste and made wonderful choices while allowing us to be a part of the process in every decision. Every person who comes into our home gushes about the design. We would hire them', '2019-09-08 07:39:29'),
(6, 'Mrs. Pooja Teli,  Proprietor, M/s Pooja R. Teli & Co. Chartered Accountants.	', 'â€œWorking with North Architects has been a pleasure and a positive 			experience. We ended up with a home that is beautiful, functional 			and very unique.â€	', '2019-09-06 07:36:01'),
(9, 'Mr. Vivek Deshmukh  Director KHARE DESHMUKH & CO. 	Charted Accountants', 'North Architects Team is someone who not only have an incredible eye for detail but also has a great design sense. Their unique sense of design sets them apart from the rest. I highly recommend them and hope youâ€™ll be as pleased with them as we have. No', '2019-09-12 07:40:07'),
(10, 'Mr. Shriniwas Mene, Consultant, Infosys', 'They are professional in every sense of the word. Their work is 				extremely creative, innovative and individualized to reflect each 			clientâ€™s personal style. They can take a dull home and transition it 			towards a beautiful space in little or no ti', '2019-09-15 07:40:32'),
(11, 'Mrs. Pooja Teli,  Proprietor, M/s Pooja R. Teli & Co. Chartered Accountants', 'â€œWorking with North Architects has been a pleasure and a positive 			experience. We ended up with a home that is beautiful, functional 			and very unique.â€', '2019-09-18 07:41:15'),
(12, 'Deovrat and Shweta Deshmukh', 'I would like to highly recommend North Architects to anyone looking 		for a designer who they can trust to produce a beautiful result in 			their home. I first saw their work at a friendâ€™s home and was 				extremely impressed. I wanted to transform my l', '2019-09-18 07:41:59'),
(13, 'Ms. Sujata Mahajan, Proprietor, Masks and Packs Salon', 'I cannot describe with enough praise the high level of professionalism of 	this company. The main words that come to mind are availability, reliability, 	attention to details, great personal care, top class 	products and finishing 	touches. The whole hous', '2019-09-19 07:42:22'),
(14, 'Mr. Gopal Shewani, Wanowarie, PUNE', 'Just to say how pleased we are with all the work at our home. Right from the start your perception and attention to detail has been very professional and impressive.  ', '2019-09-19 07:42:46'),
(15, 'Santosh Kamble, Civil Engineer - PUNE', 'Simply the best. We have taken the services for our interior designing of our Home. They designed our house in a very modern way and in a very cost-effective manner. Would like to highly recommend for Bungalow interior designing or home interior designing', '2019-09-19 07:43:31');

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `id` int(11) NOT NULL,
  `AdminUserName` varchar(255) NOT NULL,
  `AdminEmailId` varchar(255) NOT NULL,
  `AdminPassword` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`id`, `AdminUserName`, `AdminEmailId`, `AdminPassword`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imgtable`
--
ALTER TABLE `imgtable`
  ADD PRIMARY KEY (`imgid`);

--
-- Indexes for table `productsdemo`
--
ALTER TABLE `productsdemo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `imgtable`
--
ALTER TABLE `imgtable`
  MODIFY `imgid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `productsdemo`
--
ALTER TABLE `productsdemo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `rid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
