-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2021 at 04:06 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `enrollmentsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `pre_educational_information`
--

CREATE TABLE `pre_educational_information` (
  `Username` varchar(255) NOT NULL,
  `SchoolLastAttended` varchar(255) NOT NULL,
  `SchoolAddress` varchar(255) NOT NULL,
  `TrackAndStrand` varchar(255) NOT NULL,
  `YearGraduated` varchar(255) NOT NULL,
  `YearLevelThisComingSY` varchar(255) NOT NULL,
  `CourseThisComingSY` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pre_family_information`
--

CREATE TABLE `pre_family_information` (
  `Username` varchar(255) NOT NULL,
  `FatherName` varchar(255) NOT NULL,
  `FatherNationality` varchar(255) NOT NULL,
  `FatherOccupation` varchar(255) NOT NULL,
  `FatherContactNumber` varchar(255) NOT NULL,
  `MotherName` varchar(255) NOT NULL,
  `MotherNationality` varchar(255) NOT NULL,
  `MotherOccupation` varchar(255) NOT NULL,
  `MotherContactNumber` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pre_general_student_information`
--

CREATE TABLE `pre_general_student_information` (
  `Username` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `MiddleName` varchar(255) NOT NULL,
  `EmailAddress` varchar(255) NOT NULL,
  `HomeAddress` varchar(255) NOT NULL,
  `ContactNumber` varchar(255) NOT NULL,
  `Birthday` date NOT NULL,
  `BrithPlace` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pre_signup`
--

CREATE TABLE `pre_signup` (
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pre_signup`
--

INSERT INTO `pre_signup` (`Username`, `Password`, `Email`) VALUES
('syblcross624', 'syblcross624', 'ads');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
