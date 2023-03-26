<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>


  <form action="thanks.php" method="POST">
    <div>
      <label for="nom">Nom :</label>
      <input required type="text" id="nom" name="user_lname">
    </div>
    <label for="prenom">Prénom :</label>
    <input required type="text" id="prenom" name="user_fname">
    <div>
      <label for="courriel">Courriel :</label>
      <input required type="email" id="courriel" name="user_email">
    </div>

    <div>
      <label for="tel">Télephone :</label>
      <input required type="number" id="tel" name="user_phone">
    </div>


    <?php
    $sujetList = ['inscription', 'suspension', 'resiliation'];
    echo "Si vous souhaitez nous contactez à propos de";
    ?>

    "<select name="choix">";
      <?php

      // BOUCLE afin de parcourir le menu deroulant 

      foreach ($sujetList as $option) {
        echo "<option>" . $option . "</option>";
      }
      echo "</select>";


      ?>


      <div>
        <label for="message">Message :</label>
        <textarea id="message" name="user_message"></textarea>
      </div>

      <div class="button">
        <button type="submit">Envoyer votre message</button>
      </div>

  </form>













</body>

</html>