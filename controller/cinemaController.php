<?php

namespace Controller;
use Model\Connect;

class CinemaController {
    public function listFilms(){
        $pdo = Connect::seConnecter();
        $requete = $pdo->query('
        SELECT titre, annee_sortie
        FROM film
        ');
        require 'view/listFilms.php';
    }

    public function listRealisateurs(){
        $pdo = Connect::seConnecter();
        $requete = $pdo->query('
        SELECT prenom_personne, nom_personne
        FROM personne
        INNER JOIN realisateur
        ON personne.id_personne = realisateur.id_personne
        ');
        require 'view/listRealisateur.php';
    }

    public function listActeurs(){
        $pdo = Connect::seConnecter();
        $requete = $pdo->query('
        SELECT prenom_personne, nom_personne
        FROM personne
        INNER JOIN acteur
        ON personne.id_personne = acteur.id_personne
        ');
        require 'view/listActeurs.php';
    }

    public function listGenres(){
        $pdo = Connect::seConnecter();
        $requete = $pdo->query('
        SELECT nom_genre
        FROM genre
        ');
        require 'view/listGenres.php';
    }

    public function listRoles(){
        $pdo = Connect::seConnecter();
        $requete = $pdo->query('
        SELECT nom_personnage
        FROM role
        ');
        require 'view/listRoles.php';
    }
}