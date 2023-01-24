<?php
session_start();
    if($_SESSION["autoriser"]!="oui"){
        header("location:connexion.php");
        exit();
    }
    if (date("H") < 18) {
        $bienvenue = "Bonjour et bienvenue " .
            $_SESSION["prenomNom"] .
            " dans votre espace personnel";
    } else {
        $bienvenue = "Bonsoir et bienvenue " .
            $_SESSION["prenomNom"] .
            " dans votre espace personnel";
    }
?> 

<?php include("head.php"); ?>

<div class="l-content">
    <div class="pricing-tables pure-g">
        <div class="pure-u-1 pure-u-md-1-3">
            <div class="pricing-table pricing-table-free">
                <div class="pricing-table-header">
                    <h2>Jeux Pc</h2>
                </div>
                <a href="pc.php"><img src="assets/img/pcgamer.jpg" id="pcgamer"></a>
            </div>
        </div>
        <div class="pure-u-1 pure-u-md-1-3">
            <div class="pricing-table pricing-table-free">
                <div class="pricing-table-header">
                    <h2>Jeux Playstation / Xbox</h2>   
                </div>
                <a href="playsT.php"><img src="assets/img/manettes2.png" id="ps4"></a>
            </div>
        </div>

        <div class="pure-u-1 pure-u-md-1-3">
            <div class="pricing-table pricing-table-free">
                <div class="pricing-table-header">
                    <h2>Jeux Switch</h2>   
                </div>
                <a href="switch.php"><img src="assets/img/switch.png" id="switch"></a>
            </div>
        </div>

        <div class="pure-u-1 pure-u-md-1-3">
            <div class="pricing-table pricing-table-free">
                <div class="pricing-table-header">
                    <h2>Jeux Smartphones</h2>   
                </div>
                <a href="smartphone.php"><img src="assets/img/smartphone.jpg" id="smartphone"></a>
            </div>
        </div>
    </div>
</div> 




<?php include("footer.php"); ?>