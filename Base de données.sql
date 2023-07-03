-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Ven 28 Juin 2019 à 23:48
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `zhmdsm_pfe`
--

-- --------------------------------------------------------

--
-- Structure de la table `consultation`
--

CREATE TABLE `consultation` (
  `numero` int(11) NOT NULL,
  `num_patient` int(10) UNSIGNED DEFAULT NULL,
  `date_consultation` date DEFAULT NULL,
  `heure_cons` varchar(5) NOT NULL,
  `motif` varchar(100) DEFAULT NULL,
  `descriptif` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `consultation`
--

INSERT INTO `consultation` (`numero`, `num_patient`, `date_consultation`, `heure_cons`, `motif`, `descriptif`) VALUES
(3, 27, '2019-06-21', '09:45', 'Chirurgie ', 'Grave'),
(4, 27, '2019-06-21', '8:45', 'Douleurs', 'azlkejoazieoaiezkajlze'),
(6, 43, '2019-06-28', '09:30', 'Douleurs', 'Exemple Exemple Exemple Exemple Exemple '),
(7, 43, '2019-06-13', '13:30', 'Autre', 'Exemple'),
(8, 45, '2019-07-05', '11:00', 'Douleurs', 'exemple ');

-- --------------------------------------------------------

--
-- Structure de la table `medecin`
--

CREATE TABLE `medecin` (
  `user_name` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `patient`
--

CREATE TABLE `patient` (
  `matricule` int(10) UNSIGNED NOT NULL,
  `id` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `age` int(3) UNSIGNED NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `numtel` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `patient`
--

INSERT INTO `patient` (`matricule`, `id`, `password`, `nom`, `prenom`, `age`, `adresse`, `email`, `numtel`) VALUES
(27, 'saidsaid', '123456789', 'Djamila', 'Djamila', 30, 'Exemple Exemple Exemple Exemple Exemple ', 'zoheirock@gmail.com', '0669027188'),
(43, 'fatiha123', '123456789', 'Fatiha', 'Fatiha', 35, 'Rue: exemple,exemple', 'patient@site.com', '0132456789'),
(44, 'karimakarima', '123456789', 'Karima', 'Karima', 32, 'Exemple Exemple Exemple Exemple Exemple ', 'patient@site.com', '0132456789'),
(45, 'noranora', '123456789', 'Nora', 'Nora ', 32, 'Nora Nora Nora Nora Nora ', 'patient@site.com', '0132456789');

--
-- Déclencheurs `patient`
--
DELIMITER $$
CREATE TRIGGER `auto_cons` BEFORE DELETE ON `patient` FOR EACH ROW DELETE FROM consultation WHERE num_patient = old.matricule
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `rdv_auto` BEFORE DELETE ON `patient` FOR EACH ROW DELETE FROM rendez_vous WHERE num_patient_rdv = old.matricule
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `rendez_vous`
--

CREATE TABLE `rendez_vous` (
  `num_rdv` int(11) NOT NULL,
  `num_patient_rdv` int(10) UNSIGNED NOT NULL,
  `date_rdv` date NOT NULL,
  `heure` varchar(5) NOT NULL,
  `etat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `rendez_vous`
--

INSERT INTO `rendez_vous` (`num_rdv`, `num_patient_rdv`, `date_rdv`, `heure`, `etat`) VALUES
(34, 27, '2019-06-19', '09:00', 'confirmé'),
(40, 27, '2019-06-25', '14:00', 'rufusé'),
(45, 27, '2019-06-25', '15:00', 'non confirmé'),
(46, 43, '2019-06-14', '12:00', 'confirmé'),
(47, 43, '2019-06-29', '15:00', 'rufusé'),
(48, 43, '2019-06-29', '12:00', 'non confirmé'),
(49, 44, '2019-06-28', '09:30', 'confirmé'),
(50, 44, '2019-07-03', '11:00', 'non confirmé'),
(51, 45, '2019-07-05', '10:00', 'non confirmé');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `consultation`
--
ALTER TABLE `consultation`
  ADD PRIMARY KEY (`numero`),
  ADD KEY `num_patient` (`num_patient`);

--
-- Index pour la table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`matricule`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Index pour la table `rendez_vous`
--
ALTER TABLE `rendez_vous`
  ADD PRIMARY KEY (`num_rdv`),
  ADD KEY `num_patient_rdv` (`num_patient_rdv`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `consultation`
--
ALTER TABLE `consultation`
  MODIFY `numero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `patient`
--
ALTER TABLE `patient`
  MODIFY `matricule` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT pour la table `rendez_vous`
--
ALTER TABLE `rendez_vous`
  MODIFY `num_rdv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `consultation`
--
ALTER TABLE `consultation`
  ADD CONSTRAINT `Consultation_ibfk_1` FOREIGN KEY (`num_patient`) REFERENCES `patient` (`matricule`);

--
-- Contraintes pour la table `rendez_vous`
--
ALTER TABLE `rendez_vous`
  ADD CONSTRAINT `Rendez_vous_ibfk_1` FOREIGN KEY (`num_patient_rdv`) REFERENCES `patient` (`matricule`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
