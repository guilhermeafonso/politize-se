function validar(){
	var nome = document.getElementById("txt_nome").value //seletor
	var email = $("#txt_email").val() //seletor
	if (nome=="") {
		//alert("Informe o nome")
		document.getElementById("mensagem").innerHTML= "<b>Informe seu nome</b>"
		//$("#mensagem").html("<b>Informe o nome</b>") jquery
		document.getElementById("txt_nome").style.borderColor= "red"
		//$("#mensagem").css("border-color", "red") jquery
		return false
	}
	if (email=="") {
		alert("Informe o email")
		return false
	}
	return true
}	
function calcula_imc(){
	var altura = document.imcForm.altura.value;
	var peso = document.imcForm.peso.value;
	var quadrado = (altura * altura);
	var calculo = (peso/quadrado);
		if(calculo<18.5){
			alert("Seu peso está abaixo da média. Seu índice: " + calculo);
		}
		else if(calculo>=18.5 && calculo<24.9){
			alert("Seu peso está dentro da média. Seu índice: " + calculo);
		}
		else if(calculo>=25 && calculo<29.9) {
			alert("Seu peso está acima da média. Seu índice: " + calculo);
		}
		else if(calculo>=30 && calculo<39.9) {
			alert("Seu peso indica obesidade. Seu índice: " + calculo);
		}
		else if (calculo>40)
			alert("Seu peso indica obesidade grave. Seu indice: " + calculo);
		}
function mostraTexto()
	{document.getElementById('divTeste').innerHTML = 'Teste inserindo texto.';}