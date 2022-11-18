<?php

use Controller\CinemaController;

spl_autoload_register(function($class_name) {
    include $class_name.'.php';
});

$ctrlCinema = new CinemaController();
$id = (isset($_GET["id"])) ? $_GET["id"] : null;

if(isset($_GET['action'])){
    switch ($_GET['action']){
        case 'listFilms' : $ctrlCinema->listFilms(); break;
        case 'listRealisateurs' : $ctrlCinema->listRealisateurs(); break;
        case 'listActeurs' : $ctrlCinema->listActeurs(); break;
        case 'listGenres' : $ctrlCinema->listGenres(); break;
        case 'listRoles' : $ctrlCinema->listRoles(); break;
        case 'detailFilm' : $ctrlCinema->detailFilm($id); break;
        case 'detailRealisateur' : $ctrlCinema->detailRealisateur($id); break;
        case 'detailActeur' : $ctrlCinema->detailActeur($id); break;
        case 'detailGenre' : $ctrlCinema->detailGenre($id); break;
        case 'detailRole' : $ctrlCinema->detailRole($id); break;

        case 'ajoutRole' : 
            if(isset($_POST['ajouterRole'])){
            $nomPersonnage =filter_input(INPUT_POST,'nom_personnage',FILTER_SANITIZE_SPECIAL_CHARS);
            if($nomPersonnage){
            $ctrlCinema->ajoutRole($nomPersonnage);}}
            $ctrlCinema->listRoles(); 
        break;

        case 'ajoutRealisateur' : 
            if(isset($_POST['ajouterRealisateur'])){
            $nomPersonne =filter_input(INPUT_POST,'nom_personne',FILTER_SANITIZE_SPECIAL_CHARS);
            $prenomPersonne =filter_input(INPUT_POST,'prenom_personne',FILTER_SANITIZE_SPECIAL_CHARS);
            $sexe =filter_input(INPUT_POST,'sexe',FILTER_SANITIZE_SPECIAL_CHARS);
            $dateNaissance =filter_input(INPUT_POST,'date_naissance',FILTER_SANITIZE_SPECIAL_CHARS);
            if($nomPersonne && $prenomPersonne && $sexe && $dateNaissance){
            $ctrlCinema->ajoutPersonne($nomPersonne,$prenomPersonne,$sexe,$dateNaissance);
            $ctrlCinema->ajoutRealisateur();}}
            $ctrlCinema->listRealisateurs(); 
        break;

        case 'ajoutActeur' : 
            if(isset($_POST['ajouterActeur'])){
            $nomPersonne =filter_input(INPUT_POST,'nom_personne',FILTER_SANITIZE_SPECIAL_CHARS);
            $prenomPersonne =filter_input(INPUT_POST,'prenom_personne',FILTER_SANITIZE_SPECIAL_CHARS);
            $sexe =filter_input(INPUT_POST,'sexe',FILTER_SANITIZE_SPECIAL_CHARS);
            $dateNaissance =filter_input(INPUT_POST,'date_naissance',FILTER_SANITIZE_SPECIAL_CHARS);
            if($nomPersonne && $prenomPersonne && $sexe && $dateNaissance){
            $ctrlCinema->ajoutPersonne($nomPersonne,$prenomPersonne,$sexe,$dateNaissance);
            $ctrlCinema->ajoutActeur();}}
            $ctrlCinema->listActeurs(); 
        break;
        case 'ajoutFilm' : $ctrlCinema->ajoutFilm(); break;
    }
}

?>
