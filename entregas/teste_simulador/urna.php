<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="shortcut icon" href="imagens/favicon.png" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="js/jquery-3.2.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>
        <script src="js/urna.js"></script>
        <script>
        !function(e,n,t){function r(e,n){return typeof e===n}function o(){var e,n,t,o,s,i,a;for(var l in C)if(C.hasOwnProperty(l)){if(e=[],n=C[l],n.name&&(e.push(n.name.toLowerCase()),n.options&&n.options.aliases&&n.options.aliases.length))for(t=0;t<n.options.aliases.length;t++)e.push(n.options.aliases[t].toLowerCase());for(o=r(n.fn,"function")?n.fn():n.fn,s=0;s<e.length;s++)i=e[s],a=i.split("."),1===a.length?Modernizr[a[0]]=o:(!Modernizr[a[0]]||Modernizr[a[0]]instanceof Boolean||(Modernizr[a[0]]=new Boolean(Modernizr[a[0]])),Modernizr[a[0]][a[1]]=o),g.push((o?"":"no-")+a.join("-"))}}function s(e){var n=_.className,t=Modernizr._config.classPrefix||"";if(x&&(n=n.baseVal),Modernizr._config.enableJSClass){var r=new RegExp("(^|\\s)"+t+"no-js(\\s|$)");n=n.replace(r,"$1"+t+"js$2")}Modernizr._config.enableClasses&&(n+=" "+t+e.join(" "+t),x?_.className.baseVal=n:_.className=n)}function i(e,n){return!!~(""+e).indexOf(n)}function a(){return"function"!=typeof n.createElement?n.createElement(arguments[0]):x?n.createElementNS.call(n,"http://www.w3.org/2000/svg",arguments[0]):n.createElement.apply(n,arguments)}function l(e){return e.replace(/([a-z])-([a-z])/g,function(e,n,t){return n+t.toUpperCase()}).replace(/^-/,"")}function f(e,n){return function(){return e.apply(n,arguments)}}function u(e,n,t){var o;for(var s in e)if(e[s]in n)return t===!1?e[s]:(o=n[e[s]],r(o,"function")?f(o,t||n):o);return!1}function d(e){return e.replace(/([A-Z])/g,function(e,n){return"-"+n.toLowerCase()}).replace(/^ms-/,"-ms-")}function c(){var e=n.body;return e||(e=a(x?"svg":"body"),e.fake=!0),e}function p(e,t,r,o){var s,i,l,f,u="modernizr",d=a("div"),p=c();if(parseInt(r,10))for(;r--;)l=a("div"),l.id=o?o[r]:u+(r+1),d.appendChild(l);return s=a("style"),s.type="text/css",s.id="s"+u,(p.fake?p:d).appendChild(s),p.appendChild(d),s.styleSheet?s.styleSheet.cssText=e:s.appendChild(n.createTextNode(e)),d.id=u,p.fake&&(p.style.background="",p.style.overflow="hidden",f=_.style.overflow,_.style.overflow="hidden",_.appendChild(p)),i=t(d,e),p.fake?(p.parentNode.removeChild(p),_.style.overflow=f,_.offsetHeight):d.parentNode.removeChild(d),!!i}function m(n,r){var o=n.length;if("CSS"in e&&"supports"in e.CSS){for(;o--;)if(e.CSS.supports(d(n[o]),r))return!0;return!1}if("CSSSupportsRule"in e){for(var s=[];o--;)s.push("("+d(n[o])+":"+r+")");return s=s.join(" or "),p("@supports ("+s+") { #modernizr { position: absolute; } }",function(e){return"absolute"==getComputedStyle(e,null).position})}return t}function h(e,n,o,s){function f(){d&&(delete z.style,delete z.modElem)}if(s=r(s,"undefined")?!1:s,!r(o,"undefined")){var u=m(e,o);if(!r(u,"undefined"))return u}for(var d,c,p,h,v,y=["modernizr","tspan","samp"];!z.style&&y.length;)d=!0,z.modElem=a(y.shift()),z.style=z.modElem.style;for(p=e.length,c=0;p>c;c++)if(h=e[c],v=z.style[h],i(h,"-")&&(h=l(h)),z.style[h]!==t){if(s||r(o,"undefined"))return f(),"pfx"==n?h:!0;try{z.style[h]=o}catch(g){}if(z.style[h]!=v)return f(),"pfx"==n?h:!0}return f(),!1}function v(e,n,t,o,s){var i=e.charAt(0).toUpperCase()+e.slice(1),a=(e+" "+b.join(i+" ")+i).split(" ");return r(n,"string")||r(n,"undefined")?h(a,n,o,s):(a=(e+" "+E.join(i+" ")+i).split(" "),u(a,n,t))}function y(e,n,r){return v(e,t,t,n,r)}var g=[],C=[],w={_version:"3.3.1",_config:{classPrefix:"",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(e,n){var t=this;setTimeout(function(){n(t[e])},0)},addTest:function(e,n,t){C.push({name:e,fn:n,options:t})},addAsyncTest:function(e){C.push({name:null,fn:e})}},Modernizr=function(){};Modernizr.prototype=w,Modernizr=new Modernizr;var _=n.documentElement,x="svg"===_.nodeName.toLowerCase(),S="Moz O ms Webkit",b=w._config.usePrefixes?S.split(" "):[];w._cssomPrefixes=b;var E=w._config.usePrefixes?S.toLowerCase().split(" "):[];w._domPrefixes=E;var P={elem:a("modernizr")};Modernizr._q.push(function(){delete P.elem});var z={style:P.elem.style};Modernizr._q.unshift(function(){delete z.style}),w.testAllProps=v,w.testAllProps=y,Modernizr.addTest("backgroundcliptext",function(){return y("backgroundClip","text")}),o(),s(g),delete w.addTest,delete w.addAsyncTest;for(var N=0;N<Modernizr._q.length;N++)Modernizr._q[N]();e.Modernizr=Modernizr}(window,document);
        </script>
        <title>Simulador</title>
    </head>    
<body onload="cadastros()">
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
                        <span><b>Seu perfil</b></span>
                    </div>
                    <div class="step">
                        <span><b>Resultados</b></span>
                    </div>
                    <div class="step current">
                        <span><b>Simulação</b></span>
                    </div>
                </div>
                <div class="line"></div>
            </div>
    <div class="row">
                <div class="col-md-12">
    <div id="inicio">
        <h2>Urna Eletrônica - Simulador</h2>
        <button onclick="inicio()">Iniciar Votação</button>
    </div>
    <div id="listaCandidatos">
        <h2>Candidatos:</h2>
        <div id="candidatos"></div>
    </div>
    <div id="urna">

    <div id="tela">
        <img class="informacoesTela" id="foto" src=""/>
        <img class="informacoesTela" id="vice" src=""/>
        <h5 class="informacoesTela" id="cargo">Seu voto para</h5>
        <h4 class="informacoesTela" id="tipo"></h4>
        <h2 class="informacoesTela" id="branco">VOTO BRANCO!</h2>
        <h2 class="informacoesTela" id="nulo">VOTO NULO!</h2>
        <h1 class="informacoesTela" id="fim">FIM</h1>
        <h2 class="informacoesTela" id="num">Número:<span id="numero"></span></h2>
        <h3 class="informacoesTela" id="nome"></h3>
        <h3 class="informacoesTela" id="partido"></h3>
        <div class="informacoesTela" id="mensagem">
            <p>Aperte a tecla:</p>
            <p>VERDE para <b>CONFIRMAR</b> seu voto.<br/>LARANJA para <b>REINICIAR</b> este voto.</p>
        </div>
    </div>
    <div id="teclado">
        <h2>Justiça<br/>Eleitoral</h2>
        <table id="digitos">
            <tr>
                <td><input type="button" name="bt1" value="1" onclick="digito('1')"/></td>
                <td><input type="button" name="bt2" value="2" onclick="digito('2')"/></td>
                <td><input type="button" name="bt3" value="3" onclick="digito('3')"/></td>
            </tr>
            <tr>
                <td><input type="button" name="bt4" value="4" onclick="digito('4')"/></td>
                <td><input type="button" name="bt5" value="5" onclick="digito('5')"/></td>
                <td><input type="button" name="bt6" value="6" onclick="digito('6')"/></td>
            </tr>
            <tr>
                <td><input type="button" name="bt7" value="7" onclick="digito('7')"/></td>
                <td><input type="button" name="bt8" value="8" onclick="digito('8')"/></td>
                <td><input type="button" name="bt9" value="9" onclick="digito('9')"/></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="button" name="bt0" value="0" onclick="digito('0')"/></td>
                <td></td>
            </tr>
        </table>
        <table id="comandos">
            <tr>
                <td><input type="button" id="branc" name="btbranco" value="BRANCO" onclick="votoBranco()"/></td>
                <td><input type="button" id="corrige" name="btcorrige" value="CORRIGE" onclick="corrige()"/></td>
                <td><input type="button" id="confirma" name="btconfirma" value="CONFIRMA" onclick="confirma()"/></td>
            </tr>
        </table>
    </div>
  </div>
  </div>
  </div>
  </div>
  </div>
            <a href="index.php" class="botao1" role="button"><b>Finalizar!</b></a>
        </div>
  <div class="rodape">
            <div class="green"></div>
            <div class="blue"></div>
            <div class="yellow"></div>
        </div> 

</body>
</html>   