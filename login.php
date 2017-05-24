<?php
session_start();
require("config/db.php");
include("header.php");
include("head.php");

if (isset($_POST["pseudo"]) 
&&  isset($_POST["password"]))
{
  $pseudo   = htmlspecialchars($_POST["pseudo"]);
  $password = htmlspecialchars($_POST["password"]);
 

$request = $db->prepare("SELECT user_id FROM users WHERE pseudo LIKE :pseudo AND password = :password");
$request->execute(
	array(
		"pseudo" => $pseudo,
		"password"=> $password
		)

);

$users = $request->fetchAll();

if (sizeof($users) >0){

	$user_id = $users[0]["id"];

	$_SESSION["user_id"] = $user_id;

	header("Location:joueurs.php");
	
	
}

else {

	echo "Try again !";
}

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
     <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/blog-home.css" rel="stylesheet"> 
</head>
<body>
   <div class="panel panel-primary">
       <div class="panel-heading"> Connexion </div><br>
    <form class="form-horizontal" action ="login.php" method="post">


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="pseudoinput">Pseudo</label>  
  <div class="col-md-4">
  <input id="pseudo" name="pseudo" type="text" placeholder="pseudo" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">Mot de passe</label>
  <div class="col-md-4">
    <input id="password" name="password" type="password" placeholder="password" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-5 control-label" for="singlebutton"></label>
  <div class="col-md-5">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Log in</button>
  </div>
</div>


</form>
    </div>
</body>
</html>