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
    <title>Admin</title>
</head>
<body>
    <nav>
        <h1><i class="fa-solid fa-ticket-simple"></i><i class="fa-solid fa-film"></i>PDO Cinéma</h1>
            <ul>
                <li><a href="index.php?action=listFilms"><i class="fa-solid fa-caret-left"></i></i> retour</a></li>
            </ul>
        </nav>
    <main>

<div class='adminForm'>
<h4>Ajouter un film</h4>

<form action="index.php?action=ajoutFilm" method="post">
    <div>
        <label>
            Titre:
            <input type="text" name="titre">
        </label>
    </div>
    <div>
        <label>
            Année de sortie:
            <input type="text" name="annee_sortie">
        </label>
    </div>
    <div>
        <label>
            Durée(minutes):
            <input type="text" name="duree">
        </label>
    </div>
    <div>
        <label>
           Synopsis:
            <textarea name="synopsis"></textarea>
        </label>
    </div>
    <div>
        <label>
            Note:
            <select name="note">
                <option>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </label>
    </div>
    <div>
        <label>
            Affiche:
            <input type="text" name="affiche" placeholder="Inserer url de l'affiche">
        </label>
    </div>
    <div>
        <input type="submit" name="ajouterFilm" value="Ajouter le film" >
    </div>
</form>
</div>

<div class='adminForm'>
<h4>Ajouter un réalisateur</h4>

<form action="index.php?action=ajoutRealisateur" method="post">
    <div>
        <label>
            Nom:
            <input type="text" name="nom_personne">
        </label>
    </div>
    <div>
        <label>
            Prenom:
            <input type="text" name="prenom_personne">
        </label>
    </div>
    <div>
        <label>
            sexe:
            <select name="sexe">
                <option>Homme</option>
                <option>Femme</option>
            </select>
        </label>
    </div>
    <div>
        <label>
            date:
            <input type="date" name="date_naissance">
        </label>
    </div>
    <div>
    <input type="submit" name="ajouterRealisateur" value="Ajouter le realisateur" >
    </div>
</form>
</div>

<div class='adminForm'>
<h4>Ajouter un acteur</h4>

<form action="index.php?action=ajoutActeur" method="post">
    <div>
        <label>
            Nom:
            <input type="text" name="nom_personne">
        </label>
    </div>
    <div>
        <label>
            Prenom:
            <input type="text" name="prenom_personne">
        </label>
    </div>
    <div>
        <label>
            sexe:
            <select name="sexe">
                <option>Homme</option>
                <option>Femme</option>
            </select>
        </label>
    </div>
    <div>
        <label>
            date:
            <input type="date" name="date_naissance">
        </label>
    </div>
    <div>
    <input type="submit" name="ajouterActeur" value="Ajouter l'acteur" >
    </div>
</form>
</div>

<div class='adminForm'>
<h4>Ajouter un rôle</h4>

<form action="index.php?action=ajoutRole" method="post">
        <label>
            Nom du personnage :
            <input type="text" name="nom_personnage">
        </label>
        <input type="submit" name="ajouterRole" value="Ajouter le role" >
</form>
</div>
</main>
    
</body>
</html>

