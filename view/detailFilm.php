<?php ob_start() ?>

<table>
    <tbody>
        <?php
            $informations = $requete->fetch()
        ?>
            <tr>
                <td><?= $informations['titre'] ?></td>
            </tr>
            <tr>
                <td><?= $informations['annee_sortie'] ?></td>
            </tr>
            <tr>
                <td>Réalisé par: <?= $informations['prenom_personne'].' '.$informations['nom_personne'] ?></td>
            </tr>
            <tr>
                <td>Durée: <?= $informations['duree'] ?> minutes</td>
            </tr>
            <tr>
                <td>Synopsis: <?= $informations['synopsis'] ?></td>
            </tr>
            <tr>
                <td><?= $informations['note'] ?>/5</td>
            </tr>
            <tr>
                <td><img src="<?= $informations['affiche'] ?>" alt="affiche du film <?= $informations['titre'] ?>"></td>
            </tr>
    </tbody>
</table>

<h3>CASTING</h3>

<table>
    <tbody>
        <?php
            foreach($requete2->fetchAll() as $acteur) { ?>
            <tr>
                <td><?= $acteur['prenom_personne'].' '.$acteur['nom_personne'] ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>





<?php

$titre = 'Details du film';
$titre_secondaire = 'Details du film';
$contenu = ob_get_clean();
require 'view/template.php';