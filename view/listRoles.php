<?php ob_start() ?>

<p> Il y a <?= $requete->rowCount() ?> rôles</p>
<div id="listRoles">
    <table class='table'>
    <thead>
            <tr>
                <th>NOM DU PERSONNAGE</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($requete->fetchAll() as $role) { ?>
                <tr>
                    <td><a href="index.php?action=detailRole&id=<?= $role['id_role'] ?>"><?= $role['nom_personnage'] ?></a></td>                
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>



<?php

$titre = 'Liste des rôles';
$titre_secondaire = 'Liste des rôles';
$contenu = ob_get_clean();
require 'view/template.php';
?>