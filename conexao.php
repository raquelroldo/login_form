<?php
try{
	$password = '';
	$user = 'root';
	$host = 'localhost';
	$dataBase = 'website';

	$start = new PDO("mysql:dbname=$dataBase;host=$host", $user, $password);
}
catch(PDOException $e){
	echo "<p>Ocorreu um erro na ligação</p>";
}
?>