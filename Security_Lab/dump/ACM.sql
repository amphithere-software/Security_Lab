-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Oct 12, 2019 at 04:04 PM
-- Server version: 10.4.8-MariaDB-1:10.4.8+maria~bionic
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ACM`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--
CREATE DATABASE IF NOT EXISTS ACM;
USE ACM;

CREATE TABLE `members` (
  `firstName` varchar(40) NOT NULL,
  `lastName` varchar(40) NOT NULL,
  `sessionID` char(64) NOT NULL,
  `userName` varchar(40) NOT NULL,
  `password` char(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`firstName`, `lastName`, `sessionID`, `userName`, `password`) VALUES
('Aaron', 'Brown', 'afafb738461b35f1eb36194c21cb463113dfced4', 'abrown', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3'),
('Admin', 'Admin', '4e7afebcfbae000b22c7c85e5560f89a2a0280b4', 'acmAdmin', '9d989e8d27dc9e0ec3389fc855f142c3d40f0c50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`userName`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
