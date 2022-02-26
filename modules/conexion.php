<?php 

$user_db = 'root';
$password_db = '';


try {
	$mbd = new PDO('mysql:host=localhost;dbname=votos', $user_db, $password_db); 
} catch (PDOException $e) {
	echo $e;
}



?>