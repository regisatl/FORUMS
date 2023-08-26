-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : sam. 26 août 2023 à 23:18
-- Version du serveur : 8.0.30
-- Version de PHP : 8.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `forum`
--

-- --------------------------------------------------------

--
-- Structure de la table `questions`
--

CREATE TABLE `questions` (
  `id` int UNSIGNED NOT NULL,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `contenu` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `idAuteur` int NOT NULL,
  `emailAuteur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datePublication` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `questions`
--

INSERT INTO `questions` (`id`, `titre`, `description`, `contenu`, `idAuteur`, `emailAuteur`, `datePublication`) VALUES
(1, 'Le monde', 'Vous faites partie de notre monde.					    ', 'Une histoire passionnante sur ce qui nous arrivent.					   ', 6, 'admin@gmail.com', '26/08/2023'),
(2, 'La famille', 'J&#039;ai une famille de dingue.', 'Que sommes nous sans une famille?', 6, 'admin@gmail.com', '26/08/2023');

-- --------------------------------------------------------

--
-- Structure de la table `reponses`
--

CREATE TABLE `reponses` (
  `id` int UNSIGNED NOT NULL,
  `idAuteur` int NOT NULL,
  `emailAuteur` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `idQuestion` int NOT NULL,
  `reponse` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `reponses`
--

INSERT INTO `reponses` (`id`, `idAuteur`, `emailAuteur`, `idQuestion`, `reponse`) VALUES
(1, 6, 'admin@gmail.com', 1, 'Nous sommes ravie de faire partie de votre monde.'),
(2, 6, 'admin@gmail.com', 2, 'Nous n&#039;avons pas tous une famille.<br />\r\n');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mdp` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `email`, `nom`, `prenom`, `numero`, `mdp`) VALUES
(2, 'regisattolou21@outlook.fr', 'ATTOLOU', 'Régis', '90919096', '$2y$10$e0ay2naPa7f.R/5eQNq76..sxoZYXYqZkuaSZTEfiii4awzhPiz0a'),
(3, 'regisattolou19@gmail.com', 'ATTOLOU', 'Férenc', '68988452', '$2y$10$v9Kqg/g1yLG4xq33g6nCH.0Rgiz6yJ.WoOF0o9Ffm6/Z7hbcJ5/F2'),
(4, 'isaacgbedji@gmail.com', 'GBEDJI', 'Isaac ', '66971658', '$2y$10$6zwS9Jk3re8TTV2ETw3amu0XrOX7Lw9i7DHPv3IvYezKqV7V2jG0a'),
(5, 'atlbank000@gmail.com', 'ATL', 'Bank', '90919296', '$2y$10$5KgbS6Byui9rrrLj9OpREeA.yMZYylYOoL.RzbuOIpu9uAtdVPfHG'),
(6, 'admin@gmail.com', 'ADMIN', 'Admin', '12345678', '$2y$10$HTqF47YSEqtbtj4GbPjF7uzTeyre0j59UcOKC.KRZdVxp1vsNvA6C');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`idAuteur`);

--
-- Index pour la table `reponses`
--
ALTER TABLE `reponses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usersId` (`idAuteur`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `reponses`
--
ALTER TABLE `reponses`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
