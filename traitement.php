<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"><title>Résultats</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css">
  <link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/grids-responsive-min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <header>
    <h1>Résultats du test</h1>
  </header>
  <section class="pure-g">
    <div class="pure-u-1 pure-u-md-1-2 pure-u-lg-2-4">
      <div class="l-box">
        <?php
        $Q1 = htmlentities($_POST['Q1']);
        $Q2 = htmlentities($_POST['Q2']);
        $Q3 = htmlentities($_POST['Q3']);
        $Q4 = htmlentities($_POST['Q4']);
        $Q5 = htmlentities($_POST['Q5']);
        $Q6 = htmlentities($_POST['Q6']);
        $Q7 = htmlentities($_POST['Q7']);
        $Q8 = htmlentities($_POST['Q8']);
        $Q9 = htmlentities($_POST['Q9']);
        $Q10 = htmlentities($_POST['Q10']);
        $nom = htmlentities($_POST["nom"]);
        $prenom = htmlentities($_POST["prenom"]);
        $email = htmlentities($_POST["email"]);

        $bonnes_reponses = 0;

        if ($Q1 == "R1A") {
          $bonnes_reponses++;
        }
        if ($Q2 == "R2B") {
          $bonnes_reponses++;
        }
        if ($Q3 == "R3C") {
          $bonnes_reponses++;
        }
        if ($Q4 == "R4A") {
          $bonnes_reponses++;
        }
        if ($Q5 == "R5B") {
          $bonnes_reponses++;
        }
        if ($Q6 == "R6A") {
          $bonnes_reponses++;
        }
        if ($Q7 == "R7C") {
          $bonnes_reponses++;
        }
        if ($Q8 == "R8B") {
          $bonnes_reponses++;
        }
        if ($Q9 == "R9B") {
          $bonnes_reponses++;
        }
        if ($Q10 == "R10A") {
          $bonnes_reponses++;
        }

        echo " <h4>Merci " . $nom . " " . $prenom . " pour votre participation !
        <br /> Vous avez obtenu la note de <strong>" . $bonnes_reponses . " / 10</strong> </h4></div>";


        echo '</div> <div class="pure-u-1 pure-u-md-1-2 pure-u-lg-2-4"> ';
        echo "<br /><h4>Commentaires de l'examinateur : ";

        switch ($bonnes_reponses) {
          case 0:
          echo "<br /> Sérieux? </h4></div>";
          break;
          case 1:
          case 2:
          case 3:
          case 4:
          echo "<br />erreur 404...</h4></div>";
          break;
          case 5:
          echo "<br />Tout juste la moyenne</h4></div>";
          break;
          case 6:
          case 7:
          echo "<br />c'est pas mal...pour un gosse de deuxième primaire</h4></div>";
          break;
          case 8:
          case 9:
          echo "<br /> Now we're talking...</h4></div>";
          break;
          case 10:
          echo "<br /> Merci à toi Chuck Norris</h4></div>";
          break;
          default:
          echo "<br /> ...</h4></div>";
          break;
        }
        ?>
      </section>
</body>
</html>
