<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

      if(isset($_POST["password"])){
        $password=(string)$_POST["password"];
        if($password=="kangourou"){
          echo "voici les codes d'accès de la NASA";
        }else{
          echo "Mot de passe erronné";
        }

      }

     ?>
  </body>
</html>
