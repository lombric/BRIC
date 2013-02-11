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

CREATE TABLE `groups` (
  `id_groups` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `description` text,
  `specifications` text,
  `parent_id` int(11) DEFAULT NULL,
  `hide` tinyint(4) NOT NULL DEFAULT '1',
  `system` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_groups`),
  KEY `fk_group_group_idx` (`parent_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `group`
--

INSERT INTO `groups` (`id_groups`, `name`, `description`, `specifications`,  `parent_id`, `hide`, `system`) VALUES
(3, 'test', '', '',  NULL, 0,1),
(4, '12', '', '', NULL, 1,1);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `group`
--
ALTER TABLE `groups`
  ADD CONSTRAINT `fk_group_group` FOREIGN KEY (`parent_id`) REFERENCES `groups` (`id_groups`) ON DELETE NO ACTION ON UPDATE NO ACTION;
