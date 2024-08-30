-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2024 at 08:11 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wbsls_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` int(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `contact`, `email`, `username`, `password`) VALUES
(4, 'Ken Boakye', 543977899, 's.n.b.n.b.83@gmail.com', 'Adansie', 'Adansie@1');

-- --------------------------------------------------------

--
-- Table structure for table `logrecs`
--

CREATE TABLE `logrecs` (
  `id` bigint(20) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `circuit` varchar(255) NOT NULL,
  `school` varchar(255) NOT NULL,
  `purpose` longtext NOT NULL,
  `observation` longtext NOT NULL,
  `action` longtext NOT NULL,
  `signed` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logrecs`
--

INSERT INTO `logrecs` (`id`, `date`, `circuit`, `school`, `purpose`, `observation`, `action`, `signed`, `position`) VALUES
(1, '2023-07-29 00:00:00', 'Adanwomase', 'Asonomaso Presbyterian Junior High School', 'visit', 'Two teacher were absent with permission. The Headteacher was very much serious qith the cleaning of the school compound.', 'i had a meeting with the Santation Representative in the school concerning the issue on gronnd.', 'Asaase Aban', 'CISO'),
(2, '2023-07-29 00:00:00', 'Adanwomase', 'Asonomaso Presbyterian Junior High School', 'visit', 'Two teacher were absent with permission. The Headteacher was very much serious qith the cleaning of the school compound.', 'i had a meeting with the Santation Representative in the school concerning the issue on gronnd.', 'Asaase Aban', 'CISO'),
(5, '0000-00-00 00:00:00', '', '', '', '', '', '', ''),
(6, '2023-08-24 00:00:00', 'Ankaase', 'Abrade', 'Work inspection', 'All teachers were up to date with their work', 'complement', 'CISO', 'CISO'),
(7, '2020-07-09 00:00:00', 'Tanoso', 'aamusted', 'visit', 'the school was clen', 'no action', 'ken', 'Sup');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` int(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `contact`, `email`, `username`, `password`) VALUES
(1, 'Isaac Kofi Acheampong', 543071838, 'ika@aamusted.edu.gh', 'group3', 'group3'),
(2, 'Appiah Danso Abeam', 248338986, 'ada@aamusted.edu.gh', 'group3', 'group3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logrecs`
--
ALTER TABLE `logrecs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `logrecs`
--
ALTER TABLE `logrecs`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
