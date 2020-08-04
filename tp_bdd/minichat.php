<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="minichat_post.php" method="post">
      <p>Pseudo : <input type="text" name="pseudo"></p>
      <p>Message : <input type="text" name="message"></p>
      <input type="submit" value="Valider">
    </form>

    <ul>
      <?php
        try {
          $bdd=new PDO('mysql:host=localhost;dbname=php', 'root', null);
          $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sql = "SELECT * FROM `minichat`";
          $res=$bdd->query($sql);
          print_r($res);
          $result=$bdd->query("SELECT pseudo, message FROM 'minichat' ORDER BY ID DESC LIMIT 0,10");
          //$result->execute();
          print_r($result);

          while($data=$result->fetch()) {

            echo '<p>'.htmlspecialchars($data['pseudo']).' : '.htmlspecialchars($data['message']).'</p>';

          }
        }catch (PDOException $e) {
          die($e);
        }catch(Exception $e){
          die($e);
        }


       ?>
    </ul>
  </body>
</html>
