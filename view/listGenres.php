<?php ob_start() ?>

<p> Il y a <?= $requete->rowCount() ?> genres</p>

<table>
    <tbody>
        <?php
            foreach($requete->fetchAll() as $genre) { ?>
            <tr>
                <td><?= $genre['nom_genre'] ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<?php

$titre = 'Liste des genres';
$titre_secondaire = 'Liste des genres';
$contenu = ob_get_clean();
require 'view/template.php';