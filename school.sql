-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2023 at 12:12 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `firstname` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` enum('admin','user') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `firstname`, `email`, `password`, `role`) VALUES
(1, 'duaaarif', 'duaa97@gmail.com', '9797d', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` int(11) NOT NULL,
  `subj-name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `t-name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `t-email` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `grade` int(2) NOT NULL,
  `time` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `class-id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `subj-name`, `t-name`, `t-email`, `grade`, `time`, `class-id`) VALUES
(1, 'Math', 'SARA AL-ALI', 'sara@gmail.com', 3, '10:00 AM', 101),
(3, 'Math', 'SARA AL-ALI', 'sara@gmail.com', 3, '10:00 AM', 101),
(4, 'Arabic', 'Muslim Ahmed', 'muslim@gmail.com', 3, '10:45 AM', 103),
(5, 'Science', 'mustafa', 'mmm@gmail.com', 4, '8:00 AM', 104),
(6, 'GEOLOGY', 'THAKAA ', 'taktak@gmail.com', 2, '11:00', 104),
(7, 'MAth', 'ahmed', 'nbhui@gmail.com', 2, '12:00-12:45', 0),
(8, 'Arabic', 'mustafa ahmed ', 'mustmust@gmail.com', 2, '11-11:45', 0);

-- --------------------------------------------------------

--
-- Table structure for table `courseregistration`
--

CREATE TABLE `courseregistration` (
  `id` int(11) NOT NULL,
  `t-id` int(11) NOT NULL,
  `st-id` int(11) NOT NULL,
  `class-id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(10) NOT NULL,
  `subject` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `st-name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `st-email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `st-class` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `st-score` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `teacher-notes` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `subject`, `st-name`, `st-email`, `st-class`, `st-score`, `teacher-notes`) VALUES
(1, 'MAth', 'mohamed', 'mmm@gmail.com', '2', '75', '0');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stoken` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(255) NOT NULL,
  `classid` enum('1','2','3','4','5','6') COLLATE utf8_unicode_ci NOT NULL,
  `age` int(3) NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `stoken`, `password`, `phone`, `classid`, `age`, `img`) VALUES
(22, 'mohamed', 'mmm@gmail.com', '', '01214mm', 777656146, '2', 12, 'sakura.png'),
(24, 'محمد مسلم علي', 'dya11f@gmail.com', '221214112806117', '141414141414', 2147483647, '3', 1, 'teacher.png'),
(25, 'دعاء عارف راشد ', 'mustafa998@gmail.com', '221214113801140', '012245458', 2147483647, '2', 4, 'lotus-flower.png'),
(26, 'moha', 'moha8888@gmail.com', '221217083436114', 'comcomcom', 2147483647, '2', 16, 'moon.png'),
(27, 'muslim mustaga ', 'musklim@gmail.com', '221217083716144', 'mmm1212', 2147483647, '4', 13, 'logout.png'),
(28, 'mustafa raffied ', 'mnmnhjuy@gmail.com', '221218091850200', 'bnmjhgtyu', 2147483647, '', 12, 'moon.png'),
(29, 'mustafa ahmed ali', 'mnuyt@gmial.com', '221227093842169', 'mnbhj56', 77895423, '2', 8, 'book.png'),
(30, 'mnat', 'mnat@gmail.com', '221227094036139', '145789', 1234, '5', 11, 'clip-327.png');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `name` varchar(22) COLLATE utf8_unicode_ci NOT NULL,
  `age` int(12) NOT NULL,
  `phone` varchar(14) COLLATE utf8_unicode_ci NOT NULL,
  `t-address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `t-email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `t-password` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `age`, `phone`, `t-address`, `t-email`, `img`, `t-password`) VALUES
(20, 'KAZIM', 0, '44', 'basra', 'bghty@gmail.com', 'moon.png', '44444444'),
(23, 'دعاء عارف راشد ', 25, ' 04876510', 'البصرة ', 'mustafa998@gmail.com', 'sakura.png', '01245'),
(24, 'ahmed', 33, '5555555', 'Wassit', 'nbhui@gmail.com', 'teaching.png', '000000000'),
(25, 'Aqeel', 30, ' 04876510', 'basra', 'ghhj@gmail.com', 'photo_2022-03-31_06-04-09.jpg', '0jjgjg'),
(26, 'mustafa', 26, '077733436227', 'basra', 'mu9stmust@gmail.com', '4556.jpg', '012458'),
(27, 'mustafa ahmed ', 26, '07733436227', 'basra', 'mustmust@gmail.com', 'book.png', '01245');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courseregistration`
--
ALTER TABLE `courseregistration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
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
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `courseregistration`
--
ALTER TABLE `courseregistration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
