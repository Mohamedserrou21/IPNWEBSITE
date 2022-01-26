-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 16 août 2021 à 15:27
-- Version du serveur :  5.7.31
-- Version de PHP : 7.4.9

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

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(15, 'ipn admin', 'ipn@gmail.ma', 'e461e576b465e45be746d182e50ab200');

-- --------------------------------------------------------

--
-- Structure de la table `demande`
--

DROP TABLE IF EXISTS `demande`;
CREATE TABLE IF NOT EXISTS `demande` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `societe` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `useremail` varchar(100) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `Telephone` bigint(12) NOT NULL,
  `secteur` varchar(150) NOT NULL,
  `service` varchar(150) NOT NULL,
  `message` varchar(10000) NOT NULL,
  `dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `demande`
--

INSERT INTO `demande` (`id`, `societe`, `username`, `useremail`, `ville`, `Telephone`, `secteur`, `service`, `message`, `dt`) VALUES
(2, 'ipn', ' mohamed himdi', 'mohamedserrou2016@gmail.com', 'rabat', 676610205, 'banque', 'Communication', 'merci', '2021-08-16 12:04:58');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `societe` varchar(150) NOT NULL,
  `username` varchar(64) NOT NULL,
  `useremail` varchar(128) NOT NULL,
  `ville` varchar(15) NOT NULL,
  `Telephone` bigint(13) NOT NULL,
  `secteur` varchar(150) NOT NULL,
  `service` varchar(50) NOT NULL,
  `message` varchar(10000) NOT NULL,
  `dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `societe`, `username`, `useremail`, `ville`, `Telephone`, `secteur`, `service`, `message`, `dt`) VALUES
(37, 'ipn', 'mohamed himdi', 'mohamedserrou2016@gmail.com', 'fes', 676610205, 'la nourriture', 'Communication', 'merci', '2021-08-15 15:44:04'),
(38, 'ipn', 'mohamed himdi', 'mohamedserrou2016@gmail.com', 'fes', 676610205, 'banque', 'Communication', 'merci', '2021-08-16 11:50:23'),
(39, 'web help', 'mohamed himdi', 'sarrou_moh@upf.ac.ma', 'fes', 752641384, 'la nourriture', 'Digital', 'merci', '2021-08-16 11:53:33'),
(40, 'ipn', 'mohamed himdi', 'mohamedserrou2016@gmail.com', 'fes', 676610205, 'la nourriture', 'Communication', 'merci', '2021-08-16 11:57:32');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
