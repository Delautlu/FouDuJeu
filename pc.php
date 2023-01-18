<?php include("head.php"); ?>

<?php
    // On se connecte à la BDD via notre fichier db.php :
    require "db.php";
    $db = ConnexionJeu();

    $myJeux = $db->query("SELECT * FROM jeux 
    INNER JOIN createur  ON jeux.id_crea = createur.id_crea
    INNER JOIN genre ON jeux.id_genre = genre.id_genre
    INNER JOIN plateforme ON jeux.id_plateforme = plateforme.id_plateforme 
    WHERE jeux.id_plateforme = 1 ");
    
    $nbjeux = $db->query("SELECT COUNT(id_jeux) AS total FROM jeux WHERE id_plateforme = 1");
    // on récupère tous les résultats trouvés dans une variable
    $calcul = $nbjeux->fetch();
    $nb = $calcul['total'];
?>

<div>
    <h2>Liste des jeux pc (<?= $nb ?>)</h2>  
    <div>
        <?php foreach ($myJeux as $pcSup): ?>
        <div>
            <div>
                <img src="assets/img/<?= $pcSup->picture_jeux; ?>" id="imgcard" alt="<?= $pcSup->picture_jeux; ?>">
                <div>
                    <p>Titre : <?= $pcSup->nom_jeux; ?>
                    <p>Genre : <?= $pcSup->nom_genre; ?>
                    <p>Créa : <?= $pcSup->nom_crea; ?>
                    <p>Plateforme : <?= $pcSup->nom_plateforme; ?>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include("footer.php"); ?>