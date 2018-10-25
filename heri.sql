-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2018 at 03:16 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `heri`
--

-- --------------------------------------------------------

--
-- Table structure for table `description`
--

CREATE TABLE `description` (
  `packageid` int(11) NOT NULL,
  `desctriptionid` int(11) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `description`
--

INSERT INTO `description` (`packageid`, `desctriptionid`, `description`) VALUES
(30, 1, 'sdgfdsadsd'),
(30, 2, 'gssadadg'),
(42, 3, 'dsafsd'),
(44, 4, 'dsad'),
(45, 5, 'dsad'),
(46, 6, 'dsad'),
(47, 7, 'dsad'),
(48, 8, 'sam'),
(49, 9, 'SUI[PPE'),
(50, 10, 'SAD'),
(51, 11, 'dsa'),
(52, 12, 'dsa'),
(53, 13, 'dsa'),
(54, 14, 'sda'),
(55, 15, 'sda'),
(56, 16, 'sda'),
(57, 17, 'varakil h'),
(57, 18, 'kulapparachal po'),
(57, 19, 'kuruvilacity'),
(58, 20, 'one'),
(58, 21, 'two'),
(59, 22, 'one'),
(59, 23, 'two');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `pacakgeid` int(11) NOT NULL,
  `tittle` varchar(200) NOT NULL,
  `imageurl` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`pacakgeid`, `tittle`, `imageurl`) VALUES
(57, 'Saneesh vs', ''),
(58, 'sam', ''),
(59, 'sam', '');

-- --------------------------------------------------------

--
-- Table structure for table `package_items`
--

CREATE TABLE `package_items` (
  `packageitemid` int(11) NOT NULL,
  `packageid` int(11) NOT NULL,
  `packagetittle` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package_items`
--

INSERT INTO `package_items` (`packageitemid`, `packageid`, `packagetittle`) VALUES
(5, 30, 'gdssddg'),
(6, 30, 'ssdsgdsg'),
(7, 42, ''),
(8, 44, ''),
(9, 45, ''),
(10, 46, ''),
(11, 47, ''),
(12, 48, ''),
(13, 49, ''),
(14, 50, 'DSA'),
(15, 51, 'dsa'),
(16, 52, 'dsa'),
(17, 53, 'dsa'),
(18, 54, ''),
(19, 55, ''),
(20, 56, ''),
(21, 57, 'details'),
(22, 57, 'more details'),
(23, 57, 'more more details'),
(24, 58, 'three'),
(25, 58, 'four'),
(26, 59, 'three'),
(27, 59, 'four');

-- --------------------------------------------------------

--
-- Table structure for table `roomdetails`
--

CREATE TABLE `roomdetails` (
  `roomid` int(11) NOT NULL,
  `packageid` int(11) NOT NULL,
  `roomdetails` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roomdetails`
--

INSERT INTO `roomdetails` (`roomid`, `packageid`, `roomdetails`) VALUES
(1, 30, 'dasdsa'),
(2, 30, 'dsadsa'),
(3, 42, ''),
(4, 44, ''),
(5, 45, ''),
(6, 46, ''),
(7, 47, ''),
(8, 48, ''),
(9, 49, ''),
(10, 50, 'DSA'),
(11, 51, 'sda'),
(12, 52, 'sda'),
(13, 53, 'sda'),
(14, 54, ''),
(15, 55, ''),
(16, 56, ''),
(17, 57, 'Room details '),
(18, 57, 'Room details'),
(19, 57, 'more room details'),
(20, 58, 'five'),
(21, 58, 'six'),
(22, 59, 'five'),
(23, 59, 'six');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_images`
--

CREATE TABLE `tbl_images` (
  `imageId` int(200) NOT NULL,
  `imagrUrl` varchar(400) NOT NULL,
  `imageposition` int(200) NOT NULL,
  `imageDescription` varchar(400) NOT NULL,
  `lastdate` varchar(200) NOT NULL,
  `category_field` varchar(200) NOT NULL,
  `imageName` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_images`
--

INSERT INTO `tbl_images` (`imageId`, `imagrUrl`, `imageposition`, `imageDescription`, `lastdate`, `category_field`, `imageName`) VALUES
(81, 'uploads/g1.jpg', 4, 'g1', '2018/09/18', '1', 'g1.jpg'),
(107, 'uploads/g2.jpg', 10, '', '2018/09/18', '1', 'g2.jpg'),
(108, 'uploads/g4.jpg', 11, '', '2018/09/18', '1', 'g4.jpg'),
(109, 'uploads/g3.jpg', 2, '', '2018/09/18', '1', 'g3.jpg'),
(110, 'uploads/g5.jpg', 3, '', '2018/09/18', '1', 'g5.jpg'),
(111, 'uploads/g6.jpg', 12, '', '2018/09/18', '1', 'g6.jpg'),
(112, 'uploads/g7.jpg', 7, '', '2018/09/18', '1', 'g7.jpg'),
(113, 'uploads/g8.jpg', 13, '', '2018/09/18', '1', 'g8.jpg'),
(114, 'uploads/g9.jpg', 14, '', '2018/09/18', '1', 'g9.jpg'),
(115, 'uploads/g10.jpg', 15, '', '2018/09/18', '1', 'g10.jpg'),
(116, 'uploads/g11.jpg', 16, '', '2018/09/18', '1', 'g11.jpg'),
(117, 'uploads/g12.jpg', 17, '', '2018/09/18', '1', 'g12.jpg'),
(118, 'uploads/g13.jpg', 18, '', '2018/09/18', '1', 'g13.jpg'),
(119, 'uploads/g14.jpg', 19, '', '2018/09/18', '1', 'g14.jpg'),
(120, 'uploads/g15.jpg', 20, '', '2018/09/18', '1', 'g15.jpg'),
(129, 'uploads/kala1.jpg', 21, '', '2018/09/18', '2', 'kala1.jpg'),
(130, 'uploads/kala3.jpg', 23, '', '2018/09/18', '2', 'kala3.jpg'),
(131, 'uploads/kala2.jpg', 22, '', '2018/09/18', '2', 'kala2.jpg'),
(132, 'uploads/kala5.jpg', 24, '', '2018/09/18', '2', 'kala5.jpg'),
(133, 'uploads/kala6.jpg', 25, '', '2018/09/18', '2', 'kala6.jpg'),
(134, 'uploads/kala8.jpg', 26, '', '2018/09/18', '2', 'kala8.jpg'),
(135, 'uploads/kala9.jpg', 27, '', '2018/09/18', '2', 'kala9.jpg'),
(136, 'uploads/kala72.jpg', 28, '', '2018/09/18', '2', 'kala72.jpg'),
(139, 'uploads/IMG_1722.JPG', 5, '', '2018/09/18', '1', 'IMG_1722.JPG'),
(140, 'uploads/IMG_1792.JPG', 6, '', '2018/09/18', '1', 'IMG_1792.JPG'),
(141, 'uploads/IMG_1795.JPG', 8, '', '2018/09/18', '1', 'IMG_1795.JPG'),
(142, 'uploads/IMG_1782.JPG', 1, '', '2018/09/18', '1', 'IMG_1782.JPG'),
(143, 'uploads/IMG_1734.JPG', 9, '', '2018/09/20', '1', 'IMG_1734.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `uploadimages`
--

CREATE TABLE `uploadimages` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(100) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `description`
--
ALTER TABLE `description`
  ADD PRIMARY KEY (`desctriptionid`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`pacakgeid`);

--
-- Indexes for table `package_items`
--
ALTER TABLE `package_items`
  ADD PRIMARY KEY (`packageitemid`);

--
-- Indexes for table `roomdetails`
--
ALTER TABLE `roomdetails`
  ADD PRIMARY KEY (`roomid`);

--
-- Indexes for table `tbl_images`
--
ALTER TABLE `tbl_images`
  ADD PRIMARY KEY (`imageId`);

--
-- Indexes for table `uploadimages`
--
ALTER TABLE `uploadimages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `description`
--
ALTER TABLE `description`
  MODIFY `desctriptionid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `pacakgeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `package_items`
--
ALTER TABLE `package_items`
  MODIFY `packageitemid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `roomdetails`
--
ALTER TABLE `roomdetails`
  MODIFY `roomid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_images`
--
ALTER TABLE `tbl_images`
  MODIFY `imageId` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT for table `uploadimages`
--
ALTER TABLE `uploadimages`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
