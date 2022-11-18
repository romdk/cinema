<?php ob_start() ?>

<p> Il y a <?= $requete->rowCount() ?> réalisateurs</p>

<table>
    <tbody>
        <?php
            foreach($requete->fetchAll() as $realisateur) { ?>
            <tr>
                <td><a href="index.php?action=detailRealisateur&id=<?= $realisateur['id_realisateur'] ?>"><?= $realisateur['prenom_personne'].' '.$realisateur['nom_personne'] ?></a></td>
            </tr>
        <?php } ?>
    </tbody>
</table>


<h4>Ajouter un réalisateur</h4>

<form action="index.php?action=ajoutRealisateur" method="post">
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
    <input type="submit" name="ajouterRealisateur" value="Ajouter le realisateur" >
    </div>
</form>

<?php

$titre = 'Liste des réalisateurs';
$titre_secondaire = 'Liste des réalisateurs';
$contenu = ob_get_clean();
require 'view/template.php';
?>