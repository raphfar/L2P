<?php
	session_start(); 
	require("config/db.php");
    include("navbar.php");
    include("header.php");



	$user_id = htmlspecialchars($_GET['user_id']);

	$request = $db->prepare("SELECT user_id, email, pseudo, password, elo, role FROM users WHERE user_id = :user_id");

	$request->execute(
		array(
			'user_id' => $user_id
		)
	);

	while ($data = $request->fetch()){
		?>

		<form action="modif.php?user_id=<?php echo $user_id; ?>" method="post">
			<input type="text" name="email" placeholder="email" value="<?php echo $data['email']; ?>"><br>
			<textarea name="pseudo" placeholder="pseudo"><?php echo $data['pseudo']; ?></textarea><br>
			<textarea name="password" placeholder="password"><?php echo $data['password']; ?></textarea><br>
			<textarea name="elo" placeholder="elo"><?php echo $data['elo']; ?></textarea><br>
			<textarea name="role" placeholder="role"><?php echo $data['role']; ?></textarea><br>
			<input type="submit" value="Modifier">
		</form>

	<?php

	}

	if (isset($_POST['pseudo']) && !empty($_POST['pseudo'])
	&& isset($_POST['password']) && !empty($_POST['password'])) {

	$pseudo = htmlspecialchars($_POST['pseudo']);
	$password = htmlspecialchars($_POST['password']);

		$request = $db->prepare("UPDATE users 
			SET email = :email, pseudo = :pseudo, password = :password, elo = :elo, role = :role
			WHERE user_id = :user_id");

		$request->execute(
			array(
				'email' => $email,
				'pseudo' => $pseudo,
				'user_id' => $user_id
			)
		);
?>Modification validée !<a href="joueurs.php">Retour à     la liste des joueurs</a> <?php
	} 



?>