<?php ob_start() ?>

<p><?= $requete->rowCount() ?> genres</p>
<div id='listGenres'>
            <?php
                foreach($requete->fetchAll() as $genre) { ?>
                <a href="index.php?action=detailGenre&id=<?= $genre['id_genre'] ?>"><?= $genre['nom_genre'] ?></a>
            <?php } ?>
</div>

<?php

$titre = 'Liste des genres';
$titre_secondaire = 'Liste des genres';
$contenu = ob_get_clean();
require 'view/template.php';
?>