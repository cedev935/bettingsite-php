-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2020 at 08:57 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ludo_legion`
--

-- --------------------------------------------------------

--
-- Table structure for table `chips`
--

CREATE TABLE `chips` (
  `user` varchar(255) NOT NULL,
  `chips` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chips`
--

INSERT INTO `chips` (`user`, `chips`) VALUES
('213', 100),
('8096', 100),
('9505', 100),
('949', 100),
('703', 100),
('7036723563', 100),
('9490780213', 100);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `winner` varchar(255) DEFAULT NULL,
  `looser` varchar(255) DEFAULT NULL,
  `ludo_id` varchar(255) DEFAULT NULL,
  `amount` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`winner`, `looser`, `ludo_id`, `amount`) VALUES
('NULL', 'NULL', 'BPmMai', 21),
('NULL', 'NULL', 'QPnnjp', 21),
('NULL', 'NULL', 'WBvzCv', 21),
('NULL', 'NULL', 'wKPtjK', 21),
('NULL', 'NULL', 'QeQvfL', 21),
('NULL', 'NULL', 'ahDiia', 21),
('NULL', 'NULL', 'QkZlUf', 21);

-- --------------------------------------------------------

--
-- Table structure for table `open`
--

CREATE TABLE `open` (
  `user_name` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `phone_no` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `running`
--

CREATE TABLE `running` (
  `ludo_id` varchar(255) NOT NULL,
  `room_id` varchar(255) NOT NULL,
  `player1` varchar(255) NOT NULL,
  `player2` varchar(255) NOT NULL,
  `amount` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `running`
--

INSERT INTO `running` (`ludo_id`, `room_id`, `player1`, `player2`, `amount`) VALUES
('QkZlUf', '8215476809', 'abc', 'def', 21);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_name` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_name`, `phone_no`, `password`, `email`) VALUES
('sai', '123', 'hy', ''),
('Madhu', '213', 'hy', ''),
('sai', '703', '123', ''),
('def', '7036723563', '563', 'ksmadhu1999@gmail.com'),
('Shabari', '8096', 'hy', ''),
('madhu', '949', '123', ''),
('abc', '9490780213', '213', 'saimadhukammari@gmail.com'),
('Naveen', '9505', 'hy', '');

-- --------------------------------------------------------

--
-- Table structure for table `withdraw`
--

CREATE TABLE `withdraw` (
  `phone_no` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `amount` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `withdraw`
--

INSERT INTO `withdraw` (`phone_no`, `user_name`, `amount`) VALUES
('213', 'sai', 20),
('8096', 'JS', 32);

-- --------------------------------------------------------

--
-- Table structure for table `withdraw_req`
--

CREATE TABLE `withdraw_req` (
  `user_name` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `amount` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `withdraw_req`
--

INSERT INTO `withdraw_req` (`user_name`, `phone_no`, `amount`) VALUES
('Naveen', '9505', 50);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`phone_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
