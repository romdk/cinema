<?php ob_start() ?>

<p> Il y a <?= $requete->rowCount() ?> rôles</p>

<table>
    <tbody>
        <?php
            foreach($requete->fetchAll() as $role) { ?>
            <tr>
                <td><?= $role['nom_personnage'] ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<?php

$titre = 'Liste des rôles';
$titre_secondaire = 'Liste des rôles';
$contenu = ob_get_clean();
require 'view/template.php';