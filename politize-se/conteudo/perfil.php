<!DOCTYPE html>
<html >
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<link rel="shortcut icon" href="../imagens/favicon.png" type="image/x-icon">
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
		<link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i" rel="stylesheet">
	 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	    <link rel="stylesheet" href="../css/style.css">
		<script src="../js/jquery-3.2.0.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>
		<script src="../js/script.js"></script>
		<script>
		!function(e,n,t){function r(e,n){return typeof e===n}function o(){var e,n,t,o,s,i,a;for(var l in C)if(C.hasOwnProperty(l)){if(e=[],n=C[l],n.name&&(e.push(n.name.toLowerCase()),n.options&&n.options.aliases&&n.options.aliases.length))for(t=0;t<n.options.aliases.length;t++)e.push(n.options.aliases[t].toLowerCase());for(o=r(n.fn,"function")?n.fn():n.fn,s=0;s<e.length;s++)i=e[s],a=i.split("."),1===a.length?Modernizr[a[0]]=o:(!Modernizr[a[0]]||Modernizr[a[0]]instanceof Boolean||(Modernizr[a[0]]=new Boolean(Modernizr[a[0]])),Modernizr[a[0]][a[1]]=o),g.push((o?"":"no-")+a.join("-"))}}function s(e){var n=_.className,t=Modernizr._config.classPrefix||"";if(x&&(n=n.baseVal),Modernizr._config.enableJSClass){var r=new RegExp("(^|\\s)"+t+"no-js(\\s|$)");n=n.replace(r,"$1"+t+"js$2")}Modernizr._config.enableClasses&&(n+=" "+t+e.join(" "+t),x?_.className.baseVal=n:_.className=n)}function i(e,n){return!!~(""+e).indexOf(n)}function a(){return"function"!=typeof n.createElement?n.createElement(arguments[0]):x?n.createElementNS.call(n,"http://www.w3.org/2000/svg",arguments[0]):n.createElement.apply(n,arguments)}function l(e){return e.replace(/([a-z])-([a-z])/g,function(e,n,t){return n+t.toUpperCase()}).replace(/^-/,"")}function f(e,n){return function(){return e.apply(n,arguments)}}function u(e,n,t){var o;for(var s in e)if(e[s]in n)return t===!1?e[s]:(o=n[e[s]],r(o,"function")?f(o,t||n):o);return!1}function d(e){return e.replace(/([A-Z])/g,function(e,n){return"-"+n.toLowerCase()}).replace(/^ms-/,"-ms-")}function c(){var e=n.body;return e||(e=a(x?"svg":"body"),e.fake=!0),e}function p(e,t,r,o){var s,i,l,f,u="modernizr",d=a("div"),p=c();if(parseInt(r,10))for(;r--;)l=a("div"),l.id=o?o[r]:u+(r+1),d.appendChild(l);return s=a("style"),s.type="text/css",s.id="s"+u,(p.fake?p:d).appendChild(s),p.appendChild(d),s.styleSheet?s.styleSheet.cssText=e:s.appendChild(n.createTextNode(e)),d.id=u,p.fake&&(p.style.background="",p.style.overflow="hidden",f=_.style.overflow,_.style.overflow="hidden",_.appendChild(p)),i=t(d,e),p.fake?(p.parentNode.removeChild(p),_.style.overflow=f,_.offsetHeight):d.parentNode.removeChild(d),!!i}function m(n,r){var o=n.length;if("CSS"in e&&"supports"in e.CSS){for(;o--;)if(e.CSS.supports(d(n[o]),r))return!0;return!1}if("CSSSupportsRule"in e){for(var s=[];o--;)s.push("("+d(n[o])+":"+r+")");return s=s.join(" or "),p("@supports ("+s+") { #modernizr { position: absolute; } }",function(e){return"absolute"==getComputedStyle(e,null).position})}return t}function h(e,n,o,s){function f(){d&&(delete z.style,delete z.modElem)}if(s=r(s,"undefined")?!1:s,!r(o,"undefined")){var u=m(e,o);if(!r(u,"undefined"))return u}for(var d,c,p,h,v,y=["modernizr","tspan","samp"];!z.style&&y.length;)d=!0,z.modElem=a(y.shift()),z.style=z.modElem.style;for(p=e.length,c=0;p>c;c++)if(h=e[c],v=z.style[h],i(h,"-")&&(h=l(h)),z.style[h]!==t){if(s||r(o,"undefined"))return f(),"pfx"==n?h:!0;try{z.style[h]=o}catch(g){}if(z.style[h]!=v)return f(),"pfx"==n?h:!0}return f(),!1}function v(e,n,t,o,s){var i=e.charAt(0).toUpperCase()+e.slice(1),a=(e+" "+b.join(i+" ")+i).split(" ");return r(n,"string")||r(n,"undefined")?h(a,n,o,s):(a=(e+" "+E.join(i+" ")+i).split(" "),u(a,n,t))}function y(e,n,r){return v(e,t,t,n,r)}var g=[],C=[],w={_version:"3.3.1",_config:{classPrefix:"",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(e,n){var t=this;setTimeout(function(){n(t[e])},0)},addTest:function(e,n,t){C.push({name:e,fn:n,options:t})},addAsyncTest:function(e){C.push({name:null,fn:e})}},Modernizr=function(){};Modernizr.prototype=w,Modernizr=new Modernizr;var _=n.documentElement,x="svg"===_.nodeName.toLowerCase(),S="Moz O ms Webkit",b=w._config.usePrefixes?S.split(" "):[];w._cssomPrefixes=b;var E=w._config.usePrefixes?S.toLowerCase().split(" "):[];w._domPrefixes=E;var P={elem:a("modernizr")};Modernizr._q.push(function(){delete P.elem});var z={style:P.elem.style};Modernizr._q.unshift(function(){delete z.style}),w.testAllProps=v,w.testAllProps=y,Modernizr.addTest("backgroundcliptext",function(){return y("backgroundClip","text")}),o(),s(g),delete w.addTest,delete w.addAsyncTest;for(var N=0;N<Modernizr._q.length;N++)Modernizr._q[N]();e.Modernizr=Modernizr}(window,document);
		</script>
		<title>Perfil</title>
	</head>
	<body>
		<?php
			$host = "localhost";
		    $user = "root";
		    $pass = "";
		    $db = "politizese";
		    $Candidato = $_POST['Candidato'];
		    $id = $_POST['id'];
		    $conexao = @mysql_connect($host, $user, $pass) or die(mysql_error());
		    @mysql_select_db($db) or die(mysql_error());  
		    $sqrl = mysql_query("UPDATE bd set Candidato ='$Candidato' WHERE id = '$id'");
		?>
		<div class="container">
			<div class='Cube panelLoad'>
				<div class='cube-face cube-face-front'>po</div>
				<div class='cube-face cube-face-back'>se</div>
				<div class='cube-face cube-face-left'>li</div>
				<div class='cube-face cube-face-right'>ze</div>  
				<div class='cube-face cube-face-bottom'>ti</div>
				<div class='cube-face cube-face-top'>!</div>
			</div>
			<div class="horizontal timeline">
				<div class="espacamento"></div>
				<div class="steps">
					<div class="step">
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
					<div class="step current">
						<span><b>Seu perfil</b></span>
					</div>
					<div class="step">
						<span><b>Resultados</b></span>
					</div>
				</div>
				<div class="line"></div>
			</div>
			<div class="row">
				<div class="col-md-12">	
					<input type="hidden" name="id" value="<?php echo $id ?>">
					<?php
				    	$host = "localhost";
				        $user = "root";
				        $pass = "";
				        $db = "politizese";
				        $conexao = @mysql_connect($host, $user, $pass) or die(mysql_error());
				        @mysql_select_db($db) or die(mysql_error());
				        
				        $result = mysql_query("SELECT * FROM `bd` WHERE Licao1 = 'Esquerda' and Licao2 = 'Direita' and Licao3 = 'Democracia' and Licao4 = 'Capitalismo' and id = '$id'");

				        if (mysql_num_rows($result) > 0) {
            			while($row = mysql_fetch_assoc($result)) {
           					echo '<h2 style="font-family:courier;color:white;"><b>'.$row['Nome'].',</b></h2>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;Você tem uma ideologia voltada para a esquerda quanto ao espectro econômico do país, que pode ser popularmente chamado de conservador, acredita que o governo deve interferir/controlar o mercado financeiro e participar ativamente na economia, apoia  medidas sociais e propostas que visam financiar serviços públicos amplos e para uma distribuição mais igualitária de renda.</p>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;No espectro social se identifica com a ideologia de direita, adotando também uma postura conservadora, desta vez em relação aos costumes, você preza os “valores familiares” ou “valores atemporais”, se identifica e/ou promove conceitos passados de geração em geração ao lado de instituições como a igreja, a família, o Estado e a vida da comunidade.</p>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;A forma de governo que melhor o representa é a democracia, onde você assume a responsabilidade de decidir os governantes por meio do voto eleitoral e defende a: igualdade perante a lei, liberdade de expressão, liberdade religiosa, proteção legal e na participação da sociedade na vida política, econômica e cultural.</p>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;O  sistema político-econômico que se identifica é o capitalismo, caracterizado por uma divisão social na produção em que os trabalhadores que dispõem apenas de sua força de trabalho a vendem em troca de um pagamento (salário); e os capitalistas proprietários dos meios de produção contratam os trabalhadores para produzir mercadorias, que são vendidas para a obtenção do lucro.</p>';}
        				}

    					$result = mysql_query("SELECT * FROM `bd` WHERE Licao1 = 'Esquerda' and Licao2 = 'Direita' and Licao3 = 'Democracia' and Licao4 = 'Socialismo' and id = '$id'");

				        if (mysql_num_rows($result) > 0) {
            			while($row = mysql_fetch_assoc($result)) {
           					echo '<h2 style="font-family:courier;color:white;"><b>'.$row['Nome'].',</b></h2>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;Você tem uma ideologia voltada para a esquerda quanto ao espectro econômico do país, que pode ser popularmente chamado de conservador, acredita que o governo deve interferir/controlar o mercado financeiro e participar ativamente na economia, apoia  medidas sociais e propostas que visam financiar serviços públicos amplos e para uma distribuição mais igualitária de renda.</p>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;No espectro social se identifica com a ideologia de direita, adotando também uma postura conservadora, desta vez em relação aos costumes, você preza os “valores familiares” ou “valores atemporais”, se identifica e/ou promove conceitos passados de geração em geração ao lado de instituições como a igreja, a família, o Estado e a vida da comunidade.</p>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;A forma de governo que melhor o representa é a democracia, onde você assume a responsabilidade de decidir os governantes por meio do voto eleitoral e defende a: igualdade perante a lei, liberdade de expressão, liberdade religiosa, proteção legal e na participação da sociedade na vida política, econômica e cultural.</p>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;O  sistema político-econômico que se identifica é o socialismo, que propõe a extinção da propriedade privada dos meios de produção, acúmulo de capital, tomada do poder por parte do proletariado e divisão igualitária da renda diminuindo a distância entre ricos e pobres.</p>';}
                        }
            			   
    					$result = mysql_query("SELECT * FROM `bd` WHERE Licao1 = 'Esquerda' and Licao2 = 'Direita' and Licao3 = 'Monarquia' and Licao4 = 'Capitalismo' and id = '$id'");

				        if (mysql_num_rows($result) > 0) {
            			while($row = mysql_fetch_assoc($result)) {
           					echo '<h2 style="font-family:courier;color:white;"><b>'.$row['Nome'].',</b></h2>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;Você tem uma ideologia voltada para a esquerda quanto ao espectro econômico do país, que pode ser popularmente chamado de conservador, acredita que o governo deve interferir/controlar o mercado financeiro e participar ativamente na economia, apoia  medidas sociais e propostas que visam financiar serviços públicos amplos e para uma distribuição mais igualitária de renda.</p>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;No espectro social se identifica com a ideologia de direita, adotando também uma postura conservadora, desta vez em relação aos costumes, você preza os “valores familiares” ou “valores atemporais”, se identifica e/ou promove conceitos passados de geração em geração ao lado de instituições como a igreja, a família, o Estado e a vida da comunidade.</p>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;A forma de governo que melhor o representa é a monarquia, onde o poder deve estar nas mãos do monarca (rei, príncipe, imperador) geralmente de forma vitalícia, ou seja ocupa o cargo até a morte. Direitos humanos fundamentais devem ser definidos pelo governo que é chefiado pela Família Real, que tem uma linha de sucessão e a prerrogativa de se manter no poder, normalmente de maneira hereditária.</p>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;O  sistema político-econômico que se identifica é o capitalismo, caracterizado por uma divisão social na produção em que os trabalhadores que dispõem apenas de sua força de trabalho a vendem em troca de um pagamento (salário); e os capitalistas proprietários dos meios de produção contratam os trabalhadores para produzir mercadorias, que são vendidas para a obtenção do lucro.</p>';}
                        }
            			    
    					$result = mysql_query("SELECT * FROM `bd` WHERE Licao1 = 'Esquerda' and Licao2 = 'Direita' and Licao3 = 'Monarquia' and Licao4 = 'Socialismo' and id = '$id'");

				        if (mysql_num_rows($result) > 0) {
            			while($row = mysql_fetch_assoc($result)) {
           					echo '<h2 style="font-family:courier;color:white;"><b>'.$row['Nome'].',</b></h2>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;Você tem uma ideologia voltada para a esquerda quanto ao espectro econômico do país, que pode ser popularmente chamado de conservador, acredita que o governo deve interferir/controlar o mercado financeiro e participar ativamente na economia, apoia  medidas sociais e propostas que visam financiar serviços públicos amplos e para uma distribuição mais igualitária de renda.</p>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;No espectro social se identifica com a ideologia de direita, adotando também uma postura conservadora, desta vez em relação aos costumes, você preza os “valores familiares” ou “valores atemporais”, se identifica e/ou promove conceitos passados de geração em geração ao lado de instituições como a igreja, a família, o Estado e a vida da comunidade.</p>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;A forma de governo que melhor o representa é a monarquia, onde o poder deve estar nas mãos do monarca (rei, príncipe, imperador) geralmente de forma vitalícia, ou seja ocupa o cargo até a morte. Direitos humanos fundamentais devem ser definidos pelo governo que é chefiado pela Família Real, que tem uma linha de sucessão e a prerrogativa de se manter no poder, normalmente de maneira hereditária.</p>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;O  sistema político-econômico que se identifica é o socialismo, que propõe a extinção da propriedade privada dos meios de produção, acúmulo de capital, tomada do poder por parte do proletariado e divisão igualitária da renda diminuindo a distância entre ricos e pobres.</p>';}
                        }
            			 
    					$result = mysql_query("SELECT * FROM `bd` WHERE Licao1 = 'Esquerda' and Licao2 = 'Direita' and Licao3 = 'Ditadura' and Licao4 = 'Capitalismo' and id = '$id'");

				        if (mysql_num_rows($result) > 0) {
            			while($row = mysql_fetch_assoc($result)) {
           					echo '<h2 style="font-family:courier;color:white;"><b>'.$row['Nome'].',</b></h2>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;Você tem uma ideologia voltada para a esquerda quanto ao espectro econômico do país, que pode ser popularmente chamado de conservador, acredita que o governo deve interferir/controlar o mercado financeiro e participar ativamente na economia, apoia  medidas sociais e propostas que visam financiar serviços públicos amplos e para uma distribuição mais igualitária de renda.</p>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;No espectro social se identifica com a ideologia de direita, adotando também uma postura conservadora, desta vez em relação aos costumes, você preza os “valores familiares” ou “valores atemporais”, se identifica e/ou promove conceitos passados de geração em geração ao lado de instituições como a igreja, a família, o Estado e a vida da comunidade.</p>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;A forma de governo que melhor o representa é a ditadura, onde você deve abrir mão de direitos civis para que todos os poderes do Estado sejam governados por uma pessoa ou por um grupo de pessoas, com tirania ou violência a opositores. Governos ditatoriais geralmente assumem o poder através de Golpes de Estado ou situações de guerra, o governante atua de acordo com suas próprias vontades, sem que respeite a divisão de poderes, direitos humanos fundamentais pessoais ou da população.</p>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;O  sistema político-econômico que se identifica é o capitalismo, caracterizado por uma divisão social na produção em que os trabalhadores que dispõem apenas de sua força de trabalho a vendem em troca de um pagamento (salário); e os capitalistas proprietários dos meios de produção contratam os trabalhadores para produzir mercadorias, que são vendidas para a obtenção do lucro.</p>';}
                        }
            			
    					$result = mysql_query("SELECT * FROM `bd` WHERE Licao1 = 'Esquerda' and Licao2 = 'Direita' and Licao3 = 'Ditadura' and Licao4 = 'Socialismo' and id = '$id'");

				        if (mysql_num_rows($result) > 0) {
            			while($row = mysql_fetch_assoc($result)) {
           					echo '<h2 style="font-family:courier;color:white;"><b>'.$row['Nome'].',</b></h2>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;Você tem uma ideologia voltada para a esquerda quanto ao espectro econômico do país, que pode ser popularmente chamado de conservador, acredita que o governo deve interferir/controlar o mercado financeiro e participar ativamente na economia, apoia  medidas sociais e propostas que visam financiar serviços públicos amplos e para uma distribuição mais igualitária de renda.</p>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;No espectro social se identifica com a ideologia de direita, adotando também uma postura conservadora, desta vez em relação aos costumes, você preza os “valores familiares” ou “valores atemporais”, se identifica e/ou promove conceitos passados de geração em geração ao lado de instituições como a igreja, a família, o Estado e a vida da comunidade.</p>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;A forma de governo que melhor o representa é a ditadura, onde você deve abrir mão de direitos civis para que todos os poderes do Estado sejam governados por uma pessoa ou por um grupo de pessoas, com tirania ou violência a opositores. Governos ditatoriais geralmente assumem o poder através de Golpes de Estado ou situações de guerra, o governante atua de acordo com suas próprias vontades, sem que respeite a divisão de poderes, direitos humanos fundamentais pessoais ou da população.</p>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;O  sistema político-econômico que se identifica é o socialismo, que propõe a extinção da propriedade privada dos meios de produção, acúmulo de capital, tomada do poder por parte do proletariado e divisão igualitária da renda diminuindo a distância entre ricos e pobres.</p>';}
                        }
            			
    					$result = mysql_query("SELECT * FROM `bd` WHERE Licao1 = 'Direita' and Licao2 = 'Esquerda' and Licao3 = 'Democracia' and Licao4 = 'Capitalismo' and id = '$id'");

				        if (mysql_num_rows($result) > 0) {
            			while($row = mysql_fetch_assoc($result)) {
           					echo '<h2 style="font-family:courier;color:white;"><b>'.$row['Nome'].',</b></h2>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;Você tem uma ideologia voltada para a direta quanto ao espectro econômico do país, que pode ser popularmente chamado de liberal, você acredita que o governo deve cuidar apenas do essencial (segurança, justiça, educação), ter pouca influência sobre a economia, favorecer o livre comércio, promover meios de produção sob o comando privado (privatizações), acordos individuais entre empregadores e empregados e impostos mais baixos.</p>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;No espectro social se identifica com a ideologia de esquerda, adotando também uma postura liberal, desta vez em relação aos costumes, onde se declara defensor dos direitos humanos e das liberdades civis, se identifica ou aprova causas como: redução da pobreza e desigualdades sociais, regulamentação da união civil-homossexual, a descriminalização do aborto, a legalização das drogas e outros temas controversos.</p>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;A forma de governo que melhor o representa é a democracia, onde você assume a responsabilidade de decidir os governantes por meio do voto eleitoral e defende a: igualdade perante a lei, liberdade de expressão, liberdade religiosa, proteção legal e na participação da sociedade na vida política, econômica e cultural.</p>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;O  sistema político-econômico que se identifica é o capitalismo, caracterizado por uma divisão social na produção em que os trabalhadores que dispõem apenas de sua força de trabalho a vendem em troca de um pagamento (salário); e os capitalistas proprietários dos meios de produção contratam os trabalhadores para produzir mercadorias, que são vendidas para a obtenção do lucro.</p>';}
                        }
            			
    					$result = mysql_query("SELECT * FROM `bd` WHERE Licao1 = 'Direita' and Licao2 = 'Esquerda' and Licao3 = 'Democracia' and Licao4 = 'Socialismo' and id = '$id'");

				        if (mysql_num_rows($result) > 0) {
            			while($row = mysql_fetch_assoc($result)) {
           					echo '<h2 style="font-family:courier;color:white;"><b>'.$row['Nome'].',</b></h2>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;Você tem uma ideologia voltada para a direta quanto ao espectro econômico do país, que pode ser popularmente chamado de liberal, você acredita que o governo deve cuidar apenas do essencial (segurança, justiça, educação), ter pouca influência sobre a economia, favorecer o livre comércio, promover meios de produção sob o comando privado (privatizações), acordos individuais entre empregadores e empregados e impostos mais baixos.</p>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;No espectro social se identifica com a ideologia de esquerda, adotando também uma postura liberal, desta vez em relação aos costumes, onde se declara defensor dos direitos humanos e das liberdades civis, se identifica ou aprova causas como: redução da pobreza e desigualdades sociais, regulamentação da união civil-homossexual, a descriminalização do aborto, a legalização das drogas e outros temas controversos.</p>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;A forma de governo que melhor o representa é a democracia, onde você assume a responsabilidade de decidir os governantes por meio do voto eleitoral e defende a: igualdade perante a lei, liberdade de expressão, liberdade religiosa, proteção legal e na participação da sociedade na vida política, econômica e cultural.</p>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;O  sistema político-econômico que se identifica é o socialismo, que propõe a extinção da propriedade privada dos meios de produção, acúmulo de capital, tomada do poder por parte do proletariado e divisão igualitária da renda diminuindo a distância entre ricos e pobres.</p>';}
                        }
            			   
    					$result = mysql_query("SELECT * FROM `bd` WHERE Licao1 = 'Direita' and Licao2 = 'Esquerda' and Licao3 = 'Monarquia' and Licao4 = 'Capitalismo' and id = '$id'");

				        if (mysql_num_rows($result) > 0) {
            			while($row = mysql_fetch_assoc($result)) {
           					echo '<h2 style="font-family:courier;color:white;"><b>'.$row['Nome'].',</b></h2>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;Você tem uma ideologia voltada para a direta quanto ao espectro econômico do país, que pode ser popularmente chamado de liberal, você acredita que o governo deve cuidar apenas do essencial (segurança, justiça, educação), ter pouca influência sobre a economia, favorecer o livre comércio, promover meios de produção sob o comando privado (privatizações), acordos individuais entre empregadores e empregados e impostos mais baixos.</p>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;No espectro social se identifica com a ideologia de esquerda, adotando também uma postura liberal, desta vez em relação aos costumes, onde se declara defensor dos direitos humanos e das liberdades civis, se identifica ou aprova causas como: redução da pobreza e desigualdades sociais, regulamentação da união civil-homossexual, a descriminalização do aborto, a legalização das drogas e outros temas controversos.</p>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;A forma de governo que melhor o representa é a monarquia, onde o poder deve estar nas mãos do monarca (rei, príncipe, imperador) geralmente de forma vitalícia, ou seja ocupa o cargo até a morte. Direitos humanos fundamentais devem ser definidos pelo governo que é chefiado pela Família Real, que tem uma linha de sucessão e a prerrogativa de se manter no poder, normalmente de maneira hereditária.</p>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;O  sistema político-econômico que se identifica é o capitalismo, caracterizado por uma divisão social na produção em que os trabalhadores que dispõem apenas de sua força de trabalho a vendem em troca de um pagamento (salário); e os capitalistas proprietários dos meios de produção contratam os trabalhadores para produzir mercadorias, que são vendidas para a obtenção do lucro.</p>';}
                        }
            			    
    					$result = mysql_query("SELECT * FROM `bd` WHERE Licao1 = 'Direita' and Licao2 = 'Esquerda' and Licao3 = 'Monarquia' and Licao4 = 'Socialismo' and id = '$id'");

				        if (mysql_num_rows($result) > 0) {
            			while($row = mysql_fetch_assoc($result)) {
           					echo '<h2 style="font-family:courier;color:white;"><b>'.$row['Nome'].',</b></h2>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;Você tem uma ideologia voltada para a direta quanto ao espectro econômico do país, que pode ser popularmente chamado de liberal, você acredita que o governo deve cuidar apenas do essencial (segurança, justiça, educação), ter pouca influência sobre a economia, favorecer o livre comércio, promover meios de produção sob o comando privado (privatizações), acordos individuais entre empregadores e empregados e impostos mais baixos.</p>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;No espectro social se identifica com a ideologia de esquerda, adotando também uma postura liberal, desta vez em relação aos costumes, onde se declara defensor dos direitos humanos e das liberdades civis, se identifica ou aprova causas como: redução da pobreza e desigualdades sociais, regulamentação da união civil-homossexual, a descriminalização do aborto, a legalização das drogas e outros temas controversos.</p>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;A forma de governo que melhor o representa é a monarquia, onde o poder deve estar nas mãos do monarca (rei, príncipe, imperador) geralmente de forma vitalícia, ou seja ocupa o cargo até a morte. Direitos humanos fundamentais devem ser definidos pelo governo que é chefiado pela Família Real, que tem uma linha de sucessão e a prerrogativa de se manter no poder, normalmente de maneira hereditária.</p>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;O  sistema político-econômico que se identifica é o socialismo, que propõe a extinção da propriedade privada dos meios de produção, acúmulo de capital, tomada do poder por parte do proletariado e divisão igualitária da renda diminuindo a distância entre ricos e pobres.</p></p>';}
                        }
            			 
    					$result = mysql_query("SELECT * FROM `bd` WHERE Licao1 = 'Direita' and Licao2 = 'Esquerda' and Licao3 = 'Ditadura' and Licao4 = 'Capitalismo' and id = '$id'");

				        if (mysql_num_rows($result) > 0) {
            			while($row = mysql_fetch_assoc($result)) {
           					echo '<h2 style="font-family:courier;color:white;"><b>'.$row['Nome'].',</b></h2>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;Você tem uma ideologia voltada para a direta quanto ao espectro econômico do país, que pode ser popularmente chamado de liberal, você acredita que o governo deve cuidar apenas do essencial (segurança, justiça, educação), ter pouca influência sobre a economia, favorecer o livre comércio, promover meios de produção sob o comando privado (privatizações), acordos individuais entre empregadores e empregados e impostos mais baixos.</p>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;No espectro social se identifica com a ideologia de esquerda, adotando também uma postura liberal, desta vez em relação aos costumes, onde se declara defensor dos direitos humanos e das liberdades civis, se identifica ou aprova causas como: redução da pobreza e desigualdades sociais, regulamentação da união civil-homossexual, a descriminalização do aborto, a legalização das drogas e outros temas controversos.</p>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;A forma de governo que melhor o representa é a ditadura, onde você deve abrir mão de direitos civis para que todos os poderes do Estado sejam governados por uma pessoa ou por um grupo de pessoas, com tirania ou violência a opositores. Governos ditatoriais geralmente assumem o poder através de Golpes de Estado ou situações de guerra, o governante atua de acordo com suas próprias vontades, sem que respeite a divisão de poderes, direitos humanos fundamentais pessoais ou da população.</p>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;O  sistema político-econômico que se identifica é o capitalismo, caracterizado por uma divisão social na produção em que os trabalhadores que dispõem apenas de sua força de trabalho a vendem em troca de um pagamento (salário); e os capitalistas proprietários dos meios de produção contratam os trabalhadores para produzir mercadorias, que são vendidas para a obtenção do lucro.</p>';}
                        }
            			
    					$result = mysql_query("SELECT * FROM `bd` WHERE Licao1 = 'Direita' and Licao2 = 'Esquerda' and Licao3 = 'Ditadura' and Licao4 = 'Socialismo' and id = '$id'");

				        if (mysql_num_rows($result) > 0) {
            			while($row = mysql_fetch_assoc($result)) {
           					echo '<h2 style="font-family:courier;color:white;"><b>'.$row['Nome'].',</b></h2>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;Você tem uma ideologia voltada para a direta quanto ao espectro econômico do país, que pode ser popularmente chamado de liberal, você acredita que o governo deve cuidar apenas do essencial (segurança, justiça, educação), ter pouca influência sobre a economia, favorecer o livre comércio, promover meios de produção sob o comando privado (privatizações), acordos individuais entre empregadores e empregados e impostos mais baixos.</p>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;No espectro social se identifica com a ideologia de esquerda, adotando também uma postura liberal, desta vez em relação aos costumes, onde se declara defensor dos direitos humanos e das liberdades civis, se identifica ou aprova causas como: redução da pobreza e desigualdades sociais, regulamentação da união civil-homossexual, a descriminalização do aborto, a legalização das drogas e outros temas controversos.</p>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;A forma de governo que melhor o representa é a ditadura, onde você deve abrir mão de direitos civis para que todos os poderes do Estado sejam governados por uma pessoa ou por um grupo de pessoas, com tirania ou violência a opositores. Governos ditatoriais geralmente assumem o poder através de Golpes de Estado ou situações de guerra, o governante atua de acordo com suas próprias vontades, sem que respeite a divisão de poderes, direitos humanos fundamentais pessoais ou da população.</p>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;O  sistema político-econômico que se identifica é o socialismo, que propõe a extinção da propriedade privada dos meios de produção, acúmulo de capital, tomada do poder por parte do proletariado e divisão igualitária da renda diminuindo a distância entre ricos e pobres.</p>';}
                        }
            			
    					$result = mysql_query("SELECT * FROM `bd` WHERE Licao1 = 'Esquerda' and Licao2 = 'Esquerda' and Licao3 = 'Democracia' and Licao4 = 'Capitalismo' and id = '$id'");

				        if (mysql_num_rows($result) > 0) {
            			while($row = mysql_fetch_assoc($result)) {
           					echo '<h2 style="font-family:courier;color:white;"><b>'.$row['Nome'].',</b></h2>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;Você tem uma ideologia voltada para a esquerda quanto ao espectro econômico do país, que pode ser popularmente chamado de conservador, acredita que o governo deve interferir/controlar o mercado financeiro e participar ativamente na economia, apoia  medidas sociais e propostas que visam financiar serviços públicos amplos e para uma distribuição mais igualitária de renda.</p>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;No espectro social se identifica também com a ideologia de esquerda, porém adotando agora uma postura contrária a conservadora, sendo liberal em relação aos costumes, onde se declara defensor dos direitos humanos e das liberdades civis, se identifica ou aprova causas como: redução da pobreza e desigualdades sociais, regulamentação da união civil-homossexual, a descriminalização do aborto, a legalização das drogas e outros temas controversos.</p>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;A forma de governo que melhor o representa é a democracia, onde você assume a responsabilidade de decidir os governantes por meio do voto eleitoral e defende a: igualdade perante a lei, liberdade de expressão, liberdade religiosa, proteção legal e na participação da sociedade na vida política, econômica e cultural.</p>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;O  sistema político-econômico que se identifica é o capitalismo, caracterizado por uma divisão social na produção em que os trabalhadores que dispõem apenas de sua força de trabalho a vendem em troca de um pagamento (salário); e os capitalistas proprietários dos meios de produção contratam os trabalhadores para produzir mercadorias, que são vendidas para a obtenção do lucro.</p>';}
                        }
            			
    					$result = mysql_query("SELECT * FROM `bd` WHERE Licao1 = 'Esquerda' and Licao2 = 'Esquerda' and Licao3 = 'Democracia' and Licao4 = 'Socialismo' and id = '$id'");

				        if (mysql_num_rows($result) > 0) {
            			while($row = mysql_fetch_assoc($result)) {
           					echo '<h2 style="font-family:courier;color:white;"><b>'.$row['Nome'].',</b></h2>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;Você tem uma ideologia voltada para a esquerda quanto ao espectro econômico do país, que pode ser popularmente chamado de conservador, acredita que o governo deve interferir/controlar o mercado financeiro e participar ativamente na economia, apoia  medidas sociais e propostas que visam financiar serviços públicos amplos e para uma distribuição mais igualitária de renda.</p>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;No espectro social se identifica também com a ideologia de esquerda, porém adotando agora uma postura contrária a conservadora, sendo liberal em relação aos costumes, onde se declara defensor dos direitos humanos e das liberdades civis, se identifica ou aprova causas como: redução da pobreza e desigualdades sociais, regulamentação da união civil-homossexual, a descriminalização do aborto, a legalização das drogas e outros temas controversos.</p>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;A forma de governo que melhor o representa é a democracia, onde você assume a responsabilidade de decidir os governantes por meio do voto eleitoral e defende a: igualdade perante a lei, liberdade de expressão, liberdade religiosa, proteção legal e na participação da sociedade na vida política, econômica e cultural.</p>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;O  sistema político-econômico que se identifica é o socialismo, que propõe a extinção da propriedade privada dos meios de produção, acúmulo de capital, tomada do poder por parte do proletariado e divisão igualitária da renda diminuindo a distância entre ricos e pobres.</p>';}
                        }
            			   
    					$result = mysql_query("SELECT * FROM `bd` WHERE Licao1 = 'Esquerda' and Licao2 = 'Esquerda' and Licao3 = 'Monarquia' and Licao4 = 'Capitalismo' and id = '$id'");

				        if (mysql_num_rows($result) > 0) {
            			while($row = mysql_fetch_assoc($result)) {
           					echo '<h2 style="font-family:courier;color:white;"><b>'.$row['Nome'].',</b></h2>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;Você tem uma ideologia voltada para a esquerda quanto ao espectro econômico do país, que pode ser popularmente chamado de conservador, acredita que o governo deve interferir/controlar o mercado financeiro e participar ativamente na economia, apoia  medidas sociais e propostas que visam financiar serviços públicos amplos e para uma distribuição mais igualitária de renda.</p>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;No espectro social se identifica também com a ideologia de esquerda, porém adotando agora uma postura contrária a conservadora, sendo liberal em relação aos costumes, onde se declara defensor dos direitos humanos e das liberdades civis, se identifica ou aprova causas como: redução da pobreza e desigualdades sociais, regulamentação da união civil-homossexual, a descriminalização do aborto, a legalização das drogas e outros temas controversos.</p>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;A forma de governo que melhor o representa é a monarquia, onde o poder deve estar nas mãos do monarca (rei, príncipe, imperador) geralmente de forma vitalícia, ou seja ocupa o cargo até a morte. Direitos humanos fundamentais devem ser definidos pelo governo que é chefiado pela Família Real, que tem uma linha de sucessão e a prerrogativa de se manter no poder, normalmente de maneira hereditária.</p>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;O  sistema político-econômico que se identifica é o capitalismo, caracterizado por uma divisão social na produção em que os trabalhadores que dispõem apenas de sua força de trabalho a vendem em troca de um pagamento (salário); e os capitalistas proprietários dos meios de produção contratam os trabalhadores para produzir mercadorias, que são vendidas para a obtenção do lucro.</p>';}
                        }
            			    
    					$result = mysql_query("SELECT * FROM `bd` WHERE Licao1 = 'Esquerda' and Licao2 = 'Esquerda' and Licao3 = 'Monarquia' and Licao4 = 'Socialismo' and id = '$id'");

				        if (mysql_num_rows($result) > 0) {
            			while($row = mysql_fetch_assoc($result)) {
           					echo '<h2 style="font-family:courier;color:white;"><b>'.$row['Nome'].',</b></h2>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;Você tem uma ideologia voltada para a esquerda quanto ao espectro econômico do país, que pode ser popularmente chamado de conservador, acredita que o governo deve interferir/controlar o mercado financeiro e participar ativamente na economia, apoia  medidas sociais e propostas que visam financiar serviços públicos amplos e para uma distribuição mais igualitária de renda.</p>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;No espectro social se identifica também com a ideologia de esquerda, porém adotando agora uma postura contrária a conservadora, sendo liberal em relação aos costumes, onde se declara defensor dos direitos humanos e das liberdades civis, se identifica ou aprova causas como: redução da pobreza e desigualdades sociais, regulamentação da união civil-homossexual, a descriminalização do aborto, a legalização das drogas e outros temas controversos.</p>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;A forma de governo que melhor o representa é a monarquia, onde o poder deve estar nas mãos do monarca (rei, príncipe, imperador) geralmente de forma vitalícia, ou seja ocupa o cargo até a morte. Direitos humanos fundamentais devem ser definidos pelo governo que é chefiado pela Família Real, que tem uma linha de sucessão e a prerrogativa de se manter no poder, normalmente de maneira hereditária.</p>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;O  sistema político-econômico que se identifica é o socialismo, que propõe a extinção da propriedade privada dos meios de produção, acúmulo de capital, tomada do poder por parte do proletariado e divisão igualitária da renda diminuindo a distância entre ricos e pobres.</p>';}
                        }
            			 
    					$result = mysql_query("SELECT * FROM `bd` WHERE Licao1 = 'Esquerda' and Licao2 = 'Esquerda' and Licao3 = 'Ditadura' and Licao4 = 'Capitalismo' and id = '$id'");

				        if (mysql_num_rows($result) > 0) {
            			while($row = mysql_fetch_assoc($result)) {
           					echo '<h2 style="font-family:courier;color:white;"><b>'.$row['Nome'].',</b></h2>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;Você tem uma ideologia voltada para a esquerda quanto ao espectro econômico do país, que pode ser popularmente chamado de conservador, acredita que o governo deve interferir/controlar o mercado financeiro e participar ativamente na economia, apoia  medidas sociais e propostas que visam financiar serviços públicos amplos e para uma distribuição mais igualitária de renda.</p>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;No espectro social se identifica também com a ideologia de esquerda, porém adotando agora uma postura contrária a conservadora, sendo liberal em relação aos costumes, onde se declara defensor dos direitos humanos e das liberdades civis, se identifica ou aprova causas como: redução da pobreza e desigualdades sociais, regulamentação da união civil-homossexual, a descriminalização do aborto, a legalização das drogas e outros temas controversos.</p>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;A forma de governo que melhor o representa é a ditadura, onde você deve abrir mão de direitos civis para que todos os poderes do Estado sejam governados por uma pessoa ou por um grupo de pessoas, com tirania ou violência a opositores. Governos ditatoriais geralmente assumem o poder através de Golpes de Estado ou situações de guerra, o governante atua de acordo com suas próprias vontades, sem que respeite a divisão de poderes, direitos humanos fundamentais pessoais ou da população.</p>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;O  sistema político-econômico que se identifica é o capitalismo, caracterizado por uma divisão social na produção em que os trabalhadores que dispõem apenas de sua força de trabalho a vendem em troca de um pagamento (salário); e os capitalistas proprietários dos meios de produção contratam os trabalhadores para produzir mercadorias, que são vendidas para a obtenção do lucro.</p>';}
                        }
            			
    					$result = mysql_query("SELECT * FROM `bd` WHERE Licao1 = 'Esquerda' and Licao2 = 'Esquerda' and Licao3 = 'Ditadura' and Licao4 = 'Socialismo' and id = '$id'");

				        if (mysql_num_rows($result) > 0) {
            			while($row = mysql_fetch_assoc($result)) {
           					echo '<h2 style="font-family:courier;color:white;"><b>'.$row['Nome'].',</b></h2>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;Você tem uma ideologia voltada para a esquerda quanto ao espectro econômico do país, que pode ser popularmente chamado de conservador, acredita que o governo deve interferir/controlar o mercado financeiro e participar ativamente na economia, apoia  medidas sociais e propostas que visam financiar serviços públicos amplos e para uma distribuição mais igualitária de renda.</p>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;No espectro social se identifica também com a ideologia de esquerda, porém adotando agora uma postura contrária a conservadora, sendo liberal em relação aos costumes, onde se declara defensor dos direitos humanos e das liberdades civis, se identifica ou aprova causas como: redução da pobreza e desigualdades sociais, regulamentação da união civil-homossexual, a descriminalização do aborto, a legalização das drogas e outros temas controversos.</p>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;A forma de governo que melhor o representa é a ditadura, onde você deve abrir mão de direitos civis para que todos os poderes do Estado sejam governados por uma pessoa ou por um grupo de pessoas, com tirania ou violência a opositores. Governos ditatoriais geralmente assumem o poder através de Golpes de Estado ou situações de guerra, o governante atua de acordo com suas próprias vontades, sem que respeite a divisão de poderes, direitos humanos fundamentais pessoais ou da população.</p>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;O  sistema político-econômico que se identifica é o socialismo, que propõe a extinção da propriedade privada dos meios de produção, acúmulo de capital, tomada do poder por parte do proletariado e divisão igualitária da renda diminuindo a distância entre ricos e pobres.</p>';}
                        }
            			
    					$result = mysql_query("SELECT * FROM `bd` WHERE Licao1 = 'Direita' and Licao2 = 'Direita' and Licao3 = 'Democracia' and Licao4 = 'Capitalismo' and id = '$id'");

				        if (mysql_num_rows($result) > 0) {
            			while($row = mysql_fetch_assoc($result)) {
           					echo '<h2 style="font-family:courier;color:white;"><b>'.$row['Nome'].',</b></h2>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;Você tem uma ideologia voltada para a direta quanto ao espectro econômico do país, que pode ser popularmente chamado de liberal, você acredita que o governo deve cuidar apenas do essencial (segurança, justiça, educação), ter pouca influência sobre a economia, favorecer o livre comércio, promover meios de produção sob o comando privado (privatizações), acordos individuais entre empregadores e empregados e impostos mais baixos.</p>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;No espectro social se identifica também com a ideologia de direita, porém adotando agora uma postura contrária a liberal, sendo conservador em relação aos costumes, você preza os “valores familiares” ou “valores atemporais”, se identifica e/ou promove conceitos passados de geração em geração ao lado de instituições como a igreja, a família, o Estado e a vida da comunidade.</p>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;A forma de governo que melhor o representa é a democracia, onde você assume a responsabilidade de decidir os governantes por meio do voto eleitoral e defende a: igualdade perante a lei, liberdade de expressão, liberdade religiosa, proteção legal e na participação da sociedade na vida política, econômica e cultural.</p>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;O  sistema político-econômico que se identifica é o capitalismo, caracterizado por uma divisão social na produção em que os trabalhadores que dispõem apenas de sua força de trabalho a vendem em troca de um pagamento (salário); e os capitalistas proprietários dos meios de produção contratam os trabalhadores para produzir mercadorias, que são vendidas para a obtenção do lucro.</p>';}
                        }
            			
    					$result = mysql_query("SELECT * FROM `bd` WHERE Licao1 = 'Direita' and Licao2 = 'Direita' and Licao3 = 'Democracia' and Licao4 = 'Socialismo' and id = '$id'");

				        if (mysql_num_rows($result) > 0) {
            			while($row = mysql_fetch_assoc($result)) {
           					echo '<h2 style="font-family:courier;color:white;"><b>'.$row['Nome'].',</b></h2>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;Você tem uma ideologia voltada para a direta quanto ao espectro econômico do país, que pode ser popularmente chamado de liberal, você acredita que o governo deve cuidar apenas do essencial (segurança, justiça, educação), ter pouca influência sobre a economia, favorecer o livre comércio, promover meios de produção sob o comando privado (privatizações), acordos individuais entre empregadores e empregados e impostos mais baixos.</p>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;No espectro social se identifica também com a ideologia de direita, porém adotando agora uma postura contrária a liberal, sendo conservador em relação aos costumes, você preza os “valores familiares” ou “valores atemporais”, se identifica e/ou promove conceitos passados de geração em geração ao lado de instituições como a igreja, a família, o Estado e a vida da comunidade.</p>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;A forma de governo que melhor o representa é a democracia, onde você assume a responsabilidade de decidir os governantes por meio do voto eleitoral e defende a: igualdade perante a lei, liberdade de expressão, liberdade religiosa, proteção legal e na participação da sociedade na vida política, econômica e cultural.</p>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;O  sistema político-econômico que se identifica é o socialismo, que propõe a extinção da propriedade privada dos meios de produção, acúmulo de capital, tomada do poder por parte do proletariado e divisão igualitária da renda diminuindo a distância entre ricos e pobres.</p>';}
                        }
            			   
    					$result = mysql_query("SELECT * FROM `bd` WHERE Licao1 = 'Direita' and Licao2 = 'Direita' and Licao3 = 'Monarquia' and Licao4 = 'Capitalismo' and id = '$id'");

				        if (mysql_num_rows($result) > 0) {
            			while($row = mysql_fetch_assoc($result)) {
           					echo '<h2 style="font-family:courier;color:white;"><b>'.$row['Nome'].',</b></h2>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;Você tem uma ideologia voltada para a direta quanto ao espectro econômico do país, que pode ser popularmente chamado de liberal, você acredita que o governo deve cuidar apenas do essencial (segurança, justiça, educação), ter pouca influência sobre a economia, favorecer o livre comércio, promover meios de produção sob o comando privado (privatizações), acordos individuais entre empregadores e empregados e impostos mais baixos.</p>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;No espectro social se identifica também com a ideologia de direita, porém adotando agora uma postura contrária a liberal, sendo conservador em relação aos costumes, você preza os “valores familiares” ou “valores atemporais”, se identifica e/ou promove conceitos passados de geração em geração ao lado de instituições como a igreja, a família, o Estado e a vida da comunidade.</p>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;A forma de governo que melhor o representa é a monarquia, onde o poder deve estar nas mãos do monarca (rei, príncipe, imperador) geralmente de forma vitalícia, ou seja ocupa o cargo até a morte. Direitos humanos fundamentais devem ser definidos pelo governo que é chefiado pela Família Real, que tem uma linha de sucessão e a prerrogativa de se manter no poder, normalmente de maneira hereditária.</p>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;O  sistema político-econômico que se identifica é o capitalismo, caracterizado por uma divisão social na produção em que os trabalhadores que dispõem apenas de sua força de trabalho a vendem em troca de um pagamento (salário); e os capitalistas proprietários dos meios de produção contratam os trabalhadores para produzir mercadorias, que são vendidas para a obtenção do lucro.</p>';}
                        }
            			    
    					$result = mysql_query("SELECT * FROM `bd` WHERE Licao1 = 'Direita' and Licao2 = 'Direita' and Licao3 = 'Monarquia' and Licao4 = 'Socialismo' and id = '$id'");

				        if (mysql_num_rows($result) > 0) {
            			while($row = mysql_fetch_assoc($result)) {
           					echo '<h2 style="font-family:courier;color:white;"><b>'.$row['Nome'].',</b></h2>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;Você tem uma ideologia voltada para a direta quanto ao espectro econômico do país, que pode ser popularmente chamado de liberal, você acredita que o governo deve cuidar apenas do essencial (segurança, justiça, educação), ter pouca influência sobre a economia, favorecer o livre comércio, promover meios de produção sob o comando privado (privatizações), acordos individuais entre empregadores e empregados e impostos mais baixos.</p>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;No espectro social se identifica também com a ideologia de direita, porém adotando agora uma postura contrária a liberal, sendo conservador em relação aos costumes, você preza os “valores familiares” ou “valores atemporais”, se identifica e/ou promove conceitos passados de geração em geração ao lado de instituições como a igreja, a família, o Estado e a vida da comunidade.</p>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;A forma de governo que melhor o representa é a monarquia, onde o poder deve estar nas mãos do monarca (rei, príncipe, imperador) geralmente de forma vitalícia, ou seja ocupa o cargo até a morte. Direitos humanos fundamentais devem ser definidos pelo governo que é chefiado pela Família Real, que tem uma linha de sucessão e a prerrogativa de se manter no poder, normalmente de maneira hereditária.</p>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;O  sistema político-econômico que se identifica é o socialismo, que propõe a extinção da propriedade privada dos meios de produção, acúmulo de capital, tomada do poder por parte do proletariado e divisão igualitária da renda diminuindo a distância entre ricos e pobres.</p>';}
                        }
            			 
    					$result = mysql_query("SELECT * FROM `bd` WHERE Licao1 = 'Direita' and Licao2 = 'Direita' and Licao3 = 'Ditadura' and Licao4 = 'Capitalismo' and id = '$id'");

				        if (mysql_num_rows($result) > 0) {
            			while($row = mysql_fetch_assoc($result)) {
           					echo '<h2 style="font-family:courier;color:white;"><b>'.$row['Nome'].',</b></h2>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;Você tem uma ideologia voltada para a direta quanto ao espectro econômico do país, que pode ser popularmente chamado de liberal, você acredita que o governo deve cuidar apenas do essencial (segurança, justiça, educação), ter pouca influência sobre a economia, favorecer o livre comércio, promover meios de produção sob o comando privado (privatizações), acordos individuais entre empregadores e empregados e impostos mais baixos.</p>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;No espectro social se identifica também com a ideologia de direita, porém adotando agora uma postura contrária a liberal, sendo conservador em relação aos costumes, você preza os “valores familiares” ou “valores atemporais”, se identifica e/ou promove conceitos passados de geração em geração ao lado de instituições como a igreja, a família, o Estado e a vida da comunidade.</p>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;A forma de governo que melhor o representa é a ditadura, onde você deve abrir mão de direitos civis para que todos os poderes do Estado sejam governados por uma pessoa ou por um grupo de pessoas, com tirania ou violência a opositores. Governos ditatoriais geralmente assumem o poder através de Golpes de Estado ou situações de guerra, o governante atua de acordo com suas próprias vontades, sem que respeite a divisão de poderes, direitos humanos fundamentais pessoais ou da população.</p>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;O  sistema político-econômico que se identifica é o capitalismo, caracterizado por uma divisão social na produção em que os trabalhadores que dispõem apenas de sua força de trabalho a vendem em troca de um pagamento (salário); e os capitalistas proprietários dos meios de produção contratam os trabalhadores para produzir mercadorias, que são vendidas para a obtenção do lucro.</p>';}
                        }
            			
    					$result = mysql_query("SELECT * FROM `bd` WHERE Licao1 = 'Direita' and Licao2 = 'Direita' and Licao3 = 'Ditadura' and Licao4 = 'Socialismo' and id = '$id'");

				        if (mysql_num_rows($result) > 0) {
            			while($row = mysql_fetch_assoc($result)) {
           					echo '<h2 style="font-family:courier;color:white;"><b>'.$row['Nome'].',</b></h2>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;Você tem uma ideologia voltada para a direta quanto ao espectro econômico do país, que pode ser popularmente chamado de liberal, você acredita que o governo deve cuidar apenas do essencial (segurança, justiça, educação), ter pouca influência sobre a economia, favorecer o livre comércio, promover meios de produção sob o comando privado (privatizações), acordos individuais entre empregadores e empregados e impostos mais baixos.</p>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;No espectro social se identifica também com a ideologia de direita, porém adotando agora uma postura contrária a liberal, sendo conservador em relação aos costumes, você preza os “valores familiares” ou “valores atemporais”, se identifica e/ou promove conceitos passados de geração em geração ao lado de instituições como a igreja, a família, o Estado e a vida da comunidade.</p>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;A forma de governo que melhor o representa é a ditadura, onde você deve abrir mão de direitos civis para que todos os poderes do Estado sejam governados por uma pessoa ou por um grupo de pessoas, com tirania ou violência a opositores. Governos ditatoriais geralmente assumem o poder através de Golpes de Estado ou situações de guerra, o governante atua de acordo com suas próprias vontades, sem que respeite a divisão de poderes, direitos humanos fundamentais pessoais ou da população.</p>
                    <p style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;O  sistema político-econômico que se identifica é o socialismo, que propõe a extinção da propriedade privada dos meios de produção, acúmulo de capital, tomada do poder por parte do proletariado e divisão igualitária da renda diminuindo a distância entre ricos e pobres.</p>';}
                        }

				    ?>
                    <a href="../conteudo/resultados.php" class="botao1" role="button"><b>Resultados</b></a>
				</div>
			</div>
		</div>
	    <div class="rodape">
			<div class="green"></div>
			<div class="blue"></div>
			<div class="yellow"></div>
		</div>
	</body>
</html>