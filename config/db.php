<?php

$host = 'mysql51-157.perso';
$db_name = 'xncvgillegsqlseb';
$user = 'xncvgillegsqlseb';
$password = 's6aQDa86ncXu';

try {
	$db = new PDO ("mysql:dbname=".$db_name.";host=".$host, $user, $password);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch (PDOException $e) {
	echo 'Error while connecting : ' .$e->getMessage();
}
?>