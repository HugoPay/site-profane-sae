-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 23 mai 2023 à 07:06
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `site-sae-profane`
--

-- --------------------------------------------------------

--
-- Structure de la table `bière`
--

DROP TABLE IF EXISTS `bière`;
CREATE TABLE IF NOT EXISTS `bière` (
  `id_biere` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `prix` decimal(4,2) NOT NULL,
  `description` varchar(300) NOT NULL,
  PRIMARY KEY (`id_biere`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `bière`
--

INSERT INTO `bière` (`id_biere`, `nom`, `type`, `prix`, `description`) VALUES
(1, 'Anarchie Conforme', 'Blanche', '12.00', 'Une bière blanche au soupçon de grenade sanglante.  Venu des cieux,  ce mystérieux œil est l’ingrédient même de notre bière.  Un jus mystique, de source inconnue qui selon les légendes viendraient de l’au-delà.'),
(2, 'Désordre Arrangé', 'Blonde', '12.00', 'Une bière blonde au myrtille saignante.  Venu des cieux,  ce mystérieux œil est l’ingrédient même de notre bière.  Un jus mystique, de source inconnue qui selon les légendes viendraient de l’au-delà.'),
(3, 'Chaos Ordonné', 'Brune', '12.00', 'Une bière brune au soupçon de cerise flamboyante. Venu des cieux, ce mystérieux œil est l’ingrédient même de notre bière.  Un jus mystique, de source inconnue qui selon les légendes viendraient de l’au-delà'),
(4, 'Folie Rationnelle', 'Blanche', '12.00', 'Une bière blanche au soupçon de cerise flamboyante. Venu des cieux, ce mystérieux œil est l’ingrédient même de notre bière.  Un jus mystique, de source inconnue qui selon les légendes viendraient de l’au-delà'),
(5, 'Discorde Harmonieuse', 'Blonde', '12.00', 'Une bière blonde au jus de framboise saignant. Venu des cieux, ce mystérieux œil est l’ingrédient même de notre bière.  Un jus mystique, de source inconnue qui selon les légendes viendraient de l’au-delà');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id_client` int NOT NULL AUTO_INCREMENT,
  `prenom` varchar(50) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `code_postal` int DEFAULT NULL,
  PRIMARY KEY (`id_client`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_client`, `prenom`, `adresse`, `nom`, `code_postal`) VALUES
(1, 'Hugo', '46 avenue des marrons', 'Payeux', 94000),
(2, 'Thib', '1 rue de Rouen', 'Honnête', 65000);

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `num_commande` int NOT NULL AUTO_INCREMENT,
  `date_commande` date NOT NULL,
  PRIMARY KEY (`num_commande`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`num_commande`, `date_commande`) VALUES
(1, '2023-05-12'),
(2, '2023-04-26');

-- --------------------------------------------------------

--
-- Structure de la table `concerner`
--

DROP TABLE IF EXISTS `concerner`;
CREATE TABLE IF NOT EXISTS `concerner` (
  `id_biere` int NOT NULL AUTO_INCREMENT,
  `num_commande` int NOT NULL,
  `quantite` int NOT NULL,
  PRIMARY KEY (`id_biere`,`num_commande`),
  KEY `num_commande` (`num_commande`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `concerner2`
--

DROP TABLE IF EXISTS `concerner2`;
CREATE TABLE IF NOT EXISTS `concerner2` (
  `id_client` int NOT NULL AUTO_INCREMENT,
  `num_commande` int NOT NULL,
  PRIMARY KEY (`id_client`,`num_commande`),
  KEY `num_commande` (`num_commande`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
