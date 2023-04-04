-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 05, 2023 at 02:10 AM
-- Server version: 8.0.32-0ubuntu0.22.04.2
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `image_deck`
--

CREATE TABLE `image_deck` (
  `id` int NOT NULL,
  `gallery_image` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `image_class` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `image_title` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `image_subtitle` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `image_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `image_deck`
--

INSERT INTO `image_deck` (`id`, `gallery_image`, `image_class`, `image_title`, `image_subtitle`, `image_date`) VALUES
(1, 'http://localhost/snapshots/uploads/images.jpeg', 'isotop-item application design', 'Cute Kitten', 'Lovely', '2023-04-05 02:03:28'),
(2, 'http://localhost/snapshots/uploads/spiderman.jpg', 'isotop-item dev design', 'Spiderman', 'Homecoming', '2023-04-05 02:07:38'),
(3, 'http://localhost/snapshots/uploads/1385532.jpg', 'isotop-item design marketing', 'Love art', 'Debian', '2023-04-05 02:08:11'),
(4, 'http://localhost/snapshots/uploads/newData.jpg', 'isotop-item marketing application', 'Black Widow', 'New Images', '2023-04-05 02:09:10'),
(5, 'http://localhost/snapshots/uploads/avenger.jpg', 'isotop-item application marketing', 'Avengers', 'Series', '2023-04-05 02:09:32');

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

CREATE TABLE `user_registration` (
  `id` int NOT NULL,
  `admin_name` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `admin_email` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `admin_contact` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `admin_password` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `admin_role` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `admin_avatar` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `registration_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`id`, `admin_name`, `admin_email`, `admin_contact`, `admin_password`, `admin_role`, `admin_avatar`, `registration_date`) VALUES
(1, 'Vivek Robin Kujur', 'robinkujur@aidcom.in', '9264453821', 'Admin1234#@', 'Gallery User', 'http://localhost/snapshots/uploads/Vivek Robin.jpeg', '2023-04-04 21:26:31'),
(2, 'Prisha Robin', 'prisharobin@gmail.com', '1234567890', 'Admin1234#@', 'Gallery User', 'http://localhost/snapshots/uploads/images.jpeg', '2023-04-04 22:19:45'),
(3, 'asdfasdf', 'pp@ymail.com', '1004', '1234', 'Gallery User', 'http://localhost/snapshots/uploads/', '2023-04-04 23:48:50'),
(4, 'shdfgsdf', 'g@gmail.com', '123456783', '2222', 'Gallery User', 'http://localhost/snapshots/uploads/avatar.png', '2023-04-05 00:52:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `image_deck`
--
ALTER TABLE `image_deck`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_registration`
--
ALTER TABLE `user_registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `image_deck`
--
ALTER TABLE `image_deck`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_registration`
--
ALTER TABLE `user_registration`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
