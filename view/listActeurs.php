<?php ob_start() ?>

<p> Il y a <?= $requete->rowCount() ?> acteurs</p>

<table>
    <tbody>
        <?php
            foreach($requete->fetchAll() as $acteur) { ?>
            <tr>
                <td><a href="index.php?action=detailActeur&id=<?= $acteur['id_acteur'] ?>"><?= $acteur['prenom_personne'].' '.$acteur['nom_personne'] ?></a></td>
            </tr>
        <?php } ?>
    </tbody>
</table>


<h4>Ajouter un acteur</h4>

<form action="index.php?action=ajoutActeur" method="post">
    <div>
        <label>
            Nom:
            <input type="text" name="nom_personne">
        </label>
    </div>
    <div>
        <label>
            Prenom:
            <input type="text" name="prenom_personne">
        </label>
    </div>
    <div>
        <label>
            sexe:
            <select name="sexe">
                <option>Homme</option>
                <option>Femme</option>
            </select>
        </label>
    </div>
    <div>
        <label>
            date:
            <input type="date" name="date_naissance">
        </label>
    </div>
    <div>
    <input type="submit" name="ajouterActeur" value="Ajouter l'acteur" >
    </div>
</form>

<?php

$titre = 'Liste des acteurs';
$titre_secondaire = 'Liste des acteurs';
$contenu = ob_get_clean();
require 'view/template.php';
?>