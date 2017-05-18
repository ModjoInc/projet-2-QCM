<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>QCM 2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css">
    <link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/grids-responsive-min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">

  </head>
  <body>
      <form id="form2" name="form2" class="pure-g pure-form pure-form-stacked" action="resultat.php" method="post">
        <input type="hidden" name="form2" value="">
        <div class="pure-u-1-2 pure-u-xs-1-2 pure-u-md-1-2">
          <div class="l-box">
            <h3>QCM 2</h3>
          </div>
        </div>

        <div class="pure-u-1-2 pure-u-xs-1-2 pure-u-md-1-2">
          <div class="l-box">
            <label>Question 1: </label>
            <label for="q1D" class="pure-radio">
                <input id="q1D" type="radio" name="Q1B" value="R1D"> réponse A
            </label>
            <label for="q1B" class="pure-radio">
                <input id="q1B" type="radio" name="Q1B" value="R1E"> réponse B
            </label>
            <label for="q1C" class="pure-radio">
                <input id="q1C" type="radio" name="Q1B" value="R1F"> réponse C
            </label>
            <br />
            <label>Question 2 :</label>
            <label for="q2D" class="pure-radio">
                <input id="q2D" type="radio" name="Q2B" value="R2D"> réponse A
            </label>
            <label for="q2E" class="pure-radio">
                <input id="q2E" type="radio" name="Q2B" value="R2E"> réponse B
            </label>
            <label for="q2F" class="pure-radio">
                <input id="q2F" type="radio" name="Q2B" value="R2F"> réponse C
            </label>
            <br />
            <label>Question 3 : </label>
            <label for="q3D" class="pure-radio">
                <input id="q3D" type="radio" name="Q3B" value="R3D"> réponse A
            </label>
            <label for="q3E" class="pure-radio">
                <input id="q3E" type="radio" name="Q3B" value="R3E"> réponse B
            </label>
            <label for="q3F" class="pure-radio">
                <input id="q3F" type="radio" name="Q3B" value="R3F"> réponse C
            </label>
          </div>
          <input type="hidden" name="Q1A" value="<?php echo $_POST['Q1']; ?>" >
          <input type="hidden" name="Q2A" value="<?php echo $_POST['Q2']; ?>" >
          <input type="hidden" name="Q3A" value="<?php echo $_POST['Q3']; ?>" >
      </div>
      <div class="pure-u-1">
        <button type="submit" name="submit" class="pure-button pure-button-primary">Envoyer mes réponses</button>
      </div>
      </form>


  </body>
</html>
