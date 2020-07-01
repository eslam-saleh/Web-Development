-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 28, 2019 at 10:47 PM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobilano`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(20) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phone_number` varchar(11) NOT NULL,
  `zip_code` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `user_name`, `password`, `phone_number`, `zip_code`) VALUES
('eslamsaleh1999@gmail', '', '', '12', '1'),
('eslamsaleh1999@gmail', 'root23', '22', '22', '242-516-632-257'),
('eslamsaleh1999@gmail', '2234', '666', '235', '5345'),
('eslamsaleh1999@gmail', 'root', '33', '33', '333');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `email` varchar(20) NOT NULL,
  `phone_number` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `zip_code` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`email`, `phone_number`, `user_name`, `password`, `zip_code`) VALUES
('eslamsaleh1999@gmail', '1', 'wef22', '11', '2'),
('eslamsaleh1999@gmail', '11', '11', '11', '11'),
('eslamsaleh1999@gmail', '123321', '123', '1111', '1213'),
('eslamsaleh1999@gmail', '32', 'rootf', '222', '23'),
('eslamsaleh1999@gmail', '333333333', 'root3333333', '333', '333333333'),
('eslamsaleh1999@gmail', '42', '21412', '44', '242-516-632-257'),
('eslamsaleh1999@gmail', '57567', '3446', '6', '65'),
('eslamsaleh244@yahoo.', '01121151270', 'Eslam Saleh', '1234', '242-516-632-257'),
('root@rr', 'root', '1', '1', '11');

-- --------------------------------------------------------

--
-- Table structure for table `phone`
--

CREATE TABLE `phone` (
  `name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `market` varchar(20) NOT NULL,
  `price` int(11) NOT NULL,
  `likes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `phone`
--

INSERT INTO `phone` (`name`, `market`, `price`, `likes`) VALUES
('alcatel1', 'alcatel', 300, 15),
('alcatel2', 'alcatel', 400, 16),
('alcatel3', 'alcatel', 500, 17),
('alcatel4', 'alcatel', 600, 18),
('alcatel5', 'alcatel', 700, 19),
('honor1', 'honor', 654, 15),
('honor2', 'honor', 1334, 16),
('honor3', 'honor', 8765, 17),
('honor4', 'honor', 235, 18),
('honor5', 'honor', 978, 19),
('htc1', 'htc', 0, 15),
('htc2', 'htc', 845, 16),
('htc3', 'htc', 6574, 17),
('htc4', 'htc', 7568, 18),
('htc5', 'htc', 346, 19),
('huawei1', 'huawei', 1234, 15),
('huawei2', 'huawei', 967, 16),
('huawei3', 'huawei', 8534, 17),
('huawei4', 'huawei', 235, 18),
('huawei5', 'huawei', 4467, 19),
('iphone1', 'iphone', 976, 15),
('iphone2', 'iphone', 867, 16),
('iphone3', 'iphone', 324, 17),
('iphone4', 'iphone', 235, 18),
('iphone5', 'iphone', 7865, 19),
('nokia1', 'nokia', 464, 15),
('nokia2', 'nokia', 235, 16),
('nokia3', 'nokia', 957, 17),
('nokia4', 'nokia', 235, 18),
('oneplus1', 'oneplus', 123, 15),
('oneplus2', 'oneplus', 9765, 16),
('oneplus3', 'oneplus', 4643, 17),
('oneplus4', 'oneplus', 235, 18),
('oneplus5', 'oneplus', 2352, 19),
('oppo1', 'oppo', 2345, 15),
('oppo2', 'oppo', 8569, 16),
('oppo3', 'oppo', 888, 123),
('oppo4', 'oppo', 235, 18),
('oppo5', 'oppo', 546, 19),
('samsung1', 'samsung', 254, 15),
('samsung2', 'samsung', 263, 16),
('samsung3', 'samsung', 9567, 17),
('samsung4', 'samsung', 235, 18),
('samsung5', 'samsung', 3214, 19),
('sony1', 'sony', 7536, 15),
('sony2', 'sony', 2432, 16),
('sony3', 'sony', 676, 17),
('sony4', 'sony', 235, 18),
('sony5', 'sony', 643, 19);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`,`phone_number`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`email`,`phone_number`);

--
-- Indexes for table `phone`
--
ALTER TABLE `phone`
  ADD PRIMARY KEY (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
