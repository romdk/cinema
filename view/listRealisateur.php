<?php ob_start() ?>

<p> Il y a <?= $requete->rowCount() ?> réalisateurs</p>

<table>
    <tbody>
        <?php
            foreach($requete->fetchAll() as $realisateur) { ?>
            <tr>
                <td><a href="index.php?action=detailRealisateur&id=<?= $realisateur['id_realisateur'] ?>"><?= $realisateur['prenom_personne'].' '.$realisateur['nom_personne'] ?></a></td>
                <td></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<?php

$titre = 'Liste des réalisateurs';
$titre_secondaire = 'Liste des réalisateurs';
$contenu = ob_get_clean();
require 'view/template.php';
?>