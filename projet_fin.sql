-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mar 30 Mai 2017 à 13:54
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet_fin`
--

-- --------------------------------------------------------

--
-- Structure de la table `team`
--

CREATE TABLE `team` (
  `user_id` int(11) NOT NULL,
  `team_name` varchar(50) NOT NULL,
  `elo` varchar(255) NOT NULL,
  `line_up` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `team`
--

INSERT INTO `team` (`user_id`, `team_name`, `elo`, `line_up`) VALUES
(1, 'eldv black', 'gold', 'raf, greg,flaye, vete, bado'),
(2, 'eldv rage', 'gold', 'maca orange warness louis support');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `email` varchar(80) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `password` char(41) NOT NULL,
  `elo` varchar(255) NOT NULL,
  `role` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`user_id`, `email`, `pseudo`, `password`, `elo`, `role`) VALUES
(1, 'greg@greg.fr', 'greg', 'greg', 'Master', 'Jungle'),
(2, 'raf@raf.fr', 'raf', 'raf', 'gold', 'mid'),
(3, 'jo@jo.jo', 'jo', 'jo', 'diamant', 'top');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`user_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `team`
--
ALTER TABLE `team`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
