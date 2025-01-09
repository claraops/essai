-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 05 Octobre 2022 à 12:09
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `orelextech`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE IF NOT EXISTS `administrateur` (
  `num_ad` int(5) NOT NULL AUTO_INCREMENT,
  `login_ad` varchar(80) DEFAULT NULL,
  `pwd_ad` varchar(80) DEFAULT NULL,
  `fctCpte_ad` varchar(80) CHARACTER SET utf8 NOT NULL,
  `tel_ad` int(9) DEFAULT NULL,
  `email_ad` varchar(80) DEFAULT NULL,
  `datecreation_ad` varchar(80) CHARACTER SET utf8 NOT NULL,
  `profil` varchar(80) DEFAULT NULL,
  `etatcpte_ad` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`num_ad`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `administrateur`
--

INSERT INTO `administrateur` (`num_ad`, `login_ad`, `pwd_ad`, `fctCpte_ad`, `tel_ad`, `email_ad`, `datecreation_ad`, `profil`, `etatcpte_ad`) VALUES
(1, 'orelextech', 'HcyCztPw', 'Administrateur', 693550293, 'orelextech@gmail.com', '29-09-2022', 'logo_orelextech.png', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `num_ad` int(5) DEFAULT NULL,
  `prenom_cli` varchar(80) DEFAULT NULL,
  `login_cli` varchar(80) DEFAULT NULL,
  `pwd_cli` varchar(80) DEFAULT NULL,
  `tel_cli` int(9) DEFAULT NULL,
  `email_cli` varchar(80) NOT NULL DEFAULT '',
  PRIMARY KEY (`email_cli`),
  KEY `num_ad` (`num_ad`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`num_ad`, `prenom_cli`, `login_cli`, `pwd_cli`, `tel_cli`, `email_cli`) VALUES
(NULL, 'Fannie', 'jessica', 'wNxTStEH', 693550293, 'fannie@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `cm`
--

CREATE TABLE IF NOT EXISTS `cm` (
  `num_cm` int(5) NOT NULL AUTO_INCREMENT,
  `num_ad` int(5) DEFAULT NULL,
  `login_cm` varchar(80) DEFAULT NULL,
  `pwd_cm` varchar(80) DEFAULT NULL,
  `tel_cm` int(9) DEFAULT NULL,
  `email_cm` varchar(80) DEFAULT NULL,
  `datecreation_cm` date DEFAULT NULL,
  `profil_cm` varchar(80) DEFAULT NULL,
  `etatcpte_cm` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`num_cm`),
  KEY `num_ad` (`num_ad`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

CREATE TABLE IF NOT EXISTS `commandes` (
  `id_cmd` int(5) NOT NULL AUTO_INCREMENT,
  `file_cmd` varchar(80) CHARACTER SET utf8 DEFAULT NULL,
  `loc_cmd` varchar(80) DEFAULT NULL,
  `comdservices` varchar(80) DEFAULT NULL,
  `num_tech` int(5) DEFAULT NULL,
  `email_cli` varchar(80) DEFAULT NULL,
  `id_ct` int(5) DEFAULT NULL,
  `id_fct` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_cmd`),
  KEY `num_tech` (`num_tech`),
  KEY `email_cli` (`email_cli`),
  KEY `id_ct` (`id_ct`),
  KEY `id_fct` (`id_fct`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

-- --------------------------------------------------------

--
-- Structure de la table `contrat`
--

CREATE TABLE IF NOT EXISTS `contrat` (
  `id_ct` int(5) NOT NULL AUTO_INCREMENT,
  `file_ct` varchar(80) DEFAULT NULL,
  `loc_ct` varchar(80) DEFAULT NULL,
  `num_tech` int(5) DEFAULT NULL,
  `email_cli` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id_ct`),
  KEY `email_cli` (`email_cli`),
  KEY `num_tech` (`num_tech`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

-- --------------------------------------------------------

--
-- Structure de la table `contratv`
--

CREATE TABLE IF NOT EXISTS `contratv` (
  `id_cv` int(5) NOT NULL AUTO_INCREMENT,
  `file_cv` varchar(80) DEFAULT NULL,
  `loc_cv` varchar(80) DEFAULT NULL,
  `num_tech` int(5) DEFAULT NULL,
  `email_cli` varchar(80) DEFAULT NULL,
  `id_ct` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_cv`),
  KEY `num_tech` (`num_tech`),
  KEY `email_cli` (`email_cli`),
  KEY `id_ct` (`id_ct`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

-- --------------------------------------------------------

--
-- Structure de la table `factures`
--

CREATE TABLE IF NOT EXISTS `factures` (
  `id_fct` int(5) NOT NULL AUTO_INCREMENT,
  `file_fct` varchar(80) DEFAULT NULL,
  `loc_fct` varchar(80) DEFAULT NULL,
  `size` varchar(80) CHARACTER SET utf8 NOT NULL,
  `num_tech` int(5) DEFAULT NULL,
  `email_cli` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id_fct`),
  KEY `num_tech` (`num_tech`),
  KEY `email_cli` (`email_cli`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Structure de la table `technicien`
--

CREATE TABLE IF NOT EXISTS `technicien` (
  `num_tech` int(5) NOT NULL AUTO_INCREMENT,
  `num_ad` int(5) DEFAULT NULL,
  `login_tech` varchar(80) DEFAULT NULL,
  `pwd_tech` varchar(80) DEFAULT NULL,
  `fctCpte_ad` varchar(80) CHARACTER SET utf8 NOT NULL,
  `tel_tech` varchar(10) CHARACTER SET utf8 NOT NULL,
  `email_tech` varchar(80) DEFAULT NULL,
  `datecreation_tech` varchar(80) CHARACTER SET utf8 NOT NULL,
  `file` varchar(80) CHARACTER SET utf8 NOT NULL,
  `location` varchar(80) CHARACTER SET utf8 NOT NULL,
  `etatcpte_tech` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`num_tech`),
  KEY `num_ad` (`num_ad`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `technicien`
--

INSERT INTO `technicien` (`num_tech`, `num_ad`, `login_tech`, `pwd_tech`, `fctCpte_ad`, `tel_tech`, `email_tech`, `datecreation_tech`, `file`, `location`, `etatcpte_tech`) VALUES
(1, NULL, 'wendy', 'RPsouNW1', 'Technicien', '693550293', 'angie@gmail.com', '29-09-2022', 'iai.png', 'dist/img/comptes/iai.png', NULL);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `client_ibfk_1` FOREIGN KEY (`num_ad`) REFERENCES `administrateur` (`num_ad`);

--
-- Contraintes pour la table `cm`
--
ALTER TABLE `cm`
  ADD CONSTRAINT `cm_ibfk_1` FOREIGN KEY (`num_ad`) REFERENCES `administrateur` (`num_ad`);

--
-- Contraintes pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD CONSTRAINT `commandes_ibfk_1` FOREIGN KEY (`num_tech`) REFERENCES `technicien` (`num_tech`),
  ADD CONSTRAINT `commandes_ibfk_2` FOREIGN KEY (`email_cli`) REFERENCES `client` (`email_cli`),
  ADD CONSTRAINT `commandes_ibfk_3` FOREIGN KEY (`id_ct`) REFERENCES `contrat` (`id_ct`),
  ADD CONSTRAINT `commandes_ibfk_4` FOREIGN KEY (`id_fct`) REFERENCES `factures` (`id_fct`);

--
-- Contraintes pour la table `contrat`
--
ALTER TABLE `contrat`
  ADD CONSTRAINT `contrat_ibfk_1` FOREIGN KEY (`email_cli`) REFERENCES `client` (`email_cli`),
  ADD CONSTRAINT `contrat_ibfk_2` FOREIGN KEY (`num_tech`) REFERENCES `technicien` (`num_tech`);

--
-- Contraintes pour la table `contratv`
--
ALTER TABLE `contratv`
  ADD CONSTRAINT `contratv_ibfk_1` FOREIGN KEY (`num_tech`) REFERENCES `technicien` (`num_tech`),
  ADD CONSTRAINT `contratv_ibfk_2` FOREIGN KEY (`email_cli`) REFERENCES `client` (`email_cli`),
  ADD CONSTRAINT `contratv_ibfk_3` FOREIGN KEY (`id_ct`) REFERENCES `contrat` (`id_ct`);

--
-- Contraintes pour la table `factures`
--
ALTER TABLE `factures`
  ADD CONSTRAINT `factures_ibfk_1` FOREIGN KEY (`num_tech`) REFERENCES `technicien` (`num_tech`),
  ADD CONSTRAINT `factures_ibfk_2` FOREIGN KEY (`email_cli`) REFERENCES `client` (`email_cli`);

--
-- Contraintes pour la table `technicien`
--
ALTER TABLE `technicien`
  ADD CONSTRAINT `technicien_ibfk_1` FOREIGN KEY (`num_ad`) REFERENCES `administrateur` (`num_ad`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
