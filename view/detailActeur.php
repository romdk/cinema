<?php ob_start(); 
$acteur = $requete->fetch();
$films = $requete2->fetchAll();
?>

<p><?= $acteur['prenom_personne'].' '.$acteur['nom_personne'] ?></p>
<p>Née le <?= $acteur['date_naissance']?></p>
<p>a figurer dans les films suivants :</p>
<table>
    <tbody>
        <?php
            foreach($films as $film) { ?>
            <tr>
                <td><?= $film['titre'] ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<?php

$titre = "Details de l'acteur";
$titre_secondaire = "Details de l'acteur";
$contenu = ob_get_clean();
require 'view/template.php';
?>