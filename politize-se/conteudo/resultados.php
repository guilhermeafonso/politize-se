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
		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    	<script type="text/javascript">
			google.charts.load('current', {'packages':['corechart']});
			google.charts.setOnLoadCallback(drawChart);

			function drawChart() {

			var data = google.visualization.arrayToDataTable([
			['Task', 'Licao1'],
			
				 <?php
					$host = "localhost";
					$user = "root";
					$pass = "";
					$db = "politizese";
					$x = 0;
					$conexao = @mysql_connect($host, $user, $pass) or die(mysql_error());
					@mysql_select_db($db) or die(mysql_error());

					$query = "SELECT Licao1, COUNT(*) as number FROM bd GROUP BY Licao1;";

 					$result = mysql_query($query);  
					if (mysql_num_rows($result) > 0) {
						while($row = mysql_fetch_assoc($result)) {
							$x = $x +1;
							echo "['".$row['Licao1']."', ".$row['number']."]";
							if ($x < mysql_num_rows($result)){
								echo ',';
							}
						}
					}
				
				?>
			]);  
			var options = {
				title: 'Lição 1: Espectro econômico',
				titleTextStyle: {
					color: '#363636',
					fontSize: 20,
					fontName: 'courier',
					bold: true,
					italic: false
				},
				pieHole: 0.4,
				pieSliceBorderColor: '#363636',
				pieSliceTextStyle: {color: '#363636'},
				backgroundColor: '#7FD7A2',
				colors: ['#FFFFCC', '#FFFF99', '#FFFF66','#FFFF33','#FFFF00','#CCCC00']
			};
			var chart = new google.visualization.PieChart(document.getElementById('piechart1'));
			chart.draw(data, options);
		}
    	</script>
    	<script type="text/javascript">
			google.charts.load('current', {'packages':['corechart']});
			google.charts.setOnLoadCallback(drawChart);

			function drawChart() {

			var data = google.visualization.arrayToDataTable([
			['Task', 'Licao2'],
			
				 <?php
					$host = "localhost";
					$user = "root";
					$pass = "";
					$db = "politizese";
					$x = 0;
					$conexao = @mysql_connect($host, $user, $pass) or die(mysql_error());
					@mysql_select_db($db) or die(mysql_error());

					$query = "SELECT Licao2, COUNT(*) as number FROM bd GROUP BY Licao2;";  
 					$result = mysql_query($query);  
					if (mysql_num_rows($result) > 0) {
						while($row = mysql_fetch_assoc($result)) {
							$x = $x +1;
							echo "['".$row['Licao2']."', ".$row['number']."]";
							if ($x < mysql_num_rows($result)){
								echo ',';
							}
						}
					}
				?>
			]);  
			var options = {
				title: 'Lição 2: Espectro social',
				titleTextStyle: {
					color: '#363636',
					fontSize: 20,
					fontName: 'courier',
					bold: true,
					italic: false
				},
				pieHole: 0.4,
				pieSliceBorderColor: '#363636',
				pieSliceTextStyle: {color: '#363636'},
				backgroundColor: '#7FD7A2',
				colors: ['#B0E0E6', '#00BFFF','#4682B4','#E6E6FA']
			};
			var chart = new google.visualization.PieChart(document.getElementById('piechart2'));
			chart.draw(data, options);
		}
    	</script>
    	<script type="text/javascript">
			google.charts.load('current', {'packages':['corechart']});
			google.charts.setOnLoadCallback(drawChart);

			function drawChart() {

			var data = google.visualization.arrayToDataTable([
			['Task', 'Licao3'],
			
				 <?php
					$host = "localhost";
					$user = "root";
					$pass = "";
					$db = "politizese";
					$x = 0;
					$conexao = @mysql_connect($host, $user, $pass) or die(mysql_error());
					@mysql_select_db($db) or die(mysql_error());

					$query = "SELECT Licao3, COUNT(*) as number FROM bd GROUP BY Licao3;";  
 					$result = mysql_query($query);  
					if (mysql_num_rows($result) > 0) {
						while($row = mysql_fetch_assoc($result)) {
							$x = $x +1;
							echo "['".$row['Licao3']."', ".$row['number']."]";
							if ($x < mysql_num_rows($result)){
								echo ',';
							}
						}
					}
				?>
			]);  
			var options = {
				title: 'Lição 3: Modelos de governo',
				titleTextStyle: {
					color: '#363636',
					fontSize: 20,
					fontName: 'courier',
					bold: true,
					italic: false
				},
				pieHole: 0.4,
				pieSliceBorderColor: '#363636',
				pieSliceTextStyle: {color: '#363636'},
				backgroundColor: '#7FD7A2',
				colors: ['#BC8F8F', '#DB7093','#D8BFD8']
			};
			var chart = new google.visualization.PieChart(document.getElementById('piechart3'));
			chart.draw(data, options);
		}
    	</script>
    	<script type="text/javascript">
			google.charts.load('current', {'packages':['corechart']});
			google.charts.setOnLoadCallback(drawChart);

			function drawChart() {

			var data = google.visualization.arrayToDataTable([
			['Task', 'Licao4'],
			
				 <?php
					$host = "localhost";
					$user = "root";
					$pass = "";
					$db = "politizese";
					$x = 0;
					$conexao = @mysql_connect($host, $user, $pass) or die(mysql_error());
					@mysql_select_db($db) or die(mysql_error());

					$query = "SELECT Licao4, COUNT(*) as number FROM bd GROUP BY Licao4;";  
 					$result = mysql_query($query);  
					if (mysql_num_rows($result) > 0) {
						while($row = mysql_fetch_assoc($result)) {
							$x = $x +1;
							echo "['".$row['Licao4']."', ".$row['number']."]";
							if ($x < mysql_num_rows($result)){
								echo ',';
							}
						}
					}
				?>
			]);  
			var options = {
				title: 'Lição 4: Sistemas político-econômicos',
				titleTextStyle: {
					color: '#363636',
					fontSize: 20,
					fontName: 'courier',
					bold: true,
					italic: false
				},
				pieHole: 0.4,
				pieSliceBorderColor: '#363636',
				pieSliceTextStyle: {color: '#363636'},
				backgroundColor: '#7FD7A2',
				colors: ['#D8BFD8', '#9932CC']
			};
			var chart = new google.visualization.PieChart(document.getElementById('piechart4'));
			chart.draw(data, options);
		}
    	</script>
    	<script type="text/javascript">
			google.charts.load('current', {'packages':['corechart']});
			google.charts.setOnLoadCallback(drawChart);

			function drawChart() {

			var data = google.visualization.arrayToDataTable([
			['Task', 'Licao5'],
			
				 <?php
					$host = "localhost";
					$user = "root";
					$pass = "";
					$db = "politizese";
					$x = 0;
					$conexao = @mysql_connect($host, $user, $pass) or die(mysql_error());
					@mysql_select_db($db) or die(mysql_error());

					$query = "SELECT Licao5, COUNT(*) as number FROM bd GROUP BY Licao5;";  
 					$result = mysql_query($query);  
					if (mysql_num_rows($result) > 0) {
						while($row = mysql_fetch_assoc($result)) {
							$x = $x +1;
							echo "['".$row['Licao5']."', ".$row['number']."]";
							if ($x < mysql_num_rows($result)){
								echo ',';
							}
						}
					}
				?>
			]);  
			var options = {
				title: 'Lição 5: Religião e política',
				titleTextStyle: {
					color: '#363636',
					fontSize: 20,
					fontName: 'courier',
					bold: true,
					italic: false
				},
				pieHole: 0.4,
				pieSliceBorderColor: '#363636',
				pieSliceTextStyle: {color: '#363636'},
				backgroundColor: '#7FD7A2',
				colors: ['#FFA07A', '#FFDAB9','#FF7F50','#E9967A']
			};
			var chart = new google.visualization.PieChart(document.getElementById('piechart5'));
			chart.draw(data, options);
		}
    	</script>
    	<script type="text/javascript">
			google.charts.load('current', {'packages':['corechart']});
			google.charts.setOnLoadCallback(drawChart);

			function drawChart() {

			var data = google.visualization.arrayToDataTable([
			['Task', 'Licao6'],
			
				 <?php
					$host = "localhost";
					$user = "root";
					$pass = "";
					$db = "politizese";
					$x = 0;
					$conexao = @mysql_connect($host, $user, $pass) or die(mysql_error());
					@mysql_select_db($db) or die(mysql_error());

					$query = "SELECT Licao6, COUNT(*) as number FROM bd GROUP BY Licao6;";  
 					$result = mysql_query($query);  
					if (mysql_num_rows($result) > 0) {
						while($row = mysql_fetch_assoc($result)) {
							$x = $x +1;
							echo "['".$row['Licao6']."', ".$row['number']."]";
							if ($x < mysql_num_rows($result)){
								echo ',';
							}
						}
					}
				?>
			]);  
			var options = {
				title: 'Lição 6: Voto eleitoral',
				titleTextStyle: {
					color: '#363636',
					fontSize: 20,
					fontName: 'courier',
					bold: true,
					italic: false
				},
				pieHole: 0.4,
				pieSliceBorderColor: '#363636',
				pieSliceTextStyle: {color: '#363636'},
				backgroundColor: '#7FD7A2',
				colors: ['#808080','#DCDCDC']
			};
			var chart = new google.visualization.PieChart(document.getElementById('piechart6'));
			chart.draw(data, options);
		}
    	</script>
    	<script type="text/javascript">
			google.charts.load('current', {'packages':['corechart']});
			google.charts.setOnLoadCallback(drawChart);

			function drawChart() {

			var data = google.visualization.arrayToDataTable([
			['Task', 'Candidato'],
			
				 <?php
					$host = "localhost";
					$user = "root";
					$pass = "";
					$db = "politizese";
					$x = 0;
					$conexao = @mysql_connect($host, $user, $pass) or die(mysql_error());
					@mysql_select_db($db) or die(mysql_error());

					$query = "SELECT Candidato, COUNT(*) as number FROM bd GROUP BY Candidato;";  
 					$result = mysql_query($query);  
					if (mysql_num_rows($result) > 0) {
						while($row = mysql_fetch_assoc($result)) {
							$x = $x +1;
							echo "['".$row['Candidato']."', ".$row['number']."]";
							if ($x < mysql_num_rows($result)){
								echo ',';
							}
						}
					}
				?>
			]);  
			var options = {
				title: 'Candidatos a presidência:',
				titleTextStyle: {
					color: 'white',
					fontSize: 30,
					fontName: 'courier',
					bold: true,
					italic: false
				},
				pieHole: 0.4,
				pieSliceBorderColor: '#363636',
				pieSliceTextStyle: {color: '#363636'},
				backgroundColor: '#7FD7A2',
				colors: ['#2E8B57','#45AC72','#71C495','#8ED7AE','#63E1B7','#55907C','#53BAA9','#89D7CA','#82E896','#56F575','#ACF0BA','#639B6E']
			};
			var chart = new google.visualization.PieChart(document.getElementById('piechart7'));
			chart.draw(data, options);
		}
    	</script>
		<script>
		!function(e,n,t){function r(e,n){return typeof e===n}function o(){var e,n,t,o,s,i,a;for(var l in C)if(C.hasOwnProperty(l)){if(e=[],n=C[l],n.name&&(e.push(n.name.toLowerCase()),n.options&&n.options.aliases&&n.options.aliases.length))for(t=0;t<n.options.aliases.length;t++)e.push(n.options.aliases[t].toLowerCase());for(o=r(n.fn,"function")?n.fn():n.fn,s=0;s<e.length;s++)i=e[s],a=i.split("."),1===a.length?Modernizr[a[0]]=o:(!Modernizr[a[0]]||Modernizr[a[0]]instanceof Boolean||(Modernizr[a[0]]=new Boolean(Modernizr[a[0]])),Modernizr[a[0]][a[1]]=o),g.push((o?"":"no-")+a.join("-"))}}function s(e){var n=_.className,t=Modernizr._config.classPrefix||"";if(x&&(n=n.baseVal),Modernizr._config.enableJSClass){var r=new RegExp("(^|\\s)"+t+"no-js(\\s|$)");n=n.replace(r,"$1"+t+"js$2")}Modernizr._config.enableClasses&&(n+=" "+t+e.join(" "+t),x?_.className.baseVal=n:_.className=n)}function i(e,n){return!!~(""+e).indexOf(n)}function a(){return"function"!=typeof n.createElement?n.createElement(arguments[0]):x?n.createElementNS.call(n,"http://www.w3.org/2000/svg",arguments[0]):n.createElement.apply(n,arguments)}function l(e){return e.replace(/([a-z])-([a-z])/g,function(e,n,t){return n+t.toUpperCase()}).replace(/^-/,"")}function f(e,n){return function(){return e.apply(n,arguments)}}function u(e,n,t){var o;for(var s in e)if(e[s]in n)return t===!1?e[s]:(o=n[e[s]],r(o,"function")?f(o,t||n):o);return!1}function d(e){return e.replace(/([A-Z])/g,function(e,n){return"-"+n.toLowerCase()}).replace(/^ms-/,"-ms-")}function c(){var e=n.body;return e||(e=a(x?"svg":"body"),e.fake=!0),e}function p(e,t,r,o){var s,i,l,f,u="modernizr",d=a("div"),p=c();if(parseInt(r,10))for(;r--;)l=a("div"),l.id=o?o[r]:u+(r+1),d.appendChild(l);return s=a("style"),s.type="text/css",s.id="s"+u,(p.fake?p:d).appendChild(s),p.appendChild(d),s.styleSheet?s.styleSheet.cssText=e:s.appendChild(n.createTextNode(e)),d.id=u,p.fake&&(p.style.background="",p.style.overflow="hidden",f=_.style.overflow,_.style.overflow="hidden",_.appendChild(p)),i=t(d,e),p.fake?(p.parentNode.removeChild(p),_.style.overflow=f,_.offsetHeight):d.parentNode.removeChild(d),!!i}function m(n,r){var o=n.length;if("CSS"in e&&"supports"in e.CSS){for(;o--;)if(e.CSS.supports(d(n[o]),r))return!0;return!1}if("CSSSupportsRule"in e){for(var s=[];o--;)s.push("("+d(n[o])+":"+r+")");return s=s.join(" or "),p("@supports ("+s+") { #modernizr { position: absolute; } }",function(e){return"absolute"==getComputedStyle(e,null).position})}return t}function h(e,n,o,s){function f(){d&&(delete z.style,delete z.modElem)}if(s=r(s,"undefined")?!1:s,!r(o,"undefined")){var u=m(e,o);if(!r(u,"undefined"))return u}for(var d,c,p,h,v,y=["modernizr","tspan","samp"];!z.style&&y.length;)d=!0,z.modElem=a(y.shift()),z.style=z.modElem.style;for(p=e.length,c=0;p>c;c++)if(h=e[c],v=z.style[h],i(h,"-")&&(h=l(h)),z.style[h]!==t){if(s||r(o,"undefined"))return f(),"pfx"==n?h:!0;try{z.style[h]=o}catch(g){}if(z.style[h]!=v)return f(),"pfx"==n?h:!0}return f(),!1}function v(e,n,t,o,s){var i=e.charAt(0).toUpperCase()+e.slice(1),a=(e+" "+b.join(i+" ")+i).split(" ");return r(n,"string")||r(n,"undefined")?h(a,n,o,s):(a=(e+" "+E.join(i+" ")+i).split(" "),u(a,n,t))}function y(e,n,r){return v(e,t,t,n,r)}var g=[],C=[],w={_version:"3.3.1",_config:{classPrefix:"",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(e,n){var t=this;setTimeout(function(){n(t[e])},0)},addTest:function(e,n,t){C.push({name:e,fn:n,options:t})},addAsyncTest:function(e){C.push({name:null,fn:e})}},Modernizr=function(){};Modernizr.prototype=w,Modernizr=new Modernizr;var _=n.documentElement,x="svg"===_.nodeName.toLowerCase(),S="Moz O ms Webkit",b=w._config.usePrefixes?S.split(" "):[];w._cssomPrefixes=b;var E=w._config.usePrefixes?S.toLowerCase().split(" "):[];w._domPrefixes=E;var P={elem:a("modernizr")};Modernizr._q.push(function(){delete P.elem});var z={style:P.elem.style};Modernizr._q.unshift(function(){delete z.style}),w.testAllProps=v,w.testAllProps=y,Modernizr.addTest("backgroundcliptext",function(){return y("backgroundClip","text")}),o(),s(g),delete w.addTest,delete w.addAsyncTest;for(var N=0;N<Modernizr._q.length;N++)Modernizr._q[N]();e.Modernizr=Modernizr}(window,document);
		</script>
		<title>Resultados</title>
	</head>
	<body>
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
					<div class="step">
						<span><b>Seu perfil</b></span>
					</div>
					<div class="step current">
						<span><b>Resultados</b></span>
					</div>
				</div>
				<div class="line"></div>
			</div>
			<div class="tema"><b>Graficos de resultados</b></div><br>
			<div class="row">
				<div class="col-md-6">
					<div id="piechart1" style="width: 600px; height: 300px; margin: auto; display: block"></div>
					<div id="piechart2" style="width: 600px; height: 300px; margin: auto; display: block"></div>
					<div id="piechart3" style="width: 600px; height: 300px; margin: auto; display: block"></div>	
				</div>
				<div class="col-md-6">
					<div id="piechart4" style="width: 600px; height: 300px; margin: auto; display: block"></div>
					<div id="piechart5" style="width: 600px; height: 300px; margin: auto; display: block"></div>
					<div id="piechart6" style="width: 600px; height: 300px; margin: auto; display: block"></div>
				</div>
			</div>
			<div id="piechart7" style="width: 1000px; height: 500px; margin: auto; display: block"></div>
		</div>		
			<a href="../index.php" class="botao1" role="button"><b>Finalizar!</b></a>
		</div>
	    <div class="rodape">
			<div class="green"></div>
			<div class="blue"></div>
			<div class="yellow"></div>
		</div>
	</body>
</html>