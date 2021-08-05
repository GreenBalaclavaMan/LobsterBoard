-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2021 at 11:55 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_lobsterboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_users`
--

CREATE TABLE `t_users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(32) NOT NULL,
  `user_birthday` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_email` varchar(64) NOT NULL,
  `user_password` varchar(512) NOT NULL,
  `user_verified` tinyint(1) NOT NULL,
  `user_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_users`
--

INSERT INTO `t_users` (`user_id`, `user_name`, `user_birthday`, `user_email`, `user_password`, `user_verified`, `user_active`) VALUES
(1, 'fgdhb', '2021-08-04 15:29:50', 'nothing', '$2y$10$or483lyFUkDT5cAh1c9Yie2WFDyVEVP/hABNes5r9vl7u9u7DKfcu', 0, 0),
(2, 'fgdhb', '2021-08-04 16:31:10', 'nothing', '$2y$10$it1B3xSaN13m9zq0zdDv/uIrjx9wuvZhMot44L2dYfdZm8.9bBO6a', 0, 0),
(3, 'ujlohgkvg', '2021-08-04 16:32:35', 'nothing', '$2y$10$js.9hWBcO3nc2xy..FhUXOfYIAKN7e3G/.W7ps/0fAPAcbIhBG8si', 0, 0),
(4, 'nick', '2021-08-04 17:10:36', 'nothing', '$2y$10$lNaCK34PA8V/69Q0rlt0yOKYo3g42YHwYAw3ymjWywT0dy9pgnAdG', 0, 0),
(5, 'xbvfxc', '2021-08-04 17:39:04', 'gbdfgh@saerfgwsrt.com', '$2y$10$ab9AVFrZELJ/RJX5Yw.rNOFI01QaFY9NBtQFaC6yrp5vSQMxuLoXe', 0, 0),
(6, 'test1', '2021-08-04 19:06:17', 'test1@test1.com', '$2y$10$Hka2p1VZ/TGBkpz2JXzRkucwgxxYF7g7.2Oz54GOovu.HS9ZxMUpi', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_users`
--
ALTER TABLE `t_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_users`
--
ALTER TABLE `t_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
