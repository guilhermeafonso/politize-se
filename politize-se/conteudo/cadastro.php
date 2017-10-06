<!DOCTYPE html>
<html >
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<link rel="shortcut icon" href="../imagens/favicon.png" type="image/x-icon">
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i" rel="stylesheet">
	 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	    <link rel="stylesheet" href="../css/style.css">
		<script src="../js/jquery-3.2.0.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>
		<title>Identificação</title>
	</head>
	<body>
	<div class="container">
		<img class="logo2" alt="Logo2" src="../imagens/titulo.png">
	  	<div class="horizontal timeline">
			<div class="steps">
				<div class="step current">
					<span><b>Identificação</b></span>
				</div>
				<div class="step">
					<span><b>Lição 1</b></span>
				</div>
				<div class="step">
					<span><b>Lição 2</b></span>
				</div>
				<div class="step">
					<span><b>Lição 3</b></span>
				</div>
				<div class="step">
					<span><b>Lição 4</b></span>
				</div>
				<div class="step">
					<span><b>Lição 5</b></span>
				</div>
				<div class="step">
					<span><b>Lição 6</b></span>
				</div>
				<div class="step">
					<span><b>Lição 7</b></span>
				</div>
				<div class="step">
					<span><b>Lição 8</b></span>
				</div>
				<div class="step">
					<span><b>Simulação de voto</b></span>
				</div>
				<div class="step">
					<span><b>Seu perfil</b></span>
				</div>
			</div>
			<div class="line"></div>
		</div>	
	</div>
	<div class="caixainicio">
		<p><b>Serão 8 lições!</b> Em cada uma é apresentado o tema e suas variações, dentro de cada variação: descrição (e/ou) significado (e/ou) exemplificação, terminando as lições você fará a <b>simulação de voto eleitoral para presidente 2018</b>. É bem simples, você seleciona o que melhor o representa ou o que mais se identifica e com apenas alguns cliques será construído seu perfil e poderá acompanhar gráficos de resultados de outros usuários.</p>
	</div>
	<form name="Cadastro" action="cadastrar.php" method="POST">
		<input type="text" name="Nome" placeholder="Nome:">
		<select id="Sexo" name="Sexo">
			<option value="">Sexo</option>
			<option value="Masculino">Masculino</option>
			<option value="Feminino">Feminino</option>
		</select>
		<select name="Idade">
			<option value="">Idade</option>
			<option value="17">Menor de 17 anos</option>
			<option value="18a24">18 a 24 anos</option>
			<option value="25a29">25 a 29 anos</option>
			<option value="30a34">30 a 34 anos</option>
			<option value="35a39">35 a 39 anos</option>
			<option value="40">Maior de 40 anos</option>
		</select>
		<select name="CorRaca">
			<option value="">Cor/Raça</option>
			<option value="Branco">Branco</option>
			<option value="Pardo">Pardo</option>
			<option value="Negro">Negro</option>
		</select>
		<input class="botao1" type="submit" name="enviar" value="Estou pronto!">
	</form>
	<div class="rodape">
      		<div class="container">      			
      			<b>Copyright© 2017</b>
      		</div>
     	</div>
</body>
</html>
