-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 26 avr. 2019 à 20:05
-- Version du serveur :  10.1.31-MariaDB
-- Version de PHP :  7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `elias`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `nom`, `email`, `password`) VALUES
(1, 'kouadio Elias', 'kouadio@gmail.com', '11');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `maison_id` int(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `commentaire` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `nom`, `maison_id`, `email`, `commentaire`, `date`) VALUES
(1, 'kouadio', 0, '2', 'kouadio@gmail.com', '2019-04-25 16:14:00'),
(2, 'outtara', 2, 'ouattar@gmail.com', 'comments of ouattara', '2019-04-25 16:16:47'),
(3, 'loukou', 3, 'loukou@gmail.com', 'loukou commentaire\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.', '2019-04-25 19:03:42'),
(4, 'outtara', 3, 'ouattar@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.', '2019-04-25 20:04:12'),
(5, '', 3, '', '', '2019-04-26 10:31:03'),
(6, '', 3, '', '', '2019-04-26 10:31:19'),
(7, 'outtara', 3, 'ouattar@gmail.com', 'cool', '2019-04-26 10:38:15'),
(8, 'kouadio', 6, 'kouadio@gmail.com', 'j\'aime caaaaa!!!!', '2019-04-26 10:38:47'),
(9, 'loukou', 8, 'loukou@gmail.com', 'c\'est troooop zooj\'aime ca \r\nje vais en construire\r\n', '2019-04-26 17:10:04');

-- --------------------------------------------------------

--
-- Structure de la table `constructeurs`
--

CREATE TABLE `constructeurs` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `ville` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `constructeurs`
--

INSERT INTO `constructeurs` (`id`, `nom`, `ville`, `type`, `email`, `password`) VALUES
(1, 'Kofi Simon', 'Abidjan', 'villa', 'kofi@gmail.com', '11'),
(2, 'kone ouattara', 'Daloa', 'Diplesse', 'kone@gmail.com', '11');

-- --------------------------------------------------------

--
-- Structure de la table `maisons`
--

CREATE TABLE `maisons` (
  `id` int(20) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `type` varchar(100) NOT NULL,
  `constructeur` varchar(150) NOT NULL DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `maisons`
--

INSERT INTO `maisons` (`id`, `titre`, `description`, `image`, `type`, `constructeur`) VALUES
(5, 'hd construct', 'Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. ', 'fb_img_1554858703796.jpg', 'diplesse', '9'),
(6, 'supper diplesse de ramde', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.', 'fb_img_1554859199013.jpg', 'diplesse', '8'),
(7, 'mamaniya villa', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.', 'fb_img_1554859364066.jpg', 'Villa simple', '4'),
(8, 'coolllll villa simple', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.\r\nSome quick example text to build on the card title and make up the bulk of the card\'s content.', 'fb_img_1554859264519.jpg', 'Villa simple', '11');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `naissance` varchar(30) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `commune` varchar(244) NOT NULL,
  `photo` varchar(222) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `naissance`, `contact`, `email`, `ville`, `commune`, `photo`, `password`) VALUES
(1, 'kouadio', 'elias', '2019-04-05', '03121490', 'admin@example.com', 'abidjan', 'Abobo', '', 'gg'),
(2, '', '', '', '', '', '', '', '', ''),
(3, 'KONE', 'landry', '2019-04-10', '111111111', 'guissastephane@gmail.com', 'ABENGROU', 'Abobo', '', '111'),
(4, 'kouadio', 'Simeon', '2019-04-12', '03121490', 'byfrombyt@yahoo.fr', 'abidjan', 'Abobo', 'module_table_bottom.png', 'ff'),
(5, 'Ouattara', 'Minata', '2019-04-24', '79641915', 'ouattara@gmail.com', 'Abidjan', 'Abobo', 'win_20180614_09_36_28_pro.jpg', '11'),
(6, 'pehi', 'Ives', '2019-02-18', '79641915', 'pehi@gmail.com', 'AdzopÃ©', 'Abobo', 'fb_img_1554595861987.jpg', '11'),
(7, 'boua', 'ubert', '1995-04-25', '79641915', 'boua@gmail.com', 'AdzopÃ©', 'Abobo', 'fb_img_1554595852873.jpg', '11'),
(8, 'ramde', 'bakary', '1987-04-25', '79641915', 'ramde@gmail.com', 'daloa/ci', 'akeikoi', 'al3.jpg', '11'),
(9, 'loukou', 'paul', '2011-08-25', '79641915', 'loukou@gmail.com', 'AdzopÃ©', 'Yopougon', 'fb_img_1554595831647.jpg', '11'),
(10, 'badou', 'matthias', '1998-04-26', '01704194', 'badou@gmail.com', 'Bassam', 'France', 'fb_img_1554859587125.jpg', '11'),
(11, 'koffi', 'jonas', '2013-04-26', '01704194', 'koffi@gmail.com', 'tanda', 'transua', 'fb_img_1554859587125.jpg', '11');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `constructeurs`
--
ALTER TABLE `constructeurs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `maisons`
--
ALTER TABLE `maisons`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `constructeurs`
--
ALTER TABLE `constructeurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `maisons`
--
ALTER TABLE `maisons`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
