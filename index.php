<!DOCTYPE html>
<html>
<head>	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registro</title>
	<link href="https://fonts.googleapis.com/css?family=Raleway:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,900" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/formRegistrar.css"></link>
	<link rel="icon" href="img/icon.png">
	<link rel="stylesheet" type="text/css" href="css/style.css">	
	<link rel="stylesheet" type="text/css" href="bulma-0.7.1/css/bulma.css">
	
</head>
<body>
	<section class="section">
		<div class="container">
			<header class="cabecalho">
				<a href="index.html"><h1 class="logo">Massagem Terapêutica</h1></a>
				<button id="btn" class="btn-menu"><i class="fa fa-bars fa-lg"></i></button>
				<nav class="menu">
					<a class="btn-close"><i class="fa fa-times" aria-hidden="true"></i></a>
					<ul>
						<li><a href="#">HOME</a></li>
						<li><a href="#">Serviços</a></li>
						<li><a href="#">Contatos</a></li>
					</ul>
				</nav>	
			</header>
			<form action="form_registro.php" method="post">
				<div class="field">
					<label for="nome" class="label">Utilizador</label>
					<div class="control">	  					
				    	<input class="input userInput" type="text" name="nome" required>
					</div>
				</div> 
				<div class="field">
	  				<label for="email" class="label">Email</label>
					<div class="control">
				    	<input class="input userInput" type="email" name="email" required>
					</div>
				</div> 
				<div class="field">
	  				<label for="password" class="label">Palavra Passe</label>
					<div class="control">
				    	<input class="input userInput" type="password" name="password" required>
					</div>
				</div> 
				<div class="field">
					<div class="control">
					  	<button id="enviar" class="button is-primary">Enviar</button>
					</div>
				</div>
			</form>
		</div>
	</section>
	<footer class="rodape">
		<div class="social-icons">
			<a href="#"><i class="fa fa-facebook"></i>
			<a href="#"><i class="fa fa-twitter"></i>
			<a href="#"><i class="fa fa-google"></i>
			<a href="#"><i class="fa fa-instagram"></i>
			<a href="#"><i class="fa fa-envelope"></i>
		</div>
		<p class="copyright">Copyright 2018. Todos direitos reservados</p>
	</footer>
	<script src="js/index.js"></script> 
	<script src="js/formRegistrar.js"></script> 
</body>
</html>