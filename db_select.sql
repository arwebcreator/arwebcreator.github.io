-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2020 at 08:17 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_select`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_insert`
--

CREATE TABLE `tbl_insert` (
  `id` int(6) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `country` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_select`
--

CREATE TABLE `tbl_select` (
  `id` int(6) NOT NULL,
  `country` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_select`
--

INSERT INTO `tbl_select` (`id`, `country`) VALUES
(1, 'Cambodia'),
(2, 'Mexico'),
(3, 'India'),
(4, '	France'),
(5, 'China'),
(6, 'Bermuda'),
(7, 'Australia'),
(8, 'Andorra'),
(9, 'Burundi'),
(10, 'Colombia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_insert`
--
ALTER TABLE `tbl_insert`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_select`
--
ALTER TABLE `tbl_select`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_insert`
--
ALTER TABLE `tbl_insert`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_select`
--
ALTER TABLE `tbl_select`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
