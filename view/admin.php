<?php 
    ob_start();
?>
    <div id='admin'>
        <div><?php if(isset($_SESSION['message'])){ echo $_SESSION['message'];}?></div>
        <div class='singleForm'>
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
                            <?php foreach($realisateurs->fetchAll() as $realisateur){ ?>
                                <option value = "<?=$realisateur['id_realisateur']?>"><?= $realisateur['prenom_personne'].' '.$realisateur['nom_personne'] ?></option>
                            <?php } ?>                   
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
                        <select name='genre[]' multiple>
                            <?php foreach($genres->fetchAll() as $genre){ ?>
                                <option value = "<?=$genre['id_genre']?>"><?=$genre['nom_genre']?></option>
                            <?php } ?>    
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
                                <option>0.5</option>
                                <option>1</option>
                                <option>1.5</option>
                                <option>2</option>
                                <option>2.5</option>
                                <option>3</option>
                                <option>3.5</option>
                                <option>4</option>
                                <option>4.5</option>
                                <option>5</option>
                            </select>
                        </label>
                    </div>
                    <div>
                        <label>
                            Affiche:
                            <input type='text' name='affiche' placeholder="Inserer l'url de l'affiche">
                        </label>
                    </div>
                </div>
                    <div class='btnAjouter'>
                        <input type='submit' name='ajouterFilm' value='Ajouter le film' >
                    </div>
                </form> 
            </div>
        </div>
        <div class='doubleForm'>
            <div class='adminForm'>
            <h4>Ajouter un réalisateur</h4>

            <form action='index.php?action=ajoutRealisateur' method='post'>
                <div class='row'>
                    <label>
                        Nom:
                        <input type='text' name='nom_personne'>
                    </label>
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
                <div class='row'>
                    <label>
                        Affiche:
                        <input type='text' name='photo' placeholder="Inserer l'url de la photo">
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
                <div class='row'>
                    <label>
                        Affiche:
                        <input type='text' name='photo' placeholder="Inserer l'url de la photo">
                    </label>
                </div>
            </div>
                <div class='btnAjouter'>
                    <input type='submit' name='ajouterActeur' value="Ajouter l'acteur" >
                </div>
            </form>
            </div>

        </div>
        <div class='doubleForm'>
            <div class='adminForm'>
                <h4>Ajouter un rôle</h4>
                <form action='index.php?action=ajoutRole' method='post'>
                    <div class='row'>
                        <label>
                            Personnage :
                            <input type='text' name='nom_personnage'>
                        </label>
                    </div>
                        <div class='btnAjouter'>
                        <input type='submit' name='ajouterRole' value='Ajouter le role' >
                    </div>
                </form>
            </div>
            <div class='adminForm'>
                <h4>Ajouter un casting</h4>

                <form action='index.php?action=ajoutCasting' method='post'>
                    <div class='row'>
                        <label>
                            Film:
                            <select name='film'>
                                <?php foreach($films->fetchAll() as $film){ ?>
                                    <option value = "<?=$film['id_film']?>"><?= $film['titre'] ?></option>
                                <?php } ?> 
                            </select>
                        </label>
                        <label>
                        Personnage:
                            <select name='personnage'>
                                <?php foreach($personnages->fetchAll() as $personnage){ ?>
                                    <option value = "<?=$personnage['id_role']?>"><?= $personnage['nom_personnage'] ?></option>
                                <?php } ?> 
                            </select>
                        </label>
                    </div>
                    <div class='row'>
                        <label>
                            Acteur:
                            <select name='acteur[]' multiple>
                                <?php foreach($acteurs->fetchAll() as $acteur){ ?>
                                    <option value = "<?=$acteur['id_acteur']?>"><?= $acteur['prenom_personne'].' '.$acteur['nom_personne'] ?></option>
                                <?php } ?>                                 
                            </select>
                        </label>
                    </div>
                        <div class='btnAjouter'>
                        <input type='submit' name='ajouterCasting' value='Ajouter le casting' >
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php

$titre = 'Admin';
$titre_secondaire = '';
$contenu = ob_get_clean();
require 'view/template.php';
?>

