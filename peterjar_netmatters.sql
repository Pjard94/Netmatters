-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 31, 2022 at 09:11 AM
-- Server version: 8.0.28
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `peterjar_netmatters`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `phone_number` varchar(13) DEFAULT NULL,
  `subject` varchar(20) DEFAULT NULL,
  `message` varchar(400) DEFAULT NULL,
  `message_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`name`, `email`, `phone_number`, `subject`, `message`, `message_id`) VALUES
('Peter Jardine', 'chaos.miner65@gmail.com', '07871821096', 'Meowdy', 'dgdfhdfhgdaghhdzhdhds', 10),
('Peter Jardine', 'chaos.miner65@gmail.com', '07871821096', 'Meowdy', 'thdhddfhdfghcvbdghdgtzhdgh', 11),
('Peter Jardine', 'chaos.miner65@gmail.com', '07871821096', 'Meowdy', 'jxfjfjhfthjfj', 12);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint UNSIGNED NOT NULL,
  `category` varchar(15) NOT NULL,
  `article_image` varchar(255) NOT NULL,
  `title` varchar(40) NOT NULL,
  `description` varchar(50) NOT NULL,
  `profile_image` varchar(255) NOT NULL,
  `writer` varchar(40) NOT NULL,
  `date` date NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `category`, `article_image`, `title`, `description`, `profile_image`, `writer`, `date`, `link`) VALUES
(1, 'Careers', 'Assets/asset_9.jpeg', 'project managers', 'Salary Range 24k- 32k DOE + Bonus Hours 40 hours p', 'Assets/netmatters-ltd-VXAv.png', 'netmatters LTD', '2021-11-02', '#'),
(2, 'Careers', 'Assets/asset_11.jpeg', 'Specialist', 'Salary Range £28,000 - £34,000 per annum', 'Assets/netmatters-ltd-VXAv.png', 'Netmatters LTD', '2021-11-02', '#'),
(3, 'Telecoms', 'Assets/asset_7.jpeg', 'Telecoms advice', 'These are the top 9 questions we\'d ask when', 'Assets/netmatters-ltd-VXAv.png', 'Netmatters LTD', '2021-10-28', '#');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`message_id`),
  ADD KEY `message_id` (`message_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
