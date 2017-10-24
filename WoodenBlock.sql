-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 24, 2017 at 01:49 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `WoodenBlock`
--

-- --------------------------------------------------------

--
-- Table structure for table `Knowledges`
--

CREATE TABLE `Knowledges` (
  `idKnowledge` bigint(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Task`
--

CREATE TABLE `Task` (
  `idTask` bigint(20) NOT NULL,
  `idOwner` bigint(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `initialTime` date NOT NULL,
  `endTime` date NOT NULL,
  `comments` text NOT NULL,
  `idTaskStatus` bigint(20) NOT NULL,
  `idKnowledge` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `TaskInterstedUsers`
--

CREATE TABLE `TaskInterstedUsers` (
  `idTaskInterstedUser` bigint(20) NOT NULL,
  `idUser` bigint(20) NOT NULL,
  `idTask` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `TaskStatus`
--

CREATE TABLE `TaskStatus` (
  `idTaskStatus` bigint(20) NOT NULL,
  `name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `TaskStatus`
--

INSERT INTO `TaskStatus` (`idTaskStatus`, `name`) VALUES
(1, 'Nova'),
(2, 'Em Andamento'),
(3, 'Pendente de Review'),
(4, 'Pendente de Pagamento'),
(5, 'Pronta');

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `idUser` bigint(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `documentNumber` varchar(50) NOT NULL,
  `imgProfile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Knowledges`
--
ALTER TABLE `Knowledges`
  ADD PRIMARY KEY (`idKnowledge`);

--
-- Indexes for table `Task`
--
ALTER TABLE `Task`
  ADD PRIMARY KEY (`idTask`),
  ADD KEY `idTaskStatus` (`idTaskStatus`),
  ADD KEY `idOwner` (`idOwner`),
  ADD KEY `idKnowledge` (`idKnowledge`);

--
-- Indexes for table `TaskInterstedUsers`
--
ALTER TABLE `TaskInterstedUsers`
  ADD PRIMARY KEY (`idTaskInterstedUser`),
  ADD KEY `idUser` (`idUser`),
  ADD KEY `idTask` (`idTask`);

--
-- Indexes for table `TaskStatus`
--
ALTER TABLE `TaskStatus`
  ADD PRIMARY KEY (`idTaskStatus`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`idUser`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Knowledges`
--
ALTER TABLE `Knowledges`
  MODIFY `idKnowledge` bigint(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Task`
--
ALTER TABLE `Task`
  MODIFY `idTask` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `TaskInterstedUsers`
--
ALTER TABLE `TaskInterstedUsers`
  MODIFY `idTaskInterstedUser` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `TaskStatus`
--
ALTER TABLE `TaskStatus`
  MODIFY `idTaskStatus` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `idUser` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `Task`
--
ALTER TABLE `Task`
  ADD CONSTRAINT `Task_ibfk_1` FOREIGN KEY (`idOwner`) REFERENCES `Users` (`idUser`),
  ADD CONSTRAINT `Task_ibfk_2` FOREIGN KEY (`idTaskStatus`) REFERENCES `TaskStatus` (`idTaskStatus`),
  ADD CONSTRAINT `Task_ibfk_3` FOREIGN KEY (`idKnowledge`) REFERENCES `Knowledges` (`idKnowledge`);

--
-- Constraints for table `TaskInterstedUsers`
--
ALTER TABLE `TaskInterstedUsers`
  ADD CONSTRAINT `TaskInterstedUsers_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `Users` (`idUser`),
  ADD CONSTRAINT `TaskInterstedUsers_ibfk_2` FOREIGN KEY (`idTask`) REFERENCES `Task` (`idTask`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
