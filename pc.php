<?php include("head.php");?>
<?php
    // On se connecte à la BDD via notre fichier db.php :
    require "db.php";
    $db = ConnexionJeu();

    // On récupère l'ID passé en paramètre :
    $id = $_GET["id"];

    // On crée une requête préparée avec condition de recherche :
    $requete = $db->prepare("SELECT * FROM jeux INNER JOIN createur  ON jeux.id_crea = createur.id_crea
    INNER JOIN genre ON jeux.id_genre = genre.id_genre
    INNER JOIN plateforme ON jeux.id_plateforme = plateforme.id_plateforme WHERE id_plateforme = 1 ");
    

    // on ajoute l'ID du disque passé dans l'URL en paramètre et on exécute :
    $requete->execute(array($id));

    // on récupère le 1e (et seul) résultat :
    $myjeux = $requete->fetch(PDO::FETCH_OBJ);

    // on clôt la requête en BDD
    $requete->closeCursor();

?>
<body>

<div class="container-fluid">

        <h2><p class="font-weight-bold">Liste des disques (<?= $total ?>)</p></h2>  
    <div class="row">
        <?php foreach ($tableau as $plateforme): ?>
        <div class="card col-lg-5 col-12 m-4" style="width:18rem;"id="card">
            <div class="row">
                <img src="assets/img/<?= $disc->picture_jeux ?>" style="max-width:100%;height:auto"  class="card-img-top col-6 w-25 h-100" id="imgcard" alt="mage">
                    <div class="card-body col-6">
                    <p class="text-right font-weight-bold"><?= $disc->disc_title ?>
                    <p class="text-right font-weight-bold"><?= $disc->artist_name ?>
                    <p class="text-right">Label : <?= $disc->disc_label ?>
                    <p class="text-right">Year : <?= $disc->disc_year ?>
                    <p class="text-right">Genre :<?= $disc->disc_genre ?>
                    <p class="text-right"><a href="disc_detail.php?id=<?= $disc->disc_id ?>" class="btn btn-primary">Détails</a>
                    </div>
            </div>
                
        </div>
        <?php endforeach; ?>
    </div>
</div> 
















<?php include("footer.php");?>
<?php

