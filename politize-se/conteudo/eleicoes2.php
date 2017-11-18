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
		<title>Candidatos</title>
	</head>
	<body>
		<?php
			$host = "localhost";
		    $user = "root";
		    $pass = "";
		    $db = "politizese";
		    $Partido = $_POST['Partido'];
		    $id = $_POST['id'];
		    $conexao = @mysql_connect($host, $user, $pass) or die(mysql_error());
		    @mysql_select_db($db) or die(mysql_error());  
		    $sqrl = mysql_query("UPDATE bd set Partido ='$Partido' WHERE id = '$id'");
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
					<div class="tema"><b>Possíveis candidatos a presidência.</b></div><br>
					<div class="descricao"><i>* Selecionamos os 10 principais possíveis candidatos à presidência. Estão agrupados em ordem alfabética.</i></div><br>
				</div>
			</div>
		</div>
		<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="caixa8">
							<div class="row">
   							<div class="col-md-6">
   								<div class="rede1">
									<a href="#popup0" title="Ajuda" class="fa fa-question fa-2x" aria-hidden="true"></a>
								</div>
								<img class="candidato" src="../imagens/candidato3.png">
								<form name="Candidato" action="perfil.php" method="POST">
									<input type="hidden" name="id" value="<?php echo $id ?>">
									<button class="botao7" type="submit" name="Candidato" value="Aécio Neves">
										<div><b>Meu voto!</b></div>
									</button>
								</form>
							</div>
								<div class="col-md-6"><br>
									<div class="descricao6"><b>Aécio Neves</b></div>
										<a class="link" href="#popup25">
											<button class="botao6" type="button">
												<b>Perfil</b>
											</button>
										</a>
										<a class="link" href="#popup26">
											<button class="botao6" type="button">
												<b>Reputação</b>
										</button>
										</a>
										<a class="link" href="#popup27">
											<button class="botao6" type="button">
												<b>Propostas</b>
											</button>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="caixa8">
   							<div class="row">
       							<div class="col-md-6">
       								<div class="rede1">
										<a href="#popup0" title="Ajuda" class="fa fa-question fa-2x" aria-hidden="true"></a>
									</div>
									<img class="candidato" src="../imagens/candidato9.png">
									<form name="Candidato" action="perfil.php" method="POST">
										<input type="hidden" name="id" value="<?php echo $id ?>">
										<button class="botao7" type="submit" name="Candidato" value="Alvaro Dias">
											<div><b>Meu voto!</b></div>
										</button>
									</form>
								</div>
									<div class="col-md-6"><br>
										<div class="descricao6"><b>Alvaro Dias</b></div>
											<a class="link" href="#popup19">
												<button class="botao6" type="button">
													<b>Perfil</b>
												</button>
											</a>
											<a class="link" href="#popup20">
												<button class="botao6" type="button">
													<b>Reputação</b>
												</button>
											</a>
											<a class="link" href="#popup21">
												<button class="botao6" type="button">
													<b>Propostas</b>
												</button>
											</a>
									</div>
								</div>
							</div>
						</div>
					</div>
       			</div>
			</div>
		</div>
		<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="caixa8">
							<div class="row">
   							<div class="col-md-6">
   								<div class="rede1">
									<a href="#popup0" title="Ajuda" class="fa fa-question fa-2x" aria-hidden="true"></a>
								</div>
								<img class="candidato" src="../imagens/candidato8.png">
								<form name="Candidato" action="perfil.php" method="POST">
									<input type="hidden" name="id" value="<?php echo $id ?>">
									<button class="botao7" type="submit" name="Candidato" value="Ciro Gomes">
										<div><b>Meu voto!</b></div>
									</button>
								</form>
							</div>
								<div class="col-md-6"><br>
									<div class="descricao6"><b>Ciro Gomes</b></div>
										<a class="link" href="#popup16">
											<button class="botao6" type="button">
												<b>Perfil</b>
											</button>
										</a>
										<a class="link" href="#popup17">
											<button class="botao6" type="button">
												<b>Reputação</b>
											</button>
										</a>
										<a class="link" href="#popup18">
											<button class="botao6" type="button">
												<b>Propostas</b>
											</button>
										</a>
								</div>
							</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="caixa8">
   							<div class="row">
       							<div class="col-md-6">
       								<div class="rede1">
										<a href="#popup0" title="Ajuda" class="fa fa-question fa-2x" aria-hidden="true"></a>
									</div>
									<img class="candidato" src="../imagens/candidato5.gif">
									<form name="Candidato" action="perfil.php" method="POST">
										<input type="hidden" name="id" value="<?php echo $id ?>">
										<button class="botao7" type="submit" name="Candidato" value="Fernando Haddad">
											<div><b>Meu voto!</b></div>
										</button>
									</form>
								</div>
									<div class="col-md-6"><br>
										<div class="descricao6"><b>Fernando Haddad</b></div>
											<a class="link" href="#popup7">
												<button class="botao6" type="button">
													<b>Perfil</b>
												</button>
											</a>
											<a class="link" href="#popup8">
												<button class="botao6" type="button">
													<b>Reputação</b>
												</button>
											</a>
											<a class="link" href="#popup9">
												<button class="botao6" type="button">
													<b>Propostas</b>
												</button>
											</a>
									</div>
								</div>
							</div>
						</div>
					</div>
       			</div>
			</div>
		</div>
		<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="caixa8">
							<div class="row">
   							<div class="col-md-6">
   								<div class="rede1">
									<a href="#popup0" title="Ajuda" class="fa fa-question fa-2x" aria-hidden="true"></a>
								</div>
								<img class="candidato" src="../imagens/candidato2.png">
								<form name="Candidato" action="perfil.php" method="POST">
									<input type="hidden" name="id" value="<?php echo $id ?>">
									<button class="botao7" type="submit" name="Candidato" value="Geraldo Alckmin">
										<div><b>Meu voto!</b></div>
									</button>
								</form>
							</div>
								<div class="col-md-6"><br>
									<div class="descricao6"><b>Geraldo Alckmin</b></div>
									<a class="link" href="#popup4">
										<button class="botao6" type="button">
											<b>Perfil</b>
									</button>
									</a>
									<a class="link" href="#popup5">
										<button class="botao6" type="button">
											<b>Reputação</b>
									</button>
									</a>
									<a class="link" href="#popup6">
										<button class="botao6" type="button">
											<b>Propostas</b>
										</button>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="caixa8">
   							<div class="row">
       							<div class="col-md-6">
       								<div class="rede1">
										<a href="#popup0" title="Ajuda" class="fa fa-question fa-2x" aria-hidden="true"></a>
									</div>
									<img class="candidato" src="../imagens/candidato7.png">
									<form name="Candidato" action="perfil.php" method="POST">
										<input type="hidden" name="id" value="<?php echo $id ?>">
										<button class="botao7" type="submit" name="Candidato" value="Jair Bolsonaro">
											<div><b>Meu voto!</b></div>
										</button>
									</form>
								</div>
									<div class="col-md-6"><br>
										<div class="descricao6"><b>Jair Bolsonaro</b></div>
										<a class="link" href="#popup13">
											<button class="botao6" type="button">
												<b>Perfil</b>
											</button>
										</a>
										<a class="link" href="#popup14">
											<button class="botao6" type="button">
												<b>Reputação</b>
											</button>
										</a>
										<a class="link" href="#popup15">
											<button class="botao6" type="button">
												<b>Propostas</b>
											</button>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
       			</div>
			</div>
		</div>
		<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="caixa8">
							<div class="row">
   							<div class="col-md-6">
   								<div class="rede1">
									<a href="#popup0" title="Ajuda" class="fa fa-question fa-2x" aria-hidden="true"></a>
								</div>
								<img class="candidato" src="../imagens/candidato10.png">
								<form name="Candidato" action="perfil.php" method="POST">
									<input type="hidden" name="id" value="<?php echo $id ?>">
									<button class="botao7" type="submit" name="Candidato" value="Joaquim Barbosa">
										<div><b>Meu voto!</b></div>
									</button>
								</form>
							</div>
								<div class="col-md-6"><br>
									<div class="descricao6"><b>Joaquim Barbosa</b></div>
									<a class="link" href="#popup22">
										<button class="botao6" type="button">
											<b>Perfil</b>
										</button>
									</a>
									<a class="link" href="#popup23">
										<button class="botao6" type="button">
											<b>Reputação</b>
										</button>
									</a>
									<a class="link" href="#popup24">
										<button class="botao6" type="button">
											<b>Propostas</b>
										</button>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="caixa8">
   							<div class="row">
       							<div class="col-md-6">
									<div class="rede1">
										<a href="#popup0" title="Ajuda" class="fa fa-question fa-2x" aria-hidden="true"></a>
									</div>
									<img class="candidato" src="../imagens/candidato1.png">
									<form name="Candidato" action="perfil.php" method="POST">
										<input type="hidden" name="id" value="<?php echo $id ?>">
										<button class="botao7" type="submit" name="Candidato" value="João Doria">
											<div><b>Meu voto!</b></div>
										</button>
									</form>
								</div>
									<div class="col-md-6"><br>
										<div class="descricao6"><b>João Doria</b></div>
											<a class="link" href="#popup1">
												<button class="botao6" type="button">
													<b>Perfil</b>
											</button>
											</a>
											<a class="link" href="#popup2">
												<button class="botao6" type="button">
													<b>Reputação</b>
											</button>
											</a>
											<a class="link" href="#popup3">
												<button class="botao6" type="button">
													<b>Propostas</b>
											</button>
									
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
       			</div>
			</div>
		</div>
		<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="caixa8">
							<div class="row">
   							<div class="col-md-6">
   								<div class="rede1">
									<a href="#popup0" title="Ajuda" class="fa fa-question fa-2x" aria-hidden="true"></a>
								</div>
								<img class="candidato" src="../imagens/candidato4.png">
									<form name="Candidato" action="perfil.php" method="POST">
										<input type="hidden" name="id" value="<?php echo $id ?>">
										<button class="botao7" type="submit" name="Candidato" value="Lula">
											<div><b>Meu voto!</b></div>
										</button>
									</form>
								</div>
									<div class="col-md-6"><br>
										<div class="descricao6"><b>Lula</b></div>
										<a class="link" href="#popup28">
											<button class="botao6" type="button">
												<b>Perfil</b>
											</button>
										</a>
										<a class="link" href="#popup29">
											<button class="botao6" type="button">
												<b>Reputação</b>
											</button>
										</a>
										<a class="link" href="#popup30">
											<button class="botao6" type="button">
												<b>Propostas</b>
											</button>



										</a>
								</div>
							</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="caixa8">
   							<div class="row">
       							<div class="col-md-6">
       								<div class="rede1">
										<a href="#popup0" title="Ajuda" class="fa fa-question fa-2x" aria-hidden="true"></a>
									</div>
									<img class="candidato" src="../imagens/candidato6.png">
									<form name="Candidato" action="perfil.php" method="POST">
										<input type="hidden" name="id" value="<?php echo $id ?>">
										<button class="botao7" type="submit" name="Candidato" value="Marina Silva">
											<div><b>Meu voto!</b></div>
										</button>
									</form>
								</div>
									<div class="col-md-6"><br>
										<div class="descricao6"><b>Marina Silva</b></div>
											<a class="link" href="#popup10">
												<button class="botao6" type="button">
													<b>Perfil</b>
											</button>
											</a>
											<a class="link" href="#popup11">
												<button class="botao6" type="button">
													<b>Reputação</b>
											</button>
											</a>
											<a class="link" href="#popup12">
												<button class="botao6" type="button">
													<b>Propostas</b>
											</button>
											</a>
									</div>
								</div>
							</div>
						</div>
					</div>
       			</div>
			</div>
		</div>
		<div id="popup0" class="overlay">
			<div class="popup3">
				<a class="close" href="#">Voltar</a>
				<div class="content">
					<br><div class="descricao4"><b>Ajuda:</b></div>
					<p>Para saber mais sobre o candidato clique em "Perfil"<br>
					Para conhecer a ficha criminal/declarações polêmicas clique em "Reputação"<br>
					Para ter acesso as propostas de canpanha do candidato clique em "Propostas"<br>
					Para sequir em diante clique em "Meu voto!"</p><br>
				</div>
			</div>
		</div>
		<div id="popup1" class="overlay">
			<div class="popup2">
				<a class="close" href="#">Voltar</a>
				<div class="content">
					<div class="descricao7"><b>João Doria</b></div>
					<ul>
						<li>Nascimento: 16 de dezembro de 1957</li>
						<li>Nacionalidade: Brasileira</li>
						<li>Formação: Jornalismo e publicidade</li>
						<li>Partido: PSDB</li>
						<li>Site Oficial: www.grupodoria.com.br</li>
					</ul>
					<p>&nbsp;&nbsp;&nbsp;João Agripino da Costa Doria Junior é filiado ao Partido da Social Democracia Brasileira (PSDB), partido fundado em 1988 e com o qual afirma sempre ter tido identificação ideológica e política. É o atual prefeito da cidade de São Paulo. Em 2012, foi eleito uma das 100 pessoas mais influentes do Brasil. João Doria se graduou em comunicação social, fazendo diversos trabalhos atuando em sua área profissional. É criador e presidente licenciado do Grupo Doria, que reúne seis organizações empresariais. </p>
				</div>
			</div>
		</div>
		<div id="popup2" class="overlay">
			<div class="popup2">
				<a class="close" href="#">Voltar</a>
				<div class="content">
					<div class="descricao7"><b>Processos:</b></div>
					<p>&nbsp;&nbsp;&nbsp;Doria responde a 5 ações na Justiça Eleitoral; 3 delas pedem inelegibilidade. Uma das ações, além de acusar Doria, também acusa o governador Geraldo Alckmin (PSDB) de ter usado a máquina estadual a favor de Doria, seu afilhado político. Em outra ação, Doria omitiu e subvalorizou diversos bens em sua declaração à Receita Federal que chegou assim a “apenas” R$ 179,6 milhões. Doria recebeu cheque de R$ 20 mil de empresa investigada na Lava Jato.</p>
					<div class="descricao7"><b>Polêmicas:</b></div>
					<p>&nbsp;&nbsp;&nbsp;Doria começou o seu governo numa guerra contra grafites e pintou muros da cidade. Em uma ação desastrosa, que incluiu a demolição de um prédio com pessoas dentro, Doria afirmou que "a cracolândia acabou". Campeão de viagens, Doria disse que consegue administrar a cidade pela internet. No lançamento do programa Alimentos Para Todos, João Doria anunciou a farinata, feita a partir de alimentos próximos da data de vencimento, como um "alimento completo" para famílias carentes. O produto ganhou o apelido de "ração humana", e o governo voltou atrás dizendo que se tratava de um suplemento alimentar.<br></p>
					<div class="descricao6"><b>Status Ficha Limpa: Pendente.</b></div>
				</div>
			</div>
		</div>
		<div id="popup3" class="overlay">
			<div class="popup2">
				<a class="close" href="#">Voltar</a>
				<div class="content">
				<div class="descricao7"><b>Ideologias:</b></div>
					<p>&nbsp;&nbsp;&nbsp;Tem política intensiva de privatizações e parcerias público-privadas. Apoia a união de pessoas do mesmo sexo, a reforma tributária, liberação do Uber, doação de empresas para campanhas eleitorais, redução da maioridade penal e desarmamento e se mantendo contra o aborto, IPTU Progressivo, pedágio urbano, ideologia de gênero e a liberação das drogas. Se diz contra qualquer proposta de anistia de caixa 2 praticado em campanhas eleitorais.</p>
					<div class="descricao7"><b>Propostas de Campanha:</b></div>
					<p>&nbsp;&nbsp;&nbsp;Se destaca em áreas como Educação, Saúde, Mobilidade Urbana e Finanças.</p>
				</div>
			</div>
		</div>
		<div id="popup4" class="overlay">
			<div class="popup2">
				<a class="close" href="#">Voltar</a>
				<div class="content">
					<div class="descricao7"><b>Geraldo Alckmin</b></div>
					<ul>
						<li>Nascimento: 7 de novembro de 1952</li>
						<li>Nacionalidade: Brasileira</li>
						<li>Formação: Medicina</li>
						<li>Partido: PSDB</li>
						<li>Site Oficial: www.aecioneves.com.br</li>
					</ul>
					<p>&nbsp;&nbsp;&nbsp;É um médico e político brasileiro, filiado ao Partido da Social Democracia Brasileira (PSDB). Formado em medicina pela Universidade de Taubaté. Segundo a revista Época, Geraldo recebia formação cristã da prelazia católica Opus Dei. Alckmin foi governador de São Paulo por dois mandatos. Em março de 2006, renunciou ao governo paulista para concorrer à presidência na eleição do mesmo ano.  Foi considerado o segundo melhor governador do país, tendo recebido nota 7,1 (numa escala de 0 a 10).</p>
				</div>
			</div>
		</div>
		<div id="popup5" class="overlay">
			<div class="popup2">
				<a class="close" href="#">Voltar</a>
				<div class="content">
					<div class="descricao7"><b>Processos:</b></div>
					<p>&nbsp;&nbsp;&nbsp;Suas contas já foram rejeitadas pela comissão de fiscalização e controle da Assembleia legislativa paulista em 2004. Entre outros, os principais motivos encontrados estão um saldo acumulado de R$ 209 mi dos recursos do FUNDEF que jamais foram investidos na educação e cujo destino se desconhece. O governador de São Paulo, Geraldo Alckmin do PSDB, foi citado em delação premiada por executivos do grupo Odebrecht, segundo os delatores, Alckmin recebeu mais de R$ 10 milhões de reais da empreiteira via caixa dois, para as suas campanhas ao Governo do Estado de 2010 e 2014, segundo a delação homologada pelo Supremo Tribunal Federal.</p>
					<div class="descricao7"><b>Polêmicas:</b></div>
					<p>&nbsp;&nbsp;&nbsp;Geraldo Alckmin foi a público dizer que várias empresas e autarquias estaduais sustentavam sigilos de informações, embora sejam assegurados pela Lei de Acesso à Informação. Em entrevista, Geraldo Alckmin declarou que os R$43 milhões gastos com publicidade sem amparo legal seria um "erro formal". "Investigações do Ministério Público apontaram ilegalidade na intermediação de verbas de publicidade da instituição para favorecer aliados do governo" (de Geraldo Alckmin). Tentou fazer uma reforma do sistema educacional sem nenhum diálogo com a sociedade, o que terminou com escolas ocupadas e alunos agredidos por policiais militares.<br></p>
					<div class="descricao6"><b>Status Ficha Limpa: Pendente.</b></div>
				</div>
			</div>
		</div>
		<div id="popup6" class="overlay">
			<div class="popup2">
				<a class="close" href="#">Voltar</a>
				<div class="content">
					<div class="descricao7"><b>Ideologias:</b></div>
					<p>&nbsp;&nbsp;&nbsp;Apoia as reformas econômicas, reforma da previdência e a união civil homossexual. É contra ideologia de gênero, a redução da maioridade penal, a legalização das drogas e o aborto. Se diz contra aumento de impostos.</p>
					<div class="descricao7"><b>Propostas de Campanha:</b></div>
					<p>&nbsp;&nbsp;&nbsp;Educação: ampliar a formação continuada de professores do Ensino Fundamental e Médio, ampliar as escolas em tempo integral. Saúde: expandir a rede de Ambulatórios de Especialidades Médicas, ampliar o programa de reforma e modernização da rede de hospitais estaduais, criar novas Unidades para Tratamento de Dependentes de Álcool e Drogas. Segurança Pública: reforçar e ampliar o contingente policial, dar sequência à desativação das carceragens, transferindo presos para unidades prisionais. Pretende reforçar a defesa do ajuste fiscal, que considera essencial para conquistar o apoio do mercado financeiro. Gerar mais empregos e aumentar a renda.</p>
				</div>
			</div>
		</div>
		<div id="popup7" class="overlay">
			<div class="popup2">
				<a class="close" href="#">Voltar</a>
				<div class="content">
					<div class="descricao7"><b>Fernando Haddad</b></div>
					<ul>
						<li>Nascimento: 25 de janeiro de 1963</li>
						<li>Nacionalidade: Brasileira</li>
						<li>Formação: Direito</li>
						<li>Partido: PT</li>
						<li>Site Oficial: www.pt.org.br/tag/fernando-haddad</li>
					</ul>
					<p>&nbsp;&nbsp;&nbsp;É um acadêmico e político brasileiro, filiado ao Partido dos Trabalhadores (PT). Professor de Ciência Política da Universidade de São Paulo, instituição onde graduou-se em direito, fez mestrado em Economia e doutorou-se em Filosofia. Em 2012, foi eleito prefeito do município de São Paulo, vencendo no segundo turno o candidato tucano, José Serra. Em 2009 Haddad reformulou o Exame Nacional do Ensino Médio (ENEM). A mudança amplia as funções do exame e, em 2011, 59 universidades federais e privadas já utilizavam a nota do ENEM para substituir o vestibular, à semelhança dos sistemas utilizados em outros países, como o SAT norte-americano, Baccalauréat francês e o Gāo Kǎo chinês.</p>
				</div>
			</div>
		</div>
		<div id="popup8" class="overlay">
			<div class="popup2">
				<a class="close" href="#">Voltar</a>
				<div class="content">
					<div class="descricao7"><b>Processos:</b></div>
					<p>&nbsp;&nbsp;&nbsp;A Justiça de São Paulo aceitou denúncia contra o Haddad por causa da disparada na arrecadação com multas de trânsito na cidade e destinação incorreta do dinheiro. O Ministério Público ingressou com uma ação civil pública de responsabilidade por atos de improbidade administrativa contra Fernando Haddad por supostas ilegalidades no contrato de uma organização social criada para administrar o Theatro Municipal e contratar o maestro John Neschling.</p>
					<div class="descricao7"><b>Polêmicas:</b></div>
					<p>&nbsp;&nbsp;&nbsp;As principais polêmicas foi quando Fernando se tornou prefeito de São Paulo. Com mudanças radicais como: a invasão recorde de terrenos municipais. O abandono das ações para recolhimento de mendigos, sem-teto das ruas. A suspensão do Controlar e a ocupação de áreas de mananciais. A desvalorização do patrimônio histórico. Chamado por ele de “muro de arrimo”. A relevância histórica dos arcos havia sido reconhecida pelo Conpresp, o órgão municipal de proteção ao patrimônio, em 2002. De acordo com a legislação, a obra deveria ser “integralmente preservada”, mas Haddad patrocinou a sua mudança, ao estimular o Conpresp a rever a decisão anterior, no final do ano passado. Haddad considera como uma “manifestação de arte popular”.<br><br></div>
					<div class="descricao6"><b>Status Ficha Limpa: Pendente.</b></div>
				</div>
			</div>
		</div>
		<div id="popup9" class="overlay">
			<div class="popup2">
				<a class="close" href="#">Voltar</a>
				<div class="content">
					<div class="descricao7"><b>Ideologias:</b></div>
					<p>&nbsp;&nbsp;&nbsp;Apoia à reforma da previdência, desarmamento, programas de combate à intolerância na rede de ensino que focam não apenas a diversidade sexual, mas preconceitos de cor. É contra o aborto, a redução da maioridade penal.</p>
					<div class="descricao7"><b>Propostas de Campanha:</b></div>
					<p>&nbsp;&nbsp;&nbsp;Suas propostas variam entre as áreas da saúde pública, segurança, finanças, transporte público e habitação.</p><br><br><br>
				</div>
			</div>
		</div>
		<div id="popup10" class="overlay">
			<div class="popup2">
				<a class="close" href="#">Voltar</a>
				<div class="content">
					<div class="descricao7"><b>Marina Silva</b></div>
					<ul>
						<li>Nascimento: 8 de fevereiro de 1958</li>
						<li>Nacionalidade: Brasileira</li>
						<li>Formação: História</li>
						<li>Partido: Rede Sustentabilidade</li>
						<li>Site Oficial: www.marinasilva.org.br</li>
					</ul>
					<p>&nbsp;&nbsp;&nbsp;É uma historiadora, professora, psicopedagoga, ambientalista, e política brasileira filiada à Rede Sustentabilidade. Foi candidata à Presidência da República em 2010 pelo Partido Verde (PV), obtendo a terceira colocação no primeiro turno, com mais de 19 milhões dos votos. Voltou a ser candidata em 2014 pelo PSB, ficando novamente em terceira colocada com mais de 22 milhões de votos. Marina Silva, aos 42 anos, mudou de lado. A militante católica, que nos anos 80 esteve ao lado do líder seringueiro Chico Mendes na formação das comunidades eclesiais de base do Acre, converteu-se à Igreja Evangélica. Segundo ela: "Minha forte vivência na Igreja Católica foi o caminho para minha politização".</p>
				</div>
			</div>
		</div>
		<div id="popup11" class="overlay">
			<div class="popup2">
				<a class="close" href="#">Voltar</a>
				<div class="content">
					<div class="descricao7"><b>Processos:</b></div>
					<p>&nbsp;&nbsp;&nbsp;No âmbito da Operação Lava Jato, a política foi citada em delação premiada. Alegando que dinheiro de caixa 2 estava sendo usado para pagar despesas da campanha à Presidência em 2010, quando ela fazia parte do PV. Vale salientar ainda que, em um encontro com o executivo Guilherme Peirão Leal, teria sido negociado o apoio com ajuda dos supostos recursos ilícitos. Em nota, Marina se defende, dizendo que nunca usou dinheiro em "campanhas que não tivesse sido regularmente declarado". Marina Silva está entre os réus do mais recente processo judicial ligado ao acidente aéreo no Boqueirão, em Santos, ação movida pelos familiares do piloto Marcos Martins. </p>
					<div class="descricao7"><b>Polêmicas:</b></div>
					<p>&nbsp;&nbsp;&nbsp;Marina sai em defesa do direito dos gays, assunto que enfrenta forte resistência da igreja evangélica, da qual a candidata faz parte. Chama a atenção a posição de Marina a favor da criminalização da homofobia e do casamento gay. O programa de governo da candidata prevê o fim da reeleição, a adoção de um mandato de cinco anos e mudanças nos critérios de votação para cargos proporcionais, buscando eleger os mais votados. Marina também posicionou-se contra as pesquisas com células-tronco embrionárias, tendo defendido a utilização de células-tronco adultas, e contra a descriminalização do aborto, embora seja favorável à realização de um plebiscito no Brasil para tratar do tema.<br></p>
					<div class="descricao6"><b>Status Ficha Limpa: Pendente.</b></div>
				</div>
			</div>
		</div>
		<div id="popup12" class="overlay">
			<div class="popup2">
				<a class="close" href="#">Voltar</a>
				<div class="content">
					<div class="descricao7"><b>Ideologias:</b></div>
					<p>&nbsp;&nbsp;&nbsp;Marina defende a democracia, privatizações, estado laico, reforma tributária, o software livre, regularização da terceirização, desarmamento nuclear, desarmamento, liberdade religiosa, imprensa livre, reforma política, reforma agrária, a continuidade de cotas raciais em instituições, combate ao aquecimento global, liberdade religiosa além da reforma política e se mantém contra o aborto, legalização de drogas, intervenção militar, criminalização da homofobia, pena de morte, pesquisas em células-tronco embrionárias e redução da maioridade penal. Afirma que a Reforma da Previdência é necessária, mas não da forma como está sendo proposta pelo governo.</p>
					<div class="descricao7"><b>Propostas de Campanha:</b></div>
					<p>&nbsp;&nbsp;&nbsp;Marina Silva, com Eduardo Campos e com a participação de diferentes setores da sociedade, construiu um programa de governo de um Brasil mais justo, próspero e sustentável. O programa de governo da coligação da Unidos pelo Brasil foi construído com base em três princípios: aprofundar a democracia, manter e ampliar as conquistas e mudar o modelo da forma predatória que destrói a natureza para uma forma sustentável de gerar riquezas. Em sintonia com os desafios deste século, Marina Silva sabe que o crescimento é só uma ferramenta para que o país atinja seu potencial em áreas econômicas, social, ambiental e cultural garantindo verdadeiro desenvolvimento sustentável.</p>
					</div>
				</div>
			</div>
		</div>
		<div id="popup13" class="overlay">
			<div class="popup2">
				<a class="close" href="#">Voltar</a>
				<div class="content">
					<div class="descricao7"><b>Jair Bolsonaro</b></div>
					<ul>
						<li>Nascimento: 21 de março de 1955</li>
						<li>Nacionalidade: Brasileira</li>
						<li>Formação: Militar, Capitão</li>
						<li>Partido: PSC</li>
						<li>Site Oficial: www.bolsonaro.com.br</li>
					</ul>
					<p>&nbsp;&nbsp;&nbsp;Jair Messias Bolsonaro é um militar da reserva e político brasileiro.  Cumpre atualmente o seu sexto mandato na Câmara dos Deputados do Brasil, eleito pelo Partido Progressista (PP). Nas eleições gerais de 2014, foi o deputado mais votado do estado do Rio de Janeiro com apoio de 6% do eleitorado. Tornou-se conhecido nacionalmente por suas posições nacionalistas e conservadoras, por suas críticas ao comunismo e à esquerda e por várias declarações polêmicas, as quais lhe renderam cerca de 30 pedidos de cassação e duas condenações judiciais.</p>
				</div>
			</div>
		</div>
		<div id="popup14" class="overlay">
			<div class="popup2">
				<a class="close" href="#">Voltar</a>
				<div class="content">
					<div class="descricao7"><b>Processos:</b></div>
					<p>&nbsp;&nbsp;&nbsp;Sendo o mais polêmico processo movido contra o Pré-candidato à Presidência da República, o deputado Jair Bolsonaro que sofreu uma dupla derrota no Supremo Tribunal Federal. Por unanimidade, os ministros da Primeira Turma rejeitaram recursos apresentados pela defesa do parlamentar contra a abertura de dois processos – por incitação ao crime de estupro e por uma queixa-crime por injúria, apresentada pela deputada Maria do Rosário. Bolsonaro foi denunciado por usar a cota parlamentar para pagar viagens pelo país em que se apresenta como pré-candidato à Presidência em 2018.</p>
					<div class="descricao7"><b>Polêmicas:</b></div>
					<p>&nbsp;&nbsp;&nbsp;Bolsonaro foi criticado pelos meios de comunicação, por políticos e pelo Grupo Tortura Nunca Mais, sobretudo depois de ter afixado na porta de seu escritório um cartaz que dizia aos familiares dos desaparecidos da ditadura militar que "quem procura osso é cachorro". O parlamentar afirma que "violência se combate com violência e não com bandeiras de direitos humanos", como as defendidas pela Anistia Internacional, que ele afirmou ser formada por "canalhas" e "idiotas". Questionado sobre um levantamento da organização que mostrou que a polícia brasileira é a que mais mata no mundo, Bolsonaro disse: "Eu acho que essa Polícia Militar do Brasil tinha que matar é mais". Em um discurso em Campina Grande, em fevereiro de 2017, o deputado criticou o Estado laico e declamou um discurso de ódio ao dizer: "Deus acima de tudo. Não tem essa historinha de Estado laico não. O Estado é cristão e a minoria que for contra, que se mude, fui ser deputado federal para não andar de ônibus, fusca, van, e morar bem, sou preconceituoso, com muito orgulho, seria incapaz de amar um filho homossexual. Prefiro que um filho meu morra num acidente do que apareça com um bigodudo por aí, leva um couro e muda o comportamento dele".<br></p>
					<div class="descricao6"><b>Status Ficha Limpa: Pendente.</b></div>
				</div>
			</div>
		</div>
		<div id="popup15" class="overlay">
			<div class="popup2">
				<a class="close" href="#">Voltar</a>
				<div class="content">
					<div class="descricao7"><b>Ideologias:</b></div>
					<p>&nbsp;&nbsp;&nbsp;Bolsonaro condena publicamente a homossexualidade e se opõe à aplicação de leis que garantam direitos LGBT, além da alteração no registro civil para transexuais. Ele se posiciona de forma contrária à legalização das drogas e o aborto e se posicionou favoravelmente à instituição da pena de morte no Brasil para casos de crimes premeditados. Se posicionou contra a reforma da previdência O parlamentar também discorda da aplicação de ações afirmativas, como cotas raciais para afro-brasileiros.</p>
					<div class="descricao7"><b>Propostas de Campanha:</b></div>
					<p>&nbsp;&nbsp;&nbsp;Redução da maioridade penal. Política de planejamento familiar. Política de defesa da família. Revogação total do Estatuto do Desarmamento. Contra a Indústria das demarcações de terras indígenas. Contra o Exame da Ordem (OAB). Contra quaisquer tipo de cotas. Fim da ideologia nas escolas. Valoração das forças armadas. Contra o Marco civil da Internet. Contra atuais políticas de Direitos Humanos. Contra auxílio reclusão. A favor de trabalhos forçados em presídios (mesmo sendo cláusula Pétrea).</p>
				</div>
			</div>
		</div>
		<div id="popup16" class="overlay">
			<div class="popup2">
				<a class="close" href="#">Voltar</a>
				<div class="content">
					<div class="descricao7"><b>Ciro Gomes</b></div>
					<ul>
						<li>Nascimento: 6 de novembro de 1957</li>
						<li>Nacionalidade: Brasileira</li>
						<li>Formação: Direito</li>
						<li>Partido: PDT</li>
						<li>Site Oficial: www.todoscomciro.com</li>
					</ul>
					<p>&nbsp;&nbsp;&nbsp;Escritor e político brasileiro. É formado em direito pela Universidade Federal do Ceará e também cursou economia na Harvard Law School. Carrega em seu currículo político os mandatos de deputado estadual, prefeito de Fortaleza, governador do Ceará, Ministro da Fazenda (Governo Itamar Franco), Ministro da Integração Nacional (Governo Lula) e deputado federal. Ciro já concorreu à Presidência da República por duas vezes (em 1998 e em 2002), e hoje é apontado como pré-candidato pelo PDT ao cargo nas eleições de 2018.</p>
				</div>
			</div>
		</div>
		<div id="popup17" class="overlay">
			<div class="popup2">
				<a class="close" href="#">Voltar</a>
				<div class="content">
					<div class="descricao7"><b>Processos:</b></div>
					<p>&nbsp;&nbsp;&nbsp;Ciro Gomes já somou um total de 40 processos movidos contra ele pelo senador Eunício Oliveira, presidente do Senado, por Calúnia, Difamação e Injúria. E em tom irônico, acrescenta: “ainda virão muitos outros, pois continuarei dizendo o que digo sempre nas redes sociais”. Foi alvo em investigações da Polícia Federal sobre um esquema de corrupção que desviou 300 milhões de reais de prefeituras do Ceará entre 2003 e 2009. No dia 17 de maio de 2017 o Tribunal de Justiça do Distrito Federal e Territórios (TJDFT), confirmou a condenação de Ciro Gomes na ação movida pelo presidente Michel Temer por danos morais. O ex-ministro teve o recurso da ação derrotado por ter chamado o presidente de “ladrão fisiológico” em palestra na Universidade da Pensilvânia.</p>
					<div class="descricao7"><b>Polêmicas:</b></div>
					<p>&nbsp;&nbsp;&nbsp;Em março de 2017 Gomes gravou um vídeo, no qual desafiava o juiz Sérgio Moro, da 13ª Vara Federal de Curitiba, a prendê-lo. Gomes afirma que, se isso viesse a acontecer, ele receberia a "turma" de Moro "na bala". Ciro afirma que existe um conflito distributivo no País e quem está mandando com o Temer é a parte financeira do país. Além disso o candidato critica a briga entre PT e PSDB , pois na sua opinião eles deveriam se importar com o país e criar um projeto novo.<br></p>
					<div class="descricao6"><b>Status Ficha Limpa: Pendente.</b></div>
				</div>
			</div>
		</div>
		<div id="popup18" class="overlay">
			<div class="popup2">
				<a class="close" href="#">Voltar</a>
				<div class="content">
					<div class="descricao7"><b>Ideologias:</b></div>
					<p>&nbsp;&nbsp;&nbsp;Ciro critica fortemente a reforma da previdência. É contra a entrega do pré-sal a interesses estrangeiros, se declara pessoalmente contra o aborto, mas acha que quem deve decidir é a mulher. Gomes defende que o consumo de drogas continue sendo proibido, mas é contra criminalizar o usuário. Sobre a união homoafetiva Ciro disse considerar justa toda forma de amor.</p>
					<div class="descricao7"><b>Propostas de Campanha:</b></div>
					<p>&nbsp;&nbsp;&nbsp;Para Ciro, o projeto de desenvolvimento tem como objetivo superar a miséria, implantando uma cultura de tolerância e de respeito à diversidade. Para alcançá-lo, a tática é industrializar o país, com um ciclo de substituição de importações focado em três grandes blocos: O primeiro deles é o complexo nacional do petróleo e gás, daí Ciro considerar crime de lesa-pátria a entrega do pré-sal a interesses estrangeiros. Outro é o complexo industrial da saúde, para tirar o país da dependência internacional de medicamentos, equipamentos, tecnologia na área de diagnósticos. Outro é o complexo industrial da saúde, para tirar o país da dependência internacional de medicamentos, equipamentos, tecnologia na área de diagnósticos.</p>
				</div>
			</div>
		</div>
		<div id="popup19" class="overlay">
			<div class="popup">
				<a class="close" href="#">Voltar</a>
				<div class="content">
					<div class="descricao7"><b>Alvaro Dias</b></div>
					<ul>
						<li>Nascimento: 7 de dezembro de 1944</li>
						<li>Nacionalidade: Brasileira</li>
						<li>Formação: História</li>
						<li>Partido: PV</li>
						<li>Site Oficial: www.alvarodias.com.br</li>
					</ul>
					<p>&nbsp;&nbsp;&nbsp;É o autor da Proposta de Emenda Constitucional (PEC 10/2013) que pede o fim do foro privilegiado, amplamente apoiado pela sociedade civil, defendido também por juízes e promotores. Atualmente, está em seu quarto mandato no Senado, desta vez pelo PV, partido ao qual se filiou na metade de 2015. Dias disse que aceitou ser pré-candidato à Presidência e terá um posicionamento político de centro e será liberal na economia</p>
				</div>
			</div>
		</div>
		<div id="popup20" class="overlay">
			<div class="popup">
				<a class="close" href="#">Voltar</a>
				<div class="content">
					<div class="descricao7"><b>Processos:</b></div>
					<p>&nbsp;&nbsp;&nbsp;Em delação premiada, o ex-deputado federal Pedro Corrêa, que já foi condenado em processo da Operação Lava Jato, denunciou a existência uma suposta articulação contra uma CPI para apurar fraudes na Petrobras aberta no Senado em 2009. O ex-parlamentar citou ainda o senador Álvaro Dias, que era do PSDB na época, em processo por improbidade administrativa na Justiça Estadual, Álvaro Dias e outros réus, foram condenados em 2010 a devolver aos cofres públicos de Maringá o valor desviado que, corrigido, corresponde a cerca de R$ 1 bilhão. Como cabe recurso, o processo ainda tramita nas instâncias superiores.Em 2012 foi condenado pela Justiça por não ter pago pensão a uma filha fruto de relacionamento extraconjugal com funcionária pública. A ação judicial pedia a anulação da venda de cinco casas em Brasília avaliadas em R$ 16 milhões, patrimônio relativamente alto para alguém que vivia apenas da atividade política.</p>
					<div class="descricao7"><b>Polêmicas:</b></div>
					<p>&nbsp;&nbsp;&nbsp;Em 2014 Um imóvel em construção do senador Álvaro Dias na praia do Estaleirinho, em Balneário Camboriú, invadiu uma Área de Preservação Permanente (APP), que pertence à União e destruiu vegetação nativa, conforme aponta relatório produzido por um órgão da Secretaria de Segurança e Defesa Social do município. O caso foi investigado em inquérito pela 5ª Promotoria Ambiental de Balneário Camboriú. O senador negou que tenha cometido irregularidades e afirma que obteve autorização dos órgãos competentes em todas as etapas da obra.<br></p>
					<div class="descricao6"><b>Status Ficha Limpa: Pendente.</b></div>
				</div>
			</div>
		</div>
		<div id="popup21" class="overlay">
			<div class="popup">
				<a class="close" href="#">Voltar</a>
				<div class="content">
					<div class="descricao7"><b>Ideologias:</b></div>
					<p>&nbsp;&nbsp;&nbsp;Alvaro Dias defende redução da maioridade penal para 15 anos.É a favor da Lei Seca e de reformas tributárias. É contra a legalização da maconha, a ideologia de gênero,a reforma da previdência e a privatização da Petrobras.</p>
					<div class="descricao7"><b>Propostas de Campanha:</b></div>
					<p>&nbsp;&nbsp;&nbsp;Reforma tributária, na busca de um modelo que preze pelo desenvolvimento, que estimule o crescimento econômico, mas que esteja mais preocupado com uma distribuição justa de renda.</p><br><br>
				</div>
			</div>
		</div>
		<div id="popup22" class="overlay">
			<div class="popup2">
				<a class="close" href="#">Voltar</a>
				<div class="content">
					<div class="descricao7"><b>Joaquim Barbosa</b></div>
					<ul>
						<li>Nascimento: 7 de outubro de 1954</li>
						<li>Nacionalidade: Brasileira</li>
						<li>Formação: Direito</li>
						<li>Partido: Não tem</li>
						<li>Site Oficial: www.jbbg.com.br</li>
					</ul>
					<p>&nbsp;&nbsp;&nbsp;É um jurista e ex-magistrado brasileiro. Foi ministro do Supremo Tribunal Federal de 2003 a 2014 (período no qual o mensalão foi julgado). Joaquim Barbosa nasceu em Paracatu, estado de Minas Gerais. O jurista é contra o poder do Ministério Público de arquivar inquéritos administrativamente, ou de presidir inquéritos policiais. Defende  a competência para julgar processos sobre trabalho escravo seja a Justiça federal. E defende que a tese de que despachar com advogados deva ser uma exceção, e nunca uma rotina, para os ministros do Supremo. Restringe ao máximo seu atendimento a advogados de partes, por entender que essa liberalidade do juiz não pode favorecer a desigualdade.</p>
				</div>
			</div>
		</div>
		<div id="popup23" class="overlay">
			<div class="popup2">
				<a class="close" href="#">Voltar</a>
				<div class="content">
					<div class="descricao7"><b>Processos:</b></div>
					<p>&nbsp;&nbsp;&nbsp;O Tribunal Regional Federal da 1ª Região deve julgar no dia 11 de março uma ação popular contra o ministro do Supremo Tribunal Federal aposentado Joaquim Barbosa, depois que dois advogados apontaram irregularidades no registro de uma empresa que ele abriu em Miami. Segundo a ação, o ex-presidente do STF incluiu como sede da empresa o apartamento funcional onde morava, em Brasília, embora a legislação limite esses imóveis para fins exclusivamente residenciais. Em 2013 Justiça condenou Barbosa a indenizar uma jornalista em R$ 20 mil, pois o ex-ministro do STF usou de palavras ofensivas contra a mesma.</p>
					<div class="descricao7"><b>Polêmicas:</b></div>
					<p>&nbsp;&nbsp;&nbsp;Joaquim Barbosa se envolveu em sua primeira polêmica como ministro da Suprema Corte apenas um ano depois de tomar posse no tribunal. À época, durante uma sessão na qual o plenário discutia uma liminar que havia permitido o aborto de um bebê anencéfalo, ele travou uma discussão acalorada com o ministro Marco Aurélio Mello, a primeira de uma série com o segundo magistrado com mais tempo de atuação no STF. Relator do processo do mensalão, que condenou 24 réus, entre os quais o ex-chefe da Casa Civil José Dirceu, Barbosa protagonizou, ao longo dos últimos 11 anos, duros embates no plenário do STF com vários colegas de Corte, entrou em confronto com entidades de magistrados e manteve uma tensa relação com advogados e jornalistas.<br></p>
					<div class="descricao6"><b>Status Ficha Limpa: Limpo.</b></div>
				</div>
			</div>
		</div>
		<div id="popup24" class="overlay">
			<div class="popup2">
				<a class="close" href="#">Voltar</a>
				<div class="content">
					<div class="descricao7"><b>Ideologias:</b></div>
					<p>&nbsp;&nbsp;&nbsp;Barbosa se define um social democrata clássico. Que presa o capitalismo e de saber aproveitar o seu lado bom, criativo, da inventividade, do empreendedorismo sadio. Barbosa votou a favor do uso de embriões em pesquisas sobre células-tronco, desde que os estudos atendam ao bem comum, que os embriões utilizados sejam inviáveis à vida e provenientes de processos de fertilização e que haja um consentimento expresso dos genitores para o uso dos embriões nas pesquisas. Barbosa reconhece como união estável ou entidade familiar a união homoafetiva, o que estendeu aos casais do mesmo sexo os mesmos direitos e deveres das uniões heterossexuais, inclusive o direito ao casamento, o de adotar filhos e registrá-los em seus nomes.</p>
					<div class="descricao7"><b>Propostas de Campanha:</b></div>
					<p>&nbsp;&nbsp;&nbsp;Barbosa ressaltou que não defendeu a "supressão" dos partidos, mas disse ser pessoalmente favorável a candidaturas avulsas, não atreladas a siglas partidárias. Segundo ele nossa democracia peca pela falta de identificação entre eleito e eleitor, a solução seria permitir que o povo escolha diretamente em quem votar com o voto avulso sem intermediação por partidos políticos. "A sociedade brasileira está ansiosa para se ver livre desses grilhões partidários que pesam sobre o seu ombro. E isso é muito salutar", declarou Joaquim Barbosa.</p>
				</div>
			</div>
		</div>
		<div id="popup25" class="overlay">
			<div class="popup">
				<a class="close" href="#">Voltar</a>
				<div class="content">
					<div class="descricao7"><b>Aécio Neves</b></div>
					<ul>
						<li>Nascimento: 10 de março de 1960</li>
						<li>Nacionalidade: Brasileira</li>
						<li>Formação: Economia</li>
						<li>Partido: PSDB</li>
						<li>Site Oficial: www.aecioneves.com.br</li>
					</ul>
					<p>&nbsp;&nbsp;&nbsp;Aécio Neves da Cunha é um economista e político brasileiro, filiado ao Partido da Social Democracia Brasileira (PSDB). Aécio é graduado em economia pela Pontifícia Universidade Católica de Minas Gerais (PUC Minas). Em 2014, foi candidato à Presidência da República por seu partido, no segundo turno, conseguiu 48,36% dos votos,  perdendo para Dilma Rousseff. Antes disso Aécio foi eleito Deputado Federal por quatro mandatos, Presidente da Câmara dos Deputados, Governador de Minas Gerais e Senador. Em 18 de maio de 2017, com o afastamento de Aécio Neves, o deputado federal Carlos Sampaio assumiu a presidência interinamente.</p>
				</div>
			</div>
		</div>
		<div id="popup26" class="overlay">
			<div class="popup">
				<a class="close" href="#">Voltar</a>
				<div class="content">
					<div class="descricao7"><b>Processos:</b></div>
					<p>&nbsp;&nbsp;&nbsp;Em 2 de junho de 2017, o Procurador-Geral da República, Rodrigo Janot, denunciou Aécio Neves ao Supremo Tribunal Federal pelos crimes de corrupção passiva e obstrução da Justiça. Na denúncia, o Procurador-Geral da República pede que Aécio e sua irmã Andrea sejam condenados a pagar R$ 6 milhões a título de reparação por danos morais decorrentes de corrupção (R$ 4 milhões) e reparação por danos morais (R$2 milhões) causados por suas condutas. A denúncia é baseada nas investigações da operação Patmos. Eles foram citados nas delações premiadas de executivos da JBS.</p>
					<div class="descricao7"><b>Polêmicas:</b></div>
					<p>&nbsp;&nbsp;&nbsp;Em 2011, durante seu primeiro ano como senador, Aécio Neves teve a carteira de habilitação apreendida por estar com o documento vencido e por se recusar a fazer o teste do bafômetro numa blitz no Leblon, na Zona Sul do Rio de Janeiro. Em 2015, uma reportagem da Folha de S. Paulo apontou que aeronaves de Minas Gerais foram utilizadas em deslocamentos de políticos, famosos, empresários e outras pessoas de fora da administração pública a pedido de Aécio Neves, que governou o estado entre 2003 e 2010. Ao todo, foram 198 viagens durante os mandatos do político mineiro. Em 2014, durante uma entrevista ao programa Roda Viva, da TV Cultura, Aécio Neves negou ser usuário de cocaína, boato que o acompanha há anos. De acordo com o senador afastado, seus opositores espalharam essa informação na internet no intuito de atingi-lo.<br></p>
					<div class="descricao6"><b>Status Ficha Limpa: Pendente.</b></div>
				</div>
			</div>
		</div>
		<div id="popup27" class="overlay">
			<div class="popup">
				<a class="close" href="#">Voltar</a>
				<div class="content">
					<div class="descricao7"><b>Ideologias:</b></div>
					<p>&nbsp;&nbsp;&nbsp;Defende a democracia, a universalização da educação básica, dos 4 aos 17 anos, a vinculação das remunerações de professores à melhoria da aprendizagem dos alunos, com salário inicial atrativo e uma política nacional de formação de professores, cotas raciais para afro-brasileiros em instituições de ensino, união de pessoas do mesmo sexo, criminalização da homofobia, reforma tributária, reforma da previdência e redução da maioridade penal. E sendo contra aborto, intervenções militares e a legalização de drogas.</p>
					<div class="descricao7"><b>Propostas de Campanha:</b></div>
					<p>&nbsp;&nbsp;&nbsp;Em seu programa de governo, Aécio propõe aprimorar a legislação para combater os crimes de colarinho branco. Para reprimir a corrupção, o candidato propõe fazer a capacitação de agentes públicos. O programa de governo do candidato defende o retorno do chamado tripé macroeconômico: inflação no centro da meta, superávit primário e câmbio flutuante. Conduzir a política externa com base nos princípios da moderação e da independência e prevalência dos interesses brasileiros, uma reforma da segurança pública em parceria com estados e municípios e a revisão da legislação penal.</p>
				</div>
			</div>
		</div>
		<div id="popup28" class="overlay">
			<div class="popup2">
				<a class="close" href="#">Voltar</a>
				<div class="content">
				<div class="descricao7"><b>Lula</b></div>
					<ul>
						<li>Nascimento: 27 de outubro de 1945</li>
						<li>Nacionalidade: Brasileira</li>
						<li>Formação: Torneiro Mecânico</li>
						<li>Partido: PT</li>
						<li>Site Oficial: www.institutolula.org</li>
					</ul>
					<p>&nbsp;&nbsp;&nbsp;Luiz Inácio Lula da Silva, mais conhecido como Lula, Filiado ao Partido dos Trabalhadores. Em 1990, foi um dos fundadores e organizadores, junto com Fidel Castro, do Foro de São Paulo, que congrega parte dos movimentos políticos de esquerda da América Latina e do Caribe. foi o 35.º presidente do Brasil, entre 2003 e 2010. Programas sociais como o Bolsa Família e Fome Zero são marcas de seu governo. Em 16 de março de 2016, pouco mais de cinco anos depois de ter deixado a presidência da República, foi nomeado ministro-chefe da Casa Civil, no segundo mandato de sua sucessora Dilma Rousseff.</p>
				</div>
			</div>
		</div>
		<div id="popup29" class="overlay">
			<div class="popup2">
				<a class="close" href="#">Voltar</a>
				<div class="content">
					<div class="descricao7"><b>Processos:</b></div>
					<p>&nbsp;&nbsp;&nbsp;É réu em cinco ações penais, Três das quais estão no âmbito da Operação Lava Jato. Ele é o principal suspeito do maior roubo cometido no país: Lula foi considerado culpado de corrupção passiva e lavagem de dinheiro. Condenado a nove anos e seis meses de prisão. A admirável trajetória do sindicalista nordestino eleito presidente e líder da esquerda latino-americana ganha um novo e simbólico capítulo: a de primeiro ex-presidente condenado por corrupção.</p>
					<div class="descricao7"><b>Polêmicas:</b></div>
					<p>&nbsp;&nbsp;&nbsp;Segundo a investigação a construtora OAS, investigada na Operação Lava Jato, teria reservado para a família do petista um apartamento triplex no Guarujá, e pagado, ainda segundo a investigação, por uma reforma estrutural no imóvel no valor de 777 mil reais. Os promotores apuram também se a construtora usou outros apartamentos no mesmo prédio para lavar dinheiro ou beneficiar outras pessoas indevidamente. Em fevereiro do mesmo ano Sérgio Moro, juiz federal que conduz os processos da Operação Lava Jato, autorizou a abertura de inquérito para que a Polícia Federal investigue o Sítio Santa Bárbara, em Atibaia, usado pelo ex-presidente. A família de Lula usa frequentemente o sítio, que foi reformado em 2011. O MPF suspeita que as empreiteiras OAS e Odebrecht tenham realizado obras na propriedade rural como compensação por contratos com o governo. Segundo a investigação, a reforma teria custado aproximadamente 500 mil reais. De acordo com O Estado de S. Paulo, a empreiteira OAS pagou em dinheiro vivo os móveis e eletrodomésticos da cozinha e da área de serviço do sítio, e ainda segundo o jornal o total comprado para o sítio foi de 180 mil reais. Sobre o sítio em Atibaia, o Instituto Lula afirmou, em nota, que o ex-presidente Lula nunca escondeu que frequenta em dias de descanso o sítio Santa Bárbara, que pertence a amigos dele e de sua família. O instituto afirma que não há nada ilegal nestes fatos, que só eles não servem para vincular Lula a qualquer espécie de suspeita ou investigação.<br></p>
					<div class="descricao6"><b>Status Ficha Limpa: Pendente.</b></div>
				</div>
			</div>
		</div>
		<div id="popup30" class="overlay">
			<div class="popup2">
				<a class="close" href="#">Voltar</a>
				<div class="content">
					<div class="descricao7"><b>Ideologias:</b></div>
					<p>&nbsp;&nbsp;&nbsp;Apoia à reforma da previdência, reforma tributária, a união de pessoas do mesmo sexo, o aborto, o estatuto do desarmamento, a política de combate à pobreza. É contra a legalização das drogas, a redução da maioridade penal e o aborto.</p>
					<div class="descricao7"><b>Propostas de Campanha:</b></div>
					<p>&nbsp;&nbsp;&nbsp;Mesmo correndo o risco de ficar inelegível se for condenado em segunda instância. Lula avalia que o PT necessita se contrapor com mais vigor ao governo Michel Temer, lançando uma espécie de “programa nacional de emergência” para o País sair da crise. O foco de sua plataforma para 2018 vai na linha de que o País não conseguirá reduzir o número de desempregados se não ampliar o crédito para a produção e o consumo. Entre as propostas que Lula e a cúpula do PT defendem para enfrentar a crise estão a criação de um Fundo de Desenvolvimento e Emprego, reajuste de 20% nos valores do Bolsa Família e aumento real do salário mínimo, além da correção da tabela do Imposto de Renda. Além de ampliar o número de vagas no ensino superior, sendo que 40% delas serão ofertadas pelas universidades públicas. Destinar 180 mil bolsas de estudo para que os universitários carentes tenham condições de estudar. Mas, em troca, eles devem se comprometer a prestar serviços comunitários.</p>
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