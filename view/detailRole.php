<?php ob_start(); 
$role = $requete->fetch();
$acteurs = $requete2->fetchAll();
$films = $requete3->fetchAll();
?>
<div id='detailRole'>
    <p><?= $role['nom_personnage'] ?> a été interpreter par :
    <?php
        foreach($acteurs as $acteur) { ?>
            <p><?= $acteur['prenom_personne'].' '.$acteur['nom_personne']?></p>
    <?php } ?>
        </p>
    <p>dans le(s) films suivants: </p>
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

$titre = 'Details du Rôle';
$titre_secondaire = 'Details du Rôle';
$contenu = ob_get_clean();
require 'view/template.php';
?>