<?php ob_start(); 
$realisateur = $requete->fetch();
$films = $requete2->fetchAll();
?>

<p><?= $realisateur['prenom_personne'].' '.$realisateur['nom_personne'] ?></p>
<p>Née le <?= $realisateur['date_naissance']?></p>
<p>a réaliser les films suivants :</p>
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

$titre = 'Details du Réalisateur';
$titre_secondaire = 'Details du Réalisateur';
$contenu = ob_get_clean();
require 'view/template.php';
?>