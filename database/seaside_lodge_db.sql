-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2022 at 12:14 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seaside_lodge_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `inquiries_tbl`
--

CREATE TABLE `inquiries_tbl` (
  `inq_id` char(13) NOT NULL,
  `inq_first_name` varchar(500) NOT NULL,
  `inq_last_name` varchar(500) NOT NULL,
  `inq_email` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `inq_contact` varchar(100) NOT NULL,
  `inq_subject` varchar(500) NOT NULL,
  `inq_message` varchar(500) NOT NULL,
  `inq_create_date` varchar(100) NOT NULL DEFAULT current_timestamp(),
  `inq_status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inquiries_tbl`
--

INSERT INTO `inquiries_tbl` (`inq_id`, `inq_first_name`, `inq_last_name`, `inq_email`, `inq_contact`, `inq_subject`, `inq_message`, `inq_create_date`, `inq_status`) VALUES
('INQ0000000001', 'Dilshan', 'Liyanage', 'dila@gmail.com', '0771586351', 'Subject 1', 'Message 1', '2022-08-05 12:36:24', 1),
('INQ0000000002', 'Ashoka', 'Bandara', 'ashoka@gmail.com', '0772252859', 'Subject 2', 'Message 2', '2022-08-05 13:00:14', 1),
('INQ0000000003', 'Kasun', 'Karunarathne', 'karunarathnekasun0@gmail.com', '0752297474', 'Subject 3', 'Message 3', '2022-08-05 15:17:04', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `user_id` char(13) NOT NULL,
  `user_display_name` varchar(500) NOT NULL,
  `user_name` varchar(500) NOT NULL,
  `user_password` varchar(500) NOT NULL,
  `user_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`user_id`, `user_display_name`, `user_name`, `user_password`, `user_status`) VALUES
('USR0000000001', 'S. Dinushan', 'dinushan', '638d30b9bb623c235106c53804dc91ca', 1),
('USR0000000002', 'Dilshan Nayanamadhu', 'dila', '35862fcf105f1aaa0b4f29ca71b96236', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inquiries_tbl`
--
ALTER TABLE `inquiries_tbl`
  ADD PRIMARY KEY (`inq_id`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
