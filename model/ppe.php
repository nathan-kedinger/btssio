<?php require '../view/front_const/header_const.php';
 $pageTitle = REALISATIONS;
require_once '../view/content/head.php';
require_once '../view/content/header.php';?>

<body>
    <main>

        <article>
            <h2>Réalisations</h2>
            <p>Bienvenus dans cet espace dédié à mes réalisations. 
                C'est ici que j'afficherai mes différentes expériences, sites terminés, à venir, prototype, exercices de langages et alghoritmique...</p>
        </article>
        <article>
        <a href="https://la-super-ferme.fr"><img class="realisation"  src="../view/ressources/images_realisations/superFerme.png"></a><br>
            <p>Deuxième réalisation de site pour un client. L'ensemble du site a été réaliser via le framework Symfony. 
                Il comprend un backoffice de gestion des images et des utilisateurs par le client. Ses clients ont la possibilité de 
                souscrire à un abonnement pour des paniers à venir récupérer toutes les semaines. Vous pouvez vous rendre 
                sur le site via le lien suivant : <a href="https://la-super-ferme.fr">www.bts-sio-kedinger.fr</a> <br>
                n'hésitez pas à rendre visite à <a href="https://la-super-ferme.fr">La Super Ferme</a>, Ils cultivent de supers légumes
                et réalisent des formations indispensable pour tous les jardiniers en devenir.
            </p>

        </article>
        <article>
        <a href="https://www.lbt-menuiserie.fr"><img class="realisation"  src="../view/ressources/images_realisations/lbtMenuiserie.png"></a><br>
            <p>Première réalisation de site pour un client. La réalisation du site a duré trois semaines avec la réalisation de wireframes, de maquettes, la constitution d'un business plan et d'une étude de marché et la mise en forme des images du client (dimensions et retouches).
                La réalisation du site comprend l'ensemble du front (HTML, CSS et JS) et du back
                (PHP et MySQL comprennant un back office pour la gestion d'ajout et de suppression d'images par le client et la consultation d'outils d'analyse SEO). Cette exercice et celui de la création
                du site <a href="https://www.lbt-menuiserie.fr">www.lbt-menuiserie.fr</a> me permettent au fur et à mesure de constituer une forme de bibliothèque de fonctions en JS et en 
                PHP.<br>
                n'hésitez pas à faire appel à l'entreprise <a href="https://www.lbt-menuiserie">LB Trièves Menuiserie</a> si vous avez besoin d'un bon menuisier !
            </p>

        </article>
        <article>
            <a href="https://nathankedinger8.wixsite.com/website"><img class="realisation"  src="../view/ressources/images_realisations/wix.png"></a><br>
            <p>voici le premier <a href="https://nathankedinger8.wixsite.com/website">Site</a> web que j'ai réalisé, via le cms WIX. Ce site était principalement basé
            sur l'UX. Le but étant de donner de la visibilité à mes produits, j'ai choisi une stratégie très visuel, avec des images colorés et immersives. Cependant le support de ces 
            ces visuels se devait d'être épuré. l'objectif étant afin de ne pas perturber l'oeuil du potentiel client..
            Le design du site permet d'accéder rapidement aux informations. Un client recherchant un menuisier trouve rapidement ce qu'il cherche.
            Un effort a particulièrement été apporté au référencement lors de la mise en place du site.
            J'ai aujourd'hui perdu le domaine, puisque je n'en ai plus besoin dans ma nouvelle activité.</p>
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








