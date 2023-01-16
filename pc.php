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
    INNER JOIN plateforme ON jeux.id_plateforme = plateforme.id_plateforme");


    // on ajoute l'ID du disque passé dans l'URL en paramètre et on exécute :
    $requete->execute(array($id));

    // on récupère le 1e (et seul) résultat :
    $myArtist = $requete->fetch(PDO::FETCH_OBJ);

    // on clôt la requête en BDD
    $requete->closeCursor();

?>