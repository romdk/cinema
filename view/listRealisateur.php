<?php ob_start() ?>

<p> Il y a <?= $requete->rowCount() ?> réalisateurs</p>
<div id='listRealisateurs'>
    <?php
        foreach($requete->fetchAll() as $realisateur) { ?>
        
            <a class='card' href="index.php?action=detailRealisateur&id=<?= $realisateur['id_realisateur'] ?>">
                <div class="affiche">
                    <img src="<?= $realisateur['photo']?>" alt="photo de <?= $realisateur['prenom_personne'].' '.$realisateur['nom_personne'] ?>">
                </div>
                <div class="infos">
                    <p><?= $realisateur['prenom_personne'].' '.$realisateur['nom_personne'] ?></p>
                </div>
                <div class="overlay"><i class="fa-solid fa-circle-info"></i></div>
            </a>            
    <?php } ?>
</div>

<?php
$titre = 'Liste des réalisateurs';
$titre_secondaire = 'Liste des réalisateurs';
$contenu = ob_get_clean();
require 'view/template.php';
?>