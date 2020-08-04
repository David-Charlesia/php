<?php

  if(isset($_POST['pseudo']) && isset($_POST['message'])){
    try{
      $bdd=new PDO('mysql:host=localhost;dbname=test', 'root', '');
      $req = $bdd->prepare('INSERT INTO minichat (ID,pseudo, message) VALUES(null,?, ?)');
      $req->execute(array($_POST['pseudo'], $_POST['message']));
      header('Location: minichat.php');
    }catch(PDOException $e){
      die($e);
    }catch(Exception $e){
      die($e);
    }
  }

 ?>
