-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2021 at 05:24 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Fname` varchar(100) NOT NULL,
  `Lname` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `mob` int(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Fname`, `Lname`, `Email`, `username`, `mob`, `password`) VALUES
('Admin', 'ad', 'admin@gmail.com', 'admin', 6545, 'a'),
('admin', '2', 'ad@gmail.com', 'admin2', 22222222, 'aa');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `bid` int(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Authors` varchar(100) NOT NULL,
  `Edition` int(100) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `Department` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bid`, `Name`, `Authors`, `Edition`, `Status`, `Department`, `link`) VALUES
(101, 'Let us C', 'Yashavant P Kanetkar', 2010, 'Available', 'CSE', 'files/let us c-yashwantkanetkar.pdf'),
(102, 'Python for everybody', 'Dr. Charles R. Severance', 2011, 'Available', 'CSE', 'files/python for everybody.pdf'),
(103, 'Java programming', 'absgj hab', 2010, 'Available', 'CSE', 'files/Java 2, The complete reference.pdf'),
(104, 'Data Communication', 'Forouzan', 2015, 'Available', 'CSE', 'files/Data Communications and Networking By Behrouz A.Forouzan.pdf'),
(105, 'Electronics Engineering', 'mamkks kjan', 2000, 'Available', 'ECE', 'files/4th sem syllabus.pdf'),
(105, 'Mechanical Engineering', 'ashs sjh', 2000, 'Available', 'ME', 'files/5th sem syllabus.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Fname` varchar(100) NOT NULL,
  `Lname` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `mob` int(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Fname`, `Lname`, `Email`, `username`, `mob`, `password`) VALUES
('Student ', '1', 'stu1@gmail.com', 'student', 985614723, 'stu'),
('Student ', '2', 'stu2@gmail.com', 'stu', 478965322, 'sss'),
('Shivangi', 'Nigam', 'shi@gmail.com', 'shivangi', 584596845, 'aaaa'),
('Student 3', '3', 'stu3@gmail.com', 'stu3', 5645, 'aaaaaa'),
('Vishal', 'Patsatiya', 'vi@gmail.com', 'vishal', 54545458, 'hhhh');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
