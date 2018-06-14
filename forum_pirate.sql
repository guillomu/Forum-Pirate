-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 14 juin 2018 à 02:09
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `forum_pirate`
--

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_creation` datetime NOT NULL,
  `contenu` text NOT NULL,
  `note` int(11) NOT NULL,
  `id_sujets` int(11) NOT NULL,
  `id_utilisateurs` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `messages_sujets_FK` (`id_sujets`),
  KEY `id_sujets` (`id_sujets`),
  KEY `note` (`note`),
  KEY `note_2` (`note`),
  KEY `note_3` (`note`),
  KEY `note_4` (`note`),
  KEY `id_utilisateurs` (`id_utilisateurs`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `date_creation`, `contenu`, `note`, `id_sujets`, `id_utilisateurs`) VALUES
(1, '2018-06-14 00:00:00', 'Bonjour!', 5, 1, 2),
(2, '2018-06-28 00:00:00', 'Yo!', 3, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `messages_prives`
--

DROP TABLE IF EXISTS `messages_prives`;
CREATE TABLE IF NOT EXISTS `messages_prives` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_envoyeur` int(11) NOT NULL,
  `id_receveur` int(11) NOT NULL,
  `contenu` varchar(500) NOT NULL,
  `date_envoie` datetime NOT NULL,
  `id_utilisateurs` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `messages_prives_utilisateurs_FK` (`id_utilisateurs`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `salons`
--

DROP TABLE IF EXISTS `salons`;
CREATE TABLE IF NOT EXISTS `salons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(100) NOT NULL,
  `id_createur` int(11) NOT NULL,
  `date_creation` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `salons`
--

INSERT INTO `salons` (`id`, `titre`, `id_createur`, `date_creation`) VALUES
(1, 'Bateaux', 3, '2018-06-06 00:00:00'),
(2, 'Costumes', 3, '2018-06-06 00:00:00'),
(3, 'Boissons', 2, '2018-06-08 00:00:00'),
(4, 'Armes', 1, '2018-06-13 19:41:00'),
(5, 'Maquillage', 3, '2018-06-13 15:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `sujets`
--

DROP TABLE IF EXISTS `sujets`;
CREATE TABLE IF NOT EXISTS `sujets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(100) NOT NULL,
  `date_creation` datetime NOT NULL,
  `id_utilisateurs` int(11) NOT NULL,
  `id_salons` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sujets_utilisateurs_FK` (`id_utilisateurs`),
  KEY `sujets_salons0_FK` (`id_salons`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `sujets`
--

INSERT INTO `sujets` (`id`, `titre`, `date_creation`, `id_utilisateurs`, `id_salons`) VALUES
(1, 'BlackPearl', '2018-06-13 00:00:00', 1, 1),
(2, 'Le Hollandais Volant', '2018-06-13 17:50:00', 1, 1),
(3, 'Rhum', '2018-06-13 17:51:00', 1, 3),
(4, 'Vodka', '2018-06-12 15:00:00', 1, 3),
(5, 'Chapeaux', '2018-06-13 14:00:00', 1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_utilisateur` varchar(50) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `avatar` varchar(300) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `date_de_naissance` datetime NOT NULL,
  `statut` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `nom_utilisateur`, `mdp`, `email`, `avatar`, `prenom`, `nom`, `date_de_naissance`, `statut`) VALUES
(1, 'ReinaSarah', 'starfallah', '', '', '', '', '2018-06-08 00:00:00', 'membre'),
(2, 'GuiGui', '', '', '', '', '', '2018-06-08 00:00:00', 'membre'),
(3, 'GuiGui', 'plop', '', '', '', '', '2018-06-08 00:00:00', 'membre');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_sujets_FK` FOREIGN KEY (`id_sujets`) REFERENCES `sujets` (`id`),
  ADD CONSTRAINT `messages_utilisateurs_FK` FOREIGN KEY (`id_utilisateurs`) REFERENCES `utilisateurs` (`id`);

--
-- Contraintes pour la table `messages_prives`
--
ALTER TABLE `messages_prives`
  ADD CONSTRAINT `messages_prives_utilisateurs_FK` FOREIGN KEY (`id_utilisateurs`) REFERENCES `utilisateurs` (`id`);

--
-- Contraintes pour la table `sujets`
--
ALTER TABLE `sujets`
  ADD CONSTRAINT `sujets_salons0_FK` FOREIGN KEY (`id_salons`) REFERENCES `salons` (`id`),
  ADD CONSTRAINT `sujets_utilisateurs_FK` FOREIGN KEY (`id_utilisateurs`) REFERENCES `utilisateurs` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
