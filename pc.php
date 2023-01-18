<?php include("head.php"); ?>

<?php
    // On se connecte à la BDD via notre fichier db.php :
    require "db.php";
    $db = ConnexionJeu();

    $jeux = $db->query("SELECT * FROM jeux 
    INNER JOIN createur  ON jeux.id_crea = createur.id_crea
    INNER JOIN genre ON jeux.id_genre = genre.id_genre
    INNER JOIN plateforme ON jeux.id_plateforme = plateforme.id_plateforme 
    WHERE jeux.id_plateforme = 1 ");
    
    $jeux = $db->query("SELECT COUNT(id_jeux) AS total FROM jeux WHERE id_plateforme = 1");
    // on récupère tous les résultats trouvés dans une variable
    $calcul = $jeux->fetch();
    $nb = $calcul['total'];
?>

<body>
<div class="container-fluid">
    <h2 class="font-weight-bold">Liste des jeux pc (<?= $nb ?>)</h2>  
    <div class="row">
        <?php foreach ($jeux as $plateforme): ?>
        <div class="card col-lg-5 col-12 m-4" style="width:18rem;"id="card">
            <div class="row">
                <img src="assets/img/<?= $plateforme->picture_jeux ?>" style="max-width:100%;height:auto"  class="card-img-top col-6 w-25 h-100" id="imgcard" alt="mage">
                <div class="card-body col-6">
                    <p class="text-right font-weight-bold"><?= $plateforme->nom_jeux ?>
                    <p class="text-right font-weight-bold"><?= $plateforme->nom_genre ?>
                    <p class="text-right">Label : <?= $plateforme->nom_crea ?>
                    <p class="text-right">Year : <?= $plateforme->nom_plateforme ?>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include("footer.php"); ?>