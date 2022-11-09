<?php require '../view/front_const/header_const.php';
    $pageTitle = CONTACT;
    require_once '../view/content/head.php';
    require_once '../view/content/header.php';
?>

<body>
    <main>         
        <?php
        require_once '../view/content/articles/contact/welcome_contact.php';
        require_once '../view/content/articles/contact/form.php';
        ?>        
    </main>
    
    <aside>
        <?php require_once '../view/content/aside.php';?>
    </aside>

    <?php require_once '../view/content/footer.php';?>
</body>







