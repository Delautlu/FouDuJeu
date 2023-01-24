
<?php
    // On se connecte à la BDD via notre fichier db.php :
    require "db.php";
    $db = ConnexionJeu();

    $myJeux = $db->query("SELECT picture_jeux, nom_jeux, nom_genre, nom_crea, nom_plateforme FROM jeux 
    INNER JOIN createur  ON jeux.id_crea = createur.id_crea
    INNER JOIN genre ON jeux.id_genre = genre.id_genre
    INNER JOIN plateforme ON jeux.id_plateforme = plateforme.id_plateforme 
    WHERE jeux.id_plateforme = 2 
        or jeux.id_plateforme = 3 
        or jeux.id_plateforme = 4 
        or jeux.id_plateforme = 5");
    $tableau = $myJeux->fetchAll(PDO::FETCH_OBJ);
    // on clôt la requête en BDD
    $myJeux->closeCursor();
        
    
    $nbjeux = $db->query("SELECT COUNT(id_jeux) AS total FROM jeux WHERE jeux.id_plateforme = 2 
                                                                    or jeux.id_plateforme = 3 
                                                                    or jeux.id_plateforme = 4 
                                                                    or jeux.id_plateforme = 5");
    // on récupère tous les résultats trouvés dans une variable
    $calcul = $nbjeux->fetch();
    $nb = $calcul['total'];

include("head.php"); ?>

<div>
    <h2 class="titre">Liste des jeux consoles (<?= $nb ?>)</h2>  
    <div class="card">    
            <?php foreach ($tableau as $pcSup): ?>               
                    <div>
                        <div class="card-image"><img src="assets/img/<?= $pcSup->picture_jeux; ?>" id="imgcard" alt="<?= $pcSup->picture_jeux; ?>"></div>
                            <div class="corps">
                                <p class="texte">Titre : <?= $pcSup->nom_jeux; ?></p>
                                <p class="texte">Genre : <?= $pcSup->nom_genre; ?></p>
                                <p class="texte">Créateur : <?= $pcSup->nom_crea; ?></p>
                                <p class="texte">Plateforme : <?= $pcSup->nom_plateforme; ?></p>
                            </div>
                    </div>
            <?php endforeach; ?>  
        <?php foreach ($tableau as $pcSup): ?>               
            <div>
                <div class="card-image">
                    <img src="assets/img/<?= $pcSup->picture_jeux; ?>" id="imgcard" alt="<?= $pcSup->picture_jeux; ?>">
                </div>
                <div class="corps">
                    <p class="texte">Titre : <?= $pcSup->nom_jeux; ?>
                    <p class="texte">Genre : <?= $pcSup->nom_genre; ?>
                    <p class="texte">Créateur : <?= $pcSup->nom_crea; ?>
                    <p class="texte">Plateforme : <?= $pcSup->nom_plateforme; ?>
                </div>
            </div>
        <?php endforeach; ?>  
    </div> 
</div>

<?php include("footer.php"); ?>