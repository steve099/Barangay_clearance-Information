-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2019 at 10:10 AM
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
  `id` int(10) NOT NULL,
  `officer_id` int(10) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barangay1`
--

INSERT INTO `barangay1` (`id`, `officer_id`, `address`) VALUES
(1, 21, 'plaridel');

-- --------------------------------------------------------

--
-- Table structure for table `brg_officer`
--

CREATE TABLE `brg_officer` (
  `officer_id` int(10) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brg_officer`
--

INSERT INTO `brg_officer` (`officer_id`, `lastname`, `firstname`, `middlename`, `position`) VALUES
(2, 'banag', 'ian', 'macalong', 'SK chairman'),
(21, 'wew', 'bodo', 'toyab', 'SK');

-- --------------------------------------------------------

--
-- Table structure for table `cedula`
--

CREATE TABLE `cedula` (
  `ctc_no` int(10) NOT NULL,
  `placed_issue` varchar(50) NOT NULL,
  `date_issue` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cedula`
--

INSERT INTO `cedula` (`ctc_no`, `placed_issue`, `date_issue`) VALUES
(21, 'southernlooc', '2019-03-05'),
(213, 'loocproper', '2019-03-16');

-- --------------------------------------------------------

--
-- Table structure for table `clearance`
--

CREATE TABLE `clearance` (
  `clearance_id` int(10) NOT NULL,
  `person_id` int(10) NOT NULL,
  `officer_id` int(10) NOT NULL,
  `purpose` varchar(50) NOT NULL,
  `ctc_no` int(20) NOT NULL,
  `or_no` int(20) NOT NULL,
  `date_issue` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clearance`
--

INSERT INTO `clearance` (`clearance_id`, `person_id`, `officer_id`, `purpose`, `ctc_no`, `or_no`, `date_issue`) VALUES
(123, 2, 21, 'for school', 213, 213214, '2019-03-28');

-- --------------------------------------------------------

--
-- Table structure for table `household`
--

CREATE TABLE `household` (
  `officer_id` int(10) NOT NULL,
  `person_id` int(11) NOT NULL,
  `brg_workers` varchar(30) NOT NULL,
  `household_no` int(10) NOT NULL,
  `barangay` varchar(20) NOT NULL,
  `purok` varchar(50) NOT NULL,
  `province` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `household`
--

INSERT INTO `household` (`officer_id`, `person_id`, `brg_workers`, `household_no`, `barangay`, `purok`, `province`) VALUES
(21, 2, 'baluyos', 1234566, 'looc2', 'purok-2', 'mobod'),
(2, 23, 'rupert', 1234, 'wew', 'purok-1', 'aloran');

-- --------------------------------------------------------

--
-- Table structure for table `kaso`
--

CREATE TABLE `kaso` (
  `person_id` int(10) NOT NULL,
  `officer_id` int(10) NOT NULL,
  `kaso` varchar(50) NOT NULL,
  `victim` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kaso`
--

INSERT INTO `kaso` (`person_id`, `officer_id`, `kaso`, `victim`, `date`) VALUES
(2, 21, 'nanghuldap', 'mocay', '2019-03-05'),
(23, 2, 'nangawat ug manok', 'baluys', '2019-03-05');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `officer_id` int(10) NOT NULL,
  `person_id` int(10) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `birthplace` varchar(60) NOT NULL,
  `birthdate` date NOT NULL,
  `sex` varchar(10) NOT NULL,
  `civilstatus` varchar(50) NOT NULL,
  `citizenship` varchar(50) NOT NULL,
  `occupation` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`officer_id`, `person_id`, `lastname`, `firstname`, `middlename`, `birthplace`, `birthdate`, `sex`, `civilstatus`, `citizenship`, `occupation`) VALUES
(21, 2, 'rovel2', 'elmiejoy', 'hungaw', 'sapangdalaga', '2019-03-28', 'Female', 'single', 'muslim', 'student'),
(21, 23, 'bolodo', 'blesser ', 'cespon', 'aloran', '2019-03-27', 'Female', 'single', 'filipino', 'teacher');

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
(21, 'purok-1'),
(21, 'purok-2'),
(21, 'purok-3');

-- --------------------------------------------------------

--
-- Table structure for table `reciept`
--

CREATE TABLE `reciept` (
  `or_no` int(10) NOT NULL,
  `date_issue` date NOT NULL,
  `place_issue` varchar(50) NOT NULL,
  `purpose` varchar(50) NOT NULL,
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
  ADD PRIMARY KEY (`id`),
  ADD KEY `officer_id` (`officer_id`),
  ADD KEY `officer_id_2` (`officer_id`);

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
  ADD KEY `ctc_no_2` (`ctc_no`);

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
  ADD KEY `barangay` (`barangay`);

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
  ADD PRIMARY KEY (`or_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barangay1`
--
ALTER TABLE `barangay1`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `person_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barangay1`
--
ALTER TABLE `barangay1`
  ADD CONSTRAINT `barangay1_ibfk_1` FOREIGN KEY (`officer_id`) REFERENCES `brg_officer` (`officer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `clearance`
--
ALTER TABLE `clearance`
  ADD CONSTRAINT `clearance_ibfk_1` FOREIGN KEY (`person_id`) REFERENCES `person` (`person_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `clearance_ibfk_2` FOREIGN KEY (`officer_id`) REFERENCES `brg_officer` (`officer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `clearance_ibfk_3` FOREIGN KEY (`ctc_no`) REFERENCES `cedula` (`ctc_no`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `household`
--
ALTER TABLE `household`
  ADD CONSTRAINT `household_ibfk_1` FOREIGN KEY (`person_id`) REFERENCES `person` (`person_id`),
  ADD CONSTRAINT `household_ibfk_2` FOREIGN KEY (`officer_id`) REFERENCES `brg_officer` (`officer_id`),
  ADD CONSTRAINT `household_ibfk_3` FOREIGN KEY (`purok`) REFERENCES `purok2` (`purok`) ON DELETE CASCADE ON UPDATE CASCADE;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
