-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 29 avr. 2019 à 14:08
-- Version du serveur :  10.1.37-MariaDB
-- Version de PHP :  7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `laroche`
--

-- --------------------------------------------------------

--
-- Structure de la table `achat`
--

CREATE TABLE `achat` (
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `numero` int(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `achat`
--

INSERT INTO `achat` (`nom`, `prenom`, `email`, `numero`) VALUES
('konan', 'moral', 'konanmoral@gmail.com', 42920384);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `telephone` int(100) NOT NULL,
  `naissance` date NOT NULL,
  `password` int(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `nom`, `prenom`, `email`, `telephone`, `naissance`, `password`) VALUES
(2, 'monney', 'ulrich', 'ulriche@gmail.com', 42920384, '0000-00-00', 101010),
(3, 'adiko', 'ulrich', 'ulriche@gmail.com', 42920384, '0000-00-00', 858245),
(4, 'lolo', 'ulrich', 'ulriche@gmail.com', 42920384, '0000-00-00', 198524),
(5, 'ossey', 'ulrich', 'ulriche@gmail.com', 42920384, '0000-00-00', 1999),
(6, 'kokoi', 'adou patrick', 'kokoiadou@gmail.com', 3857498, '1999-02-05', 29784),
(7, 'konan', 'mafleur', 'monneylaroche@gmail.com', 0, '1899-07-09', 29248712),
(8, 'n\'cho', 'aymar', 'nchoaymar@gmail.com', 43854212, '1877-07-05', 8523),
(9, 'karamoko', 'aboulaye', 'karamoko@gmail.com', 42987562, '2000-02-05', 1287456),
(10, 'mala', 'koffi', 'malakoffi@gmail.com', 42920584, '1284-03-08', 431067),
(11, 'lebon', 'roi', 'lebonroi@gmail.com', 45879565, '2005-06-07', 42952),
(12, 'nono', 'laila', 'nonolaila@gmail.com', 2859774, '1897-05-09', 124579),
(21, 'nono', 'laila', 'nonolaila@gmail.com', 2859774, '1897-05-09', 787454545),
(30, 'mol', 'kolo', 'nonolaila@gmail.com', 2859774, '1897-05-09', 78945),
(31, 'molo', 'kolo', 'nonolaila@gmail.com', 2859774, '1897-05-09', 12365),
(32, 'mololo', 'kolo', 'nonolaila@gmail.com', 2859774, '1897-05-09', 45987),
(33, 'joli', 'kolo', 'nonolaila@gmail.com', 2859774, '1897-05-09', 8745),
(34, 'jolino', 'kolo', 'nonolaila@gmail.com', 2859774, '1897-05-09', 45879),
(36, 'jolinono', 'kolo', 'nonolaila@gmail.com', 2859774, '1897-05-09', 789546),
(37, 'karine', 'kolo', 'nonolaila@gmail.com', 2859774, '1897-05-09', 254698),
(38, 'konan', 'kolo', 'nonolaila@gmail.com', 2859774, '1897-05-09', 789564),
(39, 'joel', 'kolo', 'nonolaila@gmail.com', 2859774, '1897-05-09', 854721),
(40, 'joel', 'laroche', 'nonolaila@gmail.com', 2859774, '1897-05-09', 98745),
(41, 'monney', 'laroche', 'nonolaila@gmail.com', 2859774, '1897-05-09', 789542),
(42, 'monney', 'alder', 'nonolaila@gmail.com', 2859774, '1897-05-09', 78954),
(43, 'monney', 'ruth', 'nonolaila@gmail.com', 2859774, '1897-05-09', 4598),
(44, 'maco', 'roi', 'nonolaila@gmail.com', 502010245, '1897-05-09', 98745),
(45, 'leli', 'papa', 'ulriche@gmail.com', 2859774, '1897-05-09', 78965),
(46, 'leli', 'maman', 'ulriche@gmail.com', 2859774, '1897-05-09', 7896),
(47, 'leli', 'grand', 'ulriche@gmail.com', 2859774, '1897-05-09', 4785),
(48, 'cecil', 'tantie', 'ulriche@gmail.com', 2859774, '1897-05-09', 78954),
(49, 'maman', 'tantie', 'ulriche@gmail.com', 2859774, '1897-05-09', 431067),
(50, 'lebon', 'laroche', 'alder.monney@uvc.edu.ci', 2859774, '0000-00-00', 45876),
(51, 'lebon', 'pere', 'alder.monney@uvc.edu.ci', 2859774, '0000-00-00', 7845),
(55, 'kouma', 'leaon', 'nonolaila@gmail.com', 2859774, '1897-05-09', 15487),
(57, 'lebon', 'laila', 'nonolaila@gmail.com', 2859774, '1897-05-09', 458795),
(58, 'jaivais', 'mignon', 'alder.monney@uvc.ci', 2859774, '1897-05-09', 789546),
(59, 'ossey', 'laroche', 'alder.monney@uvc', 502010245, '1899-07-09', 4512),
(60, 'ossey', 'oraine', 'alder.monney@uvc', 502010245, '1899-07-09', 78452),
(61, 'moukaiila', 'lobÃª', 'nonolaila@gmail.com', 2859774, '2005-06-07', 784598),
(62, 'diakitÃ©', 'mama', 'nonolaila@gmail.com', 2859774, '2005-06-07', 451202),
(63, 'caiila', 'madrame', 'nonolaila@gmail.com', 2859774, '2005-06-07', 4512879),
(64, 'lepere', 'konan', 'nonolaila@gmail.com', 45879954, '1897-05-09', 458756),
(65, 'dejdjbhf', 'laroche', 'alder.monney@uvci.edu.ci', 42920384, '1897-05-09', 12546),
(66, 'lebon', 'kolo', 'nonolaila@gmail.com', 2859774, '1897-05-09', 124587),
(67, 'dougoutigi', 'lobÃª', 'henri@gmail.com', 42018796, '2000-08-09', 431067),
(68, 'kouassi', 'armel', 'kouassiarmel@gmail.com', 2022547, '0000-00-00', 12548),
(69, 'kouassi', 'arno', 'kouassiarmel@gmail.com', 2022547, '0000-00-00', 78965),
(70, 'lenoir', 'arno', 'kouassiarmel@gmail.com', 2022547, '0000-00-00', 456987),
(71, 'Yapo', 'Treffel', 'yapotreffel@gmail.com', 56465714, '1998-10-09', 123456),
(73, 'Yapo', 'Treffel', 'yapotreffel@gmail.com', 56465714, '1998-10-09', 431067),
(74, 'monney', 'larissa ocean', 'monneylarissa@gmail.com', 71316051, '2005-08-25', 431067),
(75, 'molo', 'molo', 'molomolo@gmail.com', 2987564, '0000-00-00', 459872),
(76, 'mix', 'premier', 'mixpremier@gmail.com', 42920384, '1999-08-05', 431067),
(77, 'marobe', 'joli', 'nonolaila@gmail.com', 2859774, '1897-05-09', 431067),
(78, 'kobon', 'steven', 'kobon@gmail.com', 71060660, '1997-08-06', 604875),
(79, 'kobon', 'steven', 'kobon@gmail.com', 71060660, '1997-08-06', 604878),
(80, 'honore', 'jean', 'monneylaroche@gmail.com', 258476, '1999-05-05', 457895),
(81, 'kirignon', 'louki', 'kirignonlouki@gmail.com', 1006910, '1598-05-09', 4785942),
(88, 'koko', 'uni', 'monneylaroche@gmail.com', 45789565, '2019-04-11', 457898),
(89, 'kjijojo', 'lmp', 'monneylaroche@gmail.com', 45878545, '2019-04-12', 1999),
(90, 'koukou', 'leondre', 'monneylaroche@gmail.com', 87459564, '2019-04-10', 45789),
(91, 'nanien', 'koukou', 'monneylaroche@gmail.com', 45878545, '2019-04-11', 4587458);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
