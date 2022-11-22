<?php ob_start() ?>

<p> Il y a <?= $requete->rowCount() ?> réalisateurs</p>
<div id='listRealisateur'></div>
    <table class='table'>
    <thead>
            <tr>
                <th>NOM & PRENOM</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($requete->fetchAll() as $realisateur) { ?>
                <tr>
                    <td><a href="index.php?action=detailRealisateur&id=<?= $realisateur['id_realisateur'] ?>"><?= $realisateur['prenom_personne'].' '.$realisateur['nom_personne'] ?></a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php

$titre = 'Liste des réalisateurs';
$titre_secondaire = 'Liste des réalisateurs';
$contenu = ob_get_clean();
require 'view/template.php';
?>