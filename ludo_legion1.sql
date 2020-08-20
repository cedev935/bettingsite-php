-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2020 at 12:06 PM
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
  `chips` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chips`
--

INSERT INTO `chips` (`user`, `chips`) VALUES
('213', 20),
('8096', 14),
('9505', 14);

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
  `room_id` bigint(255) NOT NULL,
  `player1` varchar(255) NOT NULL,
  `player2` varchar(255) NOT NULL,
  `amount` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `ORDERID` varchar(255) NOT NULL,
  `MID` varchar(255) NOT NULL,
  `TXNID` varchar(255) NOT NULL,
  `TXNAMOUNT` int(255) NOT NULL,
  `PAYMENTMODE` varchar(255) NOT NULL,
  `CURRENCY` varchar(255) NOT NULL,
  `TXNDATE` varchar(255) NOT NULL,
  `STATUS` varchar(255) NOT NULL,
  `RESPCODE` varchar(255) NOT NULL,
  `RESPMSG` varchar(255) NOT NULL,
  `GATEWAYNAME` varchar(255) NOT NULL,
  `BANKTXNID` varchar(255) NOT NULL,
  `BANKNAME` varchar(255) NOT NULL,
  `CHECKSUMHASH` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`ORDERID`, `MID`, `TXNID`, `TXNAMOUNT`, `PAYMENTMODE`, `CURRENCY`, `TXNDATE`, `STATUS`, `RESPCODE`, `RESPMSG`, `GATEWAYNAME`, `BANKTXNID`, `BANKNAME`, `CHECKSUMHASH`) VALUES
('ORDS51027317', 'hfjXjg82480733779919', '20200820111212800110168568201846281', 12, 'PPI', 'INR', '2020-08-20 12:30:09.0', 'TXN_SUCCESS', '01', 'Txn Success', 'WALLET', '63072638', 'WALLET', '8nh1uRV4hdr2Sqj7tOm2CKOUFD2E9OMp3rKVYsJ3bWlcQHEqMqBPgVMoxKYdOVaaEiEnWMR/NEC5XIuffLjwHjag+2wQeEOL0bzjK1IpL7w='),
('ORDS37151192', 'hfjXjg82480733779919', '20200820111212800110168491001824393', 14, 'PPI', 'INR', '2020-08-20 14:51:48.0', 'TXN_SUCCESS', '01', 'Txn Success', 'WALLET', '63074039', 'WALLET', 'MT4iVVUjRbmoJ5y+aWIvK8O8NT8kT3lPjR0hYndaCWlQXZX4fS+dgTvVcX1VA7BQj3JMkm4xaDU7GcsxDUyQOtVfnj+uvG9p4OUxlO2RbcQ='),
('ORDS38494380', 'hfjXjg82480733779919', '20200820111212800110168673601813623', 14, 'PPI', 'INR', '2020-08-20 14:54:37.0', 'TXN_SUCCESS', '01', 'Txn Success', 'WALLET', '63074064', 'WALLET', 'cnWN3IuamlQ1/Z3NxeB977RhCZ2Nkky2bEaV6rYpbqXovLlzOmyq1Eq5AcPwd3Oq+LAZ/h0U7q7ULKThB8b10uj46mWIzoSQSPaWozJtHXs=');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_name` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_name`, `phone_no`, `password`) VALUES
('Madhu', '213', 'hy'),
('Shabari', '8096', 'hy'),
('Naveen', '9505', 'hy');

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
