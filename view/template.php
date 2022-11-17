<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titre ?></title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php?action=listFilms">Films</a></li>
            <li><a href="index.php?action=listRealisateurs">Réalisateurs</a></li>
            <li><a href="index.php?action=listActeurs">Acteurs</a></li>
            <li><a href="index.php?action=listGenres">Genres</a></li>
            <li><a href="index.php?action=listRoles">Roles</a></li>
        </ul>
    </nav>
    <main>
        <div>
            <h1>PDO Cinema</h1>
            <h2><?= $titre_secondaire ?></h2>
            <?= $contenu ?>
        </div>
    </main>
    
</body>
</html>