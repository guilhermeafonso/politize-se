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
				<div class="step">
					<span><b>Identificação</b></span>
				</div>
				<div class="step current">
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
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3 class="tema"><b>Esquerda e direita.</b></h3>
				<h4 class="descricao"><b><i>Espectro econômico:</i></b></h4>
				<div class="row">
					<div class="col-md-6">
						<button data-hover="Esquerda" onclick="javascript: location.href='index.html';"><div>Sou conservador em relação a economia, tenho uma ideologia voltada para o coletivo. Defendo que o governo deve: controlar o mercado financeiro do país, participar ativamente na economia. Acredito nas medidas sociais que favoreçam os mais pobres e o trabalhador (programas sociais), e nas propostas que visam uma maior distribuição de renda e melhorias para as classes mais baixas da população, como impostos para financiar serviços públicos amplos e para distribuir renda.<br><br></div></button>
					</div>
					<div class="col-md-6">
						<button data-hover="Direita"><div>Sou liberal em relação a economia, tenho uma ideologia voltada para o individual. Acredito que o governo deve: cuidar apenas do essencial (segurança, justiça, educação), ter pouca influência sobre a economia, favorecer o livre comércio, promover meios de produção sob o comando privado (privatizações), acordos individuais entre empregadores e empregados e impostos mais baixos, deixando nas minhas mãos mais recursos e que eu decida sobre seu uso, porém com serviços públicos menos abrangentes.</div></button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="rodape">
      		<div class="container">      			
      			<b>Copyright© 2017</b>
      		</div>
     	</div>
</body>
</html>
