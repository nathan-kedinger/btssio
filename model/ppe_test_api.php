<?php 
require '../view/front_const/header_const.php';
 $pageTitle = REALISATIONS;
require_once '../view/content/head.php';
require_once '../view/content/header.php';?>

<body>
    <main>
        <article>
            <h2>Conception d’une application Android de test d'API</h2>  
                <h3>Contexte : </h3>  
                    <p>
                    Dans le cadre des PPE nous avons eu pour consigne de 
                    réaliser un groupe d’applications comprenant un site 
                    web, une application mobile et une application lourde. 
                    Afin de mettre en lien les données de ces trois applications, 
                    il est nécessaire de construire une API. Cette application a été
                    créé dans le but de tester l'API sur un mobile.
                    </p>
                <h3>Objectif : </h3>  
                    <p>
                    Réaliser une application mobile de test d'échange de données entre l'appareil mobile et le serveur.
                    </p>
                <h3>Technologies utilisées :</h3>  
                    <p>
                    Kotlin<br> 
                    Retrofit<br>
                    </p>
                <h3>Utilisateurs : </h3>  
                    <p>
                    Testeur, depuis un appareil mobile ou un emulateur.
                    </p>
                <h3>Environnement de développement :</h3>  
                    <p>
                    PC (Windows 11)<br>
                    Android Studio
                    </p>
                <h3>Gestion du versioning :</h3>  
                    <p>
                    Github : <a class="lien_ppe"  href="https://github.com/nathan-kedinger/TestApi">Dépot GitHub </a>
                    </p>
                <h3>Détail des tâches effectuées :</h3>  
                    <p>
                    Cette Application est une application simple possédant un bouton d'ajout, de lecture, de suppression, 
                    et de modification. Un formulaire d'ajout de données est également présent. un recyclerView
                    a été utilisé pour afficher les données de base de données. Un affichage de donnée unique est également présent et modifiable 
                     via le formulaire et le bouton de lecture.<br>
                <h3>Les connaissance clé débloquées par ce projet sont :</h3>  
                    <p>
                    Cette expérience m’a permis de prendre en main la bibliothèque Retrofit. Elle m'a permis de manipuler des 
                    données entre l'application et le serveur. Elle m'a également permis de créer une base pour l'application Vooov.<br>

                    -	Bibliothèque Retrofit<br>
                    -	Utilisation des RecyclerView<br>
                    -	Déploiement de test sur appareil Android.<br>
                    -	Dépôt du projet sur GitHub.<br>
                    -	Test Via Postman.<br>
                    -	Base de données.
                     </p>
                <h3>Tableau Récapitulatif</h3>  
                    <img class="tableau_ppe" src="../view/ressources/tableau_ppe/tab_test_api.png">
                <h3>Liens des productions</h3>
                    <ul>
                        <li><a class="lien_ppe" href="https://github.com/nathan-kedinger/TestApi"><p>Lien GitHub</p></a></li>
                        <li><a class="lien_ppe" href="ppe_vooov.php"><p>Projet Vooov</p></a></li>
                    </ul>
        </article>

    </main>

    <aside>
        <?php require_once '../view/content/aside.php';?>
    </aside>



    <?php require_once '../view/content/footer.php';?>
</body>