<?php 
require '../view/front_const/header_const.php';
 $pageTitle = REALISATIONS;
require_once '../view/content/head.php';
require_once '../view/content/header.php';?>

<body>
    <main>
        <article>
            <h2>Site Web de présentation</h2>  
                <h3>Contexte : </h3>  
                    <p>
                    BTS SIO option SLAM
                    </p>
                <h3>Objectif : </h3>  
                    <p>
                    Réaliser un site web à double vocation, portfolio et CV professionnel. Créer et déployer la base de données le site en ligne.
                    </p>
                <h3>Technologies utilisées :</h3>  
                    <p>
                    PHP, HTML, CSS JavaScript, SQL
                    </p>
                <h3>Utilisateurs : </h3>  
                    <p>
                    Partie publique sans inscription.<br><br>
                    Partie

                    </p>
                <h3>Environnement de développement :</h3>  
                    <p>
                    PC (Windows 11)<br>
                    VSCode
                    </p>
                <h3>Gestion du versioning :</h3>  
                    <p>
                    Github : <a href="https://github.com/nathan-kedinger/btssio">Dépot GitHub BTS-sio</a>
                    </p>
                <h3>Détail des tâches effectuées :</h3>  
                    <p>
                    Ce site web a été réalisé « from scratch ». <br><br>
                    Ce site est mon premier projet en entrée de BTS. Il m’a servi de terrain d’entrainement à l’apprentissage des bases des langages du web. Le HTML, CSS, PHP et Javascript, sans faire usage de bibliothèque externe supplémentaires.<br><br>
                    Il permet une inscription connexion sécurisée avec un mot de passe hashé par Bcrypt de php. Une modification de ses paramètres utilisateur.<br><br>
                    </p>                
                <h3>Les connaissance clé débloquées par ce projet sont :</h3>  
                    <p>
                    -	Apprentissage et familiarisation avec les langages du web.<br>
                    -	Mise en place de système d’identification et de connexion sécurisée. Mot de passe hashé par Bcrypt.<br>
                    -	Déploiement et utilisation d’une base de données MySQL via PHPMyAdmin sécurisés. (Notamment via l’objet PDO de php).<br>
                    -	Différenciation de connexion entre administrateur et utilisateur simple.<br>
                    -	Mis en place d’un système de ticketing simple via un formulaire de contact.<br>
                    -	Le déploiement du site sur un hébergeur web. Dans ce cas, hostinger.<br>
                    -	Dépôt du projet sur github.<br>
                    -	Gestion du responsive.<br>

                    </p>
                <h3>Tableau Récapitulatif</h3>  
                    <img class="tableau_ppe" src="../view/ressources/tableau_ppe/tab_bts_sio.png">
                <h3>Liens des productions</h3>
                    <ul>
                        <li><a class="lien_ppe" href="../view/ressources/tableau_ppe/tab_bts_sio.png">Diagramme MCD</a></li>
                        <li><a class="lien_ppe" href="../view/ressources/ppe/test_unitaire_bts_sio.png">Exemple de test unitaire.</a><p> Ici le problème provient des identifiants de connexion. Cela se produit car le site est déjà en production et les identifiants sont réglés sur la BDD du serveur.</p></li>
                        <li><a class="lien_ppe" href="https://www.bts-sio-kedinger.fr/model/homepage.php">Preuve de déploiement</a></li>
                        <li><a class="lien_ppe" href="https://github.com/nathan-kedinger/btssio">Le code source</a></li>
                        <li><a class="lien_ppe" href="https://github.com/nathan-kedinger/btssio/blob/master/controller/functions/connexion/connexion_function.php">Fonction d'identification et de hashage de mot de passe</a></li>
                        <li><a class="lien_ppe" href="https://www.bts-sio-kedinger.fr/model/watch.php">Page de veilles</a></li>
                        <li><a class="lien_ppe" href="https://www.bts-sio-kedinger.fr/model/cv.php">Page de CV</a></li>
                    </ul>
        </article>

    </main>

    <aside>
        <?php require_once '../view/content/aside.php';?>
    </aside>



    <?php require_once '../view/content/footer.php';?>
</body>