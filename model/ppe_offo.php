<?php 
require '../view/front_const/header_const.php';
 $pageTitle = REALISATIONS;
require_once '../view/content/head.php';
require_once '../view/content/header.php';?>

<body>
    <main>
        <article>
            <h2>Application Android permettant le lien entre voix-off et recruteurs</h2>  
                <h3>Contexte : </h3>  
                    <p>
                    Cette application avait pour but de répondre à une demande client d’un site de voix-off. Le projet à été modifié pour répondre à une plus grande demande.
                    </p>
                <h3>Objectif : </h3>  
                    <p>
                    Réaliser une application mobile.
                    </p>
                <h3>Technologies utilisées :</h3>  
                    <p>
                    Kotlin <br>
                    FireBase
                    </p>
                <h3>Utilisateurs : </h3>  
                    <p>
                    Partie de lecture des enregistrements publique sans inscription.<br>
                    Partie studio d’enregistrement et service de messagerie entre utilisateurs privée avec inscrption.
                    </p>
                <h3>Environnement de développement :</h3>  
                    <p>
                    Android Studio<br>
                    PC (Windows 11) 
                    </p>
                <h3>Gestion du versioning :</h3>   
                    <p>
                    Github : <a class="lien_ppe" href="https://github.com/nathan-kedinger/offo">Dépot GitHub </a>
                    </p>
                <h3>Détail des tâches effectuées :</h3>  
                    <p>
                    Le projet de cette application a été remplacé par le projet Vooov, 
                    présenté également dans les travaux pratiques réalisés. Il a été 
                    remplacé car la partie donnée fonctionnait avec Firebase de google. 
                    Une API de gestion de base de données en NoSQL. C’était problématique 
                    pour répondre aux besoins scolaires d'utilisation du langage SQL.<br><br>
                    Pour cette application, je me suis auto-formé au langage Kotlin et à l’utilisation de l’IDE intelliJ avec Android Studio.
                    </p>
                <h3>Les connaissance clé débloquées par ce projet sont :</h3>  
                    <p>
                    -	Connaissance en développement mobile
                    -	Connaissance en base de données NoSQL et sur l’API FireBase<br>
                    -	Dépôt du projet sur github<br>
                    </p>
                <h3>Tableau Récapitulatif</h3>  
                    <img class="tableau_ppe" src="../view/ressources/tableau_ppe/tab_offo.png">
                <h3>Liens des productions</h3>
                    <ul>
                        <li><a class="lien_ppe" href="../view/ressources/ppe/bdd_firebase.png">Capture d'écran Firebase</a></li>
                        <li><a class="lien_ppe" href="../view/ressources/ppe/certificat_kotlin.jpg">Certificat de formation Kotlin</a></li>
                        <li><a class="lien_ppe" href="https://github.com/nathan-kedinger/offo/tree/main/app/src/main">Repository GitHub</a></li>
                    </ul>
        </article>

    </main>

    <aside>
        <?php require_once '../view/content/aside.php';?>
    </aside>



    <?php require_once '../view/content/footer.php';?>
</body>