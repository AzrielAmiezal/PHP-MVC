-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2023 at 01:18 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpmvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `std_name` varchar(100) NOT NULL,
  `std_id` varchar(100) NOT NULL,
  `std_email` varchar(100) NOT NULL,
  `std_course` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `std_name`, `std_id`, `std_email`, `std_course`) VALUES
(2, 'Adam Haikal', 'AM2007007805', 'kl2007007805@student.uptm.edu.my', 'Computer Network Security (CT205)'),
(5, 'Muhammad Ikmal Suparjo', 'AM2001002240', 'kl2001002240@student.uptm.edu.my', 'Finance Accounting (AA202)'),
(6, 'Nurul Amirah', 'AM2007003323', 'kl20070033230@student.uptm.edu.my', 'Teaching English as Second Language - TESL (AB101)'),
(7, 'Hafiz Mahamad', 'AM2001008890', 'kl2001008890@student.uptm.edu.my', 'Cyber Security (CT206)'),
(8, 'Syafiqah Aina', 'AM2007005560', 'kl2007005560@student.uptm.edu.my', 'Computer Application Development (CT204)'),
(17, 'Amiezal Azwary', 'AM2007006809', 'kl2007006808@student.uptm.edu.my', 'Computer Application Development (CT204)'),
(18, 'Spongebob Squarepants', 'AM2003087650', 'kl2003087650@student.kuptm.edu.my', 'Business Computing (CT203)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
