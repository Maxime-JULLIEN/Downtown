-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Ven 10 Mars 2017 à 08:36
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `downtown`
--

-- --------------------------------------------------------

--
-- Structure de la table `evenements`
--

CREATE TABLE `evenements` (
  `ID` int(11) NOT NULL,
  `Titre` varchar(255) NOT NULL,
  `EscTitre` varchar(255) NOT NULL,
  `Lieu` varchar(255) NOT NULL,
  `Description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `evenements`
--

INSERT INTO `evenements` (`ID`, `Titre`, `EscTitre`, `Lieu`, `Description`) VALUES
(1, 'Concert Black M', 'Concert-Black-M', 'Bourges', 'C\'est un concert de Black M'),
(2, 'Soirée Mousse', 'Soiree-Mousse', 'Tours', 'Soirée la plus déjantée de l\'année\r\n');

-- --------------------------------------------------------

--
-- Structure de la table `hoover_button`
--

CREATE TABLE `hoover_button` (
  `ID` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Page` varchar(255) NOT NULL,
  `Icon` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `hoover_button`
--

INSERT INTO `hoover_button` (`ID`, `Name`, `Page`, `Icon`) VALUES
(1, 'Ajouter une ville', 'villes', 'add_location'),
(2, 'Ajouter un évenement', 'evenements', 'event'),
(3, 'Ajouter un bon plan', 'BonPlan', 'euro_symbol');

-- --------------------------------------------------------

--
-- Structure de la table `link`
--

CREATE TABLE `link` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Link` varchar(2083) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `link`
--

INSERT INTO `link` (`ID`, `Name`, `Link`) VALUES
(2, 'Villes', '/content/villes/index.php'),
(1, 'Accueil', '/content/index.php'),
(3, 'Événement', '/content/evenements/index.php'),
(5, 'Restaurants\r\n', '/content/restaurants/index.php');

-- --------------------------------------------------------

--
-- Structure de la table `villes`
--

CREATE TABLE `villes` (
  `ID` int(11) NOT NULL,
  `Name` varchar(45) NOT NULL,
  `Description` text NOT NULL,
  `img_link` varchar(2083) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `villes`
--

INSERT INTO `villes` (`ID`, `Name`, `Description`, `img_link`) VALUES
(1, 'Bourges', 'Bourges est une commune française, préfecture du département du Cher. Avec 66 528 habitants, c\'est la commune la plus peuplée du département.', 'content/villes/bourges/presentation.jpg'),
(2, 'Orléans', 'Orléans est une commune française, du centre de la France, chef-lieu du département du Loiret et de la région Centre-Val de Loire. Orléans est aussi la capitale de l\'ancienne province historique de l\'Orléanais.', ''),
(3, 'Tours', 'Tours est une localité urbaine du centre ouest de la France, sur les rives de la Loire et du Cher, dans le département d\'Indre-et-Loire', ''),
(4, 'Paris', 'Paris est la capitale de la France. Elle se situe au cœur d\'un vaste bassin sédimentaire aux sols fertiles et au climat tempéré, le bassin parisien, sur une boucle de la Seine, entre les confluents de celle-ci avec la Marne et l\'Oise', ''),
(5, 'Marseille', 'Marseille est une commune du Sud-Est de la France, chef-lieu du département des Bouches-du-Rhône et de la région Provence-Alpes-Côte d\'Azur. ', ''),
(6, 'Londres', 'Londres, située dans le sud-est de la Grande-Bretagne, est la capitale et la plus grande ville du Royaume-Uni ; longtemps capitale de l\'Empire britannique, elle est désormais le siège du Commonwealth.', '');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `evenements`
--
ALTER TABLE `evenements`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `hoover_button`
--
ALTER TABLE `hoover_button`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `link`
--
ALTER TABLE `link`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Index pour la table `villes`
--
ALTER TABLE `villes`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID` (`ID`),
  ADD KEY `ID_2` (`ID`),
  ADD KEY `ID_3` (`ID`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `evenements`
--
ALTER TABLE `evenements`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT pour la table `hoover_button`
--
ALTER TABLE `hoover_button`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `link`
--
ALTER TABLE `link`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `villes`
--
ALTER TABLE `villes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
