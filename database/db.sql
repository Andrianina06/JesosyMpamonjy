-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mar. 30 juil. 2024 à 14:20
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `jmp`
--

-- --------------------------------------------------------

--
-- Structure de la table `eglises`
--

CREATE TABLE `eglises` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `personne_id` bigint(20) UNSIGNED NOT NULL,
  `lieu_id` int(11) NOT NULL,
  `capacite` int(10) UNSIGNED NOT NULL,
  `dimension` double NOT NULL,
  `longitude` decimal(8,2) NOT NULL,
  `latitude` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `eglises`
--

INSERT INTO `eglises` (`id`, `personne_id`, `lieu_id`, `capacite`, `dimension`, `longitude`, `latitude`, `created_at`, `updated_at`, `image`) VALUES
(1, 5, 1, 50, 30, 10.00, 10.00, '2024-07-29 10:53:48', '2024-07-29 10:53:48', NULL),
(2, 2, 2, 2000, 200, 10.00, 12.00, '2024-07-01 11:54:23', '2024-07-01 11:55:07', NULL),
(3, 2, 3, 2000, 200, 10.00, 12.00, '2024-07-02 07:50:18', '2024-07-02 07:50:18', NULL),
(4, 2, 4, 2000, 200, 10.00, 12.00, '2024-07-05 11:15:02', '2024-07-18 10:54:16', '/opt/lampp/temp/phprBt8ji'),
(5, 5, 5, 2000, 200, 10.00, 12.00, '2024-07-16 08:19:56', '2024-07-26 09:03:18', 'images/eglise/PUwAVRGY1EuHxBXIeSlPE7UoMNT5punUg8JCgvH6.jpg'),
(6, 5, 6, 2000, 200, 12.00, 13.00, '2024-07-16 08:20:15', '2024-07-16 08:20:15', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `eglises_personne`
--

CREATE TABLE `eglises_personne` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `affected_at` date NOT NULL,
  `personne_id` bigint(20) UNSIGNED NOT NULL,
  `eglise_depart_id` bigint(20) UNSIGNED NOT NULL,
  `eglise_arrivee_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `eglises_personne`
--

INSERT INTO `eglises_personne` (`id`, `affected_at`, `personne_id`, `eglise_depart_id`, `eglise_arrivee_id`, `created_at`, `updated_at`) VALUES
(3, '2024-07-26', 2, 2, 3, '2024-07-02 07:50:43', '2024-07-02 07:50:43'),
(4, '2024-07-21', 5, 2, 4, '2024-07-16 09:52:41', '2024-07-16 09:52:41'),
(5, '2024-07-21', 2, 2, 4, '2024-07-16 09:53:52', '2024-07-16 09:53:52');

-- --------------------------------------------------------

--
-- Structure de la table `equipe`
--

CREATE TABLE `equipe` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `equipe_fonction_id` bigint(20) UNSIGNED NOT NULL,
  `lieu_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `equipe`
--

INSERT INTO `equipe` (`id`, `equipe_fonction_id`, `lieu_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '2024-07-01 08:54:04', '2024-07-01 08:54:04'),
(2, 2, 4, '2024-07-01 09:05:37', '2024-07-01 09:05:37'),
(3, 3, 3, '2024-07-01 09:08:13', '2024-07-01 09:08:13'),
(4, 1, 1, '2024-07-01 09:08:19', '2024-07-01 09:08:19');

-- --------------------------------------------------------

--
-- Structure de la table `equipe_fonctions`
--

CREATE TABLE `equipe_fonctions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `equipe_fonctions`
--

INSERT INTO `equipe_fonctions` (`id`, `libelle`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Musicien', 1, NULL, NULL),
(2, 'Cuisinier', 1, NULL, NULL),
(3, 'Vidéaste', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `equipe_membres`
--

CREATE TABLE `equipe_membres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `personne_id` int(10) UNSIGNED NOT NULL,
  `equipe_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `etats`
--

CREATE TABLE `etats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `etat` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `etats`
--

INSERT INTO `etats` (`id`, `etat`, `created_at`, `updated_at`) VALUES
(1, 'Très bon(ne)', '2024-07-02 12:28:15', '2024-07-02 12:28:15'),
(2, 'Bon(ne)', NULL, NULL),
(3, 'Moyen(ne)', '2024-07-02 12:28:37', '2024-07-02 12:28:37'),
(4, 'Mauvais(e)', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `evenements`
--

CREATE TABLE `evenements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `exemple_evenement_id` int(11) NOT NULL,
  `lieu_id` int(11) NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `programme` longtext NOT NULL,
  `equipe_musicien_id` int(11) NOT NULL,
  `equipe_cuisine_id` int(11) NOT NULL,
  `equipe_videaste_id` int(11) NOT NULL,
  `personne_resp_id` int(11) NOT NULL,
  `approvisionnement` longtext NOT NULL,
  `duree_du_trajet` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `passe` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `evenements`
--

INSERT INTO `evenements` (`id`, `exemple_evenement_id`, `lieu_id`, `date_debut`, `date_fin`, `programme`, `equipe_musicien_id`, `equipe_cuisine_id`, `equipe_videaste_id`, `personne_resp_id`, `approvisionnement`, `duree_du_trajet`, `created_at`, `updated_at`, `passe`) VALUES
(8, 2, 5, '2024-07-12', '2024-07-12', 'blablablablablablablabla', 1, 1, 3, 5, 'blablablablablablablabla', 12, '2024-07-15 08:57:07', '2024-07-17 08:33:52', 0),
(9, 2, 6, '2024-08-09', '2024-08-09', 'blablablablbalbalbalbal', 1, 4, 3, 5, 'blablablablabla', 15, '2024-07-16 08:21:05', '2024-07-17 11:04:50', 0),
(10, 3, 3, '2024-07-21', '2024-07-21', 'blablablablablablablablabla', 1, 4, 3, 5, 'blablablablablablabal', 2, '2024-07-17 08:14:29', '2024-07-17 08:33:48', 1);

-- --------------------------------------------------------

--
-- Structure de la table `evenement_user`
--

CREATE TABLE `evenement_user` (
  `evenement_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `evenement_user`
--

INSERT INTO `evenement_user` (`evenement_id`, `user_id`, `created_at`, `updated_at`) VALUES
(8, 1, '2024-07-30 09:19:09', '2024-07-30 09:19:09');

-- --------------------------------------------------------

--
-- Structure de la table `evenement_vehicule`
--

CREATE TABLE `evenement_vehicule` (
  `evenement_id` bigint(20) UNSIGNED NOT NULL,
  `vehicule_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `evenement_vehicule`
--

INSERT INTO `evenement_vehicule` (`evenement_id`, `vehicule_id`, `created_at`, `updated_at`) VALUES
(8, 4, NULL, NULL),
(9, 4, NULL, NULL),
(9, 5, NULL, NULL),
(10, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `example`
--

CREATE TABLE `example` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `exemple` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `example`
--

INSERT INTO `example` (`id`, `exemple`, `created_at`, `updated_at`) VALUES
(1, 'Baptème', '2024-06-25 09:23:20', '2024-06-25 09:23:20'),
(2, 'Evangelisation', '2024-06-25 09:23:20', '2024-06-25 09:23:20'),
(3, 'Inoguration', '2024-06-25 09:25:52', '2024-06-25 09:25:52');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(100) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `fonctions`
--

CREATE TABLE `fonctions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `fonctions`
--

INSERT INTO `fonctions` (`id`, `libelle`, `created_at`, `updated_at`) VALUES
(1, 'Pasteur', '2024-06-27 19:30:12', '2024-06-27 19:30:12'),
(2, 'Evangeliste', '2024-06-27 19:30:29', '2024-06-27 19:30:29'),
(3, 'Ecole biblique', '2024-06-27 19:30:44', '2024-06-27 19:30:44'),
(4, 'Président des pasteurs', '2024-06-27 19:31:48', '2024-06-27 19:31:48'),
(5, 'Enseignants', '2024-06-27 19:32:32', '2024-06-27 19:32:32'),
(6, 'Président CA', '2024-06-27 19:32:59', '2024-06-27 19:32:59'),
(8, 'Membre CA', '2024-06-27 19:33:39', '2024-06-27 19:33:39'),
(9, 'Musicien', '2024-06-27 19:33:58', '2024-06-27 19:33:58'),
(10, 'Décorateur', '2024-06-27 19:34:17', '2024-06-27 19:34:17'),
(11, 'Cuisinier', '2024-06-27 19:34:34', '2024-06-27 19:34:34'),
(12, 'Menagier', '2024-06-27 19:34:54', '2024-06-27 19:34:54');

-- --------------------------------------------------------

--
-- Structure de la table `gestiontransport`
--

CREATE TABLE `gestiontransport` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `evenement_id` bigint(20) UNSIGNED NOT NULL,
  `vehicule_id` bigint(20) UNSIGNED NOT NULL,
  `frais` bigint(20) NOT NULL,
  `heure_depart` time NOT NULL,
  `date_depart` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `gestiontransport`
--

INSERT INTO `gestiontransport` (`id`, `evenement_id`, `vehicule_id`, `frais`, `heure_depart`, `date_depart`, `created_at`, `updated_at`) VALUES
(8, 10, 4, 5000, '14:14:00', '2024-07-21', '2024-07-17 08:14:51', '2024-07-17 08:14:51'),
(9, 9, 5, 10000, '17:05:00', '2024-07-19', '2024-07-17 11:05:15', '2024-07-17 11:05:15'),
(10, 9, 4, 10000, '17:05:00', '2024-07-14', '2024-07-17 11:05:28', '2024-07-17 11:05:28');

-- --------------------------------------------------------

--
-- Structure de la table `lieu`
--

CREATE TABLE `lieu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lieu` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `lieu`
--

INSERT INTO `lieu` (`id`, `lieu`, `created_at`, `updated_at`) VALUES
(1, 'Anosibe', NULL, NULL),
(2, 'Ambohidratrimo', NULL, NULL),
(3, 'Ivato', NULL, NULL),
(4, 'Soavimasoandro', NULL, NULL),
(5, 'Beakanga', '2024-07-10 12:37:35', '2024-07-10 12:37:35'),
(6, 'Fenoarivobe', '2024-07-10 12:37:35', '2024-07-10 12:37:35');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2024_06_19_190017_create_personnes_table', 2),
(5, '2024_06_20_073855_add_fonction_column', 3),
(6, '2007_08_07_220401_create_eglises_table', 4),
(8, '2007_08_07_205813_create_example_table', 5),
(19, '2007_08_08_014004_create_affectations_table', 6),
(21, '2014_10_12_100000_create_password_resets_table', 6),
(22, '2019_08_19_000000_create_failed_jobs_table', 6),
(23, '2024_06_20_130349_create_fonction_table', 6),
(24, '2024_06_20_130401_create_personne_table', 6),
(44, '2024_06_24_140118_add_lieu_personne', 7),
(45, '2024_06_27_135107_craete_equipes_fonction_table', 7),
(46, '2024_06_27_135223_create_equipes_table', 7),
(47, '2024_06_27_135544_create_equipe_membres_table', 7),
(48, '2024_06_27_140534_create_example_table', 8),
(49, '2024_06_27_140910_create_evenement_table', 8),
(50, '2024_06_29_182714_create_lieu_table', 8),
(51, '2024_06_29_183827_create_equipe_table', 8),
(52, '2024_06_30_234655_create_equipe_fontions_table', 9),
(53, '2024_07_01_113845_add_lieu_table', 10),
(54, '2024_07_01_120934_create_evenement_table', 10),
(55, '2024_07_02_110153_create_vehicule_table', 11),
(56, '2024_07_02_112829_create_evenement_vehicule', 11),
(57, '2024_07_02_122634_create_etats_table', 12),
(58, '2024_07_05_124744_add_image_column', 13),
(59, '2024_07_05_144154_add_image_eglise_column', 14),
(60, '2024_07_08_122130_add_passe_column', 15),
(61, '2024_07_09_124257_add_vehicule_id', 16),
(62, '2024_07_10_121627_create_evenement_vehicule', 16),
(63, '2024_07_10_191233_create_evenement_vehicule_table', 17),
(64, '2024_07_10_205621_create_gestiontransport_table', 17),
(65, '2024_07_16_121701_create_evenement_membre_table', 18),
(66, '2024_07_16_125753_add_matricule_column', 19),
(67, '2024_07_25_114436_add_firstname_column', 20),
(68, '2014_10_12_000000_create_users_table', 21),
(69, '2024_07_29_134840_create_evenement_user_table', 22);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(100) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personnes`
--

CREATE TABLE `personnes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `lieu_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `fonction_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `personnes`
--

INSERT INTO `personnes` (`id`, `nom`, `prenom`, `lieu_id`, `created_at`, `updated_at`, `fonction_id`, `image`) VALUES
(1, 'RANDRIAMANANTENA', 'Mandrato Zo Andrianina', 2, '2007-08-07 18:09:35', '2024-07-02 08:38:18', 8, NULL),
(2, 'RANDRIA', 'Koto', 1, '2007-08-07 18:52:32', '2007-08-07 18:52:32', 1, NULL),
(5, 'ANDRIANAIVOMALALA', 'Ravo Anthony', 1, '2024-07-05 10:40:48', '2024-07-05 10:40:48', 1, 'image/GSl39cBsATFLx07w5nWKpzcr1encibskVc8pBISw.png');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `eglise_id` bigint(20) UNSIGNED NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `firstname`, `email`, `eglise_id`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'RANDRIAMANANTENA', 'Andrianina', 'andrianinarandriamanantena@gmail.com', 2, NULL, '$2y$10$E12ZiX/qMV5tglg2G3fWse8AHds2X0fS3xe9ex3qV.xUXEkr4T.Rm', NULL, '2024-07-26 08:54:41', '2024-07-26 08:54:41'),
(8, 'Admin', 'Admin', 'admin@gmail.com', 1, NULL, '$2y$10$CP26w9fSjVCOqe04.TQxd.8Di3VhBFGVzeQxIn5l.DyzWXviEqnB6', NULL, '2024-07-29 10:05:57', '2024-07-29 10:05:57');

-- --------------------------------------------------------

--
-- Structure de la table `vehicules`
--

CREATE TABLE `vehicules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `marque` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `etat_id` int(11) NOT NULL,
  `contact` varchar(25) NOT NULL,
  `nombre_de_place` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `matricule` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `vehicules`
--

INSERT INTO `vehicules` (`id`, `marque`, `description`, `etat_id`, `contact`, `nombre_de_place`, `created_at`, `updated_at`, `matricule`) VALUES
(4, 'Hundai', 'blabalbalblabla', 1, '0343433434', 18, '2024-07-16 10:01:20', '2024-07-16 10:01:20', '6435 TBN'),
(5, 'Mercedes-Benz', 'blabalbalblabla', 2, '0343433434', 24, '2024-07-17 11:03:27', '2024-07-17 11:03:27', '6535 TBN'),
(6, 'Renault', 'blabalbalblabla', 3, '0320234025', 24, '2024-07-17 11:04:18', '2024-07-17 11:04:18', '1845 TBN');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `eglises`
--
ALTER TABLE `eglises`
  ADD PRIMARY KEY (`id`),
  ADD KEY `eglises_personne_id_foreign` (`personne_id`),
  ADD KEY `lieu` (`lieu_id`);

--
-- Index pour la table `eglises_personne`
--
ALTER TABLE `eglises_personne`
  ADD PRIMARY KEY (`id`),
  ADD KEY `eglises_personne_personne_id_foreign` (`personne_id`),
  ADD KEY `eglises_personne_eglise_id_foreign` (`eglise_depart_id`),
  ADD KEY `eglise_arrivee_id` (`eglise_arrivee_id`);

--
-- Index pour la table `equipe`
--
ALTER TABLE `equipe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `equipe_equipe_fonction_id_foreign` (`equipe_fonction_id`),
  ADD KEY `equipe_lieu_id_foreign` (`lieu_id`);

--
-- Index pour la table `equipe_fonctions`
--
ALTER TABLE `equipe_fonctions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `equipe_membres`
--
ALTER TABLE `equipe_membres`
  ADD PRIMARY KEY (`id`),
  ADD KEY `equipe_membres_personne_id_index` (`personne_id`),
  ADD KEY `equipe_membres_equipe_id_index` (`equipe_id`);

--
-- Index pour la table `etats`
--
ALTER TABLE `etats`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `evenements`
--
ALTER TABLE `evenements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `evenements_exemple_evenement_id_index` (`exemple_evenement_id`),
  ADD KEY `evenements_equipe_musicien_id_index` (`equipe_musicien_id`),
  ADD KEY `evenements_equipe_cuisine_id_index` (`equipe_cuisine_id`),
  ADD KEY `evenements_personne_resp_id_index` (`personne_resp_id`),
  ADD KEY `lieu_id` (`lieu_id`);

--
-- Index pour la table `evenement_user`
--
ALTER TABLE `evenement_user`
  ADD KEY `evenement_user_evenement_id_foreign` (`evenement_id`),
  ADD KEY `evenement_user_user_id_foreign` (`user_id`);

--
-- Index pour la table `evenement_vehicule`
--
ALTER TABLE `evenement_vehicule`
  ADD PRIMARY KEY (`evenement_id`,`vehicule_id`),
  ADD KEY `evenement_vehicule_vehicule_id_foreign` (`vehicule_id`);

--
-- Index pour la table `example`
--
ALTER TABLE `example`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `fonctions`
--
ALTER TABLE `fonctions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `gestiontransport`
--
ALTER TABLE `gestiontransport`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gestiontransport_evenement_id_foreign` (`evenement_id`),
  ADD KEY `gestiontransport_vehicule_id_foreign` (`vehicule_id`);

--
-- Index pour la table `lieu`
--
ALTER TABLE `lieu`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `personnes`
--
ALTER TABLE `personnes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nom` (`nom`(191)),
  ADD KEY `fonction_id` (`fonction_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_eglise_id_foreign` (`eglise_id`);

--
-- Index pour la table `vehicules`
--
ALTER TABLE `vehicules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `etat_id` (`etat_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `eglises`
--
ALTER TABLE `eglises`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `eglises_personne`
--
ALTER TABLE `eglises_personne`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `equipe`
--
ALTER TABLE `equipe`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `equipe_fonctions`
--
ALTER TABLE `equipe_fonctions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `equipe_membres`
--
ALTER TABLE `equipe_membres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `etats`
--
ALTER TABLE `etats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `evenements`
--
ALTER TABLE `evenements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `example`
--
ALTER TABLE `example`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `fonctions`
--
ALTER TABLE `fonctions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `gestiontransport`
--
ALTER TABLE `gestiontransport`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `lieu`
--
ALTER TABLE `lieu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT pour la table `personnes`
--
ALTER TABLE `personnes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `vehicules`
--
ALTER TABLE `vehicules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `eglises`
--
ALTER TABLE `eglises`
  ADD CONSTRAINT `eglises_personne_id_foreign` FOREIGN KEY (`personne_id`) REFERENCES `personnes` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `eglises_personne`
--
ALTER TABLE `eglises_personne`
  ADD CONSTRAINT `eglises_personne_eglise_id_foreign` FOREIGN KEY (`eglise_depart_id`) REFERENCES `eglises` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `eglises_personne_personne_id_foreign` FOREIGN KEY (`personne_id`) REFERENCES `personnes` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `equipe`
--
ALTER TABLE `equipe`
  ADD CONSTRAINT `equipe_equipe_fonction_id_foreign` FOREIGN KEY (`equipe_fonction_id`) REFERENCES `equipe_fonctions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `equipe_lieu_id_foreign` FOREIGN KEY (`lieu_id`) REFERENCES `lieu` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `evenement_user`
--
ALTER TABLE `evenement_user`
  ADD CONSTRAINT `evenement_user_evenement_id_foreign` FOREIGN KEY (`evenement_id`) REFERENCES `evenements` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `evenement_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `evenement_vehicule`
--
ALTER TABLE `evenement_vehicule`
  ADD CONSTRAINT `evenement_vehicule_evenement_id_foreign` FOREIGN KEY (`evenement_id`) REFERENCES `evenements` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `evenement_vehicule_vehicule_id_foreign` FOREIGN KEY (`vehicule_id`) REFERENCES `vehicules` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `gestiontransport`
--
ALTER TABLE `gestiontransport`
  ADD CONSTRAINT `gestiontransport_evenement_id_foreign` FOREIGN KEY (`evenement_id`) REFERENCES `evenements` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `gestiontransport_vehicule_id_foreign` FOREIGN KEY (`vehicule_id`) REFERENCES `vehicules` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_eglise_id_foreign` FOREIGN KEY (`eglise_id`) REFERENCES `eglises` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
