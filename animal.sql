-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 08 nov. 2022 à 08:43
-- Version du serveur : 10.4.19-MariaDB
-- Version de PHP : 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `zoo`
--

-- --------------------------------------------------------

--
-- Structure de la table `animal`
--

CREATE TABLE `animal` (
  `idAnimal` int(11) NOT NULL,
  `espèce` varchar(50) DEFAULT NULL,
  `classe` varchar(50) DEFAULT NULL,
  `ordre` varchar(50) DEFAULT NULL,
  `famille` varchar(50) DEFAULT NULL,
  `genre` varchar(50) DEFAULT NULL,
  `taille` varchar(50) DEFAULT NULL,
  `poids` varchar(50) DEFAULT NULL,
  `repartition` varchar(50) DEFAULT NULL,
  `habitat` varchar(50) DEFAULT NULL,
  `modeDeVie` varchar(50) DEFAULT NULL,
  `regimeAlimentaire` varchar(50) DEFAULT NULL,
  `incubation` varchar(50) DEFAULT NULL,
  `nombreOeufs` varchar(50) DEFAULT NULL,
  `maturiteSexuelle` varchar(50) DEFAULT NULL,
  `longevite` varchar(50) DEFAULT NULL,
  `statutDeConservationUICN` varchar(50) DEFAULT NULL,
  `population` varchar(50) DEFAULT NULL,
  `menaces` varchar(50) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `idLieu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `animal`
--

INSERT INTO `animal` (`idAnimal`, `espèce`, `classe`, `ordre`, `famille`, `genre`, `taille`, `poids`, `repartition`, `habitat`, `modeDeVie`, `regimeAlimentaire`, `incubation`, `nombreOeufs`, `maturiteSexuelle`, `longevite`, `statutDeConservationUICN`, `population`, `menaces`, `description`, `idLieu`) VALUES
(1, 'qscq', 'csqcsxc', 'cdc', '<vdv', 'v<sv', 'vfdbb', 'srgfr', 'gdfbrf', 'fdgv', 'rgqeg', 'rqr', 'rq', 'grq', 'eggq', 'rqrge', 'qeg', 'rqegf', 'gverq', 'gqreg', 1),
(2, 'qscq', 'csqcsxc', 'cdc', '<vdv', 'v<sv', 'vfdbb', 'srgfr', 'gdfbrf', 'fdgv', 'rgqeg', 'rqr', 'rq', 'grq', 'eggq', 'rqrge', 'qeg', 'rqegf', 'gverq', 'gqreg', 1),
(3, 'qscq', 'csqcsxc', 'cdc', '<vdv', 'v<sv', 'vfdbb', 'srgfr', 'gdfbrf', 'fdgv', 'rgqeg', 'rqr', 'rq', 'grq', 'eggq', 'rqrge', 'qeg', 'rqegf', 'gverq', 'gqreg', 1),
(4, 'qscq', 'csqcsxc', 'cdc', '<vdv', 'v<sv', 'vfdbb', 'srgfr', 'gdfbrf', 'fdgv', 'rgqeg', 'rqr', 'rq', 'grq', 'eggq', 'rqrge', 'qeg', 'rqegf', 'gverq', 'gqreg', 1),
(5, 'aze', 'aze', 'aze', 'aze', 'aze', 'aze', 'aze', 'aze', 'aze', 'aze', 'aze', 'aze', 'aze', 'aze', 'aze', 'aze', 'aze', 'aze', 'aze', 2),
(6, 'aze', 'aze', 'aze', 'aze', 'aze', 'aze', 'aze', 'aze', 'aze', 'aze', 'aze', 'aze', 'aze', 'aze', 'aze', 'aze', 'aze', 'aze', 'aze', 2);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`idAnimal`),
  ADD KEY `idLieu` (`idLieu`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `animal`
--
ALTER TABLE `animal`
  MODIFY `idAnimal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `animal`
--
ALTER TABLE `animal`
  ADD CONSTRAINT `animal_ibfk_1` FOREIGN KEY (`idLieu`) REFERENCES `lieu` (`idLieu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
