<?php ob_start() ?>

<p> Il y a <?= $requete->rowCount() ?> rôles</p>

<table>
    <tbody>
        <?php
            foreach($requete->fetchAll() as $role) { ?>
            <tr>
                <td><a href="index.php?action=detailRole&id=<?= $role['id_role'] ?>"><?= $role['nom_personnage'] ?></a></td>                
            </tr>
        <?php } ?>
    </tbody>
</table>

<h4>Ajouter un rôle</h4>

<form action="index.php?action=ajoutRole" method="post">
        <label>
            Nom du personnage :
            <input type="text" name="nom_personnage">
        </label>
        <input type="submit" name="submit" value="Ajouter le role" >
</form>

<?php

$titre = 'Liste des rôles';
$titre_secondaire = 'Liste des rôles';
$contenu = ob_get_clean();
require 'view/template.php';
?>