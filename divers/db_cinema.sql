-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           5.7.33 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour cinema
CREATE DATABASE IF NOT EXISTS `cinema` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `cinema`;

-- Listage de la structure de la table cinema. acteur
CREATE TABLE IF NOT EXISTS `acteur` (
  `id_acteur` int(11) NOT NULL AUTO_INCREMENT,
  `id_personne` int(11) NOT NULL,
  PRIMARY KEY (`id_acteur`),
  KEY `id_personne` (`id_personne`),
  CONSTRAINT `FK_acteur_personne` FOREIGN KEY (`id_personne`) REFERENCES `personne` (`id_personne`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Listage des données de la table cinema.acteur : ~4 rows (environ)
/*!40000 ALTER TABLE `acteur` DISABLE KEYS */;
INSERT INTO `acteur` (`id_acteur`, `id_personne`) VALUES
	(1, 3),
	(2, 4),
	(3, 5),
	(4, 7),
	(5, 8);
/*!40000 ALTER TABLE `acteur` ENABLE KEYS */;

-- Listage de la structure de la table cinema. associer
CREATE TABLE IF NOT EXISTS `associer` (
  `id_film` int(11) NOT NULL,
  `id_genre` int(11) NOT NULL,
  KEY `id_film` (`id_film`),
  KEY `id_genre` (`id_genre`),
  CONSTRAINT `FK_associer_film` FOREIGN KEY (`id_film`) REFERENCES `film` (`id_film`),
  CONSTRAINT `FK_associer_genre` FOREIGN KEY (`id_genre`) REFERENCES `genre` (`id_genre`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Listage des données de la table cinema.associer : ~5 rows (environ)
/*!40000 ALTER TABLE `associer` DISABLE KEYS */;
INSERT INTO `associer` (`id_film`, `id_genre`) VALUES
	(1, 1),
	(2, 1),
	(3, 1),
	(4, 2),
	(5, 2);
/*!40000 ALTER TABLE `associer` ENABLE KEYS */;

-- Listage de la structure de la table cinema. figurer
CREATE TABLE IF NOT EXISTS `figurer` (
  `id_film` int(11) NOT NULL,
  `id_acteur` int(11) NOT NULL,
  `id_role` int(11) NOT NULL,
  KEY `id_film` (`id_film`),
  KEY `id_acteur` (`id_acteur`),
  KEY `id_role` (`id_role`),
  CONSTRAINT `FK_figurer_acteur` FOREIGN KEY (`id_acteur`) REFERENCES `acteur` (`id_acteur`),
  CONSTRAINT `FK_figurer_film` FOREIGN KEY (`id_film`) REFERENCES `film` (`id_film`),
  CONSTRAINT `FK_figurer_role` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Listage des données de la table cinema.figurer : ~10 rows (environ)
/*!40000 ALTER TABLE `figurer` DISABLE KEYS */;
INSERT INTO `figurer` (`id_film`, `id_acteur`, `id_role`) VALUES
	(1, 1, 0),
	(3, 1, 0),
	(5, 3, 0),
	(4, 1, 1),
	(1, 2, 2),
	(3, 2, 2),
	(2, 1, 3),
	(6, 4, 4),
	(1, 5, 5),
	(3, 5, 5);
/*!40000 ALTER TABLE `figurer` ENABLE KEYS */;

-- Listage de la structure de la table cinema. film
CREATE TABLE IF NOT EXISTS `film` (
  `id_film` int(11) NOT NULL AUTO_INCREMENT,
  `id_realisateur` int(11) NOT NULL DEFAULT '0',
  `titre` varchar(50) NOT NULL,
  `annee_sortie` year(4) NOT NULL,
  `duree` int(11) NOT NULL,
  `synopsis` text,
  `note` float NOT NULL,
  `affiche` varchar(255) NOT NULL,
  PRIMARY KEY (`id_film`),
  KEY `id_realisateur` (`id_realisateur`),
  CONSTRAINT `FK_film_realisateur` FOREIGN KEY (`id_realisateur`) REFERENCES `realisateur` (`id_realisateur`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Listage des données de la table cinema.film : ~6 rows (environ)
/*!40000 ALTER TABLE `film` DISABLE KEYS */;
INSERT INTO `film` (`id_film`, `id_realisateur`, `titre`, `annee_sortie`, `duree`, `synopsis`, `note`, `affiche`) VALUES
	(1, 0, 'Star Wars IV', '1977', 121, NULL, 0, ''),
	(2, 1, 'Blade Runner', '1982', 111, NULL, 0, ''),
	(3, 0, 'Star Wars V', '1980', 144, NULL, 0, ''),
	(4, 3, 'Indiana Jones', '1981', 148, NULL, 0, ''),
	(5, 2, 'Solo: A Star Wars Story', '2018', 136, NULL, 0, ''),
	(6, 4, 'Cry Macho', '2021', 104, NULL, 0, '');
/*!40000 ALTER TABLE `film` ENABLE KEYS */;

-- Listage de la structure de la table cinema. genre
CREATE TABLE IF NOT EXISTS `genre` (
  `id_genre` int(11) NOT NULL AUTO_INCREMENT,
  `nom_genre` varchar(50) NOT NULL,
  PRIMARY KEY (`id_genre`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Listage des données de la table cinema.genre : ~2 rows (environ)
/*!40000 ALTER TABLE `genre` DISABLE KEYS */;
INSERT INTO `genre` (`id_genre`, `nom_genre`) VALUES
	(1, 'Science-fiction'),
	(2, 'Action-aventure');
/*!40000 ALTER TABLE `genre` ENABLE KEYS */;

-- Listage de la structure de la table cinema. personne
CREATE TABLE IF NOT EXISTS `personne` (
  `id_personne` int(11) NOT NULL AUTO_INCREMENT,
  `nom_personne` varchar(50) NOT NULL,
  `prenom_personne` varchar(50) NOT NULL,
  `sexe` varchar(50) NOT NULL,
  `date_naissance` date NOT NULL,
  PRIMARY KEY (`id_personne`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Listage des données de la table cinema.personne : ~9 rows (environ)
/*!40000 ALTER TABLE `personne` DISABLE KEYS */;
INSERT INTO `personne` (`id_personne`, `nom_personne`, `prenom_personne`, `sexe`, `date_naissance`) VALUES
	(0, 'Lucas', 'George', 'H', '1944-05-14'),
	(1, 'Scott', 'Ridley', 'H', '1937-11-30'),
	(2, 'Howard', 'Ron', 'H', '1954-03-01'),
	(3, 'Ford', 'Harrison', 'H', '1942-07-13'),
	(4, 'Hamill', 'Mark', 'H', '1954-09-25'),
	(5, 'Ehrenreich', 'Alden', 'H', '1989-11-22'),
	(6, 'Spielberg', 'Steven', 'H', '1946-12-18'),
	(7, 'Eastwood', 'Clint', 'H', '1930-05-31'),
	(8, 'Fisher', 'Carrie', 'F', '1956-08-21');
/*!40000 ALTER TABLE `personne` ENABLE KEYS */;

-- Listage de la structure de la table cinema. realisateur
CREATE TABLE IF NOT EXISTS `realisateur` (
  `id_realisateur` int(11) NOT NULL AUTO_INCREMENT,
  `id_personne` int(11) NOT NULL,
  PRIMARY KEY (`id_realisateur`),
  KEY `id_personne` (`id_personne`),
  CONSTRAINT `FK_realisateur_personne` FOREIGN KEY (`id_personne`) REFERENCES `personne` (`id_personne`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Listage des données de la table cinema.realisateur : ~5 rows (environ)
/*!40000 ALTER TABLE `realisateur` DISABLE KEYS */;
INSERT INTO `realisateur` (`id_realisateur`, `id_personne`) VALUES
	(0, 0),
	(1, 1),
	(2, 2),
	(3, 6),
	(4, 7);
/*!40000 ALTER TABLE `realisateur` ENABLE KEYS */;

-- Listage de la structure de la table cinema. role
CREATE TABLE IF NOT EXISTS `role` (
  `id_role` int(11) NOT NULL AUTO_INCREMENT,
  `nom_personnage` varchar(50) NOT NULL,
  PRIMARY KEY (`id_role`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Listage des données de la table cinema.role : ~5 rows (environ)
/*!40000 ALTER TABLE `role` DISABLE KEYS */;
INSERT INTO `role` (`id_role`, `nom_personnage`) VALUES
	(0, 'Han Solo'),
	(1, 'Indiana Jones'),
	(2, 'Luke Skywalker'),
	(3, 'Rick Deckard'),
	(4, 'Miko'),
	(5, 'Leia Organa');
/*!40000 ALTER TABLE `role` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
