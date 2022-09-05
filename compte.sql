-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 29 mai 2022 à 18:59
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `compte`
--

-- --------------------------------------------------------

--
-- Structure de la table `chambre`
--

CREATE TABLE `chambre` (
  `id_chambre` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prix` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `chambre`
--

INSERT INTO `chambre` (`id_chambre`, `nom`, `prix`) VALUES
(1, 'chambre superieure', 250),
(2, 'chambre Deluxe', 350),
(3, 'chambre de Signature', 450),
(4, 'chambre des couples', 550);

-- --------------------------------------------------------

--
-- Structure de la table `employeurs`
--

CREATE TABLE `employeurs` (
  `id` int(11) NOT NULL,
  `Nom` varchar(40) NOT NULL,
  `date` varchar(40) NOT NULL,
  `salaire` double NOT NULL,
  `Contact` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `employeurs`
--

INSERT INTO `employeurs` (`id`, `Nom`, `date`, `salaire`, `Contact`) VALUES
(14, 'hassan', '2022-05-04', 3000, '0689908999'),
(15, 'Anass', '2022-05-04', 5000, '0789657890'),
(16, 'Assia', '2022-05-02', 3500, '0654678909'),
(17, 'Ayman', '2022-05-03', 5678, '0789675678');

-- --------------------------------------------------------

--
-- Structure de la table `facture`
--

CREATE TABLE `facture` (
  `id` int(5) NOT NULL,
  `id_user` int(3) DEFAULT NULL,
  `montant` float NOT NULL,
  `etat` varchar(30) NOT NULL DEFAULT 'non payee',
  `date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `facture`
--

INSERT INTO `facture` (`id`, `id_user`, `montant`, `etat`, `date`) VALUES
(15, 2, 7, 'non payee', '29-05-2022');

-- --------------------------------------------------------

--
-- Structure de la table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prix` double NOT NULL,
  `categorie` enum('boissons','dejeuner','dinner') DEFAULT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `menu`
--

INSERT INTO `menu` (`id`, `nom`, `prix`, `categorie`, `image`) VALUES
(1, 'jus de raisin', 7, 'boissons', '..\\images\\img-01.jpg'),
(2, 'jus de grenade', 9, 'boissons', '..\\images\\img-02.jpg'),
(3, 'jus de citron', 10, 'boissons', '..\\images\\img-03.jpg'),
(4, 'burger', 15, 'dejeuner', '..\\images\\img-04.jpg'),
(5, 'viande', 18, 'dejeuner', '..\\images\\img-05.jpg'),
(6, 'poisson', 20, 'dejeuner', '..\\images\\img-06.jpg'),
(7, 'cake', 10, 'dinner', '..\\images\\img-07.jpg'),
(8, 'sushi', 22, 'dinner', '..\\images\\img-08.jpg'),
(9, 'tajin', 25, 'dinner', '..\\images\\img-09.jpg'),
(10, 'soupe', 10, 'dinner', '..\\images\\img-010.jpg'),
(11, 'Tacos', 35, 'dejeuner', '..\\images\\img-011.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `reduction`
--

CREATE TABLE `reduction` (
  `id` int(11) NOT NULL,
  `idCambre` int(11) DEFAULT NULL,
  `nom` varchar(50) NOT NULL,
  `prix` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(5) NOT NULL,
  `id_user` int(3) DEFAULT NULL,
  `date_res` varchar(100) NOT NULL,
  `produit_chambre` int(11) NOT NULL,
  `produit_menu` int(11) NOT NULL,
  `nb_personnes` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id`, `id_user`, `date_res`, `produit_chambre`, `produit_menu`, `nb_personnes`) VALUES
(94, 2, '3 May, 2022', 1, 0, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'JAMAL', 'jamal@gmail.com', 'a952e256ed9382b737669eeebb311b91'),
(2, 'JAMAL', 'KAMAIL@gmail.com', '202cb962ac59075b964b07152d234b70'),
(3, 'JAMAL', 'ZIDOUNI@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `chambre`
--
ALTER TABLE `chambre`
  ADD PRIMARY KEY (`id_chambre`);

--
-- Index pour la table `employeurs`
--
ALTER TABLE `employeurs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `facture`
--
ALTER TABLE `facture`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_for_user` (`id_user`);

--
-- Index pour la table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reduction`
--
ALTER TABLE `reduction`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_chambre` (`idCambre`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `add_id` (`id_user`),
  ADD KEY `prod_m` (`produit_menu`),
  ADD KEY `prod_c` (`produit_chambre`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `chambre`
--
ALTER TABLE `chambre`
  MODIFY `id_chambre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `employeurs`
--
ALTER TABLE `employeurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `facture`
--
ALTER TABLE `facture`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `reduction`
--
ALTER TABLE `reduction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `facture`
--
ALTER TABLE `facture`
  ADD CONSTRAINT `id_for_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `reduction`
--
ALTER TABLE `reduction`
  ADD CONSTRAINT `id_chambre` FOREIGN KEY (`idCambre`) REFERENCES `chambre` (`id_chambre`);

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `add_id` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
