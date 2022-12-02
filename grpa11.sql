-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Ven 02 Décembre 2022 à 00:01
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `grpa11`
--
CREATE DATABASE IF NOT EXISTS `grpa11` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `grpa11`;

-- --------------------------------------------------------

--
-- Structure de la table `home`
--

CREATE TABLE `home` (
  `h1` varchar(200) NOT NULL,
  `h2` varchar(200) NOT NULL,
  `p1` text NOT NULL,
  `p2` text NOT NULL,
  `cardp1` varchar(255) NOT NULL,
  `cardp2` varchar(255) NOT NULL,
  `card1title` varchar(200) NOT NULL,
  `card2title` varchar(200) NOT NULL,
  `id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `home`
--

INSERT INTO `home` (`h1`, `h2`, `p1`, `p2`, `cardp1`, `cardp2`, `card1title`, `card2title`, `id`) VALUES
('Accueil', 'About us', 'p1e', '', 'Salut, j\'aime coder et jouer aux jeux vidéos.\r\n                  <br>Ces derniers temps, j\'ai commencé à coder des mini-jeux dans minecraft.', 'Bienvenue terrien, j\'aime jouer aux jeux particulièrement de Nintendo en live, et en ce moment des F2P.\r\n                  <br>Etudiant à G.Tech, je fait parti de ProjeTea.', 'Noham "Coucoul38"', 'Justin "Killingaming"', 1);

-- --------------------------------------------------------

--
-- Structure de la table `projects`
--

CREATE TABLE `projects` (
  `id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `img_parallax` varchar(200) DEFAULT NULL,
  `h2` varchar(100) DEFAULT NULL,
  `p1` text,
  `description` varchar(255) NOT NULL DEFAULT 'Je suis une description'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `projects`
--

INSERT INTO `projects` (`id`, `name`, `img_parallax`, `h2`, `p1`, `description`) VALUES
(19, 'Once grief enters your life, it never leaves', 'img/grief.jpg', 'Once grief enters your life, it never leaves', 'Once grief enters your life, it never leaves', 'Once grief enters your life, it never leaves'),
(21, 'Entrez un titre', 'img/Noham Coulon.jpg', 'h2', 'Text', 'Je suis une description'),
(22, 'Star Wars', 'img/163-1636953_star-wars-wallpaper-1080p-star-wars-battlefront-2.jpg', 'Episode IV A NEW HOPE', 'It is a period of civil war.\r\nRebel spaceships, striking\r\nfrom a hidden base, have won\r\ntheir first victory against\r\nthe evil Galactic Empire.\r\n\r\nDuring the battle, Rebel\r\nspies managed to steal secret\r\nplans to the Empire\'s\r\nultimate weapon, the DEATH\r\nSTAR, an armored space\r\nstation with enough power to\r\ndestroy an entire planet.\r\n\r\nPursued by the Empire\'s\r\nsinister agents, Princess\r\nLeia races home aboard her\r\nstarship, custodian of the\r\nstolen plans that can save\r\nher people and restore\r\nfreedom to the galaxy....', '');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `admin`) VALUES
(9, 'Coucoul38', 'noham.coulon@gmail.com', '3c6e50083f1846975d8b8fe3517409baef5ed11488935fea1bf0051a5e3ff9c1', 1),
(10, 'bobby', 'bob.bob@bob.bob', 'd8ba1ff038fbc4a87afe9fe6af0fa67e81f672a9f9375d9585fba9310f81fc85', 0),
(11, 'amogus', 'noham.coulon@monemail.com', '04bb2936e3d4c28b89420f6f178b1e7854bc518e958272ad840eb52be817ce6e', 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
