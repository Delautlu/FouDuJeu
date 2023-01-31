<?php
    @$nom=$_POST["nom"];
    @$prenom=$_POST["prenom"];
    @$login=$_POST["login"];
    @$pass=$_POST["pass"];
    @$repass=$_POST["repass"];
    @$valider=$_POST["valider"];
    $erreur="";
    if(isset($valider)){
        if(empty($nom)) $erreur="Nom laissé vide!";
        elseif(empty($prenom)) $erreur="Prénom laissé vide!";
        elseif(empty($login)) $erreur="Login laissé vide!";
        elseif(empty($pass)) $erreur="Mot de passe laissé vide!";
        elseif($pass!=$repass) $erreur="Mots de passe non identiques!";
        else{
            include("db.php");
            $db = ConnexionJeu();
                $sel=$db->prepare("SELECT id FROM utilisateurs WHERE login=? limit 1");
                $sel->execute(array($login));
                $tab=$sel->fetchAll();
            if (count($tab) > 0) {
                $erreur = "Login existe déjà!";
            } else {
                $ins=$db->prepare("INSERT INTO utilisateurs(nom,prenom,login,pass) values(?,?,?,?)");
                if($ins->execute(array($nom,$prenom,$login,md5($pass))))
                header("location:connexion.php");
            }
        }
    }
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
<body>
    <h1>Inscription</h1>
    <div class="erreur"><?php echo $erreur ?></div>
    <form name="fo" method="post" action="">
        <span id="formerreur"></span>
        <input type="text" name="nom" id="nom" placeholder="Nom" value="<?php echo $nom?>" /><br />
        <input type="text" name="prenom" id="prenom" placeholder="Prénom" value="<?php echo $prenom?>" /><br />
        <input type="text" name="login" id="login" placeholder="Login" value="<?php echo $login?>" /><br />
        <input type="password" name="pass" id="pass" placeholder="Mot de passe" /><br />
        <input type="password" name="repass" placeholder="Confirmer Mot de passe" /><br />
        <input type="submit" name="valider" id="inscri" value="S'authentifier" />
    </form>
</body>
    
<?php include("footer.php"); ?>