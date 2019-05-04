-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 01, 2019 at 01:22 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Tuscany`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `Username` text NOT NULL,
  `Password` text NOT NULL,
  `Role` text NOT NULL,
  `Email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`Username`, `Password`, `Role`, `Email`) VALUES
('student', 'cd73502828457d15655bbd7a63fb0bc8', 'Student', 'student@email.com'),
('VIP', '5a11e0bd65af42743f1db2f10bcbba8e', 'VIP', 'vip@email.com');

-- --------------------------------------------------------

--
-- Table structure for table `Menu`
--

CREATE TABLE `Menu` (
  `Item_Number` varchar(6) NOT NULL,
  `Item_Name` varchar(30) NOT NULL,
  `Category` varchar(10) NOT NULL,
  `Price` double NOT NULL,
  `Image` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Menu`
--

INSERT INTO `Menu` (`Item_Number`, `Item_Name`, `Category`, `Price`, `Image`) VALUES
('BV0001', 'Coke', 'Beverage', 4, 'bvCoke.jpg'),
('BV0002', 'Orange Juice', 'Beverage', 6, 'bvOrangeJuice.jpg'),
('BV0003', 'Tequila', 'Beverage', 20, 'bvTequila.jpg'),
('PA0001', 'Spaghetti', 'Pasta', 10, 'paSpaghetti.jpg'),
('PA0002', 'Lasagna', 'Pasta', 12, 'paLasagna.jpg'),
('PA0003', 'Macaroni', 'Pasta', 12, 'paMacaroni.jpg'),
('PZ0001', 'Pepperoni', 'Pizza', 5, 'pzPepperoni.jpg'),
('PZ0002', 'Supreme', 'Pizza', 12, 'pzSupreme.jpg'),
('PZ0003', 'Pepperoni', 'Pizza', 12, 'pzPepperoni.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
