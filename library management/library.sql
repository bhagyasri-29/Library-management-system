-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2020 at 07:06 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

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
  `email` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `bid` varchar(25) NOT NULL,
  `bname` varchar(50) NOT NULL,
  `bauthor` varchar(25) NOT NULL,
  `Copies` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bid`, `bname`, `bauthor`, `Copies`) VALUES
('ISBN1', 'Computer Architecture', 'Jayaraj', 87),
('ISBN22345', 'Introduction to Web Prog', 'JK.Singh', 28),
('ISBN242', 'Logic Design', 'Hiran V Nath', 79);

-- --------------------------------------------------------

--
-- Table structure for table `issue`
--

CREATE TABLE `issue` (
  `Sid` varchar(25) NOT NULL,
  `Bid` varchar(25) NOT NULL,
  `current_date` date NOT NULL,
  `Last_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `issue`
--

INSERT INTO `issue` (`Sid`, `Bid`, `current_date`, `Last_date`) VALUES
('18327', 'ISBN1', '2020-11-12', '2020-12-27'),
('18327', 'ISBN22345', '2020-11-12', '2020-12-27');

-- --------------------------------------------------------

--
-- Table structure for table `issue_request`
--

CREATE TABLE `issue_request` (
  `Sid` varchar(25) NOT NULL,
  `Bid` varchar(25) NOT NULL,
  `admin_response` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `issue_request`
--

INSERT INTO `issue_request` (`Sid`, `Bid`, `admin_response`) VALUES
('18317', 'ISBN242', 'Rejected'),
('18327', 'ISBN1', 'Accepted'),
('18327', 'ISBN22345', 'Accepted');

-- --------------------------------------------------------

--
-- Table structure for table `recommend`
--

CREATE TABLE `recommend` (
  `bname` varchar(25) NOT NULL,
  `bauthor` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recommend`
--

INSERT INTO `recommend` (`bname`, `bauthor`) VALUES
('VLSI', 'Srinivasan');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `Id` varchar(25) NOT NULL,
  `Branch` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`fname`, `lname`, `Id`, `Branch`, `email`, `password`) VALUES
('vishnu', 'vardhan', '18317', 'cs', 'vishnu@gmail.com', 'hari'),
('Hari', 'Chandra', '18327', 'Computer Science ', 'hari.wrogn@gmail.com', '8'),
('hari', 'prasad', '18888', 'Computer Science ', 'hari.wrogn2@gmail.com', '0769e56eb5d72039f01530d70'),
('Hari', 'chandra23', 'id12', 'Computer Science ', 'hari.wrogn123@gmail.com', 'e10adc3949ba59abbe56e057f'),
('balaji', 'bathina', 'id123', 'cs', 'hari.msd@gmail.com', '886c8b9debe8ac9e0a850e119'),
('hari', 'chandra20', 'id189', 'klklok', '123hari.wrogn@gmail.com', '3a605f3d17f6a719d1fa4e135');

-- --------------------------------------------------------

--
-- Table structure for table `renew_request`
--

CREATE TABLE `renew_request` (
  `Sid` varchar(25) NOT NULL,
  `Bid` varchar(25) NOT NULL,
  `admin_response` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `renew_request`
--

INSERT INTO `renew_request` (`Sid`, `Bid`, `admin_response`) VALUES
('18327', 'ISBN1', 'Accepted');

-- --------------------------------------------------------

--
-- Table structure for table `return_request`
--

CREATE TABLE `return_request` (
  `Sid` varchar(25) NOT NULL,
  `Bid` varchar(25) NOT NULL,
  `admin_response` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `return_request`
--

INSERT INTO `return_request` (`Sid`, `Bid`, `admin_response`) VALUES
('18327', 'ISBN242', 'Accepted');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `issue`
--
ALTER TABLE `issue`
  ADD PRIMARY KEY (`Sid`,`Bid`),
  ADD KEY `Bid` (`Bid`);

--
-- Indexes for table `issue_request`
--
ALTER TABLE `issue_request`
  ADD PRIMARY KEY (`Sid`,`Bid`),
  ADD KEY `Bid` (`Bid`);

--
-- Indexes for table `recommend`
--
ALTER TABLE `recommend`
  ADD PRIMARY KEY (`bname`,`bauthor`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `renew_request`
--
ALTER TABLE `renew_request`
  ADD PRIMARY KEY (`Sid`,`Bid`),
  ADD KEY `Bid` (`Bid`);

--
-- Indexes for table `return_request`
--
ALTER TABLE `return_request`
  ADD PRIMARY KEY (`Sid`,`Bid`),
  ADD KEY `return_request_ibfk_2` (`Bid`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `issue`
--
ALTER TABLE `issue`
  ADD CONSTRAINT `issue_ibfk_1` FOREIGN KEY (`Sid`) REFERENCES `register` (`Id`),
  ADD CONSTRAINT `issue_ibfk_2` FOREIGN KEY (`Bid`) REFERENCES `books` (`bid`);

--
-- Constraints for table `issue_request`
--
ALTER TABLE `issue_request`
  ADD CONSTRAINT `issue_request_ibfk_1` FOREIGN KEY (`Sid`) REFERENCES `register` (`Id`),
  ADD CONSTRAINT `issue_request_ibfk_2` FOREIGN KEY (`Bid`) REFERENCES `books` (`bid`);

--
-- Constraints for table `renew_request`
--
ALTER TABLE `renew_request`
  ADD CONSTRAINT `renew_request_ibfk_1` FOREIGN KEY (`Sid`) REFERENCES `register` (`Id`),
  ADD CONSTRAINT `renew_request_ibfk_2` FOREIGN KEY (`Bid`) REFERENCES `books` (`bid`);

--
-- Constraints for table `return_request`
--
ALTER TABLE `return_request`
  ADD CONSTRAINT `return_request_ibfk_1` FOREIGN KEY (`Sid`) REFERENCES `register` (`Id`),
  ADD CONSTRAINT `return_request_ibfk_2` FOREIGN KEY (`Bid`) REFERENCES `books` (`bid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
