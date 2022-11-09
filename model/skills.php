<?php require '../view/front_const/header_const.php';
 $pageTitle = SKILLS;
require_once '../view/content/head.php';
require_once '../view/content/header.php';?>

<body>
    <main>
        <?php 
        require_once '../view/content/articles/homepage/informatic_knowledge.php';
        require_once '../view/content/articles/skills/presentation.php';

        ?>

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








