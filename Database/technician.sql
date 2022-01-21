-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2020 at 08:05 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `technician`
--

-- --------------------------------------------------------

--
-- Table structure for table `ac`
--

CREATE TABLE `ac` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `district` varchar(20) NOT NULL,
  `police_station` varchar(20) NOT NULL,
  `pin` int(10) NOT NULL,
  `phone` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ac`
--

INSERT INTO `ac` (`id`, `name`, `sex`, `district`, `police_station`, `pin`, `phone`) VALUES
(1, 'Ram Rauat', 'Male', 'Howrah', 'Uluberia', 711340, 2147483647),
(2, 'Raja Barman', 'Male', 'Kolkata', 'Barabazar', 711341, 2147483647),
(3, 'Varat Dey', 'Male', 'North 24 pgs', 'Baeackpore', 711342, 2147483647),
(4, 'Rahul Mondal', 'Male', 'South 24 pgs', 'Mahestala', 711343, 2147483647),
(5, 'Uttam Ghara', 'Male', 'Hoogly', 'Bandor', 711344, 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'giri', '11111');

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`id`, `username`, `password`) VALUES
(1, 'giri@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(10) NOT NULL,
  `uid` int(10) NOT NULL,
  `fieldid` int(10) NOT NULL,
  `techid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `uid`, `fieldid`, `techid`) VALUES
(1, 1, 0, 1),
(2, 1, 0, 1),
(3, 1, 0, 1),
(4, 1, 0, 1),
(5, 1, 0, 1),
(6, 1, 0, 1),
(7, 1, 0, 1),
(8, 1, 0, 1),
(9, 1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `electrical`
--

CREATE TABLE `electrical` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `district` varchar(20) NOT NULL,
  `police_station` varchar(20) NOT NULL,
  `pin` int(10) NOT NULL,
  `phone` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `electrical`
--

INSERT INTO `electrical` (`id`, `name`, `sex`, `district`, `police_station`, `pin`, `phone`) VALUES
(1, 'Ram Rauat', 'Male', 'Howrah', 'Uluberia', 711340, 2147483647),
(2, 'Raja Barman', 'Male', 'Kolkata', 'Barabazar', 711341, 2147483647),
(3, 'Varat Dey', 'Male', 'North 24 pgs', 'Baeackpore', 711342, 2147483647),
(4, 'Rahul Mondal', 'Male', 'South 24 pgs', 'Mahestala', 711343, 2147483647),
(5, 'Uttam Ghara', 'Male', 'Hoogly', 'Bandor', 711344, 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `electronics`
--

CREATE TABLE `electronics` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `district` varchar(20) NOT NULL,
  `police_station` varchar(20) NOT NULL,
  `pin` int(10) NOT NULL,
  `phone` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `electronics`
--

INSERT INTO `electronics` (`id`, `name`, `sex`, `district`, `police_station`, `pin`, `phone`) VALUES
(1, 'Ram Rauat', 'Male', 'Howrah', 'Uluberia', 711340, 2147483647),
(2, 'Raja Barman', 'Male', 'Kolkata', 'Barabazar', 711341, 2147483647),
(3, 'Varat Dey', 'Male', 'North 24 pgs', 'Baeackpore', 711342, 2147483647),
(4, 'Rahul Mondal', 'Male', 'South 24 pgs', 'Mahestala', 711343, 2147483647),
(5, 'Uttam Ghara', 'Male', 'Hoogly', 'Bandor', 711344, 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `fridge`
--

CREATE TABLE `fridge` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `district` varchar(20) NOT NULL,
  `police_station` varchar(20) NOT NULL,
  `pin` int(10) NOT NULL,
  `phone` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fridge`
--

INSERT INTO `fridge` (`id`, `name`, `sex`, `district`, `police_station`, `pin`, `phone`) VALUES
(1, 'Ram Rauat', 'Male', 'Howrah', 'Uluberia', 711340, 2147483647),
(2, 'Raja Barman', 'Male', 'Kolkata', 'Barabazar', 711341, 2147483647),
(3, 'Varat Dey', 'Male', 'North 24 pgs', 'Baeackpore', 711342, 2147483647),
(4, 'Rahul Mondal', 'Male', 'South 24 pgs', 'Mahestala', 711343, 2147483647),
(5, 'Uttam Ghara', 'Male', 'Hoogly', 'Bandor', 711344, 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `pc`
--

CREATE TABLE `pc` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `district` varchar(20) NOT NULL,
  `police_station` varchar(20) NOT NULL,
  `pin` int(10) NOT NULL,
  `phone` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pc`
--

INSERT INTO `pc` (`id`, `name`, `sex`, `district`, `police_station`, `pin`, `phone`) VALUES
(1, 'Ram Rauat', 'Male', 'Howrah', 'Uluberia', 711340, 2147483647),
(2, 'Raja Barman', 'Male', 'Kolkata', 'Barabazar', 711341, 2147483647),
(3, 'Varat Dey', 'Male', 'North 24 pgs', 'Baeackpore', 711342, 2147483647),
(4, 'Rahul Mondal', 'Male', 'South 24 pgs', 'Mahestala', 711343, 2147483647),
(5, 'Uttam Ghara', 'Male', 'Hoogly', 'Bandor', 711344, 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `plumbing`
--

CREATE TABLE `plumbing` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `district` varchar(20) NOT NULL,
  `police_station` varchar(20) NOT NULL,
  `pin` int(10) NOT NULL,
  `phone` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plumbing`
--

INSERT INTO `plumbing` (`id`, `name`, `sex`, `district`, `police_station`, `pin`, `phone`) VALUES
(1, 'Ram Rauat', 'Male', 'Howrah', 'Uluberia', 711340, 2147483647),
(2, 'Raja Barman', 'Male', 'Kolkata', 'Barabazar', 711341, 2147483647),
(3, 'Varat Dey', 'Male', 'North 24 pgs', 'Baeackpore', 711342, 2147483647),
(4, 'Rahul Mondal', 'Male', 'South 24 pgs', 'Mahestala', 711343, 2147483647),
(5, 'Uttam Ghara', 'Male', 'Hoogly', 'Bandor', 711344, 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `technicians`
--

CREATE TABLE `technicians` (
  `id` int(10) NOT NULL,
  `field` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `technicians`
--

INSERT INTO `technicians` (`id`, `field`) VALUES
(1, 'electrical'),
(2, 'electronics'),
(3, 'pc'),
(4, 'ac'),
(5, 'fridge'),
(6, 'plumbing');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `district` varchar(20) NOT NULL,
  `police_station` varchar(20) NOT NULL,
  `pin` int(10) NOT NULL,
  `phone` int(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `sex`, `district`, `police_station`, `pin`, `phone`, `email`, `password`) VALUES
(1, 'Girinath', 'Pandit', 'Male', 'Howrah', 'Uluberia', 711340, 26210029, 'giri@gmail.com', '11111'),
(2, 'Ayan', 'Panjal', 'Male', 'South 24 pgs', 'Mahestala', 711343, 26210030, 'ayan@panjal.com', '22222'),
(3, 'Debjit', 'Ghosh', 'Male', 'Kolkata', 'Barabazar', 711341, 26210031, 'debjit@gmail.com', '33333'),
(4, 'Souptick', 'Chakrobarty', 'Male', 'North 24 pgs', 'Baeackpore', 711342, 26210033, 'souptick@gmail.com', '44444'),
(5, 'Sourav', 'Dhara', 'Male', 'Hoogly', 'Bandor', 711344, 26210034, 'sourav@gmail.com', '55555');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ac`
--
ALTER TABLE `ac`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `electronics`
--
ALTER TABLE `electronics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fridge`
--
ALTER TABLE `fridge`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pc`
--
ALTER TABLE `pc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plumbing`
--
ALTER TABLE `plumbing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `technicians`
--
ALTER TABLE `technicians`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ac`
--
ALTER TABLE `ac`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `electronics`
--
ALTER TABLE `electronics`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `fridge`
--
ALTER TABLE `fridge`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pc`
--
ALTER TABLE `pc`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `plumbing`
--
ALTER TABLE `plumbing`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `technicians`
--
ALTER TABLE `technicians`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
