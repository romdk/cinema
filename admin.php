<?php ob_start() ?>
    <main>

<div class='adminForm'>
<h4>Ajouter un film</h4>

<form action="index.php?action=ajoutFilm" method="post">
    <div>
        <label>
            Titre:
            <input type="text" name="titre">
        </label>
    </div>
    <div>
        <label>
            Année de sortie:
            <input type="text" name="annee_sortie">
        </label>
    </div>
    <div>
        <label>
            Durée(minutes):
            <input type="text" name="duree">
        </label>
    </div>
    <div>
        <label>
           Synopsis:
            <textarea name="synopsis"></textarea>
        </label>
    </div>
    <div class="multiselect">
        <div class="selectBox" onclick="showCheckboxes()">
            <select name='genre'>
                <option>Genre</option>
            </select>
            <div class="overSelect"></div>
        </div>
        <div id="checkboxes">
            <label><input name='genre' type="checkbox" id="1" value='1'/>Science-fiction</label>
            <label><input name='genre' type="checkbox" id="2" value='2'/>Action-aventure</label>
        </div>
    </div>
    <div>
        <label>
            Réalisateur:
            <select name="realisateur">
                <option value="0">George Lucas</option>
                <option value="1">Ridley Scott</option>
                <option value="2">Ron howard</option>
                <option value="3">Steven Spielberg</option>
                <option value="4">Clint Eastwood</option>
            </select>
        </label>
    </div>
    <div>
        <label>
            Note:
            <select name="note">
                <option>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </label>
    </div>
    <div>
        <label>
            Affiche:
            <input type="text" name="affiche" placeholder="Inserer url de l'affiche">
        </label>
    </div>
    <div>
        <input type="submit" name="ajouterFilm" value="Ajouter le film" >
    </div>
</form>
</div>

<div class='adminForm'>
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
</div>

<div class='adminForm'>
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
</div>

<div class='adminForm'>
<h4>Ajouter un rôle</h4>

<form action="index.php?action=ajoutRole" method="post">
        <label>
            Nom du personnage :
            <input type="text" name="nom_personnage">
        </label>
        <input type="submit" name="ajouterRole" value="Ajouter le role" >
</form>
</div>
</main>

<?php

$titre = 'Ajouter éléments';
$titre_secondaire = 'Ajouter éléments';
$contenu = ob_get_clean();
require 'view/template.php';
?>

