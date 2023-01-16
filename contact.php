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
</head>    <form action="" method="post">

        <label for="nom">Votre nom*:</label>
        <input type="text" name="nom" id="nom" >
            <br>
        <label for="sexe">Sexe*</label>
            <input type="radio" name="sexe" value="féminin" class="fem" id="sexe1">féminin
            <input type="radio" name="sexe" value="masculin" class="men" id="sexe2">masculin
            <br>

        <label for="date">Date de naissance*:</label>
        <input type="date" name="ddn" id="date" >
            <br>
            
        <label for="mail">Email*:</label>
        <input type="text" name="mail" id="email" >
        <br>
        <label for="sujet">Sujet*</label>
        <select id="sujet">
            <option value="Veuillez sélectionner un sujet">Veuillez sélectionner un sujet</option>
            <option value="Mes commandes">Mes commandes</option>
            <option value="Question sur un produit">Question sur un produit</option>
            <option value="Réclamation">Réclamation</option>
            <option value="Autres">Autres</option>
        </select>
        <br>
        <label for="votre_question">Votre question*:</label>
        <input type="text" name="votre question" id="votre_question" size="40" >
        <br>
        
        <input type="checkbox" name="accepte" id="coche">
        <label for="accepte">* J'accepte le traitement informatique de ce formulaire</label>
        <br>
            
        <input type="submit" name="but1" id="bt1" value="Envoyer">
        <input type="reset" name="but2" id="bt2" value="annuler">

    </form>


</html>