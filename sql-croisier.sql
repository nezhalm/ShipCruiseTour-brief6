-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 17 jan. 2023 à 18:32
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
-- Base de données : `pharmacie`
--

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id_produit` int(11) NOT NULL,
  `id_categorie` int(11) DEFAULT NULL,
  `libelle_produit` varchar(50) DEFAULT NULL,
  `quantite_produit` int(11) DEFAULT NULL,
  `price_produit` float DEFAULT NULL,
  `img_produit` varchar(100) DEFAULT NULL,
  `date_ajout` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_produit`, `id_categorie`, `libelle_produit`, `quantite_produit`, `price_produit`, `img_produit`, `date_ajout`) VALUES
(159, NULL, 'creme solaire', 43, 23, NULL, '2023-01-17'),
(162, NULL, 'creme sola', 43, 23, NULL, '2023-01-17');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `is_admin`) VALUES
(2, 'nezha', 'lemnissir', 'n@gmail.com', '1234', 1),
(3, 'aziz', 'ss', 'aziz@n.com', '$2y$10$m2zCQ', 1),
(4, 'kamal', 'll', 'ayoub@n.com', '$2y$10$/5V.Z', 0),
(5, 'aa', 'aa', 'aa@gmail.com', '$2y$10$uoeZ8SVWbTiDTuS14IlIoO8J6F1p31rb3xV79.og9JTn2hUiEdEHG', 0),
(6, 'hh', 'hh', 'hh@gmail.com', '$2y$10$FDp4fQR8Tt/Yu3u9dIwgmOMYr/ERO/VxavDPPUEY5Di87smwbSqu2', 0),
(7, 'ss', 'dd', 'ss@gmail.com', '$2y$10$qYTYXdlIQOyUI/QtGumbq.w/cHnQB70xkQRt1.IUWUN7U6PxLeZUy', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id_produit`),
  ADD KEY `FK_CATEGORIE` (`id_categorie`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id_produit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
