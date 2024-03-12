-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2024 at 02:05 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `naivebayes`
--

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) UNSIGNED ZEROFILL NOT NULL,
  `tugas` varchar(255) DEFAULT NULL,
  `uts` varchar(255) DEFAULT NULL,
  `uas` varchar(255) DEFAULT NULL,
  `ketidakhadiran` varchar(255) DEFAULT NULL,
  `ekskul` varchar(255) DEFAULT NULL,
  `class` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `tugas`, `uts`, `uas`, `ketidakhadiran`, `ekskul`, `class`) VALUES
(00000000149, '70-80', '>80', '>80', 'Kurang dari 3', 'B', 'Naik'),
(00000000150, '<70', '70-80', '70-80', 'Kurang dari 3', 'B', 'Naik'),
(00000000151, '70-80', '70-80', '70-80', 'Kurang dari 3', 'B', 'Naik'),
(00000000152, '>80', '>80', '>80', 'Kurang dari 3', 'A', 'Naik'),
(00000000153, '<70', '70-80', '<70', 'Lebih dari 3', 'A', 'Tidak Naik'),
(00000000154, '70-80', '>80', '>80', 'Kurang dari 3', 'B', 'Naik'),
(00000000155, '70-80', '>80', '70-80', 'Kurang dari 3', 'A', 'Naik'),
(00000000156, '70-80', '<70', '<70', 'Lebih dari 3', 'C', 'Tidak Naik'),
(00000000157, '70-80', '>80', '>80', 'Kurang dari 3', 'B', 'Naik'),
(00000000158, '70-80', '>80', '70-80', 'Kurang dari 3', 'A', 'Naik'),
(00000000159, '>80', '>80', '<70', 'Kurang dari 3', 'B', 'Naik'),
(00000000160, '70-80', '>80', '70-80', 'Kurang dari 3', 'C', 'Naik'),
(00000000161, '70-80', '>80', '70-80', 'Kurang dari 3', 'C', 'Naik'),
(00000000162, '70-80', '>80', '70-80', 'Kurang dari 3', 'B', 'Naik'),
(00000000163, '70-80', '<70', '<70', 'Lebih dari 3', 'B', 'Tidak Naik'),
(00000000164, '70-80', '>80', '<70', 'Kurang dari 3', 'C', 'Naik'),
(00000000165, '70-80', '>80', '70-80', 'Kurang dari 3', 'A', 'Naik'),
(00000000166, '70-80', '>80', '<70', 'Kurang dari 3', 'B', 'Naik'),
(00000000167, '>80', '>80', '>80', 'Kurang dari 3', 'A', 'Naik'),
(00000000168, '>80', '>80', '>80', 'Kurang dari 3', 'B', 'Naik'),
(00000000169, '>80', '>80', '>80', 'Kurang dari 3', 'B', 'Naik'),
(00000000170, '70-80', '>80', '>80', 'Kurang dari 3', 'B', 'Naik'),
(00000000171, '<70', '70-80', '<70', 'Lebih dari 3', 'C', 'Tidak Naik'),
(00000000172, '70-80', '>80', '70-80', 'Kurang dari 3', 'C', 'Naik'),
(00000000173, '70-80', '70-80', '70-80', 'Kurang dari 3', 'C', 'Naik'),
(00000000174, '70-80', '>80', '>80', 'Kurang dari 3', 'B', 'Naik'),
(00000000175, '70-80', '>80', '70-80', 'Lebih dari 3', 'A', 'Naik'),
(00000000176, '70-80', '>80', '>80', 'Kurang dari 3', 'B', 'Naik'),
(00000000177, '>80', '70-80', '>80', 'Kurang dari 3', 'B', 'Naik'),
(00000000178, '70-80', '>80', '70-80', 'Kurang dari 3', 'C', 'Naik');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(2, 'Ahmad Fauzi', 'muhammadzaen77@gmail.com', 'default.jpg', '$2y$10$D4HQzTNyQomWrH5DdobvpuJ00GpFEYyAeaKmW15zJmQHEWse/Olqy', 2, 1, 1710217919),
(3, 'Fauzi', 'fauzijra@gmail.com', 'default.jpg', '$2y$10$sTf.0LTF85ys.N53W1D3nOw2As1UVynBATrt4AtwUVxuml8JfmS3m', 2, 1, 1710218049);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member'),
(3, 'Administrator'),
(4, 'Member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=185;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
