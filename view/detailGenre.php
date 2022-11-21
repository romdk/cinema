<?php ob_start(); 
$genre = $requete->fetch();
$films = $requete2->fetchAll();
?>
<div class='detail'>
    <p>Films du genre <?= $genre['nom_genre'] ?></p>
    <table>
        <tbody>
            <?php
                foreach($films as $film) { ?>
                <tr>
                    <td><?= $film['titre'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php

$titre = 'Details du genre';
$titre_secondaire = 'Details du genre';
$contenu = ob_get_clean();
require 'view/template.php';
?>