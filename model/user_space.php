<?php 
require_once '../view/front_const/header_const.php';
$pageTitle = $profil;
require_once '../view/content/head.php';
?>

<body>

    <?php
        require_once '../view/content/header.php';
        ?>
    <main>    
        <article>
        <h1><?php echo $_SESSION['username'] ?></h1>

        <button><a href='connexion/delete_profil_confirmation.php'>Supprimer le profil</a></button>

        </article>
        <article>
            <h1>Information du profil</h1>
            <p>Données du profil :</p>
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







