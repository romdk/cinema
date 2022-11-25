<?php ob_start() ?>

<p><?= $requete->rowCount() ?> films</p>
<div id='listFilms'>
    <?php
        foreach($requete->fetchAll() as $film) { ?>
        
            <a class='card' href="index.php?action=detailFilm&id=<?= $film['id_film'] ?>">
                <div class="affiche">
                    <img src="<?= $film['affiche']?>" alt="affiche du film <?= $film['titre'] ?>">
                </div>
                <div class="infos">
                    <p><?=$film['titre']?></p>
                    <p><?=$film['annee_sortie']?></p>
                </div>
                <div class="overlay"><i class="fa-solid fa-circle-info"></i></div>
            </a>
        
    <?php } ?>
</div>

<?php

$titre = 'Liste des films';
$titre_secondaire = 'Liste des films';
$contenu = ob_get_clean();
require 'view/template.php';
?>

