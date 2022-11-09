<?php
  include '../view/content/tab/tab_omaj.php';
?>
<div class ="aside">
  <h2>Mises à jour du site récentes</h2>
    <?php

      echo '<ul>';

      foreach ($majs as $maj=>$tabInformation){
        //rajouter "../page?"
        echo '<li>','<a href="./'.$majs[$maj]['link'].'" TITLE="'.$majs[$maj]['description'].'">'.$majs[$maj]['tab'].'</a></li>';
      
      }
      echo'</ul>';
    ?></div>