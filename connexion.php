<?php
session_start();
    @$login=$_POST["login"];
    @$pass=md5($_POST["pass"]);
    @$valider=$_POST["valider"];
    $erreur="";
    if(isset($valider)){
        include("db.php");
        $db = ConnexionJeu();
        $sel=$db->prepare("SELECT * FROM utilisateurs WHERE login=? and pass=? limit 1");
        $sel->execute(array($login,$pass));
        $tab=$sel->fetchAll();
        if(count($tab)>0){
            $_SESSION["prenomNom"]=ucfirst(strtolower($tab[0]["prenom"])).
            " ".strtoupper($tab[0]["nom"]);
            $_SESSION["autoriser"]="oui";
            header("location:index.php");
        } else {
        $erreur = "Mauvais login ou mot de passe!";
        }
    }
// // mise en place cookies //
//     setcookie(
//         'login',
//         'nom',
//         [
//             'expires' => time() + 365*24*3600,
//             'secure' => true,
//             'httponly' => true,
//         ]
//     );
//     echo $_COOKIE['login'];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A layout example that shows off a responsive pricing table.">
    <title>&ndash;FouDeJeux&ndash;</title>
    <link rel="stylesheet" href="/css/pure/pure-min.css">
    <link rel="stylesheet" href="/css/pure/grids-responsive-min.css">
    <link rel="stylesheet" href="assets/css/fdj.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">
</head>

<body onLoad="document.fo.login.focus()">
    <h1>Authentification [ <a href="inscription.php">Créer un compte</a> ]</h1>
    <div class="erreur"><?php echo $erreur ?></div>
    <form name="fo" method="post" action="">
        <input type="text" name="login" placeholder="Login" /><br />
        <input type="password" name="pass" placeholder="Mot de passe" /><br />
        <input type="submit" name="valider" value="S'authentifier" />
    </form>

<div class = "cookies-eu-banner hidden"> 
    En cliquant sur "OK", vous acceptez le stockage de cookies sur votre appareil pour 
    améliorer la navigation sur le site, analyser l'utilisation du site et améliorer le marketing. <br>
    <button> Accepter </button> 
</div> 

</body>

