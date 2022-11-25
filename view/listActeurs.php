<?php ob_start() ?>

<p><?= $requete->rowCount() ?> acteurs</p>
<div id="listActeurs">
<?php
        foreach($requete->fetchAll() as $acteur) { ?>
        
            <a class='card' href="index.php?action=detailActeur&id=<?= $acteur['id_acteur'] ?>">
                <div class="affiche">
                    <img src="<?= $acteur['photo']?>" alt="photo de <?= $acteur['prenom_personne'].' '.$acteur['nom_personne'] ?>">
                </div>
                <div class="infos">
                    <p><?= $acteur['prenom_personne'].' '.$acteur['nom_personne'] ?></p>
                </div>
                <div class="overlay"><i class="fa-solid fa-circle-info"></i></div>
            </a>            
    <?php } ?>
</div>

<?php

$titre = 'Liste des acteurs';
$titre_secondaire = 'Liste des acteurs';
$contenu = ob_get_clean();
require 'view/template.php';
?>