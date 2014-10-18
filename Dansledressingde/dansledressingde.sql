-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Dim 02 Juin 2013 à 16:02
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `dansledressingde`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(75) NOT NULL,
  `motdepasse` varchar(75) NOT NULL,
  `nom` varchar(75) NOT NULL,
  `prenom` varchar(75) NOT NULL,
  `mail` varchar(75) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`id`, `pseudo`, `motdepasse`, `nom`, `prenom`, `mail`) VALUES
(1, 'master', '8fb0aae53987b5a74f50482e7e4c1126ee75a2aa', 'Dupont', 'Michel', 'm@m.fr');

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id_article` int(11) NOT NULL AUTO_INCREMENT,
  `nom_article` varchar(255) NOT NULL,
  `article_url` varchar(255) NOT NULL,
  `categorie_id` int(11) NOT NULL,
  `souscategorie_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `vente_id` int(11) NOT NULL,
  `prixinitial` int(11) NOT NULL,
  `reduction` int(11) NOT NULL,
  `prixfinal` int(11) NOT NULL,
  PRIMARY KEY (`id_article`),
  KEY `categorie_id` (`categorie_id`),
  KEY `souscategorie_id` (`souscategorie_id`),
  KEY `vente_id` (`vente_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`id_article`, `nom_article`, `article_url`, `categorie_id`, `souscategorie_id`, `description`, `vente_id`, `prixinitial`, `reduction`, `prixfinal`) VALUES
(11, 'Chemise', '6512bd43d9caa6e02c990b0a82652dca.jpg', 1, 6, 'Une chemise pour homme', 11, 60, 33, 40),
(12, 'Chemise bleue', 'c20ad4d76fe97759aa27a0c99bff6710.jpg', 1, 6, 'Une chemise bleue de la marque Zara', 11, 110, 11, 100),
(14, 'Veste femme rouge', 'aab3238922bcc25a6f606eb525ffdc56.jpg', 2, 4, 'Une veste rouge pour femme', 17, 200, 50, 100),
(18, 'Tu t''es surement trompé', '', 4, 12, 'yugycbdhjcvdsytcv', 11, 34, 34, 34),
(19, 'Tu t''es surement trompé bis', '', 4, 13, 'bcdbcdhjksbcdbjc', 11, 45, 45, 45),
(20, 'bma', '', 5, 9, ',fz', 32, 0, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_categorie` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`id`, `nom_categorie`) VALUES
(1, 'Homme'),
(2, 'Femme'),
(3, 'Enfant'),
(4, 'Mixte'),
(5, 'Accessoires');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE IF NOT EXISTS `commande` (
  `commande_id` int(11) NOT NULL AUTO_INCREMENT,
  `etat` varchar(255) NOT NULL,
  `prixtotal` varchar(45) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `liste_produits` longtext NOT NULL,
  PRIMARY KEY (`commande_id`),
  KEY `fk_commande_users1_idx` (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `commande`
--

INSERT INTO `commande` (`commande_id`, `etat`, `prixtotal`, `user_id`, `liste_produits`) VALUES
(9, 'en attente du chèque', '100', 7, 'Nom : Veste femme rouge - marque : Zara - taille : M - couleur : Rouge - Quantité : 1<br>'),
(7, 'en attente du chèque', '100', 7, 'Nom : Veste femme rouge - marque : Zara - taille : M - couleur : Rouge - Quantité : 1<br>'),
(8, 'en attente du chèque', '100', 7, 'Nom : Veste femme rouge - marque : Zara - taille : L - couleur : Rouge - Quantité : 1<br>');

-- --------------------------------------------------------

--
-- Structure de la table `couleur`
--

CREATE TABLE IF NOT EXISTS `couleur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_couleur` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=33 ;

--
-- Contenu de la table `couleur`
--

INSERT INTO `couleur` (`id`, `nom_couleur`) VALUES
(1, 'Argent'),
(2, 'Azur'),
(3, 'Beige'),
(4, 'blanc'),
(5, 'bleu clair'),
(6, 'bleu foncé'),
(7, 'Bordeaux'),
(8, 'Bronze'),
(9, 'Brun'),
(10, 'Caramel'),
(11, 'Chocolat'),
(12, 'Cuivre'),
(13, 'Cyan'),
(14, 'Ebene'),
(15, 'Fer'),
(16, 'Fuchsia'),
(17, 'Gris'),
(18, 'Indigo'),
(19, 'Jaune'),
(20, 'Marron'),
(21, 'Noir'),
(22, 'Orange'),
(23, 'Pourpre'),
(24, 'Rose'),
(25, 'Rouge'),
(26, 'Sable'),
(27, 'Saumon'),
(28, 'Taupe'),
(29, 'Turquoise'),
(30, 'Vanille'),
(31, 'Vert'),
(32, 'Violet');

-- --------------------------------------------------------

--
-- Structure de la table `faq`
--

CREATE TABLE IF NOT EXISTS `faq` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(600) CHARACTER SET utf8 NOT NULL,
  `reponse` varchar(2000) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `faq`
--

INSERT INTO `faq` (`id`, `question`, `reponse`) VALUES
(1, 'Quelles sont les m&eacute;thodes de paiements disponibles?', 'Pour r&eacute;gler vos achats le seul moyen est le paiement par ch&egrave;que.'),
(2, 'O&ugrave; envoyer mon ch&egrave;que?', 'Lors du paiement il suffit d''envoyer un ch&egrave; &agrave; l''adresse suivante: 72, rue de la colonie 75013 Paris, &agrave; l''ordre de: dans le dressing de'),
(3, 'Puis-je &eacute;changer un article ?', 'Vous avez la possibilit&eacute; de nous renvoyer votre article pendant un p&eacute;riode de 7 jours apr&egrave;s la r&eacute;ception de la commande.  Nous proc&egrave;derons alors et selon votre choix, a un &eacute;change, une cr&eacute;ation d''avoir ou un remboursement.  Les frais de ports resterons &agrave; votre charge. Afin de ce faire,  merci de renvoyer nos articles dans l''&eacute;tat initial de r&eacute;ception avec une copie de la facture et indications pour le suivi de votre commande.'),
(4, ' Quels sont les d&eacute;lais de livraison?', 'Les d&eacute;lais d''acheminement sont d''une semaine. Si au del&agrave; de ce d&eacute;lais vous n''avez pas re&ccedil;u votre commande n''h&eacute;sitez pas &agrave; nous contacter.'),
(5, 'Qu''en est-il pour les tailles ou les couleurs? Comment savoir si elles sont disponibles?', 'Il en est de m&ecirc;me que pour les articles, s''ils sont disponibles dans vos choix, c''est que vous pouvez les commander'),
(6, 'O&ugrave; modifier les param&egrave;tres de mon compte?', 'Il vous suffit d''aller dans l''onglet "Profil" pour avoir acces &agrave; vos donn&eacute;es personnelles'),
(7, 'Comment suivre ma commande?', 'A tout moment, vous pouvez vous connecter sur votre compte client (avec votre email et votre mot de passe) pour suivre l''&eacute;tat de votre commande. '),
(8, 'Comment &ecirc;tre s&ucirc;r que ma commande est bien enregistr&eacute;e?', 'Nous vous confirmons la prise en compte de votre commande par email dans les minutes qui suivent votre validation.  Vous recevrez aussi un email de notre part lors de l''exp&eacute;dition de votre colis.');

-- --------------------------------------------------------

--
-- Structure de la table `forum_liste`
--

CREATE TABLE IF NOT EXISTS `forum_liste` (
  `forum_id` int(11) NOT NULL AUTO_INCREMENT,
  `forum_name` varchar(222) CHARACTER SET utf8 NOT NULL,
  `forum_description` longtext CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`forum_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `forum_liste`
--

INSERT INTO `forum_liste` (`forum_id`, `forum_name`, `forum_description`) VALUES
(2, 'test', 'test'),
(3, 'msel', 'sdgf'),
(4, 'test', 'test\r\n'),
(5, 'mopo', 'fdgjk'),
(6, 'mathieu', 'mathieu'),
(7, 'mathieu', 'mathieu');

-- --------------------------------------------------------

--
-- Structure de la table `forum_post`
--

CREATE TABLE IF NOT EXISTS `forum_post` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_createur` varchar(220) NOT NULL,
  `post_time` text NOT NULL,
  `topic_id` int(11) NOT NULL,
  `post_contenu` longtext NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Contenu de la table `forum_post`
--

INSERT INTO `forum_post` (`post_id`, `post_createur`, `post_time`, `topic_id`, `post_contenu`) VALUES
(1, '', '2013-05-31   17:34:07', 1, 'voila le premier post'),
(2, '', '2013-05-31   17:34:40', 1, 'coucou jeremi\r\n'),
(3, '', '2013-05-31   17:35:14', 1, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaav'),
(4, '', '2013-06-02   15:01:12', 1, 'moi'),
(6, 'Alexandre', '2013-06-02   15:33:35', 4, 'coucou'),
(7, 'Alexandre', '2013-06-02   15:37:05', 4, 'test'),
(8, 'Alexandre', '2013-06-02   15:37:30', 4, 'tu es mechabnt'),
(9, 'Alexandre', '2013-06-02   15:37:36', 4, 'de'),
(10, 'Alexandre', '2013-06-02   15:37:45', 4, '1'),
(11, 'Alexandre', '2013-06-02   15:37:49', 4, '2'),
(12, 'Alexandre', '2013-06-02   15:38:42', 4, 'voila il faut juste cliquer en fait\r\n'),
(13, 'Alexandre', '2013-06-02   15:51:34', 5, 'trucs');

-- --------------------------------------------------------

--
-- Structure de la table `forum_topic`
--

CREATE TABLE IF NOT EXISTS `forum_topic` (
  `topic_id` int(11) NOT NULL AUTO_INCREMENT,
  `forum_id` int(11) NOT NULL,
  `topic_titre` varchar(220) CHARACTER SET utf8 NOT NULL,
  `topic_createur` varchar(220) CHARACTER SET utf8 NOT NULL,
  `topic_time` text CHARACTER SET utf8 NOT NULL,
  `topic_last_post` text CHARACTER SET utf8 NOT NULL,
  `topic_description` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`topic_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `forum_topic`
--

INSERT INTO `forum_topic` (`topic_id`, `forum_id`, `topic_titre`, `topic_createur`, `topic_time`, `topic_last_post`, `topic_description`) VALUES
(1, 1, 'topic de test 1', 'mathieu', '2013-05-31   17:33:58', '2013-06-02   15:01:13', 'ceci est un test'),
(2, 1, 'math', '', '2013-06-02   15:01:00', '2013-06-02   15:01:37', 'Mathieu'),
(4, 6, 'premier topic', 'Alexandre', '2013-06-02   15:31:25', '2013-06-02   15:38:42', 'coucou\r\n'),
(5, 7, 'test', 'Alexandre', '2013-06-02   15:45:40', '2013-06-02   15:51:34', 'hbgeyui'),
(6, 7, 'dhka&', 'Alexandre', '2013-06-02   15:45:45', '2013-06-02   15:45:45', 'bduz'),
(7, 7, 'topic', 'Alexandre', '2013-06-02   15:51:23', '2013-06-02   15:51:23', 'hjhe');

-- --------------------------------------------------------

--
-- Structure de la table `images_article`
--

CREATE TABLE IF NOT EXISTS `images_article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `articleimg_id` int(11) NOT NULL,
  `image_url` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `images_article`
--

INSERT INTO `images_article` (`id`, `articleimg_id`, `image_url`) VALUES
(1, 11, '21fbbb372c67a14e2b9de67fda1f6d66.jpg'),
(2, 11, 'c0b8c071fb6751b21fc0bd17338fef74.jpg'),
(3, 11, '4d691ede3dac2dca88a44667a2a60467.jpg'),
(4, 12, '8ac0cbde2e9f72cacbe5dba6c6447cfa.jpg'),
(5, 12, '8365eafb2314684e1a45de4d18aba014.jpg'),
(6, 12, '0b2ff7a7bb7badd81105a3ee7bb77212.jpg'),
(7, 14, '7998cfa21633cbaf17651f6c3ba63a59.jpg'),
(8, 14, '6158d0d16479c341fbee948364054462.jpg'),
(9, 14, '45cf2b886e78fd2ef7f14a7d00ae4dd6.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE IF NOT EXISTS `panier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prixtotal` int(11) DEFAULT NULL,
  `users_id` int(11) NOT NULL,
  `commande_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_panier_users1_idx` (`users_id`),
  KEY `fk_panier_commande1_idx` (`commande_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `sous_categorie`
--

CREATE TABLE IF NOT EXISTS `sous_categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_souscategorie` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Contenu de la table `sous_categorie`
--

INSERT INTO `sous_categorie` (`id`, `nom_souscategorie`) VALUES
(1, 'Pantalon'),
(2, 'Jupe'),
(3, 'Chaussures'),
(4, 'Hauts'),
(5, 'Tee shirt'),
(6, 'Chemise'),
(7, 'Cravate'),
(8, 'Echarpe'),
(9, 'Bonnet'),
(10, 'Gant'),
(11, 'Ensemble'),
(12, 'Short'),
(13, 'Sac'),
(14, 'Manteau'),
(15, 'Robe');

-- --------------------------------------------------------

--
-- Structure de la table `stock`
--

CREATE TABLE IF NOT EXISTS `stock` (
  `id_stock` int(11) NOT NULL AUTO_INCREMENT,
  `article_id` int(11) NOT NULL,
  `taille_id` int(11) NOT NULL,
  `couleur_id` int(11) NOT NULL,
  `nombre` int(11) NOT NULL,
  PRIMARY KEY (`id_stock`),
  KEY `article_id` (`article_id`),
  KEY `taille_id` (`taille_id`),
  KEY `couleur_id` (`couleur_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- Contenu de la table `stock`
--

INSERT INTO `stock` (`id_stock`, `article_id`, `taille_id`, `couleur_id`, `nombre`) VALUES
(14, 11, 3, 4, 15),
(15, 11, 4, 4, 20),
(16, 11, 5, 4, 15),
(17, 12, 3, 5, 30),
(18, 12, 4, 5, 20),
(19, 12, 5, 5, 30),
(20, 14, 3, 25, 30),
(21, 14, 4, 25, 28),
(22, 14, 5, 25, 29),
(25, 18, 5, 8, 45),
(26, 19, 2, 5, 45);

-- --------------------------------------------------------

--
-- Structure de la table `taille`
--

CREATE TABLE IF NOT EXISTS `taille` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_taille` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=62 ;

--
-- Contenu de la table `taille`
--

INSERT INTO `taille` (`id`, `nom_taille`) VALUES
(1, 'XXS'),
(2, 'XS'),
(3, 'S'),
(4, 'M'),
(5, 'L'),
(6, 'XL'),
(7, 'XXL'),
(8, 'XXXL'),
(9, '19'),
(10, '20'),
(11, '21'),
(12, '22'),
(13, '23'),
(14, '24'),
(15, '25'),
(16, '26'),
(17, '27'),
(18, '28'),
(19, '29'),
(20, '30'),
(21, '31'),
(22, '32'),
(23, '33'),
(24, '34'),
(25, '35'),
(26, '36'),
(27, '37'),
(28, '38'),
(29, '39'),
(30, '40'),
(31, '41'),
(32, '42'),
(33, '43'),
(34, '44'),
(35, '45'),
(36, '46'),
(37, '47'),
(38, '48'),
(39, '49'),
(40, '50'),
(41, '51'),
(42, '1 mois'),
(43, '3 mois'),
(44, '6 mois'),
(45, '9 mois'),
(46, '12 mois'),
(47, '18 mois'),
(48, '2 ans'),
(49, '3 ans'),
(50, '4 ans'),
(51, '5 ans'),
(52, '5-6 ans'),
(53, '7 ans'),
(54, '8 ans'),
(55, '9 ans'),
(56, '10 ans'),
(57, '11/12 ans'),
(58, '13/14 ans'),
(59, '15/16 ans'),
(60, '17/18 ans'),
(61, 'indiférent');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(75) NOT NULL,
  `motdepasse` varchar(75) NOT NULL,
  `nom` varchar(75) NOT NULL,
  `prenom` varchar(75) NOT NULL,
  `mail` varchar(75) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `codepostal` int(10) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `telephone` int(15) NOT NULL,
  `alerte` int(2) NOT NULL,
  `parrain_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `pseudo`, `motdepasse`, `nom`, `prenom`, `mail`, `adresse`, `codepostal`, `ville`, `telephone`, `alerte`, `parrain_id`) VALUES
(3, 'rockofjerem2', '6f11328affdaa6105a09a80d49b296b42bede60f', 'Jumeau', 'jérémy', 'rockofjerem@hotmail.fr', '49 rue du Lt Cl de Montbrison', 92500, 'Rueil malmaison', 634016317, 0, 0),
(4, 'edgar', '6f11328affdaa6105a09a80d49b296b42bede60f', 'Halbert', 'Edgar', 'edgar@gmail.com', '45 rue du glock batiment C', 75001, 'Paris', 687654323, 0, 0),
(5, 'clotilde', '6f11328affdaa6105a09a80d49b296b42bede60f', 'Hovine', 'Clotilde', 'clotilde@gmail.com', '43 rue des bonnes affaires', 75001, 'Paris', 145654543, 0, 0),
(6, 'victor', '6f11328affdaa6105a09a80d49b296b42bede60f', 'Delepine', 'victor', 'victor@gmail.com', '46 avenue des falafolles', 92500, 'Rueil malmaison', 145654548, 0, 0),
(7, 'Alexandre', 'd08f88df745fa7950b104e4a707a31cfce7b5841', 'Joubert', 'Alexandre', 'a@a.fr', '8 rue la fayette', 75009, 'Paris', 123456789, 0, 0),
(9, 'Alex', '2020dcd5242df712f8cb93b93c8f9f914761b2b6', 'Joubert', 'Alexandre', 'alexjoubert@orange.fr', '8 rue la fayette', 75009, 'Paris', 625345689, 1, 0),
(10, 'rockofjerem', '2020dcd5242df712f8cb93b93c8f9f914761b2b6', 'Jumeau', 'jérémy', 'rockofjerem@hotmail.fr', '49 rue du Lt Cl de Montbrison', 92500, 'Rueil Malmaison', 634016317, 0, 0),
(11, 'j2o', '2020dcd5242df712f8cb93b93c8f9f914761b2b6', 'J2p', 'alex', 'alex.joubert1@gmail.com', '3 rue de la paix', 75000, 'paris', 123456789, 0, 0),
(12, 'alexan', '2020dcd5242df712f8cb93b93c8f9f914761b2b6', 'Joub', 'alexan', 'alex.joubert1@gmail.com', '75 rue la fayette', 75000, 'Paris', 123456789, 0, 0),
(13, 'az', '2020dcd5242df712f8cb93b93c8f9f914761b2b6', 'a', 'b', 'alex.joubert1@gmail.com', 'c', 75000, 'Paris', 123456789, 0, 0),
(14, 'aqw', '2020dcd5242df712f8cb93b93c8f9f914761b2b6', 'aze', 'aze', 'alex.joubert1@gmail.com', '3 rue de la paix', 75000, 'Paris', 123456789, 0, 0),
(15, 'asc', '2020dcd5242df712f8cb93b93c8f9f914761b2b6', 'asc', 'asc', 'alex.joubert1@gmail.com', '3 rue de la paix', 75000, 'Paris', 123456789, 0, 7);

-- --------------------------------------------------------

--
-- Structure de la table `vendeur`
--

CREATE TABLE IF NOT EXISTS `vendeur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(75) NOT NULL,
  `motdepasse` varchar(75) NOT NULL,
  `marque` varchar(75) NOT NULL,
  `nomdirigeant` varchar(75) NOT NULL,
  `mail` varchar(75) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `codepostal` int(11) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `telephone` int(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `vendeur`
--

INSERT INTO `vendeur` (`id`, `pseudo`, `motdepasse`, `marque`, `nomdirigeant`, `mail`, `adresse`, `codepostal`, `ville`, `telephone`) VALUES
(3, 'chanel', '6f11328affdaa6105a09a80d49b296b42bede60f', 'chanel', 'chanel', 'chanel@chanel.fr', '43 rue des bonnes affaires', 75001, 'Paris', 0),
(4, 'dior', '6f11328affdaa6105a09a80d49b296b42bede60f', 'Dior', 'christian dior', 'dior@dior.fr', '49 rue des bonnes affaires', 75001, 'Paris', 0),
(5, 'booba', '6f11328affdaa6105a09a80d49b296b42bede60f', 'Uncut', 'Booba', 'booba@rayyy.fr', '45 rue du glock batiment C', 92100, 'Boulogne', 669696969),
(6, 'RaphLauren', '7e240de74fb1ed08fa08d38063f6a6a91462a815', 'Raph Lauren', 'Raph Lauren', 'raphlauren@raph.fr', '3 rue de la paix', 75000, 'Paris', 123456789),
(7, 'Zara', '7e240de74fb1ed08fa08d38063f6a6a91462a815', 'Zara', 'Zara', 'zara@zara.fr', '75 rue de la paix', 75000, 'Paris', 123456789),
(8, 'Zara', '2020dcd5242df712f8cb93b93c8f9f914761b2b6', 'Zara', 'MrZara', 'zara@noreply.fr', '75 rue de la paix', 75000, 'Paris', 123456789);

-- --------------------------------------------------------

--
-- Structure de la table `vente`
--

CREATE TABLE IF NOT EXISTS `vente` (
  `id_vente` int(11) NOT NULL AUTO_INCREMENT,
  `nom_vente` varchar(70) NOT NULL,
  `description` text NOT NULL,
  `carroussel_url` varchar(255) NOT NULL,
  `vente_url` varchar(255) NOT NULL,
  `vendeur_id` int(11) NOT NULL,
  `date_debut` date NOT NULL,
  `heure_debut` time NOT NULL,
  `date_fin` date NOT NULL,
  `heure_fin` time NOT NULL,
  PRIMARY KEY (`id_vente`),
  KEY `vendeur_id` (`vendeur_id`),
  KEY `id_vente` (`id_vente`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=33 ;

--
-- Contenu de la table `vente`
--

INSERT INTO `vente` (`id_vente`, `nom_vente`, `description`, `carroussel_url`, `vente_url`, `vendeur_id`, `date_debut`, `heure_debut`, `date_fin`, `heure_fin`) VALUES
(11, 'Première vente de Zara', 'La première vente de la marque Zara', 'bfcacdfdea54d7b07d6b9c9f108118a6.jpg', '3f380115afebc0ea4c1bbe185a6d4611.jpg', 8, '2013-06-04', '00:00:00', '2013-06-09', '00:00:00'),
(17, 'Vente actuelle de Zara', 'Une vente de la marque Zara', 'cd2cbd0a7d28268acfa68c32fcd6bcd6.jpg', '5eaf2386451a5bf643abe6d1bba4eeb8.jpg', 8, '2013-06-01', '00:00:00', '2013-07-31', '23:00:00'),
(20, 'Première vente de Chanel', 'première vente de chanel', '', '', 3, '2013-06-04', '00:00:00', '2013-06-21', '00:00:00'),
(21, 'Deuxième vente de Chanel', 'fe', '', '', 3, '2013-06-05', '23:59:00', '2013-06-27', '01:01:00'),
(22, 'Deuxième vente de Chanel', 'fe', '', '', 3, '2013-06-05', '23:59:00', '2013-06-27', '01:01:00'),
(23, 'Deuxième vente de Chanel', 'fe', '', '', 3, '2013-06-05', '23:59:00', '2013-06-27', '01:01:00'),
(24, 'encore', 'dernier', '', '', 3, '2013-06-05', '00:00:00', '2013-06-08', '00:00:00'),
(25, 'encore', 'dernier', '', '', 3, '2013-06-05', '00:00:00', '2013-06-08', '00:00:00'),
(26, 'encore', 'dernier', '', '', 3, '2013-06-05', '00:00:00', '2013-06-08', '00:00:00'),
(27, 'encore', 'dernier', '', '', 3, '2013-06-05', '00:00:00', '2013-06-08', '00:00:00'),
(28, 'encore', 'dernier', '', '', 3, '2013-06-05', '00:00:00', '2013-06-08', '00:00:00'),
(29, 'encore', 'dernier', '', '', 3, '2013-06-05', '00:00:00', '2013-06-08', '00:00:00'),
(30, 'encore', 'dernier', '', '', 3, '2013-06-05', '00:00:00', '2013-06-08', '00:00:00'),
(31, 'encore', 'dernier', '', '', 3, '2013-06-05', '00:00:00', '2013-06-08', '00:00:00'),
(32, 'Encore une vente', 'blabla', '', '', 3, '2013-06-23', '00:00:00', '2013-07-12', '00:00:00');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`vente_id`) REFERENCES `vente` (`id_vente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `stock`
--
ALTER TABLE `stock`
  ADD CONSTRAINT `stock_ibfk_2` FOREIGN KEY (`taille_id`) REFERENCES `taille` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `stock_ibfk_4` FOREIGN KEY (`couleur_id`) REFERENCES `couleur` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `stock_ibfk_7` FOREIGN KEY (`article_id`) REFERENCES `article` (`id_article`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `vente`
--
ALTER TABLE `vente`
  ADD CONSTRAINT `vente_ibfk_2` FOREIGN KEY (`vendeur_id`) REFERENCES `vendeur` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
