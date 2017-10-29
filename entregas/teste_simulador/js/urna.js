var candidatos = new Array();
var informacoesTela = document.getElementsByClassName("informacoesTela");
var ordemVotacao;
var totalDigitos;
var tecladoZeroAteNove;
var botaoBranco;
var botaoCorrige;
var botaoConfirma;
var i;

/*Função para criar um novo objeto (NOVOCANDIDATO).*/
function novoCandidato(nome,numero,partido,foto,profissao,vice){
	this.nome = nome;
	this.numero = numero;
	this.partido = partido;
	this.foto = foto;
	this.profissao = profissao;
	this.vice = vice;
}
/*Lista de candidatos a eleição.*/
function cadastros(){
	candidatos[0] = new novoCandidato("João Doria", "45", "PSDB", "imagens/joao.png", "presidente", "imagens/thiago_lider.png");
	candidatos[1] = new novoCandidato("Geraldo Alckmin", "05", "PSDB", "imagens/geraldo.png", "presidente", "imagens/cristian.png");
	candidatos[2] = new novoCandidato("Aécio Neves", "02", "PSDB", "imagens/aecio.png", "presidente", "imagens/carlos_gom.png");
	candidatos[3] = new novoCandidato("Lula", "13", "PT", "imagens/lula.png", "presidente", "imagens/luis_chato.png");
	candidatos[4] = new novoCandidato("Fernando Haddad", "03", "PT", "imagens/fernando.png", "presidente",  "imagens/jose_da_silva.png");
	candidatos[5] = new novoCandidato("Marina Silva", "40", "Rede Sustentabilidade", "imagens/marina.png", "presidente", "imagens/camila_pereira.png");
	candidatos[6] = new novoCandidato("Bolsonaro", "20", "PSC", "imagens/bolsonaro.png", "presidente", "imagens/renato_seila.png");
	candidatos[7] = new novoCandidato("Ciro Gomes", "12", "PDT", "imagens/ciro.png", "presidente", "imagens/edison_barros.png");
	candidatos[8] = new novoCandidato("Alvaro Dias", "43", "PV", "imagens/alvaro.png", "presidente", "imagens/tomaz_enrique.png");
	candidatos[9] = new novoCandidato("Joaquim Barbosa", "07", "Não Tem", "imagens/barbosa.png", "presidente", "imagens/felipe_gomes.png");
}
/*Função para iniciar a votação*/
function inicio(){
	ordemVotacao = "inicio";
	tecladoZeroAteNove = "disponivel";
	botaoBranco = "disponivel";
	botaoCorrige = "disponivel";
	botaoConfirma = "bloqueado";
	corrige();
	ordemVotacao = definirOrdem(ordemVotacao);
	totalDigitos = definirTotalDigitos(ordemVotacao);
	listaDeCandidatos();
	mostrarCargo();
}
/*Função para definir a ordem de votação*/
function definirOrdem(ordem){
	if(ordem == "inicio"){
		return "presidente";
	}
	else if(ordem == "presidente"){
		return "fim";
	}
}
/*Função para definir o total de digitos para o cargo*/
function definirTotalDigitos(ordem){
	if(ordem == "vereador"){
		return 5;
	}
	else if(ordem == "presidente"){
		return 2;
	}
}
/*Função para mostra os candidatos para cada vaga*/
function listaDeCandidatos(){
	document.getElementById("candidatos").innerHTML= "";
	for(i = 0; i < candidatos.length; i++){
		if(candidatos[i].profissao == ordemVotacao){
			document.getElementById("candidatos").innerHTML += "<p><span>Nome:</span> " + candidatos[i].nome + "<br/><span>Número:</span> " +candidatos[i].numero + "</p>";
		}
	}
}
/*Função para mostrar o cargo para ser votoado.*/
function mostrarCargo(){
	informacoesTela[2].style.display = "block";
	informacoesTela[3].style.display = "block";
	informacoesTela[3].innerHTML = ordemVotacao;
	informacoesTela[7].style.display = "block";
}
/*Função para mostar os números digitados*/
function digito(n){
	if(tecladoZeroAteNove == "disponivel"){
		informacoesTela[7].style.display = "block";
		document.getElementById("numero").innerHTML += n;
		verificarCandidato();
	}
}
/*Função para verificar se existe candidato para o número digitado.*/
function verificarCandidato(){
	var numero = document.getElementById("numero").innerHTML;
	var candidatoExiste = -1;
	for(i = 0; i < candidatos.length; i++){
		if((candidatos[i].profissao == ordemVotacao) && (candidatos[i].numero == numero)){
			candidatoExiste = i; 
			tecladoZeroAteNove = "bloqueado";
			mostrarCandidato(candidatoExiste);
			break;
		}
	}
	if((candidatoExiste == -1) && (numero.length == totalDigitos)){
		tecladoZeroAteNove = "bloqueado";
		votoNulo();
	}
	else if (candidatoExiste != -1){
	}
}
/*Função para mostra NOME, PARTIDO E FOTO do candidato na tela.*/
function mostrarCandidato(n){
	informacoesTela[8].style.display = "block";
	informacoesTela[8].innerHTML = "Nome:<span>" + candidatos[n].nome + "<span>";
	informacoesTela[9].style.display = "block";
	informacoesTela[9].innerHTML = "Partido:<span>" + candidatos[n].partido + "<span>";
	informacoesTela[0].style.display = "block";
	informacoesTela[0].src = candidatos[n].foto;
	informacoesTela[10].style.display = "block";
	botaoConfirma = "disponivel";
	if(candidatos[n].vice != "nao"){
		informacoesTela[1].style.display = "block";
		informacoesTela[1].src = candidatos[n].vice;
	}
}
/*Função para Mostrar voto Nulo.*/
function votoNulo(){
	corrige();
	tecladoZeroAteNove = "bloqueado";
	informacoesTela[7].style.display = "none";
	informacoesTela[5].style.display = "block";
	informacoesTela[10].style.display = "block";
	botaoConfirma = "disponivel";
}
/*Função para Mostar voto Branco.*/
function votoBranco(){
	if(botaoBranco == "disponivel"){
		corrige();
		tecladoZeroAteNove = "bloqueado";
		informacoesTela[7].style.display = "none";
		informacoesTela[4].style.display = "block";
		informacoesTela[10].style.display = "block";
		botaoConfirma = "disponivel";
	}
}
/*Função para limpar a tela e informações.*/
function corrige(){
	if(botaoCorrige == "disponivel"){
		for(i = 0; i < informacoesTela.length; i++){
			informacoesTela[i].style.display = "none";
		}
		document.getElementById("numero").innerHTML = "";
		botaoConfirma = "bloqueado";
		tecladoZeroAteNove = "disponivel";
		mostrarCargo();
	}
}
/*Função para confirmar o voto*/
function confirma(){
	if(botaoConfirma == "disponivel"){
		corrige();
		if( ordemVotacao == "vereador"){
			ordemVotacao = definirOrdem(ordemVotacao);
			totalDigitos = definirTotalDigitos(ordemVotacao);
			listaDeCandidatos();
			mostrarCargo();
		}
		else if(ordemVotacao == "presidente"){
			tecladoZeroAteNove = "bloqueado";
			botaoBranco = "bloqueado";
			botaoCorrige = "bloqueado";
			informacoesTela[2].style.display = "none";
			informacoesTela[3].innerHTML = "";
			informacoesTela[7].style.display = "none";
			informacoesTela[6].style.display = "block";
		}
	}
}
				
	