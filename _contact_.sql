-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2022 at 09:38 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contact`
--
CREATE DATABASE IF NOT EXISTS `contact` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `contact`;

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
  `message_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`name`, `email`, `phone_number`, `subject`, `message`, `message_id`) VALUES
('Peter Jardine', 'chaos.miner65@gmail.com', '07871821096', 'Meowdy', 'jxfjfjhfthjfj', 12),
('Peter Jardine', 'chaos.miner65@gmail.com', '07871821096', 'Meowdy', 'dfghedthg dhgds htdshdgh ersdtdh ', 13),
('wferw', 'wrfwrf', 'wrfgwrf', 'sdfwsf', 'this works now', 14),
('Peter Jardine', 'rwtqrwg@eafge.co', '07871821096', 'yrtesyr', 'rthrfdgshdrtyh', 16),
('Peter Jardine', 'chaos.miner65@gmail.com', '07871821096', 'Meowdy', 'etyhdfhdtghdth', 17),
('Peter Jardine', 'chaos.miner65@gmail.com', '07871821096', 'Meowdy', 'rydrfgdfgfrdgrdghrt', 18),
('Peter Jardine', 'chaos.miner65@gmail.com', '07871821096', 'Meowdy', 'egerdfgeageagearg', 19),
('Peter Jardine', 'chaos.miner65@gmail.com', '07871821096', 'Meowdy', 'dfhdghdhdth', 20),
('Peter Jardine', 'chaos.miner65@gmail.com', '07871821096', 'Meowdy', 'gertghdfhgdfghetrhe erge', 21),
('Peter Jardine', 'chaos.miner65@gmail.com', '07871821096', 'Meowdy', 'eghdtfhfshtrsth', 22),
('Peter Jardine', 'chaos.miner65@gmail.com', '07871821096', 'Meowdy', 'wrtawersfgaewrga rwerawgfawfgaewr ', 23),
('Peter Jardine', 'chaos.miner65@gmail.com', '07871821096', 'Meowdy', 'gkfygiygftiytiyti', 24),
('Peter Jardine', 'chaos.miner65@gmail.com', '07871821096', 'Meowdy', 'rhehthdhdh fdghfdgh f', 25),
('Peter Jardine', 'chaos.miner65@gmail.com', '07871821096', 'fdghjfg', 'fghnfgnfghfdgh', 26),
('Peter Jardine', 'chaos.miner65@gmail.com', '07871821096', 'Meowdy', 'gdsafgdfgdfg drg dfgdsf d', 27),
('Peter Jardine', 'chaos.miner65@gmail.com', '07871821096', 'Meowdy', 'yuretsyretsyser', 28),
('Peter Jardine', 'chaos.miner65@gmail.com', '07871821096', 'Meowdy', 'fhfsdhfghdfghdghfdghfgh', 29),
('Peter Jardine', 'chaos.miner65@gmail.com', '07871821096', 'Meowdy', 'tdrytdhtgfdxhfgdhf', 30),
('Peter Jardine', 'chaos.miner65@gmail.com', '07871821096', 'Meowdy', 'rtyutydidtuty', 31),
('Peter Jardine', 'chaos.miner65@gmail.com', '07871821096', 'dzhdsh', 'thsfhsrth', 32);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(15) NOT NULL,
  `article_image` varchar(255) NOT NULL,
  `title` varchar(40) NOT NULL,
  `description` varchar(50) NOT NULL,
  `profile_image` varchar(255) NOT NULL,
  `writer` varchar(40) NOT NULL,
  `date` date NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `category`, `article_image`, `title`, `description`, `profile_image`, `writer`, `date`, `link`) VALUES
(1, 'Careers', 'Assets/asset_9.jpeg', 'project managers', 'Salary Range 24k- 32k DOE + Bonus Hours 40 hours p', 'Assets/netmatters-ltd-VXAv.png', 'netmatters', '2021-11-02', '#'),
(2, 'Careers', 'Assets/asset_11.jpeg', 'Specialist', 'Salary Range £28,000 - £34,000 per annum + Bonus H', 'Assets/netmatters-ltd-VXAv.png', 'Netmatters LTD', '2021-11-02', '#'),
(3, 'Telecoms', 'Assets/asset_7.jpeg', 'Telecoms advice', 'These are the top 9 questions we\'d ask when ...', 'Assets/netmatters-ltd-VXAv.png', 'Netmatters LTD', '2021-10-28', '#');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
