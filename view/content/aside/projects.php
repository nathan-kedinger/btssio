<?php
  include '../view/content/tab/tab_projects.php';
?>
<div class="aside">
    <h2>Projets en cours de réalisation</h2>
        <?php
        
          echo '<ul>';
        
          foreach ($majs as $maj=>$tabInformation){
            //rajouter "../page?"
            echo '<li>','<a href="'.$majs[$maj]['link'].'" TITLE="'.$majs[$maj]['description'].'">'.$majs[$maj]['tab'].'</a></li>';
            
          }
          echo'</ul>';
        ?></div>