-- Informations d’un film(id_film): titre, année, durée (au format HH:MM) et réalisateur
SELECT titre,annee_sortie,SEC_TO_TIME(duree*60),prenom_personne,nom_personne
FROM film
INNER JOIN realisateur
ON film.id_realisateur = realisateur.id_realisateur
INNER JOIN personne
ON realisateur.id_personne = personne.id_personne
WHERE id_film = 1


-- Liste des films dont la durée excède 2h15 classés par durée (du plus long au plus court)
SELECT titre
FROM film
WHERE duree > 135
ORDER BY duree DESC

-- Liste des films d’un réalisateur (en précisant l’année de sortie)

SELECT titre,annee_sortie
FROM film
INNER JOIN realisateur
ON film.id_realisateur = realisateur.id_realisateur
INNER JOIN personne
ON realisateur.id_personne = personne.id_personne
WHERE nom_personne = '(nom du realisateur)'

-- Nombre de films par genre (classés dans l’ordre décroissant)

SELECT nom_genre,count(*)
FROM associer
INNER JOIN film
ON associer.id_film = film.id_film
INNER JOIN genre
ON associer.id_genre = genre.id_genre
GROUP BY associer.id_genre
ORDER BY count(*)DESC

-- Nombre de films par réalisateur (classés dans l’ordre décroissant)
SELECT prenom_personne,nom_personne,count(*)
FROM personne
INNER JOIN realisateur
ON personne.id_personne = realisateur.id_personne
INNER JOIN film
ON realisateur.id_realisateur = film.id_realisateur
GROUP BY nom_personne
ORDER BY count(*)DESC

-- Casting d’un film en particulier (id_film): nom, prénom des acteurs + sexe
SELECT nom_personne, prenom_personne, sexe
FROM personne
INNER JOIN acteur
ON personne.id_personne = acteur.id_personne
INNER JOIN figurer
ON acteur.id_acteur = figurer.id_acteur
WHERE id_film = (id du film)

-- Films tournés par un acteur en particulier (id_acteur)avec leur rôle et l’année de sortie (du film le plus récent au plus ancien)
SELECT titre, nom_personnage, annee_sortie
FROM film
INNER JOIN figurer
ON film.id_film = figurer.id_film
INNER JOIN role
ON figurer.id_role = role.id_role
INNER JOIN acteur
ON figurer.id_acteur = acteur.id_acteur
ORDER BY annee_sortie DESC
WHERE id_acteur = (id_acteur)

-- Listes des personnes qui sont à la fois acteurs et réalisateurs
SELECT prenom_personne, nom_personne
FROM personne
INNER JOIN realisateur
ON personne.id_personne = realisateur.id_personne
INNER JOIN acteur
ON personne.id_personne = acteur.id_personne

-- Liste des films qui ont moins de 5 ans (classés du plus récent au plus ancien)
SELECT titre, annee_sortie
FROM film
WHERE YEAR(CURDATE()) - annee_sortie < 5
ORDER BY annee_sortie DESC

-- Nombre d’hommes et de femmes parmi les acteurs
SELECT sexe, count(*)
FROM personne
INNER JOIN acteur
ON personne.id_personne = acteur.id_personne
GROUP BY sexe

-- liste des acteurs ayant plus de 50 ans (âge révolu et non révolu)
SELECT prenom_personne, nom_personne, FLOOR(DATEDIFF(CURDATE(), date_naissance)/365)
FROM personne
WHERE FLOOR(DATEDIFF(CURDATE(), date_naissance)/365) > 50

-- Acteurs ayant joué dans 3 films ou plus
SELECT prenom_personne, nom_personne, count(*)
FROM personne
INNER JOIN acteur
ON personne.id_personne = acteur.id_personne
INNER JOIN figurer
ON acteur.id_acteur = figurer.id_acteur
GROUP BY figurer.id_acteur
HAVING count(*) >= 3
