<?php require '../view/front_const/header_const.php';
 $pageTitle = WATCH;
require_once '../view/content/head.php';
require_once '../view/content/header.php';?>

<body>
    <main>
        <article class="inProgress">
            <h2>Work In Progress...</h2>
            <div class="lds-ring"><div></div><div></div><div></div><div></div></div>
        </article>
        <article>
            <h2>Veilles</h2>
            <p> Bienvenus dans cet espace dédié à la veille. <br>Au début de cette formation, 
                il m'a été demander de choisir deux sujets de veille, l'un concernant un aspect juridique 
                et l'autre concernant un aspect technologique.<br>
                L'objectif de ces requêtes est de nous familiariser avec la veille. <br>
                <h3> qu'est-ce qu'une veille?</h3><br>
                <p> La veille consiste tout simplement à écouter les actualités sur un sujet donné. le but étant d'en récolter les données
                . Ces données peuvent par la suite servir à faire des analyses de marché pour une entreprise, rester informé sur les dernière mise à jours et 
                évolutions de langages de programmation, ...Il est necessaire dans cet
                exercice de pratiquer des recherches actives. Cependant,  avec l'aide des technologies actuelles,
                s'en contenter serait une erreur.</p><br>
                <p> En effet, un veille doit également être passive. Pour ce faire, il est 
                nécessaire de mettre en place certains outils. Les flux RSS, les abonnements à des newsletters, 
                des applications telles que Feedly... Et bien évidemment, n'oublions
                pas les métodes encestrales comme les abonnement à la presse papier spécialisée, 
                ou encore l'écoute de chaînes de radio.</p><br>
                <p> Pour ma part, je passe environ dix minutes le matin et dix minutes le soir à relever les articles 
                interséptés par feedly. Je réalise ensuite le tri de ce qui me semble pertinent grâce aux intitulés d'articles,
                et je conserve ceux qui me paraissent les plus pertinents. Je suis égalmenet abonné au magazine "" spécialisé dans 
                le domaîne de l'informatique duquel j'extrait également des données, ainsi que des articles choisis par Les
                journalites et relayés dans ce journal.</p><br>
                <p> Après cette rapide présentation de l'outil qu'est la veille, j'en viens aux sujets que j'ai choisis
                pour cet exercice.</p><br>
                <p> Concernant la veille technologique, je me sui penché sur le cas de l'intelligence artificielle.
                Concernant la veille juridique, je suis résté à l'écoute des évolutions du RGPD.
                Je fais suivre les différents articles que j'ai pu récolter sur ces deux sujets.
                Chaque liste sera référencée sur une page dédiée. Vous pourrez vous diriger vers celles-ci en cliquant sur les images ci-dessous.
                </p>
        </article>
        <article>
            <h2 href ="./watch_ia.php">Veille Technologique - Intelligence Artificielle</h2>
            <a href="./https://www.pearltrees.com/natked/technologique-intelligence/id64044440"><img src="../view/ressources/images_watches/ia.png"></a>
        </article>
        <article>
            <h2 href ="./watch_rgpd.php">Veille Juridique - RGPD</h2>
            <a href="watch_rgpd.php"><img src="../view/ressources/images_watches/rgpd.png"></a>
            
        </article>
    </main>
    <aside>
        <?php require_once '../view/content/aside.php';?>
    </aside>



    <?php require_once '../view/content/footer.php';?>
</body>







