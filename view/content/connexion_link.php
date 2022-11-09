<?php

if(isset($_SESSION['username'])){
    echo '  <div id="hide_connexion" class="hide_connexion" data-appear ="200">
                    <div  class="connexion_link_layout">
                        <a href="./user_space.php"><p>'.$_SESSION['username'].'<img class="logo" src="../view/ressources/logo/logo-connexion.png"></p></a>
                    </div>
                    <a class="hide_connexion_sous_menu" href="connexion/logout.php">Déconnexion</a>
            </div>';
} else {
    echo '  <div id="hide_connexion" class="hide_connexion" data-appear ="200">
                <div class="connexion_link_layout">
                    <a href="./connexion/connexion.php">CONNEXION </a><img class="logo" src="../view/ressources/logo/logo-connexion.png">
                </div>
                <a class="hide_connexion_sous_menu" href="connexion/registration.php">Inscription</a>
            </div>';
}
?>
