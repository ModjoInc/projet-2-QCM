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
        //affichage erreurs**************************************
        error_reporting(E_ALL);
        ini_set('display_errors', 1);

        //sanitization********************************************
  if (isset($_POST["submit"])) {

        $options = array(
          'nom' => FILTER_SANITIZE_STRING,
          'prenom' => FILTER_SANITIZE_STRING,
          'email' => FILTER_SANITIZE_EMAIL);

          $result = filter_input_array(INPUT_POST, $options);
          if ($result != null AND $result!= FALSE){
               $mesE2 = "Tous les champs ont été nettoyés !";
            }  else  {
               $mesE2 =  "Un champs est vide ou n'est pas correct!";
            }
          //validation*********************************************
          for ($i=0; $i < 11 ; $i++) {
            'Q'.$i = htmlentities($_POST['Q'.$i]);
          }
          print_r()
        /*$Q1 = htmlentities($_POST['Q1']);
        $Q2 = htmlentities($_POST['Q2']);
        $Q3 = htmlentities($_POST['Q3']);
        $Q4 = htmlentities($_POST['Q4']);
        $Q5 = htmlentities($_POST['Q5']);
        $Q6 = htmlentities($_POST['Q6']);
        $Q7 = htmlentities($_POST['Q7']);
        $Q8 = htmlentities($_POST['Q8']);
        $Q9 = htmlentities($_POST['Q9']);
        $Q10 = htmlentities($_POST['Q10']);*/

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

         $comm ="";

         switch ($bonnes_reponses) {
          case 0:
          $comm = "<br /> Sérieux? </h4></div>";
          echo $comm;
          break;
          case 1:
          case 2:
          case 3:
          case 4:
          $comm = "<br />erreur 404...</h4></div>";
          echo $comm;
          break;
          case 5:
          $comm = "<br />Tout juste la moyenne</h4></div>";
          echo $comm;
          break;
          case 6:
          case 7:
          $comm = "<br />c'est pas mal...pour un gosse de deuxième primaire</h4></div>";
          echo $comm;
          break;
          case 8:
          case 9:
          $comm = "<br /> Now we're talking...</h4></div>";
          echo $comm;
          break;
          case 10:
          $comm = "<br /> Merci à toi Chuck Norris</h4></div>";
          echo $comm;
          break;
          default:
          $comm = "<br /> ...</h4></div>";
          echo $comm;
          break;
        }

       //envoi du mail
           $to = "habibem@gmail.com," . $_POST["email"];
           $subject = 'résultats de votre quizz';
           $headers = 'Mime-Version: 1.0'."\r\n";
           $headers .= 'Content-type: text/html; charset=utf-8'."\r\n";
           $headers .= "\r\n";
           $message  = 'De: Becode <br />';
           $message .= 'Email: ' . $_POST["email"] . '<br />';
           $message .= 'Score au test : ' . $bonnes_reponses. "<br />";
           $message .= "Commentaires de lévaluateur :<br />" . $comm . "<br />";
           $envoi = mail($to, $subject, $message, $headers);

          if ($envoi) {
            $mesE1 = 'Votre mail a bien été envoyé au support technique';
          } else {
            $mesE1 = 'erreur lors de l\'envoi';
          }
  }
  ?>
<div class="errors">
  <p><?php echo $mesE2 ?></p>
  <p><?php echo $mesE1 ?></p>
</div>

  </section>
</body>
</html>
