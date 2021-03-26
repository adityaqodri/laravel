-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2021 at 05:37 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `training`
--

-- --------------------------------------------------------

--
-- Table structure for table `mstraining`
--

CREATE TABLE `mstraining` (
  `trainingid` varchar(3) NOT NULL,
  `trainingnama` varchar(30) NOT NULL,
  `trainingjadwal` date NOT NULL,
  `trainingtempat` varchar(20) NOT NULL,
  `trainingharga` int(7) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mstraining`
--

INSERT INTO `mstraining` (`trainingid`, `trainingnama`, `trainingjadwal`, `trainingtempat`, `trainingharga`, `gambar`) VALUES
('NC3', 'NEW CHAPTER 3', '2022-01-30', 'zoom', 1200000, '5fec4b167303c.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `sysuser`
--

CREATE TABLE `sysuser` (
  `userid` varchar(6) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(256) NOT NULL,
  `telepon` varchar(12) NOT NULL,
  `tgllahir` date DEFAULT NULL,
  `alamat` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sysuser`
--

INSERT INTO `sysuser` (`userid`, `username`, `password`, `email`, `telepon`, `tgllahir`, `alamat`) VALUES
('visito', '', '', '', '', NULL, ''),
('admin3', 'Admin', '123123', '', '', NULL, ''),
('adminw', 'adminweb', '165165', '', '', NULL, ''),
('admini', 'adminweb', '165165', '', '', NULL, ''),
('adminn', 'adminn', '123456', '', '', NULL, ''),
('sdfsd', '', '11111', '', '', '2021-01-12', 'dfgdgd'),
('abri', '', '222', '', '0213221', '2021-01-20', 'jauh'),
('aaa', '', '123123', 'aaa@gmail.com', '122333', '2021-01-04', 'cddsa'),
('bbb', '', '111111', 'bbb@gmail.com', '122333', '2020-12-29', 'cddsa');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
