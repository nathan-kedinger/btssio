<?php
  include '../view/content/tab/tab_maj.php';
?>
<div class="aside">
    <h2>Mises à jour du site à venir</h2>
      <?php
    
        echo '<ul>';
    
        foreach ($majs as $maj=>$tabInformation){
          //rajouter "../page?"
          echo '<li>','<p  TITLE="'.$majs[$maj]['description'].'">'.$majs[$maj]['tab'].'</p></li>';
        
        }
        echo'</ul>';
      ?></div>