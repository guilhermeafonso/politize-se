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
					<div class="step">
						<span><b>Lição 7</b></span>
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
					<div class="descricao"><i>* Com base no partido selecionado alguns candidatos podem estar em destaque.</i></div><br>
				</div>
			</div>
		</div>
			<?php
		    	$host = "localhost";
		        $user = "root";
		        $pass = "";
		        $db = "politizese";
		        $conexao = @mysql_connect($host, $user, $pass) or die(mysql_error());
		        @mysql_select_db($db) or die(mysql_error());
		        
		        $result = mysql_query("SELECT * FROM `bd` WHERE Partido = 'PSDB' and id = '$id'");

		        if (mysql_num_rows($result) > 0) {
    			while($row = mysql_fetch_assoc($result)) {
   					echo "
   					<div class=\"container\">
	   					<div class=\"row\">
	   						<div class=\"col-md-6\">
	   							<div class=\"caixa7\">
	       							<div class=\"row\">
		       							<div class=\"col-md-6\">
		       								<div class=\"rede1\">
												<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
											</div>
											<div class=\"rede2\">
												<a title=\"Sinalizado como preferido\" class=\"fa fa-bookmark fa-2x\" aria-hidden=\"true\"></a></a>
											</div>
											<img class=\"candidato\" src=\"../imagens/candidato1.png\">
											<form name=\"Candidato\" action=\"simulacao.php\" method=\"POST\">
												<input type=\"hidden\" name=\"id\" value=".$id.">
												<button class=\"botao7\" type=\"submit\" name=\"Candidato\" value=\"João Doria\">
													<div><b>Meu voto!</b></div>
												</button>
											</form>
										</div>
	   									<div class=\"col-md-6\"><br>
	   										<div class=\"descricao6\"><b>João Doria</b></div>
	   											<a class=\"link\" href=\"#popup18\">
	   												<button class=\"botao6\" type=\"button\">
	   													<b>Perfil</b>
													</button>
	   											</a>
	   											<a class=\"link\" href=\"#popup19\">
	   												<button class=\"botao6\" type=\"button\">
	   													<b>Reputação</b>
													</button>
	   											</a>
	   											<a class=\"link\" href=\"#popup20\">
	   												<button class=\"botao6\" type=\"button\">
	   													<b>Propostas</b>
													</button>
	   											</a>
											</div>
										</div>
	   								</div>
	   							</div>
	       						<div class=\"col-md-6\">
	       							<div class=\"caixa7\">
		       							<div class=\"row\">
			       							<div class=\"col-md-6\">
			       								<div class=\"rede1\">
													<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
												</div>
												<div class=\"rede2\">
													<a title=\"Sinalizado como preferido\" class=\"fa fa-bookmark fa-2x\" aria-hidden=\"true\"></a></a>
												</div>
												<img class=\"candidato\" src=\"../imagens/candidato2.png\">
												<form name=\"Candidato\" action=\"simulacao.php\" method=\"POST\">
													<input type=\"hidden\" name=\"id\" value=".$id.">
													<button class=\"botao7\" type=\"submit\" name=\"Candidato\" value=\"Geraldo Alckmin\">
														<div><b>Meu voto!</b></div>
													</button>
												</form>
											</div>
	       									<div class=\"col-md-6\"><br>
	       										<div class=\"descricao6\"><b>Geraldo Alckmin</b></div>
	       											<a class=\"link\" href=\"#popup21\">
	       												<button class=\"botao6\" type=\"button\">
	       													<b>Perfil</b>
														</button>
	       											</a>
	       											<a class=\"link\" href=\"#popup22\">
	       												<button class=\"botao6\" type=\"button\">
	       													<b>Reputação</b>
														</button>
	       											</a>
	       											<a class=\"link\" href=\"#popup23\">
	       												<button class=\"botao6\" type=\"button\">
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
					<div class=\"container\">
	   					<div class=\"row\">
	   						<div class=\"col-md-6\">
	   							<div class=\"caixa7\">
	       							<div class=\"row\">
		       							<div class=\"col-md-6\">
		       								<div class=\"rede1\">
												<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
											</div>
											<div class=\"rede2\">
												<a title=\"Sinalizado como preferido\" class=\"fa fa-bookmark fa-2x\" aria-hidden=\"true\"></a></a>
											</div>
											<img class=\"candidato\" src=\"../imagens/candidato3.png\">
											<form name=\"Candidato\" action=\"simulacao.php\" method=\"POST\">
												<input type=\"hidden\" name=\"id\" value=".$id.">
												<button class=\"botao7\" type=\"submit\" name=\"Candidato\" value=\"Aécio Neves\">
													<div><b>Meu voto!</b></div>
												</button>
											</form>
										</div>
	   									<div class=\"col-md-6\"><br>
	   										<div class=\"descricao6\"><b>Aécio Neves</b></div>
	   											<a class=\"link\" href=\"#popup42\">
	   												<button class=\"botao6\" type=\"button\">
	   													<b>Perfil</b>
													</button>
	   											</a>
	   											<a class=\"link\" href=\"#popup43\">
	   												<button class=\"botao6\" type=\"button\">
	   													<b>Reputação</b>
													</button>
	   											</a>
	   											<a class=\"link\" href=\"#popup44\">
	   												<button class=\"botao6\" type=\"button\">
	   													<b>Propostas</b>
													</button>
	   											</a>
											</div>
										</div>
	   								</div>
	   							</div>
	       						<div class=\"col-md-6\">
	       							<div class=\"caixa8\">
		       							<div class=\"row\">
			       							<div class=\"col-md-6\">
			       								<div class=\"rede1\">
													<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
												</div>
												<img class=\"candidato\" src=\"../imagens/candidato4.png\">
												<form name=\"Candidato\" action=\"simulacao.php\" method=\"POST\">
													<input type=\"hidden\" name=\"id\" value=".$id.">
													<button class=\"botao7\" type=\"submit\" name=\"Candidato\" value=\"Lula\">
														<div><b>Meu voto!</b></div>
													</button>
												</form>
											</div>
	       									<div class=\"col-md-6\"><br>
	       										<div class=\"descricao6\"><b>Lula</b></div>
	       											<a class=\"link\" href=\"#popup45\">
	       												<button class=\"botao6\" type=\"button\">
	       													<b>Perfil</b>
														</button>
	       											</a>
	       											<a class=\"link\" href=\"#popup46\">
	       												<button class=\"botao6\" type=\"button\">
	       													<b>Reputação</b>
														</button>
	       											</a>
	       											<a class=\"link\" href=\"#popup47\">
	       												<button class=\"botao6\" type=\"button\">
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
					<div class=\"container\">
	   					<div class=\"row\">
	   						<div class=\"col-md-6\">
	   							<div class=\"caixa8\">
	       							<div class=\"row\">
		       							<div class=\"col-md-6\">
		       								<div class=\"rede1\">
												<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
											</div>
											<img class=\"candidato\" src=\"../imagens/candidato5.gif\">
											<form name=\"Candidato\" action=\"simulacao.php\" method=\"POST\">
												<input type=\"hidden\" name=\"id\" value=".$id.">
												<button class=\"botao7\" type=\"submit\" name=\"Candidato\" value=\"Fernando Haddad\">
													<div><b>Meu voto!</b></div>
												</button>
											</form>
										</div>
	   									<div class=\"col-md-6\"><br>
	   										<div class=\"descricao6\"><b>Fernando Haddad</b></div>
	   											<a class=\"link\" href=\"#popup24\">
	   												<button class=\"botao6\" type=\"button\">
	   													<b>Perfil</b>
													</button>
	   											</a>
	   											<a class=\"link\" href=\"#popup25\">
	   												<button class=\"botao6\" type=\"button\">
	   													<b>Reputação</b>
													</button>
	   											</a>
	   											<a class=\"link\" href=\"#popup26\">
	   												<button class=\"botao6\" type=\"button\">
	   													<b>Propostas</b>
													</button>
	   											</a>
											</div>
										</div>
	   								</div>
	   							</div>
	       						<div class=\"col-md-6\">
	       							<div class=\"caixa8\">
		       							<div class=\"row\">
			       							<div class=\"col-md-6\">
			       								<div class=\"rede1\">
													<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
												</div>
												<img class=\"candidato\" src=\"../imagens/candidato6.png\">
												<form name=\"Candidato\" action=\"simulacao.php\" method=\"POST\">
													<input type=\"hidden\" name=\"id\" value=".$id.">
													<button class=\"botao7\" type=\"submit\" name=\"Candidato\" value=\"Marina Silva\">
														<div><b>Meu voto!</b></div>
													</button>
												</form>
											</div>
	       									<div class=\"col-md-6\"><br>
	       										<div class=\"descricao6\"><b>Marina Silva</b></div>
	       											<a class=\"link\" href=\"#popup27\">
	       												<button class=\"botao6\" type=\"button\">
	       													<b>Perfil</b>
														</button>
	       											</a>
	       											<a class=\"link\" href=\"#popup28\">
	       												<button class=\"botao6\" type=\"button\">
	       													<b>Reputação</b>
														</button>
	       											</a>
	       											<a class=\"link\" href=\"#popup29\">
	       												<button class=\"botao6\" type=\"button\">
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
					<div class=\"container\">
	   					<div class=\"row\">
	   						<div class=\"col-md-6\">
	   							<div class=\"caixa8\">
	       							<div class=\"row\">
		       							<div class=\"col-md-6\">
		       								<div class=\"rede1\">
												<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
											</div>
											<img class=\"candidato\" src=\"../imagens/candidato7.png\">
											<form name=\"Candidato\" action=\"simulacao.php\" method=\"POST\">
												<input type=\"hidden\" name=\"id\" value=".$id.">
												<button class=\"botao7\" type=\"submit\" name=\"Candidato\" value=\"Jair Bolsonaro\">
													<div><b>Meu voto!</b></div>
												</button>
											</form>
										</div>
	   									<div class=\"col-md-6\"><br>
	   										<div class=\"descricao6\"><b>Jair Bolsonaro</b></div>
	   											<a class=\"link\" href=\"#popup30\">
	   												<button class=\"botao6\" type=\"button\">
	   													<b>Perfil</b>
													</button>
	   											</a>
	   											<a class=\"link\" href=\"#popup31\">
	   												<button class=\"botao6\" type=\"button\">
	   													<b>Reputação</b>
													</button>
	   											</a>
	   											<a class=\"link\" href=\"#popup32\">
	   												<button class=\"botao6\" type=\"button\">
	   													<b>Propostas</b>
													</button>
	   											</a>
											</div>
										</div>
	   								</div>
	   							</div>
	       						<div class=\"col-md-6\">
	       							<div class=\"caixa8\">
		       							<div class=\"row\">
			       							<div class=\"col-md-6\">
												<div class=\"rede1\">
													<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
												</div>
												<img class=\"candidato\" src=\"../imagens/candidato8.png\">
												<form name=\"Candidato\" action=\"simulacao.php\" method=\"POST\">
													<input type=\"hidden\" name=\"id\" value=".$id.">
													<button class=\"botao7\" type=\"submit\" name=\"Candidato\" value=\"Ciro Gomes\">
														<div><b>Meu voto!</b></div>
													</button>
												</form>
											</div>
	       									<div class=\"col-md-6\"><br>
	       										<div class=\"descricao6\"><b>Ciro Gomes</b></div>
	       											<a class=\"link\" href=\"#popup33\">
	       												<button class=\"botao6\" type=\"button\">
	       													<b>Perfil</b>
														</button>
	       											</a>
	       											<a class=\"link\" href=\"#popup34\">
	       												<button class=\"botao6\" type=\"button\">
	       													<b>Reputação</b>
														</button>
	       											</a>
	       											<a class=\"link\" href=\"#popup35\">
	       												<button class=\"botao6\" type=\"button\">
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
					<div class=\"container\">
	   					<div class=\"row\">
	   						<div class=\"col-md-6\">
	   							<div class=\"caixa8\">
	       							<div class=\"row\">
		       							<div class=\"col-md-6\">
		       								<div class=\"rede1\">
												<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
											</div>
											<img class=\"candidato\" src=\"../imagens/candidato9.png\">
											<form name=\"Candidato\" action=\"simulacao.php\" method=\"POST\">
												<input type=\"hidden\" name=\"id\" value=".$id.">
												<button class=\"botao7\" type=\"submit\" name=\"Candidato\" value=\"Alvaro Dias\">
													<div><b>Meu voto!</b></div>
												</button>
											</form>
										</div>
	   									<div class=\"col-md-6\"><br>
	   										<div class=\"descricao6\"><b>Alvaro Dias</b></div>
	   											<a class=\"link\" href=\"#popup36\">
	   												<button class=\"botao6\" type=\"button\">
	   													<b>Perfil</b>
													</button>
	   											</a>
	   											<a class=\"link\" href=\"#popup37\">
	   												<button class=\"botao6\" type=\"button\">
	   													<b>Reputação</b>
													</button>
	   											</a>
	   											<a class=\"link\" href=\"#popup38\">
	   												<button class=\"botao6\" type=\"button\">
	   													<b>Propostas</b>
													</button>
	   											</a>
											</div>
										</div>
	   								</div>
	   							</div>
	       						<div class=\"col-md-6\">
	       							<div class=\"caixa8\">
		       							<div class=\"row\">
			       							<div class=\"col-md-6\">
			       								<div class=\"rede1\">
													<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
												</div>
												<img class=\"candidato\" src=\"../imagens/candidato10.png\">
												<form name=\"Candidato\" action=\"simulacao.php\" method=\"POST\">
													<input type=\"hidden\" name=\"id\" value=".$id.">
													<button class=\"botao7\" type=\"submit\" name=\"Candidato\" value=\"Joaquim Barbosa\">
														<div><b>Meu voto!</b></div>
													</button>
												</form>
											</div>
	       									<div class=\"col-md-6\"><br>
	       										<div class=\"descricao6\"><b>Joaquim Barbosa</b></div>
	       											<a class=\"link\" href=\"#popup39\">
	       												<button class=\"botao6\" type=\"button\">
	       													<b>Perfil</b>
														</button>
	       											</a>
	       											<a class=\"link\" href=\"#popup40\">
	       												<button class=\"botao6\" type=\"button\">
	       													<b>Reputação</b>
														</button>
	       											</a>
	       											<a class=\"link\" href=\"#popup41\">
	       												<button class=\"botao6\" type=\"button\">
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
					<div id=\"popup17\" class=\"overlay\">
										<div class=\"popup\">
											<a class=\"close\" href=\"#\">Voltar</a>
											<div class=\"content\">
												<br><div class=\"descricao5\"><b>Ajuda:</b></div>
												<p>Para saber mais sobre o candidato clique em \"Perfil\"<br>
												Para conhecer a ficha criminal/declarações polêmicas clique em \"Reputação\"<br>
												Para ter acesso as propostas de canpanha do candidato clique em \"Propostas\"<br>
												Para sequir em diante clique em \"Meu voto!\"</p><br>
											</div>
										</div>
									</div>
					<div id=\"popup18\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup19\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup20\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup21\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup22\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup23\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup24\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup25\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup26\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup27\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup28\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup29\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup30\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup31\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup32\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup33\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup34\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup35\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup36\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup37\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup38\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup39\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup40\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup41\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup42\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup43\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup44\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup45\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup46\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup47\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>";
				}
			} 
			$result = mysql_query("SELECT * FROM `bd` WHERE Partido = 'PT' and id = '$id'");

		        if (mysql_num_rows($result) > 0) {
    			while($row = mysql_fetch_assoc($result)) {
   					echo "
   					<div class=\"container\">
	   					<div class=\"row\">
	   						<div class=\"col-md-6\">
	   							<div class=\"caixa7\">
	       							<div class=\"row\">
		       							<div class=\"col-md-6\">
		       								<div class=\"rede1\">
												<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
											</div>
											<div class=\"rede2\">
												<a title=\"Sinalizado como preferido\" class=\"fa fa-bookmark fa-2x\" aria-hidden=\"true\"></a></a>
											</div>
											<img class=\"candidato\" src=\"../imagens/candidato4.png\">
												<form name=\"Candidato\" action=\"simulacao.php\" method=\"POST\">
													<input type=\"hidden\" name=\"id\" value=".$id.">
													<button class=\"botao7\" type=\"submit\" name=\"Candidato\" value=\"Lula\">
														<div><b>Meu voto!</b></div>
													</button>
												</form>
											</div>
	       									<div class=\"col-md-6\"><br>
	       										<div class=\"descricao6\"><b>Lula</b></div>
	   											<a class=\"link\" href=\"#popup18\">
	   												<button class=\"botao6\" type=\"button\">
	   													<b>Perfil</b>
													</button>
	   											</a>
	   											<a class=\"link\" href=\"#popup19\">
	   												<button class=\"botao6\" type=\"button\">
	   													<b>Reputação</b>
													</button>
	   											</a>
	   											<a class=\"link\" href=\"#popup20\">
	   												<button class=\"botao6\" type=\"button\">
	   													<b>Propostas</b>
													</button>
	   											</a>
											</div>
										</div>
	   								</div>
	   							</div>
	       						<div class=\"col-md-6\">
	       							<div class=\"caixa7\">
		       							<div class=\"row\">
			       							<div class=\"col-md-6\">
			       								<div class=\"rede1\">
													<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
												</div>
												<div class=\"rede2\">
													<a title=\"Sinalizado como preferido\" class=\"fa fa-bookmark fa-2x\" aria-hidden=\"true\"></a></a>
												</div>
												<img class=\"candidato\" src=\"../imagens/candidato5.gif\">
												<form name=\"Candidato\" action=\"simulacao.php\" method=\"POST\">
													<input type=\"hidden\" name=\"id\" value=".$id.">
														<button class=\"botao7\" type=\"submit\" name=\"Candidato\" value=\"Fernando Haddad\">
															<div><b>Meu voto!</b></div>
														</button>
														</form>
													</div>
			   									<div class=\"col-md-6\"><br>
			   										<div class=\"descricao6\"><b>Fernando Haddad</b></div>
	       											<a class=\"link\" href=\"#popup21\">
	       												<button class=\"botao6\" type=\"button\">
	       													<b>Perfil</b>
														</button>
	       											</a>
	       											<a class=\"link\" href=\"#popup22\">
	       												<button class=\"botao6\" type=\"button\">
	       													<b>Reputação</b>
														</button>
	       											</a>
	       											<a class=\"link\" href=\"#popup23\">
	       												<button class=\"botao6\" type=\"button\">
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
					<div class=\"container\">
	   					<div class=\"row\">
	   						<div class=\"col-md-6\">
	   							<div class=\"caixa8\">
	       							<div class=\"row\">
		       							<div class=\"col-md-6\">
		       								<div class=\"rede1\">
												<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
											</div>
											<img class=\"candidato\" src=\"../imagens/candidato1.png\">
											<form name=\"Candidato\" action=\"simulacao.php\" method=\"POST\">
												<input type=\"hidden\" name=\"id\" value=".$id.">
												<button class=\"botao7\" type=\"submit\" name=\"Candidato\" value=\"João Doria\">
													<div><b>Meu voto!</b></div>
												</button>
											</form>
										</div>
	   									<div class=\"col-md-6\"><br>
	   										<div class=\"descricao6\"><b>João Doria</b></div>
	   											<a class=\"link\" href=\"#popup42\">
	   												<button class=\"botao6\" type=\"button\">
	   													<b>Perfil</b>
													</button>
	   											</a>
	   											<a class=\"link\" href=\"#popup43\">
	   												<button class=\"botao6\" type=\"button\">
	   													<b>Reputação</b>
													</button>
	   											</a>
	   											<a class=\"link\" href=\"#popup44\">
	   												<button class=\"botao6\" type=\"button\">
	   													<b>Propostas</b>
													</button>
	   											</a>
											</div>
										</div>
	   								</div>
	   							</div>
	       						<div class=\"col-md-6\">
	       							<div class=\"caixa8\">
		       							<div class=\"row\">
			       							<div class=\"col-md-6\">
			       								<div class=\"rede1\">
													<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
												</div>
												<img class=\"candidato\" src=\"../imagens/candidato2.png\">
												<form name=\"Candidato\" action=\"simulacao.php\" method=\"POST\">
													<input type=\"hidden\" name=\"id\" value=".$id.">
													<button class=\"botao7\" type=\"submit\" name=\"Candidato\" value=\"Geraldo Alckmin\">
														<div><b>Meu voto!</b></div>
													</button>
												</form>
											</div>
	       									<div class=\"col-md-6\"><br>
	       										<div class=\"descricao6\"><b>Geraldo Alckmin</b></div>
	       											<a class=\"link\" href=\"#popup45\">
	       												<button class=\"botao6\" type=\"button\">
	       													<b>Perfil</b>
														</button>
	       											</a>
	       											<a class=\"link\" href=\"#popup46\">
	       												<button class=\"botao6\" type=\"button\">
	       													<b>Reputação</b>
														</button>
	       											</a>
	       											<a class=\"link\" href=\"#popup47\">
	       												<button class=\"botao6\" type=\"button\">
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
					<div class=\"container\">
	   					<div class=\"row\">
	   						<div class=\"col-md-6\">
	   							<div class=\"caixa8\">
	       							<div class=\"row\">
		       							<div class=\"col-md-6\">
		       								<div class=\"rede1\">
												<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
											</div>
											<img class=\"candidato\" src=\"../imagens/candidato3.png\">
											<form name=\"Candidato\" action=\"simulacao.php\" method=\"POST\">
												<input type=\"hidden\" name=\"id\" value=".$id.">
												<button class=\"botao7\" type=\"submit\" name=\"Candidato\" value=\"Aécio Neves\">
													<div><b>Meu voto!</b></div>
												</button>
											</form>
										</div>
	   									<div class=\"col-md-6\"><br>
	   										<div class=\"descricao6\"><b>Aécio Neves</b></div>
	   											<a class=\"link\" href=\"#popup24\">
	   												<button class=\"botao6\" type=\"button\">
	   													<b>Perfil</b>
													</button>
	   											</a>
	   											<a class=\"link\" href=\"#popup25\">
	   												<button class=\"botao6\" type=\"button\">
	   													<b>Reputação</b>
													</button>
	   											</a>
	   											<a class=\"link\" href=\"#popup26\">
	   												<button class=\"botao6\" type=\"button\">
	   													<b>Propostas</b>
													</button>
	   											</a>
											</div>
										</div>
	   								</div>
	   							</div>
	       						<div class=\"col-md-6\">
	       							<div class=\"caixa8\">
		       							<div class=\"row\">
			       							<div class=\"col-md-6\">
			       								<div class=\"rede1\">
													<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
												</div>
												<img class=\"candidato\" src=\"../imagens/candidato6.png\">
												<form name=\"Candidato\" action=\"simulacao.php\" method=\"POST\">
													<input type=\"hidden\" name=\"id\" value=".$id.">
													<button class=\"botao7\" type=\"submit\" name=\"Candidato\" value=\"Marina Silva\">
														<div><b>Meu voto!</b></div>
													</button>
												</form>
											</div>
	       									<div class=\"col-md-6\"><br>
	       										<div class=\"descricao6\"><b>Marina Silva</b></div>
	       											<a class=\"link\" href=\"#popup27\">
	       												<button class=\"botao6\" type=\"button\">
	       													<b>Perfil</b>
														</button>
	       											</a>
	       											<a class=\"link\" href=\"#popup28\">
	       												<button class=\"botao6\" type=\"button\">
	       													<b>Reputação</b>
														</button>
	       											</a>
	       											<a class=\"link\" href=\"#popup29\">
	       												<button class=\"botao6\" type=\"button\">
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
					<div class=\"container\">
	   					<div class=\"row\">
	   						<div class=\"col-md-6\">
	   							<div class=\"caixa8\">
	       							<div class=\"row\">
		       							<div class=\"col-md-6\">
		       								<div class=\"rede1\">
												<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
											</div>
											<img class=\"candidato\" src=\"../imagens/candidato7.png\">
											<form name=\"Candidato\" action=\"simulacao.php\" method=\"POST\">
												<input type=\"hidden\" name=\"id\" value=".$id.">
												<button class=\"botao7\" type=\"submit\" name=\"Candidato\" value=\"Jair Bolsonaro\">
													<div><b>Meu voto!</b></div>
												</button>
											</form>
										</div>
	   									<div class=\"col-md-6\"><br>
	   										<div class=\"descricao6\"><b>Jair Bolsonaro</b></div>
	   											<a class=\"link\" href=\"#popup30\">
	   												<button class=\"botao6\" type=\"button\">
	   													<b>Perfil</b>
													</button>
	   											</a>
	   											<a class=\"link\" href=\"#popup31\">
	   												<button class=\"botao6\" type=\"button\">
	   													<b>Reputação</b>
													</button>
	   											</a>
	   											<a class=\"link\" href=\"#popup32\">
	   												<button class=\"botao6\" type=\"button\">
	   													<b>Propostas</b>
													</button>
	   											</a>
											</div>
										</div>
	   								</div>
	   							</div>
	       						<div class=\"col-md-6\">
	       							<div class=\"caixa8\">
		       							<div class=\"row\">
			       							<div class=\"col-md-6\">
												<div class=\"rede1\">
													<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
												</div>
												<img class=\"candidato\" src=\"../imagens/candidato8.png\">
												<form name=\"Candidato\" action=\"simulacao.php\" method=\"POST\">
													<input type=\"hidden\" name=\"id\" value=".$id.">
													<button class=\"botao7\" type=\"submit\" name=\"Candidato\" value=\"Ciro Gomes\">
														<div><b>Meu voto!</b></div>
													</button>
												</form>
											</div>
	       									<div class=\"col-md-6\"><br>
	       										<div class=\"descricao6\"><b>Ciro Gomes</b></div>
	       											<a class=\"link\" href=\"#popup33\">
	       												<button class=\"botao6\" type=\"button\">
	       													<b>Perfil</b>
														</button>
	       											</a>
	       											<a class=\"link\" href=\"#popup34\">
	       												<button class=\"botao6\" type=\"button\">
	       													<b>Reputação</b>
														</button>
	       											</a>
	       											<a class=\"link\" href=\"#popup35\">
	       												<button class=\"botao6\" type=\"button\">
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
					<div class=\"container\">
	   					<div class=\"row\">
	   						<div class=\"col-md-6\">
	   							<div class=\"caixa8\">
	       							<div class=\"row\">
		       							<div class=\"col-md-6\">
		       								<div class=\"rede1\">
												<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
											</div>
											<img class=\"candidato\" src=\"../imagens/candidato9.png\">
											<form name=\"Candidato\" action=\"simulacao.php\" method=\"POST\">
												<input type=\"hidden\" name=\"id\" value=".$id.">
												<button class=\"botao7\" type=\"submit\" name=\"Candidato\" value=\"Alvaro Dias\">
													<div><b>Meu voto!</b></div>
												</button>
											</form>
										</div>
	   									<div class=\"col-md-6\"><br>
	   										<div class=\"descricao6\"><b>Alvaro Dias</b></div>
	   											<a class=\"link\" href=\"#popup36\">
	   												<button class=\"botao6\" type=\"button\">
	   													<b>Perfil</b>
													</button>
	   											</a>
	   											<a class=\"link\" href=\"#popup37\">
	   												<button class=\"botao6\" type=\"button\">
	   													<b>Reputação</b>
													</button>
	   											</a>
	   											<a class=\"link\" href=\"#popup38\">
	   												<button class=\"botao6\" type=\"button\">
	   													<b>Propostas</b>
													</button>
	   											</a>
											</div>
										</div>
	   								</div>
	   							</div>
	       						<div class=\"col-md-6\">
	       							<div class=\"caixa8\">
		       							<div class=\"row\">
			       							<div class=\"col-md-6\">
			       								<div class=\"rede1\">
													<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
												</div>
												<img class=\"candidato\" src=\"../imagens/candidato10.png\">
												<form name=\"Candidato\" action=\"simulacao.php\" method=\"POST\">
													<input type=\"hidden\" name=\"id\" value=".$id.">
													<button class=\"botao7\" type=\"submit\" name=\"Candidato\" value=\"Joaquim Barbosa\">
														<div><b>Meu voto!</b></div>
													</button>
												</form>
											</div>
	       									<div class=\"col-md-6\"><br>
	       										<div class=\"descricao6\"><b>Joaquim Barbosa</b></div>
	       											<a class=\"link\" href=\"#popup39\">
	       												<button class=\"botao6\" type=\"button\">
	       													<b>Perfil</b>
														</button>
	       											</a>
	       											<a class=\"link\" href=\"#popup40\">
	       												<button class=\"botao6\" type=\"button\">
	       													<b>Reputação</b>
														</button>
	       											</a>
	       											<a class=\"link\" href=\"#popup41\">
	       												<button class=\"botao6\" type=\"button\">
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
					<div id=\"popup17\" class=\"overlay\">
										<div class=\"popup\">
											<a class=\"close\" href=\"#\">Voltar</a>
											<div class=\"content\">
												<br><div class=\"descricao5\"><b>Ajuda:</b></div>
												<p>Para saber mais sobre o candidato clique em \"Perfil\"<br>
												Para conhecer a ficha criminal/declarações polêmicas clique em \"Reputação\"<br>
												Para ter acesso as propostas de canpanha do candidato clique em \"Propostas\"<br>
												Para sequir em diante clique em \"Meu voto!\"</p><br>
											</div>
										</div>
									</div>
					<div id=\"popup18\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup19\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup20\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup21\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup22\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup23\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup24\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup25\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup26\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup27\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup28\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup29\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup30\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup31\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup32\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup33\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup34\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup35\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup36\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup37\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup38\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup39\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup40\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup41\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup42\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup43\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup44\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup45\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup46\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup47\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>";
				}
			}
			$result = mysql_query("SELECT * FROM `bd` WHERE Partido = 'PSC' and id = '$id'");

		        if (mysql_num_rows($result) > 0) {
    			while($row = mysql_fetch_assoc($result)) {
   					echo "
   					<div class=\"container\">
	   					<div class=\"row\">
	   						<div class=\"col-md-6\">
	   							<div class=\"caixa7\">
	       							<div class=\"row\">
		       							<div class=\"col-md-6\">
		       								<div class=\"rede1\">
												<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
											</div>
											<div class=\"rede2\">
												<a title=\"Sinalizado como preferido\" class=\"fa fa-bookmark fa-2x\" aria-hidden=\"true\"></a></a>
											</div>
											<img class=\"candidato\" src=\"../imagens/candidato7.png\">
												<form name=\"Candidato\" action=\"simulacao.php\" method=\"POST\">
													<input type=\"hidden\" name=\"id\" value=".$id.">
													<button class=\"botao7\" type=\"submit\" name=\"Candidato\" value=\"Jair Bolsonaro\">
														<div><b>Meu voto!</b></div>
													</button>
												</form>
											</div>
		   									<div class=\"col-md-6\"><br>
		   										<div class=\"descricao6\"><b>Jair Bolsonaro</b></div>
	   											<a class=\"link\" href=\"#popup18\">
	   												<button class=\"botao6\" type=\"button\">
	   													<b>Perfil</b>
													</button>
	   											</a>
	   											<a class=\"link\" href=\"#popup19\">
	   												<button class=\"botao6\" type=\"button\">
	   													<b>Reputação</b>
													</button>
	   											</a>
	   											<a class=\"link\" href=\"#popup20\">
	   												<button class=\"botao6\" type=\"button\">
	   													<b>Propostas</b>
													</button>
	   											</a>
											</div>
										</div>
	   								</div>
	   							</div>
	       						<div class=\"col-md-6\">
	       							<div class=\"caixa8\">
		       							<div class=\"row\">
			       							<div class=\"col-md-6\">
			       								<div class=\"rede1\">
													<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
												</div>
												<img class=\"candidato\" src=\"../imagens/candidato4.png\">
													<form name=\"Candidato\" action=\"simulacao.php\" method=\"POST\">
														<input type=\"hidden\" name=\"id\" value=".$id.">
														<button class=\"botao7\" type=\"submit\" name=\"Candidato\" value=\"Lula\">
															<div><b>Meu voto!</b></div>
														</button>
													</form>
												</div>
		       									<div class=\"col-md-6\"><br>
		       										<div class=\"descricao6\"><b>Lula</b></div>
	       											<a class=\"link\" href=\"#popup21\">
	       												<button class=\"botao6\" type=\"button\">
	       													<b>Perfil</b>
														</button>
	       											</a>
	       											<a class=\"link\" href=\"#popup22\">
	       												<button class=\"botao6\" type=\"button\">
	       													<b>Reputação</b>
														</button>
	       											</a>
	       											<a class=\"link\" href=\"#popup23\">
	       												<button class=\"botao6\" type=\"button\">
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
					<div class=\"container\">
	   					<div class=\"row\">
	   						<div class=\"col-md-6\">
	   							<div class=\"caixa8\">
	       							<div class=\"row\">
		       							<div class=\"col-md-6\">
		       								<div class=\"rede1\">
												<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
											</div>
											<img class=\"candidato\" src=\"../imagens/candidato5.gif\">
												<form name=\"Candidato\" action=\"simulacao.php\" method=\"POST\">
													<input type=\"hidden\" name=\"id\" value=".$id.">
													<button class=\"botao7\" type=\"submit\" name=\"Candidato\" value=\"Fernando Haddad\">
														<div><b>Meu voto!</b></div>
													</button>
													</form>
												</div>
			   									<div class=\"col-md-6\"><br>
			   										<div class=\"descricao6\"><b>Fernando Haddad</b></div>
	   											<a class=\"link\" href=\"#popup42\">
	   												<button class=\"botao6\" type=\"button\">
	   													<b>Perfil</b>
													</button>
	   											</a>
	   											<a class=\"link\" href=\"#popup43\">
	   												<button class=\"botao6\" type=\"button\">
	   													<b>Reputação</b>
													</button>
	   											</a>
	   											<a class=\"link\" href=\"#popup44\">
	   												<button class=\"botao6\" type=\"button\">
	   													<b>Propostas</b>
													</button>
	   											</a>
											</div>
										</div>
	   								</div>
	   							</div>
	       						<div class=\"col-md-6\">
	       							<div class=\"caixa8\">
		       							<div class=\"row\">
			       							<div class=\"col-md-6\">
			       								<div class=\"rede1\">
													<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
												</div>
												<img class=\"candidato\" src=\"../imagens/candidato1.png\">
												<form name=\"Candidato\" action=\"simulacao.php\" method=\"POST\">
													<input type=\"hidden\" name=\"id\" value=".$id.">
													<button class=\"botao7\" type=\"submit\" name=\"Candidato\" value=\"João Doria\">
														<div><b>Meu voto!</b></div>
													</button>
												</form>
											</div>
		   									<div class=\"col-md-6\"><br>
		   										<div class=\"descricao6\"><b>João Doria</b></div>
	       											<a class=\"link\" href=\"#popup45\">
	       												<button class=\"botao6\" type=\"button\">
	       													<b>Perfil</b>
														</button>
	       											</a>
	       											<a class=\"link\" href=\"#popup46\">
	       												<button class=\"botao6\" type=\"button\">
	       													<b>Reputação</b>
														</button>
	       											</a>
	       											<a class=\"link\" href=\"#popup47\">
	       												<button class=\"botao6\" type=\"button\">
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
					<div class=\"container\">
	   					<div class=\"row\">
	   						<div class=\"col-md-6\">
	   							<div class=\"caixa8\">
	       							<div class=\"row\">
		       							<div class=\"col-md-6\">
		       								<div class=\"rede1\">
												<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
											</div>
											<img class=\"candidato\" src=\"../imagens/candidato2.png\">
											<form name=\"Candidato\" action=\"simulacao.php\" method=\"POST\">
												<input type=\"hidden\" name=\"id\" value=".$id.">
												<button class=\"botao7\" type=\"submit\" name=\"Candidato\" value=\"Geraldo Alckmin\">
													<div><b>Meu voto!</b></div>
												</button>
											</form>
										</div>
	       									<div class=\"col-md-6\"><br>
	       										<div class=\"descricao6\"><b>Geraldo Alckmin</b></div>
	   											<a class=\"link\" href=\"#popup24\">
	   												<button class=\"botao6\" type=\"button\">
	   													<b>Perfil</b>
													</button>
	   											</a>
	   											<a class=\"link\" href=\"#popup25\">
	   												<button class=\"botao6\" type=\"button\">
	   													<b>Reputação</b>
													</button>
	   											</a>
	   											<a class=\"link\" href=\"#popup26\">
	   												<button class=\"botao6\" type=\"button\">
	   													<b>Propostas</b>
													</button>
	   											</a>
											</div>
										</div>
	   								</div>
	   							</div>
	       						<div class=\"col-md-6\">
	       							<div class=\"caixa8\">
		       							<div class=\"row\">
			       							<div class=\"col-md-6\">
			       								<div class=\"rede1\">
													<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
												</div>
												<img class=\"candidato\" src=\"../imagens/candidato3.png\">
												<form name=\"Candidato\" action=\"simulacao.php\" method=\"POST\">
													<input type=\"hidden\" name=\"id\" value=".$id.">
													<button class=\"botao7\" type=\"submit\" name=\"Candidato\" value=\"Aécio Neves\">
														<div><b>Meu voto!</b></div>
													</button>
												</form>
											</div>
		   									<div class=\"col-md-6\"><br>
		   										<div class=\"descricao6\"><b>Aécio Neves</b></div>
	       											<a class=\"link\" href=\"#popup27\">
	       												<button class=\"botao6\" type=\"button\">
	       													<b>Perfil</b>
														</button>
	       											</a>
	       											<a class=\"link\" href=\"#popup28\">
	       												<button class=\"botao6\" type=\"button\">
	       													<b>Reputação</b>
														</button>
	       											</a>
	       											<a class=\"link\" href=\"#popup29\">
	       												<button class=\"botao6\" type=\"button\">
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
					<div class=\"container\">
	   					<div class=\"row\">
	   						<div class=\"col-md-6\">
	   							<div class=\"caixa8\">
	       							<div class=\"row\">
		       							<div class=\"col-md-6\">
		       								<div class=\"rede1\">
												<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
											</div>
											<img class=\"candidato\" src=\"../imagens/candidato6.png\">
												<form name=\"Candidato\" action=\"simulacao.php\" method=\"POST\">
													<input type=\"hidden\" name=\"id\" value=".$id.">
													<button class=\"botao7\" type=\"submit\" name=\"Candidato\" value=\"Marina Silva\">
														<div><b>Meu voto!</b></div>
													</button>
												</form>
											</div>
	       									<div class=\"col-md-6\"><br>
	       										<div class=\"descricao6\"><b>Marina Silva</b></div>
	   											<a class=\"link\" href=\"#popup30\">
	   												<button class=\"botao6\" type=\"button\">
	   													<b>Perfil</b>
													</button>
	   											</a>
	   											<a class=\"link\" href=\"#popup31\">
	   												<button class=\"botao6\" type=\"button\">
	   													<b>Reputação</b>
													</button>
	   											</a>
	   											<a class=\"link\" href=\"#popup32\">
	   												<button class=\"botao6\" type=\"button\">
	   													<b>Propostas</b>
													</button>
	   											</a>
											</div>
										</div>
	   								</div>
	   							</div>
	       						<div class=\"col-md-6\">
	       							<div class=\"caixa8\">
		       							<div class=\"row\">
			       							<div class=\"col-md-6\">
												<div class=\"rede1\">
													<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
												</div>
												<img class=\"candidato\" src=\"../imagens/candidato8.png\">
												<form name=\"Candidato\" action=\"simulacao.php\" method=\"POST\">
													<input type=\"hidden\" name=\"id\" value=".$id.">
													<button class=\"botao7\" type=\"submit\" name=\"Candidato\" value=\"Ciro Gomes\">
														<div><b>Meu voto!</b></div>
													</button>
												</form>
											</div>
	       									<div class=\"col-md-6\"><br>
	       										<div class=\"descricao6\"><b>Ciro Gomes</b></div>
	       											<a class=\"link\" href=\"#popup33\">
	       												<button class=\"botao6\" type=\"button\">
	       													<b>Perfil</b>
														</button>
	       											</a>
	       											<a class=\"link\" href=\"#popup34\">
	       												<button class=\"botao6\" type=\"button\">
	       													<b>Reputação</b>
														</button>
	       											</a>
	       											<a class=\"link\" href=\"#popup35\">
	       												<button class=\"botao6\" type=\"button\">
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
					<div class=\"container\">
	   					<div class=\"row\">
	   						<div class=\"col-md-6\">
	   							<div class=\"caixa8\">
	       							<div class=\"row\">
		       							<div class=\"col-md-6\">
		       								<div class=\"rede1\">
												<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
											</div>
											<img class=\"candidato\" src=\"../imagens/candidato9.png\">
											<form name=\"Candidato\" action=\"simulacao.php\" method=\"POST\">
												<input type=\"hidden\" name=\"id\" value=".$id.">
												<button class=\"botao7\" type=\"submit\" name=\"Candidato\" value=\"Alvaro Dias\">
													<div><b>Meu voto!</b></div>
												</button>
											</form>
										</div>
	   									<div class=\"col-md-6\"><br>
	   										<div class=\"descricao6\"><b>Alvaro Dias</b></div>
	   											<a class=\"link\" href=\"#popup36\">
	   												<button class=\"botao6\" type=\"button\">
	   													<b>Perfil</b>
													</button>
	   											</a>
	   											<a class=\"link\" href=\"#popup37\">
	   												<button class=\"botao6\" type=\"button\">
	   													<b>Reputação</b>
													</button>
	   											</a>
	   											<a class=\"link\" href=\"#popup38\">
	   												<button class=\"botao6\" type=\"button\">
	   													<b>Propostas</b>
													</button>
	   											</a>
											</div>
										</div>
	   								</div>
	   							</div>
	       						<div class=\"col-md-6\">
	       							<div class=\"caixa8\">
		       							<div class=\"row\">
			       							<div class=\"col-md-6\">
			       								<div class=\"rede1\">
													<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
												</div>
												<img class=\"candidato\" src=\"../imagens/candidato10.png\">
												<form name=\"Candidato\" action=\"simulacao.php\" method=\"POST\">
													<input type=\"hidden\" name=\"id\" value=".$id.">
													<button class=\"botao7\" type=\"submit\" name=\"Candidato\" value=\"Joaquim Barbosa\">
														<div><b>Meu voto!</b></div>
													</button>
												</form>
											</div>
	       									<div class=\"col-md-6\"><br>
	       										<div class=\"descricao6\"><b>Joaquim Barbosa</b></div>
	       											<a class=\"link\" href=\"#popup39\">
	       												<button class=\"botao6\" type=\"button\">
	       													<b>Perfil</b>
														</button>
	       											</a>
	       											<a class=\"link\" href=\"#popup40\">
	       												<button class=\"botao6\" type=\"button\">
	       													<b>Reputação</b>
														</button>
	       											</a>
	       											<a class=\"link\" href=\"#popup41\">
	       												<button class=\"botao6\" type=\"button\">
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
					<div id=\"popup17\" class=\"overlay\">
										<div class=\"popup\">
											<a class=\"close\" href=\"#\">Voltar</a>
											<div class=\"content\">
												<br><div class=\"descricao5\"><b>Ajuda:</b></div>
												<p>Para saber mais sobre o candidato clique em \"Perfil\"<br>
												Para conhecer a ficha criminal/declarações polêmicas clique em \"Reputação\"<br>
												Para ter acesso as propostas de canpanha do candidato clique em \"Propostas\"<br>
												Para sequir em diante clique em \"Meu voto!\"</p><br>
											</div>
										</div>
									</div>
					<div id=\"popup18\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup19\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup20\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup21\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup22\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup23\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup24\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup25\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup26\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup27\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup28\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup29\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup30\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup31\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup32\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup33\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup34\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup35\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup36\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup37\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup38\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup39\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup40\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup41\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup42\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup43\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup44\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup45\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup46\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup47\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>";
				}
			}
			$result = mysql_query("SELECT * FROM `bd` WHERE Partido = 'PDT' and id = '$id'");

		        if (mysql_num_rows($result) > 0) {
    			while($row = mysql_fetch_assoc($result)) {
   					echo "
   					<div class=\"container\">
	   					<div class=\"row\">
	   						<div class=\"col-md-6\">
	   							<div class=\"caixa7\">
	       							<div class=\"row\">
		       							<div class=\"col-md-6\">
		       								<div class=\"rede1\">
												<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
											</div>
											<div class=\"rede2\">
												<a title=\"Sinalizado como preferido\" class=\"fa fa-bookmark fa-2x\" aria-hidden=\"true\"></a></a>
											</div>
											<img class=\"candidato\" src=\"../imagens/candidato8.png\">
												<form name=\"Candidato\" action=\"simulacao.php\" method=\"POST\">
													<input type=\"hidden\" name=\"id\" value=".$id.">
													<button class=\"botao7\" type=\"submit\" name=\"Candidato\" value=\"Ciro Gomes\">
														<div><b>Meu voto!</b></div>
													</button>
												</form>
											</div>
	       									<div class=\"col-md-6\"><br>
	       										<div class=\"descricao6\"><b>Ciro Gomes</b></div>
	   											<a class=\"link\" href=\"#popup18\">
	   												<button class=\"botao6\" type=\"button\">
	   													<b>Perfil</b>
													</button>
	   											</a>
	   											<a class=\"link\" href=\"#popup19\">
	   												<button class=\"botao6\" type=\"button\">
	   													<b>Reputação</b>
													</button>
	   											</a>
	   											<a class=\"link\" href=\"#popup20\">
	   												<button class=\"botao6\" type=\"button\">
	   													<b>Propostas</b>
													</button>
	   											</a>
											</div>
										</div>
	   								</div>
	   							</div>
	       						<div class=\"col-md-6\">
	       							<div class=\"caixa8\">
		       							<div class=\"row\">
			       							<div class=\"col-md-6\">
			       								<div class=\"rede1\">
													<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
												</div>
												<img class=\"candidato\" src=\"../imagens/candidato4.png\">
													<form name=\"Candidato\" action=\"simulacao.php\" method=\"POST\">
														<input type=\"hidden\" name=\"id\" value=".$id.">
														<button class=\"botao7\" type=\"submit\" name=\"Candidato\" value=\"Lula\">
															<div><b>Meu voto!</b></div>
														</button>
													</form>
												</div>
		       									<div class=\"col-md-6\"><br>
		       										<div class=\"descricao6\"><b>Lula</b></div>
	       											<a class=\"link\" href=\"#popup21\">
	       												<button class=\"botao6\" type=\"button\">
	       													<b>Perfil</b>
														</button>
	       											</a>
	       											<a class=\"link\" href=\"#popup22\">
	       												<button class=\"botao6\" type=\"button\">
	       													<b>Reputação</b>
														</button>
	       											</a>
	       											<a class=\"link\" href=\"#popup23\">
	       												<button class=\"botao6\" type=\"button\">
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
					<div class=\"container\">
	   					<div class=\"row\">
	   						<div class=\"col-md-6\">
	   							<div class=\"caixa8\">
	       							<div class=\"row\">
		       							<div class=\"col-md-6\">
		       								<div class=\"rede1\">
												<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
											</div>
											<img class=\"candidato\" src=\"../imagens/candidato5.gif\">
												<form name=\"Candidato\" action=\"simulacao.php\" method=\"POST\">
													<input type=\"hidden\" name=\"id\" value=".$id.">
													<button class=\"botao7\" type=\"submit\" name=\"Candidato\" value=\"Fernando Haddad\">
														<div><b>Meu voto!</b></div>
													</button>
													</form>
												</div>
			   									<div class=\"col-md-6\"><br>
			   										<div class=\"descricao6\"><b>Fernando Haddad</b></div>
	   											<a class=\"link\" href=\"#popup42\">
	   												<button class=\"botao6\" type=\"button\">
	   													<b>Perfil</b>
													</button>
	   											</a>
	   											<a class=\"link\" href=\"#popup43\">
	   												<button class=\"botao6\" type=\"button\">
	   													<b>Reputação</b>
													</button>
	   											</a>
	   											<a class=\"link\" href=\"#popup44\">
	   												<button class=\"botao6\" type=\"button\">
	   													<b>Propostas</b>
													</button>
	   											</a>
											</div>
										</div>
	   								</div>
	   							</div>
	       						<div class=\"col-md-6\">
	       							<div class=\"caixa8\">
		       							<div class=\"row\">
			       							<div class=\"col-md-6\">
			       								<div class=\"rede1\">
													<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
												</div>
												<img class=\"candidato\" src=\"../imagens/candidato1.png\">
												<form name=\"Candidato\" action=\"simulacao.php\" method=\"POST\">
													<input type=\"hidden\" name=\"id\" value=".$id.">
													<button class=\"botao7\" type=\"submit\" name=\"Candidato\" value=\"João Doria\">
														<div><b>Meu voto!</b></div>
													</button>
												</form>
											</div>
		   									<div class=\"col-md-6\"><br>
		   										<div class=\"descricao6\"><b>João Doria</b></div>
	       											<a class=\"link\" href=\"#popup45\">
	       												<button class=\"botao6\" type=\"button\">
	       													<b>Perfil</b>
														</button>
	       											</a>
	       											<a class=\"link\" href=\"#popup46\">
	       												<button class=\"botao6\" type=\"button\">
	       													<b>Reputação</b>
														</button>
	       											</a>
	       											<a class=\"link\" href=\"#popup47\">
	       												<button class=\"botao6\" type=\"button\">
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
					<div class=\"container\">
	   					<div class=\"row\">
	   						<div class=\"col-md-6\">
	   							<div class=\"caixa8\">
	       							<div class=\"row\">
		       							<div class=\"col-md-6\">
		       								<div class=\"rede1\">
												<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
											</div>
											<img class=\"candidato\" src=\"../imagens/candidato2.png\">
											<form name=\"Candidato\" action=\"simulacao.php\" method=\"POST\">
												<input type=\"hidden\" name=\"id\" value=".$id.">
												<button class=\"botao7\" type=\"submit\" name=\"Candidato\" value=\"Geraldo Alckmin\">
													<div><b>Meu voto!</b></div>
												</button>
											</form>
										</div>
	       									<div class=\"col-md-6\"><br>
	       										<div class=\"descricao6\"><b>Geraldo Alckmin</b></div>
	   											<a class=\"link\" href=\"#popup24\">
	   												<button class=\"botao6\" type=\"button\">
	   													<b>Perfil</b>
													</button>
	   											</a>
	   											<a class=\"link\" href=\"#popup25\">
	   												<button class=\"botao6\" type=\"button\">
	   													<b>Reputação</b>
													</button>
	   											</a>
	   											<a class=\"link\" href=\"#popup26\">
	   												<button class=\"botao6\" type=\"button\">
	   													<b>Propostas</b>
													</button>
	   											</a>
											</div>
										</div>
	   								</div>
	   							</div>
	       						<div class=\"col-md-6\">
	       							<div class=\"caixa8\">
		       							<div class=\"row\">
			       							<div class=\"col-md-6\">
			       								<div class=\"rede1\">
													<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
												</div>
												<img class=\"candidato\" src=\"../imagens/candidato3.png\">
												<form name=\"Candidato\" action=\"simulacao.php\" method=\"POST\">
													<input type=\"hidden\" name=\"id\" value=".$id.">
													<button class=\"botao7\" type=\"submit\" name=\"Candidato\" value=\"Aécio Neves\">
														<div><b>Meu voto!</b></div>
													</button>
												</form>
											</div>
		   									<div class=\"col-md-6\"><br>
		   										<div class=\"descricao6\"><b>Aécio Neves</b></div>
	       											<a class=\"link\" href=\"#popup27\">
	       												<button class=\"botao6\" type=\"button\">
	       													<b>Perfil</b>
														</button>
	       											</a>
	       											<a class=\"link\" href=\"#popup28\">
	       												<button class=\"botao6\" type=\"button\">
	       													<b>Reputação</b>
														</button>
	       											</a>
	       											<a class=\"link\" href=\"#popup29\">
	       												<button class=\"botao6\" type=\"button\">
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
					<div class=\"container\">
	   					<div class=\"row\">
	   						<div class=\"col-md-6\">
	   							<div class=\"caixa8\">
	       							<div class=\"row\">
		       							<div class=\"col-md-6\">
		       								<div class=\"rede1\">
												<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
											</div>
											<img class=\"candidato\" src=\"../imagens/candidato6.png\">
												<form name=\"Candidato\" action=\"simulacao.php\" method=\"POST\">
													<input type=\"hidden\" name=\"id\" value=".$id.">
													<button class=\"botao7\" type=\"submit\" name=\"Candidato\" value=\"Marina Silva\">
														<div><b>Meu voto!</b></div>
													</button>
												</form>
											</div>
	       									<div class=\"col-md-6\"><br>
	       										<div class=\"descricao6\"><b>Marina Silva</b></div>
	   											<a class=\"link\" href=\"#popup30\">
	   												<button class=\"botao6\" type=\"button\">
	   													<b>Perfil</b>
													</button>
	   											</a>
	   											<a class=\"link\" href=\"#popup31\">
	   												<button class=\"botao6\" type=\"button\">
	   													<b>Reputação</b>
													</button>
	   											</a>
	   											<a class=\"link\" href=\"#popup32\">
	   												<button class=\"botao6\" type=\"button\">
	   													<b>Propostas</b>
													</button>
	   											</a>
											</div>
										</div>
	   								</div>
	   							</div>
	       						<div class=\"col-md-6\">
	       							<div class=\"caixa8\">
		       							<div class=\"row\">
			       							<div class=\"col-md-6\">
												<div class=\"rede1\">
													<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
												</div>
												<img class=\"candidato\" src=\"../imagens/candidato7.png\">
												<form name=\"Candidato\" action=\"simulacao.php\" method=\"POST\">
													<input type=\"hidden\" name=\"id\" value=".$id.">
													<button class=\"botao7\" type=\"submit\" name=\"Candidato\" value=\"Jair Bolsonaro\">
														<div><b>Meu voto!</b></div>
													</button>
												</form>
											</div>
		   									<div class=\"col-md-6\"><br>
		   										<div class=\"descricao6\"><b>Jair Bolsonaro</b></div>
	       											<a class=\"link\" href=\"#popup33\">
	       												<button class=\"botao6\" type=\"button\">
	       													<b>Perfil</b>
														</button>
	       											</a>
	       											<a class=\"link\" href=\"#popup34\">
	       												<button class=\"botao6\" type=\"button\">
	       													<b>Reputação</b>
														</button>
	       											</a>
	       											<a class=\"link\" href=\"#popup35\">
	       												<button class=\"botao6\" type=\"button\">
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
					<div class=\"container\">
	   					<div class=\"row\">
	   						<div class=\"col-md-6\">
	   							<div class=\"caixa8\">
	       							<div class=\"row\">
		       							<div class=\"col-md-6\">
		       								<div class=\"rede1\">
												<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
											</div>
											<img class=\"candidato\" src=\"../imagens/candidato9.png\">
											<form name=\"Candidato\" action=\"simulacao.php\" method=\"POST\">
												<input type=\"hidden\" name=\"id\" value=".$id.">
												<button class=\"botao7\" type=\"submit\" name=\"Candidato\" value=\"Alvaro Dias\">
													<div><b>Meu voto!</b></div>
												</button>
											</form>
										</div>
	   									<div class=\"col-md-6\"><br>
	   										<div class=\"descricao6\"><b>Alvaro Dias</b></div>
	   											<a class=\"link\" href=\"#popup36\">
	   												<button class=\"botao6\" type=\"button\">
	   													<b>Perfil</b>
													</button>
	   											</a>
	   											<a class=\"link\" href=\"#popup37\">
	   												<button class=\"botao6\" type=\"button\">
	   													<b>Reputação</b>
													</button>
	   											</a>
	   											<a class=\"link\" href=\"#popup38\">
	   												<button class=\"botao6\" type=\"button\">
	   													<b>Propostas</b>
													</button>
	   											</a>
											</div>
										</div>
	   								</div>
	   							</div>
	       						<div class=\"col-md-6\">
	       							<div class=\"caixa8\">
		       							<div class=\"row\">
			       							<div class=\"col-md-6\">
			       								<div class=\"rede1\">
													<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
												</div>
												<img class=\"candidato\" src=\"../imagens/candidato10.png\">
												<form name=\"Candidato\" action=\"simulacao.php\" method=\"POST\">
													<input type=\"hidden\" name=\"id\" value=".$id.">
													<button class=\"botao7\" type=\"submit\" name=\"Candidato\" value=\"Joaquim Barbosa\">
														<div><b>Meu voto!</b></div>
													</button>
												</form>
											</div>
	       									<div class=\"col-md-6\"><br>
	       										<div class=\"descricao6\"><b>Joaquim Barbosa</b></div>
	       											<a class=\"link\" href=\"#popup39\">
	       												<button class=\"botao6\" type=\"button\">
	       													<b>Perfil</b>
														</button>
	       											</a>
	       											<a class=\"link\" href=\"#popup40\">
	       												<button class=\"botao6\" type=\"button\">
	       													<b>Reputação</b>
														</button>
	       											</a>
	       											<a class=\"link\" href=\"#popup41\">
	       												<button class=\"botao6\" type=\"button\">
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
					<div id=\"popup17\" class=\"overlay\">
										<div class=\"popup\">
											<a class=\"close\" href=\"#\">Voltar</a>
											<div class=\"content\">
												<br><div class=\"descricao5\"><b>Ajuda:</b></div>
												<p>Para saber mais sobre o candidato clique em \"Perfil\"<br>
												Para conhecer a ficha criminal/declarações polêmicas clique em \"Reputação\"<br>
												Para ter acesso as propostas de canpanha do candidato clique em \"Propostas\"<br>
												Para sequir em diante clique em \"Meu voto!\"</p><br>
											</div>
										</div>
									</div>
					<div id=\"popup18\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup19\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup20\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup21\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup22\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup23\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup24\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup25\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup26\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup27\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup28\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup29\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup30\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup31\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup32\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup33\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup34\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup35\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup36\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup37\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup38\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup39\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup40\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup41\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup42\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup43\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup44\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup45\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup46\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup47\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>";
				}
			}
			$result = mysql_query("SELECT * FROM `bd` WHERE id = '$id'");

		        if (mysql_num_rows($result) > 0) {
    			while($row = mysql_fetch_assoc($result)) {
   					echo "
   					<div class=\"container\">
	   					<div class=\"row\">
	   						<div class=\"col-md-6\">
	   							<div class=\"caixa8\">
	       							<div class=\"row\">
		       							<div class=\"col-md-6\">
		       								<div class=\"rede1\">
												<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
											</div>
											<img class=\"candidato\" src=\"../imagens/candidato1.png\">
											<form name=\"Candidato\" action=\"simulacao.php\" method=\"POST\">
												<input type=\"hidden\" name=\"id\" value=".$id.">
												<button class=\"botao7\" type=\"submit\" name=\"Candidato\" value=\"João Doria\">
													<div><b>Meu voto!</b></div>
												</button>
											</form>
										</div>
	   									<div class=\"col-md-6\"><br>
	   										<div class=\"descricao6\"><b>João Doria</b></div>
	   											<a class=\"link\" href=\"#popup18\">
	   												<button class=\"botao6\" type=\"button\">
	   													<b>Perfil</b>
													</button>
	   											</a>
	   											<a class=\"link\" href=\"#popup19\">
	   												<button class=\"botao6\" type=\"button\">
	   													<b>Reputação</b>
													</button>
	   											</a>
	   											<a class=\"link\" href=\"#popup20\">
	   												<button class=\"botao6\" type=\"button\">
	   													<b>Propostas</b>
													</button>
	   											</a>
											</div>
										</div>
	   								</div>
	   							</div>
	       						<div class=\"col-md-6\">
	       							<div class=\"caixa8\">
		       							<div class=\"row\">
			       							<div class=\"col-md-6\">
			       								<div class=\"rede1\">
													<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
												</div>
												<img class=\"candidato\" src=\"../imagens/candidato2.png\">
												<form name=\"Candidato\" action=\"simulacao.php\" method=\"POST\">
													<input type=\"hidden\" name=\"id\" value=".$id.">
													<button class=\"botao7\" type=\"submit\" name=\"Candidato\" value=\"Geraldo Alckmin\">
														<div><b>Meu voto!</b></div>
													</button>
												</form>
											</div>
	       									<div class=\"col-md-6\"><br>
	       										<div class=\"descricao6\"><b>Geraldo Alckmin</b></div>
	       											<a class=\"link\" href=\"#popup21\">
	       												<button class=\"botao6\" type=\"button\">
	       													<b>Perfil</b>
														</button>
	       											</a>
	       											<a class=\"link\" href=\"#popup22\">
	       												<button class=\"botao6\" type=\"button\">
	       													<b>Reputação</b>
														</button>
	       											</a>
	       											<a class=\"link\" href=\"#popup23\">
	       												<button class=\"botao6\" type=\"button\">
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
					<div class=\"container\">
	   					<div class=\"row\">
	   						<div class=\"col-md-6\">
	   							<div class=\"caixa8\">
	       							<div class=\"row\">
		       							<div class=\"col-md-6\">
		       								<div class=\"rede1\">
												<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
											</div>
											<img class=\"candidato\" src=\"../imagens/candidato3.png\">
											<form name=\"Candidato\" action=\"simulacao.php\" method=\"POST\">
												<input type=\"hidden\" name=\"id\" value=".$id.">
												<button class=\"botao7\" type=\"submit\" name=\"Candidato\" value=\"Aécio Neves\">
													<div><b>Meu voto!</b></div>
												</button>
											</form>
										</div>
	   									<div class=\"col-md-6\"><br>
	   										<div class=\"descricao6\"><b>Aécio Neves</b></div>
	   											<a class=\"link\" href=\"#popup42\">
	   												<button class=\"botao6\" type=\"button\">
	   													<b>Perfil</b>
													</button>
	   											</a>
	   											<a class=\"link\" href=\"#popup43\">
	   												<button class=\"botao6\" type=\"button\">
	   													<b>Reputação</b>
													</button>
	   											</a>
	   											<a class=\"link\" href=\"#popup44\">
	   												<button class=\"botao6\" type=\"button\">
	   													<b>Propostas</b>
													</button>
	   											</a>
											</div>
										</div>
	   								</div>
	   							</div>
	       						<div class=\"col-md-6\">
	       							<div class=\"caixa8\">
		       							<div class=\"row\">
			       							<div class=\"col-md-6\">
			       								<div class=\"rede1\">
													<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
												</div>
												<img class=\"candidato\" src=\"../imagens/candidato4.png\">
												<form name=\"Candidato\" action=\"simulacao.php\" method=\"POST\">
													<input type=\"hidden\" name=\"id\" value=".$id.">
													<button class=\"botao7\" type=\"submit\" name=\"Candidato\" value=\"Lula\">
														<div><b>Meu voto!</b></div>
													</button>
												</form>
											</div>
	       									<div class=\"col-md-6\"><br>
	       										<div class=\"descricao6\"><b>Lula</b></div>
	       											<a class=\"link\" href=\"#popup45\">
	       												<button class=\"botao6\" type=\"button\">
	       													<b>Perfil</b>
														</button>
	       											</a>
	       											<a class=\"link\" href=\"#popup46\">
	       												<button class=\"botao6\" type=\"button\">
	       													<b>Reputação</b>
														</button>
	       											</a>
	       											<a class=\"link\" href=\"#popup47\">
	       												<button class=\"botao6\" type=\"button\">
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
					<div class=\"container\">
	   					<div class=\"row\">
	   						<div class=\"col-md-6\">
	   							<div class=\"caixa8\">
	       							<div class=\"row\">
		       							<div class=\"col-md-6\">
		       								<div class=\"rede1\">
												<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
											</div>
											<img class=\"candidato\" src=\"../imagens/candidato5.gif\">
											<form name=\"Candidato\" action=\"simulacao.php\" method=\"POST\">
												<input type=\"hidden\" name=\"id\" value=".$id.">
												<button class=\"botao7\" type=\"submit\" name=\"Candidato\" value=\"Fernando Haddad\">
													<div><b>Meu voto!</b></div>
												</button>
											</form>
										</div>
	   									<div class=\"col-md-6\"><br>
	   										<div class=\"descricao6\"><b>Fernando Haddad</b></div>
	   											<a class=\"link\" href=\"#popup24\">
	   												<button class=\"botao6\" type=\"button\">
	   													<b>Perfil</b>
													</button>
	   											</a>
	   											<a class=\"link\" href=\"#popup25\">
	   												<button class=\"botao6\" type=\"button\">
	   													<b>Reputação</b>
													</button>
	   											</a>
	   											<a class=\"link\" href=\"#popup26\">
	   												<button class=\"botao6\" type=\"button\">
	   													<b>Propostas</b>
													</button>
	   											</a>
											</div>
										</div>
	   								</div>
	   							</div>
	       						<div class=\"col-md-6\">
	       							<div class=\"caixa8\">
		       							<div class=\"row\">
			       							<div class=\"col-md-6\">
			       								<div class=\"rede1\">
													<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
												</div>
												<img class=\"candidato\" src=\"../imagens/candidato6.png\">
												<form name=\"Candidato\" action=\"simulacao.php\" method=\"POST\">
													<input type=\"hidden\" name=\"id\" value=".$id.">
													<button class=\"botao7\" type=\"submit\" name=\"Candidato\" value=\"Marina Silva\">
														<div><b>Meu voto!</b></div>
													</button>
												</form>
											</div>
	       									<div class=\"col-md-6\"><br>
	       										<div class=\"descricao6\"><b>Marina Silva</b></div>
	       											<a class=\"link\" href=\"#popup27\">
	       												<button class=\"botao6\" type=\"button\">
	       													<b>Perfil</b>
														</button>
	       											</a>
	       											<a class=\"link\" href=\"#popup28\">
	       												<button class=\"botao6\" type=\"button\">
	       													<b>Reputação</b>
														</button>
	       											</a>
	       											<a class=\"link\" href=\"#popup29\">
	       												<button class=\"botao6\" type=\"button\">
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
					<div class=\"container\">
	   					<div class=\"row\">
	   						<div class=\"col-md-6\">
	   							<div class=\"caixa8\">
	       							<div class=\"row\">
		       							<div class=\"col-md-6\">
		       								<div class=\"rede1\">
												<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
											</div>
											<img class=\"candidato\" src=\"../imagens/candidato7.png\">
											<form name=\"Candidato\" action=\"simulacao.php\" method=\"POST\">
												<input type=\"hidden\" name=\"id\" value=".$id.">
												<button class=\"botao7\" type=\"submit\" name=\"Candidato\" value=\"Jair Bolsonaro\">
													<div><b>Meu voto!</b></div>
												</button>
											</form>
										</div>
	   									<div class=\"col-md-6\"><br>
	   										<div class=\"descricao6\"><b>Jair Bolsonaro</b></div>
	   											<a class=\"link\" href=\"#popup30\">
	   												<button class=\"botao6\" type=\"button\">
	   													<b>Perfil</b>
													</button>
	   											</a>
	   											<a class=\"link\" href=\"#popup31\">
	   												<button class=\"botao6\" type=\"button\">
	   													<b>Reputação</b>
													</button>
	   											</a>
	   											<a class=\"link\" href=\"#popup32\">
	   												<button class=\"botao6\" type=\"button\">
	   													<b>Propostas</b>
													</button>
	   											</a>
											</div>
										</div>
	   								</div>
	   							</div>
	       						<div class=\"col-md-6\">
	       							<div class=\"caixa8\">
		       							<div class=\"row\">
			       							<div class=\"col-md-6\">
												<div class=\"rede1\">
													<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
												</div>
												<img class=\"candidato\" src=\"../imagens/candidato8.png\">
												<form name=\"Candidato\" action=\"simulacao.php\" method=\"POST\">
													<input type=\"hidden\" name=\"id\" value=".$id.">
													<button class=\"botao7\" type=\"submit\" name=\"Candidato\" value=\"Ciro Gomes\">
														<div><b>Meu voto!</b></div>
													</button>
												</form>
											</div>
	       									<div class=\"col-md-6\"><br>
	       										<div class=\"descricao6\"><b>Ciro Gomes</b></div>
	       											<a class=\"link\" href=\"#popup33\">
	       												<button class=\"botao6\" type=\"button\">
	       													<b>Perfil</b>
														</button>
	       											</a>
	       											<a class=\"link\" href=\"#popup34\">
	       												<button class=\"botao6\" type=\"button\">
	       													<b>Reputação</b>
														</button>
	       											</a>
	       											<a class=\"link\" href=\"#popup35\">
	       												<button class=\"botao6\" type=\"button\">
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
					<div class=\"container\">
	   					<div class=\"row\">
	   						<div class=\"col-md-6\">
	   							<div class=\"caixa8\">
	       							<div class=\"row\">
		       							<div class=\"col-md-6\">
		       								<div class=\"rede1\">
												<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
											</div>
											<img class=\"candidato\" src=\"../imagens/candidato9.png\">
											<form name=\"Candidato\" action=\"simulacao.php\" method=\"POST\">
												<input type=\"hidden\" name=\"id\" value=".$id.">
												<button class=\"botao7\" type=\"submit\" name=\"Candidato\" value=\"Alvaro Dias\">
													<div><b>Meu voto!</b></div>
												</button>
											</form>
										</div>
	   									<div class=\"col-md-6\"><br>
	   										<div class=\"descricao6\"><b>Alvaro Dias</b></div>
	   											<a class=\"link\" href=\"#popup36\">
	   												<button class=\"botao6\" type=\"button\">
	   													<b>Perfil</b>
													</button>
	   											</a>
	   											<a class=\"link\" href=\"#popup37\">
	   												<button class=\"botao6\" type=\"button\">
	   													<b>Reputação</b>
													</button>
	   											</a>
	   											<a class=\"link\" href=\"#popup38\">
	   												<button class=\"botao6\" type=\"button\">
	   													<b>Propostas</b>
													</button>
	   											</a>
											</div>
										</div>
	   								</div>
	   							</div>
	       						<div class=\"col-md-6\">
	       							<div class=\"caixa8\">
		       							<div class=\"row\">
			       							<div class=\"col-md-6\">
			       								<div class=\"rede1\">
													<a href=\"#popup17\" title=\"Ajuda\" class=\"fa fa-question fa-2x\" aria-hidden=\"true\"></a>
												</div>
												<img class=\"candidato\" src=\"../imagens/candidato10.png\">
												<form name=\"Candidato\" action=\"simulacao.php\" method=\"POST\">
													<input type=\"hidden\" name=\"id\" value=".$id.">
													<button class=\"botao7\" type=\"submit\" name=\"Candidato\" value=\"Joaquim Barbosa\">
														<div><b>Meu voto!</b></div>
													</button>
												</form>
											</div>
	       									<div class=\"col-md-6\"><br>
	       										<div class=\"descricao6\"><b>Joaquim Barbosa</b></div>
	       											<a class=\"link\" href=\"#popup39\">
	       												<button class=\"botao6\" type=\"button\">
	       													<b>Perfil</b>
														</button>
	       											</a>
	       											<a class=\"link\" href=\"#popup40\">
	       												<button class=\"botao6\" type=\"button\">
	       													<b>Reputação</b>
														</button>
	       											</a>
	       											<a class=\"link\" href=\"#popup41\">
	       												<button class=\"botao6\" type=\"button\">
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
					<div id=\"popup17\" class=\"overlay\">
										<div class=\"popup\">
											<a class=\"close\" href=\"#\">Voltar</a>
											<div class=\"content\">
												<br><div class=\"descricao5\"><b>Ajuda:</b></div>
												<p>Para saber mais sobre o candidato clique em \"Perfil\"<br>
												Para conhecer a ficha criminal/declarações polêmicas clique em \"Reputação\"<br>
												Para ter acesso as propostas de canpanha do candidato clique em \"Propostas\"<br>
												Para sequir em diante clique em \"Meu voto!\"</p><br>
											</div>
										</div>
									</div>
					<div id=\"popup18\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup19\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup20\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup21\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup22\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup23\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup24\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup25\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup26\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup27\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup28\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup29\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup30\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup31\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup32\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup33\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup34\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup35\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup36\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup37\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup38\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup39\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup40\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup41\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup42\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup43\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup44\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup45\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup46\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							</div>
						</div>
					</div>
					<div id=\"popup47\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
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