<?php
if (isset($_POST['submit'])) {

  $bonnes_reponses=0;
  foreach($questions as $cle =>$valeur){
          foreach ($valeur as $key=>$value) {
            echo $_POST[$key] ;
          }
          echo '</label><br>';
  }

}





 ?>
