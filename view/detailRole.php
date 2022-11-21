<?php ob_start(); 
$role = $requete->fetch();
$acteurs = $requete2->fetchAll();
$films = $requete3->fetchAll();
?>
<div class='detail'>
    <span><?= $role['nom_personnage'] ?> a été interpreter par :
    <?php
        foreach($acteurs as $acteur) { ?>
            <span><?= $acteur['prenom_personne'].' '.$acteur['nom_personne'].','?></span>
    <?php } ?>
        </span>
    <span>dans le(s) films suivants: </span>
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
</div>

<?php

$titre = 'Details du Réalisateur';
$titre_secondaire = 'Details du Réalisateur';
$contenu = ob_get_clean();
require 'view/template.php';
?>