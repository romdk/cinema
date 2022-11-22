<?php ob_start() ?>
<main>
    <div class='adminForm'>
        <h4>Ajouter un film</h4>

        <form action='index.php?action=ajoutFilm' method='post'>

        <div class='row'>    
            <label>
                Titre:
                <input type='text' name='titre'>
            </label>

            <label>
                Année de sortie:
                <input type='text' name='annee_sortie'>
            </label>

            <label>
                Réalisateur:
                <select name='realisateur'>
                    <option value='0'>George Lucas</option>
                    <option value='1'>Ridley Scott</option>
                    <option value='2'>Ron howard</option>
                    <option value='3'>Steven Spielberg</option>
                    <option value='4'>Clint Eastwood</option>
                </select>
            </label>
        </div>
        <div class='row'>    
            <div class='synopsis'>
                <label>
                Synopsis:
                    <textarea name='synopsis'></textarea>
                </label>
            </div>
        </div>
        <div class='row'>
            <label>Genre:
                <select name="genre[]" multiple>
                    <option value="1">Science-fiction</option>
                    <option value="2">Action-aventure</option>
                </select>
            </label>
            <div>
                <label>
                    Durée(minutes):
                    <input type='text' name='duree'>
                </label>
            </div>
            <div>
                <label>
                    Note:
                    <select name='note'>
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
                    <input type='text' name='affiche' placeholder='Inserer url de l'affiche'>
                </label>
            </div>
        </div>
            <div class='btnAjouter'>
                <input type='submit' name='ajouterFilm' value='Ajouter le film' >
            </div>
        </form> 
    </div>

    <div id='realisateurActeurRole'>
        <div class='adminForm'>
        <h4>Ajouter un réalisateur</h4>

        <form action='index.php?action=ajoutRealisateur' method='post'>
            <div class='row'>
                <label>
                    Nom:
                    <input type='text' name='nom_personne'>
                </label>
            </div>
            <div class='row'>
                <label>
                    Prenom:
                    <input type='text' name='prenom_personne'>
                </label>
            </div>
        <div class='row'>
            <div>
                <label>
                    sexe:
                    <select name='sexe'>
                        <option>Homme</option>
                        <option>Femme</option>
                    </select>
                </label>
            </div>
            <div>
                <label>
                    date:
                    <input type='date' name='date_naissance'>
                </label>
            </div>
        </div>
            <div class='btnAjouter'>
                <input type='submit' name='ajouterRealisateur' value='Ajouter le réalisateur' >
            </div>
        </form>
        </div>

        <div class='adminForm'>
        <h4>Ajouter un acteur</h4>

        <form action='index.php?action=ajoutActeur' method='post'>
            <div class='row'>
                <label>
                    Nom:
                    <input type='text' name='nom_personne'>
                </label>
            </div>
            <div class='row'>
                <label>
                    Prenom:
                    <input type='text' name='prenom_personne'>
                </label>
            </div>
        <div class='row'>
            <div>
                <label>
                    sexe:
                    <select name='sexe'>
                        <option>Homme</option>
                        <option>Femme</option>
                    </select>
                </label>
            </div>
            <div>
                <label>
                    date:
                    <input type='date' name='date_naissance'>
                </label>
            </div>
        </div>
            <div class='btnAjouter'>
                <input type='submit' name='ajouterActeur' value='Ajouter l'acteur' >
            </div>
        </form>
        </div>

        <div class='adminForm'>
        <h4>Ajouter un rôle</h4>

        <form action='index.php?action=ajoutRole' method='post'>
            <div class='row'>
                <label>
                    Personnage :
                    <input type='text' name='nom_personnage'>
                </label>
            </div>
            <div class='row'>
                <label>
                    Film:
                    <select name='film'>
                        <option value='0'>Star Wars IV</option>
                        <option value='3'>Star Wars V</option>
                        <option value='5'>Solo: A Star Wars Story</option>
                        <option value='2'>Blade Runner</option>
                        <option value='4'>Indiana Jones</option>
                        <option value='6'>Cry Macho</option>
                    </select>
                </label>
            </div>
            <div class='row'>
                <label>
                Acteur:
                <select name='acteur'>
                    <option value='1'>Harrison Ford</option>
                    <option value='2'>Mark Hamill</option>
                    <option value='3'>Alden Ehrenreich</option>
                    <option value='4'>Clint Eastwood</option>
                    <option value='5'>Carrie Fisher</option>
                </select>
            </label>
            </div>
                <div class='btnAjouter'>
                <input type='submit' name='ajouterRole' value='Ajouter le role' >
            </div>
        </form>
        </div>
    </div>
</main>

<?php

$titre = 'Admin';
$titre_secondaire = '';
$contenu = ob_get_clean();
require 'view/template.php';
?>

