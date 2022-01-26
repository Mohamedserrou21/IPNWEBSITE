-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 18 sep. 2021 à 13:26
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `admin_ipn`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(15, 'IPN', 'ipn@gmail.ma', 'e461e576b465e45be746d182e50ab200');

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `text` text NOT NULL,
  `image_url` mediumtext NOT NULL,
  `dt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `titre`, `text`, `image_url`, `dt`) VALUES
(9, 'Studio IPN', 'IPN assiste des marques de premier plan dans la creation  la gestion et lanimation de leurs pages sites applications et medias digitaux  Notre savoir-faire leur permet egalement de projeter dans le digital leurs espaces de communication privilegies : magasins  evenements operations de sponsoring ou de RSE.', 'IMG-61450e6a0decb9.10918764.jpg', '2021-09-17 21:53:46'),
(10, 'Notre Mission', 'IPN a reussi a sadapter aux differents changements dinnovation en offrant le meilleur delle meme et Anticiper vos besoins grace a notre proactivite Vous proposer des solutions innovantes et originales Vous informer des dernieres evolutions dans les domaines de la communication interactive et visuelle. Vous faire partager notre passion du metier a travers nos creations et nos solutions.', 'IMG-61449cbc13d035.57745426.jpg', '2021-09-17 13:48:44'),
(11, 'Communication IPN', 'Le service communication est une fonction strategique reelle pour lentreprise. Car il est le gestionnaire de la reputation de lentreprise. La reputation, limage de marque de lâ€™entreprise sont aujourdâ€™hui des facteurs a prendre en compte dans le management aussi serieusement que la securite ou la qualite. Et cest en ce sens que le service communication doit etre integre aux dÃ©cisions de gestion.', 'IMG-61449da1740679.89389824.jpg', '2021-09-17 13:52:33');

-- --------------------------------------------------------

--
-- Structure de la table `demande`
--

CREATE TABLE `demande` (
  `id` int(11) UNSIGNED NOT NULL,
  `societe` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `useremail` varchar(100) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `Telephone` varchar(15) NOT NULL,
  `secteur` varchar(150) NOT NULL,
  `service` varchar(150) NOT NULL,
  `message` varchar(10000) NOT NULL,
  `dt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `demande`
--

INSERT INTO `demande` (`id`, `societe`, `username`, `useremail`, `ville`, `Telephone`, `secteur`, `service`, `message`, `dt`) VALUES
(2, 'web help', ' imade ejjdine', 'imade.ejjdine@webhelp.ma', 'fes', '752641384', 'Communication', 'digitale', 'chers ipn merci de nous accepter notre demande a propos du sujet service communication', '2021-08-21 17:40:39');

-- --------------------------------------------------------

--
-- Structure de la table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `image_url` mediumtext NOT NULL,
  `categorie` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `gallery`
--

INSERT INTO `gallery` (`id`, `image_url`, `categorie`) VALUES
(2, 'IMG-614518666ec2c2.73355092.jpg', 'AMÃ‰NAGEMENT Dâ€™ESPACES'),
(3, 'IMG-614519ee146a28.67270031.jpg', 'Communication'),
(4, 'IMG-614519fa399e00.72036582.jpg', 'AMÃ‰NAGEMENT Dâ€™ESPACES'),
(5, 'IMG-61451a0c8612a4.26331462.jpg', 'Goodies'),
(6, 'IMG-61451a273462b5.46971315.jpg', 'Communication'),
(7, 'IMG-61451a3d0ab615.32498789.jpg', 'AMÃ‰NAGEMENT Dâ€™ESPACES'),
(8, 'IMG-61451ac83a3b80.39603002.jpg', 'Goodies'),
(9, 'IMG-61451ad886ce96.13299492.jpg', 'Goodies');

-- --------------------------------------------------------

--
-- Structure de la table `probleme_signaler`
--

CREATE TABLE `probleme_signaler` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `domaine` varchar(50) NOT NULL,
  `probleme` varchar(10000) NOT NULL,
  `image_url` text NOT NULL,
  `dt` timestamp NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `probleme_signaler`
--

INSERT INTO `probleme_signaler` (`id`, `email`, `domaine`, `probleme`, `image_url`, `dt`) VALUES
(22, 'sarrou_moh@upf.ac.ma', 'services', 'probleme de verification demail', 'IMG-6144a4913c05e4.62800095.jpeg', '2021-09-17 14:22:09');

-- --------------------------------------------------------

--
-- Structure de la table `subscribe`
--

CREATE TABLE `subscribe` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `subscribe`
--

INSERT INTO `subscribe` (`id`, `email`) VALUES
(2, 'mohamedserrou2016@gmail.com'),
(3, 'admin@gmail.com'),
(4, 'linamsefer@gmail.com'),
(5, 'mohamed.himdi@gmail.com'),
(6, 'mohamed.himdi@gmail.com'),
(7, 'linamsefer@gmail.com'),
(8, 'sarrou_moh@upf.ac.ma'),
(9, 'ipn@gmail.com'),
(10, 'sarrou_moh@upf.ac.ma'),
(11, 'mehdifarhat@gmail.com'),
(12, 'ipn@gmail.ma');

-- --------------------------------------------------------

--
-- Structure de la table `usertable`
--

CREATE TABLE `usertable` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `code` mediumint(50) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `usertable`
--

INSERT INTO `usertable` (`id`, `name`, `email`, `password`, `code`, `status`) VALUES
(2, 'mohamed serrou', 'mohamedserrou2016@gmail.com', '$2y$10$EDuANsbdo3yJrNGQu5ht7.Q4G20k4gk8AWihqCbFm6W0h/AjiMsGW', 0, 'verified');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `demande`
--
ALTER TABLE `demande`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `probleme_signaler`
--
ALTER TABLE `probleme_signaler`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `demande`
--
ALTER TABLE `demande`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `probleme_signaler`
--
ALTER TABLE `probleme_signaler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
