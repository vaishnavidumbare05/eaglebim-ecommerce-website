-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2024 at 08:32 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `architecture_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `category` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `date`, `category`, `image`, `content`) VALUES
(1, '5 Effective Ways to Encourage Knowledge Sharing', '2024-11-13', 'Interior', 'blog-1.jpg', '5 Effective Ways to Encourage Knowledge Sharing'),
(2, 'Why Parents are Pushing Back Against Tech Summer Camps', '2024-11-13', 'Interior', 'blog-2.jpg', 'Why Parents are Pushing Back Against Tech Summer Camps'),
(3, '5 Awesome and Beautiful House in Dhaka, Bangladesh', '2024-11-13', 'Interior', 'blog-3.jpg', '5 Awesome and Beautiful House in Dhaka, Bangladesh'),
(4, 'Where Can You Find Free Software Company Resources', '2024-11-13', 'Interior', 'blog-1.jpg', 'Where Can You Find Free Software Company Resources'),
(5, 'Interior Best Equipment for Architecture and Interior Design', '2024-11-13', 'Interior', 'blog-2.jpg', '\r\nBest Equipment for Architecture and Interior Design'),
(6, '5 Awesome and Beautiful House in Dhaka, Bangladesh', '2024-11-13', 'Interior', 'blog-3.jpg', '5 Awesome and Beautiful House in Dhaka, Bangladesh');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `image_url`, `title`) VALUES
(14, 'uploads/project-1.jpg', 'Luxury Modern Building Sandigo USA'),
(15, 'uploads/project-2.jpg', 'Luxury Modern USA'),
(16, 'uploads/project-3.jpg', 'Luxury Modern USA'),
(17, 'uploads/project-4.jpg', 'Luxury Modern USA'),
(18, 'uploads/project-5.jpg', 'Luxury Modern Building Sandigo USA'),
(19, 'uploads/project-6.jpg', 'Luxury Modern Building Sandigo USA'),
(20, 'uploads/project-7.jpg', 'Luxury Modern Building Sandigo USA'),
(21, 'uploads/masonary-5.jpg', '	Luxury Modern Building Sandigo USA'),
(22, 'uploads/masonary-1.jpg', '	Luxury Modern Building USA');

-- --------------------------------------------------------

--
-- Table structure for table `team_members`
--

CREATE TABLE `team_members` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `pinterest` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `team_members`
--

INSERT INTO `team_members` (`id`, `name`, `role`, `image_url`, `facebook`, `twitter`, `linkedin`, `pinterest`) VALUES
(1, 'Ajinkya Bankar', 'Founder', 'DSC_0420.JPG', '', '', '', ''),
(2, 'Kartik Jadhav', 'Co-Founder', 'DSC_0467 copy.jpg', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `created_at`) VALUES
(1, 'admin', 'ajit@admin.com', '$2y$10$limxgAcTrO5uq9rVjZ7bBezUXZkOFGTkLoju1alwCyq8A0B4YUpla', '2024-11-14 10:02:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_members`
--
ALTER TABLE `team_members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `team_members`
--
ALTER TABLE `team_members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
