<?php ob_start() ?>

<p> Il y a <?= $requete->rowCount() ?> films</p>
<div id='listFilms'>
    <table class='table'>
        <thead>
            <tr>
                <th>TITRE</th>
                <th>ANNEE DE SORTIE</th>
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
</div>

<?php

$titre = 'Liste des films';
$titre_secondaire = 'Liste des films';
$contenu = ob_get_clean();
require 'view/template.php';
?>

