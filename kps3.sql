-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2023 at 05:13 PM
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
-- Database: `kps3`
--

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `name` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`name`, `message`, `email`, `timestamp`) VALUES
('Test', 'Test', 'test@gmail.com', '2023-12-18 02:01:13'),
('iygygfehk', 'jshywuiiu', 'kjbiurib@gmail.com', '2023-12-18 02:01:13'),
('sadassa', 'sadaa', 'test@gmail.com', '2023-12-18 02:01:13'),
('sadassa', 'sadaa', 'test@gmail.com', '2023-12-18 02:01:13'),
('sadassa', 'sadaa', 'test@gmail.com', '2023-12-18 02:01:13'),
('sadassa', 'sadaa', 'test@gmail.com', '2023-12-18 02:01:13'),
('sadassa', 'sadaa', 'test@gmail.com', '2023-12-18 02:01:13'),
('sadassa', 'sadaa', 'test@gmail.com', '2023-12-18 02:01:13'),
('sadassa', 'sadaa', 'test@gmail.com', '2023-12-18 02:01:13'),
('sadassa', 'sadaa', 'test@gmail.com', '2023-12-18 02:01:13'),
('sadassa', 'sadaa', 'test@gmail.com', '2023-12-18 02:01:13'),
('sadassa', 'sadaa', 'test@gmail.com', '2023-12-18 02:01:13'),
('sadassa', 'sadaa', 'test@gmail.com', '2023-12-18 02:01:13'),
('sadassa', 'sadaa', 'test@gmail.com', '2023-12-18 02:01:13'),
('sadassa', 'sadaa', 'test@gmail.com', '2023-12-18 02:01:13'),
('sadassa', 'sadaa', 'test@gmail.com', '2023-12-18 02:01:13'),
('sadassa', 'sadaa', 'test@gmail.com', '2023-12-18 02:01:13'),
('sadassa', 'sadaa', 'test@gmail.com', '2023-12-18 02:01:13'),
('sadassa', 'sadaa', 'test@gmail.com', '2023-12-18 02:01:13'),
('sadassa', 'sadaa', 'test@gmail.com', '2023-12-18 02:01:13'),
('sadassa', 'sadaa', 'test@gmail.com', '2023-12-18 02:01:13'),
('anggit', 'wah aplikasi ini bagus', 'dinara@gmail.com', '2023-12-18 02:01:13'),
('manusia', 'halo', 'rahmanafif030@gmail.com', '2023-12-18 02:01:13'),
('orang kren', 'jelek banget', 'apipjleg@gmail.com', '2023-12-18 02:06:37'),
('orang kren', 'jelek banget', 'apipjleg@gmail.com', '2023-12-18 02:07:15'),
('apip', 'ajg', 'rahmanafif030@gmail.com', '2023-12-18 02:08:18'),
('virniiii', 'jelekk bgtt gak jelas', 'virnivirni@gmail.com', '2023-12-18 05:14:44');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
