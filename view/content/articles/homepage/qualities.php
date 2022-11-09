<?php 
    require '../view/content/tab/qualities.php';
?>
  <article>
    <h2>MES QUALITÉS</h2>
    <div class ="qualities" data-speed="6000" data-transition="3000">
      <div id="left-nav"><img src="../view/ressources/logo/logo-chevron-gauche-noir.png" alt="chevron gauche"></div>
      <div id="right-nav"><img src="../view/ressources/logo/logo-chevron-droit-noir.png" alt="chevron droit"></div>
      <div class="elements">
    <?php

        //$tabInformation = tab key
      foreach ($qualities as $qualitie=>$tabInformation)
      {
        echo  '
                <div class=" element">
                  <img alt="'.$qualities[$qualitie]['qualitie'].'" src="../view/ressources/images/qualities/'.$qualities[$qualitie]['src'].'.jpg">
                  <h4>'.$qualities[$qualitie]['qualitie'].'</h4>
                  <p>"'.$qualities[$qualitie]['citation'].'</p>
                </div>
              ';
      }
    ?>
      </div>
    </div>
  </article>