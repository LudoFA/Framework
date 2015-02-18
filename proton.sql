-- phpMyAdmin SQL Dump
-- version 4.2.8
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Ven 06 Février 2015 à 14:16
-- Version du serveur :  5.5.39
-- Version de PHP :  5.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `proton`
--

-- --------------------------------------------------------

--
-- Structure de la table `game_user`
--

CREATE TABLE IF NOT EXISTS `game_user` (
  `jeux_video_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `game_user`
--

INSERT INTO `game_user` (`jeux_video_id`, `user_id`) VALUES
(1, 1),
(1, 2),
(2, 2),
(3, 1),
(4, 1),
(4, 2);

-- --------------------------------------------------------

--
-- Structure de la table `jeux_video`
--

CREATE TABLE IF NOT EXISTS `jeux_video` (
`id` int(11) NOT NULL,
  `possesseur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `console` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prix` double NOT NULL,
  `nbre_joueurs_max` int(11) NOT NULL,
  `commentaires` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `jeux_video`
--

INSERT INTO `jeux_video` (`id`, `possesseur`, `console`, `prix`, `nbre_joueurs_max`, `commentaires`) VALUES
(1, 'DEMO', 'NES', 20, 1, 'bla bal'),
(2, 'MOMO', 'ATARI', 90, 4, 'jboieraibh '),
(3, 'POUET', 'Dreamcast', 52, 2, 'kneiornaibn'),
(4, 'Sega', 'Sega', 24, 1, 'niijanienrbinaoipe');

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
`id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `product`
--

INSERT INTO `product` (`id`, `nom`, `description`) VALUES
(7, '<script>alert(''booum'');</script>', 'zdazd'),
(8, 'Produit numÃ©ro 2', ''),
(9, 'Encore un produit', '');

-- --------------------------------------------------------

--
-- Structure de la table `tutorial`
--

CREATE TABLE IF NOT EXISTS `tutorial` (
`id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `validate` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `tutorial`
--

INSERT INTO `tutorial` (`id`, `nom`, `description`, `validate`) VALUES
(1, 'erhztehbrtz', 'fazaefaz', 0),
(3, 'Turial N2', 'JE mets le contenu', 0),
(4, 'Le CSS', 'Debuter avec le css', 1),
(5, 'Le PHP', 'Le PHP C''est cool', 1),
(6, 'Nouveau', 'un beau tutot', 0),
(7, 'momo', 'momomo', 0),
(8, 'teste', 'test', 0);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `username` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `username`) VALUES
(2, 'Laurence'),
(1, 'Ludovic');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `game_user`
--
ALTER TABLE `game_user`
 ADD PRIMARY KEY (`jeux_video_id`,`user_id`), ADD KEY `IDX_6686BA65CA8BBF` (`jeux_video_id`), ADD KEY `IDX_6686BA65A76ED395` (`user_id`);

--
-- Index pour la table `jeux_video`
--
ALTER TABLE `jeux_video`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `product`
--
ALTER TABLE `product`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tutorial`
--
ALTER TABLE `tutorial`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `UNIQ_8D93D649F85E0677` (`username`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `jeux_video`
--
ALTER TABLE `jeux_video`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `tutorial`
--
ALTER TABLE `tutorial`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `game_user`
--
ALTER TABLE `game_user`
ADD CONSTRAINT `FK_6686BA65A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
ADD CONSTRAINT `FK_6686BA65CA8BBF` FOREIGN KEY (`jeux_video_id`) REFERENCES `jeux_video` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
