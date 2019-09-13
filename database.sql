-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Ven 13 Septembre 2019 à 17:49
-- Version du serveur :  5.7.27-0ubuntu0.18.04.1
-- Version de PHP :  7.2.19-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `voyage`
--

-- --------------------------------------------------------

--
-- Structure de la table `avoir`
--

CREATE TABLE `avoir` (
  `idVille` int(11) NOT NULL,
  `idType` int(11) NOT NULL,
  `budget` float NOT NULL,
  `duree` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `avoir`
--

INSERT INTO `avoir` (`idVille`, `idType`, `budget`, `duree`) VALUES
(3, 3, 650, 7),
(4, 3, 800, 7),
(4, 4, 870, 3),
(5, 3, 800, 7),
(6, 4, 2000, 5),
(7, 3, 800, 4),
(8, 2, 80, 7),
(9, 3, 800, 8),
(10, 4, 700, 4),
(11, 2, 800, 4),
(12, 1, 700, 7),
(13, 3, 500, 10),
(14, 5, 400, 4),
(15, 3, 300, 3),
(16, 4, 1800, 7),
(17, 1, 800, 4),
(18, 1, 800, 7),
(19, 3, 400, 2),
(20, 1, 7, 700),
(20, 3, 800, 5),
(27, 4, 7502, 7),
(27, 5, 700, 7),
(31, 4, 500, 8),
(32, 5, 300, 1);

-- --------------------------------------------------------

--
-- Structure de la table `continent`
--

CREATE TABLE `continent` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `continent`
--

INSERT INTO `continent` (`id`, `libelle`) VALUES
(1, 'Europe'),
(2, 'Asie'),
(3, 'Afrique'),
(4, 'Amérique'),
(5, 'Océanie');

-- --------------------------------------------------------

--
-- Structure de la table `mois`
--

CREATE TABLE `mois` (
  `id` int(11) NOT NULL,
  `libelle` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `mois`
--

INSERT INTO `mois` (`id`, `libelle`) VALUES
(1, 'Janvier'),
(2, 'Février'),
(3, 'Mars'),
(4, 'Avril'),
(5, 'Mai'),
(6, 'Juin'),
(7, 'Juillet'),
(8, 'Août'),
(9, 'Septembre'),
(10, 'Octobre'),
(11, 'Novembre'),
(12, 'Décembre');

-- --------------------------------------------------------

--
-- Structure de la table `periode`
--

CREATE TABLE `periode` (
  `mois` int(11) NOT NULL,
  `temperature` float NOT NULL,
  `idVille` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `periode`
--

INSERT INTO `periode` (`mois`, `temperature`, `idVille`) VALUES
(1, 30, 3),
(1, 25, 4),
(1, 30, 5),
(1, 24, 6),
(1, 16, 7),
(1, 30, 8),
(1, 31, 9),
(1, 32, 10),
(1, 22, 11),
(1, 22, 12),
(1, 22, 13),
(1, 27, 14),
(1, 27, 15),
(1, 17, 16),
(1, 12, 17),
(1, 30, 18),
(1, 15, 19),
(1, 10, 20),
(1, 26, 27),
(1, 21, 31),
(2, 30, 3),
(2, 25, 4),
(2, 30, 5),
(2, 24, 6),
(2, 16, 7),
(2, 30, 8),
(2, 31, 9),
(2, 32, 10),
(2, 22, 11),
(2, 22, 12),
(2, 22, 13),
(2, 27, 14),
(2, 27, 15),
(2, 17, 16),
(2, 12, 17),
(2, 30, 18),
(2, 15, 19),
(2, 10, 20),
(2, 26, 27),
(2, 21, 31),
(3, 30, 3),
(3, 25, 4),
(3, 30, 5),
(3, 24, 6),
(3, 16, 7),
(3, 30, 8),
(3, 31, 9),
(3, 32, 10),
(3, 22, 11),
(3, 22, 12),
(3, 22, 13),
(3, 27, 14),
(3, 27, 15),
(3, 17, 16),
(3, 12, 17),
(3, 30, 18),
(3, 15, 19),
(3, 10, 20),
(3, 26, 27),
(3, 21, 31),
(4, 30, 3),
(4, 25, 4),
(4, 30, 5),
(4, 24, 6),
(4, 16, 7),
(4, 30, 8),
(4, 31, 9),
(4, 32, 10),
(4, 22, 11),
(4, 22, 12),
(4, 22, 13),
(4, 27, 14),
(4, 27, 15),
(4, 17, 16),
(4, 12, 17),
(4, 30, 18),
(4, 15, 19),
(4, 10, 20),
(4, 26, 27),
(4, 21, 31),
(5, 30, 3),
(5, 25, 4),
(5, 30, 5),
(5, 24, 6),
(5, 16, 7),
(5, 30, 8),
(5, 31, 9),
(5, 32, 10),
(5, 22, 11),
(5, 22, 12),
(5, 22, 13),
(5, 27, 14),
(5, 27, 15),
(5, 17, 16),
(5, 12, 17),
(5, 30, 18),
(5, 15, 19),
(5, 10, 20),
(5, 26, 27),
(5, 21, 31),
(6, 30, 3),
(6, 25, 4),
(6, 30, 5),
(6, 24, 6),
(6, 16, 7),
(6, 30, 8),
(6, 31, 9),
(6, 32, 10),
(6, 22, 11),
(6, 22, 12),
(6, 22, 13),
(6, 27, 14),
(6, 27, 15),
(6, 17, 16),
(6, 12, 17),
(6, 30, 18),
(6, 15, 19),
(6, 10, 20),
(6, 26, 27),
(6, 21, 31),
(7, 30, 3),
(7, 25, 4),
(7, 30, 5),
(7, 24, 6),
(7, 16, 7),
(7, 30, 8),
(7, 31, 9),
(7, 32, 10),
(7, 22, 11),
(7, 22, 12),
(7, 22, 13),
(7, 27, 14),
(7, 27, 15),
(7, 17, 16),
(7, 12, 17),
(7, 30, 18),
(7, 15, 19),
(7, 10, 20),
(7, 26, 27),
(7, 21, 31),
(8, 30, 3),
(8, 25, 4),
(8, 30, 5),
(8, 24, 6),
(8, 16, 7),
(8, 30, 8),
(8, 31, 9),
(8, 32, 10),
(8, 22, 11),
(8, 22, 12),
(8, 22, 13),
(8, 27, 14),
(8, 27, 15),
(8, 17, 16),
(8, 12, 17),
(8, 30, 18),
(8, 15, 19),
(8, 10, 20),
(8, 26, 27),
(8, 21, 31),
(9, 30, 3),
(9, 25, 4),
(9, 30, 5),
(9, 24, 6),
(9, 16, 7),
(9, 30, 8),
(9, 31, 9),
(9, 32, 10),
(9, 22, 11),
(9, 22, 12),
(9, 22, 13),
(9, 27, 14),
(9, 27, 15),
(9, 17, 16),
(9, 12, 17),
(9, 30, 18),
(9, 15, 19),
(9, 10, 20),
(9, 26, 27),
(9, 21, 31),
(10, 30, 3),
(10, 25, 4),
(10, 30, 5),
(10, 24, 6),
(10, 16, 7),
(10, 30, 8),
(10, 31, 9),
(10, 32, 10),
(10, 22, 11),
(10, 22, 12),
(10, 22, 13),
(10, 27, 14),
(10, 27, 15),
(10, 17, 16),
(10, 12, 17),
(10, 30, 18),
(10, 15, 19),
(10, 10, 20),
(10, 26, 27),
(10, 21, 31),
(11, 30, 3),
(11, 25, 4),
(11, 30, 5),
(11, 24, 6),
(11, 16, 7),
(11, 30, 8),
(11, 31, 9),
(11, 32, 10),
(11, 22, 11),
(11, 22, 12),
(11, 22, 13),
(11, 27, 14),
(11, 27, 15),
(11, 17, 16),
(11, 12, 17),
(11, 30, 18),
(11, 15, 19),
(11, 10, 20),
(11, 26, 27),
(11, 21, 31),
(12, 30, 3),
(12, 25, 4),
(12, 30, 5),
(12, 24, 6),
(12, 16, 7),
(12, 30, 8),
(12, 31, 9),
(12, 32, 10),
(12, 22, 11),
(12, 22, 12),
(12, 22, 13),
(12, 27, 14),
(12, 27, 15),
(12, 17, 16),
(12, 12, 17),
(12, 30, 18),
(12, 15, 19),
(12, 10, 20),
(12, 26, 27),
(12, 21, 31);

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `type`
--

INSERT INTO `type` (`id`, `libelle`) VALUES
(1, 'Sport'),
(2, 'Culture'),
(3, 'plage'),
(4, 'Vie Nocturne'),
(5, 'famille');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `email`, `password`) VALUES
(1, 'georges.homere@gmail.com', 'password');

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

CREATE TABLE `ville` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `image` varchar(2000) NOT NULL,
  `idContinent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `ville`
--

INSERT INTO `ville` (`id`, `nom`, `image`, `idContinent`) VALUES
(3, ' Douala', 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a7/Ars%26Urbis_International_Workshop_-_Emiliano_Gandolfi_36.JPG/1024px-Ars%26Urbis_International_Workshop_-_Emiliano_Gandolfi_36.JPG', 1),
(4, 'Budapest', 'https://media.routard.com/image/99/4/budapest-parlement.1478994.c1000x300.jpg', 1),
(5, 'Bucarest', 'https://cdn.civitatis.com/rumania/bucarest/tour-privado-bucarest.jpg', 1),
(6, 'Rome', 'https://img-4.linternaute.com/vFuWtupar4DqD3IA6uxnzFi57Sk=/620x465/smart/bc7a220bddc14dfab75f9c1e478dcb27/ccmcms-linternaute/10782693.jpg', 1),
(7, 'Madrid', 'https://www.parisvatry.com/wp-content/uploads/2018/12/madrid-light.jpeg', 1),
(8, 'Alger', 'https://www.voyageursdumonde.fr/vdm/imgProduits/DZA/531003.ori.jpg', 3),
(9, 'Dakar', 'https://upload.wikimedia.org/wikipedia/commons/e/ee/Dakar_-_Panorama_urbain.jpg', 3),
(10, 'Bamako', 'http://scd.rfi.fr/sites/filesrfi/aefimagesnew/imagecache/rfi_16x9_1024_578/sites/images.rfi.fr/files/aefimagesnew/aef_image/000_1fe7g1_0.jpg', 3),
(11, 'Pékin', 'https://static.euronews.com/articles/stories/03/19/07/60/1280x720_cmsv2_78be5b61-8661-5e4c-8b60-74ad77d7a6f9-3190760.jpg', 2),
(12, 'Tokyo', 'https://www.japan-guide.com/thumb/destination_tokyo.jpg', 2),
(13, 'Moscou', 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d3/%D0%92%D0%B8%D0%B4_%D0%BD%D0%B0_%D0%98%D1%81%D1%82%D0%BE%D1%80%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B8%D0%B9_%D0%BC%D1%83%D0%B7%D0%B5%D0%B9_%D0%B2_%D1%81%D1%82%D0%BE%D1%80%D0%BE%D0%BD%D1%83_%D0%9A%D1%80%D0%B0%D1%81%D0%BD%D0%BE%D0%B9_%D0%BF%D0%BB%D0%BE%D1%89%D0%B0%D0%B4%D0%B8.jpg/330px-%D0%92%D0%B8%D0%B4_%D0%BD%D0%B0_%D0%98%D1%81%D1%82%D0%BE%D1%80%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B8%D0%B9_%D0%BC%D1%83%D0%B7%D0%B5%D0%B9_%D0%B2_%D1%81%D1%82%D0%BE%D1%80%D0%BE%D0%BD%D1%83_%D0%9A%D1%80%D0%B0%D1%81%D0%BD%D0%BE%D0%B9_%D0%BF%D0%BB%D0%BE%D1%89%D0%B0%D0%B4%D0%B8.jpg', 2),
(14, 'Shangai', 'https://images.ladepeche.fr/api/v1/images/view/5c3c780a3e4546285b1ac412/large/image.jpg', 2),
(15, 'Mexico', 'https://www.nationalgeographic.com/content/dam/travel/Guide-Pages/north-america/mexico-city-travel.adapt.1900.1.jpg', 4),
(16, 'New York', 'https://media-cdn.tripadvisor.com/media/attractions-splice-spp-540x360/07/25/13/74.jpg', 4),
(17, 'Montréal', 'https://www.authentikcanada.com/images/section/images_list/1-centre-ville-montreal_5526.jpg', 4),
(18, 'Rio', 'https://www.costacroisieres.fr/content/dam/costa/inventory-assets/ports/RIO/rio-rio-de-janeiro-port-1.jpg.image.750.563.low.jpg', 4),
(19, 'Sydney', 'https://www.nationalgeographic.com/content/dam/travel/Guide-Pages/australia-oceania/sydney-travel.adapt.1900.1.jpg', 5),
(20, 'Melbourne', 'https://www.australia-australie.com/wp-content/uploads/2017/01/melbourne-05.jpg', 5),
(27, 'Lyon ', 'https://www.davril.fr/c/750/p/files/2017-home-visuel-5raisons-lyon-1831.jpeg', 1),
(31, 'Bruxelles', 'https://img-4.linternaute.com/5hJnDBNm9D8sD7lzRZPW8DIqWqg=/660x366/smart/9eba3a54b03e43d8bbf0da4dc1fa65e4/ccmcms-linternaute/11028343.jpg', 1),
(32, 'Naples', 'https://media.routard.com/image/71/4/naples.1486714.c1000x300.jpg', 1),
(33, 'Toronto', 'https://www.toronto.ca/wp-content/uploads/2017/07/8e31-explore-visitor-banner.jpg', 4);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `avoir`
--
ALTER TABLE `avoir`
  ADD PRIMARY KEY (`idVille`,`idType`),
  ADD KEY `avoir_type_1` (`idType`);

--
-- Index pour la table `mois`
--
ALTER TABLE `mois`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `periode`
--
ALTER TABLE `periode`
  ADD PRIMARY KEY (`mois`,`idVille`),
  ADD KEY `idVille` (`idVille`);

--
-- Index pour la table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ville`
--
ALTER TABLE `ville`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `ville`
--
ALTER TABLE `ville`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `avoir`
--
ALTER TABLE `avoir`
  ADD CONSTRAINT `avoir_type_1` FOREIGN KEY (`idType`) REFERENCES `type` (`id`),
  ADD CONSTRAINT `avoir_ville_1` FOREIGN KEY (`idVille`) REFERENCES `ville` (`id`);

--
-- Contraintes pour la table `periode`
--
ALTER TABLE `periode`
  ADD CONSTRAINT `periode_ibfk_1` FOREIGN KEY (`idVille`) REFERENCES `ville` (`id`),
  ADD CONSTRAINT `periode_mois_1` FOREIGN KEY (`mois`) REFERENCES `mois` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
