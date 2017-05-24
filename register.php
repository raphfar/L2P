<?php

require("config/db.php");
include("head.php");
include("header.php");


if (isset($_POST['pseudo']) && !empty($_POST['pseudo'])
	&& isset($_POST['password']) && !empty($_POST['password'])
	&& isset($_POST['email']) && !empty($_POST['email'])) {

	$request = $db->prepare('INSERT INTO author (pseudo, password, email) 
		VALUES (:pseudo, :password, :email)');

	$request->execute(
		array(
			'pseudo' => $_POST['pseudo'],
			'password' => $_POST['password'],
			'email' => $_POST['email']
		)
	);

	echo "Inscription réussie";
}

?>

<form action="register.php" method="post">
	<input type="text" name="pseudo" placeholder="Pseudo"/><br>
	<input type="password" name="password" placeholder="Password"/><br>
	<input type="email" name="email" placeholder="Email"/><br>
	<input type="submit" value="Inscription" />
</form>