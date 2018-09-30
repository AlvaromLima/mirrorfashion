<!DOCTYPE html>
<html>
	<!-- início do cabeçalho -->
	<head>
		<meta charset="utf-8">
		<title>Checkout Mirror Fashion</title>
		<meta name="viewport" content="width=device-width">
	<!--<link rel="stylesheet" href="css/bootstrap.css">-->
		<link rel="stylesheet" href="css/bootstrap-flatly.css">
		<link rel="stylesheet" href="css/checkout.css">
	</head>
	<!-- fim do cabeçalho -->
   
	<!-- início do body -->
	<body>
		<nav class="navbar navbar-default navbar-static-top">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle"
						data-toggle="collapse" data-target=".navbar-collapse">
						<span class="glyphicon glyphicon-align-justify"></span>
				</button>
				<a class="navbar-brand" href="home.php"><img src="img/logo-rodape.png" alt="Mirror Fashion"></a>
			</div>
			
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="sobre.php"><span class="glyphicon glyphicon-home"></span> Sobre</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-question-sign"></span> Ajuda</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-list-alt"></span> Perguntas frequentes</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-bullhorn"></span> Entre em contato</a></li>
				</ul>
			</div>
		</nav>

		<div class="jumbotron">
			<div class="container">
				<h1>Ótima escolha!</h1>
				<p>Obrigado por comprar na Mirror Fashion!
				Preencha seus dados para efetivar a compra.</p>
			</div><!--fim .container dentro do jumbotron -->
		</div><!--fim .jumbotron -->
		
		<div class="container">	
			<div class="row">
				<div class="col-sm-4 col-lg-3">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h2 class="panel-title">Sua Compra</h2>
						</div><!-- fim .panel-heading -->
						<div class="panel-body">
							<img src="img/produtos/foto2-<?= $_POST['cor'] ?>.png" class="img-thumbnail img-responsive hidden-xs">
							<dl>
								<dt>Produto</dt>
								<dd><?= $_POST['nome'] ?></dd>

								<dt>Preço</dt>
								<dd><?= $_POST['preco'] ?></dd>

								<dt>Cor</dt>
								<dd><?= $_POST['cor'] ?></dd>
			
								<dt>Tamanho</dt>	
								<dd><?= $_POST['tamanho'] ?></dd>			
							</dl>
							
							<div class="form-group">
								<label for="qt">Quantidade</label>
								<input id="qt" class="form-control" type="number" min="0" max="99" value="1">
							</div>
							
							<div class="form-group">
								<label for="total">Total</label>
								<output for="qt preco" id="total" class="form-control">
									<dd id="preco">R$ <?= $_POST["preco"] ?></dd>
								</output>
							</div>

							</div><!-- fim .panel-body -->
					</div><!-- fim .panel -->
				</div>
			
				<div class="col-sm-8 col-lg-9">
					<form class="col-sm-8 col-lg-9" action="home.php">
						<div class="row">
							<fieldset class="col-md-6">
								<legend>Dados pessoais</legend>
								<div class="form-group">
									<label for="nome">Nome completo</label>
									<div class="input-group">
										<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
										<input type="text" class="form-control" id="nome" name="nome" required autofocus>
									</div>
								</div>
					
								<div class="form-group">
									<label for="email">E-mail</label>
									<div class="input-group">
										<span class="input-group-addon">@</span>
										<input type="email" class="form-control" id="email" name="email" placeholder="email@exemplo.com">
									</div>
								</div>

								<div class="form-group">
									<label for="cpf">CPF</label>
									<div class="input-group">
										<span class="input-group-addon"><span class="glyphicon glyphicon-book"></span></span>
										<input type="cpf" class="form-control" id="cpf" name="cpf" required placeholder="000.000.000-00" data-mask="999.999.999-99">
									</div>
								</div>
					
								<div class="checkbox">
									<label>
										<input type="checkbox" value="sim" name="spam" checked>
										Quero receber spam da Mirror Fashion
									</label>	
								</div>
							</fieldset>
				
							<fieldset class="col-md-6">
								<legend>Cartão de crédito</legend>
								<div class="form-group">
									<label for="numero-cartao">Número - CVV</label>
									<div class="input-group">
										<span class="input-group-addon"><span class="glyphicon glyphicon-credit-card"></span></span>
										<input type="text" class="form-control" id="numero-cartao" name="numero-cartao" placeholder="0000 0000 0000 0000 - 000" data-mask="9999 9999 9999 9999 - 999">
									</div>
								</div>

								<div class="form-group">
									<label for="bandeira-cartao">Bandeira</label>
									<div class="input-group">
										<span class="input-group-addon"><span class="glyphicon glyphicon-flag"></span></span>
										<select name="bandeira-cartao" id="bandeira-cartao" class="form-control">
											<option value="master">MasterCard</option>
											<option value="visa">VISA</option>
											<option value="amex">American Express</option>
											<option value="elo">ELO</option>
										</select>	
									</div>
								</div>
					
								<div class="form-group">
									<label for="validade-cartao">Validade</label>
									<input type="month" class="form-control" id="validade-cartao" name="validade-cartao">
								</div>
							</fieldset>
						</div><!-- fim .row -->
						
						<button type="submit" class="btn btn-primary btn-lg pull-right">
							<span class="glyphicon glyphicon-thumbs-up"></span>
							Confirmar Pedido
						</button>
					</form><!-- fim form -->
				</div>
			</div><!-- fim .row -->	
		</div><!-- fim .container da pagina -->
		
	</body>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/inputmask-plugin.js"></script>

	<script src="js/total.js"></script>

	<script src="js/converteMoeda.js"></script>
	
	<!-- final do body -->
   
</html>