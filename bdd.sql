-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:8889
-- Généré le :  Mer 24 Mai 2017 à 16:54
-- Version du serveur :  5.5.42
-- Version de PHP :  7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `projet_fin`
--

-- --------------------------------------------------------

--
-- Structure de la table `Team`
--

CREATE TABLE `Team` (
  `user_id` int(11) NOT NULL,
  `team_name` varchar(50) NOT NULL,
  `elo` varchar(255) NOT NULL,
  `line_up` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `Users`
--

CREATE TABLE `Users` (
  `user_id` int(11) NOT NULL,
  `email` varchar(80) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `password` char(41) NOT NULL,
  `elo` varchar(255) NOT NULL,
  `role` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `Users`
--

INSERT INTO `Users` (`user_id`, `email`, `pseudo`, `password`, `elo`, `role`) VALUES
(1, 'raf@raf.raf', 'raf', 'raf', 'gold', 'mid');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Users`
--
ALTER TABLE `Users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;