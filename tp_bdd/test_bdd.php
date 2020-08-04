<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

      $bdd=new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
      $rep=$bdd->query('SELECT * FROM jeux_video');
      

     ?>
  </body>
</html>
