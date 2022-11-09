<?php
session_start();
require '../view/content/menu.php';
?>
<body>
  <div id="title"></div>
<header>                 
<h1 class="title"><a href="./homepage.php"><img class="logo-menu" src="../view/ressources/logo/logo_NK.svg"></a><div class="txt-title"><?php echo $headerTitle ?></div></h1>
  <img class="hide_logo"src="../view/ressources/logo/logo_NK.svg" href="./homepage.php"></a>
    <nav>
      <div class="menu">
        <?php

          echo '<ul>';

          foreach ($menu as $tab=>$tabInformation){
            echo '<li class="boutons">','<a href="./'.$menu[$tab]['link'].'">'.$menu[$tab]['tab'].'</a>';if(!empty($menu[$tab][$tab]['utab'])){
              foreach ($menu as $utab=>$utabInformation){
                echo '<ul><li><a href="./.'.$menu[$tab][$utab]['ulink'].'">'.$menu[$tab][$utab]['utab'].'</a></li>';
              }
            };'</li>';
          }
          echo'</ul>';
        ?>
      </div>

      

      <div class="menu-derroulant">

        <label for="mobile">
          <div class="humberger-lines">
            <span class="line line1"></span>
            <span class="line line2"></span>
            <span class="line line3"></span>
          </div> 
        </label>
        <input type="checkbox" id="mobile" role="button">

        <?php

          echo '<ul>';

          foreach ($menu as $tab=>$tabInformation){
            //rajouter ../page?
            echo '<li><a href="./'.$menu[$tab]['link'].'">'.$menu[$tab]['tab'].'</a></li>';
          
          }
          echo'</ul>';
        ?></a>
      </div>
  </nav>
  
      <a class="logo-linkedin" href="https://www.linkedin.com/in/nathan-kedinger-1a0871187"><img class="logo" src="../view/ressources/logo/logo-linkedin.png"></a>
      
      <a class="logo-mail" href="./contact.php"><img class="logo" src="../view/ressources/logo/logo-mail.png"></a>
      
      <a class="logo-github" href="https://github.com/nathan-kedinger"><img class="logo" src="../view/ressources/logo/logo-github.png"></a>


</header>