-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : sql310.epizy.com
-- Généré le :  mar. 07 avr. 2020 à 13:26
-- Version du serveur :  5.6.45-86.1
-- Version de PHP :  7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `epiz_25032166_hello`
--

-- --------------------------------------------------------

--
-- Structure de la table `alluser`
--

CREATE TABLE `alluser` (
  `id` int(11) NOT NULL,
  `visiteur` int(11) NOT NULL,
  `inscrit` int(11) NOT NULL,
  `michemin` int(11) NOT NULL,
  `online` int(11) NOT NULL,
  `fini` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `alluser`
--

INSERT INTO `alluser` (`id`, `visiteur`, `inscrit`, `michemin`, `online`, `fini`) VALUES
(1, 58, 11, 55, 46, 25);

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

CREATE TABLE `personne` (
  `id` int(11) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `telephone` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `sexe` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `personne`
--

INSERT INTO `personne` (`id`, `prenom`, `nom`, `telephone`, `age`, `sexe`) VALUES
(1, 'Yaya', 'LY', 772652363, 56, 'H'),
(2, 'Mbacke', 'Mbaye', 77456, 25, 'H'),
(3, 'Elhadji mbacke', 'Mbaye', 773674576, 25, 'H'),
(4, 'Aicha', 'Deme ', 773616521, 26, 'F'),
(5, 'Mame yacine', 'Sembene', 783123339, 21, 'F'),
(6, 'Mame Yacine', 'Sembene', 783123339, 21, 'F'),
(7, 'Mame Yacine', 'Sembene', 783123339, 21, 'F'),
(8, 'Fatou', 'Ndaw', 772966631, 19, 'F'),
(9, 'Fatou', 'Ndaw', 772966631, 19, 'F'),
(10, 'Yacine', 'Ndaw', 772966631, 19, 'F'),
(11, 'Yacine', 'Ndaw', 772966631, 19, 'F');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'root', 'welcome'),
(2, 'mbacke', 'mbaye');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `alluser`
--
ALTER TABLE `alluser`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `personne`
--
ALTER TABLE `personne`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `alluser`
--
ALTER TABLE `alluser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `personne`
--
ALTER TABLE `personne`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
