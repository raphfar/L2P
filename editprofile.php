<?php 
  session_start(); 
  require("config/db.php");
  include("head.php");


    if (isset($_POST['email']) && !empty($_POST['email'])
    && isset($_POST['pseudo']) && !empty($_POST['pseudo'])) {

      $email   = htmlspecialchars($_POST["email"]);
      $pseudo = htmlspecialchars($_POST["pseudo"]);

        $request = $db->prepare('INSERT INTO Team (email, pseudo, password, elo, role) 
          VALUES (:email, :pseudo, :elo, :role, NOW(), :user_id)');

        $request->execute(
          array(
            'email' => $email,
            'pseudo' => $pseudo,
            'elo' => $elo,
            'role' => $role,
            'user_id' => $_SESSION['user_id']
          )
        );

echo "merci de votre contribution.";
      }
?>

  <form action="editprofile.php" method="post">
    <fieldset>
      <legend><h4>Formulaire de contact</h4></legend>
      <br>
        <input id="email" name="email" type="text" placeholder=" votre email"><br><br>               
        <textarea id="pseudo" name="pseudo" placeholder="votre pseudo"></textarea><br><br>
        <textarea id="elo" name="elo" placeholder="votre elo"></textarea><br><br>
        <textarea id="role" name="role" placeholder="votre role"></textarea><br><br>
        <input type="submit" value="Envoyer"/>
    </fieldset>
  </form>
<a href='index.php'>home</a>
