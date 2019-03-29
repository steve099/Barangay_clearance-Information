-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2019 at 12:12 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barangay`
--

-- --------------------------------------------------------

--
-- Table structure for table `barangay1`
--

CREATE TABLE `barangay1` (
  `officer_id` int(11) NOT NULL,
  `barangayname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barangay1`
--

INSERT INTO `barangay1` (`officer_id`, `barangayname`) VALUES
(32, 'looc2');

-- --------------------------------------------------------

--
-- Table structure for table `brg_officer`
--

CREATE TABLE `brg_officer` (
  `officer_id` int(10) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `middlename` varchar(20) NOT NULL,
  `position` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brg_officer`
--

INSERT INTO `brg_officer` (`officer_id`, `lastname`, `firstname`, `middlename`, `position`) VALUES
(32, 'pocong', 'christian', 'wew', 'kapitan');

-- --------------------------------------------------------

--
-- Table structure for table `cedula`
--

CREATE TABLE `cedula` (
  `ctc_no` varchar(20) NOT NULL,
  `placed_issue` varchar(20) NOT NULL,
  `date_issue` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `clearance`
--

CREATE TABLE `clearance` (
  `clearance_id` int(10) NOT NULL,
  `person_id` int(10) NOT NULL,
  `officer_id` int(10) NOT NULL,
  `purpose` varchar(20) NOT NULL,
  `ctc_no` varchar(20) NOT NULL,
  `or_no` varchar(20) NOT NULL,
  `date_issue` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `household`
--

CREATE TABLE `household` (
  `officer_id` int(10) NOT NULL,
  `person_id` int(11) NOT NULL,
  `brg_workers` varchar(20) NOT NULL,
  `household_no` int(10) NOT NULL,
  `barangayname` varchar(20) NOT NULL,
  `purok` varchar(10) NOT NULL,
  `province` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `household`
--

INSERT INTO `household` (`officer_id`, `person_id`, `brg_workers`, `household_no`, `barangayname`, `purok`, `province`) VALUES
(32, 12, 'baluyos', 123456, 'looc2', 'purok-2', 'miss.occ');

-- --------------------------------------------------------

--
-- Table structure for table `kaso`
--

CREATE TABLE `kaso` (
  `person_id` int(10) NOT NULL,
  `officer_id` int(10) NOT NULL,
  `kaso` varchar(30) NOT NULL,
  `victim` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `officer_id` int(10) NOT NULL,
  `person_id` int(10) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `middlename` varchar(20) NOT NULL,
  `birthplace` varchar(25) NOT NULL,
  `birthdate` date NOT NULL,
  `sex` varchar(10) NOT NULL,
  `civilstatus` varchar(10) NOT NULL,
  `citizenship` varchar(20) NOT NULL,
  `occupation` varchar(30) NOT NULL,
  `barangayname` varchar(20) NOT NULL,
  `purok` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`officer_id`, `person_id`, `lastname`, `firstname`, `middlename`, `birthplace`, `birthdate`, `sex`, `civilstatus`, `citizenship`, `occupation`, `barangayname`, `purok`) VALUES
(32, 12, 'blesser', 'elmiejoy', 'hungaw', 'qerqrrf', '2019-03-29', 'Female', 'Widow', 'muslim', 'teacher', 'looc2', 'purok-3');

-- --------------------------------------------------------

--
-- Table structure for table `purok2`
--

CREATE TABLE `purok2` (
  `officer_id` int(10) NOT NULL,
  `purok` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purok2`
--

INSERT INTO `purok2` (`officer_id`, `purok`) VALUES
(32, 'purok-1'),
(32, 'purok-2'),
(32, 'purok-3'),
(32, 'purok-4'),
(32, 'purok-5');

-- --------------------------------------------------------

--
-- Table structure for table `reciept`
--

CREATE TABLE `reciept` (
  `officer_id` int(11) NOT NULL,
  `or_no` varchar(10) NOT NULL,
  `date_issue` date NOT NULL,
  `place_issue` varchar(20) NOT NULL,
  `purpose` varchar(20) NOT NULL,
  `ammount_paid` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`) VALUES
(0, 'ADMIN', 'stevebolodo@yahoo.com', '73acd9a5972130b75066c82595a1fae3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barangay1`
--
ALTER TABLE `barangay1`
  ADD PRIMARY KEY (`barangayname`),
  ADD KEY `officer_id` (`officer_id`);

--
-- Indexes for table `brg_officer`
--
ALTER TABLE `brg_officer`
  ADD PRIMARY KEY (`officer_id`);

--
-- Indexes for table `cedula`
--
ALTER TABLE `cedula`
  ADD PRIMARY KEY (`ctc_no`);

--
-- Indexes for table `clearance`
--
ALTER TABLE `clearance`
  ADD PRIMARY KEY (`clearance_id`),
  ADD UNIQUE KEY `person_id` (`person_id`),
  ADD UNIQUE KEY `officer_id` (`officer_id`),
  ADD UNIQUE KEY `ctc_no` (`ctc_no`),
  ADD UNIQUE KEY `or_no` (`or_no`),
  ADD KEY `person_id_2` (`person_id`),
  ADD KEY `ctc_no_2` (`ctc_no`),
  ADD KEY `or_no_2` (`or_no`),
  ADD KEY `or_no_3` (`or_no`);

--
-- Indexes for table `household`
--
ALTER TABLE `household`
  ADD UNIQUE KEY `person_id` (`person_id`),
  ADD KEY `person_id_2` (`person_id`),
  ADD KEY `person_id_3` (`person_id`),
  ADD KEY `person_id_4` (`person_id`),
  ADD KEY `province` (`province`),
  ADD KEY `household_no` (`household_no`),
  ADD KEY `household_no_2` (`household_no`),
  ADD KEY `id` (`officer_id`),
  ADD KEY `purok` (`purok`),
  ADD KEY `officer_id` (`officer_id`),
  ADD KEY `barangay` (`barangayname`),
  ADD KEY `barangayname` (`barangayname`);

--
-- Indexes for table `kaso`
--
ALTER TABLE `kaso`
  ADD UNIQUE KEY `person_id` (`person_id`,`officer_id`),
  ADD UNIQUE KEY `person_id_4` (`person_id`),
  ADD KEY `person_id_2` (`person_id`),
  ADD KEY `person_id_3` (`person_id`),
  ADD KEY `person_id_5` (`person_id`),
  ADD KEY `officer_id` (`officer_id`),
  ADD KEY `officer_id_2` (`officer_id`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`person_id`),
  ADD KEY `officer_id` (`officer_id`);

--
-- Indexes for table `purok2`
--
ALTER TABLE `purok2`
  ADD PRIMARY KEY (`purok`),
  ADD KEY `officer_id` (`officer_id`);

--
-- Indexes for table `reciept`
--
ALTER TABLE `reciept`
  ADD PRIMARY KEY (`or_no`),
  ADD KEY `officer_id` (`officer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `person_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barangay1`
--
ALTER TABLE `barangay1`
  ADD CONSTRAINT `barangay1_ibfk_1` FOREIGN KEY (`officer_id`) REFERENCES `brg_officer` (`officer_id`);

--
-- Constraints for table `clearance`
--
ALTER TABLE `clearance`
  ADD CONSTRAINT `clearance_ibfk_1` FOREIGN KEY (`person_id`) REFERENCES `person` (`person_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `clearance_ibfk_2` FOREIGN KEY (`officer_id`) REFERENCES `brg_officer` (`officer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `clearance_ibfk_4` FOREIGN KEY (`or_no`) REFERENCES `reciept` (`or_no`),
  ADD CONSTRAINT `clearance_ibfk_5` FOREIGN KEY (`ctc_no`) REFERENCES `cedula` (`ctc_no`);

--
-- Constraints for table `household`
--
ALTER TABLE `household`
  ADD CONSTRAINT `household_ibfk_1` FOREIGN KEY (`person_id`) REFERENCES `person` (`person_id`),
  ADD CONSTRAINT `household_ibfk_2` FOREIGN KEY (`officer_id`) REFERENCES `brg_officer` (`officer_id`),
  ADD CONSTRAINT `household_ibfk_3` FOREIGN KEY (`purok`) REFERENCES `purok2` (`purok`),
  ADD CONSTRAINT `household_ibfk_4` FOREIGN KEY (`barangayname`) REFERENCES `barangay1` (`barangayname`);

--
-- Constraints for table `kaso`
--
ALTER TABLE `kaso`
  ADD CONSTRAINT `kaso_ibfk_1` FOREIGN KEY (`person_id`) REFERENCES `person` (`person_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kaso_ibfk_2` FOREIGN KEY (`officer_id`) REFERENCES `brg_officer` (`officer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `person`
--
ALTER TABLE `person`
  ADD CONSTRAINT `person_ibfk_1` FOREIGN KEY (`officer_id`) REFERENCES `brg_officer` (`officer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `purok2`
--
ALTER TABLE `purok2`
  ADD CONSTRAINT `purok2_ibfk_2` FOREIGN KEY (`officer_id`) REFERENCES `brg_officer` (`officer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reciept`
--
ALTER TABLE `reciept`
  ADD CONSTRAINT `reciept_ibfk_1` FOREIGN KEY (`officer_id`) REFERENCES `brg_officer` (`officer_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
