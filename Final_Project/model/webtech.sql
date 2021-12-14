-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2021 at 12:57 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webtech`
--

-- --------------------------------------------------------

--
-- Table structure for table `founders`
--

CREATE TABLE `founders` (
  `ID` int(255) NOT NULL,
  `Company_Name` varchar(255) NOT NULL,
  `CEO` varchar(255) NOT NULL,
  `Joined_Date` date NOT NULL,
  `Location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `founders`
--

INSERT INTO `founders` (`ID`, `Company_Name`, `CEO`, `Joined_Date`, `Location`) VALUES
(111, 'X International', 'Khalid', '2019-08-07', 'Dhaka, Bangladesh'),
(112, 'X International', 'Khalid', '2019-08-07', 'Dhaka, Bangladesh'),
(113, 'XYZ Enterprise', 'Fahad', '2018-08-05', 'Khulna, Bangladesh'),
(114, 'ABD Enterprise', 'Rosy', '2020-06-05', 'Chittagong, Bangladesh'),
(115, 'Hossen Enterprise', 'Nadim', '2019-08-05', 'Barishal, Bangladesh'),
(116, 'XYZ Enterprise', 'Mahin', '2020-08-05', 'Narsingdi, Bangladesh'),
(118, 'ABD Enterprise', 'Rosy', '2020-06-05', 'Chittagong, Bangladesh'),
(119, 'XYZ Enterprise', 'Fahad', '2018-08-05', 'Khulna, Bangladesh'),
(120, 'ABD Enterprise', 'Rosy', '2020-06-05', 'Chittagong, Bangladesh'),
(122, 'XYZ Enterprise', 'Mahin', '2020-08-05', 'Narsingdi, Bangladesh'),
(123, 'ABD Enterprise', 'Rosy', '2020-06-05', 'Chittagong, Bangladesh'),
(124, 'Hossen Enterprise', 'Nadim', '2019-08-05', 'Barishal, Bangladesh'),
(126, 'XYZ Enterprise', 'Fahad', '2018-08-05', 'Khulna, Bangladesh'),
(128, 'XYZ Enterprise', 'Fahad', '2018-08-05', 'Khulna, Bangladesh'),
(129, 'ABD Enterprise', 'Rosy', '2020-06-05', 'Chittagong, Bangladesh'),
(130, 'ABD Enterprise', 'Rosy', '2020-06-05', 'Chittagong, Bangladesh'),
(131, 'XYZ Enterprise', 'Fahad', '2018-08-05', 'Khulna, Bangladesh'),
(132, 'ABD Enterprise', 'Rosy', '2020-06-05', 'Chittagong, Bangladesh'),
(133, 'Hossen Enterprise', 'Nadim', '2019-08-05', 'Barishal, Bangladesh'),
(134, 'XYZ Enterprise', 'Mahin', '2020-08-05', 'Narsingdi, Bangladesh'),
(135, 'ABD Enterprise', 'Rosy', '2020-06-05', 'Chittagong, Bangladesh'),
(136, 'Hossen Enterprise', 'Nadim', '2019-08-05', 'Barishal, Bangladesh'),
(137, 'XYZ Enterprise', 'Mahin', '2020-08-05', 'Narsingdi, Bangladesh'),
(138, 'XYZ Enterprise', 'Fahad', '2018-08-05', 'Khulna, Bangladesh'),
(139, 'ABD Enterprise', 'Rosy', '2020-06-05', 'Chittagong, Bangladesh'),
(140, 'Mollah Traders', 'Fahad Mollah', '2020-06-12', 'Narsingdi, Bangladesh'),
(141, 'Mollah Traders', 'Fahad Mollah', '2020-06-12', 'Narsingdi, Bangladesh'),
(142, 'Siyam Enterprise', 'Ahmed Siam', '2021-12-10', 'Chittagong, Bangladesh'),
(143, 'Mahin Trades', 'Mahin Chowdhury', '2021-02-11', 'Khulna, Bangladesh');

-- --------------------------------------------------------

--
-- Table structure for table `investors`
--

CREATE TABLE `investors` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `investment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `investors`
--

INSERT INTO `investors` (`id`, `name`, `location`, `investment`) VALUES
(1, 'Nadim Hossen', 'Dhaka, Bangladesh', '$30000'),
(2, 'Nadim Hossen', 'Dhaka, Bangladesh', '$30000'),
(3, 'Lukaiya Rosy', 'Chittagong, Bangladesh', '$140000'),
(5, 'Fahad Mollah', 'Narsingdi, Bangladesh', '$30000'),
(7, 'Mahin Rahman', 'Dhaka, Bangladesh', '$20000'),
(8, 'Fahad Mollah', 'Narsingdi, Bangladesh', '$30000'),
(11, 'Fahad Mollah', 'Narsingdi, Bangladesh', '$30000'),
(12, 'Lukaiya Rosy', 'Chittagong, Bangladesh', '$140000'),
(13, 'Mahin Rahman', 'Dhaka, Bangladesh', '$20000'),
(14, 'Shaon Afrin', 'Khulna, Bangladesh', '$12000'),
(15, 'Abdullah Al', 'Munshiganj, Bangladesh', '$3500');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(255) NOT NULL,
  `Project_Title` varchar(255) NOT NULL,
  `Category` varchar(255) NOT NULL,
  `Start_Date` date NOT NULL,
  `End_Date` date NOT NULL,
  `Earned_Profit` varchar(255) NOT NULL,
  `Loss` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `Project_Title`, `Category`, `Start_Date`, `End_Date`, `Earned_Profit`, `Loss`) VALUES
(1111, 'EOS', 'Blockchain', '2018-06-01', '2018-12-01', '$4100000', ''),
(1118, 'Tezos', 'Blockchain', '2020-08-05', '2022-05-12', '', '$45000'),
(1119, 'Star EOS', 'Video Game', '2021-01-05', '2021-06-10', '', ''),
(1121, '', '', '0000-00-00', '0000-00-00', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `ID` int(255) NOT NULL,
  `Date` date NOT NULL,
  `AcName` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Amount` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`ID`, `Date`, `AcName`, `Type`, `Amount`, `Status`) VALUES
(2, '2021-10-03', 'Nadim Hossen', 'Withdraw', '$45500', 'Confirmed'),
(3, '2021-10-12', 'Shaon Afrin', 'Payment', '$4500', 'Confirmed'),
(6, '2021-10-07', 'Shazib Sheikh', 'Payment', '$2400', 'Confirmed'),
(7, '2021-10-07', 'Shazib Sheikh', 'Payment', '$2400', 'Confirmed'),
(8, '2021-10-15', 'Fahad Mollah', 'Withdraw', '$23400', 'Pending'),
(9, '2021-10-18', 'Abdullah Al', 'Payment', '$5400', 'Confirmed'),
(11, '2020-12-16', 'Lukaiya Rosy', 'Send Money', '$5356', 'Confirmed'),
(12, '2020-12-16', 'Lukaiya Rosy', 'Send Money', '$5356', 'Confirmed'),
(15, '2019-08-12', 'Karim Chowdhury', 'Payment', '$4300', 'Confirmed'),
(16, '2020-12-16', 'Lukaiya Rosy', 'Send Money', '$5356', 'Confirmed'),
(17, '2021-11-16', 'Mahin Khan', 'Withdraw', '$6300', 'Pending'),
(18, '2021-06-13', 'Fahim Ahmed', 'Payment', '$6348', 'Confirmed'),
(19, '2019-08-12', 'Karim Chowdhury', 'Payment', '$4300', 'Confirmed'),
(20, '2020-12-16', 'Lukaiya Rosy', 'Send Money', '$5356', 'Confirmed'),
(21, '2021-11-16', 'Mahin Khan', 'Withdraw', '$6300', 'Pending'),
(22, '2021-06-13', 'Fahim Ahmed', 'Payment', '$6348', 'Confirmed'),
(23, '2019-08-12', 'Karim Chowdhury', 'Payment', '$4300', 'Confirmed'),
(24, '2019-08-12', 'Karim Chowdhury', 'Payment', '$4300', 'Confirmed'),
(25, '2020-12-16', 'Lukaiya Rosy', 'Send Money', '$5356', 'Confirmed'),
(26, '2021-11-16', 'Mahin Khan', 'Withdraw', '$6300', 'Pending'),
(27, '2021-06-13', 'Fahim Ahmed', 'Payment', '$6348', 'Confirmed'),
(28, '2019-08-12', 'Karim Chowdhury', 'Payment', '$4300', 'Confirmed'),
(29, '2020-12-16', 'Lukaiya Rosy', 'Send Money', '$5356', 'Confirmed'),
(30, '2021-11-16', 'Mahin Khan', 'Withdraw', '$6300', 'Pending'),
(31, '2021-06-13', 'Fahim Ahmed', 'Payment', '$6348', 'Confirmed'),
(32, '2019-08-12', 'Karim Chowdhury', 'Payment', '$4300', 'Confirmed'),
(33, '2021-11-16', 'Mahin Khan', 'Withdraw', '$6300', 'Pending'),
(34, '2021-06-13', 'Fahim Ahmed', 'Payment', '$6348', 'Confirmed'),
(35, '2019-08-12', 'Karim Chowdhury', 'Payment', '$4300', 'Confirmed'),
(36, '2019-08-12', 'Karim Chowdhury', 'Payment', '$4300', 'Confirmed'),
(37, '2020-12-16', 'Lukaiya Rosy', 'Send Money', '$5356', 'Confirmed'),
(38, '2021-11-16', 'Mahin Khan', 'Withdraw', '$6300', 'Pending'),
(39, '2021-06-13', 'Fahim Ahmed', 'Payment', '$6348', 'Confirmed'),
(40, '2019-08-12', 'Karim Chowdhury', 'Payment', '$4300', 'Confirmed'),
(41, '2021-06-13', 'Fahim Ahmed', 'Payment', '$6348', 'Confirmed'),
(42, '2019-08-12', 'Karim Chowdhury', 'Payment', '$4300', 'Confirmed'),
(43, '2020-12-16', 'Lukaiya Rosy', 'Send Money', '$5356', 'Confirmed'),
(44, '2021-11-16', 'Mahin Khan', 'Withdraw', '$6300', 'Pending'),
(45, '2021-06-13', 'Fahim Ahmed', 'Payment', '$6348', 'Confirmed'),
(46, '2019-08-12', 'Karim Chowdhury', 'Payment', '$4300', 'Confirmed'),
(47, '2021-11-16', 'Mahin Khan', 'Withdraw', '$6300', 'Pending'),
(48, '2021-06-13', 'Fahim Ahmed', 'Payment', '$6348', 'Confirmed'),
(49, '2019-08-12', 'Karim Chowdhury', 'Payment', '$4300', 'Confirmed'),
(50, '2019-08-12', 'Karim Chowdhury', 'Payment', '$4300', 'Confirmed'),
(51, '2020-12-16', 'Lukaiya Rosy', 'Send Money', '$5356', 'Confirmed');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `name`, `username`, `password`, `email`, `phone`, `gender`, `dob`, `department`) VALUES
(1, 'Fahad', 'Mollah', '32423', 'fahad@gmail.com', '0179087663', 'Male', '1998-02-19', 'Fund Manager'),
(2, 'Fahad Mollah', 'fahad', 'F32423', 'fahad@gmail.com', '0179087663', 'Male', '1998-02-19', 'Fund Manager'),
(7, 'Nadim Hossen', 'nadim', '654321', 'nadim@gmail.com', '0187453673', 'Male', '1999-03-11', 'Admin'),
(9, 'Mahin Ahmed', 'mahin', '123456', 'mahin@gmail.com', '0185763447', 'Male', '1998-02-03', 'Investor'),
(13, 'Shuvo Ahmed', 'shuvoahmed', '12345678', 'shuvo54@gmail.com', '01837455373', 'Male', '2000-11-09', 'Investor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `founders`
--
ALTER TABLE `founders`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `investors`
--
ALTER TABLE `investors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `founders`
--
ALTER TABLE `founders`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT for table `investors`
--
ALTER TABLE `investors`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1124;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
