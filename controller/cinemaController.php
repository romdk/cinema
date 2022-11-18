<?php

namespace Controller;
use Model\Connect;

class CinemaController {
    public function listFilms(){
        $pdo = Connect::seConnecter();
        $requete = $pdo->query('
        SELECT titre, annee_sortie,id_film
        FROM film
        ');
        require 'view/listFilms.php';
    }

    public function listRealisateurs(){
        $pdo = Connect::seConnecter();
        $requete = $pdo->query('
        SELECT prenom_personne, nom_personne,id_realisateur
        FROM personne
        INNER JOIN realisateur
        ON personne.id_personne = realisateur.id_personne
        ');
        require 'view/listRealisateur.php';
    }

    public function listActeurs(){
        $pdo = Connect::seConnecter();
        $requete = $pdo->query('
        SELECT prenom_personne, nom_personne,id_acteur
        FROM personne
        INNER JOIN acteur
        ON personne.id_personne = acteur.id_personne
        ');
        require 'view/listActeurs.php';
    }

    public function listGenres(){
        $pdo = Connect::seConnecter();
        $requete = $pdo->query('
        SELECT nom_genre, id_genre
        FROM genre
        ');
        require 'view/listGenres.php';
    }

    public function listRoles(){
        $pdo = Connect::seConnecter();
        $requete = $pdo->query('
        SELECT nom_personnage,id_role
        FROM role
        ');
        require 'view/listRoles.php';
    }

    public function detailFilm($id){
        $pdo = Connect::seConnecter();
        $requete = $pdo->prepare('
        SELECT titre, annee_sortie, duree, synopsis, note, affiche, prenom_personne, nom_personne
        FROM film
        INNER JOIN realisateur
        ON film.id_realisateur = realisateur.id_realisateur
        INNER JOIN personne
        ON realisateur.id_personne = personne.id_personne
        WHERE film.id_film = :id
        ');
        $requete->execute(['id' => $id]);

        $requete2 = $pdo->prepare('
        SELECT nom_personne, prenom_personne
        FROM personne
        INNER JOIN acteur
        ON personne.id_personne = acteur.id_personne
        INNER JOIN figurer
        ON acteur.id_acteur = figurer.id_acteur
        WHERE id_film = :id
        ');
        $requete2->execute(['id' => $id]);
        require 'view/detailFilm.php';
    }

    public function detailRealisateur($id){
        $pdo = Connect::seConnecter();
        $requete = $pdo->prepare('
        SELECT prenom_personne, nom_personne,date_naissance
        FROM personne
        INNER JOIN realisateur
        ON personne.id_personne = realisateur.id_personne
        WHERE realisateur.id_realisateur = :id
        ');
        $requete->execute(['id' => $id]);

        $requete2 = $pdo->prepare('
        SELECT titre
        FROM film
        INNER JOIN realisateur
        ON film.id_realisateur = realisateur.id_realisateur
        WHERE realisateur.id_realisateur = :id
        ');
        $requete2->execute(['id' => $id]);

        require 'view/detailRealisateur.php';
    }

    public function detailActeur($id){
        $pdo = Connect::seConnecter();
        $requete = $pdo->prepare('
        SELECT prenom_personne, nom_personne,date_naissance
        FROM personne
        INNER JOIN acteur
        ON personne.id_personne = acteur.id_personne
        WHERE acteur.id_acteur = :id
        ');
        $requete->execute(['id' => $id]);

        $requete2 = $pdo->prepare('
        SELECT titre
        FROM film
        INNER JOIN figurer
        ON film.id_film = figurer.id_film
        WHERE id_acteur = :id
        ');
        $requete2->execute(['id' => $id]);
        
        require 'view/detailActeur.php';
    }

    public function detailGenre($id){
        $pdo = Connect::seConnecter();
        $requete = $pdo->prepare('
        SELECT nom_genre
        FROM genre
        WHERE id_genre = :id
        ');
        $requete->execute(['id' => $id]);
        $requete2 = $pdo->prepare('
        SELECT titre
        FROM film
        INNER JOIN associer
        ON film.id_film = associer.id_film
        WHERE id_genre = :id
        ');
        $requete2->execute(['id' => $id]);
        require 'view/detailGenre.php';
    }

    public function detailRole($id){
        $pdo = Connect::seConnecter();
        $requete = $pdo->prepare('
        SELECT nom_personnage
        FROM role
        WHERE id_role = :id
        ');
        $requete->execute(['id' => $id]);

        $requete2 = $pdo->prepare('
        SELECT DISTINCT nom_personne, prenom_personne
        FROM personne
        INNER JOIN acteur
        ON personne.id_personne = acteur.id_personne
        INNER JOIN figurer
        ON acteur.id_acteur = figurer.id_acteur
        WHERE id_role = :id
        ');
        $requete2->execute(['id' => $id]);

        $requete3 = $pdo->prepare('
        SELECT titre
        FROM film
        INNER JOIN figurer
        ON film.id_film = figurer.id_film
        WHERE id_role = :id
        ');
        $requete3->execute(['id' => $id]);
        require 'view/detailRole.php';
    }

    public function ajoutRole($nomPersonnage){
        $pdo = Connect::seConnecter();
        $requete = $pdo->query('
        INSERT INTO role(nom_personnage)
        VALUES ("'.$nomPersonnage.'")
        ');
    }

    public function ajoutRealisateur($nomPersonne, $prenomPersonne, $sexe, $dateNaissance){
        $pdo = Connect::seConnecter();
        $requete = $pdo->query('
        INSERT INTO personne(nom_personne,prenom_personne,sexe,date_naissance)
        VALUES ("'.$nomPersonne.','.$prenomPersonne.','.$sexe.','.$dateNaissance.'")
        INSERT INTO realisateur(id_personne)
        SELECT id_personne
        FROM personne
        ');
    
    }


}