-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2026 at 03:34 PM
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
-- Database: `db_phone`
--

-- --------------------------------------------------------

--
-- Table structure for table `phone`
--

CREATE TABLE `phone` (
  `country` text DEFAULT NULL,
  `city` text DEFAULT NULL,
  `region` text DEFAULT NULL,
  `segment` text DEFAULT NULL,
  `sales` double DEFAULT NULL,
  `profit` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `phone`
--

INSERT INTO `phone` (`country`, `city`, `region`, `segment`, `sales`, `profit`) VALUES
('Tunisia', 'Tunis', 'Northern', 'Commercial', 772.52, -46.35),
('Nigeria', 'Kano', 'Western', 'Commercial', 626.23, -31.31),
('Benin', 'Cotonou', 'Western', 'Commercial', 435.48, 8.71),
('Congo', 'Brazzaville', 'Middle', 'Residential', 949.63, -47.48),
('Guinea', 'Conakry', 'Western', 'Public', 10.69, -0.75),
('Cameroon', 'Douala', 'Middle', 'Public', 678.52, -27.14),
('Botswana', 'Gaborone', 'Southern', 'Commercial', 953.86, 95.39),
('Lesotho', 'Maseru', 'Southern', 'Public', 484.25, 33.9),
('Sudan', 'Khartoum', 'Northern', 'Residential', 921.68, 36.87),
('Zambia', 'Lusaka', 'Eastern', 'Public', 751.73, -15.03);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
