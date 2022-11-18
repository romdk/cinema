<?php ob_start() ?>

<p> Il y a <?= $requete->rowCount() ?> films</p>

<table>
    <thead>
        <tr>
            <th>TITRE</th>
            <th>ANNEE SORTIE</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($requete->fetchAll() as $film) { ?>
            <tr>
                <td><a href="index.php?action=detailFilm&id=<?= $film['id_film'] ?>"><?= $film['titre'] ?></a></td>
                <td><?= $film['annee_sortie'] ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>


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

<?php

$titre = 'Liste des films';
$titre_secondaire = 'Liste des films';
$contenu = ob_get_clean();
require 'view/template.php';
?>

