-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 28 mars 2022 à 12:38
-- Version du serveur :  10.4.18-MariaDB
-- Version de PHP : 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ptut`
--

-- --------------------------------------------------------

--
-- Structure de la table `agences`
--

CREATE TABLE `agences` (
  `id` int(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `lat` decimal(10,8) NOT NULL,
  `lon` decimal(10,8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `agences`
--

INSERT INTO `agences` (`id`, `nom`, `lat`, `lon`) VALUES
(2, 'Château d\'Harcourt', '49.29068982', '1.01131950');

-- --------------------------------------------------------

--
-- Structure de la table `code_postaux`
--

CREATE TABLE `code_postaux` (
  `id` int(11) NOT NULL,
  `code_postal` int(255) NOT NULL,
  `nom_ville` varchar(255) NOT NULL,
  `departement` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `code_postaux`
--

INSERT INTO `code_postaux` (`id`, `code_postal`, `nom_ville`, `departement`) VALUES
(1, 75000, 'Rouen', 'Seine-Maritime'),
(2, 76500, 'Elbeuf', 'Seine-maritime');

-- --------------------------------------------------------

--
-- Structure de la table `pictures`
--

CREATE TABLE `pictures` (
  `id` int(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `lien` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `validation` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` mediumint(9) NOT NULL,
  `Prenom` varchar(30) DEFAULT NULL,
  `Nom` varchar(40) DEFAULT NULL,
  `Detail` varchar(150) DEFAULT NULL,
  `Mail` varchar(50) DEFAULT NULL,
  `Lien` varchar(50) DEFAULT NULL,
  `License` varchar(50) DEFAULT NULL,
  `Pass` varchar(255) DEFAULT NULL,
  `Pass2` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `Prenom`, `Nom`, `Detail`, `Mail`, `Lien`, `License`, `Pass`, `Pass2`) VALUES
(29, 'Virgile', 'Duprez', NULL, 'pro.bacup@gmail.com', NULL, NULL, '$2y$10$KQymqWYgmBECvNmrPo96aeQ.4RQbhI5gpGwsWvljM.YZNOKbMDoHK', 'Membre');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `agences`
--
ALTER TABLE `agences`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `code_postaux`
--
ALTER TABLE `code_postaux`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `agences`
--
ALTER TABLE `agences`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `code_postaux`
--
ALTER TABLE `code_postaux`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `pictures`
--
ALTER TABLE `pictures`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
