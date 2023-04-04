-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 04, 2023 at 05:05 PM
-- Server version: 8.0.32-0ubuntu0.20.04.2
-- PHP Version: 7.4.3-4ubuntu2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `snapshots`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

CREATE TABLE `user_registration` (
  `id` int NOT NULL,
  `admin_name` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `admin_email` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `admin_contact` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `admin_password` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `admin_role` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `admin_avatar` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `registration_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`id`, `admin_name`, `admin_email`, `admin_contact`, `admin_password`, `admin_role`, `admin_avatar`, `registration_date`) VALUES
(1, 'Vivek Robin Kujur', 'robinkujur@aidcom.in', '9199450345', 'Admin1234#@', 'user', ' http://localhost/snapshots/uploads/robin.jpeg', '2023-04-04 16:59:04'),
(2, 'Vivek Robin Kujur', 'robinkujur@aidcom.in', '9264453821', 'Admin1234#@', 'user', ' http://localhost/snapshots/uploads/robin.jpeg', '2023-04-04 17:02:39'),
(3, 'Vivek Robin Kujur', 'robinkujur@aidcom.in', '9264453821', 'Admin1234#@', 'user', ' http://localhost/snapshots/uploads/robin.jpeg', '2023-04-04 17:04:31'),
(4, 'vivek sharma', 'daniel@gmail.com', '123', '123', 'user', ' http://localhost/snapshots/uploads/newFile.jpg', '2023-04-04 17:04:47'),
(5, 'vivek sharma', 'daniel@gmail.com', '123', '123', 'user', ' http://localhost/snapshots/uploads/newFile.jpg', '2023-04-04 17:05:13'),
(6, '', 'sdsd@uu.comn', '', '', 'user', ' http://localhost/snapshots/uploads/', '2023-04-04 17:05:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_registration`
--
ALTER TABLE `user_registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_registration`
--
ALTER TABLE `user_registration`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
