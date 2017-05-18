<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="pure-g">
      <div class="pure-u-1-2">
        <h2>résultats 1er et 2ème formulaire</h2>
        <?php
        $Q1 = htmlentities($_POST['Q1A']);
        $Q2 = htmlentities($_POST['Q2A']);
        $Q3 = htmlentities($_POST['Q3A']);
        $Q4 = htmlentities($_POST['Q1B']);
        $Q5 = htmlentities($_POST['Q2B']);
        $Q6 = htmlentities($_POST['Q3B']);

        $C1 = "R1A";
        $C2 = "R2B";
        $C3 = "R3C";
        $C4 = "R1D";
        $C5 = "R2E";
        $C6 = "R3F";

      /*  echo "réponses user";
        echo $Q1 . "<br/>";
        echo $Q2 . "<br/>";
        echo $Q3 . "<br/>";
        echo "réponses correctes";
        echo $C1 . "<br/>";
        echo $C2 . "<br/>";
        echo $C3 . "<br/>";*/

        $bonnes_reponses= 0 ;

        if ($Q1 == $C1) {
          $bonnes_reponses++;
        }

        if ($Q2 == $C2) {
          $bonnes_reponses++;
        }

        if ($Q3 == $C3) {
          $bonnes_reponses++;
        }

        if ($Q4 == $C4) {
          $bonnes_reponses++;
        }

        if ($Q5 == $C5) {
          $bonnes_reponses++;
        }

        if ($Q6 == $C6) {
          $bonnes_reponses++;
        }

        echo " <h4>Merci pour votre participation !
        <br /> Vous avez obtenu la note de <strong>" . $bonnes_reponses . " / 6 </strong> </h4></div>";




         ?>
    </div>
  </body>
</html>
