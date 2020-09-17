-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 17 sep. 2020 à 22:36
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `wisdom`
--

-- --------------------------------------------------------

--
-- Structure de la table `adresse`
--

CREATE TABLE `adresse` (
  `id` int(100) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `tel` varchar(100) NOT NULL,
  `id_user` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `adresse`
--

INSERT INTO `adresse` (`id`, `adresse`, `tel`, `id_user`) VALUES
(1, '14 Avenue Zerktouni', '068383838', 7);

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id` int(100) NOT NULL,
  `id_user` int(100) NOT NULL,
  `total` int(100) NOT NULL,
  `date` date NOT NULL,
  `adresse` varchar(200) NOT NULL,
  `statut` varchar(100) NOT NULL DEFAULT 'En cours de préparation '
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id`, `id_user`, `total`, `date`, `adresse`, `statut`) VALUES
(24, 7, 100, '2020-09-10', '14 Avenue Zerktouni, Safi maroc', 'En cours de preparation'),
(25, 7, 100, '2020-09-10', '14 Avenue Zerktouni, Safi maroc', 'En cours de preparation'),
(26, 7, 100, '2020-09-10', '14 Avenue Zerktouni, Safi maroc', 'En cours de préparation '),
(27, 7, 150, '2020-09-10', '14 Avenue Zerktouni, Safi maroc', 'En cours de préparation '),
(28, 7, 150, '2020-09-10', '14 Avenue Zerktouni, Safi maroc', 'En cours de préparation '),
(29, 7, 100, '2020-09-12', '14 Avenue Zerktouni, Safi maroc', 'En cours de préparation '),
(30, 7, 100, '2020-09-13', '14 Avenue Zerktouni, Safi maroc', 'En cours de préparation '),
(31, 7, 100, '2020-09-13', '14 Avenue Zerktouni, Safi maroc', 'En cours de préparation '),
(32, 7, 100, '2020-09-15', '14 Avenue Zerktouni, Safi maroc', 'En cours de preparation'),
(33, 7, 100, '2020-09-17', '14 Avenue Zerktouni, Safi maroc', 'En cours de préparation '),
(34, 7, 100, '2020-09-17', '14 Avenue Zerktouni, Safi maroc', 'En cours de préparation ');

-- --------------------------------------------------------

--
-- Structure de la table `livre`
--

CREATE TABLE `livre` (
  `id` int(100) NOT NULL,
  `titre` varchar(200) NOT NULL,
  `auteur` varchar(300) NOT NULL,
  `img` varchar(200) NOT NULL,
  `categorie` varchar(200) NOT NULL,
  `langue` varchar(200) NOT NULL,
  `prix` int(11) NOT NULL DEFAULT 50,
  `stock` int(11) NOT NULL DEFAULT 100
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `livre`
--

INSERT INTO `livre` (`id`, `titre`, `auteur`, `img`, `categorie`, `langue`, `prix`, `stock`) VALUES
(1, 'العصر العثماني', ' مفيد الزيدي', 'images/livre1.png', 'Histoire géographie', 'arabe', 50, 100),
(2, 'La pyramide inmortal', 'JAVIER SIERRA', 'images/es_hg1.png', 'Histoire géographie', 'espagnol', 50, 100),
(3, 'رجال من التاريخ', 'علي الطنطاوي', 'images/ar_hg1.png', 'Histoire géographie', 'arabe', 50, 100),
(4, 'Rich dad poor dad', 'Robert T.Kiyosaki', 'images/ang_dp3.png', 'Développement personnel', 'anglais', 50, 100),
(6, 'La puissance de votre subconscient', 'Dr. Joseph Murphy', 'images/fr_dp4.png', 'Développement personnel', 'fr', 50, 100),
(8, 'La magie de l\'action', 'Julien Castel', 'images/fr_dp2.png', 'Développement personnel', 'francais', 50, 100),
(9, 'Le pouvoir du moment présent', 'Echkart Tolle', 'images/fr_dp1.png', 'Développement personnel', 'francais', 50, 100),
(11, 'بناء الكون و مصير الانسان', 'هشام طالب', 'images/ar_st2.png', 'Sciences et technologies', 'arabe', 50, 100),
(12, 'Arteinclusivo', 'Giurlani & Goropse', 'images/es_art1.png', 'Art et culture', 'espagnol', 50, 100),
(13, 'The alchimist', 'Paulo Coelho', 'images/ang_ro1.png', 'Romans et fiction', 'anglais', 50, 100),
(14, 'لماذا ننام', 'ماتيو ووكر', 'images/ar_st1.png', 'Sciences et technologies', 'arabe', 50, 100),
(15, 'El vencedor esta solo', 'Paulo Coelho', 'images/es_ro3.png', 'Romans et fiction', 'espagnol', 50, 100),
(16, 'Hippie', 'Paulo Coelho ', 'images/es_ro2.png', 'Romans et fiction', 'anglais', 50, 100),
(17, 'The Secret', 'Rhonda byrne', 'images/ang_dp1.png', 'Développement personnel', 'anglais', 50, 100);

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE `panier` (
  `id` int(11) NOT NULL,
  `id_user` int(100) NOT NULL,
  `id_produit` int(100) NOT NULL,
  `qte` int(100) NOT NULL,
  `prix` int(100) NOT NULL,
  `total` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `statut` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `statut`) VALUES
(7, 'ghalia', 'ghalia', 'ghalia@gmail.com', '202cb962ac59075b964b07152d234b70', 'user'),
(10, 'Admin', 'Admin', 'elghaliakhzami@gmail.com', '202cb962ac59075b964b07152d234b70', 'admin'),
(21, 'test', 'test', 'test@gmail.com', '202cb962ac59075b964b07152d234b70', 'user');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `adresse`
--
ALTER TABLE `adresse`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `livre`
--
ALTER TABLE `livre`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `panier`
--
ALTER TABLE `panier`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `adresse`
--
ALTER TABLE `adresse`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT pour la table `livre`
--
ALTER TABLE `livre`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `panier`
--
ALTER TABLE `panier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
