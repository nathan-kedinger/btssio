<?php 
require '../view/front_const/header_const.php';
 $pageTitle = EPREUVEE4;
require_once '../view/content/head.php';
require_once '../view/content/header.php';?>

<body>
    <main>

        <article>
            <h2>Réalisations</h2>
            <p>Bienvenus dans cet espace dédié à mes réalisations. 
                C'est ici que j'afficherai mes différentes expériences, sites terminés, à venir, prototypes, exercices de langages et alghoritmiques...<br><br>
                <h3>Épreuve E4</h3>
                Vous pourez retrouver le détail de chaques réalisation via les <strong>boutons "Documentation épeuve E4"</strong> au bas de chacun des articles suivants.<br><br>
                De plus, vous pouvez trouver ci-joint l'annexe 6.1 répertoriant mes expériences professionnelles ainsi que les compétences impliquées 
                à mettre en œuvre : </p><br>
            <embed class="cv" src='../view/ressources/ppe/annexe_e6-1.pdf' width="1000" height="1000" type="application/pdf" alt ="Grille des réalisations">
                
        </article>
        <article>
            <h3>Application Android Vooov</h3>
                <a href="ppe_vooov.php"><img class="realisation"  src="../view/ressources/ppe/screen_vooov.jpg"></a><br>
                <p>Cette application a pour but de répondre à une demande client d’un site de voix-off. 
                    Ce projet est l'application modifié de l'application offo. Elle est plus poussé en terme de fonctionnalités
                    et utilise une API propre plutôt que l'API Firebase. Elle fonctionne comme un réseau social vocal. Il est possible de communiquer par 
                    message entre les utilisateurs, de se connecter et d'écouter les enregistrements des autres utilisateurs.
                </p><br>
                <button><a href="ppe_vooov.php">Documentation épeuve E4</a></button>
        </article>
        <article>
            <h3>API Vooov</h3>
                <a href="ppe_api_vooov.php"><img class="realisation"  src=""></a><br>
                <p>Dans le cadre des PPE nous avons eu pour consigne de réaliser un groupe d’applications comprenant un site web, 
                    une application mobile et une application lourde. Afin de mettre en lien les données de ces trois applications, 
                    il est nécessaire de construire une API.<br>
                    Voici donc l'API de Vooov qui vous est présentée ici.
                </p><br>
                <button><a href="ppe_api_vooov.php">Documentation épeuve E4</a></button>
        </article>
        <article>
            <h3>Site Web La Super Ferme</h3>
                <a href="https://la-super-ferme.fr"><img class="realisation"  src="../view/ressources/images_realisations/superFerme.png"></a><br>
                <p>Deuxième réalisation de site pour un client. L'ensemble du site a été réaliser via le framework Symfony. 
                    Il comprend un backoffice de gestion des images et des utilisateurs par le client. Ses clients ont la possibilité de 
                    souscrire à un abonnement pour des paniers à venir récupérer toutes les semaines. Vous pouvez vous rendre 
                    sur le site via le lien suivant : <a href="https://la-super-ferme.fr">www.la-super-ferme.fr</a> <br>
                    n'hésitez pas à rendre visite à <a href="https://la-super-ferme.fr">La Super Ferme</a>, Ils cultivent de supers légumes
                    et réalisent des formations indispensable pour tous les jardiniers en devenir.
                </p><br>
                <button><a href="ppe_super_ferme.php">Documentation épeuve E4</a></button>
        </article>
        <article>
            <h3>Serveur VPS</h3>
                <a href="ppe_serveur.php"><img class="realisation"  src=""></a><br>
                <p>Déploiement d’un serveur VPS privé hébergé par hostinger. Déploiement de l’outil 
                    CyberPanel sur Ubuntu. Approfondissement des connaissances sur le fonctionnement 
                    du réseau, du stockage et des échanges web. Capacité d’hébergement modulables 
                    pour l’hébergement des applications Vooov.
                </p><br>
                <button><a href="ppe_serveur.php">Documentation épeuve E4</a></button>
        </article>
        <article>
            <h3>Application Android test CRUD pour l'API Vooov</h3>
                <a href="ppe_test_api.php"><img class="realisation"  src=""></a><br>
                <p>Dans la continuité du projet PPE nous avons eu pour consigne de 
                    réaliser un groupe d’applications comprenant un site 
                    web, une application mobile et une application lourde. 
                    Afin de mettre en lien les données de ces trois applications, 
                    il est nécessaire de construire une API. Cette application a été
                    créé dans le but de tester l'API sur un mobile.
                </p><br>
                <button><a href="ppe_test_api.php">Documentation épeuve E4</a></button>
        </article>
        <article>
            <h3>Application Android OFFO</h3>
                <a href="ppe_offo.php"><img class="realisation"  src="../view/ressources/ppe/screen_offo.jpg"></a><br>
                <p>Cette application avait pour but de répondre à une demande client d’un site de voix-off. 
                    Le projet à été modifié pour répondre à une plus grande demande et à des besoins scolaires. 
                    Elle fait usage de l’API Firebase. Sa construction a été interrompue au profit d’une 
                    application possédant son API propre.
                </p><br>
                <button><a href="ppe_super_ferme.php">Documentation épeuve E4</a></button>
        </article>
        <article>
            <h3>Site Web Présentation et Portfolio du BTS SIO</h3>
                <a href="https://www.bts-sio-kedinger.fr/model/homepage.php"><img class="realisation"  src="../view/ressources/images_realisations/bts_sio.png"></a><br>
                <p>Site web a été réalisé « from scratch ».<br><br> 
                    Ce site est mon premier projet en entrée de BTS. Il m’a servi de terrain d’entrainement 
                    à l’apprentissage des bases des langages du web. Le HTML, CSS, PHP et Javascript, 
                    sans faire usage de bibliothèque externe supplémentaires.
                </p><br>
                <button><a href="ppe_bts_sio.php">Documentation épeuve E4</a></button>
        </article>
        <article>
            <h3>Site LBT Menuiserie</h3>
                <a href="https://www.lbt-menuiserie.fr"><img class="realisation"  src="../view/ressources/images_realisations/lbtMenuiserie.png"></a><br>
                <p>Première réalisation de site pour un client. La réalisation du site a duré trois semaines avec la réalisation de wireframes, de maquettes, la constitution d'un business plan 
                    et d'une étude de marché et la mise en forme des images du client (dimensions et retouches).
                    La réalisation du site comprend l'ensemble du front (HTML, CSS et JS) et du back
                    (PHP et MySQL comprennant un back office pour la gestion d'ajout et de suppression d'images par le client et la consultation d'outils d'analyse SEO). Cette exercice et celui de la création
                    du site <a href="https://www.lbt-menuiserie.fr">www.lbt-menuiserie.fr</a> me permettent au fur et à mesure de constituer une forme de bibliothèque de fonctions en JS et en 
                    PHP.<br>
                    n'hésitez pas à faire appel à l'entreprise <a href="https://www.lbt-menuiserie">LB Trièves Menuiserie</a> si vous avez besoin d'un bon menuisier !
                </p><br>
                <button><a href="ppe_lbtMenuiserie.php">Documentation épeuve E4</a></button>

        </article>
        <article>
        <h3>Stage dans l'entreprise Exeed</h3>
                <a href="ppe_exeed.php"><img class="realisation"  src=""></a><br>
                <p>Réalisation d'un stage en entreprise. participation à différents projet. Réalisation de rédaction,
                    déploiement sur serveur hostinger et utilisation de divers widgets Wordpress.
                </p><br>
                <button><a href="ppe_exeed.php">Documentation épeuve E4</a></button>
        </article>
        <article>
        <h3>Stage dans l'entreprise HISSE Olivia</h3>
                <a href="ppe_hisse_olivia.php"><img class="realisation"  src=""></a><br>
                <p>Réalisation d'un stage en entreprise. Support au professionel. Réalisation de tests unitaires,
                    réalisation de revue de code.
                </p><br>
                <button><a href="ppe_hisse_olivia.php">Documentation épeuve E4</a></button>
        </article>
        <article>
            <h3>Site Web réalisé sur CMS</h3>
                <a href="https://nathankedinger8.wixsite.com/website"><img class="realisation"  src="../view/ressources/images_realisations/wix.png"></a><br>
                <p>voici le premier <a href="https://nathankedinger8.wixsite.com/website">Site</a> web que j'ai réalisé, via le cms WIX. Ce site était principalement basé
                sur l'UX. Le but étant de donner de la visibilité à mes produits, j'ai choisi une stratégie très visuel, avec des images colorés et immersives. Cependant le support de ces 
                ces visuels se devait d'être épuré. l'objectif étant afin de ne pas perturber l'oeuil du potentiel client..
                Le design du site permet d'accéder rapidement aux informations. Un client recherchant un menuisier trouve rapidement ce qu'il cherche.
                Un effort a particulièrement été apporté au référencement lors de la mise en place du site.
                J'ai aujourd'hui perdu le domaine, puisque je n'en ai plus besoin dans ma nouvelle activité.<br><br>
                Ce site a été réalisé  avant mon entrée en BTS, il ne sera pas utilisé comme référence.
                 </p>
        </article>

        <article class="inProgress">
            <h2>Work In Progress...</h2>
            <div class="lds-ring"><div></div><div></div><div></div><div></div></div>
        </article>
    </main>

    <aside>
        <?php require_once '../view/content/aside.php';?>
    </aside>



    <?php require_once '../view/content/footer.php';?>
</body>








