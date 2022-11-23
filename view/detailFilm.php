<?php ob_start() ?>

<div id='detailFilm'>
            <?php
                $informations = $requete->fetch()
            ?>
                
                <p class='titre'><?= $informations['titre'] ?></p>
                <div class='card'>
                    <div class='affiche'><img src="<?= $informations['affiche'] ?>" alt="affiche du film <?= $informations['titre'] ?>"></div>
                    <div class='infos'>
                        <p><?= $informations['annee_sortie'].' / '.$informations['duree'].' minutes / '.$informations['nom_genre'] ?></p>
                        <p>Réalisé par <?= $informations['prenom_personne'].' '.$informations['nom_personne'] ?></p>
                        <p id='note'><?= $informations['note'] ?></p>
                        <div class="etoiles">
                            <span id='etoile1' class="fa fa-star "></span>
                            <span id='etoile2' class="fa fa-star "></span>
                            <span id='etoile3' class="fa fa-star "></span>
                            <span id='etoile4' class="fa fa-star "></span>
                            <span id='etoile5' class="fa fa-star"></span>
                        </div>
                        <div class='casting'>
                        <p>CASTING</p>
                        <?php
                        foreach($requete2->fetchAll() as $acteur) { ?>
                    
                            <p><?= $acteur['prenom_personne'].' '.$acteur['nom_personne'] ?></p>
                        <?php } ?>
                        </div>
                        <a href="index.php?action=ajoutLike&id=<?=$id?>"><div class='btnLike'><i class="fa-regular fa-thumbs-up"></i></div></a>  
                    </div>  
                </div>
                <div class='synopsis'>
                    <p>Synopsis: <?= $informations['synopsis'] ?></p>
                </div>
                

</div>





<?php

$titre = 'Details du film';
$titre_secondaire = 'Details du film';
$contenu = ob_get_clean();
require 'view/template.php';
?>