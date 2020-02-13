-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2020 at 03:52 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `disc`
--

-- --------------------------------------------------------

--
-- Table structure for table `score_sheet`
--

CREATE TABLE `score_sheet` (
  `id` int(11) NOT NULL,
  `num` varchar(27) NOT NULL,
  `style` varchar(27) NOT NULL,
  `disc` varchar(27) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `score_sheet`
--

INSERT INTO `score_sheet` (`id`, `num`, `style`, `disc`) VALUES
(1, '1', 'B', 'D'),
(2, '1', 'D', 'I'),
(3, '1', 'A', 'S'),
(4, '1', 'C', 'C'),
(5, '2', 'A', 'D'),
(6, '2', 'C', 'I'),
(7, '2', 'D', 'S'),
(8, '2', 'B', 'C'),
(9, '3', 'C', 'D'),
(10, '3', 'B', 'I'),
(11, '3', 'A', 'S'),
(12, '3', 'D', 'C'),
(13, '4', 'A', 'D'),
(14, '4', 'D', 'I'),
(15, '4', 'C', 'S'),
(16, '4', 'B', 'C'),
(17, '5', 'D', 'D'),
(18, '5', 'B', 'I'),
(19, '5', 'C', 'S'),
(20, '5', 'A', 'C'),
(21, '6', 'B', 'D'),
(22, '6', 'A', 'I'),
(23, '6', 'D', 'S'),
(24, '6', 'C', 'C'),
(25, '7', 'C', 'D'),
(26, '7', 'D', 'I'),
(27, '7', 'B', 'S'),
(28, '7', 'A', 'C'),
(30, '8', 'B', 'D'),
(31, '8', 'A', 'I'),
(32, '8', 'D', 'S'),
(33, '8', 'C', 'C'),
(34, '9', 'D', 'D'),
(35, '9', 'A', 'I'),
(36, '9', 'C', 'S'),
(37, '9', 'B', 'C'),
(38, '10', 'C', 'D'),
(39, '10', 'B', 'I'),
(40, '10', 'D', 'S'),
(41, '10', 'A', 'C'),
(42, '11', 'A', 'D'),
(43, '11', 'D', 'I'),
(44, '11', 'C', 'S'),
(45, '11', 'B', 'C'),
(46, '12', 'D', 'D'),
(47, '12', 'C', 'I'),
(48, '12', 'A', 'S'),
(49, '12', 'B', 'C'),
(50, '13', 'B', 'D'),
(51, '13', 'A', 'I'),
(52, '13', 'D', 'S'),
(53, '13', 'C', 'C'),
(54, '14', 'C', 'D'),
(55, '14', 'D', 'I'),
(56, '14', 'B', 'S'),
(57, '14', 'A', 'C'),
(58, '15', 'D', 'D'),
(59, '15', 'A', 'I'),
(60, '15', 'C', 'S'),
(61, '15', 'B', 'C'),
(62, '16', 'A', 'D'),
(63, '16', 'B', 'I'),
(64, '16', 'C', 'S'),
(65, '16', 'D', 'C'),
(66, '17', 'B', 'D'),
(67, '17', 'C', 'I'),
(68, '17', 'D', 'S'),
(69, '17', 'A', 'C'),
(70, '18', 'C', 'D'),
(71, '18', 'A', 'I'),
(72, '18', 'B', 'S'),
(73, '18', 'D', 'C'),
(74, '19', 'D', 'D'),
(75, '19', 'B', 'I'),
(76, '19', 'C', 'S'),
(77, '19', 'A', 'C'),
(78, '20', 'A', 'D'),
(79, '20', 'D', 'I'),
(80, '20', 'C', 'S'),
(81, '20', 'B', 'C'),
(82, '21', 'A', 'D'),
(83, '21', 'B', 'I'),
(84, '21', 'C', 'S'),
(85, '21', 'D', 'C'),
(86, '22', 'D', 'D'),
(87, '22', 'C', 'I'),
(88, '22', 'B', 'S'),
(89, '22', 'A', 'C'),
(90, '23', 'D', 'D'),
(91, '23', 'B', 'I'),
(92, '23', 'A', 'S'),
(93, '23', 'C', 'C'),
(94, '24', 'D', 'D'),
(95, '24', 'C', 'I'),
(96, '24', 'A', 'S'),
(97, '24', 'B', 'C');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `score_sheet`
--
ALTER TABLE `score_sheet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `score_sheet`
--
ALTER TABLE `score_sheet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
