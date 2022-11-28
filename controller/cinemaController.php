<?php

namespace Controller;
use Model\Connect;

class CinemaController {
    public function listFilms(){
        unset($_SESSION["message"]);
        $pdo = Connect::seConnecter();

        $suggestionFilm = $pdo->query('
        SELECT titre, id_film, affiche, nom_personne, prenom_personne, annee_sortie
        FROM film
        INNER JOIN realisateur
        ON film.id_realisateur = realisateur.id_realisateur
        INNER JOIN personne
        ON realisateur.id_personne = personne.id_personne
        ORDER BY titre ASC
        ');

        $suggestionRealisateur = $pdo->query('
        SELECT nom_personne,prenom_personne,id_realisateur,photo,sexe
        FROM realisateur
        INNER JOIN personne
        ON personne.id_personne = realisateur.id_personne
        ORDER BY prenom_personne ASC
        ');

        $suggestionActeur = $pdo->query('
        SELECT nom_personne,prenom_personne,id_acteur,photo,sexe
        FROM acteur
        INNER JOIN personne
        ON personne.id_personne = acteur.id_personne
        ORDER BY prenom_personne ASC
        ');

        $requete = $pdo->query('
        SELECT titre,annee_sortie,affiche,id_film
        FROM film
        ORDER BY titre ASC
        ');
        require 'view/listFilms.php';
    }

    public function listRealisateurs(){
        unset($_SESSION["message"]);
        $pdo = Connect::seConnecter();

        $suggestionFilm = $pdo->query('
        SELECT titre, id_film, affiche, nom_personne, prenom_personne, annee_sortie
        FROM film
        INNER JOIN realisateur
        ON film.id_realisateur = realisateur.id_realisateur
        INNER JOIN personne
        ON realisateur.id_personne = personne.id_personne
        ORDER BY titre ASC
        ');

        $suggestionRealisateur = $pdo->query('
        SELECT nom_personne,prenom_personne,id_realisateur,photo,sexe
        FROM realisateur
        INNER JOIN personne
        ON personne.id_personne = realisateur.id_personne
        ORDER BY prenom_personne ASC
        ');

        $suggestionActeur = $pdo->query('
        SELECT nom_personne,prenom_personne,id_acteur,photo,sexe
        FROM acteur
        INNER JOIN personne
        ON personne.id_personne = acteur.id_personne
        ORDER BY prenom_personne ASC
        ');

        $requete = $pdo->query('
        SELECT prenom_personne, nom_personne,id_realisateur,photo
        FROM personne
        INNER JOIN realisateur
        ON personne.id_personne = realisateur.id_personne
        ORDER BY prenom_personne ASC
        ');
        require 'view/listRealisateur.php';
    }

    public function listActeurs(){
        unset($_SESSION["message"]);
        $pdo = Connect::seConnecter();

        $suggestionFilm = $pdo->query('
        SELECT titre, id_film, affiche, nom_personne, prenom_personne, annee_sortie
        FROM film
        INNER JOIN realisateur
        ON film.id_realisateur = realisateur.id_realisateur
        INNER JOIN personne
        ON realisateur.id_personne = personne.id_personne
        ORDER BY titre ASC
        ');

        $suggestionRealisateur = $pdo->query('
        SELECT nom_personne,prenom_personne,id_realisateur,photo,sexe
        FROM realisateur
        INNER JOIN personne
        ON personne.id_personne = realisateur.id_personne
        ORDER BY prenom_personne ASC
        ');

        $suggestionActeur = $pdo->query('
        SELECT nom_personne,prenom_personne,id_acteur,photo,sexe
        FROM acteur
        INNER JOIN personne
        ON personne.id_personne = acteur.id_personne
        ORDER BY prenom_personne ASC
        ');

        $requete = $pdo->query('
        SELECT prenom_personne, nom_personne,id_acteur,photo
        FROM personne
        INNER JOIN acteur
        ON personne.id_personne = acteur.id_personne
        ORDER BY prenom_personne ASC
        ');
        require 'view/listActeurs.php';
    }

    public function listGenres(){
        unset($_SESSION["message"]);
        $pdo = Connect::seConnecter();

        $suggestionFilm = $pdo->query('
        SELECT titre, id_film, affiche, nom_personne, prenom_personne, annee_sortie
        FROM film
        INNER JOIN realisateur
        ON film.id_realisateur = realisateur.id_realisateur
        INNER JOIN personne
        ON realisateur.id_personne = personne.id_personne
        ORDER BY titre ASC
        ');

        $suggestionRealisateur = $pdo->query('
        SELECT nom_personne,prenom_personne,id_realisateur,photo,sexe
        FROM realisateur
        INNER JOIN personne
        ON personne.id_personne = realisateur.id_personne
        ORDER BY prenom_personne ASC
        ');

        $suggestionActeur = $pdo->query('
        SELECT nom_personne,prenom_personne,id_acteur,photo,sexe
        FROM acteur
        INNER JOIN personne
        ON personne.id_personne = acteur.id_personne
        ORDER BY prenom_personne ASC
        ');

        $requete = $pdo->query('
        SELECT nom_genre, id_genre
        FROM genre
        ORDER BY nom_genre ASC
        ');
        require 'view/listGenres.php';
    }

    public function listRoles(){
        unset($_SESSION["message"]);
        $pdo = Connect::seConnecter();

        $suggestionFilm = $pdo->query('
        SELECT titre, id_film, affiche, nom_personne, prenom_personne, annee_sortie
        FROM film
        INNER JOIN realisateur
        ON film.id_realisateur = realisateur.id_realisateur
        INNER JOIN personne
        ON realisateur.id_personne = personne.id_personne
        ORDER BY titre ASC
        ');

        $suggestionRealisateur = $pdo->query('
        SELECT nom_personne,prenom_personne,id_realisateur,photo,sexe
        FROM realisateur
        INNER JOIN personne
        ON personne.id_personne = realisateur.id_personne
        ORDER BY prenom_personne ASC
        ');

        $suggestionActeur = $pdo->query('
        SELECT nom_personne,prenom_personne,id_acteur,photo,sexe
        FROM acteur
        INNER JOIN personne
        ON personne.id_personne = acteur.id_personne
        ORDER BY prenom_personne ASC
        ');

        $requete = $pdo->query('
        SELECT nom_personnage,id_role
        FROM role
        ORDER BY nom_personnage ASC
        ');
        require 'view/listRoles.php';
    }

    public function detailFilm($id){
        unset($_SESSION["message"]);
        $pdo = Connect::seConnecter();

        $suggestionFilm = $pdo->query('
        SELECT titre, id_film, affiche, nom_personne, prenom_personne, annee_sortie
        FROM film
        INNER JOIN realisateur
        ON film.id_realisateur = realisateur.id_realisateur
        INNER JOIN personne
        ON realisateur.id_personne = personne.id_personne
        ORDER BY titre ASC
        ');

        $suggestionRealisateur = $pdo->query('
        SELECT nom_personne,prenom_personne,id_realisateur,photo,sexe
        FROM realisateur
        INNER JOIN personne
        ON personne.id_personne = realisateur.id_personne
        ORDER BY prenom_personne ASC
        ');

        $suggestionActeur = $pdo->query('
        SELECT nom_personne,prenom_personne,id_acteur,photo,sexe
        FROM acteur
        INNER JOIN personne
        ON personne.id_personne = acteur.id_personne
        ORDER BY prenom_personne ASC
        ');

        $requete = $pdo->prepare('
        SELECT titre, annee_sortie, duree, synopsis, note, affiche, prenom_personne, nom_personne, nom_genre,genre.id_genre, likes,film.id_realisateur
        FROM film
        INNER JOIN realisateur
        ON film.id_realisateur = realisateur.id_realisateur
        INNER JOIN personne
        ON realisateur.id_personne = personne.id_personne
        INNER JOIN associer
        ON film.id_film = associer.id_film
        INNER JOIN genre
        ON associer.id_genre = genre.id_genre
        WHERE film.id_film = :id
        ');
        $requete->execute(['id' => $id]);

        $requete2 = $pdo->prepare('
        SELECT nom_personne, prenom_personne,acteur.id_acteur
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
        unset($_SESSION["message"]);
        $pdo = Connect::seConnecter();

        $suggestionFilm = $pdo->query('
        SELECT titre, id_film, affiche, nom_personne, prenom_personne, annee_sortie
        FROM film
        INNER JOIN realisateur
        ON film.id_realisateur = realisateur.id_realisateur
        INNER JOIN personne
        ON realisateur.id_personne = personne.id_personne
        ORDER BY titre ASC
        ');

        $suggestionRealisateur = $pdo->query('
        SELECT nom_personne,prenom_personne,id_realisateur,photo,sexe
        FROM realisateur
        INNER JOIN personne
        ON personne.id_personne = realisateur.id_personne
        ORDER BY prenom_personne ASC
        ');

        $suggestionActeur = $pdo->query('
        SELECT nom_personne,prenom_personne,id_acteur,photo,sexe
        FROM acteur
        INNER JOIN personne
        ON personne.id_personne = acteur.id_personne
        ORDER BY prenom_personne ASC
        ');

        $requete = $pdo->prepare('
        SELECT prenom_personne, nom_personne,date_naissance,photo
        FROM personne
        INNER JOIN realisateur
        ON personne.id_personne = realisateur.id_personne
        WHERE realisateur.id_realisateur = :id
        ');
        $requete->execute(['id' => $id]);

        $requete2 = $pdo->prepare('
        SELECT titre, id_film
        FROM film
        INNER JOIN realisateur
        ON film.id_realisateur = realisateur.id_realisateur
        WHERE realisateur.id_realisateur = :id
        ');
        $requete2->execute(['id' => $id]);

        require 'view/detailRealisateur.php';
    }

    public function detailActeur($id){
        unset($_SESSION["message"]);
        $pdo = Connect::seConnecter();

        $suggestionFilm = $pdo->query('
        SELECT titre, id_film, affiche, nom_personne, prenom_personne, annee_sortie
        FROM film
        INNER JOIN realisateur
        ON film.id_realisateur = realisateur.id_realisateur
        INNER JOIN personne
        ON realisateur.id_personne = personne.id_personne
        ORDER BY titre ASC
        ');

        $suggestionRealisateur = $pdo->query('
        SELECT nom_personne,prenom_personne,id_realisateur,photo,sexe
        FROM realisateur
        INNER JOIN personne
        ON personne.id_personne = realisateur.id_personne
        ORDER BY prenom_personne ASC
        ');

        $suggestionActeur = $pdo->query('
        SELECT nom_personne,prenom_personne,id_acteur,photo,sexe
        FROM acteur
        INNER JOIN personne
        ON personne.id_personne = acteur.id_personne
        ORDER BY prenom_personne ASC
        ');

        $requete = $pdo->prepare('
        SELECT prenom_personne, nom_personne,date_naissance,photo
        FROM personne
        INNER JOIN acteur
        ON personne.id_personne = acteur.id_personne
        WHERE acteur.id_acteur = :id
        ');
        $requete->execute(['id' => $id]);

        $requete2 = $pdo->prepare('
        SELECT titre,film.id_film
        FROM film
        INNER JOIN figurer
        ON film.id_film = figurer.id_film
        WHERE id_acteur = :id
        ');
        $requete2->execute(['id' => $id]);
        
        require 'view/detailActeur.php';
    }

    public function detailGenre($id){
        unset($_SESSION["message"]);
        $pdo = Connect::seConnecter();

        $suggestionFilm = $pdo->query('
        SELECT titre, id_film, affiche, nom_personne, prenom_personne, annee_sortie
        FROM film
        INNER JOIN realisateur
        ON film.id_realisateur = realisateur.id_realisateur
        INNER JOIN personne
        ON realisateur.id_personne = personne.id_personne
        ORDER BY titre ASC
        ');

        $suggestionRealisateur = $pdo->query('
        SELECT nom_personne,prenom_personne,id_realisateur,photo,sexe
        FROM realisateur
        INNER JOIN personne
        ON personne.id_personne = realisateur.id_personne
        ORDER BY prenom_personne ASC
        ');

        $suggestionActeur = $pdo->query('
        SELECT nom_personne,prenom_personne,id_acteur,photo,sexe
        FROM acteur
        INNER JOIN personne
        ON personne.id_personne = acteur.id_personne
        ORDER BY prenom_personne ASC
        ');

        $requete = $pdo->prepare('
        SELECT nom_genre
        FROM genre
        WHERE id_genre = :id
        ');
        $requete->execute(['id' => $id]);
        $requete2 = $pdo->prepare('
        SELECT titre, film.id_film
        FROM film
        INNER JOIN associer
        ON film.id_film = associer.id_film
        WHERE id_genre = :id
        ');
        $requete2->execute(['id' => $id]);
        require 'view/detailGenre.php';
    }

    public function detailRole($id){
        unset($_SESSION["message"]);
        $pdo = Connect::seConnecter();

        $suggestionFilm = $pdo->query('
        SELECT titre, id_film, affiche, nom_personne, prenom_personne, annee_sortie
        FROM film
        INNER JOIN realisateur
        ON film.id_realisateur = realisateur.id_realisateur
        INNER JOIN personne
        ON realisateur.id_personne = personne.id_personne
        ORDER BY titre ASC
        ');

        $suggestionRealisateur = $pdo->query('
        SELECT nom_personne,prenom_personne,id_realisateur,photo,sexe
        FROM realisateur
        INNER JOIN personne
        ON personne.id_personne = realisateur.id_personne
        ORDER BY prenom_personne ASC
        ');

        $suggestionActeur = $pdo->query('
        SELECT nom_personne,prenom_personne,id_acteur,photo,sexe
        FROM acteur
        INNER JOIN personne
        ON personne.id_personne = acteur.id_personne
        ORDER BY prenom_personne ASC
        ');

        $requete = $pdo->prepare('
        SELECT nom_personnage
        FROM role
        WHERE id_role = :id
        ');
        $requete->execute(['id' => $id]);

        $requete2 = $pdo->prepare('
        SELECT DISTINCT nom_personne, prenom_personne, acteur.id_acteur
        FROM personne
        INNER JOIN acteur
        ON personne.id_personne = acteur.id_personne
        INNER JOIN figurer
        ON acteur.id_acteur = figurer.id_acteur
        WHERE id_role = :id
        ');
        $requete2->execute(['id' => $id]);

        $requete3 = $pdo->prepare('
        SELECT titre, film.id_film
        FROM film
        INNER JOIN figurer
        ON film.id_film = figurer.id_film
        WHERE id_role = :id
        ');
        $requete3->execute(['id' => $id]);
        require 'view/detailRole.php';
    }

    public function ajoutRole(){
        if(isset($_POST['ajouterRole'])){
            $nomPersonnage =filter_input(INPUT_POST,'nom_personnage',FILTER_SANITIZE_SPECIAL_CHARS);

            if($nomPersonnage){
                $pdo = Connect::seConnecter();
                $requete = $pdo->query('
                INSERT INTO role(nom_personnage)
                VALUES ("'.$nomPersonnage.'")
                ');
                header("Location:index.php?action=afficherAdmin");
                $_SESSION['message'] = "<div class='message'>Rôle ajouté</div>";
            }
            else{
                header("Location:index.php?action=afficherAdmin");
                $_SESSION['message'] = "<div class='erreur'>Formulaire incomplet</div>";
            }
        }        
    }

    public function ajoutCasting(){
        if(isset($_POST['ajouterCasting'])){
            $film = filter_input(INPUT_POST,'film',FILTER_SANITIZE_SPECIAL_CHARS);
            $personnage = filter_input(INPUT_POST,'personnage',FILTER_SANITIZE_SPECIAL_CHARS);
            $acteurs = filter_input(INPUT_POST,'acteur',FILTER_DEFAULT,FILTER_FORCE_ARRAY);

            if($acteurs){

                foreach($acteurs as $acteur){
                    $pdo = Connect::seConnecter();

                    $requete = $pdo->query('
                    INSERT INTO figurer(id_film,id_acteur,id_role)
                    VALUES("'.$film.'","'.$acteur.'","'.$personnage.'")
                    ');
                    header("Location:index.php?action=afficherAdmin");
                    $_SESSION['message'] = "<div class='message'>Casting ajouté</div>";
                }
            }
            else{
                header("Location:index.php?action=afficherAdmin");
                $_SESSION['message'] = "<div class='erreur'>Formulaire incomplet</div>";
            }
        }
    }

    public function ajoutRealisateur(){
        if(isset($_POST['ajouterRealisateur'])){
            $nomPersonne =filter_input(INPUT_POST,'nom_personne',FILTER_SANITIZE_SPECIAL_CHARS);
            $prenomPersonne =filter_input(INPUT_POST,'prenom_personne',FILTER_SANITIZE_SPECIAL_CHARS);
            $sexe =filter_input(INPUT_POST,'sexe',FILTER_SANITIZE_SPECIAL_CHARS);
            $dateNaissance =filter_input(INPUT_POST,'date_naissance',FILTER_SANITIZE_SPECIAL_CHARS);
            $photo =filter_input(INPUT_POST,'photo',FILTER_SANITIZE_SPECIAL_CHARS);


            if($nomPersonne && $prenomPersonne && $sexe && $dateNaissance && $photo){                
                $pdo = Connect::seConnecter();
                
                $requete = $pdo->query('
                INSERT INTO personne(nom_personne,prenom_personne,sexe,date_naissance,photo)
                VALUES ("'.$nomPersonne.'","'.$prenomPersonne.'","'.$sexe.'","'.$dateNaissance.'","'.$photo.'")
                ');
                
                $id = $pdo->lastInsertId();
                $requete2 = $pdo->query('
                INSERT INTO realisateur(id_personne)
                VALUES("'.$id.'") 
                ');
                header("Location:index.php?action=afficherAdmin");
                $_SESSION['message'] = "<div class='message'>Réalisateur ajouté</div>";
            }
            else{
                header("Location:index.php?action=afficherAdmin");
                $_SESSION['message'] = "<div class='erreur'>Formulaire incomplet</div>";
            }
        }
    }

    public function ajoutActeur(){
        if(isset($_POST['ajouterActeur'])){
            $nomPersonne =filter_input(INPUT_POST,'nom_personne',FILTER_SANITIZE_SPECIAL_CHARS);
            $prenomPersonne =filter_input(INPUT_POST,'prenom_personne',FILTER_SANITIZE_SPECIAL_CHARS);
            $sexe =filter_input(INPUT_POST,'sexe',FILTER_SANITIZE_SPECIAL_CHARS);
            $dateNaissance =filter_input(INPUT_POST,'date_naissance',FILTER_SANITIZE_SPECIAL_CHARS);
            $photo =filter_input(INPUT_POST,'photo',FILTER_SANITIZE_SPECIAL_CHARS);

            if($nomPersonne && $prenomPersonne && $sexe && $dateNaissance && $photo){
                $pdo = Connect::seConnecter();

                $requete = $pdo->query('
                INSERT INTO personne(nom_personne,prenom_personne,sexe,date_naissance,photo)
                VALUES ("'.$nomPersonne.'","'.$prenomPersonne.'","'.$sexe.'","'.$dateNaissance.'","'.$photo.'")
                ');

                $id = $pdo->lastInsertId();
                $requete2 = $pdo->query('
                INSERT INTO acteur(id_personne)
                VALUES("'.$id.'") 
                '); 
                header("Location:index.php?action=afficherAdmin");
                $_SESSION['message'] = "<div class='message'>Acteur ajouté</div>";
            }
            else{
                header("Location:index.php?action=afficherAdmin");
                $_SESSION['message'] = "<div class='erreur'>Formulaire incomplet</div>";
            }
        }
    }

    public function ajoutFilm(){
        if(isset($_POST['ajouterFilm'])){
            $titre =filter_input(INPUT_POST,'titre',FILTER_SANITIZE_SPECIAL_CHARS);
            $anneeSortie =filter_input(INPUT_POST,'annee_sortie',FILTER_SANITIZE_SPECIAL_CHARS);
            $duree =filter_input(INPUT_POST,'duree',FILTER_SANITIZE_SPECIAL_CHARS);
            $synopsis =filter_input(INPUT_POST,'synopsis',FILTER_SANITIZE_SPECIAL_CHARS);
            $note =filter_input(INPUT_POST,'note',FILTER_SANITIZE_SPECIAL_CHARS);
            $affiche =filter_input(INPUT_POST,'affiche',FILTER_SANITIZE_SPECIAL_CHARS);
            $genres =filter_input(INPUT_POST,'genre',FILTER_DEFAULT,FILTER_FORCE_ARRAY);
            $idRealisateur =filter_input(INPUT_POST,'realisateur',FILTER_VALIDATE_INT);
                   
        
            if($titre && $anneeSortie && $duree && $synopsis && $affiche && $genres){
                $pdo = Connect::seConnecter();
                $requete = $pdo->query('
                INSERT INTO film(titre,annee_sortie,duree,synopsis,note,affiche,id_realisateur)
                VALUES("'.$titre.'","'.$anneeSortie.'","'.$duree.'","'.$synopsis.'","'.$note.'","'.$affiche.'","'.$idRealisateur.'")
                ');
                
                $id = $pdo->lastInsertId();
                foreach($genres as $idGenre){
            
                    $requete2 = $pdo->query('
                    INSERT INTO associer(id_film)
                    VALUES("'.$id.'")        
                    ');
            
                    $requete3 = $pdo->query('
                    UPDATE associer
                    SET id_genre = '.$idGenre.'
                    WHERE id_genre IS NULL
                    ');
                }
                header("Location:index.php?action=afficherAdmin");
                $_SESSION['message'] = "<div class='message'>Film ajouté</div>";
            }
            else{
                header("Location:index.php?action=afficherAdmin");
                $_SESSION['message'] = "<div class='erreur'>Formulaire incomplet</div>";
            }
        }
    }

    public function ajoutLike($id){
        if(!isset($_SESSION['like'][$id])){
            $pdo = Connect::seConnecter();
            $requete = $pdo->prepare('
            UPDATE film
            SET likes = likes+1
            WHERE film.id_film = :id
            ');
            $requete->execute(['id' => $id]);
            $_SESSION['like'][$id] = true;
        }
        
        else if($_SESSION['like'][$id] = true){
            $pdo = Connect::seConnecter();
            $requete = $pdo->prepare('
            UPDATE film
            SET likes = likes-1
            WHERE film.id_film = :id
            ');
            $requete->execute(['id' => $id]);
            unset($_SESSION['like'][$id]);
        }
        header("Location:index.php?action=detailFilm&id=$id");
    }

    public function afficherAdmin(){
        $pdo = Connect::seConnecter();
        $suggestionFilm = $pdo->query('
        SELECT titre, id_film, affiche, nom_personne, prenom_personne, annee_sortie
        FROM film
        INNER JOIN realisateur
        ON film.id_realisateur = realisateur.id_realisateur
        INNER JOIN personne
        ON realisateur.id_personne = personne.id_personne
        ORDER BY titre ASC
        ');

        $suggestionRealisateur = $pdo->query('
        SELECT nom_personne,prenom_personne,id_realisateur,photo,sexe
        FROM realisateur
        INNER JOIN personne
        ON personne.id_personne = realisateur.id_personne
        ORDER BY prenom_personne ASC
        ');

        $suggestionActeur = $pdo->query('
        SELECT nom_personne,prenom_personne,id_acteur,photo,sexe
        FROM acteur
        INNER JOIN personne
        ON personne.id_personne = acteur.id_personne
        ORDER BY prenom_personne ASC
        ');
        
        $realisateurs = $pdo->query('
        SELECT nom_personne, prenom_personne, id_realisateur
        FROM personne
        INNER JOIN realisateur
        ON personne.id_personne = realisateur.id_personne
        ');

        $genres = $pdo->query('
        SELECT nom_genre, id_genre
        FROM genre
        ');

        $films = $pdo->query('
        SELECT titre, id_film
        FROM film
        ');

        $personnages = $pdo->query('
        SELECT nom_personnage, id_role
        FROM role
        ');

        $acteurs = $pdo->query('
        SELECT nom_personne, prenom_personne, id_acteur
        FROM personne
        INNER JOIN acteur
        ON personne.id_personne = acteur.id_personne
        ');
        require 'view/admin.php';
    }
}