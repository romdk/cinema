<?php ob_start(); 
$realisateur = $requete->fetch();
$films = $requete2->fetchAll();
?>
<div id='detailRealisateur'>
    <div class='photo'>
        <img src="<?= $realisateur['photo'] ?>" alt="photo de <?= $realisateur['prenom_personne'].' '.$realisateur['nom_personne']?>">
    </div>
    <div class='infos'>
        <p><?= $realisateur['prenom_personne'].' '.$realisateur['nom_personne'] ?></p>
        <p>Née le <?= $realisateur['date_naissance']?></p>
        <p>A réaliser les films suivants :</p>
        <table>
            <tbody>
                <?php
                    foreach($films as $film) { ?>
                    <tr>
                        <td><a href="index.php?action=detailFilm&id=<?= $film['id_film'] ?>"><?= $film['titre'] ?></a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<?php

$titre = 'Details du Réalisateur';
$titre_secondaire = 'Details du Réalisateur';
$contenu = ob_get_clean();
require 'view/template.php';
?>