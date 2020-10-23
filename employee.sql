-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2020 at 01:34 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `first_name` varchar(64) NOT NULL,
  `last_name` varchar(64) NOT NULL,
  `residence` text NOT NULL,
  `employee_id` int(8) NOT NULL,
  `email` varchar(64) NOT NULL,
  `telephone` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `first_name`, `last_name`, `residence`, `employee_id`, `email`, `telephone`) VALUES
(21, 'Jane', 'Chebet', '44 Mutithi Lane, Parklands', 47981204, 'janechebet@yahoo.com', '+254710253891'),
(22, 'Lebu', 'Ayiga', 'Shaba village,Syokimau', 45981251, 'lebu.a.7@gmail.com', '+254719307452'),
(23, 'Marylyn', 'Kemunto', '23 Jil Drive,Lavinton', 98125678, 'mkemmy@gmail.com', '+254710937822'),
(24, 'Dennis', 'Njuguna', 'Garvey Heights, Westlands', 23197237, 'njuguna567@gmail.com', '+254745902128'),
(25, 'Cecilia ', 'Martins', 'Grace Appartments, Kasarani', 56023211, 'martins32cee@outlook.com', '+254723986610'),
(26, 'Terry', 'Omondi', 'Jenevaa Estate, Madaraka', 61092512, 'omonditee@hotmail.com', '+254758990145'),
(27, 'Angela', 'Kerubo', 'Redsoil,Mwiki', 98913761, 'keruboangela@gmail.com', '+25470689281');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
