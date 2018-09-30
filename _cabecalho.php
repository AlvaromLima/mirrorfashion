<!DOCTYPE html>
<html>
	<!-- início do cabeçalho -->
	<head>
		<title><?php print $cabecalho_title; ?></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/estilos.css">
		<link rel="stylesheet" href="css/mobile.css" media="(max-width: 939px)">
		<?php print @$cabecalho_css; ?>	
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=PT+Sans|Bad+Script" type="text/css">
	</head>
	<!-- fim do cabeçalho -->
   
	<!-- início do body -->
	<body>
		<!-- Cabeçalho da Home-page -->
		<header class="container">
			<!--[if lt IE 9]>
				<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<![endif]-->
			
			<h1><img src="img/logo.png" alt="Mirror Fashion"></h1>
			
			<p class="sacola">
				Nenhum item na sacola de compras
			</p>
			
			<nav class="menu-opcoes">
				<ul>
					<li><a href="#">Sua Conta</a></li>
					<li><a href="#">Lista de Desejos</a></li>
					<li><a href="#">Cartão Fidelidade</a></li>
					<li><a href="sobre.php">Sobre</a></li>
					<li><a href="#">Ajuda</a></li>
				</ul>
			</nav>	
		</header>
