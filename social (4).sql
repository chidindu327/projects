-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2024 at 08:37 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `social`
--

-- --------------------------------------------------------

--
-- Table structure for table `community`
--

CREATE TABLE `community` (
  `id` int(11) NOT NULL,
  `community_name` varchar(100) DEFAULT NULL,
  `date_created` datetime DEFAULT current_timestamp(),
  `status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `community_group`
--

CREATE TABLE `community_group` (
  `id` int(11) NOT NULL,
  `community_id` int(11) DEFAULT NULL,
  `users_id` int(11) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `friends_list`
--

CREATE TABLE `friends_list` (
  `id` int(11) NOT NULL,
  `me_id` int(11) DEFAULT NULL,
  `you_id` int(11) DEFAULT NULL,
  `request_status` varchar(100) DEFAULT 'no',
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `interests`
--

CREATE TABLE `interests` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `interests`
--

INSERT INTO `interests` (`id`, `title`, `description`, `image`) VALUES
(2, 'Swimming', 'Swim like never before', 'https://i0.wp.com/images-prod.healthline.com/hlcmsresource/images/topic_centers/Fitness-Exercise/1763-female_swim_exercise_1296x728-header.jpg?w=1155&h=1528'),
(3, 'Gymnastics', 'Stretch your body', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRmPbfDQLtjkTlRzufbbVwFW0iljiErNVjHMg&s'),
(4, 'Jewelry', 'Make gold ornaments', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcStidXy3Emvh2fQxpsc2ETMkgGRiVVQYuCojw&s');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `content` varchar(100) DEFAULT NULL,
  `upload_photo` varchar(100) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `upload_video` varchar(100) DEFAULT NULL,
  `privacy` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `notification` varchar(100) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `random_numbers_table`
--

CREATE TABLE `random_numbers_table` (
  `num_id` int(11) NOT NULL,
  `numbers` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `random_numbers_table`
--

INSERT INTO `random_numbers_table` (`num_id`, `numbers`) VALUES
(7, '7,3,2,1,3,1'),
(8, '1,3,7,3,1,7'),
(9, '8,5,2,4,1,9');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `email_address` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `bio` varchar(255) DEFAULT NULL,
  `website` varchar(100) DEFAULT NULL,
  `profile_picture` varchar(100) DEFAULT NULL,
  `num_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `full_name`, `email_address`, `password`, `username`, `bio`, `website`, `profile_picture`, `num_id`) VALUES
(5, 'Destiny Sharpe', 'galyw@mailinator.com', '1234', 'pexecucuz', NULL, NULL, NULL, '0'),
(6, 'Ariel Workman', 'madusy@mailinator.com', 'Pa$$w0rd!', 'xedugehyqa', NULL, NULL, NULL, '0'),
(7, 'Gareth Conrad', 'qequcohy@mailinator.com', 'Pa$$w0rd!', 'xumah', NULL, NULL, NULL, '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `community`
--
ALTER TABLE `community`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `community_group`
--
ALTER TABLE `community_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `friends_list`
--
ALTER TABLE `friends_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interests`
--
ALTER TABLE `interests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `random_numbers_table`
--
ALTER TABLE `random_numbers_table`
  ADD PRIMARY KEY (`num_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `community`
--
ALTER TABLE `community`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `community_group`
--
ALTER TABLE `community_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `friends_list`
--
ALTER TABLE `friends_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `interests`
--
ALTER TABLE `interests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `random_numbers_table`
--
ALTER TABLE `random_numbers_table`
  MODIFY `num_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
