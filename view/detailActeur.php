<?php ob_start(); 
$acteur = $requete->fetch();
$films = $requete2->fetchAll();
?>

<div id='detailActeur'>
    <div class='photo'>
        <img src="<?= $acteur['photo'] ?>" alt="photo de <?= $acteur['prenom_personne'].' '.$acteur['nom_personne']?>">
    </div>
    <div class='infos'>
        <p><?= $acteur['prenom_personne'].' '.$acteur['nom_personne'] ?></p>
        <p>Née le <?= $acteur['date_naissance']?></p>
        <p>a figurer dans les films suivants :</p>
        <table>
            <tbody>
                <?php
                    foreach($films as $film) { ?>
                    <tr>
                        <td><a href="index.php?action=detailFilm&id=<?= $film['id_film'] ?>"><?= $film['titre'] ?><a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<?php

$titre = "Details de l'acteur";
$titre_secondaire = "Details de l'acteur";
$contenu = ob_get_clean();
require 'view/template.php';
?>