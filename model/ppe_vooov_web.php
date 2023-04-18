<?php 
require '../view/front_const/header_const.php';
 $pageTitle = REALISATIONS;
require_once '../view/content/head.php';
require_once '../view/content/header.php';?>

<body>
    <main>
        <article>
            <h2>Site web Vooov</h2>  
                <h3>Contexte : </h3>  
                    <p>
                    Dans le cadre du projet personnel encadré, il est nécessaire de créer une application Web. Celle-ci est en lien avec l'API, la base de données
                    et l'application mobile Vooov. 
                    </p>
                <h3>Objectif : </h3>  
                    <p>
                        Réaliser un site web à l'image de l'application mobile vooov. Ce site web hébergera la version finale de l'API permettant à l'application mobile de joindre la base de données.
                    </p>
                <h3>Technologies utilisées :</h3>  
                    <p>
                    Symfony 6, PHP, HTML, CSS, Bootstrap, JavaScript, SQL
                    </p>
                <h3>Utilisateurs : </h3>  
                    <p>
                    Partie publique sans inscription.<br>
                    Partie privé utilisateur<br>
                    Partie privée administrateur
                    </p>
                <h3>Environnement de développement :</h3>  
                    <p>
                    PC (Windows 11)<br>
                    IntelliJ<br>
                    Symfony6
                    </p>
                <h3>Gestion du versioning :</h3>  
                    <p>
                    Github : <a class="lien_ppe" href="https://github.com/nathan-kedinger/site_vooov">Dépot GitHub vooov web</a>
                    </p>
                <h3>Détail des tâches effectuées :</h3>  
                    <p>
                    Organisation de l'architecture du site web. 
                    Création de barres de recherches.
                    Déploiement de site sur serveur VPS.
                    Création d'un back-office.
                    Création d'un espace authentification.

                    </p>
                <h3>Les connaissance clé débloquées par ce projet sont :</h3>  
                    <p>
                        Organisation du temps de production, perfectionnement des connaissance Symfony. Meilleure prise en main des requête auprès de l'ORM Doctrine. 
                    </p>
                <h3>Tableau Récapitulatif</h3>  
                    <embed class="cv" src="../view/ressources/tableau_ppe/tab_vooov_web.pdf" width="1000" height="1000" type="application/pdf" alt ="Grille des réalisations">
        </article>

    </main>

    <aside>
        <?php require_once '../view/content/aside.php';?>
    </aside>



    <?php require_once '../view/content/footer.php';?>
</body>