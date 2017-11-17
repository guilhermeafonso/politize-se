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
		<title>Partidos políticos</title>
	</head>
	<body>
		<?php
			$host = "localhost";
		    $user = "root";
		    $pass = "";
		    $db = "politizese";
		    $licao6 = $_POST['licao6'];
		    $id = $_POST['id'];
		    $conexao = @mysql_connect($host, $user, $pass) or die(mysql_error());
		    @mysql_select_db($db) or die(mysql_error());  
		    $sqrl = mysql_query("UPDATE bd set Licao6 ='$licao6' WHERE id = '$id'");
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
					<div class="step current">
						<span><b>Eleições</b></span>
					</div>
					<div class="step">
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
				<div class="tema"><b>Partidos políticos.</b></div><br>
				<div class="descricao"><i>* Selecionamos os 12 principais partidos. Com base em lições anteriores os que estão marcados são os que você pode mais se identificar.</i></div><br>
				<?php
			    	$host = "localhost";
			        $user = "root";
			        $pass = "";
			        $db = "politizese";
			        $conexao = @mysql_connect($host, $user, $pass) or die(mysql_error());
			        @mysql_select_db($db) or die(mysql_error());
			        
	      	$result = mysql_query("SELECT * FROM `bd` WHERE Licao1 = 'Esquerda' and id = '$id'");

	        if (mysql_num_rows($result) > 0) {
			while($row = mysql_fetch_assoc($result)) {
					echo "
					<div class=\"row\">
						<div class=\"col-md-3\">
							<div class=\"caixa4\">
								<div class=\"rede1\">
								<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
							</div>
							<div class=\"rede2\">
								</a>
								<a title=\"Sinalizado como preferido\" class=\"fa fa-bookmark fa-2x\" aria-hidden=\"true\"></a>
								</a>
							</div>
								<img class=\"partidos\" src=\"../imagens/partido2.png\">
								<a class=\"link\" href=\"#popup5\">
									<button class=\"botao6\" type=\"button\">
										<b>Conheça +</b>
								</button>
								</a>
								<form name=\"Partido\" action=\"eleicoes2.php\" method=\"POST\">
								<input type=\"hidden\" name=\"id\" value=".$id.">
								<button class=\"botao7\" type=\"submit\" name=\"Partido\" value=\"2\">
									<div><b>Meu partido!</b></div>
								</button>
							</form>
							</div>
						</div>
						<div class=\"col-md-3\">
							<div class=\"caixa4\">
								<div class=\"rede1\">
								<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
							</div>
							<div class=\"rede2\">
								</a>
								<a title=\"Sinalizado como preferido\" class=\"fa fa-bookmark fa-2x\" aria-hidden=\"true\"></a>
								</a>
							</div>
								<img class=\"partidos\" src=\"../imagens/partido5.png\">
								<a class=\"link\" href=\"#popup6\">
									<button class=\"botao6\" type=\"button\">
										<b>Conheça +</b>
								</button>
								</a>
								<form name=\"Partido\" action=\"eleicoes2.php\" method='POST'>
								<input type=\"hidden\" name=\"id\" value=".$id.">
								<button class='botao7' type='submit' name='Partido' value=\"4\">
									<div><b>Meu partido!</b></div>
								</button>
							</form>
							</div>
						</div>
						<div class=\"col-md-3\">
							<div class=\"caixa4\">
								<div class=\"rede1\">
								<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
							</div>
							<div class=\"rede2\">
								</a>
								<a title=\"Sinalizado como preferido\" class=\"fa fa-bookmark fa-2x\" aria-hidden=\"true\"></a>
								</a>
							</div>
								<img class=\"partidos\" src=\"../imagens/partido9.png\">
								<a class=\"link\" href=\"#popup7\">
									<button class=\"botao6\" type=\"button\">
										<b>Conheça +</b>
								</button>
								</a>
								<form name=\"Partido\" action=\"eleicoes2.php\" method=\"POST\">
								<input type=\"hidden\" name=\"id\" value=".$id.">
								<button class=\"botao7\" type=\"submit\" name=\"Partido\" value=\"5\">
									<div><b>Meu partido!</b></div>
								</button>
							</form>
							</div>
						</div>
						<div class=\"col-md-3\">
							<div class=\"caixa4\">
								<div class=\"rede1\">
								<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
							</div>
							<div class=\"rede2\">
								</a>
								<a title=\"Sinalizado como preferido\" class=\"fa fa-bookmark fa-2x\" aria-hidden=\"true\"></a>
								</a>
							</div>
								<img class=\"partidos\" src=\"../imagens/partido10.png\">
								<a class=\"link\" href=\"#popup8\">
									<button class=\"botao6\" type=\"button\">
										<b>Conheça +</b>
								</button>
								</a>
								<form name=\"Partido\" action=\"eleicoes2.php\" method=\"POST\">
								<input type=\"hidden\" name=\"id\" value=".$id.">
								<button class=\"botao7\" type=\"submit\" name=\"Partido\" value=\"6\">
									<div><b>Meu partido!</b></div>
								</button>
							</form>
							</div>
						</div>
					</div>
					<div class=\"row\">
						<div class=\"col-md-3\">
							<div class=\"caixa4\">
								<div class=\"rede1\">
								<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
							</div>
							<div class=\"rede2\">
								</a>
								<a title=\"Sinalizado como preferido\" class=\"fa fa-bookmark fa-2x\" aria-hidden=\"true\"></a>
								</a>
							</div>
								<img class=\"partidos\" src=\"../imagens/partido12.png\">
								<a class=\"link\" href=\"#popup9\">
									<button class=\"botao6\" type=\"button\">
										<b>Conheça +</b>
								</button>
								</a>
								<form name=\"Partido\" action=\"eleicoes2.php\" method=\"POST\">
								<input type=\"hidden\" name=\"id\" value=".$id.">
								<button class=\"botao7\" type=\"submit\" name=\"Partido\" value=\"7\">
									<div><b>Meu partido!</b></div>
								</button>
							</form>
							</div>
						</div>
						<div class=\"col-md-3\">
							<div class=\"caixa5\">
							<div class=\"rede1\">
								<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
							</div>
								<img class=\"partidos\" src=\"../imagens/partido1.png\">
								<a class=\"link\" href=\"#popup10\">
									<button class=\"botao6\" type=\"button\">
										<b>Conheça +</b>
								</button>
								</a>
								<form name=\"Partido\" action=\"eleicoes2.php\" method=\"POST\">
								<input type=\"hidden\" name=\"id\" value=".$id.">
								<button class=\"botao7\" type=\"submit\" name=\"Partido\" value=\"11\">
									<div><b>Meu partido!</b></div>
								</button>
							</form>
							</div>
						</div>
						<div class=\"col-md-3\">
							<div class=\"caixa5\">
								<div class=\"rede1\">
								<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
							</div>
								<img class=\"partidos\" src=\"../imagens/partido3.png\">
								<a class=\"link\" href=\"#popup11\">
									<button class=\"botao6\" type=\"button\">
										<b>Conheça +</b>
								</button>
								</a>
								<form name=\"Partido\" action=\"eleicoes2.php\" method=\"POST\">
								<input type=\"hidden\" name=\"id\" value=".$id.">
								<button class=\"botao7\" type=\"submit\" name=\"Partido\" value=\"1\">
									<div><b>Meu partido!</b></div>
								</button>
							</form>
							</div>
						</div>
						<div class=\"col-md-3\">
							<div class=\"caixa5\">
								<div class=\"rede1\">
								<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
							</div>
								<img class=\"partidos\" src=\"../imagens/partido6.png\">
								<a class=\"link\" href=\"#popup12\">
									<button class=\"botao6\" type=\"button\">
										<b>Conheça +</b>
								</button>
								</a>
								<form name=\"Partido\" action=\"eleicoes2.php\" method=\"POST\">
								<input type=\"hidden\" name=\"id\" value=".$id.">
								<button class=\"botao7\" type=\"submit\" name=\"Partido\" value=\"9\">
									<div><b>Meu partido!</b></div>
								</button>
							</form>
							</div>
						</div>
					</div>
					<div class=\"row\">
						<div class=\"col-md-3\">
							<div class=\"caixa6\">
								<div class=\"rede1\">
								<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
							</div>
								<img class=\"partidos\" src=\"../imagens/partido4.png\">
								<a class=\"link\" href=\"#popup13\">
									<button class=\"botao6\" type=\"button\">
										<b>Conheça +</b>
								</button>
								</a>
								<form name=\"Partido\" action=\"eleicoes2.php\" method=\"POST\">
								<input type=\"hidden\" name=\"id\" value=".$id.">
								<button class=\"botao7\" type=\"submit\" name=\"Partido\" value=\"8\">
									<div><b>Meu partido!</b></div>
								</button>
							</form>
							</div>
						</div>
						<div class=\"col-md-3\">
							<div class=\"caixa6\">
							<div class=\"rede1\">
								<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
							</div>
								<img class=\"partidos\" src=\"../imagens/partido7.png\">
								<a class=\"link\" href=\"#popup14\">
									<button class=\"botao6\" type=\"button\">
										<b>Conheça +</b>
								</button>
								</a>
								<form name=\"Partido\" action=\"eleicoes2.php\" method=\"POST\">
								<input type=\"hidden\" name=\"id\" value=".$id.">
								<button class=\"botao7\" type=\"submit\" name=\"Partido\" value=\"12\">
									<div><b>Meu partido!</b></div>
								</button>
							</form>
							</div>
						</div>
						<div class=\"col-md-3\">
							<div class=\"caixa6\">
							<div class=\"rede1\">
								<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
							</div>
								<img class=\"partidos\" src=\"../imagens/partido8.png\">
								<a class=\"link\" href=\"#popup15\">
									<button class=\"botao6\" type=\"button\">
										<b>Conheça +</b>
								</button>
								</a>
								<form name=\"Partido\" action=\"eleicoes2.php\" method=\"POST\">
								<input type=\"hidden\" name=\"id\" value=".$id.">
								<button class=\"botao7\" type=\"submit\" name=\"Partido\" value=\"10\">
									<div><b>Meu partido!</b></div>
								</button>
							</form>
							</div>
						</div>
						<div class=\"col-md-3\">
							<div class=\"caixa6\">
								<div class=\"rede1\">
								<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
							</div>
								<img class=\"partidos\" src=\"../imagens/partido11.png\">
								<a class=\"link\" href=\"#popup16\">
									<button class=\"botao6\" type=\"button\">
										<b>Conheça +</b>
								</button>
								</a>
								<form name=\"Partido\" action=\"eleicoes2.php\" method=\"POST\">
								<input type=\"hidden\" name=\"id\" value=".$id.">
								<button class=\"botao7\" type=\"submit\" name=\"Partido\" value=\"3\">
									<div><b>Meu partido!</b></div>
								</button>
							</form>
							</div>
						</div>
					</div>
				</div>
				<div id=\"popup5\" class=\"overlay\">
				<div class=\"popup\">
					<a class=\"close\" href=\"#\">Voltar</a>
					<div class=\"content\">
						<div class=\"descricao4\"><b>Partido dos Trabalhadores PT</b></div>
						<p>&nbsp;&nbsp;&nbsp;O Partido dos Trabalhadores surgiu no início da década de 80 junto com as greves e os movimentos sindicais como uma grande força de oposição, representando os trabalhadores e as classes populares. É de base socialista e tem como principal representante o ex-presidente Lula e defende a reforma agrária e a justiça social.</p>
						<ul>
							<li>Número eleitoral: 13</li>
							<li>Data de criação: 10/02/1980</li>
							<li>Data do registro definitivo: 11/02/1982</li>
							<li>Quantidade de afiliados: 1 582 646</li>
							<li>Espectro político: Esquerda, a centro-esquerda</li>
						</ul>
						<p>&nbsp;&nbsp;&nbsp;Políticos conhecidos: Luiz Inácio Lula da Silva, Dilma Rousseff, Gleisi Hoffmann, José Dirceu, Fernando Haddad, José Genoino, Eduardo Suplicy, Maria do Rosário, Fernando Pimentel.<br><br></p>
					</div>
				</div>
			</div>
			<div id=\"popup6\" class=\"overlay\">
				<div class=\"popup\">
					<a class=\"close\" href=\"#\">Voltar</a>
					<div class=\"content\">
						<div class=\"descricao4\"><b>Partido Democrático Trabalhista PDT</b></div>
						<p>&nbsp;&nbsp;&nbsp;O Partido Democrático Trabalhista foi criado em 1981 resgatando as principais ideias defendidas por Getúlia Vargas, seu principal representante foi Leonel Brizola. De base nacionalista e social-democrata, O PDT é contra as privatizações, defendendo o investimento na indústria nacional.</p>
						<ul>
							<li>Número eleitoral: 12</li>
							<li>Data de criação: 17/06/1979</li>
							<li>Data do registro definitivo: 10/11/1981</li>
							<li>Quantidade de afiliados: 1 253 890</li>
							<li>Espectro político: Centro-esquerda à esquerda</li>
						</ul>
						<p>&nbsp;&nbsp;&nbsp;Políticos conhecidos: Ciro Gomes, Cidinha Campos, Juarez Soares.<br><br></p>
					</div>
				</div>
			</div>
			<div id=\"popup7\" class=\"overlay\">
				<div class=\"popup\">
					<a class=\"close\" href=\"#\">Voltar</a>
					<div class=\"content\">
						<div class=\"descricao4\"><b>Partido Socialista Brasileiro PSB</b></div>
						<p>&nbsp;&nbsp;&nbsp;O Partido Socialista Brasileiro foi criado em 1947, tendo como principal representante Miguel Arraes e defende ideias do socialismo com transformações na sociedade que representem a melhoria da qualidade de vida dos cidadãos brasileiros.</p>
						<ul>
							<li>Número eleitoral: 40</li>
							<li>Data de criação: 02/04/1947</li>
							<li>Data do registro definitivo: 01/07/1988</li>
							<li>Quantidade de afiliados: 649 732</li>
							<li>Espectro político: Centro-esquerda a esquerda</li>
						</ul>
						<p>&nbsp;&nbsp;&nbsp;Políticos conhecidos: Adilton Sachetti, Átila Lira, Bebeto Galvão, César Messias. <br><br></p>
					</div>
				</div>
			</div>
			<div id=\"popup8\" class=\"overlay\">
				<div class=\"popup\">
					<a class=\"close\" href=\"#\">Voltar</a>
					<div class=\"content\">
						<div class=\"descricao4\"><b>Partido Popular Socialista PPS</b></div>
						<p>&nbsp;&nbsp;&nbsp;O  Partido Popular Socialista foi fundado em 1992 em dissidência do PCB. Seus principais aspectos programáticos são a \"radicalidade democrática\", uma nova definição do socialismo, pautado no humanismo e no internacionalismo, o que o classifica para alguns como partido defensor da social-democracia.</p>
						<ul>
							<li>Número eleitoral: 23</li>
							<li>Data de criação: 26/01/1992</li>
							<li>Data do registro definitivo: 19/03/1992</li>
							<li>Quantidade de afiliados: 481 457</li>
							<li>Espectro político: Centro a esquerda</li>
						</ul>
						<p>&nbsp;&nbsp;&nbsp;Políticos conhecidos: Roberto Freire, Rubens Bueno, Arnaldo Jordy, Cristovam Buarque.<br><br></p>
					</div>
				</div>
			</div>
			<div id=\"popup9\" class=\"overlay\">
				<div class=\"popup\">
					<a class=\"close\" href=\"#\">Voltar</a>
					<div class=\"content\">
						<div class=\"descricao4\"><b>Partido Comunista do Brasil PCdoB</b></div>
						<p>&nbsp;&nbsp;&nbsp;O Partido Comunista do Brasil foi fundado em 1922 e é o partido mais antigo do país. Viveu 60 anos na clandestinidade. Em 1962, rechaçou o oportunismo de direita, reorganizou-se, adotando a sigla PcdoB. O PCdoB guia-se pela teoria científica de Marx, Engels e Lênin e procura aplicá-la a realidade do Brasil, tendo como princípio básico de organização o centralismo democrático.</p>
						<ul>
							<li>Número eleitoral: 65</li>
							<li>Data de criação: 25/03/1922</li>
							<li>Data do registro definitivo: 23/07/1988</li>
							<li>Quantidade de afiliados: 393 388</li>
							<li>Espectro político: Esquerda a extrema-esquerda</li>
						</ul>
						<p>&nbsp;&nbsp;&nbsp;Políticos conhecidos: Manuela d'Ávila, Carina Vitral,Renildo Calheiros,Jô Moraes.<br><br></p>
					</div>
				</div>
			</div>
			<div id=\"popup10\" class=\"overlay\">
				<div class=\"popup\">
					<a class=\"close\" href=\"#\">Voltar</a>
					<div class=\"content\">
						<div class=\"descricao4\"><b>Partido do Movimento Democrático Brasileiro PMDB</b></div>
						<p>&nbsp;&nbsp;&nbsp;O Partido do Movimento Democrático Brasileiro foi fundado em 1980, reunindo um grande número de representantes do antigo MDB, como José Sarney e Ulysses Guimarães. Defendia a redemocratização do país.</p>
						<ul>
							<li>Número eleitoral: 15</li>
							<li>Data de criação: 04/12/1965</li>
							<li>Data do registro definitivo: 30/06/1981</li>
							<li>Quantidade de afiliados: 2 400 703</li>
							<li>Espectro político: Centro</li>
						</ul>
						<p>&nbsp;&nbsp;&nbsp;Políticos conhecidos: Michel Temer, Renan Calheiros, Eduardo Cunha, José Sarney.<br><br></p>
					</div>
				</div>
			</div>
			<div id=\"popup11\" class=\"overlay\">
				<div class=\"popup\">
					<a class=\"close\" href=\"#\">Voltar</a>
					<div class=\"content\">
						<div class=\"descricao4\"><b>Partido da Social-Democracia Brasileira PSDB</b></div>
						<p>&nbsp;&nbsp;&nbsp;O Partido da Social-Democracia Brasileira surgiu em 1988 em discidência do PMDB e teve como principais representantes Mario Covas, FHC e José Serra. De base social-democrata, defende o desenvolvimento do país com justiça social. É a principal força de oposição do PT.</p>
						<ul>
							<li>Número eleitoral: 45</li>
							<li>Data de criação: 25/06/1988</li>
							<li>Data do registro definitivo: 24/08/1988</li>
							<li>Quantidade de afiliados: 1 450 586</li>
							<li>Espectro político: Centro, centro-esquerda e centro-direita</li>
						</ul>
						<p>&nbsp;&nbsp;&nbsp;Políticos conhecidos: Aécio Neves, Geraldo Alckmin, João Dória, José Cerra, Fernando Henrique Cardoso. <br><br></p>
					</div>
				</div>
			</div>
			<div id=\"popup12\" class=\"overlay\">
				<div class=\"popup\">
					<a class=\"close\" href=\"#\">Voltar</a>
					<div class=\"content\">
						<div class=\"descricao4\"><b>Partido Trabalhista Brasileiro PTB</b></div>
						<p>&nbsp;&nbsp;&nbsp;O Partido Trabalhista Brasileiro surgiu em 1979 tendo como um de seus fundadores a filha de Getúlio Vargas, Ivete Vargas. Defende ideias referentes ao liberalismo.</p>
						<ul>
							<li>Número eleitoral: 14</li>
							<li>Data de criação: 15/05/1945</li>
							<li>Data do registro definitivo: 03/11/1981</li>
							<li>Quantidade de afiliados: 1 193 404</li>
							<li>Espectro político: Centro</li>
						</ul>
						<p>&nbsp;&nbsp;&nbsp;Políticos conhecidos: Roberto Jefferson, Sérgio Moraes, Nelson Marquezelli, Ronaldo Nogueira.<br><br></p>
					</div>
				</div>
			</div>
			<div id=\"popup13\" class=\"overlay\">
				<div class=\"popup\">
					<a class=\"close\" href=\"#\">Voltar</a>
					<div class=\"content\">
						<div class=\"descricao4\"><b>Partido Progressista PP</b></div>
						<p>&nbsp;&nbsp;&nbsp;O Partido Progressista, antigo PPB, surgiu em 1995 da fusão do PPR, PP e PRP e defende príncipios totalmente baseados no capitalismo e na economia de mercado. Tem como principal representante Paulo Maluf.</p>
						<ul>
							<li>Número eleitoral: 11</li>
							<li>Data de criação: 08/08/1995</li>
							<li>Data do registro definitivo: 16/11/1995</li>
							<li>Quantidade de afiliados: 1 437 953</li>
							<li>Espectro político: Centro-direita, direita</li>
						</ul>
						<p>&nbsp;&nbsp;&nbsp;Políticos conhecidos: Afonso Hamm, Luiz Fernando Faria, Dilceu Sperafico, João Pizzolatti.<br><br></p>
					</div>
				</div>
			</div>
			<div id=\"popup14\" class=\"overlay\">
				<div class=\"popup\">
					<a class=\"close\" href=\"#\">Voltar</a>
					<div class=\"content\">
						<div class=\"descricao4\"><b>Democratas DEM</b></div>
						<p>&nbsp;&nbsp;&nbsp;O Democratas, antigo PFL (Partido da Frente Liberal) que foi fundado em 1984, faz oposição ao governo do PT e defende uma economia livre de barreiras e a redução das taxas e impostos.</p>
						<ul>
							<li>Número eleitoral: 25</li>
							<li>Data de criação: 24/01/1985</li>
							<li>Data do registro definitivo: 11/09/1986</li>
							<li>Quantidade de afiliados: 1 094 797</li>
							<li>Espectro político: Centro a direita</li>
						</ul>
						<p>&nbsp;&nbsp;&nbsp;Políticos conhecidos: Onyx Lorenzoni, Maria do Carmo Alves, José Agripino Maia, Rodrigo Maia, José Mendonça Filho.<br><br></p>
					</div>
				</div>
			</div>
			<div id=\"popup15\" class=\"overlay\">
				<div class=\"popup\">
					<a class=\"close\" href=\"#\">Voltar</a>
					<div class=\"content\">
						<div class=\"descricao4\"><b>Partido da República PR</b></div>
						<p>&nbsp;&nbsp;&nbsp;O Partido da República surgiu em 2006 por meio da fusão do PL e do PRONA. Defende o liberalismo econômico e a redução das taxas de juros e impostos.</p>
						<ul>
							<li>Número eleitoral: 22</li>
							<li>Data de criação: 26/10/2006</li>
							<li>Data do registro definitivo: 19/12/2006</li>
							<li>Quantidade de afiliados: 798 474</li>
							<li>Espectro político: Centro-Direita</li>
						</ul>
						<p>&nbsp;&nbsp;&nbsp;Políticos conhecidos: Magno Malta, Alfredo Nascimento, César Borges.<br><br></p>
					</div>
				</div>
			</div>
			<div id=\"popup16\" class=\"overlay\">
				<div class=\"popup\">
					<a class=\"close\" href=\"#\">Voltar</a>
					<div class=\"content\">
						<div class=\"descricao4\"><b>Partido Social Cristão <br>PSC</b></div>
						<p>&nbsp;&nbsp;&nbsp;O Partido Social Cristão obteve seu registro definitivo em 1990 e é  sustentado na Doutrina Social Cristã, inspirado nos valores e propósitos do Cristianismo, em busca de uma sociedade justa, solidária e fraterna.</p>
						<ul>
							<li>Número eleitoral: 20</li>
							<li>Data de criação: 15/05/1985</li>
							<li>Data do registro definitivo: 29/03/1990</li>
							<li>Quantidade de afiliados: 422 076</li>
							<li>Espectro político: Centro-direita à direita</li>
						</ul>
						<p>&nbsp;&nbsp;&nbsp;Políticos conhecidos: Jair Bolsonaro, Eduardo Bolsonaro, Marco Feliciano, Pastor Everaldo.<br><br></p>
					</div>
				</div>
			</div>
			<div id=\"popup17\" class=\"overlay\">
				<div class=\"popup\">
					<a class=\"close\" href=\"#\">Voltar</a>
					<div class=\"content\">
						<br><div class=\"descricao5\"><b>Ajuda:</b></div>
						<p>Para saber mais sobre esse partido clique em \"Conheça mais +\"</p>
						<p>Para sequir em diante clique em \"Meu partido!\"</p><br>
					</div>
				</div>
			</div>";
					}
				}
				$result = mysql_query("SELECT * FROM `bd` WHERE Licao1 = 'Centro-esquerda' and id = '$id'");

	        if (mysql_num_rows($result) > 0) {
			while($row = mysql_fetch_assoc($result)) {
					echo "
					<div class=\"row\">
						<div class=\"col-md-3\">
							<div class=\"caixa4\">
								<div class=\"rede1\">
								<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
							</div>
							<div class=\"rede2\">
								</a>
								<a title=\"Sinalizado como preferido\" class=\"fa fa-bookmark fa-2x\" aria-hidden=\"true\"></a>
								</a>
							</div>
								<img class=\"partidos\" src=\"../imagens/partido2.png\">
								<a class=\"link\" href=\"#popup5\">
									<button class=\"botao6\" type=\"button\">
										<b>Conheça +</b>
								</button>
								</a>
								<form name=\"Partido\" action=\"eleicoes2.php\" method=\"POST\">
								<input type=\"hidden\" name=\"id\" value=".$id.">
								<button class=\"botao7\" type=\"submit\" name=\"Partido\" value=\"2\">
									<div><b>Meu partido!</b></div>
								</button>
							</form>
							</div>
						</div>
						<div class=\"col-md-3\">
							<div class=\"caixa4\">
								<div class=\"rede1\">
								<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
							</div>
							<div class=\"rede2\">
								</a>
								<a title=\"Sinalizado como preferido\" class=\"fa fa-bookmark fa-2x\" aria-hidden=\"true\"></a>
								</a>
							</div>
								<img class=\"partidos\" src=\"../imagens/partido5.png\">
								<a class=\"link\" href=\"#popup6\">
									<button class=\"botao6\" type=\"button\">
										<b>Conheça +</b>
								</button>
								</a>
								<form name=\"Partido\" action=\"eleicoes2.php\" method='POST'>
								<input type=\"hidden\" name=\"id\" value=".$id.">
								<button class='botao7' type='submit' name='Partido' value=\"4\">
									<div><b>Meu partido!</b></div>
								</button>
							</form>
							</div>
						</div>
						<div class=\"col-md-3\">
							<div class=\"caixa4\">
								<div class=\"rede1\">
								<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
							</div>
							<div class=\"rede2\">
								</a>
								<a title=\"Sinalizado como preferido\" class=\"fa fa-bookmark fa-2x\" aria-hidden=\"true\"></a>
								</a>
							</div>
								<img class=\"partidos\" src=\"../imagens/partido9.png\">
								<a class=\"link\" href=\"#popup7\">
									<button class=\"botao6\" type=\"button\">
										<b>Conheça +</b>
								</button>
								</a>
								<form name=\"Partido\" action=\"eleicoes2.php\" method=\"POST\">
								<input type=\"hidden\" name=\"id\" value=".$id.">
								<button class=\"botao7\" type=\"submit\" name=\"Partido\" value=\"5\">
									<div><b>Meu partido!</b></div>
								</button>
							</form>
							</div>
						</div>
						<div class=\"col-md-3\">
							<div class=\"caixa4\">
								<div class=\"rede1\">
								<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
							</div>
							<div class=\"rede2\">
								</a>
								<a title=\"Sinalizado como preferido\" class=\"fa fa-bookmark fa-2x\" aria-hidden=\"true\"></a>
								</a>
							</div>
								<img class=\"partidos\" src=\"../imagens/partido10.png\">
								<a class=\"link\" href=\"#popup8\">
									<button class=\"botao6\" type=\"button\">
										<b>Conheça +</b>
								</button>
								</a>
								<form name=\"Partido\" action=\"eleicoes2.php\" method=\"POST\">
								<input type=\"hidden\" name=\"id\" value=".$id.">
								<button class=\"botao7\" type=\"submit\" name=\"Partido\" value=\"6\">
									<div><b>Meu partido!</b></div>
								</button>
							</form>
							</div>
						</div>
					</div>
					<div class=\"row\">
						<div class=\"col-md-3\">
							<div class=\"caixa4\">
								<div class=\"rede1\">
								<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
							</div>
							<div class=\"rede2\">
								</a>
								<a title=\"Sinalizado como preferido\" class=\"fa fa-bookmark fa-2x\" aria-hidden=\"true\"></a>
								</a>
							</div>
								<img class=\"partidos\" src=\"../imagens/partido12.png\">
								<a class=\"link\" href=\"#popup9\">
									<button class=\"botao6\" type=\"button\">
										<b>Conheça +</b>
								</button>
								</a>
								<form name=\"Partido\" action=\"eleicoes2.php\" method=\"POST\">
								<input type=\"hidden\" name=\"id\" value=".$id.">
								<button class=\"botao7\" type=\"submit\" name=\"Partido\" value=\"7\">
									<div><b>Meu partido!</b></div>
								</button>
							</form>
							</div>
						</div>
						<div class=\"col-md-3\">
							<div class=\"caixa5\">
							<div class=\"rede1\">
								<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
							</div>
							<div class=\"rede2\">
								</a>
								<a title=\"Sinalizado como preferido\" class=\"fa fa-bookmark fa-2x\" aria-hidden=\"true\"></a>
								</a>
							</div>
								<img class=\"partidos\" src=\"../imagens/partido1.png\">
								<a class=\"link\" href=\"#popup10\">
									<button class=\"botao6\" type=\"button\">
										<b>Conheça +</b>
								</button>
								</a>
								<form name=\"Partido\" action=\"eleicoes2.php\" method=\"POST\">
								<input type=\"hidden\" name=\"id\" value=".$id.">
								<button class=\"botao7\" type=\"submit\" name=\"Partido\" value=\"11\">
									<div><b>Meu partido!</b></div>
								</button>
							</form>
							</div>
						</div>
						<div class=\"col-md-3\">
							<div class=\"caixa5\">
								<div class=\"rede1\">
								<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
							</div>
							<div class=\"rede2\">
								</a>
								<a title=\"Sinalizado como preferido\" class=\"fa fa-bookmark fa-2x\" aria-hidden=\"true\"></a>
								</a>
							</div>
								<img class=\"partidos\" src=\"../imagens/partido3.png\">
								<a class=\"link\" href=\"#popup11\">
									<button class=\"botao6\" type=\"button\">
										<b>Conheça +</b>
								</button>
								</a>
								<form name=\"Partido\" action=\"eleicoes2.php\" method=\"POST\">
								<input type=\"hidden\" name=\"id\" value=".$id.">
								<button class=\"botao7\" type=\"submit\" name=\"Partido\" value=\"1\">
									<div><b>Meu partido!</b></div>
								</button>
							</form>
							</div>
						</div>
						<div class=\"col-md-3\">
							<div class=\"caixa5\">
								<div class=\"rede1\">
								<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
							</div>
							<div class=\"rede2\">
								</a>
								<a title=\"Sinalizado como preferido\" class=\"fa fa-bookmark fa-2x\" aria-hidden=\"true\"></a>
								</a>
							</div>
								<img class=\"partidos\" src=\"../imagens/partido6.png\">
								<a class=\"link\" href=\"#popup12\">
									<button class=\"botao6\" type=\"button\">
										<b>Conheça +</b>
								</button>
								</a>
								<form name=\"Partido\" action=\"eleicoes2.php\" method=\"POST\">
								<input type=\"hidden\" name=\"id\" value=".$id.">
								<button class=\"botao7\" type=\"submit\" name=\"Partido\" value=\"9\">
									<div><b>Meu partido!</b></div>
								</button>
							</form>
							</div>
						</div>
					</div>
					<div class=\"row\">
						<div class=\"col-md-3\">
							<div class=\"caixa6\">
								<div class=\"rede1\">
								<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
							</div>
								<img class=\"partidos\" src=\"../imagens/partido4.png\">
								<a class=\"link\" href=\"#popup13\">
									<button class=\"botao6\" type=\"button\">
										<b>Conheça +</b>
								</button>
								</a>
								<form name=\"Partido\" action=\"eleicoes2.php\" method=\"POST\">
								<input type=\"hidden\" name=\"id\" value=".$id.">
								<button class=\"botao7\" type=\"submit\" name=\"Partido\" value=\"8\">
									<div><b>Meu partido!</b></div>
								</button>
							</form>
							</div>
						</div>
						<div class=\"col-md-3\">
							<div class=\"caixa6\">
							<div class=\"rede1\">
								<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
							</div>
								<img class=\"partidos\" src=\"../imagens/partido7.png\">
								<a class=\"link\" href=\"#popup14\">
									<button class=\"botao6\" type=\"button\">
										<b>Conheça +</b>
								</button>
								</a>
								<form name=\"Partido\" action=\"eleicoes2.php\" method=\"POST\">
								<input type=\"hidden\" name=\"id\" value=".$id.">
								<button class=\"botao7\" type=\"submit\" name=\"Partido\" value=\"12\">
									<div><b>Meu partido!</b></div>
								</button>
							</form>
							</div>
						</div>
						<div class=\"col-md-3\">
							<div class=\"caixa6\">
							<div class=\"rede1\">
								<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
							</div>
								<img class=\"partidos\" src=\"../imagens/partido8.png\">
								<a class=\"link\" href=\"#popup15\">
									<button class=\"botao6\" type=\"button\">
										<b>Conheça +</b>
								</button>
								</a>
								<form name=\"Partido\" action=\"eleicoes2.php\" method=\"POST\">
								<input type=\"hidden\" name=\"id\" value=".$id.">
								<button class=\"botao7\" type=\"submit\" name=\"Partido\" value=\"10\">
									<div><b>Meu partido!</b></div>
								</button>
							</form>
							</div>
						</div>
						<div class=\"col-md-3\">
							<div class=\"caixa6\">
								<div class=\"rede1\">
								<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
							</div>
								<img class=\"partidos\" src=\"../imagens/partido11.png\">
								<a class=\"link\" href=\"#popup16\">
									<button class=\"botao6\" type=\"button\">
										<b>Conheça +</b>
								</button>
								</a>
								<form name=\"Partido\" action=\"eleicoes2.php\" method=\"POST\">
								<input type=\"hidden\" name=\"id\" value=".$id.">
								<button class=\"botao7\" type=\"submit\" name=\"Partido\" value=\"3\">
									<div><b>Meu partido!</b></div>
								</button>
							</form>
							</div>
						</div>
					</div>
				</div>
				<div id=\"popup5\" class=\"overlay\">
				<div class=\"popup\">
					<a class=\"close\" href=\"#\">Voltar</a>
					<div class=\"content\">
						<div class=\"descricao4\"><b>Partido dos Trabalhadores PT</b></div>
						<p>&nbsp;&nbsp;&nbsp;O Partido dos Trabalhadores surgiu no início da década de 80 junto com as greves e os movimentos sindicais como uma grande força de oposição, representando os trabalhadores e as classes populares. É de base socialista e tem como principal representante o ex-presidente Lula e defende a reforma agrária e a justiça social.</p>
						<ul>
							<li>Número eleitoral: 13</li>
							<li>Data de criação: 10/02/1980</li>
							<li>Data do registro definitivo: 11/02/1982</li>
							<li>Quantidade de afiliados: 1 582 646</li>
							<li>Espectro político: Esquerda, a centro-esquerda</li>
						</ul>
						<p>&nbsp;&nbsp;&nbsp;Políticos conhecidos: Luiz Inácio Lula da Silva, Dilma Rousseff, Gleisi Hoffmann, José Dirceu, Fernando Haddad, José Genoino, Eduardo Suplicy, Maria do Rosário, Fernando Pimentel.<br><br></p>
					</div>
				</div>
			</div>
			<div id=\"popup6\" class=\"overlay\">
				<div class=\"popup\">
					<a class=\"close\" href=\"#\">Voltar</a>
					<div class=\"content\">
						<div class=\"descricao4\"><b>Partido Democrático Trabalhista PDT</b></div>
						<p>&nbsp;&nbsp;&nbsp;O Partido Democrático Trabalhista foi criado em 1981 resgatando as principais ideias defendidas por Getúlia Vargas, seu principal representante foi Leonel Brizola. De base nacionalista e social-democrata, O PDT é contra as privatizações, defendendo o investimento na indústria nacional.</p>
						<ul>
							<li>Número eleitoral: 12</li>
							<li>Data de criação: 17/06/1979</li>
							<li>Data do registro definitivo: 10/11/1981</li>
							<li>Quantidade de afiliados: 1 253 890</li>
							<li>Espectro político: Centro-esquerda à esquerda</li>
						</ul>
						<p>&nbsp;&nbsp;&nbsp;Políticos conhecidos: Ciro Gomes, Cidinha Campos, Juarez Soares.<br><br></p>
					</div>
				</div>
			</div>
			<div id=\"popup7\" class=\"overlay\">
				<div class=\"popup\">
					<a class=\"close\" href=\"#\">Voltar</a>
					<div class=\"content\">
						<div class=\"descricao4\"><b>Partido Socialista Brasileiro PSB</b></div>
						<p>&nbsp;&nbsp;&nbsp;O Partido Socialista Brasileiro foi criado em 1947, tendo como principal representante Miguel Arraes e defende ideias do socialismo com transformações na sociedade que representem a melhoria da qualidade de vida dos cidadãos brasileiros.</p>
						<ul>
							<li>Número eleitoral: 40</li>
							<li>Data de criação: 02/04/1947</li>
							<li>Data do registro definitivo: 01/07/1988</li>
							<li>Quantidade de afiliados: 649 732</li>
							<li>Espectro político: Centro-esquerda a esquerda</li>
						</ul>
						<p>&nbsp;&nbsp;&nbsp;Políticos conhecidos: Adilton Sachetti, Átila Lira, Bebeto Galvão, César Messias. <br><br></p>
					</div>
				</div>
			</div>
			<div id=\"popup8\" class=\"overlay\">
				<div class=\"popup\">
					<a class=\"close\" href=\"#\">Voltar</a>
					<div class=\"content\">
						<div class=\"descricao4\"><b>Partido Popular Socialista PPS</b></div>
						<p>&nbsp;&nbsp;&nbsp;O  Partido Popular Socialista foi fundado em 1992 em dissidência do PCB. Seus principais aspectos programáticos são a \"radicalidade democrática\", uma nova definição do socialismo, pautado no humanismo e no internacionalismo, o que o classifica para alguns como partido defensor da social-democracia.</p>
						<ul>
							<li>Número eleitoral: 23</li>
							<li>Data de criação: 26/01/1992</li>
							<li>Data do registro definitivo: 19/03/1992</li>
							<li>Quantidade de afiliados: 481 457</li>
							<li>Espectro político: Centro a esquerda</li>
						</ul>
						<p>&nbsp;&nbsp;&nbsp;Políticos conhecidos: Roberto Freire, Rubens Bueno, Arnaldo Jordy, Cristovam Buarque.<br><br></p>
					</div>
				</div>
			</div>
			<div id=\"popup9\" class=\"overlay\">
				<div class=\"popup\">
					<a class=\"close\" href=\"#\">Voltar</a>
					<div class=\"content\">
						<div class=\"descricao4\"><b>Partido Comunista do Brasil PCdoB</b></div>
						<p>&nbsp;&nbsp;&nbsp;O Partido Comunista do Brasil foi fundado em 1922 e é o partido mais antigo do país. Viveu 60 anos na clandestinidade. Em 1962, rechaçou o oportunismo de direita, reorganizou-se, adotando a sigla PcdoB. O PCdoB guia-se pela teoria científica de Marx, Engels e Lênin e procura aplicá-la a realidade do Brasil, tendo como princípio básico de organização o centralismo democrático.</p>
						<ul>
							<li>Número eleitoral: 65</li>
							<li>Data de criação: 25/03/1922</li>
							<li>Data do registro definitivo: 23/07/1988</li>
							<li>Quantidade de afiliados: 393 388</li>
							<li>Espectro político: Esquerda a extrema-esquerda</li>
						</ul>
						<p>&nbsp;&nbsp;&nbsp;Políticos conhecidos: Manuela d'Ávila, Carina Vitral,Renildo Calheiros,Jô Moraes.<br><br></p>
					</div>
				</div>
			</div>
			<div id=\"popup10\" class=\"overlay\">
				<div class=\"popup\">
					<a class=\"close\" href=\"#\">Voltar</a>
					<div class=\"content\">
						<div class=\"descricao4\"><b>Partido do Movimento Democrático Brasileiro PMDB</b></div>
						<p>&nbsp;&nbsp;&nbsp;O Partido do Movimento Democrático Brasileiro foi fundado em 1980, reunindo um grande número de representantes do antigo MDB, como José Sarney e Ulysses Guimarães. Defendia a redemocratização do país.</p>
						<ul>
							<li>Número eleitoral: 15</li>
							<li>Data de criação: 04/12/1965</li>
							<li>Data do registro definitivo: 30/06/1981</li>
							<li>Quantidade de afiliados: 2 400 703</li>
							<li>Espectro político: Centro</li>
						</ul>
						<p>&nbsp;&nbsp;&nbsp;Políticos conhecidos: Michel Temer, Renan Calheiros, Eduardo Cunha, José Sarney.<br><br></p>
					</div>
				</div>
			</div>
			<div id=\"popup11\" class=\"overlay\">
				<div class=\"popup\">
					<a class=\"close\" href=\"#\">Voltar</a>
					<div class=\"content\">
						<div class=\"descricao4\"><b>Partido da Social-Democracia Brasileira PSDB</b></div>
						<p>&nbsp;&nbsp;&nbsp;O Partido da Social-Democracia Brasileira surgiu em 1988 em discidência do PMDB e teve como principais representantes Mario Covas, FHC e José Serra. De base social-democrata, defende o desenvolvimento do país com justiça social. É a principal força de oposição do PT.</p>
						<ul>
							<li>Número eleitoral: 45</li>
							<li>Data de criação: 25/06/1988</li>
							<li>Data do registro definitivo: 24/08/1988</li>
							<li>Quantidade de afiliados: 1 450 586</li>
							<li>Espectro político: Centro, centro-esquerda e centro-direita</li>
						</ul>
						<p>&nbsp;&nbsp;&nbsp;Políticos conhecidos: Aécio Neves, Geraldo Alckmin, João Dória, José Cerra, Fernando Henrique Cardoso. <br><br></p>
					</div>
				</div>
			</div>
			<div id=\"popup12\" class=\"overlay\">
				<div class=\"popup\">
					<a class=\"close\" href=\"#\">Voltar</a>
					<div class=\"content\">
						<div class=\"descricao4\"><b>Partido Trabalhista Brasileiro PTB</b></div>
						<p>&nbsp;&nbsp;&nbsp;O Partido Trabalhista Brasileiro surgiu em 1979 tendo como um de seus fundadores a filha de Getúlio Vargas, Ivete Vargas. Defende ideias referentes ao liberalismo.</p>
						<ul>
							<li>Número eleitoral: 14</li>
							<li>Data de criação: 15/05/1945</li>
							<li>Data do registro definitivo: 03/11/1981</li>
							<li>Quantidade de afiliados: 1 193 404</li>
							<li>Espectro político: Centro</li>
						</ul>
						<p>&nbsp;&nbsp;&nbsp;Políticos conhecidos: Roberto Jefferson, Sérgio Moraes, Nelson Marquezelli, Ronaldo Nogueira.<br><br></p>
					</div>
				</div>
			</div>
			<div id=\"popup13\" class=\"overlay\">
				<div class=\"popup\">
					<a class=\"close\" href=\"#\">Voltar</a>
					<div class=\"content\">
						<div class=\"descricao4\"><b>Partido Progressista PP</b></div>
						<p>&nbsp;&nbsp;&nbsp;O Partido Progressista, antigo PPB, surgiu em 1995 da fusão do PPR, PP e PRP e defende príncipios totalmente baseados no capitalismo e na economia de mercado. Tem como principal representante Paulo Maluf.</p>
						<ul>
							<li>Número eleitoral: 11</li>
							<li>Data de criação: 08/08/1995</li>
							<li>Data do registro definitivo: 16/11/1995</li>
							<li>Quantidade de afiliados: 1 437 953</li>
							<li>Espectro político: Centro-direita, direita</li>
						</ul>
						<p>&nbsp;&nbsp;&nbsp;Políticos conhecidos: Afonso Hamm, Luiz Fernando Faria, Dilceu Sperafico, João Pizzolatti.<br><br></p>
					</div>
				</div>
			</div>
			<div id=\"popup14\" class=\"overlay\">
				<div class=\"popup\">
					<a class=\"close\" href=\"#\">Voltar</a>
					<div class=\"content\">
						<div class=\"descricao4\"><b>Democratas DEM</b></div>
						<p>&nbsp;&nbsp;&nbsp;O Democratas, antigo PFL (Partido da Frente Liberal) que foi fundado em 1984, faz oposição ao governo do PT e defende uma economia livre de barreiras e a redução das taxas e impostos.</p>
						<ul>
							<li>Número eleitoral: 25</li>
							<li>Data de criação: 24/01/1985</li>
							<li>Data do registro definitivo: 11/09/1986</li>
							<li>Quantidade de afiliados: 1 094 797</li>
							<li>Espectro político: Centro a direita</li>
						</ul>
						<p>&nbsp;&nbsp;&nbsp;Políticos conhecidos: Onyx Lorenzoni, Maria do Carmo Alves, José Agripino Maia, Rodrigo Maia, José Mendonça Filho.<br><br></p>
					</div>
				</div>
			</div>
			<div id=\"popup15\" class=\"overlay\">
				<div class=\"popup\">
					<a class=\"close\" href=\"#\">Voltar</a>
					<div class=\"content\">
						<div class=\"descricao4\"><b>Partido da República PR</b></div>
						<p>&nbsp;&nbsp;&nbsp;O Partido da República surgiu em 2006 por meio da fusão do PL e do PRONA. Defende o liberalismo econômico e a redução das taxas de juros e impostos.</p>
						<ul>
							<li>Número eleitoral: 22</li>
							<li>Data de criação: 26/10/2006</li>
							<li>Data do registro definitivo: 19/12/2006</li>
							<li>Quantidade de afiliados: 798 474</li>
							<li>Espectro político: Centro-Direita</li>
						</ul>
						<p>&nbsp;&nbsp;&nbsp;Políticos conhecidos: Magno Malta, Alfredo Nascimento, César Borges.<br><br></p>
					</div>
				</div>
			</div>
			<div id=\"popup16\" class=\"overlay\">
				<div class=\"popup\">
					<a class=\"close\" href=\"#\">Voltar</a>
					<div class=\"content\">
						<div class=\"descricao4\"><b>Partido Social Cristão <br>PSC</b></div>
						<p>&nbsp;&nbsp;&nbsp;O Partido Social Cristão obteve seu registro definitivo em 1990 e é  sustentado na Doutrina Social Cristã, inspirado nos valores e propósitos do Cristianismo, em busca de uma sociedade justa, solidária e fraterna.</p>
						<ul>
							<li>Número eleitoral: 20</li>
							<li>Data de criação: 15/05/1985</li>
							<li>Data do registro definitivo: 29/03/1990</li>
							<li>Quantidade de afiliados: 422 076</li>
							<li>Espectro político: Centro-direita à direita</li>
						</ul>
						<p>&nbsp;&nbsp;&nbsp;Políticos conhecidos: Jair Bolsonaro, Eduardo Bolsonaro, Marco Feliciano, Pastor Everaldo.<br><br></p>
					</div>
				</div>
			</div>
			<div id=\"popup17\" class=\"overlay\">
				<div class=\"popup\">
					<a class=\"close\" href=\"#\">Voltar</a>
					<div class=\"content\">
						<br><div class=\"descricao5\"><b>Ajuda:</b></div>
						<p>Para saber mais sobre esse partido clique em \"Conheça mais +\"</p>
						<p>Para sequir em diante clique em \"Meu partido!\"</p><br>
					</div>
				</div>
			</div>";
					}
				}
				$result = mysql_query("SELECT * FROM `bd` WHERE Licao1 = 'Centro' and id = '$id'");

	        if (mysql_num_rows($result) > 0) {
			while($row = mysql_fetch_assoc($result)) {
					echo "
					<div class=\"row\">
						<div class=\"col-md-3\">
							<div class=\"caixa4\">
							<div class=\"rede1\">
								<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
							</div>
							<div class=\"rede2\">
								</a>
								<a title=\"Sinalizado como preferido\" class=\"fa fa-bookmark fa-2x\" aria-hidden=\"true\"></a>
								</a>
							</div>
								<img class=\"partidos\" src=\"../imagens/partido1.png\">
								<a class=\"link\" href=\"#popup10\">
									<button class=\"botao6\" type=\"button\">
										<b>Conheça +</b>
								</button>
								</a>
								<form name=\"Partido\" action=\"eleicoes2.php\" method=\"POST\">
								<input type=\"hidden\" name=\"id\" value=".$id.">
								<button class=\"botao7\" type=\"submit\" name=\"Partido\" value=\"11\">
									<div><b>Meu partido!</b></div>
								</button>
							</form>
							</div>
						</div>
						<div class=\"col-md-3\">
							<div class=\"caixa4\">
								<div class=\"rede1\">
								<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
							</div>
							<div class=\"rede2\">
								</a>
								<a title=\"Sinalizado como preferido\" class=\"fa fa-bookmark fa-2x\" aria-hidden=\"true\"></a>
								</a>
							</div>
								<img class=\"partidos\" src=\"../imagens/partido3.png\">
								<a class=\"link\" href=\"#popup11\">
									<button class=\"botao6\" type=\"button\">
										<b>Conheça +</b>
								</button>
								</a>
								<form name=\"Partido\" action=\"eleicoes2.php\" method=\"POST\">
								<input type=\"hidden\" name=\"id\" value=".$id.">
								<button class=\"botao7\" type=\"submit\" name=\"Partido\" value=\"1\">
									<div><b>Meu partido!</b></div>
								</button>
							</form>
							</div>
						</div>
						<div class=\"col-md-3\">
							<div class=\"caixa4\">
								<div class=\"rede1\">
								<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
							</div>
							<div class=\"rede2\">
								</a>
								<a title=\"Sinalizado como preferido\" class=\"fa fa-bookmark fa-2x\" aria-hidden=\"true\"></a>
								</a>
							</div>
								<img class=\"partidos\" src=\"../imagens/partido6.png\">
								<a class=\"link\" href=\"#popup12\">
									<button class=\"botao6\" type=\"button\">
										<b>Conheça +</b>
								</button>
								</a>
								<form name=\"Partido\" action=\"eleicoes2.php\" method=\"POST\">
								<input type=\"hidden\" name=\"id\" value=".$id.">
								<button class=\"botao7\" type=\"submit\" name=\"Partido\" value=\"9\">
									<div><b>Meu partido!</b></div>
								</button>
							</form>
							</div>
						</div>
						<div class=\"col-md-3\">
							<div class=\"caixa5\">
								<div class=\"rede1\">
								<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
							</div>
								<img class=\"partidos\" src=\"../imagens/partido2.png\">
								<a class=\"link\" href=\"#popup5\">
									<button class=\"botao6\" type=\"button\">
										<b>Conheça +</b>
								</button>
								</a>
								<form name=\"Partido\" action=\"eleicoes2.php\" method=\"POST\">
								<input type=\"hidden\" name=\"id\" value=".$id.">
								<button class=\"botao7\" type=\"submit\" name=\"Partido\" value=\"2\">
									<div><b>Meu partido!</b></div>
								</button>
							</form>
							</div>
						</div>
					</div>
					<div class=\"row\">
						<div class=\"col-md-3\">
							<div class=\"caixa5\">
								<div class=\"rede1\">
								<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
							</div>
								<img class=\"partidos\" src=\"../imagens/partido5.png\">
								<a class=\"link\" href=\"#popup6\">
									<button class=\"botao6\" type=\"button\">
										<b>Conheça +</b>
								</button>
								</a>
								<form name=\"Partido\" action=\"eleicoes2.php\" method='POST'>
								<input type=\"hidden\" name=\"id\" value=".$id.">
								<button class='botao7' type='submit' name='Partido' value=\"4\">
									<div><b>Meu partido!</b></div>
								</button>
							</form>
							</div>
						</div>
						<div class=\"col-md-3\">
							<div class=\"caixa5\">
								<div class=\"rede1\">
								<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
							</div>
								<img class=\"partidos\" src=\"../imagens/partido9.png\">
								<a class=\"link\" href=\"#popup7\">
									<button class=\"botao6\" type=\"button\">
										<b>Conheça +</b>
								</button>
								</a>
								<form name=\"Partido\" action=\"eleicoes2.php\" method=\"POST\">
								<input type=\"hidden\" name=\"id\" value=".$id.">
								<button class=\"botao7\" type=\"submit\" name=\"Partido\" value=\"5\">
									<div><b>Meu partido!</b></div>
								</button>
							</form>
							</div>
						</div>
						<div class=\"col-md-3\">
							<div class=\"caixa5\">
								<div class=\"rede1\">
								<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
							</div>
								<img class=\"partidos\" src=\"../imagens/partido10.png\">
								<a class=\"link\" href=\"#popup8\">
									<button class=\"botao6\" type=\"button\">
										<b>Conheça +</b>
								</button>
								</a>
								<form name=\"Partido\" action=\"eleicoes2.php\" method=\"POST\">
								<input type=\"hidden\" name=\"id\" value=".$id.">
								<button class=\"botao7\" type=\"submit\" name=\"Partido\" value=\"6\">
									<div><b>Meu partido!</b></div>
								</button>
							</form>
							</div>
						</div>
						<div class=\"col-md-3\">
							<div class=\"caixa5\">
								<div class=\"rede1\">
								<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
							</div>
								<img class=\"partidos\" src=\"../imagens/partido12.png\">
								<a class=\"link\" href=\"#popup9\">
									<button class=\"botao6\" type=\"button\">
										<b>Conheça +</b>
								</button>
								</a>
								<form name=\"Partido\" action=\"eleicoes2.php\" method=\"POST\">
								<input type=\"hidden\" name=\"id\" value=".$id.">
								<button class=\"botao7\" type=\"submit\" name=\"Partido\" value=\"7\">
									<div><b>Meu partido!</b></div>
								</button>
							</form>
							</div>
						</div>
					</div>
					<div class=\"row\">
						<div class=\"col-md-3\">
							<div class=\"caixa5\">
								<div class=\"rede1\">
								<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
							</div>
								<img class=\"partidos\" src=\"../imagens/partido4.png\">
								<a class=\"link\" href=\"#popup13\">
									<button class=\"botao6\" type=\"button\">
										<b>Conheça +</b>
								</button>
								</a>
								<form name=\"Partido\" action=\"eleicoes2.php\" method=\"POST\">
								<input type=\"hidden\" name=\"id\" value=".$id.">
								<button class=\"botao7\" type=\"submit\" name=\"Partido\" value=\"8\">
									<div><b>Meu partido!</b></div>
								</button>
							</form>
							</div>
						</div>
						<div class=\"col-md-3\">
							<div class=\"caixa5\">
							<div class=\"rede1\">
								<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
							</div>
								<img class=\"partidos\" src=\"../imagens/partido7.png\">
								<a class=\"link\" href=\"#popup14\">
									<button class=\"botao6\" type=\"button\">
										<b>Conheça +</b>
								</button>
								</a>
								<form name=\"Partido\" action=\"eleicoes2.php\" method=\"POST\">
								<input type=\"hidden\" name=\"id\" value=".$id.">
								<button class=\"botao7\" type=\"submit\" name=\"Partido\" value=\"12\">
									<div><b>Meu partido!</b></div>
								</button>
							</form>
							</div>
						</div>
						<div class=\"col-md-3\">
							<div class=\"caixa5\">
							<div class=\"rede1\">
								<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
							</div>
								<img class=\"partidos\" src=\"../imagens/partido8.png\">
								<a class=\"link\" href=\"#popup15\">
									<button class=\"botao6\" type=\"button\">
										<b>Conheça +</b>
								</button>
								</a>
								<form name=\"Partido\" action=\"eleicoes2.php\" method=\"POST\">
								<input type=\"hidden\" name=\"id\" value=".$id.">
								<button class=\"botao7\" type=\"submit\" name=\"Partido\" value=\"10\">
									<div><b>Meu partido!</b></div>
								</button>
							</form>
							</div>
						</div>
						<div class=\"col-md-3\">
							<div class=\"caixa5\">
								<div class=\"rede1\">
								<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
							</div>
								<img class=\"partidos\" src=\"../imagens/partido11.png\">
								<a class=\"link\" href=\"#popup16\">
									<button class=\"botao6\" type=\"button\">
										<b>Conheça +</b>
								</button>
								</a>
								<form name=\"Partido\" action=\"eleicoes2.php\" method=\"POST\">
								<input type=\"hidden\" name=\"id\" value=".$id.">
								<button class=\"botao7\" type=\"submit\" name=\"Partido\" value=\"3\">
									<div><b>Meu partido!</b></div>
								</button>
							</form>
							</div>
						</div>
					</div>
				</div>
				<div id=\"popup5\" class=\"overlay\">
				<div class=\"popup\">
					<a class=\"close\" href=\"#\">Voltar</a>
					<div class=\"content\">
						<div class=\"descricao4\"><b>Partido dos Trabalhadores PT</b></div>
						<p>&nbsp;&nbsp;&nbsp;O Partido dos Trabalhadores surgiu no início da década de 80 junto com as greves e os movimentos sindicais como uma grande força de oposição, representando os trabalhadores e as classes populares. É de base socialista e tem como principal representante o ex-presidente Lula e defende a reforma agrária e a justiça social.</p>
						<ul>
							<li>Número eleitoral: 13</li>
							<li>Data de criação: 10/02/1980</li>
							<li>Data do registro definitivo: 11/02/1982</li>
							<li>Quantidade de afiliados: 1 582 646</li>
							<li>Espectro político: Esquerda, a centro-esquerda</li>
						</ul>
						<p>&nbsp;&nbsp;&nbsp;Políticos conhecidos: Luiz Inácio Lula da Silva, Dilma Rousseff, Gleisi Hoffmann, José Dirceu, Fernando Haddad, José Genoino, Eduardo Suplicy, Maria do Rosário, Fernando Pimentel.<br><br></p>
					</div>
				</div>
			</div>
			<div id=\"popup6\" class=\"overlay\">
				<div class=\"popup\">
					<a class=\"close\" href=\"#\">Voltar</a>
					<div class=\"content\">
						<div class=\"descricao4\"><b>Partido Democrático Trabalhista PDT</b></div>
						<p>&nbsp;&nbsp;&nbsp;O Partido Democrático Trabalhista foi criado em 1981 resgatando as principais ideias defendidas por Getúlia Vargas, seu principal representante foi Leonel Brizola. De base nacionalista e social-democrata, O PDT é contra as privatizações, defendendo o investimento na indústria nacional.</p>
						<ul>
							<li>Número eleitoral: 12</li>
							<li>Data de criação: 17/06/1979</li>
							<li>Data do registro definitivo: 10/11/1981</li>
							<li>Quantidade de afiliados: 1 253 890</li>
							<li>Espectro político: Centro-esquerda à esquerda</li>
						</ul>
						<p>&nbsp;&nbsp;&nbsp;Políticos conhecidos: Ciro Gomes, Cidinha Campos, Juarez Soares.<br><br></p>
					</div>
				</div>
			</div>
			<div id=\"popup7\" class=\"overlay\">
				<div class=\"popup\">
					<a class=\"close\" href=\"#\">Voltar</a>
					<div class=\"content\">
						<div class=\"descricao4\"><b>Partido Socialista Brasileiro PSB</b></div>
						<p>&nbsp;&nbsp;&nbsp;O Partido Socialista Brasileiro foi criado em 1947, tendo como principal representante Miguel Arraes e defende ideias do socialismo com transformações na sociedade que representem a melhoria da qualidade de vida dos cidadãos brasileiros.</p>
						<ul>
							<li>Número eleitoral: 40</li>
							<li>Data de criação: 02/04/1947</li>
							<li>Data do registro definitivo: 01/07/1988</li>
							<li>Quantidade de afiliados: 649 732</li>
							<li>Espectro político: Centro-esquerda a esquerda</li>
						</ul>
						<p>&nbsp;&nbsp;&nbsp;Políticos conhecidos: Adilton Sachetti, Átila Lira, Bebeto Galvão, César Messias. <br><br></p>
					</div>
				</div>
			</div>
			<div id=\"popup8\" class=\"overlay\">
				<div class=\"popup\">
					<a class=\"close\" href=\"#\">Voltar</a>
					<div class=\"content\">
						<div class=\"descricao4\"><b>Partido Popular Socialista PPS</b></div>
						<p>&nbsp;&nbsp;&nbsp;O  Partido Popular Socialista foi fundado em 1992 em dissidência do PCB. Seus principais aspectos programáticos são a \"radicalidade democrática\", uma nova definição do socialismo, pautado no humanismo e no internacionalismo, o que o classifica para alguns como partido defensor da social-democracia.</p>
						<ul>
							<li>Número eleitoral: 23</li>
							<li>Data de criação: 26/01/1992</li>
							<li>Data do registro definitivo: 19/03/1992</li>
							<li>Quantidade de afiliados: 481 457</li>
							<li>Espectro político: Centro a esquerda</li>
						</ul>
						<p>&nbsp;&nbsp;&nbsp;Políticos conhecidos: Roberto Freire, Rubens Bueno, Arnaldo Jordy, Cristovam Buarque.<br><br></p>
					</div>
				</div>
			</div>
			<div id=\"popup9\" class=\"overlay\">
				<div class=\"popup\">
					<a class=\"close\" href=\"#\">Voltar</a>
					<div class=\"content\">
						<div class=\"descricao4\"><b>Partido Comunista do Brasil PCdoB</b></div>
						<p>&nbsp;&nbsp;&nbsp;O Partido Comunista do Brasil foi fundado em 1922 e é o partido mais antigo do país. Viveu 60 anos na clandestinidade. Em 1962, rechaçou o oportunismo de direita, reorganizou-se, adotando a sigla PcdoB. O PCdoB guia-se pela teoria científica de Marx, Engels e Lênin e procura aplicá-la a realidade do Brasil, tendo como princípio básico de organização o centralismo democrático.</p>
						<ul>
							<li>Número eleitoral: 65</li>
							<li>Data de criação: 25/03/1922</li>
							<li>Data do registro definitivo: 23/07/1988</li>
							<li>Quantidade de afiliados: 393 388</li>
							<li>Espectro político: Esquerda a extrema-esquerda</li>
						</ul>
						<p>&nbsp;&nbsp;&nbsp;Políticos conhecidos: Manuela d'Ávila, Carina Vitral,Renildo Calheiros,Jô Moraes.<br><br></p>
					</div>
				</div>
			</div>
			<div id=\"popup10\" class=\"overlay\">
				<div class=\"popup\">
					<a class=\"close\" href=\"#\">Voltar</a>
					<div class=\"content\">
						<div class=\"descricao4\"><b>Partido do Movimento Democrático Brasileiro PMDB</b></div>
						<p>&nbsp;&nbsp;&nbsp;O Partido do Movimento Democrático Brasileiro foi fundado em 1980, reunindo um grande número de representantes do antigo MDB, como José Sarney e Ulysses Guimarães. Defendia a redemocratização do país.</p>
						<ul>
							<li>Número eleitoral: 15</li>
							<li>Data de criação: 04/12/1965</li>
							<li>Data do registro definitivo: 30/06/1981</li>
							<li>Quantidade de afiliados: 2 400 703</li>
							<li>Espectro político: Centro</li>
						</ul>
						<p>&nbsp;&nbsp;&nbsp;Políticos conhecidos: Michel Temer, Renan Calheiros, Eduardo Cunha, José Sarney.<br><br></p>
					</div>
				</div>
			</div>
			<div id=\"popup11\" class=\"overlay\">
				<div class=\"popup\">
					<a class=\"close\" href=\"#\">Voltar</a>
					<div class=\"content\">
						<div class=\"descricao4\"><b>Partido da Social-Democracia Brasileira PSDB</b></div>
						<p>&nbsp;&nbsp;&nbsp;O Partido da Social-Democracia Brasileira surgiu em 1988 em discidência do PMDB e teve como principais representantes Mario Covas, FHC e José Serra. De base social-democrata, defende o desenvolvimento do país com justiça social. É a principal força de oposição do PT.</p>
						<ul>
							<li>Número eleitoral: 45</li>
							<li>Data de criação: 25/06/1988</li>
							<li>Data do registro definitivo: 24/08/1988</li>
							<li>Quantidade de afiliados: 1 450 586</li>
							<li>Espectro político: Centro, centro-esquerda e centro-direita</li>
						</ul>
						<p>&nbsp;&nbsp;&nbsp;Políticos conhecidos: Aécio Neves, Geraldo Alckmin, João Dória, José Cerra, Fernando Henrique Cardoso. <br><br></p>
					</div>
				</div>
			</div>
			<div id=\"popup12\" class=\"overlay\">
				<div class=\"popup\">
					<a class=\"close\" href=\"#\">Voltar</a>
					<div class=\"content\">
						<div class=\"descricao4\"><b>Partido Trabalhista Brasileiro PTB</b></div>
						<p>&nbsp;&nbsp;&nbsp;O Partido Trabalhista Brasileiro surgiu em 1979 tendo como um de seus fundadores a filha de Getúlio Vargas, Ivete Vargas. Defende ideias referentes ao liberalismo.</p>
						<ul>
							<li>Número eleitoral: 14</li>
							<li>Data de criação: 15/05/1945</li>
							<li>Data do registro definitivo: 03/11/1981</li>
							<li>Quantidade de afiliados: 1 193 404</li>
							<li>Espectro político: Centro</li>
						</ul>
						<p>&nbsp;&nbsp;&nbsp;Políticos conhecidos: Roberto Jefferson, Sérgio Moraes, Nelson Marquezelli, Ronaldo Nogueira.<br><br></p>
					</div>
				</div>
			</div>
			<div id=\"popup13\" class=\"overlay\">
				<div class=\"popup\">
					<a class=\"close\" href=\"#\">Voltar</a>
					<div class=\"content\">
						<div class=\"descricao4\"><b>Partido Progressista PP</b></div>
						<p>&nbsp;&nbsp;&nbsp;O Partido Progressista, antigo PPB, surgiu em 1995 da fusão do PPR, PP e PRP e defende príncipios totalmente baseados no capitalismo e na economia de mercado. Tem como principal representante Paulo Maluf.</p>
						<ul>
							<li>Número eleitoral: 11</li>
							<li>Data de criação: 08/08/1995</li>
							<li>Data do registro definitivo: 16/11/1995</li>
							<li>Quantidade de afiliados: 1 437 953</li>
							<li>Espectro político: Centro-direita, direita</li>
						</ul>
						<p>&nbsp;&nbsp;&nbsp;Políticos conhecidos: Afonso Hamm, Luiz Fernando Faria, Dilceu Sperafico, João Pizzolatti.<br><br></p>
					</div>
				</div>
			</div>
			<div id=\"popup14\" class=\"overlay\">
				<div class=\"popup\">
					<a class=\"close\" href=\"#\">Voltar</a>
					<div class=\"content\">
						<div class=\"descricao4\"><b>Democratas DEM</b></div>
						<p>&nbsp;&nbsp;&nbsp;O Democratas, antigo PFL (Partido da Frente Liberal) que foi fundado em 1984, faz oposição ao governo do PT e defende uma economia livre de barreiras e a redução das taxas e impostos.</p>
						<ul>
							<li>Número eleitoral: 25</li>
							<li>Data de criação: 24/01/1985</li>
							<li>Data do registro definitivo: 11/09/1986</li>
							<li>Quantidade de afiliados: 1 094 797</li>
							<li>Espectro político: Centro a direita</li>
						</ul>
						<p>&nbsp;&nbsp;&nbsp;Políticos conhecidos: Onyx Lorenzoni, Maria do Carmo Alves, José Agripino Maia, Rodrigo Maia, José Mendonça Filho.<br><br></p>
					</div>
				</div>
			</div>
			<div id=\"popup15\" class=\"overlay\">
				<div class=\"popup\">
					<a class=\"close\" href=\"#\">Voltar</a>
					<div class=\"content\">
						<div class=\"descricao4\"><b>Partido da República PR</b></div>
						<p>&nbsp;&nbsp;&nbsp;O Partido da República surgiu em 2006 por meio da fusão do PL e do PRONA. Defende o liberalismo econômico e a redução das taxas de juros e impostos.</p>
						<ul>
							<li>Número eleitoral: 22</li>
							<li>Data de criação: 26/10/2006</li>
							<li>Data do registro definitivo: 19/12/2006</li>
							<li>Quantidade de afiliados: 798 474</li>
							<li>Espectro político: Centro-Direita</li>
						</ul>
						<p>&nbsp;&nbsp;&nbsp;Políticos conhecidos: Magno Malta, Alfredo Nascimento, César Borges.<br><br></p>
					</div>
				</div>
			</div>
			<div id=\"popup16\" class=\"overlay\">
				<div class=\"popup\">
					<a class=\"close\" href=\"#\">Voltar</a>
					<div class=\"content\">
						<div class=\"descricao4\"><b>Partido Social Cristão <br>PSC</b></div>
						<p>&nbsp;&nbsp;&nbsp;O Partido Social Cristão obteve seu registro definitivo em 1990 e é  sustentado na Doutrina Social Cristã, inspirado nos valores e propósitos do Cristianismo, em busca de uma sociedade justa, solidária e fraterna.</p>
						<ul>
							<li>Número eleitoral: 20</li>
							<li>Data de criação: 15/05/1985</li>
							<li>Data do registro definitivo: 29/03/1990</li>
							<li>Quantidade de afiliados: 422 076</li>
							<li>Espectro político: Centro-direita à direita</li>
						</ul>
						<p>&nbsp;&nbsp;&nbsp;Políticos conhecidos: Jair Bolsonaro, Eduardo Bolsonaro, Marco Feliciano, Pastor Everaldo.<br><br></p>
					</div>
				</div>
			</div>
			<div id=\"popup17\" class=\"overlay\">
				<div class=\"popup\">
					<a class=\"close\" href=\"#\">Voltar</a>
					<div class=\"content\">
						<br><div class=\"descricao5\"><b>Ajuda:</b></div>
						<p>Para saber mais sobre esse partido clique em \"Conheça mais +\"</p>
						<p>Para sequir em diante clique em \"Meu partido!\"</p><br>
					</div>
				</div>
			</div>";
					}
				}
				$result = mysql_query("SELECT * FROM `bd` WHERE Licao1 = 'Centro-direita' and id = '$id'");

	        if (mysql_num_rows($result) > 0) {
			while($row = mysql_fetch_assoc($result)) {
					echo "
					<div class=\"row\">
						<div class=\"col-md-4\">
							<div class=\"caixa4\">
								<div class=\"rede1\">
								<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
							</div>
							<div class=\"rede2\">
								</a>
								<a title=\"Sinalizado como preferido\" class=\"fa fa-bookmark fa-2x\" aria-hidden=\"true\"></a>
								</a>
							</div>
								<img class=\"partidos\" src=\"../imagens/partido7.png\">
								<div class=\"descricao4\"><b>Democratas <br><br>DEM</b></div>
								<a class=\"link\" href=\"#popup14\">
									<button class=\"botao6\" type=\"button\">
										<b>Conheça +</b>
								</button>
								</a>
								<form name=\"Partido\" action=\"eleicoes2.php\" method=\"POST\">
								<input type=\"hidden\" name=\"id\" value=".$id.">
								<button class=\"botao7\" type=\"submit\" name=\"Partido\" value=\"12\">
									<div><b>Meu partido!</b></div>
								</button>
							</form>
							</div>
						</div>
						<div class=\"col-md-4\">
							<div class=\"caixa4\">
								<div class=\"rede1\">
								<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
							</div>
							<div class=\"rede2\">
								</a>
								<a title=\"Sinalizado como preferido\" class=\"fa fa-bookmark fa-2x\" aria-hidden=\"true\"></a>
								</a>
							</div>
								<img class=\"partidos\" src=\"../imagens/partido4.png\">
								<div class=\"descricao4\"><b>Partido Progressista <br><br>PP</b></div>
								<a class=\"link\" href=\"#popup13\">
									<button class=\"botao6\" type=\"button\">
										<b>Conheça +</b>
								</button>
								</a>
								<form name=\"Partido\" action=\"eleicoes2.php\" method=\"POST\">
								<input type=\"hidden\" name=\"id\" value=".$id.">
								<button class=\"botao7\" type=\"submit\" name=\"Partido\" value=\"8\">
									<div><b>Meu partido!</b></div>
								</button>
							</form>
							</div>
						</div>
						<div class=\"col-md-4\">
							<div class=\"caixa4\">
								<div class=\"rede1\">
								<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
							</div>
							<div class=\"rede2\">
								</a>
								<a title=\"Sinalizado como preferido\" class=\"fa fa-bookmark fa-2x\" aria-hidden=\"true\"></a>
								</a>
							</div>
								<img class=\"partidos\" src=\"../imagens/partido8.png\">
								<div class=\"descricao4\"><b>Partido da República <br><br>PR</b></div>
								<a class=\"link\" href=\"#popup15\">
									<button class=\"botao6\" type=\"button\">
										<b>Conheça +</b>
								</button>
								</a>
								<form name=\"Partido\" action=\"eleicoes2.php\" method=\"POST\">
								<input type=\"hidden\" name=\"id\" value=".$id.">
								<button class=\"botao7\" type=\"submit\" name=\"Partido\" value=\"10\">
									<div><b>Meu partido!</b></div>
								</button>
							</form>
							</div>
						</div>
					</div>
					<div class=\"row\">
						<div class=\"col-md-4\">
							<div class=\"caixa4\">
								<div class=\"rede1\">
								<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
							</div>
							<div class=\"rede2\">
								</a>
								<a title=\"Sinalizado como preferido\" class=\"fa fa-bookmark fa-2x\" aria-hidden=\"true\"></a>
								</a>
							</div>
								<img class=\"partidos\" src=\"../imagens/partido11.png\">
								<div class=\"descricao4\"><b>Partido Social Cristão <br><br>PSC</b></div>
								<a class=\"link\" href=\"#popup16\">
									<button class=\"botao6\" type=\"button\">
										<b>Conheça +</b>
								</button>
								</a>
								<form name=\"Partido\" action=\"eleicoes2.php\" method=\"POST\">
								<input type=\"hidden\" name=\"id\" value=".$id.">
								<button class=\"botao7\" type=\"submit\" name=\"Partido\" value=\"3\">
									<div><b>Meu partido!</b></div>
								</button>
							</form>
							</div>
						</div>
						<div class=\"col-md-4\">
							<div class=\"caixa5\">
								<div class=\"rede1\">
								<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
							</div>
							<div class=\"rede2\">
								</a>
								<a title=\"Sinalizado como preferido\" class=\"fa fa-bookmark fa-2x\" aria-hidden=\"true\"></a>
								</a>
							</div>
								<img class=\"partidos\" src=\"../imagens/partido1.png\">
								<div class=\"descricao4\"><b>Partido do Movimento Democrático Brasileiro <br>PMDB</b></div>
								<a class=\"link\" href=\"#popup10\">
									<button class=\"botao6\" type=\"button\">
										<b>Conheça +</b>
								</button>
								</a>
								<form name=\"Partido\" action=\"eleicoes2.php\" method=\"POST\">
								<input type=\"hidden\" name=\"id\" value=".$id.">
								<button class=\"botao7\" type=\"submit\" name=\"Partido\" value=\"11\">
									<div><b>Meu partido!</b></div>
								</button>
							</form>
							</div>
						</div>
						<div class=\"col-md-4\">
							<div class=\"caixa5\">
								<div class=\"rede1\">
								<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
							</div>
							<div class=\"rede2\">
								</a>
								<a title=\"Sinalizado como preferido\" class=\"fa fa-bookmark fa-2x\" aria-hidden=\"true\"></a>
								</a>
							</div>
								<img class=\"partidos\" src=\"../imagens/partido3.png\">
								<div class=\"descricao4\"><b>Partido da Social-Democracia Brasileira <br>PSDB</b></div>
								<a class=\"link\" href=\"#popup11\">
									<button class=\"botao6\" type=\"button\">
										<b>Conheça +</b>
								</button>
								</a>
								<form name=\"Partido\" action=\"eleicoes2.php\" method=\"POST\">
								<input type=\"hidden\" name=\"id\" value=".$id.">
								<button class=\"botao7\" type=\"submit\" name=\"Partido\" value=\"1\">
									<div><b>Meu partido!</b></div>
								</button>
							</form>
							</div>
						</div>
					</div>
					<div class=\"row\">
						<div class=\"col-md-4\">
							<div class=\"caixa5\">
								<div class=\"rede1\">
								<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
							</div>
							<div class=\"rede2\">
								</a>
								<a title=\"Sinalizado como preferido\" class=\"fa fa-bookmark fa-2x\" aria-hidden=\"true\"></a>
								</a>
							</div>
								<img class=\"partidos\" src=\"../imagens/partido6.png\">
								<div class=\"descricao4\"><b>Partido Trabalhista Brasileiro <br>PTB</b></div>
								<a class=\"link\" href=\"#popup12\">
									<button class=\"botao6\" type=\"button\">
										<b>Conheça +</b>
								</button>
								</a>
								<form name=\"Partido\" action=\"eleicoes2.php\" method=\"POST\">
								<input type=\"hidden\" name=\"id\" value=".$id.">
								<button class=\"botao7\" type=\"submit\" name=\"Partido\" value=\"9\">
									<div><b>Meu partido!</b></div>
								</button>
							</form>
							</div>
						</div>
						<div class=\"col-md-4\">
							<div class=\"caixa6\">
								<div class=\"rede1\">
								<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
							</div>
								<img class=\"partidos\" src=\"../imagens/partido2.png\">
								<div class=\"descricao4\"><b>Partido dos Trabalhadores <br><br>PT</b></div>
								<a class=\"link\" href=\"#popup5\">
									<button class=\"botao6\" type=\"button\">
										<b>Conheça +</b>
								</button>
								</a>
								<form name=\"Partido\" action=\"eleicoes2.php\" method=\"POST\">
								<input type=\"hidden\" name=\"id\" value=".$id.">
								<button class=\"botao7\" type=\"submit\" name=\"Partido\" value=\"2\">
									<div><b>Meu partido!</b></div>
								</button>
							</form>
							</div>
						</div>
						<div class=\"col-md-4\">
							<div class=\"caixa6\">
								<div class=\"rede1\">
								<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
							</div>
								<img class=\"partidos\" src=\"../imagens/partido5.png\">
								<div class=\"descricao4\"><b>Partido Democrático Trabalhista <br>PDT</b></div>
								<a class=\"link\" href=\"#popup6\">
									<button class=\"botao6\" type=\"button\">
										<b>Conheça +</b>
								</button>
								</a>
								<form name=\"Partido\" action=\"eleicoes2.php\" method=\"POST\">
								<input type=\"hidden\" name=\"id\" value=".$id.">
								<button class=\"botao7\" type=\"submit\" name=\"Partido\" value=\"4\">
									<div><b>Meu partido!</b></div>
								</button>
							</form>
							</div>
						</div>
					</div>
					<div class=\"row\">
						<div class=\"col-md-4\">
							<div class=\"caixa6\">
								<div class=\"rede1\">
								<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
							</div>
								<img class=\"partidos\" src=\"../imagens/partido9.png\">
								<div class=\"descricao4\"><b>Partido Socialista Brasileiro <br>PSB</b></div>
								<a class=\"link\" href=\"#popup7\">
									<button class=\"botao6\" type=\"button\">
										<b>Conheça +</b>
								</button>
								</a>
								<form name=\"Partido\" action=\"eleicoes2.php\" method=\"POST\">
								<input type=\"hidden\" name=\"id\" value=".$id.">
								<button class=\"botao7\" type=\"submit\" name=\"Partido\" value=\"5\">
									<div><b>Meu partido!</b></div>
								</button>
							</form>
							</div>
						</div>
						<div class=\"col-md-4\">
							<div class=\"caixa6\">
								<div class=\"rede1\">
								<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
							</div>
								<img class=\"partidos\" src=\"../imagens/partido10.png\">
								<div class=\"descricao4\"><b>Partido Popular Socialista <br><br>PPS</b></div>
								<a class=\"link\" href=\"#popup8\">
									<button class=\"botao6\" type=\"button\">
										<b>Conheça +</b>
								</button>
								</a>
								<form name=\"Partido\" action=\"eleicoes2.php\" method=\"POST\">
								<input type=\"hidden\" name=\"id\" value=".$id.">
								<button class=\"botao7\" type=\"submit\" name=\"Partido\" value=\"6\">
									<div><b>Meu partido!</b></div>
								</button>
							</form>
							</div>
						</div>
						<div class=\"col-md-4\">
							<div class=\"caixa6\">
								<div class=\"rede1\">
								<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
							</div>
								<img class=\"partidos\" src=\"../imagens/partido12.png\">
								<div class=\"descricao4\"><b>Partido Comunista do Brasil <br><br>PCdoB</b></div>
								<a class=\"link\" href=\"#popup9\">
									<button class=\"botao6\" type=\"button\">
										<b>Conheça +</b>
								</button>
								</a>
								<form name=\"Partido\" action=\"eleicoes2.php\" method=\"POST\">
								<input type=\"hidden\" name=\"id\" value=".$id.">
								<button class=\"botao7\" type=\"submit\" name=\"Partido\" value=\"7\">
									<div><b>Meu partido!</b></div>
								</button>
							</form>
							</div>
						</div>
					</div>
				</div>
			<div id=\"popup5\" class=\"overlay\">
				<div class=\"popup\">
					<a class=\"close\" href=\"#\">Voltar</a>
					<div class=\"content\">
						<div class=\"descricao4\"><b>Partido dos Trabalhadores PT</b></div>
						<p>&nbsp;&nbsp;&nbsp;O Partido dos Trabalhadores surgiu no início da década de 80 junto com as greves e os movimentos sindicais como uma grande força de oposição, representando os trabalhadores e as classes populares. É de base socialista e tem como principal representante o ex-presidente Lula e defende a reforma agrária e a justiça social.</p>
						<ul>
							<li>Número eleitoral: 13</li>
							<li>Data de criação: 10/02/1980</li>
							<li>Data do registro definitivo: 11/02/1982</li>
							<li>Quantidade de afiliados: 1 582 646</li>
							<li>Espectro político: Esquerda, a centro-esquerda</li>
						</ul>
						<p>&nbsp;&nbsp;&nbsp;Políticos conhecidos: Luiz Inácio Lula da Silva, Dilma Rousseff, Gleisi Hoffmann, José Dirceu, Fernando Haddad, José Genoino, Eduardo Suplicy, Maria do Rosário, Fernando Pimentel.<br><br></p>
					</div>
				</div>
			</div>
			<div id=\"popup6\" class=\"overlay\">
				<div class=\"popup\">
					<a class=\"close\" href=\"#\">Voltar</a>
					<div class=\"content\">
						<div class=\"descricao4\"><b>Partido Democrático Trabalhista PDT</b></div>
						<p>&nbsp;&nbsp;&nbsp;O Partido Democrático Trabalhista foi criado em 1981 resgatando as principais ideias defendidas por Getúlia Vargas, seu principal representante foi Leonel Brizola. De base nacionalista e social-democrata, O PDT é contra as privatizações, defendendo o investimento na indústria nacional.</p>
						<ul>
							<li>Número eleitoral: 12</li>
							<li>Data de criação: 17/06/1979</li>
							<li>Data do registro definitivo: 10/11/1981</li>
							<li>Quantidade de afiliados: 1 253 890</li>
							<li>Espectro político: Centro-esquerda à esquerda</li>
						</ul>
						<p>&nbsp;&nbsp;&nbsp;Políticos conhecidos: Ciro Gomes, Cidinha Campos, Juarez Soares.<br><br></p>
					</div>
				</div>
			</div>
			<div id=\"popup7\" class=\"overlay\">
				<div class=\"popup\">
					<a class=\"close\" href=\"#\">Voltar</a>
					<div class=\"content\">
						<div class=\"descricao4\"><b>Partido Socialista Brasileiro PSB</b></div>
						<p>&nbsp;&nbsp;&nbsp;O Partido Socialista Brasileiro foi criado em 1947, tendo como principal representante Miguel Arraes e defende ideias do socialismo com transformações na sociedade que representem a melhoria da qualidade de vida dos cidadãos brasileiros.</p>
						<ul>
							<li>Número eleitoral: 40</li>
							<li>Data de criação: 02/04/1947</li>
							<li>Data do registro definitivo: 01/07/1988</li>
							<li>Quantidade de afiliados: 649 732</li>
							<li>Espectro político: Centro-esquerda a esquerda</li>
						</ul>
						<p>&nbsp;&nbsp;&nbsp;Políticos conhecidos: Adilton Sachetti, Átila Lira, Bebeto Galvão, César Messias. <br><br></p>
					</div>
				</div>
			</div>
			<div id=\"popup8\" class=\"overlay\">
				<div class=\"popup\">
					<a class=\"close\" href=\"#\">Voltar</a>
					<div class=\"content\">
						<div class=\"descricao4\"><b>Partido Popular Socialista PPS</b></div>
						<p>&nbsp;&nbsp;&nbsp;O  Partido Popular Socialista foi fundado em 1992 em dissidência do PCB. Seus principais aspectos programáticos são a \"radicalidade democrática\", uma nova definição do socialismo, pautado no humanismo e no internacionalismo, o que o classifica para alguns como partido defensor da social-democracia.</p>
						<ul>
							<li>Número eleitoral: 23</li>
							<li>Data de criação: 26/01/1992</li>
							<li>Data do registro definitivo: 19/03/1992</li>
							<li>Quantidade de afiliados: 481 457</li>
							<li>Espectro político: Centro a esquerda</li>
						</ul>
						<p>&nbsp;&nbsp;&nbsp;Políticos conhecidos: Roberto Freire, Rubens Bueno, Arnaldo Jordy, Cristovam Buarque.<br><br></p>
					</div>
				</div>
			</div>
			<div id=\"popup9\" class=\"overlay\">
				<div class=\"popup\">
					<a class=\"close\" href=\"#\">Voltar</a>
					<div class=\"content\">
						<div class=\"descricao4\"><b>Partido Comunista do Brasil PCdoB</b></div>
						<p>&nbsp;&nbsp;&nbsp;O Partido Comunista do Brasil foi fundado em 1922 e é o partido mais antigo do país. Viveu 60 anos na clandestinidade. Em 1962, rechaçou o oportunismo de direita, reorganizou-se, adotando a sigla PcdoB. O PCdoB guia-se pela teoria científica de Marx, Engels e Lênin e procura aplicá-la a realidade do Brasil, tendo como princípio básico de organização o centralismo democrático.</p>
						<ul>
							<li>Número eleitoral: 65</li>
							<li>Data de criação: 25/03/1922</li>
							<li>Data do registro definitivo: 23/07/1988</li>
							<li>Quantidade de afiliados: 393 388</li>
							<li>Espectro político: Esquerda a extrema-esquerda</li>
						</ul>
						<p>&nbsp;&nbsp;&nbsp;Políticos conhecidos: Manuela d'Ávila, Carina Vitral,Renildo Calheiros,Jô Moraes.<br><br></p>
					</div>
				</div>
			</div>
			<div id=\"popup10\" class=\"overlay\">
				<div class=\"popup\">
					<a class=\"close\" href=\"#\">Voltar</a>
					<div class=\"content\">
						<div class=\"descricao4\"><b>Partido do Movimento Democrático Brasileiro PMDB</b></div>
						<p>&nbsp;&nbsp;&nbsp;O Partido do Movimento Democrático Brasileiro foi fundado em 1980, reunindo um grande número de representantes do antigo MDB, como José Sarney e Ulysses Guimarães. Defendia a redemocratização do país.</p>
						<ul>
							<li>Número eleitoral: 15</li>
							<li>Data de criação: 04/12/1965</li>
							<li>Data do registro definitivo: 30/06/1981</li>
							<li>Quantidade de afiliados: 2 400 703</li>
							<li>Espectro político: Centro</li>
						</ul>
						<p>&nbsp;&nbsp;&nbsp;Políticos conhecidos: Michel Temer, Renan Calheiros, Eduardo Cunha, José Sarney.<br><br></p>
					</div>
				</div>
			</div>
			<div id=\"popup11\" class=\"overlay\">
				<div class=\"popup\">
					<a class=\"close\" href=\"#\">Voltar</a>
					<div class=\"content\">
						<div class=\"descricao4\"><b>Partido da Social-Democracia Brasileira PSDB</b></div>
						<p>&nbsp;&nbsp;&nbsp;O Partido da Social-Democracia Brasileira surgiu em 1988 em discidência do PMDB e teve como principais representantes Mario Covas, FHC e José Serra. De base social-democrata, defende o desenvolvimento do país com justiça social. É a principal força de oposição do PT.</p>
						<ul>
							<li>Número eleitoral: 45</li>
							<li>Data de criação: 25/06/1988</li>
							<li>Data do registro definitivo: 24/08/1988</li>
							<li>Quantidade de afiliados: 1 450 586</li>
							<li>Espectro político: Centro, centro-esquerda e centro-direita</li>
						</ul>
						<p>&nbsp;&nbsp;&nbsp;Políticos conhecidos: Aécio Neves, Geraldo Alckmin, João Dória, José Cerra, Fernando Henrique Cardoso. <br><br></p>
					</div>
				</div>
			</div>
			<div id=\"popup12\" class=\"overlay\">
				<div class=\"popup\">
					<a class=\"close\" href=\"#\">Voltar</a>
					<div class=\"content\">
						<div class=\"descricao4\"><b>Partido Trabalhista Brasileiro PTB</b></div>
						<p>&nbsp;&nbsp;&nbsp;O Partido Trabalhista Brasileiro surgiu em 1979 tendo como um de seus fundadores a filha de Getúlio Vargas, Ivete Vargas. Defende ideias referentes ao liberalismo.</p>
						<ul>
							<li>Número eleitoral: 14</li>
							<li>Data de criação: 15/05/1945</li>
							<li>Data do registro definitivo: 03/11/1981</li>
							<li>Quantidade de afiliados: 1 193 404</li>
							<li>Espectro político: Centro</li>
						</ul>
						<p>&nbsp;&nbsp;&nbsp;Políticos conhecidos: Roberto Jefferson, Sérgio Moraes, Nelson Marquezelli, Ronaldo Nogueira.<br><br></p>
					</div>
				</div>
			</div>
			<div id=\"popup13\" class=\"overlay\">
				<div class=\"popup\">
					<a class=\"close\" href=\"#\">Voltar</a>
					<div class=\"content\">
						<div class=\"descricao4\"><b>Partido Progressista PP</b></div>
						<p>&nbsp;&nbsp;&nbsp;O Partido Progressista, antigo PPB, surgiu em 1995 da fusão do PPR, PP e PRP e defende príncipios totalmente baseados no capitalismo e na economia de mercado. Tem como principal representante Paulo Maluf.</p>
						<ul>
							<li>Número eleitoral: 11</li>
							<li>Data de criação: 08/08/1995</li>
							<li>Data do registro definitivo: 16/11/1995</li>
							<li>Quantidade de afiliados: 1 437 953</li>
							<li>Espectro político: Centro-direita, direita</li>
						</ul>
						<p>&nbsp;&nbsp;&nbsp;Políticos conhecidos: Afonso Hamm, Luiz Fernando Faria, Dilceu Sperafico, João Pizzolatti.<br><br></p>
					</div>
				</div>
			</div>
			<div id=\"popup14\" class=\"overlay\">
				<div class=\"popup\">
					<a class=\"close\" href=\"#\">Voltar</a>
					<div class=\"content\">
						<div class=\"descricao4\"><b>Democratas DEM</b></div>
						<p>&nbsp;&nbsp;&nbsp;O Democratas, antigo PFL (Partido da Frente Liberal) que foi fundado em 1984, faz oposição ao governo do PT e defende uma economia livre de barreiras e a redução das taxas e impostos.</p>
						<ul>
							<li>Número eleitoral: 25</li>
							<li>Data de criação: 24/01/1985</li>
							<li>Data do registro definitivo: 11/09/1986</li>
							<li>Quantidade de afiliados: 1 094 797</li>
							<li>Espectro político: Centro a direita</li>
						</ul>
						<p>&nbsp;&nbsp;&nbsp;Políticos conhecidos: Onyx Lorenzoni, Maria do Carmo Alves, José Agripino Maia, Rodrigo Maia, José Mendonça Filho.<br><br></p>
					</div>
				</div>
			</div>
			<div id=\"popup15\" class=\"overlay\">
				<div class=\"popup\">
					<a class=\"close\" href=\"#\">Voltar</a>
					<div class=\"content\">
						<div class=\"descricao4\"><b>Partido da República PR</b></div>
						<p>&nbsp;&nbsp;&nbsp;O Partido da República surgiu em 2006 por meio da fusão do PL e do PRONA. Defende o liberalismo econômico e a redução das taxas de juros e impostos.</p>
						<ul>
							<li>Número eleitoral: 22</li>
							<li>Data de criação: 26/10/2006</li>
							<li>Data do registro definitivo: 19/12/2006</li>
							<li>Quantidade de afiliados: 798 474</li>
							<li>Espectro político: Centro-Direita</li>
						</ul>
						<p>&nbsp;&nbsp;&nbsp;Políticos conhecidos: Magno Malta, Alfredo Nascimento, César Borges.<br><br></p>
					</div>
				</div>
			</div>
			<div id=\"popup16\" class=\"overlay\">
				<div class=\"popup\">
					<a class=\"close\" href=\"#\">Voltar</a>
					<div class=\"content\">
						<div class=\"descricao4\"><b>Partido Social Cristão <br>PSC</b></div>
						<p>&nbsp;&nbsp;&nbsp;O Partido Social Cristão obteve seu registro definitivo em 1990 e é  sustentado na Doutrina Social Cristã, inspirado nos valores e propósitos do Cristianismo, em busca de uma sociedade justa, solidária e fraterna.</p>
						<ul>
							<li>Número eleitoral: 20</li>
							<li>Data de criação: 15/05/1985</li>
							<li>Data do registro definitivo: 29/03/1990</li>
							<li>Quantidade de afiliados: 422 076</li>
							<li>Espectro político: Centro-direita à direita</li>
						</ul>
						<p>&nbsp;&nbsp;&nbsp;Políticos conhecidos: Jair Bolsonaro, Eduardo Bolsonaro, Marco Feliciano, Pastor Everaldo.<br><br></p>
					</div>
				</div>
			</div>
			<div id=\"popup17\" class=\"overlay\">
				<div class=\"popup\">
					<a class=\"close\" href=\"#\">Voltar</a>
					<div class=\"content\">
						<br><div class=\"descricao5\"><b>Ajuda:</b></div>
						<p>Para saber mais sobre esse partido clique em \"Conheça mais +\"</p>
						<p>Para sequir em diante clique em \"Meu partido!\"</p><br>
					</div>
				</div>
			</div>";
				}
			}
				$result = mysql_query("SELECT * FROM `bd` WHERE Licao1 = 'Direita' and id = '$id'");

	        if (mysql_num_rows($result) > 0) {
			while($row = mysql_fetch_assoc($result)) {
					echo "
					<div class=\"row\">
						<div class=\"col-md-4\">
							<div class=\"caixa4\">
								<div class=\"rede1\">
								<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
							</div>
							<div class=\"rede2\">
								</a>
								<a title=\"Sinalizado como preferido\" class=\"fa fa-bookmark fa-2x\" aria-hidden=\"true\"></a>
								</a>
							</div>
								<img class=\"partidos\" src=\"../imagens/partido7.png\">
								<div class=\"descricao4\"><b>Democratas <br><br>DEM</b></div>
								<a class=\"link\" href=\"#popup14\">
									<button class=\"botao6\" type=\"button\">
										<b>Conheça +</b>
								</button>
								</a>
								<form name=\"Partido\" action=\"eleicoes2.php\" method=\"POST\">
								<input type=\"hidden\" name=\"id\" value=".$id.">
								<button class=\"botao7\" type=\"submit\" name=\"Partido\" value=\"12\">
									<div><b>Meu partido!</b></div>
								</button>
							</form>
							</div>
						</div>
						<div class=\"col-md-4\">
							<div class=\"caixa4\">
								<div class=\"rede1\">
								<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
							</div>
							<div class=\"rede2\">
								</a>
								<a title=\"Sinalizado como preferido\" class=\"fa fa-bookmark fa-2x\" aria-hidden=\"true\"></a>
								</a>
							</div>
								<img class=\"partidos\" src=\"../imagens/partido4.png\">
								<div class=\"descricao4\"><b>Partido Progressista <br><br>PP</b></div>
								<a class=\"link\" href=\"#popup13\">
									<button class=\"botao6\" type=\"button\">
										<b>Conheça +</b>
								</button>
								</a>
								<form name=\"Partido\" action=\"eleicoes2.php\" method=\"POST\">
								<input type=\"hidden\" name=\"id\" value=".$id.">
								<button class=\"botao7\" type=\"submit\" name=\"Partido\" value=\"8\">
									<div><b>Meu partido!</b></div>
								</button>
							</form>
							</div>
						</div>
						<div class=\"col-md-4\">
							<div class=\"caixa4\">
								<div class=\"rede1\">
								<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
							</div>
							<div class=\"rede2\">
								</a>
								<a title=\"Sinalizado como preferido\" class=\"fa fa-bookmark fa-2x\" aria-hidden=\"true\"></a>
								</a>
							</div>
								<img class=\"partidos\" src=\"../imagens/partido8.png\">
								<div class=\"descricao4\"><b>Partido da República <br><br>PR</b></div>
								<a class=\"link\" href=\"#popup15\">
									<button class=\"botao6\" type=\"button\">
										<b>Conheça +</b>
								</button>
								</a>
								<form name=\"Partido\" action=\"eleicoes2.php\" method=\"POST\">
								<input type=\"hidden\" name=\"id\" value=".$id.">
								<button class=\"botao7\" type=\"submit\" name=\"Partido\" value=\"10\">
									<div><b>Meu partido!</b></div>
								</button>
							</form>
							</div>
						</div>
					</div>
					<div class=\"row\">
						<div class=\"col-md-4\">
							<div class=\"caixa4\">
								<div class=\"rede1\">
								<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
							</div>
							<div class=\"rede2\">
								</a>
								<a title=\"Sinalizado como preferido\" class=\"fa fa-bookmark fa-2x\" aria-hidden=\"true\"></a>
								</a>
							</div>
								<img class=\"partidos\" src=\"../imagens/partido11.png\">
								<div class=\"descricao4\"><b>Partido Social Cristão <br><br>PSC</b></div>
								<a class=\"link\" href=\"#popup16\">
									<button class=\"botao6\" type=\"button\">
										<b>Conheça +</b>
								</button>
								</a>
								<form name=\"Partido\" action=\"eleicoes2.php\" method=\"POST\">
								<input type=\"hidden\" name=\"id\" value=".$id.">
								<button class=\"botao7\" type=\"submit\" name=\"Partido\" value=\"3\">
									<div><b>Meu partido!</b></div>
								</button>
							</form>
							</div>
						</div>
						<div class=\"col-md-4\">
							<div class=\"caixa5\">
								<div class=\"rede1\">
								<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
							</div>
								<img class=\"partidos\" src=\"../imagens/partido1.png\">
								<div class=\"descricao4\"><b>Partido do Movimento Democrático Brasileiro <br>PMDB</b></div>
								<a class=\"link\" href=\"#popup10\">
									<button class=\"botao6\" type=\"button\">
										<b>Conheça +</b>
								</button>
								</a>
								<form name=\"Partido\" action=\"eleicoes2.php\" method=\"POST\">
								<input type=\"hidden\" name=\"id\" value=".$id.">
								<button class=\"botao7\" type=\"submit\" name=\"Partido\" value=\"11\">
									<div><b>Meu partido!</b></div>
								</button>
							</form>
							</div>
						</div>
						<div class=\"col-md-4\">
							<div class=\"caixa5\">
								<div class=\"rede1\">
								<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
							</div>
								<img class=\"partidos\" src=\"../imagens/partido3.png\">
								<div class=\"descricao4\"><b>Partido da Social-Democracia Brasileira <br>PSDB</b></div>
								<a class=\"link\" href=\"#popup11\">
									<button class=\"botao6\" type=\"button\">
										<b>Conheça +</b>
								</button>
								</a>
								<form name=\"Partido\" action=\"eleicoes2.php\" method=\"POST\">
								<input type=\"hidden\" name=\"id\" value=".$id.">
								<button class=\"botao7\" type=\"submit\" name=\"Partido\" value=\"1\">
									<div><b>Meu partido!</b></div>
								</button>
							</form>
							</div>
						</div>
					</div>
					<div class=\"row\">
						<div class=\"col-md-4\">
							<div class=\"caixa5\">
								<div class=\"rede1\">
								<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
							</div>
								<img class=\"partidos\" src=\"../imagens/partido6.png\">
								<div class=\"descricao4\"><b>Partido Trabalhista Brasileiro <br>PTB</b></div>
								<a class=\"link\" href=\"#popup12\">
									<button class=\"botao6\" type=\"button\">
										<b>Conheça +</b>
								</button>
								</a>
								<form name=\"Partido\" action=\"eleicoes2.php\" method=\"POST\">
								<input type=\"hidden\" name=\"id\" value=".$id.">
								<button class=\"botao7\" type=\"submit\" name=\"Partido\" value=\"9\">
									<div><b>Meu partido!</b></div>
								</button>
							</form>
							</div>
						</div>
						<div class=\"col-md-4\">
							<div class=\"caixa6\">
								<div class=\"rede1\">
								<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
							</div>
								<img class=\"partidos\" src=\"../imagens/partido2.png\">
								<div class=\"descricao4\"><b>Partido dos Trabalhadores <br><br>PT</b></div>
								<a class=\"link\" href=\"#popup5\">
									<button class=\"botao6\" type=\"button\">
										<b>Conheça +</b>
								</button>
								</a>
								<form name=\"Partido\" action=\"eleicoes2.php\" method=\"POST\">
								<input type=\"hidden\" name=\"id\" value=".$id.">
								<button class=\"botao7\" type=\"submit\" name=\"Partido\" value=\"2\">
									<div><b>Meu partido!</b></div>
								</button>
							</form>
							</div>
						</div>
						<div class=\"col-md-4\">
							<div class=\"caixa6\">
								<div class=\"rede1\">
								<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
							</div>
								<img class=\"partidos\" src=\"../imagens/partido5.png\">
								<div class=\"descricao4\"><b>Partido Democrático Trabalhista <br>PDT</b></div>
								<a class=\"link\" href=\"#popup6\">
									<button class=\"botao6\" type=\"button\">
										<b>Conheça +</b>
								</button>
								</a>
								<form name=\"Partido\" action=\"eleicoes2.php\" method=\"POST\">
								<input type=\"hidden\" name=\"id\" value=".$id.">
								<button class=\"botao7\" type=\"submit\" name=\"Partido\" value=\"4\">
									<div><b>Meu partido!</b></div>
								</button>
							</form>
							</div>
						</div>
					</div>
					<div class=\"row\">
						<div class=\"col-md-4\">
							<div class=\"caixa6\">
								<div class=\"rede1\">
								<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
							</div>
								<img class=\"partidos\" src=\"../imagens/partido9.png\">
								<div class=\"descricao4\"><b>Partido Socialista Brasileiro <br>PSB</b></div>
								<a class=\"link\" href=\"#popup7\">
									<button class=\"botao6\" type=\"button\">
										<b>Conheça +</b>
								</button>
								</a>
								<form name=\"Partido\" action=\"eleicoes2.php\" method=\"POST\">
								<input type=\"hidden\" name=\"id\" value=".$id.">
								<button class=\"botao7\" type=\"submit\" name=\"Partido\" value=\"5\">
									<div><b>Meu partido!</b></div>
								</button>
							</form>
							</div>
						</div>
						<div class=\"col-md-4\">
							<div class=\"caixa6\">
								<div class=\"rede1\">
								<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
							</div>
								<img class=\"partidos\" src=\"../imagens/partido10.png\">
								<div class=\"descricao4\"><b>Partido Popular Socialista <br><br>PPS</b></div>
								<a class=\"link\" href=\"#popup8\">
									<button class=\"botao6\" type=\"button\">
										<b>Conheça +</b>
								</button>
								</a>
								<form name=\"Partido\" action=\"eleicoes2.php\" method=\"POST\">
								<input type=\"hidden\" name=\"id\" value=".$id.">
								<button class=\"botao7\" type=\"submit\" name=\"Partido\" value=\"6\">
									<div><b>Meu partido!</b></div>
								</button>
							</form>
							</div>
						</div>
						<div class=\"col-md-4\">
							<div class=\"caixa6\">
								<div class=\"rede1\">
								<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
							</div>
								<img class=\"partidos\" src=\"../imagens/partido12.png\">
								<div class=\"descricao4\"><b>Partido Comunista do Brasil <br><br>PCdoB</b></div>
								<a class=\"link\" href=\"#popup9\">
									<button class=\"botao6\" type=\"button\">
										<b>Conheça +</b>
								</button>
								</a>
								<form name=\"Partido\" action=\"eleicoes2.php\" method=\"POST\">
								<input type=\"hidden\" name=\"id\" value=".$id.">
								<button class=\"botao7\" type=\"submit\" name=\"Partido\" value=\"7\">
									<div><b>Meu partido!</b></div>
								</button>
							</form>
							</div>
						</div>
					</div>
				</div>
			<div id=\"popup5\" class=\"overlay\">
				<div class=\"popup\">
					<a class=\"close\" href=\"#\">Voltar</a>
					<div class=\"content\">
						<div class=\"descricao4\"><b>Partido dos Trabalhadores PT</b></div>
						<p>&nbsp;&nbsp;&nbsp;O Partido dos Trabalhadores surgiu no início da década de 80 junto com as greves e os movimentos sindicais como uma grande força de oposição, representando os trabalhadores e as classes populares. É de base socialista e tem como principal representante o ex-presidente Lula e defende a reforma agrária e a justiça social.</p>
						<ul>
							<li>Número eleitoral: 13</li>
							<li>Data de criação: 10/02/1980</li>
							<li>Data do registro definitivo: 11/02/1982</li>
							<li>Quantidade de afiliados: 1 582 646</li>
							<li>Espectro político: Esquerda, a centro-esquerda</li>
						</ul>
						<p>&nbsp;&nbsp;&nbsp;Políticos conhecidos: Luiz Inácio Lula da Silva, Dilma Rousseff, Gleisi Hoffmann, José Dirceu, Fernando Haddad, José Genoino, Eduardo Suplicy, Maria do Rosário, Fernando Pimentel.<br><br></p>
					</div>
				</div>
			</div>
			<div id=\"popup6\" class=\"overlay\">
				<div class=\"popup\">
					<a class=\"close\" href=\"#\">Voltar</a>
					<div class=\"content\">
						<div class=\"descricao4\"><b>Partido Democrático Trabalhista PDT</b></div>
						<p>&nbsp;&nbsp;&nbsp;O Partido Democrático Trabalhista foi criado em 1981 resgatando as principais ideias defendidas por Getúlia Vargas, seu principal representante foi Leonel Brizola. De base nacionalista e social-democrata, O PDT é contra as privatizações, defendendo o investimento na indústria nacional.</p>
						<ul>
							<li>Número eleitoral: 12</li>
							<li>Data de criação: 17/06/1979</li>
							<li>Data do registro definitivo: 10/11/1981</li>
							<li>Quantidade de afiliados: 1 253 890</li>
							<li>Espectro político: Centro-esquerda à esquerda</li>
						</ul>
						<p>&nbsp;&nbsp;&nbsp;Políticos conhecidos: Ciro Gomes, Cidinha Campos, Juarez Soares.<br><br></p>
					</div>
				</div>
			</div>
			<div id=\"popup7\" class=\"overlay\">
				<div class=\"popup\">
					<a class=\"close\" href=\"#\">Voltar</a>
					<div class=\"content\">
						<div class=\"descricao4\"><b>Partido Socialista Brasileiro PSB</b></div>
						<p>&nbsp;&nbsp;&nbsp;O Partido Socialista Brasileiro foi criado em 1947, tendo como principal representante Miguel Arraes e defende ideias do socialismo com transformações na sociedade que representem a melhoria da qualidade de vida dos cidadãos brasileiros.</p>
						<ul>
							<li>Número eleitoral: 40</li>
							<li>Data de criação: 02/04/1947</li>
							<li>Data do registro definitivo: 01/07/1988</li>
							<li>Quantidade de afiliados: 649 732</li>
							<li>Espectro político: Centro-esquerda a esquerda</li>
						</ul>
						<p>&nbsp;&nbsp;&nbsp;Políticos conhecidos: Adilton Sachetti, Átila Lira, Bebeto Galvão, César Messias. <br><br></p>
					</div>
				</div>
			</div>
			<div id=\"popup8\" class=\"overlay\">
				<div class=\"popup\">
					<a class=\"close\" href=\"#\">Voltar</a>
					<div class=\"content\">
						<div class=\"descricao4\"><b>Partido Popular Socialista PPS</b></div>
						<p>&nbsp;&nbsp;&nbsp;O  Partido Popular Socialista foi fundado em 1992 em dissidência do PCB. Seus principais aspectos programáticos são a \"radicalidade democrática\", uma nova definição do socialismo, pautado no humanismo e no internacionalismo, o que o classifica para alguns como partido defensor da social-democracia.</p>
						<ul>
							<li>Número eleitoral: 23</li>
							<li>Data de criação: 26/01/1992</li>
							<li>Data do registro definitivo: 19/03/1992</li>
							<li>Quantidade de afiliados: 481 457</li>
							<li>Espectro político: Centro a esquerda</li>
						</ul>
						<p>&nbsp;&nbsp;&nbsp;Políticos conhecidos: Roberto Freire, Rubens Bueno, Arnaldo Jordy, Cristovam Buarque.<br><br></p>
					</div>
				</div>
			</div>
			<div id=\"popup9\" class=\"overlay\">
				<div class=\"popup\">
					<a class=\"close\" href=\"#\">Voltar</a>
					<div class=\"content\">
						<div class=\"descricao4\"><b>Partido Comunista do Brasil PCdoB</b></div>
						<p>&nbsp;&nbsp;&nbsp;O Partido Comunista do Brasil foi fundado em 1922 e é o partido mais antigo do país. Viveu 60 anos na clandestinidade. Em 1962, rechaçou o oportunismo de direita, reorganizou-se, adotando a sigla PcdoB. O PCdoB guia-se pela teoria científica de Marx, Engels e Lênin e procura aplicá-la a realidade do Brasil, tendo como princípio básico de organização o centralismo democrático.</p>
						<ul>
							<li>Número eleitoral: 65</li>
							<li>Data de criação: 25/03/1922</li>
							<li>Data do registro definitivo: 23/07/1988</li>
							<li>Quantidade de afiliados: 393 388</li>
							<li>Espectro político: Esquerda a extrema-esquerda</li>
						</ul>
						<p>&nbsp;&nbsp;&nbsp;Políticos conhecidos: Manuela d'Ávila, Carina Vitral,Renildo Calheiros,Jô Moraes.<br><br></p>
					</div>
				</div>
			</div>
			<div id=\"popup10\" class=\"overlay\">
				<div class=\"popup\">
					<a class=\"close\" href=\"#\">Voltar</a>
					<div class=\"content\">
						<div class=\"descricao4\"><b>Partido do Movimento Democrático Brasileiro PMDB</b></div>
						<p>&nbsp;&nbsp;&nbsp;O Partido do Movimento Democrático Brasileiro foi fundado em 1980, reunindo um grande número de representantes do antigo MDB, como José Sarney e Ulysses Guimarães. Defendia a redemocratização do país.</p>
						<ul>
							<li>Número eleitoral: 15</li>
							<li>Data de criação: 04/12/1965</li>
							<li>Data do registro definitivo: 30/06/1981</li>
							<li>Quantidade de afiliados: 2 400 703</li>
							<li>Espectro político: Centro</li>
						</ul>
						<p>&nbsp;&nbsp;&nbsp;Políticos conhecidos: Michel Temer, Renan Calheiros, Eduardo Cunha, José Sarney.<br><br></p>
					</div>
				</div>
			</div>
			<div id=\"popup11\" class=\"overlay\">
				<div class=\"popup\">
					<a class=\"close\" href=\"#\">Voltar</a>
					<div class=\"content\">
						<div class=\"descricao4\"><b>Partido da Social-Democracia Brasileira PSDB</b></div>
						<p>&nbsp;&nbsp;&nbsp;O Partido da Social-Democracia Brasileira surgiu em 1988 em discidência do PMDB e teve como principais representantes Mario Covas, FHC e José Serra. De base social-democrata, defende o desenvolvimento do país com justiça social. É a principal força de oposição do PT.</p>
						<ul>
							<li>Número eleitoral: 45</li>
							<li>Data de criação: 25/06/1988</li>
							<li>Data do registro definitivo: 24/08/1988</li>
							<li>Quantidade de afiliados: 1 450 586</li>
							<li>Espectro político: Centro, centro-esquerda e centro-direita</li>
						</ul>
						<p>&nbsp;&nbsp;&nbsp;Políticos conhecidos: Aécio Neves, Geraldo Alckmin, João Dória, José Cerra, Fernando Henrique Cardoso. <br><br></p>
					</div>
				</div>
			</div>
			<div id=\"popup12\" class=\"overlay\">
				<div class=\"popup\">
					<a class=\"close\" href=\"#\">Voltar</a>
					<div class=\"content\">
						<div class=\"descricao4\"><b>Partido Trabalhista Brasileiro PTB</b></div>
						<p>&nbsp;&nbsp;&nbsp;O Partido Trabalhista Brasileiro surgiu em 1979 tendo como um de seus fundadores a filha de Getúlio Vargas, Ivete Vargas. Defende ideias referentes ao liberalismo.</p>
						<ul>
							<li>Número eleitoral: 14</li>
							<li>Data de criação: 15/05/1945</li>
							<li>Data do registro definitivo: 03/11/1981</li>
							<li>Quantidade de afiliados: 1 193 404</li>
							<li>Espectro político: Centro</li>
						</ul>
						<p>&nbsp;&nbsp;&nbsp;Políticos conhecidos: Roberto Jefferson, Sérgio Moraes, Nelson Marquezelli, Ronaldo Nogueira.<br><br></p>
					</div>
				</div>
			</div>
			<div id=\"popup13\" class=\"overlay\">
				<div class=\"popup\">
					<a class=\"close\" href=\"#\">Voltar</a>
					<div class=\"content\">
						<div class=\"descricao4\"><b>Partido Progressista PP</b></div>
						<p>&nbsp;&nbsp;&nbsp;O Partido Progressista, antigo PPB, surgiu em 1995 da fusão do PPR, PP e PRP e defende príncipios totalmente baseados no capitalismo e na economia de mercado. Tem como principal representante Paulo Maluf.</p>
						<ul>
							<li>Número eleitoral: 11</li>
							<li>Data de criação: 08/08/1995</li>
							<li>Data do registro definitivo: 16/11/1995</li>
							<li>Quantidade de afiliados: 1 437 953</li>
							<li>Espectro político: Centro-direita, direita</li>
						</ul>
						<p>&nbsp;&nbsp;&nbsp;Políticos conhecidos: Afonso Hamm, Luiz Fernando Faria, Dilceu Sperafico, João Pizzolatti.<br><br></p>
					</div>
				</div>
			</div>
			<div id=\"popup14\" class=\"overlay\">
				<div class=\"popup\">
					<a class=\"close\" href=\"#\">Voltar</a>
					<div class=\"content\">
						<div class=\"descricao4\"><b>Democratas DEM</b></div>
						<p>&nbsp;&nbsp;&nbsp;O Democratas, antigo PFL (Partido da Frente Liberal) que foi fundado em 1984, faz oposição ao governo do PT e defende uma economia livre de barreiras e a redução das taxas e impostos.</p>
						<ul>
							<li>Número eleitoral: 25</li>
							<li>Data de criação: 24/01/1985</li>
							<li>Data do registro definitivo: 11/09/1986</li>
							<li>Quantidade de afiliados: 1 094 797</li>
							<li>Espectro político: Centro a direita</li>
						</ul>
						<p>&nbsp;&nbsp;&nbsp;Políticos conhecidos: Onyx Lorenzoni, Maria do Carmo Alves, José Agripino Maia, Rodrigo Maia, José Mendonça Filho.<br><br></p>
					</div>
				</div>
			</div>
			<div id=\"popup15\" class=\"overlay\">
				<div class=\"popup\">
					<a class=\"close\" href=\"#\">Voltar</a>
					<div class=\"content\">
						<div class=\"descricao4\"><b>Partido da República PR</b></div>
						<p>&nbsp;&nbsp;&nbsp;O Partido da República surgiu em 2006 por meio da fusão do PL e do PRONA. Defende o liberalismo econômico e a redução das taxas de juros e impostos.</p>
						<ul>
							<li>Número eleitoral: 22</li>
							<li>Data de criação: 26/10/2006</li>
							<li>Data do registro definitivo: 19/12/2006</li>
							<li>Quantidade de afiliados: 798 474</li>
							<li>Espectro político: Centro-Direita</li>
						</ul>
						<p>&nbsp;&nbsp;&nbsp;Políticos conhecidos: Magno Malta, Alfredo Nascimento, César Borges.<br><br></p>
					</div>
				</div>
			</div>
			<div id=\"popup16\" class=\"overlay\">
				<div class=\"popup\">
					<a class=\"close\" href=\"#\">Voltar</a>
					<div class=\"content\">
						<div class=\"descricao4\"><b>Partido Social Cristão <br>PSC</b></div>
						<p>&nbsp;&nbsp;&nbsp;O Partido Social Cristão obteve seu registro definitivo em 1990 e é  sustentado na Doutrina Social Cristã, inspirado nos valores e propósitos do Cristianismo, em busca de uma sociedade justa, solidária e fraterna.</p>
						<ul>
							<li>Número eleitoral: 20</li>
							<li>Data de criação: 15/05/1985</li>
							<li>Data do registro definitivo: 29/03/1990</li>
							<li>Quantidade de afiliados: 422 076</li>
							<li>Espectro político: Centro-direita à direita</li>
						</ul>
						<p>&nbsp;&nbsp;&nbsp;Políticos conhecidos: Jair Bolsonaro, Eduardo Bolsonaro, Marco Feliciano, Pastor Everaldo.<br><br></p>
					</div>
				</div>
			</div>
			<div id=\"popup17\" class=\"overlay\">
				<div class=\"popup\">
					<a class=\"close\" href=\"#\">Voltar</a>
					<div class=\"content\">
						<br><div class=\"descricao5\"><b>Ajuda:</b></div>
						<p>Para saber mais sobre esse partido clique em \"Conheça mais +\"</p>
						<p>Para sequir em diante clique em \"Meu partido!\"</p><br>
					</div>
				</div>
			</div>";
				}
			}
		?>
	    <div class="rodape">
			<div class="green"></div>
			<div class="blue"></div>
			<div class="yellow"></div>
		</div>
	</body>
</html>