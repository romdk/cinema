
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="public/style.css">
    <title><?= $titre ?></title>
</head>
<body>
    <nav>
    <h1><i class="fa-solid fa-ticket-simple"></i><i class="fa-solid fa-film"></i>PDO Cinéma</h1>
    <div class='searchbar'>
        <input type="text" id="searchBar" onkeyup="affSuggestions()" onblur="masqSuggestions()" placeholder="Rechercher un film, un réalisateur, un acteur..."><i class="fa-solid fa-magnifying-glass"></i>
        <ul id='suggestions'>
        <?php 
            foreach($suggestionFilm->fetchAll() as $film) { ?>
                <li class='suggestion'><a href="index.php?action=detailFilm&id=<?= $film['id_film'] ?>"><?= $film['titre'] ?></a></li>
            <?php } ?>
        <?php 
            foreach($suggestionRealisateur->fetchAll() as $realisateur) { ?>
                <li class='suggestion'><a href="index.php?action=detailRealisateur&id=<?= $realisateur['id_realisateur'] ?>"><?= $realisateur['prenom_personne'].' '.$realisateur['nom_personne'] ?></a></li>
            <?php } ?>
        <?php 
            foreach($suggestionActeur->fetchAll() as $acteur) { ?>
                <li class='suggestion'><a href="index.php?action=detailActeur&id=<?= $acteur['id_acteur'] ?>"><?= $acteur['prenom_personne'].' '.$acteur['nom_personne'] ?></a></li>
            <?php } ?>
            
        </ul>



    </div>
    
        <ul id='rubriques'>
            <li><a href="index.php?action=listFilms">Films</a></li>
            <li><a href="index.php?action=listRealisateurs">Réalisateurs</a></li>
            <li><a href="index.php?action=listActeurs">Acteurs</a></li>
            <li><a href="index.php?action=listGenres">Genres</a></li>
            <li><a href="index.php?action=listRoles">Roles</a></li>
            <li><a href="index.php?action=afficherAdmin"><i class="fa-solid fa-screwdriver-wrench"></i> Admin</a></li>
        </ul>
    </nav>
    <main>
        <div class='contenu'>
            <h2><?= $titre_secondaire ?></h2>
            <?= $contenu ?>
        </div>
    </main>
    <script src="public/notes.js"></script>
    <script src="public/searchbar.js"></script>
</body>
</html>