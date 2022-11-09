<?php require '../view/front_const/header_const.php';
 $pageTitle = CV;
require_once '../view/content/head.php';
require_once '../view/content/header.php';?>

<body>
    <main>
        <article>       
            <h2>CV</h2>
            <p>Voici mon CV, un petit échantillon de mon parcour professionnel</p>
            <embed class="cv" src='../view/ressources/images/CV/KEDINGER_CV.pdf' width="1000" height="1000" type="application/pdf" alt ="CV">
        </article>
    </main>
    <aside>
        <?php require_once '../view/content/aside.php';?>
    </aside>



    <?php require_once '../view/content/footer.php';?>

</body>



