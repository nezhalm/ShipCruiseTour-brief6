-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 28 déc. 2022 à 17:17
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `croi`
--

-- --------------------------------------------------------

--
-- Structure de la table `chambre`
--

CREATE TABLE `chambre` (
  `id` int(11) NOT NULL,
  `num_chambre` int(11) NOT NULL,
  `id_typechambre` int(11) NOT NULL,
  `id_navire` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `chambre`
--

INSERT INTO `chambre` (`id`, `num_chambre`, `id_typechambre`, `id_navire`) VALUES
(2, 2, 2, 0);

-- --------------------------------------------------------

--
-- Structure de la table `croisier`
--

CREATE TABLE `croisier` (
  `id` int(11) NOT NULL,
  `ship_id` int(100) NOT NULL,
  `prix` float NOT NULL,
  `image` varchar(100) NOT NULL,
  `nombre_nuit` int(11) NOT NULL,
  `date_depart` date NOT NULL,
  `id_port_depart` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `croisier`
--

INSERT INTO `croisier` (`id`, `ship_id`, `prix`, `image`, `nombre_nuit`, `date_depart`, `id_port_depart`) VALUES
(11, 0, 323, '8.jpg', 22, '2022-12-24', 1),
(12, 0, 454, '4.jpg', 33, '2022-12-09', 1),
(13, 1, 677, '6.jpg', 3, '2022-12-24', 1),
(14, 1, 677, '7.jpg', 4, '2022-12-30', 1);

-- --------------------------------------------------------

--
-- Structure de la table `navire`
--

CREATE TABLE `navire` (
  `id` int(11) NOT NULL,
  `nom` varchar(40) NOT NULL,
  `nombre_place` int(11) NOT NULL,
  `nombre_chambre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `navire`
--

INSERT INTO `navire` (`id`, `nom`, `nombre_place`, `nombre_chambre`) VALUES
(0, 'navire2', 300, 200),
(1, 'dsd', 22, 3),
(2, 'sdd', 32, 33);

-- --------------------------------------------------------

--
-- Structure de la table `port`
--

CREATE TABLE `port` (
  `id` int(11) NOT NULL,
  `nom` varchar(40) NOT NULL,
  `pays` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `port`
--

INSERT INTO `port` (`id`, `nom`, `pays`) VALUES
(1, 'port1', 'paris'),
(4, 'port2', 'canada');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `reservation_date` date NOT NULL,
  `prix_reservation` float NOT NULL,
  `user_id` int(11) NOT NULL,
  `id_chambre` int(11) NOT NULL,
  `id_croisier` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `type_chambre`
--

CREATE TABLE `type_chambre` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `price` float NOT NULL,
  `capacity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `type_chambre`
--

INSERT INTO `type_chambre` (`id`, `name`, `price`, `capacity`) VALUES
(1, 'solo', 200, 1),
(2, '2_people', 300, 2),
(3, 'family', 400, 6);

-- --------------------------------------------------------

--
-- Structure de la table `useer`
--

CREATE TABLE `useer` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `is_admin` int(11) DEFAULT 0,
  `last_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `useer`
--

INSERT INTO `useer` (`id`, `first_name`, `email`, `password`, `is_admin`, `last_name`) VALUES
(1, 'nezha', 'nezha@gmail.com', '123456', 1, 'll'),
(2, 'jamal', 'nea@gmail.com', '222222', 0, 'll'),
(3, 'HHHH', 'nezha@gmail.com', '$2y$12$aHq7/j7xod4NVaL6mzKPw.w0M2lP6XmqFqCeiylxjCmXUm2Y8e/uK', 0, 'll'),
(4, 'klk', 'jknka@gmail.com', '$2y$12$lSlQ4r2k/sli0hEkGlN3POuqZG1HR8I24LaHglBnm5rAmlGUZyRpy', 0, 'll'),
(5, 'iouhjk', 'jknka@gmail.com', '$2y$12$EaxwqG5YOFwKDf8MoYuDte9Ma1oRzCCXavmcFW/149GxktNx/uXVm', 0, 'll'),
(6, 'iouhjk', 'jknka@gmail.com', '$2y$12$DEzQjOGAoWqhoQTU/SIfWuPG3stClJxs4wJG44KsY/NANq6mIOyp6', 0, 'll'),
(7, 'iouhjkjhbhjk', 'jknka@gmail.com', '$2y$12$GF6FEpVxMwRXU1rj7J5TruhG3G1Y3UtvST3FskvzOne6BalvAPaqO', 0, 'll'),
(8, '\'zrer', 'nezha@gmail', '$2y$12$H3f816Ojr0kGL9iJsG.U.OJWpjEKY4qO3WMu08p04vMoysp5kH0uq', 0, 'll'),
(9, 'hgj', 'nezha@gmail', '$2y$12$SmTtmUVcY2dEURsHakNrE.9PCZFL/H069L9tlG/OlFXsYbYHsoX0C', 0, 'll'),
(10, 'manette-1', 'nezha@gmail.com', '$2y$12$dyjmNdVwWJQaGXHEkn5q2ukT3b5T495hL5y24JQR//QMy3HXEZI5e', 0, 'll'),
(11, '', 'nezha@gmail', '$2y$12$SFsiEDjn1B90vpS52bVyLehcScFwvzDqR4KDkehV3HVCu/0ZJua2O', 0, 'll'),
(12, '', 'nezha@gmail', '$2y$12$QZnCw3r3X1HXHU.H6Z6yjeKewdq6VzDiGKEKd82.VVM4.aT1ahoGi', 0, 'll'),
(13, 'jhbhj', 'hhghgh@gmail.com', '$2y$12$S0IhH9owsyRdxRSJ1vqZt.tfTEP8XQA/H3UlqJsv2aPOEbHuEDO.a', 0, 'll'),
(14, NULL, 'wer@2345', '$2y$10$z71UO7tpUdU5UCafS2q7LecWbXXegqvwHjwOcusZYg/wD1oUR29Bi', 0, 'erter'),
(15, NULL, 'ayoub@gmail.com', '$2y$10$x1hj1/L1cM8ju2Ly/H4IHexJvnrtbuTiA/03sTVLDFleRi5FafhpC', 0, 'elgountari'),
(16, 'Ayoub', 'Ayoub@n.com', '$2y$10$SaNzOLGdKF7tE3ONRbnjdOj4Q4LCcTxKDy/nE8q15O8BWhudwvZpG', 1, 'Elgountari'),
(17, 'a', 'a@g.com', '$2y$10$U1/pOVIedwR.KDeG14/IbeDBrAZrEkVARqwQMmwuaSYZnpk7lbw7W', 0, 'a2'),
(18, 'a', 'a@gmail.com', '$2y$10$AYF0V154zhZpwhKCc4gxc.OZOOamTYd0Lm8Y0.JQ6Os7q98FC5f.e', 0, 'a');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `prenom` varchar(40) NOT NULL,
  `nom` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `id_admin` int(40) DEFAULT 0,
  `id_croisier` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `chambre`
--
ALTER TABLE `chambre`
  ADD PRIMARY KEY (`id`),
  ADD KEY `room_ibfk_1` (`id_typechambre`),
  ADD KEY `ship_id` (`id_navire`);

--
-- Index pour la table `croisier`
--
ALTER TABLE `croisier`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ship_idd` (`ship_id`),
  ADD KEY `id_port` (`id_port_depart`);

--
-- Index pour la table `navire`
--
ALTER TABLE `navire`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `port`
--
ALTER TABLE `port`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reservation_ibfk_2` (`id_chambre`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `type_chambre`
--
ALTER TABLE `type_chambre`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `useer`
--
ALTER TABLE `useer`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cruise_id` (`id_croisier`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `chambre`
--
ALTER TABLE `chambre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `croisier`
--
ALTER TABLE `croisier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `navire`
--
ALTER TABLE `navire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `port`
--
ALTER TABLE `port`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `type_chambre`
--
ALTER TABLE `type_chambre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `useer`
--
ALTER TABLE `useer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `chambre`
--
ALTER TABLE `chambre`
  ADD CONSTRAINT `chambre_ibfk_1` FOREIGN KEY (`id_typechambre`) REFERENCES `type_chambre` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chambre_ibfk_2` FOREIGN KEY (`id_navire`) REFERENCES `navire` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `croisier`
--
ALTER TABLE `croisier`
  ADD CONSTRAINT `id_port` FOREIGN KEY (`id_port_depart`) REFERENCES `port` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `ship_idd` FOREIGN KEY (`ship_id`) REFERENCES `navire` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`id_chambre`) REFERENCES `chambre` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservation_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `utilisateur` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
