<?php

echo ("Merci " . $_POST['user_lname'] . " " . $_POST['user_fname'] . " de nous avoir contacté à propos de "  . $_POST['choix'] . " . : " . PHP_EOL);

echo ("Un de nos conseillers vous contactera soit à l’adresse: " . $_POST['user_email'] . " ou par téléphone au: " . $_POST['user_phone'] . " dans les plus brefs délais pour traiter votre demande : " . PHP_EOL);

echo $_POST['user_message'];
