<?php 
require '../view/front_const/header_const.php';
 $pageTitle = REALISATIONS;
require_once '../view/content/head.php';
require_once '../view/content/header.php';?>

<body>
    <main>
        <article>
            <h2>Mise en place d'un serveur VPS d'hébergement dédié</h2>  
                <h3>Contexte : </h3>  
                    <p>
                    BTS SIO option SLAM
                    </p>
                <h3>Objectif : </h3>  
                    <p>
                    Mettre en place un serveur VPS privé pour y héberger l’application web de Vooov, la base de données du projet et l’API. Sécuriser le serveur.
                    </p>
                <h3>Technologies utilisées :</h3>  
                    <p>
                    SSH PuTTY, CyberPanel, Lignes de commandes Ubuntu
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
                    Déploiement d’un serveur VPS privé hébergé par hostinger. Déploiement de l’outil CyberPanel sur Ubuntu. Approfondissement des connaissances sur le fonctionnement du réseau, du stockage et des échanges web.<br>
                    Capacité d’hébergement modulables pour l’hébergement des applications Vooov.

                    </p>
                <h3>Les connaissance clé débloquées par ce projet sont :</h3>  
                    <p>
                    -	Attribution d’une adresse IP.<br>
                    -	Gestion des certificats SSL.<br>
                    -	Création de DNS et pointage vers le serveur.<br>
                    -	Modification du port d’accès SSH.<br>

                    </p>
                <h3>Tableau Récapitulatif</h3>  
                    <img class="tableau_ppe" src="../view/ressources/tableau_ppe/tab_serveur.png">
                <h3>Liens des productions</h3>
                    <ul>
                        <li><a class="lien_ppe" href="../view/ressources/ppe/terminal_putty.png">Catpure d'écran PuTTY</a></li>
                        <li><a class="lien_ppe" href="../view/ressources/ppe/cyberpanel.png">capture d'écran du panneau d'accueil de CyberPanel</a></li>
                        <li><a class="lien_ppe" href="../view/ressources/ppe/connection_logs.png">Captude d'écran des logs de connexion</a></li>
                    </ul>
        </article>

    </main>

    <aside>
        <?php require_once '../view/content/aside.php';?>
    </aside>



    <?php require_once '../view/content/footer.php';?>
</body>