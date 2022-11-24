-- --------------------------------------------------------
-- Hôte :                        127.0.0.1
-- Version du serveur:           5.7.24 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

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
  `id_film` int(11) DEFAULT NULL,
  `id_genre` int(11) DEFAULT NULL,
  KEY `id_film` (`id_film`),
  KEY `id_genre` (`id_genre`),
  CONSTRAINT `FK_associer_film` FOREIGN KEY (`id_film`) REFERENCES `film` (`id_film`),
  CONSTRAINT `FK_associer_genre` FOREIGN KEY (`id_genre`) REFERENCES `genre` (`id_genre`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Listage des données de la table cinema_roman.associer : ~7 rows (environ)
/*!40000 ALTER TABLE `associer` DISABLE KEYS */;
INSERT INTO `associer` (`id_film`, `id_genre`) VALUES
	(1, 1),
	(2, 1),
	(3, 1),
	(4, 2),
	(5, 2),
	(7, 1),
	(7, 2);
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

-- Listage des données de la table cinema_roman.figurer : ~13 rows (environ)
/*!40000 ALTER TABLE `figurer` DISABLE KEYS */;
INSERT INTO `figurer` (`id_film`, `id_acteur`, `id_role`) VALUES
	(1, 1, 0),
	(3, 1, 0),
	(5, 3, 0),
	(4, 1, 1),
	(3, 2, 2),
	(2, 1, 3),
	(6, 4, 4),
	(3, 5, 5),
	(7, 1, 0),
	(1, 2, 2),
	(1, 5, 5),
	(7, 2, 2),
	(7, 5, 5);
/*!40000 ALTER TABLE `figurer` ENABLE KEYS */;

-- Listage de la structure de la table cinema_roman. film
CREATE TABLE IF NOT EXISTS `film` (
  `id_film` int(11) NOT NULL AUTO_INCREMENT,
  `id_realisateur` int(11) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `annee_sortie` year(4) NOT NULL,
  `duree` int(11) NOT NULL,
  `synopsis` text,
  `note` float NOT NULL,
  `affiche` varchar(255) NOT NULL,
  `likes` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_film`),
  KEY `id_realisateur` (`id_realisateur`),
  CONSTRAINT `FK_film_realisateur` FOREIGN KEY (`id_realisateur`) REFERENCES `realisateur` (`id_realisateur`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Listage des données de la table cinema_roman.film : ~7 rows (environ)
/*!40000 ALTER TABLE `film` DISABLE KEYS */;
INSERT INTO `film` (`id_film`, `id_realisateur`, `titre`, `annee_sortie`, `duree`, `synopsis`, `note`, `affiche`, `likes`) VALUES
	(1, 0, 'Star Wars IV', '1977', 121, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 5, 'https://static.fnac-static.com/multimedia/FR/Images_Produits/FR/fnac.com/Visual_Principal_340/7/2/0/5099709295027/tsp20121012190330/Star-Wars-Episode-4-Un-nouvel-espoir.jpg', 2145),
	(2, 1, 'Blade Runner', '1982', 111, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 4.5, 'https://m.media-amazon.com/images/I/61dVSMH76yL._AC_SY606_.jpg', 921),
	(3, 0, 'Star Wars V', '1980', 144, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 3.5, 'https://fr.web.img4.acsta.net/medias/nmedia/00/02/44/28/empire.jpg', 120),
	(4, 3, 'Indiana Jones', '1981', 148, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 2, 'https://i.ebayimg.com/images/g/s-sAAOSw9N1VpnwR/s-l500.jpg', 44),
	(5, 2, 'Solo: A Star Wars Story', '2018', 136, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 1, 'https://static.fnac-static.com/multimedia/Images/86/86/0F/CB/13307782-1505-1505-1/tsp20191112145401/Solo-A-Star-Wars-Story-AFFICHE-CINEMA-ORIGINALE.jpg#8d009cef-78ab-481d-8e8b-1e6056a78a36', 12),
	(6, 4, 'Cry Macho', '2021', 104, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 0, 'https://fr.web.img6.acsta.net/c_310_420/pictures/21/08/06/12/10/2559362.jpg', 0),
	(7, 0, 'Star Wars VI', '1983', 134, 'Luke Skywalker attempts to bring his father back to the light side of the Force. At the same time, the rebels hatch a plan to destroy the second Death Star.', 4.5, 'https://www.bdfugue.com/media/catalog/product/cache/1/image/400x/17f82f742ffe127f42dca9de82fb58b1/9/7/9782847896466_1_75_1.jpg', 1);
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
  `photo` varchar(255) NOT NULL,
  PRIMARY KEY (`id_personne`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Listage des données de la table cinema_roman.personne : ~9 rows (environ)
/*!40000 ALTER TABLE `personne` DISABLE KEYS */;
INSERT INTO `personne` (`id_personne`, `nom_personne`, `prenom_personne`, `sexe`, `date_naissance`, `photo`) VALUES
	(0, 'Lucas', 'George', 'H', '1944-05-14', 'https://upload.wikimedia.org/wikipedia/commons/a/a0/George_Lucas_cropped_2009.jpg'),
	(1, 'Scott', 'Ridley', 'H', '1937-11-30', 'https://upload.wikimedia.org/wikipedia/commons/1/12/NASA_Journey_to_Mars_and_%E2%80%9CThe_Martian%E2%80%9D_%28201508180030HQ%29.jpg'),
	(2, 'Howard', 'Ron', 'H', '1954-03-01', 'https://upload.wikimedia.org/wikipedia/commons/a/a9/Ron_Howard_Cannes_2018.jpg'),
	(3, 'Ford', 'Harrison', 'H', '1942-07-13', 'https://upload.wikimedia.org/wikipedia/commons/3/34/Harrison_Ford_by_Gage_Skidmore_3.jpg'),
	(4, 'Hamill', 'Mark', 'H', '1954-09-25', 'https://upload.wikimedia.org/wikipedia/commons/6/68/Mark_Hamill_by_Gage_Skidmore_2.jpg'),
	(5, 'Ehrenreich', 'Alden', 'H', '1989-11-22', 'https://upload.wikimedia.org/wikipedia/commons/b/b7/Solo_A_Star_Wars_Story_Japan_Premiere_Red_Carpet_Alden_Ehrenreich_%2841008143870%29.jpg'),
	(6, 'Spielberg', 'Steven', 'H', '1946-12-18', 'https://upload.wikimedia.org/wikipedia/commons/6/67/Steven_Spielberg_by_Gage_Skidmore.jpg'),
	(7, 'Eastwood', 'Clint', 'H', '1930-05-31', 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/7e/Clint_Eastwood_at_2010_New_York_Film_Festival.jpg/640px-Clint_Eastwood_at_2010_New_York_Film_Festival.jpg'),
	(8, 'Fisher', 'Carrie', 'F', '1956-08-21', 'https://upload.wikimedia.org/wikipedia/commons/d/d1/Carrie_Fisher_2013.jpg');
/*!40000 ALTER TABLE `personne` ENABLE KEYS */;

-- Listage de la structure de la table cinema_roman. realisateur
CREATE TABLE IF NOT EXISTS `realisateur` (
  `id_realisateur` int(11) NOT NULL AUTO_INCREMENT,
  `id_personne` int(11) NOT NULL,
  PRIMARY KEY (`id_realisateur`),
  KEY `id_personne` (`id_personne`),
  CONSTRAINT `FK_realisateur_personne` FOREIGN KEY (`id_personne`) REFERENCES `personne` (`id_personne`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

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
  `photo` varchar(255) NOT NULL,
  PRIMARY KEY (`id_role`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Listage des données de la table cinema_roman.role : ~6 rows (environ)
/*!40000 ALTER TABLE `role` DISABLE KEYS */;
INSERT INTO `role` (`id_role`, `nom_personnage`, `photo`) VALUES
	(0, 'Han Solo', ''),
	(1, 'Indiana Jones', ''),
	(2, 'Luke Skywalker', ''),
	(3, 'Rick Deckard', ''),
	(4, 'Miko', ''),
	(5, 'Leia Organa', '');
/*!40000 ALTER TABLE `role` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
