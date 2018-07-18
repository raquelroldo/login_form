<?php
	$password = '';
	$user = 'root';
	$host = 'localhost';
	$dataBase = 'website';
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$pass = sha1($_POST['password']);
try{
	$start = new PDO("mysql:dbname=$dataBase;host=$host", $user, $password);
	$start->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$insertData = "INSERT INTO form_registro(nome, email, password) VALUES ('$nome', '$email', '$pass')";
	$dados=$start->query($insertData);
	echo "Dados gravados com sucesso";
}
catch(PDOException $e){
	echo $insertData.'<br>'.$e->getMessage();
}
$start = null;
?>