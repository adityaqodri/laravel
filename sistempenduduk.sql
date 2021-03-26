-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2021 at 09:08 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistempenduduk`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'daffa', '$2y$10$5x/qOjz5ktRWDD9Rk0YwSuV8WmzTWs69aB1QUYCPKOihK.QAxxYKu'),
(2, 'david', '$2y$10$jSbdMY8UtgNS3gVfGlbCq.i/3BX9/e7E/hQ1Fl690xqv9RlWYk0zu'),
(3, 'arief', '$2y$10$zIGyqxY5j4Y37fxYUopxH.krIWp8nm2vcvtoZcefEYmstWIkiPo6q'),
(4, 'a', '$2y$10$OeFijZU0AaDxSuy511/CnOsi7LK3Kw3lC7c9EyZmqarETXCjakhKG'),
(5, 'b', '$2y$10$WFzooyV9EbQXX6.mwJwkgO4SdDOrBezgfrRYotRovrg0yHMgoCiXy'),
(6, 'a-a', '$2y$10$Sucn6QcfSz59WBOMxg4IUuYwBe9//5i25DFoqdyWBrmLyQorcAOce'),
(7, 'c', '$2y$10$qIgaqlskYQq/DHNmmuRlDu6cqMCUk0PnA3V8m.SdRFyo1lAISRWRK'),
(8, 'd', '$2y$10$7lGaf6cnSGLesN7wsxVioe.jxjIRH/grBVt511JDL0SFq5b0m.Mae');

-- --------------------------------------------------------

--
-- Table structure for table `warga`
--

CREATE TABLE `warga` (
  `id` int(11) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `warga`
--

INSERT INTO `warga` (`id`, `nip`, `nama`, `email`, `alamat`, `foto`) VALUES
(5, '01', 'dafa', 'f.daffa.a@students.esqbs.ac.id', 'aa', '5fff94bb3d21d.png'),
(6, '301', 'tata', 'tata@gmail.com', 'Bandung', '5ff493bef1e6f.jpg'),
(8, '03', 'Alvin', 'alvin01@gmail.com', 'Bogor Raya', '5ffd9efd42ed9.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `warga`
--
ALTER TABLE `warga`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `warga`
--
ALTER TABLE `warga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
