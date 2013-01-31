-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Jeu 31 Janvier 2013 à 08:25
-- Version du serveur: 5.5.25
-- Version de PHP: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données: `lombric`
--

-- --------------------------------------------------------

--
-- Structure de la table `group`
--

CREATE TABLE `group` (
  `idgroup` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `description` text,
  `specifications` text,
  `date_begin` date DEFAULT NULL,
  `date_end` date DEFAULT NULL,
  `fk_idgroup` int(11) DEFAULT NULL,
  `hide` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`idgroup`),
  KEY `fk_group_group_idx` (`fk_idgroup`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `group`
--

INSERT INTO `group` (`idgroup`, `name`, `description`, `specifications`, `date_begin`, `date_end`, `fk_idgroup`, `hide`) VALUES
(3, 'test', '', '', '2013-01-30', '2013-01-30', NULL, 0),
(4, '12', '', '', '0000-00-00', '0000-00-00', NULL, 1);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `group`
--
ALTER TABLE `group`
  ADD CONSTRAINT `fk_group_group` FOREIGN KEY (`fk_idgroup`) REFERENCES `group` (`idgroup`) ON DELETE NO ACTION ON UPDATE NO ACTION;
