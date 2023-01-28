<?php 
require '../view/front_const/header_const.php';
 $pageTitle = REALISATIONS;
require_once '../view/content/head.php';
require_once '../view/content/header.php';?>

<body>
    <main>
        <article>
            <h2></h2>  
                <h3>Contexte : </h3>  
                    <p>
                    La jeune entreprise de menuiserie LBT Menuiserie a fait appel à mes services pour la réalisation de son site web de présentation. Elle souhaitait augmenter sa visibilité et permettre une prise de contact par ses futurs clients.
                    </p>
                <h3>Objectif : </h3>  
                    <p>
                    Réaliser un site web vitrine pour une entreprise de menuiserie. Demande de travail sur le référencement du site internet. Accès des clients à une prise de contact par formulaire de contact.
                    </p>
                <h3>Technologies utilisées :</h3>  
                    <p>
                    PHP, HTML, CSS JavaScript, SQL.
                    </p>
                <h3>Utilisateurs : </h3>  
                    <p>
                    Partie publique sans inscription.<br>
                    Partie administrateur.

                    </p>
                <h3>Environnement de développement :</h3>  
                    <p>
                    PC (Windows 11)<br>
                    VSCode
                    </p>
                <h3>Gestion du versioning :</h3>  
                    <p>
                    Github : <a class="lien_ppe" href="https://github.com/nathan-kedinger/LBT-Menuiserie">Dépot GitHub LBT-Menuiserie</a>
                    </p>
                <h3>Détail des tâches effectuées :</h3>  
                    <p>
                    Ce site web a été réalisé « from scratch ». <br><br>
Ce site est mon deuxième projet de BTS. Il m’a permis de consolider mes bases des langages du web. Le HTML, CSS, PHP et Javascript. Réalisé sans faire usage de bibliothèque externe supplémentaires. Backoffice de gestion des images.<br><br>
                <h3>Les connaissance clé débloquées par ce projet sont :</h3>  
                    <p>
                    -	Familiarisation avec les langages du web.<br>
                    -	Mise en place de système d’identification et de connexion sécurisée. Mot de passe hashé par Bcrypt.<br>
                    -	Déploiement et utilisation d’une base de données MySQL via PHPMyAdmin sécurisés. (Notamment via l’objet PDO de php) Stockage des images dans la base.<br>
                    -	Mis en place d’un système de ticketing simple via un formulaire de contact.<br>
                    -	Le déploiement du site sur un hébergeur web. Dans ce cas, hostinger.<br>
                    -	Dépôt du projet sur github.<br>
                    -	Gestion du responsive.<br>
                    </p>
                <h3>Tableau Récapitulatif</h3>  
                    <img class="tableau_ppe" src="../view/ressources/tableau_ppe/tab_lbtMenuiserie.png">
                <h3>Liens des productions</h3>
                    <ul>
                        <li><a class="lien_ppe" href="../view/ressources/ppe/mcd_lbtMenuiserie.png">Diagramme MCD</a></li>
                        <li><a class="lien_ppe" href="https://www.lbt-menuiserie.fr/model/homepage.php">Preuve de déploiement</a></li>
                        <li><a class="lien_ppe" href="https://github.com/nathan-kedinger/LBT-Menuiserie">Repository GitHub</a></li>
                        <li><a class="lien_ppe" href="https://github.com/nathan-kedinger/LBT-Menuiserie/blob/master/controller/functions/contact_form/form_functions.php">Code source du formulaire de contact</a></li>
                    </ul>
        </article>

    </main>

    <aside>
        <?php require_once '../view/content/aside.php';?>
    </aside>



    <?php require_once '../view/content/footer.php';?>
</body>