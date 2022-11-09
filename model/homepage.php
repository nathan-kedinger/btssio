<?php 
require_once '../view/front_const/header_const.php';
$pageTitle = $homepage;
require_once '../view/content/head.php';
?>

<body>

    <?php
        require_once '../view/content/header.php';
    ?>

    <div class="accueil">
        <?php
        // special homepage view
        require_once '../view/content/accueil.php';
        ?>
    </div>
    
    <main>
        <?php
        //articles
        require_once '../view/content/articles/homepage/whoIAm.php';
        require_once '../view/content/articles/homepage/foreword.php';
        require_once '../view/content/articles/homepage/objectif.php';
        require_once '../view/content/articles/homepage/informatic_knowledge.php';
        require_once '../view/content/articles/homepage/qualities.php';
        ?>
    </main>

    <aside>
        <?php require_once '../view/content/aside.php';?>
    </aside>

    <?php require_once '../view/content/footer.php';?>

</body>







