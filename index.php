<?php

use Controller\CinemaController;

spl_autoload_register(function($class_name) {
    include $class_name.'.php';
});

$ctrlCinema = new CinemaController();
$id = (isset($_GET['id'])) ? $_GET['id'] : null;

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
        case 'ajoutRole' : $ctrlCinema->ajoutRole(); break;
        case 'ajoutCasting' : $ctrlCinema->ajoutCasting(); break;
        case 'ajoutRealisateur' : $ctrlCinema->ajoutRealisateur(); break;
        case 'ajoutActeur' : $ctrlCinema->ajoutActeur(); break;
        case 'ajoutFilm' : $ctrlCinema->ajoutFilm(); break;
        case 'ajoutLike' : $ctrlCinema->ajoutLike($id); break;
    }
}

?>
