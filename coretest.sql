-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2021 at 07:39 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `coretest`
--

CREATE TABLE `coretest` (
  `id` int(200) NOT NULL,
  `name` varchar(210) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `pass` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coretest`
--

INSERT INTO `coretest` (`id`, `name`, `email`, `pass`) VALUES
(1, 'Sample Lead D', 'samplelead@gmail.com', '23456'),
(2, 'Amit', 'amitgupta.5097@gmail.com', '12345'),
(3, 'Amit', 'amitgupta.5097@gmail.com', '123456'),
(6, 'Sample Lead DSS', 'deepa.soni.1712@gmail.com', '2345678'),
(7, 'Sample Lead DSS', 'deepa.soni.1712@gmail.com', '234567'),
(9, 'Sample Lead D', 'samplelead@gmail.com', '23324232'),
(16, 'hkuamr', 'j@gmail.com', 'j'),
(17, 'kkkkkk', 'j@gmail.com', 'r6r6'),
(21, 'gayu Gupta', 'gayatri@gmail.com', '718298'),
(22, 'gayu Gupta', 'gayatri@gmail.com', '4w5434'),
(23, 'kumar Gupta', 'kuam@gmail.com', '6272'),
(24, 'Kumar', 'akumar@gmail.com', '734834834');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coretest`
--
ALTER TABLE `coretest`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coretest`
--
ALTER TABLE `coretest`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
