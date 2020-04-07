-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Lun 27 Janvier 2020 à 08:24
-- Version du serveur :  5.7.28-0ubuntu0.18.04.4
-- Version de PHP :  7.2.24-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `grow`
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
  `joueur` int(11) NOT NULL,
  `jaimefacebook` int(11) NOT NULL,
  `partagefacebook` int(11) NOT NULL,
  `partagetwitter` int(11) NOT NULL,
  `partagewhatsapp` int(11) NOT NULL,
  `suivrefacebook` int(11) NOT NULL,
  `suivretwitter` int(11) NOT NULL,
  `suivrelinkdind` int(11) NOT NULL,
  `suivreyoutube` int(11) NOT NULL,
  `suivreinstagramme` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `alluser`
--

INSERT INTO `alluser` (`id`, `visiteur`, `inscrit`, `michemin`, `joueur`, `jaimefacebook`, `partagefacebook`, `partagetwitter`, `partagewhatsapp`, `suivrefacebook`, `suivretwitter`, `suivrelinkdind`, `suivreyoutube`, `suivreinstagramme`) VALUES
(1, 71, 6, 4, 41, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `Paricipants`
--

CREATE TABLE `Paricipants` (
  `id` int(11) NOT NULL,
  `lundi` int(11) NOT NULL,
  `mardi` int(11) NOT NULL,
  `mercredi` int(11) NOT NULL,
  `jeudi` int(11) NOT NULL,
  `vendredi` int(11) NOT NULL,
  `samedi` int(11) NOT NULL,
  `dimanche` int(11) NOT NULL,
  `wekknumber` int(11) NOT NULL,
  `annee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Paricipants`
--

INSERT INTO `Paricipants` (`id`, `lundi`, `mardi`, `mercredi`, `jeudi`, `vendredi`, `samedi`, `dimanche`, `wekknumber`, `annee`) VALUES
(1, 10, 20, 0, 30, 5, 25, 10, 4, 2020),
(8, 9, 0, 0, 0, 0, 0, 0, 5, 2020);

-- --------------------------------------------------------

--
-- Structure de la table `pays`
--

CREATE TABLE `pays` (
  `id` int(11) NOT NULL,
  `Senegal` int(11) NOT NULL,
  `Afrique` int(11) NOT NULL,
  `Europe` int(11) NOT NULL,
  `Ameriques` int(11) NOT NULL,
  `Asie` int(11) NOT NULL,
  `Oceanie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `pays`
--

INSERT INTO `pays` (`id`, `Senegal`, `Afrique`, `Europe`, `Ameriques`, `Asie`, `Oceanie`) VALUES
(1, 25, 0, 0, 0, 0, 0);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `personne`
--

INSERT INTO `personne` (`id`, `prenom`, `nom`, `telephone`, `age`, `sexe`) VALUES
(1, 'Yaya', 'LY', 772652363, 56, 'H'),
(2, 'Mbacke', 'Mbaye', 77456, 25, 'H'),
(3, 'Fatou', 'Ndaw', 772966631, 19, 'H'),
(4, 'Fatou', 'Ndaw', 772966631, 19, 'H'),
(5, 'Fatou', 'Ndaw', 772966631, 19, 'F'),
(6, 'Fatou', 'Ndaw', 772966631, 19, 'F'),
(7, 'El Hadji Yaya', 'LY', 778889963, 50, 'F'),
(8, 'Mame Yacine ', 'SembÃ©ne', 783123339, 21, 'F'),
(9, 'Aliou', 'Ndiaye', 77, 56, 'H'),
(10, 'Mbacke', 'Mbaye', 456, 4, 'H'),
(11, 'Rien', 'LY', 7756, 4, 'H'),
(12, 'ALiou', 'Fall', 465464, 6, 'H'),
(13, 'Khadim', 'Fall', 7789645, 15, 'H'),
(14, 'Mbacke', 'Fall', 65464, 4, 'H');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'root', 'welcome'),
(2, 'mbacke', 'mbaye');

-- --------------------------------------------------------

--
-- Structure de la table `visiteur`
--

CREATE TABLE `visiteur` (
  `id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `alluser`
--
ALTER TABLE `alluser`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Paricipants`
--
ALTER TABLE `Paricipants`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pays`
--
ALTER TABLE `pays`
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
-- Index pour la table `visiteur`
--
ALTER TABLE `visiteur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `alluser`
--
ALTER TABLE `alluser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `Paricipants`
--
ALTER TABLE `Paricipants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `pays`
--
ALTER TABLE `pays`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `personne`
--
ALTER TABLE `personne`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `visiteur`
--
ALTER TABLE `visiteur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
