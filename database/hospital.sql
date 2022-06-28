-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2022 at 11:54 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `admit`
--

CREATE TABLE `admit` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `a_contact` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `problem` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admit`
--

INSERT INTO `admit` (`id`, `name`, `age`, `gender`, `contact`, `a_contact`, `address`, `problem`) VALUES
(1, 'test', '22', 'male', '22', '987654321`', 'test', 'test'),
(2, 'ABCD', '90', 'female', '99999', '121212', 'Barishal', 'Fever');

-- --------------------------------------------------------

--
-- Table structure for table `checkup`
--

CREATE TABLE `checkup` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `a_contact` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `problem` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `checkup`
--

INSERT INTO `checkup` (`id`, `name`, `age`, `gender`, `contact`, `a_contact`, `address`, `problem`) VALUES
(1, 'test', '22', 'male', '1234568', '83212', 'test', 'test'),
(2, 'abcd', '21', 'male', '12345', '67890', 'Dhaka', 'Fever');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `specialist_in` varchar(100) NOT NULL,
  `fromm` varchar(100) NOT NULL,
  `too` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `name`, `contact`, `specialist_in`, `fromm`, `too`, `pass`) VALUES
(1, 'ahsan', '12345678', 'XYZ', '10.00', '2.00', '123'),
(2, 'Test', '12345678', 'Everything', '10.00 AM', '2.00 PM', ''),
(3, 'New', '12345678', 'Nothing', '1.00', '3.00', ''),
(4, 'New Doctor', '12345', 'Everything', '10.00', '5.00', ''),
(5, 'new1', '123468', 'Test', '12', '4', ''),
(6, 'new2', '1246', 'Test1', '9', '5', ''),
(7, '123', '123', '123', '1', '2', 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `a_contact` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `problem` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `name`, `age`, `gender`, `contact`, `a_contact`, `address`, `problem`) VALUES
(1, 'Test', '22', 'male', '12345678', '987654321`', 'Dhaka', 'Test'),
(2, 'No Name', '100', 'other', '919191', '83828', 'Uganda', 'Everything is fine'),
(3, 'new patient', '', '', '', '', '', ''),
(4, 'overall', '90', 'female', '12345678', '98765432', 'Dhaka', 'All good');

-- --------------------------------------------------------

--
-- Table structure for table `pescription`
--

CREATE TABLE `pescription` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `pescription` varchar(1000) NOT NULL,
  `dr_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pescription`
--

INSERT INTO `pescription` (`id`, `name`, `pescription`, `dr_name`) VALUES
(1, 'Test', 'test', ''),
(2, 'Test', 'tt', ''),
(3, 'No Name', 'this is your pescription', ''),
(4, 'Test', 'new', ''),
(5, 'overall', 'This is the final testing pescription\r\n\r\n1. tablet\r\n2. tablet\r\n3. syrup', '123');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `email`, `password`) VALUES
(1, 'John', 'Doe', 'john@example.com'),
(2, 'John', 'Doe', 'john@example.com'),
(3, 'John', 'Doe', 'john@example.com'),
(4, 'John', 'Doe', 'john@example.com'),
(5, 'root', 'sumon@gmail.com', ''),
(6, 'sumon', 'sumon@gmail.com', '111'),
(7, 'admin', 'admin@admin.com', 'admin'),
(8, 'new patient', 'patient@patient.com', 'patient'),
(9, 'overall', 'sumon@gmail.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admit`
--
ALTER TABLE `admit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkup`
--
ALTER TABLE `checkup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pescription`
--
ALTER TABLE `pescription`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admit`
--
ALTER TABLE `admit`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `checkup`
--
ALTER TABLE `checkup`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pescription`
--
ALTER TABLE `pescription`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
