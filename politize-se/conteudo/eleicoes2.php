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
						<div class=\"popup3\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
								<div class=\"descricao7\"><b>João Doria</b></div>
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
					<div id=\"popup19\" class=\"overlay\">
						<div class=\"popup3\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
								<div class=\"descricao7\"><b>Processos:</b></div>
								<p>&nbsp;&nbsp;&nbsp;Doria responde a 5 ações na Justiça Eleitoral; 3 delas pedem inelegibilidade. Uma das ações, além de acusar Doria, também acusa o governador Geraldo Alckmin (PSDB) de ter usado a máquina estadual a favor de Doria, seu afilhado político. Em outra ação, Doria omitiu e subvalorizou diversos bens em sua declaração à Receita Federal que chegou assim a “apenas” R$ 179,6 milhões. Doria recebeu cheque de R$ 20 mil de empresa investigada na Lava Jato.</p>
								<div class=\"descricao7\"><b>Polêmicas:</b></div>
								<p>&nbsp;&nbsp;&nbsp;Doria começou o seu governo numa guerra contra grafites e pintou muros da cidade. Em uma ação desastrosa, que incluiu a demolição de um prédio com pessoas dentro, Doria afirmou que \"a cracolândia acabou\". Campeão de viagens, Doria disse que consegue administrar a cidade pela internet. No lançamento do programa Alimentos Para Todos, João Doria anunciou a farinata, feita a partir de alimentos próximos da data de vencimento, como um \"alimento completo\" para famílias carentes. O produto ganhou o apelido de \"ração humana\", e o governo voltou atrás dizendo que se tratava de um suplemento alimentar.<br></p>
								<div class=\"descricao6\"><b>Status Ficha Limpa: Pendente.</b></div>
							</div>
						</div>
					</div>
					<div id=\"popup20\" class=\"overlay\">
						<div class=\"popup3\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							<div class=\"descricao7\"><b>Ideologias:</b></div>
								<p>&nbsp;&nbsp;&nbsp;Tem política intensiva de privatizações e parcerias público-privadas. Apoia a união de pessoas do mesmo sexo, a reforma tributária, liberação do Uber, doação de empresas para campanhas eleitorais, redução da maioridade penal e desarmamento e se mantendo contra o aborto, IPTU Progressivo, pedágio urbano, ideologia de gênero e a liberação das drogas. Se diz contra qualquer proposta de anistia de caixa 2 praticado em campanhas eleitorais.</p>
								<div class=\"descricao7\"><b>Propostas de Campanha:</b></div>
								<p>&nbsp;&nbsp;&nbsp;Se destaca em áreas como Educação, Saúde, Mobilidade Urbana e Finanças.</p>
							</div>
						</div>
					</div>
					<div id=\"popup21\" class=\"overlay\">
						<div class=\"popup3\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
								<div class=\"descricao7\"><b>Geraldo Alckmin</b></div>
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
					<div id=\"popup22\" class=\"overlay\">
						<div class=\"popup3\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
								<div class=\"descricao7\"><b>Processos:</b></div>
								<p>&nbsp;&nbsp;&nbsp;Suas contas já foram rejeitadas pela comissão de fiscalização e controle da Assembleia legislativa paulista em 2004. Entre outros, os principais motivos encontrados estão um saldo acumulado de R$ 209 mi dos recursos do FUNDEF que jamais foram investidos na educação e cujo destino se desconhece. O governador de São Paulo, Geraldo Alckmin do PSDB, foi citado em delação premiada por executivos do grupo Odebrecht, segundo os delatores, Alckmin recebeu mais de R$ 10 milhões de reais da empreiteira via caixa dois, para as suas campanhas ao Governo do Estado de 2010 e 2014, segundo a delação homologada pelo Supremo Tribunal Federal.</p>
								<div class=\"descricao7\"><b>Polêmicas:</b></div>
								<p>&nbsp;&nbsp;&nbsp;Geraldo Alckmin foi a público dizer que várias empresas e autarquias estaduais sustentavam sigilos de informações, embora sejam assegurados pela Lei de Acesso à Informação. Em entrevista, Geraldo Alckmin declarou que os R$43 milhões gastos com publicidade sem amparo legal seria um \"erro formal\". \"Investigações do Ministério Público apontaram ilegalidade na intermediação de verbas de publicidade da instituição para favorecer aliados do governo\" (de Geraldo Alckmin). Tentou fazer uma reforma do sistema educacional sem nenhum diálogo com a sociedade, o que terminou com escolas ocupadas e alunos agredidos por policiais militares. <br></p>
								<div class=\"descricao6\"><b>Status Ficha Limpa: Pendente.</b></div>
							</div>
						</div>
					</div>
					<div id=\"popup23\" class=\"overlay\">
						<div class=\"popup3\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
								<div class=\"descricao7\"><b>Ideologias:</b></div>
								<p>&nbsp;&nbsp;&nbsp;Apoia as reformas econômicas, reforma da previdência e a união civil homossexual. É contra ideologia de gênero, a redução da maioridade penal, a legalização das drogas e o aborto. Se diz contra aumento de impostos.</p>
								<div class=\"descricao7\"><b>Propostas de Campanha:</b></div>
								<p>&nbsp;&nbsp;&nbsp;Educação: ampliar a formação continuada de professores do Ensino Fundamental e Médio, ampliar as escolas em tempo integral. Saúde: expandir a rede de Ambulatórios de Especialidades Médicas, ampliar o programa de reforma e modernização da rede de hospitais estaduais, criar novas Unidades para Tratamento de Dependentes de Álcool e Drogas. Segurança Pública: reforçar e ampliar o contingente policial, dar sequência à desativação das carceragens, transferindo presos para unidades prisionais. Pretende reforçar a defesa do ajuste fiscal, que considera essencial para conquistar o apoio do mercado financeiro. Gerar mais empregos e aumentar a renda.</p>
							</div>
						</div>
					</div>
					<div id=\"popup42\" class=\"overlay\">
						<div class=\"popup3\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
								<div class=\"descricao7\"><b>Aécio Neves</b></div>
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
					<div id=\"popup43\" class=\"overlay\">
						<div class=\"popup3\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
								<div class=\"descricao7\"><b>Processos:</b></div>
								<p>&nbsp;&nbsp;&nbsp;Em 2 de junho de 2017, o Procurador-Geral da República, Rodrigo Janot, denunciou Aécio Neves ao Supremo Tribunal Federal pelos crimes de corrupção passiva e obstrução da Justiça. Na denúncia, o Procurador-Geral da República pede que Aécio e sua irmã Andrea sejam condenados a pagar R$ 6 milhões a título de reparação por danos morais decorrentes de corrupção (R$ 4 milhões) e reparação por danos morais (R$2 milhões) causados por suas condutas. A denúncia é baseada nas investigações da operação Patmos. Eles foram citados nas delações premiadas de executivos da JBS.</p>
								<div class=\"descricao7\"><b>Polêmicas:</b></div>
								<p>&nbsp;&nbsp;&nbsp;Em 2011, durante seu primeiro ano como senador, Aécio Neves teve a carteira de habilitação apreendida por estar com o documento vencido e por se recusar a fazer o teste do bafômetro numa blitz no Leblon, na Zona Sul do Rio de Janeiro. Em 2015, uma reportagem da Folha de S. Paulo apontou que aeronaves de Minas Gerais foram utilizadas em deslocamentos de políticos, famosos, empresários e outras pessoas de fora da administração pública a pedido de Aécio Neves, que governou o estado entre 2003 e 2010. Ao todo, foram 198 viagens durante os mandatos do político mineiro. Em 2014, durante uma entrevista ao programa Roda Viva, da TV Cultura, Aécio Neves negou ser usuário de cocaína, boato que o acompanha há anos. De acordo com o senador afastado, seus opositores espalharam essa informação na internet no intuito de atingi-lo.<br></p>
								<div class=\"descricao6\"><b>Status Ficha Limpa: Pendente.</b></div>
							</div>
						</div>
					</div>
					<div id=\"popup44\" class=\"overlay\">
						<div class=\"popup3\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
								<div class=\"descricao7\"><b>Ideologias:</b></div>
								<p>&nbsp;&nbsp;&nbsp;Defende a democracia, a universalização da educação básica, dos 4 aos 17 anos, a vinculação das remunerações de professores à melhoria da aprendizagem dos alunos, com salário inicial atrativo e uma política nacional de formação de professores, cotas raciais para afro-brasileiros em instituições de ensino, união de pessoas do mesmo sexo, criminalização da homofobia, reforma tributária, reforma da previdência e redução da maioridade penal. E sendo contra aborto, intervenções militares e a legalização de drogas.</p>
								<div class=\"descricao7\"><b>Propostas de Campanha:</b></div>
								<p>&nbsp;&nbsp;&nbsp;Em seu programa de governo, Aécio propõe aprimorar a legislação para combater os crimes de colarinho branco. Para reprimir a corrupção, o candidato propõe fazer a capacitação de agentes públicos. O programa de governo do candidato defende o retorno do chamado tripé macroeconômico: inflação no centro da meta, superávit primário e câmbio flutuante. Conduzir a política externa com base nos princípios da moderação e da independência e prevalência dos interesses brasileiros, uma reforma da segurança pública em parceria com estados e municípios e a revisão da legislação penal.</p>
							</div>
						</div>
					</div>
					<div id=\"popup45\" class=\"overlay\">
						<div class=\"popup3\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
							<div class=\"descricao7\"><b>Lula</b></div>
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
					<div id=\"popup46\" class=\"overlay\">
						<div class=\"popup2\">
							<a class=\"close\" href=\"#\">Voltar</a>
							<div class=\"content\">
								<div class=\"descricao7\"><b>Processos:</b></div>
								<p>&nbsp;&nbsp;&nbsp;É réu em cinco ações penais, Três das quais estão no âmbito da Operação Lava Jato. Ele é o principal suspeito do maior roubo cometido no país: Lula foi considerado culpado de corrupção passiva e lavagem de dinheiro. Condenado a nove anos e seis meses de prisão. A admirável trajetória do sindicalista nordestino eleito presidente e líder da esquerda latino-americana ganha um novo e simbólico capítulo: a de primeiro ex-presidente condenado por corrupção.</p>
								<div class=\"descricao7\"><b>Polêmicas:</b></div>
								<p>&nbsp;&nbsp;&nbsp;Segundo a investigação a construtora OAS, investigada na Operação Lava Jato, teria reservado para a família do petista um apartamento triplex no Guarujá, e pagado, ainda segundo a investigação, por uma reforma estrutural no imóvel no valor de 777 mil reais. Os promotores apuram também se a construtora usou outros apartamentos no mesmo prédio para lavar dinheiro ou beneficiar outras pessoas indevidamente. Em fevereiro do mesmo ano Sérgio Moro, juiz federal que conduz os processos da Operação Lava Jato, autorizou a abertura de inquérito para que a Polícia Federal investigue o Sítio Santa Bárbara, em Atibaia, usado pelo ex-presidente. A família de Lula usa frequentemente o sítio, que foi reformado em 2011. O MPF suspeita que as empreiteiras OAS e Odebrecht tenham realizado obras na propriedade rural como compensação por contratos com o governo. Segundo a investigação, a reforma teria custado aproximadamente 500 mil reais. De acordo com O Estado de S. Paulo, a empreiteira OAS pagou em dinheiro vivo os móveis e eletrodomésticos da cozinha e da área de serviço do sítio, e ainda segundo o jornal o total comprado para o sítio foi de 180 mil reais. Sobre o sítio em Atibaia, o Instituto Lula afirmou, em nota, que o ex-presidente Lula nunca escondeu que frequenta em dias de descanso o sítio Santa Bárbara, que pertence a amigos dele e de sua família. O instituto afirma que não há nada ilegal nestes fatos, que só eles não servem para vincular Lula a qualquer espécie de suspeita ou investigação.<br></p>
								<div class=\"descricao6\"><b>Status Ficha Limpa: Pendente.</b></div>
							</div>
						</div>
					</div>
					<div id=\"popup47\" class=\"overlay\">
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
			$result = mysql_query("SELECT * FROM `bd` WHERE Partido = 'PPP' and id = '$id'");

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