-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 30 mars 2022 à 13:47
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
  `lon` decimal(10,8) NOT NULL,
  `categorie` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `agences`
--

INSERT INTO `agences` (`id`, `nom`, `lat`, `lon`, `categorie`) VALUES
(2, 'Château d\'Harcourt', '49.29068982', '1.01131950', '');

-- --------------------------------------------------------

--
-- Structure de la table `code_postaux`
--

CREATE TABLE `code_postaux` (
  `id` int(11) NOT NULL,
  `code_postal` int(255) NOT NULL,
  `nom_ville` varchar(255) NOT NULL,
  `departement_ville` varchar(255) NOT NULL,
  `num_depart` int(2) NOT NULL,
  `description_depart` text NOT NULL,
  `presentation_ville` text NOT NULL,
  `histoire_ville` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `code_postaux`
--

INSERT INTO `code_postaux` (`id`, `code_postal`, `nom_ville`, `departement_ville`, `num_depart`, `description_depart`, `presentation_ville`, `histoire_ville`) VALUES
(1, 76000, 'Rouen', 'Seine-maritime', 76, '<p>Bien sûr, tout le monde connaît les très grandes villes de Seine-Maritime (76) que sont <a>Rouen</a>, <a>Dieppe</a>, <a>Havre</a>...</br>               Mais le département de Seine-Maritime, c\'est 745 communes !!!</br>               Le patrimoine religieux y est remarquable : <a>églises</a>, <a>chapelles</a> et <a>calvaires</a>, mais n\'oublions pas le petit patrimoine.</br>               Qu\'il s\'agisse de <a>lavoirs</a>, de <a>colombiers</a>, de <a>moulins</a>... le 76 regorge de trésors à découvrir.</br>               Venez-le (re)-découvrir en flânant sur nos pages avant de partir en <a>promenades</a></p>', '', ''),
(2, 76500, 'Elbeuf', 'Seine-maritime', 76, '<p>Bien sûr, tout le monde connaît les très grandes villes de Seine-Maritime (76) que sont <a>Rouen</a>, <a>Dieppe</a>, <a>Havre</a>...</br>               Mais le département de Seine-Maritime, c\'est 745 communes !!!</br>               Le patrimoine religieux y est remarquable : <a>églises</a>, <a>chapelles</a> et <a>calvaires</a>, mais n\'oublions pas le petit patrimoine.</br>               Qu\'il s\'agisse de <a>lavoirs</a>, de <a>colombiers</a>, de <a>moulins</a>... le 76 regorge de trésors à découvrir.</br>               Venez-le (re)-découvrir en flânant sur nos pages avant de partir en <a>promenades</a></p>', 'Le village de Elbeuf-sur-Seine (76500), est situé dans le département de Seine-Maritime (76). Voici un descriptif de ses monuments historiques, de son histoire, de ses services publics et de ses commerces.', 'Après la guerre de 1870, un grand nombre d\'Alsaciens qui refusaient l\'annexion ont choisi Elbeuf pour s\'y installer. Beaucoup de ces nouveaux habitants travaillaient dans l\'industrie textile en Alsace. Or les clauses douanières du traité de Francfort leur fermaient dorénavant le marché français. Paul Lévy écrit : « Des 4 000 Bischwillerois qui ont quitté leur ville natale entre 1869 et 1874 — dont 75 fabricants sur 96 et plus de 3 000 ouvriers sur 5 000 — plus de la moitié s\'est retrouvée à Elbeuf, où ils continuaient à former un groupement original au sein de la population autochtone. D\'abord beaucoup d\'entre eux étaient luthériens au milieu d\'une population catholique. Leur pasteur leur faisait un sermon en allemand tous les quinze jours et, l\'office terminé, s\'entretenait avec eux en dialecte. Car le dialecte a subsisté, parlé couramment chez tous les vieux, fidèlement conservé par beaucoup de jeunes » et il cite Delahache : « Je les ai entendus [en 1914], entre eux ou avec les patrons, et d\'entendre ce langage ici, dans une petite ville normande, à 500 km de l\'Alsace […] je me croyais là-bas, chez eux, chez moi […] Ils se sont longtemps mariés entre « pays », et cette tradition non plus n\'est pas perdue ». Parmi cette communauté d\'origine alsacienne se trouvaient les familles Blin, Fraenckel et Herzog. L\'écrivain André Maurois, de son vrai nom Émile Herzog, appartenait à cette dernière famille. Il est né à Elbeuf.'),
(3, 27200, 'Vernon', 'Eure', 27, '', 'Vernon est une commune française située dans le département de l\'Eure en région Normandie. Elle se trouve au carrefour des routes d\'Évreux à Beauvais, et de Paris à Rouen par la vallée de la Seine. Elle est proche de Giverny. Sa devise, Vernon semper viret, signifie « Vernon toujours vert ».', 'Vernon est une commune française située dans le département de l\'Eure en région Normandie. Elle se trouve au carrefour des routes d\'Évreux à Beauvais, et de Paris à Rouen par la vallée de la Seine. Elle est proche de Giverny. Sa devise, Vernon semper viret, signifie « Vernon toujours vert ».');

-- --------------------------------------------------------

--
-- Structure de la table `departement`
--

CREATE TABLE `departement` (
  `id` int(11) NOT NULL,
  `nom_depart` varchar(255) NOT NULL,
  `description_depart` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `departement`
--

INSERT INTO `departement` (`id`, `nom_depart`, `description_depart`) VALUES
(1, 'Seine-maritime', 'Bien sûr, tout le monde connaît les très grandes villes de Seine-Maritime (76) que sont Rouen, Dieppe, Havre...\r\nMais le département de Seine-Maritime, c\'est 745 communes !!!\r\nLe patrimoine religieux y est remarquable : églises, chapelles et calvaires, mais n\'oublions pas le petit patrimoine.\r\nQu\'il s\'agisse de lavoirs, de colombiers, de moulins... le 76 regorge de trésors à découvrir.\r\nVenez-le (re)-découvrir en flânant sur nos pages avant de partir en promenadesMais le département de Seine-Maritime, c\'est 745 communes !!!\r\nLe patrimoine religieux y est remarquable : églises, chapelles et calvaires, ma'),
(2, 'Paris', 'Bien sûr, tout le monde connaît les très grandes villes de Seine-Maritime (76) que sont Rouen, Dieppe, Havre...\r\nMais le département de Seine-Maritime, c\'est 745 communes !!!\r\nLe patrimoine religieux y est remarquable : églises, chapelles et calvaires, mais n\'oublions pas le petit patrimoine.\r\nQu\'il s\'agisse de lavoirs, de colombiers, de moulins... le 76 regorge de trésors à découvrir.\r\nVenez-le (re)-découvrir en flânant sur nos pages avant de partir en promenades');

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
  `code` varchar(7) NOT NULL,
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
(29, 'Virgile', 'Duprez', NULL, 'pro.bacup@gmail.com', NULL, NULL, '$2y$10$KQymqWYgmBECvNmrPo96aeQ.4RQbhI5gpGwsWvljM.YZNOKbMDoHK', 'Admin'),
(30, 'Virgile', 'Duprez', NULL, 'virgile.duprez@gmail.com', NULL, NULL, '$2y$10$zuCCVBfCX./daCwz7WEzlOw7iiQRjay3Ef.SjZ1oimJ./Hyv2/GEK', 'Admin');

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
-- Index pour la table `departement`
--
ALTER TABLE `departement`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `departement`
--
ALTER TABLE `departement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `pictures`
--
ALTER TABLE `pictures`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
