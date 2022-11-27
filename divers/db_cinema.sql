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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- Listage des données de la table cinema_roman.acteur : ~12 rows (environ)
/*!40000 ALTER TABLE `acteur` DISABLE KEYS */;
INSERT INTO `acteur` (`id_acteur`, `id_personne`) VALUES
	(1, 3),
	(2, 4),
	(3, 5),
	(4, 7),
	(5, 8),
	(8, 12),
	(9, 13),
	(10, 14),
	(11, 15),
	(12, 16),
	(13, 17),
	(14, 18);
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

-- Listage des données de la table cinema_roman.associer : ~13 rows (environ)
/*!40000 ALTER TABLE `associer` DISABLE KEYS */;
INSERT INTO `associer` (`id_film`, `id_genre`) VALUES
	(1, 1),
	(2, 1),
	(3, 1),
	(4, 2),
	(5, 2),
	(7, 1),
	(7, 2),
	(6, 3),
	(8, 1),
	(9, 1),
	(10, 1),
	(11, 1),
	(13, 2),
	(5, 1);
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

-- Listage des données de la table cinema_roman.figurer : ~25 rows (environ)
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
	(7, 5, 5),
	(5, 8, 7),
	(11, 1, 3),
	(8, 9, 8),
	(8, 10, 9),
	(9, 10, 9),
	(10, 10, 9),
	(8, 12, 10),
	(9, 12, 10),
	(10, 12, 10),
	(8, 11, 11),
	(9, 11, 11),
	(10, 11, 11),
	(13, 13, 12),
	(11, 14, 13);
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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- Listage des données de la table cinema_roman.film : ~13 rows (environ)
/*!40000 ALTER TABLE `film` DISABLE KEYS */;
INSERT INTO `film` (`id_film`, `id_realisateur`, `titre`, `annee_sortie`, `duree`, `synopsis`, `note`, `affiche`, `likes`) VALUES
	(1, 0, 'Star Wars IV', '1977', 121, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 5, 'https://dnsmptv-img.pragma-consult.be/imgs/disney/big/jan22-starwarsepisodeiv-thumbnail-fr-1643017228-fr.jpg', 2160),
	(2, 1, 'Blade Runner', '1982', 111, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 4.5, 'https://fr.web.img2.acsta.net/c_310_420/pictures/15/09/23/11/37/330370.jpg', 921),
	(3, 0, 'Star Wars V', '1980', 144, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 3.5, 'https://m.media-amazon.com/images/I/71CNDHGNE1L.jpg', 121),
	(4, 3, 'Indiana Jones', '1981', 148, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 2, 'https://fr.web.img2.acsta.net/c_310_420/medias/nmedia/00/02/49/18/affiche.jpg', 44),
	(5, 2, 'Solo: A Star Wars Story', '2018', 136, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 1, 'https://fr.web.img3.acsta.net/c_310_420/pictures/18/04/09/10/56/4971105.jpg', 12),
	(6, 4, 'Cry Macho', '2021', 104, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 0, 'https://fr.web.img6.acsta.net/c_310_420/pictures/21/08/06/12/10/2559362.jpg', 0),
	(7, 0, 'Star Wars VI', '1983', 134, 'Luke Skywalker attempts to bring his father back to the light side of the Force. At the same time, the rebels hatch a plan to destroy the second Death Star.', 4.5, 'https://fr.web.img6.acsta.net/c_310_420/medias/nmedia/18/35/41/62/18422602.jpg', 1),
	(8, 0, 'Star Wars I', '1999', 136, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 3, 'https://www.cinemaffiche.fr/4016-tm_large_default/star-wars-episode-1-star-wars-episode-1.jpg', 0),
	(9, 0, 'Star Wars II', '2002', 144, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 3.5, 'https://m.media-amazon.com/images/I/715aZ-gZP1L._AC_SY606_.jpg', 0),
	(10, 0, 'Star Wars III', '2005', 140, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 5, 'https://m.media-amazon.com/images/I/61kCtf4DC3L._AC_SY606_.jpg', 0),
	(11, 8, 'Blade Runner 2049', '2017', 183, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 3.5, 'https://antreducinema.fr/wp-content/uploads/2020/04/BLADE-RUNNER-2049-scaled.jpg', 0),
	(12, 8, 'Dune', '2021', 155, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 3.5, 'https://fr.web.img2.acsta.net/r_1280_720/pictures/21/10/07/11/00/4629229.jpg', 0),
	(13, 9, 'GoldenEye', '1995', 130, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 4.5, 'https://kifim.b-cdn.net/films/medium/1872757.jpg', 0);
/*!40000 ALTER TABLE `film` ENABLE KEYS */;

-- Listage de la structure de la table cinema_roman. genre
CREATE TABLE IF NOT EXISTS `genre` (
  `id_genre` int(11) NOT NULL AUTO_INCREMENT,
  `nom_genre` varchar(50) NOT NULL,
  PRIMARY KEY (`id_genre`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Listage des données de la table cinema_roman.genre : ~2 rows (environ)
/*!40000 ALTER TABLE `genre` DISABLE KEYS */;
INSERT INTO `genre` (`id_genre`, `nom_genre`) VALUES
	(1, 'Science-fiction'),
	(2, 'Action-aventure'),
	(3, 'Western');
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
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- Listage des données de la table cinema_roman.personne : ~17 rows (environ)
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
	(8, 'Fisher', 'Carrie', 'F', '1956-08-21', 'https://upload.wikimedia.org/wikipedia/commons/d/d1/Carrie_Fisher_2013.jpg'),
	(9, 'Villeneuve', 'Denis', 'H', '1967-08-03', 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a4/Denis_Villeneuve_by_Gage_Skidmore.jpg/220px-Denis_Villeneuve_by_Gage_Skidmore.jpg'),
	(10, 'Campbell', 'Martin ', 'H', '1943-08-24', 'http://t1.gstatic.com/licensed-image?q=tbn:ANd9GcQPKIlTF1RlXYXQ7ybfvefdfWgs5roda2Yg-PNSrIFVjel2YQhMBp3DSSKWR66f2rW5'),
	(12, 'Clarke', 'Emilia ', 'F', '1986-08-23', 'https://fr.web.img5.acsta.net/c_310_420/pictures/15/06/04/16/19/049773.jpg'),
	(13, 'Neeson', 'Liam', 'H', '1952-06-07', 'https://upload.wikimedia.org/wikipedia/commons/b/b9/Liam_Neeson_Deauville_2012.jpg'),
	(14, 'McGregor', 'Ewan ', 'H', '1971-03-31', 'https://fr.web.img5.acsta.net/pictures/18/01/08/13/51/4841442.jpg'),
	(15, 'Portman', 'Natalie ', 'F', '1981-06-09', 'http://t2.gstatic.com/licensed-image?q=tbn:ANd9GcQ05APJfloQAn5iJYx59K82xChZqcfprvhWRGCyaDhVwpchFwaIQXYavyo2mnUTGJGH'),
	(16, 'Christensen', 'Hayden ', 'H', '1981-04-19', 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/8a/Hayden-cfda2010-0004%281%29_%28cropped%29.jpg/220px-Hayden-cfda2010-0004%281%29_%28cropped%29.jpg'),
	(17, 'Brosnan', 'Pierce ', 'H', '1953-05-16', 'https://upload.wikimedia.org/wikipedia/commons/d/d7/Pierce_Brosnan_2017.jpg'),
	(18, 'Gosling', 'Ryan', 'H', '1980-11-12', 'http://t3.gstatic.com/licensed-image?q=tbn:ANd9GcQuW7VQCvyYXQZEG2aCYyTLeNmNjDyyw9K-IjoqNG2GXITFvNSQiBdBVhFjPdlf71sO');
/*!40000 ALTER TABLE `personne` ENABLE KEYS */;

-- Listage de la structure de la table cinema_roman. realisateur
CREATE TABLE IF NOT EXISTS `realisateur` (
  `id_realisateur` int(11) NOT NULL AUTO_INCREMENT,
  `id_personne` int(11) NOT NULL,
  PRIMARY KEY (`id_realisateur`),
  KEY `id_personne` (`id_personne`),
  CONSTRAINT `FK_realisateur_personne` FOREIGN KEY (`id_personne`) REFERENCES `personne` (`id_personne`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Listage des données de la table cinema_roman.realisateur : ~7 rows (environ)
/*!40000 ALTER TABLE `realisateur` DISABLE KEYS */;
INSERT INTO `realisateur` (`id_realisateur`, `id_personne`) VALUES
	(0, 0),
	(1, 1),
	(2, 2),
	(3, 6),
	(4, 7),
	(8, 9),
	(9, 10);
/*!40000 ALTER TABLE `realisateur` ENABLE KEYS */;

-- Listage de la structure de la table cinema_roman. role
CREATE TABLE IF NOT EXISTS `role` (
  `id_role` int(11) NOT NULL AUTO_INCREMENT,
  `nom_personnage` varchar(50) NOT NULL,
  PRIMARY KEY (`id_role`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- Listage des données de la table cinema_roman.role : ~12 rows (environ)
/*!40000 ALTER TABLE `role` DISABLE KEYS */;
INSERT INTO `role` (`id_role`, `nom_personnage`) VALUES
	(0, 'Han Solo'),
	(1, 'Indiana Jones'),
	(2, 'Luke Skywalker'),
	(3, 'Rick Deckard'),
	(4, 'Miko'),
	(5, 'Leia Organa'),
	(7, 'Qi\'ra'),
	(8, 'Qui-Gon Jinn'),
	(9, 'Obi-Wan Kenobi'),
	(10, 'Anakin Skywalker'),
	(11, 'Padmé Amidala\r\n'),
	(12, 'james bond'),
	(13, 'Officier K');
/*!40000 ALTER TABLE `role` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
