-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2024 at 10:31 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `checklist`
--

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `grade_id` int(11) NOT NULL,
  `final_grade` decimal(5,2) DEFAULT NULL,
  `grade_description` varchar(100) DEFAULT NULL,
  `grade_range` varchar(20) DEFAULT NULL,
  `remarks` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`grade_id`, `final_grade`, `grade_description`, `grade_range`, `remarks`) VALUES
(1, 3.00, 'Passed', '70.0 - 73.3', 'PASSED'),
(2, 2.00, 'Very Good', '83.4 - 86.6', 'PASSED'),
(3, 1.25, 'Excellent', '93.4 - 96.6', 'PASSED'),
(4, 1.00, 'Marked Excellent', '96.7 - 100', 'PASSED'),
(5, 3.00, 'Passed', '70.0 - 73.3', 'PASSED'),
(6, 2.75, 'Fair', '73.4 - 76.6', 'PASSED'),
(7, 2.00, 'Very Good', '83.4 - 86.6', 'PASSED'),
(8, 1.25, 'Excellent', '93.4 - 96.6', 'PASSED'),
(9, 1.00, 'Marked Excellent', '96.7 - 100', 'PASSED'),
(10, 2.75, 'Fair', '73.4 - 76.6', 'PASSED'),
(11, 2.00, 'Very Good', '83.4 - 86.6', 'PASSED'),
(12, 1.75, 'Superior', '86.70 - 90.0', 'PASSED'),
(13, 1.25, 'Excellent', '93.4 - 96.6', 'PASSED'),
(14, 2.75, 'Fair', '73.4 - 76.6', 'PASSED'),
(15, 2.00, 'Very Good', '83.4 - 86.6', 'PASSED'),
(16, 1.50, 'Very Superior', '90.01 - 93.3', 'PASSED'),
(17, 1.50, 'Very Superior', '90.01 - 93.3', 'PASSED'),
(18, 1.50, 'Very Superior', '90.01 - 93.3', 'PASSED'),
(19, 1.50, 'Very Superior', '90.01 - 93.3', 'PASSED'),
(20, 2.25, 'Good', '80.01 - 83.3', 'PASSED'),
(21, 1.25, 'Excellent', '93.4 - 96.6', 'PASSED'),
(22, 2.00, 'Very Good', '83.4 - 86.6', 'PASSED'),
(23, 1.75, 'Superior', '86.70 - 90.0', 'PASSED'),
(24, 1.75, 'Superior', '86.70 - 90.0', 'PASSED'),
(25, 1.25, 'Excellent', '93.4 - 96.6', 'PASSED'),
(26, NULL, NULL, NULL, NULL),
(27, NULL, NULL, NULL, NULL),
(28, NULL, NULL, NULL, NULL),
(29, NULL, NULL, NULL, NULL),
(30, NULL, NULL, NULL, NULL),
(31, NULL, NULL, NULL, NULL),
(32, NULL, NULL, NULL, NULL),
(33, NULL, NULL, NULL, NULL),
(34, NULL, NULL, NULL, NULL),
(35, NULL, NULL, NULL, NULL),
(36, NULL, NULL, NULL, NULL),
(37, NULL, NULL, NULL, NULL),
(38, NULL, NULL, NULL, NULL),
(39, NULL, NULL, NULL, NULL),
(40, NULL, NULL, NULL, NULL),
(41, NULL, NULL, NULL, NULL),
(42, NULL, NULL, NULL, NULL),
(43, NULL, NULL, NULL, NULL),
(44, NULL, NULL, NULL, NULL),
(45, NULL, NULL, NULL, NULL),
(46, NULL, NULL, NULL, NULL),
(47, NULL, NULL, NULL, NULL),
(48, NULL, NULL, NULL, NULL),
(49, NULL, NULL, NULL, NULL),
(50, NULL, NULL, NULL, NULL),
(51, NULL, NULL, NULL, NULL),
(52, NULL, NULL, NULL, NULL),
(53, NULL, NULL, NULL, NULL),
(54, NULL, NULL, NULL, NULL),
(55, NULL, NULL, NULL, NULL),
(56, NULL, NULL, NULL, NULL),
(57, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `instructors`
--

CREATE TABLE `instructors` (
  `instructor_id` int(11) NOT NULL,
  `instructor_name` varchar(50) DEFAULT NULL,
  `teaching_sem` varchar(20) DEFAULT NULL,
  `teaching_year` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `instructors`
--

INSERT INTO `instructors` (`instructor_id`, `instructor_name`, `teaching_sem`, `teaching_year`) VALUES
(1, 'Jerald Abejuela', '1st Semester', '1st Year'),
(2, 'Raezy Mae Pica', '1st Semester', '1st Year'),
(3, 'Christian Castillo', '1st Semester', '1st Year'),
(4, 'Jeffry Santos', '1st Semester', '1st Year'),
(5, 'Alvina Ramallosa', '1st Semester', '1st Year'),
(6, 'Jhune Hay Mitra', '1st Semester', '1st Year'),
(7, 'Cherisma Mendoza', '1st Semester', '1st Year'),
(8, 'Jhune Hay Mitra', '1st Semester', '1st Year'),
(9, 'Arjon Veluz', '1st Semester', '1st Year'),
(10, 'Richard Lozada', '2nd Semester', '1st Year'),
(11, 'James Manozo', '1st Semester', '2nd Year'),
(12, 'Paul Jr. Montejar', '2nd Semester', '1st Year'),
(13, 'Maria Lyn Dela Cruz', '2nd Semester', '1st Year'),
(14, 'Eduardo Ello', '2nd Semester', '1st Year'),
(15, 'Raymart Gianan', '2nd Semester', '1st Year'),
(16, 'Cherisma Mendoza', '2nd Semester', '1st Year'),
(17, 'Steffanie Bato', '2nd Semester', '1st Year'),
(18, 'Jessica Sambrano', '1st Semester', '2nd Year'),
(19, 'Richard Ongayo', '1st Semester', '2nd Year'),
(20, 'Aida Penson', '1st Semester', '2nd Year'),
(21, 'Jayson Nati', '1st Semester', '2nd Year'),
(22, 'Edan Belgica', '1st Semester', '2nd Year'),
(23, 'Redem Decipulo', '1st Semester', '2nd Year'),
(24, 'Ronald Rosete', '1st Semester', '2nd Year'),
(25, 'Romel Jamito', '1st Semester', '2nd Year'),
(26, 'Roi Francisco', '2nd Semester', '2nd Year'),
(27, 'Jessica Ann Sambrano', '2nd Semester', '2nd Year'),
(28, 'Mariel Castillo', '2nd Semester', '2nd Year'),
(29, 'Jerome Tacata', '2nd Semester', '2nd Year'),
(30, 'Clarissa Rostrollo', '2nd Semester', '2nd Year'),
(31, 'Rufino Dela Cruz', '2nd Semester', '2nd Year'),
(32, 'Edan Belgica', '2nd Semester', '2nd Year'),
(33, 'Andrew Gabionza', '2nd Semester', '2nd Year'),
(34, NULL, NULL, NULL),
(35, NULL, NULL, NULL),
(36, NULL, NULL, NULL),
(37, NULL, NULL, NULL),
(38, NULL, NULL, NULL),
(39, NULL, NULL, NULL),
(40, NULL, NULL, NULL),
(41, NULL, NULL, NULL),
(42, NULL, NULL, NULL),
(43, NULL, NULL, NULL),
(44, NULL, NULL, NULL),
(45, NULL, NULL, NULL),
(46, NULL, NULL, NULL),
(47, NULL, NULL, NULL),
(48, NULL, NULL, NULL),
(49, NULL, NULL, NULL),
(50, NULL, NULL, NULL),
(51, NULL, NULL, NULL),
(52, NULL, NULL, NULL),
(53, NULL, NULL, NULL),
(54, NULL, NULL, NULL),
(55, NULL, NULL, NULL),
(56, NULL, NULL, NULL),
(57, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(11) NOT NULL,
  `first_name` varchar(30) DEFAULT NULL,
  `last_name` varchar(30) DEFAULT NULL,
  `student_number` int(11) DEFAULT NULL,
  `contact_number` varchar(11) DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `course` varchar(50) DEFAULT NULL,
  `year_level` varchar(30) DEFAULT NULL,
  `myAddress` varchar(100) DEFAULT NULL,
  `admission_date` date DEFAULT NULL,
  `subject_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `first_name`, `last_name`, `student_number`, `contact_number`, `age`, `email`, `course`, `year_level`, `myAddress`, `admission_date`, `subject_id`) VALUES
(1, 'Mark Anthony', 'Saguid', 202211847, '09062456861', 19, 'bc.markanthony.saguid@cvsu.edu.ph', 'BS in Computer Science', '2nd Year', 'Cyber Street, Green Valley Subdivision, San Nicolas III, Bacoor City Cavite', '2022-09-20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `subject_id` int(11) NOT NULL,
  `course_code` varchar(10) DEFAULT NULL,
  `course_title` varchar(50) DEFAULT NULL,
  `credit_unit_lec` int(11) DEFAULT NULL,
  `credit_unit_lab` int(11) DEFAULT NULL,
  `contact_hrs_lec` int(11) DEFAULT NULL,
  `contact_hrs_lab` int(11) DEFAULT NULL,
  `pre_requisite` varchar(30) DEFAULT NULL,
  `sem_taken` varchar(20) DEFAULT NULL,
  `year_taken` varchar(20) DEFAULT NULL,
  `grade_id` int(11) DEFAULT NULL,
  `instructor_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subject_id`, `course_code`, `course_title`, `credit_unit_lec`, `credit_unit_lab`, `contact_hrs_lec`, `contact_hrs_lab`, `pre_requisite`, `sem_taken`, `year_taken`, `grade_id`, `instructor_id`) VALUES
(1, 'GNED 02', 'Ethics', 3, NULL, 3, NULL, NULL, '1st Semester', '1st Year', 1, 1),
(2, 'GNED 05', 'Purposive Communication', 3, NULL, 3, NULL, NULL, '1st Semester', '1st Year', 2, 2),
(3, 'GNED 11', 'Kontesktwalisadong Komunikasyon sa Filipino', 3, NULL, 3, NULL, NULL, '1st Semester', '1st Year', 3, 3),
(4, 'COSC 50', 'Discrete Structure 1', 3, NULL, 3, NULL, NULL, '1st Semester', '1st Year', 4, 4),
(5, 'DCIT 21', 'Introduction to Computing', 2, 1, 2, 6, NULL, '1st Semester', '1st Year', 5, 5),
(6, 'DCIT 22', 'Computer Programming 1', 1, 2, 1, 3, NULL, '1st Semester', '1st Year', 6, 6),
(7, 'FITT 1', 'Movement Enhancement', 2, NULL, 3, NULL, NULL, '1st Semester', '1st Year', 7, 7),
(8, 'NSTP 1', 'National Service Training Program 1', 3, NULL, 2, NULL, NULL, '1st Semester', '1st Year', 8, 8),
(9, 'CvSU 101', 'Institutional Orientation', 1, NULL, 1, NULL, NULL, '1st Semester', '1st Year', 9, 9),
(10, 'GNED 01', 'Art Appreciation', 3, NULL, 3, NULL, NULL, '2nd Semester', '1st Year', 10, 10),
(11, 'GNED 03', 'Mathematics In The Modern World', 3, NULL, 3, NULL, NULL, '1st Semester', '2nd Year', 11, 11),
(12, 'GNED 06', 'Science, Technology and Society', 3, NULL, 3, NULL, NULL, '2nd Semester', '1st Year', 12, 12),
(13, 'GNED 12', 'Dalumat Ng/Sa Filipino', 3, NULL, 3, NULL, 'GNED 11', '2nd Semester', '1st Year', 13, 13),
(14, 'DCIT 23', 'Computer Programming II', 1, 2, 1, 6, 'DCIT 22', '2nd Semester', '1st Year', 14, 14),
(15, 'ITEC 50', 'Web Systems and Technologies', 2, 1, 2, 3, 'DCIT 21', '2nd Semester', '1st Year', 15, 15),
(16, 'FITT 2', 'Fitness Exercises', 2, NULL, 2, NULL, 'FITT 1', '2nd Semester', '1st Year', 16, 16),
(17, 'NSTP 2', 'National Service Training Program 2', 3, NULL, 3, NULL, 'NSTP 1', '2nd Semester', '1st Year', 17, 17),
(18, 'GNED 04', 'Mga Babasahin Hingil sa Kalayaan ng Pilipinas', 3, NULL, 3, NULL, NULL, '1st Semester', '2nd Year', 18, 18),
(19, 'MATH 1', 'Analytic Geometry', 3, NULL, 3, NULL, 'GNED 03', '1st Semester', '2nd Year', 19, 19),
(20, 'COSC 55', 'Discrete Structures II', 3, NULL, 3, NULL, 'COSC 50', '1st Semester', '2nd Year', 20, 20),
(21, 'COCS 60', 'Digital Logic Design', 2, 1, 2, 3, 'COSC 50, DCIT 23', '1st Semester', '2nd Year', 21, 21),
(22, 'DCIT 50', 'Object Oriented Programming', 2, 1, 2, 3, 'DCIT 23', '1st Semester', '2nd Year', 22, 22),
(23, 'DCIT 24', 'Information Management', 2, 1, 2, 3, 'DCIT 23', '1st Semester', '2nd Year', 23, 23),
(24, 'INSY 50', 'Fundamentals of Information Systems', 3, NULL, 3, NULL, 'DCIT 21', '1st Semester', '2nd Year', 24, 24),
(25, 'FITT 3', 'Physical Activities Towards Health and Fitness 1', 2, NULL, 2, NULL, 'FITT 1', '1st Semester', '2nd Year', 25, 25),
(26, 'GNED 08', 'Understanding the Self', 3, NULL, 3, NULL, NULL, '2nd Semester', '2nd Year', 26, 26),
(27, 'GNED 14', 'Panitikang Panlipunan', 3, NULL, 3, NULL, NULL, '2nd Semester', '2nd Year', 27, 27),
(28, 'MATH 2', 'Calculus', 3, NULL, 3, NULL, 'MATH 1', '2nd Semester', '2nd Year', 28, 28),
(29, 'COSC 65', 'Architecture and Organization', 2, 1, 2, 3, 'COSC 60', '2nd Semester', '2nd Year', 29, 29),
(30, 'COSC 70', 'Software Engineering 1', 3, NULL, 3, NULL, 'DCIT 50 & 24', '2nd Semester', '2nd Year', 30, 30),
(31, 'DCIT 25', 'Data Structures and Algorithms', 2, 1, 2, 3, 'DCIT 23', '2nd Semester', '2nd Year', 31, 31),
(32, 'DCIT 55', 'Advanced Database Management System', 2, 1, 2, 3, 'DCIT 24', '2nd Semester', '2nd Year', 32, 32),
(33, 'FITT 4', 'Physical Activities Towards Health and Fitness 2', 2, NULL, 2, NULL, 'FITT 1', '2nd Semester', '2nd Year', 33, 33),
(34, 'MATH 3', 'Linear Algebra', 3, NULL, 3, NULL, 'MATH 2', '1st Semester', '3rd Year', 34, 34),
(35, 'COSC 75', 'Software Engineering 2', 2, 1, 2, 3, 'COSC 70', '1st Semester', '3rd Year', 35, 35),
(36, 'COSC 80', 'Operating Systems', 2, 1, 2, 3, 'DCIT 25', '1st Semester', '3rd Year', 36, 36),
(37, 'COSC 85', 'Networks and Communication', 2, 1, 2, 3, 'ITEC 50', '1st Semester', '3rd Year', 37, 37),
(38, 'COSC 101', 'CS Elective 1', 2, 1, 2, 3, 'DCIT 23', '1st Semester', '3rd Year', 38, 38),
(39, 'DCIT 26', 'Application Dev\'t and Emerging Technologies', 2, 1, 2, 3, 'ITEC 50', '1st Semester', '3rd Year', 39, 39),
(40, 'DCIT 65', 'Social and Professional Issues', 3, NULL, 3, NULL, NULL, '1st Semester', '3rd Year', 40, 40),
(41, 'GNED 09', 'Life and Works of Rizal', 3, NULL, 3, NULL, 'GNED 04', '2nd Semester', '3rd Year', 41, 41),
(42, 'MATH 4', 'Experimental Statistics', 2, 1, 2, 3, 'MATH 02', '2nd Semester', '3rd Year', 42, 42),
(43, 'COSC 90', 'Design and Analysis of Algorithm', 3, NULL, 3, NULL, 'DCIT 25', '2nd Semester', '3rd Year', 43, 43),
(44, 'COSC 95', 'Programming Languages', 3, NULL, 3, NULL, 'DCIT 25', '2nd Semester', '3rd Year', 44, 44),
(45, 'COSC 106', 'CS Elective 2', 2, 1, 2, 3, 'MATH 3, COSC 101', '2nd Semester', '3rd Year', 45, 45),
(46, 'DCIT 60', 'Methods of Research', 3, NULL, 3, NULL, '3rd Year Standing', '2nd Semester', '3rd Year', 46, 46),
(47, 'ITEC 85', 'Information Assurance and Security', 3, NULL, 3, NULL, 'DCIT 24', '2nd Semester', '3rd Year', 47, 47),
(48, 'COSC 199', 'Practicum (240 hours)', 3, NULL, 3, NULL, 'Incoming 4th Year', NULL, 'Mid-Year', 48, 48),
(49, 'ITEC 80', 'Human Computer Interaction', 1, NULL, 3, NULL, 'ITEC 85', '1st Semester', '4th Year', 49, 49),
(50, 'COSC 100', 'Automata Theory and Formal Languages', 3, NULL, 3, NULL, 'COSC 90', '1st Semester', '4th Year', 50, 50),
(51, 'COSC 105', 'Intelligent Systems', 2, 1, 2, 3, 'MATH 4, COSC 55, DCIT 50', '1st Semester', '4th Year', 51, 51),
(52, 'COSC 111', 'CS Elective 3', 2, 1, 2, 3, 'COSC 60', '1st Semester', '4th Year', 52, 52),
(53, 'COSC 200A', 'Undergraduate Thesis I', 3, NULL, 1, NULL, '4th Year Standing', '1st Semester', '4th Year', 53, 53),
(54, 'GNED 07', 'The Contemporary World', 3, NULL, 3, NULL, NULL, '2nd Semester', '4th Year', 54, 54),
(55, 'GNED 10', 'Gender and Society', 3, NULL, 3, NULL, NULL, '2nd Semester', '4th Year', 55, 55),
(56, 'COSC 110', 'Numerical and Symbolic Compuation', 2, 1, 2, 3, 'COSC 60', '2nd Semester', '4th Year', 56, 56),
(57, 'COSC 200B', 'Undergraduate Thesis II', 3, NULL, 1, NULL, 'COSC 200A', '2nd Semester', '4th Year', 57, 57);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`grade_id`);

--
-- Indexes for table `instructors`
--
ALTER TABLE `instructors`
  ADD PRIMARY KEY (`instructor_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`),
  ADD KEY `fk_subject_id` (`subject_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`subject_id`),
  ADD KEY `fk_instructor_id` (`instructor_id`),
  ADD KEY `fk_grade_id` (`grade_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
  MODIFY `grade_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `instructors`
--
ALTER TABLE `instructors`
  MODIFY `instructor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `fk_subject_id` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`subject_id`);

--
-- Constraints for table `subjects`
--
ALTER TABLE `subjects`
  ADD CONSTRAINT `fk_grade_id` FOREIGN KEY (`grade_id`) REFERENCES `grades` (`grade_id`),
  ADD CONSTRAINT `fk_instructor_id` FOREIGN KEY (`instructor_id`) REFERENCES `instructors` (`instructor_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
