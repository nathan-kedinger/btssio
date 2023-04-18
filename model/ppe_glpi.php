<?php 
require '../view/front_const/header_const.php';
 $pageTitle = REALISATIONS;
require_once '../view/content/head.php';
require_once '../view/content/header.php';?>

<body>
    <main>
        <article>
            <h2>Mise en place d'une machine virtuelle et utilisation de GLPI</h2>  
                <h3>Contexte : </h3>  
                    <p>
                    BTS SIO option SLAM
                    </p>
                <h3>Objectif : </h3>  
                    <p>
                    Mettre en place une machine virtuelle sous Ubuntu pour permettre l'utilisation de GLPI.
                    </p>
                <h3>Technologies utilisées :</h3>  
                    <p>
                    Ubuntu, GLPI
                    </p>
                <h3>Utilisateurs : </h3>  
                    <p>
                    Privé
                    </p>
                <h3>Environnement de développement :</h3>  
                    <p>
                    PC (Windows 11)<br>
                    Ubuntun
                    </p>
                <h3>Détail des tâches effectuées :</h3>  
                    <p>
                    Installation d'une machine virtuelle Ubuntu avec l'outil virtualBox de Oracle. Installation de 
                    GLPI sur la machine virtuelle en ligne de commande. Création de différents utilisateurs avec
                    différents niveaux d'acréditation. Ouverture de ticket de différentes gravité. Résolution de tickets.
                    </p>
                <h3>Les connaissance clé débloquées par ce projet sont :</h3>  
                    <p>
                    -	Création d'une base de données en ligne de commande<br>
                    -	Prise en main de l'outil GLPI.<br>
                    -	Prise en main de l'outil VirtualBox de Oracle et installation d'Ubuntu sur machine virtuelle<br>
                    -	Gestion et recensement du patrimoine informatique<br>
                    -	Ouverture et cloture de tickets avec GLPI<br>

                    </p>
                <h3>Tableau Récapitulatif</h3>  
                    <embed class="cv" src="../view/ressources/tableau_ppe/tab_glpi.pdf" width="1000" height="1000" type="application/pdf" alt ="Grille des réalisations">

        </article>

    </main>

    <aside>
        <?php require_once '../view/content/aside.php';?>
    </aside>



    <?php require_once '../view/content/footer.php';?>
</body>