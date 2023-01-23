<?php include("head.php"); ?>

<?php
    // On se connecte à la BDD via notre fichier db.php :
    require "db.php";
    $db = ConnexionJeu();

    $myJeux = $db->query("SELECT * FROM jeux 
    INNER JOIN createur  ON jeux.id_crea = createur.id_crea
    INNER JOIN genre ON jeux.id_genre = genre.id_genre
    INNER JOIN plateforme ON jeux.id_plateforme = plateforme.id_plateforme 
    WHERE jeux.id_plateforme = 2 
        or jeux.id_plateforme = 3 
        or jeux.id_plateforme = 4 
        or jeux.id_plateforme = 5");

        
    
    $nbjeux = $db->query("SELECT COUNT(id_jeux) AS total FROM jeux WHERE jeux.id_plateforme = 2 
                                                                    or jeux.id_plateforme = 3 
                                                                    or jeux.id_plateforme = 4 
                                                                    or jeux.id_plateforme = 5");
    // on récupère tous les résultats trouvés dans une variable
    $calcul = $nbjeux->fetch();
    $nb = $calcul['total'];
?>

<body>
<div>
    <h2>Liste des jeux consoles (<?= $nb ?>)</h2>  
    <div>
        <?php foreach ($myJeux as $play): ?>
        <div>
            <div>
                <img src="assets/img/<?= $play->picture_jeux ?>" id="imgcard" alt="<?= $play->picture_jeux ?>">
                <div>
                    <p>Titre : <?= $play->nom_jeux ?>
                    <p>Genre : <?= $play->nom_genre ?>
                    <p>Créa : <?= $play->nom_crea ?>
                    <p>Plateforme : <?= $play->nom_plateforme ?>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include("footer.php"); ?>