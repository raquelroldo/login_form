<?php
include_once 'conexao.php';
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$password = sha1($_POST['password']);

	$insertData = "INSERT INTO form_registro ('nome', 'email', 'password') VALUES ('$nome', '$email', '$password')";
	$start->prepare($insertData)->execute();
?>