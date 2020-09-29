-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2019 at 05:54 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentportalsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `id` int(255) NOT NULL,
  `coursecode` int(11) NOT NULL,
  `coursename` varchar(255) NOT NULL,
  `assignment` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`id`, `coursecode`, `coursename`, `assignment`) VALUES
(4, 6, 'Web', 0x41737369676e6d656e74204353452e646f6378),
(5, 6, 'Web', 0x41737369676e6d656e74204353452e646f6378),
(6, 6, 'Web', 0x41737369676e6d656e74204353452e646f6378);

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `attend` int(11) NOT NULL,
  `bunk` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `subject`, `attend`, `bunk`) VALUES
(1, 'Web Engineering', 90, 10),
(5, 'Web Engineering Lab', 80, 8),
(6, 'Operating System', 70, 20),
(7, 'Operating System Lab', 50, 20),
(8, 'Probability And Statastics', 80, 10),
(9, 'Software Requirment Engineering', 60, 15),
(10, 'Technical Writing', 70, 20);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `cid` int(11) NOT NULL,
  `cname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`cid`, `cname`) VALUES
(1, 'Web Engineering'),
(2, 'Wenb Engineering Lab'),
(3, 'Operating System'),
(4, 'Operating System Lab'),
(5, 'Software Requirment Engineering'),
(6, 'Probability And Statastics'),
(7, 'Technical Writing');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `regno` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `program` varchar(255) NOT NULL,
  `session` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `userid` int(11) NOT NULL,
  `image` varchar(256) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(11) NOT NULL,
  `std_id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `gpa` int(11) NOT NULL,
  `grade` varchar(255) NOT NULL,
  `semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `std_id`, `subject`, `gpa`, `grade`, `semester`) VALUES
(1, 0, 'Introduction To Programming', 3, 'B', 1),
(3, 0, 'Introduction To Computing', 4, 'A', 1),
(4, 0, 'Calculus', 3, 'B', 1),
(5, 0, 'Islamyat', 3, 'B', 1),
(6, 0, 'Functional English', 2, 'C', 1),
(7, 0, 'Introduction To OOP', 3, 'B', 2),
(8, 0, 'Discrete Structure', 4, 'A', 2),
(9, 0, 'Professional Ethics', 2, 'C', 2),
(10, 0, 'Electricity And Magnatism', 4, 'A', 2),
(11, 0, 'Applied Physics', 2, 'C', 2),
(12, 0, 'Digital Logic Design', 1, 'D', 3),
(13, 0, 'Introduction To Software Enginnering', 4, 'A', 3),
(14, 0, 'Data Structure', 3, 'B', 3),
(15, 0, 'Pak Study', 4, 'A', 4),
(16, 0, 'Linear Algebra', 3, 'B', 3),
(17, 0, 'Computer Architecture', 1, 'D', 4),
(18, 0, 'Database System', 4, 'A', 4),
(19, 0, 'Software Construction', 3, 'B', 4),
(20, 0, 'Differential Equation', 4, 'A', 4),
(21, 0, 'Principal Of Managment', 3, 'B', 4);

-- --------------------------------------------------------

--
-- Table structure for table `take`
--

CREATE TABLE `take` (
  `c_id` int(11) NOT NULL,
  `std_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_registration` (`regno`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `take`
--
ALTER TABLE `take`
  ADD PRIMARY KEY (`c_id`,`std_id`),
  ADD KEY `student_take_course` (`std_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `take`
--
ALTER TABLE `take`
  ADD CONSTRAINT `course_taken_student` FOREIGN KEY (`c_id`) REFERENCES `course` (`cid`),
  ADD CONSTRAINT `student_take_course` FOREIGN KEY (`std_id`) REFERENCES `registration` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
