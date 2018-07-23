<?php
try{
	$password = '';
	$user = 'root';
	$host = 'localhost';
	$dataBase = 'website';
	
	$start = new PDO("mysql:dbname=$dataBase;host=$host", $user, $password);
	$start->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
	echo "<p>Ocorreu um erro na ligação</p>";
}
?>