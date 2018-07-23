<?php
	include_once "php/conexao.php";
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$pass = sha1($_POST['password']);
try{
	$insertData = "INSERT INTO form_registro(nome, email, password) VALUES ('$nome', '$email', '$pass')";
	$dados=$start->query($insertData);
	echo "Dados gravados com sucesso";
	
	if($user === "" && $email === "" && $pass === ""){
		echo 'Preencha os compos corretamente';
	}
}
catch(PDOException $e){
	echo $insertData.'<br>'.$e->getMessage();
}
$start = null;
?>