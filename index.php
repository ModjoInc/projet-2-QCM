<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>PROJET QCM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css">
    <link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/grids-responsive-min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body>
    <div class="pure-g">

      <header class="pure-u-1">
        <img class="pure-img" src="/img/quizz.png" alt="quizz becode">
      </header>

        <form class="pure-form pure-form-stacked pure-g" method="post" action="">
            <legend>thématique:culture  générale</legend>

              <div class="pure-u-1-2">
                <div class="l-box input-group margin-bottom-sm">
                <h2>Données d'identification</h2>
                  <label>Nom</label>
                    <input name="nom" id="nom" type="text">

                  <label>Prénom</label>
                    <input name="prenom" id="prenom" type="text">

                  <label>Email</label>
                      <input id="email" name="email" type="email">
<input type="checkbox" name="">
                  </div>
              </div>


              <div class="pure-u-1-2 pure-u-xs-1-2 pure-u-md-1-2">
                <div class="l-box">
                <h2>Questionnaire</h2>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

function pre($arg) {
  echo '<pre><code>' . print_r($arg, true) . '</code></pre>';
}

$questions = array (
  array (
  'Q1' =>  'première question',
  'reponses' => array(
    array('réponse 1' , true ),
    array('réponse 2' , false ),
    array('réponse 3' , false )
  )),
  array(
  'Q2' =>  'deuxième question',
  'reponses' => array (
    array('réponse 1' , true ),
    array('réponse 2' , false ),
    array('réponse 3' , false )
  )),
  array (
  'Q3' =>  'troisième question',
  'reponses' => array(
    array('réponse 1' , true ),
    array('réponse 2' , false ),
    array('réponse 3' , false )
  ),
));
//pre($questions);
foreach ($questions as $key => $value) {
  //pre($value);
  foreach ($value as $key => $value) {
    pre($value);
    $question= [];
    echo $question[$value];
  }
}


  ?>
                </div>
              </div>

              <div class="pure-u-1">
                <button type="submit" name="submit" class="pure-button pure-button-primary">Envoyer mes réponses</button>
              </div>
        </form>

      <footer class="pure-u-1 pure-menu pure-menu-horizontal">
        <div class="l-box">
          <ul class="pure-menu-list">
            <li class="pure-menu-item"><i class="fa fa-chrome fa-3x"><a href="becode.org"></a></i></li>
            <li class="pure-menu-item"><i class="fa fa-facebook fa-3x"><a href="facebook.com/becode"></a></i></li>
            <li class="pure-menu-item"><i class="fa fa-github fa-3x"><a href="github.com/becodeorg"></a></i></li>
            <li class="pure-menu-item"><i class="fa fa-twitter fa-3x"><a href="twitter.com/BecodeOrg"></a></i></li>
          </ul>
        </div>
      </footer>

   </div>
  </body>
</html>
