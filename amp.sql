-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 29 avr. 2021 à 14:48
-- Version du serveur :  5.7.24
-- Version de PHP : 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projetampoule`
--

-- --------------------------------------------------------

--
-- Structure de la table `amp`
--

CREATE TABLE `amp` (
  `ID` int(11) NOT NULL,
  `Date_changement` date NOT NULL,
  `Etage` varchar(20) NOT NULL,
  `Position_ampoule` varchar(20) NOT NULL,
  `Prix_ampoule` decimal(11,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `amp`
--

INSERT INTO `amp` (`ID`, `Date_changement`, `Etage`, `Position_ampoule`, `Prix_ampoule`) VALUES
(11, '1996-11-13', '9e', 'Droite', '6.00'),
(17, '1997-01-18', '10e', 'Droite', '5.00'),
(19, '1999-02-09', 'RDC', 'Gauche', '5.50'),
(22, '2002-06-17', '1er', 'Fond', '7.25'),
(27, '2008-06-16', '3eme', 'Fond', '6.00'),
(28, '2021-04-01', '4', 'fond', '6.00'),
(35, '2019-03-28', '2', 'fond', '100.00'),
(38, '2021-04-20', '3', 'gauche', '15.00'),
(39, '2021-04-01', '1', 'droite', '5.00'),
(41, '2021-04-28', '11', 'gauche', '5.50'),
(42, '2021-04-29', '6', 'fond', '10.00'),
(43, '2021-04-13', '4', 'fond', '10.00');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `amp`
--
ALTER TABLE `amp`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `amp`
--
ALTER TABLE `amp`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
