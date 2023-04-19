-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 19, 2023 at 05:30 PM
-- Server version: 8.0.32-0ubuntu0.22.04.2
-- PHP Version: 8.1.2-1ubuntu2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biblio_esen`
--

-- --------------------------------------------------------

--
-- Table structure for table `auteur`
--

CREATE TABLE `auteur` (
  `id` int NOT NULL,
  `nom` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pays` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `auteur`
--

INSERT INTO `auteur` (`id`, `nom`, `pays`) VALUES
(1, 'Tunisie', 'Tunisie'),
(2, 'Tunisie', 'Tunisie'),
(3, 'Tunisie', 'Tunisie'),
(4, 'Tunisie', 'Tunisie'),
(5, 'Tunisie', 'Tunisie');

-- --------------------------------------------------------

--
-- Table structure for table `livre`
--

CREATE TABLE `livre` (
  `id_livre` int NOT NULL,
  `titre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `annee_apparition` int NOT NULL DEFAULT '2023'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `livre`
--

INSERT INTO `livre` (`id_livre`, `titre`, `annee_apparition`) VALUES
(2, 'Java 8 - Les bases du langage de programmation java', 2020),
(3, 'UML2 pour les bases de données', 2008),
(16, 'livre de test avec modif', 2005),
(25, 'Java spring Boot 5', 2022);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auteur`
--
ALTER TABLE `auteur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `livre`
--
ALTER TABLE `livre`
  ADD PRIMARY KEY (`id_livre`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auteur`
--
ALTER TABLE `auteur`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `livre`
--
ALTER TABLE `livre`
  MODIFY `id_livre` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
