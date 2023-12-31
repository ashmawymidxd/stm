-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2023 at 09:59 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `students`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `code` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`code`, `name`, `level`, `department`) VALUES
('CS300', 'deep learning', 'Fourth Level', 'CS'),
('CS500', 'artificial intelegante', 'Fourth Level', 'CS'),
('CS600', 'programingC++', 'First Level', 'CS'),
('IS300', 'databases', 'Second Level', 'IS'),
('IS350', 'date warehouse', 'Fourth Level', 'IS'),
('IS400', 'disteriputed database', 'Second Level', 'IS'),
('IT100', 'network programing', 'Fourth Level', 'IT'),
('IT120', 'data commnicatuion', 'First Level', 'IT'),
('IT200', 'ecommerce', 'Third Level', 'IT'),
('IT300', 'advanced project management', 'Third Level', 'IT'),
('IT310', 'wirless', 'Third Level', 'IT'),
('IT340', 'viruial reality', 'Third Level', 'IT'),
('IT343', 'viruial reality', 'Third Level', 'IT'),
('MM100', 'computer vision', 'First Level', 'MM'),
('MM300', 'computer graphic', 'Fourth Level', 'MM'),
('MM500', 'image processing', 'Third Level', 'MM');

-- --------------------------------------------------------

--
-- Table structure for table `enrolled_courses`
--

CREATE TABLE `enrolled_courses` (
  `student_id` int(11) NOT NULL,
  `code` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL,
  `degree` int(100) NOT NULL,
  `grade` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enrolled_courses`
--

INSERT INTO `enrolled_courses` (`student_id`, `code`, `name`, `level`, `degree`, `grade`) VALUES
(200020, 'CS600', 'programingC++', ' First Level', 60, 'D'),
(200020, 'CS120', 'machine learning', ' First Level', 100, 'A'),
(200020, 'MM100', 'computer vision', ' First Level', 60, 'D'),
(200002, 'CS120', 'machine learning', ' First Level', 0, ''),
(200002, 'CS600', 'programingC++', ' First Level', 100, 'A'),
(200002, 'MM100', 'computer vision', ' First Level', 0, ''),
(200020, 'IT120', 'data commnicatuion', ' First Level', 40, 'F'),
(200020, 'IS300', 'databases', ' Second Level', 100, 'A'),
(200020, 'IS400', 'disteriputed database', ' Second Level', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `code` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`code`, `name`, `level`, `department`) VALUES
('IT300', 'advanced project management', ' Third Level', 'IT'),
('IS300', 'databases', ' Second Level', 'IS'),
('MM300', 'computer graphic', ' Fourth Level', 'MM'),
('CS600', 'programingC++', ' First Level', 'CS'),
('IT120', 'data commnicatuion', ' First Level', 'IT'),
('MM100', 'computer vision', ' First Level', 'MM');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `name` varchar(100) NOT NULL,
  `id` int(11) NOT NULL,
  `gba` int(11) NOT NULL,
  `hour` int(11) NOT NULL,
  `present` int(11) NOT NULL,
  `department` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`name`, `id`, `gba`, `hour`, `present`, `department`, `password`, `image`, `level`) VALUES
('mohamed adel', 20005, 0, 108, 77, 'IT', 'ahmed1234', 'fimages/73b4105a85e856ff93efdd1dcdd63942ba6153cb5dff83d9df838aa0ceb0a90eRecovered.jpg', 'First Level'),
('ibrahem hassan shehata', 200002, 0, 0, 77, 'IS', 'ahmed1234', 'fimages/IMG_٢٠٢٢٠٩٢١_١٤١٢٤٣.png', 'first level'),
('ahmed hassan shehata', 200020, 3, 3, 77, 'IT', 'ahmed1234', 'fimages/ahmed.jpg', 'second level');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `enrolled_courses`
--
ALTER TABLE `enrolled_courses`
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `enrolled_courses`
--
ALTER TABLE `enrolled_courses`
  ADD CONSTRAINT `enrolled_courses_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
