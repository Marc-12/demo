-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 05 Décembre 2017 à 21:38
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `billets`
--

CREATE TABLE IF NOT EXISTS `billets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `date_creation` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Contenu de la table `billets`
--

INSERT INTO `billets` (`id`, `titre`, `contenu`, `date_creation`) VALUES
(10, 'BRAVO MARC', 'BRAVO MARC !!!\r\nTu viens juste de rÃ©ussir ton TP !! \r\nC''est tout juste Ã©norme mec !!\r\n', '0000-00-00 00:00:00'),
(11, 'titre', 'AZERERERER', '0000-00-00 00:00:00'),
(12, 'titre', 'sssssssssssssss\r\n', '0000-00-00 00:00:00'),
(13, 'titre', 'oooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo', '0000-00-00 00:00:00'),
(14, 'titre', 'dfdf', '0000-00-00 00:00:00'),
(15, 'titre', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx', '0000-00-00 00:00:00'),
(16, 'titre', 'ererer', '0000-00-00 00:00:00'),
(17, 'DERNIER TITRE', 'AZERTY', '0000-00-00 00:00:00'),
(18, 'DERNIER TITRE', 'AAAAAAAAAAAAAAAAA', '0000-00-00 00:00:00'),
(19, 'marc', 'ereeeeeeeeeeeeeeeeeee\r\n', '0000-00-00 00:00:00'),
(20, 'second teitre', 'bbbbbbbbbbb', '0000-00-00 00:00:00'),
(21, '1AAAAAAAAAA', 'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA', '0000-00-00 00:00:00'),
(22, 'titreddfddf', 'Ã©aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2017-11-18 18:48:56'),
(23, 'titre', '', '2017-11-18 19:14:37'),
(24, 'titre', '', '2017-11-18 19:25:27'),
(25, 'BIENVENUE A NOVGOROD', 'JE suis aussi dans le commerce ', '2017-11-19 14:07:07'),
(26, 'titre', 'aaaaaaaaaa', '2017-11-19 14:27:36'),
(27, 'titre', '', '2017-11-19 14:29:08'),
(28, 'titre', '', '2017-11-19 14:29:25'),
(29, 'titre', '', '2017-11-19 14:39:48'),
(30, 'titre', 'azzzzzzzezez', '2017-11-19 14:54:05'),
(31, 'titreddfddf', 'nnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn', '2017-11-19 15:33:37'),
(32, 'maintenant ', 'maintenant ', '2017-11-19 16:06:07'),
(33, 'Ipsum ', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repella', '2017-11-19 21:00:19'),
(34, 'titre', '', '2017-11-19 23:14:27'),
(35, 'titre', '', '2017-11-19 23:14:43'),
(36, 'aaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2017-11-19 23:17:09'),
(37, 'titre', '', '2017-11-19 23:20:39'),
(38, 'titre', '', '2017-11-19 23:20:45'),
(39, 'DERNIER TITRE', 'article du dimanche soir ', '2017-11-19 23:21:05'),
(40, 'Michel', 'L''ange Michel', '2017-11-20 15:22:30');

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE IF NOT EXISTS `commentaires` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_article` int(11) NOT NULL,
  `auteur` varchar(255) NOT NULL,
  `commentaire` text NOT NULL,
  `date_commentaire` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=81 ;

--
-- Contenu de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `id_article`, `auteur`, `commentaire`, `date_commentaire`) VALUES
(1, 0, 'auteur du commentaire', 'ddddddddddddddddd', '0000-00-00 00:00:00'),
(2, 17, 'auteur du commentaire', '', '0000-00-00 00:00:00'),
(3, 17, 'auteur du commentaire', 'dfdfd', '0000-00-00 00:00:00'),
(4, 18, 'ddd', 'dddddddddddddd', '0000-00-00 00:00:00'),
(5, 18, 'marcccccccccc', 'range t chammmmbre', '0000-00-00 00:00:00'),
(6, 18, 'marcccccccccc', 'range t chammmmbre', '0000-00-00 00:00:00'),
(7, 18, 'auteur du commentaire', 'aaaaaaaaaaaaaa', '0000-00-00 00:00:00'),
(8, 18, 'auteur du commentaire', 'aaaaaaaaaaaaaa', '0000-00-00 00:00:00'),
(9, 18, 'auteur du commentaire', 'aaaaaaaaaaaaaa', '0000-00-00 00:00:00'),
(10, 18, 'auteur du commentaire', 'aaaaaaaaaaaaaa', '0000-00-00 00:00:00'),
(11, 18, 'auteur du commentaire', '', '0000-00-00 00:00:00'),
(12, 18, 'auteur du commentaire', '', '0000-00-00 00:00:00'),
(13, 18, 'auteur du commentaire', '', '0000-00-00 00:00:00'),
(14, 18, 'auteur du commentaire', '', '0000-00-00 00:00:00'),
(15, 18, 'auteur du commentaire', '', '0000-00-00 00:00:00'),
(16, 18, 'auteur du commentaire', '', '0000-00-00 00:00:00'),
(17, 18, 'auteur du commentaire', '', '0000-00-00 00:00:00'),
(18, 18, 'auteur du commentaire', '', '0000-00-00 00:00:00'),
(19, 18, 'marc', 'mon ommenaire', '0000-00-00 00:00:00'),
(20, 18, 'marc', 'mon ommenaire', '0000-00-00 00:00:00'),
(21, 18, 'marc', 'mon ommenaire', '0000-00-00 00:00:00'),
(22, 18, 'marc', 'mon ommenaire', '0000-00-00 00:00:00'),
(23, 18, 'marc', 'mon ommenaire', '0000-00-00 00:00:00'),
(24, 18, 'marc', 'mon ommenaire', '0000-00-00 00:00:00'),
(25, 18, 'marc', 'mon ommenaire', '0000-00-00 00:00:00'),
(26, 18, 'marc', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '0000-00-00 00:00:00'),
(27, 18, 'marc', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '0000-00-00 00:00:00'),
(28, 18, 'marc', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '0000-00-00 00:00:00'),
(29, 18, 'marc', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '0000-00-00 00:00:00'),
(30, 18, 'marc', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '0000-00-00 00:00:00'),
(31, 18, 'marc', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '0000-00-00 00:00:00'),
(32, 18, 'marc', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '0000-00-00 00:00:00'),
(33, 18, 'marc', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '0000-00-00 00:00:00'),
(34, 18, 'marc', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '0000-00-00 00:00:00'),
(35, 18, 'marc', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '0000-00-00 00:00:00'),
(36, 18, 'marc', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '0000-00-00 00:00:00'),
(37, 18, 'marc', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '0000-00-00 00:00:00'),
(38, 18, 'marc', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '0000-00-00 00:00:00'),
(39, 18, 'marc', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '0000-00-00 00:00:00'),
(40, 18, 'marc', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '0000-00-00 00:00:00'),
(41, 18, 'marc', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '0000-00-00 00:00:00'),
(42, 20, 'auteur du commentaire', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '0000-00-00 00:00:00'),
(43, 20, 'auteur du commentaire', '', '0000-00-00 00:00:00'),
(44, 20, 'auteur du commentaire', '', '0000-00-00 00:00:00'),
(45, 20, 'auteur du commentaire', '', '0000-00-00 00:00:00'),
(46, 20, 'auteur du commentaire', '', '0000-00-00 00:00:00'),
(47, 20, 'auteur du commentaire', '', '0000-00-00 00:00:00'),
(48, 20, 'auteur du commentaire', '', '0000-00-00 00:00:00'),
(49, 20, 'auteur du commentaire', '', '0000-00-00 00:00:00'),
(50, 20, 'auteur du commentaire', '', '0000-00-00 00:00:00'),
(51, 22, 'auteur du commentaire', '', '2017-11-18 18:52:09'),
(52, 22, 'auteur du commentaire', '', '2017-11-18 18:52:12'),
(53, 0, '', '', '0000-00-00 00:00:00'),
(54, 0, '', 'le texte: maintent-commentaire', '2017-11-19 16:06:27'),
(55, 0, '', '', '2017-11-19 16:07:59'),
(56, 32, '', 'ffff', '2017-11-19 16:13:56'),
(57, 32, 'auteur du commentaire', 'azzzzzzzz', '0000-00-00 00:00:00'),
(58, 32, 'auteur du commentaire', '33333333333333', '0000-00-00 00:00:00'),
(59, 32, 'auteur du commentaire', '', '0000-00-00 00:00:00'),
(60, 32, 'auteur du commentaire', 'ddddddddddddddd', '0000-00-00 00:00:00'),
(61, 32, 'auteur du commentaire', 'aaaaaaaaaaaaaaaaaaaa', '0000-00-00 00:00:00'),
(62, 32, 'auteur du commentaire', ',,,nn', '0000-00-00 00:00:00'),
(63, 32, 'auteur du commentaire', ',,,nn', '0000-00-00 00:00:00'),
(64, 32, 'auteur du commentaire', ',,,nn', '0000-00-00 00:00:00'),
(65, 32, 'auteur du commentaire', ',,,nn', '0000-00-00 00:00:00'),
(66, 32, 'auteur du commentaire', ',,,nn', '0000-00-00 00:00:00'),
(67, 32, 'auteur du commentaire', ',,,nn', '0000-00-00 00:00:00'),
(68, 32, 'auteur du commentaire', ',,,nn', '0000-00-00 00:00:00'),
(69, 31, 'Mon super commentaire', 'WOWWWWW!!! ', '0000-00-00 00:00:00'),
(70, 31, 'auteur du commentaire', 'SECOND COMMENTAIRE !!', '0000-00-00 00:00:00'),
(71, 32, 'Marc', 'SUPER COMMENTAIRE !!\r\n', '0000-00-00 00:00:00'),
(72, 28, 'LUIDGI', 'C''EST UN SUPER ARTICLE', '2017-11-19 19:40:22'),
(73, 28, 'SERGIO', 'Le roi de la musique c''est LÃ©one ', '2017-11-19 20:56:55'),
(74, 28, 'auteur du commentaire', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repella', '2017-11-19 20:59:57'),
(75, 33, 'Marc', 'DÃ©gage et puis quoi encore ! ', '2017-11-19 21:01:46'),
(76, 33, 'Luigi', 'Attends un peu ', '2017-11-19 21:02:07'),
(77, 39, 'auteur du commentaire', 'dddfdf', '2017-11-20 15:21:26'),
(78, 39, 'louis funes', 'Rabbi Jacob', '2017-11-20 15:21:52'),
(79, 40, 'auteur du commentaire', '', '2017-11-20 15:22:43'),
(80, 40, 'auteur du commentaire', 'dfdf', '2017-11-27 10:39:04');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `comment_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Contenu de la table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `author`, `comment`, `comment_date`) VALUES
(2, 1, 'mmmmmmmm', 'mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm', '2017-11-29 09:50:17'),
(3, 1, 'marc', 'commentaire ca marche !!! ', '2017-11-30 11:31:41'),
(4, 2, 'dddddddddddddddd', 'ddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', '2017-11-30 11:32:50'),
(5, 1, 'ddf', 'dddddddddddddd', '2017-11-30 14:54:11'),
(6, 2, 'Marc', 'voici mon commentaire !! ', '2017-11-30 14:57:41'),
(7, 1, 'dfdfdf', 'dsssssssssssssssss', '2017-12-01 11:19:41'),
(8, 6, 'eee', 'dddddddddddddddddddddddddddddddddddddddddddddddddddddd', '2017-12-01 21:19:46'),
(9, 7, 'marc', 'c''est marc ! je vais bien ! \r\n', '2017-12-01 22:11:38'),
(10, 7, 'dddddddddddddddd', 'modification', '2017-12-01 22:15:24'),
(11, 6, 'marc', 'mmm', '2017-12-01 22:29:34'),
(12, 8, 'marc', 'mon premier commentaire ', '2017-12-01 22:35:07'),
(13, 6, 'marc', 'supeer comme,taire ', '2017-12-02 11:50:27'),
(14, 9, 'MARC', 'MARIAGE !!', '2017-12-02 13:20:25'),
(15, 6, 'MARC', '', '2017-12-02 13:21:27'),
(16, 6, 'marc', 'c''est lundi aujourd''hui', '2017-12-03 15:58:36'),
(17, 6, 'moi', 'mardiiiiiiiiiiiiiiiiiii', '2017-12-04 17:58:15'),
(18, 6, 'marc', 'a', '2017-12-05 21:33:23');

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `creation_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Contenu de la table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `creation_date`) VALUES
(1, 'VOICI LE BOUZIN DU JOUR', 'rien de nouveau à groland', '2017-12-12 12:12:12'),
(2, 'VICTOIRE MARC!!', 'BRAVO MARC', '2017-11-29 09:58:38'),
(3, 'MARc', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '2017-01-12 12:12:12'),
(4, 'MARc', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '2017-01-12 12:12:12'),
(5, 'MARc', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '2017-01-12 12:12:12'),
(6, 'MARc', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '2017-01-12 12:12:12'),
(7, 'MARc', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '2017-01-12 12:12:12'),
(8, 'MARc', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '2017-01-12 12:12:12'),
(9, 'MARc', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '2017-01-12 12:12:12'),
(10, 'MARc', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '2017-01-12 12:12:12'),
(11, 'MARc', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '2017-01-12 12:12:12'),
(12, 'MARc', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '2017-01-12 12:12:12'),
(13, 'MARc', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '2017-01-12 12:12:12'),
(14, 'MARc', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '2017-01-12 12:12:12'),
(15, 'MARc', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '2017-01-12 12:12:12'),
(16, 'MARc', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '2017-01-12 12:12:12');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
