<?php include("head.php"); ?>

<?php
    // On se connecte à la BDD via notre fichier db.php :
    require "db.php";
    $db = ConnexionJeu();

    $myJeux = $db->query("SELECT * FROM jeux 
    INNER JOIN createur  ON jeux.id_crea = createur.id_crea
    INNER JOIN genre ON jeux.id_genre = genre.id_genre
    INNER JOIN plateforme ON jeux.id_plateforme = plateforme.id_plateforme 
    WHERE jeux.id_plateforme = 7 ");
    
    $nbjeux = $db->query("SELECT COUNT(id_jeux) AS total FROM jeux WHERE id_plateforme = 7");
    // on récupère tous les résultats trouvés dans une variable
    $calcul = $nbjeux->fetch();
    $nb = $calcul['total'];
?>
<body>
<div>
    <h2>Liste des jeux smartphones (<?= $nb ?>)</h2>  
    <div>
        <?php foreach ($myJeux as $smart): ?>
        <div>
            <div>
                <img src="assets/img/<?= $smart->picture_jeux ?>" id="imgcard" alt="<?= $smart->picture_jeux ?>">
                <div>
                    <p>Titre : <?= $smart->nom_jeux ?>
                    <p>Genre : <?= $smart->nom_genre ?>
                    <p>Créa : <?= $smart->nom_crea ?>
                    <p>Plateforme : <?= $smart->nom_plateforme ?>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include("footer.php"); ?>