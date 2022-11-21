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
    <div class='searchbar'><input type="text" placeholder="Rechercher un film, un réalisateur, un acteur..."><i class="fa-solid fa-magnifying-glass"></i></div>
    
        <ul>
            <li><a href="index.php?action=listFilms">Films</a></li>
            <li><a href="index.php?action=listRealisateurs">Réalisateurs</a></li>
            <li><a href="index.php?action=listActeurs">Acteurs</a></li>
            <li><a href="index.php?action=listGenres">Genres</a></li>
            <li><a href="index.php?action=listRoles">Roles</a></li>
            <li><a href="admin.php"><i class="fa-solid fa-screwdriver-wrench"></i> Admin</a></li>
        </ul>
    </nav>
    <main>
        <div class='contenu'>
            <h2><?= $titre_secondaire ?></h2>
            <?= $contenu ?>
        </div>
    </main>
    <script src="public/script.js"></script>
</body>
</html>