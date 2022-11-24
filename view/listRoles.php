<?php ob_start() ?>

<p> Il y a <?= $requete->rowCount() ?> rôles</p>
<div id="listRoles">
            <?php
                foreach($requete->fetchAll() as $role) { ?>
                    <a href="index.php?action=detailRole&id=<?= $role['id_role'] ?>"><?= $role['nom_personnage'] ?></a>                  
            <?php } ?>
</div>



<?php

$titre = 'Liste des rôles';
$titre_secondaire = 'Liste des rôles';
$contenu = ob_get_clean();
require 'view/template.php';
?>