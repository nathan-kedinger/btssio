<?php 
require '../view/front_const/header_const.php';
 $pageTitle = EPREUVEE4;
require_once '../view/content/head.php';
require_once '../view/content/header.php';?>

<body>
    <main>

        <article>
            <h2>Réalisations</h2>
            <p>Bienvenus dans cet espace dédié à l'épreuve E5. 
                C'est ici que j'afficherai mes projets de PPE<br><br>
                <h3>Épreuve E5</h3>
                Vous pourrez trouver ci-dessous un dossier PDF téléchargeable sur les deux dossiers qui 
                seront présentés pour l'épreuve.<br><br>
                Dossier de l'épreuve E5 au format PDF :
            <embed class="cv" src='../view/ressources/ppe/Projets_PPE.pdf' width="1000" height="1000" type="application/pdf" alt ="Projet PPE">
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
