<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<title>Terapias</title>
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Raleway:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,900" rel="stylesheet">
		<link rel="icon" href="img/icon.png">		
		<link rel="stylesheet" type="text/css" href="bulma-0.7.1/css/bulma.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<!-- <div class="container"> -->
			<header class="cabecalho">
				<a href="index.php"><h1 class="logo">Massagem Terapêutica</h1></a>
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
		<!-- </div> -->
		<div class="banner">
			<div class="titles">
				<h2>Vamos Destravar!</h2>
				<h3>Temos soluções para os mais variados problemas.</h3>
			</div>
			<div class="buttons">
				<button class="btn-registar">Registrar <i class="fa fa-arrow-circle-right"></i></button>
				<button class="btn-sobre">Sobre <i class="fa fa-question-circle"></i></button>
			</div>
		</div>
		<main class="servicos">
			<article class="servico">
				<a href="#"><img src="img/article1.png"></a>
				<div class="inner">
					<a href="#">Duis aute irure dolor</a>
					<h4>Ut enim ad minim veniam</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
				</div>
			</article>
			<article class="servico">
				<a href="#"><img src="img/article2.png"></a>
				<div class="inner">
					<a href="#">Duis aute irure dolor</a>
					<h4>Ut enim ad minim veniam</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
				</div>
			</article>
			<article class="servico">
				<a href="#"><img src="img/article3.png"></a>
				<div class="inner">
					<a href="#">Duis aute irure dolor</a>
					<h4>Ut enim ad minim veniam</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
				</div>
			</article>
		</main>
		<section class="newsletter">
			<h2>Inscreva-se agora!</h2>
			<h3>Receba as nossas novidades</h3>
			<form action="newsletter.php" method="post">
				<input type="email" name="nemail" placeholder="Seu email" required>
				<button id="btnNewsletter">Resgistar</button>
			</form>
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
	</body>
</html>
