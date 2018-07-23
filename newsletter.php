<?php
	include_once 'php/conexao.php';
try{
	$nemail = $_POST['nemail'];

	/*$new_table = "CREATE TABLE newsletter (
	id INT NOT NULL PRIMARY KEY,
	newsletter_email  VARCHAR(50) NOT NULL)";

	$start->prepare($new_table)->execute();
*/
	$insert_data = "INSERT INTO newsletter(newsletter_email) VALUES ('$nemail')";

	$dado = $start->query($insert_data);
	echo "Dados gravados com sucesso";

}

catch(PDOException $e){
	echo $insert_data.'<br>'.$e->getMessage();
}	
$start = null;
?>