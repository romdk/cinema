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


-- Listage de la structure de la base pour cinema_roman
CREATE DATABASE IF NOT EXISTS `cinema_roman` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `cinema_roman`;

-- Listage de la structure de la table cinema_roman. acteur
CREATE TABLE IF NOT EXISTS `acteur` (
  `id_acteur` int(11) NOT NULL AUTO_INCREMENT,
  `id_personne` int(11) NOT NULL,
  PRIMARY KEY (`id_acteur`),
  KEY `id_personne` (`id_personne`),
  CONSTRAINT `FK_acteur_personne` FOREIGN KEY (`id_personne`) REFERENCES `personne` (`id_personne`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Listage des données de la table cinema_roman.acteur : ~5 rows (environ)
/*!40000 ALTER TABLE `acteur` DISABLE KEYS */;
INSERT INTO `acteur` (`id_acteur`, `id_personne`) VALUES
	(1, 3),
	(2, 4),
	(3, 5),
	(4, 7),
	(5, 8);
/*!40000 ALTER TABLE `acteur` ENABLE KEYS */;

-- Listage de la structure de la table cinema_roman. associer
CREATE TABLE IF NOT EXISTS `associer` (
  `id_film` int(11) NOT NULL,
  `id_genre` int(11) NOT NULL,
  KEY `id_film` (`id_film`),
  KEY `id_genre` (`id_genre`),
  CONSTRAINT `FK_associer_film` FOREIGN KEY (`id_film`) REFERENCES `film` (`id_film`),
  CONSTRAINT `FK_associer_genre` FOREIGN KEY (`id_genre`) REFERENCES `genre` (`id_genre`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Listage des données de la table cinema_roman.associer : ~5 rows (environ)
/*!40000 ALTER TABLE `associer` DISABLE KEYS */;
INSERT INTO `associer` (`id_film`, `id_genre`) VALUES
	(1, 1),
	(2, 1),
	(3, 1),
	(4, 2),
	(5, 2);
/*!40000 ALTER TABLE `associer` ENABLE KEYS */;

-- Listage de la structure de la table cinema_roman. figurer
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

-- Listage des données de la table cinema_roman.figurer : ~10 rows (environ)
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

-- Listage de la structure de la table cinema_roman. film
CREATE TABLE IF NOT EXISTS `film` (
  `id_film` int(11) NOT NULL AUTO_INCREMENT,
  `id_realisateur` int(11) DEFAULT '0',
  `titre` varchar(50) NOT NULL,
  `annee_sortie` year(4) NOT NULL,
  `duree` int(11) NOT NULL,
  `synopsis` text,
  `note` float NOT NULL,
  `affiche` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_film`),
  KEY `id_realisateur` (`id_realisateur`),
  CONSTRAINT `FK_film_realisateur` FOREIGN KEY (`id_realisateur`) REFERENCES `realisateur` (`id_realisateur`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Listage des données de la table cinema_roman.film : ~6 rows (environ)
/*!40000 ALTER TABLE `film` DISABLE KEYS */;
INSERT INTO `film` (`id_film`, `id_realisateur`, `titre`, `annee_sortie`, `duree`, `synopsis`, `note`, `affiche`) VALUES
	(1, 0, 'Star Wars IV', '1977', 121, NULL, 0, 'https://static.fnac-static.com/multimedia/FR/Images_Produits/FR/fnac.com/Visual_Principal_340/7/2/0/5099709295027/tsp20121012190330/Star-Wars-Episode-4-Un-nouvel-espoir.jpg'),
	(2, 1, 'Blade Runner', '1982', 111, NULL, 0, 'https://m.media-amazon.com/images/I/61dVSMH76yL._AC_SY606_.jpg'),
	(3, 0, 'Star Wars V', '1980', 144, NULL, 0, 'https://static.fnac-static.com/multimedia/images_produits/ZoomPE/6/2/1/5099709295126/tsp20130828151225/Star-Wars-Episode-5-L-empire-contre-attaque.jpg'),
	(4, 3, 'Indiana Jones', '1981', 148, NULL, 0, 'https://m.media-amazon.com/images/I/51BzzqecoTL._AC_.jpg'),
	(5, 2, 'Solo: A Star Wars Story', '2018', 136, NULL, 0, 'https://static.fnac-static.com/multimedia/Images/86/86/0F/CB/13307782-1505-1540-1/tsp20191112145401/Solo-A-Star-Wars-Story-AFFICHE-CINEMA-ORIGINALE.jpg'),
	(6, 4, 'Cry Macho', '2021', 104, NULL, 0, 'https://fr.web.img6.acsta.net/c_310_420/pictures/21/08/06/12/10/2559362.jpg'),
	(7, 0, 'Star Wars VI', '1983', 131, 'test', 3, 'https://www.cdiscount.com/pdt2/2/0/2/1/700x700/1ar4047253898202/rw/poster-star-wars-episode-vi-le-retour-du-jedi.jpg');
/*!40000 ALTER TABLE `film` ENABLE KEYS */;

-- Listage de la structure de la table cinema_roman. genre
CREATE TABLE IF NOT EXISTS `genre` (
  `id_genre` int(11) NOT NULL AUTO_INCREMENT,
  `nom_genre` varchar(50) NOT NULL,
  PRIMARY KEY (`id_genre`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Listage des données de la table cinema_roman.genre : ~2 rows (environ)
/*!40000 ALTER TABLE `genre` DISABLE KEYS */;
INSERT INTO `genre` (`id_genre`, `nom_genre`) VALUES
	(1, 'Science-fiction'),
	(2, 'Action-aventure');
/*!40000 ALTER TABLE `genre` ENABLE KEYS */;

-- Listage de la structure de la table cinema_roman. personne
CREATE TABLE IF NOT EXISTS `personne` (
  `id_personne` int(11) NOT NULL AUTO_INCREMENT,
  `nom_personne` varchar(50) NOT NULL,
  `prenom_personne` varchar(50) NOT NULL,
  `sexe` varchar(50) NOT NULL,
  `date_naissance` date NOT NULL,
  PRIMARY KEY (`id_personne`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

-- Listage des données de la table cinema_roman.personne : ~9 rows (environ)
/*!40000 ALTER TABLE `personne` DISABLE KEYS */;
INSERT INTO `personne` (`id_personne`, `nom_personne`, `prenom_personne`, `sexe`, `date_naissance`) VALUES
	(0, 'Lucas', 'George', 'Homme', '1944-05-14'),
	(1, 'Scott', 'Ridley', 'Homme', '1937-11-30'),
	(2, 'Howard', 'Ron', 'Homme', '1954-03-01'),
	(3, 'Ford', 'Harrison', 'Homme', '1942-07-13'),
	(4, 'Hamill', 'Mark', 'Homme', '1954-09-25'),
	(5, 'Ehrenreich', 'Alden', 'Homme', '1989-11-22'),
	(6, 'Spielberg', 'Steven', 'Homme', '1946-12-18'),
	(7, 'Eastwood', 'Clint', 'Homme', '1930-05-31'),
	(8, 'Fisher', 'Carrie', 'Femme', '1956-08-21');
/*!40000 ALTER TABLE `personne` ENABLE KEYS */;

-- Listage de la structure de la table cinema_roman. realisateur
CREATE TABLE IF NOT EXISTS `realisateur` (
  `id_realisateur` int(11) NOT NULL AUTO_INCREMENT,
  `id_personne` int(11) NOT NULL,
  PRIMARY KEY (`id_realisateur`),
  KEY `id_personne` (`id_personne`),
  CONSTRAINT `FK_realisateur_personne` FOREIGN KEY (`id_personne`) REFERENCES `personne` (`id_personne`)
) ENGINE=InnoDB AUTO_INCREMENT=95 DEFAULT CHARSET=latin1;

-- Listage des données de la table cinema_roman.realisateur : ~5 rows (environ)
/*!40000 ALTER TABLE `realisateur` DISABLE KEYS */;
INSERT INTO `realisateur` (`id_realisateur`, `id_personne`) VALUES
	(0, 0),
	(1, 1),
	(2, 2),
	(3, 6),
	(4, 7);
/*!40000 ALTER TABLE `realisateur` ENABLE KEYS */;

-- Listage de la structure de la table cinema_roman. role
CREATE TABLE IF NOT EXISTS `role` (
  `id_role` int(11) NOT NULL AUTO_INCREMENT,
  `nom_personnage` varchar(50) NOT NULL,
  PRIMARY KEY (`id_role`)
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=latin1;

-- Listage des données de la table cinema_roman.role : ~6 rows (environ)
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
