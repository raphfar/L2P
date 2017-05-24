<?php

require("config/db.php");
include("header.php");
include("head.php");

if (isset($_POST['pseudo']) && !empty($_POST['pseudo'])
	&& isset($_POST['password']) && !empty($_POST['password'])){

	session_unset();

	$request = $db->prepare('SELECT id, pseudo, password FROM author 
		WHERE pseudo = :pseudo');

	$request->execute(
		array(
			'pseudo' => $_POST['pseudo']
		)
	);

	while ($data = $request->fetch()){
		if ($data['password'] == $_POST['password']){
			$_SESSION['id_user'] = $data['id'];
			$_SESSION['pseudo_user'] = $data['pseudo'];

			header('Location:admin.php');
		}
	}

	$request->closeCursor();

	echo "Pseudo et/ou mot de passe incorrects";
}

include("menu.php");

?>

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