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
		<script type="text/javascript">
		function validaCampo()
			{
		if(document.Cadastro.Nome.value=="")
			{
			alert("O Campo nome é obrigatório!");
			return false;
			}
		else
			if(document.Cadastro.Sexo.value=="")
			{
			alert("O Campo sexo é obrigatório!");
			return false;
			}
		else
			if(document.Cadastro.Idade.value=="")
			{
			alert("O Campo idade é obrigatório!");
			return false;
			}
		else
			if(document.Cadastro.CorRaca.value=="")
			{
			alert("O Campo Cor/Raça é obrigatório!");
			return false;
			}
		}
		</script>
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
	<form name="Cadastro" action="cadastro.php" method="POST" onsubmit="return validaCampo(); return false;">
		<input type="text" name="Nome" placeholder="Nome:"/>
		<label for="radio-choice-1">Masculino</label>
		<input type="radio" name="Sexo" id="radio-choice-1" value="Masculino" />
		<label for="radio-choice-2">Feminino</label>
		<input type="radio" name="Sexo" id="radio-choice-2" value="Feminino" /> 
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
		<input name="cadastrar" type="submit" id="cadastrar" value="Estou pronto!"/> 
	</form>  
<?php
	$host = "localhost";
    $user = "root";
    $pass = "";
    $db = "politizese";
    $conexao = @mysql_connect($host, $user, $pass) or die(mysql_error());
    @mysql_select_db($db) or die(mysql_error());  
    if (isset($_POST["cadastrar"])) {
	$Nome = $_POST['Nome']; 
	$Sexo = $_POST['Sexo'];
	$Idade = $_POST['Idade'];
	$CorRaca = $_POST['CorRaca'];
	$sql = mysql_query("INSERT INTO bd(Nome,Sexo,Idade,CorRaca) VALUES ('$Nome','$Sexo','$Idade','$CorRaca')");
}
?>










		
	<div class="rodape">
      		<div class="container">      			
      			<b>Copyright© 2017</b>
      		</div>
     	</div>
</body>
</html>
