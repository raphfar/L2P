<?php 
session_start();
require("config/db.php");
include("navbar.php");
include("header.php");



if (isset($_POST["team_name"]) 
&&  isset($_POST["elo"]) 
&&  isset($_POST["line_up"]))
{
  $team_name   = htmlspecialchars($_POST["team_name"]);
  $elo    = htmlspecialchars($_POST["elo"]);
  $line_up    = htmlspecialchars($_POST["line_up"]);



  //preparation de la requete : est ce que ce pseudo ou cet imal existe?
  $request = $db->prepare("SELECT user_id FROM team WHERE team_name LIKE :team_name");
  //execution de la requete : on remplace :pseudo et :email par les valeurs entrees dans le formulaire
  $request->execute(
    array(
      "team_name" => $team_name
      )
    );
    //on reupere tous les membres correspondant a la requete
  $members = $request->fetchAll();

  //si il y en a 0, c'est qu'aucun membres avec ces identifiants exist, on peut le creer
  if (sizeof($members) == 0)

  {

      //ici on fera l'insertion
    $request = $db->prepare("INSERT INTO team (team_name, elo, line_up)
      VALUES (:team_name, :elo, :line_up)");
      $request->execute(
        array(
          "team_name" => $team_name,
           "elo" => $elo,
           "line_up" => $line_up,

    )
        );
      header("Location:teams.php");
      
  }
  // sinon on ne veut pas de doublon donc on ne creer pas
  else{
    echo "Cet utilisateur est déjà existant dans la base de données";
    
  }  

}
else{
  //echo "salut !";
}
  ?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign in</title>
    <link href="style/bootstrap.min.css" rel="stylesheet">
    <link href="style/blog-home.css" rel="stylesheet">
</head>
<body>
    
 <div class="panel panel-primary">
       <div class="panel-heading"> Inscription </div><br>
<form class="form-horizontal" action ="create_team.php" method="post">
<fieldset>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="team_nameinput">team-name</label>  
  <div class="col-md-4">
  <input id="team_name" name="team_name" type="text" placeholder="team_name" class="form-control input-md" required="">
    
  </div>
</div>

<!-- elo input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="eloinput">elo</label>
  <div class="col-md-4">
    <input id="elo" name="elo" type="text" placeholder="elo" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="line_upinput">line_up</label>
  <div class="col-md-4">
    <input id="line_up" name="line_up" type="text" placeholder="line_up" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Sign in</button>
  </div>
</div>

</fieldset>
</form>
    </body>
</html>
