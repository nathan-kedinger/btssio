<?php 
require '../view/front_const/header_const.php';
 $pageTitle = REALISATIONS;
require_once '../view/content/head.php';
require_once '../view/content/header.php';?>

<body>
    <main>
        <article>
            <h2>Conception d’une application mobile Android de réseau social vocal</h2>  
                <h3>Contexte : </h3>  
                    <p>
                    Dans le cadre des PPE nous avons eu pour consigne de 
                    réaliser un groupe d’applications comprenant un site 
                    web, une application mobile et une application lourde. 
                    Voici la partie mobile du projet.
                    </p>
                <h3>Objectif : </h3>  
                    <p>
                    Réaliser une application mobile de réseau social d'échange vocal.
                    </p>
                <h3>Technologies utilisées :</h3>  
                    <p>
                    Kotlin<br> 
                    Retrofit<br>
                    Android<br>
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
                    Github : <a class="lien_ppe"  href="https://github.com/nathan-kedinger/api_vooov">Dépot GitHub </a>
                    </p>
                <h3>Détail des tâches effectuées :</h3>  
                    <p>
                    Cette Application est une application relativement complexe. Elle permet à l'Utilisateur
                    de créer un compte, de se connecter, d'enregistrer <br>
                <h3>Les connaissance clé débloquées par ce projet sont :</h3>  
                    <p>
                    Cette expérience m’a permis de prendre en main le langage Kotlin et l'environnement de développement Android Studio. 
                    J'ai également pu approfondir ma maitrise de bibliothèque Retrofit, des outils MediaRecorder et MediaPlayer,
                    les coroutines... Elle m'a permis de manipuler des données entre l'application et le serveur. 
                    Vous pouvez retrouver une explication plus approfondie du projet à la page précédente dans l'encart PDF
                    en haut de page. 

                    -	Bibliothèque Retrofit<br>
                    -	Utilisation des RecyclerView<br>
                    -	Utilisation des Coroutines<br>
                    -	Utilisation des outils multimedia d'Android<br>
                    -	Déploiement de test sur appareil Android.<br>
                    -	Dépôt du projet sur GitHub.<br>
                    -	Test Via Postman.<br>
                    -	Base de données.
                     </p>
                <h3>Tableau Récapitulatif</h3>  
                    <img class="tableau_ppe" src="../view/ressources/tableau_ppe/tab_vooov.png">
                <h3>Liens des productions</h3>
                    <ul>
                        <li><a class="lien_ppe" href="https://github.com/nathan-kedinger/Vooov"></a><p></p></li>
                        <li><a class="lien_ppe" href="ppe_vooov.php"></a><p></p></li>
                    </ul>
        </article>

    </main>

    <aside>
        <?php require_once '../view/content/aside.php';?>
    </aside>



    <?php require_once '../view/content/footer.php';?>
</body>