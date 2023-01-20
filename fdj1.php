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
                <a href="smartphone.php"><img src="assets/img/smartphone.jpeg" id="smartphone"></a>
            </div>
        </div>
    </div>
</div> 





<!-- RESTE A FAIRE ---------------------------- -->

    <div class="information pure-g">
        <div class="pure-u-1 pure-u-md-1-2">
            <div class="l-box">
                <h3 class="information-head"></h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit illo nisi non libero quod repellat impedit consequatur velit.
                </p>
            </div>
        </div>

        <div class="pure-u-1 pure-u-md-1-2">
            <div class="l-box">
                <h3 class="information-head"></h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ullamco laboris nisi ut aliquip ex ea commodo
                </p>
            </div>
        </div>

        <div class="pure-u-1 pure-u-md-1-2">
            <div class="l-box">
                <h3 class="information-head"></h3>
                <p>
                    Cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
            </div>
        </div>

        <div class="pure-u-1 pure-u-md-1-2">
            <div class="l-box">
                <h3 class="information-head"></h3>
                <p>
                    Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
        </div>
    </div> <!-- end information -->
</div> <!-- end l-content -->

<div class="footer l-box">
    <p>corporis dignissimos reiciendis rerum quam, non, nihil soluta laudantium aspernatur assumenda quos nisi! Blanditiis, obcaecati ad.<a href=''></a>.
    </p>
</div>


<?php include("footer.php");?>