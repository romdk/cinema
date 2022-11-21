<?php ob_start() ?>

<p> Il y a <?= $requete->rowCount() ?> acteurs</p>

<table class='table'>
<thead>
        <tr>
            <th>NOM & PRENOM</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($requete->fetchAll() as $acteur) { ?>
            <tr>
                <td><a href="index.php?action=detailActeur&id=<?= $acteur['id_acteur'] ?>"><?= $acteur['prenom_personne'].' '.$acteur['nom_personne'] ?></a></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<?php

$titre = 'Liste des acteurs';
$titre_secondaire = 'Liste des acteurs';
$contenu = ob_get_clean();
require 'view/template.php';
?>