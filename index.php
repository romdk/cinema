<?php

use Controller\CinemaController;

spl_autoload_register(function($class_name) {
    include $clann_name.'.php';
});

$ctrlCinema = new CinemaController();

if(isset($_GET['action'])){
    switch ($_GET['action']){
        case 'listFilms' : $ctrlCinema->listFilms(); break;
        case 'listRealisateurs' : $ctrlCinema->listRealisateurs(); break;
        case 'listActeurs' : $ctrlCinema->listActeurs(); break;
        case 'listGenres' : $ctrlCinema->listGenres(); break;
        case 'listRoles' : $ctrlCinema->listRoles(); break;
    }
}

