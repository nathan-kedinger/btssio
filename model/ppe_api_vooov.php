<?php 
require '../view/front_const/header_const.php';
 $pageTitle = REALISATIONS;
require_once '../view/content/head.php';
require_once '../view/content/header.php';?>

<body>
    <main>
        <article>
            <h2>Conception d’une API de gestion de base de données</h2>  
                <h3>Contexte : </h3>  
                    <p>
                    Dans le cadre des PPE nous avons eu pour consigne de réaliser un groupe d’applications comprenant un site web, une application mobile et une application lourde. Afin de mettre en lien les données de ces trois applications, il est nécessaire de construire une API.
                    </p>
                <h3>Objectif : </h3>  
                    <p>
                    Réaliser une API(Application Programming Interface) de gestion de base de données en PHP afin de lier les données de applications sur différents supports.
                    </p>
                <h3>Technologies utilisées :</h3>  
                    <p>
                    PHP<br> 
                    Postman<br>
                    Xdebug<br>
                    PHPDoc<br>
                    Doxygen
                    </p>
                <h3>Utilisateurs : </h3>  
                    <p>
                    Pas d’accès direct, mais permet l'accès aux données, des applications visées.
                    </p>
                <h3>Environnement de développement :</h3>  
                    <p>
                    PC (Windows 11)<br>
                    VSCode
                    </p>
                <h3>Gestion du versioning :</h3>  
                    <p>
                    Github : <a class="lien_ppe"  href="https://github.com/nathan-kedinger/api_vooov">Dépot GitHub </a>
                    </p>
                <h3>Détail des tâches effectuées :</h3>  
                    <p>
                    Cette API est réalisée en PHP. Elle est stockée sur un serveur VPS dédié. Elle permet d’accéder aux données depuis les trois applications.<br>
                    Ce projet correspond à la première partie du projet Vooov après l’étude et le déploiement du serveur et de la base de données. 
                    </p>
                <h3>Les connaissance clé débloquées par ce projet sont :</h3>  
                    <p>
                    Cette expérience m’a apporté une bien meilleure connaissance des protocoles http et du fonctionnement des réseaux web. Elle m’a également permis de comprendre concrètement le but et le fonctionnement des APIs. J’ai appris à me servir de l’outil de génération de commentaire PHP Doc ainsi que la génération automatique de documentation avec Doxygen.
                    -	Connaissance des protocole http.<br>
                    -	Création de documentation via PHPDoc.<br>
                    -	Le déploiement du site sur un serveur VPS dédié.<br>
                    -	Dépôt du projet sur GitHub.<br>
                    -	Test Via Postman.<br>
                    -	Base de données.
                     </p>
                <h3>Tableau Récapitulatif</h3>  
                    <img class="tableau_ppe" src="../view/ressources/tableau_ppe/tab_api.png">
                <h3>Liens des productions</h3>
                    <ul>
                        <li><a class="lien_ppe" href="../view/ressources/ppe/mcd_api.png">Diagramme MCD</a></li>
                        <li><a class="lien_ppe" href="../view/ressources/ppe/files_cyberpanel_api.png">Capture d'écran de dossier sur serveur</a></li>
                        <li><a class="lien_ppe" href="../view/ressources/ppe/postman.png">Capture d'un test de requête http sur Postman</a></li>
                        <li><a class="lien_ppe" href="../html/pages.html">Documentation Doxygen</a></li>
                        <li><a class="lien_ppe" href="https://github.com/nathan-kedinger/api_vooov"></a><p></p></li>
                    </ul>
        </article>

    </main>

    <aside>
        <?php require_once '../view/content/aside.php';?>
    </aside>



    <?php require_once '../view/content/footer.php';?>
</body>